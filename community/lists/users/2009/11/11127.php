<?
$subject_val = "Re: [OMPI users] ipo: warning #11009: file format not recognized	for /Libraries_intel/openmpi/lib/libmpi.so";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 12:35:59 2009" -->
<!-- isoreceived="20091110173559" -->
<!-- sent="Tue, 10 Nov 2009 09:35:49 -0800" -->
<!-- isosent="20091110173549" -->
<!-- name="Nifty Tom Mitchell" -->
<!-- email="niftyompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ipo: warning #11009: file format not recognized	for /Libraries_intel/openmpi/lib/libmpi.so" -->
<!-- id="20091110173549.GA26365_at_compegg" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200911101544.59664.gkanis_at_ipta.demokritos.gr" -->
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
<strong>Subject:</strong> Re: [OMPI users] ipo: warning #11009: file format not recognized	for /Libraries_intel/openmpi/lib/libmpi.so<br>
<strong>From:</strong> Nifty Tom Mitchell (<em>niftyompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 12:35:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11128.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11126.php">Chris Walker: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>In reply to:</strong> <a href="11115.php">vasilis gkanis: "[OMPI users] ipo: warning #11009: file format not recognized for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11154.php">vasilis gkanis: "Re: [OMPI users] ipo: warning #11009: file format notrecognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>Reply:</strong> <a href="11154.php">vasilis gkanis: "Re: [OMPI users] ipo: warning #11009: file format notrecognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Nov 10, 2009 at 03:44:59PM +0200, vasilis gkanis wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to compile openmpi-1.3.3 with intel Fortran and gcc compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In order to compile openmpi I run configure with the following options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/Libraries/openmpi FC=ifort --enable-mpi-f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMpi compiled just fine, but when I am trying to compile and link my program 
</span><br>
<span class="quotelev1">&gt; against mpi, I get the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ipo: warning #11009: file format not recognized for 
</span><br>
<span class="quotelev1">&gt; /Libraries_intel/openmpi/lib/libmpi.so
</span><br>
<span class="quotelev1">&gt; ld: skipping incompatible /Libraries_intel/openmpi/lib/libmpi.so when 
</span><br>
<span class="quotelev1">&gt; searching for -lmpi
</span><br>
<span class="quotelev1">&gt; ld: cannot find -lmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have updated the LD_LIBRARY_PATH file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anybody know what this error mean?
</span><br>
<p>What does:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file /Libraries_intel/openmpi/lib/libmpi.so
<br>
tell you?
<br>
<p>Perhaps this is a 32bit .vs. 64bit mismatch?
<br>
<p><p><p><p><p><p><p><pre>
-- 
	T o m  M i t c h e l l 
	Found me a new hat, now what?
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11128.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11126.php">Chris Walker: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>In reply to:</strong> <a href="11115.php">vasilis gkanis: "[OMPI users] ipo: warning #11009: file format not recognized for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11154.php">vasilis gkanis: "Re: [OMPI users] ipo: warning #11009: file format notrecognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>Reply:</strong> <a href="11154.php">vasilis gkanis: "Re: [OMPI users] ipo: warning #11009: file format notrecognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
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
