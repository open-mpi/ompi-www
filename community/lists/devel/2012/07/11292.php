<?
$subject_val = "Re: [OMPI devel] Still bothered / cannot run an application";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 13 19:53:21 2012" -->
<!-- isoreceived="20120713235321" -->
<!-- sent="Fri, 13 Jul 2012 19:53:16 -0400" -->
<!-- isosent="20120713235316" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Still bothered / cannot run an application" -->
<!-- id="19EEAE3F-D479-498F-AA75-17118E1DCA6B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FFEF577.9090708_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Still bothered / cannot run an application<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-13 19:53:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11293.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>Previous message:</strong> <a href="11291.php">Jeff Squyres: "Re: [OMPI devel] [patch] MOSIX support complete"</a>
<li><strong>In reply to:</strong> <a href="11282.php">Paul Kapinos: "[OMPI devel] Still bothered / cannot run an application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11293.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2012, at 12:04 PM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; (cross-post to 'users' and 'devel' mailing lists)
</span><br>
<p>Sorry for the delay in replying here; I got slammed with some deadlines this week...
<br>
<p>The short version is that the issue has been confirmed.  One root cause is Mellanox significantly decreasing default amounts of registered memory allowed on a node (!); it would be great if Mellanox could comment on that, since we've now seen several users impacted by this.  You can tweak this by changing some ConnectX HCA module parameters.  
<br>
<p>We're working on ways to make Open MPI work correctly, even in the face of tiny amounts of registered memory.  I'm not sure we have it right yet, but there are some things I can ask you to try.  I'll reply in more detail on devel.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11293.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>Previous message:</strong> <a href="11291.php">Jeff Squyres: "Re: [OMPI devel] [patch] MOSIX support complete"</a>
<li><strong>In reply to:</strong> <a href="11282.php">Paul Kapinos: "[OMPI devel] Still bothered / cannot run an application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11293.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
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
