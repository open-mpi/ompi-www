<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 10:02:32 2008" -->
<!-- isoreceived="20081022140232" -->
<!-- sent="Wed, 22 Oct 2008 08:02:24 -0600" -->
<!-- isosent="20081022140224" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="60EE8944-A658-4AA4-BD9B-EFC38DA70A2B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ECCC4B8F-48D9-49F0-B7F3-3F83D498AC82_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI runtime-specific environment variable?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 10:02:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
<li><strong>Previous message:</strong> <a href="7073.php">Gustavo Seabra: "[OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7087.php">Jeff Squyres: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7087.php">Jeff Squyres: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We could - though it isn't clear that it really accomplishes anything.
<br>
<p>I believe some of the suggestions on this thread have forgotten about  
<br>
singletons. If the code calls MPI_Init, we treat that as a singleton  
<br>
and immediately set all the MPI environmental params - which means the  
<br>
proc's environment now looks exactly as if it had been launched by  
<br>
mpirun. That is by design for proper singleton operation. So doing  
<br>
anything that starts with MPI_Init isn't going to work.
<br>
<p>What I think Brian is trying to do is detect that his code was not  
<br>
launched by mpirun -prior- to calling MPI_Init so he can decide if he  
<br>
wants to do that at all. Checking for the enviro params I suggested is  
<br>
a good way to do it - I'm not sure that adding another one really  
<br>
helps. The key issue is having something he can rely on, and I think  
<br>
the ones I suggested are probably his best bet for OMPI.
<br>
<p>What would be nice is if you MPI Forum types could agree on an MPI- 
<br>
standard way of doing this so Brian wouldn't have to check a dozen  
<br>
different variations... :-)
<br>
<p>Ralph
<br>
<p>On Oct 22, 2008, at 7:21 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I wonder if it would be useful to have an OMPI-specific extension  
</span><br>
<span class="quotelev1">&gt; for this kind of functionality, perhaps  
</span><br>
<span class="quotelev1">&gt; OMPI_Was_launched_by_mpirun() (or something with a better name,  
</span><br>
<span class="quotelev1">&gt; etc.)...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would be a pretty easy function for us to provide (right  
</span><br>
<span class="quotelev1">&gt; Ralph?).  My question is -- would this (and perhaps other similar  
</span><br>
<span class="quotelev1">&gt; extensions) be useful to the community at large?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 21, 2008, at 5:46 PM, Adams, Brian M wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure I understand the problem. The ale3d program from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LLNL operates exactly as you describe and it can be built
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with mpich, lam, or openmpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Doug,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure what reply would be most helpful, so here's an attempt.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It sounds like we're on the same page with regard to the desired  
</span><br>
<span class="quotelev2">&gt;&gt; behavior.  Historically, we've been able to detect serial vs.  
</span><br>
<span class="quotelev2">&gt;&gt; parallel launch of the binary foo, with a whole host of  
</span><br>
<span class="quotelev2">&gt;&gt; implementations, including those you mention, as well as some  
</span><br>
<span class="quotelev2">&gt;&gt; vendor-specific implementations (possibly including DEC/OSF, SGI,  
</span><br>
<span class="quotelev2">&gt;&gt; Sun, and AIX/poe, though I don't know all the details).  We  
</span><br>
<span class="quotelev2">&gt;&gt; typically distinguish serial from parallel executions on the basis  
</span><br>
<span class="quotelev2">&gt;&gt; of environment variables set only in the MPI runtime environment.   
</span><br>
<span class="quotelev2">&gt;&gt; I was just trying to ascertain what variable would be best to test  
</span><br>
<span class="quotelev2">&gt;&gt; for in an OpenMPI environment, and I think Ralph helped with that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the ale3d code takes a different approach, I'd love to hear  
</span><br>
<span class="quotelev2">&gt;&gt; about it, off-list if necessary.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
<li><strong>Previous message:</strong> <a href="7073.php">Gustavo Seabra: "[OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7087.php">Jeff Squyres: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7087.php">Jeff Squyres: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
