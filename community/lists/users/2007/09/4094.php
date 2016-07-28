<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 28 11:17:17 2007" -->
<!-- isoreceived="20070928151717" -->
<!-- sent="Fri, 28 Sep 2007 17:17:07 +0200" -->
<!-- isosent="20070928151707" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run MPI-based program without mpirun" -->
<!-- id="200709281717.07430.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="op.tzc9rneg3tjhyn_at_yut43.site" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-28 11:17:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4095.php">Brian Barrett: "Re: [OMPI users] aclocal.m4 booboo?"</a>
<li><strong>Previous message:</strong> <a href="4093.php">Yu. Vishnevsky: "[OMPI users] Run MPI-based program without mpirun"</a>
<li><strong>In reply to:</strong> <a href="4093.php">Yu. Vishnevsky: "[OMPI users] Run MPI-based program without mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Yura,
<br>
On Friday 28 September 2007 15:44, Yu. Vishnevsky wrote:
<br>
<span class="quotelev1">&gt; Is it possible to somehow build MPI-based program with OpenMPI in order to
</span><br>
<span class="quotelev1">&gt; run it later on another SMP computer without having installed OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Such possibility was in MPICH1 (-p4pg), but it would be better for me to
</span><br>
<span class="quotelev1">&gt; use OpenMPI.
</span><br>
Sure: Build everything statically, library (--disable-shared --enable-static) 
<br>
and application (e.g. with gcc -static, with icc -static or -i-static(v9.1) / 
<br>
-static-intel(v10))
<br>
Then move the binary of Your application and the ompi-tools to another (SMP) 
<br>
machine, which does not have the usual installation of ompi-tools/orte 
<br>
available.
<br>
<p>However, You have to be aware, that in case of error messages, the help-files 
<br>
are not available, so the out probably is not very meaningful...
<br>
<p>Also, depending on the interconnect, that is configured &amp; installed, You may 
<br>
need to have certain system/interconnect libraries (such as for IB). 
<br>
available.
<br>
<p>Hope this helps.
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
&quot;Emails save time, not printing them saves trees!&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4095.php">Brian Barrett: "Re: [OMPI users] aclocal.m4 booboo?"</a>
<li><strong>Previous message:</strong> <a href="4093.php">Yu. Vishnevsky: "[OMPI users] Run MPI-based program without mpirun"</a>
<li><strong>In reply to:</strong> <a href="4093.php">Yu. Vishnevsky: "[OMPI users] Run MPI-based program without mpirun"</a>
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
