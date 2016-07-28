<?
$subject_val = "Re: [OMPI devel] tm-less tm module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 17:23:21 2016" -->
<!-- isoreceived="20160125222321" -->
<!-- sent="Mon, 25 Jan 2016 14:23:07 -0800" -->
<!-- isosent="20160125222307" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tm-less tm module" -->
<!-- id="CAAvDA17Ti1LUJmFm4ypNy0mh=uD-p6GFMiY8CR68ERgzFwKcgw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20160125221353.GE61377_at_mordor.lanl.gov" -->
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
<strong>Date:</strong> 2016-01-25 17:23:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18518.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18516.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18515.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18519.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18519.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, Nathan read my mind!
<br>
This is (more or less) what I suggest in the post I was typing when
<br>
Nathan's post arrived.
<br>
<p>-Paul
<br>
<p>On Mon, Jan 25, 2016 at 2:13 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another thing that might be useful is at the end of configure print out
</span><br>
<span class="quotelev1">&gt; a list of each framework with a list of components and some build info
</span><br>
<span class="quotelev1">&gt; (static vs dynamic, etc). Something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; plm:
</span><br>
<span class="quotelev1">&gt;   alps (dynamic)
</span><br>
<span class="quotelev1">&gt;   rsh (dynamic)
</span><br>
<span class="quotelev1">&gt;   tm (dynamic)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 25, 2016 at 01:46:44PM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    That makes sense, Paul - what if we output effectively the ompi_info
</span><br>
<span class="quotelev2">&gt; &gt;    summary of what was built at the end of the make install procedure?
</span><br>
<span class="quotelev1">&gt; Then
</span><br>
<span class="quotelev2">&gt; &gt;    you would have immediate feedback on the result.
</span><br>
<span class="quotelev2">&gt; &gt;    On Mon, Jan 25, 2016 at 1:27 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      As one who builds other people's software frequently, I have my own
</span><br>
<span class="quotelev2">&gt; &gt;      opinions here.
</span><br>
<span class="quotelev2">&gt; &gt;      Above all else, is that there is no one &quot;right&quot; answer, but that
</span><br>
<span class="quotelev2">&gt; &gt;      consistency with in a product is best.
</span><br>
<span class="quotelev2">&gt; &gt;      So (within reason) the same things that work to configure module A
</span><br>
<span class="quotelev1">&gt; and B
</span><br>
<span class="quotelev2">&gt; &gt;      should work with C and D as well.
</span><br>
<span class="quotelev2">&gt; &gt;      To use an analogy from (human) languages, I dislike &quot;irregular
</span><br>
<span class="quotelev1">&gt; verbs&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;      The proposal to report (at run time) the existence of TM support on
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;      system (but lacking in ORTE), doesn't &quot;feel&quot; consistent with
</span><br>
<span class="quotelev1">&gt; existing
</span><br>
<span class="quotelev2">&gt; &gt;      practice.
</span><br>
<span class="quotelev2">&gt; &gt;      In GASNet we *do* report at runtime if a high-speed network is
</span><br>
<span class="quotelev1">&gt; present
</span><br>
<span class="quotelev2">&gt; &gt;      and you are not using it.
</span><br>
<span class="quotelev2">&gt; &gt;      For instance we warn if the headers were missing at configure time
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev2">&gt; &gt;      we can see the /dev entry at runtime.
</span><br>
<span class="quotelev2">&gt; &gt;      However, we do that uniformly across all the networks and have done
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev2">&gt; &gt;      for years.
</span><br>
<span class="quotelev2">&gt; &gt;      So, it is a *consistent* practice in that project.
</span><br>
<span class="quotelev2">&gt; &gt;      Keep It Simple Stupid is also an important one.
</span><br>
<span class="quotelev2">&gt; &gt;      So, I agree with those who think the proposal to catch this at
</span><br>
<span class="quotelev1">&gt; runtime
</span><br>
<span class="quotelev2">&gt; &gt;      is an unnecessary complication.
</span><br>
<span class="quotelev2">&gt; &gt;      I think improving the FAQ a good idea
</span><br>
<span class="quotelev2">&gt; &gt;      I do, however, I can think of one thing that might help the &quot;I
</span><br>
<span class="quotelev1">&gt; thought I
</span><br>
<span class="quotelev2">&gt; &gt;      had configured X&quot; problem Jeff mentions.
</span><br>
<span class="quotelev2">&gt; &gt;      What about a summary output at the end of configure or make?
</span><br>
<span class="quotelev2">&gt; &gt;      Right now I sometimes use something like the following:
</span><br>
<span class="quotelev2">&gt; &gt;        $ grep 'bindings\.\.\. yes' configure.out
</span><br>
<span class="quotelev2">&gt; &gt;        $ grep -e 'component .* can compile\.\.\. yes' configure.log
</span><br>
<span class="quotelev2">&gt; &gt;      This lets me see what is going to be built.
</span><br>
<span class="quotelev2">&gt; &gt;      Outputing something like this a the end of configure might encourage
</span><br>
<span class="quotelev2">&gt; &gt;      admins to check for their feature X before typing &quot;make&quot;
</span><br>
<span class="quotelev2">&gt; &gt;      The existing configury goop can easily be modified to keep a list of
</span><br>
<span class="quotelev2">&gt; &gt;      configured components and language bindings.
</span><br>
<span class="quotelev2">&gt; &gt;      However, another alternative is probably easier to implement:
</span><br>
<span class="quotelev2">&gt; &gt;      The last step of &quot;make install&quot; could print a message like
</span><br>
<span class="quotelev2">&gt; &gt;        NOTICE: Your installation is complete.
</span><br>
<span class="quotelev2">&gt; &gt;        NOTICE: You can run ompi_info to verify that all expected
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev2">&gt; &gt;      and language bindings have been built.
</span><br>
<span class="quotelev2">&gt; &gt;      -Paul
</span><br>
<span class="quotelev2">&gt; &gt;      On Mon, Jan 25, 2016 at 11:13 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt; &gt;      &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Haters gotta hate.  ;-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Kidding aside, ok, you make valid points.  So -- no tm
</span><br>
<span class="quotelev1">&gt; &quot;addition&quot;.  We
</span><br>
<span class="quotelev2">&gt; &gt;        just have to rely on people using functionality like &quot;--with-tm&quot;
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev2">&gt; &gt;        the configure line to force/ensure that tm (or whatever feature)
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev2">&gt; &gt;        actually get built.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; On Jan 25, 2016, at 1:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;        &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; I think we would be opening a real can of worms with this idea.
</span><br>
<span class="quotelev2">&gt; &gt;        There are environments, for example, that use PBSPro for one part
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev2">&gt; &gt;        the system (e.g., IO nodes), but something else for the compute
</span><br>
<span class="quotelev2">&gt; &gt;        section.
</span><br>
<span class="quotelev3">&gt; &gt;        &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; Personally, I'd rather follow Howard's suggestion.
</span><br>
<span class="quotelev3">&gt; &gt;        &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; On Mon, Jan 25, 2016 at 10:21 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        wrote:
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; On Mon, Jan 25, 2016 at 05:55:20PM +0000, Jeff Squyres
</span><br>
<span class="quotelev1">&gt; (jsquyres)
</span><br>
<span class="quotelev2">&gt; &gt;        wrote:
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt; Hmm.  I'm of split mind here.
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt; I can see what Howard is saying here -- adding complexity is
</span><br>
<span class="quotelev2">&gt; &gt;        usually a bad thing.
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt; But we have gotten these problem reports multiple times over
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;        years: someone *thinking* that they have built with launcher
</span><br>
<span class="quotelev1">&gt; support X
</span><br>
<span class="quotelev2">&gt; &gt;        (e.g., TM, LSF), but then figuring out later that things aren't
</span><br>
<span class="quotelev2">&gt; &gt;        running as expected, and after a bunch of work, figure out that
</span><br>
<span class="quotelev1">&gt; it's
</span><br>
<span class="quotelev2">&gt; &gt;        because they didn't build with support X.
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt; Gilles idea actually sounds interesting -- if the tm module
</span><br>
<span class="quotelev1">&gt; detect
</span><br>
<span class="quotelev2">&gt; &gt;        some of the sentinel PBS/TM env variables, emit a show_help() if
</span><br>
<span class="quotelev1">&gt; we
</span><br>
<span class="quotelev2">&gt; &gt;        don't have full TM support compiled in.  This would actually save
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev2">&gt; &gt;        users a bunch of time and frustration.
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt; --&gt; Keep in mind that the SLRUM launcher is different, because
</span><br>
<span class="quotelev2">&gt; &gt;        it's all CLI-based (not API-based) and therefore we always build
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev2">&gt; &gt;        (because we don't have to find headers and libraries).
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt; FWIW, we do have precedent of having extra MCA params for
</span><br>
<span class="quotelev1">&gt; users to
</span><br>
<span class="quotelev2">&gt; &gt;        turn off warnings that they don't want to see.
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt; I guess the question here is: is there a valid use case for
</span><br>
<span class="quotelev2">&gt; &gt;        running in PBS/Torque and *not* wanting to use the TM launcher?
</span><br>
<span class="quotelev3">&gt; &gt;        &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; Once case comes to mind. In the case of Cray systems that
</span><br>
<span class="quotelev2">&gt; &gt;        unfortunately
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; run Moab/Toque we can launch using either alps or torque (Howard
</span><br>
<span class="quotelev2">&gt; &gt;        correct
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; me if I am wrong). When Sam and I originally wrote the XE
</span><br>
<span class="quotelev1">&gt; support we
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; used alps instead of torque. I am not entirely sure what we do
</span><br>
<span class="quotelev1">&gt; now.
</span><br>
<span class="quotelev3">&gt; &gt;        &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; -Nathan
</span><br>
<span class="quotelev3">&gt; &gt;        &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;        <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18509.php">http://www.open-mpi.org/community/lists/devel/2016/01/18509.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;        &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;        <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18510.php">http://www.open-mpi.org/community/lists/devel/2016/01/18510.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        --
</span><br>
<span class="quotelev2">&gt; &gt;        Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;        jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;        For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt;        <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;        devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;        devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;        Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;        Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;        <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18511.php">http://www.open-mpi.org/community/lists/devel/2016/01/18511.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      --
</span><br>
<span class="quotelev2">&gt; &gt;      Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;      Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt;      Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt;      Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;      devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;      devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;      Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18513.php">http://www.open-mpi.org/community/lists/devel/2016/01/18513.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18514.php">http://www.open-mpi.org/community/lists/devel/2016/01/18514.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18515.php">http://www.open-mpi.org/community/lists/devel/2016/01/18515.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18517/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18518.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18516.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18515.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18519.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18519.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
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
