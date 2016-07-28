<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 15:00:39 2007" -->
<!-- isoreceived="20070605190039" -->
<!-- sent="Tue, 5 Jun 2007 14:00:32 -0500 (CDT)" -->
<!-- isosent="20070605190032" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to identify openmpi in configure script" -->
<!-- id="Pine.LNX.4.58.0706051359140.4475_at_triumph.mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="52a1b28a0706051059g1c1c1bb6xd13142bcf78d9db8_at_mail.gmail.com" -->
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
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 15:00:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3372.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3370.php">Nuno Sucena Almeida: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3369.php">Lie-Quan Lee: "[OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3373.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3373.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Never tried this myself, but this test could work
<br>
<p>AC_COMPILE_IFELSE( [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AC_LANG_PROGRAM( [
<br>
#include &quot;mpi.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;], [
<br>
#if defined( OPEN_MPI )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
#else
<br>
#error
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;] )
<br>
], [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_is_openmpi=yes
<br>
], [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_is_openmpi=no
<br>
] )
<br>
<p>A.Chan
<br>
<p><p>On Tue, 5 Jun 2007, Lie-Quan Lee wrote:
<br>
<p><span class="quotelev1">&gt; I am a project written in C/C++ but used 3rd-party libraries written in
</span><br>
<span class="quotelev1">&gt; Fortran. In the linking stage, I use mpic++ andl need to put -lmpi_f90
</span><br>
<span class="quotelev1">&gt; -lmpi_f77 into the link flags.
</span><br>
<span class="quotelev1">&gt; I am wondering if anyone has already had a way to identify openmpi in
</span><br>
<span class="quotelev1">&gt; configure script using autoconf macro. By identifying openmpi in the
</span><br>
<span class="quotelev1">&gt; configure, I will be able to handle those libraries. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Rich Lee
</span><br>
<span class="quotelev1">&gt; Stanford Linear Accelerator Center
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3372.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3370.php">Nuno Sucena Almeida: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3369.php">Lie-Quan Lee: "[OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3373.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3373.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
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
