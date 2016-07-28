<?
$subject_val = "Re: [hwloc-devel] Cgroup resource limits";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 17:55:00 2012" -->
<!-- isoreceived="20121102215500" -->
<!-- sent="Fri, 2 Nov 2012 17:54:54 -0400" -->
<!-- isosent="20121102215454" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cgroup resource limits" -->
<!-- id="CAHwLALMOa=qJwTnaXwV3O84hrP3mgZNbjX=LjwpLmMjNe_zCAw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="509438AD.4010307_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Cgroup resource limits<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-02 17:54:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3358.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3356.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>In reply to:</strong> <a href="3356.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3359.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3359.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>We added cgroups integration support into Grid Engine a few months
<br>
ago, and we ended up implementing routines that write values to
<br>
&quot;memory.memsw.limit_in_bytes&quot;, &quot;memory.limit_in_bytes&quot;,
<br>
&quot;memory.soft_limit_in_bytes&quot;, etc... We just simply write the values
<br>
out to the cgroups files.
<br>
<p><a href="http://blogs.scalablelogic.com/2012/05/grid-engine-cgroups-integration.html">http://blogs.scalablelogic.com/2012/05/grid-engine-cgroups-integration.html</a>
<br>
<p>I am interested in seeing how Greenplum/EMC implements cgroups limits.
<br>
<p><p>Brice - cgroups allow system administrators to set the resource limit
<br>
of a process (or a group of processes) by interacting with the cgroups
<br>
virtual fs. Once the processes are added to a cgroup, the memory usage
<br>
limit can be added or changed as simply as just just by doing:
<br>
<p># echo 4M &gt; /sys/fs/cgroup/memory/0/memory.limit_in_bytes
<br>
<p>For details, see &quot;3. User Interface&quot;:
<br>
<a href="http://www.kernel.org/doc/Documentation/cgroups/memory.txt">http://www.kernel.org/doc/Documentation/cgroups/memory.txt</a>
<br>
<p>Rayson
<br>
<p>==================================================
<br>
Open Grid Scheduler - The Official Open Source Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p><p>On Fri, Nov 2, 2012 at 5:18 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not very familiar with these features. What system mechanism do you
</span><br>
<span class="quotelev1">&gt; currently use for this? Linux cgroups? Any concrete example of what you
</span><br>
<span class="quotelev1">&gt; would like to do?
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
<span class="quotelev1">&gt; Le 02/11/2012 22:12, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We (Greenplum) have a need to support resource limits (e.g., memory and cpu usage) on processes running under Open MPI's RTE. OMPI uses hwloc for processor and memory affinity, so this seems a likely place to add the required support. Jeff tells me that it doesn't yet exist in hwloc - I'm wondering if you would welcome and/or be willing to consider contributions from our engineers towards adding this capability?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Obviously, we'd need to discuss how and where to do the extension. Just wanted to first see if this is an option, or if we should do it directly in OMPI.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3358.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3356.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>In reply to:</strong> <a href="3356.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3359.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3359.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
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
