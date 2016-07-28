<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 10 10:27:20 2007" -->
<!-- isoreceived="20070110152720" -->
<!-- sent="Wed, 10 Jan 2007 10:27:05 -0500" -->
<!-- isosent="20070110152705" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] Please &amp;quot;svn up&amp;quot; on the trunk" -->
<!-- id="79318F53-67CE-4857-9E6F-D9D079F5E7D0_at_cisco.com" -->
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
<strong>Date:</strong> 2007-01-10 10:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0253.php">Ethan Mallove: "[MTT users] &quot;Cherry picking&quot; feature"</a>
<li><strong>Previous message:</strong> <a href="0251.php">Jeff Squyres: "[MTT users] New option to MTT 2.0 client: --trial"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We found a minor mistake yesterday that required both a change on the  
<br>
MTT server side and the client side.  Ethan and I committed fixes for  
<br>
both this morning.
<br>
<p>Could you all &quot;svn up&quot; in your trunk checkouts before running the MTT  
<br>
client again?
<br>
<p>It's not disastrous if you don't (e.g., if you have some runs running  
<br>
right now) -- the results will go into the database, but the exit  
<br>
status and exit signal of tests will not be recorded properly.  But  
<br>
please do so in the Very Near Future so that we can have accurate  
<br>
recording of exit status/signals.
<br>
<p>Thanks!
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
<li><strong>Next message:</strong> <a href="0253.php">Ethan Mallove: "[MTT users] &quot;Cherry picking&quot; feature"</a>
<li><strong>Previous message:</strong> <a href="0251.php">Jeff Squyres: "[MTT users] New option to MTT 2.0 client: --trial"</a>
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
