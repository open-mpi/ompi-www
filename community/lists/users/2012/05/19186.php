<?
$subject_val = "Re: [OMPI users] Regarding the execution time calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 06:55:26 2012" -->
<!-- isoreceived="20120504105526" -->
<!-- sent="Fri, 4 May 2012 06:55:22 -0400" -->
<!-- isosent="20120504105522" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the execution time calculation" -->
<!-- id="8AD9E456-CA10-410F-9552-FBE79068CBDA_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 06:55:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19187.php">Jeff Squyres: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19185.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>In reply to:</strong> <a href="19171.php">seshendra seshu: "[OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19189.php">seshendra seshu: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19189.php">seshendra seshu: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You probably need to be more fine-grained in your timing.  Find out exactly what is increasing in time.  This is a common symptom for codes that do not scale well -- i.e., adding more MPI processes actually causes it to slow down.
<br>
<p><p>On May 3, 2012, at 7:48 AM, seshendra seshu wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have written an parallel program and when i run my program on 4,8,16 nodes and calculated the execution time at master using MPI_Wtime in master node. The problem the execution time is increasing rapidly like NON parallel program-55 sec, and for parallel program 2-nodes--60sec , 4-nodes 74sec, 8-node--120 sec and for 16 nodes---for 180 sec. can i know my problem in parallel version actually the time needs to be decreased but it is increasing i dont the reason. i have calculated my time as shown below
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; main(argv,argc)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; double start,end;
</span><br>
<span class="quotelev1">&gt; start= MPI_Wtime;
</span><br>
<span class="quotelev1">&gt; // done some work
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; // start send from master node and receiving it
</span><br>
<span class="quotelev1">&gt; end =MPI_Wtime;
</span><br>
<span class="quotelev1">&gt; cout&lt;&lt;&quot;execution time&quot;&lt;&lt;end-start;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; //in slave nodes done some work
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please help me in solving this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  WITH REGARDS
</span><br>
<span class="quotelev1">&gt; M.L.N.Seshendra
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19187.php">Jeff Squyres: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19185.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>In reply to:</strong> <a href="19171.php">seshendra seshu: "[OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19189.php">seshendra seshu: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19189.php">seshendra seshu: "Re: [OMPI users] Regarding the execution time calculation"</a>
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
