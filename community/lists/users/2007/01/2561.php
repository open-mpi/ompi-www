<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 23:21:50 2007" -->
<!-- isoreceived="20070130042150" -->
<!-- sent="Mon, 29 Jan 2007 20:10:41 -0500" -->
<!-- isosent="20070130011041" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE and OpenMPI integration" -->
<!-- id="45BE9B11.3060606_at_Sun.COM" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="44233CA5B57295409DA4423AECEFFEE701E64DB5_at_mailbox01.cshl.edu" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-29 20:10:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2562.php">Chevchenkovic Chevchenkovic: "[OMPI users] mpirun related"</a>
<li><strong>Previous message:</strong> <a href="2560.php">Jeff Squyres: "Re: [OMPI users] ompi_info segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="2555.php">Heywood, Todd: "[OMPI users] SGE and OpenMPI integration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Todd,
<br>
<p>I personally don't know the answer, but I see that Andreas from the open 
<br>
source grid engine alias (user_at_[hidden]) is addressing 
<br>
your issues. He should be able to address your issues since it's more 
<br>
related to the internals of qmaster.
<br>
<p><a href="http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=18773">http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=18773</a>
<br>
<p>So if anyone else wants to know about what it seems to be related to the 
<br>
file descriptor limit issue in the internals of the SGE/N1GE, feel free 
<br>
to follow the comments over there...
<br>
<p>Heywood, Todd wrote:
<br>
<span class="quotelev1">&gt; I have sent the following experiences to the SGE mailing list, but I 
</span><br>
<span class="quotelev1">&gt; thought I would also try here&#133;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been trying out version 1.2b2 for its integration with SGE. The 
</span><br>
<span class="quotelev1">&gt; simple &#147;hello world&#148; test program works fin by itself, but there are 
</span><br>
<span class="quotelev1">&gt; issues when submitting it to SGE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For small numbers of tasks, for SOME runs, I get errors for each of the 
</span><br>
<span class="quotelev1">&gt; non-master tasks, and they are all one of the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; error: commlib error: got read error (closing 
</span><br>
<span class="quotelev1">&gt; &quot;blade27.bluehelix.cshl.edu/execd/1&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; error: commlib error: can't read general message size header (GMSH) 
</span><br>
<span class="quotelev1">&gt; (closing &quot;blade221
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .bluehelix.cshl.edu/execd/1&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I repeat runs, these errors tend to go away, like the first time a 
</span><br>
<span class="quotelev1">&gt; node runs a job it coughs on it, but then it is OK for subsequent jobs. 
</span><br>
<span class="quotelev1">&gt; I do get the correct output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Things change when I try a large job, say 400 tasks. I get loads of GMSH 
</span><br>
<span class="quotelev1">&gt; errors, but NO output, and SGE&#146;s qstat command aborts://
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [heywood_at_blade1 ompi]$ qsub -pe mpi 400 hello.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your job 8239 (&quot;hello.sh&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [heywood_at_blade1 ompi]$ qstat -t
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; critical error: unrecoverable error - contact systems manager
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aborted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [heywood_at_blade1 ompi]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I then have to qdel the job from another window.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If anyone has seen anything like this, I&#146;d be interested in hearing. 
</span><br>
<span class="quotelev1">&gt; Since the errors are coming from SGE&#146;s communication library, I did 
</span><br>
<span class="quotelev1">&gt; increase the file descriptor limit (ulimit &#150;n 65536), but it made no 
</span><br>
<span class="quotelev1">&gt; difference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Todd Heywood
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
Thanks,
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2562.php">Chevchenkovic Chevchenkovic: "[OMPI users] mpirun related"</a>
<li><strong>Previous message:</strong> <a href="2560.php">Jeff Squyres: "Re: [OMPI users] ompi_info segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="2555.php">Heywood, Todd: "[OMPI users] SGE and OpenMPI integration"</a>
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
