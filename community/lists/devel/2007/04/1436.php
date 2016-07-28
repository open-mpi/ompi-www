<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 12:09:38 2007" -->
<!-- isoreceived="20070418160938" -->
<!-- sent="Wed, 18 Apr 2007 12:09:29 -0400" -->
<!-- isosent="20070418160929" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] replace 'atoi' with 'strtol'" -->
<!-- id="19A00201-6F3D-488A-860B-DE5083352F85_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-18 12:09:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1437.php">Brian W. Barrett: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1435.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1434.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1439.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1439.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's not only a style issue. There are at least 2 valid reasons to  
<br>
keep the cast explicit.
<br>
<p>1. If [somehow] something goes wrong it's a lot simpler to bash a  
<br>
fellow developer than send a request for support to one of the  
<br>
compiler development team.
<br>
<p>2. Some compilers don't like the implicit cast. Usually they cope  
<br>
with the side effects but when the int and long don't have the same  
<br>
length (which is usually the case on 64 bits architectures) they  
<br>
generate an error.
<br>
<p>So, either we add the explicit cast from the beginning or I will have  
<br>
to add it next time I compile on Windows ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 18, 2007, at 11:54 AM, Roland Dreier wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Because the target variable is an (int).
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1436/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1437.php">Brian W. Barrett: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1435.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1434.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1439.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1439.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
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
