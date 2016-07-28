<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1988";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 12:25:55 2010" -->
<!-- isoreceived="20100421162555" -->
<!-- sent="Wed, 21 Apr 2010 12:25:50 -0400" -->
<!-- isosent="20100421162550" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1988" -->
<!-- id="243F12E9-2702-487A-A6BD-5FE34ECC3EFD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201004211622.o3LGMd2j014848_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1988<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-21 12:25:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0928.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986"</a>
<li><strong>Previous message:</strong> <a href="0926.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perfect; this is better than my solution.  Thanks!
<br>
<p><p>On Apr 21, 2010, at 12:22 PM, &lt;sthibaul_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2010-04-21 12:22:39 EDT (Wed, 21 Apr 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 1988
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1988">https://svn.open-mpi.org/trac/hwloc/changeset/1988</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; __typeof__ is not c99
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology.c |     8 ++++----                               
</span><br>
<span class="quotelev1">&gt;    1 files changed, 4 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/src/topology.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/src/topology.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/src/topology.c        2010-04-21 12:22:39 EDT (Wed, 21 Apr 2010)
</span><br>
<span class="quotelev1">&gt; @@ -648,8 +648,8 @@
</span><br>
<span class="quotelev1">&gt;   * complete.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#define merge_index(new, old, field) \
</span><br>
<span class="quotelev1">&gt; -  if ((old)-&gt;field == (__typeof__((old)-&gt;field)) -1) \
</span><br>
<span class="quotelev1">&gt; +#define merge_index(new, old, field, type) \
</span><br>
<span class="quotelev1">&gt; +  if ((old)-&gt;field == (type) -1) \
</span><br>
<span class="quotelev1">&gt;      (old)-&gt;field = (new)-&gt;field;
</span><br>
<span class="quotelev1">&gt;  #define merge_sizes(new, old, field) \
</span><br>
<span class="quotelev1">&gt;    if (!(old)-&gt;field) \
</span><br>
<span class="quotelev1">&gt; @@ -680,12 +680,12 @@
</span><br>
<span class="quotelev1">&gt;    for (child = cur-&gt;first_child; child; child = child-&gt;next_sibling) {
</span><br>
<span class="quotelev1">&gt;      switch (hwloc_obj_cmp(obj, child)) {
</span><br>
<span class="quotelev1">&gt;        case HWLOC_OBJ_EQUAL:
</span><br>
<span class="quotelev1">&gt; -        merge_index(obj, child, os_level);
</span><br>
<span class="quotelev1">&gt; +        merge_index(obj, child, os_level, signed);
</span><br>
<span class="quotelev1">&gt;         if (obj-&gt;os_level != child-&gt;os_level) {
</span><br>
<span class="quotelev1">&gt;            fprintf(stderr, &quot;Different OS level\n&quot;);
</span><br>
<span class="quotelev1">&gt;            return;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -        merge_index(obj, child, os_index);
</span><br>
<span class="quotelev1">&gt; +        merge_index(obj, child, os_index, unsigned);
</span><br>
<span class="quotelev1">&gt;         if (obj-&gt;os_index != child-&gt;os_index) {
</span><br>
<span class="quotelev1">&gt;            fprintf(stderr, &quot;Different OS indexes\n&quot;);
</span><br>
<span class="quotelev1">&gt;            return;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0928.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986"</a>
<li><strong>Previous message:</strong> <a href="0926.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986"</a>
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
