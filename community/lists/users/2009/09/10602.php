<?
$subject_val = "[OMPI users] undefined symbol error when built as a shared library";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 03:24:38 2009" -->
<!-- isoreceived="20090910072438" -->
<!-- sent="Thu, 10 Sep 2009 16:24:28 +0900" -->
<!-- isosent="20090910072428" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="[OMPI users] undefined symbol error when built as a shared library" -->
<!-- id="4AA8A9AC.6030100_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] undefined symbol error when built as a shared library<br>
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-10 03:24:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10603.php">Dennis Luxen: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<li><strong>Previous message:</strong> <a href="10601.php">Jean Potsam: "[OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10605.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<li><strong>Reply:</strong> <a href="10605.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings all,
<br>
<p>My parallel application is build as a shared library (libParallel.so). 
<br>
(I use Debian Lenny 64bit).
<br>
&nbsp;A webservice is used to dynamically load libParallel.so and inturn 
<br>
execute the parallel process .
<br>
<p>But during runtime I get the error :
<br>
<p>webservicestub: symbol lookup error: 
<br>
/usr/local/lib/openmpi/mca_paffinity_linux.so: undefined symbol: 
<br>
mca_base_param_reg_int
<br>
<p>which I cannot figure out.I followed every 'ldd' and 'nm' seems 
<br>
everything is fine.
<br>
So I compiled and tested my parallel code as an executable and then it 
<br>
worked fine.
<br>
<p>What could be the reason for this?
<br>
<p>Thanks in advance,
<br>
umanga
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10603.php">Dennis Luxen: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<li><strong>Previous message:</strong> <a href="10601.php">Jean Potsam: "[OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10605.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<li><strong>Reply:</strong> <a href="10605.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
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
