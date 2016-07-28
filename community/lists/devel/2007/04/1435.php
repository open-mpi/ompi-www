<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 11:56:46 2007" -->
<!-- isoreceived="20070418155646" -->
<!-- sent="Wed, 18 Apr 2007 08:56:40 -0700" -->
<!-- isosent="20070418155640" -->
<!-- name="Roland Dreier" -->
<!-- email="rdreier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] replace 'atoi' with 'strtol'" -->
<!-- id="adabqhly8uf.fsf_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A0D84B32-C923-4894-8A04-FDD53BDF29A2_at_cs.indiana.edu" -->
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
<strong>From:</strong> Roland Dreier (<em>rdreier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-18 11:56:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1436.php">George Bosilca: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1434.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1433.php">Andrew Lumsdaine: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1434.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt; I.e., it returns a long.  Although some compilers might do the right  
</span><br>
<span class="quotelev1"> &gt; thing, conversions should be explicitly shown.
</span><br>
<p>Isn't the behavior guaranteed by the C standard?  And I can't even
<br>
imagine a way for a compiler to get
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intvar = strtol(foo);
<br>
<p>wrong, and it seems even more implausible that such a bug would be
<br>
cured just by adding a cast to int.
<br>
<p>Maybe you could get the same effect by leaving the cast out and
<br>
wearing a magnetized titanium bracelet while writing the code?
<br>
<p>&nbsp;- R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1436.php">George Bosilca: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1434.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1433.php">Andrew Lumsdaine: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1434.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
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
