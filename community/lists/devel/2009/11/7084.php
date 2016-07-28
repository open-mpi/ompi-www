<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (v1.5) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 21:51:44 2009" -->
<!-- isoreceived="20091104025144" -->
<!-- sent="Tue, 3 Nov 2009 21:51:35 -0500" -->
<!-- isosent="20091104025135" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (v1.5) ===" -->
<!-- id="9B103801-A3C3-4D59-A254-AFBDAB8F38B2_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200911040235.nA42ZHvv012124_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE (v1.5) ===<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-03 21:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7085.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.5) ==="</a>
<li><strong>Previous message:</strong> <a href="7083.php">Jeff Squyres: "Re: [OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7085.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.5) ==="</a>
<li><strong>Reply:</strong> <a href="7085.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.5) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mea culpa. Should be fixed now. If you can please restart the testing  
<br>
process.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 3, 2009, at 21:35 , MPI Team wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (v1.5):
</span><br>
<span class="quotelev1">&gt;       ./configure --enable-dist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Tue Nov  3 21:30:07 EST 2009
</span><br>
<span class="quotelev1">&gt; End time:   Tue Nov  3 21:35:17 EST 2009
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; checking for a BSD-compatible install... /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; checking whether build environment is sane... yes
</span><br>
<span class="quotelev1">&gt; checking for a thread-safe mkdir -p... /bin/mkdir -p
</span><br>
<span class="quotelev1">&gt; checking for gawk... gawk
</span><br>
<span class="quotelev1">&gt; checking whether make sets $(MAKE)... yes
</span><br>
<span class="quotelev1">&gt; checking how to create a ustar tar archive... gnutar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; == Configuring Open MPI
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Checking versions
</span><br>
<span class="quotelev1">&gt; checking Open MPI version... 1.5a1r22187
</span><br>
<span class="quotelev1">&gt; checking Open MPI release date... Unreleased developer copy
</span><br>
<span class="quotelev1">&gt; checking Open MPI Subversion repository version... r22187
</span><br>
<span class="quotelev1">&gt; checking Open Run-Time Environment version... 1.5a1r22187
</span><br>
<span class="quotelev1">&gt; checking Open Run-Time Environment release date... Unreleased  
</span><br>
<span class="quotelev1">&gt; developer copy
</span><br>
<span class="quotelev1">&gt; checking Open Run-Time Environment Subversion repository version...  
</span><br>
<span class="quotelev1">&gt; r22187
</span><br>
<span class="quotelev1">&gt; checking Open Portable Access Layer version... 1.5a1r22187
</span><br>
<span class="quotelev1">&gt; checking Open Portable Access Layer release date... Unreleased  
</span><br>
<span class="quotelev1">&gt; developer copy
</span><br>
<span class="quotelev1">&gt; checking Open Portable Access Layer Subversion repository version...  
</span><br>
<span class="quotelev1">&gt; r22187
</span><br>
<span class="quotelev1">&gt; ./configure: line 5910: syntax error near unexpected token `&lt;&lt;&lt;'
</span><br>
<span class="quotelev1">&gt; ./configure: line 5910: `&lt;&lt;&lt;&lt;&lt;&lt;&lt; .working'
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7085.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.5) ==="</a>
<li><strong>Previous message:</strong> <a href="7083.php">Jeff Squyres: "Re: [OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7085.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.5) ==="</a>
<li><strong>Reply:</strong> <a href="7085.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.5) ==="</a>
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
