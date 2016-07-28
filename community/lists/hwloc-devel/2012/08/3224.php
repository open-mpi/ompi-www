<?
$subject_val = "Re: [hwloc-devel] merging the valarray branch (with a better name)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 09:06:30 2012" -->
<!-- isoreceived="20120824130630" -->
<!-- sent="Fri, 24 Aug 2012 15:06:25 +0200" -->
<!-- isosent="20120824130625" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging the valarray branch (with a better name)" -->
<!-- id="50377C51.7020008_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="91EE1AA7-F962-41A9-8FEB-F0E907550C29_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] merging the valarray branch (with a better name)<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 09:06:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3225.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3223.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3223.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3227.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3227.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hwloc_obj_t already has a &quot;void *userdata&quot; for this. But we cannot store
<br>
it in XML unless we know what it contains.
<br>
<p>Exporting to XML is strictly required here since people want to add
<br>
values to the XML topology in a preliminary benchmarking programs, and
<br>
later read it back in their actual application (a charm++ scheduler).
<br>
<p>Brice
<br>
<p><p><p>Le 24/08/2012 15:00, George Bosilca a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; If the goal is to allow extra storage for the users why not a simpler solution where all info keys are  void* and the users manage their content? Having multiple keys will allow several layers of the software stack to save their own custom values without collisions, while the void* make a good generalization of the stored information. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 24, 2012, at 7:09, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 24/08/2012 11:46, Jeff Squyres a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 24, 2012, at 4:26 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The question that remains is about the naming. Right now, it's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;valarray&quot; but it don't like it. What it really means is &quot;custom array
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of float values&quot;. Maybe just &quot;values&quot;, or &quot;floats&quot;, or &quot;custom floats&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or ... ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Random question: why floats and not doubles?
</span><br>
<span class="quotelev2">&gt;&gt; Likely because we have floats in the distance matrices but it didn't
</span><br>
<span class="quotelev2">&gt;&gt; matter for this use.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another name suggestion: cached_floats (cached_doubles)
</span><br>
<span class="quotelev2">&gt;&gt; It's not really about caching, it's more about annotating the topology
</span><br>
<span class="quotelev2">&gt;&gt; by merging multiple inputs together (XML topology + benchmark outputs +
</span><br>
<span class="quotelev2">&gt;&gt; application info) inside the same XML file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the goal is to be able to store some data that will also show up in the XML (and text/gui output?)
</span><br>
<span class="quotelev2">&gt;&gt; I don't plan to display any of this to lstopo.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; , why not make the mechanism more general?  E.g., the values array should be a union, with an enum indicating its type, and support a small number of intrinsic types: float (or double), string, int (and/or long?).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I thought about that but I wasn't sure it was worth doing it. When you
</span><br>
<span class="quotelev2">&gt;&gt; say type, are you talking about the type that appears in the array of
</span><br>
<span class="quotelev2">&gt;&gt; values, or about the global annotation type?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I though about doing this
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; struct values {
</span><br>
<span class="quotelev2">&gt;&gt;  char *name;
</span><br>
<span class="quotelev2">&gt;&gt;  type /* FLOATS or something else in the future */
</span><br>
<span class="quotelev2">&gt;&gt;  union {
</span><br>
<span class="quotelev2">&gt;&gt;    floats {
</span><br>
<span class="quotelev2">&gt;&gt;      unsigned nr;
</span><br>
<span class="quotelev2">&gt;&gt;      unsigned *indexes;
</span><br>
<span class="quotelev2">&gt;&gt;      floats *values;
</span><br>
<span class="quotelev2">&gt;&gt;    };
</span><br>
<span class="quotelev2">&gt;&gt;  };
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is vague enough to support other kinds of annotations (even if I
</span><br>
<span class="quotelev2">&gt;&gt; don't expect many additions). Ideally, we would merge the &quot;info&quot;
</span><br>
<span class="quotelev2">&gt;&gt; attribute into this, but it would break the ABI (because of the
</span><br>
<span class="quotelev2">&gt;&gt; get_info_by_name() inline function).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You're talking about this instead?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; struct values {
</span><br>
<span class="quotelev2">&gt;&gt;  char *name;
</span><br>
<span class="quotelev2">&gt;&gt;  type /* DOUBLE or ULLONG */
</span><br>
<span class="quotelev2">&gt;&gt;  unsigned nr;
</span><br>
<span class="quotelev2">&gt;&gt;  unsigned * indexes;
</span><br>
<span class="quotelev2">&gt;&gt;  void * values; /* sizeof(type) *  nr */
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This one is easy to implement. Not sure if we would want
</span><br>
<span class="quotelev2">&gt;&gt; float/double/int/long/ulong/llong/... or only double/ullong. I just need
</span><br>
<span class="quotelev2">&gt;&gt; something clear enough for importing/exporting as string in the XML output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; String is really needed since we have info attributes. It's not an
</span><br>
<span class="quotelev2">&gt;&gt; array, but I don't think it matters much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
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
<li><strong>Next message:</strong> <a href="3225.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3223.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3223.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3227.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3227.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
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
