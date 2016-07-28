<?
$subject_val = "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 07:04:02 2007" -->
<!-- isoreceived="20071213120402" -->
<!-- sent="Wed, 12 Dec 2007 11:41:00 -0500" -->
<!-- isosent="20071212164100" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="F0F96336-043B-4F06-8825-8259DD57363C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E76BCCF1-A01B-4E45-95F8-BCBD5A57EC8A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 11:41:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4661.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4659.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4648.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4207.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian raised a good point -- your project must already have a portable  
<br>
solution for dlopen() since it's loading your plugin.
<br>
<p>Can you not use that?
<br>
<p><p><p>On Dec 12, 2007, at 8:40 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 11, 2007, at 9:08 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (for a nicely-formatted refresher of the issues, check out <a href="https://svn.open-mpi.org/trac/ompi/wiki/Linkers">https://svn.open-mpi.org/trac/ompi/wiki/Linkers</a>)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the late response...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've finally 'solved' this issue by using RTLD_GLOBAL for loading the
</span><br>
<span class="quotelev2">&gt;&gt; Python extension module that actually calls MPI_Init(). However, I'm
</span><br>
<span class="quotelev2">&gt;&gt; not completelly sure if my hackery is completelly portable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking briefly at the end of the link to the wiki page, you say that
</span><br>
<span class="quotelev2">&gt;&gt; if the explicit linking to libmpi on componets is removed, then
</span><br>
<span class="quotelev2">&gt;&gt; dlopen() has to be explicitelly called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, this would be a mayor headhace for me, because portability
</span><br>
<span class="quotelev2">&gt;&gt; issues. Please note that I've developed mpi4py on a rather old 32  
</span><br>
<span class="quotelev2">&gt;&gt; bits
</span><br>
<span class="quotelev2">&gt;&gt; linux box, but it works in many different plataforms and OS's. I do
</span><br>
<span class="quotelev2">&gt;&gt; really do not have the time of testing and figure out how to
</span><br>
<span class="quotelev2">&gt;&gt; appropriatelly call dlopen() in platforms/OS's that I even do not  
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt; access!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, this is problematic; dlopen is fun on all the various OS's...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: we use the Libtool DL library for this kind of portability; OMPI
</span><br>
<span class="quotelev1">&gt; itself doesn't have all the logic for the different OS loaders.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, perhaps OpenMPI could provide an extension: a function call,
</span><br>
<span class="quotelev2">&gt;&gt; let say 'ompi_load_dso()' or something like that, that can be called
</span><br>
<span class="quotelev2">&gt;&gt; before MPI_Init() for setting-up the monster. What to you think about
</span><br>
<span class="quotelev2">&gt;&gt; this? Would it be hard for you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (after much thinking...) Perhaps a better solution would be an MCA
</span><br>
<span class="quotelev1">&gt; parameter: if the logical &quot;mca_do_dlopen_hackery&quot; (or whatever) MCA
</span><br>
<span class="quotelev1">&gt; parameter is found to be true during the very beginning of MPI_INIT
</span><br>
<span class="quotelev1">&gt; (down in the depths of opal_init(), actually), then we will
</span><br>
<span class="quotelev1">&gt; lt_dlopen[_advise](&quot;&lt;path&gt;/libmpi&quot;).  For completeness, we'll do the
</span><br>
<span class="quotelev1">&gt; corresponding dlclose in opal_finalize().  I need to think about this
</span><br>
<span class="quotelev1">&gt; a bit more and run it by Brian Barrett... he's quite good at finding
</span><br>
<span class="quotelev1">&gt; holes in these kinds of complex scenarios.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should hypothetically allow you to do a simple putenv() before
</span><br>
<span class="quotelev1">&gt; calling MPI_INIT and then the Right magic should occur.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="4661.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4659.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4648.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4207.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
