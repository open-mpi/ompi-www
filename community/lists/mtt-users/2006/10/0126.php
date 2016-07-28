<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  3 12:28:25 2006" -->
<!-- isoreceived="20061003162825" -->
<!-- sent="Tue, 03 Oct 2006 12:28:20 -0400" -->
<!-- isosent="20061003162820" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] Adjusting max np for Intel tests" -->
<!-- id="C14807E4.294FC%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-10-03 12:28:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0127.php">Jeff Squyres: "[MTT users] INI file update"</a>
<li><strong>Previous message:</strong> <a href="0125.php">Jeff Squyres: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All --
<br>
<p>Brian advised on the OMPI teleconf today that we should probably lower the
<br>
max np for the intel tests down from 64 to 60.  I  don't know if anyone is
<br>
testing with 64 procs, but if you are, please adjust your INI file to set
<br>
the max np down to 60 for the intel tests.  See this INI file patch on the
<br>
trunk to see what I mean:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/trac/mtt/changeset/370">http://svn.open-mpi.org/trac/mtt/changeset/370</a>
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
<li><strong>Next message:</strong> <a href="0127.php">Jeff Squyres: "[MTT users] INI file update"</a>
<li><strong>Previous message:</strong> <a href="0125.php">Jeff Squyres: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
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
