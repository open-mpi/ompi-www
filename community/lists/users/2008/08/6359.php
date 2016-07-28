<?
$subject_val = "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 07:58:04 2008" -->
<!-- isoreceived="20080816115804" -->
<!-- sent="Sat, 16 Aug 2008 07:57:58 -0400" -->
<!-- isosent="20080816115758" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault (11) Address not mapped (1)" -->
<!-- id="964B7550-95E3-42E2-AB98-2EB393D23D04_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="af6a296b0808151003t39e12b18p2d69a8f60cfbdc82_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault (11) Address not mapped (1)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-16 07:57:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6360.php">Jeff Squyres: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Previous message:</strong> <a href="6358.php">Jeff Squyres: "Re: [OMPI users] Newbie: API usage"</a>
<li><strong>In reply to:</strong> <a href="6348.php">C.Y. Lee: "[OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6402.php">C.Y. Lee: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's not entirely clear that this means that it is a bug in Open MPI  
<br>
-- there's not really enough information here to say where the problem  
<br>
is.  All that is clear is that a seg fault is happening somewhere in  
<br>
LAPACK.
<br>
<p>FWIW, I don't see MPI in the call stack of the segv at all.  This  
<br>
doesn't definitively mean that MPI is not involved, but it does  
<br>
suggest that the bug is elsewhere.  You might want to run this under a  
<br>
debugger or examine the generated corefiles to see exactly what the  
<br>
problem was.
<br>
<p><p>On Aug 15, 2008, at 1:03 PM, C.Y. Lee wrote:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had a similar problem as James described in an earlier message: <a href="http://www.open-mpi.org/community/lists/users/2008/07/6204.php">http://www.open-mpi.org/community/lists/users/2008/07/6204.php</a>
</span><br>
<span class="quotelev1">&gt; While he was able to recompile openmpi to solve the problem, I had  
</span><br>
<span class="quotelev1">&gt; no luck with my RedHat Enterprise 5 system.
</span><br>
<span class="quotelev1">&gt; Here are two other threads with similar issues regarding openmpi on  
</span><br>
<span class="quotelev1">&gt; Ubuntu and OSX which were solved: <a href="https://bugs.launchpad.net/ubuntu/+source/binutils/+bug/234837">https://bugs.launchpad.net/ubuntu/+source/binutils/+bug/234837</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.somewhereville.com/?cat=55">http://www.somewhereville.com/?cat=55</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now...
</span><br>
<span class="quotelev1">&gt; Here is my story:
</span><br>
<span class="quotelev1">&gt; I had Quantum Espresso (QE) running without problem using openmpi.
</span><br>
<span class="quotelev1">&gt; However, when I tried to recompile QE with a recompiled fftw-2.1.5,  
</span><br>
<span class="quotelev1">&gt; it compiled without any error. But when I ran QE, it gave me the  
</span><br>
<span class="quotelev1">&gt; error below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; Failing at address: 0x22071b70
</span><br>
<span class="quotelev1">&gt; [ 0] /lib64/libpthread.so.0 [0x352420de70]
</span><br>
<span class="quotelev1">&gt; [ 1] /usr/lib64/liblapack.so.3(dsytf2_+0xc43) [0x2aaaaac9f5e3]
</span><br>
<span class="quotelev1">&gt; [ 2] /usr/lib64/liblapack.so.3(dsytrf_+0x407) [0x2aaaaaca0567]
</span><br>
<span class="quotelev1">&gt; [ 3] /opt/espresso-4.0.1/bin/pw.x(mix_rho_+0x828) [0x5044b8]
</span><br>
<span class="quotelev1">&gt; [ 4] /opt/espresso-4.0.1/bin/pw.x(electrons_+0xb37) [0x4eae47]
</span><br>
<span class="quotelev1">&gt; [ 5] /opt/espresso-4.0.1/bin/pw.x(MAIN__+0xbf) [0x42b3af]
</span><br>
<span class="quotelev1">&gt; [ 6] /opt/espresso-4.0.1/bin/pw.x(main+0xe) [0x6aad5e]
</span><br>
<span class="quotelev1">&gt; [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x352361d8a4]
</span><br>
<span class="quotelev1">&gt; [ 8] /opt/espresso-4.0.1/bin/pw.x [0x42b239]
</span><br>
<span class="quotelev1">&gt;  *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From what I read from the above links, it seems to be a bug in  
</span><br>
<span class="quotelev1">&gt; openmpi.
</span><br>
<span class="quotelev1">&gt; Please share your thoughts on this, thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CY
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
<li><strong>Next message:</strong> <a href="6360.php">Jeff Squyres: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Previous message:</strong> <a href="6358.php">Jeff Squyres: "Re: [OMPI users] Newbie: API usage"</a>
<li><strong>In reply to:</strong> <a href="6348.php">C.Y. Lee: "[OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6402.php">C.Y. Lee: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
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
