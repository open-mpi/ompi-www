<?
$subject_val = "Re: [OMPI devel] Free list warning";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 11:14:21 2015" -->
<!-- isoreceived="20150226161421" -->
<!-- sent="Thu, 26 Feb 2015 09:14:20 -0700" -->
<!-- isosent="20150226161420" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Free list warning" -->
<!-- id="20150226161419.GO14606_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8A9B6560-1534-466E-803A-D67BDE5778F5_at_open-mpi.org" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 11:14:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17058.php">Rob Latham: "Re: [OMPI devel] [mpich-discuss] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="17056.php">Ralph Castain: "Re: [OMPI devel] Free list warning"</a>
<li><strong>In reply to:</strong> <a href="17056.php">Ralph Castain: "Re: [OMPI devel] Free list warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I put that implementation there to ease the transition for
<br>
off-master components. Removing now.
<br>
<p>-Nathan
<br>
<p>On Thu, Feb 26, 2015 at 08:09:27AM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; So far as I can tell, it is complaining about the definitions - the error doesn&#226;&#128;&#153;t indicate anyone is using it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 26, 2015, at 8:07 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is it just complaining that the inline functions are deprecated or some
</span><br>
<span class="quotelev2">&gt; &gt; code still using ompi_free_list_t? If it is the former I will go ahead
</span><br>
<span class="quotelev2">&gt; &gt; and remove the dummy implementation.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Feb 25, 2015 at 09:00:26PM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   It looks like everything in ompi_free_list has been tied together and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   labeled as deprecated. So I'm getting this warning:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   In file included from class/ompi_free_list.c:12:0:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ../opal/class/ompi_free_list.h: In function 'ompi_free_list_init_ex':
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ../opal/class/ompi_free_list.h:100:5: warning:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   'ompi_free_list_init_ex_new' is deprecated (declared at
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ../opal/class/ompi_free_list.h:61) [-Wdeprecated-declarations]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        return ompi_free_list_init_ex_new (free_list, element_size,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   alignment,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        ^
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Can someone please clean this up? It's causing Intel unit tests to abort
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   as they treat warnings as errors.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Ralph
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17052.php">http://www.open-mpi.org/community/lists/devel/2015/02/17052.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17055.php">http://www.open-mpi.org/community/lists/devel/2015/02/17055.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17056.php">http://www.open-mpi.org/community/lists/devel/2015/02/17056.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17057/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17058.php">Rob Latham: "Re: [OMPI devel] [mpich-discuss] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="17056.php">Ralph Castain: "Re: [OMPI devel] Free list warning"</a>
<li><strong>In reply to:</strong> <a href="17056.php">Ralph Castain: "Re: [OMPI devel] Free list warning"</a>
<!-- nextthread="start" -->
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
