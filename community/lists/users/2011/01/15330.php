<?
$subject_val = "Re: [OMPI users] CQ errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 10 11:51:39 2011" -->
<!-- isoreceived="20110110165139" -->
<!-- sent="Mon, 10 Jan 2011 17:51:20 +0100" -->
<!-- isosent="20110110165120" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CQ errors" -->
<!-- id="201101101751.34041.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTimxv7Vu=AH9=KSgo04+icOC07ssuRCFvJ9gaUGU_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CQ errors<br>
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-10 11:51:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15331.php">Michael Di Domenico: "Re: [OMPI users] CQ errors"</a>
<li><strong>Previous message:</strong> <a href="15329.php">Michael Di Domenico: "[OMPI users] CQ errors"</a>
<li><strong>In reply to:</strong> <a href="15329.php">Michael Di Domenico: "[OMPI users] CQ errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15331.php">Michael Di Domenico: "Re: [OMPI users] CQ errors"</a>
<li><strong>Reply:</strong> <a href="15331.php">Michael Di Domenico: "Re: [OMPI users] CQ errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday, January 10, 2011 03:06:06 pm Michael Di Domenico wrote:
<br>
<span class="quotelev1">&gt; I'm not sure if these are being reported from OpenMPI or through
</span><br>
<span class="quotelev1">&gt; OpenMPI from OpenFabrics, but i figured this would be a good place to
</span><br>
<span class="quotelev1">&gt; start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On one node we received the below errors, i'm not sure i under the
</span><br>
<span class="quotelev1">&gt; error sequence, hopefully someone can shed some light on what
</span><br>
<span class="quotelev1">&gt; happened.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [[5691,1],49][btl_openib_component.c:3294:handle_wc] from node27 to:
</span><br>
...
<br>
<span class="quotelev1">&gt; network is qlogic qdr end to end, openmpi 1.5 and ofed 1.5.2 (q stack)
</span><br>
<p>Not really addressing your problem, but, with qlogic you should be using psm, 
<br>
not verbs (btl_openib).
<br>
<p>That said, openib should work (slowly).
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15330/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15331.php">Michael Di Domenico: "Re: [OMPI users] CQ errors"</a>
<li><strong>Previous message:</strong> <a href="15329.php">Michael Di Domenico: "[OMPI users] CQ errors"</a>
<li><strong>In reply to:</strong> <a href="15329.php">Michael Di Domenico: "[OMPI users] CQ errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15331.php">Michael Di Domenico: "Re: [OMPI users] CQ errors"</a>
<li><strong>Reply:</strong> <a href="15331.php">Michael Di Domenico: "Re: [OMPI users] CQ errors"</a>
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
