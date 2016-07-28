<?
$subject_val = "Re: [OMPI users] undefined symbol error when built as a shared library";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 08:06:42 2009" -->
<!-- isoreceived="20090910120642" -->
<!-- sent="Thu, 10 Sep 2009 08:06:37 -0400" -->
<!-- isosent="20090910120637" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined symbol error when built as a shared library" -->
<!-- id="6C294AF1-003F-447A-B01A-2BABCB3661C9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AA8A9AC.6030100_at_biggjapan.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-10 08:06:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10606.php">Eugene Loh: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<li><strong>Previous message:</strong> <a href="10604.php">Mallikarjuna Shastry: "[OMPI users] open mpi 1.3 with blcr"</a>
<li><strong>In reply to:</strong> <a href="10602.php">Ashika Umanga Umagiliya: "[OMPI users] undefined symbol error when built as a shared library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10610.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<li><strong>Reply:</strong> <a href="10610.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm guessing that this has to do with deep, dark voodoo involved with  
<br>
the run time linker.
<br>
<p>Can you try configuring/building Open MPI with --disable-dlopen  
<br>
configure option, and rebuilding your libParallel.so against the new  
<br>
libmpi.so?
<br>
<p>See if that fixes the problem for you.  If it does, I can explain in  
<br>
more detail (if you care).
<br>
<p><p>On Sep 10, 2009, at 3:24 AM, Ashika Umanga Umagiliya wrote:
<br>
<p><span class="quotelev1">&gt; Greetings all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My parallel application is build as a shared library (libParallel.so).
</span><br>
<span class="quotelev1">&gt; (I use Debian Lenny 64bit).
</span><br>
<span class="quotelev1">&gt;  A webservice is used to dynamically load libParallel.so and inturn
</span><br>
<span class="quotelev1">&gt; execute the parallel process .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But during runtime I get the error :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; webservicestub: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_paffinity_linux.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; mca_base_param_reg_int
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which I cannot figure out.I followed every 'ldd' and 'nm' seems
</span><br>
<span class="quotelev1">&gt; everything is fine.
</span><br>
<span class="quotelev1">&gt; So I compiled and tested my parallel code as an executable and then it
</span><br>
<span class="quotelev1">&gt; worked fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What could be the reason for this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; umanga
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10606.php">Eugene Loh: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<li><strong>Previous message:</strong> <a href="10604.php">Mallikarjuna Shastry: "[OMPI users] open mpi 1.3 with blcr"</a>
<li><strong>In reply to:</strong> <a href="10602.php">Ashika Umanga Umagiliya: "[OMPI users] undefined symbol error when built as a shared library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10610.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<li><strong>Reply:</strong> <a href="10610.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
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
