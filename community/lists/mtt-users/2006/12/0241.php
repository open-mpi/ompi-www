<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec 21 15:52:46 2006" -->
<!-- isoreceived="20061221205246" -->
<!-- sent="Thu, 21 Dec 2006 15:52:32 -0500" -->
<!-- isosent="20061221205232" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] New version of MTT" -->
<!-- id="2D629D11-FEE5-4EF4-B2F7-9B8F3B14BEE7_at_cisco.com" -->
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
<strong>Date:</strong> 2006-12-21 15:52:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/01/0242.php">Ethan Mallove: "[MTT users] MTT 2.0 Rollout"</a>
<li><strong>Previous message:</strong> <a href="0240.php">Ethan Mallove: "[MTT users] MTT 2.0 Rollout"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Ethan already noted, we'll be rolling out a new version of MTT  
<br>
after the new year.  For your Christmas pleasure, here's a summary of  
<br>
the new features:
<br>
<p>Sever-side / General:
<br>
---------------------
<br>
<p>- Revamped web reporter / nightly e-mails -- huge improvements over
<br>
&nbsp;&nbsp;&nbsp;the prior release, including:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Leaner, faster, and more intuitive web user interface
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Clickable summary reports for drilling down
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- More flexible querying (e.g., multiple selection, regular
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expressions, sortable columns, and cherry-picked reports)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Query screen and reports on one screen (no frames needed)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Super short URLs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Display 100 rows at a time
<br>
- Distinguish between tests that pass, fail, timeout, and are
<br>
&nbsp;&nbsp;&nbsp;intentionally skipped.
<br>
- Added support for latency and bandwidth performance testing and
<br>
&nbsp;&nbsp;&nbsp;reporting.  Verified with NetPIPE and IMB MPI test suites.
<br>
<p>MTT client:
<br>
-----------
<br>
<p>- Added support for environment modules (<a href="http://modules.sf.net/">http://modules.sf.net/</a>)
<br>
- Dramatically better memory utilization (especially for large
<br>
&nbsp;&nbsp;&nbsp;numbers of test runs)
<br>
- Add some &quot;progress bar&quot;-like output to --verbose output so that
<br>
&nbsp;&nbsp;&nbsp;users can see how far along the tests are
<br>
- Added &quot;--trial&quot; option to MTT client to allow testing of the MTT
<br>
&nbsp;&nbsp;&nbsp;client/INI file setup itself without submitting potentially  
<br>
erroneous/
<br>
&nbsp;&nbsp;&nbsp;bad results data into the MTT results database
<br>
- Print [somewhat] better messages about errors with INI files
<br>
- MTT client now distinguishes between specifying tests to run and
<br>
&nbsp;&nbsp;&nbsp;analyzing their results (e.g., correctness and performance)
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/01/0242.php">Ethan Mallove: "[MTT users] MTT 2.0 Rollout"</a>
<li><strong>Previous message:</strong> <a href="0240.php">Ethan Mallove: "[MTT users] MTT 2.0 Rollout"</a>
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
