<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 14:25:02 2010" -->
<!-- isoreceived="20101111192502" -->
<!-- sent="Thu, 11 Nov 2010 20:24:57 +0100" -->
<!-- isosent="20101111192457" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="20101111192457.GY4896_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1674279522.195931.1289502200563.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-11 14:24:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1479.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2790)"</a>
<li><strong>Previous message:</strong> <a href="1477.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="1457.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jirka Hladky, le Thu 11 Nov 2010 20:03:20 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Thursday, November 11, 2010 07:19:41 pm Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Jirka Hladky, le Thu 11 Nov 2010 14:50:46 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;On this system function XYZ is not supported by GLIBC/KERNEL)&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm missing the information:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -which function is not implemented
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Well, you have it: hwloc_proc_getmembind()
</span><br>
<span class="quotelev2">&gt; &gt; How it'd be called by the OS in the future is unknown of course.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -where this function belong - is it system call, glibc or hwloc's
</span><br>
<span class="quotelev3">&gt; &gt; &gt; function?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It's always system call or glibc function, it depends on the system and
</span><br>
<span class="quotelev2">&gt; &gt; we can't know where it'd be implemented in the future. Or our lack of
</span><br>
<span class="quotelev2">&gt; &gt; knowledge of which system call can provide the functionality.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I think I have not expressed myself correctly. At the moment we have:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_get_membind failed (errno 38 Function not implemented)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to see which glibc/system call has failed.
</span><br>
<span class="quotelev1">&gt; Example:
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt;   err = get_mempolicy(&amp;linuxpolicy, linuxmask, max_os_index, 0, 0);
</span><br>
<span class="quotelev1">&gt;   if (err &lt; 0) {
</span><br>
<span class="quotelev1">&gt;     perror(&quot;get_mempolicy&quot;); &lt;====== ADD THIS LINE
</span><br>
<span class="quotelev1">&gt;     goto out_with_mask;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<p>My point is that the fix here is _not_ about get_mempolicy. Hwloc didn't
<br>
even call it. Hwloc just knows that Linux doesn't provide any function
<br>
to get the mempolicy of another process. The get_mempolicy function
<br>
doesn't take a pid, and thus will never take one, so another OS function
<br>
will have to be defined in the future by Linux people, which will wear
<br>
another name. So printing &quot;get_mempolicy&quot; will not actually help.
<br>
<p><span class="quotelev1">&gt; My first impression when I saw the error message above was that function 
</span><br>
<span class="quotelev1">&gt; &quot;hwloc_get_membind&quot; is not implemented. 
</span><br>
<p>hwloc_bind should probably print &quot;hwloc_proc_get_membind&quot; instead when
<br>
it gives the flag, indeed.  I don't think much more can be printed.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1479.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2790)"</a>
<li><strong>Previous message:</strong> <a href="1477.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="1457.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
