<?
$subject_val = "Re: [OMPI users] Infiniband performance Problem and stalling";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 04:13:26 2012" -->
<!-- isoreceived="20120828081326" -->
<!-- sent="Tue, 28 Aug 2012 10:13:21 +0200" -->
<!-- isosent="20120828081321" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband performance Problem and stalling" -->
<!-- id="503C7DA1.2090206_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1346120762.63356.YahooMailNeo_at_web121006.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband performance Problem and stalling<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 04:13:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20023.php">清风: "[OMPI users] lwkmpi"</a>
<li><strong>Previous message:</strong> <a href="20021.php">Randolph Pullen: "[OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>In reply to:</strong> <a href="20021.php">Randolph Pullen: "[OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20058.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20058.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Randolph,
<br>
after reading this:
<br>
<p>On 08/28/12 04:26, Randolph Pullen wrote:
<br>
<span class="quotelev1">&gt; - On occasions it seems to stall indefinately, waiting on a single receive.
</span><br>
<p>... I would make a blind guess: are you aware about IB card parameters for 
<br>
registered memory?
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
<br>
<p>&quot;Waiting forever&quot; for a single operation is one of symptoms of the problem 
<br>
especially in 1.5.3.
<br>
<p><p>best,
<br>
Paul
<br>
<p>P.S. the lower performance with 'big' chinks is known phenomenon, cf.
<br>
<a href="http://www.scl.ameslab.gov/netpipe/">http://www.scl.ameslab.gov/netpipe/</a>
<br>
(image on bottom of the page). But the chunk size of 64k is fairly small
<br>
<p><p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20022/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20023.php">清风: "[OMPI users] lwkmpi"</a>
<li><strong>Previous message:</strong> <a href="20021.php">Randolph Pullen: "[OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>In reply to:</strong> <a href="20021.php">Randolph Pullen: "[OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20058.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20058.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
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
