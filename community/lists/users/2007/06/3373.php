<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 15:36:33 2007" -->
<!-- isoreceived="20070605193633" -->
<!-- sent="Tue, 5 Jun 2007 12:36:27 -0700" -->
<!-- isosent="20070605193627" -->
<!-- name="Lie-Quan Lee" -->
<!-- email="liequan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to identify openmpi in configure script" -->
<!-- id="52a1b28a0706051236t64264d49pa80f9d97c22f7114_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.58.0706051359140.4475_at_triumph.mcs.anl.gov" -->
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
<strong>From:</strong> Lie-Quan Lee (<em>liequan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 15:36:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3374.php">Brian Barrett: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3372.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3371.php">Anthony Chan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3374.php">Brian Barrett: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3374.php">Brian Barrett: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was thinking of this way. Is macro OPEN_MPI always defined in the openmpi
<br>
release? I search through FAQ and other docs and cannot confirm it. Or there
<br>
is another macro which is unique to openmpi?
<br>
<p>--Rich
<br>
<p>On 6/5/07, Anthony Chan &lt;chan_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Never tried this myself, but this test could work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AC_COMPILE_IFELSE( [
</span><br>
<span class="quotelev1">&gt;     AC_LANG_PROGRAM( [
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;     ], [
</span><br>
<span class="quotelev1">&gt; #if defined( OPEN_MPI )
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #error
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;      ] )
</span><br>
<span class="quotelev1">&gt; ], [
</span><br>
<span class="quotelev1">&gt;     mpi_is_openmpi=yes
</span><br>
<span class="quotelev1">&gt; ], [
</span><br>
<span class="quotelev1">&gt;     mpi_is_openmpi=no
</span><br>
<span class="quotelev1">&gt; ] )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A.Chan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 5 Jun 2007, Lie-Quan Lee wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am a project written in C/C++ but used 3rd-party libraries written in
</span><br>
<span class="quotelev2">&gt; &gt; Fortran. In the linking stage, I use mpic++ andl need to put -lmpi_f90
</span><br>
<span class="quotelev2">&gt; &gt; -lmpi_f77 into the link flags.
</span><br>
<span class="quotelev2">&gt; &gt; I am wondering if anyone has already had a way to identify openmpi in
</span><br>
<span class="quotelev2">&gt; &gt; configure script using autoconf macro. By identifying openmpi in the
</span><br>
<span class="quotelev2">&gt; &gt; configure, I will be able to handle those libraries. Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Rich Lee
</span><br>
<span class="quotelev2">&gt; &gt; Stanford Linear Accelerator Center
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Best regards,
Rich
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3373/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3374.php">Brian Barrett: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3372.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3371.php">Anthony Chan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3374.php">Brian Barrett: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3374.php">Brian Barrett: "Re: [OMPI users] how to identify openmpi in configure script"</a>
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
