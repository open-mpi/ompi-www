<?
$subject_val = "Re: [OMPI users] Regarding the execution time calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 14:02:22 2012" -->
<!-- isoreceived="20120503180222" -->
<!-- sent="Thu, 3 May 2012 11:02:11 -0700" -->
<!-- isosent="20120503180211" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the execution time calculation" -->
<!-- id="CE21CB2C-C1BA-4D7A-BF0E-499FFDB16624_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 14:02:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19178.php">Don Armstrong: "[OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19176.php">Ralph Castain: "Re: [OMPI users] Openmpi problem"</a>
<li><strong>In reply to:</strong> <a href="19171.php">seshendra seshu: "[OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19184.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19184.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not related to this question , but just curious, is Wtime context switch safe ?
<br>
<p><pre>
--
Sent from my iPhone
On May 3, 2012, at 4:48 AM, seshendra seshu &lt;seshu199_at_[hidden]&gt; wrote:
&gt; Hi,
&gt; I have written an parallel program and when i run my program on 4,8,16 nodes and calculated the execution time at master using MPI_Wtime in master node. The problem the execution time is increasing rapidly like NON parallel program-55 sec, and for parallel program 2-nodes--60sec , 4-nodes 74sec, 8-node--120 sec and for 16 nodes---for 180 sec. can i know my problem in parallel version actually the time needs to be decreased but it is increasing i dont the reason. i have calculated my time as shown below
&gt; 
&gt; 
&gt; main(argv,argc)
&gt; {
&gt; double start,end;
&gt; start= MPI_Wtime;
&gt; // done some work
&gt; {
&gt; // start send from master node and receiving it
&gt; end =MPI_Wtime;
&gt; cout&lt;&lt;&quot;execution time&quot;&lt;&lt;end-start;
&gt; }
&gt; //in slave nodes done some work
&gt;  MPI_Finalize;
&gt; }
&gt; 
&gt; Please help me in solving this problem.
&gt; 
&gt; -- 
&gt;  WITH REGARDS
&gt; M.L.N.Seshendra
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19178.php">Don Armstrong: "[OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19176.php">Ralph Castain: "Re: [OMPI users] Openmpi problem"</a>
<li><strong>In reply to:</strong> <a href="19171.php">seshendra seshu: "[OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19184.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19184.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
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
