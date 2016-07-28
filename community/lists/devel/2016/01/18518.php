<?
$subject_val = "Re: [OMPI devel] tm-less tm module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 17:30:46 2016" -->
<!-- isoreceived="20160125223046" -->
<!-- sent="Mon, 25 Jan 2016 15:30:35 -0700" -->
<!-- isosent="20160125223035" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tm-less tm module" -->
<!-- id="CAF1Cqj7xMZSXaq60JNoCSeJPiZdFxXDJBbvfqHCY6g3JLGqD9g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA15SfV+z-ZfF2b0GC6-M-zh78AVbn+4L=uxOvv1CZomBsA_at_mail.gmail.com" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 17:30:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18519.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18517.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18516.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18520.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18520.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Folks,
<br>
<p>I like Paul's suggestion for configury summary output a lot.  It would have
<br>
helped me when I was trying to deal with an oddball
<br>
one-off install of the moab/torque software on one of the non-standard
<br>
front ends at LANL.  The libfabric configury has
<br>
such a summary output at the end of configure and it makes it much simpler
<br>
(for a much smaller project) to check that
<br>
you're getting what you expected.
<br>
<p>I still say updating the FAQ with something more precise is in order.  I'll
<br>
work on that.
<br>
<p>Howard
<br>
<p><p>2016-01-25 15:20 GMT-07:00 Paul Hargrove &lt;phhargrove_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a practical matter most users probably aren't going to know what to do
</span><br>
<span class="quotelev1">&gt; with anything that scrolls off their screen.
</span><br>
<span class="quotelev1">&gt; So I think dumping the ompi_info output as-is would be just &quot;noise&quot; to
</span><br>
<span class="quotelev1">&gt; many folks.
</span><br>
<span class="quotelev1">&gt; That is one reason I didn't just suggest doing exactly that
</span><br>
<span class="quotelev1">&gt; (cross-compilation being another)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, a suitably summarized output might be just the right thing.
</span><br>
<span class="quotelev1">&gt; Perhaps something compact along the lines of
</span><br>
<span class="quotelev1">&gt;     MCA foo: component1 component2 component2
</span><br>
<span class="quotelev1">&gt;  MCA foobar: componentA componentB
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;    Bindings: C C++ Java Fortan(mpif.h 'use mpi')
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this could information be generated at the end of configure, rather
</span><br>
<span class="quotelev1">&gt; than &quot;make install&quot;, it could save folks some time spent compiling
</span><br>
<span class="quotelev1">&gt; incorrectly configured builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another thing one might independently want to consider is having configure
</span><br>
<span class="quotelev1">&gt; warn when the required libs are present for a component but the &quot;can
</span><br>
<span class="quotelev1">&gt; compile&quot; test fails.
</span><br>
<span class="quotelev1">&gt; This would, for instance, catch the situation when the &quot;libfoo&quot; packages
</span><br>
<span class="quotelev1">&gt; is installed but the &quot;libfoo-dev&quot; package is not.
</span><br>
<span class="quotelev1">&gt; This approach, however, may require non-trivial changes to how all the
</span><br>
<span class="quotelev1">&gt; configure probes are performed since I don't believe this is something
</span><br>
<span class="quotelev1">&gt; autoconf has existing support for (the AC_CHECK_LIB macro is effectively a
</span><br>
<span class="quotelev1">&gt; check for the &quot;libfoo-dev&quot; package only).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just my $0.02USD, of course.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 25, 2016 at 1:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That makes sense, Paul - what if we output effectively the ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; summary of what was built at the end of the make install procedure? Then
</span><br>
<span class="quotelev2">&gt;&gt; you would have immediate feedback on the result.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jan 25, 2016 at 1:27 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As one who builds other people's software frequently, I have my own
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opinions here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Above all else, is that there is no one &quot;right&quot; answer, but that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consistency with in a product is best.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So (within reason) the same things that work to configure module A and B
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should work with C and D as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To use an analogy from (human) languages, I dislike &quot;irregular verbs&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The proposal to report (at run time) the existence of TM support on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system (but lacking in ORTE), doesn't &quot;feel&quot; consistent with existing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; practice.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In GASNet we *do* report at runtime if a high-speed network is present
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and you are not using it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For instance we warn if the headers were missing at configure time but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we can see the /dev entry at runtime.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, we do that uniformly across all the networks and have done this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for years.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, it is a *consistent* practice in that project.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Keep It Simple Stupid is also an important one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I agree with those who think the proposal to catch this at runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is an unnecessary complication.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think improving the FAQ a good idea
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do, however, I can think of one thing that might help the &quot;I thought I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; had configured X&quot; problem Jeff mentions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What about a summary output at the end of configure or make?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Right now I sometimes use something like the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   $ grep 'bindings\.\.\. yes' configure.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   $ grep -e 'component .* can compile\.\.\. yes' configure.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This lets me see what is going to be built.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Outputing something like this a the end of configure might encourage
</span><br>
<span class="quotelev3">&gt;&gt;&gt; admins to check for their feature X before typing &quot;make&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The existing configury goop can easily be modified to keep a list of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configured components and language bindings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, another alternative is probably easier to implement:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The last step of &quot;make install&quot; could print a message like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   NOTICE: Your installation is complete.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   NOTICE: You can run ompi_info to verify that all expected components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and language bindings have been built.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Jan 25, 2016 at 11:13 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Haters gotta hate.  ;-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kidding aside, ok, you make valid points.  So -- no tm &quot;addition&quot;.  We
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just have to rely on people using functionality like &quot;--with-tm&quot; in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure line to force/ensure that tm (or whatever feature) will actually
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; get built.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; On Jan 25, 2016, at 1:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I think we would be opening a real can of worms with this idea. There
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are environments, for example, that use PBSPro for one part of the system
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (e.g., IO nodes), but something else for the compute section.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Personally, I'd rather follow Howard's suggestion.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; On Mon, Jan 25, 2016 at 10:21 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; On Mon, Jan 25, 2016 at 05:55:20PM +0000, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt; &gt; Hmm.  I'm of split mind here.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt; &gt; I can see what Howard is saying here -- adding complexity is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; usually a bad thing.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt; &gt; But we have gotten these problem reports multiple times over the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; years: someone *thinking* that they have built with launcher support X
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (e.g., TM, LSF), but then figuring out later that things aren't running as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expected, and after a bunch of work, figure out that it's because they
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; didn't build with support X.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt; &gt; Gilles idea actually sounds interesting -- if the tm module detect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some of the sentinel PBS/TM env variables, emit a show_help() if we don't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have full TM support compiled in.  This would actually save some users a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bunch of time and frustration.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt; &gt; --&gt; Keep in mind that the SLRUM launcher is different, because it's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all CLI-based (not API-based) and therefore we always build it (because we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't have to find headers and libraries).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt; &gt; FWIW, we do have precedent of having extra MCA params for users to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; turn off warnings that they don't want to see.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt; &gt; I guess the question here is: is there a valid use case for running
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in PBS/Torque and *not* wanting to use the TM launcher?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Once case comes to mind. In the case of Cray systems that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unfortunately
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; run Moab/Toque we can launch using either alps or torque (Howard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correct
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; me if I am wrong). When Sam and I originally wrote the XE support we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; used alps instead of torque. I am not entirely sure what we do now.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -Nathan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18509.php">http://www.open-mpi.org/community/lists/devel/2016/01/18509.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18510.php">http://www.open-mpi.org/community/lists/devel/2016/01/18510.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18511.php">http://www.open-mpi.org/community/lists/devel/2016/01/18511.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18513.php">http://www.open-mpi.org/community/lists/devel/2016/01/18513.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18514.php">http://www.open-mpi.org/community/lists/devel/2016/01/18514.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18516.php">http://www.open-mpi.org/community/lists/devel/2016/01/18516.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18518/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18519.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18517.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18516.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18520.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18520.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
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
