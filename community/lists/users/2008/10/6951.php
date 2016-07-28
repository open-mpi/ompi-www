<?
$subject_val = "Re: [OMPI users] where is opal_install_dirs?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 11 08:05:46 2008" -->
<!-- isoreceived="20081011120546" -->
<!-- sent="Sat, 11 Oct 2008 08:05:41 -0400" -->
<!-- isosent="20081011120541" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] where is opal_install_dirs?" -->
<!-- id="6ACB49C5-5720-4310-9E16-49D7335300F5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE801BDF7B0_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] where is opal_install_dirs?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-11 08:05:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6952.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="6950.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>In reply to:</strong> <a href="6937.php">SLIM H.A.: "[OMPI users] where is opal_install_dirs?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Was OMPI configured and built with the PGI f90 compilers?  Is there a  
<br>
chance that you have multiple MPI implementations installed, and  
<br>
you're accidentally using the &quot;wrong&quot; mpif90?
<br>
<p>opal_install_dirs is a symbol that should be found in libopen-pal.   
<br>
For lack of a longer explanation, it's simply one of the internal data  
<br>
structures in OMPI.
<br>
<p><p>On Oct 10, 2008, at 12:22 PM, SLIM H.A. wrote:
<br>
<p><span class="quotelev1">&gt; I tried building Global Arrays with OpenMPI 1.2.3 and the portland
</span><br>
<span class="quotelev1">&gt; compilers 7.0.2. It gives  an error message about an undefined symbol
</span><br>
<span class="quotelev1">&gt; &quot;opal_install_dirs&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90 -O -i8  -c -o dgetf2.o dgetf2.f
</span><br>
<span class="quotelev1">&gt; mpif90: symbol lookup error: mpif90: undefined symbol:  
</span><br>
<span class="quotelev1">&gt; opal_install_dirs
</span><br>
<span class="quotelev1">&gt; make[1]: *** [dgetf2.o] Error 127
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any idea what the problem could be? If I use pgf90
</span><br>
<span class="quotelev1">&gt; instead of the mpi wrapper the error does not occur, so something is
</span><br>
<span class="quotelev1">&gt; missing there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Henk
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
<li><strong>Next message:</strong> <a href="6952.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="6950.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>In reply to:</strong> <a href="6937.php">SLIM H.A.: "[OMPI users] where is opal_install_dirs?"</a>
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
