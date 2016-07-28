<?
$subject_val = "Re: [OMPI devel] New OMPI MPI extension";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 12:34:48 2010" -->
<!-- isoreceived="20100422163448" -->
<!-- sent="Thu, 22 Apr 2010 11:34:43 -0500" -->
<!-- isosent="20100422163443" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New OMPI MPI extension" -->
<!-- id="l2n73a01bf21004220934x164a05bdhcf10a8fb56b7024e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="675891EC-AE99-42FE-907C-1DF6794BE179_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New OMPI MPI extension<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 12:34:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7794.php">Jeff Squyres: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>Previous message:</strong> <a href="7792.php">Samuel K. Gutierrez: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7788.php">Jeff Squyres: "Re: [OMPI devel] New OMPI MPI extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7794.php">Jeff Squyres: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>Reply:</strong> <a href="7794.php">Jeff Squyres: "Re: [OMPI devel] New OMPI MPI extension"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Seems like OMPI_Affinity_str() 's finest granularity is at the core
<br>
level. However, in SGE (Sun Grid Engine) we also offer thread level
<br>
(SMT) binding:
<br>
<p><a href="http://wikis.sun.com/display/gridengine62u5/Using+Job+to+Core+Binding">http://wikis.sun.com/display/gridengine62u5/Using+Job+to+Core+Binding</a>
<br>
<p>Will OpenMPI support thread level binding in the future??
<br>
<p><p>BTW, another 2 typos in README:
<br>
<p>1193    subdirectory off &lt;- directory &quot;of&quot;
<br>
<p>1199 thse extensions &lt;- &quot;these&quot; extensions
<br>
<p>Rayson
<br>
<p><p>On Thu, Apr 22, 2010 at 10:35 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Fixed -- thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 22, 2010, at 12:35 AM, Rayson Ho wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There's a typo in trunk/README:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -&gt; 1175 ...unrelated to wach other
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess you mean &quot;unrelated to each other&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Apr 21, 2010 at 12:35 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Per the telecon Tuesday, I committed a new OMPI MPI extension to the trunk:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160;<a href="https://svn.open-mpi.org/trac/ompi/changeset/23018">https://svn.open-mpi.org/trac/ompi/changeset/23018</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Please read the commit message and let me know what you think. &#160;Suggestions are welcome.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If everyone is ok with it, I'd like to see this functionality hit the 1.5 series at some point.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7794.php">Jeff Squyres: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>Previous message:</strong> <a href="7792.php">Samuel K. Gutierrez: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7788.php">Jeff Squyres: "Re: [OMPI devel] New OMPI MPI extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7794.php">Jeff Squyres: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>Reply:</strong> <a href="7794.php">Jeff Squyres: "Re: [OMPI devel] New OMPI MPI extension"</a>
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
