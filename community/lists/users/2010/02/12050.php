<?
$subject_val = "Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 15:53:18 2010" -->
<!-- isoreceived="20100208205318" -->
<!-- sent="Mon, 8 Feb 2010 14:53:11 -0600" -->
<!-- isosent="20100208205311" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes" -->
<!-- id="876512661002081253i22a73d09g2f8c402c16277482_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="876512661002081234t2eda73bkccda7c6cdaa62d9d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes<br>
<strong>From:</strong> Laurence Marks (<em>L-marks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 15:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12051.php">Jeff Squyres: "Re: [OMPI users] libtool compile error"</a>
<li><strong>Previous message:</strong> <a href="12049.php">Laurence Marks: "Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<li><strong>In reply to:</strong> <a href="12049.php">Laurence Marks: "Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12070.php">Douglas Guptill: "Re: [OMPI users] openmpi fails to terminate for errors/signals on	some but not all processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Correction on a correction; I did not goof, however zombie's remaining
<br>
is not a reproducible problem but can occur.
<br>
<p>On Mon, Feb 8, 2010 at 2:34 PM, Laurence Marks &lt;L-marks_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I goofed, openmpi does trap these errors but the system I tested them
</span><br>
<span class="quotelev1">&gt; on had a very sluggish response. However, and end-of-file is NOT
</span><br>
<span class="quotelev1">&gt; trapped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 8, 2010 at 1:29 PM, Laurence Marks &lt;L-marks_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This was &quot;Re: [OMPI users] Trapping fortran I/O errors leaving zombie
</span><br>
<span class="quotelev2">&gt;&gt; mpi processes&quot;, but it is more severe than this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, but it appears that at least with ifort most run-time errors
</span><br>
<span class="quotelev2">&gt;&gt; and signals will leave zombie processes behind with openmpi if they
</span><br>
<span class="quotelev2">&gt;&gt; only occur on some of the processors and not all. You can test this
</span><br>
<span class="quotelev2">&gt;&gt; with the attached using (for instance)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc -c doraise.c
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -o crash_test crash_test.F doraise.o -FR -xHost -O3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then, as appropriate mpirun -np 8 crash_test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output is self explanatory, and has an option to both try and
</span><br>
<span class="quotelev2">&gt;&gt; simulate common fortran problems as well as to send fortran or C
</span><br>
<span class="quotelev2">&gt;&gt; signals to the process. Please note that the results can be dependent
</span><br>
<span class="quotelev2">&gt;&gt; upon the level of optimization, and with other compilers there could
</span><br>
<span class="quotelev2">&gt;&gt; be problems where the compiler complains about SIGSEV or other errors
</span><br>
<span class="quotelev2">&gt;&gt; since the code deliberately tries to create these.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Laurence Marks
</span><br>
<span class="quotelev2">&gt;&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev2">&gt;&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev2">&gt;&gt; Northwestern University
</span><br>
<span class="quotelev2">&gt;&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev2">&gt;&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev2">&gt;&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev2">&gt;&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev2">&gt;&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev2">&gt;&gt; Electron crystallography is the branch of science that uses electron
</span><br>
<span class="quotelev2">&gt;&gt; scattering and imaging to study the structure of matter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Laurence Marks
</span><br>
<span class="quotelev1">&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev1">&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev1">&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev1">&gt; Northwestern University
</span><br>
<span class="quotelev1">&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev1">&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev1">&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev1">&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev1">&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev1">&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev1">&gt; Electron crystallography is the branch of science that uses electron
</span><br>
<span class="quotelev1">&gt; scattering and imaging to study the structure of matter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Laurence Marks
Department of Materials Science and Engineering
MSE Rm 2036 Cook Hall
2220 N Campus Drive
Northwestern University
Evanston, IL 60208, USA
Tel: (847) 491-3996 Fax: (847) 491-7820
email: L-marks at northwestern dot edu
Web: www.numis.northwestern.edu
Chair, Commission on Electron Crystallography of IUCR
www.numis.northwestern.edu/
Electron crystallography is the branch of science that uses electron
scattering and imaging to study the structure of matter.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12051.php">Jeff Squyres: "Re: [OMPI users] libtool compile error"</a>
<li><strong>Previous message:</strong> <a href="12049.php">Laurence Marks: "Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<li><strong>In reply to:</strong> <a href="12049.php">Laurence Marks: "Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12070.php">Douglas Guptill: "Re: [OMPI users] openmpi fails to terminate for errors/signals on	some but not all processes"</a>
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
