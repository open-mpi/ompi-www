<?
$subject_val = "Re: [OMPI users] bash: orted: ... / Kedar Soparkar";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 24 14:02:02 2011" -->
<!-- isoreceived="20110124190202" -->
<!-- sent="Tue, 25 Jan 2011 00:31:58 +0530" -->
<!-- isosent="20110124190158" -->
<!-- name="Kedar Soparkar" -->
<!-- email="kedarsoparkar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bash: orted: ... / Kedar Soparkar" -->
<!-- id="AANLkTi=MghH1Y2-2L-T_c=4yy7krGB2-ZMiYFHutSxHm_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] bash: orted: ... / Kedar Soparkar" -->
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
<strong>Subject:</strong> Re: [OMPI users] bash: orted: ... / Kedar Soparkar<br>
<strong>From:</strong> Kedar Soparkar (<em>kedarsoparkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-24 14:01:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15412.php">Jeff Squyres: "Re: [OMPI users] bash: orted: ... / Kedar Soparkar"</a>
<li><strong>Previous message:</strong> <a href="15410.php">Nathan Hjelm: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15412.php">Jeff Squyres: "Re: [OMPI users] bash: orted: ... / Kedar Soparkar"</a>
<li><strong>Reply:</strong> <a href="15412.php">Jeff Squyres: "Re: [OMPI users] bash: orted: ... / Kedar Soparkar"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The exact contents of the environment variables as reported by 'env' are:
<br>
<p>PATH=/usr/lib/qt-3.3/bin:/usr/kerberos/sbin:/usr/kerberos/bin:/usr/lib/ccache:/usr/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/usr/lib/openmpi/bin:/home/mpiuser/bin
<br>
LD_LIBRARY_PATH=/usr/lib/openmpi/lib
<br>
<p>Am I missing some other variables?
<br>
<p>-Kedar
<br>
<p><span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; From:&#160;Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To:&#160;Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:&#160;Mon, 24 Jan 2011 13:48:51 +0100
</span><br>
<span class="quotelev1">&gt; Subject:&#160;Re: [OMPI users] bash: orted: command not found despite env vars being set
</span><br>
<span class="quotelev1">&gt; Am 24.01.2011 um 11:47 schrieb Kedar Soparkar:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to setup a small cluster of 2 nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Both nodes are running Fedora 11 Kernel 2.6.29.4, have the same user
</span><br>
<span class="quotelev2">&gt;&gt; mpiuser with the same password. Both of them have their env vars set
</span><br>
<span class="quotelev2">&gt;&gt; as follows in /etc/profile itself:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is syntax for which type of shell?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PATH &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;usr/lib/openmpi/bin
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH &#160; &#160; &#160; &#160; &#160; usr/lib/openmpi/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The leading slash is missing in case you want to specify absolute paths. And any set path should be retained and not be replaced:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=/usr/lib/openmpi/bin${PATH:+:$PATH}
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/usr/lib/openmpi/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently, mpirun executes successfully on either node individually.
</span><br>
<span class="quotelev2">&gt;&gt; However, when trying to run over the network, I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [mpiuser_at_c-199 ~]$ mpirun -np 3 --hostfile .mpi_hostfile ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; bash: orted: command not found
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 12639) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What fixes should I try to get the cluster to work?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15412.php">Jeff Squyres: "Re: [OMPI users] bash: orted: ... / Kedar Soparkar"</a>
<li><strong>Previous message:</strong> <a href="15410.php">Nathan Hjelm: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15412.php">Jeff Squyres: "Re: [OMPI users] bash: orted: ... / Kedar Soparkar"</a>
<li><strong>Reply:</strong> <a href="15412.php">Jeff Squyres: "Re: [OMPI users] bash: orted: ... / Kedar Soparkar"</a>
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
