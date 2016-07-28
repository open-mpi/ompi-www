<?
$subject_val = "Re: [OMPI devel] Open MPI services migration: part 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 17:17:47 2012" -->
<!-- isoreceived="20120601211747" -->
<!-- sent="Sat, 2 Jun 2012 06:17:42 +0900" -->
<!-- isosent="20120601211742" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI services migration: part 1" -->
<!-- id="0BEA562E-8D6E-402C-A83E-74611326EAC7_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="95C82A0D-62F3-41AA-BACA-4666655B1706_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI services migration: part 1<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 17:17:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<li><strong>Previous message:</strong> <a href="11072.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<li><strong>In reply to:</strong> <a href="11072.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<li><strong>Reply:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure I follow what was &quot;get it right&quot;, but Tim's comment is still valid (look at the from field on the last set of 1.6 commits).
<br>
<p>Moreover, these commits contains our real addresses in clear in the text. We all work hard to obfuscate them, I definitively prefer to keep them that way.
<br>
<p><span class="quotelev1">&gt; Author: jsquyres (Jeff Squyres &lt;jsquyres_at_[hidden]&gt;)
</span><br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 2, 2012, at 01:57 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Yep -- that was a[n unexpected] feature upgrade when we moved to the new server.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (you'll notice that it took a few tries to get it right, too :-) )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 1, 2012, at 12:52 PM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One minor difference I see from the services migration is that the SVN
</span><br>
<span class="quotelev2">&gt;&gt; commit e-mails on the svn-full
</span><br>
<span class="quotelev2">&gt;&gt; mailing list now all appear to be coming from a generic
</span><br>
<span class="quotelev2">&gt;&gt; &quot;svn-commit-mailer_at_[hidden]&quot; address,
</span><br>
<span class="quotelev2">&gt;&gt; instead of from [commiter's login]@osl.iu.edu.  Not a serious bug, but
</span><br>
<span class="quotelev2">&gt;&gt; it was useful to
</span><br>
<span class="quotelev2">&gt;&gt; scan through my svn commits e-mail folder looking for commits I feel I
</span><br>
<span class="quotelev2">&gt;&gt; should be aware of.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jun 1, 2012 at 12:38 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The migration is now complete.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let us know if you run into any problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 1, 2012, at 6:53 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Don't forget -- these services will be offline while they are migrated starting in about 2 hours.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 30, 2012, at 2:44 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Be advised that I have received the following message from our Indiana U. hosting provider.  SVN/Trac/OpenGrok will be unavailable during the time frame described below.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; More migrations will follow (e.g., web services) in the coming weeks; stay tuned.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We are planning to move all the services of svn.open-mpi.org and svn.mpi-forum.org to the new server (tiger.crest.iu.edu) on June 1st, 2012.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: June 1st, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Time:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - 6:00am-10:00am Pacific US time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - 7:00am-11:00am Mountain US time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - 8:00am-12:00pm Central US time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - 9:00am-1:00pm Eastern US time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - 2:00pm-6:00pm GMT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * The services to migrate from sourcehaven to tiger
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - subversion
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - trac
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - svnmanager
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - opengrok
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; During the migration, the above services will not be available.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-devel-core mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel-core</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt; timattox_at_[hidden] || tmattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<li><strong>Previous message:</strong> <a href="11072.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<li><strong>In reply to:</strong> <a href="11072.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<li><strong>Reply:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
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
