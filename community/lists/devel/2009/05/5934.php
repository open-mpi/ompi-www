<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 08:08:18 2009" -->
<!-- isoreceived="20090501120818" -->
<!-- sent="Fri, 01 May 2009 07:08:09 -0500" -->
<!-- isosent="20090501120809" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="49FAE629.6010707_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C8993DBB-2E83-402C-8068-14BCC1A217DB_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-05-01 08:08:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5935.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5933.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [ROMIO Req #947] New version of ROMIO?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5928.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5935.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5935.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David,
<br>
<p>is this code representative for what your app is doing? E.g. you have a 
<br>
base communicator (e.g. MPI_COMM_WORLD) which is being 'split', freed 
<br>
again, split, freed again etc. ? i.e. the important aspect is that the 
<br>
same 'base' communicator is being used for deriving new communicators 
<br>
again and again?
<br>
<p>The reason I ask is two-fold: one, you would in that case be one of the 
<br>
ideal beneficiaries of the block cid algorithm :-) (even if it fails you 
<br>
right now);  two, a fix for this scenario which basically tries to reuse 
<br>
the last block used (and which would fix your case if the condition is 
<br>
true) is roughly five lines of code. This would give us the possibility 
<br>
to have a fix quickly in the trunk and v1.3 (keep in mind that the 
<br>
block-cid code is in the trunk since two years and this is the first 
<br>
problem that we have) and give us more time to develop a profound 
<br>
solution for the worst case - a chain of communicators being created, 
<br>
e.g. communicator 1 is basis to derive a new comm 2, comm 2 is being 
<br>
used to derive comm 3 etc.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>David Gunter wrote:
<br>
<span class="quotelev1">&gt; Here is the test code reproducer:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       program test2
</span><br>
<span class="quotelev1">&gt;       implicit none
</span><br>
<span class="quotelev1">&gt;       include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;       integer ierr, myid, numprocs,i1,i2,n,local_comm,
</span><br>
<span class="quotelev1">&gt;      $     icolor,ikey,rank,root
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt; c...  MPI set-up
</span><br>
<span class="quotelev1">&gt;       ierr = 0
</span><br>
<span class="quotelev1">&gt;       call MPI_INIT(IERR)
</span><br>
<span class="quotelev1">&gt;       ierr = 1
</span><br>
<span class="quotelev1">&gt;       CALL MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)
</span><br>
<span class="quotelev1">&gt;       print *, ierr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       ierr = -1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       CALL MPI_COMM_RANK(MPI_COMM_WORLD, myid, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       ierr = -5
</span><br>
<span class="quotelev1">&gt;       i1 = ierr
</span><br>
<span class="quotelev1">&gt;       if (myid.eq.0) i1 = 1
</span><br>
<span class="quotelev1">&gt;       call mpi_allreduce(i1, i2, 1,MPI_integer,MPI_MIN,
</span><br>
<span class="quotelev1">&gt;      $     MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       ikey = myid
</span><br>
<span class="quotelev1">&gt;       if (mod(myid,2).eq.0) then
</span><br>
<span class="quotelev1">&gt;          icolor = 0
</span><br>
<span class="quotelev1">&gt;       else
</span><br>
<span class="quotelev1">&gt;          icolor = MPI_UNDEFINED
</span><br>
<span class="quotelev1">&gt;       end if
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       root = 0
</span><br>
<span class="quotelev1">&gt;       do n = 1, 100000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          call MPI_COMM_SPLIT(MPI_COMM_WORLD, icolor,
</span><br>
<span class="quotelev1">&gt;      $        ikey, local_comm, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          if (mod(myid,2).eq.0) then
</span><br>
<span class="quotelev1">&gt;             CALL MPI_COMM_RANK(local_comm, rank, ierr)
</span><br>
<span class="quotelev1">&gt;             i2 = i1
</span><br>
<span class="quotelev1">&gt;             call mpi_reduce(i1, i2, 1,MPI_integer,MPI_MIN,
</span><br>
<span class="quotelev1">&gt;      $           root, local_comm,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             if (myid.eq.0.and.mod(n,10).eq.0)
</span><br>
<span class="quotelev1">&gt;      $           print *, n, i1, i2,icolor,ikey
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             call mpi_comm_free(local_comm, ierr)
</span><br>
<span class="quotelev1">&gt;          end if
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       end do
</span><br>
<span class="quotelev1">&gt; c      if (icolor.eq.0) call mpi_comm_free(local_comm, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       call MPI_barrier(MPi_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       call MPI_FINALIZE(IERR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       print *, myid, ierr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -david
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Gunter
</span><br>
<span class="quotelev1">&gt; HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 30, 2009, at 12:43 PM, David Gunter wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just to throw out more info on this, the test code runs fine on 
</span><br>
<span class="quotelev2">&gt;&gt; previous versions of OMPI.  It only hangs on the 1.3 line when the cid 
</span><br>
<span class="quotelev2">&gt;&gt; reaches 65536.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -david
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; David Gunter
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 30, 2009, at 12:28 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cid's are in fact not recycled in the block algorithm. The problem is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that comm_free is not collective, so you can not make any assumptions 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whether other procs have also released that communicator.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But nevertheless, a cid in the communicator structure is a uint32_t, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so it should not hit the 16k limit there yet. this is not new, so if 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there is a discrepancy between what the comm structure assumes that a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cid is and what the pml assumes, than this was in the code since the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; very first days of Open MPI...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, 30 Apr 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We seem to have hit a problem here - it looks like we are seeing a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; built-in limit on the number of communicators one can create in a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program. The program basically does a loop, calling MPI_Comm_split 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; time through the loop to create a sub-communicator, does a reduce
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; operation on the members of the sub-communicator, and then calls
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Comm_free to release it (this is a minimized reproducer for the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; real
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; code). After 64k times through the loop, the program fails.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This looks remarkably like a 16-bit index that hits a max value and 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; blocks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have looked at the communicator code, but I don't immediately see 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; such
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a field. Is anyone aware of some other place where we would have a 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; limit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that would cause this problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There's a maximum of 32768 communicator ids when using OB1 (each PML 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can set the max contextid, although the communicator code is the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; part that actually assigns a cid).  Assuming that comm_free is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; actually properly called, there should be plenty of cids available 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for that pattern. However, I'm not sure I understand the block 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; algorithm someone added to cid allocation - I'd have to guess that 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there's something funny with that routine and cids aren't being 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recycled properly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5935.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5933.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [ROMIO Req #947] New version of ROMIO?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5928.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5935.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5935.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
