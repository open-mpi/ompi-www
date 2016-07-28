<?
$subject_val = "[OMPI devel] Additional bot:retest target for IBM Jenkins: bot:ibm:retest";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  1 09:37:27 2016" -->
<!-- isoreceived="20160701133727" -->
<!-- sent="Fri, 1 Jul 2016 08:37:25 -0500" -->
<!-- isosent="20160701133725" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] Additional bot:retest target for IBM Jenkins: bot:ibm:retest" -->
<!-- id="CAANzjEmfTeE++jb0v8W0qm+jooWRAuqHeVnPyCmiBgNy0feUTQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Additional bot:retest target for IBM Jenkins: bot:ibm:retest<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-01 09:37:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<li><strong>Previous message:</strong> <a href="19145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] XRC_INI QPs and modify_qp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<li><strong>Reply:</strong> <a href="19147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I added a feature to IBM's Jenkins setup yesterday that other orgs doing
<br>
Jenkins CI testing might find helpful to add as well.
<br>
<p>We have the retest target for all of the Jenkins systems to re-test a
<br>
particular PR:
<br>
&nbsp;*bot:retest*
<br>
<p>I wanted an additional target that would trigger only the IBM Jenkins to
<br>
re-test. This is helpful if we have a local issue with our Jenkins setup
<br>
and don't want to force all of the Jenkins CI tests to fire at other
<br>
organizations.
<br>
<p>So as of today you can specify the following to just get the IBM CI tests
<br>
to re-test:
<br>
&nbsp;*bot:ibm:retest*
<br>
<p>It might take a few minutes to kick off the build since we use a polling
<br>
model (~2-5 minutes), but it will kick off only the IBM Jenkins CI tests.
<br>
You can still use the &quot;bot:retest&quot; target to trigger all of the Jenkins
<br>
services including IBM to re-test.
<br>
<p>I hope folks find this useful when working on PRs.
<br>
<p>-- Josh
<br>
<p><p>For those organizations interested in how to set this up here are the
<br>
instructions - just adjusting the regular expression used in the build
<br>
trigger:
<br>
<p>1) Enter the 'configuration' in the Jenkins project you have setup to track
<br>
GitHub PRs
<br>
2) Under &quot;Build Triggers&quot; -&gt; &quot;GitHub Pull Request Builder&quot;
<br>
&nbsp;- Click on &quot;Advanced...&quot;
<br>
&nbsp;- Set &quot;Trigger phrase&quot; to
<br>
&nbsp;&nbsp;.*bot:(ibm:)?retest.*
<br>
<p>Set the 'ibm' to your organization's short name, whatever you want it to
<br>
be. Then let the list know.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19146/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<li><strong>Previous message:</strong> <a href="19145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] XRC_INI QPs and modify_qp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<li><strong>Reply:</strong> <a href="19147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
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
