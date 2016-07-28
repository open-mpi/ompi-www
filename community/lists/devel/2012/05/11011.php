<?
$subject_val = "Re: [OMPI devel] Modified files after autogen";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 14:13:19 2012" -->
<!-- isoreceived="20120523181319" -->
<!-- sent="Wed, 23 May 2012 12:13:11 -0600" -->
<!-- isosent="20120523181311" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Modified files after autogen" -->
<!-- id="43E3BDFC-8F2C-4E70-89B9-5108C14C31A7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E84D32F90_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Modified files after autogen<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 14:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11012.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<li><strong>Previous message:</strong> <a href="11010.php">Rolf vandeVaart: "[OMPI devel] Modified files after autogen"</a>
<li><strong>In reply to:</strong> <a href="11010.php">Rolf vandeVaart: "[OMPI devel] Modified files after autogen"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, we just need to get the built files completely removed from the repo. I've been working on it.
<br>
<p>On May 23, 2012, at 12:10 PM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; After doing a fresh checkout of the trunk, and then running autogen, I see this:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; M       opal/mca/event/libevent2019/libevent/Makefile.in
</span><br>
<span class="quotelev1">&gt; M       opal/mca/event/libevent2019/libevent/depcomp
</span><br>
<span class="quotelev1">&gt; M       opal/mca/event/libevent2019/libevent/include/Makefile.in
</span><br>
<span class="quotelev1">&gt; M       opal/mca/event/libevent2019/libevent/configure
</span><br>
<span class="quotelev1">&gt; M       opal/mca/event/libevent2019/libevent/config.guess
</span><br>
<span class="quotelev1">&gt; M       opal/mca/event/libevent2019/libevent/config.sub
</span><br>
<span class="quotelev1">&gt; M       opal/mca/event/libevent2019/libevent/missing
</span><br>
<span class="quotelev1">&gt; M       opal/mca/event/libevent2019/libevent/aclocal.m4
</span><br>
<span class="quotelev1">&gt; M       opal/mca/event/libevent2019/libevent/install-sh
</span><br>
<span class="quotelev1">&gt; ?       orte/mca/common/Makefile.in
</span><br>
<span class="quotelev1">&gt; ?       orte/mca/common/pmi/Makefile.in
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It looks like the autogen that gets run in libevent makes a variety of modifications to these files so they showed up as modified under svn.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am just curious if this is the expected behavior as this seems somewhat new to me.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11011/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11012.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<li><strong>Previous message:</strong> <a href="11010.php">Rolf vandeVaart: "[OMPI devel] Modified files after autogen"</a>
<li><strong>In reply to:</strong> <a href="11010.php">Rolf vandeVaart: "[OMPI devel] Modified files after autogen"</a>
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
