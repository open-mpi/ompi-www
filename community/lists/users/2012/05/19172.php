<?
$subject_val = "Re: [OMPI users] Regarding the execution time calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 08:59:15 2012" -->
<!-- isoreceived="20120503125915" -->
<!-- sent="Thu, 3 May 2012 14:59:08 +0200" -->
<!-- isosent="20120503125908" -->
<!-- name="Bj&#246;rn Adlerborn" -->
<!-- email="bjorn.adlerborn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the execution time calculation" -->
<!-- id="016e01cd292c$88748590$995d90b0$_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJ_xm3BHPSbfT1Hj7Xim3=9+NimkrZer5EKfpx5qNO5eJqBajA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding the execution time calculation<br>
<strong>From:</strong> Bj&#246;rn Adlerborn (<em>bjorn.adlerborn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 08:59:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19173.php">Eduardo Morras: "Re: [OMPI users] Segmentation fault on master task"</a>
<li><strong>Previous message:</strong> <a href="19171.php">seshendra seshu: "[OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19171.php">seshendra seshu: "[OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19177.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, could you also attach your current code ?
<br>
<p>&nbsp;
<br>
<p>Regards
<br>
<p>Bj&#246;rn
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of seshendra seshu
<br>
Sent: den 3 maj 2012 13:49
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] Regarding the execution time calculation
<br>
<p>&nbsp;
<br>
<p>Hi,
<br>
I have written an parallel program and when i run my program on 4,8,16 nodes
<br>
and calculated the execution time at master using MPI_Wtime in master node.
<br>
The problem the execution time is increasing rapidly like NON parallel
<br>
program-55 sec, and for parallel program 2-nodes--60sec , 4-nodes 74sec,
<br>
8-node--120 sec and for 16 nodes---for 180 sec. can i know my problem in
<br>
parallel version actually the time needs to be decreased but it is
<br>
increasing i dont the reason. i have calculated my time as shown below
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
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19172/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19173.php">Eduardo Morras: "Re: [OMPI users] Segmentation fault on master task"</a>
<li><strong>Previous message:</strong> <a href="19171.php">seshendra seshu: "[OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19171.php">seshendra seshu: "[OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19177.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
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
