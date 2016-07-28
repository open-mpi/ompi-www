<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 10:36:46 2007" -->
<!-- isoreceived="20071023143646" -->
<!-- sent="Tue, 23 Oct 2007 16:36:40 +0200 (CEST)" -->
<!-- isosent="20071023143640" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]" -->
<!-- id="Pine.LNX.4.64.0710231624300.4540_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A91EEED4-589D-4E74-9746-1612B8400B0C_at_myri.com" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 10:36:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2490.php">Scott Atchley: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2488.php">Scott Atchley: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2488.php">Scott Atchley: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2490.php">Scott Atchley: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2490.php">Scott Atchley: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 23 Oct 2007, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; Which version of MX are you using? Are you enabling the MX
</span><br>
<span class="quotelev1">&gt; registration cache (regcache)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try two runs, one exporting MX_RCACHE=1 and one exporting
</span><br>
<span class="quotelev1">&gt; MX_RCACHE=0 to all processes?
</span><br>
<p>I don't get to that point... I am not even able to use the wrapper 
<br>
compilers (f.e. mpif90) to obtain an executable to run. The 
<br>
segmentation fault happens when Open MPI utilities are being run, even 
<br>
ompi_info.
<br>
<p><span class="quotelev1">&gt; This will rule out any interaction between the OMPI memory manager
</span><br>
<span class="quotelev1">&gt; and MX's regcache (either caused by or simply exposed by the
</span><br>
<span class="quotelev1">&gt; Pathscale compiler).
</span><br>
<p>As I wrote in my previous e-mail, I tried configuring with and without 
<br>
the MX libs, but this made no difference. It's only when I disabled 
<br>
the memory manager, while still enabling MX, that I was able to get a 
<br>
working build.
<br>
<p><pre>
-- 
Bogdan Costescu
IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
E-mail: Bogdan.Costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2490.php">Scott Atchley: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2488.php">Scott Atchley: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2488.php">Scott Atchley: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2490.php">Scott Atchley: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2490.php">Scott Atchley: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
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
