<?
$subject_val = "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 20:57:43 2008" -->
<!-- isoreceived="20080429005743" -->
<!-- sent="Mon, 28 Apr 2008 19:57:37 -0500" -->
<!-- isosent="20080429005737" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1" -->
<!-- id="904B3063-3003-47F9-8B21-2EB90B24AF71_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4815A2AF.5080202_at_aomail.uab.es" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-28 20:57:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5560.php">Brian Taylor: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>Previous message:</strong> <a href="5558.php">Jeff Squyres: "Re: [OMPI users] infiniband"</a>
<li><strong>In reply to:</strong> <a href="5552.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5563.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>Reply:</strong> <a href="5563.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think I have ever seen this one before. :(
<br>
<p>So you are trying to checkpoint the MPI process by hand or a non-MPI  
<br>
process? Can you confirm that you can successfully checkpoint/restart  
<br>
a non-MPI process on these machines? What version of the Open MPI  
<br>
trunk are you using? Have you made any changes to the trunk to produce  
<br>
this build?
<br>
<p>Can you send me the info described here (off-list is ok):
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>-- Josh
<br>
<p>On Apr 28, 2008, at 5:10 AM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Changing some parameters (blcr_checkpoint_cmd):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [aogrd01:08552] crs:blcr: checkpoint(8552, ---)
</span><br>
<span class="quotelev1">&gt; [aogrd01:08552] crs:blcr: checkpoint_peer(8552, --)
</span><br>
<span class="quotelev1">&gt; [aogrd01:08552] crs:blcr: get_checkpoint_filename(--, 8552)
</span><br>
<span class="quotelev1">&gt; [aogrd01:08552] crs:blcr: checkpoint_cmd(8552)
</span><br>
<span class="quotelev1">&gt; [aogrd01:08552] crs:blcr: blcr_checkpoint_peer: exec
</span><br>
<span class="quotelev1">&gt; :(/softs/blcr-0.6.5/bin/cr_checkpoint,
</span><br>
<span class="quotelev1">&gt; /softs/blcr-0.6.5/bin/cr_checkpoint --pid 8552 --file
</span><br>
<span class="quotelev1">&gt; /tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552):
</span><br>
<span class="quotelev1">&gt; [aogrd01:08552] crs:blcr: thread_callback()
</span><br>
<span class="quotelev1">&gt; [aogrd01:08552] crs:blcr: thread_callback: Continue.
</span><br>
<span class="quotelev1">&gt; [aogrd01:08552] crs:blcr: blcr_checkpoint_peer: Thread finished with
</span><br>
<span class="quotelev1">&gt; status 2
</span><br>
<span class="quotelev1">&gt; Checkpoint failed: Bad file descriptor
</span><br>
<span class="quotelev1">&gt; chmod: cannot access `/tmp/opal_snapshot_0.ckpt/ompi_blcr_context. 
</span><br>
<span class="quotelev1">&gt; 8552':
</span><br>
<span class="quotelev1">&gt; No such file or directory
</span><br>
<span class="quotelev1">&gt; [aogrd01:08552] crs:blcr: move(): Error: Unable to execute the command
</span><br>
<span class="quotelev1">&gt; &lt;chmod u+rwX  /tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552&gt; : 
</span><br>
<span class="quotelev1">&gt; [256].
</span><br>
<span class="quotelev1">&gt; crs:blcr chmod: Resource temporarily unavailable
</span><br>
<span class="quotelev1">&gt; [aogrd01:08552] crs:blcr: checkpoint(): Error: Unable to chmod the
</span><br>
<span class="quotelev1">&gt; checkpoint file (ompi_blcr_context.8552 in the directory
</span><br>
<span class="quotelev1">&gt; (/tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552) :[256].
</span><br>
<span class="quotelev1">&gt; crs:blcr: checkpoint: Invalid argument
</span><br>
<span class="quotelev1">&gt; [aogrd01:08552] opal_cr: inc_core: Error: The checkpoint failed. 256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BLCR don&#180;t generate the context file
</span><br>
<span class="quotelev1">&gt; (/tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552). If I execute the
</span><br>
<span class="quotelev1">&gt; checkpoint command manually (/softs/blcr-0.6.5/bin/cr_checkpoint --pid
</span><br>
<span class="quotelev1">&gt; 8552 --file /tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552) it  
</span><br>
<span class="quotelev1">&gt; returns
</span><br>
<span class="quotelev1">&gt; the same error: Checkpoint failed: Bad file descriptor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anybody experiment this error?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [aogrdini:09070] Global) Receive a command message from [[13242,0], 
</span><br>
<span class="quotelev2">&gt;&gt; 0].
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd02:07642] Local) Receive a command message.
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:07938] Local) Receive a command message.
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:07941] App) signal_handler: Receive Checkpoint Request.
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd02:07645] App) signal_handler: Receive Checkpoint Request.
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:07941] crs:blcr: checkpoint(7941, ---)
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:07941] crs:blcr: checkpoint_peer(7941, --)
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:07941] crs:blcr: get_checkpoint_filename(--, 7941)
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:07941] crs:blcr: checkpoint_cmd(7941)
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:07941] crs:blcr: blcr_checkpoint_peer: exec :(cr_checkpoint,
</span><br>
<span class="quotelev2">&gt;&gt; cr_checkpoint --pid 7941 --file
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/opal_snapshot_0.ckpt/ompi_blcr_context.7941):
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:07941] crs:blcr: blcr_checkpoint_peer: Child failed to
</span><br>
<span class="quotelev2">&gt;&gt; execute :(-1):
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:07941] crs:blcr: blcr_checkpoint_peer: execvp returned -1
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd02:07645] crs:blcr: blcr_checkpoint_peer: exec :(cr_checkpoint,
</span><br>
<span class="quotelev2">&gt;&gt; cr_checkpoint --pid 7645 --file
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/opal_snapshot_1.ckpt/ompi_blcr_context.7645):
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd02:07645] crs:blcr: blcr_checkpoint_peer: Child failed to
</span><br>
<span class="quotelev2">&gt;&gt; execute :(-1):
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd02:07645] crs:blcr: blcr_checkpoint_peer: execvp returned -1
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd02:07642] Local)   Location:        [/tmp/opal_snapshot_1.ckpt]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The application stop here and don&#180;t continue the execution. It&#180;s
</span><br>
<span class="quotelev2">&gt;&gt; using  libcr version 0.6.5
</span><br>
<span class="quotelev2">&gt;&gt; $ lsof -p 7518
</span><br>
<span class="quotelev2">&gt;&gt; /softs/blcr-0.6.5/0.6.5/lib/libcr.so.0.2.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After orte-checkpoint command the application process is duplicated  
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev2">&gt;&gt; the nodes, like a child of the original process.
</span><br>
<span class="quotelev2">&gt;&gt; When a run an application with this version and take a checkpoint
</span><br>
<span class="quotelev2">&gt;&gt; manually, I have no problem...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev2">&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev2">&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.caos">http://www.caos</a>
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho
</span><br>
<span class="quotelev1">&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev1">&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev1">&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev1">&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev1">&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev1">&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5560.php">Brian Taylor: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>Previous message:</strong> <a href="5558.php">Jeff Squyres: "Re: [OMPI users] infiniband"</a>
<li><strong>In reply to:</strong> <a href="5552.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5563.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>Reply:</strong> <a href="5563.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
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
