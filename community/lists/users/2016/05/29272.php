<?
$subject_val = "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 22 05:06:10 2016" -->
<!-- isoreceived="20160522090610" -->
<!-- sent="Sun, 22 May 2016 18:06:00 +0900" -->
<!-- isosent="20160522090600" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?" -->
<!-- id="CAAkFZ5uWeG=qKqSkNcWWyVjRSjMLtTDXf64+va1cmSDbL9v0Ug_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDjoxuWTLss9kPHho4P91t9z369PrG3X6CjaAjgYFDYX2g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-22 05:06:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29273.php">Nathan Hjelm: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>Previous message:</strong> <a href="29271.php">dpchoudh .: "[OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>In reply to:</strong> <a href="29271.php">dpchoudh .: "[OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29273.php">Nathan Hjelm: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
this is usually done with
<br>
mpirun --mca &lt;framework&gt;_base_verbose &lt;value&gt;...
<br>
for example
<br>
mpirun --mca btl_base_verbose 100 ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sunday, May 22, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have built and installed OMPI with --enable-debug set. What runtime
</span><br>
<span class="quotelev1">&gt; parameter do I need to see the output from OPAL_DEBUG_OUTPUT?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29272/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29273.php">Nathan Hjelm: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>Previous message:</strong> <a href="29271.php">dpchoudh .: "[OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>In reply to:</strong> <a href="29271.php">dpchoudh .: "[OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29273.php">Nathan Hjelm: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
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
