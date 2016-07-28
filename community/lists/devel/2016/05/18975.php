<?
$subject_val = "Re: [OMPI devel] Process connectivity map";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 15 10:20:17 2016" -->
<!-- isoreceived="20160515142017" -->
<!-- sent="Sun, 15 May 2016 23:20:16 +0900" -->
<!-- isosent="20160515142016" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Process connectivity map" -->
<!-- id="CAAkFZ5vQXF4vZjA_FL67VzFqBc3t80UYdenayzy=a30UrTR+=Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDgUZFQx8=HqimohDVrjNokGvK73-8D5qYF0CcqGb5BQBw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Process connectivity map<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-15 10:20:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18976.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18974.php">dpchoudh .: "[OMPI devel] Misleading error messages?"</a>
<li><strong>In reply to:</strong> <a href="18973.php">dpchoudh .: "[OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18976.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Reply:</strong> <a href="18976.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
did you check the add_procs callbacks ?
<br>
(e.g. mca_btl_tcp_add_procs() for the tcp btl)
<br>
this is where the reachable bitmap is set, and I guess this is what you are
<br>
looking for.
<br>
<p>keep in mind that if several btl can be used, the one with the higher
<br>
exclusivity is used
<br>
(e.g. tcp is never used if openib is available)
<br>
you can simply force your btl and self, and the ob1 pml, so you do not have
<br>
to worry about other btl exclusivity.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sunday, May 15, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been struggling with this issue for a while and figured it might be
</span><br>
<span class="quotelev1">&gt; a good idea to ask for help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where (in the code path) is the connectivity map created?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can see that it is *used* in mca_bml_r2_endpoint_add_btl(), but
</span><br>
<span class="quotelev1">&gt; obviously I am not setting it up right, because this routine is not finding
</span><br>
<span class="quotelev1">&gt; the BTL corresponding to my interconnect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and quit
</span><br>
<span class="quotelev1">&gt; ageing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18975/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18976.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18974.php">dpchoudh .: "[OMPI devel] Misleading error messages?"</a>
<li><strong>In reply to:</strong> <a href="18973.php">dpchoudh .: "[OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18976.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Reply:</strong> <a href="18976.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
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
