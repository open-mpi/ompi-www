<?
$subject_val = "Re: [OMPI users] Help: HPL Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 11:11:27 2011" -->
<!-- isoreceived="20110507151127" -->
<!-- sent="Sat, 7 May 2011 19:11:21 +0400" -->
<!-- isosent="20110507151121" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: HPL Problem" -->
<!-- id="BANLkTi=90EQ00vVcpNmnXOe1q-QpvfDxzg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTin2aMN5qrLsSW22jNZmoNzN1S9SKQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: HPL Problem<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-07 11:11:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16472.php">Lee Eric: "Re: [OMPI users] Help: HPL Problem"</a>
<li><strong>Previous message:</strong> <a href="16470.php">Lee Eric: "[OMPI users] Help: HPL Problem"</a>
<li><strong>In reply to:</strong> <a href="16470.php">Lee Eric: "[OMPI users] Help: HPL Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16472.php">Lee Eric: "Re: [OMPI users] Help: HPL Problem"</a>
<li><strong>Reply:</strong> <a href="16472.php">Lee Eric: "Re: [OMPI users] Help: HPL Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>You have a link-time error complaining about the absence of some
<br>
libraries. At least two of them libm and libdl must be provided by
<br>
system, not by MPI implementation. Could you locate them in
<br>
/usr/lib64? Also it should be useful to figure out if the problem is
<br>
global or specific to HPL: do you have any errors compiling simple
<br>
&quot;hello world&quot; program with OpenMPI?
<br>
<p>- D.
<br>
<p>2011/5/7 Lee Eric &lt;openlinuxsource_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I encountered following error messages when I compiled HPL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/pool/measure/hpl-2.0/testing/ptest/Linux_PII_FBLAS'
</span><br>
<span class="quotelev1">&gt; /pool/MPI/openmpi/bin/mpif90 -DAdd__ -DF77_INTEGER=int
</span><br>
<span class="quotelev1">&gt; -DStringSunStyle &#160;-I/pool/measure/hpl-2.0/include
</span><br>
<span class="quotelev1">&gt; -I/pool/measure/hpl-2.0/include/Linux_PII_FBLAS
</span><br>
<span class="quotelev1">&gt; -I/pool/MPI/openmpi/include -fomit-frame-pointer -O3 -funroll-loops -W
</span><br>
<span class="quotelev1">&gt; -Wall -o /pool/measure/hpl-2.0/bin/Linux_PII_FBLAS/xhpl HPL_pddriver.o
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;HPL_pdinfo.o &#160; &#160; &#160; &#160; &#160; HPL_pdtest.o
</span><br>
<span class="quotelev1">&gt; /pool/measure/hpl-2.0/lib/Linux_PII_FBLAS/libhpl.a
</span><br>
<span class="quotelev1">&gt; /pool/libs/BLAS/blas_LINUX.a /pool/MPI/openmpi/lib/libmpi.so
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -ldl
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lnsl
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lutil
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lm
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -ldl
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lm
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [dexe.grd] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/pool/measure/hpl-2.0/testing/ptest/Linux_PII_FBLAS'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [build_tst] Error 2
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/pool/measure/hpl-2.0'
</span><br>
<span class="quotelev1">&gt; make: *** [build] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the attachment is the make file I created. OS is Fedora 14 x86_64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could anyone show me where is going wrong? Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16472.php">Lee Eric: "Re: [OMPI users] Help: HPL Problem"</a>
<li><strong>Previous message:</strong> <a href="16470.php">Lee Eric: "[OMPI users] Help: HPL Problem"</a>
<li><strong>In reply to:</strong> <a href="16470.php">Lee Eric: "[OMPI users] Help: HPL Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16472.php">Lee Eric: "Re: [OMPI users] Help: HPL Problem"</a>
<li><strong>Reply:</strong> <a href="16472.php">Lee Eric: "Re: [OMPI users] Help: HPL Problem"</a>
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
