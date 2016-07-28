<?
$subject_val = "Re: [OMPI users] SM btl slows down bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 08:19:40 2008" -->
<!-- isoreceived="20080816121940" -->
<!-- sent="Sat, 16 Aug 2008 08:18:47 -0400" -->
<!-- isosent="20080816121847" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SM btl slows down bandwidth?" -->
<!-- id="1197BCE6-A7E3-499E-8B05-B85F7598D455_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48A5D9C2.7070004_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] SM btl slows down bandwidth?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-16 08:18:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6363.php">Terry Dontje: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6361.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>In reply to:</strong> <a href="6353.php">Gus Correa: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6363.php">Terry Dontje: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 15, 2008, at 3:32 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Just like Daniel and many others, I have seen some disappointing  
</span><br>
<span class="quotelev1">&gt; performance of MPI code on multicore machines,
</span><br>
<span class="quotelev1">&gt; in code that scales fine in networked environments and single core  
</span><br>
<span class="quotelev1">&gt; CPUs,
</span><br>
<span class="quotelev1">&gt; particularly in memory-intensive programs.
</span><br>
<span class="quotelev1">&gt; The bad performance has been variously ascribed to memory  
</span><br>
<span class="quotelev1">&gt; bandwidth / contention,
</span><br>
<span class="quotelev1">&gt; to  setting processor and memory affinity versus letting the kernel  
</span><br>
<span class="quotelev1">&gt; scheduler do its thing,
</span><br>
<span class="quotelev1">&gt; to poor performance of memcpy, and so on.
</span><br>
<p>I'd suspect that all of these play a role -- not necessarily any one  
<br>
single one of them.
<br>
<p>- It is my believe (contrary to several kernel developers' beliefs)  
<br>
that explicitly setting processor affinity is a Good Thing for MPI  
<br>
applications.  Not only does MPI have more knowledge than the OS for a  
<br>
parallel job spanning multiple processes, each MPI process is  
<br>
allocating resources that may be spatially / temporally relevant.  For  
<br>
example, say that an MPI process allocates some memory during MPI_INIT  
<br>
in a NUMA system. This memory will likely be &quot;near&quot; in a NUMA sense.   
<br>
If the OS later decides to move that process, then the memory would be  
<br>
&quot;far&quot; in a NUMA sense.  Similarly, OMPI decides what I/O resources to  
<br>
use during MPI_INIT -- and may specifically choose some &quot;near&quot;  
<br>
resources (and exclude &quot;far&quot; resources).  If the OS moves the process  
<br>
after MPI_INIT, these &quot;near&quot; and &quot;far&quot; determinations could become  
<br>
stale/incorrect, and performance would go down the tubes.
<br>
<p>- Unoptimized memcpy implementations is definitely a factor, mainly  
<br>
for large message transfers through shared memory.  Since most (all?)  
<br>
MPI implementations use some form of shared memory for on-host  
<br>
communication, memcpy can play a big part of its performance for large  
<br>
messages.  Using hardware (such as IB HCAs) for on-host communication  
<br>
can effectively avoid unoptimized memcpy's, but then you're just  
<br>
shifting the problem to the hardware -- you're now dependent upon the  
<br>
hardware's DMA engine (which is *usually* pretty good).  But then  
<br>
other issues can arise, such as the asynchronicity of the transfer,  
<br>
potentially causing collisions and/or extra memory bus traversals that  
<br>
might be able to be avoided with memcpy (it depends on the topology  
<br>
inside your server -- e.g., if 2 processes are &quot;far&quot; from the IB HCA,  
<br>
then the transfer will have to traverse QPI/HT/whatever twice, whereas  
<br>
a memcpy would assumedly stay local).  As Ron pointed out in this  
<br>
thread, non-temporal memcpy's can be quite helpful for benchmarks that  
<br>
don't touch the resulting message at the receiver (because the non- 
<br>
temporal memcpy doesn't bother to take the time to load the cache).
<br>
<p>- Using different compilers is a highly religious topic, and IMHO, may  
<br>
tend to be application specific.  Compilers are large complex software  
<br>
systems (just like MPI); different compiler authors have chosen to  
<br>
implement different optimizations that work well in different  
<br>
applications.  So yes, you may well see different run-time performance  
<br>
with different compilers depending on your application and/or MPI  
<br>
implementations.  Some compilers may have better memcpy's.
<br>
<p>My $0.02: I think there are a *lot* of factors involved here.
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
<li><strong>Next message:</strong> <a href="6363.php">Terry Dontje: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6361.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>In reply to:</strong> <a href="6353.php">Gus Correa: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6363.php">Terry Dontje: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
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
