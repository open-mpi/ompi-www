<?
$subject_val = "Re: [OMPI devel] tm-less tm module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 17:20:27 2016" -->
<!-- isoreceived="20160125222027" -->
<!-- sent="Mon, 25 Jan 2016 14:20:19 -0800" -->
<!-- isosent="20160125222019" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tm-less tm module" -->
<!-- id="CAAvDA15SfV+z-ZfF2b0GC6-M-zh78AVbn+4L=uxOvv1CZomBsA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57odOLGMShnZFGRK=Bsec4q55Hznaz4vc0Dcn6zjmJvRu5Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-25 17:20:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18517.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18515.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18514.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18518.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18518.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>As a practical matter most users probably aren't going to know what to do
<br>
with anything that scrolls off their screen.
<br>
So I think dumping the ompi_info output as-is would be just &quot;noise&quot; to many
<br>
folks.
<br>
That is one reason I didn't just suggest doing exactly that
<br>
(cross-compilation being another)
<br>
<p>However, a suitably summarized output might be just the right thing.
<br>
Perhaps something compact along the lines of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA foo: component1 component2 component2
<br>
&nbsp;MCA foobar: componentA componentB
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;Bindings: C C++ Java Fortan(mpif.h 'use mpi')
<br>
<p>If this could information be generated at the end of configure, rather than
<br>
&quot;make install&quot;, it could save folks some time spent compiling incorrectly
<br>
configured builds.
<br>
<p><p>Another thing one might independently want to consider is having configure
<br>
warn when the required libs are present for a component but the &quot;can
<br>
compile&quot; test fails.
<br>
This would, for instance, catch the situation when the &quot;libfoo&quot; packages is
<br>
installed but the &quot;libfoo-dev&quot; package is not.
<br>
This approach, however, may require non-trivial changes to how all the
<br>
configure probes are performed since I don't believe this is something
<br>
autoconf has existing support for (the AC_CHECK_LIB macro is effectively a
<br>
check for the &quot;libfoo-dev&quot; package only).
<br>
<p><p>Just my $0.02USD, of course.
<br>
<p>-Paul
<br>
<p>On Mon, Jan 25, 2016 at 1:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That makes sense, Paul - what if we output effectively the ompi_info
</span><br>
<span class="quotelev1">&gt; summary of what was built at the end of the make install procedure? Then
</span><br>
<span class="quotelev1">&gt; you would have immediate feedback on the result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 25, 2016 at 1:27 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As one who builds other people's software frequently, I have my own
</span><br>
<span class="quotelev2">&gt;&gt; opinions here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Above all else, is that there is no one &quot;right&quot; answer, but that
</span><br>
<span class="quotelev2">&gt;&gt; consistency with in a product is best.
</span><br>
<span class="quotelev2">&gt;&gt; So (within reason) the same things that work to configure module A and B
</span><br>
<span class="quotelev2">&gt;&gt; should work with C and D as well.
</span><br>
<span class="quotelev2">&gt;&gt; To use an analogy from (human) languages, I dislike &quot;irregular verbs&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The proposal to report (at run time) the existence of TM support on the
</span><br>
<span class="quotelev2">&gt;&gt; system (but lacking in ORTE), doesn't &quot;feel&quot; consistent with existing
</span><br>
<span class="quotelev2">&gt;&gt; practice.
</span><br>
<span class="quotelev2">&gt;&gt; In GASNet we *do* report at runtime if a high-speed network is present
</span><br>
<span class="quotelev2">&gt;&gt; and you are not using it.
</span><br>
<span class="quotelev2">&gt;&gt; For instance we warn if the headers were missing at configure time but we
</span><br>
<span class="quotelev2">&gt;&gt; can see the /dev entry at runtime.
</span><br>
<span class="quotelev2">&gt;&gt; However, we do that uniformly across all the networks and have done this
</span><br>
<span class="quotelev2">&gt;&gt; for years.
</span><br>
<span class="quotelev2">&gt;&gt; So, it is a *consistent* practice in that project.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Keep It Simple Stupid is also an important one.
</span><br>
<span class="quotelev2">&gt;&gt; So, I agree with those who think the proposal to catch this at runtime is
</span><br>
<span class="quotelev2">&gt;&gt; an unnecessary complication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think improving the FAQ a good idea
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do, however, I can think of one thing that might help the &quot;I thought I
</span><br>
<span class="quotelev2">&gt;&gt; had configured X&quot; problem Jeff mentions.
</span><br>
<span class="quotelev2">&gt;&gt; What about a summary output at the end of configure or make?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right now I sometimes use something like the following:
</span><br>
<span class="quotelev2">&gt;&gt;   $ grep 'bindings\.\.\. yes' configure.out
</span><br>
<span class="quotelev2">&gt;&gt;   $ grep -e 'component .* can compile\.\.\. yes' configure.log
</span><br>
<span class="quotelev2">&gt;&gt; This lets me see what is going to be built.
</span><br>
<span class="quotelev2">&gt;&gt; Outputing something like this a the end of configure might encourage
</span><br>
<span class="quotelev2">&gt;&gt; admins to check for their feature X before typing &quot;make&quot;
</span><br>
<span class="quotelev2">&gt;&gt; The existing configury goop can easily be modified to keep a list of
</span><br>
<span class="quotelev2">&gt;&gt; configured components and language bindings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, another alternative is probably easier to implement:
</span><br>
<span class="quotelev2">&gt;&gt; The last step of &quot;make install&quot; could print a message like
</span><br>
<span class="quotelev2">&gt;&gt;   NOTICE: Your installation is complete.
</span><br>
<span class="quotelev2">&gt;&gt;   NOTICE: You can run ompi_info to verify that all expected components
</span><br>
<span class="quotelev2">&gt;&gt; and language bindings have been built.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jan 25, 2016 at 11:13 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Haters gotta hate.  ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kidding aside, ok, you make valid points.  So -- no tm &quot;addition&quot;.  We
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just have to rely on people using functionality like &quot;--with-tm&quot; in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure line to force/ensure that tm (or whatever feature) will actually
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get built.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Jan 25, 2016, at 1:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I think we would be opening a real can of worms with this idea. There
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are environments, for example, that use PBSPro for one part of the system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g., IO nodes), but something else for the compute section.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Personally, I'd rather follow Howard's suggestion.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Mon, Jan 25, 2016 at 10:21 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Mon, Jan 25, 2016 at 05:55:20PM +0000, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Hmm.  I'm of split mind here.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; I can see what Howard is saying here -- adding complexity is usually
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a bad thing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; But we have gotten these problem reports multiple times over the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; years: someone *thinking* that they have built with launcher support X
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g., TM, LSF), but then figuring out later that things aren't running as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected, and after a bunch of work, figure out that it's because they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; didn't build with support X.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Gilles idea actually sounds interesting -- if the tm module detect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some of the sentinel PBS/TM env variables, emit a show_help() if we don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have full TM support compiled in.  This would actually save some users a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bunch of time and frustration.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; --&gt; Keep in mind that the SLRUM launcher is different, because it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all CLI-based (not API-based) and therefore we always build it (because we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't have to find headers and libraries).
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; FWIW, we do have precedent of having extra MCA params for users to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; turn off warnings that they don't want to see.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; I guess the question here is: is there a valid use case for running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in PBS/Torque and *not* wanting to use the TM launcher?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Once case comes to mind. In the case of Cray systems that unfortunately
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; run Moab/Toque we can launch using either alps or torque (Howard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; me if I am wrong). When Sam and I originally wrote the XE support we
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; used alps instead of torque. I am not entirely sure what we do now.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18509.php">http://www.open-mpi.org/community/lists/devel/2016/01/18509.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18510.php">http://www.open-mpi.org/community/lists/devel/2016/01/18510.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18511.php">http://www.open-mpi.org/community/lists/devel/2016/01/18511.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18513.php">http://www.open-mpi.org/community/lists/devel/2016/01/18513.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18514.php">http://www.open-mpi.org/community/lists/devel/2016/01/18514.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18516/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18517.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18515.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18514.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18518.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18518.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
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
