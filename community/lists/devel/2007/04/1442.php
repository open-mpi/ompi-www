<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 16:13:17 2007" -->
<!-- isoreceived="20070418201317" -->
<!-- sent="Wed, 18 Apr 2007 13:13:11 -0700" -->
<!-- isosent="20070418201311" -->
<!-- name="Roland Dreier" -->
<!-- email="rdreier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] replace 'atoi' with 'strtol'" -->
<!-- id="adahcrdwieg.fsf_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="42D69BDB-6EE2-44F6-AD93-F4BD4B871ED9_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-04-18 16:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1443.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1441.php">Adrian Knoth: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1440.php">George Bosilca: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1444.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1444.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1445.php">George Bosilca: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt; The main problem came from the fact that if we want to use our
</span><br>
<span class="quotelev1"> &gt; modular approach on Windows (DLL loaded at runtime) we have to
</span><br>
<span class="quotelev1"> &gt; compile in C++ mode. The C++ compiler consider the types int and long
</span><br>
<span class="quotelev1"> &gt; as being different (even if they have the same number of bytes). No
</span><br>
<span class="quotelev1"> &gt; implicit cast is allowed by the VC compiler when in C++ mode.
</span><br>
<span class="quotelev1"> &gt; Therefore, we have to force an explicit cast everywhere.
</span><br>
<p>I see... so the right way to right this is really:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#ifdef __cplusplus
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define ompi_cast_to_int(x) static_cast&lt;int&gt;(x)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define ompi_cast_to_int(x) (x)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intval = ompi_cast_to_int(stroul(foo));
<br>
<p>Right? ;)
<br>
<p>&nbsp;- R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1443.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1441.php">Adrian Knoth: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1440.php">George Bosilca: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1444.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1444.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1445.php">George Bosilca: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
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
