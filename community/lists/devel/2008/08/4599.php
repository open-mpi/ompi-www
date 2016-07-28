<?
$subject_val = "Re: [OMPI devel] SM initialization race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 09:40:04 2008" -->
<!-- isoreceived="20080821134004" -->
<!-- sent="Thu, 21 Aug 2008 09:39:59 -0400" -->
<!-- isosent="20080821133959" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM initialization race condition" -->
<!-- id="ea86ce220808210639q72dcaf3ah547655e60dad6a21_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CCC94F0E-53C7-4CD9-B02E-543CD6027F9B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM initialization race condition<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-21 09:39:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4600.php">Terry Dontje: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Previous message:</strong> <a href="4598.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>In reply to:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI devel] SM initialization race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4601.php">Tim Mattox: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Reply:</strong> <a href="4601.php">Tim Mattox: "Re: [OMPI devel] SM initialization race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, bzero() is POSIX.  Here is the history section of the bzero man page
<br>
on Mac OS X 10.4:
<br>
<p>A bzero() function appeared in 4.3BSD.  Its prototype existed previously
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in &lt;string.h&gt; before it was moved to &lt;strings.h&gt; for IEEE Std 1003.1-2001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(``POSIX.1'') compliance.
<br>
<p>Hmmm, but the Linux man page says it is deprecated, and says we should
<br>
use memset.
<br>
Wish it explained why...  so I think we are safe to just use bzero,
<br>
<p>On Thu, Aug 21, 2008 at 9:32 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; IIRC, bzero is a gnu-ism.  We should probably use memset instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2008, at 5:40 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We use the feature defined by POSIX mmap where the area should be
</span><br>
<span class="quotelev2">&gt;&gt; zero-filled when the file length is extended. What OS you're using when you
</span><br>
<span class="quotelev2">&gt;&gt; see such problems ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just in case, here is a patch that set the beginning of the mmaped region
</span><br>
<span class="quotelev2">&gt;&gt; to zero, in case this is not done automatically. As in most cases this is an
</span><br>
<span class="quotelev2">&gt;&gt; unnecessary overhead, we should find the cases where we really need this,
</span><br>
<span class="quotelev2">&gt;&gt; and possibly conditionally compile it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/common/sm/common_sm_mmap.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/common/sm/common_sm_mmap.c (revision 19377)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/common/sm/common_sm_mmap.c (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -163,6 +163,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                /* initialize the segment - only the first process
</span><br>
<span class="quotelev2">&gt;&gt;                   to open the file */
</span><br>
<span class="quotelev2">&gt;&gt; +                bzero( map-&gt;data_addr, size );
</span><br>
<span class="quotelev2">&gt;&gt;                mem_offset = map-&gt;data_addr - (unsigned char
</span><br>
<span class="quotelev2">&gt;&gt; *)map-&gt;map_seg;
</span><br>
<span class="quotelev2">&gt;&gt;                map-&gt;map_seg-&gt;seg_offset = mem_offset;
</span><br>
<span class="quotelev2">&gt;&gt;                map-&gt;map_seg-&gt;seg_size = size - mem_offset;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 21, 2008, at 1:22 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been seeing an intermittent (once every 4 hours looping on a quick
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initialization program) segv with the following stack trace.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =&gt;[1] mca_btl_sm_add_procs(btl = 0xfffffd7ffdb67ef0, nprocs = 2U, procs =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x591560, peers = 0x591580, reachability = 0xfffffd7fffdff000), line 519 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;btl_sm.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2] mca_bml_r2_add_procs(nprocs = 2U, procs = 0x591560, bml_endpoints =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x591500, reachable = 0xfffffd7fffdff000), line 222 in &quot;bml_r2.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3] mca_pml_ob1_add_procs(procs = 0x5914c0, nprocs = 2U), line 248 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;pml_ob1.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [4] ompi_mpi_init(argc = 1, argv = 0xfffffd7fffdff318, requested = 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provided = 0xfffffd7fffdff234), line 651 in &quot;ompi_mpi_init.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [5] PMPI_Init(argc = 0xfffffd7fffdff2ec, argv = 0xfffffd7fffdff2e0), line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 90 in &quot;pinit.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [6] main(argc = 1, argv = 0xfffffd7fffdff318), line 82 in &quot;buffer.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe the problem is that mca_btl_sm_component.shm_fifo[j] contains
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uninitialized data causes the loop on line 504 in btl_sm.c to think that a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote rank has set its fifo address.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone else seen the above happening?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
 I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4600.php">Terry Dontje: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Previous message:</strong> <a href="4598.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>In reply to:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI devel] SM initialization race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4601.php">Tim Mattox: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Reply:</strong> <a href="4601.php">Tim Mattox: "Re: [OMPI devel] SM initialization race condition"</a>
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
