<?
$subject_val = "Re: [OMPI devel] Trunk borked";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 05:11:39 2008" -->
<!-- isoreceived="20080129101139" -->
<!-- sent="Tue, 29 Jan 2008 11:11:28 +0100" -->
<!-- isosent="20080129101128" -->
<!-- name="Andreas Kn&#252;pfer" -->
<!-- email="andreas.knuepfer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk borked" -->
<!-- id="200801291111.32489.andreas.knuepfer_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="58F3FA1F-B92E-43DA-82A7-3CD7CBB5CBA5_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk borked<br>
<strong>From:</strong> Andreas Kn&#252;pfer (<em>andreas.knuepfer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 05:11:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3070.php">Tim Prins: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3068.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3066.php">George Bosilca: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3070.php">Tim Prins: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3070.php">Tim Prins: "Re: [OMPI devel] Trunk borked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 29 January 2008, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Look like VT do not correctly compute dependencies. A static build
</span><br>
<span class="quotelev1">&gt; will fails if libz.a is not installed on the system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lz
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[5]: *** [vtfilter] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>this issue should be fixed now, even without additional configure parameters.
<br>
<p><p><pre>
-- 
Dipl. Math. Andreas Knuepfer, 
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A114, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-38323, fax +49-351-463-37773

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3069/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3070.php">Tim Prins: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3068.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3066.php">George Bosilca: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3070.php">Tim Prins: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3070.php">Tim Prins: "Re: [OMPI devel] Trunk borked"</a>
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
