<?
$subject_val = "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  1 18:48:58 2012" -->
<!-- isoreceived="20121001224858" -->
<!-- sent="Mon, 1 Oct 2012 18:48:57 -0400" -->
<!-- isosent="20121001224857" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362" -->
<!-- id="A526015B-E438-45D5-BE87-5520D808E10B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMD57ofKbCTPtfPvEKc-phP0vwy4a4av3k0H-JKKj6T-G0DO+A_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-01 18:48:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20354.php">Gib Bogle: "[OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20352.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="../../2012/09/20331.php">Ralph Castain: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 27, 2012, at 11:04 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I would suggest starting at r22500 and trying every 1000 revisions initially. Remember that not every single revision will build and work correctly - this is the developer's trunk and it is occasionally broken for a short while - but shifting a little bit when that happens should solve the problem.
</span><br>
<p>You might want to use a binary-search kind of method.  You know the HEAD is broken.  Go back a long ways and find a version that works.  When you find a version that works, split the difference in r numbers between that good version and the HEAD.  If that's good, split the difference towards the HEAD again.  If it isn't good, split the difference towards the original r number.
<br>
<p>And so on.  This should hypothetically allow you to find the commit that broke the functionality within log(n) steps.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20354.php">Gib Bogle: "[OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20352.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="../../2012/09/20331.php">Ralph Castain: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
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
