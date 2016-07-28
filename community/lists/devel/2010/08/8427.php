<?
$subject_val = "Re: [OMPI devel] New interface code refactor";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 16:43:07 2010" -->
<!-- isoreceived="20100831204307" -->
<!-- sent="Tue, 31 Aug 2010 14:42:52 -0600" -->
<!-- isosent="20100831204252" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New interface code refactor" -->
<!-- id="8F17ACFC-8DF0-4DDD-8D1A-76723D89A979_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=v7dY7pzwcsPi+K8H=VWc6CVJeQWwUJfAwaM67_at_mail.gmail.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-31 16:42:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8428.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Previous message:</strong> <a href="8426.php">Ralph Castain: "[OMPI devel] New interface code refactor"</a>
<li><strong>In reply to:</strong> <a href="8426.php">Ralph Castain: "[OMPI devel] New interface code refactor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8428.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Reply:</strong> <a href="8428.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph -
<br>
<p>My Red Storm dev cluster isn't working right now, but I didn't see an option for no if support at all.  Did I miss it, or are we going to have to add it later?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On Aug 31, 2010, at 2:28 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Per a discussion on the devel telecon a week or two ago, I have refactored the opal/util/if.c code into a static framework (ala the installdirs implementation) so that the various cases are dealt with in configure.m4 instead of a mass of interwoven #if-#else clauses. Jeff will undoubtedly do some cleanup of the configury magic, but the basic functionality is ready for initial review.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For those who care, please clone and check the code at <a href="http://bitbucket.org/rhc/ompi-if">http://bitbucket.org/rhc/ompi-if</a> to ensure that the correct opal/mca/if components are being built for your environment, and that the discovered interfaces are correct. Please let me know (up or down) so we can get a feel for how close we are to bringing this back to the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ATT00002..txt&gt;
</span><br>
<p><pre>
--
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8428.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Previous message:</strong> <a href="8426.php">Ralph Castain: "[OMPI devel] New interface code refactor"</a>
<li><strong>In reply to:</strong> <a href="8426.php">Ralph Castain: "[OMPI devel] New interface code refactor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8428.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Reply:</strong> <a href="8428.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
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
