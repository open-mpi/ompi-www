<?
$subject_val = "Re: [OMPI users] checkpointing multi node and multi process applications";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  4 08:17:51 2010" -->
<!-- isoreceived="20100304131751" -->
<!-- sent="Thu, 4 Mar 2010 10:17:45 -0300" -->
<!-- isosent="20100304131745" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpointing multi node and multi process applications" -->
<!-- id="9108753b1003040517n4c9b673fy535b7c03c9425d31_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9108753b1003031724w380769fyeb9debdf65391ae6_at_mail.gmail.com" -->
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
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-04 08:17:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12237.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12235.php">&#194;&#237;&#201;&#217;&#189;&#220;: "[OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>In reply to:</strong> <a href="12233.php">Fernando Lemos: "[OMPI users] checkpointing multi node and multi process applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12246.php">Joshua Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Reply:</strong> <a href="12246.php">Joshua Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Mar 3, 2010 at 10:24 PM, Fernando Lemos &lt;fernandotcl_at_[hidden]&gt; wrote:
<br>
&lt;snip&gt;
<br>
<span class="quotelev1">&gt; Is there anything I can do to provide more information about this bug?
</span><br>
<span class="quotelev1">&gt; E.g. try to compile the code in the SVN trunk? I also have kept the
</span><br>
<span class="quotelev1">&gt; snapshots intact, I can tar them up and upload them somewhere in case
</span><br>
<span class="quotelev1">&gt; you guys need it. I can also provide the source code to the ring
</span><br>
<span class="quotelev1">&gt; program, but it's really the canonical ring MPI example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I tried 1.5 (1.5a1r22754 nightly snapshot, same compilation flags).
<br>
This time taking the checkpoint didn't generate any error message:
<br>
<p>root_at_debian1:~# mpirun -am ft-enable-cr -mca btl_tcp_if_include eth1
<br>
-np 2 --host debian1,debian2 ring
<br>
&lt;snip&gt;
<br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 sending 2761 to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 received 2760
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 sending 2760 to 0
</span><br>
root_at_debian1:~#
<br>
<p>But restoring it did:
<br>
<p>root_at_debian1:~# ompi-restart ompi_global_snapshot_23071.ckpt
<br>
[debian1:23129] Error: Unable to access the path
<br>
[/root/ompi_global_snapshot_23071.ckpt/0/opal_snapshot_1.ckpt]!
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_1.ckpt) is invalid because either
<br>
you have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 23129 on
<br>
node debian1 exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
root_at_debian1:~#
<br>
<p>Indeed, opal_snapshot_1.ckpt does not exist exist:
<br>
<p>root_at_debian1:~# find ompi_global_snapshot_23071.ckpt/
<br>
ompi_global_snapshot_23071.ckpt/
<br>
ompi_global_snapshot_23071.ckpt/global_snapshot_meta.data
<br>
ompi_global_snapshot_23071.ckpt/restart-appfile
<br>
ompi_global_snapshot_23071.ckpt/0
<br>
ompi_global_snapshot_23071.ckpt/0/opal_snapshot_0.ckpt
<br>
ompi_global_snapshot_23071.ckpt/0/opal_snapshot_0.ckpt/ompi_blcr_context.23073
<br>
ompi_global_snapshot_23071.ckpt/0/opal_snapshot_0.ckpt/snapshot_meta.data
<br>
root_at_debian1:~#
<br>
<p>It can be found in debian2:
<br>
<p>root_at_debian2:~# find ompi_global_snapshot_23071.ckpt/
<br>
ompi_global_snapshot_23071.ckpt/
<br>
ompi_global_snapshot_23071.ckpt/0
<br>
ompi_global_snapshot_23071.ckpt/0/opal_snapshot_1.ckpt
<br>
ompi_global_snapshot_23071.ckpt/0/opal_snapshot_1.ckpt/snapshot_meta.data
<br>
ompi_global_snapshot_23071.ckpt/0/opal_snapshot_1.ckpt/ompi_blcr_context.6501
<br>
root_at_debian2:~#
<br>
<p>Then I tried supplying a hostfile for ompi-run and it worked just
<br>
fine! I thought the checkpoint included the hosts information?
<br>
<p>So I think it's fixed in 1.5. Should I try the 1.4 branch in SVN?
<br>
<p><p>Thanks a bunch,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12237.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12235.php">&#194;&#237;&#201;&#217;&#189;&#220;: "[OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>In reply to:</strong> <a href="12233.php">Fernando Lemos: "[OMPI users] checkpointing multi node and multi process applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12246.php">Joshua Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Reply:</strong> <a href="12246.php">Joshua Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
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
