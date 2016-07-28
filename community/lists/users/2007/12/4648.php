<?
$subject_val = "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 08:41:26 2007" -->
<!-- isoreceived="20071212134126" -->
<!-- sent="Wed, 12 Dec 2007 08:40:56 -0500" -->
<!-- isosent="20071212134056" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="E76BCCF1-A01B-4E45-95F8-BCBD5A57EC8A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40712110608i7cde9c9fy7d9de09ae864c53c_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-12-12 08:40:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4649.php">Warner Yuen: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4647.php">Elena Zhebel: "[OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>In reply to:</strong> <a href="4635.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4655.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4655.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4660.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 11, 2007, at 9:08 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; (for a nicely-formatted refresher of the issues, check out <a href="https://svn.open-mpi.org/trac/ompi/wiki/Linkers">https://svn.open-mpi.org/trac/ompi/wiki/Linkers</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the late response...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've finally 'solved' this issue by using RTLD_GLOBAL for loading the
</span><br>
<span class="quotelev1">&gt; Python extension module that actually calls MPI_Init(). However, I'm
</span><br>
<span class="quotelev1">&gt; not completelly sure if my hackery is completelly portable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking briefly at the end of the link to the wiki page, you say that
</span><br>
<span class="quotelev1">&gt; if the explicit linking to libmpi on componets is removed, then
</span><br>
<span class="quotelev1">&gt; dlopen() has to be explicitelly called.
</span><br>
<p>Correct.
<br>
<p><span class="quotelev1">&gt; Well, this would be a mayor headhace for me, because portability
</span><br>
<span class="quotelev1">&gt; issues. Please note that I've developed mpi4py on a rather old 32 bits
</span><br>
<span class="quotelev1">&gt; linux box, but it works in many different plataforms and OS's. I do
</span><br>
<span class="quotelev1">&gt; really do not have the time of testing and figure out how to
</span><br>
<span class="quotelev1">&gt; appropriatelly call dlopen() in platforms/OS's that I even do not have
</span><br>
<span class="quotelev1">&gt; access!!
</span><br>
<p>Yes, this is problematic; dlopen is fun on all the various OS's...
<br>
<p>FWIW: we use the Libtool DL library for this kind of portability; OMPI  
<br>
itself doesn't have all the logic for the different OS loaders.
<br>
<p><span class="quotelev1">&gt; Anyway, perhaps OpenMPI could provide an extension: a function call,
</span><br>
<span class="quotelev1">&gt; let say 'ompi_load_dso()' or something like that, that can be called
</span><br>
<span class="quotelev1">&gt; before MPI_Init() for setting-up the monster. What to you think about
</span><br>
<span class="quotelev1">&gt; this? Would it be hard for you?
</span><br>
<p><p>(after much thinking...) Perhaps a better solution would be an MCA  
<br>
parameter: if the logical &quot;mca_do_dlopen_hackery&quot; (or whatever) MCA  
<br>
parameter is found to be true during the very beginning of MPI_INIT  
<br>
(down in the depths of opal_init(), actually), then we will  
<br>
lt_dlopen[_advise](&quot;&lt;path&gt;/libmpi&quot;).  For completeness, we'll do the  
<br>
corresponding dlclose in opal_finalize().  I need to think about this  
<br>
a bit more and run it by Brian Barrett... he's quite good at finding  
<br>
holes in these kinds of complex scenarios.  :-)
<br>
<p>This should hypothetically allow you to do a simple putenv() before  
<br>
calling MPI_INIT and then the Right magic should occur.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4649.php">Warner Yuen: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4647.php">Elena Zhebel: "[OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>In reply to:</strong> <a href="4635.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4655.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4655.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4660.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
