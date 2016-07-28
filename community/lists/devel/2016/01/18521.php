<?
$subject_val = "Re: [OMPI devel] tm-less tm module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 17:55:38 2016" -->
<!-- isoreceived="20160125225538" -->
<!-- sent="Mon, 25 Jan 2016 14:55:34 -0800" -->
<!-- isosent="20160125225534" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tm-less tm module" -->
<!-- id="CAMD57oeH65dmFVeubh6zwawjgBQ=fOepRCVy7wOLXvpOzuY=6w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B45FDE15-E965-4C8A-98CC-6C875E830463_at_cisco.com" -->
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
<strong>Date:</strong> 2016-01-25 17:55:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18522.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18520.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18520.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My concern with the runtime solution is that I fear we will suffer the
<br>
death by a thousand cuts as we try to navigate our way around all the odd
<br>
configurations that exist out there. What I don't want to do is get into a
<br>
constant game of whack-a-mole where we are trying to only emit the warning
<br>
when we should, and always emit it when we should.
<br>
<p>Just seems to me like we are begging for a long-running search for the
<br>
perfect solution.
<br>
<p><p>On Mon, Jan 25, 2016 at 2:37 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I'd like to point out an offhand comment that I made earlier that seems to
</span><br>
<span class="quotelev1">&gt; have gotten lost -- let me cite the README, because it cites it much better
</span><br>
<span class="quotelev1">&gt; than I did earlier in this thread:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; Note that for many of Open MPI's --with-&lt;foo&gt; options, Open MPI will,
</span><br>
<span class="quotelev1">&gt; by default, search for header files and/or libraries for &lt;foo&gt;.  If
</span><br>
<span class="quotelev1">&gt; the relevant files are found, Open MPI will built support for &lt;foo&gt;;
</span><br>
<span class="quotelev1">&gt; if they are not found, Open MPI will skip building support for &lt;foo&gt;.
</span><br>
<span class="quotelev1">&gt; However, if you specify --with-&lt;foo&gt; on the configure command line and
</span><br>
<span class="quotelev1">&gt; Open MPI is unable to find relevant support for &lt;foo&gt;, configure will
</span><br>
<span class="quotelev1">&gt; assume that it was unable to provide a feature that was specifically
</span><br>
<span class="quotelev1">&gt; requested and will abort so that a human can resolve out the issue.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, if the user had specified --with-tm (even without a path), and Open
</span><br>
<span class="quotelev1">&gt; MPI's configure was not able to find TM support, configure would have
</span><br>
<span class="quotelev1">&gt; aborted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This --with-&lt;foo&gt; support is uniform across all of its options.  Hence, if
</span><br>
<span class="quotelev1">&gt; you want to guarantee that you have support for a specific feature, you
</span><br>
<span class="quotelev1">&gt; should use --with-&lt;foo&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm almost certain that we decided on this behavior back near the
</span><br>
<span class="quotelev1">&gt; beginning of the Open MPI project because of conversations exactly like
</span><br>
<span class="quotelev1">&gt; this (and me/others citing that writing something out at the end of
</span><br>
<span class="quotelev1">&gt; configure might end up being a losing battle)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 25, 2016, at 5:30 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; HI Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I like Paul's suggestion for configury summary output a lot.  It would
</span><br>
<span class="quotelev1">&gt; have helped me when I was trying to deal with an oddball
</span><br>
<span class="quotelev2">&gt; &gt; one-off install of the moab/torque software on one of the non-standard
</span><br>
<span class="quotelev1">&gt; front ends at LANL.  The libfabric configury has
</span><br>
<span class="quotelev2">&gt; &gt; such a summary output at the end of configure and it makes it much
</span><br>
<span class="quotelev1">&gt; simpler (for a much smaller project) to check that
</span><br>
<span class="quotelev2">&gt; &gt; you're getting what you expected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I still say updating the FAQ with something more precise is in order.
</span><br>
<span class="quotelev1">&gt; I'll work on that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2016-01-25 15:20 GMT-07:00 Paul Hargrove &lt;phhargrove_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As a practical matter most users probably aren't going to know what to
</span><br>
<span class="quotelev1">&gt; do with anything that scrolls off their screen.
</span><br>
<span class="quotelev2">&gt; &gt; So I think dumping the ompi_info output as-is would be just &quot;noise&quot; to
</span><br>
<span class="quotelev1">&gt; many folks.
</span><br>
<span class="quotelev2">&gt; &gt; That is one reason I didn't just suggest doing exactly that
</span><br>
<span class="quotelev1">&gt; (cross-compilation being another)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, a suitably summarized output might be just the right thing.
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps something compact along the lines of
</span><br>
<span class="quotelev2">&gt; &gt;     MCA foo: component1 component2 component2
</span><br>
<span class="quotelev2">&gt; &gt;  MCA foobar: componentA componentB
</span><br>
<span class="quotelev2">&gt; &gt;   ...
</span><br>
<span class="quotelev2">&gt; &gt;    Bindings: C C++ Java Fortan(mpif.h 'use mpi')
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If this could information be generated at the end of configure, rather
</span><br>
<span class="quotelev1">&gt; than &quot;make install&quot;, it could save folks some time spent compiling
</span><br>
<span class="quotelev1">&gt; incorrectly configured builds.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Another thing one might independently want to consider is having
</span><br>
<span class="quotelev1">&gt; configure warn when the required libs are present for a component but the
</span><br>
<span class="quotelev1">&gt; &quot;can compile&quot; test fails.
</span><br>
<span class="quotelev2">&gt; &gt; This would, for instance, catch the situation when the &quot;libfoo&quot; packages
</span><br>
<span class="quotelev1">&gt; is installed but the &quot;libfoo-dev&quot; package is not.
</span><br>
<span class="quotelev2">&gt; &gt; This approach, however, may require non-trivial changes to how all the
</span><br>
<span class="quotelev1">&gt; configure probes are performed since I don't believe this is something
</span><br>
<span class="quotelev1">&gt; autoconf has existing support for (the AC_CHECK_LIB macro is effectively a
</span><br>
<span class="quotelev1">&gt; check for the &quot;libfoo-dev&quot; package only).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just my $0.02USD, of course.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Jan 25, 2016 at 1:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; That makes sense, Paul - what if we output effectively the ompi_info
</span><br>
<span class="quotelev1">&gt; summary of what was built at the end of the make install procedure? Then
</span><br>
<span class="quotelev1">&gt; you would have immediate feedback on the result.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Jan 25, 2016 at 1:27 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; As one who builds other people's software frequently, I have my own
</span><br>
<span class="quotelev1">&gt; opinions here.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Above all else, is that there is no one &quot;right&quot; answer, but that
</span><br>
<span class="quotelev1">&gt; consistency with in a product is best.
</span><br>
<span class="quotelev2">&gt; &gt; So (within reason) the same things that work to configure module A and B
</span><br>
<span class="quotelev1">&gt; should work with C and D as well.
</span><br>
<span class="quotelev2">&gt; &gt; To use an analogy from (human) languages, I dislike &quot;irregular verbs&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The proposal to report (at run time) the existence of TM support on the
</span><br>
<span class="quotelev1">&gt; system (but lacking in ORTE), doesn't &quot;feel&quot; consistent with existing
</span><br>
<span class="quotelev1">&gt; practice.
</span><br>
<span class="quotelev2">&gt; &gt; In GASNet we *do* report at runtime if a high-speed network is present
</span><br>
<span class="quotelev1">&gt; and you are not using it.
</span><br>
<span class="quotelev2">&gt; &gt; For instance we warn if the headers were missing at configure time but
</span><br>
<span class="quotelev1">&gt; we can see the /dev entry at runtime.
</span><br>
<span class="quotelev2">&gt; &gt; However, we do that uniformly across all the networks and have done this
</span><br>
<span class="quotelev1">&gt; for years.
</span><br>
<span class="quotelev2">&gt; &gt; So, it is a *consistent* practice in that project.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Keep It Simple Stupid is also an important one.
</span><br>
<span class="quotelev2">&gt; &gt; So, I agree with those who think the proposal to catch this at runtime
</span><br>
<span class="quotelev1">&gt; is an unnecessary complication.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think improving the FAQ a good idea
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I do, however, I can think of one thing that might help the &quot;I thought I
</span><br>
<span class="quotelev1">&gt; had configured X&quot; problem Jeff mentions.
</span><br>
<span class="quotelev2">&gt; &gt; What about a summary output at the end of configure or make?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Right now I sometimes use something like the following:
</span><br>
<span class="quotelev2">&gt; &gt;   $ grep 'bindings\.\.\. yes' configure.out
</span><br>
<span class="quotelev2">&gt; &gt;   $ grep -e 'component .* can compile\.\.\. yes' configure.log
</span><br>
<span class="quotelev2">&gt; &gt; This lets me see what is going to be built.
</span><br>
<span class="quotelev2">&gt; &gt; Outputing something like this a the end of configure might encourage
</span><br>
<span class="quotelev1">&gt; admins to check for their feature X before typing &quot;make&quot;
</span><br>
<span class="quotelev2">&gt; &gt; The existing configury goop can easily be modified to keep a list of
</span><br>
<span class="quotelev1">&gt; configured components and language bindings.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, another alternative is probably easier to implement:
</span><br>
<span class="quotelev2">&gt; &gt; The last step of &quot;make install&quot; could print a message like
</span><br>
<span class="quotelev2">&gt; &gt;   NOTICE: Your installation is complete.
</span><br>
<span class="quotelev2">&gt; &gt;   NOTICE: You can run ompi_info to verify that all expected components
</span><br>
<span class="quotelev1">&gt; and language bindings have been built.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Jan 25, 2016 at 11:13 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Haters gotta hate.  ;-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kidding aside, ok, you make valid points.  So -- no tm &quot;addition&quot;.  We
</span><br>
<span class="quotelev1">&gt; just have to rely on people using functionality like &quot;--with-tm&quot; in the
</span><br>
<span class="quotelev1">&gt; configure line to force/ensure that tm (or whatever feature) will actually
</span><br>
<span class="quotelev1">&gt; get built.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jan 25, 2016, at 1:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I think we would be opening a real can of worms with this idea. There
</span><br>
<span class="quotelev1">&gt; are environments, for example, that use PBSPro for one part of the system
</span><br>
<span class="quotelev1">&gt; (e.g., IO nodes), but something else for the compute section.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Personally, I'd rather follow Howard's suggestion.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mon, Jan 25, 2016 at 10:21 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mon, Jan 25, 2016 at 05:55:20PM +0000, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hmm.  I'm of split mind here.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I can see what Howard is saying here -- adding complexity is usually
</span><br>
<span class="quotelev1">&gt; a bad thing.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; But we have gotten these problem reports multiple times over the
</span><br>
<span class="quotelev1">&gt; years: someone *thinking* that they have built with launcher support X
</span><br>
<span class="quotelev1">&gt; (e.g., TM, LSF), but then figuring out later that things aren't running as
</span><br>
<span class="quotelev1">&gt; expected, and after a bunch of work, figure out that it's because they
</span><br>
<span class="quotelev1">&gt; didn't build with support X.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Gilles idea actually sounds interesting -- if the tm module detect
</span><br>
<span class="quotelev1">&gt; some of the sentinel PBS/TM env variables, emit a show_help() if we don't
</span><br>
<span class="quotelev1">&gt; have full TM support compiled in.  This would actually save some users a
</span><br>
<span class="quotelev1">&gt; bunch of time and frustration.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --&gt; Keep in mind that the SLRUM launcher is different, because it's
</span><br>
<span class="quotelev1">&gt; all CLI-based (not API-based) and therefore we always build it (because we
</span><br>
<span class="quotelev1">&gt; don't have to find headers and libraries).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; FWIW, we do have precedent of having extra MCA params for users to
</span><br>
<span class="quotelev1">&gt; turn off warnings that they don't want to see.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I guess the question here is: is there a valid use case for running
</span><br>
<span class="quotelev1">&gt; in PBS/Torque and *not* wanting to use the TM launcher?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Once case comes to mind. In the case of Cray systems that unfortunately
</span><br>
<span class="quotelev3">&gt; &gt; &gt; run Moab/Toque we can launch using either alps or torque (Howard
</span><br>
<span class="quotelev1">&gt; correct
</span><br>
<span class="quotelev3">&gt; &gt; &gt; me if I am wrong). When Sam and I originally wrote the XE support we
</span><br>
<span class="quotelev3">&gt; &gt; &gt; used alps instead of torque. I am not entirely sure what we do now.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Nathan
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18509.php">http://www.open-mpi.org/community/lists/devel/2016/01/18509.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18510.php">http://www.open-mpi.org/community/lists/devel/2016/01/18510.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18511.php">http://www.open-mpi.org/community/lists/devel/2016/01/18511.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18513.php">http://www.open-mpi.org/community/lists/devel/2016/01/18513.php</a>
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
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18514.php">http://www.open-mpi.org/community/lists/devel/2016/01/18514.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18516.php">http://www.open-mpi.org/community/lists/devel/2016/01/18516.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18518.php">http://www.open-mpi.org/community/lists/devel/2016/01/18518.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18520.php">http://www.open-mpi.org/community/lists/devel/2016/01/18520.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18521/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18522.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18520.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18520.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
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
