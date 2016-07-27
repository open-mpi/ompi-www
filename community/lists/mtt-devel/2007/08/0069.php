<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 08:24:36 2007" -->
<!-- isoreceived="20070831122436" -->
<!-- sent="Fri, 31 Aug 2007 08:24:11 -0400" -->
<!-- isosent="20070831122411" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] Testbake results" -->
<!-- id="D0FAB331-7683-4E6F-8FA8-EA3E68630496_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-08-31 08:24:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0070.php">Josh Hursey: "Re: [MTT devel] [MTT users] Database submit error"</a>
<li><strong>Previous message:</strong> <a href="0068.php">Josh Hursey: "Re: [MTT devel] change description in db"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;From last night -- it ain't perfect yet, but we're getting darn close:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=309">http://www.open-mpi.org/mtt/index.php?do_redir=309</a>
<br>
<p>(you may need &quot;show trial&quot; on to see these?)
<br>
<p>I'll be digging into these results today to chase down some final  
<br>
issues.  I know of a few problems left:
<br>
<p>- looks like the MPICH2 test runs didn't fire properly
<br>
- timeouts won't be good for large np values
<br>
- need a way to specify (for each MPI) by node/slot between netpipe 
<br>
+osu and imb+skampi
<br>
- sometimes the &quot;pass&quot; count does not equal the &quot;perf&quot; count (I  
<br>
suspect client problems, not server problems)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0070.php">Josh Hursey: "Re: [MTT devel] [MTT users] Database submit error"</a>
<li><strong>Previous message:</strong> <a href="0068.php">Josh Hursey: "Re: [MTT devel] change description in db"</a>
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
