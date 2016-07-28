<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  2 14:09:04 2009" -->
<!-- isoreceived="20090502180904" -->
<!-- sent="Sat, 02 May 2009 13:08:56 -0500" -->
<!-- isosent="20090502180856" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="49FC8C38.6070103_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.1.10.0905011144190.20741_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-02 14:08:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5947.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5945.php">Terry Dontje: "[OMPI devel] [Fwd: Re: Fwd: Purify found bugs inside open-mpi library]"</a>
<li><strong>In reply to:</strong> <a href="5943.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5947.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5947.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ok, r21142 should fix the problem for the app. I did test it with a 
<br>
number of scenarios (e.g. all intra-comm cases, inter-comm cases, 
<br>
intercomm_merge etc.), but I would suggest to let at least one night of 
<br>
MTT runs go over it before we file a CMR for 1.3 ...
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p><span class="quotelev2">&gt;&gt; On Fri, May 1, 2009 at 6:38 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;       I'm not entirely sure if David is going to be in today, so I
</span><br>
<span class="quotelev2">&gt;&gt;       will answer for him (and let him correct me later!).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       This code is indeed representative of what the app is doing.
</span><br>
<span class="quotelev2">&gt;&gt;       Basically, the user repeatedly splits the communicator so he
</span><br>
<span class="quotelev2">&gt;&gt;       can run mini test cases before going on to the larger
</span><br>
<span class="quotelev2">&gt;&gt;       computation. So it is always the base communicator being
</span><br>
<span class="quotelev2">&gt;&gt;       repeatedly split and freed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       I would suspect, therefore, that the quick fix would serve us
</span><br>
<span class="quotelev2">&gt;&gt;       just fine while the worst case is later resolved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Thanks
</span><br>
<span class="quotelev2">&gt;&gt;       Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, May 1, 2009 at 6:08 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;       David,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       is this code representative for what your app is doing?
</span><br>
<span class="quotelev2">&gt;&gt;       E.g. you have a base communicator (e.g. MPI_COMM_WORLD)
</span><br>
<span class="quotelev2">&gt;&gt;       which is being 'split', freed again, split, freed again
</span><br>
<span class="quotelev2">&gt;&gt;       etc. ? i.e. the important aspect is that the same
</span><br>
<span class="quotelev2">&gt;&gt;       'base' communicator is being used for deriving new
</span><br>
<span class="quotelev2">&gt;&gt;       communicators again and again?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       The reason I ask is two-fold: one, you would in that
</span><br>
<span class="quotelev2">&gt;&gt;       case be one of the ideal beneficiaries of the block cid
</span><br>
<span class="quotelev2">&gt;&gt;       algorithm :-) (even if it fails you right now);  two, a
</span><br>
<span class="quotelev2">&gt;&gt;       fix for this scenario which basically tries to reuse
</span><br>
<span class="quotelev2">&gt;&gt;       the last block used (and which would fix your case if
</span><br>
<span class="quotelev2">&gt;&gt;       the condition is true) is roughly five lines of code.
</span><br>
<span class="quotelev2">&gt;&gt;       This would give us the possibility to have a fix
</span><br>
<span class="quotelev2">&gt;&gt;       quickly in the trunk and v1.3 (keep in mind that the
</span><br>
<span class="quotelev2">&gt;&gt;       block-cid code is in the trunk since two years and this
</span><br>
<span class="quotelev2">&gt;&gt;       is the first problem that we have) and give us more
</span><br>
<span class="quotelev2">&gt;&gt;       time to develop a profound solution for the worst case
</span><br>
<span class="quotelev2">&gt;&gt;       - a chain of communicators being created, e.g.
</span><br>
<span class="quotelev2">&gt;&gt;       communicator 1 is basis to derive a new comm 2, comm 2
</span><br>
<span class="quotelev2">&gt;&gt;       is being used to derive comm 3 etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Thanks
</span><br>
<span class="quotelev2">&gt;&gt;       Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       David Gunter wrote:
</span><br>
<span class="quotelev2">&gt;&gt;             Here is the test code reproducer:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  program test2
</span><br>
<span class="quotelev2">&gt;&gt;                  implicit none
</span><br>
<span class="quotelev2">&gt;&gt;                  include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;                  integer ierr, myid,
</span><br>
<span class="quotelev2">&gt;&gt;             numprocs,i1,i2,n,local_comm,
</span><br>
<span class="quotelev2">&gt;&gt;                 $     icolor,ikey,rank,root
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             c
</span><br>
<span class="quotelev2">&gt;&gt;             c...  MPI set-up
</span><br>
<span class="quotelev2">&gt;&gt;                  ierr = 0
</span><br>
<span class="quotelev2">&gt;&gt;                  call MPI_INIT(IERR)
</span><br>
<span class="quotelev2">&gt;&gt;                  ierr = 1
</span><br>
<span class="quotelev2">&gt;&gt;                  CALL MPI_COMM_SIZE(MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt;             numprocs, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;                  print *, ierr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  ierr = -1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  CALL MPI_COMM_RANK(MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt;             myid, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  ierr = -5
</span><br>
<span class="quotelev2">&gt;&gt;                  i1 = ierr
</span><br>
<span class="quotelev2">&gt;&gt;                  if (myid.eq.0) i1 = 1
</span><br>
<span class="quotelev2">&gt;&gt;                  call mpi_allreduce(i1, i2,
</span><br>
<span class="quotelev2">&gt;&gt;             1,MPI_integer,MPI_MIN,
</span><br>
<span class="quotelev2">&gt;&gt;                 $     MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  ikey = myid
</span><br>
<span class="quotelev2">&gt;&gt;                  if (mod(myid,2).eq.0) then
</span><br>
<span class="quotelev2">&gt;&gt;                     icolor = 0
</span><br>
<span class="quotelev2">&gt;&gt;                  else
</span><br>
<span class="quotelev2">&gt;&gt;                     icolor = MPI_UNDEFINED
</span><br>
<span class="quotelev2">&gt;&gt;                  end if
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  root = 0
</span><br>
<span class="quotelev2">&gt;&gt;                  do n = 1, 100000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     call MPI_COMM_SPLIT(MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt;             icolor,
</span><br>
<span class="quotelev2">&gt;&gt;                 $        ikey, local_comm, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     if (mod(myid,2).eq.0) then
</span><br>
<span class="quotelev2">&gt;&gt;                        CALL MPI_COMM_RANK(local_comm,
</span><br>
<span class="quotelev2">&gt;&gt;             rank, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;                        i2 = i1
</span><br>
<span class="quotelev2">&gt;&gt;                        call mpi_reduce(i1, i2,
</span><br>
<span class="quotelev2">&gt;&gt;             1,MPI_integer,MPI_MIN,
</span><br>
<span class="quotelev2">&gt;&gt;                 $           root, local_comm,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        if
</span><br>
<span class="quotelev2">&gt;&gt;             (myid.eq.0.and.mod(n,10).eq.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 $           print *, n, i1,
</span><br>
<span class="quotelev2">&gt;&gt;             i2,icolor,ikey
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        call mpi_comm_free(local_comm,
</span><br>
<span class="quotelev2">&gt;&gt;             ierr)
</span><br>
<span class="quotelev2">&gt;&gt;                     end if
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  end do
</span><br>
<span class="quotelev2">&gt;&gt;             c      if (icolor.eq.0) call
</span><br>
<span class="quotelev2">&gt;&gt;             mpi_comm_free(local_comm, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  call MPI_barrier(MPi_COMM_WORLD,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  call MPI_FINALIZE(IERR)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  print *, myid, ierr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  end
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -david
</span><br>
<span class="quotelev2">&gt;&gt;             --
</span><br>
<span class="quotelev2">&gt;&gt;             David Gunter
</span><br>
<span class="quotelev2">&gt;&gt;             HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev2">&gt;&gt;             Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On Apr 30, 2009, at 12:43 PM, David Gunter
</span><br>
<span class="quotelev2">&gt;&gt;             wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   Just to throw out more info on
</span><br>
<span class="quotelev2">&gt;&gt;                   this, the test code runs fine
</span><br>
<span class="quotelev2">&gt;&gt;                   on previous versions of OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;                    It only hangs on the 1.3 line
</span><br>
<span class="quotelev2">&gt;&gt;                   when the cid reaches 65536.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   -david
</span><br>
<span class="quotelev2">&gt;&gt;                   --
</span><br>
<span class="quotelev2">&gt;&gt;                   David Gunter
</span><br>
<span class="quotelev2">&gt;&gt;                   HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev2">&gt;&gt;                   Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   On Apr 30, 2009, at 12:28 PM,
</span><br>
<span class="quotelev2">&gt;&gt;                   Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         cid's are in fact
</span><br>
<span class="quotelev2">&gt;&gt;                         not recycled in the
</span><br>
<span class="quotelev2">&gt;&gt;                         block algorithm.
</span><br>
<span class="quotelev2">&gt;&gt;                         The problem is that
</span><br>
<span class="quotelev2">&gt;&gt;                         comm_free is not
</span><br>
<span class="quotelev2">&gt;&gt;                         collective, so you
</span><br>
<span class="quotelev2">&gt;&gt;                         can not make any
</span><br>
<span class="quotelev2">&gt;&gt;                         assumptions whether
</span><br>
<span class="quotelev2">&gt;&gt;                         other procs have
</span><br>
<span class="quotelev2">&gt;&gt;                         also released that
</span><br>
<span class="quotelev2">&gt;&gt;                         communicator.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         But nevertheless, a
</span><br>
<span class="quotelev2">&gt;&gt;                         cid in the
</span><br>
<span class="quotelev2">&gt;&gt;                         communicator
</span><br>
<span class="quotelev2">&gt;&gt;                         structure is a
</span><br>
<span class="quotelev2">&gt;&gt;                         uint32_t, so it
</span><br>
<span class="quotelev2">&gt;&gt;                         should not hit the
</span><br>
<span class="quotelev2">&gt;&gt;                         16k limit there
</span><br>
<span class="quotelev2">&gt;&gt;                         yet. this is not
</span><br>
<span class="quotelev2">&gt;&gt;                         new, so if there is
</span><br>
<span class="quotelev2">&gt;&gt;                         a discrepancy
</span><br>
<span class="quotelev2">&gt;&gt;                         between what the
</span><br>
<span class="quotelev2">&gt;&gt;                         comm structure
</span><br>
<span class="quotelev2">&gt;&gt;                         assumes that a cid
</span><br>
<span class="quotelev2">&gt;&gt;                         is and what the pml
</span><br>
<span class="quotelev2">&gt;&gt;                         assumes, than this
</span><br>
<span class="quotelev2">&gt;&gt;                         was in the code
</span><br>
<span class="quotelev2">&gt;&gt;                         since the very
</span><br>
<span class="quotelev2">&gt;&gt;                         first days of Open
</span><br>
<span class="quotelev2">&gt;&gt;                         MPI...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Thanks
</span><br>
<span class="quotelev2">&gt;&gt;                         Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;                         wrote:
</span><br>
<span class="quotelev2">&gt;&gt;                               On Thu,
</span><br>
<span class="quotelev2">&gt;&gt;                               30 Apr
</span><br>
<span class="quotelev2">&gt;&gt;                               2009,
</span><br>
<span class="quotelev2">&gt;&gt;                               Ralph
</span><br>
<span class="quotelev2">&gt;&gt;                               Castain
</span><br>
<span class="quotelev2">&gt;&gt;                               wrote:
</span><br>
<span class="quotelev2">&gt;&gt;                                     We
</span><br>
<span class="quotelev2">&gt;&gt;                                     seem
</span><br>
<span class="quotelev2">&gt;&gt;                                     to
</span><br>
<span class="quotelev2">&gt;&gt;                                     have
</span><br>
<span class="quotelev2">&gt;&gt;                                     hit
</span><br>
<span class="quotelev2">&gt;&gt;                                     a
</span><br>
<span class="quotelev2">&gt;&gt;                                     problem
</span><br>
<span class="quotelev2">&gt;&gt;                                     here
</span><br>
<span class="quotelev2">&gt;&gt;                                     -
</span><br>
<span class="quotelev2">&gt;&gt;                                     it
</span><br>
<span class="quotelev2">&gt;&gt;                                     looks
</span><br>
<span class="quotelev2">&gt;&gt;                                     like
</span><br>
<span class="quotelev2">&gt;&gt;                                     we
</span><br>
<span class="quotelev2">&gt;&gt;                                     are
</span><br>
<span class="quotelev2">&gt;&gt;                                     seeing
</span><br>
<span class="quotelev2">&gt;&gt;                                     a
</span><br>
<span class="quotelev2">&gt;&gt;                                     built-in
</span><br>
<span class="quotelev2">&gt;&gt;                                     limit
</span><br>
<span class="quotelev2">&gt;&gt;                                     on
</span><br>
<span class="quotelev2">&gt;&gt;                                     the
</span><br>
<span class="quotelev2">&gt;&gt;                                     number
</span><br>
<span class="quotelev2">&gt;&gt;                                     of
</span><br>
<span class="quotelev2">&gt;&gt;                                     communicators
</span><br>
<span class="quotelev2">&gt;&gt;                                     one
</span><br>
<span class="quotelev2">&gt;&gt;                                     can
</span><br>
<span class="quotelev2">&gt;&gt;                                     create
</span><br>
<span class="quotelev2">&gt;&gt;                                     in
</span><br>
<span class="quotelev2">&gt;&gt;                                     a
</span><br>
<span class="quotelev2">&gt;&gt;                                     program.
</span><br>
<span class="quotelev2">&gt;&gt;                                     The
</span><br>
<span class="quotelev2">&gt;&gt;                                     program
</span><br>
<span class="quotelev2">&gt;&gt;                                     basically
</span><br>
<span class="quotelev2">&gt;&gt;                                     does
</span><br>
<span class="quotelev2">&gt;&gt;                                     a
</span><br>
<span class="quotelev2">&gt;&gt;                                     loop,
</span><br>
<span class="quotelev2">&gt;&gt;                                     calling
</span><br>
<span class="quotelev2">&gt;&gt;                                     MPI_Comm_split
</span><br>
<span class="quotelev2">&gt;&gt;                                     each
</span><br>
<span class="quotelev2">&gt;&gt;                                     time
</span><br>
<span class="quotelev2">&gt;&gt;                                     through
</span><br>
<span class="quotelev2">&gt;&gt;                                     the
</span><br>
<span class="quotelev2">&gt;&gt;                                     loop
</span><br>
<span class="quotelev2">&gt;&gt;                                     to
</span><br>
<span class="quotelev2">&gt;&gt;                                     create
</span><br>
<span class="quotelev2">&gt;&gt;                                     a
</span><br>
<span class="quotelev2">&gt;&gt;                                     sub-communicator,
</span><br>
<span class="quotelev2">&gt;&gt;                                     does
</span><br>
<span class="quotelev2">&gt;&gt;                                     a
</span><br>
<span class="quotelev2">&gt;&gt;                                     reduce
</span><br>
<span class="quotelev2">&gt;&gt;                                     operation
</span><br>
<span class="quotelev2">&gt;&gt;                                     on
</span><br>
<span class="quotelev2">&gt;&gt;                                     the
</span><br>
<span class="quotelev2">&gt;&gt;                                     members
</span><br>
<span class="quotelev2">&gt;&gt;                                     of
</span><br>
<span class="quotelev2">&gt;&gt;                                     the
</span><br>
<span class="quotelev2">&gt;&gt;                                     sub-communicator,
</span><br>
<span class="quotelev2">&gt;&gt;                                     and
</span><br>
<span class="quotelev2">&gt;&gt;                                     then
</span><br>
<span class="quotelev2">&gt;&gt;                                     calls
</span><br>
<span class="quotelev2">&gt;&gt;                                     MPI_Comm_free
</span><br>
<span class="quotelev2">&gt;&gt;                                     to
</span><br>
<span class="quotelev2">&gt;&gt;                                     release
</span><br>
<span class="quotelev2">&gt;&gt;                                     it
</span><br>
<span class="quotelev2">&gt;&gt;                                     (this
</span><br>
<span class="quotelev2">&gt;&gt;                                     is
</span><br>
<span class="quotelev2">&gt;&gt;                                     a
</span><br>
<span class="quotelev2">&gt;&gt;                                     minimized
</span><br>
<span class="quotelev2">&gt;&gt;                                     reproducer
</span><br>
<span class="quotelev2">&gt;&gt;                                     for
</span><br>
<span class="quotelev2">&gt;&gt;                                     the
</span><br>
<span class="quotelev2">&gt;&gt;                                     real
</span><br>
<span class="quotelev2">&gt;&gt;                                     code).
</span><br>
<span class="quotelev2">&gt;&gt;                                     After
</span><br>
<span class="quotelev2">&gt;&gt;                                     64k
</span><br>
<span class="quotelev2">&gt;&gt;                                     times
</span><br>
<span class="quotelev2">&gt;&gt;                                     through
</span><br>
<span class="quotelev2">&gt;&gt;                                     the
</span><br>
<span class="quotelev2">&gt;&gt;                                     loop,
</span><br>
<span class="quotelev2">&gt;&gt;                                     the
</span><br>
<span class="quotelev2">&gt;&gt;                                     program
</span><br>
<span class="quotelev2">&gt;&gt;                                     fails.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     This
</span><br>
<span class="quotelev2">&gt;&gt;                                     looks
</span><br>
<span class="quotelev2">&gt;&gt;                                     remarkably
</span><br>
<span class="quotelev2">&gt;&gt;                                     like
</span><br>
<span class="quotelev2">&gt;&gt;                                     a
</span><br>
<span class="quotelev2">&gt;&gt;                                     16-bit
</span><br>
<span class="quotelev2">&gt;&gt;                                     index
</span><br>
<span class="quotelev2">&gt;&gt;                                     that
</span><br>
<span class="quotelev2">&gt;&gt;                                     hits
</span><br>
<span class="quotelev2">&gt;&gt;                                     a
</span><br>
<span class="quotelev2">&gt;&gt;                                     max
</span><br>
<span class="quotelev2">&gt;&gt;                                     value
</span><br>
<span class="quotelev2">&gt;&gt;                                     and
</span><br>
<span class="quotelev2">&gt;&gt;                                     then
</span><br>
<span class="quotelev2">&gt;&gt;                                     blocks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     I
</span><br>
<span class="quotelev2">&gt;&gt;                                     have
</span><br>
<span class="quotelev2">&gt;&gt;                                     looked
</span><br>
<span class="quotelev2">&gt;&gt;                                     at
</span><br>
<span class="quotelev2">&gt;&gt;                                     the
</span><br>
<span class="quotelev2">&gt;&gt;                                     communicator
</span><br>
<span class="quotelev2">&gt;&gt;                                     code,
</span><br>
<span class="quotelev2">&gt;&gt;                                     but
</span><br>
<span class="quotelev2">&gt;&gt;                                     I
</span><br>
<span class="quotelev2">&gt;&gt;                                     don't
</span><br>
<span class="quotelev2">&gt;&gt;                                     immediately
</span><br>
<span class="quotelev2">&gt;&gt;                                     see
</span><br>
<span class="quotelev2">&gt;&gt;                                     such
</span><br>
<span class="quotelev2">&gt;&gt;                                     a
</span><br>
<span class="quotelev2">&gt;&gt;                                     field.
</span><br>
<span class="quotelev2">&gt;&gt;                                     Is
</span><br>
<span class="quotelev2">&gt;&gt;                                     anyone
</span><br>
<span class="quotelev2">&gt;&gt;                                     aware
</span><br>
<span class="quotelev2">&gt;&gt;                                     of
</span><br>
<span class="quotelev2">&gt;&gt;                                     some
</span><br>
<span class="quotelev2">&gt;&gt;                                     other
</span><br>
<span class="quotelev2">&gt;&gt;                                     place
</span><br>
<span class="quotelev2">&gt;&gt;                                     where
</span><br>
<span class="quotelev2">&gt;&gt;                                     we
</span><br>
<span class="quotelev2">&gt;&gt;                                     would
</span><br>
<span class="quotelev2">&gt;&gt;                                     have
</span><br>
<span class="quotelev2">&gt;&gt;                                     a
</span><br>
<span class="quotelev2">&gt;&gt;                                     limit
</span><br>
<span class="quotelev2">&gt;&gt;                                     that
</span><br>
<span class="quotelev2">&gt;&gt;                                     would
</span><br>
<span class="quotelev2">&gt;&gt;                                     cause
</span><br>
<span class="quotelev2">&gt;&gt;                                     this
</span><br>
<span class="quotelev2">&gt;&gt;                                     problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                               There's
</span><br>
<span class="quotelev2">&gt;&gt;                               a
</span><br>
<span class="quotelev2">&gt;&gt;                               maximum
</span><br>
<span class="quotelev2">&gt;&gt;                               of
</span><br>
<span class="quotelev2">&gt;&gt;                               32768
</span><br>
<span class="quotelev2">&gt;&gt;                               communicator
</span><br>
<span class="quotelev2">&gt;&gt;                               ids
</span><br>
<span class="quotelev2">&gt;&gt;                               when
</span><br>
<span class="quotelev2">&gt;&gt;                               using
</span><br>
<span class="quotelev2">&gt;&gt;                               OB1
</span><br>
<span class="quotelev2">&gt;&gt;                               (each
</span><br>
<span class="quotelev2">&gt;&gt;                               PML can
</span><br>
<span class="quotelev2">&gt;&gt;                               set the
</span><br>
<span class="quotelev2">&gt;&gt;                               max
</span><br>
<span class="quotelev2">&gt;&gt;                               contextid,
</span><br>
<span class="quotelev2">&gt;&gt;                               although
</span><br>
<span class="quotelev2">&gt;&gt;                               the
</span><br>
<span class="quotelev2">&gt;&gt;                               communicator
</span><br>
<span class="quotelev2">&gt;&gt;                               code is
</span><br>
<span class="quotelev2">&gt;&gt;                               the
</span><br>
<span class="quotelev2">&gt;&gt;                               part
</span><br>
<span class="quotelev2">&gt;&gt;                               that
</span><br>
<span class="quotelev2">&gt;&gt;                               actually
</span><br>
<span class="quotelev2">&gt;&gt;                               assigns
</span><br>
<span class="quotelev2">&gt;&gt;                               a cid).
</span><br>
<span class="quotelev2">&gt;&gt;                                Assuming
</span><br>
<span class="quotelev2">&gt;&gt;                               that
</span><br>
<span class="quotelev2">&gt;&gt;                               comm_free
</span><br>
<span class="quotelev2">&gt;&gt;                               is
</span><br>
<span class="quotelev2">&gt;&gt;                               actually
</span><br>
<span class="quotelev2">&gt;&gt;                               properly
</span><br>
<span class="quotelev2">&gt;&gt;                               called,
</span><br>
<span class="quotelev2">&gt;&gt;                               there
</span><br>
<span class="quotelev2">&gt;&gt;                               should
</span><br>
<span class="quotelev2">&gt;&gt;                               be
</span><br>
<span class="quotelev2">&gt;&gt;                               plenty
</span><br>
<span class="quotelev2">&gt;&gt;                               of cids
</span><br>
<span class="quotelev2">&gt;&gt;                               available
</span><br>
<span class="quotelev2">&gt;&gt;                               for
</span><br>
<span class="quotelev2">&gt;&gt;                               that
</span><br>
<span class="quotelev2">&gt;&gt;                               pattern.
</span><br>
<span class="quotelev2">&gt;&gt;                               However,
</span><br>
<span class="quotelev2">&gt;&gt;                               I'm not
</span><br>
<span class="quotelev2">&gt;&gt;                               sure I
</span><br>
<span class="quotelev2">&gt;&gt;                               understand
</span><br>
<span class="quotelev2">&gt;&gt;                               the
</span><br>
<span class="quotelev2">&gt;&gt;                               block
</span><br>
<span class="quotelev2">&gt;&gt;                               algorithm
</span><br>
<span class="quotelev2">&gt;&gt;                               someone
</span><br>
<span class="quotelev2">&gt;&gt;                               added
</span><br>
<span class="quotelev2">&gt;&gt;                               to cid
</span><br>
<span class="quotelev2">&gt;&gt;                               allocation
</span><br>
<span class="quotelev2">&gt;&gt;                               - I'd
</span><br>
<span class="quotelev2">&gt;&gt;                               have to
</span><br>
<span class="quotelev2">&gt;&gt;                               guess
</span><br>
<span class="quotelev2">&gt;&gt;                               that
</span><br>
<span class="quotelev2">&gt;&gt;                               there's
</span><br>
<span class="quotelev2">&gt;&gt;                               something
</span><br>
<span class="quotelev2">&gt;&gt;                               funny
</span><br>
<span class="quotelev2">&gt;&gt;                               with
</span><br>
<span class="quotelev2">&gt;&gt;                               that
</span><br>
<span class="quotelev2">&gt;&gt;                               routine
</span><br>
<span class="quotelev2">&gt;&gt;                               and
</span><br>
<span class="quotelev2">&gt;&gt;                               cids
</span><br>
<span class="quotelev2">&gt;&gt;                               aren't
</span><br>
<span class="quotelev2">&gt;&gt;                               being
</span><br>
<span class="quotelev2">&gt;&gt;                               recycled
</span><br>
<span class="quotelev2">&gt;&gt;                               properly.
</span><br>
<span class="quotelev2">&gt;&gt;                               Brian
</span><br>
<span class="quotelev2">&gt;&gt;                               
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                               devel
</span><br>
<span class="quotelev2">&gt;&gt;                               mailing
</span><br>
<span class="quotelev2">&gt;&gt;                               list
</span><br>
<span class="quotelev2">&gt;&gt;                               devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                               
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         --
</span><br>
<span class="quotelev2">&gt;&gt;                         Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt;                         Assistant Professor
</span><br>
<span class="quotelev2">&gt;&gt;                         Parallel Software
</span><br>
<span class="quotelev2">&gt;&gt;                         Technologies Lab  
</span><br>
<span class="quotelev2">&gt;&gt;                          
</span><br>
<span class="quotelev2">&gt;&gt;                          <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt;                         Department of
</span><br>
<span class="quotelev2">&gt;&gt;                         Computer Science  
</span><br>
<span class="quotelev2">&gt;&gt;                                University
</span><br>
<span class="quotelev2">&gt;&gt;                         of Houston
</span><br>
<span class="quotelev2">&gt;&gt;                         Philip G. Hoffman
</span><br>
<span class="quotelev2">&gt;&gt;                         Hall, Room 524    
</span><br>
<span class="quotelev2">&gt;&gt;                            Houston,
</span><br>
<span class="quotelev2">&gt;&gt;                         TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt;                         Tel: +1 (713)
</span><br>
<span class="quotelev2">&gt;&gt;                         743-3857          
</span><br>
<span class="quotelev2">&gt;&gt;                                Fax: +1
</span><br>
<span class="quotelev2">&gt;&gt;                         (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt;                         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                         devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                         devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                         
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                   devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                   devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                   <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       --
</span><br>
<span class="quotelev2">&gt;&gt;       Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt;       Assistant Professor
</span><br>
<span class="quotelev2">&gt;&gt;       Parallel Software Technologies Lab    
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt;       Department of Computer Science          University of
</span><br>
<span class="quotelev2">&gt;&gt;       Houston
</span><br>
<span class="quotelev2">&gt;&gt;       Philip G. Hoffman Hall, Room 524        Houston,
</span><br>
<span class="quotelev2">&gt;&gt;       TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt;       Tel: +1 (713) 743-3857                  Fax: +1 (713)
</span><br>
<span class="quotelev2">&gt;&gt;       743-3335
</span><br>
<span class="quotelev2">&gt;&gt;       _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;       devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;       devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5947.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5945.php">Terry Dontje: "[OMPI devel] [Fwd: Re: Fwd: Purify found bugs inside open-mpi library]"</a>
<li><strong>In reply to:</strong> <a href="5943.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5947.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5947.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
