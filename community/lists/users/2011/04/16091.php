<?
$subject_val = "Re: [OMPI users] openmpi/pbsdsh/Torque problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 18:17:04 2011" -->
<!-- isoreceived="20110403221704" -->
<!-- sent="Sun, 3 Apr 2011 16:16:55 -0600" -->
<!-- isosent="20110403221655" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/pbsdsh/Torque problem" -->
<!-- id="12ECD4CC-F05E-401D-9DCE-07AFE1192E7D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D98E30A.7060601_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi/pbsdsh/Torque problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-03 18:16:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16092.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16090.php">Reuti: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16086.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16089.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Works great for me...sleep is dead every time. &lt;shrug&gt;
<br>
<p>On Apr 3, 2011, at 3:13 PM, David Singleton wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can prove this to yourself rather easily. Just ssh to a remote node and execute any command that lingers for awhile - say something simple like &quot;sleep&quot;. Then kill the ssh and do a &quot;ps&quot; on the remote node. I guarantee that the command will have died.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmmm ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; vayu1:~ &gt; ssh v37 sleep 600 &amp;
</span><br>
<span class="quotelev1">&gt; [1] 30145
</span><br>
<span class="quotelev1">&gt; vayu1:~ &gt; kill -9 30145
</span><br>
<span class="quotelev1">&gt; [1]  + Suspended (tty input)         ssh v37 sleep 600
</span><br>
<span class="quotelev1">&gt; vayu1:~ &gt;
</span><br>
<span class="quotelev1">&gt; [1]    Killed                        ssh v37 sleep 600
</span><br>
<span class="quotelev1">&gt; vayu1:~ &gt; ssh v37 ps aux | grep dbs900 | grep sleep
</span><br>
<span class="quotelev1">&gt; dbs900   18774  0.0  0.0   9360  1348 ?        Ss   07:12   0:00 /bin/tcsh -c sleep 600
</span><br>
<span class="quotelev1">&gt; dbs900   18806  0.0  0.0   3800   480 ?        S    07:12   0:00 sleep 600
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
<li><strong>Next message:</strong> <a href="16092.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16090.php">Reuti: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16086.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16089.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
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
