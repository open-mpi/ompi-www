<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 21:49:11 2012" -->
<!-- isoreceived="20120215024911" -->
<!-- sent="Wed, 15 Feb 2012 10:48:24 +0800" -->
<!-- isosent="20120215024824" -->
<!-- name="alexalex43210" -->
<!-- email="alexalex43210_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released" -->
<!-- id="201202151048218900308_at_gmail.com" -->
<!-- charset="gb2312" -->
<!-- inreplyto="OF6650640A.2D39636F-ON862579A5.0009DE1A-862579A5.0009F75A_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released<br>
<strong>From:</strong> alexalex43210 (<em>alexalex43210_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 21:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18467.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18465.php">Gustavo Correa: "Re: [OMPI users] Strange OpenMPI messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18473.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>Reply:</strong> <a href="18473.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>Reply:</strong> <a href="18474.php">Reuti: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Benton, 
<br>
&nbsp;&nbsp;Thanks for your notice.
<br>

<br>
&nbsp;&nbsp;But I am a novice for the parallel computation, I often use Fortran to compile my program, now I want to use the Parallel, can you give me some help how to begin? 
<br>
&nbsp;&nbsp;PS: I learned about OPEN MPI is the choice for my question solution. am I right?
<br>

<br>
best wishes to you &amp; good luck
<br>
yours alex
<br>

<br>

<br>

<br>

<br>
alexalex43210
<br>

<br>
From: Brad Benton
<br>
Date: 2012-02-15 09:48
<br>
To: announce
<br>
Subject: [Open MPI Announce] Open MPI v1.4.5 released
<br>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.4.5. This release is mainly a bug fix release over the v1.4.4 release. We strongly recommend that all users upgrade to version 1.4.5 if possible.
<br>

<br>
Version 1.4.5 can be downloaded from the main Open MPI web site or any of its mirrors (mirrors will be updating shortly).
<br>

<br>
Here is a list of changes in v1.4.5 as compared to v1.4.4
<br>
- Fixed the --disable-memory-manager configure switch.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Fix typos in code and man pages.  Thanks to Fujitsu for these fixes.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Improve management of the registration cache; when full, try freeing
<br>
&nbsp;&nbsp;old entries and attempt to re-register.
<br>
- Fixed a data packing pointer alignment issue.  Thanks to Fujitsu
<br>
&nbsp;&nbsp;for the patch.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Add ability to turn off warning about having the shared memory backing
<br>
&nbsp;&nbsp;store over a networked filesystem.  Thanks to Chris Samuel for this
<br>
&nbsp;&nbsp;suggestion.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Removed an unnecessary memmove() and plugged a couple of small memory leaks
<br>
&nbsp;&nbsp;in the openib OOB connection setup code.
<br>
- Fixed some QLogic bugs. Thanks to Mark Debbage from QLogic for the patches.
<br>
- Fixed problem with MPI_IN_PLACE and other sentinel Fortran constants
<br>
&nbsp;&nbsp;on OS X.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Fix SLURM cpus-per-task allocation.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Fix the datatype engine for when data left over from the previous
<br>
&nbsp;&nbsp;pack was larger than the allowed space in the pack buffer. Thanks to
<br>
&nbsp;&nbsp;Yuki Matsumoto and Takahiro Kawashima for the bug report and the
<br>
&nbsp;&nbsp;patch.
<br>
- Fix Fortran value for MPI_MAX_PORT_NAME.  Thanks to Enzo Dari for
<br>
&nbsp;&nbsp;raising the issue.
<br>
- Workaround an Intel compiler v12.1.0 2011.6.233 vector optimization
<br>
&nbsp;&nbsp;bug.
<br>
- Fix issues on Solaris with the openib BTL.
<br>
- Fixes for the Oracle Studio 12.2 Fortran compiler.
<br>
- Update iWARP parameters for the Intel NICs.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Fix obscure cases where MPI_ALLGATHER could crash.  Thanks to Andrew
<br>
&nbsp;&nbsp;Senin for reporting the problem.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>

<br>
--
<br>
Brad Benton
<br>
Linux Technology Center, IBM <br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18466/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18467.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18465.php">Gustavo Correa: "Re: [OMPI users] Strange OpenMPI messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18473.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>Reply:</strong> <a href="18473.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>Reply:</strong> <a href="18474.php">Reuti: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
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
