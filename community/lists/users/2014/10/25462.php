<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 16:31:43 2014" -->
<!-- isoreceived="20141003203143" -->
<!-- sent="Fri, 03 Oct 2014 16:31:40 -0400" -->
<!-- isosent="20141003203140" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9" -->
<!-- id="542F07AC.5060300_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="542EB529.3030709_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 16:31:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25463.php">Siegmar Gross: "[OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25461.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25445.php">Maxime Boissonneault: "[OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I figured it out. It seems like setting CPP to pgprepro isn't the right 
<br>
variable.
<br>
<p>Thanks,
<br>
<p>Maxime
<br>
<p>Le 2014-10-03 10:39, Maxime Boissonneault a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am trying to compile OpenMPI 1.8.3 with PGI 14.9 I am getting a 
</span><br>
<span class="quotelev1">&gt; severe errors here :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1956 PGC-S-0039-Use of undeclared variable INT64_T 
</span><br>
<span class="quotelev1">&gt; (ompi_datatype_module.c: 278)
</span><br>
<span class="quotelev1">&gt; 1957 PGC-S-0039-Use of undeclared variable AINT 
</span><br>
<span class="quotelev1">&gt; (ompi_datatype_module.c: 278)
</span><br>
<span class="quotelev1">&gt; 1958 PGC-S-0074-Non-constant expression in initializer 
</span><br>
<span class="quotelev1">&gt; (ompi_datatype_module.c: 278)
</span><br>
<span class="quotelev1">&gt; 1959 PGC-W-0093-Type cast required for this conversion of constant 
</span><br>
<span class="quotelev1">&gt; (ompi_datatype_module.c: 278)
</span><br>
<span class="quotelev1">&gt; 1960 PGC/x86-64 Linux 14.9-0: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt; 1961 make[2]: *** [ompi_datatype_module.lo] Erreur 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea what might be going on ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is the output of my configure and make lines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25463.php">Siegmar Gross: "[OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25461.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25445.php">Maxime Boissonneault: "[OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9"</a>
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
