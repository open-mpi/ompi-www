<?
$subject_val = "Re: [OMPI devel] New interface code refactor";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 16:49:01 2010" -->
<!-- isoreceived="20100831204901" -->
<!-- sent="Tue, 31 Aug 2010 14:48:56 -0600" -->
<!-- isosent="20100831204856" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New interface code refactor" -->
<!-- id="AANLkTi=iT1W_uiOXJPJ4dZ-gTZ0NCu_Amm0dmn8dxpG4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8F17ACFC-8DF0-4DDD-8D1A-76723D89A979_at_sandia.gov" -->
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
<strong>Date:</strong> 2010-08-31 16:48:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8429.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Previous message:</strong> <a href="8427.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>In reply to:</strong> <a href="8427.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8429.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Reply:</strong> <a href="8429.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Reply:</strong> <a href="8430.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe it is there, but correct me if not. All of the component
<br>
configure.m4s depend on a test for sockaddr_in, which I believe RS will fail
<br>
- yes?
<br>
<p>On Tue, Aug 31, 2010 at 2:42 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Ralph -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My Red Storm dev cluster isn't working right now, but I didn't see an
</span><br>
<span class="quotelev1">&gt; option for no if support at all.  Did I miss it, or are we going to have to
</span><br>
<span class="quotelev1">&gt; add it later?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 31, 2010, at 2:28 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Per a discussion on the devel telecon a week or two ago, I have
</span><br>
<span class="quotelev1">&gt; refactored the opal/util/if.c code into a static framework (ala the
</span><br>
<span class="quotelev1">&gt; installdirs implementation) so that the various cases are dealt with in
</span><br>
<span class="quotelev1">&gt; configure.m4 instead of a mass of interwoven #if-#else clauses. Jeff will
</span><br>
<span class="quotelev1">&gt; undoubtedly do some cleanup of the configury magic, but the basic
</span><br>
<span class="quotelev1">&gt; functionality is ready for initial review.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For those who care, please clone and check the code at
</span><br>
<span class="quotelev1">&gt; <a href="http://bitbucket.org/rhc/ompi-if">http://bitbucket.org/rhc/ompi-if</a> to ensure that the correct opal/mca/if
</span><br>
<span class="quotelev1">&gt; components are being built for your environment, and that the discovered
</span><br>
<span class="quotelev1">&gt; interfaces are correct. Please let me know (up or down) so we can get a feel
</span><br>
<span class="quotelev1">&gt; for how close we are to bringing this back to the trunk.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ATT00002..txt&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8428/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8429.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Previous message:</strong> <a href="8427.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>In reply to:</strong> <a href="8427.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8429.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Reply:</strong> <a href="8429.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Reply:</strong> <a href="8430.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
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
