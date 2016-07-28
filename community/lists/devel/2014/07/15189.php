<?
$subject_val = "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 02:28:14 2014" -->
<!-- isoreceived="20140717062814" -->
<!-- sent="Thu, 17 Jul 2014 08:28:03 +0200" -->
<!-- isosent="20140717062803" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error" -->
<!-- id="53C76CF3.80605_at_tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABwOO=dgWTUb2vBKzCgmwjanSzd7qwY_HpQbR=-HN0Dvbp8j=g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-17 02:28:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15190.php">Gilles Gouaillardet: "Re: [OMPI devel] Onesided failures"</a>
<li><strong>Previous message:</strong> <a href="15188.php">Gilles Gouaillardet: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>In reply to:</strong> <a href="15187.php">Kevin Buckley: "[OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15201.php">Ralph Castain: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>Reply:</strong> <a href="15201.php">Ralph Castain: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/17/2014 06:32 AM, Kevin Buckley wrote:
<br>
<span class="quotelev1">&gt; =&gt; Checking for portability problems in extracted files
</span><br>
<span class="quotelev1">&gt; ERROR: [check-portability.awk] =&gt; Found test ... == ...:
</span><br>
<span class="quotelev1">&gt; ERROR: [check-portability.awk] configure:  if test &quot;$enable_oshmem&quot; ==
</span><br>
<span class="quotelev1">&gt; &quot;yes&quot; -a &quot;$ompi_fortran_happy&quot; == &quot;1&quot; -a \
</span><br>
<p>Autoconf also avoids the '-a' and '-o' flag from 'test' because of 
<br>
portability reasons:
<br>
<p><a href="http://www.hep.by/gnu/autoconf/Limitations-of-Builtins.html#index-g_t_0040command_007btest_007d-1725">http://www.hep.by/gnu/autoconf/Limitations-of-Builtins.html#index-g_t_0040command_007btest_007d-1725</a>
<br>
<p>Bert
<br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: bert.wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15189/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15190.php">Gilles Gouaillardet: "Re: [OMPI devel] Onesided failures"</a>
<li><strong>Previous message:</strong> <a href="15188.php">Gilles Gouaillardet: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>In reply to:</strong> <a href="15187.php">Kevin Buckley: "[OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15201.php">Ralph Castain: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>Reply:</strong> <a href="15201.php">Ralph Castain: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
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
