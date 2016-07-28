<?
$subject_val = "Re: [OMPI devel] New interface code refactor";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 16:56:47 2010" -->
<!-- isoreceived="20100831205647" -->
<!-- sent="Tue, 31 Aug 2010 14:56:42 -0600" -->
<!-- isosent="20100831205642" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New interface code refactor" -->
<!-- id="AANLkTi=kM97VaE0xuQVGj44hdPRo=t=eXff+9_SexUgM_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=iT1W_uiOXJPJ4dZ-gTZ0NCu_Amm0dmn8dxpG4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New interface code refactor<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-31 16:56:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8430.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Previous message:</strong> <a href="8428.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>In reply to:</strong> <a href="8428.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8430.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should also have noted that:
<br>
<p>1. all of the opal_ifxxx functions still have their &quot;no-op&quot; versions when
<br>
struct sockaddr_in is not present.
<br>
<p>2. we still &quot;lazy discover&quot; interfaces, so the new opal_if framework is
<br>
-not- opened unless you call one of the opal_ifxxx functions and get a
<br>
non-no-op version
<br>
<p>So I believe RS will be protected, so long as it fails the &quot;have struct
<br>
sockaddr_in&quot; test. I'm pretty sure that is the protection used currently, so
<br>
nothing should have changed in that regard.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Tue, Aug 31, 2010 at 2:48 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I believe it is there, but correct me if not. All of the component
</span><br>
<span class="quotelev1">&gt; configure.m4s depend on a test for sockaddr_in, which I believe RS will fail
</span><br>
<span class="quotelev1">&gt; - yes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 31, 2010 at 2:42 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My Red Storm dev cluster isn't working right now, but I didn't see an
</span><br>
<span class="quotelev2">&gt;&gt; option for no if support at all.  Did I miss it, or are we going to have to
</span><br>
<span class="quotelev2">&gt;&gt; add it later?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 31, 2010, at 2:28 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Per a discussion on the devel telecon a week or two ago, I have
</span><br>
<span class="quotelev2">&gt;&gt; refactored the opal/util/if.c code into a static framework (ala the
</span><br>
<span class="quotelev2">&gt;&gt; installdirs implementation) so that the various cases are dealt with in
</span><br>
<span class="quotelev2">&gt;&gt; configure.m4 instead of a mass of interwoven #if-#else clauses. Jeff will
</span><br>
<span class="quotelev2">&gt;&gt; undoubtedly do some cleanup of the configury magic, but the basic
</span><br>
<span class="quotelev2">&gt;&gt; functionality is ready for initial review.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For those who care, please clone and check the code at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://bitbucket.org/rhc/ompi-if">http://bitbucket.org/rhc/ompi-if</a> to ensure that the correct opal/mca/if
</span><br>
<span class="quotelev2">&gt;&gt; components are being built for your environment, and that the discovered
</span><br>
<span class="quotelev2">&gt;&gt; interfaces are correct. Please let me know (up or down) so we can get a feel
</span><br>
<span class="quotelev2">&gt;&gt; for how close we are to bringing this back to the trunk.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;ATT00002..txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;  Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8429/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8430.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Previous message:</strong> <a href="8428.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>In reply to:</strong> <a href="8428.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8430.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
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
