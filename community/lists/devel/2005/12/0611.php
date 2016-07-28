<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  9 15:33:58 2005" -->
<!-- isoreceived="20051209203358" -->
<!-- sent="Fri, 09 Dec 2005 12:31:41 -0800" -->
<!-- isosent="20051209203141" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re:  Linux processor affinity" -->
<!-- id="4399E9AD.6080905_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8976E50D-6FE0-4838-8718-B75005DC3780_at_open-mpi.org" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-09 15:31:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0612.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0610.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0610.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/11/0563.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just recently finished checking.  For the collection of Linux hosts I 
<br>
have access to, the probe results are the same regardless of the choice 
<br>
of set or get.  I agree 100% that &quot;get&quot; is a safer probe.
<br>
<p>-Paul
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 9, 2005, at 3:06 PM, Bogdan Costescu wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      rc = sched_setaffinity(0, sizeof(mask), mask);
</span><br>
<span class="quotelev2">&gt;&gt; This changes whatever affinity might have been set before this check,
</span><br>
<span class="quotelev2">&gt;&gt; for example by a (smart, don't know if such exists now) batch system.
</span><br>
<span class="quotelev2">&gt;&gt; I haven't checked if it's possible, but I think that a similar
</span><br>
<span class="quotelev2">&gt;&gt; solution based on sched_getaffinity would be much better, as this
</span><br>
<span class="quotelev2">&gt;&gt; would not disturb the current settings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul and I were discussing this earlier (off list).  He was  
</span><br>
<span class="quotelev1">&gt; investigating doing the same check with sched_getaffinity() -- I  
</span><br>
<span class="quotelev1">&gt; don't know if he has finished checking into that already.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0612.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0610.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0610.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/11/0563.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
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
