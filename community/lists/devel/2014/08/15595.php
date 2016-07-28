<?
$subject_val = "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  9 15:36:48 2014" -->
<!-- isoreceived="20140809193648" -->
<!-- sent="Sat, 9 Aug 2014 12:36:10 -0700" -->
<!-- isosent="20140809193610" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers" -->
<!-- id="A51E0FF6-5970-4BEE-B99C-D125E49E0A74_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14BPYBpRyxT=61=dp8N9tVwpmiYqUGqXZE_AqiUss-wkw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-09 15:36:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15596.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<li><strong>Previous message:</strong> <a href="15594.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<li><strong>In reply to:</strong> <a href="15594.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15596.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<li><strong>Reply:</strong> <a href="15596.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kewl - thanks!
<br>
<p>On Aug 9, 2014, at 12:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, that did the trick.
</span><br>
<span class="quotelev1">&gt; The attached patch applied cleanly to last night's v1.8 tarball (1.8.2rc4r32480) and I was able to build the C++ bindings on this platform.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Aug 9, 2014 at 7:58 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I think I chased this down - looks like it is r28034. I've attached the patch here - can you please let me know if this fixes the problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 8, 2014, at 11:11 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A problem Siegmar reported on trunk over a year and a half ago is breaking a 32-bit build of the v1.8 branch with the Sun C++ compiler:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar's report appears in <a href="http://www.open-mpi.org/community/lists/users/2013/01/21269.php">http://www.open-mpi.org/community/lists/users/2013/01/21269.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; There are several warnings, but the error is (from my current build):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/shared/OMPI/openmpi-1.8-latest-solaris11-x86-ib-ss12u3/openmpi-1.8.2rc4r32480/ompi/mpi/cxx/file.cc&quot;, Error: The function opal_atomic_add_32(volatile int*, int) has not had a body defined.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian attached a possible fix to <a href="http://www.open-mpi.org/community/lists/users/2013/01/21272.php">http://www.open-mpi.org/community/lists/users/2013/01/21272.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; It applies cleanly to v1.8 but appears to make things worse, trading that one error for two:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/shared/OMPI/openmpi-1.8-latest-solaris11-x86-ib-ss12u3/openmpi-1.8.2rc4r32480/opal/include/opal/sys/atomic_impl.h&quot;, line 106: Error: opal_atomic_add_64(volatile long long*, long long) was previously declared &quot;extern&quot;, not &quot;inline&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/shared/OMPI/openmpi-1.8-latest-solaris11-x86-ib-ss12u3/openmpi-1.8.2rc4r32480/opal/include/opal/sys/atomic_impl.h&quot;, line 121: Error: opal_atomic_sub_64(volatile long long*, long long) was previously declared &quot;extern&quot;, not &quot;inline&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The good news is that the problem does not exist on the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; So, hopefully somebody can track down the proper changes to CMR.
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15582.php">http://www.open-mpi.org/community/lists/devel/2014/08/15582.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15591.php">http://www.open-mpi.org/community/lists/devel/2014/08/15591.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15594.php">http://www.open-mpi.org/community/lists/devel/2014/08/15594.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15595/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15596.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<li><strong>Previous message:</strong> <a href="15594.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<li><strong>In reply to:</strong> <a href="15594.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15596.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<li><strong>Reply:</strong> <a href="15596.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
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
