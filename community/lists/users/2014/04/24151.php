<?
$subject_val = "[OMPI users] can't run mpi-jobs on remote host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 04:09:17 2014" -->
<!-- isoreceived="20140411080917" -->
<!-- sent="Fri, 11 Apr 2014 08:09:15 +0000" -->
<!-- isosent="20140411080915" -->
<!-- name="Lubrano Francesco" -->
<!-- email="lubrano.francesco_at_[hidden]" -->
<!-- subject="[OMPI users] can't run mpi-jobs on remote host" -->
<!-- id="f97c8f180dcd4d52bf0d4b89a2c5794d_at_AMSPR03MB614.eurprd03.prod.outlook.com" -->
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
<strong>Subject:</strong> [OMPI users] can't run mpi-jobs on remote host<br>
<strong>From:</strong> Lubrano Francesco (<em>lubrano.francesco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 04:09:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24152.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable	__LDBL_MANT_DIG__"</a>
<li><strong>Previous message:</strong> <a href="24150.php">Saliya Ekanayake: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24155.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>Reply:</strong> <a href="24155.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>Maybe reply:</strong> <a href="24168.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear MPI users,
<br>
<p>I have a problem with open-mpi (version 1.8).
<br>
<p>I'm just beginning to undestand how mpi works and I can't find solution of my problem on FAQ page.
<br>
<p>I have two machines (a local host and a remote host) with linux open-suse (latest version) and open-mpi 1.8
<br>
<p>I can run open-mpi jobs on both machines from theirself (in a &quot;local&quot; way).
<br>
<p>I have not connections problem: ssh from the first to the second works correctly and I can run programs on remote machine.
<br>
<p>If I run a simple non mpi program on the remot host from the local one, it doesnt' work. I think it is a buffer pointer problem (status 1). I didn't change open-mpi settings and PATH is correct. I have just one open-mpi versione on both of them. Open-mpi doesn't show any error: just return to the local machine.
<br>
<p>I can also request to run a false program: it does not change. on the terminal I can read
<br>
<p><p>francesco_at_linux-hldu:~&gt; mpirun -host Frank_at_158.110.39.110 hostname
<br>
<p>Password:
<br>
<p>francesco_at_linux-hldu:~&gt;
<br>
<p><p>If I request debug, the result is:
<br>
<p><p>francesco_at_linux-hldu:~&gt; mpirun -d --host Frank_at_158.110.39.110 hostname
<br>
[linux-hldu.site:02537] sess_dir_finalize: job session dir not empty - leaving
<br>
[linux-hldu.site:02537] procdir: /tmp/openmpi-sessions-francesco_at_linux-hldu_0/33429/0/0
<br>
[linux-hldu.site:02537] jobdir: /tmp/openmpi-sessions-francesco_at_linux-hldu_0/33429/0
<br>
[linux-hldu.site:02537] top: openmpi-sessions-francesco_at_linux-hldu_0
<br>
[linux-hldu.site:02537] tmp: /tmp
<br>
Password:
<br>
[linux-o5sl.site:04273] sess_dir_finalize: job session dir not empty - leaving
<br>
[linux-o5sl.site:04273] procdir: /tmp/openmpi-sessions-Frank_at_linux-o5sl_0/33429/0/1
<br>
[linux-o5sl.site:04273] jobdir: /tmp/openmpi-sessions-Frank_at_linux-o5sl_0/33429/0
<br>
[linux-o5sl.site:04273] top: openmpi-sessions-Frank_at_linux-o5sl_0
<br>
[linux-o5sl.site:04273] tmp: /tmp
<br>
[linux-o5sl.site:04273] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 1
<br>
[linux-hldu.site:02537] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 1
<br>
<p><p>Do you understand where is the problem? How can I get more information?
<br>
<p>Thank you for your cooperation
<br>
<p><p>regards
<br>
<p><p>Francesco
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24151/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24152.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable	__LDBL_MANT_DIG__"</a>
<li><strong>Previous message:</strong> <a href="24150.php">Saliya Ekanayake: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24155.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>Reply:</strong> <a href="24155.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>Maybe reply:</strong> <a href="24168.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
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
