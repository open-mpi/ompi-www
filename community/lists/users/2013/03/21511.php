<?
$subject_val = "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  7 16:02:01 2013" -->
<!-- isoreceived="20130307210201" -->
<!-- sent="Thu, 7 Mar 2013 21:01:57 +0000" -->
<!-- isosent="20130307210157" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F87B80_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAU_Hgar+y7oaAG7hWsnYAiNCFmMX5onyPPW13-zADR3b3jt4A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-07 16:01:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21512.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21510.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>In reply to:</strong> <a href="21510.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21512.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Reply:</strong> <a href="21512.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 7, 2013, at 1:16 PM, Limin Gu &lt;lgu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; &quot;ldd hello_cxx&quot; gave me some clue, and I found it was linked to some mpich library which was installed under/usr/lib64. When I removed mpich libraries, and recompile, everything includes mpicc and mpirun worked fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't have that problem with eariler openmpi versions like 1.6.x and 1.5.x. I would like to keep mpich libraries on the system, is there any confiure option I can use to make 1.6.4 library link the same as 1.6.3?
</span><br>
<p>This doesn't sound right -- I don't think we changed how linking worked in 1.6.3 and 1.6.4.
<br>
<p>Are you sure that, on that same machine with MPICH installed in /usr/lib64, you're also able to compile/link/use 1.6.3 properly?
<br>
<p>A wild guess: you have some kind of linker configuration that is putting /usr/lib64 ahead of -L-specified paths on the compiler command line.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21512.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21510.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>In reply to:</strong> <a href="21510.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21512.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Reply:</strong> <a href="21512.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
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
