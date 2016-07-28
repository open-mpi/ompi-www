<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 09:43:03 2009" -->
<!-- isoreceived="20090501134303" -->
<!-- sent="Fri, 1 May 2009 07:42:58 -0600" -->
<!-- isosent="20090501134258" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="71d2d8cc0905010642t4fbafb38r57919c1092b7a0bd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0905010538w46638549tfeb0217694df098b_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-05-01 09:42:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5939.php">Ralph Castain: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<li><strong>Previous message:</strong> <a href="5937.php">Ralph Castain: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<li><strong>In reply to:</strong> <a href="5935.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5943.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5943.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW: when compiling Brian's change, I got a warning about comparing signed
<br>
and unsigned. Sure enough, I found that the communicator id is defined as an
<br>
unsigned int, while the PML is treating it as a *signed* int.
<br>
<p>We need to get this corrected - which way do you want it to be?
<br>
<p>I will add this requirement to the ticket...
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Fri, May 1, 2009 at 6:38 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm not entirely sure if David is going to be in today, so I will answer
</span><br>
<span class="quotelev1">&gt; for him (and let him correct me later!).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This code is indeed representative of what the app is doing. Basically, the
</span><br>
<span class="quotelev1">&gt; user repeatedly splits the communicator so he can run mini test cases before
</span><br>
<span class="quotelev1">&gt; going on to the larger computation. So it is always the base communicator
</span><br>
<span class="quotelev1">&gt; being repeatedly split and freed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would suspect, therefore, that the quick fix would serve us just fine
</span><br>
<span class="quotelev1">&gt; while the worst case is later resolved.
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
<span class="quotelev1">&gt; On Fri, May 1, 2009 at 6:08 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is this code representative for what your app is doing? E.g. you have a
</span><br>
<span class="quotelev2">&gt;&gt; base communicator (e.g. MPI_COMM_WORLD) which is being 'split', freed again,
</span><br>
<span class="quotelev2">&gt;&gt; split, freed again etc. ? i.e. the important aspect is that the same 'base'
</span><br>
<span class="quotelev2">&gt;&gt; communicator is being used for deriving new communicators again and again?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason I ask is two-fold: one, you would in that case be one of the
</span><br>
<span class="quotelev2">&gt;&gt; ideal beneficiaries of the block cid algorithm :-) (even if it fails you
</span><br>
<span class="quotelev2">&gt;&gt; right now);  two, a fix for this scenario which basically tries to reuse the
</span><br>
<span class="quotelev2">&gt;&gt; last block used (and which would fix your case if the condition is true) is
</span><br>
<span class="quotelev2">&gt;&gt; roughly five lines of code. This would give us the possibility to have a fix
</span><br>
<span class="quotelev2">&gt;&gt; quickly in the trunk and v1.3 (keep in mind that the block-cid code is in
</span><br>
<span class="quotelev2">&gt;&gt; the trunk since two years and this is the first problem that we have) and
</span><br>
<span class="quotelev2">&gt;&gt; give us more time to develop a profound solution for the worst case - a
</span><br>
<span class="quotelev2">&gt;&gt; chain of communicators being created, e.g. communicator 1 is basis to derive
</span><br>
<span class="quotelev2">&gt;&gt; a new comm 2, comm 2 is being used to derive comm 3 etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David Gunter wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the test code reproducer:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      program test2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      implicit none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      include 'mpif.h'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      integer ierr, myid, numprocs,i1,i2,n,local_comm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     $     icolor,ikey,rank,root
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c...  MPI set-up
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ierr = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      call MPI_INIT(IERR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ierr = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      CALL MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      print *, ierr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ierr = -1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      CALL MPI_COMM_RANK(MPI_COMM_WORLD, myid, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ierr = -5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      i1 = ierr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (myid.eq.0) i1 = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      call mpi_allreduce(i1, i2, 1,MPI_integer,MPI_MIN,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     $     MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ikey = myid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (mod(myid,2).eq.0) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         icolor = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         icolor = MPI_UNDEFINED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      end if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      root = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      do n = 1, 100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         call MPI_COMM_SPLIT(MPI_COMM_WORLD, icolor,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     $        ikey, local_comm, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         if (mod(myid,2).eq.0) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            CALL MPI_COMM_RANK(local_comm, rank, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            i2 = i1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            call mpi_reduce(i1, i2, 1,MPI_integer,MPI_MIN,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     $           root, local_comm,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            if (myid.eq.0.and.mod(n,10).eq.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     $           print *, n, i1, i2,icolor,ikey
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            call mpi_comm_free(local_comm, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         end if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      end do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c      if (icolor.eq.0) call mpi_comm_free(local_comm, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      call MPI_barrier(MPi_COMM_WORLD,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      call MPI_FINALIZE(IERR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      print *, myid, ierr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      end
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -david
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David Gunter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 30, 2009, at 12:43 PM, David Gunter wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Just to throw out more info on this, the test code runs fine on previous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; versions of OMPI.  It only hangs on the 1.3 line when the cid reaches 65536.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -david
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; David Gunter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 30, 2009, at 12:28 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  cid's are in fact not recycled in the block algorithm. The problem is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that comm_free is not collective, so you can not make any assumptions
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; whether other procs have also released that communicator.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But nevertheless, a cid in the communicator structure is a uint32_t, so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it should not hit the 16k limit there yet. this is not new, so if there is a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; discrepancy between what the comm structure assumes that a cid is and what
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the pml assumes, than this was in the code since the very first days of Open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Thu, 30 Apr 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; We seem to have hit a problem here - it looks like we are seeing a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; built-in limit on the number of communicators one can create in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; program. The program basically does a loop, calling MPI_Comm_split
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; each
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; time through the loop to create a sub-communicator, does a reduce
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; operation on the members of the sub-communicator, and then calls
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm_free to release it (this is a minimized reproducer for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; real
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; code). After 64k times through the loop, the program fails.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This looks remarkably like a 16-bit index that hits a max value and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; blocks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have looked at the communicator code, but I don't immediately see
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; such
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a field. Is anyone aware of some other place where we would have a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; limit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that would cause this problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There's a maximum of 32768 communicator ids when using OB1 (each PML
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; can set the max contextid, although the communicator code is the part that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; actually assigns a cid).  Assuming that comm_free is actually properly
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; called, there should be plenty of cids available for that pattern. However,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm not sure I understand the block algorithm someone added to cid
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; allocation - I'd have to guess that there's something funny with that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; routine and cids aren't being recycled properly.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5938/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5939.php">Ralph Castain: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<li><strong>Previous message:</strong> <a href="5937.php">Ralph Castain: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<li><strong>In reply to:</strong> <a href="5935.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5943.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5943.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
