<?
$subject_val = "Re: [OMPI users] Why? MPI_Scatter problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 11:48:53 2010" -->
<!-- isoreceived="20101213164853" -->
<!-- sent="Mon, 13 Dec 2010 17:48:48 +0100" -->
<!-- isosent="20101213164848" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why? MPI_Scatter problem" -->
<!-- id="AANLkTik+aWHyfmP+GcQtzqqwFma5c0bjLm7+Wrhji9cM_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTimfZSq9=eUFXJgKym0WLc2Etc+=759PzW3Tozb8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why? MPI_Scatter problem<br>
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 11:48:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15109.php">David Mathog: "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu"</a>
<li><strong>Previous message:</strong> <a href="15107.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>In reply to:</strong> <a href="15103.php">Kechagias Apostolos: "[OMPI users] Why? MPI_Scatter problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15110.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Dec 13, 2010 at 4:57 PM, Kechagias Apostolos
<br>
&lt;pasxal.antix_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have the code that is in the attachment.
</span><br>
<span class="quotelev1">&gt; Can anybody explain how to use scatter function?
</span><br>
<p>MPI_Scatter receives the data in the initial segment of the given
<br>
buffer. (The receiving buffer needs to be 1/Nth of the send buffer.)
<br>
<p>So, in your code, it's always start=0 and end=(N1-1) independently of the rank.
<br>
<p>Best regards,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15109.php">David Mathog: "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu"</a>
<li><strong>Previous message:</strong> <a href="15107.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>In reply to:</strong> <a href="15103.php">Kechagias Apostolos: "[OMPI users] Why? MPI_Scatter problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15110.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
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
