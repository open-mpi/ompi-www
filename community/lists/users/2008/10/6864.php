<?
$subject_val = "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 10:59:08 2008" -->
<!-- isoreceived="20081006145908" -->
<!-- sent="Mon, 6 Oct 2008 10:59:02 -0400" -->
<!-- isosent="20081006145902" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPi with SunStudio compilers" -->
<!-- id="20081006145859.GE24605_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48E79807.1080707_at_aem.umn.edu" -->
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
<strong>Date:</strong> 2008-10-06 10:59:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6865.php">Jeff Squyres: "Re: [OMPI users] does openmpi have C++ bindings?"</a>
<li><strong>Previous message:</strong> <a href="6863.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6858.php">Raymond Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6866.php">Ray Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Reply:</strong> <a href="6866.php">Ray Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Oct/04/2008 11:21:27AM, Raymond Muno wrote:
<br>
<span class="quotelev1">&gt; Raymond Muno wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Raymond Muno wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are implementing a new cluster that is InfiniBand based.  I am working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on getting OpenMPI built for our various compile environments. So far it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is working for PGI 7.2 and PathScale 3.1.  I found some workarounds for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issues with the Pathscale compilers (seg faults) in the OpenMPI FAQ.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I try to build with SunStudio, I cannot even get past the configure 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stage. It dies in th estage that checks for C++.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like the problem is with SunStudio itself. Even a simple CC 
</span><br>
<span class="quotelev2">&gt;&gt; program fails to compile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/libm.so: file not recognized: File format not recognized
</span><br>
<span class="quotelev1">&gt; OK, I took care of the linker issue fro C++ as recommended on Suns support 
</span><br>
<span class="quotelev1">&gt; site (replace Sun supplied ld with /usr/bin/ld)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I get farther along but the build fails at (small excerpt)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mutex.c:(.text+0x30): multiple definition of `opal_atomic_cmpset_32'
</span><br>
<span class="quotelev1">&gt; asm/.libs/libasm.a(asm.o):asm.c:(.text+0x30): first defined here
</span><br>
<span class="quotelev1">&gt; threads/.libs/mutex.o: In function `opal_atomic_cmpset_64':
</span><br>
<span class="quotelev1">&gt; mutex.c:(.text+0x50): multiple definition of `opal_atomic_cmpset_64'
</span><br>
<span class="quotelev1">&gt; asm/.libs/libasm.a(asm.o):asm.c:(.text+0x50): first defined here
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libopen-pal.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/muno/OpenMPI/SunStudio/openmpi-1.2.7/opal'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/muno/OpenMPI/SunStudio/openmpi-1.2.7/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I based the configure on what was found in the FAQ here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps this is much more specific to our platform/OS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The environment is AMD Opteron, Barcelona running Centos 5
</span><br>
<span class="quotelev1">&gt; (Rocks 5.03) with SunStudio 12 compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Unfortunately I haven't seen the above issue, so I don't
<br>
have a workaround to propose. There are some issues that
<br>
have been fixed with GCC-style inline assembly in the latest
<br>
Sun Studio Express build. Could you try it out?
<br>
<p>&nbsp;&nbsp;<a href="http://developers.sun.com/sunstudio/downloads/express/index.jsp">http://developers.sun.com/sunstudio/downloads/express/index.jsp</a>
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; Does anyone have any insight as to how to successfully
</span><br>
<span class="quotelev1">&gt; build OpenMPI for this OS/compiler selection?  As I said
</span><br>
<span class="quotelev1">&gt; in the first post, we have it built for Pathscale 3.1 and
</span><br>
<span class="quotelev1">&gt; PGI 7.2. 
</span><br>
<span class="quotelev1">&gt; -Ray Muno
</span><br>
<span class="quotelev1">&gt; University of Minnesota, Aerospace Engineering
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6865.php">Jeff Squyres: "Re: [OMPI users] does openmpi have C++ bindings?"</a>
<li><strong>Previous message:</strong> <a href="6863.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6858.php">Raymond Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6866.php">Ray Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Reply:</strong> <a href="6866.php">Ray Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
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
