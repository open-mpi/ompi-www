<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 23 07:04:02 2005" -->
<!-- isoreceived="20051123120402" -->
<!-- sent="Wed, 23 Nov 2005 13:02:26 +0100" -->
<!-- isosent="20051123120226" -->
<!-- name="Rainer Keller" -->
<!-- email="Keller_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3" -->
<!-- id="200511231302.27105.Keller_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="38B801DF-4078-4591-8371-2E9047A8B424_at_ulb.ac.be" -->
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
<strong>From:</strong> Rainer Keller (<em>Keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-23 07:02:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0389.php">Max Manfrin: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>Previous message:</strong> <a href="0387.php">Rainer Keller: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>In reply to:</strong> <a href="0386.php">Max Manfrin: "[O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0389.php">Max Manfrin: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>Reply:</strong> <a href="0389.php">Max Manfrin: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Max,
<br>
<p>You seem to be using gcc and gfortran as Fortran compiler.
<br>
<p>As You read in the README - file, we need to set a compiler-flags to FFLAGS in 
<br>
order to force the fortran compiler to have the &quot;correct&quot; (C) notion of a 
<br>
logical... (required e.g. for PGI).
<br>
<p>However, gfortran is not such a compiler (.TRUE. is represented as int and 
<br>
it's value is 1), so You don't need to set the FFLAGS=&quot;-Munixlogical&quot;).
<br>
<p>(we are aware of the general issue and have a patch which is very probably 
<br>
going to be integrated into openmpi-1.0.1)
<br>
<p>Hope this helps,
<br>
Rainer
<br>
<p><p><p>On Wednesday 23 November 2005 12:09, Max Manfrin wrote:
<br>
<span class="quotelev1">&gt; Dear *,
</span><br>
<span class="quotelev1">&gt; 	I'm having some trouble in building the new Open MPI 1.0. The
</span><br>
<span class="quotelev1">&gt; configure step doesn't go through. I attach the output of the command
</span><br>
<span class="quotelev1">&gt; in the terminal and the config.LOG file in the file output-compile.tgz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On this machine there is already the Open MPI 1.0rc4 that built
</span><br>
<span class="quotelev1">&gt; without problem. I attach the result of the ompi_info --all command
</span><br>
<span class="quotelev1">&gt; in the file ompi_info_1rc4.txt.zip
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Thanks in advance for any help you might give me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Max MANFRIN
</span><br>
<span class="quotelev1">&gt; <a href="http://iridia.ulb.ac.be/~mmanfrin/">http://iridia.ulb.ac.be/~mmanfrin/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ***************************************************************************
</span><br>
<span class="quotelev1">&gt;** **                                                                       
</span><br>
<span class="quotelev1">&gt;  ** ** WARNING:  This email contains an attachment of a very suspicious
</span><br>
<span class="quotelev1">&gt; type.  ** ** You are urged NOT to open this attachment unless you are
</span><br>
<span class="quotelev1">&gt; absolutely     ** ** sure it is legitmate.  Opening this attachment may
</span><br>
<span class="quotelev1">&gt; cause irreparable    ** ** damage to your computer and your files.  If you
</span><br>
<span class="quotelev1">&gt; have any questions      ** ** about the validity of this message, PLEASE
</span><br>
<span class="quotelev1">&gt; SEEK HELP BEFORE OPENING IT. ** **                                         
</span><br>
<span class="quotelev1">&gt;                                ** ** This warning was added by the IU
</span><br>
<span class="quotelev1">&gt; Computer Science Dept. mail scanner.   **
</span><br>
<span class="quotelev1">&gt; ***************************************************************************
</span><br>
<span class="quotelev1">&gt;**
</span><br>
<p><pre>
-- 
---------------------------------------------------------------------
Dipl.-Inf. Rainer Keller       email: keller_at_[hidden]
  High Performance Computing     Tel: ++49 (0)711-685 5858
    Center Stuttgart (HLRS)        Fax: ++49 (0)711-678 7626
  POSTAL:Nobelstrasse 19             <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
  ACTUAL:Allmandring 30, R. O.030
  70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0389.php">Max Manfrin: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>Previous message:</strong> <a href="0387.php">Rainer Keller: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>In reply to:</strong> <a href="0386.php">Max Manfrin: "[O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0389.php">Max Manfrin: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>Reply:</strong> <a href="0389.php">Max Manfrin: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
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
