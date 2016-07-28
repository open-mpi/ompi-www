<?
$subject_val = "[OMPI devel] RFC: opal_value_array";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 19:47:44 2010" -->
<!-- isoreceived="20100116004744" -->
<!-- sent="Fri, 15 Jan 2010 17:47:35 -0700" -->
<!-- isosent="20100116004735" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: opal_value_array" -->
<!-- id="9CA997BB-A5C7-4C37-9EF8-920AFE8A88B7_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: opal_value_array<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-15 19:47:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7320.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Previous message:</strong> <a href="7318.php">Jeff Squyres: "[OMPI devel] New v1.5 branch created"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I don't think this actually impacts much other than ORTE, and mostly my efforts. But since it involves a change to an opal class function, I thought I would at least send out a &quot;heads up&quot;.
<br>
<p>WHAT: modify opal_value_array class to allow developers to identify an &quot;invalid&quot; value that will be used to pre-load the array so subsequent calls can tell if valid values were entered into an array position
<br>
<p>WHY: thread safety, for one. Currently, there is no way for one thread to determine that another thread has actually entered a value in an array position
<br>
<p>IMPACT: (a) will modify the opal_value_array_init function to add a parameter that points to the &quot;invalid&quot; value for that array (NULL =&gt; no invalid value provided); (b) will modify the internal function that grows an array to pre-load it with that value if it was provided
<br>
<p>WHERE: almost exclusively in a handful of places in ORTE. Only exception are a few calls to carto graph distance function, one of which is in the sm btl.
<br>
<p>WHEN: Jan 22, 2010
<br>
<p><p>Let me know if you care about this - it is pretty trivial, but required for thread safety.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7320.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Previous message:</strong> <a href="7318.php">Jeff Squyres: "[OMPI devel] New v1.5 branch created"</a>
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
