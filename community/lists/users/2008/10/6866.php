<?
$subject_val = "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 13:24:53 2008" -->
<!-- isoreceived="20081006172453" -->
<!-- sent="Mon, 06 Oct 2008 12:24:48 -0500" -->
<!-- isosent="20081006172448" -->
<!-- name="Ray Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPi with SunStudio compilers" -->
<!-- id="48EA49E0.1040300_at_aem.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081006145859.GE24605_at_sun.com" -->
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
<strong>From:</strong> Ray Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-06 13:24:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6867.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="6865.php">Jeff Squyres: "Re: [OMPI users] does openmpi have C++ bindings?"</a>
<li><strong>In reply to:</strong> <a href="6864.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6908.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Reply:</strong> <a href="6908.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan Mallove wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Now I get farther along but the build fails at (small excerpt)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mutex.c:(.text+0x30): multiple definition of `opal_atomic_cmpset_32'
</span><br>
<span class="quotelev2">&gt;&gt; asm/.libs/libasm.a(asm.o):asm.c:(.text+0x30): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; threads/.libs/mutex.o: In function `opal_atomic_cmpset_64':
</span><br>
<span class="quotelev2">&gt;&gt; mutex.c:(.text+0x50): multiple definition of `opal_atomic_cmpset_64'
</span><br>
<span class="quotelev2">&gt;&gt; asm/.libs/libasm.a(asm.o):asm.c:(.text+0x50): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [libopen-pal.la] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/muno/OpenMPI/SunStudio/openmpi-1.2.7/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/muno/OpenMPI/SunStudio/openmpi-1.2.7/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I based the configure on what was found in the FAQ here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps this is much more specific to our platform/OS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The environment is AMD Opteron, Barcelona running Centos 5
</span><br>
<span class="quotelev2">&gt;&gt; (Rocks 5.03) with SunStudio 12 compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately I haven't seen the above issue, so I don't
</span><br>
<span class="quotelev1">&gt; have a workaround to propose. There are some issues that
</span><br>
<span class="quotelev1">&gt; have been fixed with GCC-style inline assembly in the latest
</span><br>
<span class="quotelev1">&gt; Sun Studio Express build. Could you try it out?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://developers.sun.com/sunstudio/downloads/express/index.jsp">http://developers.sun.com/sunstudio/downloads/express/index.jsp</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Looks like it dies at the exact same spot. I have the C++ failure as
<br>
well (supplied ld does not work).
<br>
<p><pre>
-- 
 Ray Muno                   <a href="http://www.aem.umn.edu/people/staff/muno">http://www.aem.umn.edu/people/staff/muno</a>
 University of Minnesota                   e-mail:   muno_at_[hidden]
 Aerospace Engineering and Mechanics        Phone:     (612) 625-9531
 110 Union St. S.E.                           FAX:     (612) 626-1558
 Minneapolis, Mn 55455	
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6867.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="6865.php">Jeff Squyres: "Re: [OMPI users] does openmpi have C++ bindings?"</a>
<li><strong>In reply to:</strong> <a href="6864.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6908.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Reply:</strong> <a href="6908.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
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
