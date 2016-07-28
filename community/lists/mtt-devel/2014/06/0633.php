<?
$subject_val = "Re: [MTT devel] [MTT svn] GIT: MTT branch master	updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 15:13:29 2014" -->
<!-- isoreceived="20140623191329" -->
<!-- sent="Mon, 23 Jun 2014 19:13:28 +0000" -->
<!-- isosent="20140623191328" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] GIT: MTT branch master	updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594" -->
<!-- id="1C044F85-2E72-452E-A7DF-05136CAA7DCC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="258917DF-31EE-46DD-996C-FB6912CF41CD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] GIT: MTT branch master	updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-23 15:13:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0634.php">Jeff Squyres (jsquyres): "[MTT devel] MTT: let's use git tags"</a>
<li><strong>Previous message:</strong> <a href="0632.php">Dave Goodell (dgoodell): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>In reply to:</strong> <a href="0632.php">Dave Goodell (dgoodell): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0637.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Reply:</strong> <a href="0637.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, just got in to Chicago from my flight and am back online.
<br>
<p>Mike: you are still not providing very much information.  :-\
<br>
<p>Your first mails make it seem like MTT is continuing to run, but leaving &quot;launchers&quot; (assumedly mpirun processes) still running, but they have no children.  Which would be very weird for mpirun to do, if it has no children left.  This could be both an MTT and an ORTE bug, in this case.
<br>
<p>But your last mail seems to imply that MTT is hanging indefinitely.
<br>
<p>Can you please provide a clear, precise description of what is happening?
<br>
<p>FWIW: Yes, we are killing the parent first now, to give mpirun a chance to cleanup / tell remote orteds to die / kill children processes / etc.  Killing the children first both doesn't test the common case of how people kill MPI processes (i.e., they kill mpirun), and it also doesn't allow mpirun to tell remote processes to die.
<br>
<p>Do you run with --verbose output?  MTT should output messages like &quot;*** Killing mpirun with SIGTERM&quot;, and the like.  Do you see timeout messages at all?  I.e., is MTT not entering the timeout code at all?
<br>
<p>...etc.
<br>
<p><p><p>On Jun 23, 2014, at 12:16 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 23, 2014, at 8:48 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; btw, i think now, when parent process is killed before child, OS makes child as &quot;&lt;defunct&gt;&quot; which stick around for good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The grandparent should inherit the child.  If the grandparent then does not wait(2) on the child, then the child will remain a zombie / defunct.  So in our specific case, this behavior will depend on what the parent process of mpirun is and whether it is waiting on child processes appropriately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0633.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0633.php</a>
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
<li><strong>Next message:</strong> <a href="0634.php">Jeff Squyres (jsquyres): "[MTT devel] MTT: let's use git tags"</a>
<li><strong>Previous message:</strong> <a href="0632.php">Dave Goodell (dgoodell): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>In reply to:</strong> <a href="0632.php">Dave Goodell (dgoodell): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0637.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Reply:</strong> <a href="0637.php">Mike Dubman: "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
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
