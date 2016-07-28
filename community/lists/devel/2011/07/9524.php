<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 09:33:57 2011" -->
<!-- isoreceived="20110714133357" -->
<!-- sent="Thu, 14 Jul 2011 09:33:45 -0400" -->
<!-- isosent="20110714133345" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830" -->
<!-- id="4E1EF039.6080202_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E1EEF91.2050206_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 09:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9525.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9523.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="9523.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/14/2011 9:30 AM, Yevgeny Kliteynik wrote:
<br>
<span class="quotelev1">&gt; On 14-Jul-11 4:21 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/13/2011 11:42 PM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [adding Terry]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 14-Jul-11 2:49 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 7/13/2011 4:31 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 7/13/2011 4:20 PM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Finally, are you sure that infiniband/complib/cl_types_osd.h exists on all platforms? (e.g., Solaris) I know you said you don't have any Solaris machines to test with, but you should ping Oracle directly for some testing -- Terry might not be paying attention to this specific thread...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'll check it, but my guess would be that Solaris doesn't have it.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; AFAIK Solaris doesn't use OpenFabrics OpenSM - it has a separate
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; subnet manager, so I can't assume that it has.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So right now the dynamic SL will probably not work on Solaris
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (though it won't break the compilation).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a pair of old machines running Solaris 11 Express (aka &quot;SunOS 5.11 snv_151a November 2010&quot;).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; These have IB Verbs support, but there is no such header. In fact, /usr/include/inifiband has no sub-directories.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (That is, no such header and not even any subdirectories on a very recent version of Solaris 11: snv_168.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Makes sense. But I believe that these Solaris installations
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just don't have Subnet Manager, so they are not supposed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have these headers anyway. What I don't know is what headers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are installed as part of the SM installation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anybody have a Solaris machine with Subnet Manager?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- YK
</span><br>
<span class="quotelev2">&gt;&gt; I'll go so far as to say that this header does not exist in the package repo:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; root_at_pcp-j-20:~# pkg search verbs.h || echo NOPE
</span><br>
<span class="quotelev2">&gt;&gt; INDEX ACTION VALUE PACKAGE
</span><br>
<span class="quotelev2">&gt;&gt; basename file usr/include/infiniband/verbs.h pkg:/network/open-fabrics_at_1.3-0.151.0.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; root_at_pcp-j-20:~# pkg search cl_types_osd.h || echo NOPE
</span><br>
<span class="quotelev2">&gt;&gt; NOPE
</span><br>
<span class="quotelev1">&gt; Actually cl_types_osd.h is used as kinda hack - it workarounds
</span><br>
<span class="quotelev1">&gt; bad include directive in ib_types.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you check for ib_types.h instead?
</span><br>
<span class="quotelev1">&gt; This is the header that I'm actually using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes we have ib_types.h it is in /usr/include/sys/ib/ib_types.h
<br>
<span class="quotelev1">&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9524/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-9524/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9525.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9523.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="9523.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
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
