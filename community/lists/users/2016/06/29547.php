<?
$subject_val = "Re: [OMPI users] Shared Libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 24 19:31:18 2016" -->
<!-- isoreceived="20160624233118" -->
<!-- sent="Fri, 24 Jun 2016 23:31:06 +0000" -->
<!-- isosent="20160624233106" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Libraries" -->
<!-- id="AB60EFA9-5ADB-4BE7-82C7-7DB67F395EA5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B726C97988654ECCA91733D10718F4FC_at_Euler" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Libraries<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-24 19:31:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29548.php">Gilles Gouaillardet: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Previous message:</strong> <a href="29546.php">Richard C. Wagner: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>In reply to:</strong> <a href="29546.php">Richard C. Wagner: "Re: [OMPI users] Shared Libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29548.php">Gilles Gouaillardet: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Reply:</strong> <a href="29548.php">Gilles Gouaillardet: "Re: [OMPI users] Shared Libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 24, 2016, at 4:39 PM, Richard C. Wagner &lt;drsavage_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I try to compile the library file in 32-bit mode.  The first command is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc -fPIC -m32 -c libtest.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then the second is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc -shared -m32 -o libmpi.so libtest.o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see below, compiling the object file works.  But the second command, linking libtest.o and writing the shared library, fails.  Can you see what's wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rwagner_at_tuxcfd10:~/engrhome/CSU/LibTests$ mpicc -fPIC -m32 -c libtest.c
</span><br>
<span class="quotelev1">&gt; rwagner_at_tuxcfd10:~/engrhome/CSU/LibTests$ mpicc -shared -m32 -o libmpi.so libtest.o
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: skipping incompatible /usr//lib/libmpi.so when searching for -lmpi
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: skipping incompatible /usr/lib/openmpi/lib/libmpi.so when searching for -lmpi
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: skipping incompatible /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../libmpi.so when searching for -lmpi
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: skipping incompatible //usr/lib/libmpi.so when searching for -lmpi
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lmpi
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lhwloc
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And for added info, these two commands succeed when I don't use the -m32 switch.  The library comes out as you'd expect it to, but as a 64-bit version.
</span><br>
<p>That means that the Open MPI installed in /usr/lib and /usr/lib/openmpi is a 64 bit version.
<br>
<p>You need to install a 32 bit version of Open MPI, and compile/link against that one.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29548.php">Gilles Gouaillardet: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Previous message:</strong> <a href="29546.php">Richard C. Wagner: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>In reply to:</strong> <a href="29546.php">Richard C. Wagner: "Re: [OMPI users] Shared Libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29548.php">Gilles Gouaillardet: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Reply:</strong> <a href="29548.php">Gilles Gouaillardet: "Re: [OMPI users] Shared Libraries"</a>
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
