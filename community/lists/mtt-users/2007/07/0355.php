<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 16 13:12:10 2007" -->
<!-- isoreceived="20070716171210" -->
<!-- sent="Mon, 16 Jul 2007 13:11:52 -0400" -->
<!-- isosent="20070716171152" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] MTT OMPI results" -->
<!-- id="BC460454-9555-4F22-B3B8-4A13BAD98A6A_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-16 13:11:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0356.php">Shai Venter: "[MTT users] Some mtt,mpi issues for newbie"</a>
<li><strong>Previous message:</strong> <a href="0354.php">Jeff Squyres: "[MTT users] Fwd: [devel-core] Upgrading postgreSQL on milliways"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The database upgrade this weekend for the Open MPI MTT results went  
<br>
very smoothly.  Thank you, IU!
<br>
<p>The results database is now performing much better than it did before  
<br>
the upgrade.  I did a query earlier this morning for the weekend  
<br>
results (which was an all-time high AFAIR: ~330k tests); this type of  
<br>
&quot;overall summary&quot; query used to take several *minutes*.  This  
<br>
morning, it completed in 17 *seconds*.  w00t!
<br>
<p>We're doing some additional work for database optimization to make  
<br>
things even faster (mainly to deal with scalability issues; we're  
<br>
accumulating results data in the DB [much much much] faster than we  
<br>
ever thought feasible).  But I just wanted to let developers know  
<br>
that MTT should be a bit more usable now; you don't have a get a cup  
<br>
of coffee for every high-level query that you launch (of course, Josh  
<br>
is hitting the DB pretty hard as I type this, so queries are a bit  
<br>
slower... :-) ).
<br>
<p>FYI: a paper about MTT was accepted into the Euro PVM/MPI '07  
<br>
conference, so we'll be announcing MTT as a public open source  
<br>
project at that time (end of Sept/beginning of Oct).  We plan to have  
<br>
a full web site for MTT within the larger OMPI web site, downloadable  
<br>
releases, etc.
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
<li><strong>Next message:</strong> <a href="0356.php">Shai Venter: "[MTT users] Some mtt,mpi issues for newbie"</a>
<li><strong>Previous message:</strong> <a href="0354.php">Jeff Squyres: "[MTT users] Fwd: [devel-core] Upgrading postgreSQL on milliways"</a>
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
