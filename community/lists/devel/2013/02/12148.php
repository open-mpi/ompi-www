<?
$subject_val = "Re: [OMPI devel] openib fragment alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 16:57:52 2013" -->
<!-- isoreceived="20130220215752" -->
<!-- sent="Wed, 20 Feb 2013 13:57:36 -0800" -->
<!-- isosent="20130220215736" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib fragment alignment" -->
<!-- id="CAAvDA17nt43eqLi3LMogKh2DxD5d4q1Tm08+9Bzg0463uPgFhQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130220215143.GC96894_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib fragment alignment<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-20 16:57:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12149.php">Steve Angelovich: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Previous message:</strong> <a href="12147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>In reply to:</strong> <a href="12146.php">Nathan Hjelm: "Re: [OMPI devel] openib fragment alignment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like the problem comes down to just 32-bit systems that fault on
<br>
unaligned 8-byte loads.
<br>
That would be SPARC, IA64 and MIPS.  For IB only SPARC is relevant.
<br>
<p>So perhaps alignment&gt;2 should be conditional on 32-bit SPARC target.
<br>
Additionally, an experiment to see if 4-byte alignment is &quot;good enough&quot;
<br>
(instead of 8) might allow one to save a little space.
<br>
<p>-Paul
<br>
<p><p>On Wed, Feb 20, 2013 at 1:51 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I talked to Pasha about the change. He suggests fragments are 2-byte
</span><br>
<span class="quotelev1">&gt; aligned to save space. I suspect that on 64-bit platforms the fragment size
</span><br>
<span class="quotelev1">&gt; is already a multiple of 8 bytes so this change will likely only affect
</span><br>
<span class="quotelev1">&gt; 32-bit systems (which is where the bus error is occurring).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 20, 2013 at 09:39:09PM +0000, Joshua Ladd wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I would hold off, if possible, until I can investigate the issue. I
</span><br>
<span class="quotelev1">&gt; don't, off-hand, know why the 2-byte alignment, although I would suspect
</span><br>
<span class="quotelev1">&gt; it's for performance reasons.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Wednesday, February 20, 2013 4:35 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI devel] openib fragment alignment
</span><br>
<span class="quotelev2">&gt; &gt; Importance: High
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Arrgh.  I think you're going to make me eat my words (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2013/02/12143.php">http://www.open-mpi.org/community/lists/devel/2013/02/12143.php</a>).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just recently lost my access to InfiniBand test gear, so I can't test
</span><br>
<span class="quotelev1">&gt; this myself.  Hypothetically, it should be fine.  But throwing in an
</span><br>
<span class="quotelev1">&gt; untested change literally right before a release without IB vendor say-so
</span><br>
<span class="quotelev1">&gt; really, really gives me pause...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mellanox?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 20, 2013, at 4:27 PM, Open MPI &lt;bugs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #3519: Move r28083 to v1.6 branch
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----------------------------------+--------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reporter:  hjelmn                  |      Owner:  hjelmn
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Type:  changeset move request  |     Status:  new
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Priority:  major                   |  Milestone:  Open MPI 1.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Version:  trunk                   |
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----------------------------------+--------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (In [28083]) btl/openib: don't align fragments on 2 byte boundaries
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (changed to 8)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cmr:v1.6,v1.7
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3519">https://svn.open-mpi.org/trac/ompi/ticket/3519</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bugs mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bugs_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12148/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12149.php">Steve Angelovich: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Previous message:</strong> <a href="12147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>In reply to:</strong> <a href="12146.php">Nathan Hjelm: "Re: [OMPI devel] openib fragment alignment"</a>
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
