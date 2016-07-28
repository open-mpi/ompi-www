<?
$subject_val = "[OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 24 16:35:33 2015" -->
<!-- isoreceived="20151224213533" -->
<!-- sent="Thu, 24 Dec 2015 21:35:31 +0000" -->
<!-- isosent="20151224213531" -->
<!-- name="Platzer, Peter" -->
<!-- email="pplatzer_at_[hidden]" -->
<!-- subject="[OMPI users] gcc 5 compiler does not like variable argument functions -&amp;gt; config fails when checking for ISO C99 ability" -->
<!-- id="BEB99B20-D15B-4AA3-A988-8522CCC2D55C_at_hbs.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="118CF1BA-D1B0-4B95-95E8-E0D303B39893_at_hbs.edu" -->
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
<strong>Subject:</strong> [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability<br>
<strong>From:</strong> Platzer, Peter (<em>pplatzer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-24 16:35:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28205.php">Gilles Gouaillardet: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<li><strong>Previous message:</strong> <a href="28203.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28205.php">Gilles Gouaillardet: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<li><strong>Reply:</strong> <a href="28205.php">Gilles Gouaillardet: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>
I&#226;&#128;&#153;ve posted the details here on StackOverflow as well, including how to reproduce. <a href="http://stackoverflow.com/questions/34457801/error-with-gcc-5-for-varargs-function-suffix-or-operands-invalid-for-movq">http://stackoverflow.com/questions/34457801/error-with-gcc-5-for-varargs-function-suffix-or-operands-invalid-for-movq</a>
<br>

<br>
Environment: Mac OS El Capitan
<br>
OpenMPI 1.10
<br>
GCC 5.3
<br>

<br>
configure fails when checking for ISO C99 compatibility. I traced it down to gcc 5 not compiling variable argument functions.
<br>

<br>
This problem does not exist when using gcc 4.9
<br>

<br>

<br>
Cheers,
<br>

<br>
Peter
<br>
___________________
<br>
Peter Platzer (HBS)
<br>
pplatzer_at_[hidden]&lt;mailto:pplatzer_at_[hidden]&gt;
<br>
Skype: Peter53129
<br>

<br>

<br>

<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28204/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28205.php">Gilles Gouaillardet: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<li><strong>Previous message:</strong> <a href="28203.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28205.php">Gilles Gouaillardet: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<li><strong>Reply:</strong> <a href="28205.php">Gilles Gouaillardet: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
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
