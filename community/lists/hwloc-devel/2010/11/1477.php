<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 14:03:25 2010" -->
<!-- isoreceived="20101111190325" -->
<!-- sent="Thu, 11 Nov 2010 20:03:14 +0100" -->
<!-- isosent="20101111190314" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="201011112003.15359.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20101111181940.GT4896_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-11 14:03:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1478.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1476.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="1476.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1478.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday, November 11, 2010 07:19:41 pm Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Jirka Hladky, le Thu 11 Nov 2010 14:50:46 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; &quot;On this system function XYZ is not supported by GLIBC/KERNEL)&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm missing the information:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -which function is not implemented
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, you have it: hwloc_proc_getmembind()
</span><br>
<span class="quotelev1">&gt; How it'd be called by the OS in the future is unknown of course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -where this function belong - is it system call, glibc or hwloc's
</span><br>
<span class="quotelev2">&gt; &gt; function?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's always system call or glibc function, it depends on the system and
</span><br>
<span class="quotelev1">&gt; we can't know where it'd be implemented in the future. Or our lack of
</span><br>
<span class="quotelev1">&gt; knowledge of which system call can provide the functionality.
</span><br>
<p>Well, I think I have not expressed myself correctly. At the moment we have:
<br>
<p>hwloc_get_membind failed (errno 38 Function not implemented)
<br>
<p>I would like to see which glibc/system call has failed.
<br>
Example:
<br>
============================================
<br>
&nbsp;&nbsp;err = get_mempolicy(&amp;linuxpolicy, linuxmask, max_os_index, 0, 0);
<br>
&nbsp;&nbsp;if (err &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;perror(&quot;get_mempolicy&quot;); &lt;====== ADD THIS LINE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;goto out_with_mask;
<br>
&nbsp;&nbsp;}
<br>
============================================
<br>
<p>Right now, you just know that error has occurred somewhere in 
<br>
hwloc_get_membind
<br>
<p>My first impression when I saw the error message above was that function 
<br>
&quot;hwloc_get_membind&quot; is not implemented. 
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Or perhaps something more user friendly like
</span><br>
<span class="quotelev2">&gt; &gt; &quot;On this system --get does not work together with --membind&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We'd have to handle a big list of combinations of parameters in that
</span><br>
<span class="quotelev1">&gt; case.  I'd rather add a paragraph to the documentation that just
</span><br>
<span class="quotelev1">&gt; explains that not everything is available on all OSes, or hwloc just
</span><br>
<span class="quotelev1">&gt; doesn't know that it got implemented.
</span><br>
I completely agree on that. Please add a paragraph to the documentation 
<br>
explaining that some functionality is not avaialble on all OSes.
<br>
<p>Thanks!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1478.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1476.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="1476.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1478.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
