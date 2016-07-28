<?
$subject_val = "Re: [OMPI users] undefined symbol error when built as a shared library";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 21:42:36 2009" -->
<!-- isoreceived="20090911014236" -->
<!-- sent="Fri, 11 Sep 2009 10:42:25 +0900" -->
<!-- isosent="20090911014225" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined symbol error when built as a shared library" -->
<!-- id="4AA9AB01.5070702_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6C294AF1-003F-447A-B01A-2BABCB3661C9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] undefined symbol error when built as a shared library<br>
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-10 21:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10611.php">Ashika Umanga Umagiliya: "[OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10609.php">Reuti: "Re: [OMPI users] Disable use of Torque at run-time"</a>
<li><strong>In reply to:</strong> <a href="10605.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10613.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<li><strong>Reply:</strong> <a href="10613.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Jeff,
<br>
<p>Thanks alot.
<br>
That fixed the problem !
<br>
You are indeed a voodoo master... could you explain the spell behind 
<br>
your magic :)
<br>
<p>Regards,
<br>
umanga
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm guessing that this has to do with deep, dark voodoo involved with 
</span><br>
<span class="quotelev1">&gt; the run time linker.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try configuring/building Open MPI with --disable-dlopen 
</span><br>
<span class="quotelev1">&gt; configure option, and rebuilding your libParallel.so against the new 
</span><br>
<span class="quotelev1">&gt; libmpi.so?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See if that fixes the problem for you.  If it does, I can explain in 
</span><br>
<span class="quotelev1">&gt; more detail (if you care).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 10, 2009, at 3:24 AM, Ashika Umanga Umagiliya wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My parallel application is build as a shared library (libParallel.so).
</span><br>
<span class="quotelev2">&gt;&gt; (I use Debian Lenny 64bit).
</span><br>
<span class="quotelev2">&gt;&gt;  A webservice is used to dynamically load libParallel.so and inturn
</span><br>
<span class="quotelev2">&gt;&gt; execute the parallel process .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But during runtime I get the error :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; webservicestub: symbol lookup error:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_paffinity_linux.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_param_reg_int
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which I cannot figure out.I followed every 'ldd' and 'nm' seems
</span><br>
<span class="quotelev2">&gt;&gt; everything is fine.
</span><br>
<span class="quotelev2">&gt;&gt; So I compiled and tested my parallel code as an executable and then it
</span><br>
<span class="quotelev2">&gt;&gt; worked fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What could be the reason for this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; umanga
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10611.php">Ashika Umanga Umagiliya: "[OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10609.php">Reuti: "Re: [OMPI users] Disable use of Torque at run-time"</a>
<li><strong>In reply to:</strong> <a href="10605.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10613.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<li><strong>Reply:</strong> <a href="10613.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
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
