<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 12:04:04 2008" -->
<!-- isoreceived="20080922160404" -->
<!-- sent="Mon, 22 Sep 2008 10:03:59 -0600" -->
<!-- isosent="20080922160359" -->
<!-- name="Brian Harker" -->
<!-- email="brian.harker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="48535380809220903h55f1b9bal74e204008137271f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48D7BC76.5080700_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure and Build ok, but mpi module not recognized?<br>
<strong>From:</strong> Brian Harker (<em>brian.harker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 12:03:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6661.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Previous message:</strong> <a href="6659.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6659.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6663.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6663.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus-
<br>
<p>Thanks for the input.  I have been using full path names to both the
<br>
wrapper compilers and mpiexec from the first day I had two MPI
<br>
implementations on my machine, depending on if I want to use MPICH or
<br>
openMPI, but still the problem remains.  ARGGGGGG!
<br>
<p>On Mon, Sep 22, 2008 at 9:40 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello Brian and list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My confusing experiences with multiple MPI implementations
</span><br>
<span class="quotelev1">&gt; were fixed the day I decided to use full path names to the MPI compiler
</span><br>
<span class="quotelev1">&gt; wrappers (mpicc, mpif77, etc) at compile time,
</span><br>
<span class="quotelev1">&gt; and to the MPI job launcher (mpirun, mpiexec, and so on) at run time,
</span><br>
<span class="quotelev1">&gt; and to do this in a consistent fashion (using the tools from the same
</span><br>
<span class="quotelev1">&gt; install to compile and to run the programs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most Linux distributions come with built in MPI implementations (often times
</span><br>
<span class="quotelev1">&gt; more than one),
</span><br>
<span class="quotelev1">&gt; and so do commercial compilers and other tools.
</span><br>
<span class="quotelev1">&gt; You end up with a mess of different MPI versions on your &quot;native&quot; PATH,
</span><br>
<span class="quotelev1">&gt; as well as variety of bin, lib, and include directories containing different
</span><br>
<span class="quotelev1">&gt; MPI stuff.
</span><br>
<span class="quotelev1">&gt; The easy way around is to use full path names, particularly if you install
</span><br>
<span class="quotelev1">&gt; yet another MPI implementation
</span><br>
<span class="quotelev1">&gt; from scratch.
</span><br>
<span class="quotelev1">&gt; Another way is to fix your PATH on your initialization files (.cshrc, etc)
</span><br>
<span class="quotelev1">&gt; to point to your preferred implementation (put the appropriate bin directory
</span><br>
<span class="quotelev1">&gt; ahead of everything else).
</span><br>
<span class="quotelev1">&gt; Yet another is to install the &quot;environment modules&quot; package on your system
</span><br>
<span class="quotelev1">&gt; and use it consistently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My two cents.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Harker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I built and installed both MPICH2 and openMPI from source, so no
</span><br>
<span class="quotelev2">&gt;&gt; distribution packages or anything.  MPICH2 has the modules located in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/include, which I assume would be found (since its in my
</span><br>
<span class="quotelev2">&gt;&gt; path), were it not for specifying -I$OPENMPI_HOME/lib at compile time,
</span><br>
<span class="quotelev2">&gt;&gt; right?  I can't imagine that if you tell it where to look for the
</span><br>
<span class="quotelev2">&gt;&gt; correct modules, it would search through your path first before going
</span><br>
<span class="quotelev2">&gt;&gt; to where you tell it to go.  Or am I too optimistic?  Thanks again for
</span><br>
<span class="quotelev2">&gt;&gt; the input!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Sep 22, 2008 at 8:58 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 22, 2008, at 10:10 AM, Brian Harker wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for the reply...crap, $HOME/openmpi/lib does contains all the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; various lilbmpi* files as well as mpi.mod,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That should be correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but still get the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error at compile-time.  Yes, I made sure to specifically build openMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with ifort 10.1.012, and did run the --showme command right after
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installation to make sure the wrapper compiler was using ifort as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; well.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Before posting to this mailing list, I did uninstall and re-install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openMPI several times to make sure I had a clean install.  Still no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; luck.  :(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok.  Have you checked around your machine to ensure that there is no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.mod that the compiler is finding first?  E.g., in your MPICH2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation?  Or is Open MPI installed by your distro, perchance?  You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might want to try a &quot;rpm -qa | grep openmpi&quot; (or whatever your distro's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; equivalent is to check already-installed packages).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Cheers,
Brian
brian.harker_at_[hidden]
&quot;In science, there is only physics; all the rest is stamp-collecting.&quot;
 -Ernest Rutherford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6661.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Previous message:</strong> <a href="6659.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6659.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6663.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6663.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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
