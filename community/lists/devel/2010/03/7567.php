<?
$subject_val = "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  7 23:13:56 2010" -->
<!-- isoreceived="20100308041356" -->
<!-- sent="Sun, 7 Mar 2010 21:13:46 -0700" -->
<!-- isosent="20100308041346" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)" -->
<!-- id="BABDB6D0-D395-4753-B62E-2102719C4B5F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="42698175-1D67-4B31-9454-8F218DEC743C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-07 23:13:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7568.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>Previous message:</strong> <a href="7566.php">Barry Smith: "[OMPI devel] valgrind problem with 1.4.1 and MPI_Allgather()"</a>
<li><strong>In reply to:</strong> <a href="7565.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7568.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>Reply:</strong> <a href="7568.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 7, 2010, at 5:13 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 7, 2010, at 12:59 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Quick question about this. We now have an OPAL level progress thread, which enables the machinery at the OPAL level. Unfortunately, this doesn't say anything about what the MPI level will do?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That is correct and has always been the case. The OPAL progress thread only indicates that opal_progress is being called via a separate thread. Currently, turning &quot;on&quot; the opal progress thread automatically turns &quot;on&quot; opal thread support and enables MPI thread multiple. However, the BTLs may or may not be involved (see below).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about calling it --enable-opal-event-progress-thread, or even --enable-open-libevent-progress-thread?
</span><br>
<p>Why not add another 100+ characters to the name while we are at it? :-/
<br>
<p>enable-opal-progress-thread accurately reflects what it does, IMHO
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This RFC is solely to change the configure option names to remove the badly overloaded and confusing --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At the moment, the BTLs already use their own progress threads and do -not- utilize the OPAL progress thread. Why the various BTL developers chose to do this is unknown to me and essentially irrelevant to this RFC. What the BTL developers may want to do is review the reasons behind this design decision. As I understand it, there was consideration of this question, and it was a made decision (as opposed to a simple oversight) to have BTL-specific progress threads instead of relying on the OPAL progress thread.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The openib BTL can have up to 2 progress threads (!) -- the async verbs event notifier and the RDMA CM agent.  They really should be consolidated.  If there's infrastructure to consolidate them via opal or something else, then so much the better...
</span><br>
<p>Agreed, though I think that is best done as a separate effort from this RFC. I believe there was a concern over latency if all the BTLs are driven by one progress thread that sequentially runs across their respective file descriptors, but I may be remembering it incorrectly...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7568.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>Previous message:</strong> <a href="7566.php">Barry Smith: "[OMPI devel] valgrind problem with 1.4.1 and MPI_Allgather()"</a>
<li><strong>In reply to:</strong> <a href="7565.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7568.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>Reply:</strong> <a href="7568.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
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
