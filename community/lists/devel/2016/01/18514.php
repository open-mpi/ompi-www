<?
$subject_val = "Re: [OMPI devel] tm-less tm module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 16:46:55 2016" -->
<!-- isoreceived="20160125214655" -->
<!-- sent="Mon, 25 Jan 2016 13:46:44 -0800" -->
<!-- isosent="20160125214644" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tm-less tm module" -->
<!-- id="CAMD57odOLGMShnZFGRK=Bsec4q55Hznaz4vc0Dcn6zjmJvRu5Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA17NPRmBKwupsbYsjoaG0sFmvS7dptty0c369xMPxVUN1g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-25 16:46:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18515.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18513.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18513.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18515.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18515.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18516.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That makes sense, Paul - what if we output effectively the ompi_info
<br>
summary of what was built at the end of the make install procedure? Then
<br>
you would have immediate feedback on the result.
<br>
<p>On Mon, Jan 25, 2016 at 1:27 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As one who builds other people's software frequently, I have my own
</span><br>
<span class="quotelev1">&gt; opinions here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Above all else, is that there is no one &quot;right&quot; answer, but that
</span><br>
<span class="quotelev1">&gt; consistency with in a product is best.
</span><br>
<span class="quotelev1">&gt; So (within reason) the same things that work to configure module A and B
</span><br>
<span class="quotelev1">&gt; should work with C and D as well.
</span><br>
<span class="quotelev1">&gt; To use an analogy from (human) languages, I dislike &quot;irregular verbs&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The proposal to report (at run time) the existence of TM support on the
</span><br>
<span class="quotelev1">&gt; system (but lacking in ORTE), doesn't &quot;feel&quot; consistent with existing
</span><br>
<span class="quotelev1">&gt; practice.
</span><br>
<span class="quotelev1">&gt; In GASNet we *do* report at runtime if a high-speed network is present and
</span><br>
<span class="quotelev1">&gt; you are not using it.
</span><br>
<span class="quotelev1">&gt; For instance we warn if the headers were missing at configure time but we
</span><br>
<span class="quotelev1">&gt; can see the /dev entry at runtime.
</span><br>
<span class="quotelev1">&gt; However, we do that uniformly across all the networks and have done this
</span><br>
<span class="quotelev1">&gt; for years.
</span><br>
<span class="quotelev1">&gt; So, it is a *consistent* practice in that project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep It Simple Stupid is also an important one.
</span><br>
<span class="quotelev1">&gt; So, I agree with those who think the proposal to catch this at runtime is
</span><br>
<span class="quotelev1">&gt; an unnecessary complication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think improving the FAQ a good idea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do, however, I can think of one thing that might help the &quot;I thought I
</span><br>
<span class="quotelev1">&gt; had configured X&quot; problem Jeff mentions.
</span><br>
<span class="quotelev1">&gt; What about a summary output at the end of configure or make?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now I sometimes use something like the following:
</span><br>
<span class="quotelev1">&gt;   $ grep 'bindings\.\.\. yes' configure.out
</span><br>
<span class="quotelev1">&gt;   $ grep -e 'component .* can compile\.\.\. yes' configure.log
</span><br>
<span class="quotelev1">&gt; This lets me see what is going to be built.
</span><br>
<span class="quotelev1">&gt; Outputing something like this a the end of configure might encourage
</span><br>
<span class="quotelev1">&gt; admins to check for their feature X before typing &quot;make&quot;
</span><br>
<span class="quotelev1">&gt; The existing configury goop can easily be modified to keep a list of
</span><br>
<span class="quotelev1">&gt; configured components and language bindings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, another alternative is probably easier to implement:
</span><br>
<span class="quotelev1">&gt; The last step of &quot;make install&quot; could print a message like
</span><br>
<span class="quotelev1">&gt;   NOTICE: Your installation is complete.
</span><br>
<span class="quotelev1">&gt;   NOTICE: You can run ompi_info to verify that all expected components and
</span><br>
<span class="quotelev1">&gt; language bindings have been built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 25, 2016 at 11:13 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Haters gotta hate.  ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kidding aside, ok, you make valid points.  So -- no tm &quot;addition&quot;.  We
</span><br>
<span class="quotelev2">&gt;&gt; just have to rely on people using functionality like &quot;--with-tm&quot; in the
</span><br>
<span class="quotelev2">&gt;&gt; configure line to force/ensure that tm (or whatever feature) will actually
</span><br>
<span class="quotelev2">&gt;&gt; get built.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Jan 25, 2016, at 1:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I think we would be opening a real can of worms with this idea. There
</span><br>
<span class="quotelev2">&gt;&gt; are environments, for example, that use PBSPro for one part of the system
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., IO nodes), but something else for the compute section.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Personally, I'd rather follow Howard's suggestion.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mon, Jan 25, 2016 at 10:21 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mon, Jan 25, 2016 at 05:55:20PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Hmm.  I'm of split mind here.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I can see what Howard is saying here -- adding complexity is usually
</span><br>
<span class="quotelev2">&gt;&gt; a bad thing.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; But we have gotten these problem reports multiple times over the
</span><br>
<span class="quotelev2">&gt;&gt; years: someone *thinking* that they have built with launcher support X
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., TM, LSF), but then figuring out later that things aren't running as
</span><br>
<span class="quotelev2">&gt;&gt; expected, and after a bunch of work, figure out that it's because they
</span><br>
<span class="quotelev2">&gt;&gt; didn't build with support X.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Gilles idea actually sounds interesting -- if the tm module detect
</span><br>
<span class="quotelev2">&gt;&gt; some of the sentinel PBS/TM env variables, emit a show_help() if we don't
</span><br>
<span class="quotelev2">&gt;&gt; have full TM support compiled in.  This would actually save some users a
</span><br>
<span class="quotelev2">&gt;&gt; bunch of time and frustration.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; --&gt; Keep in mind that the SLRUM launcher is different, because it's
</span><br>
<span class="quotelev2">&gt;&gt; all CLI-based (not API-based) and therefore we always build it (because we
</span><br>
<span class="quotelev2">&gt;&gt; don't have to find headers and libraries).
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; FWIW, we do have precedent of having extra MCA params for users to
</span><br>
<span class="quotelev2">&gt;&gt; turn off warnings that they don't want to see.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I guess the question here is: is there a valid use case for running
</span><br>
<span class="quotelev2">&gt;&gt; in PBS/Torque and *not* wanting to use the TM launcher?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Once case comes to mind. In the case of Cray systems that unfortunately
</span><br>
<span class="quotelev3">&gt;&gt; &gt; run Moab/Toque we can launch using either alps or torque (Howard correct
</span><br>
<span class="quotelev3">&gt;&gt; &gt; me if I am wrong). When Sam and I originally wrote the XE support we
</span><br>
<span class="quotelev3">&gt;&gt; &gt; used alps instead of torque. I am not entirely sure what we do now.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Nathan
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18509.php">http://www.open-mpi.org/community/lists/devel/2016/01/18509.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18510.php">http://www.open-mpi.org/community/lists/devel/2016/01/18510.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18511.php">http://www.open-mpi.org/community/lists/devel/2016/01/18511.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18513.php">http://www.open-mpi.org/community/lists/devel/2016/01/18513.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18514/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18515.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18513.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18513.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18515.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18515.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18516.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
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
