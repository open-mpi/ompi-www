<?
$subject_val = "Re: [hwloc-devel] merging the valarray branch (with a better name)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 09:44:46 2012" -->
<!-- isoreceived="20120824134446" -->
<!-- sent="Fri, 24 Aug 2012 15:44:41 +0200" -->
<!-- isosent="20120824134441" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging the valarray branch (with a better name)" -->
<!-- id="50378549.7040502_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8167E3A3-76F0-4796-A69A-CBF0C2757DB7_at_cisco.com" -->
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
<strong>Date:</strong> 2012-08-24 09:44:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3227.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3225.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3225.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/08/2012 15:20, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; I was thinking more like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct annotation {
</span><br>
<span class="quotelev1">&gt;   char *name;
</span><br>
<span class="quotelev1">&gt;   int array_len;
</span><br>
<span class="quotelev1">&gt;   enum { INT, LONG, FLOAT, DOUBLE } value_type;
</span><br>
<span class="quotelev1">&gt;   union {
</span><br>
<span class="quotelev1">&gt;      int *i_values;
</span><br>
<span class="quotelev1">&gt;      long *l_values;
</span><br>
<span class="quotelev1">&gt;      float *f_values;
</span><br>
<span class="quotelev1">&gt;      double *d_values;
</span><br>
<span class="quotelev1">&gt;      /* other types if you want them */
</span><br>
<p>That could work yes.
<br>
<p><span class="quotelev1">&gt;   unsigned *indexes; /* I'm not sure what this is for? */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It tells that values[x] is the value for object/stuff whose number is
<br>
indexes[x]
<br>
For sparse numbering, things like that.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3227.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3225.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3225.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
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
