<?
$subject_val = "[OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 11:37:35 2012" -->
<!-- isoreceived="20121115163735" -->
<!-- sent="Thu, 15 Nov 2012 16:37:25 +0000" -->
<!-- isosent="20121115163725" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1" -->
<!-- id="50A51A45.9000109_at_ntlworld.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-15 11:37:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20723.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  gathering problem"</a>
<li><strong>Previous message:</strong> <a href="20721.php">Mark Bolstad: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20727.php">Iliev, Hristo: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20727.php">Iliev, Hristo: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21219.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've noticed a very significant (100%) slow down for MPI_Alltoallv calls 
<br>
as of version 1.6.1.
<br>
* This is most noticeable for high-frequency exchanges over 1Gb ethernet 
<br>
where process-to-process message sizes are fairly small (e.g. 100kbyte) 
<br>
and much of the exchange matrix is sparse.
<br>
* 1.6.1 release notes mention &quot;Switch the MPI_ALLTOALLV default 
<br>
algorithm to a pairwise exchange&quot;, but I'm not clear what this means or 
<br>
how to switch back to the old &quot;non-default algorithm&quot;.
<br>
<p>I attach a test program which illustrates the sort of usage in our MPI 
<br>
application. I have run as this as 32 processes on four nodes, over 1Gb 
<br>
ethernet, each node with 2x Opteron 4180 (dual hex-core); rank 0,4,8,.. 
<br>
on node 1, rank 1,5,9, ... on node 2, etc.
<br>
<p>It constructs an array of integers and a nProcess x nProcess exchange 
<br>
typical of part of our application. This is then exchanged several 
<br>
thousand times. Output from &quot;mpicc -O3&quot; runs shown below.
<br>
<p>My guess is that 1.6.1 is hitting additional latency not present in 
<br>
1.6.0. I also attach a plot showing network throughput on our actual 
<br>
mesh generation application. Nodes cfsc01-04 are running 1.6.0 and 
<br>
finish within 35 minutes. Nodes cfsc05-08 are running 1.6.2 (started 10 
<br>
minutes later) and take over a hour to run. There seems to be a much 
<br>
greater network demand in the 1.6.1 version, despite the user-code and 
<br>
input data being identical.
<br>
<p>Thanks for any help you can give,
<br>
Simon
<br>
<p>For 1.6.0:
<br>
<p>Open MPI 1.6.0
<br>
Proc  0: 50 38 29 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0 0  
<br>
0                                  Total: 198 x 100 int
<br>
Proc  1: 38 29 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                     Total: 148 x 100 int
<br>
Proc  2: 29 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                        Total: 109 x 100 int
<br>
Proc  3: 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                           Total: 80 x 100 int
<br>
Proc  4: 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                              Total: 58 x 100 int
<br>
Proc  5: 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                                 Total: 41 x 100 int
<br>
Proc  6:  8  6  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                                    Total: 29 x 100 int
<br>
Proc  7:  6  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                                       Total: 20 x 100 int
<br>
Proc  8:  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                                          Total: 14 x 
<br>
100 int
<br>
Proc  9:  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                                             Total: 9 x 
<br>
100 int
<br>
Proc 10:  2  1  0  0  0  0  0  0  0  0 0 Total: 6 x 100 int
<br>
Proc 11:  1  0  0  0  0  0  0  0  0 
<br>
0                                                                 0 
<br>
Total: 4 x 100 int
<br>
Proc 12:  0  0  0  0  0  0  0  0 
<br>
0                                                                 0 0 
<br>
Total: 2 x 100 int
<br>
Proc 13:  0  0  0  0  0  0  0 
<br>
0                                                                 0 0  0 
<br>
Total: 1 x 100 int
<br>
Proc 14:  0  0  0  0  0  0 
<br>
0                                                                 0 0  
<br>
0  0 Total: 1 x 100 int
<br>
Proc 15:  0  0  0  0  0 
<br>
0                                                                 0 0  
<br>
0  0  0 Total: 0 x 100 int
<br>
Proc 16:  0  0  0  0 
<br>
0                                                                 0 0  
<br>
0  0  0  0 Total: 0 x 100 int
<br>
Proc 17:  0  0  0 
<br>
0                                                                 0 0  
<br>
0  0  0  0  0 Total: 1 x 100 int
<br>
Proc 18:  0  0 
<br>
0                                                                 0 0  
<br>
0  0  0  0  0  0 Total: 1 x 100 int
<br>
Proc 19:  0 
<br>
0                                                                 0 0  
<br>
0  0  0  0  0  0  0 Total: 2 x 100 int
<br>
Proc 20: 
<br>
0                                                                 0 0  
<br>
0  0  0  0  0  0  0  1 Total: 4 x 100 int
<br>
Proc 21: 0  0  0  0  0  0  0  0  0  1  2 Total: 6 x 100 int
<br>
Proc 22:                                                              0 
<br>
0  0  0  0  0  0  0  0  1  2  3 Total: 9 x 100 int
<br>
Proc 23: 0  0  0  0  0  0  0  0  0  1  2  3  4 Total: 14 x 100 int
<br>
Proc 24:                                                        0 0  0  
<br>
0  0  0  0  0  0  1  2  3  4  6 Total: 20 x 100 int
<br>
Proc 25:                                                     0  0 0  0  
<br>
0  0  0  0  0  1  2  3  4  6  8 Total: 29 x 100 int
<br>
Proc 26:                                                  0  0  0 0  0  
<br>
0  0  0  0  1  2  3  4  6  8 12 Total: 41 x 100 int
<br>
Proc 27:                                               0  0  0  0 0  0  
<br>
0  0  0  1  2  3  4  6  8 12 16 Total: 58 x 100 int
<br>
Proc 28:                                            0  0  0  0  0 0  0  
<br>
0  0  1  2  3  4  6  8 12 16 22 Total: 80 x 100 int
<br>
Proc 29:                                         0  0  0  0  0  0 0  0  
<br>
0  1  2  3  4  6  8 12 16 22 29 Total: 109 x 100 int
<br>
Proc 30:                                      0  0  0  0  0  0  0 0  0  
<br>
1  2  3  4  6  8 12 16 22 29 38 Total: 148 x 100 int
<br>
Proc 31:                                   0  0  0  0  0  0  0  0 0  1  
<br>
2  3  4  6  8 12 16 22 29 38 50 Total: 198 x 100 int
<br>
....................................................................................................
<br>
Total time = 15.443502 seconds
<br>
<p><p>For 1.6.1:
<br>
<p>Open MPI 1.6.1
<br>
Proc  0: 50 38 29 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0 0  
<br>
0                                  Total: 198 x 100 int
<br>
Proc  1: 38 29 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                     Total: 148 x 100 int
<br>
Proc  2: 29 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                        Total: 109 x 100 int
<br>
Proc  3: 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                           Total: 80 x 100 int
<br>
Proc  4: 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                              Total: 58 x 100 int
<br>
Proc  5: 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                                 Total: 41 x 100 int
<br>
Proc  6:  8  6  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                                    Total: 29 x 100 int
<br>
Proc  7:  6  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                                       Total: 20 x 100 int
<br>
Proc  8:  4  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                                          Total: 14 x 
<br>
100 int
<br>
Proc  9:  3  2  1  0  0  0  0  0  0  0  0 
<br>
0                                                             Total: 9 x 
<br>
100 int
<br>
Proc 10:  2  1  0  0  0  0  0  0  0  0 0 Total: 6 x 100 int
<br>
Proc 11:  1  0  0  0  0  0  0  0  0 
<br>
0                                                                 0 
<br>
Total: 4 x 100 int
<br>
Proc 12:  0  0  0  0  0  0  0  0 
<br>
0                                                                 0 0 
<br>
Total: 2 x 100 int
<br>
Proc 13:  0  0  0  0  0  0  0 
<br>
0                                                                 0 0  0 
<br>
Total: 1 x 100 int
<br>
Proc 14:  0  0  0  0  0  0 
<br>
0                                                                 0 0  
<br>
0  0 Total: 1 x 100 int
<br>
Proc 15:  0  0  0  0  0 
<br>
0                                                                 0 0  
<br>
0  0  0 Total: 0 x 100 int
<br>
Proc 16:  0  0  0  0 
<br>
0                                                                 0 0  
<br>
0  0  0  0 Total: 0 x 100 int
<br>
Proc 17:  0  0  0 
<br>
0                                                                 0 0  
<br>
0  0  0  0  0 Total: 1 x 100 int
<br>
Proc 18:  0  0 
<br>
0                                                                 0 0  
<br>
0  0  0  0  0  0 Total: 1 x 100 int
<br>
Proc 19:  0 
<br>
0                                                                 0 0  
<br>
0  0  0  0  0  0  0 Total: 2 x 100 int
<br>
Proc 20: 
<br>
0                                                                 0 0  
<br>
0  0  0  0  0  0  0  1 Total: 4 x 100 int
<br>
Proc 21: 0  0  0  0  0  0  0  0  0  1  2 Total: 6 x 100 int
<br>
Proc 22:                                                              0 
<br>
0  0  0  0  0  0  0  0  1  2  3 Total: 9 x 100 int
<br>
Proc 23: 0  0  0  0  0  0  0  0  0  1  2  3  4 Total: 14 x 100 int
<br>
Proc 24:                                                        0 0  0  
<br>
0  0  0  0  0  0  1  2  3  4  6 Total: 20 x 100 int
<br>
Proc 25:                                                     0  0 0  0  
<br>
0  0  0  0  0  1  2  3  4  6  8 Total: 29 x 100 int
<br>
Proc 26:                                                  0  0  0 0  0  
<br>
0  0  0  0  1  2  3  4  6  8 12 Total: 41 x 100 int
<br>
Proc 27:                                               0  0  0  0 0  0  
<br>
0  0  0  1  2  3  4  6  8 12 16 Total: 58 x 100 int
<br>
Proc 28:                                            0  0  0  0  0 0  0  
<br>
0  0  1  2  3  4  6  8 12 16 22 Total: 80 x 100 int
<br>
Proc 29:                                         0  0  0  0  0  0 0  0  
<br>
0  1  2  3  4  6  8 12 16 22 29 Total: 109 x 100 int
<br>
Proc 30:                                      0  0  0  0  0  0  0 0  0  
<br>
1  2  3  4  6  8 12 16 22 29 38 Total: 148 x 100 int
<br>
Proc 31:                                   0  0  0  0  0  0  0  0 0  1  
<br>
2  3  4  6  8 12 16 22 29 38 50 Total: 198 x 100 int
<br>
....................................................................................................
<br>
Total time = 25.549821 seconds
<br>
<p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20722/alltoall.c">alltoall.c</a>
</ul>
<!-- attachment="alltoall.c" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-20722/160_vs_162.png" alt="160_vs_162.png">
<!-- attachment="160_vs_162.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20723.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  gathering problem"</a>
<li><strong>Previous message:</strong> <a href="20721.php">Mark Bolstad: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20727.php">Iliev, Hristo: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20727.php">Iliev, Hristo: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21219.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
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
