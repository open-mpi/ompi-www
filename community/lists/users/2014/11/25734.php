<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 11:22:21 2014" -->
<!-- isoreceived="20141110162221" -->
<!-- sent="Mon, 10 Nov 2014 16:22:19 +0000" -->
<!-- isosent="20141110162219" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF" -->
<!-- id="60AA31B5-BAC2-48CA-8DC5-F61CEE01A60D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87r3xbnq30.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-10 11:22:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25735.php">Emmanuel Thomé: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25733.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25726.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25745.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25745.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 10, 2014, at 8:27 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/d7eaca83fac0d9783d40cac17e71c2b090437a8c">https://github.com/open-mpi/ompi/commit/d7eaca83fac0d9783d40cac17e71c2b090437a8c</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have time to follow this properly, but am I reading right that
</span><br>
<span class="quotelev1">&gt; that says mpi_sizeof will now _not_ work with gcc &lt; 4.9, i.e. the system
</span><br>
<span class="quotelev1">&gt; compiler of the vast majority of HPC GNU/Linux systems, whereas it did
</span><br>
<span class="quotelev1">&gt; before (at least in simple cases)?
</span><br>
<p>You raise a very good point, which raises another unfortunately good related point.
<br>
<p>1. No, the goal is to enable MPI_SIZEOF in *more* cases, and still preserve all the old cases.  Your mail made me go back and test all the old cases this morning, and I discovered a bug which I need to fix before 1.8.4 is released (details unimportant, unless someone wants to gory details).
<br>
<p>2. I did not think about the implications of the v1.7/1.8 series ABI guarantees to the MPI_SIZEOF fixes we applied.  Unfortunately, it looks like we effectively changed the gfortran&gt;=4.9 &quot;use mpi&quot; ABI in 1.8.2 without fully realizing it.  Essentially:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;use mpi&quot; ABI in:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.8  1.8.1  1.8.2  1.8.3  1.8.4(upcoming)
<br>
gfortran &lt;  4.9   A     A      A      A      A(*)
<br>
gfortran &gt;= 4.9   A     A      B      B      ?
<br>
<p>(*) = Buggy; needs to be fixed before release
<br>
<p>Meaning: gfortran&lt;4.9 has had ABI &quot;A&quot; throughout 1.8.  But we changed it to &quot;B&quot; for gfortran&gt;=4.9 in 1.8.2.
<br>
<p>So the question is: what's the Right Thing to do for 1.8.4?  Assume we'll have something like a &quot;--enable|disable-new-fortran-goodness-for-gfortran-ge-4.9&quot; configure switch (where the --enable form will be ABI B, the --disable form will be ABI A).  The question is: what should be the default?
<br>
<p>1. Have ABI A as the default
<br>
2. Have ABI B as the default
<br>
<p>I'm leaning towards #1 because it keeps ABI with a longer series of releases (1.7.x and 1.8-1.8.1).
<br>
<p>Opinions?
<br>
<p><span class="quotelev2">&gt;&gt; IIRC, it only affected certain configure situations (e.g., only
</span><br>
<span class="quotelev2">&gt;&gt; certain fortran compilers).  I'm failing to remember the exact
</span><br>
<span class="quotelev2">&gt;&gt; scenario offhand that was problematic right now, but it led to the
</span><br>
<span class="quotelev2">&gt;&gt; larger question of: &quot;hey, wait, don't we have to support MPI_SIZEOF in
</span><br>
<span class="quotelev2">&gt;&gt; mpif.h, too?&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd have said the answer was a clear &quot;no&quot;, without knowing what the
</span><br>
<span class="quotelev1">&gt; standard says about mpif.h,
</span><br>
<p>The answer actually turned out to be &quot;yes&quot;.  :-\
<br>
<p>Specifically: the spec just says it's available in the Fortran interfaces.  It doesn't say &quot;the Fortran interfaces, except MPI_SIZEOF.&quot;
<br>
<p>Indeed, the spec doesn't prohibit explicit interfaces in mpif.h (it never has).  It's just that most (all?) MPI implementations have not provided explicit interfaces in mpif.h.
<br>
<p>But for MPI_SIZEOF to work, explicit interfaces are *required*.
<br>
<p>In OMPI, this has translated to: if your compiler supports enough features, MPI_SIZEOF will now have explicit interfaces in mpif.h (modulo ABI issues with the v1.8 series).
<br>
<p>I predict that the Forum will deprecate MPI_SIZEOF in MPI-4.  But MPI_SIZEOF unfortunately will still have to live in OMPI for quite a long time.  :-(
<br>
<p><span class="quotelev1">&gt; but I'd expect that to be deprecated anyhow.
</span><br>
<span class="quotelev1">&gt; (The man pages generally don't mention USE, only INCLUDE, which seems
</span><br>
<span class="quotelev1">&gt; wrong.)
</span><br>
<p>Mmm.  Yes, true.
<br>
<p>Any chance I could convince you to submit a patch?  :-)
<br>
<p><span class="quotelev2">&gt;&gt; According to discussion in the Forum Fortran working group, it is
</span><br>
<span class="quotelev2">&gt;&gt; required that MPI_SIZEOF must be supported in *all* MPI Fortran
</span><br>
<span class="quotelev2">&gt;&gt; interfaces, including mpif.h.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well that's generally impossible if it's meant to include Fortran77
</span><br>
<span class="quotelev1">&gt; compilers (which I must say doesn't seem worth it at this stage).
</span><br>
<p>Fortran 77 compilers haven't existed for *many, many years*.  And I'll say it again: MPI has *never* supported Fortran 77 (it's a common misconception that it ever did).
<br>
<p>The MPI spec is targeting the current version of Fortran (which has supported what is needed for MPI_SIZEOF for quite some time.. since F2003? F95? I'm not sure offhand).
<br>
<p><span class="quotelev1">&gt; If it's any consolation, it doesn't work in the other MPIs here
</span><br>
<span class="quotelev1">&gt; (mp(va)pich and intel), as I'd expect.
</span><br>
<p>Right.  I don't know what MPICH's plans are in this area, but the Forum's conclusions (very recently, I might add) were quite clear.
<br>
<p><span class="quotelev2">&gt;&gt; Keep in mind that MPI does not prohibit having prototypes in mpif.h --
</span><br>
<span class="quotelev2">&gt;&gt; it's just that most (all?) MPI implementations don't tend to provide
</span><br>
<span class="quotelev2">&gt;&gt; them.  However, in the case of MPI_SIZEOF, it is *required* that
</span><br>
<span class="quotelev2">&gt;&gt; prototypes are available because the implementation needs the type
</span><br>
<span class="quotelev2">&gt;&gt; information to return the size properly (in mpif.h., mpi module, and
</span><br>
<span class="quotelev2">&gt;&gt; mpi_f08 module).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fortran has interfaces, not prototypes!
</span><br>
<p>Yes, sorry -- I'm a C programmer and I dabble in Fortran (read: I'm the guy who keeps the Fortran stuff maintained in OMPI), so I sometimes use the wrong terminology.  Mea culpa!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25735.php">Emmanuel Thomé: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25733.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25726.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25745.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25745.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
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
