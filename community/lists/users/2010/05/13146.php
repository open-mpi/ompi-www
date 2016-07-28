<?
$subject_val = "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 12:30:31 2010" -->
<!-- isoreceived="20100524163031" -->
<!-- sent="Mon, 24 May 2010 12:30:26 -0400" -->
<!-- isosent="20100524163026" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers" -->
<!-- id="0701C177-DE9B-4721-91EC-E7898475ED1E_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C81FED10.6CCA%mwglass_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 12:30:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13147.php">Gijsbert Wiesenekker: "[OMPI users] Deadlock question"</a>
<li><strong>Previous message:</strong> <a href="13145.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<li><strong>In reply to:</strong> <a href="13143.php">Glass, Micheal W: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2010, at 10:45 AM, Glass, Micheal W wrote:
<br>
<p><span class="quotelev1">&gt; Yes, I&#146;m sure I&#146;m picking up the newly built version.  I&#146;ve run ompi_info to verify my path is correct.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;ve have a little more information now...  I rebuilt openmpi 1.4.2 with the &#145;--enable-debug&#146; option to configure and when I run a simple mpi program on 2 processors with an MPI_Reduce() call:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<p>That's weird.  I compiled on Snow Leopard (but with gcc) and it works fine for me.  Open MPI definitely defines MPI_SUM on MPI_DOUBLE.
<br>
<p>I don't have the intel compiler to test with on Snow Leopard, unfortunately...  It works fine for me with the intel suite 11.1.072 on Linux RHEL 5.
<br>
<p>I'm afraid I have no way to testing further -- is there any chance you can step through and see what is going on?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13147.php">Gijsbert Wiesenekker: "[OMPI users] Deadlock question"</a>
<li><strong>Previous message:</strong> <a href="13145.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<li><strong>In reply to:</strong> <a href="13143.php">Glass, Micheal W: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
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
