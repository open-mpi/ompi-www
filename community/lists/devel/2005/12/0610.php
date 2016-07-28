<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  9 15:09:34 2005" -->
<!-- isoreceived="20051209200934" -->
<!-- sent="Fri, 9 Dec 2005 15:09:21 -0500" -->
<!-- isosent="20051209200921" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Linux processor affinity" -->
<!-- id="8976E50D-6FE0-4838-8718-B75005DC3780_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.63.0512092059030.3612_at_dingo.iwr.uni-heidelberg.de" -->
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
<strong>Date:</strong> 2005-12-09 15:09:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0611.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0609.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0609.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0611.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0611.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 9, 2005, at 3:06 PM, Bogdan Costescu wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt;      rc = sched_setaffinity(0, sizeof(mask), mask);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This changes whatever affinity might have been set before this check,
</span><br>
<span class="quotelev1">&gt; for example by a (smart, don't know if such exists now) batch system.
</span><br>
<span class="quotelev1">&gt; I haven't checked if it's possible, but I think that a similar
</span><br>
<span class="quotelev1">&gt; solution based on sched_getaffinity would be much better, as this
</span><br>
<span class="quotelev1">&gt; would not disturb the current settings.
</span><br>
<p>Paul and I were discussing this earlier (off list).  He was  
<br>
investigating doing the same check with sched_getaffinity() -- I  
<br>
don't know if he has finished checking into that already.
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
<li><strong>Next message:</strong> <a href="0611.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0609.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0609.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0611.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0611.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
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
