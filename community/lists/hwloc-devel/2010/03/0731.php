<?
$subject_val = "Re: [hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 03:06:02 2010" -->
<!-- isoreceived="20100311080602" -->
<!-- sent="Thu, 11 Mar 2010 09:05:56 +0100" -->
<!-- isosent="20100311080556" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory" -->
<!-- id="4B98A464.3070802_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="36ca99e91003101530x32b9fc46t1ef2ce9506dbbbbf_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 03:05:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0732.php">Bert Wesarg: "[hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Previous message:</strong> <a href="0730.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1822)"</a>
<li><strong>In reply to:</strong> <a href="0729.php">Bert Wesarg: "[hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Applied thanks!
<br>
<p>Brice
<br>
<p><p><p><p>Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; When reading all tids from a process in
</span><br>
<span class="quotelev1">&gt; topology-linux.c::hwloc_linux_get_proc_tids(), it used a
</span><br>
<span class="quotelev1">&gt; exponential realloc algorithm to increase the storage size for the tids.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now it uses the number of links (.st_nlinks) from a stat() call to the
</span><br>
<span class="quotelev1">&gt; directory (actually a fstat() call to the dirfd() of the opened
</span><br>
<span class="quotelev1">&gt; directory) as a good estimate for the initial size of the storage
</span><br>
<span class="quotelev1">&gt; vector and than a small linear expansion rule.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: src/topology-linux.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- src/topology-linux.c        (revision 1821)
</span><br>
<span class="quotelev1">&gt; +++ src/topology-linux.c        (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -18,6 +18,7 @@
</span><br>
<span class="quotelev1">&gt;  #include &lt;dirent.h&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;sched.h&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;pthread.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -312,13 +313,20 @@
</span><br>
<span class="quotelev1">&gt;    struct dirent *dirent;
</span><br>
<span class="quotelev1">&gt;    unsigned nr_tids = 0;
</span><br>
<span class="quotelev1">&gt;    unsigned max_tids = 32;
</span><br>
<span class="quotelev1">&gt; -  pid_t *tids = malloc(max_tids*sizeof(pid_t));
</span><br>
<span class="quotelev1">&gt; +  pid_t *tids;
</span><br>
<span class="quotelev1">&gt; +  struct stat sb;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +  /* take the number of links as a good estimate for the number of tids */
</span><br>
<span class="quotelev1">&gt; +  if (fstat(dirfd(taskdir), &amp;sb) == 0)
</span><br>
<span class="quotelev1">&gt; +    max_tids = sb.st_nlink;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  tids = malloc(max_tids*sizeof(pid_t));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;    rewinddir(taskdir);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    while ((dirent = readdir(taskdir)) != NULL) {
</span><br>
<span class="quotelev1">&gt;      if (nr_tids == max_tids) {
</span><br>
<span class="quotelev1">&gt; -      max_tids *= 2;
</span><br>
<span class="quotelev1">&gt; +      max_tids += 8;
</span><br>
<span class="quotelev1">&gt;        tids = realloc(tids, max_tids*sizeof(pid_t));
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      if (!strcmp(dirent-&gt;d_name, &quot;.&quot;) || !strcmp(dirent-&gt;d_name, &quot;..&quot;))
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0732.php">Bert Wesarg: "[hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Previous message:</strong> <a href="0730.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1822)"</a>
<li><strong>In reply to:</strong> <a href="0729.php">Bert Wesarg: "[hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory"</a>
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
