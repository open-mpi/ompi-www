<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 14 07:42:46 2007" -->
<!-- isoreceived="20070914114246" -->
<!-- sent="Fri, 14 Sep 2007 07:42:35 -0400" -->
<!-- isosent="20070914114235" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Two different compilation of openmpi" -->
<!-- id="ea86ce220709140442h41a79263x748886d0e5c546bf_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="89A92242-3B28-4D47-BD8B-C04C8D940154_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-14 07:42:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4013.php">Murat Knecht: "[OMPI users] Segmentation fault when spawning"</a>
<li><strong>Previous message:</strong> <a href="4011.php">Reuti: "Re: [OMPI users] Two different compilation of openmpi"</a>
<li><strong>In reply to:</strong> <a href="4011.php">Reuti: "Re: [OMPI users] Two different compilation of openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, you might want to use this configure option to simplify switching:
<br>
--enable-mpirun-prefix-by-default
<br>
<p>For more details, see: ./configure --help
<br>
<p>On 9/14/07, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 13.09.2007 um 23:29 schrieb Francesco Pietra:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it possible to have two different compilations of openmpi on the
</span><br>
<span class="quotelev2">&gt; &gt; same
</span><br>
<span class="quotelev2">&gt; &gt; machine (dual-opterons, Debian Linux etch)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On that parallel computer sander.MPI (Amber9) and openmpi 1.2.3
</span><br>
<span class="quotelev2">&gt; &gt; have both been
</span><br>
<span class="quotelev2">&gt; &gt; compiled with Intel Fortran 9.1.036.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now, I wish to install DOCK6 on this machine and I am advised that
</span><br>
<span class="quotelev2">&gt; &gt; it should be
</span><br>
<span class="quotelev2">&gt; &gt; better compiled on GNU compilers. As to openmpi I could install the
</span><br>
<span class="quotelev2">&gt; &gt; Debian
</span><br>
<span class="quotelev2">&gt; &gt; package, which is GNU compiled. Are conflicts between the two
</span><br>
<span class="quotelev2">&gt; &gt; installation
</span><br>
<span class="quotelev2">&gt; &gt; foreseeable? Although I don't have experience with DOCK, I suspect
</span><br>
<span class="quotelev2">&gt; &gt; that certain
</span><br>
<span class="quotelev2">&gt; &gt; procedures with DOCK call sander.MPI into play.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I rule out the alternative of compiling Amber9 with GNU compilers,
</span><br>
<span class="quotelev2">&gt; &gt; which will
</span><br>
<span class="quotelev2">&gt; &gt; run slower.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is no problem. Instead of using any prebuilt package, compile
</span><br>
<span class="quotelev1">&gt; and install the two different versions of OMPI on your own, and use
</span><br>
<span class="quotelev1">&gt; two different locations for them, which you can achieve by e.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/my_location_a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and a different location of course for the other compilation. If you
</span><br>
<span class="quotelev1">&gt; now compile your application, be sure to get the correct one of mpicc
</span><br>
<span class="quotelev1">&gt; etc. in /opt/my_location_a/bin and also use this specific mpiexec
</span><br>
<span class="quotelev1">&gt; therein later on by adjusting the $PATH accordingly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As we have only two different versions, we don't use the mentioned
</span><br>
<span class="quotelev1">&gt; &quot;modules&quot; package for now, but hardcode the appropriate PATH in the
</span><br>
<span class="quotelev1">&gt; jobscript for our queuing system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- Reuti
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
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4013.php">Murat Knecht: "[OMPI users] Segmentation fault when spawning"</a>
<li><strong>Previous message:</strong> <a href="4011.php">Reuti: "Re: [OMPI users] Two different compilation of openmpi"</a>
<li><strong>In reply to:</strong> <a href="4011.php">Reuti: "Re: [OMPI users] Two different compilation of openmpi"</a>
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
