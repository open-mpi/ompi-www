<?
$subject_val = "Re: [OMPI users] failure of 1.8.5 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 17:29:24 2015" -->
<!-- isoreceived="20150511212924" -->
<!-- sent="Mon, 11 May 2015 14:29:18 -0700" -->
<!-- isosent="20150511212918" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] failure of 1.8.5 on FreeBSD" -->
<!-- id="20150511212918.GA39510_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150511195501.GA77850_at_troutmask.apl.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] failure of 1.8.5 on FreeBSD<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-11 17:29:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26857.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Previous message:</strong> <a href="26855.php">Walt Brainerd: "[OMPI users] OpenMPI on Windows without Cygwin"</a>
<li><strong>In reply to:</strong> <a href="26854.php">Steve Kargl: "[OMPI users] failure of 1.8.5 on FreeBSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, May 11, 2015 at 12:55:01PM -0700, Steve Kargl wrote:
<br>
<span class="quotelev1">&gt; I've configured and built openmpi-1.8.5 on FreeBSD-11
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % ./configure --prefix /usr/local/openmpi-1.8.5 --disable-shared \
</span><br>
<span class="quotelev1">&gt;    --enable-static --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Not necessarily an elegant solution, but adding 
<br>
--with-wrapper-libs=-lelf to the configure line ensures
<br>
that libelf is linked in after libexecinfo.
<br>
<p><p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26857.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Previous message:</strong> <a href="26855.php">Walt Brainerd: "[OMPI users] OpenMPI on Windows without Cygwin"</a>
<li><strong>In reply to:</strong> <a href="26854.php">Steve Kargl: "[OMPI users] failure of 1.8.5 on FreeBSD"</a>
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
