<?
$subject_val = "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 01:19:39 2014" -->
<!-- isoreceived="20140625051939" -->
<!-- sent="Wed, 25 Jun 2014 08:19:37 +0300" -->
<!-- isosent="20140625051937" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594" -->
<!-- id="CAAO1KyaLrX+d=Kuhd0CHgY4U-7DbHtP3FLK3F17jSmLOoF_nwQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1C044F85-2E72-452E-A7DF-05136CAA7DCC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] GIT: MTT branch master updated. 016088f2a0831b32ab5fd6f60f4cabe67e92e594<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-25 01:19:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0638.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Previous message:</strong> <a href="0636.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>In reply to:</strong> <a href="0633.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master	updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0638.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Reply:</strong> <a href="0638.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
sorry for incomplete description. will trace problem more closely later
<br>
next week and provide.
<br>
<p>M
<br>
<p><p>On Mon, Jun 23, 2014 at 10:13 PM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ok, just got in to Chicago from my flight and am back online.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mike: you are still not providing very much information.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your first mails make it seem like MTT is continuing to run, but leaving
</span><br>
<span class="quotelev1">&gt; &quot;launchers&quot; (assumedly mpirun processes) still running, but they have no
</span><br>
<span class="quotelev1">&gt; children.  Which would be very weird for mpirun to do, if it has no
</span><br>
<span class="quotelev1">&gt; children left.  This could be both an MTT and an ORTE bug, in this case.
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
<span class="quotelev1">&gt; FWIW: Yes, we are killing the parent first now, to give mpirun a chance to
</span><br>
<span class="quotelev1">&gt; cleanup / tell remote orteds to die / kill children processes / etc.
</span><br>
<span class="quotelev1">&gt;  Killing the children first both doesn't test the common case of how people
</span><br>
<span class="quotelev1">&gt; kill MPI processes (i.e., they kill mpirun), and it also doesn't allow
</span><br>
<span class="quotelev1">&gt; mpirun to tell remote processes to die.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you run with --verbose output?  MTT should output messages like &quot;***
</span><br>
<span class="quotelev1">&gt; Killing mpirun with SIGTERM&quot;, and the like.  Do you see timeout messages at
</span><br>
<span class="quotelev1">&gt; all?  I.e., is MTT not entering the timeout code at all?
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
<span class="quotelev1">&gt; On Jun 23, 2014, at 12:16 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 23, 2014, at 8:48 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btw, i think now, when parent process is killed before child, OS makes
</span><br>
<span class="quotelev1">&gt; child as &quot;&lt;defunct&gt;&quot; which stick around for good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The grandparent should inherit the child.  If the grandparent then does
</span><br>
<span class="quotelev1">&gt; not wait(2) on the child, then the child will remain a zombie / defunct.
</span><br>
<span class="quotelev1">&gt;  So in our specific case, this behavior will depend on what the parent
</span><br>
<span class="quotelev1">&gt; process of mpirun is and whether it is waiting on child processes
</span><br>
<span class="quotelev1">&gt; appropriately.
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0633.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0633.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0634.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0634.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0637/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0638.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Previous message:</strong> <a href="0636.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>In reply to:</strong> <a href="0633.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master	updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0638.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<li><strong>Reply:</strong> <a href="0638.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
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
