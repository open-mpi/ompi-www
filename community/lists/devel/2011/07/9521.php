<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 09:17:13 2011" -->
<!-- isoreceived="20110714131713" -->
<!-- sent="Thu, 14 Jul 2011 16:17:04 +0300" -->
<!-- isosent="20110714131704" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830" -->
<!-- id="4E1EEC50.4020200_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5A0EB2A5-77EF-4986-8D94-6974537ED758_at_cisco.com" -->
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
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 09:17:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9522.php">Paul H. Hargrove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9520.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="9520.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9525.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Reply:</strong> <a href="9525.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 14-Jul-11 3:30 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; The real question is: does Solaris have the same data structures required for Linux's dynamic SL support?  If so, this header file inquiry is worthwhile.  If not, then perhaps a separate port will be required for Solaris to support the dynamic SL functionality.
</span><br>
<p>I know for sure that at some point OpenFabrics OpenSM has forked
<br>
and was used as a basis for *some* Solaris SM, which possibly
<br>
will preserve the same headers. The MAD format has to stay the
<br>
same to provide interoperability, and I doubt that someone renamed
<br>
MAD fields just for fun.
<br>
So the questions is, what header and what package contain there
<br>
structures.
<br>
<p>I'm checking this offline with Oracle IB people.
<br>
<p>Other question is do Oracle folks care about IB QoS and torus/mesh
<br>
topologies w.r.t. OMPI, because otherwise the dynamic SL is irrelevant.
<br>
<p>-- YK
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 14, 2011, at 7:24 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do but my machine room's power is down so I don't have access to it right now.  I will grope around once it comes up to see what it has.  I also have sent email to our IB team for some direction.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/14/2011 2:42 AM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [adding Terry]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 14-Jul-11 2:49 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 7/13/2011 4:31 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 7/13/2011 4:20 PM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Finally, are you sure that infiniband/complib/cl_types_osd.h exists on all platforms? (e.g., Solaris) I know you said you don't have any Solaris machines to test with, but you should ping Oracle directly for some testing -- Terry might not be paying attention to this specific thread...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a pair of old machines running Solaris 11 Express (aka &quot;SunOS 5.11 snv_151a November 2010&quot;).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; These have IB Verbs support, but there is no such header. In fact, /usr/include/inifiband has no sub-directories.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (That is, no such header and not even any subdirectories on a very recent version of Solaris 11: snv_168.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I may be able to do some testing eventually, but now is not a good time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9522.php">Paul H. Hargrove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9520.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="9520.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9525.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Reply:</strong> <a href="9525.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
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
