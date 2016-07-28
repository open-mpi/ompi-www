<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 27 18:00:24 2006" -->
<!-- isoreceived="20060627220024" -->
<!-- sent="Tue, 27 Jun 2006 18:00:16 -0400" -->
<!-- isosent="20060627220016" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] Working on the code" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9518_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-27 18:00:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0013.php">Ethan Mallove: "[MTT users] Run MTT with pre-built ompi"</a>
<li><strong>Previous message:</strong> <a href="0011.php">Andrew Friedley: "Re: [MTT users] multiple testing configurations from a single workspace"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Status update --
<br>
<p>I just did a bunch of commits over yesterday and today: I fixed some
<br>
long-standing issues (from my perspective, at least) and cleaned up a
<br>
bunch of things to make the odin.ini file a bit easier to correlate for
<br>
the Sun engineers who are currently studying the code (specifically, all
<br>
fields that belong to a module now adhere to a &quot;prefix rule&quot; -- they are
<br>
all prefixed with the name of the module that they belong to).  Hence,
<br>
it's easier to figure out what fields belong to the phase and what
<br>
fields belong to a module.
<br>
<p>I still have more to go, but am getting close to the &quot;audit the fields
<br>
between the client and the server&quot; step -- probably will get there by
<br>
Thursday or so this week.
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
<li><strong>Next message:</strong> <a href="0013.php">Ethan Mallove: "[MTT users] Run MTT with pre-built ompi"</a>
<li><strong>Previous message:</strong> <a href="0011.php">Andrew Friedley: "Re: [MTT users] multiple testing configurations from a single workspace"</a>
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
