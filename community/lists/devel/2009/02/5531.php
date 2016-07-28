<?
$subject_val = "Re: [OMPI devel] Failure to make progress";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 15:21:24 2009" -->
<!-- isoreceived="20090225202124" -->
<!-- sent="Wed, 25 Feb 2009 15:21:19 -0500" -->
<!-- isosent="20090225202119" -->
<!-- name="Ken Olum" -->
<!-- email="kdo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Failure to make progress" -->
<!-- id="E1LcQFr-0006s3-Ja_at_cosmos.phy.tufts.edu" -->
<!-- inreplyto="97F85B80-35B3-4922-9595-FBCF05B89B96_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Failure to make progress<br>
<strong>From:</strong> Ken Olum (<em>kdo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 15:21:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5532.php">Richard Graham: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Previous message:</strong> <a href="5530.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>In reply to:</strong> <a href="5516.php">George Bosilca: "Re: [OMPI devel] Failure to make progress"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;From: George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
&nbsp;&nbsp;&nbsp;Date: Mon, 23 Feb 2009 16:54:47 -0500
<br>
<p>&nbsp;&nbsp;&nbsp;Your interpretation of the MPI standard is way too optimistic.
<br>
<p>The text I quoted seemed completely clear to me.  However, it was
<br>
pointed out to me that MPI 2.0, 6.7.2 (in a section about one-sided
<br>
communication that is not otherwise relevant) says
<br>
<p>&nbsp;&nbsp;&nbsp;A similar issue is whether such progress must occur while a process is
<br>
&nbsp;&nbsp;&nbsp;busy computing, or blocked in a non- MPI call.... Then, according to
<br>
&nbsp;&nbsp;&nbsp;one interpretation of the MPI standard, process 0 must return from the
<br>
&nbsp;&nbsp;&nbsp;complete call after a bounded delay, even if process 1 does not reach
<br>
&nbsp;&nbsp;&nbsp;any MPI call in this period of time. According to another
<br>
&nbsp;&nbsp;&nbsp;interpretation, the complete call may block until process 1 reaches
<br>
&nbsp;&nbsp;&nbsp;the wait call, or reaches another MPI call.... The MPI forum decided
<br>
&nbsp;&nbsp;&nbsp;not to decide which interpretation of the standard is the correct one,
<br>
&nbsp;&nbsp;&nbsp;since the issue is very contentious, and a decision would have much
<br>
&nbsp;&nbsp;&nbsp;impact on implementors but less impact on users.
<br>
<p>So I guess one could say that the 2.0 standard is now explicitly vague
<br>
on this subject.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ken
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5532.php">Richard Graham: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Previous message:</strong> <a href="5530.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>In reply to:</strong> <a href="5516.php">George Bosilca: "Re: [OMPI devel] Failure to make progress"</a>
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
