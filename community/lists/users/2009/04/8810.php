<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 10:24:50 2009" -->
<!-- isoreceived="20090407142450" -->
<!-- sent="Tue, 07 Apr 2009 10:24:30 -0400" -->
<!-- isosent="20090407142430" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="01698149-8379-48A6-B8C1-D32C02DD9561_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090406213937.GA71151_at_troutmask.apl.washington.edu" -->
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
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 10:24:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8811.php">Iain Bason: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>Previous message:</strong> <a href="8809.php">Francesco Pietra: "[OMPI users] Fwd:  ssh MPi and program tests"</a>
<li><strong>In reply to:</strong> <a href="8797.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8812.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8812.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are a bunch changes in the shared memory module between 1.2.9  
<br>
and 1.3.1.  One significant change is the introduction of the &quot;sendi&quot;  
<br>
internal interface.  I believe George Bosilca did the initial  
<br>
implementation.  This is just a wild guess, but maybe there is  
<br>
something about sendi that increases latency when using the shared  
<br>
memory module.
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8811.php">Iain Bason: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>Previous message:</strong> <a href="8809.php">Francesco Pietra: "[OMPI users] Fwd:  ssh MPi and program tests"</a>
<li><strong>In reply to:</strong> <a href="8797.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8812.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8812.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
