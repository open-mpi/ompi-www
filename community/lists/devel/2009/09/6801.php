<?
$subject_val = "Re: [OMPI devel] Error message improvement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 07:16:06 2009" -->
<!-- isoreceived="20090909111606" -->
<!-- sent="Wed, 9 Sep 2009 14:16:00 +0300" -->
<!-- isosent="20090909111600" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error message improvement" -->
<!-- id="453d39990909090416o595b3b7fp433790da7d046796_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5d5f7eba0909090348x1ac09809l4b149db862dfd510_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error message improvement<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 07:16:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6802.php">George Bosilca: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Previous message:</strong> <a href="6800.php">Nysal Jan: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>In reply to:</strong> <a href="6800.php">Nysal Jan: "Re: [OMPI devel] Error message improvement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6802.php">George Bosilca: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Reply:</strong> <a href="6802.php">George Bosilca: "Re: [OMPI devel] Error message improvement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
does C99 complient compiler is something unusual
<br>
or is there a policy among OMPI developers/users that prevent me f
<br>
rom using __func__  instead of hardcoded strings in the code ?
<br>
Thanks.
<br>
Lenny.
<br>
<p>On Wed, Sep 9, 2009 at 1:48 PM, Nysal Jan &lt;jnysal_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; __FUNCTION__ is not portable.
</span><br>
<span class="quotelev1">&gt; __func__ is but it needs a C99 compliant compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Nysal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 8, 2009 at 9:06 PM, Lenny Verkhovsky &lt;
</span><br>
<span class="quotelev1">&gt; lenny.verkhovsky_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fixed in r21952
</span><br>
<span class="quotelev2">&gt;&gt; thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Sep 8, 2009 at 5:08 PM, Arthur Huillet &lt;arthur.huillet_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why not using __FUNCTION__  in all our error messages ???
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sounds good, this way the function names are always correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings, A. Huillet
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6801/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6802.php">George Bosilca: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Previous message:</strong> <a href="6800.php">Nysal Jan: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>In reply to:</strong> <a href="6800.php">Nysal Jan: "Re: [OMPI devel] Error message improvement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6802.php">George Bosilca: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Reply:</strong> <a href="6802.php">George Bosilca: "Re: [OMPI devel] Error message improvement"</a>
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
