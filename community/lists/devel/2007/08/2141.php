<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 17:07:21 2007" -->
<!-- isoreceived="20070813210721" -->
<!-- sent="Mon, 13 Aug 2007 15:07:13 -0600" -->
<!-- isosent="20070813210713" -->
<!-- name="Li-Ta Lo" -->
<!-- email="ollie_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Collectives interface change" -->
<!-- id="1187039233.2607.84.camel_at_exponential.lanl.gov" -->
<!-- inreplyto="77BB42D4-BFCF-4C0B-BE9E-A6E627255009_at_lanl.gov" -->
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
<strong>From:</strong> Li-Ta Lo (<em>ollie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 17:07:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2142.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2140.php">Jeff Squyres: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2101.php">Brian Barrett: "[OMPI devel] Collectives interface change"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2007-08-09 at 14:49 -0600, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There was significant discussion this week at the collectives meeting  
</span><br>
<span class="quotelev1">&gt; about improving the selection logic for collective components.  While  
</span><br>
<span class="quotelev1">&gt; we'd like the automated collectives selection logic laid out in the  
</span><br>
<span class="quotelev1">&gt; Collv2 document, it was decided that as a first step, we would allow  
</span><br>
<span class="quotelev1">&gt; more than one + basic compnents to be used for a given communicator.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This mandated the change of a couple of things in the collectives  
</span><br>
<span class="quotelev1">&gt; interface, namely how collectives module data is found (passed into a  
</span><br>
<span class="quotelev1">&gt; function, rather tha a static pointer on the component) and a bit of  
</span><br>
<span class="quotelev1">&gt; the initialization sequence.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The revised interface and the rest of the code is available in an svn  
</span><br>
<span class="quotelev1">&gt; temp branch:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/svn/ompi/tmp/bwb-coll-select">https://svn.open-mpi.org/svn/ompi/tmp/bwb-coll-select</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thus far, most of the components in common use have been updated.   
</span><br>
<span class="quotelev1">&gt; The notable exception is the tuned collectives routine, which Ollie  
</span><br>
<span class="quotelev1">&gt; is updating in the near future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have any comments on the changes, please let me know.  If not,  
</span><br>
<span class="quotelev1">&gt; the changes will move to the trunk once Ollie is completed with  
</span><br>
<span class="quotelev1">&gt; updating the tuned component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>Done. 
<br>
<p><p>Ollie
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2142.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2140.php">Jeff Squyres: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2101.php">Brian Barrett: "[OMPI devel] Collectives interface change"</a>
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
