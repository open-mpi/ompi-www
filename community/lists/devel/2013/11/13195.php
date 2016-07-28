<?
$subject_val = "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 23:24:05 2013" -->
<!-- isoreceived="20131106042405" -->
<!-- sent="Tue, 5 Nov 2013 20:24:00 -0800" -->
<!-- isosent="20131106042400" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme" -->
<!-- id="CAAvDA164XXo=S-xox25WMu3Xwi-DDqkAdZcPQeCdMY1z8Cs3gQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F75B078A-731F-4C65-9CDC-4466208014D1_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 23:24:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13196.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13196.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13196.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I stand by my previous &quot;vote&quot;
<br>
<p>&quot;btl_usnic&quot; gets 90% of my vote.
<br>
&quot;btl_usnic_enum&quot; gets 10%.
<br>
&quot;btl_usnic_*_enum&quot; gets nada.
<br>
<p>Rationale:
<br>
While Jeff is correct that the string can legally contain '*', I would
<br>
imagine that users would like to have the ability to use wildcards (or even
<br>
full regular expressions) when interacting with their tools.  For that
<br>
reason I'd suggest sticking to just letters, digits and underscore.
<br>
<p>-Paul
<br>
<p><p>On Tue, Nov 5, 2013 at 7:50 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  Hmm. &quot;_enum&quot; has possibilities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  How about using a * in the name, to represent where the match is?  E.G.,
</span><br>
<span class="quotelev1">&gt;  btl_usnic_*_enum?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  It's a string, so it's not just limited to letters and underscores.
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
<span class="quotelev1">&gt;   On Tue, Nov 5, 2013 at 6:00 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 5, 2013, at 2:54 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If this approach is to be adopted by other components (and perhaps
</span><br>
<span class="quotelev2">&gt;&gt; other MPIs), then it would be important for the enumeration variable name
</span><br>
<span class="quotelev2">&gt;&gt; to be derived in a UNIFORM way:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     &lt;framework&gt;_&lt;component&gt;_SOMETHING
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Without a fixed value for &quot;SOMETHING&quot; somebody will need to read
</span><br>
<span class="quotelev2">&gt;&gt; sources (or documentation) to make the connection.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a good point; we got a similar piece of feedback from the MPI
</span><br>
<span class="quotelev2">&gt;&gt; tools group.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How about naming the state variable &quot;&lt;framework&gt;_&lt;component&gt;&quot;?  And then
</span><br>
<span class="quotelev2">&gt;&gt; that will apply to all &quot;&lt;framework&gt;_&lt;component&gt;*&quot; pvars.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hmm...  not sure how that jives with &quot;principle of least astonishment&quot;.
</span><br>
<span class="quotelev1">&gt; Other than that &quot;_SOMETHING&quot; == &quot;&quot; seems like a solution that totally
</span><br>
<span class="quotelev1">&gt; avoids the problems associated with words like &quot;device&quot; (which might imply
</span><br>
<span class="quotelev1">&gt; something about h/w architecture) or &quot;instance&quot; (with potential
</span><br>
<span class="quotelev1">&gt; implications regarding s/w architecture).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  So, on balance: +0.9  (my other 0.1 goes to &quot;_enum&quot; for &quot;principle of
</span><br>
<span class="quotelev1">&gt; least astonishment&quot;.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13195/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13196.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13196.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13196.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
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
