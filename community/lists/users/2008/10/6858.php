<?
$subject_val = "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  4 12:21:36 2008" -->
<!-- isoreceived="20081004162136" -->
<!-- sent="Sat, 04 Oct 2008 11:21:27 -0500" -->
<!-- isosent="20081004162127" -->
<!-- name="Raymond Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPi with SunStudio compilers" -->
<!-- id="48E79807.1080707_at_aem.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48E788E2.9060105_at_aem.umn.edu" -->
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
<strong>From:</strong> Raymond Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-04 12:21:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6859.php">Shafagh Jafer: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Previous message:</strong> <a href="6857.php">Raymond Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>In reply to:</strong> <a href="6857.php">Raymond Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6864.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Reply:</strong> <a href="6864.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Raymond Muno wrote:
<br>
<span class="quotelev1">&gt; Raymond Muno wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We are implementing a new cluster that is InfiniBand based.  I am 
</span><br>
<span class="quotelev2">&gt;&gt; working on getting OpenMPI built for our various compile 
</span><br>
<span class="quotelev2">&gt;&gt; environments. So far it is working for PGI 7.2 and PathScale 3.1.  I 
</span><br>
<span class="quotelev2">&gt;&gt; found some workarounds for issues with the Pathscale compilers (seg 
</span><br>
<span class="quotelev2">&gt;&gt; faults) in the OpenMPI FAQ.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I try to build with SunStudio, I cannot even get past the 
</span><br>
<span class="quotelev2">&gt;&gt; configure stage. It dies in th estage that checks for C++.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the problem is with SunStudio itself. Even a simple CC 
</span><br>
<span class="quotelev1">&gt; program fails to compile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/libm.so: file not recognized: File format not recognized
</span><br>
OK, I took care of the linker issue fro C++ as recommended on Suns 
<br>
support site (replace Sun supplied ld with /usr/bin/ld)
<br>
<p>Now I get farther along but the build fails at (small excerpt)
<br>
<p>mutex.c:(.text+0x30): multiple definition of `opal_atomic_cmpset_32'
<br>
asm/.libs/libasm.a(asm.o):asm.c:(.text+0x30): first defined here
<br>
threads/.libs/mutex.o: In function `opal_atomic_cmpset_64':
<br>
mutex.c:(.text+0x50): multiple definition of `opal_atomic_cmpset_64'
<br>
asm/.libs/libasm.a(asm.o):asm.c:(.text+0x50): first defined here
<br>
make[2]: *** [libopen-pal.la] Error 1
<br>
make[2]: Leaving directory `/home/muno/OpenMPI/SunStudio/openmpi-1.2.7/opal'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/muno/OpenMPI/SunStudio/openmpi-1.2.7/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>I based the configure on what was found in the FAQ here.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a>
<br>
<p>Perhaps this is much more specific to our platform/OS.
<br>
<p>The environment is AMD Opteron, Barcelona running Centos 5 (Rocks 5.03) 
<br>
with SunStudio 12 compilers.
<br>
<p>Does anyone have any insight as to how to successfully build OpenMPI for 
<br>
this OS/compiler selection?  As I said in the first post, we have it 
<br>
built for Pathscale 3.1 and PGI 7.2. 
<br>
<p>-Ray Muno
<br>
&nbsp;University of Minnesota, Aerospace Engineering
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6859.php">Shafagh Jafer: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Previous message:</strong> <a href="6857.php">Raymond Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>In reply to:</strong> <a href="6857.php">Raymond Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6864.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Reply:</strong> <a href="6864.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
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
