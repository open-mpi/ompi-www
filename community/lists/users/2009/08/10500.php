<?
$subject_val = "Re: [OMPI users] explicit routing for multiple network interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 10:44:16 2009" -->
<!-- isoreceived="20090827144416" -->
<!-- sent="Thu, 27 Aug 2009 07:44:05 -0700" -->
<!-- isosent="20090827144405" -->
<!-- name="Nifty Tom Mitchell" -->
<!-- email="niftyompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] explicit routing for multiple network interfaces" -->
<!-- id="20090827144405.GB3272_at_tosh2egg.ca.sanfran.comcast.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f6a174940908250914t31a40452y39386ff06c0198cc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] explicit routing for multiple network interfaces<br>
<strong>From:</strong> Nifty Tom Mitchell (<em>niftyompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-27 10:44:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10501.php">Elvedin Trnjanin: "Re: [OMPI users] VMware and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10499.php">Yann JOBIC: "Re: [OMPI users] Program runs successfully...but with error messages displayed"</a>
<li><strong>In reply to:</strong> <a href="10483.php">Jayanta Roy: "[OMPI users] explicit routing for multiple network interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10555.php">Jeff Squyres: "Re: [OMPI users] explicit routing for multiple network interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Aug 25, 2009 at 09:44:29PM +0530, Jayanta Roy wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Hi,
</span><br>
<span class="quotelev1">&gt;    I am using Openmpi (version 1.2.2) for MPI data transfer using
</span><br>
<span class="quotelev1">&gt;    non-blocking MPI calls like MPI_Isend, MPI_Irecv etc. I am using &quot;--mca
</span><br>
<span class="quotelev1">&gt;    btl_tcp_if_include eth0,eth1&quot; to use both the eth link for data
</span><br>
<span class="quotelev1">&gt;    transfer within 48 nodes.  Now I have added eth2 and eth3 links on the
</span><br>
<span class="quotelev1">&gt;    32 compute nodes. My aim is to share the high speed data within 32
</span><br>
<span class="quotelev1">&gt;    compute nodes through eth2 and eth3. But I can't include this as part
</span><br>
<span class="quotelev1">&gt;    of &quot;mca&quot; as the rest of 16 nodes do not have these additional
</span><br>
<span class="quotelev1">&gt;    interfaces. In MPI/Openmp can one specify explicit routing table within
</span><br>
<span class="quotelev1">&gt;    a set of nodes? Such that I can edit /etc/host for additional hostname
</span><br>
<span class="quotelev1">&gt;    with these new interfaces and add these hosts in the mpi hostfile.
</span><br>
<span class="quotelev1">&gt;    Regards,
</span><br>
<span class="quotelev1">&gt;    Jayanta
</span><br>
<p>Since you are using btl_tcp you need to look at TCP/IP routing at the
<br>
system level to accomplish this.   With multiple links it is necessary
<br>
to be aware of the routing tables and how host names are resolved.
<br>
If you work with the concept that it is the interfaces that have names
<br>
(not the host) a number of things might get simplified.
<br>
<p>For a modest number of hosts, host routing tricks might work
<br>
but you must build the routes by hand.
<br>
<p>Do pay attention to subnets.   Subnet routing can simplify things.
<br>
<p>Do organize host names to identify the associated interface.
<br>
CNAMES might let you specify which interface traffic should 
<br>
arrive on.  Something like this...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;192.168.0.5	host5-eth0   host5	
<br>
&nbsp;&nbsp;&nbsp;&nbsp;192.168.1.5	host5-eth1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;192.168.2.5	host5-eth2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;192.168.3.5	host5-eth3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;192.168.0.6	host6-eth0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;192.168.1.6	host6-eth1   host6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;192.168.2.6	host6-eth2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;192.168.3.6	host6-eth3
<br>
<p>Smart routing daemons can help or confuse.
<br>
Site/ campus routers that you do not control 
<br>
might be important.
<br>
<p><pre>
-- 
	T o m  M i t c h e l l 
	Found me a new hat, now what?
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10501.php">Elvedin Trnjanin: "Re: [OMPI users] VMware and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10499.php">Yann JOBIC: "Re: [OMPI users] Program runs successfully...but with error messages displayed"</a>
<li><strong>In reply to:</strong> <a href="10483.php">Jayanta Roy: "[OMPI users] explicit routing for multiple network interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10555.php">Jeff Squyres: "Re: [OMPI users] explicit routing for multiple network interfaces"</a>
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
