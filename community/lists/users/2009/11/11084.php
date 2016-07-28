<?
$subject_val = "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 08:09:41 2009" -->
<!-- isoreceived="20091106130941" -->
<!-- sent="Fri, 6 Nov 2009 06:09:36 -0700" -->
<!-- isosent="20091106130936" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node" -->
<!-- id="E8BC506E-B25A-4826-A6A8-438655CB42DB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1257472569.5840.86.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 08:09:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11085.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Previous message:</strong> <a href="11083.php">Jeff Squyres: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>In reply to:</strong> <a href="11079.php">Terry Frankcombe: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11094.php">qing.pang: "Re: [OMPI users] mpirun example program fail on multiple nodes- unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11094.php">qing.pang: "Re: [OMPI users] mpirun example program fail on multiple nodes- unable to launch specified application on client node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As an alternative technique for distributing the binary, you could ask  
<br>
Open MPI's runtime to do it for you (made available in the v1.3  
<br>
series). You still need to make sure that the same version of Open is  
<br>
installed on all nodes, but if you pass the --preload-binary option to  
<br>
mpirun the runtime environment will distribute the binary across the  
<br>
machine (staging it to a temporary directory) before launching it.
<br>
<p>You can do the same with any arbitrary set of files or directories  
<br>
(comma separated) using the --preload-files option as well.
<br>
<p>If you type 'mpirun --help' the options that you are looking for are:
<br>
--------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--preload-files &lt;arg0&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--preload-files-dest-dir &lt;arg0&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with --preload-files. By default the  
<br>
absolute and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;relative paths provided by --preload-files are
<br>
-s|--preload-binary      Preload the binary on the remote machine before
<br>
<p>--------------------
<br>
<p>-- Josh
<br>
<p>On Nov 5, 2009, at 6:56 PM, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt; For small ad hoc COWs I'd vote for sshfs too.  It may well be as  
</span><br>
<span class="quotelev1">&gt; slow as
</span><br>
<span class="quotelev1">&gt; a dog, but it actually has some security, unlike NFS, and is a  
</span><br>
<span class="quotelev1">&gt; doddle to
</span><br>
<span class="quotelev1">&gt; make work with no superuser access on the server, unlike NFS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 2009-11-05 at 17:53 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 5, 2009, at 5:34 PM, Douglas Guptill wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am currently using sshfs to mount both OpenMPI and my  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;other&quot; computers/nodes.  The advantage to this is that I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only one copy of OpenMPI and my application.  There may be a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance penalty, but I haven't seen it yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For a small number of nodes (where small &lt;=32 or sometimes even  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;=64),
</span><br>
<span class="quotelev2">&gt;&gt; I find that simple NFS works just fine.  If your apps aren't IO
</span><br>
<span class="quotelev2">&gt;&gt; intensive, that can greatly simplify installation and deployment of
</span><br>
<span class="quotelev2">&gt;&gt; both Open MPI and your MPI applications IMNSHO.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But -- every app is different.  :-)  YMMV.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="11085.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Previous message:</strong> <a href="11083.php">Jeff Squyres: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>In reply to:</strong> <a href="11079.php">Terry Frankcombe: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11094.php">qing.pang: "Re: [OMPI users] mpirun example program fail on multiple nodes- unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11094.php">qing.pang: "Re: [OMPI users] mpirun example program fail on multiple nodes- unable to launch specified application on client node"</a>
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
