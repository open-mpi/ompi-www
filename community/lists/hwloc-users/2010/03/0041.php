<?
$subject_val = "Re: [hwloc-users] hwloc with pthreads on windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 10:48:36 2010" -->
<!-- isoreceived="20100312154836" -->
<!-- sent="Fri, 12 Mar 2010 16:48:31 +0100" -->
<!-- isosent="20100312154831" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc with pthreads on windows" -->
<!-- id="20100312154831.GU5044_at_const.bordeaux.inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="COL124-W42F08E652E4E3A25053CA3D6310_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc with pthreads on windows<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 10:48:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0042.php">Bert Wesarg: "[hwloc-users] hwloc_topology_set_pid() and hwloc_get_cpubind()"</a>
<li><strong>Previous message:</strong> <a href="0040.php">&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;: "Re: [hwloc-users] hwloc with pthreads on windows"</a>
<li><strong>In reply to:</strong> <a href="0040.php">&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;: "Re: [hwloc-users] hwloc with pthreads on windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;, le Fri 12 Mar 2010 17:30:36 +0200, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; I'm using MinGW and Pthreads-w32. I've made the program to use HANDLE
</span><br>
<span class="quotelev1">&gt; instead of pthreads but I'd prefer pthreads, so I'm asking if there is
</span><br>
<span class="quotelev1">&gt; a way to make hwloc use pthreads instead of HANDLE
</span><br>
<p>Well, pthreads-w32 is just one of the packages that provide a
<br>
posix-compatible thread API.  In e.g. StarPU, we are using another one,
<br>
and thus there is not standardization of what a pthread_t is and the way
<br>
to get a HANDLE from that.  Hwloc can thus not do the conversion itself,
<br>
as it can't know which pthread package is used by the application.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0042.php">Bert Wesarg: "[hwloc-users] hwloc_topology_set_pid() and hwloc_get_cpubind()"</a>
<li><strong>Previous message:</strong> <a href="0040.php">&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;: "Re: [hwloc-users] hwloc with pthreads on windows"</a>
<li><strong>In reply to:</strong> <a href="0040.php">&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;: "Re: [hwloc-users] hwloc with pthreads on windows"</a>
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
