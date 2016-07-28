<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 16:16:00 2007" -->
<!-- isoreceived="20070418201600" -->
<!-- sent="Wed, 18 Apr 2007 13:15:55 -0700" -->
<!-- isosent="20070418201555" -->
<!-- name="Roland Dreier" -->
<!-- email="rdreier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] replace 'atoi' with 'strtol'" -->
<!-- id="adad521wi9w.fsf_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070418193422.GV5672_at_drcomp.erfurt.thur.de" -->
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
<strong>Date:</strong> 2007-04-18 16:15:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1444.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1442.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1441.php">Adrian Knoth: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1442.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt; How about (u)int32_t? When I was an Ada programmer, subtypes with the
</span><br>
<span class="quotelev1"> &gt; approriate range were always encouraged (i.e.: define the semantical
</span><br>
<span class="quotelev1"> &gt; range and let the compiler/runtime library warn you on range
</span><br>
<span class="quotelev1"> &gt; violations (the well-known &quot;CONSTRAINT_ERROR&quot;))
</span><br>
<p>It's OK to use a type with a fixed size when there is some real reason
<br>
that you know exactly how many bits you need, but in my opinion it's
<br>
much better to use plain int whenever possible.  Otherwise you end up
<br>
in a mess when different functions have parameters of different widths
<br>
for no good reason, and you're also taking away the compiler's choice
<br>
to use the most efficient size of integer.
<br>
<p>&nbsp;- R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1444.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1442.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1441.php">Adrian Knoth: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1442.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
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
