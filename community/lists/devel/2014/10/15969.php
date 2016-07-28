<?
$subject_val = "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 10:14:07 2014" -->
<!-- isoreceived="20141002141407" -->
<!-- sent="Thu, 2 Oct 2014 14:14:04 +0000" -->
<!-- isosent="20141002141404" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business" -->
<!-- id="DD0A0595-4260-41F0-A730-044B770A1BA8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="542D54B1.9030206_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-02 10:14:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15970.php">Jeff Squyres (jsquyres): "[OMPI devel] End of life: Bitbucket and Github read-only SVN mirrors"</a>
<li><strong>Previous message:</strong> <a href="15968.php">Vasily Filipov: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>In reply to:</strong> <a href="15968.php">Vasily Filipov: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
According to Github, you haven't accepted your invitation yet:
<br>
<p>[cid:34B7E99E-FBB8-4B2D-974A-6FAF2CC15E82_at_[hidden]]
<br>
<p><p>On Oct 2, 2014, at 9:35 AM, Vasily Filipov &lt;vasily_at_[hidden]&lt;mailto:vasily_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hi Jeff,
<br>
I didn't get any &quot;OMPI GitHub invite email &quot;, I opened GitHub account (vasilyMellanox) and set a &quot;Watch&quot; state for :
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi">https://github.com/open-mpi/ompi</a>
<br>
&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi-release">https://github.com/open-mpi/ompi-release</a>
<br>
<p>Am I supposed to do something additional ?
<br>
<p>Thank you,
<br>
Vasily.
<br>
<p>On 02-Oct-14 13:24, Jeff Squyres (jsquyres) wrote:
<br>
(sorry for the delay in receiving this mail; there was a problem with the devel mailing list last night, unrelated to the Github migration)
<br>
<p>Short version
<br>
=============
<br>
<p>The Github conversion is complete.  All OMPI activity is now at Github.  Please read the wiki, particularly the first few pages that deal specifically with Git/Github:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/wiki">https://github.com/open-mpi/ompi/wiki</a>
<br>
<p>You can safely re-enable your &quot;watch&quot; settings on our main repos now:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi">https://github.com/open-mpi/ompi</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi-release">https://github.com/open-mpi/ompi-release</a>
<br>
<p>&quot;make dist&quot; and nightly tarballs are not quite functional yet; I am getting tangled up in version numbering, and did not finish it last night.  But everything else seems to be working.
<br>
<p>Several people need to file pull requests to replace their still-open CMRs that were orphaned at Trac.
<br>
<p>A few people need to accept their Github &quot;ompi&quot; invitations so that Github Issues can be assigned to them:
<br>
<p>More detail
<br>
===========
<br>
<p>1. The following people need to accept the OMPI GitHub invite email so that issues can be assigned to them:
<br>
<p>- Manjunath Gorentla Venkata
<br>
- Vasily Philipov
<br>
<p>Please tell me when you've accepted so that I can assign the proper issue(s) to you.
<br>
<p>2. The following still-open CMRs were not brought over, and need to be re-filed as pull requests:
<br>
<p>- <a href="https://svn.open-mpi.org/trac/ompi/ticket/4216">https://svn.open-mpi.org/trac/ompi/ticket/4216</a>: Nathan (BLOCKER)
<br>
- <a href="https://svn.open-mpi.org/trac/ompi/ticket/4816">https://svn.open-mpi.org/trac/ompi/ticket/4816</a>: Ralph
<br>
- <a href="https://svn.open-mpi.org/trac/ompi/ticket/4872">https://svn.open-mpi.org/trac/ompi/ticket/4872</a>: Ralph
<br>
- <a href="https://svn.open-mpi.org/trac/ompi/ticket/4888">https://svn.open-mpi.org/trac/ompi/ticket/4888</a>: Howard
<br>
- <a href="https://svn.open-mpi.org/trac/ompi/ticket/4900">https://svn.open-mpi.org/trac/ompi/ticket/4900</a>: Ralph
<br>
- <a href="https://svn.open-mpi.org/trac/ompi/ticket/4905">https://svn.open-mpi.org/trac/ompi/ticket/4905</a>: Mike Dubman
<br>
- <a href="https://svn.open-mpi.org/trac/ompi/ticket/4917">https://svn.open-mpi.org/trac/ompi/ticket/4917</a>: Jeff
<br>
- <a href="https://svn.open-mpi.org/trac/ompi/ticket/4911">https://svn.open-mpi.org/trac/ompi/ticket/4911</a>: Jeff
<br>
- <a href="https://svn.open-mpi.org/trac/ompi/ticket/4922">https://svn.open-mpi.org/trac/ompi/ticket/4922</a>: Jeff
<br>
- <a href="https://svn.open-mpi.org/trac/ompi/ticket/4923">https://svn.open-mpi.org/trac/ompi/ticket/4923</a>: Ralph
<br>
- <a href="https://svn.open-mpi.org/trac/ompi/ticket/4925">https://svn.open-mpi.org/trac/ompi/ticket/4925</a>: OMPI RM 1.8
<br>
- <a href="https://svn.open-mpi.org/trac/ompi/ticket/4926">https://svn.open-mpi.org/trac/ompi/ticket/4926</a>: Oscar
<br>
- <a href="https://svn.open-mpi.org/trac/ompi/ticket/4927">https://svn.open-mpi.org/trac/ompi/ticket/4927</a>: Jeff
<br>
<p>3. As mentioned above, you can safely start watching the ompi and ompi-release repos again.  You can pick either:
<br>
<p>3a. &quot;Watching&quot;, which means you'll get an email for every issue/pull request, or
<br>
3b. &quot;Not watching&quot;, which means you'll only get an email if someone @mentions you, or an issue is assigned to you.
<br>
<p>*** If you want to receive emails for every issue filed, you want &quot;Watching&quot;.  The old &quot;bugs&quot; email list does not exist any longer.
<br>
*** You almost certainly *don't* want &quot;Ignoring&quot;, which means you won't ever get emails, even if someone @mentions or, or an issue is assigned to you.
<br>
<p>4. If you hadn't noticed already, mails about commits to the following repos are now sent to the ompi-commits_at_[hidden]&lt;mailto:ompi-commits_at_[hidden]&gt; mailman list:
<br>
<p>4a. ompi
<br>
4b. ompi-release
<br>
4c. ompi-tests
<br>
4d. ompi-www
<br>
4e. ompi-docs
<br>
<p>The &quot;svn&quot; and &quot;svn-full&quot; mailman lists no longer exist.  If we want to split up where the commits go to be more fine-grained than that, we can.
<br>
<p>5. As mentioned above, &quot;make dist&quot; and friends is currently broken.  Don't bother trying it; I'm partway through fixing it, but it's subtle and complicated, and I'm was too brain fried last night to finish it correctly.  More fixing in this area coming soon...
<br>
<p>6. After you read the wiki about git/GitHub usage (<a href="https://github.com/open-mpi/ompi/wiki">https://github.com/open-mpi/ompi/wiki</a>), please let me know if you run into any problems (unrelated to &quot;make dist&quot; and version numbers) and/or have any questions.
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15968.php">http://www.open-mpi.org/community/lists/devel/2014/10/15968.php</a>
<br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15969/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-15969/github-pending-invitations.png" alt="github-pending-invitations.png
">
<!-- attachment="github-pending-invitations.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15970.php">Jeff Squyres (jsquyres): "[OMPI devel] End of life: Bitbucket and Github read-only SVN mirrors"</a>
<li><strong>Previous message:</strong> <a href="15968.php">Vasily Filipov: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>In reply to:</strong> <a href="15968.php">Vasily Filipov: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
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
