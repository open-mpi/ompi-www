<?
$subject_val = "Re: [OMPI users] MPI Error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 20:20:27 2008" -->
<!-- isoreceived="20081220012027" -->
<!-- sent="Fri, 19 Dec 2008 17:20:22 -0800" -->
<!-- isosent="20081220012022" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Error" -->
<!-- id="B0A42B2B-391B-4660-A48A-E124FC68A970_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="28d120cc0812191534q542806c2ndc1b29cee7eb7b8c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-19 20:20:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7567.php">Asad Ali: "Re: [OMPI users] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="7565.php">Asad Ali: "[OMPI users] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="7565.php">Asad Ali: "[OMPI users] MPI Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7567.php">Asad Ali: "Re: [OMPI users] MPI Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like your code is failing in malloc, which usually means you  
<br>
have some kind of memory error.
<br>
<p>You might want to try running your code through valgrind, or some  
<br>
other memory-checking tool...?
<br>
<p><p>On Dec 19, 2008, at 3:34 PM, Asad Ali wrote:
<br>
<p><span class="quotelev1">&gt; Hi Everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running a code in parallel fashion using Open MPI. The code  
</span><br>
<span class="quotelev1">&gt; compiles successfully but when I
</span><br>
<span class="quotelev1">&gt; run the output executable file I get the following error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0xc491f018
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/lib/openmpi/libopal.so.0 [0x46efd6]
</span><br>
<span class="quotelev1">&gt; [1] func:[0x110440]
</span><br>
<span class="quotelev1">&gt; [2] func:/usr/lib/openmpi/libopal.so.0(_int_malloc+0x241) [0x471d41]
</span><br>
<span class="quotelev1">&gt; [3] func:/usr/lib/openmpi/libopal.so.0(malloc+0x88) [0x474928]
</span><br>
<span class="quotelev1">&gt; [4] func:./lisa09EMRIT-P(generateresiduals+0x5d) [0x805456d]
</span><br>
<span class="quotelev1">&gt; [5] func:./lisa09EMRIT-P(metropolis+0x172) [0x8054992]
</span><br>
<span class="quotelev1">&gt; [6] func:./lisa09EMRIT-P(main+0x37b) [0x805662b]
</span><br>
<span class="quotelev1">&gt; [7] func:/lib/libc.so.6(__libc_start_main+0xe0) [0x2aef70]
</span><br>
<span class="quotelev1">&gt; [8] func:./lisa09EMRIT-P [0x804af21]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please tell me whats the problem here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanking you in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Asad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7567.php">Asad Ali: "Re: [OMPI users] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="7565.php">Asad Ali: "[OMPI users] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="7565.php">Asad Ali: "[OMPI users] MPI Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7567.php">Asad Ali: "Re: [OMPI users] MPI Error"</a>
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
