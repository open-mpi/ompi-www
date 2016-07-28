<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 11:01:07 2009" -->
<!-- isoreceived="20090407150107" -->
<!-- sent="Tue, 07 Apr 2009 08:00:39 -0700" -->
<!-- isosent="20090407150039" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="49DB6A97.4080204_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="01698149-8379-48A6-B8C1-D32C02DD9561_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Factor of 10 loss in performance with 1.3.x<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 11:00:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8813.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8811.php">Iain Bason: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>In reply to:</strong> <a href="8810.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8813.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8813.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8818.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Iain Bason wrote:
<br>
<p><span class="quotelev1">&gt; There are a bunch changes in the shared memory module between 1.2.9  
</span><br>
<span class="quotelev1">&gt; and 1.3.1.  One significant change is the introduction of the &quot;sendi&quot;  
</span><br>
<span class="quotelev1">&gt; internal interface.  I believe George Bosilca did the initial  
</span><br>
<span class="quotelev1">&gt; implementation.  This is just a wild guess, but maybe there is  
</span><br>
<span class="quotelev1">&gt; something about sendi that increases latency when using the shared  
</span><br>
<span class="quotelev1">&gt; memory module.
</span><br>
<p>But the sm BTL doesn't expose its sendi function, which puts it in the 
<br>
same camp as most BTLs.
<br>
<p>And the slowdown doesn't seem to be observed by anyone other than Steve 
<br>
and his colleague?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8813.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8811.php">Iain Bason: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>In reply to:</strong> <a href="8810.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8813.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8813.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8818.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
