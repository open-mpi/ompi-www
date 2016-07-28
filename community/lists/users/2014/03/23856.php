<?
$subject_val = "[OMPI users] random problems with a ring communication example";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 15 17:43:30 2014" -->
<!-- isoreceived="20140315214330" -->
<!-- sent="Sat, 15 Mar 2014 22:43:29 +0100" -->
<!-- isosent="20140315214329" -->
<!-- name="christophe petit" -->
<!-- email="christophe.petit09_at_[hidden]" -->
<!-- subject="[OMPI users] random problems with a ring communication example" -->
<!-- id="CAPW4YGJ411ALF4P5-OTWVP1QNTfOuyP_3Xftre1odsqJMQ5xdw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] random problems with a ring communication example<br>
<strong>From:</strong> christophe petit (<em>christophe.petit09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-15 17:43:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23857.php">Ralph Castain: "Re: [OMPI users] random problems with a ring communication example"</a>
<li><strong>Previous message:</strong> <a href="23855.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23857.php">Ralph Castain: "Re: [OMPI users] random problems with a ring communication example"</a>
<li><strong>Reply:</strong> <a href="23857.php">Ralph Castain: "Re: [OMPI users] random problems with a ring communication example"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I followed a simple MPI example to do a ring communication.
<br>
<p>Here's the figure that illustrates this example with 7 processes :
<br>
<p><a href="http://i.imgur.com/Wrd6acv.png">http://i.imgur.com/Wrd6acv.png</a>
<br>
<p>Here the code :
<br>
<p>--------------------------------------------------------------------------------------------------------------------------
<br>
&nbsp;program ring
<br>
<p>&nbsp;implicit none
<br>
&nbsp;include 'mpif.h'
<br>
<p>&nbsp;integer, dimension( MPI_STATUS_SIZE ) :: status
<br>
&nbsp;integer, parameter                    :: tag=100
<br>
&nbsp;integer :: nb_procs, rank, value, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num_proc_previous,num_proc_next,code
<br>
<p>&nbsp;call MPI_INIT (code)
<br>
&nbsp;call MPI_COMM_SIZE ( MPI_COMM_WORLD ,nb_procs,code)
<br>
&nbsp;call MPI_COMM_RANK ( MPI_COMM_WORLD ,rank,code)
<br>
<p>&nbsp;num_proc_next=mod(rank+1,nb_procs)
<br>
&nbsp;num_proc_previous=mod(nb_procs+rank-1,nb_procs)
<br>
<p>&nbsp;if (rank == 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SEND (1000,1, MPI_INTEGER ,num_proc_next,tag, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ,code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_RECV (value,1, MPI_INTEGER ,num_proc_previous,tag, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ,status,code)
<br>
&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_RECV (value,1, MPI_INTEGER ,num_proc_previous,tag, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ,status,code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SEND (rank+1000,1, MPI_INTEGER ,num_proc_next,tag, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ,code)
<br>
&nbsp;end if
<br>
&nbsp;print *,'Me, process ',rank,', I have received ',value,' from process
<br>
',num_proc_previous
<br>
<p>&nbsp;call MPI_FINALIZE (code)
<br>
end program ring
<br>
<p>--------------------------------------------------------------------------------------------------------------------------
<br>
<p>At the execution, I expect to always have :
<br>
<p>Me, process            1 , I have received         1000  from
<br>
process            0
<br>
&nbsp;Me, process            2 , I have received         1001  from
<br>
process            1
<br>
&nbsp;Me, process            3 , I have received         1002  from
<br>
process            2
<br>
&nbsp;Me, process            4 , I have received         1003  from
<br>
process            3
<br>
&nbsp;Me, process            5 , I have received         1004  from
<br>
process            4
<br>
&nbsp;Me, process            6 , I have received         1005  from
<br>
process            5
<br>
&nbsp;Me, process            0 , I have received         1006  from
<br>
process            6
<br>
<p>But sometimes, I have the reception of process 0 from process 6 which is
<br>
not the last reception, like this :
<br>
<p>&nbsp;Me, process            1 , I have received         1000  from
<br>
process            0
<br>
&nbsp;Me, process            2 , I have received         1001  from
<br>
process            1
<br>
&nbsp;Me, process            3 , I have received         1002  from
<br>
process            2
<br>
&nbsp;Me, process            4 , I have received         1003  from
<br>
process            3
<br>
&nbsp;Me, process            5 , I have received         1004  from
<br>
process            4
<br>
&nbsp;Me, process            0 , I have received         1006  from
<br>
process            6
<br>
&nbsp;Me, process            6 , I have received         1005  from
<br>
process            5
<br>
<p>where reception of process 0 from process 6 happens before the reception of
<br>
process 6 from process 5
<br>
<p>or like on this result :
<br>
<p>&nbsp;Me, process            1 , I have received         1000  from
<br>
process            0
<br>
&nbsp;Me, process            2 , I have received         1001  from
<br>
process            1
<br>
&nbsp;Me, process            3 , I have received         1002  from
<br>
process            2
<br>
&nbsp;Me, process            4 , I have received         1003  from
<br>
process            3
<br>
&nbsp;Me, process            0 , I have received         1006  from
<br>
process            6
<br>
&nbsp;Me, process            5 , I have received         1004  from
<br>
process            4
<br>
&nbsp;Me, process            6 , I have received         1005  from
<br>
process            5
<br>
<p>where process 0 receives between the reception of process 4 and 5.
<br>
<p>How can we explain this strange result ? I thought that standard use of
<br>
MPI_SEND and MPI_RECV were blocking by default and,
<br>
with this result, it seems to be not blocking.
<br>
<p>I tested this example on Debian 7.0 with open-mpi package.
<br>
<p>Thanks for your help
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23856/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23857.php">Ralph Castain: "Re: [OMPI users] random problems with a ring communication example"</a>
<li><strong>Previous message:</strong> <a href="23855.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23857.php">Ralph Castain: "Re: [OMPI users] random problems with a ring communication example"</a>
<li><strong>Reply:</strong> <a href="23857.php">Ralph Castain: "Re: [OMPI users] random problems with a ring communication example"</a>
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
