<?
$subject_val = "Re: [OMPI users] Regarding the execution time";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 09:52:19 2012" -->
<!-- isoreceived="20120509135219" -->
<!-- sent="Wed, 9 May 2012 09:52:15 -0400" -->
<!-- isosent="20120509135215" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the execution time" -->
<!-- id="DA09E02E-0C16-4A6D-AF88-46C5415BBEFD_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJ_xm3BjV3Oyjp1eX6EuF2z7oSxLYJthFsEvUonGGQTj+oL3zw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding the execution time<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 09:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19232.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19230.php">Jeff Squyres: "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<li><strong>In reply to:</strong> <a href="19228.php">seshendra seshu: "[OMPI users] Regarding the execution time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19235.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time"</a>
<li><strong>Reply:</strong> <a href="19235.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Google around / check textbooks, but you need to check how much time is being spent by each part of your application.  
<br>
<p>E.g., if just reading from disk / writing back to disk takes 6.5 seconds, then the parallel part is trivial.
<br>
<p>You should time the parts of your program and see what part(s) is(are) taking the longest, and see how to improve them.
<br>
<p>A general rule of thumb: remember that MPI_SEND / MPI_RECV are &quot;fast&quot;, but are both limited by your underlying network (among other reasons), and are considerably slower than CPU speeds.  Hence, the work required to split up your problem into multiple parts and use MPI to communicate those parts to the remote workers can be considered overhead -- you should minimize all that overhead in comparison to CPU computation whenever possible.  For example, ensure that the amount of computation work that you're giving to each MPI process is large enough to outweigh the cost of communicating with that MPI process.
<br>
<p>As a corollary to that: if you have too little work to do, the overhead of parallelization can quickly overtake any performance benefits (e.g., wall clock execution time).  Concrete example: if you're only sorting a small number of integers (e.g., 100 integers), it's quite possible that parallelizing that will be *slower* than just doing it serially.
<br>
<p><p><p>On May 9, 2012, at 8:56 AM, seshendra seshu wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Iam very new to parallel computing and MPI, with intested i have written an sorting algorithm with MPI. The problem is i tried reduce the execution time i.e sorting with increase in nodes but the problem is iam unable drease the time and i was getting like for 4nodes(1Master and 2 slaves) was getting an avg of 6.56 sec , for  8nodes(1Master and 7 slaves) was getting an avg of 6.62 sec and for 15nodes(1Master and 15 slaves) was getting an avg of 6.63 sec. i am unable for  find out an clue according to theory time has been decreased for the increase in nodes but iwas getting an increase or constant. Please help me solving this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanking you
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
<li><strong>Next message:</strong> <a href="19232.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19230.php">Jeff Squyres: "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<li><strong>In reply to:</strong> <a href="19228.php">seshendra seshu: "[OMPI users] Regarding the execution time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19235.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time"</a>
<li><strong>Reply:</strong> <a href="19235.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time"</a>
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
