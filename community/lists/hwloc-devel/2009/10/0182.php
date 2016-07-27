<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 20:15:56 2009" -->
<!-- isoreceived="20091021001556" -->
<!-- sent="Tue, 20 Oct 2009 20:15:51 -0400" -->
<!-- isosent="20091021001551" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198" -->
<!-- id="825FFAFB-4844-45B3-A1DA-D1A74EBFC0D9_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091021001211.GR5589_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-20 20:15:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0183.php">Jeff Squyres: "[hwloc-devel] v0.9 branch"</a>
<li><strong>Previous message:</strong> <a href="0181.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198"</a>
<li><strong>In reply to:</strong> <a href="0181.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops -- I just caught the latter one, but missed the first.  Thanks  
<br>
for the sanity check -- I'll go fix the first one...
<br>
<p><p>On Oct 20, 2009, at 8:12 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; jsquyres_at_[hidden], le Tue 20 Oct 2009 19:59:16 -0400, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; @@ -578,6 +573,8 @@
</span><br>
<span class="quotelev2">&gt; &gt;    DIR *dir;
</span><br>
<span class="quotelev2">&gt; &gt;    struct dirent *dirent;
</span><br>
<span class="quotelev2">&gt; &gt;    hwloc_obj_t node;
</span><br>
<span class="quotelev2">&gt; &gt; +  hwloc_obj_t nodes[nbnodes];
</span><br>
<span class="quotelev2">&gt; &gt; +  unsigned distances[nbnodes][nbnodes];
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    dir = hwloc_opendir(path, topology- 
</span><br>
<span class="quotelev2">&gt; &gt;backend_params.sysfs.root_fd);
</span><br>
<span class="quotelev2">&gt; &gt;    if (dir)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -597,9 +594,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;    if (nbnodes &lt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;      return;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -  hwloc_obj_t nodes[nbnodes];
</span><br>
<span class="quotelev2">&gt; &gt; -  unsigned distances[nbnodes][nbnodes];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;    for (osnode=0; osnode &lt; nbnodes; osnode++)
</span><br>
<span class="quotelev2">&gt; &gt;      {
</span><br>
<span class="quotelev2">&gt; &gt;        char nodepath[SYSFS_NUMA_NODE_PATH_LEN];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will not work: nbnodes is only known here, not at the beginning  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; the function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -213,6 +214,9 @@
</span><br>
<span class="quotelev2">&gt; &gt;    unsigned groupids[nbobjs];
</span><br>
<span class="quotelev2">&gt; &gt;    int nbgroups;
</span><br>
<span class="quotelev2">&gt; &gt;    unsigned i,j;
</span><br>
<span class="quotelev2">&gt; &gt; +  hwloc_obj_t groupobjs[nbgroups];
</span><br>
<span class="quotelev2">&gt; &gt; +  unsigned groupsizes[nbgroups];
</span><br>
<span class="quotelev2">&gt; &gt; +  unsigned groupdistances[nbgroups][nbgroups];
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    hwloc_debug(&quot;trying to group %s objects into misc objects  
</span><br>
<span class="quotelev1">&gt; according to physical distances\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;            hwloc_obj_type_string(objs[0]-&gt;type));
</span><br>
<span class="quotelev2">&gt; &gt; @@ -233,8 +237,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    /* create new misc objects and record their size */
</span><br>
<span class="quotelev2">&gt; &gt; -  hwloc_obj_t groupobjs[nbgroups];
</span><br>
<span class="quotelev2">&gt; &gt; -  unsigned groupsizes[nbgroups];
</span><br>
<span class="quotelev2">&gt; &gt;    memset(groupsizes, 0, sizeof(groupsizes));
</span><br>
<span class="quotelev2">&gt; &gt;    for(i=0; i&lt;nbgroups; i++) {
</span><br>
<span class="quotelev2">&gt; &gt;      /* create the misc object */
</span><br>
<span class="quotelev2">&gt; &gt; @@ -255,7 +257,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    /* factorize distances */
</span><br>
<span class="quotelev2">&gt; &gt; -  unsigned groupdistances[nbgroups][nbgroups];
</span><br>
<span class="quotelev2">&gt; &gt;    memset(groupdistances, 0, sizeof(groupdistances));
</span><br>
<span class="quotelev2">&gt; &gt;    for(i=0; i&lt;nbobjs; i++)
</span><br>
<span class="quotelev2">&gt; &gt;      for(j=0; j&lt;nbobjs; j++)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0183.php">Jeff Squyres: "[hwloc-devel] v0.9 branch"</a>
<li><strong>Previous message:</strong> <a href="0181.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198"</a>
<li><strong>In reply to:</strong> <a href="0181.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198"</a>
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
