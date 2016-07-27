<?
$subject_val = "Re: [hwloc-devel] Priority of env vars vs. application options";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 19:05:04 2009" -->
<!-- isoreceived="20091027230504" -->
<!-- sent="Wed, 28 Oct 2009 00:04:48 +0100" -->
<!-- isosent="20091027230448" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Priority of env vars vs. application options" -->
<!-- id="4AE77C90.2000003_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091027221658.GF4661_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Priority of env vars vs. application options<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-27 19:04:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0266.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Previous message:</strong> <a href="0264.php">Samuel Thibault: "[hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>In reply to:</strong> <a href="0264.php">Samuel Thibault: "[hwloc-devel] Priority of env vars vs. application options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0266.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Reply:</strong> <a href="0266.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the moment, the HWLOC_FSROOT and HWLOC_XMLFILE environment variables
</span><br>
<span class="quotelev1">&gt; override tool options and application configuration.  Is it really the
</span><br>
<span class="quotelev1">&gt; behavior we should have?  I'd tend to think that the priority order
</span><br>
<span class="quotelev1">&gt; should be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - application options/configuration
</span><br>
<span class="quotelev1">&gt; - environment variable
</span><br>
<span class="quotelev1">&gt; - default OS backend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i.e. basically move the HWLOC_FSROOT/HWLOC_XMLFILE interpretation to
</span><br>
<span class="quotelev1">&gt; hwloc_topology_init, before the application can override them through
</span><br>
<span class="quotelev1">&gt; configuration calls. Similarly, HWLOCK_THISSYSTEM would be overriden by
</span><br>
<span class="quotelev1">&gt; HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>For things like lstopo, we talked about it with Guillaume, and it seems
<br>
clear that --xml should override HWLOC_XMLFILE. For other applications,
<br>
I am not sure. I added HWLOC_XMLFILE to be able to dynamically switch to
<br>
another topology for debugging purpose. If the application loads a XML
<br>
file and the user finds that there is something wrong going on, being
<br>
able to force-load another XML file might still be helpful. It's not
<br>
clear that applications will let you change the XML file they load. For
<br>
instance, it could be internal to the MPI process manager without ever
<br>
exposing it to the user (process manager loads the topology once at
<br>
startup, saves it as XML, and all MPI processes reload it from XML). In
<br>
this case, being able to override with the env variable might be
<br>
helpful. So I am not sure which order is the best.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0266.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Previous message:</strong> <a href="0264.php">Samuel Thibault: "[hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>In reply to:</strong> <a href="0264.php">Samuel Thibault: "[hwloc-devel] Priority of env vars vs. application options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0266.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Reply:</strong> <a href="0266.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
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
