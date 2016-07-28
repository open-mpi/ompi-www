<?
$subject_val = "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 17:29:48 2014" -->
<!-- isoreceived="20140729212948" -->
<!-- sent="Tue, 29 Jul 2014 14:29:46 -0700" -->
<!-- isosent="20140729212946" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value" -->
<!-- id="CAAvDA14u7OTC-NQFt_v3hqWV7rJ=NbPLCSvXA22eLZ9HCGrpag_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140729211016.GF43566_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 17:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15329.php">Joshua Ladd: "Re: [OMPI devel] btl_openib_receive_queues mca param not always taken into account"</a>
<li><strong>Previous message:</strong> <a href="15327.php">Nathan Hjelm: "[OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15327.php">Nathan Hjelm: "[OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15369.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15369.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 29, 2014 at 2:10 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is there a reason why the
</span><br>
<span class="quotelev1">&gt; current implementations of opal atomics (add, cmpset) do not return the
</span><br>
<span class="quotelev1">&gt; old value?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Because some CPUs don't implement such an atomic instruction?
<br>
<p>On any CPU one *can* certainly synthesize the desired operation with an
<br>
added read before the compare-and-swap to return a value that was present
<br>
at some time before a failed cmpset.  That is almost certainly sufficient
<br>
for your purposes.  However, the added load makes it (marginally) more
<br>
expensive on some CPUs that only have the native equivalent of gcc's
<br>
__sync_bool_compare_and_swap().
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15328/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15329.php">Joshua Ladd: "Re: [OMPI devel] btl_openib_receive_queues mca param not always taken into account"</a>
<li><strong>Previous message:</strong> <a href="15327.php">Nathan Hjelm: "[OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15327.php">Nathan Hjelm: "[OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15369.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15369.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
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
