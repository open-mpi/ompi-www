<?
$subject_val = "Re: [OMPI devel] pointer_array";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 16 18:19:05 2007" -->
<!-- isoreceived="20071216231905" -->
<!-- sent="Sun, 16 Dec 2007 18:18:56 -0500" -->
<!-- isosent="20071216231856" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pointer_array" -->
<!-- id="9D11309E-D70D-446D-8B75-6A427ED645C8_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220712152101t5b16feebu45183b7f6c8a8e6d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] pointer_array<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-16 18:18:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2866.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>Previous message:</strong> <a href="2864.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>In reply to:</strong> <a href="2862.php">Tim Mattox: "Re: [OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2868.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Reply:</strong> <a href="2868.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Reply:</strong> <a href="2869.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right, I wonder why it didn't show in the patch file. Anyway, it  
<br>
completely remove the orte_pointer_array.[ch] as well as the  
<br>
ompi_pointer_array.[ch] file.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 16, 2007, at 12:01 AM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; The patch looks good to my eyeballs, though I've not done any  
</span><br>
<span class="quotelev1">&gt; testing with it.
</span><br>
<span class="quotelev1">&gt; I presume a follow on patch would remove the orte_pointer_array.[ch]  
</span><br>
<span class="quotelev1">&gt; files?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2007 4:01 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have a patch that unify the pointer array implementations into just
</span><br>
<span class="quotelev2">&gt;&gt; one. Right now, we have 2 pointer array implementations: one for ORTE
</span><br>
<span class="quotelev2">&gt;&gt; and one for OMPI. The differences are small and mostly insignificant
</span><br>
<span class="quotelev2">&gt;&gt; (there is no way to add more than 2^31 elements in the pointer array
</span><br>
<span class="quotelev2">&gt;&gt; anyway). The following patch propose to merge these two pointer array
</span><br>
<span class="quotelev2">&gt;&gt; into one, implemented in OPAL (and called opal_pointer_array).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If nobody has complained before Wednesday noon I'll commit the patch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2865/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2866.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>Previous message:</strong> <a href="2864.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>In reply to:</strong> <a href="2862.php">Tim Mattox: "Re: [OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2868.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Reply:</strong> <a href="2868.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Reply:</strong> <a href="2869.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
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
