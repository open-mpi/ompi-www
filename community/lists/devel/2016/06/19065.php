<?
$subject_val = "Re: [OMPI devel] BTL flags";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 21:19:58 2016" -->
<!-- isoreceived="20160603011958" -->
<!-- sent="Thu, 02 Jun 2016 19:19:50 -0600" -->
<!-- isosent="20160603011950" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL flags" -->
<!-- id="6055EF8B-9ED0-4571-BAD3-74CE6ED8171E_at_me.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMJJpkWqHW4Z6i4KrnHsc0EZgE95AMQj0RFwbLvCkcVaJwEjnw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL flags<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-02 21:19:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19066.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19064.php">George Bosilca: "[OMPI devel] BTL flags"</a>
<li><strong>In reply to:</strong> <a href="19064.php">George Bosilca: "[OMPI devel] BTL flags"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Opps, my compiler didn&#226;&#128;&#153;t catch that. Will fix that now.
<br>
<p><span class="quotelev1">&gt; On Jun 2, 2016, at 7:07 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see a lot of [for once valid] complains from clang regarding the last UGNI related commit. More precisely the MCA_BTL_ATOMIC_SUPPORTS_FLOAT value is too large with respect to the fact that ISO C restricts a enum to int.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can we pack the enums ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/opal/mca/btl/btl.h:326:5: warning: ISO C restricts enumerator values to range of 'int'
</span><br>
<span class="quotelev1">&gt;       (2147483648 is too large) [-Wpedantic]
</span><br>
<span class="quotelev1">&gt;     MCA_BTL_ATOMIC_SUPPORTS_FLOAT  = 0x80000000,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19064.php">http://www.open-mpi.org/community/lists/devel/2016/06/19064.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19065/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19066.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19064.php">George Bosilca: "[OMPI devel] BTL flags"</a>
<li><strong>In reply to:</strong> <a href="19064.php">George Bosilca: "[OMPI devel] BTL flags"</a>
<!-- nextthread="start" -->
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
