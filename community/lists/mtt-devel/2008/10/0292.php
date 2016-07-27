<?
$subject_val = "Re: [MTT devel] mtt patch: summary digest";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 03:08:12 2008" -->
<!-- isoreceived="20081029070812" -->
<!-- sent="Wed, 29 Oct 2008 09:08:07 +0200" -->
<!-- isosent="20081029070807" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt patch: summary digest" -->
<!-- id="b20b52800810290008m499b4afdy6d28ed9f12fc0690_at_mail.gmail.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="B4D4ABCC-1298-4E4B-9A5C-3F226291D350_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] mtt patch: summary digest<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-29 03:08:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/11/0293.php">Mike Dubman: "[MTT devel] mpi_details section with different scenarios for command line params"</a>
<li><strong>Previous message:</strong> <a href="0291.php">Jeff Squyres: "Re: [MTT devel] mtt patch: summary digest"</a>
<li><strong>In reply to:</strong> <a href="0291.php">Jeff Squyres: "Re: [MTT devel] mtt patch: summary digest"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yep. works as a charm
<br>
<p>On Tue, Oct 28, 2008 at 4:57 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I sent the whatami patch upstream, and Brian Finley (the whatami author)
</span><br>
<span class="quotelev1">&gt; encouraged us to actually use his recently-included Centos-5 support instead
</span><br>
<span class="quotelev1">&gt; of our patch.  This is because his support is generic enough that it should
</span><br>
<span class="quotelev1">&gt; work for any lsb_release-capable machine (to include Centos 5).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I pulled that down into the MTT trunk; Mike, could you verify that it works
</span><br>
<span class="quotelev1">&gt; for you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2008, at 8:30 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Done!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 28, 2008, at 2:06 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hey Jeff,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have no svn permissions to commit. Can you please provide me with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; one? (login: miked)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mon, Oct 27, 2008 at 4:38 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Aside from the 2 space tabs, looks great.  ;-)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Go ahead and commit; I'll send the whatami patch upstream (whatami
</span><br>
<span class="quotelev3">&gt;&gt; &gt; is maintained by Brian Finley at Argonne National Labs).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Oct 26, 2008, at 10:14 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello guys,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Please consider applying attached mtt patch to allow following
</span><br>
<span class="quotelev3">&gt;&gt; &gt; features:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &#149; Support for centos5
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &#149; Send single, digested email report for all completed tests
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (similar to text file summary file)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &#149; Provide basic statistics in the digested email about
</span><br>
<span class="quotelev3">&gt;&gt; &gt; completed tests (similar to junit): duration, mpi version, overall
</span><br>
<span class="quotelev3">&gt;&gt; &gt; status.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Mike
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;mtt_patch.txt&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0292/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/11/0293.php">Mike Dubman: "[MTT devel] mpi_details section with different scenarios for command line params"</a>
<li><strong>Previous message:</strong> <a href="0291.php">Jeff Squyres: "Re: [MTT devel] mtt patch: summary digest"</a>
<li><strong>In reply to:</strong> <a href="0291.php">Jeff Squyres: "Re: [MTT devel] mtt patch: summary digest"</a>
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
