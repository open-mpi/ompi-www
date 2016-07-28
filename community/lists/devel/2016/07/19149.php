<?
$subject_val = "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  1 11:08:41 2016" -->
<!-- isoreceived="20160701150841" -->
<!-- sent="Fri, 1 Jul 2016 15:08:38 +0000" -->
<!-- isosent="20160701150838" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest" -->
<!-- id="DC5515A9-5DDE-454E-9397-D4138607C342_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEnHn=gxTQmQiVrT5KSih8trBFKUaibx5fQe+x8SgRTP-g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-01 11:08:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19150.php">Ralph Castain: "[OMPI devel] BML/R2 error"</a>
<li><strong>Previous message:</strong> <a href="19148.php">Josh Hursey: "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins: bot:ibm:retest"</a>
<li><strong>In reply to:</strong> <a href="19148.php">Josh Hursey: "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins: bot:ibm:retest"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sweet; thanks Josh.
<br>
<p><span class="quotelev1">&gt; On Jul 1, 2016, at 10:50 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I added a user note here:
</span><br>
<span class="quotelev1">&gt;   <a href="https://github.com/open-mpi/ompi/wiki/PRJenkins#how-to-re-trigger-jenkins-testing">https://github.com/open-mpi/ompi/wiki/PRJenkins#how-to-re-trigger-jenkins-testing</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I added a developer setup note here:
</span><br>
<span class="quotelev1">&gt;   <a href="https://github.com/open-mpi/ompi/wiki/PRJenkinsSetupFirewall#setting-up-the-internaljenkins-job">https://github.com/open-mpi/ompi/wiki/PRJenkinsSetupFirewall#setting-up-the-internaljenkins-job</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The above developer link is for the more complex setup, I don't think we have a page for the more simple setup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 1, 2016 at 8:47 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Josh: many thanks, this will be super useful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do we have a wiki page on setting up your own CI?  Adding this kind of regexp to your Jenkins would seem like some knowledge that we should capture for others to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 1, 2016, at 9:37 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I added a feature to IBM's Jenkins setup yesterday that other orgs doing Jenkins CI testing might find helpful to add as well.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have the retest target for all of the Jenkins systems to re-test a particular PR:
</span><br>
<span class="quotelev2">&gt; &gt;  bot:retest
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wanted an additional target that would trigger only the IBM Jenkins to re-test. This is helpful if we have a local issue with our Jenkins setup and don't want to force all of the Jenkins CI tests to fire at other organizations.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So as of today you can specify the following to just get the IBM CI tests to re-test:
</span><br>
<span class="quotelev2">&gt; &gt;  bot:ibm:retest
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It might take a few minutes to kick off the build since we use a polling model (~2-5 minutes), but it will kick off only the IBM Jenkins CI tests. You can still use the &quot;bot:retest&quot; target to trigger all of the Jenkins services including IBM to re-test.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope folks find this useful when working on PRs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For those organizations interested in how to set this up here are the instructions - just adjusting the regular expression used in the build trigger:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) Enter the 'configuration' in the Jenkins project you have setup to track GitHub PRs
</span><br>
<span class="quotelev2">&gt; &gt; 2) Under &quot;Build Triggers&quot; -&gt; &quot;GitHub Pull Request Builder&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  - Click on &quot;Advanced...&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  - Set &quot;Trigger phrase&quot; to
</span><br>
<span class="quotelev2">&gt; &gt;   .*bot:(ibm:)?retest.*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Set the 'ibm' to your organization's short name, whatever you want it to be. Then let the list know.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19146.php">http://www.open-mpi.org/community/lists/devel/2016/07/19146.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19147.php">http://www.open-mpi.org/community/lists/devel/2016/07/19147.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19148.php">http://www.open-mpi.org/community/lists/devel/2016/07/19148.php</a>
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
<li><strong>Next message:</strong> <a href="19150.php">Ralph Castain: "[OMPI devel] BML/R2 error"</a>
<li><strong>Previous message:</strong> <a href="19148.php">Josh Hursey: "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins: bot:ibm:retest"</a>
<li><strong>In reply to:</strong> <a href="19148.php">Josh Hursey: "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins: bot:ibm:retest"</a>
<!-- nextthread="start" -->
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
