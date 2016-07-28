<?
$subject_val = "[OMPI users] blcr_checkpoint_peer: execvp returned -1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 05:28:33 2008" -->
<!-- isoreceived="20080428092833" -->
<!-- sent="Mon, 28 Apr 2008 11:30:28 +0200" -->
<!-- isosent="20080428093028" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="[OMPI users] blcr_checkpoint_peer: execvp returned -1" -->
<!-- id="48159934.9070208_at_aomail.uab.es" -->
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
<strong>Subject:</strong> [OMPI users] blcr_checkpoint_peer: execvp returned -1<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-28 05:30:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5552.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>Previous message:</strong> <a href="5550.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5552.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>Reply:</strong> <a href="5552.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Does anybody experiment this error?
<br>
<p>[aogrdini:09070] Global) Receive a command message from [[13242,0],0].
<br>
...
<br>
[aogrd02:07642] Local) Receive a command message.
<br>
...
<br>
[aogrd01:07938] Local) Receive a command message.
<br>
...
<br>
[aogrd01:07941] App) signal_handler: Receive Checkpoint Request.
<br>
...
<br>
[aogrd02:07645] App) signal_handler: Receive Checkpoint Request.
<br>
...
<br>
[aogrd01:07941] crs:blcr: checkpoint(7941, ---)
<br>
[aogrd01:07941] crs:blcr: checkpoint_peer(7941, --)
<br>
[aogrd01:07941] crs:blcr: get_checkpoint_filename(--, 7941)
<br>
[aogrd01:07941] crs:blcr: checkpoint_cmd(7941)
<br>
[aogrd01:07941] crs:blcr: blcr_checkpoint_peer: exec :(cr_checkpoint, 
<br>
cr_checkpoint --pid 7941 --file 
<br>
/tmp/opal_snapshot_0.ckpt/ompi_blcr_context.7941):
<br>
[aogrd01:07941] crs:blcr: blcr_checkpoint_peer: Child failed to execute 
<br>
:(-1):
<br>
[aogrd01:07941] crs:blcr: blcr_checkpoint_peer: execvp returned -1
<br>
...
<br>
[aogrd02:07645] crs:blcr: blcr_checkpoint_peer: exec :(cr_checkpoint, 
<br>
cr_checkpoint --pid 7645 --file 
<br>
/tmp/opal_snapshot_1.ckpt/ompi_blcr_context.7645):
<br>
[aogrd02:07645] crs:blcr: blcr_checkpoint_peer: Child failed to execute 
<br>
:(-1):
<br>
[aogrd02:07645] crs:blcr: blcr_checkpoint_peer: execvp returned -1
<br>
...
<br>
[aogrd02:07642] Local)   Location:        [/tmp/opal_snapshot_1.ckpt]
<br>
<p>The application stop here and don&#180;t continue the execution. It&#180;s using  
<br>
libcr version 0.6.5
<br>
$ lsof -p 7518
<br>
/softs/blcr-0.6.5/0.6.5/lib/libcr.so.0.2.1
<br>
<p>After orte-checkpoint command the application process is duplicated on 
<br>
the nodes, like a child of the original process.
<br>
When a run an application with this version and take a checkpoint 
<br>
manually, I have no problem...
<br>
<p>Leonardo Fialho
<br>
Computer Architecture and Operating Systems Department - CAOS
<br>
Universidad Autonoma de Barcelona - UAB
<br>
ETSE, Edifcio Q, QC/3088
<br>
<a href="http://www.caos">http://www.caos</a>
<br>
Phone: +34-93-581-2888
<br>
Fax: +34-93-581-2478
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5552.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>Previous message:</strong> <a href="5550.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5552.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>Reply:</strong> <a href="5552.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
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
