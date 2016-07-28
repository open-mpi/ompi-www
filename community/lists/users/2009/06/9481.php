<?
$subject_val = "[OMPI users] overlapping communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 11:23:03 2009" -->
<!-- isoreceived="20090601152303" -->
<!-- sent="Mon, 01 Jun 2009 08:22:58 -0700" -->
<!-- isosent="20090601152258" -->
<!-- name="tsilva_at_[hidden]" -->
<!-- email="tsilva_at_[hidden]" -->
<!-- subject="[OMPI users] overlapping communicators?" -->
<!-- id="20090601082258.rb2twuo128cwosc0_at_webmail.coas.oregonstate.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] overlapping communicators?<br>
<strong>From:</strong> <a href="mailto:tsilva_at_[hidden]?Subject=Re:%20[OMPI%20users]%20overlapping%20communicators?"><em>tsilva_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-06-01 11:22:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9482.php">Jeff Squyres: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9480.php">Gus Correa: "Re: [OMPI users] sync problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9513.php">tsilva_at_[hidden]: "Re: [OMPI users] top question"</a>
<li><strong>Reply:</strong> <a href="9513.php">tsilva_at_[hidden]: "Re: [OMPI users] top question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a Multiple Program Multiple Data with three programs running in  
<br>
parallel, say A, B and C. C is much slower so in order to balance the  
<br>
load I want to parallelize C into C0 to Cn (SPMD). There are very  
<br>
frequent communications between Ci processes and not so frequent, but  
<br>
still multiple times per second, between A, B and C0. I have running  
<br>
versions of ABC MPMD and the C*N SMPD.
<br>
<p>I was thinking of creating two communicators with C0 being a member of  
<br>
both, but I am told this is bad practice although I don't really know  
<br>
what the pitfalls are. An alternative would be to create and close the  
<br>
ABC communicator every time it is used, but I am worried about the  
<br>
cost of this operations and about making the code look messy. I would  
<br>
appreciate any advice onn this issue.
<br>
<p>Thanks,
<br>
Tiago
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9482.php">Jeff Squyres: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9480.php">Gus Correa: "Re: [OMPI users] sync problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9513.php">tsilva_at_[hidden]: "Re: [OMPI users] top question"</a>
<li><strong>Reply:</strong> <a href="9513.php">tsilva_at_[hidden]: "Re: [OMPI users] top question"</a>
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
