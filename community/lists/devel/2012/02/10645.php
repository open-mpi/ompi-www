<?
$subject_val = "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 14:02:37 2012" -->
<!-- isoreceived="20120229190237" -->
<!-- sent="Wed, 29 Feb 2012 11:02:16 -0800" -->
<!-- isosent="20120229190216" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3" -->
<!-- id="CAAvDA17RAgJAcP5hkeo4uw+svb-xPwLU6h_g5G8YHo3dFyDd6g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="797E1B91-E6F3-4A5E-B06A-DD9A743CBB52_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 14:02:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10646.php">Larry Baker: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Previous message:</strong> <a href="10644.php">Jeffrey Squyres: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>In reply to:</strong> <a href="10644.php">Jeffrey Squyres: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10637.php">Christopher Samuel: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Jeff.
<br>
<p>I agree that the vendor ID could push to 1.6, since an end-user can easily
<br>
edit the corresponding file post-install if needed (as opposed to source
<br>
changes).
<br>
<p>For the other items I'll follow up in the ticket system if/when necessary.
<br>
<p>-Paul
<br>
<p>On Wed, Feb 29, 2012 at 10:35 AM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 28, 2012, at 6:40 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Testing 1.5.5rc3 on a &quot;representative sampling&quot; of my many platforms
</span><br>
<span class="quotelev1">&gt; looks good.
</span><br>
<span class="quotelev2">&gt; &gt; In particular, I've retested various platforms that showed any
</span><br>
<span class="quotelev1">&gt; significant problems previously and found them to be fixed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Though minor, I do see that the following patches I've posted are not
</span><br>
<span class="quotelev1">&gt; applied
</span><br>
<span class="quotelev2">&gt; &gt; + Add a Mellanox PCI vendor ID to the device params file
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10615.php">http://www.open-mpi.org/community/lists/devel/2012/02/10615.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;    Posted 13 hours ago and not yet on trunk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just pinged Mellanox for confirmation.  I see no reason to do this, but it
</span><br>
<span class="quotelev1">&gt; is their hardware, so I want them in the loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; + Fix show_help_lex.l to avoid undefined behavior (and silence
</span><br>
<span class="quotelev1">&gt; associated warning from flex)
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10521.php">http://www.open-mpi.org/community/lists/devel/2012/02/10521.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;    Was applied to trunk as r25983
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pushed this to v1.6 (because we know that the trailing context is ok in
</span><br>
<span class="quotelev1">&gt; all OMPI cases): CMR #3025.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; + Reorder includes to avoid &quot;'struct in_addr' declared inside parameter
</span><br>
<span class="quotelev1">&gt; list&quot; warnings
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10484.php">http://www.open-mpi.org/community/lists/devel/2012/02/10484.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;    Was applied to trunk as r25984
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pushed this to v1.6: CMR #3026.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am assuming there is no interest in the MIPS atomics fixes, or the
</span><br>
<span class="quotelev1">&gt; PPC64 atomics work-around for an XLC bug.
</span><br>
<span class="quotelev2">&gt; &gt; MIPS 1of2:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10416.php">http://www.open-mpi.org/community/lists/devel/2012/02/10416.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; MIPS 2of2:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10417.php">http://www.open-mpi.org/community/lists/devel/2012/02/10417.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; PPC64/XLC:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10603.php">http://www.open-mpi.org/community/lists/devel/2012/02/10603.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; If there *is* interest in these, let me know if there is any assistance
</span><br>
<span class="quotelev1">&gt; I can lend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There actually is, but I'm ok pushing all of these to v1.6.  I'll file
</span><br>
<span class="quotelev1">&gt; tickets for v1.6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far as I see it, there's just the 1 issue of the Mellanox device ID.
</span><br>
<span class="quotelev1">&gt;  Which, honestly, I'm ok pushing to v1.6 because it's for fairly old
</span><br>
<span class="quotelev1">&gt; Mellanox hardware -- that ID is already in the ConnectX entry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10645/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10646.php">Larry Baker: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Previous message:</strong> <a href="10644.php">Jeffrey Squyres: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>In reply to:</strong> <a href="10644.php">Jeffrey Squyres: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10637.php">Christopher Samuel: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
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
