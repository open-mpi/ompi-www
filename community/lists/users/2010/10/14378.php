<?
$subject_val = "Re: [OMPI users] new open mpi user questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  4 11:52:21 2010" -->
<!-- isoreceived="20101004155221" -->
<!-- sent="Mon, 04 Oct 2010 17:52:16 +0200" -->
<!-- isosent="20101004155216" -->
<!-- name="Nico Mittenzwey" -->
<!-- email="Nico.Mittenzwey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new open mpi user questions" -->
<!-- id="4CA9F830.8090009_at_informatik.tu-chemnitz.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C5FD53FFC7D1704890B0B1FE85A004F6037B4BC5_at_cyclone.aegis.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] new open mpi user questions<br>
<strong>From:</strong> Nico Mittenzwey (<em>Nico.Mittenzwey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-04 11:52:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14379.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>Previous message:</strong> <a href="14377.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<li><strong>In reply to:</strong> <a href="14376.php">Ed Peddycoart: "[OMPI users] new open mpi user questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ed Peddycoart wrote:
<br>
<span class="quotelev1">&gt; The machines are RHEL 5.4 machines and an older version of Open MPI was 
</span><br>
<span class="quotelev1">&gt; already installed.  I understand from the faq that I should not simply 
</span><br>
<span class="quotelev1">&gt; over write the old installation, but would it be better if I remove the 
</span><br>
<span class="quotelev1">&gt; old version or install the new to a different location.  I have no need 
</span><br>
<span class="quotelev1">&gt; for the old version.
</span><br>
<p>Remove it, if you don't need it.
<br>
If you'll compile from source, you can add the argument 
<br>
--prefix=/home/username/openmpi (or similar) to the ./configure command 
<br>
to install Open MPI in that location. Just set your PATH and 
<br>
LD_LIBRARY_PATH variables accordingly to compile and run your applications.
<br>
<p><p><span class="quotelev1">&gt; Are there test apps with the Open MPI distribution that I can use to 
</span><br>
<span class="quotelev1">&gt; produce some benchmarks?  One thing I want to get an idea of data 
</span><br>
<span class="quotelev1">&gt; transfer rates as a function of the size of the data transferred. 
</span><br>
<p>A nice bandwidth benchmark is netpipe from 
<br>
<a href="http://www.scl.ameslab.gov/netpipe/">http://www.scl.ameslab.gov/netpipe/</a>. Compile with &quot;make mpi&quot;.
<br>
<p>Nico
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14379.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>Previous message:</strong> <a href="14377.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<li><strong>In reply to:</strong> <a href="14376.php">Ed Peddycoart: "[OMPI users] new open mpi user questions"</a>
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
