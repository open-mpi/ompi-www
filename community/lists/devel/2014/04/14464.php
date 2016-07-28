<?
$subject_val = "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled	openmpi-1.6.5 for armv7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 18:29:56 2014" -->
<!-- isoreceived="20140407222956" -->
<!-- sent="Mon, 7 Apr 2014 22:29:54 +0000" -->
<!-- isosent="20140407222954" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled	openmpi-1.6.5 for armv7" -->
<!-- id="84E12457-CFA2-45DA-8F00-8DE6104894D1_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2AA45806-D8DF-4915-98A1-4B4ECDCD83C7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled	openmpi-1.6.5 for armv7<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 18:29:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14465.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Previous message:</strong> <a href="14463.php">Jeff Squyres (jsquyres): "[OMPI devel] Check for show_help errors: contrib/check-help-strings.pl"</a>
<li><strong>In reply to:</strong> <a href="14459.php">Ralph Castain: "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14478.php">Allan Wu: "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also -- could you upgrade to Open MPI 1.8?  It was released last week, and should be much more ARM-friendly than Open MPI 1.6.x.
<br>
<p>Also, I see some extra configure options.  I suggest the following:
<br>
<p># I assume your --build and --host options are correct
<br>
# --disable-mpi-f77/f90 changed to --disable-mpi-fortran in 1.8
<br>
# You don't need --with-devel-headers; it's for OMPI developers only
<br>
# You don't need --enable-binaries; it's the default (and always will be)
<br>
# Do you really need *both* enable-static and enable-shared?  Usually one is sufficient
<br>
# --enable-static will automatically invoke --disable-dlopen
<br>
./configure --build=arm-linux-gnueabi --host=armv7-linux-gnueabi  \
<br>
--disable-mpi-fortran \
<br>
--disable-mpi-cxx --prefix=`pwd`/install \
<br>
--enable-shared --enable-static \
<br>
--disable-mmap-shmem --disable-posix-shmem --disable-sysv-shmem \
<br>
--disable-dlopen
<br>
<p><p><p>On Apr 4, 2014, at 12:02 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm afraid the current system will refuse to run without any shmem components. Even if you remove the error check for that situation, you may hit other problems where the system is expecting that framework to perform some function - not having an active module could cause an issue at that point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since you aren't going to use it anyway, does it really matter that it exists? Or is the problem that none of the shmem components can build or run in that environment? If so, then we can take a look at what might be involved in completely disabling it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid that hwloc isn't relevant here - doesn't really have anything to do with the shmem situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 1, 2014, at 2:52 PM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to run OpenMPI-1.6.5 on a Linux on a system based on ARM Cortex A9. The linux system and the hardware is provided by Xilinx Inc., and for those who may have related experiences the system is called Zynq, which is an embedded SoC system with ARM cores and FPGA fabrics. Xilinx has provided cross-compiler for the system, which I used to compile openmpi, and the compilation is successful. Here is the configuration script I used for the 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; compilation:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --build=arm-linux-gnueabi --host=armv7-linux-gnueabi  \
</span><br>
<span class="quotelev2">&gt;&gt; --disable-mpi-f77 --disable-mpi-f90 \
</span><br>
<span class="quotelev2">&gt;&gt; --disable-mpi-cxx --prefix=`pwd`/install \
</span><br>
<span class="quotelev2">&gt;&gt; --with-devel-headers --enable-binaries \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-shared --enable-static \
</span><br>
<span class="quotelev2">&gt;&gt; --disable-mmap-shmem --disable-posix-shmem --disable-sysv-shmem \
</span><br>
<span class="quotelev2">&gt;&gt; --disable-dlopen
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For the cross-compiler, I have set the environmental variables &quot;CC&quot; and &quot;CXX&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I launch 'mpirun' on the ARM linux, I got the error like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [ZC702:01353] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev2">&gt;&gt; [ZC702:01353] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have compressed the information from 'ompi-info --all' in the attachment.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For some more related information, I have been tuning the configuration settings for a while, and I am afraid some of them may not be quite appropriate. My general goal is to enable message passing in my system of several such chips connected via Ethernet. So I will not launch more than one process on any single machine. That's why I wanted to disable the shared memory support. Although that doesn't change the outcome for me.
</span><br>
<span class="quotelev2">&gt;&gt; I also got a lot of error messages on mca failing to find components, that is why I tried disable dlopen.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am also looking for suggestions. Basically I want to compile a &quot;clean&quot; version of OpenMPI with only the core message passing support, that may automatically get rid of a lot of the headache of the cross-compilation. 
</span><br>
<span class="quotelev2">&gt;&gt; When I searched through the documentation, I came to notice the idea of Portable Hardware locality (hwloc), however, the idea is completely new to me so I do not know if that would be relevant for my case.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance for your suggestions! Please tell me if I need to provide further information of my system.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Di Wu (Allan)
</span><br>
<span class="quotelev2">&gt;&gt; VAST Labortory (<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>), 
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science, UC Los Angeles
</span><br>
<span class="quotelev2">&gt;&gt; Email: allwu_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;log.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14459.php">http://www.open-mpi.org/community/lists/devel/2014/04/14459.php</a>
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
<li><strong>Next message:</strong> <a href="14465.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Previous message:</strong> <a href="14463.php">Jeff Squyres (jsquyres): "[OMPI devel] Check for show_help errors: contrib/check-help-strings.pl"</a>
<li><strong>In reply to:</strong> <a href="14459.php">Ralph Castain: "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14478.php">Allan Wu: "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
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
