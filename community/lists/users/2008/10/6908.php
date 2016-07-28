<?
$subject_val = "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 15:47:25 2008" -->
<!-- isoreceived="20081008194725" -->
<!-- sent="Wed, 8 Oct 2008 15:47:20 -0400" -->
<!-- isosent="20081008194720" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPi with SunStudio compilers" -->
<!-- id="20081008194719.GF24605_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48EA49E0.1040300_at_aem.umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem building OpenMPi with SunStudio compilers<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 15:47:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6909.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6907.php">Jed Brown: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>In reply to:</strong> <a href="6866.php">Ray Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct/06/2008 12:24:48PM, Ray Muno wrote:
<br>
<span class="quotelev1">&gt; Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Now I get farther along but the build fails at (small excerpt)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mutex.c:(.text+0x30): multiple definition of `opal_atomic_cmpset_32'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; asm/.libs/libasm.a(asm.o):asm.c:(.text+0x30): first defined here
</span><br>
<span class="quotelev3">&gt; &gt;&gt; threads/.libs/mutex.o: In function `opal_atomic_cmpset_64':
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mutex.c:(.text+0x50): multiple definition of `opal_atomic_cmpset_64'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; asm/.libs/libasm.a(asm.o):asm.c:(.text+0x50): first defined here
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: *** [libopen-pal.la] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: Leaving directory `/home/muno/OpenMPI/SunStudio/openmpi-1.2.7/opal'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[1]: Leaving directory `/home/muno/OpenMPI/SunStudio/openmpi-1.2.7/opal'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I based the configure on what was found in the FAQ here.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Perhaps this is much more specific to our platform/OS.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The environment is AMD Opteron, Barcelona running Centos 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (Rocks 5.03) with SunStudio 12 compilers.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately I haven't seen the above issue, so I don't
</span><br>
<span class="quotelev2">&gt; &gt; have a workaround to propose. There are some issues that
</span><br>
<span class="quotelev2">&gt; &gt; have been fixed with GCC-style inline assembly in the latest
</span><br>
<span class="quotelev2">&gt; &gt; Sun Studio Express build. Could you try it out?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://developers.sun.com/sunstudio/downloads/express/index.jsp">http://developers.sun.com/sunstudio/downloads/express/index.jsp</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like it dies at the exact same spot. I have the C++
</span><br>
<span class="quotelev1">&gt; failure as well (supplied ld does not work).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Can you send your full config.log. This will help in an
<br>
attempt to reproduce your issue.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Ray Muno                   <a href="http://www.aem.umn.edu/people/staff/muno">http://www.aem.umn.edu/people/staff/muno</a>
</span><br>
<span class="quotelev1">&gt;  University of Minnesota                   e-mail:   muno_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Aerospace Engineering and Mechanics        Phone:     (612) 625-9531
</span><br>
<span class="quotelev1">&gt;  110 Union St. S.E.                           FAX:     (612) 626-1558
</span><br>
<span class="quotelev1">&gt;  Minneapolis, Mn 55455	
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6909.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6907.php">Jed Brown: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>In reply to:</strong> <a href="6866.php">Ray Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
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
