<?
$subject_val = "[OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 17:52:29 2014" -->
<!-- isoreceived="20140401215229" -->
<!-- sent="Tue, 1 Apr 2014 14:52:06 -0700" -->
<!-- isosent="20140401215206" -->
<!-- name="Allan Wu" -->
<!-- email="allwu_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7" -->
<!-- id="CAHT6FhNHNZQ2c7zGzE49gc7pmgbCwZcFT-C-j7LKtF5pQ03KqQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7<br>
<strong>From:</strong> Allan Wu (<em>allwu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-01 17:52:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14441.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="14439.php">Joshua Ladd: "[OMPI devel] Seeking input for an RFC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14459.php">Ralph Castain: "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<li><strong>Reply:</strong> <a href="14459.php">Ralph Castain: "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<li><strong>Maybe reply:</strong> <a href="14478.php">Allan Wu: "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I am trying to run OpenMPI-1.6.5 on a Linux on a system based on ARM Cortex
<br>
A9. The linux system and the hardware is provided by Xilinx Inc., and for
<br>
those who may have related experiences the system is called Zynq, which is
<br>
an embedded SoC system with ARM cores and FPGA fabrics. Xilinx has provided
<br>
cross-compiler for the system, which I used to compile openmpi, and the
<br>
compilation is successful. Here is the configuration script I used for the
<br>
<p>compilation:
<br>
./configure --build=arm-linux-gnueabi --host=armv7-linux-gnueabi  \
<br>
--disable-mpi-f77 --disable-mpi-f90 \
<br>
--disable-mpi-cxx --prefix=`pwd`/install \
<br>
--with-devel-headers --enable-binaries \
<br>
--enable-shared --enable-static \
<br>
--disable-mmap-shmem --disable-posix-shmem --disable-sysv-shmem \
<br>
--disable-dlopen
<br>
<p>For the cross-compiler, I have set the environmental variables &quot;CC&quot; and
<br>
&quot;CXX&quot;.
<br>
<p>When I launch 'mpirun' on the ARM linux, I got the error like this:
<br>
<p>It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_shmem_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[ZC702:01353] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init.c at line 79
<br>
[ZC702:01353] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c
<br>
at line 694
<br>
<p>I have compressed the information from 'ompi-info --all' in the attachment.
<br>
<p>For some more related information, I have been tuning the configuration
<br>
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
I also got a lot of error messages on mca failing to find components, that
<br>
is why I tried disable dlopen.
<br>
<p>I am also looking for suggestions. Basically I want to compile a &quot;clean&quot;
<br>
version of OpenMPI with only the core message passing support, that may
<br>
automatically get rid of a lot of the headache of the cross-compilation.
<br>
When I searched through the documentation, I came to notice the idea of
<br>
Portable Hardware locality (hwloc), however, the idea is completely new to
<br>
me so I do not know if that would be relevant for my case.
<br>
<p>Thank you in advance for your suggestions! Please tell me if I need to
<br>
provide further information of my system.
<br>
<p>Regards,
<br>
<pre>
--
Di Wu (Allan)
VAST Labortory (<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>),
Department of Computer Science, UC Los Angeles
Email: allwu_at_[hidden]

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14440/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14440/log.tar.gz">log.tar.gz</a>
</ul>
<!-- attachment="log.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14441.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="14439.php">Joshua Ladd: "[OMPI devel] Seeking input for an RFC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14459.php">Ralph Castain: "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<li><strong>Reply:</strong> <a href="14459.php">Ralph Castain: "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<li><strong>Maybe reply:</strong> <a href="14478.php">Allan Wu: "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
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
