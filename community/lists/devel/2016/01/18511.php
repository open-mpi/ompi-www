<?
$subject_val = "Re: [OMPI devel] tm-less tm module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 14:13:32 2016" -->
<!-- isoreceived="20160125191332" -->
<!-- sent="Mon, 25 Jan 2016 19:13:29 +0000" -->
<!-- isosent="20160125191329" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tm-less tm module" -->
<!-- id="CFC708FF-45C2-4506-8A3F-53EC7058932B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57oe80oCFwevHRQUjjs=T8E68Lxe=x3PtLDHj_Sj+0jQayQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 14:13:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18512.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18510.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18510.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18512.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18512.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18513.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Haters gotta hate.  ;-)
<br>
<p>Kidding aside, ok, you make valid points.  So -- no tm &quot;addition&quot;.  We just have to rely on people using functionality like &quot;--with-tm&quot; in the configure line to force/ensure that tm (or whatever feature) will actually get built.
<br>
<p><p><span class="quotelev1">&gt; On Jan 25, 2016, at 1:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we would be opening a real can of worms with this idea. There are environments, for example, that use PBSPro for one part of the system (e.g., IO nodes), but something else for the compute section.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Personally, I'd rather follow Howard's suggestion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 25, 2016 at 10:21 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 25, 2016 at 05:55:20PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hmm.  I'm of split mind here.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can see what Howard is saying here -- adding complexity is usually a bad thing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But we have gotten these problem reports multiple times over the years: someone *thinking* that they have built with launcher support X (e.g., TM, LSF), but then figuring out later that things aren't running as expected, and after a bunch of work, figure out that it's because they didn't build with support X.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles idea actually sounds interesting -- if the tm module detect some of the sentinel PBS/TM env variables, emit a show_help() if we don't have full TM support compiled in.  This would actually save some users a bunch of time and frustration.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; Keep in mind that the SLRUM launcher is different, because it's all CLI-based (not API-based) and therefore we always build it (because we don't have to find headers and libraries).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, we do have precedent of having extra MCA params for users to turn off warnings that they don't want to see.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess the question here is: is there a valid use case for running in PBS/Torque and *not* wanting to use the TM launcher?
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18509.php">http://www.open-mpi.org/community/lists/devel/2016/01/18509.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18510.php">http://www.open-mpi.org/community/lists/devel/2016/01/18510.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18512.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18510.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18510.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18512.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18512.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18513.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
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
