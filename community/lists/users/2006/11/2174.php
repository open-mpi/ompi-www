<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 14 05:38:12 2006" -->
<!-- isoreceived="20061114103812" -->
<!-- sent="Tue, 14 Nov 2006 11:41:04 +0100" -->
<!-- isosent="20061114104104" -->
<!-- name="trasz_at_[hidden]" -->
<!-- email="trasz_at_[hidden]" -->
<!-- subject="[OMPI users] ScaLAPACK + BLACS + OpenMPI" -->
<!-- id="20061114104104.GA13267_at_pin.if.uz.zgora.pl" -->
<!-- charset="iso-8859-2" -->
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
<strong>From:</strong> <a href="mailto:trasz_at_[hidden]?Subject=Re:%20[OMPI%20users]%20ScaLAPACK%20%2B%20BLACS%20%2B%20OpenMPI"><em>trasz_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-11-14 05:41:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2175.php">Susan Coulter: "[OMPI users] segv failure &gt; 120 nodes"</a>
<li><strong>Previous message:</strong> <a href="2173.php">Ralph Castain: "Re: [OMPI users] debugging problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2177.php">Jeff Squyres: "Re: [OMPI users] ScaLAPACK + BLACS + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2177.php">Jeff Squyres: "Re: [OMPI users] ScaLAPACK + BLACS + OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In case anyone had problems with getting ScaLAPACK and BLACS to work
<br>
with OpenMPI: if BLACS 'selftest' completes successfully, but ScaLAPACK's
<br>
one hangs or crashes with some weird error messages, recompile BLACS with
<br>
'TRANSCOMM = -DUseMpi2' in Bmake.inc.  It fixed the problem for me, with
<br>
scalapack-1.7.4, blacs-1.7 and openmpi-1.1.2 under FreeBSD 6.2-PRE.
<br>
This is different from what <a href="http://www.open-mpi.org/faq/?category=mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps</a>
<br>
says.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2175.php">Susan Coulter: "[OMPI users] segv failure &gt; 120 nodes"</a>
<li><strong>Previous message:</strong> <a href="2173.php">Ralph Castain: "Re: [OMPI users] debugging problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2177.php">Jeff Squyres: "Re: [OMPI users] ScaLAPACK + BLACS + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2177.php">Jeff Squyres: "Re: [OMPI users] ScaLAPACK + BLACS + OpenMPI"</a>
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
