<?
$subject_val = "Re: [OMPI users] Regarding the execution time calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 07:44:59 2012" -->
<!-- isoreceived="20120504114459" -->
<!-- sent="Fri, 4 May 2012 13:44:55 +0200" -->
<!-- isosent="20120504114455" -->
<!-- name="seshendra seshu" -->
<!-- email="seshu199_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the execution time calculation" -->
<!-- id="CAJ_xm3AcihrB9vWzEaus6wuS_i12w06Ok_i_rub82ZCyBsG8iA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8AD9E456-CA10-410F-9552-FBE79068CBDA_at_cisco.com" -->
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
<strong>From:</strong> seshendra seshu (<em>seshu199_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 07:44:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19190.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19188.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>In reply to:</strong> <a href="19186.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19190.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19190.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I haven't used the more mpi process also but still am still unable to
<br>
reduce my exection time.Here is my code *<a href="http://seshendramln.blogspot.se/">http://seshendramln.blogspot.se/</a>*
<br>
and please help me in solving.
<br>
In this code iam getting the same execution time in i increase or decrease
<br>
the no.of nodes.
<br>
<p>thanking you
<br>
<p><p>With regards
<br>
seshendra
<br>
<p><p>On Fri, May 4, 2012 at 12:55 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You probably need to be more fine-grained in your timing.  Find out
</span><br>
<span class="quotelev1">&gt; exactly what is increasing in time.  This is a common symptom for codes
</span><br>
<span class="quotelev1">&gt; that do not scale well -- i.e., adding more MPI processes actually causes
</span><br>
<span class="quotelev1">&gt; it to slow down.
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
<span class="quotelev2">&gt; &gt; I have written an parallel program and when i run my program on 4,8,16
</span><br>
<span class="quotelev1">&gt; nodes and calculated the execution time at master using MPI_Wtime in master
</span><br>
<span class="quotelev1">&gt; node. The problem the execution time is increasing rapidly like NON
</span><br>
<span class="quotelev1">&gt; parallel program-55 sec, and for parallel program 2-nodes--60sec , 4-nodes
</span><br>
<span class="quotelev1">&gt; 74sec, 8-node--120 sec and for 16 nodes---for 180 sec. can i know my
</span><br>
<span class="quotelev1">&gt; problem in parallel version actually the time needs to be decreased but it
</span><br>
<span class="quotelev1">&gt; is increasing i dont the reason. i have calculated my time as shown below
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p><pre>
-- 
 WITH REGARDS
M.L.N.Seshendra
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19189/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19190.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19188.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>In reply to:</strong> <a href="19186.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19190.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19190.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
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
