<?
$subject_val = "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  9 17:46:59 2015" -->
<!-- isoreceived="20151009214659" -->
<!-- sent="Fri, 9 Oct 2015 16:46:55 -0500" -->
<!-- isosent="20151009214655" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace" -->
<!-- id="561835CF.5000006_at_redhat.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56183222.6080407_at_inria.fr" -->
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
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-09 17:46:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4630.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-809-g551d912)"</a>
<li><strong>Previous message:</strong> <a href="4628.php">Brice Goglin: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<li><strong>In reply to:</strong> <a href="4628.php">Brice Goglin: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/09/2015 04:31 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; This broken code is only used when a plugin fails to find core symbols.
</span><br>
<span class="quotelev1">&gt; Only happens in case of namespace issues (for instance when libhwloc is
</span><br>
<span class="quotelev1">&gt; loaded by another layer of plugin, something we advice not to do).
</span><br>
<p>I don't think I'm doing that, but I'm not sure exactly what that means.
<br>
It fails in python-hwloc consistently on a Fedora 22 virtual machine, but not
<br>
at all on Fedora 21 on real hardware. (Those are my 2 test-cases)
<br>
<p>--Guy
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, I'll apply this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 09/10/2015 23:04, Guy Streeter a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I am not able explain why this doesn't fail everywhere. If
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_PLUGINS_VERBOSE is not set, atoi() gets called with a NULL pointer, and
</span><br>
<span class="quotelev2">&gt;&gt; the behavior in that case is undocumented.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --Guy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/10/4627.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/10/4627.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/10/4629.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/10/4629.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4630.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-809-g551d912)"</a>
<li><strong>Previous message:</strong> <a href="4628.php">Brice Goglin: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<li><strong>In reply to:</strong> <a href="4628.php">Brice Goglin: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
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
