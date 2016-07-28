<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 01:24:51 2011" -->
<!-- isoreceived="20111221062451" -->
<!-- sent="Wed, 21 Dec 2011 07:24:43 +0100" -->
<!-- isosent="20111221062443" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue" -->
<!-- id="4EF17BAB.5070208_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EF16E82.8070009_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 01:24:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2665.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4098)"</a>
<li><strong>Previous message:</strong> <a href="2663.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue"</a>
<li><strong>In reply to:</strong> <a href="2663.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Applied, thanks!
<br>
Brice
<br>
<p><p><p>Le 21/12/2011 06:28, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt; When configuring hwloc-1.3.1rc1 on anything but x86 or x86-64 one sees
</span><br>
<span class="quotelev1">&gt; the following:
</span><br>
<span class="quotelev1">&gt;    checking which CPU support to include... checking size of unsigned
</span><br>
<span class="quotelev1">&gt; long... 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patch below will change that to
</span><br>
<span class="quotelev1">&gt;     checking which CPU support to include... unknown
</span><br>
<span class="quotelev1">&gt;     checking size of unsigned long... 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- hwloc-1.3.1rc1/config/hwloc.m4~     2011-12-20 21:16:22.000000000
</span><br>
<span class="quotelev1">&gt; -0800
</span><br>
<span class="quotelev1">&gt; +++ hwloc-1.3.1rc1/config/hwloc.m4      2011-12-20 21:18:08.000000000
</span><br>
<span class="quotelev1">&gt; -0800
</span><br>
<span class="quotelev1">&gt; @@ -247,6 +247,10 @@
</span><br>
<span class="quotelev1">&gt;              AC_MSG_RESULT([unknown -- assuming x86_64])
</span><br>
<span class="quotelev1">&gt;              ;;
</span><br>
<span class="quotelev1">&gt;          esac
</span><br>
<span class="quotelev1">&gt; +        ;;
</span><br>
<span class="quotelev1">&gt; +      *)
</span><br>
<span class="quotelev1">&gt; +        AC_MSG_RESULT([unknown])
</span><br>
<span class="quotelev1">&gt; +        ;;
</span><br>
<span class="quotelev1">&gt;      esac
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      AC_CHECK_SIZEOF([unsigned long])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2665.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4098)"</a>
<li><strong>Previous message:</strong> <a href="2663.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue"</a>
<li><strong>In reply to:</strong> <a href="2663.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue"</a>
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
