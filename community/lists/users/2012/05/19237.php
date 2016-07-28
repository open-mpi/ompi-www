<?
$subject_val = "Re: [OMPI users] MPI_Recv hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 11:43:56 2012" -->
<!-- isoreceived="20120509154356" -->
<!-- sent="Wed, 09 May 2012 17:41:00 +0200" -->
<!-- isosent="20120509154100" -->
<!-- name="Jorge Chiva Segura" -->
<!-- email="jordic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv hangs" -->
<!-- id="1336578060.8607.2659.camel_at_hokuto" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4FA8826F0008D9CB_at_" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Recv hangs<br>
<strong>From:</strong> Jorge Chiva Segura (<em>jordic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 11:41:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19238.php">Shamis, Pavel: "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<li><strong>Previous message:</strong> <a href="19236.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>In reply to:</strong> <a href="19236.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Some memory leaks were solved in 1.4.5. that affects openib, see release notes.
</span><br>
Yes, with 1.4.4 was worse (it hanged in a previous part of the real code
<br>
with communications also involved) but with 1.4.5 it still hangs :( .
<br>
Now I see that in the first post there is another mistake :S , the
<br>
version of OMPI is 1.4.5 . Sorry ^^', one of the thinks that we tested
<br>
before I started this thread was that. It seems that some leak
<br>
remains :S .
<br>
<p><p><p><pre>
-- 
Aquest missatge ha estat analitzat per MailScanner
a la cerca de virus i d'altres continguts perillosos,
i es considera que est&#224; net.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19238.php">Shamis, Pavel: "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<li><strong>Previous message:</strong> <a href="19236.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>In reply to:</strong> <a href="19236.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
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
