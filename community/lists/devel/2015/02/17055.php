<?
$subject_val = "Re: [OMPI devel] Free list warning";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 11:07:09 2015" -->
<!-- isoreceived="20150226160709" -->
<!-- sent="Thu, 26 Feb 2015 09:07:08 -0700" -->
<!-- isosent="20150226160708" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Free list warning" -->
<!-- id="20150226160708.GN14606_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B300C433-4C97-44C6-935E-122B08CEC59E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-02-26 11:07:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17056.php">Ralph Castain: "Re: [OMPI devel] Free list warning"</a>
<li><strong>Previous message:</strong> <a href="17054.php">Howard Pritchard: "Re: [OMPI devel] Tues Mar 3rd telecon"</a>
<li><strong>In reply to:</strong> <a href="17052.php">Ralph Castain: "[OMPI devel] Free list warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17056.php">Ralph Castain: "Re: [OMPI devel] Free list warning"</a>
<li><strong>Reply:</strong> <a href="17056.php">Ralph Castain: "Re: [OMPI devel] Free list warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is it just complaining that the inline functions are deprecated or some
<br>
code still using ompi_free_list_t? If it is the former I will go ahead
<br>
and remove the dummy implementation.
<br>
<p>-Nathan
<br>
<p>On Wed, Feb 25, 2015 at 09:00:26PM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;    It looks like everything in ompi_free_list has been tied together and
</span><br>
<span class="quotelev1">&gt;    labeled as deprecated. So I'm getting this warning:
</span><br>
<span class="quotelev1">&gt;    In file included from class/ompi_free_list.c:12:0:
</span><br>
<span class="quotelev1">&gt;    ../opal/class/ompi_free_list.h: In function 'ompi_free_list_init_ex':
</span><br>
<span class="quotelev1">&gt;    ../opal/class/ompi_free_list.h:100:5: warning:
</span><br>
<span class="quotelev1">&gt;    'ompi_free_list_init_ex_new' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt;    ../opal/class/ompi_free_list.h:61) [-Wdeprecated-declarations]
</span><br>
<span class="quotelev1">&gt;         return ompi_free_list_init_ex_new (free_list, element_size,
</span><br>
<span class="quotelev1">&gt;    alignment,
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt;    Can someone please clean this up? It's causing Intel unit tests to abort
</span><br>
<span class="quotelev1">&gt;    as they treat warnings as errors.
</span><br>
<span class="quotelev1">&gt;    Thanks
</span><br>
<span class="quotelev1">&gt;    Ralph
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17052.php">http://www.open-mpi.org/community/lists/devel/2015/02/17052.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17055/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17056.php">Ralph Castain: "Re: [OMPI devel] Free list warning"</a>
<li><strong>Previous message:</strong> <a href="17054.php">Howard Pritchard: "Re: [OMPI devel] Tues Mar 3rd telecon"</a>
<li><strong>In reply to:</strong> <a href="17052.php">Ralph Castain: "[OMPI devel] Free list warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17056.php">Ralph Castain: "Re: [OMPI devel] Free list warning"</a>
<li><strong>Reply:</strong> <a href="17056.php">Ralph Castain: "Re: [OMPI devel] Free list warning"</a>
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
