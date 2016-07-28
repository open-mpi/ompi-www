<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 09:22:50 2011" -->
<!-- isoreceived="20110714132250" -->
<!-- sent="Thu, 14 Jul 2011 06:21:20 -0700" -->
<!-- isosent="20110714132120" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830" -->
<!-- id="4E1EED50.9000703_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E1E8FCA.80705_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 09:21:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9523.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9521.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="9517.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9523.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Reply:</strong> <a href="9523.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/13/2011 11:42 PM, Yevgeny Kliteynik wrote:
<br>
<span class="quotelev1">&gt; [adding Terry]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 14-Jul-11 2:49 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 7/13/2011 4:31 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/13/2011 4:20 PM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Finally, are you sure that infiniband/complib/cl_types_osd.h exists on all platforms? (e.g., Solaris) I know you said you don't have any Solaris machines to test with, but you should ping Oracle directly for some testing -- Terry might not be paying attention to this specific thread...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll check it, but my guess would be that Solaris doesn't have it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; AFAIK Solaris doesn't use OpenFabrics OpenSM - it has a separate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subnet manager, so I can't assume that it has.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So right now the dynamic SL will probably not work on Solaris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (though it won't break the compilation).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a pair of old machines running Solaris 11 Express (aka &quot;SunOS 5.11 snv_151a November 2010&quot;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These have IB Verbs support, but there is no such header. In fact, /usr/include/inifiband has no sub-directories.
</span><br>
<span class="quotelev2">&gt;&gt; +1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (That is, no such header and not even any subdirectories on a very recent version of Solaris 11: snv_168.)
</span><br>
<span class="quotelev1">&gt; Makes sense. But I believe that these Solaris installations
</span><br>
<span class="quotelev1">&gt; just don't have Subnet Manager, so they are not supposed to
</span><br>
<span class="quotelev1">&gt; have these headers anyway. What I don't know is what headers
</span><br>
<span class="quotelev1">&gt; are installed as part of the SM installation.
</span><br>
<span class="quotelev1">&gt; Does anybody have a Solaris machine with Subnet Manager?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<p>I'll go so far as to say that this header does not exist in the package 
<br>
repo:
<br>
<p>root_at_pcp-j-20:~# pkg search verbs.h || echo NOPE
<br>
INDEX      ACTION VALUE                          PACKAGE
<br>
basename   file   usr/include/infiniband/verbs.h 
<br>
pkg:/network/open-fabrics_at_1.3-0.151.0.1
<br>
<p>root_at_pcp-j-20:~# pkg search cl_types_osd.h || echo NOPE
<br>
NOPE
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9523.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9521.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="9517.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9523.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Reply:</strong> <a href="9523.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
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
