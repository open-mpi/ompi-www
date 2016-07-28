<?
$subject_val = "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 18:33:33 2008" -->
<!-- isoreceived="20080421223333" -->
<!-- sent="Tue, 22 Apr 2008 00:33:14 +0200" -->
<!-- isosent="20080421223314" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling" -->
<!-- id="20080421223314.GZ15077_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="480D1130.9070609_at_polytechnique.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-21 18:33:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5430.php">Terry Frankcombe: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>Previous message:</strong> <a href="5428.php">cfdman7_at_[hidden]: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5427.php">Vincent Rotival: "[OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5430.php">Terry Frankcombe: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>Reply:</strong> <a href="5430.php">Terry Frankcombe: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 22, 2008 at 12:12:00AM +0200, Vincent Rotival wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone
</span><br>
<p>Hi!
<br>
<p><span class="quotelev1">&gt; [vrotival-laptop:06375] [ 1] /usr/lib/libmpi.so.0(ompi_proc_init+0x13b) 
</span><br>
<p>Is that your MPI installation? /usr/lib?
<br>
<p><span class="quotelev1">&gt; vrotival_at_vrotival-laptop:~/Work/workbench$ ompi_info --all
</span><br>
<span class="quotelev1">&gt; ompi_info: Symbol `mca_allocator_base_components' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<p>Usually, this &quot;has different size&quot; means that libraries have changed
<br>
since you've compiled your program.
<br>
<p><span class="quotelev1">&gt; updates in Ubuntu (although I do not want to incriminate it at first)
</span><br>
<p>Perhaps you got the Ubuntu Open MPI package. You should make sure that
<br>
<p>&nbsp;&nbsp;&nbsp;- ompi_info shows all the right paths
<br>
&nbsp;&nbsp;&nbsp;- no openmpi-* package is installed
<br>
<p>If in doubt, rip out every installed &quot;Open MPI&quot; and recompile. (just to
<br>
make sure you don't have a mix of different versions)
<br>
<p><p>HTH
<br>
<p>PS: These were just the usual hints, I don't know your particular
<br>
problem.
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5430.php">Terry Frankcombe: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>Previous message:</strong> <a href="5428.php">cfdman7_at_[hidden]: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5427.php">Vincent Rotival: "[OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5430.php">Terry Frankcombe: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>Reply:</strong> <a href="5430.php">Terry Frankcombe: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
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
