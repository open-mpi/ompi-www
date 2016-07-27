<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 issue roundup";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  5 15:59:19 2013" -->
<!-- isoreceived="20130505195919" -->
<!-- sent="Sun, 05 May 2013 14:59:10 -0500" -->
<!-- isosent="20130505195910" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 issue roundup" -->
<!-- id="5186BA0E.6040607_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5186865B.3040603_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.7 issue roundup<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-05 15:59:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3685.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Previous message:</strong> <a href="3683.php">Pavan Balaji: "[hwloc-devel] hwloc patch suggestions"</a>
<li><strong>In reply to:</strong> <a href="3680.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3700.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/05/2013 11:18 AM US Central Time, Pavan Balaji wrote:
<br>
<span class="quotelev1">&gt;  - For sysctl and sysctlbyname, I've updated hwloc/config.m4 to use a
</span><br>
<span class="quotelev1">&gt; full link test instead of just using AC_CHECK_FUNCS, which only checks
</span><br>
<span class="quotelev1">&gt; to see if the symbol exists or not.  For example, the prototype of
</span><br>
<span class="quotelev1">&gt; sysctl uses u_int, which on some platforms (such as FreeBSD) is only
</span><br>
<span class="quotelev1">&gt; defined under __BSD_VISIBLE, __USE_BSD or other similar definitions.  So
</span><br>
<span class="quotelev1">&gt; while the symbols &quot;sysctl&quot; and &quot;sysctlbyname&quot; might still be available
</span><br>
<span class="quotelev1">&gt; in libc (which autoconf checks for), they might not be actually usable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The below commit fixes this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/commitdiff/db276e4e">http://git.mpich.org/mpich.git/commitdiff/db276e4e</a>
</span><br>
<p>You probably also want to pick up this commit:
<br>
<p><a href="http://git.mpich.org/mpich.git/commitdiff/d2072896">http://git.mpich.org/mpich.git/commitdiff/d2072896</a>
<br>
<p>The Intel compiler went very sad without stdio.h for &quot;NULL&quot;.
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3685.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Previous message:</strong> <a href="3683.php">Pavan Balaji: "[hwloc-devel] hwloc patch suggestions"</a>
<li><strong>In reply to:</strong> <a href="3680.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3700.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
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
