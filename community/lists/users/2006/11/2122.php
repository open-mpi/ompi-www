<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 15:19:19 2006" -->
<!-- isoreceived="20061102201919" -->
<!-- sent="Thu, 2 Nov 2006 15:18:28 -0500" -->
<!-- isosent="20061102201828" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tickets 39 &amp;amp; 55" -->
<!-- id="A6B8E9A1-8496-489E-9E46-2F1FD3374EDC_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1684A6C3-0FBE-4990-8A55-316D3C1B39CA_at_cisco.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-02 15:18:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2123.php">Gleb Natapov: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2121.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>In reply to:</strong> <a href="2115.php">Jeff Squyres: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2124.php">Pierre Valiron: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>Reply:</strong> <a href="2124.php">Pierre Valiron: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>Reply:</strong> <a href="2126.php">Jeff Squyres: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 2, 2006, at 11:53 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Adding Craig Rasmussen from LANL into the CC list...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2006, at 10:26 AM, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI tickets 39 &amp; 55 deal with problems with the Fortran 90
</span><br>
<span class="quotelev2">&gt;&gt; large interface with regards to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #39: MPI_IN_PLACE in MPI_REDUCE &lt;<a href="https://svn.open-mpi.org/trac/ompi/">https://svn.open-mpi.org/trac/ompi/</a>
</span><br>
<span class="quotelev2">&gt;&gt; ticket/39&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #55: MPI_GATHER with arrays of different dimensions &lt;https://
</span><br>
<span class="quotelev2">&gt;&gt; svn.open-mpi.org/trac/ompi/ticket/55&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attached is a patch to deal with these two issues as applied
</span><br>
<span class="quotelev2">&gt;&gt; against OpenMPI-1.3a1r12364.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the patch!  Before committing this, though, I think more
</span><br>
<span class="quotelev1">&gt; needs to be done and I want to understand it before doing so (part of
</span><br>
<span class="quotelev1">&gt; this is me thinking it out while I write this e-mail...).  Also, be
</span><br>
<span class="quotelev1">&gt; aware that SC is 1.5 weeks away, so I may not be able to get to
</span><br>
<span class="quotelev1">&gt; address this issue before then (SC tends to be all-consuming).
</span><br>
<p>Understood, just didn't wish to see this die or get worse.
<br>
<p><span class="quotelev1">&gt; 1. The &quot;same type&quot; heuristic for the &quot;large&quot; F90 module was not
</span><br>
<span class="quotelev1">&gt; intended to cover all possible scenarios.  You're absolutely right
</span><br>
<span class="quotelev1">&gt; that assuming the same
</span><br>
dimension (sp)
<br>
<span class="quotelev1">&gt; makes no sense for some of the
</span><br>
<span class="quotelev1">&gt; interfaces.  The problem is that the obvious alternative (all
</span><br>
<span class="quotelev1">&gt; possible scenarios) creates an exponential number of interfaces (in
</span><br>
<span class="quotelev1">&gt; the millions).
</span><br>
<p>I think it can be limited by including reasonable scenarios.  As is  
<br>
it's not very useful but as is it at least can be patched by the end- 
<br>
builder.
<br>
<p><span class="quotelev1">&gt;   So &quot;large&quot; was an attempt to provide *some* of the
</span><br>
<span class="quotelev1">&gt; interfaces -- but [your] experience has shown that this can do more
</span><br>
<span class="quotelev1">&gt; harm than good (i.e., make some legal MPI applications uncompilable
</span><br>
<span class="quotelev1">&gt; because we provide *some* interfaces to MPI_GATHER, but not all).
</span><br>
<p>This is a serious issue in my opinion.  I suspect that virtually  
<br>
every use of MPI_GATHER and the others would fail with the large  
<br>
interfaces as is, there by making sure no one would be able to use  
<br>
the large interfaces on a multiuser system.
<br>
<p><span class="quotelev1">&gt; 1a. It gets worse because of MPI's semantics for MPI_GATHER.  You
</span><br>
<span class="quotelev1">&gt; pointed out one scenario -- it doesn't make sense to supply &quot;integer&quot;
</span><br>
<span class="quotelev1">&gt; for both the sendbuf and recvbuf because the root will need an
</span><br>
<span class="quotelev1">&gt; integer array to receive all the values (similar logic applies to
</span><br>
<span class="quotelev1">&gt; MPI_SCATTER and other collectives -- so what you did for MPI_GATHER
</span><br>
<span class="quotelev1">&gt; would need to be applied to several others as well).
</span><br>
<p>Agreed.  I limited my patch to that which I could test with working  
<br>
code and could justify work time wise.
<br>
<p><span class="quotelev1">&gt; 1b. But even worse than that is the fact that, for MPI_GATHER, the
</span><br>
<span class="quotelev1">&gt; receive buffer is not relevant on non-root processes.  So it's valid
</span><br>
<span class="quotelev1">&gt; for *any* type to be passed for non-root processes (leading to the
</span><br>
<span class="quotelev1">&gt; exponential interface explosion described above).
</span><br>
<p>I would consider this to be very bad programming practice and not a  
<br>
good idea to support in the large interface regardless of the cost.
<br>
<p>One issue is that derived datatypes will never (?) work with the  
<br>
large interfaces, for that matter I would guess that derived  
<br>
datatypes probably don't work with medium and possibly small  
<br>
interfaces.  I don't know if there is away around that issue at all  
<br>
in F90/F95, some places may have to do two installations.  I don't  
<br>
think giving up on all interfaces that conflict with derived types is  
<br>
a good solution.
<br>
<p><span class="quotelev1">&gt; So having *some* interfaces for MPI_GATHER can be a problem for both
</span><br>
<span class="quotelev1">&gt; 1a and 1b -- perfectly valid/legal MPI apps will fail to compile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what the right balance is here -- how do we allow for
</span><br>
<span class="quotelev1">&gt; both 1a and 1b without creating millions of interfaces?  Your patch
</span><br>
<span class="quotelev1">&gt; created MPI_GATHER interfaces for all the same types, but allowing
</span><br>
<span class="quotelev1">&gt; any dimension mix.  With the default max dimension level of 4 in
</span><br>
<span class="quotelev1">&gt; OMPI's interfaces, this created 90 new interfaces for MPI_GATHER,
</span><br>
<span class="quotelev1">&gt; calculated (and verified with some grep/wc'ing):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For src buffer of dimension:    0   1   2   3   4
</span><br>
<span class="quotelev1">&gt; Create this many recvbuf types: 4 + 4 + 3 + 2 + 1 = 14
</span><br>
<p>An alternative would be to allow same and one less dimension for  
<br>
large (called dim+1 below), and make all dimensions be optional some  
<br>
way.  I know that having these extra interfaces allowed me to find  
<br>
serious oversights on my part by permitting me to compile with the  
<br>
large interfaces.
<br>
<p><span class="quotelev1">&gt; For each src/recvbuf combination, create this many interfaces:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (char + logical + (integer * 4) + (real * 2) + (complex * 2)) = 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where 4, 2, and 2 are the number of integer, real, and complex types
</span><br>
<span class="quotelev1">&gt; supported by the compiler on my machines (e.g., gfortran on OSX/intel
</span><br>
<span class="quotelev1">&gt; and Linux/EM64T).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So this created 14 * 10 = 140 interfaces, as opposed to the 50 that
</span><br>
<span class="quotelev1">&gt; were there before the patch (5 dimensions of src/recvbuf * 10 types =
</span><br>
<span class="quotelev1">&gt; 50), resulting in 90 new interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This effort will need to be duplicated by several other collectives:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - allgather, allgatherv
</span><br>
<span class="quotelev1">&gt; - alltoall, alltoallv, alltoallw
</span><br>
<span class="quotelev1">&gt; - gather, gatherv
</span><br>
<span class="quotelev1">&gt; - scatter, scatterv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So an increase of 9 * 90 = 810 new interfaces.  Not too bad,
</span><br>
<span class="quotelev1">&gt; considering the alternative (exponential).  But consider that the
</span><br>
<span class="quotelev1">&gt; &quot;large&quot; interface only has (by my count via egrep/wc) 4013
</span><br>
<span class="quotelev1">&gt; interfaces.  This would be increasing its size by about 20%.  This is
</span><br>
<span class="quotelev1">&gt; certainly not a show-stopper, but something to consider.
</span><br>
<p>Without some increase (all or dim+1) I suspect large interfaces will  
<br>
be useless for anyone (or any site) accessing one of these 10  
<br>
routines anywhere in their program.
<br>
<p><span class="quotelev1">&gt; Note that if you go higher than OMPI's default 4 dimensions, the
</span><br>
<span class="quotelev1">&gt; number of new interfaces gets considerably larger (e.g., for 7
</span><br>
<span class="quotelev1">&gt; dimensions you get 35 send/recv type combinations instead of 14, so
</span><br>
<span class="quotelev1">&gt; (35 * 10 * 9) = 3150 total interfaces (just for the collectives), if
</span><br>
<span class="quotelev1">&gt; I did my math right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. You also identified another scenario that needs to be fixed --
</span><br>
<span class="quotelev1">&gt; support for MPI_IN_PLACE in certain collectives (MPI_REDUCE is not
</span><br>
<span class="quotelev1">&gt; the only collective that supports it).  It doesn't seem to be a Good
</span><br>
<span class="quotelev1">&gt; Idea to allow the INTEGER type to be mixed with any other type for
</span><br>
<span class="quotelev1">&gt; send/recvbuf combinations, just to allow MPI_IN_PLACE.  This
</span><br>
<span class="quotelev1">&gt; potentially adds in send/recvbuf signatures that we want to disallow
</span><br>
<span class="quotelev1">&gt; (even though they are potentially valid MPI applications!) -- e.g.,
</span><br>
<span class="quotelev1">&gt; INTEGER and FLOAT.  What if a user accidentally supplied an INTEGER
</span><br>
<span class="quotelev1">&gt; for the sendbuf that wasn't MPI_IN_PLACE?  That's what the type
</span><br>
<span class="quotelev1">&gt; system is supposed to be preventing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know enough about the type system of F90, but it strikes me
</span><br>
<span class="quotelev1">&gt; that we should be able to create a unique type for MPI_IN_PLACE
</span><br>
<span class="quotelev1">&gt; (don't know why I didn't think of this before for some of the MPI
</span><br>
<span class="quotelev1">&gt; sentinel values... :-\ ) and therefore have a safe mechanism for this
</span><br>
<span class="quotelev1">&gt; sentinel value.
</span><br>
<p>This would be very good approach, allowing large interfaces to be  
<br>
used with MPI_IN_PLACE but preventing this alternative error.  That's  
<br>
a bit more complicated then I'm ready to patch myself.
<br>
<p><span class="quotelev1">&gt; This would add 10 interfaces for every function that supports
</span><br>
<span class="quotelev1">&gt; MPI_IN_PLACE; a pretty small increase.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This same technique should probably be applied to some of the other
</span><br>
<span class="quotelev1">&gt; sentinel values, such as MPI_ARGVS_NULL and MPI_STATUSES_IGNORE.
</span><br>
<p>I agree on that as well, but don't have experience using these to  
<br>
understand all their issues.
<br>
<p><span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All that being said, what does it mean?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think #2 is easily enough fixed (just require the time to do so),
</span><br>
<span class="quotelev1">&gt; and has minimal impact on the number of interfaces.  Implementing MPI
</span><br>
<span class="quotelev1">&gt; sentinel values with unique types also makes user apps that much more
</span><br>
<span class="quotelev1">&gt; safe (i.e., they won't accidentally pass in an incorrect type that
</span><br>
<span class="quotelev1">&gt; would be mistaken -- by the interface -- for a valid signature).
</span><br>
<p>Or pass the sentinel values into places they should not be passed.
<br>
<p><span class="quotelev1">&gt; #1 is still a problem.  No matter how we slice it, we're going to
</span><br>
<span class="quotelev1">&gt; leave out valid combinations of send/recv buffers that will prevent
</span><br>
<span class="quotelev1">&gt; potentially legal MPI applications from compiling.  This is as
</span><br>
<span class="quotelev1">&gt; opposed to not having F90 interfaces for the 2-choice-buffer
</span><br>
<span class="quotelev1">&gt; functions at all, which would mean that F90 apps using MPI_GATHER
</span><br>
<span class="quotelev1">&gt; (for example) would simply fall back to the F77 interfaces where no
</span><br>
<span class="quotelev1">&gt; type checking is done.  End result: all MPI F90 apps can compile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Simply put, with the trivial, small, and medium module sizes, all
</span><br>
<span class="quotelev1">&gt; valid MPI F90 applications can compile and run.
</span><br>
<p>Well maybe not as I point out above with derived types, again not a  
<br>
reason to ditch interfaces completely, they do more good then harm.
<br>
<p><span class="quotelev1">&gt;   With the large size,
</span><br>
<span class="quotelev1">&gt; unless we do the exponential interface explosion, we will be
</span><br>
<span class="quotelev1">&gt; potentially excluding some legal MPI F90 applications -- they *will
</span><br>
<span class="quotelev1">&gt; not be able to compile* (without workarounds).  This is what I meant
</span><br>
<span class="quotelev1">&gt; by ticket 55's title &quot;F90 &quot;large&quot; interface may not entirely make
</span><br>
<span class="quotelev1">&gt; sense&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So there are multiple options here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Keep chasing a &quot;good&quot; definition of &quot;large&quot; such that most/all
</span><br>
<span class="quotelev1">&gt; current MPI F90 apps can compile.  The problem is that this target
</span><br>
<span class="quotelev1">&gt; can change over time, and keep requiring maintenance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Stop pursuing &quot;large&quot; because of the problems mentioned above.
</span><br>
<span class="quotelev1">&gt; This has the potential problem of not providing type safety to F90
</span><br>
<span class="quotelev1">&gt; MPI apps for the MPI collective interfaces, but at least all apps can
</span><br>
<span class="quotelev1">&gt; compile, and there's only a small number of 2-choice-buffer functions
</span><br>
<span class="quotelev1">&gt; that do not get the type safety from F90 (i.e., several MPI
</span><br>
<span class="quotelev1">&gt; collective functions).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Start implementing the proposed F03 MPI interfaces that don't have
</span><br>
<span class="quotelev1">&gt; the same problems as the F90 MPI interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have to admit that I'm leaning more towards #2 (and I wish that
</span><br>
<span class="quotelev1">&gt; someone who has the time would do #3!) and discarding #1...
</span><br>
<p><p>I dislike #2 intensely because then I and others couldn't at least  
<br>
patch the interface scripts before building OpenMPI.
<br>
<p>#1 is preferred and just give the users/builders clear notice they  
<br>
may not cover everything and perhaps a hint as to what directory has  
<br>
the files to be patched to extend the large interface a bit further.
<br>
<p>#3 would be nice but I don't see enough F03 support in enough  
<br>
compilers at this time.  I don't even have a book on the F03 changes  
<br>
and I program Fortran most of the day virtually every weekday.  It  
<br>
took our group till about 2000 to start using Fortran 90 and almost  
<br>
everything we do is in Fortran.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2123.php">Gleb Natapov: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2121.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>In reply to:</strong> <a href="2115.php">Jeff Squyres: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2124.php">Pierre Valiron: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>Reply:</strong> <a href="2124.php">Pierre Valiron: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>Reply:</strong> <a href="2126.php">Jeff Squyres: "Re: [OMPI users] tickets 39 &amp; 55"</a>
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
