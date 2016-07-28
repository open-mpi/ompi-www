<?
$subject_val = "Re: [OMPI users] build OpenMPI with OpenIB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  7 07:14:45 2008" -->
<!-- isoreceived="20080307121445" -->
<!-- sent="Fri, 7 Mar 2008 14:14:28 +0200" -->
<!-- isosent="20080307121428" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] build OpenMPI with OpenIB" -->
<!-- id="20080307121428.GA812_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0803071026030.28982_at_cappuccino.ucs.ed.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] build OpenMPI with OpenIB<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-07 07:14:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5154.php">Jeff Squyres: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="5152.php">Yuan Wan: "[OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="5152.php">Yuan Wan: "[OMPI users] build OpenMPI with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5154.php">Jeff Squyres: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 07, 2008 at 10:36:42AM +0000, Yuan Wan wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to build OpenMPI-1.2.5 on my Infiniband cluster which has OFED-2.1 
</span><br>
<span class="quotelev1">&gt; installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configured OpenMPI as:
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/exports/home/local/Cluster-Apps/openmpi/gcc/64/1.2.5 \
</span><br>
<span class="quotelev1">&gt; --enable-shared --enable-static --enable-debug \
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr/local/Cluster-Apps/infinipath/2.1/ofed
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And 'ompi_info | grep openib' only shows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MCA btl: openib (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I cannot see:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MCA mpool: openib (MCA v1.0, API v1.0, Component v1.0)
</span><br>
This is OK. There is no such component in Open MPI any more.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No idea why and if this will cause failure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I tried to run a MPI code with the option &quot;--mca btl openib,self&quot;, It 
</span><br>
<span class="quotelev1">&gt; failed to run with the following messages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl openib,self -np 4 ./hello
</span><br>
What is the output of ibv_devinfo on your hosts?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5154.php">Jeff Squyres: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="5152.php">Yuan Wan: "[OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="5152.php">Yuan Wan: "[OMPI users] build OpenMPI with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5154.php">Jeff Squyres: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
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
