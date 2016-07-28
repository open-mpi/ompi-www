<?
$subject_val = "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 20:56:20 2009" -->
<!-- isoreceived="20091106015620" -->
<!-- sent="Fri, 06 Nov 2009 12:56:09 +1100" -->
<!-- isosent="20091106015609" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node" -->
<!-- id="1257472569.5840.86.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="B05EA9A9-6886-4148-B267-741164BF1CC4_at_cisco.com" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 20:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11080.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?"</a>
<li><strong>Previous message:</strong> <a href="11078.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes-	unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="11078.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes-	unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11084.php">Josh Hursey: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11084.php">Josh Hursey: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For small ad hoc COWs I'd vote for sshfs too.  It may well be as slow as
<br>
a dog, but it actually has some security, unlike NFS, and is a doddle to
<br>
make work with no superuser access on the server, unlike NFS.
<br>
<p><p>On Thu, 2009-11-05 at 17:53 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 5, 2009, at 5:34 PM, Douglas Guptill wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am currently using sshfs to mount both OpenMPI and my application on
</span><br>
<span class="quotelev2">&gt; &gt; the &quot;other&quot; computers/nodes.  The advantage to this is that I have
</span><br>
<span class="quotelev2">&gt; &gt; only one copy of OpenMPI and my application.  There may be a
</span><br>
<span class="quotelev2">&gt; &gt; performance penalty, but I haven't seen it yet.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For a small number of nodes (where small &lt;=32 or sometimes even &lt;=64),  
</span><br>
<span class="quotelev1">&gt; I find that simple NFS works just fine.  If your apps aren't IO  
</span><br>
<span class="quotelev1">&gt; intensive, that can greatly simplify installation and deployment of  
</span><br>
<span class="quotelev1">&gt; both Open MPI and your MPI applications IMNSHO.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But -- every app is different.  :-)  YMMV.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11080.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?"</a>
<li><strong>Previous message:</strong> <a href="11078.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes-	unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="11078.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes-	unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11084.php">Josh Hursey: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11084.php">Josh Hursey: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
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
