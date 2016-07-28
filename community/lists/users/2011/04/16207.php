<?
$subject_val = "Re: [OMPI users] &quot;Value out of bounds in file&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 16:07:10 2011" -->
<!-- isoreceived="20110412200710" -->
<!-- sent="Tue, 12 Apr 2011 22:07:23 +0200" -->
<!-- isosent="20110412200723" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Value out of bounds in file&amp;quot; error" -->
<!-- id="201104122207.23398.keller_at_hlrs.de" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="BANLkTikXyv3ZRyPafAVC4sTzDPi8uErAKg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Value out of bounds in file&quot; error<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-12 16:07:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16208.php">amosleff_at_[hidden]: "[OMPI users] Problem with setting up openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="16206.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>In reply to:</strong> <a href="16192.php">hi: "[OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16211.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Reply:</strong> <a href="16211.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hiral,
<br>
<p>On Monday 11 April 2011 15:04:19 hi wrote:
<br>
<span class="quotelev1">&gt; Is it the case that I am combining mkl_intelmpi with locally built openmpi
</span><br>
<span class="quotelev1">&gt; and hence this problem???
</span><br>
Yes, as You mention yourselve here ,-]
<br>
<p><span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Files (x86)\Intel\Compiler\11.1\065\mkl/ia32/lib&quot; mkl_blacs_intelmpi.lib
</span><br>
<span class="quotelev1">&gt; mkl_core.lib mkl_core_dll.lib /LIBPATH:&quot;C:/Program Files
</span><br>
<p>MKL includes the BLACS interface -- however, MKL is built against Intel-MPI: 
<br>
under Linux-based MKL, there exist the static libraries 
<br>
libmkl_blacs_intelmpi_*lp64.a, libmkl_blacs_sgimpt_*lp64.a and 
<br>
libmkl_blacs_openmpi_*lp64.a.
<br>
<p>The corresponding libraries do not exist under your windows installation.
<br>
<p>You may want to port/compile BLACS from netlib yourselve, see here:
<br>
<a href="http://icl.cs.utk.edu/lapack-for-windows/VisualStudio_install.html">http://icl.cs.utk.edu/lapack-for-windows/VisualStudio_install.html</a>
<br>
<p>Hope this helps?
<br>
<p>Best regards,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
 Dr.-Ing. Rainer Keller  <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                         Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                 Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16208.php">amosleff_at_[hidden]: "[OMPI users] Problem with setting up openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="16206.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>In reply to:</strong> <a href="16192.php">hi: "[OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16211.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Reply:</strong> <a href="16211.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
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
