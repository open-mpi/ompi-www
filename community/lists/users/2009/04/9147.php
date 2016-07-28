<?
$subject_val = "Re: [OMPI users] Bogus memcpy or bogus  valgrind record";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 15:41:02 2009" -->
<!-- isoreceived="20090429194102" -->
<!-- sent="Wed, 29 Apr 2009 21:40:54 +0200" -->
<!-- isosent="20090429194054" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bogus memcpy or bogus  valgrind record" -->
<!-- id="49F8AD46.4070403_at_59A2.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AA6E6E2-8309-4888-BCF8-D855FB76FCA4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bogus memcpy or bogus  valgrind record<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 15:40:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9148.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Previous message:</strong> <a href="9146.php">Jeff Squyres: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<li><strong>In reply to:</strong> <a href="9145.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9148.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Reply:</strong> <a href="9148.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; But I'm able to replicate your error (but shouldn't the 2nd buffer be
</span><br>
<span class="quotelev1">&gt; the 1st + size (not 2)?) -- let me dig into it a bit... we definitely
</span><br>
<span class="quotelev1">&gt; shouldn't be getting invalid writes in the convertor, etc.
</span><br>
<p>As Eugene pointed out earlier, it is fine.
<br>
<p>&nbsp;&nbsp;dataloctab = malloc (2 * (procglbnbr + 1) * sizeof (int));
<br>
&nbsp;&nbsp;dataglbtab = dataloctab + 2;
<br>
<p>dataloctab is the 2-element send buffer, dataglbtab is the receive
<br>
buffer of length 2*procglbnbr.
<br>
<p>Jed
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9147/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9148.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Previous message:</strong> <a href="9146.php">Jeff Squyres: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<li><strong>In reply to:</strong> <a href="9145.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9148.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Reply:</strong> <a href="9148.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
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
