<?
$subject_val = "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  9 17:31:19 2015" -->
<!-- isoreceived="20151009213119" -->
<!-- sent="Fri, 9 Oct 2015 23:31:14 +0200" -->
<!-- isosent="20151009213114" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace" -->
<!-- id="56183222.6080407_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56182BF5.5020109_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-09 17:31:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4629.php">Guy Streeter: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<li><strong>Previous message:</strong> <a href="4627.php">Guy Streeter: "[hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<li><strong>In reply to:</strong> <a href="4627.php">Guy Streeter: "[hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4629.php">Guy Streeter: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<li><strong>Reply:</strong> <a href="4629.php">Guy Streeter: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This broken code is only used when a plugin fails to find core symbols.
<br>
Only happens in case of namespace issues (for instance when libhwloc is
<br>
loaded by another layer of plugin, something we advice not to do).
<br>
<p>Thanks, I'll apply this.
<br>
<p>Brice
<br>
<p><p><p>Le 09/10/2015 23:04, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; I am not able explain why this doesn't fail everywhere. If
</span><br>
<span class="quotelev1">&gt; HWLOC_PLUGINS_VERBOSE is not set, atoi() gets called with a NULL pointer, and
</span><br>
<span class="quotelev1">&gt; the behavior in that case is undocumented.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Guy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/10/4627.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/10/4627.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4629.php">Guy Streeter: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<li><strong>Previous message:</strong> <a href="4627.php">Guy Streeter: "[hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<li><strong>In reply to:</strong> <a href="4627.php">Guy Streeter: "[hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4629.php">Guy Streeter: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<li><strong>Reply:</strong> <a href="4629.php">Guy Streeter: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
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
