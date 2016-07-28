<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 12:01:56 2006" -->
<!-- isoreceived="20061102170156" -->
<!-- sent="Thu, 2 Nov 2006 11:53:35 -0500" -->
<!-- isosent="20061102165335" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tickets 39 &amp;amp; 55" -->
<!-- id="1684A6C3-0FBE-4990-8A55-316D3C1B39CA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="84B413F9-BA99-4BDC-AED9-0B0502EF88D1_at_ieee.org" -->
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
<strong>Date:</strong> 2006-11-02 11:53:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2116.php">Brian Budge: "[OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2114.php">Pierre Valiron: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/2089.php">Michael Kluskens: "[OMPI users]   tickets 39 &amp; 55"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2122.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>Reply:</strong> <a href="2122.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adding Craig Rasmussen from LANL into the CC list...
<br>
<p>On Oct 31, 2006, at 10:26 AM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; OpenMPI tickets 39 &amp; 55 deal with problems with the Fortran 90  
</span><br>
<span class="quotelev1">&gt; large interface with regards to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #39: MPI_IN_PLACE in MPI_REDUCE &lt;<a href="https://svn.open-mpi.org/trac/ompi/">https://svn.open-mpi.org/trac/ompi/</a> 
</span><br>
<span class="quotelev1">&gt; ticket/39&gt;
</span><br>
<span class="quotelev1">&gt; #55: MPI_GATHER with arrays of different dimensions &lt;https:// 
</span><br>
<span class="quotelev1">&gt; svn.open-mpi.org/trac/ompi/ticket/55&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a patch to deal with these two issues as applied  
</span><br>
<span class="quotelev1">&gt; against OpenMPI-1.3a1r12364.
</span><br>
<p>Thanks for the patch!  Before committing this, though, I think more  
<br>
needs to be done and I want to understand it before doing so (part of  
<br>
this is me thinking it out while I write this e-mail...).  Also, be  
<br>
aware that SC is 1.5 weeks away, so I may not be able to get to  
<br>
address this issue before then (SC tends to be all-consuming).
<br>
<p>1. The &quot;same type&quot; heuristic for the &quot;large&quot; F90 module was not  
<br>
intended to cover all possible scenarios.  You're absolutely right  
<br>
that assuming the same time makes no sense for some of the  
<br>
interfaces.  The problem is that the obvious alternative (all  
<br>
possible scenarios) creates an exponential number of interfaces (in  
<br>
the millions).  So &quot;large&quot; was an attempt to provide *some* of the  
<br>
interfaces -- but [your] experience has shown that this can do more  
<br>
harm than good (i.e., make some legal MPI applications uncompilable  
<br>
because we provide *some* interfaces to MPI_GATHER, but not all).
<br>
<p>1a. It gets worse because of MPI's semantics for MPI_GATHER.  You  
<br>
pointed out one scenario -- it doesn't make sense to supply &quot;integer&quot;  
<br>
for both the sendbuf and recvbuf because the root will need an  
<br>
integer array to receive all the values (similar logic applies to  
<br>
MPI_SCATTER and other collectives -- so what you did for MPI_GATHER  
<br>
would need to be applied to several others as well).
<br>
<p>1b. But even worse than that is the fact that, for MPI_GATHER, the  
<br>
receive buffer is not relevant on non-root processes.  So it's valid  
<br>
for *any* type to be passed for non-root processes (leading to the  
<br>
exponential interface explosion described above).
<br>
<p>So having *some* interfaces for MPI_GATHER can be a problem for both  
<br>
1a and 1b -- perfectly valid/legal MPI apps will fail to compile.
<br>
<p>I'm not sure what the right balance is here -- how do we allow for  
<br>
both 1a and 1b without creating millions of interfaces?  Your patch  
<br>
created MPI_GATHER interfaces for all the same types, but allowing  
<br>
any dimension mix.  With the default max dimension level of 4 in  
<br>
OMPI's interfaces, this created 90 new interfaces for MPI_GATHER,  
<br>
calculated (and verified with some grep/wc'ing):
<br>
<p>For src buffer of dimension:    0   1   2   3   4
<br>
Create this many recvbuf types: 4 + 4 + 3 + 2 + 1 = 14
<br>
<p>For each src/recvbuf combination, create this many interfaces:
<br>
<p>(char + logical + (integer * 4) + (real * 2) + (complex * 2)) = 10
<br>
<p>Where 4, 2, and 2 are the number of integer, real, and complex types  
<br>
supported by the compiler on my machines (e.g., gfortran on OSX/intel  
<br>
and Linux/EM64T).
<br>
<p>So this created 14 * 10 = 140 interfaces, as opposed to the 50 that  
<br>
were there before the patch (5 dimensions of src/recvbuf * 10 types =  
<br>
50), resulting in 90 new interfaces.
<br>
<p>This effort will need to be duplicated by several other collectives:
<br>
<p>- allgather, allgatherv
<br>
- alltoall, alltoallv, alltoallw
<br>
- gather, gatherv
<br>
- scatter, scatterv
<br>
<p>So an increase of 9 * 90 = 810 new interfaces.  Not too bad,  
<br>
considering the alternative (exponential).  But consider that the  
<br>
&quot;large&quot; interface only has (by my count via egrep/wc) 4013  
<br>
interfaces.  This would be increasing its size by about 20%.  This is  
<br>
certainly not a show-stopper, but something to consider.
<br>
<p>Note that if you go higher than OMPI's default 4 dimensions, the  
<br>
number of new interfaces gets considerably larger (e.g., for 7  
<br>
dimensions you get 35 send/recv type combinations instead of 14, so  
<br>
(35 * 10 * 9) = 3150 total interfaces (just for the collectives), if  
<br>
I did my math right.
<br>
<p>2. You also identified another scenario that needs to be fixed --  
<br>
support for MPI_IN_PLACE in certain collectives (MPI_REDUCE is not  
<br>
the only collective that supports it).  It doesn't seem to be a Good  
<br>
Idea to allow the INTEGER type to be mixed with any other type for  
<br>
send/recvbuf combinations, just to allow MPI_IN_PLACE.  This  
<br>
potentially adds in send/recvbuf signatures that we want to disallow  
<br>
(even though they are potentially valid MPI applications!) -- e.g.,  
<br>
INTEGER and FLOAT.  What if a user accidentally supplied an INTEGER  
<br>
for the sendbuf that wasn't MPI_IN_PLACE?  That's what the type  
<br>
system is supposed to be preventing.
<br>
<p>I don't know enough about the type system of F90, but it strikes me  
<br>
that we should be able to create a unique type for MPI_IN_PLACE  
<br>
(don't know why I didn't think of this before for some of the MPI  
<br>
sentinel values... :-\ ) and therefore have a safe mechanism for this  
<br>
sentinel value.
<br>
<p>This would add 10 interfaces for every function that supports  
<br>
MPI_IN_PLACE; a pretty small increase.
<br>
<p>This same technique should probably be applied to some of the other  
<br>
sentinel values, such as MPI_ARGVS_NULL and MPI_STATUSES_IGNORE.
<br>
<p>---------------
<br>
<p>All that being said, what does it mean?
<br>
<p>I think #2 is easily enough fixed (just require the time to do so),  
<br>
and has minimal impact on the number of interfaces.  Implementing MPI  
<br>
sentinel values with unique types also makes user apps that much more  
<br>
safe (i.e., they won't accidentally pass in an incorrect type that  
<br>
would be mistaken -- by the interface -- for a valid signature).
<br>
<p>#1 is still a problem.  No matter how we slice it, we're going to  
<br>
leave out valid combinations of send/recv buffers that will prevent  
<br>
potentially legal MPI applications from compiling.  This is as  
<br>
opposed to not having F90 interfaces for the 2-choice-buffer  
<br>
functions at all, which would mean that F90 apps using MPI_GATHER  
<br>
(for example) would simply fall back to the F77 interfaces where no  
<br>
type checking is done.  End result: all MPI F90 apps can compile.
<br>
<p>Simply put, with the trivial, small, and medium module sizes, all  
<br>
valid MPI F90 applications can compile and run.  With the large size,  
<br>
unless we do the exponential interface explosion, we will be  
<br>
potentially excluding some legal MPI F90 applications -- they *will  
<br>
not be able to compile* (without workarounds).  This is what I meant  
<br>
by ticket 55's title &quot;F90 &quot;large&quot; interface may not entirely make  
<br>
sense&quot;.
<br>
<p>So there are multiple options here:
<br>
<p>1. Keep chasing a &quot;good&quot; definition of &quot;large&quot; such that most/all  
<br>
current MPI F90 apps can compile.  The problem is that this target  
<br>
can change over time, and keep requiring maintenance.
<br>
<p>2. Stop pursuing &quot;large&quot; because of the problems mentioned above.   
<br>
This has the potential problem of not providing type safety to F90  
<br>
MPI apps for the MPI collective interfaces, but at least all apps can  
<br>
compile, and there's only a small number of 2-choice-buffer functions  
<br>
that do not get the type safety from F90 (i.e., several MPI  
<br>
collective functions).
<br>
<p>3. Start implementing the proposed F03 MPI interfaces that don't have  
<br>
the same problems as the F90 MPI interfaces.
<br>
<p>I have to admit that I'm leaning more towards #2 (and I wish that  
<br>
someone who has the time would do #3!) and discarding #1...
<br>
<p>Comments?
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
<li><strong>Next message:</strong> <a href="2116.php">Brian Budge: "[OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2114.php">Pierre Valiron: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/2089.php">Michael Kluskens: "[OMPI users]   tickets 39 &amp; 55"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2122.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>Reply:</strong> <a href="2122.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
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
