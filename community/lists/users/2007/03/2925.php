<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 27 07:53:15 2007" -->
<!-- isoreceived="20070327115315" -->
<!-- sent="Tue, 27 Mar 2007 13:53:07 +0200" -->
<!-- isosent="20070327115307" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="[OMPI users] Memory leak in openmpi-1.2?" -->
<!-- id="460905A3.7080908_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Bas van der Vlies (<em>basv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-27 07:53:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2926.php">Bas van der Vlies: "Re: [OMPI users] Memory leak in openmpi-1.2?"</a>
<li><strong>Previous message:</strong> <a href="2924.php">de Almeida, Valmor F.: "[OMPI users] very long linking time with mixed-language libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2926.php">Bas van der Vlies: "Re: [OMPI users] Memory leak in openmpi-1.2?"</a>
<li><strong>Reply:</strong> <a href="2926.php">Bas van der Vlies: "Re: [OMPI users] Memory leak in openmpi-1.2?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;&nbsp;We are testing openmpi version 1.2 on Debian etch with openib. Some of 
<br>
our users are using scalapack/blacs that are running for a long time use 
<br>
a lot of mpi_comm functions. we have made a small C example that test if 
<br>
the mpi can handle this situation  (see attach file). When we run this 
<br>
program wit argument 1000000 we see that it consumes more and more 
<br>
memory, eg:
<br>
&nbsp;&nbsp;&nbsp;&lt;progname&gt;  1000000
<br>
<p>Regards
<br>
<p><p><p><p><pre>
-- 
********************************************************************
*                                                                  *
*  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
*  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
*  Kruislaan 415                         fax:    +31 20 6683167    *
*  1098 SJ Amsterdam                                               *
*                                                                  *
********************************************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2926.php">Bas van der Vlies: "Re: [OMPI users] Memory leak in openmpi-1.2?"</a>
<li><strong>Previous message:</strong> <a href="2924.php">de Almeida, Valmor F.: "[OMPI users] very long linking time with mixed-language libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2926.php">Bas van der Vlies: "Re: [OMPI users] Memory leak in openmpi-1.2?"</a>
<li><strong>Reply:</strong> <a href="2926.php">Bas van der Vlies: "Re: [OMPI users] Memory leak in openmpi-1.2?"</a>
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
