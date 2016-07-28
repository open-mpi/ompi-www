<?
$subject_val = "Re: [OMPI users] shm unlinking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 09:32:40 2011" -->
<!-- isoreceived="20110414133240" -->
<!-- sent="Thu, 14 Apr 2011 09:32:34 -0400" -->
<!-- isosent="20110414133234" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shm unlinking" -->
<!-- id="BEDE1DF1-23B7-493C-83C7-FF41A8C45737_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="130278734179511661_at_towy" -->
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
<strong>Subject:</strong> Re: [OMPI users] shm unlinking<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 09:32:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16246.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Previous message:</strong> <a href="16244.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>In reply to:</strong> <a href="16244.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16246.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16246.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2011, at 9:22 AM, Rushton Martin wrote:
<br>
<p><span class="quotelev1">&gt; For your information: we were supplied with a script when we bought the
</span><br>
<span class="quotelev1">&gt; cluster, but the original script made the assumption that all processes
</span><br>
<span class="quotelev1">&gt; and shm files belonging to a specific user ought to be deleted.  This is
</span><br>
<span class="quotelev1">&gt; a problem if users submit jobs which only half fill a node and the
</span><br>
<span class="quotelev1">&gt; second job starts on the same node as the first one.  The first job to
</span><br>
<span class="quotelev1">&gt; finish causes the continuing job to stop dead.  We therefore had to
</span><br>
<span class="quotelev1">&gt; disable any cleanup to allow jobs to run.  Now we are finding a slow
</span><br>
<span class="quotelev1">&gt; fill up with the shm files and I need to do something; at least now I
</span><br>
<span class="quotelev1">&gt; have a way forward.
</span><br>
<p>Note that Open MPI v1.4.x is likely using mmap files by default -- these should be under /tmp/ somewhere.  If they get left around, they can cause shared memory to be filled up, but they should also be unrelated in /dev/shm kinds of things.  If you're seeing /dev/shm fill up, that might be due to something else.
<br>
<p>Also, I'm a little confused by your reference to psm_shm... are you talking about the QLogic PSM device?  If that does some tomfoolery with /dev/shm somewhere, I'm unaware of it (i.e., I don't know much/anything about what that device does internally).
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="16246.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Previous message:</strong> <a href="16244.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>In reply to:</strong> <a href="16244.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16246.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16246.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
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
