<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 28 13:40:51 2005" -->
<!-- isoreceived="20050928184051" -->
<!-- sent="Wed, 28 Sep 2005 14:40:42 -0400" -->
<!-- isosent="20050928184042" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  --map question" -->
<!-- id="f131ef4aec504e25291ad5c4135e595b_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="311571FF-41B9-47A9-9C88-B3A457962CD2_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-28 13:40:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0429.php">Jeff Squyres: "Re:  --map question"</a>
<li><strong>Previous message:</strong> <a href="0427.php">Greg Watson: "--map question"</a>
<li><strong>In reply to:</strong> <a href="0427.php">Greg Watson: "--map question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0429.php">Jeff Squyres: "Re:  --map question"</a>
<li><strong>Reply:</strong> <a href="0429.php">Jeff Squyres: "Re:  --map question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2005, at 2:29 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Can someone tell me how to run multiple processes on a node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried 'mpirun -np 4 --map n0-1 ./x' but it didn't work - just run
</span><br>
<span class="quotelev1">&gt; on all 4 nodes.
</span><br>
<p>I have to admit that I don't know how it works for bproc, but if you 
<br>
give a hostfile, we obey the &quot;slots&quot; keyword for each host (there's a 
<br>
few synonyms for this as well).  For example:
<br>
<p>host1 slots=2
<br>
host2 slots=4
<br>
<p>When you mpirun, the default allocation scheme is to allocate &quot;by slot&quot; 
<br>
meaning that MCW ranks 0 and 1 will be on host1, and 2-5 will be on 
<br>
host2.  So you can:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 6 --hostfile hostfile ./x
<br>
<p>and it should do the Right ordering for you.  If you don't want this, 
<br>
you can change the default mapping to be &quot;by node&quot;, so it will allocate 
<br>
one process per node until all slots are taken.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 --hostfile hostfile ./x
<br>
<p>will put MCW rank 0 on host1 and MCW rank 1 on host2.
<br>
<p>Unfortunately, the --map stuff is not yet implemented -- it looks 
<br>
doubtful that this will make it into 1.0.  :-\  Eventually, we plan to 
<br>
fully support the &quot;C&quot; and &quot;N&quot; notation from LAM/MPI.
<br>
<p><span class="quotelev1">&gt; Also, I get this output from the command 'mpirun -np 4 --map n0 ./x':
</span><br>
<p>Yow -- that's a neat one!  Where the heck did &quot;3&quot; come from?  :-)
<br>
<p>Thanks -- I'll look into this.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0429.php">Jeff Squyres: "Re:  --map question"</a>
<li><strong>Previous message:</strong> <a href="0427.php">Greg Watson: "--map question"</a>
<li><strong>In reply to:</strong> <a href="0427.php">Greg Watson: "--map question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0429.php">Jeff Squyres: "Re:  --map question"</a>
<li><strong>Reply:</strong> <a href="0429.php">Jeff Squyres: "Re:  --map question"</a>
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
