<?
$subject_val = "Re: [OMPI users] Missing F90 modules";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 02:30:20 2008" -->
<!-- isoreceived="20080731063020" -->
<!-- sent="Thu, 31 Jul 2008 07:30:15 +0100" -->
<!-- isosent="20080731063015" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing F90 modules" -->
<!-- id="1217485815.7282.44.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="4890A8AC.2070009_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Missing F90 modules<br>
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-31 02:30:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6231.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6229.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6221.php">Scott Beardsley: "[OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6231.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6231.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2008-07-30 at 10:45 -0700, Scott Beardsley wrote:
<br>
<span class="quotelev1">&gt; I'm attempting to move to OpenMPI from another MPICH-derived 
</span><br>
<span class="quotelev1">&gt; implementation. I compiled openmpi 1.2.6 using the following configure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --build=x86_64-redhat-linux-gnu 
</span><br>
<span class="quotelev1">&gt; --host=x86_64-redhat-linux-gnu --target=x86_64-redhat-linux-gnu 
</span><br>
<span class="quotelev1">&gt; --program-prefix= --prefix=/usr/mpi/pathscale/openmpi-1.2.6 
</span><br>
<span class="quotelev1">&gt; --exec-prefix=/usr/mpi/pathscale/openmpi-1.2.6 
</span><br>
<span class="quotelev1">&gt; --bindir=/usr/mpi/pathscale/openmpi-1.2.6/bin 
</span><br>
<span class="quotelev1">&gt; --sbindir=/usr/mpi/pathscale/openmpi-1.2.6/sbin 
</span><br>
<span class="quotelev1">&gt; --sysconfdir=/usr/mpi/pathscale/openmpi-1.2.6/etc 
</span><br>
<span class="quotelev1">&gt; --datadir=/usr/mpi/pathscale/openmpi-1.2.6/share 
</span><br>
<span class="quotelev1">&gt; --includedir=/usr/mpi/pathscale/openmpi-1.2.6/include 
</span><br>
<span class="quotelev1">&gt; --libdir=/usr/mpi/pathscale/openmpi-1.2.6/lib64 
</span><br>
<span class="quotelev1">&gt; --libexecdir=/usr/mpi/pathscale/openmpi-1.2.6/libexec 
</span><br>
<span class="quotelev1">&gt; --localstatedir=/var 
</span><br>
<span class="quotelev1">&gt; --sharedstatedir=/usr/mpi/pathscale/openmpi-1.2.6/com 
</span><br>
<span class="quotelev1">&gt; --mandir=/usr/mpi/pathscale/openmpi-1.2.6/share/man 
</span><br>
<span class="quotelev1">&gt; --infodir=/usr/share/info --with-openib=/usr 
</span><br>
<span class="quotelev1">&gt; --with-openib-libdir=/usr/lib64 CC=pathcc CXX=pathCC F77=pathf90 
</span><br>
<span class="quotelev1">&gt; FC=pathf90 --with-psm-dir=/usr --enable-mpirun-prefix-by-default 
</span><br>
<span class="quotelev1">&gt; --with-mpi-f90-size=large
</span><br>
<p>Nothing to do with fortran but I think I'm right in saying a lot of
<br>
these command line options aren't needed, you simply set --prefix and
<br>
the rest of the options default to be relative to that.
<br>
<p>Ashley.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6231.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6229.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6221.php">Scott Beardsley: "[OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6231.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6231.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
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
