<?
$subject_val = "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 10:58:36 2008" -->
<!-- isoreceived="20080917145836" -->
<!-- sent="Wed, 17 Sep 2008 16:58:32 +0200" -->
<!-- isosent="20080917145832" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?" -->
<!-- id="48D11B18.60501_at_rz.rwth-aachen.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="48D10FAE.9070606_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 10:58:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6579.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6577.php">Gregory D Abram: "[OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>In reply to:</strong> <a href="6575.php">Rolf vandeVaart: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6582.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rolf,
<br>
<p>Rolf vandeVaart wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; I don't know -- this sounds like an issue with the Sun CT 8 build 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process.  It could also be a by-product of using the combined 32/64 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; feature...?  I haven't used that in forever and I don't remember the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restrictions.  Terry/Rolf -- can you comment?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will write an separate eMail to ct-feedback_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Hi Paul:
</span><br>
<span class="quotelev1">&gt; Yes, there are Sun people on this list!  We originally put those 
</span><br>
<span class="quotelev1">&gt; hardcoded paths in to make everything work correctly out of the box and 
</span><br>
<span class="quotelev1">&gt; our install process ensured that everything would be at 
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.0.  However, let us take a look at everything that was 
</span><br>
<span class="quotelev1">&gt; just discussed here and see what we can do.  We will get back to you 
</span><br>
<span class="quotelev1">&gt; shortly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I've just sent an eMail to ct-feedback_at_[hidden] with some explanation of 
<br>
our troubles...
<br>
<p>The main trouble: we wanna to have *both* versions of CT8.0 (for studio 
<br>
and for gnu compiler) installed on same sythems. The RPMs are not 
<br>
relocatable, have same name and installs everything into the same 
<br>
directories... yes, it works out-of-box, but iff just *one* version 
<br>
installed. So, I started to move installations around, asking on these 
<br>
mailing list, setting envvars, and parsing configuretion files....
<br>
<p>I think installing everyting to hard-coded paths is somewhat inflexible. 
<br>
Maybe you may provide relocatable RPMs somewhere in the future?
<br>
<p>But as mentioned above, our main goal is to have both versions of CT on 
<br>
same sythem working.
<br>
<p>Best regards,
<br>
<p>Paul Kapinos
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6578/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6579.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6577.php">Gregory D Abram: "[OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>In reply to:</strong> <a href="6575.php">Rolf vandeVaart: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6582.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
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
