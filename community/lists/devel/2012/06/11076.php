<?
$subject_val = "Re: [OMPI devel] Open MPI services migration: part 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 17:41:53 2012" -->
<!-- isoreceived="20120601214153" -->
<!-- sent="Sat, 2 Jun 2012 06:41:51 +0900" -->
<!-- isosent="20120601214151" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI services migration: part 1" -->
<!-- id="FBA451BE-A672-465C-AB34-F0CB960D30A7_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="482A3FA5-AB93-4EC7-8083-B7E55C7C3AAD_at_cisco.com" -->
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
<strong>Date:</strong> 2012-06-01 17:41:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11077.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<li><strong>Previous message:</strong> <a href="11075.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26539 - in branches/v1.6: . opal/mca/hwloc/hwloc132/hwloc/src"</a>
<li><strong>In reply to:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11077.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<li><strong>Reply:</strong> <a href="11077.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So basically to achieve the same goal the change moved from a fictitious email address to our real one. I agree with you that both the old and the new way allows one to know exactly who was the committer. But as you highlighted in your email, the commit messages are intended for a well informed audience, people who know who did the commit based on the snv_id.
<br>
<p>I definitively vote on the favor of the old approach.
<br>
<p>Btw, the commit emails __are__ archived on the web, they appear on ohloh, cia.vc and so on. I would be careful on what information we disclose on them.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 2, 2012, at 06:28 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 1, 2012, at 5:17 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I follow what was &quot;get it right&quot;, but Tim's comment is still valid (look at the from field on the last set of 1.6 commits).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right.  Prior to this, commits were from &lt;svn_id&gt;@osl.iu.edu -- which was a fictitious set of email addresses.  There was no particular reason for it, so we changed it to be from svn-commit-mailer_at_osl.iu.edu.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I.e., if the mail is going to be from a fictitious address, let's have 1 fictitious address -- not N.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Moreover, these commits contains our real addresses in clear in the text. We all work hard to obfuscate them, I definitively prefer to keep them that way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand this point.  The mails are not archived on the web, and your email address is given out every time you send an email to the list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this any different?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, we can take it out -- it's no problem.  But it was intended as a mechanism so that you -- the email reviewer -- can see who the person is and see their email address, which sometimes helps identify someone's institution.  I thought this would be useful because sometimes I don't always recognize the SVN ID that comes by.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If people hate this, we can always take it back out.  I thought it would be harmless from a spam perspective, and (potentially) useful from an email reviewer perspective.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: jsquyres (Jeff Squyres &lt;jsquyres_at_[hidden]&gt;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note, too, that when someone replies and takes this to the devel list, we obscure email addresses in the web archives.  For example, see this thread:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/lists/devel/2012/06/11073.php">http://www.open-mpi.org/community/lists/devel/2012/06/11073.php</a>
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
<li><strong>Next message:</strong> <a href="11077.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<li><strong>Previous message:</strong> <a href="11075.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26539 - in branches/v1.6: . opal/mca/hwloc/hwloc132/hwloc/src"</a>
<li><strong>In reply to:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11077.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<li><strong>Reply:</strong> <a href="11077.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
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
