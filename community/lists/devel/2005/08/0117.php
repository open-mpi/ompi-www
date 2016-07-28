<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  9 17:49:24 2005" -->
<!-- isoreceived="20050809224924" -->
<!-- sent="Tue, 9 Aug 2005 17:49:57 -0500" -->
<!-- isosent="20050809224957" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="memory manager hooks" -->
<!-- id="0D337578-89B9-48C4-9E50-3BD4652B98DF_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-09 17:49:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0118.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0116.php">Galen Shipman: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>We finally broke down today on the telecon and decided that there's  
<br>
just no way around playing memory manager tricks to get good IB and  
<br>
Myrinet performance.  I added two things to opal today - a dispatch  
<br>
system so that different functions could register to receive  
<br>
callbacks whenever the process is about to &quot;release' memory,  
<br>
containing start and length data and the ptmalloc2 memory manager.   
<br>
Note that &quot;release&quot; is very vague - this could mean free() has been  
<br>
called by the user but the process is going to hold on to the memory  
<br>
or it could mean that the process is giving the memory back to the  
<br>
operating system - it all depends on what the back end is capable  
<br>
of.  The ptmalloc2 memory manager is currently the only system we  
<br>
have for intercepting release of memory, and it must be enabled  
<br>
explicitly at configure time with --with-memory-manager=ptmalloc2.   
<br>
There is a really simple example of using the system in topdir/test/ 
<br>
memory/opal_memory_basic.c.
<br>
<p>I plan on adding a couple more backends to experiment with various  
<br>
systems and their advantages / disadvantages:
<br>
<p>&nbsp;&nbsp;&nbsp;- ld preload a shared object to intercept sbrk / munmap
<br>
&nbsp;&nbsp;&nbsp;- (possibly) a system to use the GLIBC hooks, although book  
<br>
keeping might make this impractical
<br>
&nbsp;&nbsp;&nbsp;- Something with Darwin.  Need to get back in touch with some  
<br>
Apple engineers on how to do this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in a way that sucks less.
<br>
<p>One word of caution - if you register a handler from a component, you  
<br>
*must* unregister the handler before your component is closed.   
<br>
Otherwise, the process is going to segfault when it tries to call the  
<br>
handler after your component is unloaded.
<br>
<p>Brian
<br>
<p><p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0118.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0116.php">Galen Shipman: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
