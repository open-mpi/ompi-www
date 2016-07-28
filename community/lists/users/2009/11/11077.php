<?
$subject_val = "Re: [OMPI users] mpirun example program fail on multiple nodes -	unable to launch specified application on client node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 17:38:03 2009" -->
<!-- isoreceived="20091105223803" -->
<!-- sent="Thu, 5 Nov 2009 18:34:09 -0400" -->
<!-- isosent="20091105223409" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun example program fail on multiple nodes -	unable to launch specified application on client node" -->
<!-- id="20091105223409.GB20399_at_scram" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AF34075.7030004_at_jsums.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun example program fail on multiple nodes -	unable to launch specified application on client node<br>
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 17:34:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11078.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes-	unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11076.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="11075.php">Qing Pang: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11078.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes-	unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11078.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes-	unable to launch specified application on client node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 05, 2009 at 03:15:33PM -0600, Qing Pang wrote:
<br>
<p><span class="quotelev1">&gt; Thank you Jeff! That solves the problem. :-) You are the lifesaver!
</span><br>
<span class="quotelev1">&gt; So does that means I always need to copy my application to all the  
</span><br>
<span class="quotelev1">&gt; nodes? Or should I give the pathname of the my executable in a different  
</span><br>
<span class="quotelev1">&gt; way to avoid this? Do I need a network file system for that?
</span><br>
<p>I am currently using sshfs to mount both OpenMPI and my application on
<br>
the &quot;other&quot; computers/nodes.  The advantage to this is that I have
<br>
only one copy of OpenMPI and my application.  There may be a
<br>
performance penalty, but I haven't seen it yet.
<br>
<p>Douglas.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11078.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes-	unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11076.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="11075.php">Qing Pang: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11078.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes-	unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11078.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes-	unable to launch specified application on client node"</a>
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
