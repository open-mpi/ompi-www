<?
$subject_val = "Re: [OMPI users] Regarding the execution time calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 08:05:27 2012" -->
<!-- isoreceived="20120504120527" -->
<!-- sent="Fri, 4 May 2012 08:05:22 -0400" -->
<!-- isosent="20120504120522" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the execution time calculation" -->
<!-- id="FF850A90-FC3E-4547-BB57-D28D3E7E5D7C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJ_xm3AcihrB9vWzEaus6wuS_i12w06Ok_i_rub82ZCyBsG8iA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-05-04 08:05:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19191.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19189.php">seshendra seshu: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19189.php">seshendra seshu: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few nodes:
<br>
<p>1. I think you posted an incorrect version of your code -- it's calling MPI_Test on an uninitialized request.
<br>
<p>2. This looks like a homework problem.  I try very hard not to do peoples' homework.  :-)  My first comment to you stands: you need to be more fine-grained in your timing and figure out where the increase in time is coming from.  Here's another hint: compare the relative sizes of execution times of the different parts of your program and use that to deduce why your program is not scaling.
<br>
<p>Good luck!
<br>
<p><p><p>On May 4, 2012, at 7:44 AM, seshendra seshu wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I haven't used the more mpi process also but still am still unable to reduce my exection time.Here is my code <a href="http://seshendramln.blogspot.se/">http://seshendramln.blogspot.se/</a>  
</span><br>
<span class="quotelev1">&gt; and please help me in solving.  
</span><br>
<span class="quotelev1">&gt; In this code iam getting the same execution time in i increase or decrease the no.of nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanking you
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With regards 
</span><br>
<span class="quotelev1">&gt; seshendra
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, May 4, 2012 at 12:55 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; You probably need to be more fine-grained in your timing.  Find out exactly what is increasing in time.  This is a common symptom for codes that do not scale well -- i.e., adding more MPI processes actually causes it to slow down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 3, 2012, at 7:48 AM, seshendra seshu wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; I have written an parallel program and when i run my program on 4,8,16 nodes and calculated the execution time at master using MPI_Wtime in master node. The problem the execution time is increasing rapidly like NON parallel program-55 sec, and for parallel program 2-nodes--60sec , 4-nodes 74sec, 8-node--120 sec and for 16 nodes---for 180 sec. can i know my problem in parallel version actually the time needs to be decreased but it is increasing i dont the reason. i have calculated my time as shown below
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; main(argv,argc)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; double start,end;
</span><br>
<span class="quotelev2">&gt; &gt; start= MPI_Wtime;
</span><br>
<span class="quotelev2">&gt; &gt; // done some work
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; // start send from master node and receiving it
</span><br>
<span class="quotelev2">&gt; &gt; end =MPI_Wtime;
</span><br>
<span class="quotelev2">&gt; &gt; cout&lt;&lt;&quot;execution time&quot;&lt;&lt;end-start;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; //in slave nodes done some work
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Finalize;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please help me in solving this problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;  WITH REGARDS
</span><br>
<span class="quotelev2">&gt; &gt; M.L.N.Seshendra
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="19191.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19189.php">seshendra seshu: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19189.php">seshendra seshu: "Re: [OMPI users] Regarding the execution time calculation"</a>
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
