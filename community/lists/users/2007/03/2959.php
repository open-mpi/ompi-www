<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 30 15:44:50 2007" -->
<!-- isoreceived="20070330194450" -->
<!-- sent="Fri, 30 Mar 2007 14:42:31 -0600" -->
<!-- isosent="20070330204231" -->
<!-- name="Chris Chambreau" -->
<!-- email="chcham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Measuring MPI message size used by application" -->
<!-- id="460D7637.3010806_at_llnl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Measuring MPI message size used by application" -->
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
<strong>From:</strong> Chris Chambreau (<em>chcham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-30 16:42:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2960.php">Chris Chambreau: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2958.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Maybe in reply to:</strong> <a href="2938.php">stephen mulcahy: "[OMPI users] Measuring MPI message size used by application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2960.php">Chris Chambreau: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Reply:</strong> <a href="2960.php">Chris Chambreau: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>It's great to hear that people are interested in mpiP!
<br>
<p>Currently, I am configuring mpiP on x86_64 with gcc 3.4.4 with -O2 and
<br>
without libunwind.
<br>
<p>When running some simple tests, I'm having good luck using both mpiP
<br>
stack walking and libunwind when compiling with gcc and -O2.   However,
<br>
it looks to me like compiling the mpiP library or an application with
<br>
-O3 will cause stack walking with the mpiP-implemented stack walking
<br>
code to segfault.  If I configure mpiP to use libunwind and compile my
<br>
application with -O3, some libunwind calls fail and some MPI call sites
<br>
are not recorded.  It looks to me like building and running with -O3
<br>
with the Intel compiler (v9.1) is successful.
<br>
<p>At this point the work-around for gcc appears to be building with -O2.
<br>
Hopefully we can get this sorted out by the next mpiP release.
<br>
<p>The issue that George points out with the failed address lookup could be
<br>
due either to not compiling with -g or with the version of binutils he
<br>
is using.  I've successfully used binutils versions 2.15.92 and 2.16.1,
<br>
but have run into some issues with binutils-2.17.
<br>
<p>We don't hear all that much from mpiP users, so if you run into annoying
<br>
issues with mpiP that you'd like sorted out or just have general
<br>
questions or comments about the tool, please let us know at
<br>
mpip-help_at_[hidden] .
<br>
<p>Thanks!
<br>
<p>-Chris
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2960.php">Chris Chambreau: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2958.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Maybe in reply to:</strong> <a href="2938.php">stephen mulcahy: "[OMPI users] Measuring MPI message size used by application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2960.php">Chris Chambreau: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Reply:</strong> <a href="2960.php">Chris Chambreau: "Re: [OMPI users] Measuring MPI message size used by application"</a>
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
