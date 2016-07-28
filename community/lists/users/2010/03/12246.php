<?
$subject_val = "Re: [OMPI users] checkpointing multi node and multi process applications";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  4 10:57:10 2010" -->
<!-- isoreceived="20100304155710" -->
<!-- sent="Thu, 4 Mar 2010 10:57:04 -0500" -->
<!-- isosent="20100304155704" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpointing multi node and multi process applications" -->
<!-- id="2E730160-48C2-4275-BD55-B5066008DBC5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9108753b1003040517n4c9b673fy535b7c03c9425d31_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] checkpointing multi node and multi process applications<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-04 10:57:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12247.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12245.php">Damien Hocking: "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="12236.php">Fernando Lemos: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 4, 2010, at 8:17 AM, Fernando Lemos wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Mar 3, 2010 at 10:24 PM, Fernando Lemos &lt;fernandotcl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there anything I can do to provide more information about this bug?
</span><br>
<span class="quotelev2">&gt;&gt; E.g. try to compile the code in the SVN trunk? I also have kept the
</span><br>
<span class="quotelev2">&gt;&gt; snapshots intact, I can tar them up and upload them somewhere in case
</span><br>
<span class="quotelev2">&gt;&gt; you guys need it. I can also provide the source code to the ring
</span><br>
<span class="quotelev2">&gt;&gt; program, but it's really the canonical ring MPI example.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried 1.5 (1.5a1r22754 nightly snapshot, same compilation flags).
</span><br>
<span class="quotelev1">&gt; This time taking the checkpoint didn't generate any error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_debian1:~# mpirun -am ft-enable-cr -mca btl_tcp_if_include eth1
</span><br>
<span class="quotelev1">&gt; -np 2 --host debian1,debian2 ring
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 1 sending 2761 to 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 1 received 2760
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 1 sending 2760 to 0
</span><br>
<span class="quotelev1">&gt; root_at_debian1:~#
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But restoring it did:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_debian1:~# ompi-restart ompi_global_snapshot_23071.ckpt
</span><br>
<span class="quotelev1">&gt; [debian1:23129] Error: Unable to access the path
</span><br>
<span class="quotelev1">&gt; [/root/ompi_global_snapshot_23071.ckpt/0/opal_snapshot_1.ckpt]!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The filename (opal_snapshot_1.ckpt) is invalid because either
</span><br>
<span class="quotelev1">&gt; you have not provided a filename
</span><br>
<span class="quotelev1">&gt;       or provided an invalid filename.
</span><br>
<span class="quotelev1">&gt;       Please see --help for usage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 23129 on
</span><br>
<span class="quotelev1">&gt; node debian1 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; root_at_debian1:~#
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, opal_snapshot_1.ckpt does not exist exist:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_debian1:~# find ompi_global_snapshot_23071.ckpt/
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_23071.ckpt/
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_23071.ckpt/global_snapshot_meta.data
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_23071.ckpt/restart-appfile
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_23071.ckpt/0
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_23071.ckpt/0/opal_snapshot_0.ckpt
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_23071.ckpt/0/opal_snapshot_0.ckpt/ompi_blcr_context.23073
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_23071.ckpt/0/opal_snapshot_0.ckpt/snapshot_meta.data
</span><br>
<span class="quotelev1">&gt; root_at_debian1:~#
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It can be found in debian2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_debian2:~# find ompi_global_snapshot_23071.ckpt/
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_23071.ckpt/
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_23071.ckpt/0
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_23071.ckpt/0/opal_snapshot_1.ckpt
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_23071.ckpt/0/opal_snapshot_1.ckpt/snapshot_meta.data
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_23071.ckpt/0/opal_snapshot_1.ckpt/ompi_blcr_context.6501
</span><br>
<span class="quotelev1">&gt; root_at_debian2:~#
</span><br>
<p>By default, Open MPI requires a shared file system to save checkpoint files. So by default the local snapshot is moved, since the system assumes that it is writing to the same directory on a shared file system. If you want to use the local disk staging functionality (which is known to be broken in the 1.4 series), check out the example on the webpage below:
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/examples.php#uc-ckpt-local">http://osl.iu.edu/research/ft/ompi-cr/examples.php#uc-ckpt-local</a>
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I tried supplying a hostfile for ompi-run and it worked just
</span><br>
<span class="quotelev1">&gt; fine! I thought the checkpoint included the hosts information?
</span><br>
<p>We intentionally do not save the hostfile as part of the checkpoint. Typically folks will want to restart on different nodes than those they checkpointed on (such as in a batch scheduling environment). If we saved the hostfile then it could lead to unexpected user behavior on restart if the machines that they wish to restart on change.
<br>
<p>If you need to pass a hostfile, the you can pass one to ompi-restart just as you would mpirun.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think it's fixed in 1.5. Should I try the 1.4 branch in SVN?
</span><br>
<p>The file staging functionality is known to be broken in the 1.4 series at this time, per the ticket below:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2139">https://svn.open-mpi.org/trac/ompi/ticket/2139</a>
<br>
<p>Unfortunately the fix is likely to be both custom for the branch (since we redesigned the functionality for the trunk and v1.5) and fairly involved. I don't have the time at the moment to work on fix, but hopefully in the coming months I will be able to look into this issue. In the mean time, patches are always welcome :)
<br>
<p>Hope that helps,
<br>
Josh
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a bunch,
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
<li><strong>Next message:</strong> <a href="12247.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12245.php">Damien Hocking: "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="12236.php">Fernando Lemos: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
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
