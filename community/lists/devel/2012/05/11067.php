<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 31 07:37:46 2012" -->
<!-- isoreceived="20120531113746" -->
<!-- sent="Thu, 31 May 2012 14:37:21 +0300" -->
<!-- isosent="20120531113721" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYc0L43KtdFdnsXMox=FVK6-VMeCyR8_sdf21+Xh0O9vgw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="763CDCF5-ACF9-4479-B8C5-67118D490C84_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Dmitri Gribenko (<em>gribozavr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-31 07:37:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11068.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11066.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11066.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11068.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 31, 2012 at 2:29 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Ah, good point. &#194;&#160;But in those cases, MPI specifically defines that those arguments are wholly ignored on non-root processes. &#194;&#160;So you could still even pass &lt;&amp;foo, MPI_DATATYPE_NULL&gt;, or &lt;NULL, MPI_INT&gt;, and it would be ok.
</span><br>
<p>I see.  If this warning is imposing some coding style guideline, then
<br>
we would better not annotate MPI_DATATYPE_NULL or some users will find
<br>
these diagnostics to be too noisy.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; We should have AC macros for all of these already.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, I'll try find them to support (1) usecase described below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, I'll find them -- sorry, I meant to look them up before I sent the last mail. &#194;&#160;Let me look them up and get back to you. &#194;&#160;Our configury is quite complicated, and I know the right places to look. &#194;&#160;:-)
</span><br>
<p>Thanks in advance.
<br>
<p>Dmitri
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11068.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11066.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11066.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11068.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
