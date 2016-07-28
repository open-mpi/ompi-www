<?
$subject_val = "[OMPI users] bug in ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 12:49:59 2009" -->
<!-- isoreceived="20090514164959" -->
<!-- sent="Thu, 14 May 2009 18:49:56 +0200" -->
<!-- isosent="20090514164956" -->
<!-- name="Bouguerra mohamed slim" -->
<!-- email="mohamed-slim.bouguerra_at_[hidden]" -->
<!-- subject="[OMPI users] bug in ompi-restart" -->
<!-- id="4A0C4BB4.1060401_at_inrialpes.fr" -->
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
<strong>Subject:</strong> [OMPI users] bug in ompi-restart<br>
<strong>From:</strong> Bouguerra mohamed slim (<em>mohamed-slim.bouguerra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 12:49:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9342.php">John Hearns: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Previous message:</strong> <a href="9340.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9385.php">Josh Hursey: "Re: [OMPI users] bug in ompi-restart"</a>
<li><strong>Reply:</strong> <a href="9385.php">Josh Hursey: "Re: [OMPI users] bug in ompi-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I think that there is a problem with the /ompi-restar/t   from the 
<br>
release r-21197.
<br>
in fact ompi-restart can restart only if the checkpoint directory is  $HOME.
<br>
For example the checkpoint folder is $HOME.
<br>
if i try *ompi-restart -i  $HOME/ompi_global_snapshot_7056.ckpt/  *it 
<br>
doesn't work and i get
<br>
<p>msbouguerra_at_sol-5:~$ ompi-restart -i $HOME/ompi_global_snapshot_7056.ckpt/
<br>
--------------------------------------------------------------------------
<br>
Error: The filename 
<br>
(/home/grenoble/msbouguerra/ompi_global_snapshot_7056.ckpt/) is invalid 
<br>
because either you have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
<p><p>and when i try :   *ompi-restart -i ompi_global_snapshot_7056.ckpt/    
<br>
*it works  and i get
<br>
<p><p>msbouguerra_at_sol-5:~$ ompi-restart -i ompi_global_snapshot_7056.ckpt/
<br>
[sol-5.sophia.grid5000.fr:07466] Sequences: 1
<br>
[sol-5.sophia.grid5000.fr:07466] Seq: 0
<br>
[sol-5.sophia.grid5000.fr:07466] Begin Timestamp: Thu May 14 18:23:00 2009
<br>
[sol-5.sophia.grid5000.fr:07466] OPAL CRS Component: blcr
<br>
[sol-5.sophia.grid5000.fr:07466] Snapshot Reference: 
<br>
ompi_global_snapshot_7056.ckpt/
<br>
[sol-5.sophia.grid5000.fr:07466] Snapshot Location: 
<br>
/home/grenoble/msbouguerra/ompi_global_snapshot_7056.ckpt
<br>
[sol-5.sophia.grid5000.fr:07466] End Timestamp: Thu May 14 18:23:00 2009
<br>
[sol-5.sophia.grid5000.fr:07466] Processes: 4
<br>
<p>msbouguerra_at_sol-5:~$
<br>
<p>So when i use another folder as checkpoint directory the restart failed
<br>
<p><p><pre>
-- 
Cordialement,
Mohamed-Slim BOUGUERRA    PhD student INRIA-Grenoble / Projet MOAIS
ENSIMAG - antenne de Montbonnot
ZIRST 51, avenue Jean Kuntzmann
38330 MONTBONNOT SAINT MARTIN France
Tel :+33 (0)4 76 61 20 79
Fax :+33 (0)4 76 61 20 99
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9341/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9342.php">John Hearns: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Previous message:</strong> <a href="9340.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9385.php">Josh Hursey: "Re: [OMPI users] bug in ompi-restart"</a>
<li><strong>Reply:</strong> <a href="9385.php">Josh Hursey: "Re: [OMPI users] bug in ompi-restart"</a>
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
