<?
$subject_val = "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 00:59:13 2014" -->
<!-- isoreceived="20140620045913" -->
<!-- sent="Fri, 20 Jun 2014 13:59:14 +0900" -->
<!-- isosent="20140620045914" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile" -->
<!-- id="53A3BFA2.40008_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6B81AB25-F1B8-4316-85C5-DD0B1BA1BFB7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-20 00:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15037.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Previous message:</strong> <a href="15035.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<li><strong>In reply to:</strong> <a href="15034.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15037.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Reply:</strong> <a href="15037.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>my test VM is single socket four cores.
<br>
here is something odd i just found when running mpirun -np 2
<br>
intercomm_create.
<br>
tasks [0,1] are bound on cpus [0,1] =&gt; OK
<br>
tasks[2-3] (first spawn) are bound on cpus [2,3] =&gt; OK
<br>
tasks[4-5] (second spawn) are not bound (and cpuset is [0-3]) =&gt; OK
<br>
<p>in ompi_proc_set_locality (ompi/proc/proc.c:228) on task 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locality =
<br>
opal_hwloc_base_get_relative_locality(opal_hwloc_topology,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
ompi_process_info.cpuset,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
cpu_bitmap);
<br>
where
<br>
ompi_process_info.cpuset is &quot;0&quot;
<br>
cpu_bitmap is &quot;0-3&quot;
<br>
<p>and locality is set to OPAL_PROC_ON_HWTHREAD (!)
<br>
<p>is this correct ?
<br>
<p>i would have expected OPAL_PROC_ON_L2CACHE (since there is a single L2
<br>
cache on my vm,
<br>
as reported by lstopo) or even OPAL_PROC_LOCALITY_UNKNOWN
<br>
<p>then in mca_coll_ml_comm_query (ompi/mca/coll/ml/coll_ml_module.c:2899)
<br>
the module
<br>
disqualifies itself if !ompi_rte_proc_bound.
<br>
if locality were previously set to OPAL_PROC_LOCALITY_UNKNOWN, coll/ml
<br>
could checked the flag
<br>
of all the procs of the communicator and disqualify itself if at least
<br>
one of them is OPAL_PROC_LOCALITY_UNKNOWN.
<br>
<p><p>as you wrote, there might be a bunch of other corner cases.
<br>
that being said, i ll try to write a simple proof of concept and see it
<br>
this specific hang can be avoided
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/06/20 12:08, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; It is related, but it means that coll/ml has a higher degree of sensitivity to the binding pattern than what you reported (which was that coll/ml doesn't work with unbound processes). What we are now seeing is that coll/ml also doesn't work when processes are bound across sockets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which means that Nathan's revised tests are going to have to cover a lot more corner cases. Our locality flags don't currently include &quot;bound-to-multiple-sockets&quot;, and I'm not sure how he is going to easily resolve that case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15037.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Previous message:</strong> <a href="15035.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<li><strong>In reply to:</strong> <a href="15034.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15037.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Reply:</strong> <a href="15037.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
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
