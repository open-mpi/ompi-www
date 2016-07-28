<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 12:18:53 2007" -->
<!-- isoreceived="20070418161853" -->
<!-- sent="Wed, 18 Apr 2007 10:18:47 -0600 (MDT)" -->
<!-- isosent="20070418161847" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] replace 'atoi' with 'strtol'" -->
<!-- id="24301.128.165.0.81.1176913127.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="adafy6xy8yj.fsf_at_cisco.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-18 12:18:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1438.php">Paul H. Hargrove: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1436.php">George Bosilca: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1434.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1438.php">Paul H. Hargrove: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;  &gt; Because the target variable is an (int).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I were writing the code, I would leave the cast out.  By assigning
</span><br>
<span class="quotelev1">&gt; the value to an int variable, you get the same effect anyway, so the
</span><br>
<span class="quotelev1">&gt; cast is redundant.  And if you ever change the variable to a long, now
</span><br>
<span class="quotelev1">&gt; you have to remember to delete the cast too.  So I don't see any
</span><br>
<span class="quotelev1">&gt; upside to having the cast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it's just a minor style issue...
</span><br>
<p>I agree 100% with Roland on this one.  There's a reason that compilers
<br>
don't complain about this particular cast.  Casting from integer type to
<br>
integer type just isn't a big deal in my book.
<br>
<p>Of course,I generally try to avoid casts at all costs, since they tend to
<br>
cover real issues (see all the evil casts of long* to int* that have
<br>
screwed us continually with 64 bit big endian machines.
<br>
<p>But I don't care enough to argue the point :).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1438.php">Paul H. Hargrove: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1436.php">George Bosilca: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1434.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1438.php">Paul H. Hargrove: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
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
