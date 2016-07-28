<?
$subject_val = "Re: [OMPI devel] reduce problem/#1791";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 14:41:27 2009" -->
<!-- isoreceived="20090217194127" -->
<!-- sent="Tue, 17 Feb 2009 14:41:19 -0500" -->
<!-- isosent="20090217194119" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] reduce problem/#1791" -->
<!-- id="CE4B9634-9FF8-42FE-ABD3-95D40F247502_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="36B94B39-30EA-4F59-8EED-2730D49519BC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] reduce problem/#1791<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 14:41:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5451.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5449.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>In reply to:</strong> <a href="5445.php">Jeff Squyres: "[OMPI devel] reduce problem/#1791"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brad replied with more information here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1791#comment:3">https://svn.open-mpi.org/trac/ompi/ticket/1791#comment:3</a>
<br>
<p><p>On Feb 17, 2009, at 12:54 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Per the call today, I ran the reduce-hang.c test on a single x86 4- 
</span><br>
<span class="quotelev1">&gt; core xeon node with both 1.2.8 and 1.2.9.  I see the same behavior  
</span><br>
<span class="quotelev1">&gt; with both:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - none of the processes hang; they all keep iterating over MPI_REDUCE
</span><br>
<span class="quotelev1">&gt; - the iteration numbers sent to stdout are more-or-less in sync
</span><br>
<span class="quotelev1">&gt; - memory usage (via top) is fairly steady
</span><br>
<span class="quotelev1">&gt;  - ...except when MPI_COMM_WORLD rank 0 memory usage periodically  
</span><br>
<span class="quotelev1">&gt; jumps up significantly
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not believe that this is a 1.2.9 regression; see below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, I've had the test running for 40+ minutes right now;  
</span><br>
<span class="quotelev1">&gt; here's the current output from top:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;  PID USER      PR  NI %CPU    TIME+  %MEM  VIRT  RES  SHR S COMMAND
</span><br>
<span class="quotelev1">&gt; 7332 jsquyres  25   0  100  43:56.79 36.1 33.8g 1.3g  67m R reduce- 
</span><br>
<span class="quotelev1">&gt; hang
</span><br>
<span class="quotelev1">&gt; 7333 jsquyres  25   0  100  43:54.10  0.7  202m  26m  18m R reduce- 
</span><br>
<span class="quotelev1">&gt; hang
</span><br>
<span class="quotelev1">&gt; 7335 jsquyres  25   0  100  43:56.94  1.0  203m  35m  26m R reduce- 
</span><br>
<span class="quotelev1">&gt; hang
</span><br>
<span class="quotelev1">&gt; 7334 jsquyres  25   0  100  43:56.81  1.0  203m  36m  27m R reduce- 
</span><br>
<span class="quotelev1">&gt; hang
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 33.8GB virtual size, 1.3GB resident.  Obviously, this number started  
</span><br>
<span class="quotelev1">&gt; off much lower than that; it took several &quot;jumps&quot; to get to that  
</span><br>
<span class="quotelev1">&gt; size.  It's now more-or-less stable at these sizes; I haven't seen  
</span><br>
<span class="quotelev1">&gt; any jumps recently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This smells quite a bit like MCW rank 0 simply got busy and &quot;fell  
</span><br>
<span class="quotelev1">&gt; behind&quot; for some [temporary] reason.  It therefore accumulated a  
</span><br>
<span class="quotelev1">&gt; whole pile of unexpected messages, thereby pushing memory  
</span><br>
<span class="quotelev1">&gt; utilization up.  Those unexpected messages eventually got consumed,  
</span><br>
<span class="quotelev1">&gt; but the memory is placed on a freelist and not released.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is also congruent with Brad's observation that he's much more  
</span><br>
<span class="quotelev1">&gt; likely to see this behavior if he's on a machine with SMT enabled --  
</span><br>
<span class="quotelev1">&gt; where it's much more likely that MCW rank 0 can &quot;fall behind&quot;, and  
</span><br>
<span class="quotelev1">&gt; possibly never catch up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my guess is that this is the same old unbounded unexpected  
</span><br>
<span class="quotelev1">&gt; message issue that we've known about for a while.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5451.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5449.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>In reply to:</strong> <a href="5445.php">Jeff Squyres: "[OMPI devel] reduce problem/#1791"</a>
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
