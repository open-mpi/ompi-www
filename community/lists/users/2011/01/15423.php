<?
$subject_val = "[OMPI users] Issue Resolved: Re:  bash: orted: ...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 26 08:30:24 2011" -->
<!-- isoreceived="20110126133024" -->
<!-- sent="Wed, 26 Jan 2011 19:00:17 +0530" -->
<!-- isosent="20110126133017" -->
<!-- name="Kedar Soparkar" -->
<!-- email="kedarsoparkar_at_[hidden]" -->
<!-- subject="[OMPI users] Issue Resolved: Re:  bash: orted: ..." -->
<!-- id="AANLkTino_-dE8wMdMo7Zs+pwatiZVUUQ-NtJGoTdiNse_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Issue Resolved: Re:  bash: orted: ...<br>
<strong>From:</strong> Kedar Soparkar (<em>kedarsoparkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-26 08:30:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15424.php">Ashley Pittman: "Re: [OMPI users] Issue Resolved: Re:  bash: orted: ..."</a>
<li><strong>Previous message:</strong> <a href="15422.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15424.php">Ashley Pittman: "Re: [OMPI users] Issue Resolved: Re:  bash: orted: ..."</a>
<li><strong>Reply:</strong> <a href="15424.php">Ashley Pittman: "Re: [OMPI users] Issue Resolved: Re:  bash: orted: ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your assistance, Jeff. The issue has been resolved.
<br>
<p>I discovered that on non-interactive ssh login, only .bash_rc shell
<br>
startup file gets executed.
<br>
Hence, I suppose that for Fedora, the environment variables should be
<br>
updated in:
<br>
<p>1. $HOME/.bash_profile or /etc/profile (for the head node)
<br>
2. $HOME/.bash_rc (for all other nodes)
<br>
<p>Regards,
<br>
<p>Kedar Soparkar
<br>
Undergraduate (6th Semester)
<br>
B.E.(Hons.) Computer Science
<br>
BITS Pilani K.K. Birla Goa Campus, India
<br>
Email: kedarsoparkar_at_[hidden]
<br>
BITS Email: f2008161_at_[hidden]
<br>
<p>---------- Forwarded message ----------
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date: Mon, 24 Jan 2011 15:06:30 -0500
<br>
Subject: Re: [OMPI users] bash: orted: ... / Kedar Soparkar
<br>
Is that what it reports on the remote node?
<br>
<p>I am guessing you are just using ssh to launch remotely -- try this:
<br>
<p>&nbsp;&nbsp;&nbsp;ssh othernode env | grep PATH
<br>
<p>Ensure that the answer you get back is what you expect.  Sometime
<br>
shell startup files do different things if they're invoked
<br>
interactively vs. non-interactively.
<br>
<p><p>On Jan 24, 2011, at 2:01 PM, Kedar Soparkar wrote:
<br>
<p><span class="quotelev1">&gt; The exact contents of the environment variables as reported by 'env' are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PATH=/usr/lib/qt-3.3/bin:/usr/kerberos/sbin:/usr/kerberos/bin:/usr/lib/ccache:/usr/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/usr/lib/openmpi/bin:/home/mpiuser/bin
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/lib/openmpi/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I missing some other variables?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Kedar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev2">&gt;&gt; From: Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 24 Jan 2011 13:48:51 +0100
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] bash: orted: command not found despite env vars being set
</span><br>
<span class="quotelev2">&gt;&gt; Am 24.01.2011 um 11:47 schrieb Kedar Soparkar:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to setup a small cluster of 2 nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both nodes are running Fedora 11 Kernel 2.6.29.4, have the same user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiuser with the same password. Both of them have their env vars set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as follows in /etc/profile itself:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is syntax for which type of shell?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH                                usr/lib/openmpi/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH           usr/lib/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The leading slash is missing in case you want to specify absolute paths. And any set path should be retained and not be replaced:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=/usr/lib/openmpi/bin${PATH:+:$PATH}
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=/usr/lib/openmpi/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Currently, mpirun executes successfully on either node individually.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, when trying to run over the network, I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpiuser_at_c-199 ~]$ mpirun -np 3 --hostfile .mpi_hostfile ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bash: orted: command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid 12639) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What fixes should I try to get the cluster to work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="15424.php">Ashley Pittman: "Re: [OMPI users] Issue Resolved: Re:  bash: orted: ..."</a>
<li><strong>Previous message:</strong> <a href="15422.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15424.php">Ashley Pittman: "Re: [OMPI users] Issue Resolved: Re:  bash: orted: ..."</a>
<li><strong>Reply:</strong> <a href="15424.php">Ashley Pittman: "Re: [OMPI users] Issue Resolved: Re:  bash: orted: ..."</a>
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
