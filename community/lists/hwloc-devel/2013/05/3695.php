<?
$subject_val = "Re: [hwloc-devel] hwloc patch suggestions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 05:08:38 2013" -->
<!-- isoreceived="20130506090838" -->
<!-- sent="Mon, 06 May 2013 11:08:33 +0200" -->
<!-- isosent="20130506090833" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patch suggestions" -->
<!-- id="51877311.1040100_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5186962D.2070900_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc patch suggestions<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-06 05:08:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3696.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Previous message:</strong> <a href="3694.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>In reply to:</strong> <a href="3683.php">Pavan Balaji: "[hwloc-devel] hwloc patch suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3697.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Reply:</strong> <a href="3697.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/05/2013 19:26, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; From d5bee8b50ccefd1ae9f7cd6d69639bfc45b3b0b3 Mon Sep 17 00:00:00 2001
</span><br>
<span class="quotelev1">&gt; From: Pavan Balaji &lt;balaji_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Sun, 5 May 2013 12:21:14 -0500
</span><br>
<span class="quotelev1">&gt; Subject: [PATCH 2/2] Allow users to specify other flags to autoreconf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No reviewer.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;  autogen.sh | 2 +-
</span><br>
<span class="quotelev1">&gt;  1 file changed, 1 insertion(+), 1 deletion(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/autogen.sh b/autogen.sh
</span><br>
<span class="quotelev1">&gt; index d69ef09e..88a122ad 100755
</span><br>
<span class="quotelev1">&gt; --- a/autogen.sh
</span><br>
<span class="quotelev1">&gt; +++ b/autogen.sh
</span><br>
<span class="quotelev1">&gt; @@ -1,2 +1,2 @@
</span><br>
<span class="quotelev1">&gt;  :
</span><br>
<span class="quotelev1">&gt; -autoreconf -ivf
</span><br>
<span class="quotelev1">&gt; +autoreconf ${autoreconf_args:&quot;-ivf&quot;}
</span><br>
<span class="quotelev1">&gt; -- 1.8.1.2
</span><br>
<p>This needs an additional dash:
<br>
<p>-autoreconf -ivf
<br>
+autoreconf ${autoreconf_args:-&quot;-ivf&quot;}
<br>
<p>and it requires a non-empty autoreconf_args such as &quot; &quot; to actually
<br>
remove our &quot;-ivf&quot;. I assume it's still ok for you.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3695/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3696.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Previous message:</strong> <a href="3694.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>In reply to:</strong> <a href="3683.php">Pavan Balaji: "[hwloc-devel] hwloc patch suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3697.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Reply:</strong> <a href="3697.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
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
