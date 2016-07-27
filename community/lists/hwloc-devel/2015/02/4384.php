<?
$subject_val = "Re: [hwloc-devel] === CREATE FAILURE (dev-424-geb4c503) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 09:43:52 2015" -->
<!-- isoreceived="20150219144352" -->
<!-- sent="Thu, 19 Feb 2015 14:43:51 +0000" -->
<!-- isosent="20150219144351" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] === CREATE FAILURE (dev-424-geb4c503) ===" -->
<!-- id="B2859172-917F-434B-BA63-FAB850067DCF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150219144245.463C125F02B_at_jaguar.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] === CREATE FAILURE (dev-424-geb4c503) ===<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 09:43:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4385.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-424-geb4c503)"</a>
<li><strong>Previous message:</strong> <a href="4383.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (dev-424-geb4c503) ==="</a>
<li><strong>In reply to:</strong> <a href="4383.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (dev-424-geb4c503) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ignore this -- this is just me playing with the coverity submission script.
<br>
<p><p><span class="quotelev1">&gt; On Feb 19, 2015, at 9:42 AM, MPI Team &lt;mpiteam_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (dev-424-geb4c503):
</span><br>
<span class="quotelev1">&gt;       ./configure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start time: Thu Feb 19 09:42:23 EST 2015
</span><br>
<span class="quotelev1">&gt; End time:   Thu Feb 19 09:42:45 EST 2015
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; checking sys/lgrp_user.h usability... no
</span><br>
<span class="quotelev1">&gt; checking sys/lgrp_user.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for sys/lgrp_user.h... no
</span><br>
<span class="quotelev1">&gt; checking kstat.h usability... no
</span><br>
<span class="quotelev1">&gt; checking kstat.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for kstat.h... no
</span><br>
<span class="quotelev1">&gt; checking whether fabsf is declared... yes
</span><br>
<span class="quotelev1">&gt; checking for fabsf in -lm... yes
</span><br>
<span class="quotelev1">&gt; checking picl.h usability... no
</span><br>
<span class="quotelev1">&gt; checking picl.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for picl.h... no
</span><br>
<span class="quotelev1">&gt; checking whether _SC_NPROCESSORS_ONLN is declared... yes
</span><br>
<span class="quotelev1">&gt; checking whether _SC_NPROCESSORS_CONF is declared... yes
</span><br>
<span class="quotelev1">&gt; checking whether _SC_NPROC_ONLN is declared... no
</span><br>
<span class="quotelev1">&gt; checking whether _SC_NPROC_CONF is declared... no
</span><br>
<span class="quotelev1">&gt; checking whether _SC_PAGESIZE is declared... yes
</span><br>
<span class="quotelev1">&gt; checking whether _SC_PAGE_SIZE is declared... yes
</span><br>
<span class="quotelev1">&gt; checking whether _SC_LARGE_PAGESIZE is declared... no
</span><br>
<span class="quotelev1">&gt; checking mach/mach_host.h usability... no
</span><br>
<span class="quotelev1">&gt; checking mach/mach_host.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for mach/mach_host.h... no
</span><br>
<span class="quotelev1">&gt; checking mach/mach_init.h usability... no
</span><br>
<span class="quotelev1">&gt; checking mach/mach_init.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for mach/mach_init.h... no
</span><br>
<span class="quotelev1">&gt; checking sys/param.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking sys/param.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for sys/param.h... yes
</span><br>
<span class="quotelev1">&gt; checking for sys/sysctl.h... yes
</span><br>
<span class="quotelev1">&gt; checking whether CTL_HW is declared... no
</span><br>
<span class="quotelev1">&gt; checking whether HW_NCPU is declared... no
</span><br>
<span class="quotelev1">&gt; checking whether strtoull is declared... yes
</span><br>
<span class="quotelev1">&gt; checking whether getprogname is declared... no
</span><br>
<span class="quotelev1">&gt; checking whether getexecname is declared... no
</span><br>
<span class="quotelev1">&gt; checking whether GetModuleFileName is declared... no
</span><br>
<span class="quotelev1">&gt; checking for program_invocation_name... yes
</span><br>
<span class="quotelev1">&gt; checking for __progname... yes
</span><br>
<span class="quotelev1">&gt; checking for pthread_t... yes
</span><br>
<span class="quotelev1">&gt; checking whether function sched_setaffinity is declared... yes
</span><br>
<span class="quotelev1">&gt; checking for old prototype of sched_setaffinity... no
</span><br>
<span class="quotelev1">&gt; checking for working CPU_SET... yes
</span><br>
<span class="quotelev1">&gt; checking for working CPU_SET_S... yes
</span><br>
<span class="quotelev1">&gt; checking for working _syscall3... no
</span><br>
<span class="quotelev1">&gt; checking for lib... no
</span><br>
<span class="quotelev1">&gt; checking for bash... /bin/sh
</span><br>
<span class="quotelev1">&gt; checking for ffs... yes
</span><br>
<span class="quotelev1">&gt; checking whether function ffs is declared... yes
</span><br>
<span class="quotelev1">&gt; checking for ffsl... yes
</span><br>
<span class="quotelev1">&gt; checking whether function ffsl is declared... yes
</span><br>
<span class="quotelev1">&gt; checking for fls... no
</span><br>
<span class="quotelev1">&gt; checking for flsl... =======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/02/4383.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/02/4383.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4385.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-424-geb4c503)"</a>
<li><strong>Previous message:</strong> <a href="4383.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (dev-424-geb4c503) ==="</a>
<li><strong>In reply to:</strong> <a href="4383.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (dev-424-geb4c503) ==="</a>
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
