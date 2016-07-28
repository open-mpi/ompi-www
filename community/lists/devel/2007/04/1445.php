<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 16:57:47 2007" -->
<!-- isoreceived="20070418205747" -->
<!-- sent="Wed, 18 Apr 2007 16:57:37 -0400" -->
<!-- isosent="20070418205737" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] replace 'atoi' with 'strtol'" -->
<!-- id="209D716E-2A3C-4D19-81AE-359C8F2835E2_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="adahcrdwieg.fsf_at_cisco.com" -->
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
<strong>Date:</strong> 2007-04-18 16:57:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1446.php">pooja_at_[hidden]: "[OMPI devel] Need help for semaphore in BML"</a>
<li><strong>Previous message:</strong> <a href="1444.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1442.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1437.php">Brian W. Barrett: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I really don't want to go that far. I already had to deal with the  
<br>
bool to int conversion in exactly this way. And changing it all over  
<br>
the code, was a mess. As the simple explicit cast is enough to keep  
<br>
happy the VC compiler, I propose we stick with it. It's less  
<br>
intrusive, impose less [unusual] things to the developers, and still  
<br>
give us the benefit of allowing Open MPI to get compiled on Windows.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 18, 2007, at 4:13 PM, Roland Dreier wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The main problem came from the fact that if we want to use our
</span><br>
<span class="quotelev2">&gt;&gt; modular approach on Windows (DLL loaded at runtime) we have to
</span><br>
<span class="quotelev2">&gt;&gt; compile in C++ mode. The C++ compiler consider the types int and long
</span><br>
<span class="quotelev2">&gt;&gt; as being different (even if they have the same number of bytes). No
</span><br>
<span class="quotelev2">&gt;&gt; implicit cast is allowed by the VC compiler when in C++ mode.
</span><br>
<span class="quotelev2">&gt;&gt; Therefore, we have to force an explicit cast everywhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see... so the right way to right this is really:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	#ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; 	#define ompi_cast_to_int(x) static_cast&lt;int&gt;(x)
</span><br>
<span class="quotelev1">&gt; 	#else
</span><br>
<span class="quotelev1">&gt; 	#define ompi_cast_to_int(x) (x)
</span><br>
<span class="quotelev1">&gt; 	#endif
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 		intval = ompi_cast_to_int(stroul(foo));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right? ;)
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1445/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1446.php">pooja_at_[hidden]: "[OMPI devel] Need help for semaphore in BML"</a>
<li><strong>Previous message:</strong> <a href="1444.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1442.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1437.php">Brian W. Barrett: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
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
