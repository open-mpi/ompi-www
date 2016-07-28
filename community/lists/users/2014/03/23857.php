<?
$subject_val = "Re: [OMPI users] random problems with a ring communication example";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 15 19:43:48 2014" -->
<!-- isoreceived="20140315234348" -->
<!-- sent="Sat, 15 Mar 2014 16:42:44 -0700" -->
<!-- isosent="20140315234244" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] random problems with a ring communication example" -->
<!-- id="AB1EAAFF-4547-40A1-8E72-F33B3D1C12D1_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPW4YGJ411ALF4P5-OTWVP1QNTfOuyP_3Xftre1odsqJMQ5xdw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-03-15 19:42:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23858.php">christophe petit: "Re: [OMPI users] random problems with a ring communication example"</a>
<li><strong>Previous message:</strong> <a href="23856.php">christophe petit: "[OMPI users] random problems with a ring communication example"</a>
<li><strong>In reply to:</strong> <a href="23856.php">christophe petit: "[OMPI users] random problems with a ring communication example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23858.php">christophe petit: "Re: [OMPI users] random problems with a ring communication example"</a>
<li><strong>Reply:</strong> <a href="23858.php">christophe petit: "Re: [OMPI users] random problems with a ring communication example"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The explanation is simple: there is no rule about ordering of stdout. So even though your rank0 may receive its MPI message last, its stdout may well be printed before one generated on a remote node. Reason is that rank 0 may well be local to mpirun, and thus the stdout can be handled immediately. However, your rank6 may well be on a remote node, and that daemon has to forward the stdout to mpirun for printing.
<br>
<p>Like I said - no guarantee about ordering of stdout.
<br>
<p><p>On Mar 15, 2014, at 2:43 PM, christophe petit &lt;christophe.petit09_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I followed a simple MPI example to do a ring communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the figure that illustrates this example with 7 processes :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://i.imgur.com/Wrd6acv.png">http://i.imgur.com/Wrd6acv.png</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here the code :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  program ring
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  implicit none
</span><br>
<span class="quotelev1">&gt;  include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  integer, dimension( MPI_STATUS_SIZE ) :: status
</span><br>
<span class="quotelev1">&gt;  integer, parameter                    :: tag=100
</span><br>
<span class="quotelev1">&gt;  integer :: nb_procs, rank, value, &amp;
</span><br>
<span class="quotelev1">&gt;             num_proc_previous,num_proc_next,code
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;  call MPI_INIT (code)
</span><br>
<span class="quotelev1">&gt;  call MPI_COMM_SIZE ( MPI_COMM_WORLD ,nb_procs,code)
</span><br>
<span class="quotelev1">&gt;  call MPI_COMM_RANK ( MPI_COMM_WORLD ,rank,code)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  num_proc_next=mod(rank+1,nb_procs) 
</span><br>
<span class="quotelev1">&gt;  num_proc_previous=mod(nb_procs+rank-1,nb_procs)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  if (rank == 0) then
</span><br>
<span class="quotelev1">&gt;     call MPI_SEND (1000,1, MPI_INTEGER ,num_proc_next,tag, &amp;
</span><br>
<span class="quotelev1">&gt;                    MPI_COMM_WORLD ,code)
</span><br>
<span class="quotelev1">&gt;     call MPI_RECV (value,1, MPI_INTEGER ,num_proc_previous,tag, &amp;
</span><br>
<span class="quotelev1">&gt;                    MPI_COMM_WORLD ,status,code)
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;     call MPI_RECV (value,1, MPI_INTEGER ,num_proc_previous,tag, &amp;
</span><br>
<span class="quotelev1">&gt;                    MPI_COMM_WORLD ,status,code)
</span><br>
<span class="quotelev1">&gt;     call MPI_SEND (rank+1000,1, MPI_INTEGER ,num_proc_next,tag, &amp;
</span><br>
<span class="quotelev1">&gt;                    MPI_COMM_WORLD ,code)
</span><br>
<span class="quotelev1">&gt;  end if
</span><br>
<span class="quotelev1">&gt;  print *,'Me, process ',rank,', I have received ',value,' from process ',num_proc_previous
</span><br>
<span class="quotelev1">&gt;                                          
</span><br>
<span class="quotelev1">&gt;  call MPI_FINALIZE (code)
</span><br>
<span class="quotelev1">&gt; end program ring
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the execution, I expect to always have :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Me, process            1 , I have received         1000  from process            0
</span><br>
<span class="quotelev1">&gt;  Me, process            2 , I have received         1001  from process            1
</span><br>
<span class="quotelev1">&gt;  Me, process            3 , I have received         1002  from process            2
</span><br>
<span class="quotelev1">&gt;  Me, process            4 , I have received         1003  from process            3
</span><br>
<span class="quotelev1">&gt;  Me, process            5 , I have received         1004  from process            4
</span><br>
<span class="quotelev1">&gt;  Me, process            6 , I have received         1005  from process            5
</span><br>
<span class="quotelev1">&gt;  Me, process            0 , I have received         1006  from process            6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But sometimes, I have the reception of process 0 from process 6 which is not the last reception, like this :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Me, process            1 , I have received         1000  from process            0
</span><br>
<span class="quotelev1">&gt;  Me, process            2 , I have received         1001  from process            1
</span><br>
<span class="quotelev1">&gt;  Me, process            3 , I have received         1002  from process            2
</span><br>
<span class="quotelev1">&gt;  Me, process            4 , I have received         1003  from process            3
</span><br>
<span class="quotelev1">&gt;  Me, process            5 , I have received         1004  from process            4
</span><br>
<span class="quotelev1">&gt;  Me, process            0 , I have received         1006  from process            6
</span><br>
<span class="quotelev1">&gt;  Me, process            6 , I have received         1005  from process            5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where reception of process 0 from process 6 happens before the reception of process 6 from process 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or like on this result :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Me, process            1 , I have received         1000  from process            0
</span><br>
<span class="quotelev1">&gt;  Me, process            2 , I have received         1001  from process            1
</span><br>
<span class="quotelev1">&gt;  Me, process            3 , I have received         1002  from process            2
</span><br>
<span class="quotelev1">&gt;  Me, process            4 , I have received         1003  from process            3
</span><br>
<span class="quotelev1">&gt;  Me, process            0 , I have received         1006  from process            6
</span><br>
<span class="quotelev1">&gt;  Me, process            5 , I have received         1004  from process            4
</span><br>
<span class="quotelev1">&gt;  Me, process            6 , I have received         1005  from process            5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where process 0 receives between the reception of process 4 and 5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can we explain this strange result ? I thought that standard use of MPI_SEND and MPI_RECV were blocking by default and,
</span><br>
<span class="quotelev1">&gt; with this result, it seems to be not blocking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tested this example on Debian 7.0 with open-mpi package.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23857/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23858.php">christophe petit: "Re: [OMPI users] random problems with a ring communication example"</a>
<li><strong>Previous message:</strong> <a href="23856.php">christophe petit: "[OMPI users] random problems with a ring communication example"</a>
<li><strong>In reply to:</strong> <a href="23856.php">christophe petit: "[OMPI users] random problems with a ring communication example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23858.php">christophe petit: "Re: [OMPI users] random problems with a ring communication example"</a>
<li><strong>Reply:</strong> <a href="23858.php">christophe petit: "Re: [OMPI users] random problems with a ring communication example"</a>
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
