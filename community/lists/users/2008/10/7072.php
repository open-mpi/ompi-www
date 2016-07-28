<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 09:48:41 2008" -->
<!-- isoreceived="20081022134841" -->
<!-- sent="Wed, 22 Oct 2008 08:21:19 -0500" -->
<!-- isosent="20081022132119" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="ECCC4B8F-48D9-49F0-B7F3-3F83D498AC82_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A0801CEC7AFED846978515099D145DA512837379C6_at_ES01SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 09:21:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7073.php">Gustavo Seabra: "[OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7071.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7068.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7074.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7074.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wonder if it would be useful to have an OMPI-specific extension for  
<br>
this kind of functionality, perhaps OMPI_Was_launched_by_mpirun() (or  
<br>
something with a better name, etc.)...?
<br>
<p>This would be a pretty easy function for us to provide (right  
<br>
Ralph?).  My question is -- would this (and perhaps other similar  
<br>
extensions) be useful to the community at large?
<br>
<p><p><p>On Oct 21, 2008, at 5:46 PM, Adams, Brian M wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I'm not sure I understand the problem. The ale3d program from
</span><br>
<span class="quotelev2">&gt;&gt; LLNL operates exactly as you describe and it can be built
</span><br>
<span class="quotelev2">&gt;&gt; with mpich, lam, or openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Doug,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what reply would be most helpful, so here's an attempt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It sounds like we're on the same page with regard to the desired  
</span><br>
<span class="quotelev1">&gt; behavior.  Historically, we've been able to detect serial vs.  
</span><br>
<span class="quotelev1">&gt; parallel launch of the binary foo, with a whole host of  
</span><br>
<span class="quotelev1">&gt; implementations, including those you mention, as well as some vendor- 
</span><br>
<span class="quotelev1">&gt; specific implementations (possibly including DEC/OSF, SGI, Sun, and  
</span><br>
<span class="quotelev1">&gt; AIX/poe, though I don't know all the details).  We typically  
</span><br>
<span class="quotelev1">&gt; distinguish serial from parallel executions on the basis of  
</span><br>
<span class="quotelev1">&gt; environment variables set only in the MPI runtime environment.  I  
</span><br>
<span class="quotelev1">&gt; was just trying to ascertain what variable would be best to test for  
</span><br>
<span class="quotelev1">&gt; in an OpenMPI environment, and I think Ralph helped with that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the ale3d code takes a different approach, I'd love to hear about  
</span><br>
<span class="quotelev1">&gt; it, off-list if necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7073.php">Gustavo Seabra: "[OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7071.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7068.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7074.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7074.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
