<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 21:41:05 2008" -->
<!-- isoreceived="20080516014105" -->
<!-- sent="Thu, 15 May 2008 21:40:45 -0400" -->
<!-- isosent="20080516014045" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="F28405CF-E3AD-4A21-8100-63C180E5D037_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080430110511.C65102AFED_at_list.cineca.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-15 21:40:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5676.php">Jeff Squyres: "Re: [OMPI users] openmpi multi-lib torque support"</a>
<li><strong>Previous message:</strong> <a href="5674.php">Jeff Squyres: "Re: [OMPI users] Migrating from lam-mpi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5581.php">Gabriele FATIGATI: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5734.php">Gabriele Fatigati: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="5734.php">Gabriele Fatigati: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry this message escaped for so long it got buried in my INBOX.  The  
<br>
problem you're seeing might be related to one we just answered about a  
<br>
similar situation:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2008/05/5657.php">http://www.open-mpi.org/community/lists/users/2008/05/5657.php</a>
<br>
<p>See if using the pml_ob1_use_early_completion flag works for you.
<br>
<p><p><p>On Apr 30, 2008, at 7:05 AM, Gabriele FATIGATI wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; i tried to run SkaMPI benchmark on IBM-BladeCenterLS21-BCX system  
</span><br>
<span class="quotelev1">&gt; with 256 processors, but test has stopped on &quot;AlltoAll-length&quot;  
</span><br>
<span class="quotelev1">&gt; routine, with count=8192  for some reasons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have launched test with:
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_eager_limit 1024
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same tests with 128 processor or less, have finished successful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Different values of eager limit dont' solve the problem. Thanks in  
</span><br>
<span class="quotelev1">&gt; advance.
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt; Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing  Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:    39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden]            
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5676.php">Jeff Squyres: "Re: [OMPI users] openmpi multi-lib torque support"</a>
<li><strong>Previous message:</strong> <a href="5674.php">Jeff Squyres: "Re: [OMPI users] Migrating from lam-mpi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5581.php">Gabriele FATIGATI: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5734.php">Gabriele Fatigati: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="5734.php">Gabriele Fatigati: "Re: [OMPI users] (no subject)"</a>
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
