<?
$subject_val = "[OMPI users] Regarding the execution time calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 07:49:01 2012" -->
<!-- isoreceived="20120503114901" -->
<!-- sent="Thu, 3 May 2012 13:48:56 +0200" -->
<!-- isosent="20120503114856" -->
<!-- name="seshendra seshu" -->
<!-- email="seshu199_at_[hidden]" -->
<!-- subject="[OMPI users] Regarding the execution time calculation" -->
<!-- id="CAJ_xm3BHPSbfT1Hj7Xim3=9+NimkrZer5EKfpx5qNO5eJqBajA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Regarding the execution time calculation<br>
<strong>From:</strong> seshendra seshu (<em>seshu199_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 07:48:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19172.php">Björn Adlerborn: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19170.php">Rohan Deshpande: "Re: [OMPI users] Segmentation fault on master task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19172.php">Björn Adlerborn: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19172.php">Björn Adlerborn: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19177.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19186.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I have written an parallel program and when i run my program on 4,8,16
<br>
nodes and calculated the execution time at master using MPI_Wtime in master
<br>
node. The problem the execution time is increasing rapidly like NON
<br>
parallel program-55 sec, and for parallel program 2-nodes--60sec , 4-nodes
<br>
74sec, 8-node--120 sec and for 16 nodes---for 180 sec. can i know my
<br>
problem in parallel version actually the time needs to be decreased but it
<br>
is increasing i dont the reason. i have calculated my time as shown below
<br>
<p><p>main(argv,argc)
<br>
{
<br>
double start,end;
<br>
start= MPI_Wtime;
<br>
// done some work
<br>
{
<br>
// start send from master node and receiving it
<br>
end =MPI_Wtime;
<br>
cout&lt;&lt;&quot;execution time&quot;&lt;&lt;end-start;
<br>
}
<br>
//in slave nodes done some work
<br>
&nbsp;MPI_Finalize;
<br>
}
<br>
<p>Please help me in solving this problem.
<br>
<p><pre>
-- 
 WITH REGARDS
M.L.N.Seshendra
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19171/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19172.php">Björn Adlerborn: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19170.php">Rohan Deshpande: "Re: [OMPI users] Segmentation fault on master task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19172.php">Björn Adlerborn: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19172.php">Björn Adlerborn: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19177.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19186.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
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
