<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  4 09:46:51 2006" -->
<!-- isoreceived="20061004134651" -->
<!-- sent="Wed, 04 Oct 2006 09:46:45 -0400" -->
<!-- isosent="20061004134645" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] INI file update" -->
<!-- id="C1493385.297C0%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-10-04 09:46:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0128.php">Ethan Mallove: "[MTT users] Multiple scratch dirs needed?"</a>
<li><strong>Previous message:</strong> <a href="0126.php">Jeff Squyres: "[MTT users] Adjusting max np for Intel tests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are some of you who are running some functlets to get the compiler
<br>
version that redirect stderr to stdout, something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&amp;shell(&quot;icc -v 2&gt;&amp;1 | awk '{ print \$2 }'&quot;)
<br>
<p>Unfortunately, there's a bug in the MTT client that will barf on the fact
<br>
that there's a &quot;&amp;&quot; in the middle of the argument, and it won't recognize
<br>
&amp;shell(...) as a functlet.  I can fix this bug, but it's going to take a
<br>
while (the perl implications of this on the parser kinda suck :-\ ), and
<br>
I've unfortunately got some higher-priority things that I need to do first.
<br>
<p>For the time being, can you examine your INI files and see if you have any
<br>
&quot;&amp;&quot; in your &amp;shell() functlets, and if so, replace them with something else?
<br>
If you really need to grab stderr, you may well need to have another script
<br>
do this, such as:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&amp;shell(&quot;get_icc_version&quot;)
<br>
<p>And have a &quot;get&quot;icc_version&quot; script that does the stderr redirection.
<br>
<p>I apologize for this; you shouldn't need to do this, but I just don't have
<br>
the cycles at the moment to fix this in the MTT client.  Stay tuned to MTT
<br>
ticket #85 for updates (<a href="http://svn.open-mpi.org/trac/mtt/ticket/85">http://svn.open-mpi.org/trac/mtt/ticket/85</a>).
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
<li><strong>Next message:</strong> <a href="0128.php">Ethan Mallove: "[MTT users] Multiple scratch dirs needed?"</a>
<li><strong>Previous message:</strong> <a href="0126.php">Jeff Squyres: "[MTT users] Adjusting max np for Intel tests"</a>
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
