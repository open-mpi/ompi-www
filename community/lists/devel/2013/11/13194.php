<?
$subject_val = "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 22:50:37 2013" -->
<!-- isoreceived="20131106035037" -->
<!-- sent="Wed, 6 Nov 2013 03:50:35 +0000" -->
<!-- isosent="20131106035035" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme" -->
<!-- id="F75B078A-731F-4C65-9CDC-4466208014D1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA14KEzz8xnhcWgJfWanJ8d-Tm4-cHW_N6s=ZBKKhGsmXkw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-11-05 22:50:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13195.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13193.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13193.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13195.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13195.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm. &quot;_enum&quot; has possibilities.
<br>
<p>How about using a * in the name, to represent where the match is?  E.G.,  btl_usnic_*_enum?
<br>
<p>It's a string, so it's not just limited to letters and underscores.
<br>
<p>Sent from my phone. No type good.
<br>
<p>On Nov 5, 2013, at 6:26 PM, &quot;Paul Hargrove&quot; &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>
<p>On Tue, Nov 5, 2013 at 6:00 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
On Nov 5, 2013, at 2:54 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If this approach is to be adopted by other components (and perhaps other MPIs), then it would be important for the enumeration variable name to be derived in a UNIFORM way:
</span><br>
<span class="quotelev1">&gt;     &lt;framework&gt;_&lt;component&gt;_SOMETHING
</span><br>
<span class="quotelev1">&gt; Without a fixed value for &quot;SOMETHING&quot; somebody will need to read sources (or documentation) to make the connection.
</span><br>
<p>This is a good point; we got a similar piece of feedback from the MPI tools group.
<br>
<p>How about naming the state variable &quot;&lt;framework&gt;_&lt;component&gt;&quot;?  And then that will apply to all &quot;&lt;framework&gt;_&lt;component&gt;*&quot; pvars.
<br>
<p><p>Hmm...  not sure how that jives with &quot;principle of least astonishment&quot;.
<br>
Other than that &quot;_SOMETHING&quot; == &quot;&quot; seems like a solution that totally avoids the problems associated with words like &quot;device&quot; (which might imply something about h/w architecture) or &quot;instance&quot; (with potential implications regarding s/w architecture).
<br>
<p>So, on balance: +0.9  (my other 0.1 goes to &quot;_enum&quot; for &quot;principle of least astonishment&quot;.)
<br>
<p>-Paul
<br>
<p><p><pre>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13194/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13195.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13193.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13193.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13195.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13195.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
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
