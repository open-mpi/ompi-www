<?
$subject_val = "Re: [OMPI users] use additional interface for openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 07:23:17 2009" -->
<!-- isoreceived="20091003112317" -->
<!-- sent="Sat, 3 Oct 2009 07:23:10 -0400" -->
<!-- isosent="20091003112310" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] use additional interface for openmpi" -->
<!-- id="F4E9B4CB-04A1-4957-B594-C367B7A6CA38_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E1MsdE2-00051E-04_at_ffe4.ukr.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] use additional interface for openmpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-03 07:23:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10882.php">Ashley Pittman: "Re: [OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<li><strong>Previous message:</strong> <a href="10880.php">Jeff Squyres: "Re: [OMPI users] job fails with &quot;Signal: Bus error (7)&quot;"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10815.php">worldeb_at_[hidden]: "Re: [OMPI users] use additional interface for openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 29, 2009, at 9:58 AM, &lt;worldeb_at_[hidden]&gt; &lt;worldeb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Open MPI should just &quot;figure it out&quot; and do the Right Thing at run-
</span><br>
<span class="quotelev2">&gt; &gt; time -- is that not happening?
</span><br>
<span class="quotelev1">&gt; you are right it should.
</span><br>
<span class="quotelev1">&gt; But I want to exclude any traffic from OpenMPI communications, like  
</span><br>
<span class="quotelev1">&gt; NFS, traffic from other jobs and so on.
</span><br>
<span class="quotelev1">&gt; And use only special ethernet interface for this purpose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I have OpenMPI 1.3.3 installed on all nodes and head node in the  
</span><br>
<span class="quotelev1">&gt; same directory.
</span><br>
<span class="quotelev1">&gt; OS is the same on all cluster - debian 5.0
</span><br>
<span class="quotelev1">&gt; On nodes I have two interfaces eth0 - for NFS and so on...
</span><br>
<span class="quotelev1">&gt; and eht1 for OpenMPI.
</span><br>
<span class="quotelev1">&gt; On head node I have 5 interfaces: eth0 for NFS, eth4 for OpenMPI
</span><br>
<span class="quotelev1">&gt; Network is next:
</span><br>
<span class="quotelev1">&gt; 1) Head node eht0 + nodes eht0    : 192.168.0.0/24
</span><br>
<span class="quotelev1">&gt; 2) Head node eth4 + nodes eth1    : 192.168.1.0/24
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So how I can configure OpenMPI for using only network 2) for my  
</span><br>
<span class="quotelev1">&gt; purpose?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Try using &quot;--mca btl_tcp_if_exclude eth0 --mca oob_tcp_if_exclude  
<br>
eth0&quot;.  This will tell all machines not to use eth0.  The only other  
<br>
network available is eth4 or eth1, so it should do the Right thing.
<br>
<p>Note that Open MPI has *two* TCP subsystems: the one used for MPI  
<br>
communications and the one used for &quot;out of band&quot; communications.  BTL  
<br>
is the MPI communication subsystem; &quot;oob&quot; is the Out of Band  
<br>
communications subsystem.
<br>
<p><span class="quotelev1">&gt; Other problem is next:
</span><br>
<span class="quotelev1">&gt; I try to run some examples. But unfortunately it is not work.
</span><br>
<span class="quotelev1">&gt; My be it is not correctly configured network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can submit any jobs only on one host from this host.
</span><br>
<span class="quotelev1">&gt; When I submit from head node for example to other nodes it hangs   
</span><br>
<span class="quotelev1">&gt; without any messages.
</span><br>
<span class="quotelev1">&gt; And on node where I want to calculate I see that here is started  
</span><br>
<span class="quotelev1">&gt; orted daemon.
</span><br>
<span class="quotelev1">&gt; (I use default config files)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below is examples:
</span><br>
<span class="quotelev1">&gt; mpirun -v --mca btl self,sm,tcp --mca btl_base_verbose 30 --mca  
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include eth0 -np 2 -host n10,n11 cpi
</span><br>
<span class="quotelev1">&gt; no output, no calculations, only orted daemon on nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -v --mca btl self,sm,tcp --mca btl_base_verbose 30 -np 2 - 
</span><br>
<span class="quotelev1">&gt; host n10,n11 cpi
</span><br>
<span class="quotelev1">&gt; the same as abowe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -v --mca btl self,sm,tcp --mca btl_base_verbose 30 -np 2 - 
</span><br>
<span class="quotelev1">&gt; host n00,n00 cpi
</span><br>
<span class="quotelev1">&gt; n00 is head node - it works and produces output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It sounds like OMPI is getting confused between the non-uniform  
<br>
networks.  I have heard reports of OMPI not liking networks with  
<br>
different interface names, but it's not immediately obvious why the  
<br>
interface names are relevant to OMPI's selection criteria (and not  
<br>
enough details are available in the reports I heard before).
<br>
<p>Try the *_if_exclude methods above and see if that works for you.  If  
<br>
not, let us know.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10882.php">Ashley Pittman: "Re: [OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<li><strong>Previous message:</strong> <a href="10880.php">Jeff Squyres: "Re: [OMPI users] job fails with &quot;Signal: Bus error (7)&quot;"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10815.php">worldeb_at_[hidden]: "Re: [OMPI users] use additional interface for openmpi"</a>
<!-- nextthread="start" -->
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
