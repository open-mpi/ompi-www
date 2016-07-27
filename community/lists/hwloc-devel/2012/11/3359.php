<?
$subject_val = "Re: [hwloc-devel] Cgroup resource limits";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 18:15:55 2012" -->
<!-- isoreceived="20121102221555" -->
<!-- sent="Fri, 2 Nov 2012 15:15:47 -0700" -->
<!-- isosent="20121102221547" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cgroup resource limits" -->
<!-- id="2308582B-F183-41A1-8A4B-781788B6E308_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAHwLALMOa=qJwTnaXwV3O84hrP3mgZNbjX=LjwpLmMjNe_zCAw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-02 18:15:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3360.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4976)"</a>
<li><strong>Previous message:</strong> <a href="3358.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>In reply to:</strong> <a href="3357.php">Rayson Ho: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3358.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool - I was just proposing that we do this from within hwloc instead of implementing it separately everywhere.
<br>
<p>On Nov 2, 2012, at 2:54 PM, Rayson Ho &lt;raysonlogin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We added cgroups integration support into Grid Engine a few months
</span><br>
<span class="quotelev1">&gt; ago, and we ended up implementing routines that write values to
</span><br>
<span class="quotelev1">&gt; &quot;memory.memsw.limit_in_bytes&quot;, &quot;memory.limit_in_bytes&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;memory.soft_limit_in_bytes&quot;, etc... We just simply write the values
</span><br>
<span class="quotelev1">&gt; out to the cgroups files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.scalablelogic.com/2012/05/grid-engine-cgroups-integration.html">http://blogs.scalablelogic.com/2012/05/grid-engine-cgroups-integration.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am interested in seeing how Greenplum/EMC implements cgroups limits.
</span><br>
<p>I think my other note explained this - hopefully it helped :-)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice - cgroups allow system administrators to set the resource limit
</span><br>
<span class="quotelev1">&gt; of a process (or a group of processes) by interacting with the cgroups
</span><br>
<span class="quotelev1">&gt; virtual fs. Once the processes are added to a cgroup, the memory usage
</span><br>
<span class="quotelev1">&gt; limit can be added or changed as simply as just just by doing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # echo 4M &gt; /sys/fs/cgroup/memory/0/memory.limit_in_bytes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For details, see &quot;3. User Interface&quot;:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kernel.org/doc/Documentation/cgroups/memory.txt">http://www.kernel.org/doc/Documentation/cgroups/memory.txt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Nov 2, 2012 at 5:18 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am not very familiar with these features. What system mechanism do you
</span><br>
<span class="quotelev2">&gt;&gt; currently use for this? Linux cgroups? Any concrete example of what you
</span><br>
<span class="quotelev2">&gt;&gt; would like to do?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 02/11/2012 22:12, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We (Greenplum) have a need to support resource limits (e.g., memory and cpu usage) on processes running under Open MPI's RTE. OMPI uses hwloc for processor and memory affinity, so this seems a likely place to add the required support. Jeff tells me that it doesn't yet exist in hwloc - I'm wondering if you would welcome and/or be willing to consider contributions from our engineers towards adding this capability?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Obviously, we'd need to discuss how and where to do the extension. Just wanted to first see if this is an option, or if we should do it directly in OMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<li><strong>Next message:</strong> <a href="3360.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4976)"</a>
<li><strong>Previous message:</strong> <a href="3358.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>In reply to:</strong> <a href="3357.php">Rayson Ho: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3358.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
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
