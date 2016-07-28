<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 11:54:28 2007" -->
<!-- isoreceived="20070418155428" -->
<!-- sent="Wed, 18 Apr 2007 08:54:12 -0700" -->
<!-- isosent="20070418155412" -->
<!-- name="Roland Dreier" -->
<!-- email="rdreier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] replace 'atoi' with 'strtol'" -->
<!-- id="adafy6xy8yj.fsf_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="41F698DD-CC89-4228-B2E0-D588797EF2F6_at_cisco.com" -->
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
<strong>Date:</strong> 2007-04-18 11:54:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1435.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1433.php">Andrew Lumsdaine: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1432.php">Jeff Squyres: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1436.php">George Bosilca: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1436.php">George Bosilca: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1437.php">Brian W. Barrett: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1438.php">Paul H. Hargrove: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt; Because the target variable is an (int).
</span><br>
<p>If I were writing the code, I would leave the cast out.  By assigning
<br>
the value to an int variable, you get the same effect anyway, so the
<br>
cast is redundant.  And if you ever change the variable to a long, now
<br>
you have to remember to delete the cast too.  So I don't see any
<br>
upside to having the cast.
<br>
<p>But it's just a minor style issue...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1435.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1433.php">Andrew Lumsdaine: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1432.php">Jeff Squyres: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1436.php">George Bosilca: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1436.php">George Bosilca: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1437.php">Brian W. Barrett: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1438.php">Paul H. Hargrove: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
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
