<?
$subject_val = "Re: [hwloc-users] hwloc on systems with more than 64 cpus?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 11:41:48 2010" -->
<!-- isoreceived="20100517154148" -->
<!-- sent="Mon, 17 May 2010 17:41:37 +0200" -->
<!-- isosent="20100517154137" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on systems with more than 64 cpus?" -->
<!-- id="201005171741.37621.jhladky_at_redhat.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4BF0D636.6030106_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc on systems with more than 64 cpus?<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 11:41:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0079.php">Samuel Thibault: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0077.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0077.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0079.php">Samuel Thibault: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0079.php">Samuel Thibault: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0080.php">Jeff Squyres: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0082.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0083.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday 17 May 2010 07:37:58 am Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; On 17/05/2010 00:23, Jirka Hladky wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Brice,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; thanks a lot for the clarification!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I got access to 64 cores system and you are indeed right! There is
</span><br>
<span class="quotelev2">&gt; &gt; however an issue that taskset does not support 0x80000000,0x0 format.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; taskset 0x80000000,0x0 sleep 100
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; failed to parse CPU mask 0x80000000,0x0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; However,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; taskset 0x8000000000000000 sleep 100
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; works fine:-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can I suggest an enhancement to hwloc to support taskset format?
</span><br>
<span class="quotelev2">&gt; &gt; taskset is currently standard utility to set CPU affinity. Some
</span><br>
<span class="quotelev2">&gt; &gt; colleagues of mine don't want to switch to hwloc-bind yet, so
</span><br>
<span class="quotelev2">&gt; &gt; supporting taskset format would be great. You can certainly get around
</span><br>
<span class="quotelev2">&gt; &gt; with
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-calc --proclist --physical 0x80000000,0x0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; but it will make unnecessarily complex.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could you either add new option --cpuset-taskset-compatible or perhaps
</span><br>
<span class="quotelev2">&gt; &gt; change --cpuset output from 0x80000000,0x0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; to 0x8000000000000000 ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What does taskset format look like when you want the 128th CPUs ? Does
</span><br>
<span class="quotelev1">&gt; it change if you switch from a 32bits architecture to a 64bits
</span><br>
<span class="quotelev1">&gt; architecture ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have chosen the aforementioned cpuset string format so that it does
</span><br>
<span class="quotelev1">&gt; not depend on the architecture. It makes XML files re-usable from one
</span><br>
<span class="quotelev1">&gt; machine to another for instance (which is exactly the main point of
</span><br>
<span class="quotelev1">&gt; exporting XML files, by the way).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we want to support taskset format, I think adding an option to lstopo
</span><br>
<span class="quotelev1">&gt; wouldn't be enough since some people might want the same option in
</span><br>
<span class="quotelev1">&gt; hwloc-distrib or hwloc-calc. So we'd end up adding a new API function.
</span><br>
<span class="quotelev1">&gt; And then somebody else will ask for support for another external tool
</span><br>
<span class="quotelev1">&gt; and we'd add another dedicated API.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The real question is: why do you still want to use taskset ? hwloc-bind
</span><br>
<span class="quotelev1">&gt; should do everything taskset does, and it also support cpusets as
</span><br>
<span class="quotelev1">&gt; &quot;node:2.proc:1&quot; or &quot;proc:23-35&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p>Hi Brice,
<br>
<p>taskset format is same on 32bits architecture on a 64bits architecture.
<br>
<p>I don't have system with 128 CPUs, but according to man page it's
<br>
0x80000000000000000000000000000000
<br>
<p>I have attached the source code as well.  See str_to_cpuset function. It 
<br>
supports cpuset hex mask of any length.
<br>
<p>I understand your point to use hwloc-bind. However, I still believe that 
<br>
supporting taskset would be a useful feature and very easy to implement (you 
<br>
basically just convert physical CPU # into hex). taskset is currently THE 
<br>
user-space program to set CPU affinity.  I understand that it's probably too 
<br>
late for this release. But perhaps you can consider it for the next release. 
<br>
<p>BTW, is there any time-plan for hwloc 1.0 to be released?
<br>
<p>Thanks a lot!
<br>
Jirka
<br>
<p>static int str_to_cpuset(struct bitmask *mask, const char* str)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int len = strlen(str);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const char *ptr = str + len - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int base = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* skip 0x, it's all hex anyway */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (len &gt; 1 &amp;&amp; !memcmp(str, &quot;0x&quot;, 2L))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;str += 2;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bitmask_clearall(mask);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (ptr &gt;= str) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char val = char_to_val(*ptr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (val == (char) -1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (val &amp; 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bitmask_setbit(mask, base);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (val &amp; 2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bitmask_setbit(mask, base + 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (val &amp; 4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bitmask_setbit(mask, base + 2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (val &amp; 8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bitmask_setbit(mask, base + 3);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;len--;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ptr--;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base += 4;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0078/taskset.c">taskset.c</a>
</ul>
<!-- attachment="taskset.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0079.php">Samuel Thibault: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0077.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0077.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0079.php">Samuel Thibault: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0079.php">Samuel Thibault: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0080.php">Jeff Squyres: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0082.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0083.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
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
