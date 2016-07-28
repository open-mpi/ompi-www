<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 13:17:02 2007" -->
<!-- isoreceived="20070418171702" -->
<!-- sent="Wed, 18 Apr 2007 13:16:54 -0400" -->
<!-- isosent="20070418171654" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] replace 'atoi' with 'strtol'" -->
<!-- id="42D69BDB-6EE2-44F6-AD93-F4BD4B871ED9_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ada3b2xy5p6.fsf_at_cisco.com" -->
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
<strong>Date:</strong> 2007-04-18 13:16:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1441.php">Adrian Knoth: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1439.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1439.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1441.php">Adrian Knoth: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1441.php">Adrian Knoth: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1442.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's right, long and int have the same size on Windows 32 and 64  
<br>
bits (always 32 bits). However, they are considered as being  
<br>
different types (!!!).
<br>
<p>The main problem came from the fact that if we want to use our  
<br>
modular approach on Windows (DLL loaded at runtime) we have to  
<br>
compile in C++ mode. The C++ compiler consider the types int and long  
<br>
as being different (even if they have the same number of bytes). No  
<br>
implicit cast is allowed by the VC compiler when in C++ mode.  
<br>
Therefore, we have to force an explicit cast everywhere.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 18, 2007, at 1:04 PM, Roland Dreier wrote:
<br>
<p><span class="quotelev2">&gt;&gt; So, either we add the explicit cast from the beginning or I will have
</span><br>
<span class="quotelev2">&gt;&gt; to add it next time I compile on Windows ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought the problem with Windows was that long was always 32 bits
</span><br>
<span class="quotelev1">&gt; (the same size as int) even on 64-bit platforms?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - R.
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1440/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1441.php">Adrian Knoth: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1439.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1439.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1441.php">Adrian Knoth: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1441.php">Adrian Knoth: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1442.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
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
