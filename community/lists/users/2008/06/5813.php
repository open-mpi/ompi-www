<?
$subject_val = "Re: [OMPI users] OpenMPI scaling &gt; 512 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 15:47:43 2008" -->
<!-- isoreceived="20080604194743" -->
<!-- sent="Wed, 4 Jun 2008 15:47:32 -0400" -->
<!-- isosent="20080604194732" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI scaling &amp;gt; 512 cores" -->
<!-- id="5717996B-7073-4671-A1A5-1FB014F49DD0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FA0B6D7AD2F82E4EA22697EE4D9DE87131A295_at_mtv-amer001e--3.americas.sgi.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] OpenMPI scaling &gt; 512 cores<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 15:47:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5814.php">Åke Sandgren: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Previous message:</strong> <a href="5812.php">Jeff Squyres: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>In reply to:</strong> <a href="5781.php">Scott Shaw: "[OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5818.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First and foremost: is it possible to upgrade your version of Open  
<br>
MPI?  The version you are using (1.2.2) is rather ancient -- many bug  
<br>
fixes have occurred since then (including TCP wireup issues).  Note  
<br>
that oob_tcp_in|exclude were renamed to be oob_tcp_if_in|exclude in  
<br>
1.2.3 to be symmetric with other &lt;foo&gt;_if_in|exclude params in other  
<br>
components.
<br>
<p>More below.
<br>
<p><p>On Jun 3, 2008, at 1:07 PM, Scott Shaw wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I hope this is the right forum for my questions.  I am running  
</span><br>
<span class="quotelev1">&gt; into
</span><br>
<span class="quotelev1">&gt; a problem when scaling &gt;512 cores on a infiniband cluster which has
</span><br>
<span class="quotelev1">&gt; 14,336 cores. I am new to openmpi and trying to figure out the right
</span><br>
<span class="quotelev1">&gt; -mca options to pass to avoid the &quot;mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connection failed:&quot; on a cluster which has infiniband HCAs and OFED
</span><br>
<span class="quotelev1">&gt; v1.3GA release.  Other MPI implementation like Intel MPI and mvapich
</span><br>
<span class="quotelev1">&gt; work fine using uDAPL or VERBs IB layers for MPI communications.
</span><br>
<p>The OMPI v1.2 series is a bit inefficient in its TCP wireup for  
<br>
control messages -- it creates TCP sockets between all MPI processes.   
<br>
Do you allow enough fd's per process to allow this to occur?
<br>
<p>(this situation is considerably better in the upcoming v1.3 series)
<br>
<p><span class="quotelev1">&gt; I find it difficult to understand which network interface or IB layer
</span><br>
<span class="quotelev1">&gt; being used. When I explicitly state not to use eth0,lo,ib1, or ib1:0
</span><br>
<span class="quotelev1">&gt; interfaces with the cmdline option &quot;-mca oob_tcp_exclude&quot; openmpi will
</span><br>
<span class="quotelev1">&gt; continue to probe these interfaces.  For all MPI traffic openmpi  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev1">&gt; use IB0 which is the 10.148 network. But with debugging enabled I see
</span><br>
<span class="quotelev1">&gt; references trying the 10.149 network which is IB1.  Below is the
</span><br>
<span class="quotelev1">&gt; ifconfig network device output for a compute node.
</span><br>
<p>Just curious: does the oob_tcp_include parameter not work?
<br>
<p><span class="quotelev1">&gt; Questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Is there away to determine which network device is being used and  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; have openmpi fallback to another device? With Intel MPI or HP MPI you
</span><br>
<span class="quotelev1">&gt; can state not to use a fallback device.  I thought &quot;-mca
</span><br>
<span class="quotelev1">&gt; oob_tcp_exclude&quot; would be the correct option to pass but I maybe  
</span><br>
<span class="quotelev1">&gt; wrong.
</span><br>
<p>oob_tcp_in|exclude should be suitable for this purpose.  If they're  
<br>
not working, I'd be surprised (but it could have been a bug that was  
<br>
fixed in a later version...?).  Keep in mind that the &quot;oob&quot; traffic is  
<br>
just control messages -- it's not the actual MPI communication.  That  
<br>
will go over the verbs interfaces.
<br>
<p><span class="quotelev1">&gt; 2. How can I determine infiniband openib device is actually being  
</span><br>
<span class="quotelev1">&gt; used?
</span><br>
<span class="quotelev1">&gt; When running a MPI app I continue to see counters for in/out packets  
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; a tcp level increasing when it should be using the IB RDMA device for
</span><br>
<span class="quotelev1">&gt; all MPI comms over the IB0 or mtcha0 device? OpenMPI was bundled with
</span><br>
<span class="quotelev1">&gt; OFED v1.3 so I am assuming the openib interface should work.  Running
</span><br>
<span class="quotelev1">&gt; ompi_info shows btl_open_* references.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/openmpi-1.2-2/intel/bin/mpiexec -mca
</span><br>
<span class="quotelev1">&gt; btl_openib_warn_default_gid_prefix 0 -mca oob_tcp_exclude
</span><br>
<span class="quotelev1">&gt; eth0,lo,ib1,ib1:0  -mca btl openib,sm,self -machinefile mpd.hosts.$$  
</span><br>
<span class="quotelev1">&gt; -np
</span><br>
<span class="quotelev1">&gt; 1024 ~/bin/test_ompi &lt; input1
</span><br>
<p>The &quot;btl&quot; is the component that controls point-to-point communication  
<br>
in Open MPI.  so if you specify &quot;openib,sm,self&quot;, then Open MPI is  
<br>
definitely using the verbs stack for MPI communication (not a TCP  
<br>
stack).
<br>
<p><span class="quotelev1">&gt; 3. When trying to avoid the &quot;mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connection failed:&quot; message I tried using &quot;-mca btl openib,sm,self&quot;  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; &quot;-mca btl ^tcp&quot; but I still get these error messages.
</span><br>
<p>Unfortunately, these are two different issues -- OMPI always uses TCP  
<br>
for wireup and out-of-band control messages.  That's where you're  
<br>
getting the errors from.  Specifically: giving values for the btl MCA  
<br>
parameter won't affect these messages / errors.
<br>
<p><span class="quotelev1">&gt; In cases with
</span><br>
<span class="quotelev1">&gt; using the &quot;-mca btl openib,sm,self&quot; openmpi will retry to use the IB1
</span><br>
<span class="quotelev1">&gt; (10.149 net) fabric to establish a connection with a node.  What are  
</span><br>
<span class="quotelev1">&gt; my
</span><br>
<span class="quotelev1">&gt; options to avoid these connection failed messages?  I suspect  
</span><br>
<span class="quotelev1">&gt; openmpi is
</span><br>
<span class="quotelev1">&gt; overflowing the tcp buffer on the clients based on large core count of
</span><br>
<span class="quotelev1">&gt; this job since I see lots of tcp buffer errors based on netstat -s
</span><br>
<span class="quotelev1">&gt; output. I reviewed all of the online FAQs and I am not sure what  
</span><br>
<span class="quotelev1">&gt; options
</span><br>
<span class="quotelev1">&gt; to pass to get around this issue.
</span><br>
<p>I think we made this much better in 1.2.5 -- I see notes about this  
<br>
issue in the NEWS file under the 1.2.5 release.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5814.php">Åke Sandgren: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Previous message:</strong> <a href="5812.php">Jeff Squyres: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>In reply to:</strong> <a href="5781.php">Scott Shaw: "[OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5818.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
