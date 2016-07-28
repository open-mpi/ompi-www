<?
$subject_val = "Re: [OMPI devel] Free list warning";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 11:09:32 2015" -->
<!-- isoreceived="20150226160932" -->
<!-- sent="Thu, 26 Feb 2015 08:09:27 -0800" -->
<!-- isosent="20150226160927" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Free list warning" -->
<!-- id="8A9B6560-1534-466E-803A-D67BDE5778F5_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20150226160708.GN14606_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Free list warning<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 11:09:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17057.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
<li><strong>Previous message:</strong> <a href="17055.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
<li><strong>In reply to:</strong> <a href="17055.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17057.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
<li><strong>Reply:</strong> <a href="17057.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So far as I can tell, it is complaining about the definitions - the error doesn&#226;&#128;&#153;t indicate anyone is using it
<br>
<p><span class="quotelev1">&gt; On Feb 26, 2015, at 8:07 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it just complaining that the inline functions are deprecated or some
</span><br>
<span class="quotelev1">&gt; code still using ompi_free_list_t? If it is the former I will go ahead
</span><br>
<span class="quotelev1">&gt; and remove the dummy implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 25, 2015 at 09:00:26PM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   It looks like everything in ompi_free_list has been tied together and
</span><br>
<span class="quotelev2">&gt;&gt;   labeled as deprecated. So I'm getting this warning:
</span><br>
<span class="quotelev2">&gt;&gt;   In file included from class/ompi_free_list.c:12:0:
</span><br>
<span class="quotelev2">&gt;&gt;   ../opal/class/ompi_free_list.h: In function 'ompi_free_list_init_ex':
</span><br>
<span class="quotelev2">&gt;&gt;   ../opal/class/ompi_free_list.h:100:5: warning:
</span><br>
<span class="quotelev2">&gt;&gt;   'ompi_free_list_init_ex_new' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt;   ../opal/class/ompi_free_list.h:61) [-Wdeprecated-declarations]
</span><br>
<span class="quotelev2">&gt;&gt;        return ompi_free_list_init_ex_new (free_list, element_size,
</span><br>
<span class="quotelev2">&gt;&gt;   alignment,
</span><br>
<span class="quotelev2">&gt;&gt;        ^
</span><br>
<span class="quotelev2">&gt;&gt;   Can someone please clean this up? It's causing Intel unit tests to abort
</span><br>
<span class="quotelev2">&gt;&gt;   as they treat warnings as errors.
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks
</span><br>
<span class="quotelev2">&gt;&gt;   Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17052.php">http://www.open-mpi.org/community/lists/devel/2015/02/17052.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17055.php">http://www.open-mpi.org/community/lists/devel/2015/02/17055.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17057.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
<li><strong>Previous message:</strong> <a href="17055.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
<li><strong>In reply to:</strong> <a href="17055.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17057.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
<li><strong>Reply:</strong> <a href="17057.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
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
