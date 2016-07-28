<?
$subject_val = "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 22 10:55:52 2016" -->
<!-- isoreceived="20160522145552" -->
<!-- sent="Sun, 22 May 2016 08:55:43 -0600" -->
<!-- isosent="20160522145543" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?" -->
<!-- id="E8E35609-293E-4EFB-8539-9E108E5B3454_at_me.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDjoxuWTLss9kPHho4P91t9z369PrG3X6CjaAjgYFDYX2g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-22 10:55:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29274.php">dpchoudh .: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>Previous message:</strong> <a href="29272.php">Gilles Gouaillardet: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>In reply to:</strong> <a href="29271.php">dpchoudh .: "[OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29274.php">dpchoudh .: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>Reply:</strong> <a href="29274.php">dpchoudh .: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You use the *_base_verbose MCA variables. For example, if you want to see output from the btl use -mca btl_base_verbose x. The number x controls the verbosity level. Starting with 2.x are named levels but now many components conform to the names yet. In general components use use numbers between 0 and 100 (inclusive) with 100 being very verbose.
<br>
<p>-Nathan
<br>
<p><span class="quotelev1">&gt; On May 22, 2016, at 12:36 AM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have built and installed OMPI with --enable-debug set. What runtime parameter do I need to see the output from OPAL_DEBUG_OUTPUT?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29271.php">http://www.open-mpi.org/community/lists/users/2016/05/29271.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29273/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29274.php">dpchoudh .: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>Previous message:</strong> <a href="29272.php">Gilles Gouaillardet: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>In reply to:</strong> <a href="29271.php">dpchoudh .: "[OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29274.php">dpchoudh .: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>Reply:</strong> <a href="29274.php">dpchoudh .: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
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
