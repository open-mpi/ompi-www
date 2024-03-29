<?
$subject_val = "Re: [OMPI devel] tm-less tm module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 16:27:41 2016" -->
<!-- isoreceived="20160125212741" -->
<!-- sent="Mon, 25 Jan 2016 13:27:36 -0800" -->
<!-- isosent="20160125212736" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tm-less tm module" -->
<!-- id="CAAvDA17NPRmBKwupsbYsjoaG0sFmvS7dptty0c369xMPxVUN1g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CFC708FF-45C2-4506-8A3F-53EC7058932B_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 16:27:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18514.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18512.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18514.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18514.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As one who builds other people's software frequently, I have my own
<br>
opinions here.
<br>
<p>Above all else, is that there is no one &quot;right&quot; answer, but that
<br>
consistency with in a product is best.
<br>
So (within reason) the same things that work to configure module A and B
<br>
should work with C and D as well.
<br>
To use an analogy from (human) languages, I dislike &quot;irregular verbs&quot;.
<br>
<p>The proposal to report (at run time) the existence of TM support on the
<br>
system (but lacking in ORTE), doesn't &quot;feel&quot; consistent with existing
<br>
practice.
<br>
In GASNet we *do* report at runtime if a high-speed network is present and
<br>
you are not using it.
<br>
For instance we warn if the headers were missing at configure time but we
<br>
can see the /dev entry at runtime.
<br>
However, we do that uniformly across all the networks and have done this
<br>
for years.
<br>
So, it is a *consistent* practice in that project.
<br>
<p>Keep It Simple Stupid is also an important one.
<br>
So, I agree with those who think the proposal to catch this at runtime is
<br>
an unnecessary complication.
<br>
<p>I think improving the FAQ a good idea
<br>
<p>I do, however, I can think of one thing that might help the &quot;I thought I
<br>
had configured X&quot; problem Jeff mentions.
<br>
What about a summary output at the end of configure or make?
<br>
<p>Right now I sometimes use something like the following:
<br>
&nbsp;&nbsp;$ grep 'bindings\.\.\. yes' configure.out
<br>
&nbsp;&nbsp;$ grep -e 'component .* can compile\.\.\. yes' configure.log
<br>
This lets me see what is going to be built.
<br>
Outputing something like this a the end of configure might encourage admins
<br>
to check for their feature X before typing &quot;make&quot;
<br>
The existing configury goop can easily be modified to keep a list of
<br>
configured components and language bindings.
<br>
<p>However, another alternative is probably easier to implement:
<br>
The last step of &quot;make install&quot; could print a message like
<br>
&nbsp;&nbsp;NOTICE: Your installation is complete.
<br>
&nbsp;&nbsp;NOTICE: You can run ompi_info to verify that all expected components and
<br>
language bindings have been built.
<br>
<p>-Paul
<br>
<p>On Mon, Jan 25, 2016 at 11:13 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Haters gotta hate.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kidding aside, ok, you make valid points.  So -- no tm &quot;addition&quot;.  We
</span><br>
<span class="quotelev1">&gt; just have to rely on people using functionality like &quot;--with-tm&quot; in the
</span><br>
<span class="quotelev1">&gt; configure line to force/ensure that tm (or whatever feature) will actually
</span><br>
<span class="quotelev1">&gt; get built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 25, 2016, at 1:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think we would be opening a real can of worms with this idea. There
</span><br>
<span class="quotelev1">&gt; are environments, for example, that use PBSPro for one part of the system
</span><br>
<span class="quotelev1">&gt; (e.g., IO nodes), but something else for the compute section.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Personally, I'd rather follow Howard's suggestion.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Jan 25, 2016 at 10:21 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Jan 25, 2016 at 05:55:20PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hmm.  I'm of split mind here.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I can see what Howard is saying here -- adding complexity is usually a
</span><br>
<span class="quotelev1">&gt; bad thing.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But we have gotten these problem reports multiple times over the
</span><br>
<span class="quotelev1">&gt; years: someone *thinking* that they have built with launcher support X
</span><br>
<span class="quotelev1">&gt; (e.g., TM, LSF), but then figuring out later that things aren't running as
</span><br>
<span class="quotelev1">&gt; expected, and after a bunch of work, figure out that it's because they
</span><br>
<span class="quotelev1">&gt; didn't build with support X.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Gilles idea actually sounds interesting -- if the tm module detect
</span><br>
<span class="quotelev1">&gt; some of the sentinel PBS/TM env variables, emit a show_help() if we don't
</span><br>
<span class="quotelev1">&gt; have full TM support compiled in.  This would actually save some users a
</span><br>
<span class="quotelev1">&gt; bunch of time and frustration.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --&gt; Keep in mind that the SLRUM launcher is different, because it's
</span><br>
<span class="quotelev1">&gt; all CLI-based (not API-based) and therefore we always build it (because we
</span><br>
<span class="quotelev1">&gt; don't have to find headers and libraries).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; FWIW, we do have precedent of having extra MCA params for users to
</span><br>
<span class="quotelev1">&gt; turn off warnings that they don't want to see.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I guess the question here is: is there a valid use case for running in
</span><br>
<span class="quotelev1">&gt; PBS/Torque and *not* wanting to use the TM launcher?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Once case comes to mind. In the case of Cray systems that unfortunately
</span><br>
<span class="quotelev2">&gt; &gt; run Moab/Toque we can launch using either alps or torque (Howard correct
</span><br>
<span class="quotelev2">&gt; &gt; me if I am wrong). When Sam and I originally wrote the XE support we
</span><br>
<span class="quotelev2">&gt; &gt; used alps instead of torque. I am not entirely sure what we do now.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18509.php">http://www.open-mpi.org/community/lists/devel/2016/01/18509.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18510.php">http://www.open-mpi.org/community/lists/devel/2016/01/18510.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18511.php">http://www.open-mpi.org/community/lists/devel/2016/01/18511.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18513/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18514.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18512.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18514.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18514.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
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
