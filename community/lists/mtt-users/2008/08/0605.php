<?
$subject_val = "[MTT users] FW: ALPS modifications for MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 10:25:41 2008" -->
<!-- isoreceived="20080814142541" -->
<!-- sent="Thu, 14 Aug 2008 10:24:42 -0400" -->
<!-- isosent="20080814142442" -->
<!-- name="Matney Sr, Kenneth D." -->
<!-- email="matneykdsr_at_[hidden]" -->
<!-- subject="[MTT users] FW: ALPS modifications for MTT" -->
<!-- id="537C6C0940C6C143AA46A88946B854170E874E27_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [MTT users] FW: ALPS modifications for MTT<br>
<strong>From:</strong> Matney Sr, Kenneth D. (<em>matneykdsr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-14 10:24:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0606.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Previous message:</strong> <a href="0604.php">Jeff Squyres: "Re: [MTT users] Running MTT tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0606.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Reply:</strong> <a href="0606.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>When running MTT on the Cray XT3/XT4 machines, I found that MTT does not
<br>
contain any support for ALPS.  As a result, it always executes mpirun
<br>
with &quot;-np 1&quot;.  I patched lib/MTT/Values/Functions.pm with the following
<br>
to overcome this:
<br>
<p>-----Original Message-----
<br>
From: Matney Sr, Kenneth D. 
<br>
Sent: Wednesday, August 13, 2008 5:57 PM
<br>
To: Shipman, Galen M.
<br>
Cc: Graham, Richard L.
<br>
Subject: FW: ALPS modifications for MTT
<br>
<p>--- Functions-bak.pm	2008-08-06 14:31:26.256538000 -0400
<br>
+++ Functions.pm	2008-08-13 17:43:40.273641000 -0400
<br>
@@ -602,6 +602,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Resource managers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return &quot;SLURM&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if slurm_job();
<br>
+    return &quot;ALPS&quot;
<br>
+        if alps_job();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return &quot;TM&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if pbs_job();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return &quot;N1GE&quot;
<br>
@@ -638,6 +640,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Resource managers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return slurm_max_procs()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if slurm_job();
<br>
+    return alps_max_procs()
<br>
+        if alps_job();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return pbs_max_procs()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if pbs_job();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return n1ge_max_procs()
<br>
@@ -670,6 +674,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Resource managers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return slurm_hosts()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if slurm_job();
<br>
+    return alps_hosts()
<br>
+        if alps_job();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return pbs_hosts()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if pbs_job();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return n1ge_hosts()
<br>
@@ -1004,6 +1010,70 @@
<br>
&nbsp;
<br>
&nbsp;
<br>
#-----------------------------------------------------------------------
<br>
<pre>
---
 
+# Return &quot;1&quot; if we're running in an ALPS job; &quot;0&quot; otherwise.
+sub alps_job {
+    Debug(&quot;&amp;alps_job\n&quot;);
+
+#   It is true that ALPS can be run in an interactive access mode;
however,
+#   this would not be a true managed environment.  Such only can be
+#   achieved under a batch scheduler.
+    return ((exists($ENV{BATCH_PARTITION_ID}) &amp;&amp;
+             exists($ENV{PBS_NNODES})) ? &quot;1&quot; : &quot;0&quot;);
+}
+
+#----------------------------------------------------------------------
----
+
+# If in an ALPS job, return the max number of processes we can run.
+# Otherwise, return 0.
+sub alps_max_procs {
+    Debug(&quot;&amp;alps_max_procs\n&quot;);
+
+    return &quot;0&quot;
+        if (!alps_job());
+
+#   If we were not running under PBS or some other batch system, we
would
+#   not have the foggiest idea of how many processes mpirun could
spawn.
+    my $ret;
+    $ret=$ENV{PBS_NNODES};
+
+    Debug(&quot;&amp;alps_max_procs returning: $ret\n&quot;);
+    return &quot;$ret&quot;;
+}
+
+#----------------------------------------------------------------------
----
+
+# If in an ALPS job, return the hosts we can run on.  Otherwise, return
+# &quot;&quot;.
+sub alps_hosts {
+    Debug(&quot;&amp;alps_hosts\n&quot;);
+
+    return &quot;&quot;
+        if (!alps_job());
+
+#   Again, we need a batch system to achieve management; return the
uniq'ed
+#   contents of $PBS_HOSTFILE.  Actually, on the Cray XT, we can return
the
+#   NIDS allocated by ALPS; but, without launching servers to other
service
+#   nodes, all communication is via the launching node and NIDS
actually
+#   have no persistent resource allocated to the user.  That is, all
file
+#   resources accessible from a NID are shared with the launching node.
+#   And, since ALPS is managed by the batch system, only the launching
node
+#   can initiate communication with a NID.  In effect, the Cray XT
model is
+#   of a single service node with a varying number of compute
processors.
+    open (FILE, $ENV{PBS_NODEFILE}) || return &quot;&quot;;
+    my $lines;
+    while (&lt;FILE&gt;) {
+        chomp;
+        $lines-&gt;{$_} = 1;
+    }
+
+    my @hosts = sort(keys(%$lines));
+    my $hosts = join(&quot;,&quot;, @hosts);
+    Debug(&quot;&amp;alps_hosts returning: $hosts\n&quot;);
+    return &quot;$hosts&quot;;
+}
+
+#----------------------------------------------------------------------
----
+
 # Return &quot;1&quot; if we're running in a PBS job; &quot;0&quot; otherwise.
 sub pbs_job {
     Debug(&quot;&amp;pbs_job\n&quot;);
-- 
Ken
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0606.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Previous message:</strong> <a href="0604.php">Jeff Squyres: "Re: [MTT users] Running MTT tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0606.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<li><strong>Reply:</strong> <a href="0606.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
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
