<?
$subject_val = "Re: [OMPI users] Ssh problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 11:10:25 2009" -->
<!-- isoreceived="20090217161025" -->
<!-- sent="Tue, 17 Feb 2009 17:10:20 +0100" -->
<!-- isosent="20090217161020" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ssh problem" -->
<!-- id="3a37617f0902170810y225dee9qaeae9c34e5c48b7a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0902162320t3b6116enf20964feef60024e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Ssh problem<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 11:10:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8078.php">Daniel De Marco: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="8076.php">Tim Mattox: "[OMPI users] Open MPI v1.2.9 released"</a>
<li><strong>In reply to:</strong> <a href="8075.php">jody: "Re: [OMPI users] Ssh problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8081.php">Jeff Squyres: "Re: [OMPI users] Ssh problem"</a>
<li><strong>Reply:</strong> <a href="8081.php">Jeff Squyres: "Re: [OMPI users] Ssh problem"</a>
<li><strong>Reply:</strong> <a href="8085.php">Marco: "Re: [OMPI users] Ssh problem"</a>
<li><strong>Reply:</strong> <a href="8090.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Ssh problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ssh works well. But the problem is still here..
<br>
<p>2009/2/17 jody &lt;jody.xha_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; I got this ssh message when my workstation wasn't allowed access because of the
</span><br>
<span class="quotelev1">&gt; settings in the files /etc/hosts.allow and /etc/hosts.deny on your ssh server.
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 16, 2009 at 10:36 PM, Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt; &lt;g.fatigati_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev2">&gt;&gt; i'm trying to use OpenMPI 1.3 over my laptop but i have a problem with
</span><br>
<span class="quotelev2">&gt;&gt; ssh. When i launch an MPI  program with mpirun, i retrieve the follow
</span><br>
<span class="quotelev2">&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ssh: connect to host .... port 22: Connection refused.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 7008) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev2">&gt;&gt; shared libraries on the remote node. You may set your LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; to have the location of the shared libraries on the remote nodes and
</span><br>
<span class="quotelev2">&gt;&gt; this will automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have setted  LD_LIBRARY_PATH, but still doesn't work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you help me? Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parallel programmer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8078.php">Daniel De Marco: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="8076.php">Tim Mattox: "[OMPI users] Open MPI v1.2.9 released"</a>
<li><strong>In reply to:</strong> <a href="8075.php">jody: "Re: [OMPI users] Ssh problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8081.php">Jeff Squyres: "Re: [OMPI users] Ssh problem"</a>
<li><strong>Reply:</strong> <a href="8081.php">Jeff Squyres: "Re: [OMPI users] Ssh problem"</a>
<li><strong>Reply:</strong> <a href="8085.php">Marco: "Re: [OMPI users] Ssh problem"</a>
<li><strong>Reply:</strong> <a href="8090.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Ssh problem"</a>
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
