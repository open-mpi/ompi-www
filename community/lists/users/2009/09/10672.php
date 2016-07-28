<?
$subject_val = "Re: [OMPI users] OpenMPI much slower than Mpich2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 10:23:11 2009" -->
<!-- isoreceived="20090917142311" -->
<!-- sent="Thu, 17 Sep 2009 10:23:05 -0400" -->
<!-- isosent="20090917142305" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI much slower than Mpich2" -->
<!-- id="CCE5862C-8EE4-4817-B150-034E15A04261_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="abe5240f0909140208y36bc5een97affdbb609d8016_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI much slower than Mpich2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 10:23:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10673.php">Josh Hursey: "Re: [OMPI users] Application hangs when checkpointing application (update)"</a>
<li><strong>Previous message:</strong> <a href="10671.php">Jeff Squyres: "Re: [OMPI users] How does OpenMPI decided to use which algorithm inMPI_Bcast????????????????"</a>
<li><strong>In reply to:</strong> <a href="10638.php">Sam Verboven: "[OMPI users] OpenMPI much slower than Mpich2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying; my INBOX has become a disaster  
<br>
recently.  More below.
<br>
<p><p>On Sep 14, 2009, at 5:08 AM, Sam Verboven wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having the following problem. If I execute the exact same
</span><br>
<span class="quotelev1">&gt; application using both openmpi and mpich2, the former takes more than
</span><br>
<span class="quotelev1">&gt; 2 times as long. When we compared the ganglia output we could see that
</span><br>
<span class="quotelev1">&gt; openmpi generates more than 60 percent System CPU whereas mpich2 only
</span><br>
<span class="quotelev1">&gt; has about 5, the remaining cycles all going to User CPU. This about
</span><br>
<span class="quotelev1">&gt; explains the slowdown: when using openmpi we lose more than half the
</span><br>
<span class="quotelev1">&gt; cycles to operating system overhead. We would very much like to know
</span><br>
<span class="quotelev1">&gt; why our openmpi implementation incurs such a dramatic overhead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only reason I could think of myself is the fact that we use
</span><br>
<span class="quotelev1">&gt; bridged network interfaces on the cluster. Openmpi would not run
</span><br>
<span class="quotelev1">&gt; properly until we specified the mca command to use the br0 interface
</span><br>
<span class="quotelev1">&gt; instead of the physical eth0. Mpich2 does not require any extra
</span><br>
<span class="quotelev1">&gt; parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>What did Open MPI did when you did not specify the use br0?
<br>
<p>I assume that br0 is a combination of some other devices, like eth0  
<br>
and eth1?  If so, what happens if you &quot;btl_tcp_if_include eth0,eth1&quot;  
<br>
instead of br0?
<br>
<p><span class="quotelev1">&gt; The calculations themselves are done using fortran. The operating
</span><br>
<span class="quotelev1">&gt; system is ubuntu 9.04, we have 14 dual quad core nodes and both
</span><br>
<span class="quotelev1">&gt; openmpi and mpich2 are compiled from source without any configure
</span><br>
<span class="quotelev1">&gt; options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Full command OpenMPI:
</span><br>
<span class="quotelev1">&gt; mpirun.openmpi --mca btl_tcp_if_include br0 --prefix
</span><br>
<span class="quotelev1">&gt; /usr/shares/mpi/openmpi -hostfile hostfile -np 224
</span><br>
<span class="quotelev1">&gt; /home/arickx/bin/Linux/F_me_Kl1l2_3cl_mpi_2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Full command Mpich2:
</span><br>
<span class="quotelev1">&gt; mpiexec.mpich2 -machinefile machinefile -np 113
</span><br>
<span class="quotelev1">&gt; /home/arickx/bin/Linux/F_me_Kl1l2_3cl_mpi_2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I notice that you're running almost 2x the number of processes for  
<br>
Open MPI as MPICH2 -- does increasing the number of processes increase  
<br>
the problem size, or have some other effect on overall run-time?
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
<li><strong>Next message:</strong> <a href="10673.php">Josh Hursey: "Re: [OMPI users] Application hangs when checkpointing application (update)"</a>
<li><strong>Previous message:</strong> <a href="10671.php">Jeff Squyres: "Re: [OMPI users] How does OpenMPI decided to use which algorithm inMPI_Bcast????????????????"</a>
<li><strong>In reply to:</strong> <a href="10638.php">Sam Verboven: "[OMPI users] OpenMPI much slower than Mpich2"</a>
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
