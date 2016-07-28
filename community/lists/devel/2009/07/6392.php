<?
$subject_val = "Re: [OMPI devel] &quot;prefix&quot; style guideline";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 14:17:07 2009" -->
<!-- isoreceived="20090709181707" -->
<!-- sent="Thu, 09 Jul 2009 11:17:16 -0700" -->
<!-- isosent="20090709181716" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;prefix&amp;quot; style guideline" -->
<!-- id="4A56342C.8090904_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="56A0343A-9EB8-4DA6-BF7A-EAB3A4BC792E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;prefix&quot; style guideline<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-09 14:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6393.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>Previous message:</strong> <a href="6391.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>In reply to:</strong> <a href="6391.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6393.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>Reply:</strong> <a href="6393.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 8, 2009, at 2:17 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In <a href="https://svn.open-mpi.org/trac/ompi/wiki/CodingStyle">https://svn.open-mpi.org/trac/ompi/wiki/CodingStyle</a> , there is
</span><br>
<span class="quotelev2">&gt;&gt; mention of &quot;the prefix rule.&quot;  What is this rule?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In components, you have to prefix all public symbols with  
</span><br>
<span class="quotelev1">&gt; &quot;&lt;layer&gt;_&lt;framework&gt;_&lt;component&gt;&quot;, where &lt;layer&gt; is one of &quot;mca&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;ompi&quot;, &quot;orte&quot;, or &quot;opal&quot; (&quot;mca&quot; used to be used, but it has fallen  
</span><br>
<span class="quotelev1">&gt; out of favor; &quot;ompi&quot;, &quot;orte&quot;, and &quot;opal&quot; are a bit more common these  
</span><br>
<span class="quotelev1">&gt; days -- but still the bulk of existing code probably uses &quot;mca&quot;).
</span><br>
<p>The wiki said all public symbols and filenames.  I assume filenames may 
<br>
leave off &quot;&lt;layer&gt;_&quot;.  That is, the file is properly named btl_sm.c 
<br>
rather than mca_btl_sm.c or ompi_btl_sm.c.  Right?
<br>
<p><span class="quotelev2">&gt;&gt; P.S.  Shouldn't the &quot;prefix rule&quot; be explained in the &quot;coding style&quot;
</span><br>
<span class="quotelev2">&gt;&gt; twiki page?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why?
</span><br>
<p>So that we'd be clear.
<br>
<p><span class="quotelev1">&gt; Then we'd be *clear*...
</span><br>
<p>Doh!
<br>
<p><span class="quotelev1">&gt; I'd volunteer to add something, but I'm heading out on vacation  
</span><br>
<span class="quotelev1">&gt; tomorrow afternoon, and have a bagillion things to finish before then  
</span><br>
<span class="quotelev1">&gt; -- would you mind adding something?
</span><br>
<p>As you have spoken, so has it been done.  And, if someone would confirm 
<br>
the filename issue above, I'll update accordingly.  Thanks for all the 
<br>
answers.  Patch for 1962 on its way.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6393.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>Previous message:</strong> <a href="6391.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>In reply to:</strong> <a href="6391.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6393.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>Reply:</strong> <a href="6393.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
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
