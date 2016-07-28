<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 14:56:22 2009" -->
<!-- isoreceived="20090430185622" -->
<!-- sent="Thu, 30 Apr 2009 12:56:11 -0600" -->
<!-- isosent="20090430185611" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="C8993DBB-2E83-402C-8068-14BCC1A217DB_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B51670D6-1188-4588-B5F2-B89F47CA22F4_at_lanl.gov" -->
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
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 14:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5929.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5927.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5924.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5934.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5934.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is the test code reproducer:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program test2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ierr, myid, numprocs,i1,i2,n,local_comm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$     icolor,ikey,rank,root
<br>
<p>c
<br>
c...  MPI set-up
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ierr = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(IERR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ierr = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, ierr
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ierr = -1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_RANK(MPI_COMM_WORLD, myid, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ierr = -5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i1 = ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myid.eq.0) i1 = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_allreduce(i1, i2, 1,MPI_integer,MPI_MIN,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$     MPI_COMM_WORLD,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ikey = myid
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mod(myid,2).eq.0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;icolor = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;icolor = MPI_UNDEFINED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do n = 1, 100000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SPLIT(MPI_COMM_WORLD, icolor,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$        ikey, local_comm, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mod(myid,2).eq.0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_RANK(local_comm, rank, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i2 = i1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_reduce(i1, i2, 1,MPI_integer,MPI_MIN,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$           root, local_comm,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myid.eq.0.and.mod(n,10).eq.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$           print *, n, i1, i2,icolor,ikey
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_free(local_comm, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
c      if (icolor.eq.0) call mpi_comm_free(local_comm, ierr)
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_barrier(MPi_COMM_WORLD,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(IERR)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, myid, ierr
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p><p><p>-david
<br>
<pre>
--
David Gunter
HPC-3: Parallel Tools Team
Los Alamos National Laboratory
On Apr 30, 2009, at 12:43 PM, David Gunter wrote:
&gt; Just to throw out more info on this, the test code runs fine on  
&gt; previous versions of OMPI.  It only hangs on the 1.3 line when the  
&gt; cid reaches 65536.
&gt;
&gt; -david
&gt; --
&gt; David Gunter
&gt; HPC-3: Parallel Tools Team
&gt; Los Alamos National Laboratory
&gt;
&gt;
&gt;
&gt; On Apr 30, 2009, at 12:28 PM, Edgar Gabriel wrote:
&gt;
&gt;&gt; cid's are in fact not recycled in the block algorithm. The problem  
&gt;&gt; is that comm_free is not collective, so you can not make any  
&gt;&gt; assumptions whether other procs have also released that communicator.
&gt;&gt;
&gt;&gt;
&gt;&gt; But nevertheless, a cid in the communicator structure is a  
&gt;&gt; uint32_t, so it should not hit the 16k limit there yet. this is not  
&gt;&gt; new, so if there is a discrepancy between what the comm structure  
&gt;&gt; assumes that a cid is and what the pml assumes, than this was in  
&gt;&gt; the code since the very first days of Open MPI...
&gt;&gt;
&gt;&gt; Thanks
&gt;&gt; Edgar
&gt;&gt;
&gt;&gt; Brian W. Barrett wrote:
&gt;&gt;&gt; On Thu, 30 Apr 2009, Ralph Castain wrote:
&gt;&gt;&gt;&gt; We seem to have hit a problem here - it looks like we are seeing a
&gt;&gt;&gt;&gt; built-in limit on the number of communicators one can create in a
&gt;&gt;&gt;&gt; program. The program basically does a loop, calling  
&gt;&gt;&gt;&gt; MPI_Comm_split each
&gt;&gt;&gt;&gt; time through the loop to create a sub-communicator, does a reduce
&gt;&gt;&gt;&gt; operation on the members of the sub-communicator, and then calls
&gt;&gt;&gt;&gt; MPI_Comm_free to release it (this is a minimized reproducer for  
&gt;&gt;&gt;&gt; the real
&gt;&gt;&gt;&gt; code). After 64k times through the loop, the program fails.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; This looks remarkably like a 16-bit index that hits a max value  
&gt;&gt;&gt;&gt; and then
&gt;&gt;&gt;&gt; blocks.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I have looked at the communicator code, but I don't immediately  
&gt;&gt;&gt;&gt; see such
&gt;&gt;&gt;&gt; a field. Is anyone aware of some other place where we would have  
&gt;&gt;&gt;&gt; a limit
&gt;&gt;&gt;&gt; that would cause this problem?
&gt;&gt;&gt; There's a maximum of 32768 communicator ids when using OB1 (each  
&gt;&gt;&gt; PML can set the max contextid, although the communicator code is  
&gt;&gt;&gt; the part that actually assigns a cid).  Assuming that comm_free is  
&gt;&gt;&gt; actually properly called, there should be plenty of cids available  
&gt;&gt;&gt; for that pattern. However, I'm not sure I understand the block  
&gt;&gt;&gt; algorithm someone added to cid allocation - I'd have to guess that  
&gt;&gt;&gt; there's something funny with that routine and cids aren't being  
&gt;&gt;&gt; recycled properly.
&gt;&gt;&gt; Brian
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Edgar Gabriel
&gt;&gt; Assistant Professor
&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
&gt;&gt; Department of Computer Science          University of Houston
&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5929.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5927.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5924.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5934.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5934.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
