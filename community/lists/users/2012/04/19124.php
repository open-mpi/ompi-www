<?
$subject_val = "Re: [OMPI users] regarding the problem occurred while running an mpi programs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 11:12:49 2012" -->
<!-- isoreceived="20120425151249" -->
<!-- sent="Wed, 25 Apr 2012 11:12:44 -0400" -->
<!-- isosent="20120425151244" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] regarding the problem occurred while running an mpi programs" -->
<!-- id="677C2385-A37F-46C7-98C6-2BB3F284B90A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJ_xm3AEyiWK5pYRVAFtQtDYfxdZbees-Q+Dp=Qgp-RdaK_W3A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] regarding the problem occurred while running an mpi programs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 11:12:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19125.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>Previous message:</strong> <a href="19123.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>In reply to:</strong> <a href="19123.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19125.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>Reply:</strong> <a href="19125.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2012, at 11:06 AM, seshendra seshu wrote:
<br>
<p><span class="quotelev1">&gt; so should i need to create an user and run the mpi program. or how can i run in cluster
</span><br>
<p>It is a &quot;best practice&quot; to not run real applications as root (e.g., MPI applications).  Create a non-privlidged user to run your applications.
<br>
<p>Then be sure to set your LD_LIBRARY_PATH if you installed Open MPI into a non-system-default location.  See this FAQ item:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
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
<li><strong>Next message:</strong> <a href="19125.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>Previous message:</strong> <a href="19123.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>In reply to:</strong> <a href="19123.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19125.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>Reply:</strong> <a href="19125.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
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
