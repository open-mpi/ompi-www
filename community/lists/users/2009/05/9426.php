<?
$subject_val = "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 12:21:36 2009" -->
<!-- isoreceived="20090526162136" -->
<!-- sent="Tue, 26 May 2009 09:21:32 -0700" -->
<!-- isosent="20090526162132" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;An error occurred in MPI_Recv&amp;quot; with more than 2 CPU" -->
<!-- id="4A1C170C.9080603_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200905261411.52365.gkanis_at_ipta.demokritos.gr" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 12:21:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9427.php">mtcreekmore_at_[hidden]: "[OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9425.php">Gus Correa: "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>In reply to:</strong> <a href="9422.php">vasilis: "[OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9439.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9439.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
vasilis wrote:
<br>
<p><span class="quotelev1">&gt;Dear openMpi users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am trying to develop a code that runs in parallel mode with openMPI (1.3.2 
</span><br>
<span class="quotelev1">&gt;version). The code is written in Fortran 90, and I am running on  a cluster
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If I use 2 CPU the program runs fine, but for a larger number of CPUs I get the 
</span><br>
<span class="quotelev1">&gt;following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[compute-2-6.local:18491] *** An error occurred in MPI_Recv                                                                                                                        
</span><br>
<span class="quotelev1">&gt;[compute-2-6.local:18491] *** on communicator MPI_COMM_WORLD                                                                                                                       
</span><br>
<span class="quotelev1">&gt;[compute-2-6.local:18491] *** MPI_ERR_TRUNCATE: message truncated                                                                                                                  
</span><br>
<span class="quotelev1">&gt;[compute-2-6.local:18491] *** MPI_ERRORS_ARE_FATAL (your MPI job will now 
</span><br>
<span class="quotelev1">&gt;abort)   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Here is the part of the code that this error refers to:
</span><br>
<span class="quotelev1">&gt;if( mumps_par%MYID .eq. 0 ) THEN
</span><br>
<span class="quotelev1">&gt;                res=res+res_cpu
</span><br>
<span class="quotelev1">&gt;                do iw=1,total_elem_cpu*unique
</span><br>
<span class="quotelev1">&gt;                        jacob(iw)=jacob(iw)+jacob_cpu(iw)
</span><br>
<span class="quotelev1">&gt;                        position_col(iw)=position_col(iw)+col_cpu(iw)
</span><br>
<span class="quotelev1">&gt;                        position_row(iw)=position_row(iw)+row_cpu(iw)
</span><br>
<span class="quotelev1">&gt;                end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                do jw=1,nsize-1
</span><br>
<span class="quotelev1">&gt;                        call 
</span><br>
<span class="quotelev1">&gt;MPI_recv(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status1,ierr)
</span><br>
<span class="quotelev1">&gt;                        call 
</span><br>
<span class="quotelev1">&gt;MPI_recv(res_cpu,total_unknowns,MPI_DOUBLE_PRECISION,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status2,ierr)
</span><br>
<span class="quotelev1">&gt;                        call 
</span><br>
<span class="quotelev1">&gt;MPI_recv(row_cpu,total_elem_cpu*unique,MPI_INTEGER,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status3,ierr)
</span><br>
<span class="quotelev1">&gt;                        call 
</span><br>
<span class="quotelev1">&gt;MPI_recv(col_cpu,total_elem_cpu*unique,MPI_INTEGER,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status4,ierr)
</span><br>
<span class="quotelev1">&gt;                   
</span><br>
<span class="quotelev1">&gt;  res=res+res_cpu
</span><br>
<span class="quotelev1">&gt;                        do iw=1,total_elem_cpu*unique
</span><br>
<span class="quotelev1">&gt;                                jacob(status1(MPI_SOURCE)*total_elem_cpu*unique+iw)=&amp;
</span><br>
<span class="quotelev1">&gt;                                        jacob(status1(MPI_SOURCE)*total_elem_cpu*unique+iw)+jacob_cpu(iw)
</span><br>
<span class="quotelev1">&gt;                                position_col(status4(MPI_SOURCE)*total_elem_cpu*unique+iw)=&amp;
</span><br>
<span class="quotelev1">&gt;                                        position_col(status4(MPI_SOURCE)*total_elem_cpu*unique+iw)+col_cpu(iw)
</span><br>
<span class="quotelev1">&gt;                                position_row(status3(MPI_SOURCE)*total_elem_cpu*unique+iw)=&amp;
</span><br>
<span class="quotelev1">&gt;                                        position_row(status3(MPI_SOURCE)*total_elem_cpu*unique+iw)+row_cpu(iw)
</span><br>
<span class="quotelev1">&gt;                        end do
</span><br>
<span class="quotelev1">&gt;                end do
</span><br>
<span class="quotelev1">&gt;        else
</span><br>
<span class="quotelev1">&gt;                call 
</span><br>
<span class="quotelev1">&gt;MPI_Isend(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,0,mumps_par%MYID,MPI_COMM_WORLD,request1,ierr)
</span><br>
<span class="quotelev1">&gt;                call 
</span><br>
<span class="quotelev1">&gt;MPI_Isend(res_cpu,total_unknowns,MPI_DOUBLE_PRECISION,0,mumps_par%MYID,MPI_COMM_WORLD,request2,ierr)
</span><br>
<span class="quotelev1">&gt;                call 
</span><br>
<span class="quotelev1">&gt;MPI_Isend(row_cpu,total_elem_cpu*unique,MPI_INTEGER,0,mumps_par%MYID,MPI_COMM_WORLD,request3,ierr)
</span><br>
<span class="quotelev1">&gt;                call 
</span><br>
<span class="quotelev1">&gt;MPI_Isend(col_cpu,total_elem_cpu*unique,MPI_INTEGER,0,mumps_par%MYID,MPI_COMM_WORLD,request4,ierr)
</span><br>
<span class="quotelev1">&gt;  call MPI_Wait(request1, status1, ierr)
</span><br>
<span class="quotelev1">&gt;                call MPI_Wait(request2, status2, ierr)
</span><br>
<span class="quotelev1">&gt;                call MPI_Wait(request3, status3, ierr)
</span><br>
<span class="quotelev1">&gt;                call MPI_Wait(request4, status4, ierr)
</span><br>
<span class="quotelev1">&gt;        end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am also using the MUMPS library
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Could someone help to track this error down. Is really annoying to use only 
</span><br>
<span class="quotelev1">&gt;two processors.
</span><br>
<span class="quotelev1">&gt;The cluster has about 8 nodes and each has 4 dual core CPU. I tried to run the 
</span><br>
<span class="quotelev1">&gt;code on a single node with more than 2 CPU but I got the same error!!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I think the error message means that the received message was longer 
<br>
than the receive buffer that was specified.  If I look at your code and 
<br>
try to reason about its correctness, I think of the message-passing 
<br>
portion as looking like this:
<br>
<p>if( mumps_par%MYID .eq. 0 ) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do jw=1,nsize-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call 
<br>
MPI_recv(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status1,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_recv(  res_cpu,total_unknowns       
<br>
,MPI_DOUBLE_PRECISION,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status2,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_recv(  
<br>
row_cpu,total_elem_cpu*unique,MPI_INTEGER         
<br>
,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status3,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_recv(  
<br>
col_cpu,total_elem_cpu*unique,MPI_INTEGER         
<br>
,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status4,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call 
<br>
MPI_Send(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,0,mumps_par%MYID,MPI_COMM_WORLD,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Send(  res_cpu,total_unknowns       
<br>
,MPI_DOUBLE_PRECISION,0,mumps_par%MYID,MPI_COMM_WORLD,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Send(  row_cpu,total_elem_cpu*unique,MPI_INTEGER         
<br>
,0,mumps_par%MYID,MPI_COMM_WORLD,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Send(  col_cpu,total_elem_cpu*unique,MPI_INTEGER         
<br>
,0,mumps_par%MYID,MPI_COMM_WORLD,ierr)
<br>
end if
<br>
<p>If you're running on two processes, then the messages you receive are in 
<br>
the order you expect.  If there are more than two processes, however, 
<br>
certainly messages will start appearing &quot;out of order&quot; and your 
<br>
indiscriminate use of MPI_ANY_SOURCE and MPI_ANY_TAG will start getting 
<br>
them mixed up.  You won't just get all messages from one rank and then 
<br>
all from another and then all from another.  Rather, the messages from 
<br>
all these other processes will come interwoven, but you interpret them 
<br>
in a fixed order.
<br>
<p>Here is what I mean.  Let's say you have 3 processes.  So, rank 0 will 
<br>
receive 8 messages:  4 from rank 1and 4 from rank 2.  Correspondingly, 
<br>
rank 1 and rank 2 will each send 4 messages to rank 0.  Here is a 
<br>
possibility for the order in which messages are received:
<br>
<p>jacob_cpu from rank 1
<br>
jacob_cpu from rank 2
<br>
res_cpu from rank 1
<br>
row_cpu from rank 1
<br>
res_cpu from rank 2
<br>
row_cpu from rank 2
<br>
col_cpu from rank 2
<br>
col_cpu from rank 1
<br>
<p>Rank 0, however, is trying to unpack these in the order you prescribed 
<br>
in your code.  Data will get misinterpreted.  More to the point here, 
<br>
you will be trying to receive data into buffers of the wrong size (some 
<br>
of the time).
<br>
<p>Maybe you should use tags to distinguish between the different types of 
<br>
messages you're trying to send.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9427.php">mtcreekmore_at_[hidden]: "[OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9425.php">Gus Correa: "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>In reply to:</strong> <a href="9422.php">vasilis: "[OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9439.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9439.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
