<?
$subject_val = "Re: [OMPI devel] tm-less tm module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 13:31:53 2016" -->
<!-- isoreceived="20160125183153" -->
<!-- sent="Mon, 25 Jan 2016 10:31:49 -0800" -->
<!-- isosent="20160125183149" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tm-less tm module" -->
<!-- id="CAMD57oe80oCFwevHRQUjjs=T8E68Lxe=x3PtLDHj_Sj+0jQayQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20160125182123.GB61377_at_mordor.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] tm-less tm module<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 13:31:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18509.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18509.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we would be opening a real can of worms with this idea. There are
<br>
environments, for example, that use PBSPro for one part of the system
<br>
(e.g., IO nodes), but something else for the compute section.
<br>
<p>Personally, I'd rather follow Howard's suggestion.
<br>
<p>On Mon, Jan 25, 2016 at 10:21 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Jan 25, 2016 at 05:55:20PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hmm.  I'm of split mind here.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can see what Howard is saying here -- adding complexity is usually a
</span><br>
<span class="quotelev1">&gt; bad thing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But we have gotten these problem reports multiple times over the years:
</span><br>
<span class="quotelev1">&gt; someone *thinking* that they have built with launcher support X (e.g., TM,
</span><br>
<span class="quotelev1">&gt; LSF), but then figuring out later that things aren't running as expected,
</span><br>
<span class="quotelev1">&gt; and after a bunch of work, figure out that it's because they didn't build
</span><br>
<span class="quotelev1">&gt; with support X.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles idea actually sounds interesting -- if the tm module detect some
</span><br>
<span class="quotelev1">&gt; of the sentinel PBS/TM env variables, emit a show_help() if we don't have
</span><br>
<span class="quotelev1">&gt; full TM support compiled in.  This would actually save some users a bunch
</span><br>
<span class="quotelev1">&gt; of time and frustration.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; Keep in mind that the SLRUM launcher is different, because it's all
</span><br>
<span class="quotelev1">&gt; CLI-based (not API-based) and therefore we always build it (because we
</span><br>
<span class="quotelev1">&gt; don't have to find headers and libraries).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, we do have precedent of having extra MCA params for users to turn
</span><br>
<span class="quotelev1">&gt; off warnings that they don't want to see.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess the question here is: is there a valid use case for running in
</span><br>
<span class="quotelev1">&gt; PBS/Torque and *not* wanting to use the TM launcher?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once case comes to mind. In the case of Cray systems that unfortunately
</span><br>
<span class="quotelev1">&gt; run Moab/Toque we can launch using either alps or torque (Howard correct
</span><br>
<span class="quotelev1">&gt; me if I am wrong). When Sam and I originally wrote the XE support we
</span><br>
<span class="quotelev1">&gt; used alps instead of torque. I am not entirely sure what we do now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18509.php">http://www.open-mpi.org/community/lists/devel/2016/01/18509.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18510/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18509.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18509.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
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
