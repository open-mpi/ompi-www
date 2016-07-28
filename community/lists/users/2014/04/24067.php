<?
$subject_val = "[OMPI users] performance of MPI_Iallgatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  5 05:36:28 2014" -->
<!-- isoreceived="20140405093628" -->
<!-- sent="Sat, 5 Apr 2014 17:35:56 +0800" -->
<!-- isosent="20140405093556" -->
<!-- name="Zehan Cui" -->
<!-- email="zehan.cui_at_[hidden]" -->
<!-- subject="[OMPI users] performance of MPI_Iallgatherv" -->
<!-- id="CALr9+a6A01bZcG+tQdsGsH_DgM_eCeWQT8sb23zvjouw2JVFWA_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] performance of MPI_Iallgatherv<br>
<strong>From:</strong> Zehan Cui (<em>zehan.cui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-05 05:35:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24068.php">Matthieu Brucher: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Previous message:</strong> <a href="24066.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24068.php">Matthieu Brucher: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Reply:</strong> <a href="24068.php">Matthieu Brucher: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm testing the non-blocking collective of OpenMPI-1.8.
<br>
<p>I have two nodes with Infiniband to perform allgather on totally 128MB data.
<br>
<p>I split the 128MB data into eight pieces, and perform computation and
<br>
MPI_Iallgatherv() on one piece of data each iteration, hoping that the
<br>
MPI_Iallgatherv() of last iteration can be overlapped with computation of
<br>
current iteration. A MPI_Wait() is called at the end of last iteration.
<br>
<p>However, the total communication time (including the final wait time) is
<br>
similar with that of the traditional blocking MPI_Allgatherv, even slightly
<br>
higher.
<br>
<p><p>Following is the test pseudo-code, the source code are attached.
<br>
<p>===========================
<br>
<p>Using MPI_Allgatherv:
<br>
<p>for( i=0; i&lt;8; i++ )
<br>
{
<br>
&nbsp;&nbsp;// computation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mytime( t_begin );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;computation;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mytime( t_end );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comp_time += (t_end - t_begin);
<br>
<p>&nbsp;&nbsp;// communication
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t_begin = t_end;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Allgatherv();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mytime( t_end );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm_time += (t_end - t_begin);
<br>
}
<br>
--------------------------------------------
<br>
<p>Using MPI_Iallgatherv:
<br>
<p>for( i=0; i&lt;8; i++ )
<br>
{
<br>
&nbsp;&nbsp;// computation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mytime( t_begin );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;computation;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mytime( t_end );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comp_time += (t_end - t_begin);
<br>
<p>&nbsp;&nbsp;// communication
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t_begin = t_end;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Iallgatherv();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mytime( t_end );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm_time += (t_end - t_begin);
<br>
}
<br>
<p>// wait for non-blocking allgather to complete
<br>
mytime( t_begin );
<br>
for( i=0; i&lt;8; i++ )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait;
<br>
mytime( t_end );
<br>
wait_time = t_end - t_begin;
<br>
<p>==============================
<br>
<p>The results of Allgatherv is:
<br>
[cmy_at_gnode102 test_nbc]$ /home3/cmy/czh/opt/ompi-1.8/bin/mpirun -n 2 --host
<br>
gnode102,gnode103 ./Allgatherv 128 2 | grep time
<br>
Computation time  :     8481279 us
<br>
Communication time:     319803 us
<br>
<p>The results of Iallgatherv is:
<br>
[cmy_at_gnode102 test_nbc]$ /home3/cmy/czh/opt/ompi-1.8/bin/mpirun -n 2 --host
<br>
gnode102,gnode103 ./Iallgatherv 128 2 | grep time
<br>
Computation time  :     8479177 us
<br>
Communication time:     199046 us
<br>
Wait time:              139841 us
<br>
<p><p>So, does this mean that current OpenMPI implementation of MPI_Iallgatherv
<br>
doesn't support offloading of collective communication to dedicated cores
<br>
or network interface?
<br>
<p>Best regards,
<br>
Zehan
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24067/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24067/Allgatherv.c">Allgatherv.c</a>
</ul>
<!-- attachment="Allgatherv.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24067/Iallgatherv.c">Iallgatherv.c</a>
</ul>
<!-- attachment="Iallgatherv.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24068.php">Matthieu Brucher: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Previous message:</strong> <a href="24066.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24068.php">Matthieu Brucher: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Reply:</strong> <a href="24068.php">Matthieu Brucher: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
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
