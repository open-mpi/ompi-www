<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  2 14:29:01 2009" -->
<!-- isoreceived="20090502182901" -->
<!-- sent="Sat, 2 May 2009 12:28:47 -0600" -->
<!-- isosent="20090502182847" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="CF65E0CB-C709-4DAF-993C-C62CB4E55E3E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49FC8C38.6070103_at_cs.uh.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-02 14:28:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5948.php">Rainer Keller: "Re: [OMPI devel] OS X compilation broken"</a>
<li><strong>Previous message:</strong> <a href="5946.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5946.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5949.php">Christian Siebert: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Edgar!! Much appreciated...
<br>
<p><p>On May 2, 2009, at 12:08 PM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; ok, r21142 should fix the problem for the app. I did test it with a  
</span><br>
<span class="quotelev1">&gt; number of scenarios (e.g. all intra-comm cases, inter-comm cases,  
</span><br>
<span class="quotelev1">&gt; intercomm_merge etc.), but I would suggest to let at least one night  
</span><br>
<span class="quotelev1">&gt; of MTT runs go over it before we file a CMR for 1.3 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, May 1, 2009 at 6:38 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      I'm not entirely sure if David is going to be in today, so I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      will answer for him (and let him correct me later!).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      This code is indeed representative of what the app is doing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Basically, the user repeatedly splits the communicator so he
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      can run mini test cases before going on to the larger
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      computation. So it is always the base communicator being
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      repeatedly split and freed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      I would suspect, therefore, that the quick fix would serve us
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      just fine while the worst case is later resolved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, May 1, 2009 at 6:08 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      David,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      is this code representative for what your app is doing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      E.g. you have a base communicator (e.g. MPI_COMM_WORLD)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      which is being 'split', freed again, split, freed again
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      etc. ? i.e. the important aspect is that the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      'base' communicator is being used for deriving new
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      communicators again and again?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      The reason I ask is two-fold: one, you would in that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      case be one of the ideal beneficiaries of the block cid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      algorithm :-) (even if it fails you right now);  two, a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      fix for this scenario which basically tries to reuse
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      the last block used (and which would fix your case if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      the condition is true) is roughly five lines of code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      This would give us the possibility to have a fix
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      quickly in the trunk and v1.3 (keep in mind that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      block-cid code is in the trunk since two years and this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      is the first problem that we have) and give us more
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      time to develop a profound solution for the worst case
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      - a chain of communicators being created, e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      communicator 1 is basis to derive a new comm 2, comm 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      is being used to derive comm 3 etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      David Gunter wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Here is the test code reproducer:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 program test2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 implicit none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 include 'mpif.h'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 integer ierr, myid,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            numprocs,i1,i2,n,local_comm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                $     icolor,ikey,rank,root
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            c...  MPI set-up
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 ierr = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 call MPI_INIT(IERR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 ierr = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 CALL MPI_COMM_SIZE(MPI_COMM_WORLD,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            numprocs, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 print *, ierr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 ierr = -1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 CALL MPI_COMM_RANK(MPI_COMM_WORLD,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            myid, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 ierr = -5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 i1 = ierr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 if (myid.eq.0) i1 = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 call mpi_allreduce(i1, i2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            1,MPI_integer,MPI_MIN,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                $     MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 ikey = myid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 if (mod(myid,2).eq.0) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    icolor = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    icolor = MPI_UNDEFINED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 end if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 root = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 do n = 1, 100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    call MPI_COMM_SPLIT(MPI_COMM_WORLD,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            icolor,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                $        ikey, local_comm, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    if (mod(myid,2).eq.0) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CALL MPI_COMM_RANK(local_comm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            rank, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       i2 = i1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       call mpi_reduce(i1, i2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            1,MPI_integer,MPI_MIN,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                $           root, local_comm,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            (myid.eq.0.and.mod(n,10).eq.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                $           print *, n, i1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            i2,icolor,ikey
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       call mpi_comm_free(local_comm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    end if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 end do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            c      if (icolor.eq.0) call
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            mpi_comm_free(local_comm, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 call MPI_barrier(MPi_COMM_WORLD,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 call MPI_FINALIZE(IERR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 print *, myid, ierr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 end
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            -david
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            David Gunter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            On Apr 30, 2009, at 12:43 PM, David Gunter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Just to throw out more info on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  this, the test code runs fine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  on previous versions of OMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   It only hangs on the 1.3 line
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  when the cid reaches 65536.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  -david
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  David Gunter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  On Apr 30, 2009, at 12:28 PM,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        cid's are in fact
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        not recycled in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        block algorithm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        The problem is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        comm_free is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        collective, so you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        can not make any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        assumptions whether
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        other procs have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        also released that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        communicator.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        But nevertheless, a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        cid in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        structure is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        uint32_t, so it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        should not hit the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        16k limit there
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        yet. this is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        new, so if there is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        a discrepancy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        between what the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        comm structure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        assumes that a cid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        is and what the pml
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        assumes, than this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        was in the code
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        since the very
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        first days of Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        MPI...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Brian W. Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              On Thu,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              30 Apr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              2009,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    We
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    seem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    hit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    here
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    looks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    we
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    seeing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    built-in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    limit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    number
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    communicators
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    one
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    create
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    The
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    basically
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    does
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    loop,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    calling
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    MPI_Comm_split
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    each
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    time
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    through
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    loop
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    create
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    sub-communicator,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    does
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    reduce
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    operation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    members
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    sub-communicator,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    calls
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    MPI_Comm_free
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    release
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    (this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    minimized
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    reproducer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    real
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    code).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    After
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    64k
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    times
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    through
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    loop,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    fails.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    This
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    looks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    remarkably
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    16-bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    index
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    hits
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    max
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    value
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    blocks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    looked
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    code,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    but
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    immediately
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    see
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    such
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    field.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    Is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    anyone
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    aware
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    some
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    other
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    place
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    where
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    we
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    limit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    cause
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              There's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              maximum
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              32768
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              ids
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              when
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              OB1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              (each
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              PML can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              set the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              max
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              contextid,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              although
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              code is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              part
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              actually
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              assigns
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              a cid).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Assuming
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              comm_free
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              actually
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              properly
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              called,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              there
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              should
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              plenty
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              of cids
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              available
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              pattern.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              However,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              I'm not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              sure I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              understand
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              block
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              algorithm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              someone
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              added
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              to cid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              - I'd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              have to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              guess
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              there's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              something
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              funny
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              routine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              cids
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              aren't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              being
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              recycled
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              properly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              devel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mailing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Edgar Gabriel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Assistant Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Parallel Software
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Technologies  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lab                                                    <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Department of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Computer  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Science                                 University
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        of Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Philip G. Hoffman
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Hall, Room  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 524                               Houston,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        TX-77204, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Tel: +1 (713)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 743-3857                                         Fax: +1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        (713) 743-3335
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Edgar Gabriel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Assistant Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Parallel Software Technologies Lab           <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Department of Computer Science          University of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Philip G. Hoffman Hall, Room 524        Houston,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      TX-77204, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Tel: +1 (713) 743-3857                  Fax: +1 (713)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      743-3335
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5948.php">Rainer Keller: "Re: [OMPI devel] OS X compilation broken"</a>
<li><strong>Previous message:</strong> <a href="5946.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5946.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5949.php">Christian Siebert: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
