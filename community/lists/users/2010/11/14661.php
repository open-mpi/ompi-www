<?
$subject_val = "Re: [OMPI users] link problem on 64bit platform";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  1 08:24:10 2010" -->
<!-- isoreceived="20101101122410" -->
<!-- sent="Mon, 1 Nov 2010 08:24:02 -0400" -->
<!-- isosent="20101101122402" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] link problem on 64bit platform" -->
<!-- id="D2AB586F-01C4-498D-8F91-E010D3A01F7C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimnA1qaa=HZqYm0mrA+m0Jq-xFwc9s9wnDC1UKj_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-01 08:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14662.php">Tim Prince: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Previous message:</strong> <a href="14660.php">Trent Creekmore: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>In reply to:</strong> <a href="14658.php">jody: "[OMPI users] link problem on 64bit platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14662.php">Tim Prince: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Reply:</strong> <a href="14662.php">Tim Prince: "Re: [OMPI users] link problem on 64bit platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 1, 2010, at 5:20 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; jody_at_aim-squid_0 ~/progs $ mpiCC -g -o HelloMPI HelloMPI.cpp
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-pc-linux-gnu/4.4.4/../../../../x86_64-pc-linux-gnu/bin/ld:
</span><br>
<span class="quotelev1">&gt; skipping incompatible /opt/openmpi-1.4.2/lib/libmpi_cxx.so when
</span><br>
<span class="quotelev1">&gt; searching for -lmpi_cxx
</span><br>
<p>This is the key message -- it found libmpi_cxx.so, but the linker deemed it incompatible, so it skipped it.
<br>
<p>How did you configure / build Open MPI?  Did the C++ bindings library somehow get built with incompatible flags as compared to the other OMPI libraries?   E.g., did you supply CFLAGS but not CXXFLAGS to the configure script?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14662.php">Tim Prince: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Previous message:</strong> <a href="14660.php">Trent Creekmore: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>In reply to:</strong> <a href="14658.php">jody: "[OMPI users] link problem on 64bit platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14662.php">Tim Prince: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Reply:</strong> <a href="14662.php">Tim Prince: "Re: [OMPI users] link problem on 64bit platform"</a>
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
