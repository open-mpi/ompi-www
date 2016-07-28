<?
$subject_val = "Re: [OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 11 08:16:12 2013" -->
<!-- isoreceived="20130411121612" -->
<!-- sent="Thu, 11 Apr 2013 12:15:56 +0000" -->
<!-- isosent="20130411121556" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC440022CF_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="91BA4133-43E9-41BE-BFC0-5BA62523DD48_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-11 08:15:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21708.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with MPI functions"</a>
<li><strong>Previous message:</strong> <a href="21706.php">Rodrigo G&#243;mez V&#225;zquez: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>In reply to:</strong> <a href="21702.php">Ralph Castain: "Re: [OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, the only memory manager we have will only be active on Linux, not OS X.
<br>
<p>As Ralph says, we no longer have access to such systems to test with -- you might try rolling back to an earlier version of Open MPI that we know did work on Snow Leopard...?
<br>
<p>You might also try compiling with --enable-static --disable-shared; that might give you a better stack trace (sometimes when a segv occurs in an OMPI plugin, you don't get reliable stack traces).  You might also try running through valgrind to see if anything obvious pops out...?
<br>
<p><p>On Apr 10, 2013, at 10:10 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I feel your pain - that's a pretty old system!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I obviously don't have any way to test it, but try configuring OMPI --without-memory-manager and see if that helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 9, 2013, at 9:33 PM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI Pros
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Somehow I am stuck offsite and I have to test/develop an MPI program on a super duper 
</span><br>
<span class="quotelev2">&gt;&gt; 2006 vintage Mac PowerBookPro with Mac OS X 10.6.8 (Snow Leopard).
</span><br>
<span class="quotelev2">&gt;&gt; This is a 32-bit machine with dual core Intel Core Duo processors and 2GB RAM.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, my under-development program using FFTW3 and OMPI 1.6.4 runs
</span><br>
<span class="quotelev2">&gt;&gt; flawlessly on Linux, but I am offsite and I have to use the darn Mac,
</span><br>
<span class="quotelev2">&gt;&gt; where I get all sorts of weird errors out of the blue, which are 
</span><br>
<span class="quotelev2">&gt;&gt; very likely to be associated to the Mac OS X underlying memory management
</span><br>
<span class="quotelev2">&gt;&gt; system.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I say so because the OMPI test programs (connectivity_c.c, etc), which do NOT
</span><br>
<span class="quotelev2">&gt;&gt; allocate memory (other than the MPI internal buffers, if so), run correctly, but once I 
</span><br>
<span class="quotelev2">&gt;&gt; start using dynamic memory arrays, boomer, it breaks (but only on the Mac).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I enclose below one of the error messages, FYI.
</span><br>
<span class="quotelev2">&gt;&gt; [It shows up as a segfault, but the array and buffer boundaries are correct,
</span><br>
<span class="quotelev2">&gt;&gt; and the program runs perfectly on Linux.  RAM is OK also, my batch of test
</span><br>
<span class="quotelev2">&gt;&gt; data is small. No automatic arrays on the code either.]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I read the OMPI FAQ on runtime issues, and a couple of them mention trouble for OMPI 
</span><br>
<span class="quotelev2">&gt;&gt; with the Mac OS X memory management scheme.  However, those FAQ are quite old,
</span><br>
<span class="quotelev2">&gt;&gt; refer to OMPI 1.2 and 1.3 series only, recommend linking to an OMPI library 
</span><br>
<span class="quotelev2">&gt;&gt; that seems to have been phased out (-lopenmpi-malloc), and didn't shed the light
</span><br>
<span class="quotelev2">&gt;&gt; I was hoping for.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, before I give this effort up as not viable, here are a few questions:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are there specific recommendations on how to build OMPI 1.6.4 on Mac OS X 1.6.8?
</span><br>
<span class="quotelev2">&gt;&gt; Are there any additional linker flags that should be used to build OMPI applications under OS X?
</span><br>
<span class="quotelev2">&gt;&gt; Are there any runtime options that should be added to mpiexec to make OMPI programs
</span><br>
<span class="quotelev2">&gt;&gt; that allocate memory dynamically to run correctly on Mac OS X?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ************************ Error message *************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[Macintosh-72:36578] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[Macintosh-72:36578] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[Macintosh-72:36578] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[Macintosh-72:36578] Failing at address: 0x6648000
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[Macintosh-72:36578] [ 0] 2   libSystem.B.dylib                   0x9728c05b _sigtramp + 43
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[Macintosh-72:36578] [ 1] 3   ???                                 0xffffffff 0x0 + 4294967295
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[Macintosh-72:36578] [ 2] 4   wcdp3d                              0x0001be49 main + 1864
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[Macintosh-72:36578] [ 3] 5   wcdp3d                              0x000027ad start + 53
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[Macintosh-72:36578] [ 4] 6   ???                                 0x00000002 0x0 + 2
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[Macintosh-72:36578] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="21708.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with MPI functions"</a>
<li><strong>Previous message:</strong> <a href="21706.php">Rodrigo G&#243;mez V&#225;zquez: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>In reply to:</strong> <a href="21702.php">Ralph Castain: "Re: [OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?"</a>
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
