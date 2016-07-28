<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 03:46:40 2009" -->
<!-- isoreceived="20090331074640" -->
<!-- sent="Tue, 31 Mar 2009 09:45:42 +0200 (CEST)" -->
<!-- isosent="20090331074542" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="alpine.DEB.1.10.0903310927470.4149_at_jeaugeys.frec.bull.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="ea86ce220903301040t4ee21c8au4dfe50c8712cdacd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 03:45:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5764.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5762.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5750.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5765.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5765.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry to continue off-topic but going to System V shm would be for me 
<br>
like going back in the past.
<br>
<p>System V shared memory used to be the main way to do shared memory on 
<br>
MPICH and from my (little) experience, this was truly painful :
<br>
&nbsp;&nbsp;- Cleanup issues : does shmctl(IPC_RMID) solve _all_ cases ? (even kill 
<br>
-9 ?)
<br>
&nbsp;&nbsp;- Naming issues : shm segments identified as 32 bits key potentially 
<br>
causing conflicts between applications or layers of the same application 
<br>
on one node
<br>
&nbsp;&nbsp;- Space issues : the total shm size on a system is bound to 
<br>
/proc/sys/kernel/shmmax, needing admin configuration and causing conflicts 
<br>
between MPI applications running on the same node
<br>
<p>Mmap'ed files can have a comprehensive name like &lt;component : MPI&gt;-&lt;Layer 
<br>
: Opal&gt;-&lt;Jobib&gt;-&lt;Rank&gt;, preventing naming issues. If we are on linux, they 
<br>
can be allocated in /dev/shm to prevent filesystem trafic, and space is 
<br>
not limited.
<br>
<p>Sylvain
<br>
<p>On Mon, 30 Mar 2009, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; I've been lurking on this conversation, and I am again left with the impression
</span><br>
<span class="quotelev1">&gt; that the underlying shared memory configuration based on sharing a file
</span><br>
<span class="quotelev1">&gt; is flawed.  Why not use a System V shared memory segment without a
</span><br>
<span class="quotelev1">&gt; backing file as I described in ticket #1320?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 30, 2009 at 1:34 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Then it looks like the safest solution is the use either ftruncate or the
</span><br>
<span class="quotelev2">&gt;&gt; lseek method and then touch the first byte of all memory pages.
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, I see two problems with this. First, there is a clear
</span><br>
<span class="quotelev2">&gt;&gt; performance hit on the startup time. And second, we will have to find a
</span><br>
<span class="quotelev2">&gt;&gt; pretty smart way to do this or we will completely break the memory affinity
</span><br>
<span class="quotelev2">&gt;&gt; stuff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 30, 2009, at 13:24 , Iain Bason wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 30, 2009, at 12:05 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But don't we need the whole area to be zero filled?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It will be zero-filled on demand using the lseek/touch method. &#160;However,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the OS may not reserve space for the skipped pages or disk blocks. &#160;Thus one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could still get out of memory or file system full errors at arbitrary
</span><br>
<span class="quotelev3">&gt;&gt;&gt; points. &#160;Presumably one could also get segfaults from an mmap'ed segment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whose pages couldn't be allocated when the demand came.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Iain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5764.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5762.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5750.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5765.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5765.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
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
