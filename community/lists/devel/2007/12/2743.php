<?
$subject_val = "[OMPI devel] opal_condition_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 09:46:46 2007" -->
<!-- isoreceived="20071206144646" -->
<!-- sent="Thu, 06 Dec 2007 09:46:45 -0500" -->
<!-- isosent="20071206144645" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_condition_wait" -->
<!-- id="47580B55.1040607_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> [OMPI devel] opal_condition_wait<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 09:46:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2744.php">Jeff Squyres: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Previous message:</strong> <a href="2742.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2746.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="2746.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="2757.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>A couple of questions.
<br>
<p>First, in opal_condition_wait (condition.h:97) we do not release the 
<br>
passed mutex if opal_using_threads() is not set. Is there a reason for 
<br>
this? I ask since this violates the way condition variables are supposed 
<br>
to work, and it seems like there are situations where this could cause 
<br>
deadlock.
<br>
<p>Also, when we are using threads, there is a case where we do not 
<br>
decrement the signaled count, in condition.h:84. Gleb put this in in 
<br>
r9451, however the change does not make sense to me. I think that the 
<br>
signal count should always be decremented.
<br>
<p>Can anyone shine any light on these issues?
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2744.php">Jeff Squyres: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Previous message:</strong> <a href="2742.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2746.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="2746.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="2757.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
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
