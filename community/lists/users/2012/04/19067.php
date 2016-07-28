<?
$subject_val = "Re: [OMPI users] Absolute/relative paths of orted";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 22 15:53:38 2012" -->
<!-- isoreceived="20120422195338" -->
<!-- sent="Sun, 22 Apr 2012 15:53:28 -0400" -->
<!-- isosent="20120422195328" -->
<!-- name="McGehee, Robert" -->
<!-- email="Robert.McGehee_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Absolute/relative paths of orted" -->
<!-- id="17B09E7789D3104E8F5EEB0582A8D66FBAA930950C_at_MSGRTPCCRF2WIN.DMN1.FMR.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5EC1813C-CDE0-4B5A-82FB-6254812E8E28_at_open-mpi.org" -->
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
<strong>From:</strong> McGehee, Robert (<em>Robert.McGehee_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-22 15:53:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19068.php">seshendra seshu: "[OMPI users] Regarding MPI programming"</a>
<li><strong>Previous message:</strong> <a href="19066.php">Ralph Castain: "Re: [OMPI users] Absolute/relative paths of orted"</a>
<li><strong>In reply to:</strong> <a href="19066.php">Ralph Castain: "Re: [OMPI users] Absolute/relative paths of orted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply. You solved my problem!
<br>
<p>You are correct about the configure command containing &quot;--enable-orterun-prefix-by-default&quot;. I used the Gentoo Portage build script to compile which appended that option by default.
<br>
<p>Here's the configure call Gentoo used:
<br>
./configure --prefix=/data/gentoo/usr --build=x86_64-pc-linux-gnu --host=x86_64-pc-linux-gnu --mandir=/data/gentoo/usr/share/man --infodir=/data/gentoo/usr/share/info --datadir=/data/gentoo/usr/share --sysconfdir=/data/gentoo/etc --localstatedir=/data/gentoo/var/lib --libdir=/data/gentoo/usr/lib --disable-dependency-tracking --sysconfdir=/data/gentoo/etc/openmpi --enable-pretty-print-stacktrace --enable-orterun-prefix-by-default --with-hwloc=/data/gentoo/usr --enable-mpi-thread-multiple --enable-opal-multi-threads --enable-contrib-no-build=vt --enable-mpi-cxx --disable-io-romio --enable-heterogeneous --enable-ipv6 --without-udapl --without-openib --without-knem --without-mx --without-psm --disable-openib-control-hdr-padding --disable-openib-connectx-xrc --disable-openib-rdmacm --disable-openib-dynamic-sl --disable-btl-openib-failover --without-sctp --without-tm --without-slurm --enable-shared --enable-static
<br>
<p><p>To your other question, neither OpenMPI installation is on our NFS filesystem (and thus not visible from the other computer).
<br>
<p>Both servers get the correct location of mpirun (after creating an orted symlink on the Mac):
<br>
<p>[Mac or Linux]~&gt; mpirun -n 2 -H linuxserver,macserver which mpirun
<br>
/data/gentoo/usr/bin/mpirun
<br>
/opt/local/lib/openmpi/bin/mpirun
<br>
<p>Anyway, I edited the build script to remove the configure option --enable-orterun-prefix-by-default and the linuxserver was able to communicate with the macserver without any problems. Please let me know if you think there will be any undesirable side effect from this change (or any of the other arguments), as I'm not sure why the Gentoo developers added this argument in the first place.
<br>
<p>Thanks, Robert
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Sunday, April 22, 2012 2:51 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Absolute/relative paths of orted
<br>
<p>How did you configure OMPI on your servers? By default, ORTE should be using strictly a relative path name - the only times it doesn't are when you configure --enable-orterun-prefix-by-default, or have an environ param that indicates we should apply the prefix.
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19068.php">seshendra seshu: "[OMPI users] Regarding MPI programming"</a>
<li><strong>Previous message:</strong> <a href="19066.php">Ralph Castain: "Re: [OMPI users] Absolute/relative paths of orted"</a>
<li><strong>In reply to:</strong> <a href="19066.php">Ralph Castain: "Re: [OMPI users] Absolute/relative paths of orted"</a>
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
