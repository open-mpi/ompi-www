<?
$subject_val = "[OMPI users] Absolute/relative paths of orted";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 22 14:11:27 2012" -->
<!-- isoreceived="20120422181127" -->
<!-- sent="Sun, 22 Apr 2012 14:11:17 -0400" -->
<!-- isosent="20120422181117" -->
<!-- name="McGehee, Robert" -->
<!-- email="Robert.McGehee_at_[hidden]" -->
<!-- subject="[OMPI users] Absolute/relative paths of orted" -->
<!-- id="17B09E7789D3104E8F5EEB0582A8D66FBAA9309505_at_MSGRTPCCRF2WIN.DMN1.FMR.COM" -->
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
<strong>Subject:</strong> [OMPI users] Absolute/relative paths of orted<br>
<strong>From:</strong> McGehee, Robert (<em>Robert.McGehee_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-22 14:11:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19066.php">Ralph Castain: "Re: [OMPI users] Absolute/relative paths of orted"</a>
<li><strong>Previous message:</strong> <a href="19064.php">Jeffrey Squyres: "Re: [OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19066.php">Ralph Castain: "Re: [OMPI users] Absolute/relative paths of orted"</a>
<li><strong>Reply:</strong> <a href="19066.php">Ralph Castain: "Re: [OMPI users] Absolute/relative paths of orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I've installed openmpi 1.5.5 on both my Mac and Linux servers using the ssh/rsh process manager. I can successfully run a program across both servers from my Mac, but not from my Linux server as the Linux server seems to be trying to run orted using an absolute path rather than a relative one. Quick question is: how can I get my Linux server to use a relative path, rather than absolute path, for orted?
<br>
<p>First, let's verify that orted can be found in each computer's path in a remote login:
<br>
[macserver]~&gt; ssh linuxserver which orted
<br>
/opt/local/lib/openmpi/bin/orted
<br>
[linuxserver]~&gt; ssh macserver which orted
<br>
/data/gentoo/usr/bin/orted
<br>
<p>Initiating mpirun from the Mac works fine:
<br>
[macserver]~&gt; mpirun -n 2 -H macserver,linuxserver hostname
<br>
macserver
<br>
linuxserver
<br>
<p>But not from Linux:
<br>
[linuxserver]~&gt; mpirun -n 2 -H macserver,linuxserver hostname
<br>
bash: /data/gentoo/usr/bin/orted: No such file or directory
<br>
&lt;snip&gt;
<br>
<p>Also, the launch-agent argument doesn't help any as the launch-agent is still expected in the /data/... path:
<br>
[linuxserver]~&gt; mpirun -launch-agent XYZ -n 2 -H macserver,linuxserver hostname
<br>
bash: /data/gentoo/usr/bin/XYZ: No such file or directory
<br>
&lt;snip&gt;
<br>
<p>If I create a /data/gentoo/usr/bin directory on the Mac with an orted symlink to the correct location, mpi will run correctly when started from Linux. However, (aside from being inelegant) I intend to use openmpi on a heterogeneous cluster in which orted may be installed in multiple non-standard locations. I will neither have root access to all computers nor do I want to manage a network of symlinks on every computer in the cluster.
<br>
<p>So, my simple question is, how can I get my Linux server to look for orted in the Mac's PATH, rather than it specifying an absolute path that isn't there?
<br>
<p>Thanks, Robert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19066.php">Ralph Castain: "Re: [OMPI users] Absolute/relative paths of orted"</a>
<li><strong>Previous message:</strong> <a href="19064.php">Jeffrey Squyres: "Re: [OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19066.php">Ralph Castain: "Re: [OMPI users] Absolute/relative paths of orted"</a>
<li><strong>Reply:</strong> <a href="19066.php">Ralph Castain: "Re: [OMPI users] Absolute/relative paths of orted"</a>
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
