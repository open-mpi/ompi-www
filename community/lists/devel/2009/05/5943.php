<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 11:44:30 2009" -->
<!-- isoreceived="20090501154430" -->
<!-- sent="Fri, 1 May 2009 11:44:26 -0400 (EDT)" -->
<!-- isosent="20090501154426" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="alpine.DEB.1.10.0905011144190.20741_at_marvin.we-be-smart.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0905010642t4fbafb38r57919c1092b7a0bd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Inherent limit on #communicators?<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-01 11:44:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5944.php">Brian Blank: "[OMPI devel] Fwd:  Fwd: Purify found bugs inside open-mpi library"</a>
<li><strong>Previous message:</strong> <a href="5942.php">Ralph Castain: "Re: [OMPI devel] OS X compilation broken"</a>
<li><strong>In reply to:</strong> <a href="5938.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5946.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5946.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ugh - I'll fix today.
<br>
<p>Brian
<br>
<p>On Fri, 1 May 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; BTW: when compiling Brian's change, I got a warning about comparing
</span><br>
<span class="quotelev1">&gt; signed and unsigned. Sure enough, I found that the communicator id is
</span><br>
<span class="quotelev1">&gt; defined as an unsigned int, while the PML is treating it as a *signed*
</span><br>
<span class="quotelev1">&gt; int.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We need to get this corrected - which way do you want it to be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will add this requirement to the ticket...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, May 1, 2009 at 6:38 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;       I'm not entirely sure if David is going to be in today, so I
</span><br>
<span class="quotelev1">&gt;       will answer for him (and let him correct me later!).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       This code is indeed representative of what the app is doing.
</span><br>
<span class="quotelev1">&gt;       Basically, the user repeatedly splits the communicator so he
</span><br>
<span class="quotelev1">&gt;       can run mini test cases before going on to the larger
</span><br>
<span class="quotelev1">&gt;       computation. So it is always the base communicator being
</span><br>
<span class="quotelev1">&gt;       repeatedly split and freed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       I would suspect, therefore, that the quick fix would serve us
</span><br>
<span class="quotelev1">&gt;       just fine while the worst case is later resolved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Thanks
</span><br>
<span class="quotelev1">&gt;       Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, May 1, 2009 at 6:08 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;       David,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       is this code representative for what your app is doing?
</span><br>
<span class="quotelev1">&gt;       E.g. you have a base communicator (e.g. MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt;       which is being 'split', freed again, split, freed again
</span><br>
<span class="quotelev1">&gt;       etc. ? i.e. the important aspect is that the same
</span><br>
<span class="quotelev1">&gt;       'base' communicator is being used for deriving new
</span><br>
<span class="quotelev1">&gt;       communicators again and again?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       The reason I ask is two-fold: one, you would in that
</span><br>
<span class="quotelev1">&gt;       case be one of the ideal beneficiaries of the block cid
</span><br>
<span class="quotelev1">&gt;       algorithm :-) (even if it fails you right now); &#160;two, a
</span><br>
<span class="quotelev1">&gt;       fix for this scenario which basically tries to reuse
</span><br>
<span class="quotelev1">&gt;       the last block used (and which would fix your case if
</span><br>
<span class="quotelev1">&gt;       the condition is true) is roughly five lines of code.
</span><br>
<span class="quotelev1">&gt;       This would give us the possibility to have a fix
</span><br>
<span class="quotelev1">&gt;       quickly in the trunk and v1.3 (keep in mind that the
</span><br>
<span class="quotelev1">&gt;       block-cid code is in the trunk since two years and this
</span><br>
<span class="quotelev1">&gt;       is the first problem that we have) and give us more
</span><br>
<span class="quotelev1">&gt;       time to develop a profound solution for the worst case
</span><br>
<span class="quotelev1">&gt;       - a chain of communicators being created, e.g.
</span><br>
<span class="quotelev1">&gt;       communicator 1 is basis to derive a new comm 2, comm 2
</span><br>
<span class="quotelev1">&gt;       is being used to derive comm 3 etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Thanks
</span><br>
<span class="quotelev1">&gt;       Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       David Gunter wrote:
</span><br>
<span class="quotelev1">&gt;             Here is the test code reproducer:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;program test2
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;implicit none
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;integer ierr, myid,
</span><br>
<span class="quotelev1">&gt;             numprocs,i1,i2,n,local_comm,
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; $ &#160; &#160; icolor,ikey,rank,root
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             c
</span><br>
<span class="quotelev1">&gt;             c... &#160;MPI set-up
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;ierr = 0
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;call MPI_INIT(IERR)
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;ierr = 1
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;CALL MPI_COMM_SIZE(MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;             numprocs, ierr)
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;print *, ierr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;ierr = -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;CALL MPI_COMM_RANK(MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;             myid, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;ierr = -5
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;i1 = ierr
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;if (myid.eq.0) i1 = 1
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;call mpi_allreduce(i1, i2,
</span><br>
<span class="quotelev1">&gt;             1,MPI_integer,MPI_MIN,
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; $ &#160; &#160; MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;ikey = myid
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;if (mod(myid,2).eq.0) then
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; icolor = 0
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;else
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; icolor = MPI_UNDEFINED
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;root = 0
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;do n = 1, 100000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; call MPI_COMM_SPLIT(MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;             icolor,
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; $ &#160; &#160; &#160; &#160;ikey, local_comm, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; if (mod(myid,2).eq.0) then
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; &#160; &#160;CALL MPI_COMM_RANK(local_comm,
</span><br>
<span class="quotelev1">&gt;             rank, ierr)
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; &#160; &#160;i2 = i1
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; &#160; &#160;call mpi_reduce(i1, i2,
</span><br>
<span class="quotelev1">&gt;             1,MPI_integer,MPI_MIN,
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; $ &#160; &#160; &#160; &#160; &#160; root, local_comm,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; &#160; &#160;if
</span><br>
<span class="quotelev1">&gt;             (myid.eq.0.and.mod(n,10).eq.0)
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; $ &#160; &#160; &#160; &#160; &#160; print *, n, i1,
</span><br>
<span class="quotelev1">&gt;             i2,icolor,ikey
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; &#160; &#160;call mpi_comm_free(local_comm,
</span><br>
<span class="quotelev1">&gt;             ierr)
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;end do
</span><br>
<span class="quotelev1">&gt;             c &#160; &#160; &#160;if (icolor.eq.0) call
</span><br>
<span class="quotelev1">&gt;             mpi_comm_free(local_comm, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;call MPI_barrier(MPi_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;call MPI_FINALIZE(IERR)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;print *, myid, ierr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160;end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             -david
</span><br>
<span class="quotelev1">&gt;             --
</span><br>
<span class="quotelev1">&gt;             David Gunter
</span><br>
<span class="quotelev1">&gt;             HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev1">&gt;             Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On Apr 30, 2009, at 12:43 PM, David Gunter
</span><br>
<span class="quotelev1">&gt;             wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Just to throw out more info on
</span><br>
<span class="quotelev1">&gt;                   this, the test code runs fine
</span><br>
<span class="quotelev1">&gt;                   on previous versions of OMPI.
</span><br>
<span class="quotelev1">&gt;                   &#160;It only hangs on the 1.3 line
</span><br>
<span class="quotelev1">&gt;                   when the cid reaches 65536.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   -david
</span><br>
<span class="quotelev1">&gt;                   --
</span><br>
<span class="quotelev1">&gt;                   David Gunter
</span><br>
<span class="quotelev1">&gt;                   HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev1">&gt;                   Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   On Apr 30, 2009, at 12:28 PM,
</span><br>
<span class="quotelev1">&gt;                   Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         cid's are in fact
</span><br>
<span class="quotelev1">&gt;                         not recycled in the
</span><br>
<span class="quotelev1">&gt;                         block algorithm.
</span><br>
<span class="quotelev1">&gt;                         The problem is that
</span><br>
<span class="quotelev1">&gt;                         comm_free is not
</span><br>
<span class="quotelev1">&gt;                         collective, so you
</span><br>
<span class="quotelev1">&gt;                         can not make any
</span><br>
<span class="quotelev1">&gt;                         assumptions whether
</span><br>
<span class="quotelev1">&gt;                         other procs have
</span><br>
<span class="quotelev1">&gt;                         also released that
</span><br>
<span class="quotelev1">&gt;                         communicator.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         But nevertheless, a
</span><br>
<span class="quotelev1">&gt;                         cid in the
</span><br>
<span class="quotelev1">&gt;                         communicator
</span><br>
<span class="quotelev1">&gt;                         structure is a
</span><br>
<span class="quotelev1">&gt;                         uint32_t, so it
</span><br>
<span class="quotelev1">&gt;                         should not hit the
</span><br>
<span class="quotelev1">&gt;                         16k limit there
</span><br>
<span class="quotelev1">&gt;                         yet. this is not
</span><br>
<span class="quotelev1">&gt;                         new, so if there is
</span><br>
<span class="quotelev1">&gt;                         a discrepancy
</span><br>
<span class="quotelev1">&gt;                         between what the
</span><br>
<span class="quotelev1">&gt;                         comm structure
</span><br>
<span class="quotelev1">&gt;                         assumes that a cid
</span><br>
<span class="quotelev1">&gt;                         is and what the pml
</span><br>
<span class="quotelev1">&gt;                         assumes, than this
</span><br>
<span class="quotelev1">&gt;                         was in the code
</span><br>
<span class="quotelev1">&gt;                         since the very
</span><br>
<span class="quotelev1">&gt;                         first days of Open
</span><br>
<span class="quotelev1">&gt;                         MPI...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Thanks
</span><br>
<span class="quotelev1">&gt;                         Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;                         wrote:
</span><br>
<span class="quotelev1">&gt;                               On Thu,
</span><br>
<span class="quotelev1">&gt;                               30 Apr
</span><br>
<span class="quotelev1">&gt;                               2009,
</span><br>
<span class="quotelev1">&gt;                               Ralph
</span><br>
<span class="quotelev1">&gt;                               Castain
</span><br>
<span class="quotelev1">&gt;                               wrote:
</span><br>
<span class="quotelev1">&gt;                                     We
</span><br>
<span class="quotelev1">&gt;                                     seem
</span><br>
<span class="quotelev1">&gt;                                     to
</span><br>
<span class="quotelev1">&gt;                                     have
</span><br>
<span class="quotelev1">&gt;                                     hit
</span><br>
<span class="quotelev1">&gt;                                     a
</span><br>
<span class="quotelev1">&gt;                                     problem
</span><br>
<span class="quotelev1">&gt;                                     here
</span><br>
<span class="quotelev1">&gt;                                     -
</span><br>
<span class="quotelev1">&gt;                                     it
</span><br>
<span class="quotelev1">&gt;                                     looks
</span><br>
<span class="quotelev1">&gt;                                     like
</span><br>
<span class="quotelev1">&gt;                                     we
</span><br>
<span class="quotelev1">&gt;                                     are
</span><br>
<span class="quotelev1">&gt;                                     seeing
</span><br>
<span class="quotelev1">&gt;                                     a
</span><br>
<span class="quotelev1">&gt;                                     built-in
</span><br>
<span class="quotelev1">&gt;                                     limit
</span><br>
<span class="quotelev1">&gt;                                     on
</span><br>
<span class="quotelev1">&gt;                                     the
</span><br>
<span class="quotelev1">&gt;                                     number
</span><br>
<span class="quotelev1">&gt;                                     of
</span><br>
<span class="quotelev1">&gt;                                     communicators
</span><br>
<span class="quotelev1">&gt;                                     one
</span><br>
<span class="quotelev1">&gt;                                     can
</span><br>
<span class="quotelev1">&gt;                                     create
</span><br>
<span class="quotelev1">&gt;                                     in
</span><br>
<span class="quotelev1">&gt;                                     a
</span><br>
<span class="quotelev1">&gt;                                     program.
</span><br>
<span class="quotelev1">&gt;                                     The
</span><br>
<span class="quotelev1">&gt;                                     program
</span><br>
<span class="quotelev1">&gt;                                     basically
</span><br>
<span class="quotelev1">&gt;                                     does
</span><br>
<span class="quotelev1">&gt;                                     a
</span><br>
<span class="quotelev1">&gt;                                     loop,
</span><br>
<span class="quotelev1">&gt;                                     calling
</span><br>
<span class="quotelev1">&gt;                                     MPI_Comm_split
</span><br>
<span class="quotelev1">&gt;                                     each
</span><br>
<span class="quotelev1">&gt;                                     time
</span><br>
<span class="quotelev1">&gt;                                     through
</span><br>
<span class="quotelev1">&gt;                                     the
</span><br>
<span class="quotelev1">&gt;                                     loop
</span><br>
<span class="quotelev1">&gt;                                     to
</span><br>
<span class="quotelev1">&gt;                                     create
</span><br>
<span class="quotelev1">&gt;                                     a
</span><br>
<span class="quotelev1">&gt;                                     sub-communicator,
</span><br>
<span class="quotelev1">&gt;                                     does
</span><br>
<span class="quotelev1">&gt;                                     a
</span><br>
<span class="quotelev1">&gt;                                     reduce
</span><br>
<span class="quotelev1">&gt;                                     operation
</span><br>
<span class="quotelev1">&gt;                                     on
</span><br>
<span class="quotelev1">&gt;                                     the
</span><br>
<span class="quotelev1">&gt;                                     members
</span><br>
<span class="quotelev1">&gt;                                     of
</span><br>
<span class="quotelev1">&gt;                                     the
</span><br>
<span class="quotelev1">&gt;                                     sub-communicator,
</span><br>
<span class="quotelev1">&gt;                                     and
</span><br>
<span class="quotelev1">&gt;                                     then
</span><br>
<span class="quotelev1">&gt;                                     calls
</span><br>
<span class="quotelev1">&gt;                                     MPI_Comm_free
</span><br>
<span class="quotelev1">&gt;                                     to
</span><br>
<span class="quotelev1">&gt;                                     release
</span><br>
<span class="quotelev1">&gt;                                     it
</span><br>
<span class="quotelev1">&gt;                                     (this
</span><br>
<span class="quotelev1">&gt;                                     is
</span><br>
<span class="quotelev1">&gt;                                     a
</span><br>
<span class="quotelev1">&gt;                                     minimized
</span><br>
<span class="quotelev1">&gt;                                     reproducer
</span><br>
<span class="quotelev1">&gt;                                     for
</span><br>
<span class="quotelev1">&gt;                                     the
</span><br>
<span class="quotelev1">&gt;                                     real
</span><br>
<span class="quotelev1">&gt;                                     code).
</span><br>
<span class="quotelev1">&gt;                                     After
</span><br>
<span class="quotelev1">&gt;                                     64k
</span><br>
<span class="quotelev1">&gt;                                     times
</span><br>
<span class="quotelev1">&gt;                                     through
</span><br>
<span class="quotelev1">&gt;                                     the
</span><br>
<span class="quotelev1">&gt;                                     loop,
</span><br>
<span class="quotelev1">&gt;                                     the
</span><br>
<span class="quotelev1">&gt;                                     program
</span><br>
<span class="quotelev1">&gt;                                     fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     This
</span><br>
<span class="quotelev1">&gt;                                     looks
</span><br>
<span class="quotelev1">&gt;                                     remarkably
</span><br>
<span class="quotelev1">&gt;                                     like
</span><br>
<span class="quotelev1">&gt;                                     a
</span><br>
<span class="quotelev1">&gt;                                     16-bit
</span><br>
<span class="quotelev1">&gt;                                     index
</span><br>
<span class="quotelev1">&gt;                                     that
</span><br>
<span class="quotelev1">&gt;                                     hits
</span><br>
<span class="quotelev1">&gt;                                     a
</span><br>
<span class="quotelev1">&gt;                                     max
</span><br>
<span class="quotelev1">&gt;                                     value
</span><br>
<span class="quotelev1">&gt;                                     and
</span><br>
<span class="quotelev1">&gt;                                     then
</span><br>
<span class="quotelev1">&gt;                                     blocks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     I
</span><br>
<span class="quotelev1">&gt;                                     have
</span><br>
<span class="quotelev1">&gt;                                     looked
</span><br>
<span class="quotelev1">&gt;                                     at
</span><br>
<span class="quotelev1">&gt;                                     the
</span><br>
<span class="quotelev1">&gt;                                     communicator
</span><br>
<span class="quotelev1">&gt;                                     code,
</span><br>
<span class="quotelev1">&gt;                                     but
</span><br>
<span class="quotelev1">&gt;                                     I
</span><br>
<span class="quotelev1">&gt;                                     don't
</span><br>
<span class="quotelev1">&gt;                                     immediately
</span><br>
<span class="quotelev1">&gt;                                     see
</span><br>
<span class="quotelev1">&gt;                                     such
</span><br>
<span class="quotelev1">&gt;                                     a
</span><br>
<span class="quotelev1">&gt;                                     field.
</span><br>
<span class="quotelev1">&gt;                                     Is
</span><br>
<span class="quotelev1">&gt;                                     anyone
</span><br>
<span class="quotelev1">&gt;                                     aware
</span><br>
<span class="quotelev1">&gt;                                     of
</span><br>
<span class="quotelev1">&gt;                                     some
</span><br>
<span class="quotelev1">&gt;                                     other
</span><br>
<span class="quotelev1">&gt;                                     place
</span><br>
<span class="quotelev1">&gt;                                     where
</span><br>
<span class="quotelev1">&gt;                                     we
</span><br>
<span class="quotelev1">&gt;                                     would
</span><br>
<span class="quotelev1">&gt;                                     have
</span><br>
<span class="quotelev1">&gt;                                     a
</span><br>
<span class="quotelev1">&gt;                                     limit
</span><br>
<span class="quotelev1">&gt;                                     that
</span><br>
<span class="quotelev1">&gt;                                     would
</span><br>
<span class="quotelev1">&gt;                                     cause
</span><br>
<span class="quotelev1">&gt;                                     this
</span><br>
<span class="quotelev1">&gt;                                     problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               There's
</span><br>
<span class="quotelev1">&gt;                               a
</span><br>
<span class="quotelev1">&gt;                               maximum
</span><br>
<span class="quotelev1">&gt;                               of
</span><br>
<span class="quotelev1">&gt;                               32768
</span><br>
<span class="quotelev1">&gt;                               communicator
</span><br>
<span class="quotelev1">&gt;                               ids
</span><br>
<span class="quotelev1">&gt;                               when
</span><br>
<span class="quotelev1">&gt;                               using
</span><br>
<span class="quotelev1">&gt;                               OB1
</span><br>
<span class="quotelev1">&gt;                               (each
</span><br>
<span class="quotelev1">&gt;                               PML can
</span><br>
<span class="quotelev1">&gt;                               set the
</span><br>
<span class="quotelev1">&gt;                               max
</span><br>
<span class="quotelev1">&gt;                               contextid,
</span><br>
<span class="quotelev1">&gt;                               although
</span><br>
<span class="quotelev1">&gt;                               the
</span><br>
<span class="quotelev1">&gt;                               communicator
</span><br>
<span class="quotelev1">&gt;                               code is
</span><br>
<span class="quotelev1">&gt;                               the
</span><br>
<span class="quotelev1">&gt;                               part
</span><br>
<span class="quotelev1">&gt;                               that
</span><br>
<span class="quotelev1">&gt;                               actually
</span><br>
<span class="quotelev1">&gt;                               assigns
</span><br>
<span class="quotelev1">&gt;                               a cid).
</span><br>
<span class="quotelev1">&gt;                               &#160;Assuming
</span><br>
<span class="quotelev1">&gt;                               that
</span><br>
<span class="quotelev1">&gt;                               comm_free
</span><br>
<span class="quotelev1">&gt;                               is
</span><br>
<span class="quotelev1">&gt;                               actually
</span><br>
<span class="quotelev1">&gt;                               properly
</span><br>
<span class="quotelev1">&gt;                               called,
</span><br>
<span class="quotelev1">&gt;                               there
</span><br>
<span class="quotelev1">&gt;                               should
</span><br>
<span class="quotelev1">&gt;                               be
</span><br>
<span class="quotelev1">&gt;                               plenty
</span><br>
<span class="quotelev1">&gt;                               of cids
</span><br>
<span class="quotelev1">&gt;                               available
</span><br>
<span class="quotelev1">&gt;                               for
</span><br>
<span class="quotelev1">&gt;                               that
</span><br>
<span class="quotelev1">&gt;                               pattern.
</span><br>
<span class="quotelev1">&gt;                               However,
</span><br>
<span class="quotelev1">&gt;                               I'm not
</span><br>
<span class="quotelev1">&gt;                               sure I
</span><br>
<span class="quotelev1">&gt;                               understand
</span><br>
<span class="quotelev1">&gt;                               the
</span><br>
<span class="quotelev1">&gt;                               block
</span><br>
<span class="quotelev1">&gt;                               algorithm
</span><br>
<span class="quotelev1">&gt;                               someone
</span><br>
<span class="quotelev1">&gt;                               added
</span><br>
<span class="quotelev1">&gt;                               to cid
</span><br>
<span class="quotelev1">&gt;                               allocation
</span><br>
<span class="quotelev1">&gt;                               - I'd
</span><br>
<span class="quotelev1">&gt;                               have to
</span><br>
<span class="quotelev1">&gt;                               guess
</span><br>
<span class="quotelev1">&gt;                               that
</span><br>
<span class="quotelev1">&gt;                               there's
</span><br>
<span class="quotelev1">&gt;                               something
</span><br>
<span class="quotelev1">&gt;                               funny
</span><br>
<span class="quotelev1">&gt;                               with
</span><br>
<span class="quotelev1">&gt;                               that
</span><br>
<span class="quotelev1">&gt;                               routine
</span><br>
<span class="quotelev1">&gt;                               and
</span><br>
<span class="quotelev1">&gt;                               cids
</span><br>
<span class="quotelev1">&gt;                               aren't
</span><br>
<span class="quotelev1">&gt;                               being
</span><br>
<span class="quotelev1">&gt;                               recycled
</span><br>
<span class="quotelev1">&gt;                               properly.
</span><br>
<span class="quotelev1">&gt;                               Brian
</span><br>
<span class="quotelev1">&gt;                               _______________________________________________
</span><br>
<span class="quotelev1">&gt;                               devel
</span><br>
<span class="quotelev1">&gt;                               mailing
</span><br>
<span class="quotelev1">&gt;                               list
</span><br>
<span class="quotelev1">&gt;                               devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                               <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         --
</span><br>
<span class="quotelev1">&gt;                         Edgar Gabriel
</span><br>
<span class="quotelev1">&gt;                         Assistant Professor
</span><br>
<span class="quotelev1">&gt;                         Parallel Software
</span><br>
<span class="quotelev1">&gt;                         Technologies Lab &#160;
</span><br>
<span class="quotelev1">&gt;                         &#160;
</span><br>
<span class="quotelev1">&gt;                         &#160;<a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt;                         Department of
</span><br>
<span class="quotelev1">&gt;                         Computer Science &#160;
</span><br>
<span class="quotelev1">&gt;                         &#160; &#160; &#160; &#160;University
</span><br>
<span class="quotelev1">&gt;                         of Houston
</span><br>
<span class="quotelev1">&gt;                         Philip G. Hoffman
</span><br>
<span class="quotelev1">&gt;                         Hall, Room 524 &#160; &#160;
</span><br>
<span class="quotelev1">&gt;                         &#160; &#160;Houston,
</span><br>
<span class="quotelev1">&gt;                         TX-77204, USA
</span><br>
<span class="quotelev1">&gt;                         Tel: +1 (713)
</span><br>
<span class="quotelev1">&gt;                         743-3857 &#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt;                         &#160; &#160; &#160; &#160;Fax: +1
</span><br>
<span class="quotelev1">&gt;                         (713) 743-3335
</span><br>
<span class="quotelev1">&gt;                         _______________________________________________
</span><br>
<span class="quotelev1">&gt;                         devel mailing list
</span><br>
<span class="quotelev1">&gt;                         devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   _______________________________________________
</span><br>
<span class="quotelev1">&gt;                   devel mailing list
</span><br>
<span class="quotelev1">&gt;                   devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                   <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             devel mailing list
</span><br>
<span class="quotelev1">&gt;             devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       --
</span><br>
<span class="quotelev1">&gt;       Edgar Gabriel
</span><br>
<span class="quotelev1">&gt;       Assistant Professor
</span><br>
<span class="quotelev1">&gt;       Parallel Software Technologies Lab &#160; &#160;
</span><br>
<span class="quotelev1">&gt;       &#160;<a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt;       Department of Computer Science &#160; &#160; &#160; &#160; &#160;University of
</span><br>
<span class="quotelev1">&gt;       Houston
</span><br>
<span class="quotelev1">&gt;       Philip G. Hoffman Hall, Room 524 &#160; &#160; &#160; &#160;Houston,
</span><br>
<span class="quotelev1">&gt;       TX-77204, USA
</span><br>
<span class="quotelev1">&gt;       Tel: +1 (713) 743-3857 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Fax: +1 (713)
</span><br>
<span class="quotelev1">&gt;       743-3335
</span><br>
<span class="quotelev1">&gt;       _______________________________________________
</span><br>
<span class="quotelev1">&gt;       devel mailing list
</span><br>
<span class="quotelev1">&gt;       devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5944.php">Brian Blank: "[OMPI devel] Fwd:  Fwd: Purify found bugs inside open-mpi library"</a>
<li><strong>Previous message:</strong> <a href="5942.php">Ralph Castain: "Re: [OMPI devel] OS X compilation broken"</a>
<li><strong>In reply to:</strong> <a href="5938.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5946.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5946.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
