<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 10:19:43 2007" -->
<!-- isoreceived="20071023141943" -->
<!-- sent="Tue, 23 Oct 2007 10:19:37 -0400" -->
<!-- isosent="20071023141937" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]" -->
<!-- id="A91EEED4-589D-4E74-9746-1612B8400B0C_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0710231053200.4540_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 10:19:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2489.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2487.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2484.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2489.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2489.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 23, 2007, at 6:33 AM, Bogdan Costescu wrote:
<br>
<p><span class="quotelev1">&gt; I made some progress: if I configure with &quot;--without-memory-manager&quot;
</span><br>
<span class="quotelev1">&gt; (along with all other options that I mentioned before), then it works.
</span><br>
<span class="quotelev1">&gt; This was inspired by the fact that the segmentation fault occured in
</span><br>
<span class="quotelev1">&gt; ptmalloc2. I have previously tried to remove the MX support without
</span><br>
<span class="quotelev1">&gt; any effect; with ptmalloc2 out of the picture I have had test runs
</span><br>
<span class="quotelev1">&gt; over MX and TCP without problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should I file a bug report ? Is there something else that you'd like
</span><br>
<span class="quotelev1">&gt; me to try ?
</span><br>
<p>Bogdan,
<br>
<p>Which version of MX are you using? Are you enabling the MX  
<br>
registration cache (regcache)?
<br>
<p>Can you try two runs, one exporting MX_RCACHE=1 and one exporting  
<br>
MX_RCACHE=0 to all processes?
<br>
<p>This will rule out any interaction between the OMPI memory manager  
<br>
and MX's regcache (either caused by or simply exposed by the  
<br>
Pathscale compiler).
<br>
<p>Thanks,
<br>
<p>Scott
<br>
<p><p><pre>
--
Scott Atchley
Myricom Inc.
<a href="http://www.myri.com">http://www.myri.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2489.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2487.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2484.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2489.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2489.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
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
