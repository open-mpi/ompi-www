<?
$subject_val = "Re: [OMPI devel] v1.5 branch on mercurial mirror is hosed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 15 12:04:10 2011" -->
<!-- isoreceived="20110215170410" -->
<!-- sent="Tue, 15 Feb 2011 12:04:05 -0500" -->
<!-- isosent="20110215170405" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 branch on mercurial mirror is hosed" -->
<!-- id="68B213EE-4FF7-488D-9F7B-E3D0E20AF46A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="05A2D633CD5E734DAF0DF7A7CBBB8C7E63B76BFE05_at_Eagle.Blue.Roguewave.Com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5 branch on mercurial mirror is hosed<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-15 12:04:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8993.php">Jeff Squyres: "Re: [OMPI devel] 1.5.2rc1 is borked"</a>
<li><strong>Previous message:</strong> <a href="8991.php">Nikolay Piskun: "Re: [OMPI devel] v1.5 branch on mercurial mirror is hosed"</a>
<li><strong>In reply to:</strong> <a href="8991.php">Nikolay Piskun: "Re: [OMPI devel] v1.5 branch on mercurial mirror is hosed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, it's not any problem you caused.  
<br>
<p>The official HG mirror is listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/svn/mercurial.php">http://www.open-mpi.org/svn/mercurial.php</a>
<br>
<p>This mirror is maintained solely at Indiana U (the hosting provider for all of OMPI's internet services).  Every 15 minutes, it examines SVN for new commits and adds them to the hg repo using the following command:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hg convert <a href="https://svn.open-mpi.org/svn/ompi">https://svn.open-mpi.org/svn/ompi</a> $outpath/ompi-svn-mirror
<br>
<p>Specifically, it's a built-in mercurial command to dump from SVN to a mercurial repo.  Specifically, this is a one-way, read-only dump from SVN to the repo.  It nicely to preserves all SVN branches and tags in the output hg repo.
<br>
<p>But it looks like something bad happened over time.  There are currently *three* heads that have the &quot;v1.5&quot; label, but there's only one &quot;v1.5&quot; branch.  I'm not quite sure how this happened -- the v1.5 branch should have been created once and then had all v1.5 changes applied to it automatically (i.e., follow the changes on the SVN v1.5 branch).  
<br>
<p>Still investigating...
<br>
<p><p>On Feb 15, 2011, at 11:41 AM, Nikolay Piskun wrote:
<br>
<p><span class="quotelev1">&gt; This maybe to the change that I send to both OMPI and Bull. Could you please send me the details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nikolay Piskun | Director of Continuing Engineering | Totalview Technologies |
</span><br>
<span class="quotelev1">&gt; Rogue Wave Software Inc  |  24 Prime Parkway, Natick, MA 01760 | p 508-652-7739| 
</span><br>
<span class="quotelev1">&gt; nikolay.piskun_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.roguewave.com
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, February 15, 2011 11:31 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] v1.5 branch on mercurial mirror is hosed
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Bull has noticed that the v1.5 branch on the official OMPI hg mirror
</span><br>
<span class="quotelev2">&gt;&gt; somehow got hosed (ping me if you want/care about the details).  The
</span><br>
<span class="quotelev2">&gt;&gt; other branches look like they're ok.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We're investigating.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8993.php">Jeff Squyres: "Re: [OMPI devel] 1.5.2rc1 is borked"</a>
<li><strong>Previous message:</strong> <a href="8991.php">Nikolay Piskun: "Re: [OMPI devel] v1.5 branch on mercurial mirror is hosed"</a>
<li><strong>In reply to:</strong> <a href="8991.php">Nikolay Piskun: "Re: [OMPI devel] v1.5 branch on mercurial mirror is hosed"</a>
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
