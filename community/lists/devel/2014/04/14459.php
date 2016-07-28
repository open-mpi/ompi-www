<?
$subject_val = "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 00:02:19 2014" -->
<!-- isoreceived="20140404040219" -->
<!-- sent="Thu, 3 Apr 2014 21:02:11 -0700" -->
<!-- isosent="20140404040211" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7" -->
<!-- id="2AA45806-D8DF-4915-98A1-4B4ECDCD83C7_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAHT6FhNHNZQ2c7zGzE49gc7pmgbCwZcFT-C-j7LKtF5pQ03KqQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-04 00:02:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14460.php">Ralph Castain: "[OMPI devel] V1.8 Coverity scan results"</a>
<li><strong>Previous message:</strong> <a href="14458.php">Hjelm, Nathan T: "Re: [OMPI devel] cleanup unused btl parameters"</a>
<li><strong>In reply to:</strong> <a href="14440.php">Allan Wu: "[OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14464.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled	openmpi-1.6.5 for armv7"</a>
<li><strong>Reply:</strong> <a href="14464.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled	openmpi-1.6.5 for armv7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid the current system will refuse to run without any shmem components. Even if you remove the error check for that situation, you may hit other problems where the system is expecting that framework to perform some function - not having an active module could cause an issue at that point.
<br>
<p>Since you aren't going to use it anyway, does it really matter that it exists? Or is the problem that none of the shmem components can build or run in that environment? If so, then we can take a look at what might be involved in completely disabling it.
<br>
<p>I'm afraid that hwloc isn't relevant here - doesn't really have anything to do with the shmem situation.
<br>
<p>On Apr 1, 2014, at 2:52 PM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run OpenMPI-1.6.5 on a Linux on a system based on ARM Cortex A9. The linux system and the hardware is provided by Xilinx Inc., and for those who may have related experiences the system is called Zynq, which is an embedded SoC system with ARM cores and FPGA fabrics. Xilinx has provided cross-compiler for the system, which I used to compile openmpi, and the compilation is successful. Here is the configuration script I used for the 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compilation:
</span><br>
<span class="quotelev1">&gt; ./configure --build=arm-linux-gnueabi --host=armv7-linux-gnueabi  \
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f77 --disable-mpi-f90 \
</span><br>
<span class="quotelev1">&gt; --disable-mpi-cxx --prefix=`pwd`/install \
</span><br>
<span class="quotelev1">&gt; --with-devel-headers --enable-binaries \
</span><br>
<span class="quotelev1">&gt; --enable-shared --enable-static \
</span><br>
<span class="quotelev1">&gt; --disable-mmap-shmem --disable-posix-shmem --disable-sysv-shmem \
</span><br>
<span class="quotelev1">&gt; --disable-dlopen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the cross-compiler, I have set the environmental variables &quot;CC&quot; and &quot;CXX&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I launch 'mpirun' on the ARM linux, I got the error like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [ZC702:01353] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt; [ZC702:01353] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have compressed the information from 'ompi-info --all' in the attachment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For some more related information, I have been tuning the configuration settings for a while, and I am afraid some of them may not be quite appropriate. My general goal is to enable message passing in my system of several such chips connected via Ethernet. So I will not launch more than one process on any single machine. That's why I wanted to disable the shared memory support. Although that doesn't change the outcome for me.
</span><br>
<span class="quotelev1">&gt; I also got a lot of error messages on mca failing to find components, that is why I tried disable dlopen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am also looking for suggestions. Basically I want to compile a &quot;clean&quot; version of OpenMPI with only the core message passing support, that may automatically get rid of a lot of the headache of the cross-compilation. 
</span><br>
<span class="quotelev1">&gt; When I searched through the documentation, I came to notice the idea of Portable Hardware locality (hwloc), however, the idea is completely new to me so I do not know if that would be relevant for my case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you in advance for your suggestions! Please tell me if I need to provide further information of my system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Di Wu (Allan)
</span><br>
<span class="quotelev1">&gt; VAST Labortory (<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>), 
</span><br>
<span class="quotelev1">&gt; Department of Computer Science, UC Los Angeles
</span><br>
<span class="quotelev1">&gt; Email: allwu_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;log.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14459/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14460.php">Ralph Castain: "[OMPI devel] V1.8 Coverity scan results"</a>
<li><strong>Previous message:</strong> <a href="14458.php">Hjelm, Nathan T: "Re: [OMPI devel] cleanup unused btl parameters"</a>
<li><strong>In reply to:</strong> <a href="14440.php">Allan Wu: "[OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14464.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled	openmpi-1.6.5 for armv7"</a>
<li><strong>Reply:</strong> <a href="14464.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled	openmpi-1.6.5 for armv7"</a>
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
