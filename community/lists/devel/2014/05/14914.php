<?
$subject_val = "Re: [OMPI devel] fortran types alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 12:10:07 2014" -->
<!-- isoreceived="20140530161007" -->
<!-- sent="Fri, 30 May 2014 12:10:05 -0400" -->
<!-- isosent="20140530161005" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fortran types alignment" -->
<!-- id="CAMJJpkV+yi9k8ShgYr5LangZO0XMp8PTqHqwNoe4g051=DnmeQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5umPsdzGbY8FtGsvYQ8cQLr9TDmOUWM6U_DxhFWAqXtcg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] fortran types alignment<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-30 12:10:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14915.php">Lecrenski, Stephen K       PW: "[OMPI devel] Open MPI 1.6.5 opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>Previous message:</strong> <a href="14913.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14911.php">Gilles Gouaillardet: "[OMPI devel] fortran types alignment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I like d the most but it is not a perfect solution. With d all
<br>
real8 types in a common will be badly aligned and the Open MPI
<br>
internal datatype will be incorrect.  So I will vote for a combo: b +
<br>
d.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Fri, May 30, 2014 at 4:57 AM, Gilles Gouaillardet
<br>
&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i recently had to solve a tricky issue that involves alignment of fortran
</span><br>
<span class="quotelev1">&gt; types.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the attached program can be used and ran on two tasks in order to evidence
</span><br>
<span class="quotelev1">&gt; the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if gfortran is used (to build both openmpi and the test case), then the test
</span><br>
<span class="quotelev1">&gt; is successful
</span><br>
<span class="quotelev1">&gt; if ifort (Intel compiler) is used (to build both openmpi and the test case),
</span><br>
<span class="quotelev1">&gt; then the test fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this was mentionned in the openmpi users list quite a while ago at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/07/13857.php">http://www.open-mpi.org/community/lists/users/2010/07/13857.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the root cause is gfortran considers mpi_real8 must be aligned on 8 bytes
</span><br>
<span class="quotelev1">&gt; whereas ifort considers mpi_real8 does not need to be aligned.
</span><br>
<span class="quotelev1">&gt; consequently, the derived data type ddt is built with an extent of 16
</span><br>
<span class="quotelev1">&gt; (gfortran) or 12 (ifort)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in order to determine the type aligment, configure builds a simple program
</span><br>
<span class="quotelev1">&gt; with c and fortran that involves common.
</span><br>
<span class="quotelev1">&gt; the default behaviour of ifort is to :
</span><br>
<span class="quotelev1">&gt; - *not* align common
</span><br>
<span class="quotelev1">&gt; - align records (aka the real8_int fortran type)
</span><br>
<span class="quotelev1">&gt; hence the mismatch and the failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the default behaviour of gfortran is to align both common and records, hence
</span><br>
<span class="quotelev1">&gt; the success.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* i &quot;extracted&quot; from configure conftest.c and conftestf.f that can be used
</span><br>
<span class="quotelev1">&gt; to build the conftest binary. conftest will store the alignment in the
</span><br>
<span class="quotelev1">&gt; conftestval file */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am wondering how this should be dealt by OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is a non exhaustive list of option :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) do nothing, this is not related to openmpi, and even if we do something,
</span><br>
<span class="quotelev1">&gt; application built with -noalign will break.
</span><br>
<span class="quotelev1">&gt; b) advise ifort users to configure with FCFLAGS=&quot;-align zcommons&quot; since it
</span><br>
<span class="quotelev1">&gt; is likely this is what they want
</span><br>
<span class="quotelev1">&gt; c) advise ifort users to build their application with &quot;-noalign&quot; to be on
</span><br>
<span class="quotelev1">&gt; the safe side (modulo a performance penalty)
</span><br>
<span class="quotelev1">&gt; d) update OpenMPI so fortran type alignment is determined via a record
</span><br>
<span class="quotelev1">&gt; instead of a common if fortran &gt;= 90 is used
</span><br>
<span class="quotelev1">&gt; (so far, i could not find any drawback in doing that)
</span><br>
<span class="quotelev1">&gt; e) advise ifort users to create ddt with MPI_DOUBLE instead of mpi_real8
</span><br>
<span class="quotelev1">&gt; (because this works (!), i did not dig to find out why)
</span><br>
<span class="quotelev1">&gt; f) other ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any thoughts ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14911.php">http://www.open-mpi.org/community/lists/devel/2014/05/14911.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14915.php">Lecrenski, Stephen K       PW: "[OMPI devel] Open MPI 1.6.5 opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>Previous message:</strong> <a href="14913.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14911.php">Gilles Gouaillardet: "[OMPI devel] fortran types alignment"</a>
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
