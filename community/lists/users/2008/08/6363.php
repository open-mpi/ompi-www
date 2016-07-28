<?
$subject_val = "Re: [OMPI users] SM btl slows down bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 09:09:02 2008" -->
<!-- isoreceived="20080816130902" -->
<!-- sent="Sat, 16 Aug 2008 09:08:56 -0400" -->
<!-- isosent="20080816130856" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SM btl slows down bandwidth?" -->
<!-- id="48A6D168.6070509_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.3480.1218889181.9342.users_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-16 09:08:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6364.php">Kozin, I \(Igor\): "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Previous message:</strong> <a href="6362.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Maybe in reply to:</strong> <a href="6321.php">Dani&#235;l Mantione: "[OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Sat, 16 Aug 2008 08:18:47 -0400 From: Jeff Squyres 
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; Subject: Re: [OMPI users] SM btl slows down 
</span><br>
<span class="quotelev1">&gt; bandwidth? To: Open MPI Users &lt;users_at_[hidden]&gt; Message-ID: 
</span><br>
<span class="quotelev1">&gt; &lt;1197BCE6-A7E3-499E-8B05-B85F7598D455_at_[hidden]&gt; Content-Type: 
</span><br>
<span class="quotelev1">&gt; text/plain; charset=US-ASCII; format=flowed; delsp=yes On Aug 15, 
</span><br>
<span class="quotelev1">&gt; 2008, at 3:32 PM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Just like Daniel and many others, I have seen some disappointing  
</span><br>
<span class="quotelev3">&gt;&gt; &gt; performance of MPI code on multicore machines,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; in code that scales fine in networked environments and single core  
</span><br>
<span class="quotelev3">&gt;&gt; &gt; CPUs,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; particularly in memory-intensive programs.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The bad performance has been variously ascribed to memory  
</span><br>
<span class="quotelev3">&gt;&gt; &gt; bandwidth / contention,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to  setting processor and memory affinity versus letting the kernel  
</span><br>
<span class="quotelev3">&gt;&gt; &gt; scheduler do its thing,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to poor performance of memcpy, and so on.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd suspect that all of these play a role -- not necessarily any one  
</span><br>
<span class="quotelev1">&gt; single one of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - It is my believe (contrary to several kernel developers' beliefs)  
</span><br>
<span class="quotelev1">&gt; that explicitly setting processor affinity is a Good Thing for MPI  
</span><br>
<span class="quotelev1">&gt; applications.  Not only does MPI have more knowledge than the OS for a  
</span><br>
<span class="quotelev1">&gt; parallel job spanning multiple processes, each MPI process is  
</span><br>
<span class="quotelev1">&gt; allocating resources that may be spatially / temporally relevant.  For  
</span><br>
<span class="quotelev1">&gt; example, say that an MPI process allocates some memory during MPI_INIT  
</span><br>
<span class="quotelev1">&gt; in a NUMA system. This memory will likely be &quot;near&quot; in a NUMA sense.   
</span><br>
<span class="quotelev1">&gt; If the OS later decides to move that process, then the memory would be  
</span><br>
<span class="quotelev1">&gt; &quot;far&quot; in a NUMA sense.  Similarly, OMPI decides what I/O resources to  
</span><br>
<span class="quotelev1">&gt; use during MPI_INIT -- and may specifically choose some &quot;near&quot;  
</span><br>
<span class="quotelev1">&gt; resources (and exclude &quot;far&quot; resources).  If the OS moves the process  
</span><br>
<span class="quotelev1">&gt; after MPI_INIT, these &quot;near&quot; and &quot;far&quot; determinations could become  
</span><br>
<span class="quotelev1">&gt; stale/incorrect, and performance would go down the tubes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I've been in the discussion above for many years on the same side as 
<br>
Jeff however I think it is more due to pragmatic reasoning than because 
<br>
MPI is the right level for binding processes.  The Solaris kernel 
<br>
developers I've talked with believe the right way to do the above is for 
<br>
MPI or the runtime to give hints to the OS as to locality binding of 
<br>
processes and have the OS try and maintain the locality.  The reason 
<br>
being is that there might be other processes that the OS is dealing with 
<br>
that MPI or its runtime do not know about.   Having MPI or its runtime 
<br>
force binding really messes up an OSes ability to try and balance the 
<br>
workload on a system.  Now mind you on a machine with small number of 
<br>
cores &lt;8 this probably isn't as big of an issue.  But once you start 
<br>
dealing with large SMPs with 100s of cores there is definitely a good 
<br>
chance that there is more than one MPI job running on a machine.
<br>
<p>However, until MPI and OS implementors come up with a way to pass such 
<br>
hints it does become a necessity for MPI to do the binding for reasons 
<br>
Jeff supplies above.  Note myself, Jeff and another member have talked 
<br>
about such hints but have not come up with anything definitive.
<br>
<span class="quotelev1">&gt; - Unoptimized memcpy implementations is definitely a factor, mainly  
</span><br>
<span class="quotelev1">&gt; for large message transfers through shared memory.  Since most (all?)  
</span><br>
<span class="quotelev1">&gt; MPI implementations use some form of shared memory for on-host  
</span><br>
<span class="quotelev1">&gt; communication, memcpy can play a big part of its performance for large  
</span><br>
<span class="quotelev1">&gt; messages.  Using hardware (such as IB HCAs) for on-host communication  
</span><br>
<span class="quotelev1">&gt; can effectively avoid unoptimized memcpy's, but then you're just  
</span><br>
<span class="quotelev1">&gt; shifting the problem to the hardware -- you're now dependent upon the  
</span><br>
<span class="quotelev1">&gt; hardware's DMA engine (which is *usually* pretty good).  But then  
</span><br>
<span class="quotelev1">&gt; other issues can arise, such as the asynchronicity of the transfer,  
</span><br>
<span class="quotelev1">&gt; potentially causing collisions and/or extra memory bus traversals that  
</span><br>
<span class="quotelev1">&gt; might be able to be avoided with memcpy (it depends on the topology  
</span><br>
<span class="quotelev1">&gt; inside your server -- e.g., if 2 processes are &quot;far&quot; from the IB HCA,  
</span><br>
<span class="quotelev1">&gt; then the transfer will have to traverse QPI/HT/whatever twice, whereas  
</span><br>
<span class="quotelev1">&gt; a memcpy would assumedly stay local).  As Ron pointed out in this  
</span><br>
<span class="quotelev1">&gt; thread, non-temporal memcpy's can be quite helpful for benchmarks that  
</span><br>
<span class="quotelev1">&gt; don't touch the resulting message at the receiver (because the non- 
</span><br>
<span class="quotelev1">&gt; temporal memcpy doesn't bother to take the time to load the cache).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
In addition to the above you may run into platform specific memory 
<br>
architecture issues.  Like should the SM BTL be laying out the fifos in 
<br>
a specific way to get the best performance.  The problem is what is 
<br>
great for one platform may suck eggs for another.
<br>
<p><span class="quotelev1">&gt; - Using different compilers is a highly religious topic, and IMHO, may  
</span><br>
<span class="quotelev1">&gt; tend to be application specific.  Compilers are large complex software  
</span><br>
<span class="quotelev1">&gt; systems (just like MPI); different compiler authors have chosen to  
</span><br>
<span class="quotelev1">&gt; implement different optimizations that work well in different  
</span><br>
<span class="quotelev1">&gt; applications.  So yes, you may well see different run-time performance  
</span><br>
<span class="quotelev1">&gt; with different compilers depending on your application and/or MPI  
</span><br>
<span class="quotelev1">&gt; implementations.  Some compilers may have better memcpy's.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02: I think there are a *lot* of factors involved here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I agree and we probably just scratched the surface here.
<br>
<p>--td
<br>
<p>Terry Dontje
<br>
Sun Microsystems, Inc.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6364.php">Kozin, I \(Igor\): "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Previous message:</strong> <a href="6362.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Maybe in reply to:</strong> <a href="6321.php">Dani&#235;l Mantione: "[OMPI users] SM btl slows down bandwidth?"</a>
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
