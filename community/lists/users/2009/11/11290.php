<?
$subject_val = "[OMPI users] Trouble with SGE integration";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 30 10:34:04 2009" -->
<!-- isoreceived="20091130153404" -->
<!-- sent="Mon, 30 Nov 2009 16:33:57 +0100" -->
<!-- isosent="20091130153357" -->
<!-- name="Ondrej Glembek" -->
<!-- email="glembek_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble with SGE integration" -->
<!-- id="4B13E5E5.9060405_at_fit.vutbr.cz" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Trouble with SGE integration<br>
<strong>From:</strong> Ondrej Glembek (<em>glembek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-30 10:33:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11291.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11289.php">Kevin.Buckley_at_[hidden]: "[OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11291.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="11291.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>we are using a custom starter method in our SGE to launch our jobs... It
<br>
looks something like this:
<br>
<p>#!/bin/sh
<br>
<p># ... we do whole bunch of stuff here
<br>
<p>#start the job in thus shell
<br>
exec &quot;$@&quot;
<br>
<p>The trouble is that mpiexec passes a command which looks like this:
<br>
<p>( . ./.profile ..... )
<br>
<p>which, however, is not a valid exec argument...
<br>
<p>Is there any way to tell mpiexec to run it in a separate script??? Any
<br>
idea how to solve this???
<br>
<p>Thanx
<br>
Ondrej Glembek
<br>
<p><pre>
-- 
  Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
  UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/~glembek">http://www.fit.vutbr.cz/~glembek</a>
  Bozetechova 2, 612 66        Phone:  +420 54114-1292
  Brno, Czech Republic         Fax:    +420 54114-1290
  ICQ: 93233896
  GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11291.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11289.php">Kevin.Buckley_at_[hidden]: "[OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11291.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="11291.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
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
