<?
$subject_val = "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 18:58:39 2014" -->
<!-- isoreceived="20140408225839" -->
<!-- sent="Tue, 8 Apr 2014 15:58:15 -0700" -->
<!-- isosent="20140408225815" -->
<!-- name="Allan Wu" -->
<!-- email="allwu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7" -->
<!-- id="CAHT6FhMqGZVYiysSWv5ii8539Rvf2f498wPDZtOZyCABr7hiCQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7" -->
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
<strong>From:</strong> Allan Wu (<em>allwu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 18:58:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14479.php">Anthony Alba: "[OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined symbol hcoll_group_destroy_notify"</a>
<li><strong>Previous message:</strong> <a href="14477.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI www repo now at github"</a>
<li><strong>Maybe in reply to:</strong> <a href="14440.php">Allan Wu: "[OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14491.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<li><strong>Reply:</strong> <a href="14491.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Ralph and Jeff!
<br>
<p>After I downloaded the new version (1.8) and recompiled it based on your
<br>
suggestions, it finally works for me, at least for a few helloworld-like
<br>
applications. For future references, here is the configuration script I
<br>
used:
<br>
<p>./configure --build=arm-linux-gnueabi --host=armv7-linux-gnueabi  \
<br>
--disable-mpi-fortran \
<br>
--disable-mpi-cxx \
<br>
--prefix=`pwd`/install \
<br>
--enable-static \
<br>
--disable-dlopen
<br>
<p>As I mentioned in my original post, I disabled the shmem components because
<br>
I suspected the problem could be related to them. I thought since I do not
<br>
need them I can just disable them to see if that helps. I guess the
<br>
previous problem is more related to the specific ARM device than the shared
<br>
memory support.
<br>
<p>Thanks again for the help. I will update if more problems come up.
<br>
<p>Regards,
<br>
Allan
<br>
<p><p>On Apr 7, 2014, at 10:29 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p>Also -- could you upgrade to Open MPI 1.8?  It was released last week, and
<br>
should be much more ARM-friendly than Open MPI 1.6.x.
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
# Do you really need *both* enable-static and enable-shared?  Usually one
<br>
is sufficient
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
<p><span class="quotelev1">&gt; I'm afraid the current system will refuse to run without any shmem
</span><br>
components. Even if you remove the error check for that situation, you may
<br>
hit other problems where the system is expecting that framework to perform
<br>
some function - not having an active module could cause an issue at that
<br>
point.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since you aren't going to use it anyway, does it really matter that it
</span><br>
exists? Or is the problem that none of the shmem components can build or
<br>
run in that environment? If so, then we can take a look at what might be
<br>
involved in completely disabling it.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid that hwloc isn't relevant here - doesn't really have anything
</span><br>
to do with the shmem situation.
<br>
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
<span class="quotelev2">&gt;&gt; I am trying to run OpenMPI-1.6.5 on a Linux on a system based on ARM
</span><br>
Cortex A9. The linux system and the hardware is provided by Xilinx Inc.,
<br>
and for those who may have related experiences the system is called Zynq,
<br>
which is an embedded SoC system with ARM cores and FPGA fabrics. Xilinx has
<br>
provided cross-compiler for the system, which I used to compile openmpi,
<br>
and the compilation is successful. Here is the configuration script I used
<br>
for the
<br>
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
<span class="quotelev2">&gt;&gt; For the cross-compiler, I have set the environmental variables &quot;CC&quot; and
</span><br>
&quot;CXX&quot;.
<br>
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
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------
</span><br>
--------------
<br>
<span class="quotelev2">&gt;&gt; [ZC702:01353] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
runtime/orte_init.c at line 79
<br>
<span class="quotelev2">&gt;&gt; [ZC702:01353] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
orterun.c at line 694
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have compressed the information from 'ompi-info --all' in the
</span><br>
attachment.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For some more related information, I have been tuning the configuration
</span><br>
settings for a while, and I am afraid some of them may not be quite
<br>
appropriate. My general goal is to enable message passing in my system of
<br>
several such chips connected via Ethernet. So I will not launch more than
<br>
one process on any single machine. That's why I wanted to disable the
<br>
shared memory support. Although that doesn't change the outcome for me.
<br>
<span class="quotelev2">&gt;&gt; I also got a lot of error messages on mca failing to find components,
</span><br>
that is why I tried disable dlopen.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am also looking for suggestions. Basically I want to compile a &quot;clean&quot;
</span><br>
version of OpenMPI with only the core message passing support, that may
<br>
automatically get rid of a lot of the headache of the cross-compilation.
<br>
<span class="quotelev2">&gt;&gt; When I searched through the documentation, I came to notice the idea of
</span><br>
Portable Hardware locality (hwloc), however, the idea is completely new to
<br>
me so I do not know if that would be relevant for my case.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance for your suggestions! Please tell me if I need to
</span><br>
provide further information of my system.
<br>
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>
<br>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14459.php">http://www.open-mpi.org/community/lists/devel/2014/04/14459.php</a>
<br>
<p><pre>
--
Di Wu (Allan)
PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
Department of Computer Science, UC Los Angeles
Email: allwu_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14478/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14479.php">Anthony Alba: "[OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined symbol hcoll_group_destroy_notify"</a>
<li><strong>Previous message:</strong> <a href="14477.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI www repo now at github"</a>
<li><strong>Maybe in reply to:</strong> <a href="14440.php">Allan Wu: "[OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14491.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<li><strong>Reply:</strong> <a href="14491.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
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
