<?
$subject_val = "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins: bot:ibm:retest";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  1 10:51:00 2016" -->
<!-- isoreceived="20160701145100" -->
<!-- sent="Fri, 1 Jul 2016 09:50:58 -0500" -->
<!-- isosent="20160701145058" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Additional bot:retest target for IBM Jenkins: bot:ibm:retest" -->
<!-- id="CAANzjEnHn=gxTQmQiVrT5KSih8trBFKUaibx5fQe+x8SgRTP-g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="95AE3497-59DE-4F12-B43D-A1C09724A77D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Additional bot:retest target for IBM Jenkins: bot:ibm:retest<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-01 10:50:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<li><strong>Previous message:</strong> <a href="19147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<li><strong>In reply to:</strong> <a href="19147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<li><strong>Reply:</strong> <a href="19149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I added a user note here:
<br>
<p><a href="https://github.com/open-mpi/ompi/wiki/PRJenkins#how-to-re-trigger-jenkins-testing">https://github.com/open-mpi/ompi/wiki/PRJenkins#how-to-re-trigger-jenkins-testing</a>
<br>
<p>I added a developer setup note here:
<br>
<p><a href="https://github.com/open-mpi/ompi/wiki/PRJenkinsSetupFirewall#setting-up-the-internaljenkins-job">https://github.com/open-mpi/ompi/wiki/PRJenkinsSetupFirewall#setting-up-the-internaljenkins-job</a>
<br>
<p>The above developer link is for the more complex setup, I don't think we
<br>
have a page for the more simple setup.
<br>
<p><p>On Fri, Jul 1, 2016 at 8:47 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Josh: many thanks, this will be super useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do we have a wiki page on setting up your own CI?  Adding this kind of
</span><br>
<span class="quotelev1">&gt; regexp to your Jenkins would seem like some knowledge that we should
</span><br>
<span class="quotelev1">&gt; capture for others to use.
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
<span class="quotelev2">&gt; &gt; I added a feature to IBM's Jenkins setup yesterday that other orgs doing
</span><br>
<span class="quotelev1">&gt; Jenkins CI testing might find helpful to add as well.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have the retest target for all of the Jenkins systems to re-test a
</span><br>
<span class="quotelev1">&gt; particular PR:
</span><br>
<span class="quotelev2">&gt; &gt;  bot:retest
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wanted an additional target that would trigger only the IBM Jenkins to
</span><br>
<span class="quotelev1">&gt; re-test. This is helpful if we have a local issue with our Jenkins setup
</span><br>
<span class="quotelev1">&gt; and don't want to force all of the Jenkins CI tests to fire at other
</span><br>
<span class="quotelev1">&gt; organizations.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So as of today you can specify the following to just get the IBM CI
</span><br>
<span class="quotelev1">&gt; tests to re-test:
</span><br>
<span class="quotelev2">&gt; &gt;  bot:ibm:retest
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It might take a few minutes to kick off the build since we use a polling
</span><br>
<span class="quotelev1">&gt; model (~2-5 minutes), but it will kick off only the IBM Jenkins CI tests.
</span><br>
<span class="quotelev1">&gt; You can still use the &quot;bot:retest&quot; target to trigger all of the Jenkins
</span><br>
<span class="quotelev1">&gt; services including IBM to re-test.
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
<span class="quotelev2">&gt; &gt; For those organizations interested in how to set this up here are the
</span><br>
<span class="quotelev1">&gt; instructions - just adjusting the regular expression used in the build
</span><br>
<span class="quotelev1">&gt; trigger:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) Enter the 'configuration' in the Jenkins project you have setup to
</span><br>
<span class="quotelev1">&gt; track GitHub PRs
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
<span class="quotelev2">&gt; &gt; Set the 'ibm' to your organization's short name, whatever you want it to
</span><br>
<span class="quotelev1">&gt; be. Then let the list know.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19146.php">http://www.open-mpi.org/community/lists/devel/2016/07/19146.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19147.php">http://www.open-mpi.org/community/lists/devel/2016/07/19147.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19148/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<li><strong>Previous message:</strong> <a href="19147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<li><strong>In reply to:</strong> <a href="19147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<li><strong>Reply:</strong> <a href="19149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
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
