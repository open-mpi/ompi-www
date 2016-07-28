<?
$subject_val = "Re: [O-MPI users] Bug in C++ bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 12:07:31 2006" -->
<!-- isoreceived="20060201170731" -->
<!-- sent="Wed, 01 Feb 2006 10:05:43 -0600" -->
<!-- isosent="20060201160543" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Bug in C++ bindings" -->
<!-- id="8382429D-AA1E-4E3D-BDB2-189386385FD5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="51534E65-AAF6-441A-9CBE-C4903FA80E72_at_scu.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-01 11:05:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0550.php">Konstantin Kudin: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="../../2006/01/0548.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>In reply to:</strong> <a href="../../2006/01/0547.php">Brian Granger: "[O-MPI users] Bug in C++ bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0558.php">Brian Granger: "Re: [O-MPI users] Bug in C++ bindings"</a>
<li><strong>Reply:</strong> <a href="0558.php">Brian Granger: "Re: [O-MPI users] Bug in C++ bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 31, 2006, at 5:47 PM, Brian Granger wrote:
<br>
<p><span class="quotelev1">&gt; I am compiling a C++ program that uses the Open-MPI c++ bindings.  I
</span><br>
<span class="quotelev1">&gt; think there is a bug in the constants.h and/or mpicxx.cc files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file constants.h defines lots of constants as extern.  There are
</span><br>
<p>&lt;snip&gt;
<br>
<p><span class="quotelev1">&gt; By commenting corresponding lines out in constants.h, my code
</span><br>
<span class="quotelev1">&gt; compiled and ran fine.  Is this a bug, or should these things be
</span><br>
<span class="quotelev1">&gt; defined somewhere else.  Thanks!
</span><br>
<p>Thanks for bringing this to our attention - this is most definitely a  
<br>
bug.  The issue will be fixed in the upcoming 1.0.2 release.  It  
<br>
sounds like you have a workaround already, but I've attached the  
<br>
patch that was applied to the v1.0 branch to become part of the next  
<br>
release.
<br>
<p><p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="../../att-0549/ompi_cxx.diff">ompi_cxx.diff</a>
</ul>
<!-- attachment="ompi_cxx.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0550.php">Konstantin Kudin: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="../../2006/01/0548.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>In reply to:</strong> <a href="../../2006/01/0547.php">Brian Granger: "[O-MPI users] Bug in C++ bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0558.php">Brian Granger: "Re: [O-MPI users] Bug in C++ bindings"</a>
<li><strong>Reply:</strong> <a href="0558.php">Brian Granger: "Re: [O-MPI users] Bug in C++ bindings"</a>
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
