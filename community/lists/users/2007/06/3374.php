<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 15:47:25 2007" -->
<!-- isoreceived="20070605194725" -->
<!-- sent="Tue, 5 Jun 2007 13:46:58 -0600" -->
<!-- isosent="20070605194658" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to identify openmpi in configure script" -->
<!-- id="9FDF7F4B-D338-4A77-AC4C-ABAAA78B206D_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="52a1b28a0706051236t64264d49pa80f9d97c22f7114_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 15:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3375.php">Ben Allan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3373.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3373.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3375.php">Ben Allan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rich -
<br>
<p>All the releases back to the 0.9 pre-release included a #define of  
<br>
OPEN_MPI to 1 in mpi.h, so that would be a good way to find out if  
<br>
you are using Open MPI or not.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><p>On Jun 5, 2007, at 1:36 PM, Lie-Quan Lee wrote:
<br>
<p><span class="quotelev1">&gt; I was thinking of this way. Is macro OPEN_MPI always defined in the  
</span><br>
<span class="quotelev1">&gt; openmpi release? I search through FAQ and other docs and cannot  
</span><br>
<span class="quotelev1">&gt; confirm it. Or there is another macro which is unique to openmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/5/07, Anthony Chan &lt;chan_at_[hidden]&gt; wrote:
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
<span class="quotelev2">&gt; &gt; I am a project written in C/C++ but used 3rd-party libraries  
</span><br>
<span class="quotelev1">&gt; written in
</span><br>
<span class="quotelev2">&gt; &gt; Fortran. In the linking stage, I use mpic++ andl need to put - 
</span><br>
<span class="quotelev1">&gt; lmpi_f90
</span><br>
<span class="quotelev2">&gt; &gt; -lmpi_f77 into the link flags.
</span><br>
<span class="quotelev2">&gt; &gt; I am wondering if anyone has already had a way to identify  
</span><br>
<span class="quotelev1">&gt; openmpi in
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3375.php">Ben Allan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3373.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3373.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3375.php">Ben Allan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
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
