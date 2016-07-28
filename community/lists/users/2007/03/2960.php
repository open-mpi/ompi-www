<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 30 15:51:31 2007" -->
<!-- isoreceived="20070330195131" -->
<!-- sent="Fri, 30 Mar 2007 14:49:12 -0600" -->
<!-- isosent="20070330204912" -->
<!-- name="Chris Chambreau" -->
<!-- email="chcham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Measuring MPI message size used by application" -->
<!-- id="460D77C8.4080805_at_llnl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="460D7637.3010806_at_llnl.gov" -->
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
<strong>Date:</strong> 2007-03-30 16:49:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2961.php">Geoff Galitz: "[OMPI users] migration FAQ"</a>
<li><strong>Previous message:</strong> <a href="2959.php">Chris Chambreau: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>In reply to:</strong> <a href="2959.php">Chris Chambreau: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The mpip-help mail list is mpip-help at lists.sourceforge.net.
<br>
<p>-Chris
<br>
<p><p>Chris Chambreau wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's great to hear that people are interested in mpiP!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, I am configuring mpiP on x86_64 with gcc 3.4.4 with -O2 and
</span><br>
<span class="quotelev1">&gt; without libunwind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running some simple tests, I'm having good luck using both mpiP
</span><br>
<span class="quotelev1">&gt; stack walking and libunwind when compiling with gcc and -O2.   However,
</span><br>
<span class="quotelev1">&gt; it looks to me like compiling the mpiP library or an application with
</span><br>
<span class="quotelev1">&gt; -O3 will cause stack walking with the mpiP-implemented stack walking
</span><br>
<span class="quotelev1">&gt; code to segfault.  If I configure mpiP to use libunwind and compile my
</span><br>
<span class="quotelev1">&gt; application with -O3, some libunwind calls fail and some MPI call sites
</span><br>
<span class="quotelev1">&gt; are not recorded.  It looks to me like building and running with -O3
</span><br>
<span class="quotelev1">&gt; with the Intel compiler (v9.1) is successful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At this point the work-around for gcc appears to be building with -O2.
</span><br>
<span class="quotelev1">&gt; Hopefully we can get this sorted out by the next mpiP release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue that George points out with the failed address lookup could be
</span><br>
<span class="quotelev1">&gt; due either to not compiling with -g or with the version of binutils he
</span><br>
<span class="quotelev1">&gt; is using.  I've successfully used binutils versions 2.15.92 and 2.16.1,
</span><br>
<span class="quotelev1">&gt; but have run into some issues with binutils-2.17.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We don't hear all that much from mpiP users, so if you run into annoying
</span><br>
<span class="quotelev1">&gt; issues with mpiP that you'd like sorted out or just have general
</span><br>
<span class="quotelev1">&gt; questions or comments about the tool, please let us know at
</span><br>
<span class="quotelev1">&gt; mpip-help_at_[hidden] .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Chris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2961.php">Geoff Galitz: "[OMPI users] migration FAQ"</a>
<li><strong>Previous message:</strong> <a href="2959.php">Chris Chambreau: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>In reply to:</strong> <a href="2959.php">Chris Chambreau: "Re: [OMPI users] Measuring MPI message size used by application"</a>
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
