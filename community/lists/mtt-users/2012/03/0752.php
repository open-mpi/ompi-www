<?
$subject_val = "Re: [MTT users] Git repository";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 16 17:28:36 2012" -->
<!-- isoreceived="20120316212836" -->
<!-- sent="Fri, 16 Mar 2012 17:28:31 -0400" -->
<!-- isosent="20120316212831" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Git repository" -->
<!-- id="42428381-5607-44C6-B2B7-A08A8EFCD78B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAN7Cqrc2tod_anOsAc-WadMHGD4Ud-bHDdG-8DXmP9d2+4GzjA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Git repository<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-16 17:28:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2012/08/0753.php">Ralph Castain: "[MTT users] Request for database access"</a>
<li><strong>Previous message:</strong> <a href="0751.php">Andrew Senin: "[MTT users] Git repository"</a>
<li><strong>In reply to:</strong> <a href="0751.php">Andrew Senin: "[MTT users] Git repository"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, we never added a plugin for Git, mainly because most of us tend to use Mercurial.
<br>
<p>That being said, I imagine that it should be pretty easy to copy lib/MTT/Common/SCM/Mercurial.pm to lib/MTT/Common/SCM/Git.pm, and then adapt it from there.
<br>
<p>Wow; I see that we even still have an SVK.pm in there.  I think I'll go remove that; Sun used SVK for a while, but it was somewhat problematic and I don't know if the SVK project is even around anymore.
<br>
<p><p>On Mar 16, 2012, at 2:21 PM, Andrew Senin wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a standard way to clone a test git repository with MTT? Found only Mercurial and SVN support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, 
</span><br>
<span class="quotelev1">&gt; Andrew Senin
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2012/08/0753.php">Ralph Castain: "[MTT users] Request for database access"</a>
<li><strong>Previous message:</strong> <a href="0751.php">Andrew Senin: "[MTT users] Git repository"</a>
<li><strong>In reply to:</strong> <a href="0751.php">Andrew Senin: "[MTT users] Git repository"</a>
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
