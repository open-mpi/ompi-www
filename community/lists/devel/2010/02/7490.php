<?
$subject_val = "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 11:16:27 2010" -->
<!-- isoreceived="20100225161627" -->
<!-- sent="Thu, 25 Feb 2010 17:16:19 +0100" -->
<!-- isosent="20100225161619" -->
<!-- name="Leonardo Fialho" -->
<!-- email="leonardofialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk" -->
<!-- id="80DE0605-9BAA-463E-A1D9-A9F5CBC42B48_at_caos.uab.es" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8632DDEA-475B-4066-B64E-31061AD3758B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk<br>
<strong>From:</strong> Leonardo Fialho (<em>leonardofialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 11:16:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7491.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7489.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7489.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7491.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7491.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph and Josh,
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Regarding to the schema represented by the picture, I didn't understand the RecoS' behaviour in a node failure situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In this case, will mpirun consider the daemon failure as a normal proc failure? If it is correct, should mpirun update the global procs state for all jobs running under the failed daemon?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I haven't included the node failure case yet - still on my &quot;to-do&quot; list. In brief, the answer is yes/no. :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Daemon failure follows the same code path as shown in the flow chart. However, it is up to the individual modules to determine a response to that failure. The &quot;orcm&quot; RecoS module response is to (a) mark all procs on that node as having failed, (b) mark that node as &quot;down&quot; so it won't get reused, and (c) remap and restart all such procs on the remaining available nodes, starting new daemon(s) as required.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the orcm environment, nodes that are replaced or rebooted automatically start their own daemon. This is detected by orcm, and the node state (if the node is rebooted) will automatically be updated to &quot;up&quot; - if it is a new node, it is automatically added to the available resources. This allows the node to be reused once the problem has been corrected. In other environments (ssh, slurm, etc), the node is simply left as &quot;down&quot; as there is no way to know if/when the node becomes available again.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you aren't using the &quot;orcm&quot; module, then the default behavior will abort the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to echo this response. The orted and process failures use the same error path, but can be easily differentiated by their jobids. The 'orcm' component is a good example of differentiating these two fault scenarios to correctly recover the ORTE job. Soon we may/should/will have the same ability with certain MPI jobs. :)
</span><br>
<p>Hum... I'm really afraid about this. I understand your choice since it is really a good solution for fail/stop/restart behaviour, but looking from the fail/recovery side, can you envision some alternative for the orted's reconfiguration on the fly?
<br>
<p>Best regards,
<br>
Leonardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7491.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7489.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7489.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7491.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7491.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
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
