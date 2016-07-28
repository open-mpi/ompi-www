<?
$subject_val = "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 01:21:30 2013" -->
<!-- isoreceived="20131106062130" -->
<!-- sent="Wed, 6 Nov 2013 06:21:29 +0000" -->
<!-- isosent="20131106062129" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme" -->
<!-- id="C495589A-8934-4880-8516-B7F39795B40B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA164XXo=S-xox25WMu3Xwi-DDqkAdZcPQeCdMY1z8Cs3gQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 01:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13197.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib	contrib/dist/linux debian debian/source"</a>
<li><strong>Previous message:</strong> <a href="13195.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13195.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13190.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I changed the name to &quot;btl_usnic&quot; in SVN (and can change it again if a better suggestion comes by...).
<br>
<p><p>On Nov 5, 2013, at 8:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I stand by my previous &quot;vote&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;btl_usnic&quot; gets 90% of my vote.
</span><br>
<span class="quotelev1">&gt; &quot;btl_usnic_enum&quot; gets 10%.
</span><br>
<span class="quotelev1">&gt; &quot;btl_usnic_*_enum&quot; gets nada.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rationale:
</span><br>
<span class="quotelev1">&gt; While Jeff is correct that the string can legally contain '*', I would imagine that users would like to have the ability to use wildcards (or even full regular expressions) when interacting with their tools.  For that reason I'd suggest sticking to just letters, digits and underscore.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 5, 2013 at 7:50 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hmm. &quot;_enum&quot; has possibilities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about using a * in the name, to represent where the match is?  E.G.,  btl_usnic_*_enum?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's a string, so it's not just limited to letters and underscores. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2013, at 6:26 PM, &quot;Paul Hargrove&quot; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Nov 5, 2013 at 6:00 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 5, 2013, at 2:54 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If this approach is to be adopted by other components (and perhaps other MPIs), then it would be important for the enumeration variable name to be derived in a UNIFORM way:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     &lt;framework&gt;_&lt;component&gt;_SOMETHING
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Without a fixed value for &quot;SOMETHING&quot; somebody will need to read sources (or documentation) to make the connection.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a good point; we got a similar piece of feedback from the MPI tools group.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How about naming the state variable &quot;&lt;framework&gt;_&lt;component&gt;&quot;?  And then that will apply to all &quot;&lt;framework&gt;_&lt;component&gt;*&quot; pvars.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmm...  not sure how that jives with &quot;principle of least astonishment&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Other than that &quot;_SOMETHING&quot; == &quot;&quot; seems like a solution that totally avoids the problems associated with words like &quot;device&quot; (which might imply something about h/w architecture) or &quot;instance&quot; (with potential implications regarding s/w architecture).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, on balance: +0.9  (my other 0.1 goes to &quot;_enum&quot; for &quot;principle of least astonishment&quot;.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13197.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib	contrib/dist/linux debian debian/source"</a>
<li><strong>Previous message:</strong> <a href="13195.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13195.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13190.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
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
