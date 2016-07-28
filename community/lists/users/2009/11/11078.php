<?
$subject_val = "Re: [OMPI users] mpirun example program fail on multiple nodes-	unable to launch specified application on client node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 17:53:05 2009" -->
<!-- isoreceived="20091105225305" -->
<!-- sent="Thu, 5 Nov 2009 17:53:01 -0500" -->
<!-- isosent="20091105225301" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun example program fail on multiple nodes-	unable to launch specified application on client node" -->
<!-- id="B05EA9A9-6886-4148-B267-741164BF1CC4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091105223409.GB20399_at_scram" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun example program fail on multiple nodes-	unable to launch specified application on client node<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 17:53:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11079.php">Terry Frankcombe: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11077.php">Douglas Guptill: "Re: [OMPI users] mpirun example program fail on multiple nodes -	unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="11077.php">Douglas Guptill: "Re: [OMPI users] mpirun example program fail on multiple nodes -	unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11079.php">Terry Frankcombe: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11079.php">Terry Frankcombe: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2009, at 5:34 PM, Douglas Guptill wrote:
<br>
<p><span class="quotelev1">&gt; I am currently using sshfs to mount both OpenMPI and my application on
</span><br>
<span class="quotelev1">&gt; the &quot;other&quot; computers/nodes.  The advantage to this is that I have
</span><br>
<span class="quotelev1">&gt; only one copy of OpenMPI and my application.  There may be a
</span><br>
<span class="quotelev1">&gt; performance penalty, but I haven't seen it yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>For a small number of nodes (where small &lt;=32 or sometimes even &lt;=64),  
<br>
I find that simple NFS works just fine.  If your apps aren't IO  
<br>
intensive, that can greatly simplify installation and deployment of  
<br>
both Open MPI and your MPI applications IMNSHO.
<br>
<p>But -- every app is different.  :-)  YMMV.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11079.php">Terry Frankcombe: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11077.php">Douglas Guptill: "Re: [OMPI users] mpirun example program fail on multiple nodes -	unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="11077.php">Douglas Guptill: "Re: [OMPI users] mpirun example program fail on multiple nodes -	unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11079.php">Terry Frankcombe: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11079.php">Terry Frankcombe: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
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
