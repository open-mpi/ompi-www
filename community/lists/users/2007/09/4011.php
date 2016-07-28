<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 14 06:18:44 2007" -->
<!-- isoreceived="20070914101844" -->
<!-- sent="Fri, 14 Sep 2007 12:18:41 +0200" -->
<!-- isosent="20070914101841" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Two different compilation of openmpi" -->
<!-- id="89A92242-3B28-4D47-BD8B-C04C8D940154_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="920018.68838.qm_at_web57606.mail.re1.yahoo.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-14 06:18:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4012.php">Tim Mattox: "Re: [OMPI users] Two different compilation of openmpi"</a>
<li><strong>Previous message:</strong> <a href="4010.php">Amit Kumar Saha: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>In reply to:</strong> <a href="4007.php">Francesco Pietra: "[OMPI users] Two different compilation of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4012.php">Tim Mattox: "Re: [OMPI users] Two different compilation of openmpi"</a>
<li><strong>Reply:</strong> <a href="4012.php">Tim Mattox: "Re: [OMPI users] Two different compilation of openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 13.09.2007 um 23:29 schrieb Francesco Pietra:
<br>
<p><span class="quotelev1">&gt; Is it possible to have two different compilations of openmpi on the  
</span><br>
<span class="quotelev1">&gt; same
</span><br>
<span class="quotelev1">&gt; machine (dual-opterons, Debian Linux etch)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On that parallel computer sander.MPI (Amber9) and openmpi 1.2.3  
</span><br>
<span class="quotelev1">&gt; have both been
</span><br>
<span class="quotelev1">&gt; compiled with Intel Fortran 9.1.036.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I wish to install DOCK6 on this machine and I am advised that  
</span><br>
<span class="quotelev1">&gt; it should be
</span><br>
<span class="quotelev1">&gt; better compiled on GNU compilers. As to openmpi I could install the  
</span><br>
<span class="quotelev1">&gt; Debian
</span><br>
<span class="quotelev1">&gt; package, which is GNU compiled. Are conflicts between the two  
</span><br>
<span class="quotelev1">&gt; installation
</span><br>
<span class="quotelev1">&gt; foreseeable? Although I don't have experience with DOCK, I suspect  
</span><br>
<span class="quotelev1">&gt; that certain
</span><br>
<span class="quotelev1">&gt; procedures with DOCK call sander.MPI into play.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I rule out the alternative of compiling Amber9 with GNU compilers,  
</span><br>
<span class="quotelev1">&gt; which will
</span><br>
<span class="quotelev1">&gt; run slower.
</span><br>
<p>this is no problem. Instead of using any prebuilt package, compile  
<br>
and install the two different versions of OMPI on your own, and use  
<br>
two different locations for them, which you can achieve by e.g.:
<br>
<p>./configure --prefix=/opt/my_location_a
<br>
<p>and a different location of course for the other compilation. If you  
<br>
now compile your application, be sure to get the correct one of mpicc  
<br>
etc. in /opt/my_location_a/bin and also use this specific mpiexec  
<br>
therein later on by adjusting the $PATH accordingly.
<br>
<p>As we have only two different versions, we don't use the mentioned  
<br>
&quot;modules&quot; package for now, but hardcode the appropriate PATH in the  
<br>
jobscript for our queuing system.
<br>
<p>--- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4012.php">Tim Mattox: "Re: [OMPI users] Two different compilation of openmpi"</a>
<li><strong>Previous message:</strong> <a href="4010.php">Amit Kumar Saha: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>In reply to:</strong> <a href="4007.php">Francesco Pietra: "[OMPI users] Two different compilation of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4012.php">Tim Mattox: "Re: [OMPI users] Two different compilation of openmpi"</a>
<li><strong>Reply:</strong> <a href="4012.php">Tim Mattox: "Re: [OMPI users] Two different compilation of openmpi"</a>
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
