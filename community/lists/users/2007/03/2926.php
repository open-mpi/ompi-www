<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 27 07:58:21 2007" -->
<!-- isoreceived="20070327115821" -->
<!-- sent="Tue, 27 Mar 2007 13:58:15 +0200" -->
<!-- isosent="20070327115815" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory leak in openmpi-1.2?" -->
<!-- id="460906D7.9000205_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="460905A3.7080908_at_sara.nl" -->
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
<strong>Date:</strong> 2007-03-27 07:58:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2927.php">Jeff Squyres: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<li><strong>Previous message:</strong> <a href="2925.php">Bas van der Vlies: "[OMPI users] Memory leak in openmpi-1.2?"</a>
<li><strong>In reply to:</strong> <a href="2925.php">Bas van der Vlies: "[OMPI users] Memory leak in openmpi-1.2?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bas van der Vlies wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   We are testing openmpi version 1.2 on Debian etch with openib. Some of 
</span><br>
<span class="quotelev1">&gt; our users are using scalapack/blacs that are running for a long time use 
</span><br>
<span class="quotelev1">&gt; a lot of mpi_comm functions. we have made a small C example that test if 
</span><br>
<span class="quotelev1">&gt; the mpi can handle this situation  (see attach file). When we run this 
</span><br>
<span class="quotelev1">&gt; program wit argument 1000000 we see that it consumes more and more 
</span><br>
<span class="quotelev1">&gt; memory, eg:
</span><br>
<span class="quotelev1">&gt;    &lt;progname&gt;  1000000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Forgot to attach theh file :-(
<br>
<p><p><pre>
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
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2926/duptest.c">duptest.c</a>
</ul>
<!-- attachment="duptest.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2927.php">Jeff Squyres: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<li><strong>Previous message:</strong> <a href="2925.php">Bas van der Vlies: "[OMPI users] Memory leak in openmpi-1.2?"</a>
<li><strong>In reply to:</strong> <a href="2925.php">Bas van der Vlies: "[OMPI users] Memory leak in openmpi-1.2?"</a>
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
