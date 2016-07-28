<?
$subject_val = "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 21:26:26 2010" -->
<!-- isoreceived="20100306022626" -->
<!-- sent="Fri, 5 Mar 2010 21:26:21 -0500" -->
<!-- isosent="20100306022621" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*" -->
<!-- id="FD2DD1D0-8F00-4411-82A3-E796B75CA238_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100305190507.GA39749_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 21:26:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0727.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Previous message:</strong> <a href="0725.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*"</a>
<li><strong>In reply to:</strong> <a href="0725.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0727.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Reply:</strong> <a href="0727.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2010, at 2:05 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; The check is there now.  Ready for review.
</span><br>
<p>Did you mean to include these parts?
<br>
<p>--- lib/MTT/Messages.pm Mon Nov 09 14:38:09 2009 -0500
<br>
+++ lib/MTT/Messages.pm Fri Mar 05 14:02:39 2010 -0500
<br>
@@ -174,7 +174,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$lev = 0 if (! defined($lev));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my @called = caller($lev);
<br>
&nbsp;
<br>
-    my $s = wrap(&quot;&quot;, &quot;   &quot;, (join(&quot;:&quot;, map { &amp;_relative_path($_) } @called[1..2]), @_));
<br>
+    my $s = (join(&quot;:&quot;, map { &amp;_relative_path($_) } @called[1..2]), @_);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print $s;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print $LOGFILE $s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (defined($LOGFILE));
<br>
<p>--- client/mtt  Mon Nov 09 14:38:09 2009 -0500
<br>
+++ client/mtt  Fri Mar 05 14:02:39 2010 -0500
<br>
@@ -498,6 +498,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# execute on_start callback if exists
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_do_step($ini, &quot;mtt&quot;, &quot;before_mtt_start_exec&quot;);
<br>
&nbsp;
<br>
+    # Process setenv, unsetenv, prepend_path, and append_path
<br>
+
<br>
+    my $config;
<br>
+    $config-&gt;{setenv} = Value($ini, &quot;mtt&quot;, &quot;setenv&quot;);
<br>
+    $config-&gt;{unsetenv} = Value($ini, &quot;mtt&quot;, &quot;unsetenv&quot;);
<br>
+    $config-&gt;{prepend_path} = Value($ini, &quot;mtt&quot;, &quot;prepend_path&quot;);
<br>
+    $config-&gt;{append_path} = Value($ini, &quot;mtt&quot;, &quot;append_path&quot;);
<br>
+    my @save_env;
<br>
+    ProcessEnvKeys($config, \@save_env);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Set the logfile, if specified
<br>
&nbsp;
<br>
--- lib/MTT/Defaults.pm Mon Nov 09 14:38:09 2009 -0500
<br>
+++ lib/MTT/Defaults.pm Fri Mar 05 14:02:39 2010 -0500
<br>
@@ -42,7 +42,7 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;known_compiler_names =&gt; [ &quot;gnu&quot;, &quot;pgi&quot;, &quot;ibm&quot;, &quot;intel&quot;, &quot;kai&quot;, &quot;absoft&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;pathscale&quot;, &quot;sun&quot;, &quot;microsoft&quot;, &quot;none&quot;, &quot;unknown&quot; ],
<br>
-    known_resource_manager_names =&gt; [ &quot;slurm&quot;, &quot;tm&quot;, &quot;loadleveler&quot;, &quot;n1ge&quot;,
<br>
+    known_resource_manager_names =&gt; [ &quot;slurm&quot;, &quot;tm&quot;, &quot;loadleveler&quot;, &quot;sge&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;alps&quot;, &quot;none&quot;, &quot;unknown&quot; ],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;known_network_names =&gt; [ &quot;tcp&quot;, &quot;udp&quot;, &quot;ethernet&quot;, &quot;gm&quot;, &quot;mx&quot;, &quot;verbs&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;udapl&quot;, &quot;psm&quot;, &quot;elan&quot;, &quot;portals&quot;, &quot;shmem&quot;,
<br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0727.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Previous message:</strong> <a href="0725.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*"</a>
<li><strong>In reply to:</strong> <a href="0725.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklockingserver	*REVIEW NEEDED*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0727.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Reply:</strong> <a href="0727.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
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
