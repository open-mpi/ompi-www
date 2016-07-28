<?
$subject_val = "Re: [hwloc-devel] merging the valarray branch (with a better name)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 07:09:31 2012" -->
<!-- isoreceived="20120824110931" -->
<!-- sent="Fri, 24 Aug 2012 13:09:26 +0200" -->
<!-- isosent="20120824110926" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging the valarray branch (with a better name)" -->
<!-- id="503760E6.2030803_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B36E54CD-A230-4A10-BCAA-CDAF48382F83_at_cisco.com" -->
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
<strong>Date:</strong> 2012-08-24 07:09:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3223.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3221.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3221.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3223.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3223.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3225.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/08/2012 11:46, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Aug 24, 2012, at 4:26 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The question that remains is about the naming. Right now, it's
</span><br>
<span class="quotelev2">&gt;&gt; &quot;valarray&quot; but it don't like it. What it really means is &quot;custom array
</span><br>
<span class="quotelev2">&gt;&gt; of float values&quot;. Maybe just &quot;values&quot;, or &quot;floats&quot;, or &quot;custom floats&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; or ... ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Random question: why floats and not doubles?
</span><br>
<p>Likely because we have floats in the distance matrices but it didn't
<br>
matter for this use.
<br>
<p><span class="quotelev1">&gt; Another name suggestion: cached_floats (cached_doubles)
</span><br>
<p>It's not really about caching, it's more about annotating the topology
<br>
by merging multiple inputs together (XML topology + benchmark outputs +
<br>
application info) inside the same XML file.
<br>
<p><span class="quotelev1">&gt; If the goal is to be able to store some data that will also show up in the XML (and text/gui output?)
</span><br>
<p>I don't plan to display any of this to lstopo.
<br>
<p><span class="quotelev1">&gt; , why not make the mechanism more general?  E.g., the values array should be a union, with an enum indicating its type, and support a small number of intrinsic types: float (or double), string, int (and/or long?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I thought about that but I wasn't sure it was worth doing it. When you
<br>
say type, are you talking about the type that appears in the array of
<br>
values, or about the global annotation type?
<br>
<p>I though about doing this
<br>
<p>struct values {
<br>
&nbsp;&nbsp;char *name;
<br>
&nbsp;&nbsp;type /* FLOATS or something else in the future */
<br>
&nbsp;&nbsp;union {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;floats {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned nr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned *indexes;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;floats *values;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
&nbsp;&nbsp;};
<br>
};
<br>
<p>This is vague enough to support other kinds of annotations (even if I
<br>
don't expect many additions). Ideally, we would merge the &quot;info&quot;
<br>
attribute into this, but it would break the ABI (because of the
<br>
get_info_by_name() inline function).
<br>
<p>You're talking about this instead?
<br>
<p>struct values {
<br>
&nbsp;&nbsp;char *name;
<br>
&nbsp;&nbsp;type /* DOUBLE or ULLONG */
<br>
&nbsp;&nbsp;unsigned nr;
<br>
&nbsp;&nbsp;unsigned * indexes;
<br>
&nbsp;&nbsp;void * values; /* sizeof(type) *  nr */
<br>
};
<br>
<p>This one is easy to implement. Not sure if we would want
<br>
float/double/int/long/ulong/llong/... or only double/ullong. I just need
<br>
something clear enough for importing/exporting as string in the XML output.
<br>
<p>String is really needed since we have info attributes. It's not an
<br>
array, but I don't think it matters much.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3223.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3221.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3221.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3223.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3223.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3225.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
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
