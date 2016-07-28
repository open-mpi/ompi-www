<?
$subject_val = "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 18 06:28:05 2011" -->
<!-- isoreceived="20111018102805" -->
<!-- sent="Tue, 18 Oct 2011 06:27:52 -0400" -->
<!-- isosent="20111018102752" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build" -->
<!-- id="4E9D54A8.2020003_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5D3F4EDB-EA2D-44B0-AB0A-1A6ACDA7749D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-18 06:27:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9836.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
<li><strong>Previous message:</strong> <a href="9834.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
<li><strong>In reply to:</strong> <a href="9833.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Terry -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did #2887 fix this already?
</span><br>
<span class="quotelev1">&gt;
</span><br>
No it broke it.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 18, 2011, at 6:19 AM, &quot;Open MPI&quot;&lt;bugs_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #2888: base.h inclusion breaks Solaris build
</span><br>
<span class="quotelev2">&gt;&gt; --------------------+----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Reporter:  tdd      |      Owner:  tdd
</span><br>
<span class="quotelev2">&gt;&gt;     Type:  defect   |     Status:  new
</span><br>
<span class="quotelev2">&gt;&gt; Priority:  blocker  |  Milestone:  Open MPI 1.5.5
</span><br>
<span class="quotelev2">&gt;&gt; Version:  trunk    |   Keywords:
</span><br>
<span class="quotelev2">&gt;&gt; --------------------+----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #2887 breaks the Solaris build because opal/sys/timer.h and
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/timer/base/base.h cause a redeclaration error for opal_timer_t.
</span><br>
<span class="quotelev2">&gt;&gt; This is a similar issue we saw with r25157 that r25170 fixed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Ticket URL:&lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2888">https://svn.open-mpi.org/trac/ompi/ticket/2888</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI&lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; bugs mailing list
</span><br>
<span class="quotelev2">&gt;&gt; bugs_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9835/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-9835/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9836.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
<li><strong>Previous message:</strong> <a href="9834.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
<li><strong>In reply to:</strong> <a href="9833.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
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
