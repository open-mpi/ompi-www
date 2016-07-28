<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 00:32:02 2010" -->
<!-- isoreceived="20101124053202" -->
<!-- sent="Wed, 24 Nov 2010 00:32:06 -0500" -->
<!-- isosent="20101124053206" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="1290576726.29453.27.camel_at_godzilla" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4CEC9C0C.2040807_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>Sebastien.Boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 00:32:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8719.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8717.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8717.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8719.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8719.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, Ray version 0.1.0 and below are not fully-compliant with MPI 2.2.
<br>
<p>I will release Ray 1.0.0 as soon as my regression tests are done. That
<br>
should be tomorrow.
<br>
<p><p><p><p>Le mercredi 24 novembre 2010 &#195;&#160; 00:01 -0500, Christopher Samuel a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 24/11/10 09:17, S&#195;&#169;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As Mr. George Bosilca underlined, since the same test case works for
</span><br>
<span class="quotelev2">&gt; &gt; small messages, the problem is about congestion of the FIFOs which leads
</span><br>
<span class="quotelev2">&gt; &gt; to resource locking, and as you wrote, deadlock.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm, we've had a report from someone trying to use Ray on
</span><br>
<span class="quotelev1">&gt; our BG/P that they've seen it lock up - is it likely to be
</span><br>
<span class="quotelev1">&gt; the same issue ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt;  Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;  VLSCI - Victorian Life Sciences Computational Initiative
</span><br>
<span class="quotelev1">&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.10 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAkzsnAwACgkQO2KABBYQAh8aHQCeOPEU5i4En0YPURSqb9tR3uQO
</span><br>
<span class="quotelev1">&gt; tR4An1sJ0H6Zn6Pxot2c364bHDmNLhGe
</span><br>
<span class="quotelev1">&gt; =p1TT
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
M. S&#195;&#169;bastien Boisvert
&#195;&#137;tudiant au doctorat en physiologie-endocrinologie &#195;&#160; l'Universit&#195;&#169; Laval
Boursier des Instituts de recherche en sant&#195;&#169; du Canada
&#195;&#137;quipe du Professeur Jacques Corbeil
Centre de recherche en infectiologie de l'Universit&#195;&#169; Laval
Local R-61B
2705, boulevard Laurier
Qu&#195;&#169;bec, Qu&#195;&#169;bec
Canada G1V 4G2
T&#195;&#169;l&#195;&#169;phone: 418 525 4444 46342
Courriel: SEB_at_[hidden]
Web: <a href="http://boisvert.info">http://boisvert.info</a>
&quot;Innovation comes only from an assault on the unknown&quot; -Sydney Brenner
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8719.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8717.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8717.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8719.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8719.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
