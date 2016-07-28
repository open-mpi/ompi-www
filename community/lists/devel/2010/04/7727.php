<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 11 20:48:23 2010" -->
<!-- isoreceived="20100412004823" -->
<!-- sent="Mon, 12 Apr 2010 10:48:16 +1000" -->
<!-- isosent="20100412004816" -->
<!-- name="Chris Samuel" -->
<!-- email="chris_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BC26DD0.8070102_at_csamuel.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="j2nc609bc801004092212rdfd9a550td36252cb74332f47_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> Chris Samuel (<em>chris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-11 20:48:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7728.php">Chris Samuel: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7726.php">Ashley Pittman: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7724.php">Bogdan Costescu: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7726.php">Ashley Pittman: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/04/10 15:12, Bogdan Costescu wrote:
<br>
<p><span class="quotelev1">&gt; Have there been any process scheduler changes in the newer kernels ?
</span><br>
<p>Are there ever kernels where that doesn't get tweaked ? ;-)
<br>
<p><span class="quotelev1">&gt; I'm not sure that they could explain four orders of magnitude
</span><br>
<span class="quotelev1">&gt; differences though...
</span><br>
<p>One idea that comes to mind would be to run the child processes
<br>
under strace -c as that will monitor all the system calls and
<br>
report how long is spent in which.   By running a comparison
<br>
with 2.6.23 and 2.6.24 then you might get a pointer to which
<br>
syscall(s) are taking longer.
<br>
<p>Alternatively if you want to get fancy then you could play
<br>
with doing a git bisection between 2.6.23 and 2.6.24 to track
<br>
down the commit that introduces the regression.
<br>
<p>To be honest it'd be interesting to see whether the issue still
<br>
manifests on a recent kernel though, if so then perhaps we might
<br>
be able to get the kernel developers interested (though they will
<br>
likely ask for a bisection too).
<br>
<p>cheers!
<br>
Chris
<br>
<pre>
-- 
  Chris Samuel  :  <a href="http://www.csamuel.org/">http://www.csamuel.org/</a>  :  Melbourne, VIC
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7728.php">Chris Samuel: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7726.php">Ashley Pittman: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7724.php">Bogdan Costescu: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7726.php">Ashley Pittman: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
