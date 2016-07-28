<?
$subject_val = "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 15:04:44 2012" -->
<!-- isoreceived="20120911190444" -->
<!-- sent="Tue, 11 Sep 2012 21:04:39 +0200" -->
<!-- isosent="20120911190439" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]" -->
<!-- id="CAKPyHN2vszqADg=hDATPmTJwvs8O5gLg0dwAM5jyy2KoPGcfjg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA15GtvSc+CjkgmC11We=hp42C+rRP2u4Qbq7VDS2JR9QQw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 15:04:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11490.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>Previous message:</strong> <a href="11488.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>In reply to:</strong> <a href="11488.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11490.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Sep 11, 2012 at 8:56 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; FYI:  This problem is *NOT* specific to NetBSD - it also just showed up for
</span><br>
<span class="quotelev1">&gt; me on Solaris-10/SPARC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I question the &quot;VT compile fix on Solaris&quot; in Jeff's list of changes
</span><br>
<span class="quotelev1">&gt; relative to rc1.
</span><br>
<span class="quotelev1">&gt; I would guess that refers to a missing header I reported on the trunk
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/community/lists/devel/2012/08/11446.php">http://www.open-mpi.org/community/lists/devel/2012/08/11446.php</a>), but I
</span><br>
<span class="quotelev1">&gt; wonder what testing was conducted.
</span><br>
<p>The problem was, that 'rint' is a C99 function, and we changed it to a
<br>
simple integer cast.
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11490.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>Previous message:</strong> <a href="11488.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>In reply to:</strong> <a href="11488.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11490.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
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
