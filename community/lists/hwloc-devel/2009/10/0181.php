<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 20:12:43 2009" -->
<!-- isoreceived="20091021001243" -->
<!-- sent="Wed, 21 Oct 2009 02:12:11 +0200" -->
<!-- isosent="20091021001211" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198" -->
<!-- id="20091021001211.GR5589_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200910202359.n9KNxGwQ030600_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-20 20:12:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0182.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198"</a>
<li><strong>Previous message:</strong> <a href="0180.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0182.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198"</a>
<li><strong>Reply:</strong> <a href="0182.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
jsquyres_at_[hidden], le Tue 20 Oct 2009 19:59:16 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; @@ -578,6 +573,8 @@
</span><br>
<span class="quotelev1">&gt;    DIR *dir;
</span><br>
<span class="quotelev1">&gt;    struct dirent *dirent;
</span><br>
<span class="quotelev1">&gt;    hwloc_obj_t node;
</span><br>
<span class="quotelev1">&gt; +  hwloc_obj_t nodes[nbnodes];
</span><br>
<span class="quotelev1">&gt; +  unsigned distances[nbnodes][nbnodes];
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    dir = hwloc_opendir(path, topology-&gt;backend_params.sysfs.root_fd);
</span><br>
<span class="quotelev1">&gt;    if (dir)
</span><br>
<span class="quotelev1">&gt; @@ -597,9 +594,6 @@
</span><br>
<span class="quotelev1">&gt;    if (nbnodes &lt;= 1)
</span><br>
<span class="quotelev1">&gt;      return;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  hwloc_obj_t nodes[nbnodes];
</span><br>
<span class="quotelev1">&gt; -  unsigned distances[nbnodes][nbnodes];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;    for (osnode=0; osnode &lt; nbnodes; osnode++)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt;        char nodepath[SYSFS_NUMA_NODE_PATH_LEN];
</span><br>
<p>This will not work: nbnodes is only known here, not at the beginning of
<br>
the function.
<br>
<p><span class="quotelev1">&gt; @@ -213,6 +214,9 @@
</span><br>
<span class="quotelev1">&gt;    unsigned groupids[nbobjs];
</span><br>
<span class="quotelev1">&gt;    int nbgroups;
</span><br>
<span class="quotelev1">&gt;    unsigned i,j;
</span><br>
<span class="quotelev1">&gt; +  hwloc_obj_t groupobjs[nbgroups];
</span><br>
<span class="quotelev1">&gt; +  unsigned groupsizes[nbgroups];
</span><br>
<span class="quotelev1">&gt; +  unsigned groupdistances[nbgroups][nbgroups];
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    hwloc_debug(&quot;trying to group %s objects into misc objects according to physical distances\n&quot;,
</span><br>
<span class="quotelev1">&gt;  	     hwloc_obj_type_string(objs[0]-&gt;type));
</span><br>
<span class="quotelev1">&gt; @@ -233,8 +237,6 @@
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    /* create new misc objects and record their size */
</span><br>
<span class="quotelev1">&gt; -  hwloc_obj_t groupobjs[nbgroups];
</span><br>
<span class="quotelev1">&gt; -  unsigned groupsizes[nbgroups];
</span><br>
<span class="quotelev1">&gt;    memset(groupsizes, 0, sizeof(groupsizes));
</span><br>
<span class="quotelev1">&gt;    for(i=0; i&lt;nbgroups; i++) {
</span><br>
<span class="quotelev1">&gt;      /* create the misc object */
</span><br>
<span class="quotelev1">&gt; @@ -255,7 +257,6 @@
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    /* factorize distances */
</span><br>
<span class="quotelev1">&gt; -  unsigned groupdistances[nbgroups][nbgroups];
</span><br>
<span class="quotelev1">&gt;    memset(groupdistances, 0, sizeof(groupdistances));
</span><br>
<span class="quotelev1">&gt;    for(i=0; i&lt;nbobjs; i++)
</span><br>
<span class="quotelev1">&gt;      for(j=0; j&lt;nbobjs; j++)
</span><br>
<p>Same here.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0182.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198"</a>
<li><strong>Previous message:</strong> <a href="0180.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0182.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198"</a>
<li><strong>Reply:</strong> <a href="0182.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198"</a>
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
