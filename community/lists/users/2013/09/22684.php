<?
$subject_val = "Re: [OMPI users] Fwd: compilation aborted for Handler.cpp (code 2)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 06:59:39 2013" -->
<!-- isoreceived="20130920105939" -->
<!-- sent="Fri, 20 Sep 2013 15:59:37 +0500" -->
<!-- isosent="20130920105937" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: compilation aborted for Handler.cpp (code 2)" -->
<!-- id="CAMvdAsLEB3eAaSCsnnPM4B0Vb9tzQBK_sBtGxuwaKprZranmGQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKPyHN3rC2yk0JkqGCvj4z6pON2BAfNqx9j0eF4R=2zctT=Ncg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: compilation aborted for Handler.cpp (code 2)<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 06:59:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22685.php">Siegmar Gross: "[OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="22683.php">Bert Wesarg: "Re: [OMPI users] Fwd: compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>In reply to:</strong> <a href="22683.php">Bert Wesarg: "Re: [OMPI users] Fwd: compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Reply:</strong> <a href="22697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Output of make V=1 is attached. Again same error. If intel compiler is
<br>
using C++ headers from gfortran then how can we avoid this.
<br>
<p>On Fri, Sep 20, 2013 at 11:07 AM, Bert Wesarg
<br>
&lt;bert.wesarg_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 20, 2013 at 4:49 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to compile openmpi-1.6.5 on fc16.x86_64 with icc and ifort
</span><br>
<span class="quotelev2">&gt;&gt; but getting the subject error. config.out and make.out is attached.
</span><br>
<span class="quotelev2">&gt;&gt; Following command was used for configure
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ./configure CC=icc CXX=icpc FC=ifort F77=ifort F90=ifort
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/home/openmpi_gfortran -enable-mpi-f90 --enable-mpi-f77 |&amp;
</span><br>
<span class="quotelev2">&gt;&gt; tee config.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you also run make with 'make V=1' and send the output. Anyway it
</span><br>
<span class="quotelev1">&gt; looks like the intel compiler uses the C++ headers from GCC 4.6.3 and
</span><br>
<span class="quotelev1">&gt; I don't know if this is supported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please help/advise.
</span><br>
<span class="quotelev2">&gt;&gt; Thank you and best regards
</span><br>
<span class="quotelev2">&gt;&gt; Ahsan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014

</pre>
<hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22684/makeV.zip">makeV.zip</a>
</ul>
<!-- attachment="makeV.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22685.php">Siegmar Gross: "[OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="22683.php">Bert Wesarg: "Re: [OMPI users] Fwd: compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>In reply to:</strong> <a href="22683.php">Bert Wesarg: "Re: [OMPI users] Fwd: compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Reply:</strong> <a href="22697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
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
