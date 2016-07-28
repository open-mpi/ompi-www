<?
$subject_val = "[OMPI devel] enable-smp-locks affects PSM performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 10:16:49 2014" -->
<!-- isoreceived="20141030141649" -->
<!-- sent="Thu, 30 Oct 2014 14:10:48 +0000" -->
<!-- isosent="20141030141048" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="[OMPI devel] enable-smp-locks affects PSM performance" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518C5D5D3_at_ORSMSX114.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] enable-smp-locks affects PSM performance<br>
<strong>From:</strong> Friedley, Andrew (<em>andrew.friedley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-30 10:10:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16131.php">Howard Pritchard: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16129.php">Paul Hargrove: "Re: [OMPI devel] Error: undefined reference `__builtin_va_gparg1'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16131.php">Howard Pritchard: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="16131.php">Howard Pritchard: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm reporting a performance (message rate 16%, latency 3%) regression when using PSM that occurred between OMPI v1.6.5 and v1.8.1.  I would guess it affects other networks too, but I haven't tested.  The problem stems from the --enable-smp-locks and --enable-opal-multi-threads options.
<br>
<p>--enable-smp-locks defaults to enabled and, on x86, causes a 'lock' prefix to be prepended to ASM instructions used by atomic primitives.  Disabling removes the 'lock' prefix.
<br>
<p>In OMPI 1.6.5, --enable-opal-multi-threads defaulted to disabled.  When enabled, OPAL would be compiled with multithreading support, which included compiling in calls to atomic primitives.  Those atomic primitives, in turn, potentially use a lock prefix (controlled by --enable-smp-locks).
<br>
<p>SVN r29891 on the trunk changed the above.  --enable-opal-multi-threads was removed.  CPP macros (#if OPAL_ENABLE_MULTI_THREADS) controlling various calls to atomic primitives were removed, effectively changing the default behavior to multithreading ON for OPAL.  This change was then carried to the v1.7 branch in r29944, Fixes #3983.
<br>
<p>We can use --disable-smp-locks to make the performance regression go away for the builds we ship, but we'd very much prefer if performance was good 'out of the box' for people that grab an OMPI tarball and use it with PSM.
<br>
<p>My question is, what's the best way to do that?  It seems obvious to just make --disable-smp-locks the default, but I presume the change was done on purpose, so I'm looking for community feedback.
<br>
<p>Thanks,
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16131.php">Howard Pritchard: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16129.php">Paul Hargrove: "Re: [OMPI devel] Error: undefined reference `__builtin_va_gparg1'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16131.php">Howard Pritchard: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="16131.php">Howard Pritchard: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
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
