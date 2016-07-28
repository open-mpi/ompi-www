<?
$subject_val = "[OMPI devel] reduce problem/#1791";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 12:54:47 2009" -->
<!-- isoreceived="20090217175447" -->
<!-- sent="Tue, 17 Feb 2009 12:54:41 -0500" -->
<!-- isosent="20090217175441" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] reduce problem/#1791" -->
<!-- id="36B94B39-30EA-4F59-8EED-2730D49519BC_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] reduce problem/#1791<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 12:54:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5446.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5444.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5450.php">Jeff Squyres: "Re: [OMPI devel] reduce problem/#1791"</a>
<li><strong>Reply:</strong> <a href="5450.php">Jeff Squyres: "Re: [OMPI devel] reduce problem/#1791"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per the call today, I ran the reduce-hang.c test on a single x86 4- 
<br>
core xeon node with both 1.2.8 and 1.2.9.  I see the same behavior  
<br>
with both:
<br>
<p>- none of the processes hang; they all keep iterating over MPI_REDUCE
<br>
- the iteration numbers sent to stdout are more-or-less in sync
<br>
- memory usage (via top) is fairly steady
<br>
&nbsp;&nbsp;&nbsp;- ...except when MPI_COMM_WORLD rank 0 memory usage periodically  
<br>
jumps up significantly
<br>
<p>I do not believe that this is a 1.2.9 regression; see below.
<br>
<p>For example, I've had the test running for 40+ minutes right now;  
<br>
here's the current output from top:
<br>
<p>-----
<br>
&nbsp;&nbsp;&nbsp;PID USER      PR  NI %CPU    TIME+  %MEM  VIRT  RES  SHR S COMMAND
<br>
&nbsp;&nbsp;7332 jsquyres  25   0  100  43:56.79 36.1 33.8g 1.3g  67m R reduce- 
<br>
hang
<br>
&nbsp;&nbsp;7333 jsquyres  25   0  100  43:54.10  0.7  202m  26m  18m R reduce- 
<br>
hang
<br>
&nbsp;&nbsp;7335 jsquyres  25   0  100  43:56.94  1.0  203m  35m  26m R reduce- 
<br>
hang
<br>
&nbsp;&nbsp;7334 jsquyres  25   0  100  43:56.81  1.0  203m  36m  27m R reduce- 
<br>
hang
<br>
-----
<br>
<p>33.8GB virtual size, 1.3GB resident.  Obviously, this number started  
<br>
off much lower than that; it took several &quot;jumps&quot; to get to that  
<br>
size.  It's now more-or-less stable at these sizes; I haven't seen any  
<br>
jumps recently.
<br>
<p>This smells quite a bit like MCW rank 0 simply got busy and &quot;fell  
<br>
behind&quot; for some [temporary] reason.  It therefore accumulated a whole  
<br>
pile of unexpected messages, thereby pushing memory utilization up.   
<br>
Those unexpected messages eventually got consumed, but the memory is  
<br>
placed on a freelist and not released.
<br>
<p>This is also congruent with Brad's observation that he's much more  
<br>
likely to see this behavior if he's on a machine with SMT enabled --  
<br>
where it's much more likely that MCW rank 0 can &quot;fall behind&quot;, and  
<br>
possibly never catch up.
<br>
<p>So my guess is that this is the same old unbounded unexpected message  
<br>
issue that we've known about for a while.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5446.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5444.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5450.php">Jeff Squyres: "Re: [OMPI devel] reduce problem/#1791"</a>
<li><strong>Reply:</strong> <a href="5450.php">Jeff Squyres: "Re: [OMPI devel] reduce problem/#1791"</a>
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
