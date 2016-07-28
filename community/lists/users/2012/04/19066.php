<?
$subject_val = "Re: [OMPI users] Absolute/relative paths of orted";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 22 14:51:02 2012" -->
<!-- isoreceived="20120422185102" -->
<!-- sent="Sun, 22 Apr 2012 12:50:55 -0600" -->
<!-- isosent="20120422185055" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Absolute/relative paths of orted" -->
<!-- id="5EC1813C-CDE0-4B5A-82FB-6254812E8E28_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="17B09E7789D3104E8F5EEB0582A8D66FBAA9309505_at_MSGRTPCCRF2WIN.DMN1.FMR.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] Absolute/relative paths of orted<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-22 14:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19067.php">McGehee, Robert: "Re: [OMPI users] Absolute/relative paths of orted"</a>
<li><strong>Previous message:</strong> <a href="19065.php">McGehee, Robert: "[OMPI users] Absolute/relative paths of orted"</a>
<li><strong>In reply to:</strong> <a href="19065.php">McGehee, Robert: "[OMPI users] Absolute/relative paths of orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19067.php">McGehee, Robert: "Re: [OMPI users] Absolute/relative paths of orted"</a>
<li><strong>Reply:</strong> <a href="19067.php">McGehee, Robert: "Re: [OMPI users] Absolute/relative paths of orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How did you configure OMPI on your servers? By default, ORTE should be using strictly a relative path name - the only times it doesn't are when you configure --enable-orterun-prefix-by-default, or have an environ param that indicates we should apply the prefix.
<br>
<p>I'm also a little surprised to see the Mac's path being picked up by the Linux mpirun command. Any chance you have an NSF mounted directory across the two, and that the &quot;mpirun&quot; being picked up by your linuxserver cmd is actuality the Mac version?
<br>
<p>You might try doing a &quot;which mpirun&quot; to ensure you are getting the one you thought on linuxserver.
<br>
<p>On Apr 22, 2012, at 12:11 PM, McGehee, Robert wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I've installed openmpi 1.5.5 on both my Mac and Linux servers using the ssh/rsh process manager. I can successfully run a program across both servers from my Mac, but not from my Linux server as the Linux server seems to be trying to run orted using an absolute path rather than a relative one. Quick question is: how can I get my Linux server to use a relative path, rather than absolute path, for orted?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, let's verify that orted can be found in each computer's path in a remote login:
</span><br>
<span class="quotelev1">&gt; [macserver]~&gt; ssh linuxserver which orted
</span><br>
<span class="quotelev1">&gt; /opt/local/lib/openmpi/bin/orted
</span><br>
<span class="quotelev1">&gt; [linuxserver]~&gt; ssh macserver which orted
</span><br>
<span class="quotelev1">&gt; /data/gentoo/usr/bin/orted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Initiating mpirun from the Mac works fine:
</span><br>
<span class="quotelev1">&gt; [macserver]~&gt; mpirun -n 2 -H macserver,linuxserver hostname
</span><br>
<span class="quotelev1">&gt; macserver
</span><br>
<span class="quotelev1">&gt; linuxserver
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But not from Linux:
</span><br>
<span class="quotelev1">&gt; [linuxserver]~&gt; mpirun -n 2 -H macserver,linuxserver hostname
</span><br>
<span class="quotelev1">&gt; bash: /data/gentoo/usr/bin/orted: No such file or directory
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, the launch-agent argument doesn't help any as the launch-agent is still expected in the /data/... path:
</span><br>
<span class="quotelev1">&gt; [linuxserver]~&gt; mpirun -launch-agent XYZ -n 2 -H macserver,linuxserver hostname
</span><br>
<span class="quotelev1">&gt; bash: /data/gentoo/usr/bin/XYZ: No such file or directory
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I create a /data/gentoo/usr/bin directory on the Mac with an orted symlink to the correct location, mpi will run correctly when started from Linux. However, (aside from being inelegant) I intend to use openmpi on a heterogeneous cluster in which orted may be installed in multiple non-standard locations. I will neither have root access to all computers nor do I want to manage a network of symlinks on every computer in the cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, my simple question is, how can I get my Linux server to look for orted in the Mac's PATH, rather than it specifying an absolute path that isn't there?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Robert
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19067.php">McGehee, Robert: "Re: [OMPI users] Absolute/relative paths of orted"</a>
<li><strong>Previous message:</strong> <a href="19065.php">McGehee, Robert: "[OMPI users] Absolute/relative paths of orted"</a>
<li><strong>In reply to:</strong> <a href="19065.php">McGehee, Robert: "[OMPI users] Absolute/relative paths of orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19067.php">McGehee, Robert: "Re: [OMPI users] Absolute/relative paths of orted"</a>
<li><strong>Reply:</strong> <a href="19067.php">McGehee, Robert: "Re: [OMPI users] Absolute/relative paths of orted"</a>
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
