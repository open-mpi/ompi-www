<?
$subject_val = "Re: [OMPI devel] VT integration: make distclean problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 06:50:55 2008" -->
<!-- isoreceived="20080212115055" -->
<!-- sent="Tue, 12 Feb 2008 12:52:47 +0100" -->
<!-- isosent="20080212115247" -->
<!-- name="Andreas Kn&#252;pfer" -->
<!-- email="andreas.knuepfer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT integration: make distclean problem" -->
<!-- id="200802121252.47510.andreas.knuepfer_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E54C4648-8263-419D-8FAD-B8A5FFC47149_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT integration: make distclean problem<br>
<strong>From:</strong> Andreas Kn&#252;pfer (<em>andreas.knuepfer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 06:52:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3197.php">Matthias Jurenz: "Re: [OMPI devel] Something wrong with vt?"</a>
<li><strong>Previous message:</strong> <a href="3195.php">Matthias Jurenz: "Re: [OMPI devel] Fixlet for config/ompi_contrib.m4"</a>
<li><strong>In reply to:</strong> <a href="3181.php">Josh Hursey: "[OMPI devel] VT integration: make distclean problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3204.php">Josh Hursey: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Reply:</strong> <a href="3204.php">Josh Hursey: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday 11 February 2008, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; I've been noticing another problem with the VT integration. If you do
</span><br>
<span class="quotelev1">&gt; a &quot;./configure --enable-contrib-no-build=vt&quot; a subsequent 'make
</span><br>
<span class="quotelev1">&gt; distclean' will fail in contrib/vt. The 'make distclean' will succeed
</span><br>
<span class="quotelev1">&gt; with VT enabled (default).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>hm, tricky. I guess it is about the 'make dist' functionality. All others 
<br>
like 'make distclean' etc. are only assisting functionality for 'make dist' 
<br>
after all.
<br>
<p>And for 'make dist' you need to have everything configured that is going to be 
<br>
part of the distribution. Therefore, VT needs to be part of the tarball, so 
<br>
you can disable it at build time. It would not work the other way around.
<br>
<p>So in my opinion, the current status is what we want to have. Are there any 
<br>
problems when configuring VT, then building the tarball with VT and disabling 
<br>
it once you build Open MPI from the tarball?
<br>
<p>Regards, Andreas
<br>
<p><pre>
-- 
Dipl. Math. Andreas Knuepfer, 
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A114, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-38323, fax +49-351-463-37773

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3196/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3197.php">Matthias Jurenz: "Re: [OMPI devel] Something wrong with vt?"</a>
<li><strong>Previous message:</strong> <a href="3195.php">Matthias Jurenz: "Re: [OMPI devel] Fixlet for config/ompi_contrib.m4"</a>
<li><strong>In reply to:</strong> <a href="3181.php">Josh Hursey: "[OMPI devel] VT integration: make distclean problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3204.php">Josh Hursey: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Reply:</strong> <a href="3204.php">Josh Hursey: "Re: [OMPI devel] VT integration: make distclean problem"</a>
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
