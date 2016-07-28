<?
$subject_val = "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  7 19:13:06 2010" -->
<!-- isoreceived="20100308001306" -->
<!-- sent="Sun, 7 Mar 2010 16:13:00 -0800" -->
<!-- isosent="20100308001300" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)" -->
<!-- id="42698175-1D67-4B31-9454-8F218DEC743C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FA457E08-33F4-4341-B395-7BFE04EFF145_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-07 19:13:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7566.php">Barry Smith: "[OMPI devel] valgrind problem with 1.4.1 and MPI_Allgather()"</a>
<li><strong>Previous message:</strong> <a href="7564.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>In reply to:</strong> <a href="7563.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7567.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
<li><strong>Reply:</strong> <a href="7567.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 7, 2010, at 12:59 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Quick question about this. We now have an OPAL level progress  
</span><br>
<span class="quotelev1">&gt; thread, which enables the machinery at the OPAL level.  
</span><br>
<span class="quotelev1">&gt; Unfortunately, this doesn't say anything about what the MPI level  
</span><br>
<span class="quotelev1">&gt; will do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is correct and has always been the case. The OPAL progress  
</span><br>
<span class="quotelev1">&gt; thread only indicates that opal_progress is being called via a  
</span><br>
<span class="quotelev1">&gt; separate thread. Currently, turning &quot;on&quot; the opal progress thread  
</span><br>
<span class="quotelev1">&gt; automatically turns &quot;on&quot; opal thread support and enables MPI thread  
</span><br>
<span class="quotelev1">&gt; multiple. However, the BTLs may or may not be involved (see below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>How about calling it --enable-opal-event-progress-thread, or even -- 
<br>
enable-open-libevent-progress-thread?
<br>
<p><span class="quotelev1">&gt; This RFC is solely to change the configure option names to remove  
</span><br>
<span class="quotelev1">&gt; the badly overloaded and confusing --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>+1
<br>
<p><span class="quotelev1">&gt; At the moment, the BTLs already use their own progress threads and  
</span><br>
<span class="quotelev1">&gt; do -not- utilize the OPAL progress thread. Why the various BTL  
</span><br>
<span class="quotelev1">&gt; developers chose to do this is unknown to me and essentially  
</span><br>
<span class="quotelev1">&gt; irrelevant to this RFC. What the BTL developers may want to do is  
</span><br>
<span class="quotelev1">&gt; review the reasons behind this design decision. As I understand it,  
</span><br>
<span class="quotelev1">&gt; there was consideration of this question, and it was a made decision  
</span><br>
<span class="quotelev1">&gt; (as opposed to a simple oversight) to have BTL-specific progress  
</span><br>
<span class="quotelev1">&gt; threads instead of relying on the OPAL progress thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>The openib BTL can have up to 2 progress threads (!) -- the async  
<br>
verbs event notifier and the RDMA CM agent.  They really should be  
<br>
consolidated.  If there's infrastructure to consolidate them via opal  
<br>
or something else, then so much the better...
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7566.php">Barry Smith: "[OMPI devel] valgrind problem with 1.4.1 and MPI_Allgather()"</a>
<li><strong>Previous message:</strong> <a href="7564.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>In reply to:</strong> <a href="7563.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7567.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
<li><strong>Reply:</strong> <a href="7567.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
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
