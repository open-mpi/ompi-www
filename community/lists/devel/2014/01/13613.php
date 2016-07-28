<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 00:27:49 2014" -->
<!-- isoreceived="20140109052749" -->
<!-- sent="Wed, 8 Jan 2014 21:27:46 -0800" -->
<!-- isosent="20140109052746" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86" -->
<!-- id="CAAvDA163oZP0-gW3RPsDwF-4+Mb2wjMY7ki6n-rYMogdvjRhVQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA14ozC+Ot6ZBhi4wyge5=O8Bi9qwZbVjH-G_jctXXMBB3w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 00:27:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13614.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13612.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13608.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13624.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>Reply:</strong> <a href="13624.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>When rebuilding with --enable-debug and the original gcc-4.0.0 the SEGV
<br>
returns.
<br>
So, the ompi-1.4 in the LD_LIBRARY_PATH was NOT the cause.
<br>
<p>Below is a backtrace from gdb which includes line numbers.
<br>
The SEGV is in strlen() which suggests a string which lacks
<br>
null-termination.
<br>
<p>The initial (siginfo) part of the backtrace provided by Open MPI reads:
<br>
[pcp-j-6:02741] *** Process received signal ***
<br>
[pcp-j-6:02741] Signal: Segmentation fault (11)
<br>
[pcp-j-6:02741] Signal code: Address not mapped (1)
<br>
[pcp-j-6:02741] Failing at address: 0x63757274
<br>
<p>-Paul
<br>
<p>#0  0x00a5dbb3 in strlen () from /lib/libc.so.6
<br>
#1  0x00a5d8f5 in strdup () from /lib/libc.so.6
<br>
#2  0x00534a3b in mca_base_var_enum_create (name=0x349488
<br>
&quot;coll_ml_enable_fragmentation_enum&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;values=0x34e014, enumerator=0xbfe03dd0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/opal/mca/base/mca_base_var_enum.c:133
<br>
#3  0x0033c328 in mca_coll_ml_register_params ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/ompi/mca/coll/ml/coll_ml_mca.c:257
<br>
#4  0x00537585 in register_components (project_name=0x2056f3 &quot;ompi&quot;,
<br>
type_name=0x2056f8 &quot;coll&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;output_id=-1, src=0xbfe03e7c, dest=0x21bd10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/opal/mca/base/mca_base_components_register.c:116
<br>
#5  0x0053736a in mca_base_framework_components_register
<br>
(framework=0x21bce0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;flags=MCA_BASE_REGISTER_DEFAULT)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/opal/mca/base/mca_base_components_register.c:67
<br>
#6  0x00537ec1 in mca_base_framework_register (framework=0x21bce0,
<br>
flags=MCA_BASE_REGISTER_DEFAULT)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/opal/mca/base/mca_base_framework.c:107
<br>
#7  0x00537f6f in mca_base_framework_open (framework=0x21bce0,
<br>
flags=MCA_BASE_OPEN_DEFAULT)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/opal/mca/base/mca_base_framework.c:131
<br>
#8  0x00152831 in ompi_mpi_init (argc=1, argv=0xbfe04114, requested=0,
<br>
provided=0xbfe0400c)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/ompi/runtime/ompi_mpi_init.c:555
<br>
#9  0x00186ce1 in PMPI_Init (argc=0xbfe04090, argv=0xbfe04094) at pinit.c:84
<br>
#10 0x080486e9 in main (argc=1, argv=0xbfe04114) at ring_c.c:19
<br>
<p><p><p>On Wed, Jan 8, 2014 at 8:45 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Only takes &lt;30 seconds of typing to start the test and I get email when it
</span><br>
<span class="quotelev1">&gt; is done.
</span><br>
<span class="quotelev1">&gt; Typing these emails takes more of my time than the actual testing does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 8, 2014 at 8:35 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you have the time, it might be worth nailing it down. However, I'm
</span><br>
<span class="quotelev2">&gt;&gt; mindful of all the things you need to do, so please only if you have the
</span><br>
<span class="quotelev2">&gt;&gt; time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 8, 2014, at 8:23 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Building with gcc-4.1.2 fixed the problem for me.  I also removed an old
</span><br>
<span class="quotelev2">&gt;&gt; install of ompi-1.4 that was in LD_LIBRARY_PATH at build time and might
</span><br>
<span class="quotelev2">&gt;&gt; have been a contributing factor.  If I'd known earlier that it was there, I
</span><br>
<span class="quotelev2">&gt;&gt; wouldn't have reported the problem without first removing it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can build again with gcc-4.0.0 and --enable-debug if you are still
</span><br>
<span class="quotelev2">&gt;&gt; interested in trying to get a line number.  This would also determine if
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH was the true culprit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul [Sent from my phone]
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 8, 2014 8:02 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Most likely problem is a bad backing store site - any chance you could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; give me a line number from this? There are a lot of calls to register
</span><br>
<span class="quotelev3">&gt;&gt;&gt; params in that code and I'd need some help in figuring out which one wasn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; right.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 8, 2014, at 6:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am still testing the current 1.7.4rc tarball on my various systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  The latest failure (shown below) is a SEGV somewhere below MPI_Init on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; old, but otherwise fairly normal, Linux/x86 (32-bit) system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/bin/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 1 examples/ring_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] Failing at address: 0x6c6c6f63
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] [ 0] [0xbe4440]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_var_enum_create+0x15d)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2b11ed]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_register_params+0x639)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x440909]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_components_register+0x14e)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2b2cce]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_register+0x1b5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2b32a5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_open+0x4e)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2b333e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libmpi.so.1(ompi_mpi_init+0x53d)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0xaf359d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libmpi.so.1(MPI_Init+0x13d)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0xb10d6d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] [ 8] examples/ring_c [0x80486e9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] [ 9] /lib/libc.so.6(__libc_start_main+0xdc) [0x125ebc]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] [10] examples/ring_c [0x8048631]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29031] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 29031 on node pcp-j-6 exited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The failure shown is for a singleton run, but np=2 fails as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; System info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ uname -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux pcp-j-6 2.6.18-238.1.1.el5PAE #1 SMP Tue Jan 18 19:28:42 EST 2011
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i686 athlon i386 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ gcc --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc (GCC) 4.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright (C) 2005 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is free software; see the source for copying conditions.  There is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NO
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PURPOSE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only configure argument used was --prefix.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was going to attach output from &quot;ompi_info --all&quot;, but it SEGV's too!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ompi_info --all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29092] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29092] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29092] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29092] Failing at address: 0x6c6c6f63
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29092] [ 0] [0xd8a440]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29092] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_var_enum_create+0x15d)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2db1ed]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29092] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_register_params+0x639)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x48d909]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29092] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_components_register+0x14e)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2dccce]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29092] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_register+0x1b5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2dd2a5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29092] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(opal_info_register_project_frameworks+0x57)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2b83d7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29092] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libmpi.so.1(ompi_info_register_framework_params+0x81)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0xa69251]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29092] [ 7] ompi_info(main+0x2ba) [0x8049a2a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29092] [ 8] /lib/libc.so.6(__libc_start_main+0xdc) [0x125ebc]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-6:29092] [ 9] ompi_info [0x80496e1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [pcp-j-6:29092] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will try again with a newer gcc and report back.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13613/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13614.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13612.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13608.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13624.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>Reply:</strong> <a href="13624.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
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
