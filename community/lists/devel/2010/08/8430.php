<?
$subject_val = "Re: [OMPI devel] New interface code refactor";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 17:03:43 2010" -->
<!-- isoreceived="20100831210343" -->
<!-- sent="Tue, 31 Aug 2010 15:03:25 -0600" -->
<!-- isosent="20100831210325" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New interface code refactor" -->
<!-- id="F3992499-4598-4395-AE5E-8EB1A8E79790_at_sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-31 17:03:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8431.php">ananda.mudar_at_[hidden]: "[OMPI devel] Possible memory leak"</a>
<li><strong>Previous message:</strong> <a href="8429.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>In reply to:</strong> <a href="8428.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8445.php">Jeff Squyres: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8445.php">Jeff Squyres: "Re: [OMPI devel] New interface code refactor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see, I misunderstood how you organized things.  Never mind :).
<br>
<p><p>Brian
<br>
<p>On Aug 31, 2010, at 2:48 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I believe it is there, but correct me if not. All of the component configure.m4s depend on a test for sockaddr_in, which I believe RS will fail - yes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 31, 2010 at 2:42 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralph -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My Red Storm dev cluster isn't working right now, but I didn't see an option for no if support at all.  Did I miss it, or are we going to have to add it later?
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
<span class="quotelev2">&gt; &gt; Per a discussion on the devel telecon a week or two ago, I have refactored the opal/util/if.c code into a static framework (ala the installdirs implementation) so that the various cases are dealt with in configure.m4 instead of a mass of interwoven #if-#else clauses. Jeff will undoubtedly do some cleanup of the configury magic, but the basic functionality is ready for initial review.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For those who care, please clone and check the code at <a href="http://bitbucket.org/rhc/ompi-if">http://bitbucket.org/rhc/ompi-if</a> to ensure that the correct opal/mca/if components are being built for your environment, and that the discovered interfaces are correct. Please let me know (up or down) so we can get a feel for how close we are to bringing this back to the trunk.
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
<li><strong>Next message:</strong> <a href="8431.php">ananda.mudar_at_[hidden]: "[OMPI devel] Possible memory leak"</a>
<li><strong>Previous message:</strong> <a href="8429.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>In reply to:</strong> <a href="8428.php">Ralph Castain: "Re: [OMPI devel] New interface code refactor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8445.php">Jeff Squyres: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8445.php">Jeff Squyres: "Re: [OMPI devel] New interface code refactor"</a>
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
