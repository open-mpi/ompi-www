<?
$subject_val = "Re: [OMPI users] removed maffinity, paffinity in 1.7+";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 10:36:35 2014" -->
<!-- isoreceived="20140915143635" -->
<!-- sent="Mon, 15 Sep 2014 16:36:13 +0200" -->
<!-- isosent="20140915143613" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] removed maffinity, paffinity in 1.7+" -->
<!-- id="CAAbhqc74qVZ0MgpNZASjgumUC_L2JqHpPC-Kd6ZunSnkXjTUdw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E7855766-45F8-42DF-87C8-BB2A4A48422E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] removed maffinity, paffinity in 1.7+<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-15 10:36:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25335.php">Jeff Squyres (jsquyres): "Re: [OMPI users] oepnmpi-1.8.2 cann't complete configure"</a>
<li><strong>Previous message:</strong> <a href="25333.php">Ralph Castain: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<li><strong>In reply to:</strong> <a href="25332.php">Ralph Castain: "Re: [OMPI users] removed maffinity, paffinity in 1.7+"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Superb, thanks for the clarification!
<br>
<p>I will look into it!
<br>
<p>2014-09-15 16:33 GMT+02:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Not really &quot;removed&quot; - say rather &quot;renamed&quot;. The PLPA system was replaced
</span><br>
<span class="quotelev1">&gt; by HWLOC starting with the 1.7 series. The binding directives were replaced
</span><br>
<span class="quotelev1">&gt; with --bind-to &lt;x&gt; options as they became much more fine-grained than
</span><br>
<span class="quotelev1">&gt; before - you can bind all the way do the hardware thread level.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't want to bind at all, you now use --bind-to none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Memory affinity options are likewise now implemented as part of hwloc. You
</span><br>
<span class="quotelev1">&gt; can see all these new params using ompi_info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info --param hwloc all --level 9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc&quot; (current value: &quot;&quot;, data
</span><br>
<span class="quotelev1">&gt; source:
</span><br>
<span class="quotelev1">&gt;                           default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the hwloc
</span><br>
<span class="quotelev1">&gt;                           framework (&lt;none&gt; means use all components that
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt;                           be found)
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;,
</span><br>
<span class="quotelev1">&gt;                           data source: default, level: 8 dev/detail, type:
</span><br>
<span class="quotelev1">&gt;                           int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the hwloc framework (0 = no
</span><br>
<span class="quotelev1">&gt;                           verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_mem_alloc_policy&quot; (current
</span><br>
<span class="quotelev1">&gt;                           value: &quot;none&quot;, data source: default, level: 9
</span><br>
<span class="quotelev1">&gt;                           dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           General memory allocations placement policy (this
</span><br>
<span class="quotelev1">&gt;                           is not memory binding). &quot;none&quot; means that no
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev1">&gt;                           policy is applied. &quot;local_only&quot; means that a
</span><br>
<span class="quotelev1">&gt;                           process' memory allocations will be restricted to
</span><br>
<span class="quotelev1">&gt;                           its local NUMA node. If using direct launch, this
</span><br>
<span class="quotelev1">&gt;                           policy will not be in effect until after
</span><br>
<span class="quotelev1">&gt; MPI_INIT.
</span><br>
<span class="quotelev1">&gt;                           Note that operating system paging policies are
</span><br>
<span class="quotelev1">&gt;                           unaffected by this setting. For example, if
</span><br>
<span class="quotelev1">&gt;                           &quot;local_only&quot; is used and local NUMA node memory
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt;                           exhausted, a new memory allocation may cause
</span><br>
<span class="quotelev1">&gt;                           paging.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;none&quot;, 1:&quot;local_only&quot;
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_mem_bind_failure_action&quot;
</span><br>
<span class="quotelev1">&gt;                           (current value: &quot;warn&quot;, data source: default,
</span><br>
<span class="quotelev1">&gt;                           level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           What Open MPI will do if it explicitly tries to
</span><br>
<span class="quotelev1">&gt;                           bind memory to a specific NUMA location, and
</span><br>
<span class="quotelev1">&gt; fails.
</span><br>
<span class="quotelev1">&gt;                            Note that this is a different case than the
</span><br>
<span class="quotelev1">&gt;                           general allocation policy described by
</span><br>
<span class="quotelev1">&gt;                           hwloc_base_alloc_policy.  A value of &quot;silent&quot;
</span><br>
<span class="quotelev1">&gt; means
</span><br>
<span class="quotelev1">&gt;                           that Open MPI will proceed without comment. A
</span><br>
<span class="quotelev1">&gt; value
</span><br>
<span class="quotelev1">&gt;                           of &quot;warn&quot; means that Open MPI will warn the first
</span><br>
<span class="quotelev1">&gt;                           time this happens, but allow the job to continue
</span><br>
<span class="quotelev1">&gt;                           (possibly with degraded performance).  A value of
</span><br>
<span class="quotelev1">&gt;                           &quot;error&quot; means that Open MPI will abort the job if
</span><br>
<span class="quotelev1">&gt;                           this happens.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;silent&quot;, 1:&quot;warn&quot;, 2:&quot;error&quot;
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_binding_policy&quot; (current
</span><br>
<span class="quotelev1">&gt;                           value: &quot;&quot;, data source: default, level: 9
</span><br>
<span class="quotelev1">&gt; dev/all,
</span><br>
<span class="quotelev1">&gt;                           type: string)
</span><br>
<span class="quotelev1">&gt;                           Policy for binding processes. Allowed values:
</span><br>
<span class="quotelev1">&gt; none,
</span><br>
<span class="quotelev1">&gt;                           hwthread, core, l1cache, l2cache, l3cache,
</span><br>
<span class="quotelev1">&gt; socket,
</span><br>
<span class="quotelev1">&gt;                           numa, board (&quot;none&quot; is the default when
</span><br>
<span class="quotelev1">&gt;                           oversubscribed, &quot;core&quot; is the default when np&lt;=2,
</span><br>
<span class="quotelev1">&gt;                           and &quot;socket&quot; is the default when np&gt;2). Allowed
</span><br>
<span class="quotelev1">&gt;                           qualifiers: overload-allowed, if-supported
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_bind_to_core&quot; (current
</span><br>
<span class="quotelev1">&gt; value:
</span><br>
<span class="quotelev1">&gt;                           &quot;false&quot;, data source: default, level: 9 dev/all,
</span><br>
<span class="quotelev1">&gt;                           type: bool)
</span><br>
<span class="quotelev1">&gt;                           Bind processes to cores
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1:
</span><br>
<span class="quotelev1">&gt;                           t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_bind_to_socket&quot; (current
</span><br>
<span class="quotelev1">&gt;                           value: &quot;false&quot;, data source: default, level: 9
</span><br>
<span class="quotelev1">&gt;                           dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Bind processes to sockets
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1:
</span><br>
<span class="quotelev1">&gt;                           t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_report_bindings&quot; (current
</span><br>
<span class="quotelev1">&gt;                           value: &quot;false&quot;, data source: default, level: 9
</span><br>
<span class="quotelev1">&gt;                           dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Report bindings to stderr
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1:
</span><br>
<span class="quotelev1">&gt;                           t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_slot_list&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                           &quot;&quot;, data source: default, level: 9 dev/all, type:
</span><br>
<span class="quotelev1">&gt;                           string)
</span><br>
<span class="quotelev1">&gt;                           List of processor IDs to bind processes to
</span><br>
<span class="quotelev1">&gt;                           [default=NULL]
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_cpu_set&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;&quot;,
</span><br>
<span class="quotelev1">&gt;                           data source: default, level: 9 dev/all, type:
</span><br>
<span class="quotelev1">&gt;                           string)
</span><br>
<span class="quotelev1">&gt;                           Comma-separated list of ranges specifying logical
</span><br>
<span class="quotelev1">&gt;                           cpus allocated to this job [default: none]
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_use_hwthreads_as_cpus&quot;
</span><br>
<span class="quotelev1">&gt;                           (current value: &quot;false&quot;, data source: default,
</span><br>
<span class="quotelev1">&gt;                           level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Use hardware threads as independent cpus
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1:
</span><br>
<span class="quotelev1">&gt;                           t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_topo_file&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                           &quot;&quot;, data source: default, level: 9 dev/all, type:
</span><br>
<span class="quotelev1">&gt;                           string)
</span><br>
<span class="quotelev1">&gt;                           Read local topology from file instead of directly
</span><br>
<span class="quotelev1">&gt;                           sensing it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 15, 2014, at 7:13 AM, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; maffinity, paffinity parameters have been removed since 1.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the uninitiated is this because it has been digested by the code so as
</span><br>
<span class="quotelev1">&gt; the code would automatically decide on these values?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For instance I have always been using paffinity_alone=1 for single node
</span><br>
<span class="quotelev1">&gt; jobs with entire occupation.
</span><br>
<span class="quotelev1">&gt; From what it seems, this is not necessary any more?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence what does &quot;removed&quot; cover and are there anything that we as users
</span><br>
<span class="quotelev1">&gt; should take care of when having previously dealt with these parameters?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried searching the users-list, to no avail, and the NEWS file does
</span><br>
<span class="quotelev1">&gt; not cover it (simply says &quot;removed&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25331.php">http://www.open-mpi.org/community/lists/users/2014/09/25331.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25332.php">http://www.open-mpi.org/community/lists/users/2014/09/25332.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25334/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25335.php">Jeff Squyres (jsquyres): "Re: [OMPI users] oepnmpi-1.8.2 cann't complete configure"</a>
<li><strong>Previous message:</strong> <a href="25333.php">Ralph Castain: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<li><strong>In reply to:</strong> <a href="25332.php">Ralph Castain: "Re: [OMPI users] removed maffinity, paffinity in 1.7+"</a>
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
