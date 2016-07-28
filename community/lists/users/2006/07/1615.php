<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 18:51:00 2006" -->
<!-- isoreceived="20060711225100" -->
<!-- sent="Tue, 11 Jul 2006 15:50:45 -0700" -->
<!-- isosent="20060711225045" -->
<!-- name="Greg Lindahl" -->
<!-- email="greg.lindahl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0" -->
<!-- id="20060711225045.GB3514_at_greglaptop.internal.keyresearch.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="507769B7-8495-478B-B9A8-18982665346B_at_cs.utk.edu" -->
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
<strong>From:</strong> Greg Lindahl (<em>greg.lindahl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-11 18:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1616.php">Ralph Castain: "Re: [OMPI users] readline and mpirun"</a>
<li><strong>Previous message:</strong> <a href="1614.php">s anwar: "Re: [OMPI users] readline and mpirun"</a>
<li><strong>In reply to:</strong> <a href="1602.php">George Bosilca: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1610.php">Daryl W. Grunau: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 11, 2006 at 12:23:16PM -0400, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I doubt that icc should know anything about  
</span><br>
<span class="quotelev1">&gt; the gxx_personality. In fact it look like icc is trying to use some  
</span><br>
<span class="quotelev1">&gt; libraries compiled with g++.
</span><br>
<p>As an aside, both Intel C++ and PathScale C++ are 100% g++ compatible.
<br>
Symbols like this are part of the g++ compatibility:
<br>
<p>[lindahl_at_eng-23 2.4]$ nm ipl.so| grep gxx
<br>
00000000000a21dc V DW.ref.__gxx_personality_v0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U __gxx_personality_v0@@CXXABI_1.2
<br>
<p>-- greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1616.php">Ralph Castain: "Re: [OMPI users] readline and mpirun"</a>
<li><strong>Previous message:</strong> <a href="1614.php">s anwar: "Re: [OMPI users] readline and mpirun"</a>
<li><strong>In reply to:</strong> <a href="1602.php">George Bosilca: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1610.php">Daryl W. Grunau: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
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
