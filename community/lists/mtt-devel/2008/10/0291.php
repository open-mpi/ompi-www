<?
$subject_val = "Re: [MTT devel] mtt patch: summary digest";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 10:58:03 2008" -->
<!-- isoreceived="20081028145803" -->
<!-- sent="Tue, 28 Oct 2008 10:57:46 -0400" -->
<!-- isosent="20081028145746" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt patch: summary digest" -->
<!-- id="B4D4ABCC-1298-4E4B-9A5C-3F226291D350_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="F18B000D-9D19-44F1-B58C-A4E01C74919E_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-28 10:57:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0292.php">Mike Dubman: "Re: [MTT devel] mtt patch: summary digest"</a>
<li><strong>Previous message:</strong> <a href="0290.php">Jeff Squyres: "Re: [MTT devel] mtt patch: summary digest"</a>
<li><strong>In reply to:</strong> <a href="0290.php">Jeff Squyres: "Re: [MTT devel] mtt patch: summary digest"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0292.php">Mike Dubman: "Re: [MTT devel] mtt patch: summary digest"</a>
<li><strong>Reply:</strong> <a href="0292.php">Mike Dubman: "Re: [MTT devel] mtt patch: summary digest"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I sent the whatami patch upstream, and Brian Finley (the whatami  
<br>
author) encouraged us to actually use his recently-included Centos-5  
<br>
support instead of our patch.  This is because his support is generic  
<br>
enough that it should work for any lsb_release-capable machine (to  
<br>
include Centos 5).
<br>
<p>I pulled that down into the MTT trunk; Mike, could you verify that it  
<br>
works for you?
<br>
<p><p>On Oct 28, 2008, at 8:30 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Done!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2008, at 2:06 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hey Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have no svn permissions to commit. Can you please provide me with
</span><br>
<span class="quotelev2">&gt; &gt; one? (login: miked)
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Oct 27, 2008 at 4:38 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Aside from the 2 space tabs, looks great.  ;-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Go ahead and commit; I'll send the whatami patch upstream (whatami
</span><br>
<span class="quotelev2">&gt; &gt; is maintained by Brian Finley at Argonne National Labs).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 26, 2008, at 10:14 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello guys,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please consider applying attached mtt patch to allow following
</span><br>
<span class="quotelev2">&gt; &gt; features:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &#149; Support for centos5
</span><br>
<span class="quotelev2">&gt; &gt;        &#149; Send single, digested email report for all completed tests
</span><br>
<span class="quotelev2">&gt; &gt; (similar to text file summary file)
</span><br>
<span class="quotelev2">&gt; &gt;        &#149; Provide basic statistics in the digested email about
</span><br>
<span class="quotelev2">&gt; &gt; completed tests (similar to junit): duration, mpi version, overall
</span><br>
<span class="quotelev2">&gt; &gt; status.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mike
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mtt_patch.txt&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0292.php">Mike Dubman: "Re: [MTT devel] mtt patch: summary digest"</a>
<li><strong>Previous message:</strong> <a href="0290.php">Jeff Squyres: "Re: [MTT devel] mtt patch: summary digest"</a>
<li><strong>In reply to:</strong> <a href="0290.php">Jeff Squyres: "Re: [MTT devel] mtt patch: summary digest"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0292.php">Mike Dubman: "Re: [MTT devel] mtt patch: summary digest"</a>
<li><strong>Reply:</strong> <a href="0292.php">Mike Dubman: "Re: [MTT devel] mtt patch: summary digest"</a>
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
