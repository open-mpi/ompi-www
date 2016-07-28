<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  7 10:55:22 2007" -->
<!-- isoreceived="20070807145522" -->
<!-- sent="Tue, 7 Aug 2007 10:54:16 -0400" -->
<!-- isosent="20070807145416" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NAMD/Charm++ Looking for libmpich" -->
<!-- id="6F2628BD-B404-41FD-A368-EEB2162BE3BC_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200708071643.42243.keller_at_hlrs.de" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-07 10:54:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3828.php">Michael Komm: "[OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>Previous message:</strong> <a href="3826.php">Rainer Keller: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>In reply to:</strong> <a href="3826.php">Rainer Keller: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3833.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That would be right, this is my NAMD_2.6_Source/arch/Linux-amd64- 
<br>
MPI.arch:
<br>
<p>NAMD_ARCH = Linux-amd64
<br>
CHARMARCH = mpi-linux-amd64
<br>
<p>CXX = mpiCC
<br>
#CXXOPTS = -O3 -m64 -fexpensive-optimizations -ffast-math
<br>
CXXOPTS = -fastsse -O3 -Minfo -fPIC
<br>
#CC = gcc
<br>
CC = mpicc
<br>
#COPTS = -O3 -m64 -fexpensive-optimizations -ffast-math
<br>
COPTS = -fastsse -O3 -Minfo -fPIC
<br>
<p>You will also want to edit:
<br>
<p>NAMD_2.6_Source/arch/Linux-amd64.fftw
<br>
<p>If you want it
<br>
<p><p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Aug 7, 2007, at 10:43 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hello dear Brock and Graham,
</span><br>
<span class="quotelev1">&gt; we have had NAMD on our clusters with Open MPI. look for any file
</span><br>
<span class="quotelev1">&gt; conv-mach.sh; for the configuration mpi-linux, or in Your case
</span><br>
<span class="quotelev1">&gt; mpi-linux-amd64 this contains the superfluous -lmpich.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday 07 August 2007 04:11, Graham Jenkins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have done work before to make namd and charm++ work with openMPI I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dont remember what but it is doable.  Something like removing - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lmpich
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was enough i think, maybe a hack to use mpiCC and -fPIC (pgi  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I could look more if you want.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd really appreciate that Brock, thanks!  Where would one remove
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-lmpich&quot; from?   I've had some difficulty finding it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It actually builds OK using:
</span><br>
<span class="quotelev2">&gt;&gt;   ./build charm++ mpi-linux-amd64 ifort \
</span><br>
<span class="quotelev2">&gt;&gt;         --basedir /opt/sw/openmpi-1.2.3-i
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But if barfs when you try to do: &quot;try out a sample program like
</span><br>
<span class="quotelev2">&gt;&gt; tests/charm++/simplearrayhello&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can actually make the test compile by doing:
</span><br>
<span class="quotelev2">&gt;&gt;   cd /opt/sw/openmpi-1.2.3-i/lib ; ln -s libmpi.so.0.0.0 libmpich.so
</span><br>
<span class="quotelev2">&gt;&gt;   .. but I'm not sure that it's legit! :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
</span><br>
<span class="quotelev1">&gt;  High Performance Computing       Tel: ++49 (0)711-685 6 5858
</span><br>
<span class="quotelev1">&gt;    Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
</span><br>
<span class="quotelev1">&gt;  POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
</span><br>
<span class="quotelev1">&gt;  70550 Stuttgart
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3828.php">Michael Komm: "[OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>Previous message:</strong> <a href="3826.php">Rainer Keller: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>In reply to:</strong> <a href="3826.php">Rainer Keller: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3833.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
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
