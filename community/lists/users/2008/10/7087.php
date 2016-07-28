<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 16:27:22 2008" -->
<!-- isoreceived="20081023202722" -->
<!-- sent="Thu, 23 Oct 2008 16:27:15 -0400" -->
<!-- isosent="20081023202715" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="BB11D711-9444-4818-9842-0BB1B3A4A3F7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="60EE8944-A658-4AA4-BD9B-EFC38DA70A2B_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-10-23 16:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7088.php">Wen Hao Wang: "Re: [OMPI users] test OpenMPI without Internet access"</a>
<li><strong>Previous message:</strong> <a href="7086.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>In reply to:</strong> <a href="7074.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7091.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I suggested the OMPI_&lt;function&gt;() method for two reasons:
<br>
<p>1. It's stable and would divorce itself from any underlying env  
<br>
variables that may change over time (although starting with v1.3, some  
<br>
of the ones Ralph mentioned shouldn't be changing)
<br>
<p>2. Providing OMPI_* functions is a pre-standardization mechanism to  
<br>
see if users really want/can use them.  If we get feedback that they  
<br>
are useful, that's a good data point to the Forum to actually have an  
<br>
official MPI_* version of the function that will be standardized.
<br>
<p>And I wasn't clear before -- I was assuming that this particular  
<br>
OMPI_&lt;function&gt; would allow itself to be called before MPI_INIT().   
<br>
Otherwise, that would somewhat defeat the point of Brian's request.  :-)
<br>
<p><p>On Oct 22, 2008, at 10:02 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; We could - though it isn't clear that it really accomplishes anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe some of the suggestions on this thread have forgotten about
</span><br>
<span class="quotelev1">&gt; singletons. If the code calls MPI_Init, we treat that as a singleton
</span><br>
<span class="quotelev1">&gt; and immediately set all the MPI environmental params - which means the
</span><br>
<span class="quotelev1">&gt; proc's environment now looks exactly as if it had been launched by
</span><br>
<span class="quotelev1">&gt; mpirun. That is by design for proper singleton operation. So doing
</span><br>
<span class="quotelev1">&gt; anything that starts with MPI_Init isn't going to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I think Brian is trying to do is detect that his code was not
</span><br>
<span class="quotelev1">&gt; launched by mpirun -prior- to calling MPI_Init so he can decide if he
</span><br>
<span class="quotelev1">&gt; wants to do that at all. Checking for the enviro params I suggested is
</span><br>
<span class="quotelev1">&gt; a good way to do it - I'm not sure that adding another one really
</span><br>
<span class="quotelev1">&gt; helps. The key issue is having something he can rely on, and I think
</span><br>
<span class="quotelev1">&gt; the ones I suggested are probably his best bet for OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What would be nice is if you MPI Forum types could agree on an MPI-
</span><br>
<span class="quotelev1">&gt; standard way of doing this so Brian wouldn't have to check a dozen
</span><br>
<span class="quotelev1">&gt; different variations... :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 22, 2008, at 7:21 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wonder if it would be useful to have an OMPI-specific extension
</span><br>
<span class="quotelev2">&gt; &gt; for this kind of functionality, perhaps
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_Was_launched_by_mpirun() (or something with a better name,
</span><br>
<span class="quotelev2">&gt; &gt; etc.)...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This would be a pretty easy function for us to provide (right
</span><br>
<span class="quotelev2">&gt; &gt; Ralph?).  My question is -- would this (and perhaps other similar
</span><br>
<span class="quotelev2">&gt; &gt; extensions) be useful to the community at large?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 21, 2008, at 5:46 PM, Adams, Brian M wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm not sure I understand the problem. The ale3d program from
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; LLNL operates exactly as you describe and it can be built
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with mpich, lam, or openmpi.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Doug,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm not sure what reply would be most helpful, so here's an  
</span><br>
<span class="quotelev1">&gt; attempt.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It sounds like we're on the same page with regard to the desired
</span><br>
<span class="quotelev3">&gt; &gt;&gt; behavior.  Historically, we've been able to detect serial vs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; parallel launch of the binary foo, with a whole host of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; implementations, including those you mention, as well as some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; vendor-specific implementations (possibly including DEC/OSF, SGI,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sun, and AIX/poe, though I don't know all the details).  We
</span><br>
<span class="quotelev3">&gt; &gt;&gt; typically distinguish serial from parallel executions on the basis
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of environment variables set only in the MPI runtime environment.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I was just trying to ascertain what variable would be best to test
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for in an OpenMPI environment, and I think Ralph helped with that.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If the ale3d code takes a different approach, I'd love to hear
</span><br>
<span class="quotelev3">&gt; &gt;&gt; about it, off-list if necessary.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7088.php">Wen Hao Wang: "Re: [OMPI users] test OpenMPI without Internet access"</a>
<li><strong>Previous message:</strong> <a href="7086.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>In reply to:</strong> <a href="7074.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7091.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
