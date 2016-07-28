<?
$subject_val = "[OMPI devel] RFC: revamp of ORTE global structures";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 17 11:32:59 2014" -->
<!-- isoreceived="20140517153259" -->
<!-- sent="Sat, 17 May 2014 08:31:00 -0700" -->
<!-- isosent="20140517153100" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: revamp of ORTE global structures" -->
<!-- id="D055561F-EDE6-40AA-A8A7-CA37461951E9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: revamp of ORTE global structures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-17 11:31:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14823.php">Gilles Gouaillardet: "[OMPI devel] problem compiling trunk after r31810"</a>
<li><strong>Previous message:</strong> <a href="14821.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:   Revise the global ORTE data structures:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* orte_app_context_t
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* orte_node_t
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* orte_job_t
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* orte_proc_t
<br>
<p>WHY:     The current definitions are rigid and hard to extend. In the past, we have extended
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;them by hard-coding new fields into the structures. This has led to issues for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;off-trunk researchers and developers, and caused the structures to balloon in size.
<br>
<p><p>WHEN:    This is pretty disruptive and touches a lot of ORTE files, so let's give it a few weeks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and set timeout for June 3rd after the telecon
<br>
<p><p>BRANCH:  <a href="https://bitbucket.org/rhc/ompi-rtc">https://bitbucket.org/rhc/ompi-rtc</a>
<br>
<p><p>PLEASE test your favorite mpirun options to ensure everything is working correctly. There are quite a few combinations, and I can't possibly guarantee I have hit them all.
<br>
<p><p>****************************
<br>
More detail:
<br>
<p>As noted in the summary, every time we want to add another capability to the system, we frequently wind up adding another dedicated field to the ORTE data structures. For example, we have a number of booleans in the structures, each of which may only be used in a single, uncommon use-case. Those wanting to investigate new capabilities, or developers wishing to add something to the system, not only need to add more fields to the structures, but also (a) ensure that the datatype support routines know about them, (b) ensure that the odls packing/unpacking functions know how to handle it, if the capability involves launching processes, and (c) ensure that the nidmap code knows about any new data fields.
<br>
<p>All together, it is pretty intimidating and fragile - and adds memory footprint for every feature.
<br>
<p>As many of you know, we are about to add a number of new features to the system (e.g., power/freq control, direct cgroup support). After starting to work on these, it became apparent that we would be adding yet another set of rarely used fields to the various structures, further increasing the memory footprint for no good reason. Hence, I undertook a revision of not only the objects, but also how we handle their transmission during launch.
<br>
<p>The resulting code can be broken down into two key concepts:
<br>
<p>* combining frequently used booleans into a single &quot;flag&quot; field in each structure - the size of the flag varies between the structures according to the number of required booleans. Macros are provided to set/unset/test flags so we can easily revise the system as required (e.g., if we need someday to go to opal_bitmap_t's instead of simple int-like fields).
<br>
<p>* adding a list of &quot;attributes&quot; to each structure where infrequently used and/or non-boolean options can be stored. A new &quot;orte_attribute_t&quot; structure is defined that provides a key/value storage mechanism for these lists. In order to conserve memory, the key is an integer instead of a string. Functions for setting and getting attributes are provided. When an attribute is &quot;set&quot;, you also specify whether it is to be shared globally (i.e., to be included when packing the associated structure's attribute list), or to be kept local.
<br>
<p>Definition of the new flags and attributes are provided in two new files:
<br>
<p>*  orte/util/attr.h - contains key and structure definitions for attributes, and flag names plus macros
<br>
<p>* orte/util/attr.c - contains the attribute support functions
<br>
<p>These revisions have allowed me to not only reduce our memory footprint, but also reduce the size of the launch message by removing a lot of duplicated and unnecessary info. The nidmap and odls codes have been revamped accordingly.
<br>
<p>Comments and/or suggestions are welcomed.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14823.php">Gilles Gouaillardet: "[OMPI devel] problem compiling trunk after r31810"</a>
<li><strong>Previous message:</strong> <a href="14821.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
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
