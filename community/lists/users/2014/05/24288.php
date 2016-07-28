<?
$subject_val = "Re: [OMPI users] MPI File Open does not work";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 08:56:06 2014" -->
<!-- isoreceived="20140506125606" -->
<!-- sent="Tue, 6 May 2014 12:56:04 +0000" -->
<!-- isosent="20140506125604" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI File Open does not work" -->
<!-- id="E7DF28CB-D4FB-4087-928E-18E61D1D24CF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="d57bdf499c00360b737205b085c50660_at_ulrik.uio.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI File Open does not work<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-06 08:56:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24289.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>Previous message:</strong> <a href="24287.php">Imran Ali: "[OMPI users] MPI File Open does not work"</a>
<li><strong>In reply to:</strong> <a href="24287.php">Imran Ali: "[OMPI users] MPI File Open does not work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24289.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>Reply:</strong> <a href="24289.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The thread support in the 1.6 series is not very good.  You might try:
<br>
<p>- Upgrading to 1.6.5
<br>
- Or better yet, upgrading to 1.8.1
<br>
<p><p>On May 6, 2014, at 7:24 AM, Imran Ali &lt;imranal_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I get the following error when I try to run the following python code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; import mpi4py.MPI as MPI
</span><br>
<span class="quotelev1">&gt; comm =  MPI.COMM_WORLD
</span><br>
<span class="quotelev1">&gt; MPI.File.Open(comm,&quot;some.file&quot;)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 1 python test_mpi.py
</span><br>
<span class="quotelev1">&gt; Traceback (most recent call last):
</span><br>
<span class="quotelev1">&gt;   File &quot;test_mpi.py&quot;, line 3, in &lt;module&gt;
</span><br>
<span class="quotelev1">&gt;     MPI.File.Open(comm,&quot; h5ex_d_alloc.h5&quot;)
</span><br>
<span class="quotelev1">&gt;   File &quot;File.pyx&quot;, line 67, in mpi4py.MPI.File.Open (src/mpi4py.MPI.c:89639)
</span><br>
<span class="quotelev1">&gt; mpi4py.MPI.Exception: MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My mpirun version is (Open MPI) 1.6.2. I installed openmpi using the dorsal script (<a href="https://github.com/FEniCS/dorsal">https://github.com/FEniCS/dorsal</a>) for Redhat Enterprise 6 (OS I am using, release 6.5) . It configured the build as following :
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mpi-thread-multiple --enable-opal-multi-threads --with-threads=posix --disable-mpi-profile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need emphasize that I do not have root acces on the system I am running my application.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Imran
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24289.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>Previous message:</strong> <a href="24287.php">Imran Ali: "[OMPI users] MPI File Open does not work"</a>
<li><strong>In reply to:</strong> <a href="24287.php">Imran Ali: "[OMPI users] MPI File Open does not work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24289.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>Reply:</strong> <a href="24289.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
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
