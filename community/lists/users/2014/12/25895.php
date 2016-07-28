<?
$subject_val = "Re: [OMPI users] &quot;default-only MCA variable&quot;?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 12:47:37 2014" -->
<!-- isoreceived="20141201174737" -->
<!-- sent="Mon, 1 Dec 2014 09:47:32 -0800" -->
<!-- isosent="20141201174732" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;default-only MCA variable&amp;quot;?" -->
<!-- id="87E1BA37-4D50-453E-8E78-8C6209B0DF12_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="87bnnrjj0a.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;default-only MCA variable&quot;?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-01 12:47:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25896.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>Previous message:</strong> <a href="25894.php">Rob Latham: "Re: [OMPI users] mpi_file_read and arrays of custom datatypes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/11/25887.php">Dave Love: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25896.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>Reply:</strong> <a href="25896.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Nov 28, 2014, at 10:08 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It could be because configure did not find the knem headers and hence knem is not supported and hence this mca parameter is read-only
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, in that case (though knem was meant to be used and it's annoying
</span><br>
<span class="quotelev1">&gt; that configure doesn't abort if it doesn't find something you've
</span><br>
<span class="quotelev1">&gt; explicitly asked for, and I didn't immediately need it).
</span><br>
<p>FWIW: I dug into this and found why we weren&#226;&#128;&#153;t aborting if knem was specified and not found. This obviously isn&#226;&#128;&#153;t the specified OMPI behavior, so I fixed it in the trunk and will port it back to v1.8.4
<br>
<p><span class="quotelev1">&gt;  However, I got
</span><br>
<span class="quotelev1">&gt; the same for at least mpi_abort_print_stack with that parameter set.
</span><br>
<p>I&#226;&#128;&#153;m not entirely familiar with the thinking behind it, but it appears that some MCA params are intended solely for reporting purposes and are therefore not really &#226;&#128;&#156;settable&#226;&#128;&#157;. The &#226;&#128;&#156;have_knem_support&#226;&#128;&#157; is one such example, and it sounds like you may have found some others.
<br>
<p>I&#226;&#128;&#153;ll ask around and see why we did that as I can understand how it would be confusing.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This didn't happen with OMPI 1.6 and there's no obvious way to turn it
</span><br>
<span class="quotelev1">&gt; off.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25887.php">http://www.open-mpi.org/community/lists/users/2014/11/25887.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25896.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>Previous message:</strong> <a href="25894.php">Rob Latham: "Re: [OMPI users] mpi_file_read and arrays of custom datatypes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/11/25887.php">Dave Love: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25896.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>Reply:</strong> <a href="25896.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
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
