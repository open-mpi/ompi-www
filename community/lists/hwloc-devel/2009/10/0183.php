<?
$subject_val = "[hwloc-devel] v0.9 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 20:33:15 2009" -->
<!-- isoreceived="20091021003315" -->
<!-- sent="Tue, 20 Oct 2009 20:33:09 -0400" -->
<!-- isosent="20091021003309" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] v0.9 branch" -->
<!-- id="F3A2BE44-C8A4-4158-AA70-2C7A199F4508_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [hwloc-devel] v0.9 branch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-20 20:33:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0184.php">Jeff Squyres: "[hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0182.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0185.php">Samuel Thibault: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Reply:</strong> <a href="0185.php">Samuel Thibault: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Reply:</strong> <a href="0219.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice -- do you need to move r1195 and r1196 to the v0.9 branch?
<br>
<p>Also, r1198 didn't merge cleanly into v0.9 -- are there bugs fixed on  
<br>
the trunk that didn't make it over to v0.9?  An example is in topology- 
<br>
linux.c; svn merge didn't find a corresponding section for the change,  
<br>
but the section below it seems like it might have been replaced by the  
<br>
conflicting section...?
<br>
<p>-----
<br>
&lt;&lt;&lt;&lt;&lt;&lt;&lt; .working
<br>
=======
<br>
&nbsp;&nbsp;&nbsp;/* check whether a cgroup-cpuset is enabled */
<br>
&nbsp;&nbsp;&nbsp;fd = hwloc_fopen(&quot;proc/self/cgroup&quot;, &quot;r&quot;, fsroot_fd);
<br>
&nbsp;&nbsp;&nbsp;if (fd) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* find a cpuset line */
<br>
#define CGROUP_LINE_LEN 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char line[CGROUP_LINE_LEN];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (fgets(line, sizeof(line), fd)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *end, *colon = strchr(line, ':');
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!colon)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (strncmp(colon, &quot;:cpuset:&quot;, 8))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* found a cgroup-cpuset line, return the name */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fclose(fd);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end = strchr(colon, '\n');
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (end)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*end = '\0';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_debug(&quot;Found cgroup-cpuset %s\n&quot;, colon+8);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return strdup(colon+8);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fclose(fd);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p><span class="quotelev3"> &gt;&gt;&gt;&gt;&gt;&gt;&gt; .merge-right.r1198
</span><br>
&nbsp;&nbsp;&nbsp;/* check whether a cpuset is enabled */
<br>
&nbsp;&nbsp;&nbsp;fd = hwloc_fopen(filename, &quot;r&quot;, fsroot_fd);
<br>
&nbsp;&nbsp;&nbsp;if (!fd)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>&nbsp;&nbsp;&nbsp;fgets(cpuset_name, sizeof(cpuset_name), fd);
<br>
&nbsp;&nbsp;&nbsp;fclose(fd);
<br>
-----
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
<li><strong>Next message:</strong> <a href="0184.php">Jeff Squyres: "[hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0182.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0185.php">Samuel Thibault: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Reply:</strong> <a href="0185.php">Samuel Thibault: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Reply:</strong> <a href="0219.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
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
