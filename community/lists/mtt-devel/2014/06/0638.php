<?
$subject_val = "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 06:15:41 2014" -->
<!-- isoreceived="20140625101541" -->
<!-- sent="Wed, 25 Jun 2014 10:15:38 +0000" -->
<!-- isosent="20140625101538" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594" -->
<!-- id="C140F7C7-79E6-4B98-BBEE-E9C23D93CF79_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyaLrX+d=Kuhd0CHgY4U-7DbHtP3FLK3F17jSmLOoF_nwQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-25 06:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0639.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Previous message:</strong> <a href="0637.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>In reply to:</strong> <a href="0637.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, thanks.  In the meantime, please roll back to the v3.0.0 tag and you should be good.  Sorry for the hassle.  :-(
<br>
<p><p>On Jun 25, 2014, at 12:19 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; sorry for incomplete description. will trace problem more closely later next week and provide.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 23, 2014 at 10:13 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ok, just got in to Chicago from my flight and am back online.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mike: you are still not providing very much information.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your first mails make it seem like MTT is continuing to run, but leaving &quot;launchers&quot; (assumedly mpirun processes) still running, but they have no children.  Which would be very weird for mpirun to do, if it has no children left.  This could be both an MTT and an ORTE bug, in this case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But your last mail seems to imply that MTT is hanging indefinitely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you please provide a clear, precise description of what is happening?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: Yes, we are killing the parent first now, to give mpirun a chance to cleanup / tell remote orteds to die / kill children processes / etc.  Killing the children first both doesn't test the common case of how people kill MPI processes (i.e., they kill mpirun), and it also doesn't allow mpirun to tell remote processes to die.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you run with --verbose output?  MTT should output messages like &quot;*** Killing mpirun with SIGTERM&quot;, and the like.  Do you see timeout messages at all?  I.e., is MTT not entering the timeout code at all?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2014, at 12:16 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 23, 2014, at 8:48 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btw, i think now, when parent process is killed before child, OS makes child as &quot;&lt;defunct&gt;&quot; which stick around for good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The grandparent should inherit the child.  If the grandparent then does not wait(2) on the child, then the child will remain a zombie / defunct.  So in our specific case, this behavior will depend on what the parent process of mpirun is and whether it is waiting on child processes appropriately.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Dave
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0633.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0633.php</a>
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
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0634.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0634.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0637.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0637.php</a>
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
<li><strong>Next message:</strong> <a href="0639.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Previous message:</strong> <a href="0637.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>In reply to:</strong> <a href="0637.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
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
