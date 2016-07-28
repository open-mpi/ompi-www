<?
$subject_val = "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 06:09:34 2009" -->
<!-- isoreceived="20090527100934" -->
<!-- sent="Wed, 27 May 2009 13:09:27 +0300" -->
<!-- isosent="20090527100927" -->
<!-- name="vasilis" -->
<!-- email="gkanis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;An error occurred in MPI_Recv&amp;quot; with more than 2 CPU" -->
<!-- id="200905271309.27914.gkanis_at_ipta.demokritos.gr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4A1C170C.9080603_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU<br>
<strong>From:</strong> vasilis (<em>gkanis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 06:09:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9440.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9438.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
<li><strong>In reply to:</strong> <a href="9426.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9440.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9440.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Eugene for your suggestion. I used different tags for each variable, 
<br>
and now I do not get this error. 
<br>
The problem now is that I am getting a different solution when I use more than 
<br>
2 CPUs. I checked the matrices and I found that they differ by a very small 
<br>
amount  of the order 10^(-10). Actually, I am getting a different solution if I 
<br>
use 4CPUs or 16CPUs!!!
<br>
Do you have any idea what could cause this behavior?
<br>
<p>Thank you,
<br>
Vasilis
<br>
<p>On Tuesday 26 of May 2009 7:21:32 pm you wrote:
<br>
<span class="quotelev1">&gt; vasilis wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Dear openMpi users,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I am trying to develop a code that runs in parallel mode with openMPI
</span><br>
<span class="quotelev2">&gt; &gt; (1.3.2 version). The code is written in Fortran 90, and I am running on 
</span><br>
<span class="quotelev2">&gt; &gt; a cluster
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;If I use 2 CPU the program runs fine, but for a larger number of CPUs I
</span><br>
<span class="quotelev2">&gt; &gt; get the following error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;[compute-2-6.local:18491] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev2">&gt; &gt;[compute-2-6.local:18491] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt;[compute-2-6.local:18491] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev2">&gt; &gt;[compute-2-6.local:18491] *** MPI_ERRORS_ARE_FATAL (your MPI job will now
</span><br>
<span class="quotelev2">&gt; &gt;abort)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Here is the part of the code that this error refers to:
</span><br>
<span class="quotelev2">&gt; &gt;if( mumps_par%MYID .eq. 0 ) THEN
</span><br>
<span class="quotelev2">&gt; &gt;                res=res+res_cpu
</span><br>
<span class="quotelev2">&gt; &gt;                do iw=1,total_elem_cpu*unique
</span><br>
<span class="quotelev2">&gt; &gt;                        jacob(iw)=jacob(iw)+jacob_cpu(iw)
</span><br>
<span class="quotelev2">&gt; &gt;                        position_col(iw)=position_col(iw)+col_cpu(iw)
</span><br>
<span class="quotelev2">&gt; &gt;                        position_row(iw)=position_row(iw)+row_cpu(iw)
</span><br>
<span class="quotelev2">&gt; &gt;                end do
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                do jw=1,nsize-1
</span><br>
<span class="quotelev2">&gt; &gt;                        call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_recv(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,MPI_ANY_SOUR
</span><br>
<span class="quotelev2">&gt; &gt;CE,MPI_ANY_TAG,MPI_COMM_WORLD,status1,ierr) call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_recv(res_cpu,total_unknowns,MPI_DOUBLE_PRECISION,MPI_ANY_SOURCE,MPI_AN
</span><br>
<span class="quotelev2">&gt; &gt;Y_TAG,MPI_COMM_WORLD,status2,ierr) call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_recv(row_cpu,total_elem_cpu*unique,MPI_INTEGER,MPI_ANY_SOURCE,MPI_ANY_
</span><br>
<span class="quotelev2">&gt; &gt;TAG,MPI_COMM_WORLD,status3,ierr) call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_recv(col_cpu,total_elem_cpu*unique,MPI_INTEGER,MPI_ANY_SOURCE,MPI_ANY_
</span><br>
<span class="quotelev2">&gt; &gt;TAG,MPI_COMM_WORLD,status4,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  res=res+res_cpu
</span><br>
<span class="quotelev2">&gt; &gt;                        do iw=1,total_elem_cpu*unique
</span><br>
<span class="quotelev2">&gt; &gt;                               
</span><br>
<span class="quotelev2">&gt; &gt; jacob(status1(MPI_SOURCE)*total_elem_cpu*unique+iw)=&amp;
</span><br>
<span class="quotelev2">&gt; &gt; jacob(status1(MPI_SOURCE)*total_elem_cpu*unique+iw)+jacob_cpu(iw)
</span><br>
<span class="quotelev2">&gt; &gt; position_col(status4(MPI_SOURCE)*total_elem_cpu*unique+iw)=&amp;
</span><br>
<span class="quotelev2">&gt; &gt; position_col(status4(MPI_SOURCE)*total_elem_cpu*unique+iw)+col_cpu(iw)
</span><br>
<span class="quotelev2">&gt; &gt; position_row(status3(MPI_SOURCE)*total_elem_cpu*unique+iw)=&amp;
</span><br>
<span class="quotelev2">&gt; &gt; position_row(status3(MPI_SOURCE)*total_elem_cpu*unique+iw)+row_cpu(iw)
</span><br>
<span class="quotelev2">&gt; &gt; end do
</span><br>
<span class="quotelev2">&gt; &gt;                end do
</span><br>
<span class="quotelev2">&gt; &gt;        else
</span><br>
<span class="quotelev2">&gt; &gt;                call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Isend(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,0,mumps_par
</span><br>
<span class="quotelev2">&gt; &gt;%MYID,MPI_COMM_WORLD,request1,ierr) call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Isend(res_cpu,total_unknowns,MPI_DOUBLE_PRECISION,0,mumps_par%MYID,MPI
</span><br>
<span class="quotelev2">&gt; &gt;_COMM_WORLD,request2,ierr) call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Isend(row_cpu,total_elem_cpu*unique,MPI_INTEGER,0,mumps_par%MYID,MPI_C
</span><br>
<span class="quotelev2">&gt; &gt;OMM_WORLD,request3,ierr) call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Isend(col_cpu,total_elem_cpu*unique,MPI_INTEGER,0,mumps_par%MYID,MPI_C
</span><br>
<span class="quotelev2">&gt; &gt;OMM_WORLD,request4,ierr) call MPI_Wait(request1, status1, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;                call MPI_Wait(request2, status2, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;                call MPI_Wait(request3, status3, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;                call MPI_Wait(request4, status4, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        end if
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I am also using the MUMPS library
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Could someone help to track this error down. Is really annoying to use
</span><br>
<span class="quotelev2">&gt; &gt; only two processors.
</span><br>
<span class="quotelev2">&gt; &gt;The cluster has about 8 nodes and each has 4 dual core CPU. I tried to run
</span><br>
<span class="quotelev2">&gt; &gt; the code on a single node with more than 2 CPU but I got the same error!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the error message means that the received message was longer
</span><br>
<span class="quotelev1">&gt; than the receive buffer that was specified.  If I look at your code and
</span><br>
<span class="quotelev1">&gt; try to reason about its correctness, I think of the message-passing
</span><br>
<span class="quotelev1">&gt; portion as looking like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if( mumps_par%MYID .eq. 0 ) THEN
</span><br>
<span class="quotelev1">&gt;     do jw=1,nsize-1
</span><br>
<span class="quotelev1">&gt;         call
</span><br>
<span class="quotelev1">&gt; MPI_recv(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,MPI_ANY_SOURC
</span><br>
<span class="quotelev1">&gt;E,MPI_ANY_TAG,MPI_COMM_WORLD,status1,ierr) call MPI_recv( 
</span><br>
<span class="quotelev1">&gt; res_cpu,total_unknowns
</span><br>
<span class="quotelev1">&gt; ,MPI_DOUBLE_PRECISION,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status2,ier
</span><br>
<span class="quotelev1">&gt;r) call MPI_recv(
</span><br>
<span class="quotelev1">&gt; row_cpu,total_elem_cpu*unique,MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; ,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status3,ierr)
</span><br>
<span class="quotelev1">&gt;         call MPI_recv(
</span><br>
<span class="quotelev1">&gt; col_cpu,total_elem_cpu*unique,MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; ,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status4,ierr)
</span><br>
<span class="quotelev1">&gt;     end do
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;     call
</span><br>
<span class="quotelev1">&gt; MPI_Send(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,0,mumps_par%M
</span><br>
<span class="quotelev1">&gt;YID,MPI_COMM_WORLD,ierr) call MPI_Send(  res_cpu,total_unknowns
</span><br>
<span class="quotelev1">&gt; ,MPI_DOUBLE_PRECISION,0,mumps_par%MYID,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;     call MPI_Send(  row_cpu,total_elem_cpu*unique,MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; ,0,mumps_par%MYID,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;     call MPI_Send(  col_cpu,total_elem_cpu*unique,MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; ,0,mumps_par%MYID,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt; end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're running on two processes, then the messages you receive are in
</span><br>
<span class="quotelev1">&gt; the order you expect.  If there are more than two processes, however,
</span><br>
<span class="quotelev1">&gt; certainly messages will start appearing &quot;out of order&quot; and your
</span><br>
<span class="quotelev1">&gt; indiscriminate use of MPI_ANY_SOURCE and MPI_ANY_TAG will start getting
</span><br>
<span class="quotelev1">&gt; them mixed up.  You won't just get all messages from one rank and then
</span><br>
<span class="quotelev1">&gt; all from another and then all from another.  Rather, the messages from
</span><br>
<span class="quotelev1">&gt; all these other processes will come interwoven, but you interpret them
</span><br>
<span class="quotelev1">&gt; in a fixed order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what I mean.  Let's say you have 3 processes.  So, rank 0 will
</span><br>
<span class="quotelev1">&gt; receive 8 messages:  4 from rank 1and 4 from rank 2.  Correspondingly,
</span><br>
<span class="quotelev1">&gt; rank 1 and rank 2 will each send 4 messages to rank 0.  Here is a
</span><br>
<span class="quotelev1">&gt; possibility for the order in which messages are received:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jacob_cpu from rank 1
</span><br>
<span class="quotelev1">&gt; jacob_cpu from rank 2
</span><br>
<span class="quotelev1">&gt; res_cpu from rank 1
</span><br>
<span class="quotelev1">&gt; row_cpu from rank 1
</span><br>
<span class="quotelev1">&gt; res_cpu from rank 2
</span><br>
<span class="quotelev1">&gt; row_cpu from rank 2
</span><br>
<span class="quotelev1">&gt; col_cpu from rank 2
</span><br>
<span class="quotelev1">&gt; col_cpu from rank 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rank 0, however, is trying to unpack these in the order you prescribed
</span><br>
<span class="quotelev1">&gt; in your code.  Data will get misinterpreted.  More to the point here,
</span><br>
<span class="quotelev1">&gt; you will be trying to receive data into buffers of the wrong size (some
</span><br>
<span class="quotelev1">&gt; of the time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe you should use tags to distinguish between the different types of
</span><br>
<span class="quotelev1">&gt; messages you're trying to send.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9440.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9438.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
<li><strong>In reply to:</strong> <a href="9426.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9440.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9440.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
