<?
$subject_val = "Re: [hwloc-devel] merging the valarray branch (with a better name)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 09:20:08 2012" -->
<!-- isoreceived="20120824132008" -->
<!-- sent="Fri, 24 Aug 2012 09:20:03 -0400" -->
<!-- isosent="20120824132003" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging the valarray branch (with a better name)" -->
<!-- id="8167E3A3-76F0-4796-A69A-CBF0C2757DB7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="503760E6.2030803_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 09:20:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3226.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3224.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3222.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3226.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3226.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2012, at 7:09 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Another name suggestion: cached_floats (cached_doubles)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not really about caching, it's more about annotating the topology
</span><br>
<span class="quotelev1">&gt; by merging multiple inputs together (XML topology + benchmark outputs +
</span><br>
<span class="quotelev1">&gt; application info) inside the same XML file.
</span><br>
<p>How about just &quot;annotations&quot;, then?
<br>
<p><span class="quotelev2">&gt;&gt; , why not make the mechanism more general?  E.g., the values array should be a union, with an enum indicating its type, and support a small number of intrinsic types: float (or double), string, int (and/or long?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought about that but I wasn't sure it was worth doing it. When you
</span><br>
<span class="quotelev1">&gt; say type, are you talking about the type that appears in the array of
</span><br>
<span class="quotelev1">&gt; values, or about the global annotation type?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I though about doing this
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct values {
</span><br>
<p>I was thinking more like:
<br>
<p>struct annotation {
<br>
&nbsp;&nbsp;char *name;
<br>
&nbsp;&nbsp;int array_len;
<br>
&nbsp;&nbsp;enum { INT, LONG, FLOAT, DOUBLE } value_type;
<br>
&nbsp;&nbsp;union {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *i_values;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long *l_values;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float *f_values;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double *d_values;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* other types if you want them */
<br>
&nbsp;&nbsp;} values;
<br>
&nbsp;&nbsp;unsigned *indexes; /* I'm not sure what this is for? */
<br>
};
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3226.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3224.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3222.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3226.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3226.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
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
