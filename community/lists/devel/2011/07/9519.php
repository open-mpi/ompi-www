<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 07:24:18 2011" -->
<!-- isoreceived="20110714112418" -->
<!-- sent="Thu, 14 Jul 2011 07:24:04 -0400" -->
<!-- isosent="20110714112404" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830" -->
<!-- id="4E1ED1D4.9040903_at_oracle.com" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 07:24:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9520.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9518.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>In reply to:</strong> <a href="9517.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9520.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Reply:</strong> <a href="9520.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do but my machine room's power is down so I don't have access to it 
<br>
right now.  I will grope around once it comes up to see what it has.  I 
<br>
also have sent email to our IB team for some direction.
<br>
<p>--td
<br>
<p>On 7/14/2011 2:42 AM, Yevgeny Kliteynik wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I may be able to do some testing eventually, but now is not a good time.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9519/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-9519/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9520.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9518.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>In reply to:</strong> <a href="9517.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9520.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Reply:</strong> <a href="9520.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
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
