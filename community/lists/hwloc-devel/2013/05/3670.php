<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  3 01:57:54 2013" -->
<!-- isoreceived="20130503055754" -->
<!-- sent="Fri, 03 May 2013 07:57:49 +0200" -->
<!-- isosent="20130503055749" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD" -->
<!-- id="518351DD.7090407_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5183409C.70100_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-03 01:57:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3671.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="3669.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="3669.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3671.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, all of them are harmless but I'll see if I can fix some of them
<br>
without changing too many things. FreeBSD has a &quot;cpuset&quot; function so a
<br>
lot of our variables conflict with it.
<br>
<p>Brice
<br>
<p><p><p>Le 03/05/2013 06:44, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-1.7 is throwing a number of warnings on FreeBSD.  Most of them are
</span><br>
<span class="quotelev1">&gt; for global variables being shadowed and incorrect function casting.  I
</span><br>
<span class="quotelev1">&gt; am able to reproduce it with CFLAGS='-Wall -Wextra -Wshadow
</span><br>
<span class="quotelev1">&gt; -Wbad-function-cast'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are some of the warnings --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /home/balaji/software/mpich/hwloc/include/hwloc.h:2225,
</span><br>
<span class="quotelev1">&gt;                  from topology-freebsd.c:26:
</span><br>
<span class="quotelev1">&gt; /home/balaji/software/mpich/hwloc/include/hwloc/helper.h: In function
</span><br>
<span class="quotelev1">&gt; 'hwloc_distribute':
</span><br>
<span class="quotelev1">&gt; /home/balaji/software/mpich/hwloc/include/hwloc/helper.h:786: warning:
</span><br>
<span class="quotelev1">&gt; declaration of 'cpuset' shadows a global declaration
</span><br>
<span class="quotelev1">&gt; /usr/include/sys/cpuset.h:222: warning: shadowed declaration is here
</span><br>
<span class="quotelev1">&gt; /home/balaji/software/mpich/hwloc/include/hwloc/helper.h: In function
</span><br>
<span class="quotelev1">&gt; 'hwloc_distributev':
</span><br>
<span class="quotelev1">&gt; /home/balaji/software/mpich/hwloc/include/hwloc/helper.h:806: warning:
</span><br>
<span class="quotelev1">&gt; declaration of 'cpuset' shadows a global declaration
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lstopo-draw.c: In function 'pci_device_draw':
</span><br>
<span class="quotelev1">&gt; lstopo-draw.c:437: warning: cast from function call of type 'double' to
</span><br>
<span class="quotelev1">&gt; non-matching type 'unsigned int'
</span><br>
<span class="quotelev1">&gt; lstopo-draw.c:437: warning: cast from function call of type 'double' to
</span><br>
<span class="quotelev1">&gt; non-matching type 'unsigned int'
</span><br>
<span class="quotelev1">&gt; lstopo-draw.c:444: warning: cast from function call of type 'double' to
</span><br>
<span class="quotelev1">&gt; non-matching type 'unsigned int'
</span><br>
<span class="quotelev1">&gt; lstopo-draw.c:444: warning: cast from function call of type 'double' to
</span><br>
<span class="quotelev1">&gt; non-matching type 'unsigned int'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3671.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="3669.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="3669.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3671.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
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
