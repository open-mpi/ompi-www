<?
$subject_val = "[OMPI users] Best way to communicate a 2d array with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 11:10:57 2014" -->
<!-- isoreceived="20140822151057" -->
<!-- sent="Fri, 22 Aug 2014 11:10:56 -0400" -->
<!-- isosent="20140822151056" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] Best way to communicate a 2d array with Java binding" -->
<!-- id="CA+ssbKUafJ4WBqxCVwfRLx7Y_ZatPW9+tcnXFF0wcE8g+RgLEw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Best way to communicate a 2d array with Java binding<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-22 11:10:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25131.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Previous message:</strong> <a href="25129.php">Ralph Castain: "Re: [OMPI users] long initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25131.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25131.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25135.php">Rob Latham: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've a quick question about the usage of Java binding.
<br>
<p>Say there's a 2 dimensional double array (size m x n) that needs to be sent
<br>
to another rank. I see two options to get this done,
<br>
<p>1. Copy values to a direct buffer of size m*n and send it
<br>
2. Copy values to a 1D array of size m*n and send it
<br>
<p>I guess 2 would internally do the copying to a buffer and use it, so
<br>
suggesting 1. is the best option. Is this the case or is there a better way
<br>
to do this?
<br>
<p><p>Thank you,
<br>
Saliya
<br>
<pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25130/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25131.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Previous message:</strong> <a href="25129.php">Ralph Castain: "Re: [OMPI users] long initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25131.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25131.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25135.php">Rob Latham: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
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
