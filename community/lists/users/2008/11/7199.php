<?
$subject_val = "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 20:59:55 2008" -->
<!-- isoreceived="20081104015955" -->
<!-- sent="Tue, 4 Nov 2008 02:59:50 +0100 (CET)" -->
<!-- isosent="20081104015950" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4" -->
<!-- id="47541.61.69.3.161.1225763990.squirrel_at_webmail.chalmers.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A016B8C4-510B-4FD2-AD3B-A1B6440508F5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 20:59:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7200.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Previous message:</strong> <a href="7198.php">Rima Chaudhuri: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<li><strong>In reply to:</strong> <a href="7194.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7200.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Reply:</strong> <a href="7200.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Nov 3, 2008, at 3:36 PM, Gustavo Seabra wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For your fortran issue, the Fortran 90 interface needs the Fortran 77
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface.  So you need to supply an F77 as well (the output from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should indicate that the F90 interface was disabled because the F77
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface was disabled).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that what you mean (see below)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah yes -- that's another reason the f90 interface could be disabled:
</span><br>
<span class="quotelev1">&gt; if configure detects that the f77 and f90 compilers are not link-
</span><br>
<span class="quotelev1">&gt; compatible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I thought the g95 compiler could
</span><br>
<span class="quotelev2">&gt;&gt; deal with F77 as well as F95... If so, could I just pass F77='g95'?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That would probably work (F77=g95).  I don't know the g95 compiler at
</span><br>
<span class="quotelev1">&gt; all, so I don't know if it also accepts Fortran-77-style codes.  But
</span><br>
<span class="quotelev1">&gt; if it does, then you're set.  Otherwise, specify a different F77
</span><br>
<span class="quotelev1">&gt; compiler that is link compatible with g95 and you should be good.
</span><br>
<p>Fortran 90 is a superset of the archaic, hamstrung, &quot;I'm too old to learn
<br>
how to program in a useful manner and I still use punched cards&quot; Fortran
<br>
77.  All Fortran 90 compilers are Fortran 77 compilers, by definition. 
<br>
Fortran 95 has a few (~5) deleted features and a few minor added features.
<br>
&nbsp;I've never heard of a Fortran 95 compiler that wasn't a Fortran 90
<br>
compiler, and thus a Fortran 77 compiler.
<br>
<p>Take g77 and throw it away.  While it's not particularly buggy, it hasn't
<br>
been maintained for years and should be out-performed by a more modern
<br>
compiler such as g95 or gfortran.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7200.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Previous message:</strong> <a href="7198.php">Rima Chaudhuri: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<li><strong>In reply to:</strong> <a href="7194.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7200.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Reply:</strong> <a href="7200.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
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
