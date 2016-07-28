<?
$subject_val = "Re: [OMPI users] random problems with a ring communication example";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 15 21:58:55 2014" -->
<!-- isoreceived="20140316015855" -->
<!-- sent="Sat, 15 Mar 2014 18:57:50 -0700" -->
<!-- isosent="20140316015750" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] random problems with a ring communication example" -->
<!-- id="964E6740-430D-4317-80E2-130A913129C1_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPW4YGLYhe3HeGVcMg4=G9CEFGc1FFs7iAZRajUH4nWscR40UA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] random problems with a ring communication example<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-15 21:57:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23860.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23858.php">christophe petit: "Re: [OMPI users] random problems with a ring communication example"</a>
<li><strong>In reply to:</strong> <a href="23858.php">christophe petit: "Re: [OMPI users] random problems with a ring communication example"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 15, 2014, at 6:21 PM, christophe petit &lt;christophe.petit09_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ok, so from what you say, on a &quot;execution system&quot; point view, the ring communication is well achieved (i.e respecting the good order with, in last position, rank0 which receives from rank 6) but the stdout doesn't reflect what really happened, does it ?
</span><br>
<p>Well, it reflects what you printed, but not the order in which things happened.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to make stdout respect the expected order ?
</span><br>
<p>In your program, have each rank!=0 proc recv the message from the previous rank, print the message, sleep(1), and then send.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-03-16 0:42 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; The explanation is simple: there is no rule about ordering of stdout. So even though your rank0 may receive its MPI message last, its stdout may well be printed before one generated on a remote node. Reason is that rank 0 may well be local to mpirun, and thus the stdout can be handled immediately. However, your rank6 may well be on a remote node, and that daemon has to forward the stdout to mpirun for printing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Like I said - no guarantee about ordering of stdout.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 15, 2014, at 2:43 PM, christophe petit &lt;christophe.petit09_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I followed a simple MPI example to do a ring communication.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's the figure that illustrates this example with 7 processes :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://i.imgur.com/Wrd6acv.png">http://i.imgur.com/Wrd6acv.png</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here the code :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  program ring
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  implicit none
</span><br>
<span class="quotelev2">&gt;&gt;  include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  integer, dimension( MPI_STATUS_SIZE ) :: status
</span><br>
<span class="quotelev2">&gt;&gt;  integer, parameter                    :: tag=100
</span><br>
<span class="quotelev2">&gt;&gt;  integer :: nb_procs, rank, value, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;             num_proc_previous,num_proc_next,code
</span><br>
<span class="quotelev2">&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;  call MPI_INIT (code)
</span><br>
<span class="quotelev2">&gt;&gt;  call MPI_COMM_SIZE ( MPI_COMM_WORLD ,nb_procs,code)
</span><br>
<span class="quotelev2">&gt;&gt;  call MPI_COMM_RANK ( MPI_COMM_WORLD ,rank,code)
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  num_proc_next=mod(rank+1,nb_procs) 
</span><br>
<span class="quotelev2">&gt;&gt;  num_proc_previous=mod(nb_procs+rank-1,nb_procs)
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  if (rank == 0) then
</span><br>
<span class="quotelev2">&gt;&gt;     call MPI_SEND (1000,1, MPI_INTEGER ,num_proc_next,tag, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;                    MPI_COMM_WORLD ,code)
</span><br>
<span class="quotelev2">&gt;&gt;     call MPI_RECV (value,1, MPI_INTEGER ,num_proc_previous,tag, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;                    MPI_COMM_WORLD ,status,code)
</span><br>
<span class="quotelev2">&gt;&gt;  else
</span><br>
<span class="quotelev2">&gt;&gt;     call MPI_RECV (value,1, MPI_INTEGER ,num_proc_previous,tag, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;                    MPI_COMM_WORLD ,status,code)
</span><br>
<span class="quotelev2">&gt;&gt;     call MPI_SEND (rank+1000,1, MPI_INTEGER ,num_proc_next,tag, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;                    MPI_COMM_WORLD ,code)
</span><br>
<span class="quotelev2">&gt;&gt;  end if
</span><br>
<span class="quotelev2">&gt;&gt;  print *,'Me, process ',rank,', I have received ',value,' from process ',num_proc_previous
</span><br>
<span class="quotelev2">&gt;&gt;                                          
</span><br>
<span class="quotelev2">&gt;&gt;  call MPI_FINALIZE (code)
</span><br>
<span class="quotelev2">&gt;&gt; end program ring
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At the execution, I expect to always have :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Me, process            1 , I have received         1000  from process            0
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            2 , I have received         1001  from process            1
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            3 , I have received         1002  from process            2
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            4 , I have received         1003  from process            3
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            5 , I have received         1004  from process            4
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            6 , I have received         1005  from process            5
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            0 , I have received         1006  from process            6
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But sometimes, I have the reception of process 0 from process 6 which is not the last reception, like this :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            1 , I have received         1000  from process            0
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            2 , I have received         1001  from process            1
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            3 , I have received         1002  from process            2
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            4 , I have received         1003  from process            3
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            5 , I have received         1004  from process            4
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            0 , I have received         1006  from process            6
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            6 , I have received         1005  from process            5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; where reception of process 0 from process 6 happens before the reception of process 6 from process 5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; or like on this result :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            1 , I have received         1000  from process            0
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            2 , I have received         1001  from process            1
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            3 , I have received         1002  from process            2
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            4 , I have received         1003  from process            3
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            0 , I have received         1006  from process            6
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            5 , I have received         1004  from process            4
</span><br>
<span class="quotelev2">&gt;&gt;  Me, process            6 , I have received         1005  from process            5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; where process 0 receives between the reception of process 4 and 5.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How can we explain this strange result ? I thought that standard use of MPI_SEND and MPI_RECV were blocking by default and,
</span><br>
<span class="quotelev2">&gt;&gt; with this result, it seems to be not blocking.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tested this example on Debian 7.0 with open-mpi package.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23859/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23860.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23858.php">christophe petit: "Re: [OMPI users] random problems with a ring communication example"</a>
<li><strong>In reply to:</strong> <a href="23858.php">christophe petit: "Re: [OMPI users] random problems with a ring communication example"</a>
<!-- nextthread="start" -->
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
