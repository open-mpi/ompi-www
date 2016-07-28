<?
$subject_val = "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 06:08:59 2008" -->
<!-- isoreceived="20080428100859" -->
<!-- sent="Mon, 28 Apr 2008 12:10:55 +0200" -->
<!-- isosent="20080428101055" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1" -->
<!-- id="4815A2AF.5080202_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48159934.9070208_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-28 06:10:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5553.php">Doug Reeder: "Re: [OMPI users] trouble building on a macbook"</a>
<li><strong>Previous message:</strong> <a href="5551.php">Leonardo Fialho: "[OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>In reply to:</strong> <a href="5551.php">Leonardo Fialho: "[OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5559.php">Josh Hursey: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>Reply:</strong> <a href="5559.php">Josh Hursey: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Changing some parameters (blcr_checkpoint_cmd):
<br>
<p>[aogrd01:08552] crs:blcr: checkpoint(8552, ---)
<br>
[aogrd01:08552] crs:blcr: checkpoint_peer(8552, --)
<br>
[aogrd01:08552] crs:blcr: get_checkpoint_filename(--, 8552)
<br>
[aogrd01:08552] crs:blcr: checkpoint_cmd(8552)
<br>
[aogrd01:08552] crs:blcr: blcr_checkpoint_peer: exec 
<br>
:(/softs/blcr-0.6.5/bin/cr_checkpoint, 
<br>
/softs/blcr-0.6.5/bin/cr_checkpoint --pid 8552 --file 
<br>
/tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552):
<br>
[aogrd01:08552] crs:blcr: thread_callback()
<br>
[aogrd01:08552] crs:blcr: thread_callback: Continue.
<br>
[aogrd01:08552] crs:blcr: blcr_checkpoint_peer: Thread finished with 
<br>
status 2
<br>
Checkpoint failed: Bad file descriptor
<br>
chmod: cannot access `/tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552': 
<br>
No such file or directory
<br>
[aogrd01:08552] crs:blcr: move(): Error: Unable to execute the command 
<br>
&lt;chmod u+rwX  /tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552&gt; :[256].
<br>
crs:blcr chmod: Resource temporarily unavailable
<br>
[aogrd01:08552] crs:blcr: checkpoint(): Error: Unable to chmod the 
<br>
checkpoint file (ompi_blcr_context.8552 in the directory 
<br>
(/tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552) :[256].
<br>
crs:blcr: checkpoint: Invalid argument
<br>
[aogrd01:08552] opal_cr: inc_core: Error: The checkpoint failed. 256
<br>
<p>BLCR don&#180;t generate the context file 
<br>
(/tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552). If I execute the 
<br>
checkpoint command manually (/softs/blcr-0.6.5/bin/cr_checkpoint --pid 
<br>
8552 --file /tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552) it returns 
<br>
the same error: Checkpoint failed: Bad file descriptor
<br>
<p>Thanks,
<br>
Leonardo Fialho
<br>
<p>Leonardo Fialho escribi&#243;:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody experiment this error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [aogrdini:09070] Global) Receive a command message from [[13242,0],0].
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [aogrd02:07642] Local) Receive a command message.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [aogrd01:07938] Local) Receive a command message.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [aogrd01:07941] App) signal_handler: Receive Checkpoint Request.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [aogrd02:07645] App) signal_handler: Receive Checkpoint Request.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [aogrd01:07941] crs:blcr: checkpoint(7941, ---)
</span><br>
<span class="quotelev1">&gt; [aogrd01:07941] crs:blcr: checkpoint_peer(7941, --)
</span><br>
<span class="quotelev1">&gt; [aogrd01:07941] crs:blcr: get_checkpoint_filename(--, 7941)
</span><br>
<span class="quotelev1">&gt; [aogrd01:07941] crs:blcr: checkpoint_cmd(7941)
</span><br>
<span class="quotelev1">&gt; [aogrd01:07941] crs:blcr: blcr_checkpoint_peer: exec :(cr_checkpoint, 
</span><br>
<span class="quotelev1">&gt; cr_checkpoint --pid 7941 --file 
</span><br>
<span class="quotelev1">&gt; /tmp/opal_snapshot_0.ckpt/ompi_blcr_context.7941):
</span><br>
<span class="quotelev1">&gt; [aogrd01:07941] crs:blcr: blcr_checkpoint_peer: Child failed to 
</span><br>
<span class="quotelev1">&gt; execute :(-1):
</span><br>
<span class="quotelev1">&gt; [aogrd01:07941] crs:blcr: blcr_checkpoint_peer: execvp returned -1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [aogrd02:07645] crs:blcr: blcr_checkpoint_peer: exec :(cr_checkpoint, 
</span><br>
<span class="quotelev1">&gt; cr_checkpoint --pid 7645 --file 
</span><br>
<span class="quotelev1">&gt; /tmp/opal_snapshot_1.ckpt/ompi_blcr_context.7645):
</span><br>
<span class="quotelev1">&gt; [aogrd02:07645] crs:blcr: blcr_checkpoint_peer: Child failed to 
</span><br>
<span class="quotelev1">&gt; execute :(-1):
</span><br>
<span class="quotelev1">&gt; [aogrd02:07645] crs:blcr: blcr_checkpoint_peer: execvp returned -1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [aogrd02:07642] Local)   Location:        [/tmp/opal_snapshot_1.ckpt]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The application stop here and don&#180;t continue the execution. It&#180;s 
</span><br>
<span class="quotelev1">&gt; using  libcr version 0.6.5
</span><br>
<span class="quotelev1">&gt; $ lsof -p 7518
</span><br>
<span class="quotelev1">&gt; /softs/blcr-0.6.5/0.6.5/lib/libcr.so.0.2.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After orte-checkpoint command the application process is duplicated on 
</span><br>
<span class="quotelev1">&gt; the nodes, like a child of the original process.
</span><br>
<span class="quotelev1">&gt; When a run an application with this version and take a checkpoint 
</span><br>
<span class="quotelev1">&gt; manually, I have no problem...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho
</span><br>
<span class="quotelev1">&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev1">&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev1">&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev1">&gt; <a href="http://www.caos">http://www.caos</a>
</span><br>
<span class="quotelev1">&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev1">&gt; Fax: +34-93-581-2478
</span><br>
Leonardo Fialho
<br>
Computer Architecture and Operating Systems Department - CAOS
<br>
Universidad Autonoma de Barcelona - UAB
<br>
ETSE, Edifcio Q, QC/3088
<br>
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
<br>
Phone: +34-93-581-2888
<br>
Fax: +34-93-581-2478
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5553.php">Doug Reeder: "Re: [OMPI users] trouble building on a macbook"</a>
<li><strong>Previous message:</strong> <a href="5551.php">Leonardo Fialho: "[OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>In reply to:</strong> <a href="5551.php">Leonardo Fialho: "[OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5559.php">Josh Hursey: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>Reply:</strong> <a href="5559.php">Josh Hursey: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
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
