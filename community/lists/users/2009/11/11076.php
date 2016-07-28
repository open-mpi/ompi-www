<?
$subject_val = "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 16:19:45 2009" -->
<!-- isoreceived="20091105211945" -->
<!-- sent="Thu, 5 Nov 2009 16:19:41 -0500" -->
<!-- isosent="20091105211941" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node" -->
<!-- id="43DC8A53-42FD-4C18-81B2-1A09DEDE4852_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 16:19:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11077.php">Douglas Guptill: "Re: [OMPI users] mpirun example program fail on multiple nodes -	unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11075.php">Qing Pang: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="11075.php">Qing Pang: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11077.php">Douglas Guptill: "Re: [OMPI users] mpirun example program fail on multiple nodes -	unable to launch specified application on client node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2009, at 4:15 PM, Qing Pang wrote:
<br>
<p><span class="quotelev1">&gt; Thank you Jeff! That solves the problem. :-) You are the lifesaver!
</span><br>
<span class="quotelev1">&gt; So does that means I always need to copy my application to all the
</span><br>
<span class="quotelev1">&gt; nodes? Or should I give the pathname of the my executable in a  
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev1">&gt; way to avoid this? Do I need a network file system for that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Your executable needs to be available on all nodes, yes, whether you  
<br>
have copied it out there or whether you use a network filesystem.  For  
<br>
a small number of nodes, using a network filesystem is likely much  
<br>
more convenient.
<br>
<p>See <a href="http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem">http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem</a>
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
<li><strong>Next message:</strong> <a href="11077.php">Douglas Guptill: "Re: [OMPI users] mpirun example program fail on multiple nodes -	unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11075.php">Qing Pang: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="11075.php">Qing Pang: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11077.php">Douglas Guptill: "Re: [OMPI users] mpirun example program fail on multiple nodes -	unable to launch specified application on client node"</a>
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
