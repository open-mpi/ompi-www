<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 19:48:04 2006" -->
<!-- isoreceived="20061103004804" -->
<!-- sent="Thu, 2 Nov 2006 19:47:44 -0500" -->
<!-- isosent="20061103004744" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tickets 39 &amp;amp; 55" -->
<!-- id="ED457848-89D9-452B-B459-EEE4BC4AA11B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A6B8E9A1-8496-489E-9E46-2F1FD3374EDC_at_ieee.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-02 19:47:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2127.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2125.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>In reply to:</strong> <a href="2122.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2142.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>Reply:</strong> <a href="2142.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 2, 2006, at 3:18 PM, Michael Kluskens wrote:
<br>
<p><span class="quotelev2">&gt;&gt;   So &quot;large&quot; was an attempt to provide *some* of the
</span><br>
<span class="quotelev2">&gt;&gt; interfaces -- but [your] experience has shown that this can do more
</span><br>
<span class="quotelev2">&gt;&gt; harm than good (i.e., make some legal MPI applications uncompilable
</span><br>
<span class="quotelev2">&gt;&gt; because we provide *some* interfaces to MPI_GATHER, but not all).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a serious issue in my opinion.  I suspect that virtually
</span><br>
<span class="quotelev1">&gt; every use of MPI_GATHER and the others would fail with the large
</span><br>
<span class="quotelev1">&gt; interfaces as is, there by making sure no one would be able to use
</span><br>
<span class="quotelev1">&gt; the large interfaces on a multiuser system.
</span><br>
<p>I agree -- the &quot;large&quot; interface is pretty unusable at this point.
<br>
<p><span class="quotelev2">&gt;&gt; 1b. But even worse than that is the fact that, for MPI_GATHER, the
</span><br>
<span class="quotelev2">&gt;&gt; receive buffer is not relevant on non-root processes.  So it's valid
</span><br>
<span class="quotelev2">&gt;&gt; for *any* type to be passed for non-root processes (leading to the
</span><br>
<span class="quotelev2">&gt;&gt; exponential interface explosion described above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would consider this to be very bad programming practice and not a
</span><br>
<span class="quotelev1">&gt; good idea to support in the large interface regardless of the cost.
</span><br>
<p>I admit to not knowing what good practices are here; in C, you can  
<br>
just pass NULL for non-root processes and be done with it.  For MPMD  
<br>
codes in Fortran (e.g., where non-root processes have a different  
<br>
code path than the root processes), I can imagine passing in any old  
<br>
buffer that you've got handy since MPI guarantees to ignore it.
<br>
<p><span class="quotelev1">&gt; One issue is that derived datatypes will never (?) work with the
</span><br>
<span class="quotelev1">&gt; large interfaces, for that matter I would guess that derived
</span><br>
<span class="quotelev1">&gt; datatypes probably don't work with medium and possibly small
</span><br>
<span class="quotelev1">&gt; interfaces.  I don't know if there is away around that issue at all
</span><br>
<span class="quotelev1">&gt; in F90/F95, some places may have to do two installations.  I don't
</span><br>
<span class="quotelev1">&gt; think giving up on all interfaces that conflict with derived types is
</span><br>
<span class="quotelev1">&gt; a good solution.
</span><br>
<p>Very true; derived data types are always going to be a problem for  
<br>
F90/F95 (as I understand those languages).  The proposed F03 bindings  
<br>
don't have this problem because (again, as I understand the language  
<br>
-- and I am *not* a Fortran expert!) they have the equivalent of  
<br>
(void*) that we can use for choice buffers.
<br>
<p><span class="quotelev2">&gt;&gt; So there are multiple options here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Keep chasing a &quot;good&quot; definition of &quot;large&quot; such that most/all
</span><br>
<span class="quotelev2">&gt;&gt; current MPI F90 apps can compile.  The problem is that this target
</span><br>
<span class="quotelev2">&gt;&gt; can change over time, and keep requiring maintenance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Stop pursuing &quot;large&quot; because of the problems mentioned above.
</span><br>
<span class="quotelev2">&gt;&gt; This has the potential problem of not providing type safety to F90
</span><br>
<span class="quotelev2">&gt;&gt; MPI apps for the MPI collective interfaces, but at least all apps can
</span><br>
<span class="quotelev2">&gt;&gt; compile, and there's only a small number of 2-choice-buffer functions
</span><br>
<span class="quotelev2">&gt;&gt; that do not get the type safety from F90 (i.e., several MPI
</span><br>
<span class="quotelev2">&gt;&gt; collective functions).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Start implementing the proposed F03 MPI interfaces that don't have
</span><br>
<span class="quotelev2">&gt;&gt; the same problems as the F90 MPI interfaces.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have to admit that I'm leaning more towards #2 (and I wish that
</span><br>
<span class="quotelev2">&gt;&gt; someone who has the time would do #3!) and discarding #1...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I dislike #2 intensely because then I and others couldn't at least
</span><br>
<span class="quotelev1">&gt; patch the interface scripts before building OpenMPI.
</span><br>
<p>Don't misunderstand me -- by #2, I don't mean ripping the code out of  
<br>
Open MPI.  I simply mean not progressing it any further.
<br>
<p><span class="quotelev1">&gt; #1 is preferred and just give the users/builders clear notice they
</span><br>
<span class="quotelev1">&gt; may not cover everything and perhaps a hint as to what directory has
</span><br>
<span class="quotelev1">&gt; the files to be patched to extend the large interface a bit further.
</span><br>
<p>I suppose.  I'd be willing to accept a patch for all the things we  
<br>
talked about in this thread (e.g., the stuff you did for GATHER  
<br>
extrapolated for all the other collectives that need it, and either  
<br>
what you did for REDUCE to allow IN_PLACE or expanding IN_PLACE to be  
<br>
a unique datatype as we discussed).  More specifically, I'd rather  
<br>
fix *all* the collectives rather than just GATHER/dimensions and  
<br>
REDUCE/IN_PLACE.  I unfortunately do not have the cycles to do this  
<br>
work myself.  :-\
<br>
<p><span class="quotelev1">&gt; #3 would be nice but I don't see enough F03 support in enough
</span><br>
<span class="quotelev1">&gt; compilers at this time.  I don't even have a book on the F03 changes
</span><br>
<span class="quotelev1">&gt; and I program Fortran most of the day virtually every weekday.  It
</span><br>
<span class="quotelev1">&gt; took our group till about 2000 to start using Fortran 90 and almost
</span><br>
<span class="quotelev1">&gt; everything we do is in Fortran.
</span><br>
<p>Craig -- you probably have better visibility on the state of F03  
<br>
compilers that me.  What's the view from that perspective?
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2127.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2125.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>In reply to:</strong> <a href="2122.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2142.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>Reply:</strong> <a href="2142.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
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
