<?
$subject_val = "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 19:16:13 2012" -->
<!-- isoreceived="20121009231613" -->
<!-- sent="Tue, 9 Oct 2012 19:16:08 -0400" -->
<!-- isosent="20121009231608" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined reference to `__intel_sse2_strlen'" -->
<!-- id="1AF1D7C6-1470-44C4-AF74-58FD05592F7C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAACvdx0FxeFuhG_G8s+Za2=Pv9b=sG6rULf8A=-HuK5-pGPeTw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] undefined reference to `__intel_sse2_strlen'<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 19:16:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20441.php">Z.Y.Qiu: "[OMPI users] An err in parallel computing"</a>
<li><strong>Previous message:</strong> <a href="20439.php">Thomas Evangelidis: "[OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<li><strong>In reply to:</strong> <a href="20439.php">Thomas Evangelidis: "[OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20445.php">Matthias Jurenz: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send all the info listed <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ?
<br>
<p><p>On Oct 9, 2012, at 5:25 PM, Thomas Evangelidis wrote:
<br>
<p><span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to compile openmpi 1.6.2 on Fedora 17 64-bit using the intel compilers (icc and ifort version 13.0.0) but I am getting an error which I cannot trace back. These are the steps I followed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc F77=ifort
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; ........
</span><br>
<span class="quotelev1">&gt; ........
</span><br>
<span class="quotelev1">&gt; util.o: In function `guess_strlen':
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:45: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:61: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; util.o:/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46: more undefined references to `__intel_sse2_strlen' follow
</span><br>
<span class="quotelev1">&gt; util.o: In function `vt_vsnprintf':
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:255: undefined reference to `__intel_sse2_strcpy'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:257: undefined reference to `_intel_fast_memcpy'
</span><br>
<span class="quotelev1">&gt; util.o: In function `guess_strlen':
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:61: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; util.o:/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46: more undefined references to `__intel_sse2_strlen' follow
</span><br>
<span class="quotelev1">&gt; util.o: In function `vt_vsnprintf':
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:255: undefined reference to `__intel_sse2_strcpy'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:257: undefined reference to `_intel_fast_memcpy'
</span><br>
<span class="quotelev1">&gt; util.o: In function `guess_strlen':
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:61: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; util.o:/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46: more undefined references to `__intel_sse2_strlen' follow
</span><br>
<span class="quotelev1">&gt; util.o: In function `vt_strdup':
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:278: undefined reference to `__intel_sse2_strcpy'
</span><br>
<span class="quotelev1">&gt; util.o: In function `vt_strtrim':
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:286: undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:293: undefined reference to `_intel_fast_memcpy'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[7]: *** [opari] Error 1
</span><br>
<span class="quotelev1">&gt; make[7]: Leaving directory `/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool'
</span><br>
<span class="quotelev1">&gt; make[6]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory `/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari'
</span><br>
<span class="quotelev1">&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/thomas/Programs/openmpi-1.6.2/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone please help me fix it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20441.php">Z.Y.Qiu: "[OMPI users] An err in parallel computing"</a>
<li><strong>Previous message:</strong> <a href="20439.php">Thomas Evangelidis: "[OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<li><strong>In reply to:</strong> <a href="20439.php">Thomas Evangelidis: "[OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20445.php">Matthias Jurenz: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
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
