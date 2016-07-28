<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 09:33:46 2008" -->
<!-- isoreceived="20080527133346" -->
<!-- sent="Tue, 27 May 2008 15:33:40 +0200" -->
<!-- isosent="20080527133340" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="20080527133340.EB4D42B002_at_list.cineca.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F28405CF-E3AD-4A21-8100-63C180E5D037_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-27 09:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5735.php">Jim Kusznir: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<li><strong>Previous message:</strong> <a href="5733.php">Matt Hughes: "[OMPI users] Infinite loop when tcp free list max reached"</a>
<li><strong>In reply to:</strong> <a href="5675.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5739.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="5739.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great, it works!
<br>
Thank you very very much.
<br>
But, can you explain me how this parameter works?
<br>
<p>On Thu, 15 May 2008 21:40:45 -0400, Jeff Squyres said:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry this message escaped for so long it got buried in my INBOX.  The  
</span><br>
<span class="quotelev1">&gt; problem you're seeing might be related to one we just answered about a  
</span><br>
<span class="quotelev1">&gt; similar situation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/users/2008/05/5657.php">http://www.open-mpi.org/community/lists/users/2008/05/5657.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See if using the pml_ob1_use_early_completion flag works for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 30, 2008, at 7:05 AM, Gabriele FATIGATI wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; i tried to run SkaMPI benchmark on IBM-BladeCenterLS21-BCX system  
</span><br>
<span class="quotelev2">&gt; &gt; with 256 processors, but test has stopped on &quot;AlltoAll-length&quot;  
</span><br>
<span class="quotelev2">&gt; &gt; routine, with count=8192  for some reasons.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have launched test with:
</span><br>
<span class="quotelev2">&gt; &gt; --mca btl_openib_eager_limit 1024
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Same tests with 128 processor or less, have finished successful.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Different values of eager limit dont' solve the problem. Thanks in  
</span><br>
<span class="quotelev2">&gt; &gt; advance.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Supercomputing  Group
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; www.cineca.it                    Tel:    39 051 6171722
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; g.fatigati_at_[hidden]            
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
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing
</span><br>
-------------------------- 
<br>
Gabriele Fatigati
<br>
<p>CINECA Systems &amp; Tecnologies Department
<br>
<p>Supercomputing  Group
<br>
<p>Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
<br>
<p>www.cineca.it                    Tel:    39 051 6171722
<br>
<p>g.fatigati_at_[hidden]           
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5735.php">Jim Kusznir: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<li><strong>Previous message:</strong> <a href="5733.php">Matt Hughes: "[OMPI users] Infinite loop when tcp free list max reached"</a>
<li><strong>In reply to:</strong> <a href="5675.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5739.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="5739.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
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
