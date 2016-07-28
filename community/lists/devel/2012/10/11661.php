<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 28 09:51:47 2012" -->
<!-- isoreceived="20121028135147" -->
<!-- sent="Sun, 28 Oct 2012 09:51:41 -0400" -->
<!-- isosent="20121028135141" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="E5DF6BC2-6EC9-4421-A781-891ACE3FEFC6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYe05XeGMVfsGHg1tUKVJ59AtAoVR0eQQbYdzv+2MgeytQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-28 09:51:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11662.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11660.php">Ralph Castain: "[OMPI devel] Warnings in trunk: libnbc and coll-nbc"</a>
<li><strong>In reply to:</strong> <a href="11656.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11662.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11662.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 26, 2012, at 12:48 PM, Dmitri Gribenko wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for reviewing and helping me to get this up to the project's
</span><br>
<span class="quotelev1">&gt; standards!
</span><br>
<p>Thank *you*.
<br>
<p>My prior reviews were from reading the code only.  I just tried a few compile tests and got the following:
<br>
<p>1. With gcc 4.4.6, I got a bunch of these:
<br>
<p>-----
<br>
../../../ompi/include/mpi.h:997: warning: ISO C90 does not support complex types
<br>
../../../ompi/include/mpi.h:998: warning: ISO C90 does not support complex types
<br>
-----
<br>
<p>2. With clang 3.1, I got a bunch of these:
<br>
<p>-----
<br>
../../../ompi/include/mpi.h:1084:5: warning: 'OMPI_HAVE_FORTRAN_COMPLEX8' is not defined, evaluates to 0 [-Wundef]
<br>
#if OMPI_HAVE_FORTRAN_COMPLEX8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../ompi/include/mpi.h:1089:5: warning: 'OMPI_HAVE_FORTRAN_COMPLEX16' is not defined, evaluates to 0 [-Wundef]
<br>
#if OMPI_HAVE_FORTRAN_COMPLEX16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../ompi/include/mpi.h:1094:5: warning: 'OMPI_HAVE_FORTRAN_COMPLEX32' is not defined, evaluates to 0 [-Wundef]
<br>
#if OMPI_HAVE_FORTRAN_COMPLEX32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
-----
<br>
<p>3. PGI and Intel seemed to have no problem with the patch (no extra warnings displayed during compilation).
<br>
<p>Could you fix the issues with #1 and #2?
<br>
<p>(to tie off the thread for the web archives: Dimitri did, in fact, submit an OMPI 3rd party contrib a while ago -- w00t!  We're discussing logistics off-list)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11662.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11660.php">Ralph Castain: "[OMPI devel] Warnings in trunk: libnbc and coll-nbc"</a>
<li><strong>In reply to:</strong> <a href="11656.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11662.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11662.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
