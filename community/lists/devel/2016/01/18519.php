<?
$subject_val = "Re: [OMPI devel] tm-less tm module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 17:33:07 2016" -->
<!-- isoreceived="20160125223307" -->
<!-- sent="Mon, 25 Jan 2016 22:32:39 +0000" -->
<!-- isosent="20160125223239" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tm-less tm module" -->
<!-- id="955FB950-E5C2-4A87-A9B4-F82BABCB634A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA17Ti1LUJmFm4ypNy0mh=uD-p6GFMiY8CR68ERgzFwKcgw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-25 17:32:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18520.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18518.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18517.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18516.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know if I agree here.
<br>
<p>1. Everything about what configure is going to do is already sent to stdout (yes, I know, people don't look at things that scroll off their screen).  But the point is -- if they want to grep for output, they can already do so.
<br>
<p>2. I think it would be incredible challenging to make a list at the end of configure (or make install -- take your pick) that a) shows all the optional things that Open MPI is (and/or is not) installing, b) does not scroll of the screen, and c) isn't a super-dense eye chart that people will just end up ignoring anyway.
<br>
<p>2a. It's a slippery slope to say &quot;Well, we'll only show the *important* things that Open MPI is/is not installing,&quot; because even if you start with a short list, a) people won't read it anyway ;-), and b) that list will grow over time such that it ultimately will result in a super-dense eye chart.
<br>
<p>This is why I tend to like the MPI application run-time kinds of solutions: it just seems like there's a higher probability that people will notice those messages, because a) everyone ignores configure/make install output (if they didn't they're know what OMPI was/was not installing), b) when a show_help message is emitted, it breaks up the [familiar] output of the user's application, and therefore is easy to recognize as &quot;whoa, that's an error message that I should probably read.&quot;
<br>
<p>Just my $0.02.
<br>
<p><p><p><p><span class="quotelev1">&gt; On Jan 25, 2016, at 5:23 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, Nathan read my mind!
</span><br>
<span class="quotelev1">&gt; This is (more or less) what I suggest in the post I was typing when Nathan's post arrived.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 25, 2016 at 2:13 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev2">&gt; &gt;    summary of what was built at the end of the make install procedure? Then
</span><br>
<span class="quotelev2">&gt; &gt;    you would have immediate feedback on the result.
</span><br>
<span class="quotelev2">&gt; &gt;    On Mon, Jan 25, 2016 at 1:27 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
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
<span class="quotelev2">&gt; &gt;      So (within reason) the same things that work to configure module A and B
</span><br>
<span class="quotelev2">&gt; &gt;      should work with C and D as well.
</span><br>
<span class="quotelev2">&gt; &gt;      To use an analogy from (human) languages, I dislike &quot;irregular verbs&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;      The proposal to report (at run time) the existence of TM support on the
</span><br>
<span class="quotelev2">&gt; &gt;      system (but lacking in ORTE), doesn't &quot;feel&quot; consistent with existing
</span><br>
<span class="quotelev2">&gt; &gt;      practice.
</span><br>
<span class="quotelev2">&gt; &gt;      In GASNet we *do* report at runtime if a high-speed network is present
</span><br>
<span class="quotelev2">&gt; &gt;      and you are not using it.
</span><br>
<span class="quotelev2">&gt; &gt;      For instance we warn if the headers were missing at configure time but
</span><br>
<span class="quotelev2">&gt; &gt;      we can see the /dev entry at runtime.
</span><br>
<span class="quotelev2">&gt; &gt;      However, we do that uniformly across all the networks and have done this
</span><br>
<span class="quotelev2">&gt; &gt;      for years.
</span><br>
<span class="quotelev2">&gt; &gt;      So, it is a *consistent* practice in that project.
</span><br>
<span class="quotelev2">&gt; &gt;      Keep It Simple Stupid is also an important one.
</span><br>
<span class="quotelev2">&gt; &gt;      So, I agree with those who think the proposal to catch this at runtime
</span><br>
<span class="quotelev2">&gt; &gt;      is an unnecessary complication.
</span><br>
<span class="quotelev2">&gt; &gt;      I think improving the FAQ a good idea
</span><br>
<span class="quotelev2">&gt; &gt;      I do, however, I can think of one thing that might help the &quot;I thought I
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
<span class="quotelev2">&gt; &gt;        NOTICE: You can run ompi_info to verify that all expected components
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
<span class="quotelev2">&gt; &gt;        Kidding aside, ok, you make valid points.  So -- no tm &quot;addition&quot;.  We
</span><br>
<span class="quotelev2">&gt; &gt;        just have to rely on people using functionality like &quot;--with-tm&quot; in
</span><br>
<span class="quotelev2">&gt; &gt;        the configure line to force/ensure that tm (or whatever feature) will
</span><br>
<span class="quotelev2">&gt; &gt;        actually get built.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; On Jan 25, 2016, at 1:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;        &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; I think we would be opening a real can of worms with this idea.
</span><br>
<span class="quotelev2">&gt; &gt;        There are environments, for example, that use PBSPro for one part of
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
<span class="quotelev3">&gt; &gt;        &gt; On Mon, Jan 25, 2016 at 10:21 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        wrote:
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; On Mon, Jan 25, 2016 at 05:55:20PM +0000, Jeff Squyres (jsquyres)
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
<span class="quotelev4">&gt; &gt;        &gt; &gt; But we have gotten these problem reports multiple times over the
</span><br>
<span class="quotelev2">&gt; &gt;        years: someone *thinking* that they have built with launcher support X
</span><br>
<span class="quotelev2">&gt; &gt;        (e.g., TM, LSF), but then figuring out later that things aren't
</span><br>
<span class="quotelev2">&gt; &gt;        running as expected, and after a bunch of work, figure out that it's
</span><br>
<span class="quotelev2">&gt; &gt;        because they didn't build with support X.
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt; Gilles idea actually sounds interesting -- if the tm module detect
</span><br>
<span class="quotelev2">&gt; &gt;        some of the sentinel PBS/TM env variables, emit a show_help() if we
</span><br>
<span class="quotelev2">&gt; &gt;        don't have full TM support compiled in.  This would actually save some
</span><br>
<span class="quotelev2">&gt; &gt;        users a bunch of time and frustration.
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt; --&gt; Keep in mind that the SLRUM launcher is different, because
</span><br>
<span class="quotelev2">&gt; &gt;        it's all CLI-based (not API-based) and therefore we always build it
</span><br>
<span class="quotelev2">&gt; &gt;        (because we don't have to find headers and libraries).
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt; FWIW, we do have precedent of having extra MCA params for users to
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
<span class="quotelev3">&gt; &gt;        &gt; me if I am wrong). When Sam and I originally wrote the XE support we
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; used alps instead of torque. I am not entirely sure what we do now.
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
<span class="quotelev3">&gt; &gt;        &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev3">&gt; &gt;        &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18514.php">http://www.open-mpi.org/community/lists/devel/2016/01/18514.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18515.php">http://www.open-mpi.org/community/lists/devel/2016/01/18515.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18517.php">http://www.open-mpi.org/community/lists/devel/2016/01/18517.php</a>
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
<li><strong>Next message:</strong> <a href="18520.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18518.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18517.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18516.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
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
