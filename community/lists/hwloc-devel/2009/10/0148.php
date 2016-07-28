<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 12:07:57 2009" -->
<!-- isoreceived="20091005160757" -->
<!-- sent="Mon, 5 Oct 2009 12:07:48 -0400" -->
<!-- isosent="20091005160748" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="2AF66C7E-7BB8-402A-9AF4-7C72BA763D09_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ACA03EA.5020804_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] release status<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-05 12:07:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0149.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1101)"</a>
<li><strong>Previous message:</strong> <a href="0147.php">Brice Goglin: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0147.php">Brice Goglin: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 5, 2009, at 10:34 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I haven't had time to actually fully implement this yet, but my last
</span><br>
<span class="quotelev1">&gt; plan was opaque pointer + functions such as:
</span><br>
<span class="quotelev1">&gt;     hwloc_cpuset_t hwloc_cpuset_alloc(void);
</span><br>
<span class="quotelev1">&gt;     void hwloc_cpuset_destroy(hwloc_cpuset_t cpuset);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Minor quibble: it might be good to have nice &quot;opposites&quot; in the verbs  
<br>
-- alloc and free, create and destroy, etc.
<br>
<p><span class="quotelev1">&gt;     hwloc_cpuset_t hwloc_cpuset_copy(hwloc_cpuset_t cpuset);
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;     typedef struct hwloc_cpuset_s * hwloc_cpuset_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I like having the concept of a fully opaque pointer such that users  
<br>
will be compelled to use the alloc/free functions.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0149.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1101)"</a>
<li><strong>Previous message:</strong> <a href="0147.php">Brice Goglin: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0147.php">Brice Goglin: "Re: [hwloc-devel] release status"</a>
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
