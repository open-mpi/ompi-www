<?
$subject_val = "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 08:17:36 2008" -->
<!-- isoreceived="20080429121736" -->
<!-- sent="Tue, 29 Apr 2008 14:18:29 +0200" -->
<!-- isosent="20080429121829" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1" -->
<!-- id="48171215.80401_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="904B3063-3003-47F9-8B21-2EB90B24AF71_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-04-29 08:18:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5564.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5562.php">Pavel Shamis (Pasha): "Re: [OMPI users] infiniband"</a>
<li><strong>In reply to:</strong> <a href="5559.php">Josh Hursey: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5582.php">Josh Hursey: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>Reply:</strong> <a href="5582.php">Josh Hursey: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>Yesterday at night I made some changes, checkout a new SVN version, and 
<br>
revise completely the BLCR installation. It&#180;s working fine. I suspect 2 
<br>
different things:
<br>
<p>1) cache or old files (configured with older BLCR version path) in 
<br>
autom4te, configure or dependencies;
<br>
2) some miss configuration in BLCR headers file.
<br>
<p>When I checkpoint/restart non-MPI application, such applications, 
<br>
probably, uses the correct libraries, but BLCR module was probably 
<br>
compiled with older headers (cache?).
<br>
<p>I&#180;m trying to perform the error again, but before these changes (when 
<br>
it&#180;s not working) BLCR returns the &quot;bad file descriptor&quot; (EBAFD) error, 
<br>
and the blcr module don&#180;t catch this error, only return (-1) &quot;child failed&quot;.
<br>
<p>Thanks,
<br>
Leonardo Fialho
<br>
<p>Josh Hursey escribi&#243;:
<br>
<span class="quotelev1">&gt; I don't think I have ever seen this one before. :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you are trying to checkpoint the MPI process by hand or a non-MPI  
</span><br>
<span class="quotelev1">&gt; process? Can you confirm that you can successfully checkpoint/restart  
</span><br>
<span class="quotelev1">&gt; a non-MPI process on these machines? What version of the Open MPI  
</span><br>
<span class="quotelev1">&gt; trunk are you using? Have you made any changes to the trunk to produce  
</span><br>
<span class="quotelev1">&gt; this build?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send me the info described here (off-list is ok):
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 28, 2008, at 5:10 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Changing some parameters (blcr_checkpoint_cmd):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:08552] crs:blcr: checkpoint(8552, ---)
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:08552] crs:blcr: checkpoint_peer(8552, --)
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:08552] crs:blcr: get_checkpoint_filename(--, 8552)
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:08552] crs:blcr: checkpoint_cmd(8552)
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:08552] crs:blcr: blcr_checkpoint_peer: exec
</span><br>
<span class="quotelev2">&gt;&gt; :(/softs/blcr-0.6.5/bin/cr_checkpoint,
</span><br>
<span class="quotelev2">&gt;&gt; /softs/blcr-0.6.5/bin/cr_checkpoint --pid 8552 --file
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552):
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:08552] crs:blcr: thread_callback()
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:08552] crs:blcr: thread_callback: Continue.
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:08552] crs:blcr: blcr_checkpoint_peer: Thread finished with
</span><br>
<span class="quotelev2">&gt;&gt; status 2
</span><br>
<span class="quotelev2">&gt;&gt; Checkpoint failed: Bad file descriptor
</span><br>
<span class="quotelev2">&gt;&gt; chmod: cannot access `/tmp/opal_snapshot_0.ckpt/ompi_blcr_context. 
</span><br>
<span class="quotelev2">&gt;&gt; 8552':
</span><br>
<span class="quotelev2">&gt;&gt; No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:08552] crs:blcr: move(): Error: Unable to execute the command
</span><br>
<span class="quotelev2">&gt;&gt; &lt;chmod u+rwX  /tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552&gt; : 
</span><br>
<span class="quotelev2">&gt;&gt; [256].
</span><br>
<span class="quotelev2">&gt;&gt; crs:blcr chmod: Resource temporarily unavailable
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:08552] crs:blcr: checkpoint(): Error: Unable to chmod the
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint file (ompi_blcr_context.8552 in the directory
</span><br>
<span class="quotelev2">&gt;&gt; (/tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552) :[256].
</span><br>
<span class="quotelev2">&gt;&gt; crs:blcr: checkpoint: Invalid argument
</span><br>
<span class="quotelev2">&gt;&gt; [aogrd01:08552] opal_cr: inc_core: Error: The checkpoint failed. 256
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BLCR don&#180;t generate the context file
</span><br>
<span class="quotelev2">&gt;&gt; (/tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552). If I execute the
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint command manually (/softs/blcr-0.6.5/bin/cr_checkpoint --pid
</span><br>
<span class="quotelev2">&gt;&gt; 8552 --file /tmp/opal_snapshot_0.ckpt/ompi_blcr_context.8552) it  
</span><br>
<span class="quotelev2">&gt;&gt; returns
</span><br>
<span class="quotelev2">&gt;&gt; the same error: Checkpoint failed: Bad file descriptor
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anybody experiment this error?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrdini:09070] Global) Receive a command message from [[13242,0], 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0].
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd02:07642] Local) Receive a command message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd01:07938] Local) Receive a command message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd01:07941] App) signal_handler: Receive Checkpoint Request.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd02:07645] App) signal_handler: Receive Checkpoint Request.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd01:07941] crs:blcr: checkpoint(7941, ---)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd01:07941] crs:blcr: checkpoint_peer(7941, --)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd01:07941] crs:blcr: get_checkpoint_filename(--, 7941)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd01:07941] crs:blcr: checkpoint_cmd(7941)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd01:07941] crs:blcr: blcr_checkpoint_peer: exec :(cr_checkpoint,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cr_checkpoint --pid 7941 --file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/opal_snapshot_0.ckpt/ompi_blcr_context.7941):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd01:07941] crs:blcr: blcr_checkpoint_peer: Child failed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; execute :(-1):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd01:07941] crs:blcr: blcr_checkpoint_peer: execvp returned -1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd02:07645] crs:blcr: blcr_checkpoint_peer: exec :(cr_checkpoint,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cr_checkpoint --pid 7645 --file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/opal_snapshot_1.ckpt/ompi_blcr_context.7645):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd02:07645] crs:blcr: blcr_checkpoint_peer: Child failed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; execute :(-1):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd02:07645] crs:blcr: blcr_checkpoint_peer: execvp returned -1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aogrd02:07642] Local)   Location:        [/tmp/opal_snapshot_1.ckpt]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The application stop here and don&#180;t continue the execution. It&#180;s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using  libcr version 0.6.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ lsof -p 7518
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /softs/blcr-0.6.5/0.6.5/lib/libcr.so.0.2.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After orte-checkpoint command the application process is duplicated  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the nodes, like a child of the original process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When a run an application with this version and take a checkpoint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manually, I have no problem...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.caos">http://www.caos</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev2">&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev2">&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5564.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5562.php">Pavel Shamis (Pasha): "Re: [OMPI users] infiniband"</a>
<li><strong>In reply to:</strong> <a href="5559.php">Josh Hursey: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5582.php">Josh Hursey: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>Reply:</strong> <a href="5582.php">Josh Hursey: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
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
