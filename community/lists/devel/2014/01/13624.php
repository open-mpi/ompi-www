<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 10:26:25 2014" -->
<!-- isoreceived="20140109152625" -->
<!-- sent="Thu, 9 Jan 2014 08:26:24 -0700" -->
<!-- isosent="20140109152624" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86" -->
<!-- id="20140109152624.GC96135_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA163oZP0-gW3RPsDwF-4+Mb2wjMY7ki6n-rYMogdvjRhVQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 10:26:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13625.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13623.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>In reply to:</strong> <a href="13613.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shoot. My bad there. Looks like the enumerator sentinel is missing. Will fix now.
<br>
<p>-Nathan
<br>
<p>On Wed, Jan 08, 2014 at 09:27:46PM -0800, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt;    Ralph,
</span><br>
<span class="quotelev1">&gt;    When rebuilding with --enable-debug and the original gcc-4.0.0 the SEGV
</span><br>
<span class="quotelev1">&gt;    returns.
</span><br>
<span class="quotelev1">&gt;    So, the ompi-1.4 in the LD_LIBRARY_PATH was NOT the cause.
</span><br>
<span class="quotelev1">&gt;    Below is a backtrace from gdb which includes line numbers.
</span><br>
<span class="quotelev1">&gt;    The SEGV is in strlen() which suggests a string which lacks
</span><br>
<span class="quotelev1">&gt;    null-termination.
</span><br>
<span class="quotelev1">&gt;    The initial (siginfo) part of the backtrace provided by Open MPI reads:
</span><br>
<span class="quotelev1">&gt;    [pcp-j-6:02741] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;    [pcp-j-6:02741] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;    [pcp-j-6:02741] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;    [pcp-j-6:02741] Failing at address: 0x63757274
</span><br>
<span class="quotelev1">&gt;    -Paul
</span><br>
<span class="quotelev1">&gt;    #0  0x00a5dbb3 in strlen () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt;    #1  0x00a5d8f5 in strdup () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt;    #2  0x00534a3b in mca_base_var_enum_create (name=0x349488
</span><br>
<span class="quotelev1">&gt;    &quot;coll_ml_enable_fragmentation_enum&quot;, 
</span><br>
<span class="quotelev1">&gt;        values=0x34e014, enumerator=0xbfe03dd0)
</span><br>
<span class="quotelev1">&gt;        at
</span><br>
<span class="quotelev1">&gt;    /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/opal/mca/base/mca_base_var_enum.c:133
</span><br>
<span class="quotelev1">&gt;    #3  0x0033c328 in mca_coll_ml_register_params ()
</span><br>
<span class="quotelev1">&gt;        at
</span><br>
<span class="quotelev1">&gt;    /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/ompi/mca/coll/ml/coll_ml_mca.c:257
</span><br>
<span class="quotelev1">&gt;    #4  0x00537585 in register_components (project_name=0x2056f3 &quot;ompi&quot;,
</span><br>
<span class="quotelev1">&gt;    type_name=0x2056f8 &quot;coll&quot;, 
</span><br>
<span class="quotelev1">&gt;        output_id=-1, src=0xbfe03e7c, dest=0x21bd10)
</span><br>
<span class="quotelev1">&gt;        at
</span><br>
<span class="quotelev1">&gt;    /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/opal/mca/base/mca_base_components_register.c:116
</span><br>
<span class="quotelev1">&gt;    #5  0x0053736a in mca_base_framework_components_register
</span><br>
<span class="quotelev1">&gt;    (framework=0x21bce0, 
</span><br>
<span class="quotelev1">&gt;        flags=MCA_BASE_REGISTER_DEFAULT)
</span><br>
<span class="quotelev1">&gt;        at
</span><br>
<span class="quotelev1">&gt;    /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/opal/mca/base/mca_base_components_register.c:67
</span><br>
<span class="quotelev1">&gt;    #6  0x00537ec1 in mca_base_framework_register (framework=0x21bce0,
</span><br>
<span class="quotelev1">&gt;    flags=MCA_BASE_REGISTER_DEFAULT)
</span><br>
<span class="quotelev1">&gt;        at
</span><br>
<span class="quotelev1">&gt;    /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/opal/mca/base/mca_base_framework.c:107
</span><br>
<span class="quotelev1">&gt;    #7  0x00537f6f in mca_base_framework_open (framework=0x21bce0,
</span><br>
<span class="quotelev1">&gt;    flags=MCA_BASE_OPEN_DEFAULT)
</span><br>
<span class="quotelev1">&gt;        at
</span><br>
<span class="quotelev1">&gt;    /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/opal/mca/base/mca_base_framework.c:131
</span><br>
<span class="quotelev1">&gt;    #8  0x00152831 in ompi_mpi_init (argc=1, argv=0xbfe04114, requested=0,
</span><br>
<span class="quotelev1">&gt;    provided=0xbfe0400c)
</span><br>
<span class="quotelev1">&gt;        at
</span><br>
<span class="quotelev1">&gt;    /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/ompi/runtime/ompi_mpi_init.c:555
</span><br>
<span class="quotelev1">&gt;    #9  0x00186ce1 in PMPI_Init (argc=0xbfe04090, argv=0xbfe04094) at
</span><br>
<span class="quotelev1">&gt;    pinit.c:84
</span><br>
<span class="quotelev1">&gt;    #10 0x080486e9 in main (argc=1, argv=0xbfe04114) at ring_c.c:19
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Wed, Jan 8, 2014 at 8:45 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Only takes &lt;30 seconds of typing to start the test and I get email when
</span><br>
<span class="quotelev1">&gt;      it is done.
</span><br>
<span class="quotelev1">&gt;      Typing these emails takes more of my time than the actual testing does.
</span><br>
<span class="quotelev1">&gt;      -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Wed, Jan 8, 2014 at 8:35 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        If you have the time, it might be worth nailing it down. However, I'm
</span><br>
<span class="quotelev1">&gt;        mindful of all the things you need to do, so please only if you have
</span><br>
<span class="quotelev1">&gt;        the time.
</span><br>
<span class="quotelev1">&gt;        Thanks
</span><br>
<span class="quotelev1">&gt;        Ralph
</span><br>
<span class="quotelev1">&gt;        On Jan 8, 2014, at 8:23 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          Building with gcc-4.1.2 fixed the problem for me.  I also removed an
</span><br>
<span class="quotelev1">&gt;          old install of ompi-1.4 that was in LD_LIBRARY_PATH at build time
</span><br>
<span class="quotelev1">&gt;          and might have been a contributing factor.  If I'd known earlier
</span><br>
<span class="quotelev1">&gt;          that it was there, I wouldn't have reported the problem without
</span><br>
<span class="quotelev1">&gt;          first removing it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          I can build again with gcc-4.0.0 and --enable-debug if you are still
</span><br>
<span class="quotelev1">&gt;          interested in trying to get a line number.  This would also
</span><br>
<span class="quotelev1">&gt;          determine if LD_LIBRARY_PATH was the true culprit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          -Paul [Sent from my phone]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          On Jan 8, 2014 8:02 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Most likely problem is a bad backing store site - any chance you
</span><br>
<span class="quotelev1">&gt;            could give me a line number from this? There are a lot of calls to
</span><br>
<span class="quotelev1">&gt;            register params in that code and I'd need some help in figuring
</span><br>
<span class="quotelev1">&gt;            out which one wasn't right.
</span><br>
<span class="quotelev1">&gt;            On Jan 8, 2014, at 6:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;            wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              I am still testing the current 1.7.4rc tarball on my various
</span><br>
<span class="quotelev1">&gt;              systems.  The latest failure (shown below) is a SEGV somewhere
</span><br>
<span class="quotelev1">&gt;              below MPI_Init on a old, but otherwise fairly normal, Linux/x86
</span><br>
<span class="quotelev1">&gt;              (32-bit) system. 
</span><br>
<span class="quotelev1">&gt;              $
</span><br>
<span class="quotelev1">&gt;              /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/bin/mpirun
</span><br>
<span class="quotelev1">&gt;              -np 1 examples/ring_c
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] Failing at address: 0x6c6c6f63
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] [ 0] [0xbe4440]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] [ 1]
</span><br>
<span class="quotelev1">&gt;              /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_var_enum_create+0x15d)
</span><br>
<span class="quotelev1">&gt;              [0x2b11ed]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] [ 2]
</span><br>
<span class="quotelev1">&gt;              /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_register_params+0x639)
</span><br>
<span class="quotelev1">&gt;              [0x440909]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] [ 3]
</span><br>
<span class="quotelev1">&gt;              /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_components_register+0x14e)
</span><br>
<span class="quotelev1">&gt;              [0x2b2cce]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] [ 4]
</span><br>
<span class="quotelev1">&gt;              /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_register+0x1b5)
</span><br>
<span class="quotelev1">&gt;              [0x2b32a5]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] [ 5]
</span><br>
<span class="quotelev1">&gt;              /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_open+0x4e)
</span><br>
<span class="quotelev1">&gt;              [0x2b333e]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] [ 6]
</span><br>
<span class="quotelev1">&gt;              /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libmpi.so.1(ompi_mpi_init+0x53d)
</span><br>
<span class="quotelev1">&gt;              [0xaf359d]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] [ 7]
</span><br>
<span class="quotelev1">&gt;              /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libmpi.so.1(MPI_Init+0x13d)
</span><br>
<span class="quotelev1">&gt;              [0xb10d6d]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] [ 8] examples/ring_c [0x80486e9]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] [ 9] /lib/libc.so.6(__libc_start_main+0xdc)
</span><br>
<span class="quotelev1">&gt;              [0x125ebc]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] [10] examples/ring_c [0x8048631]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29031] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;              --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;              mpirun noticed that process rank 0 with PID 29031 on node
</span><br>
<span class="quotelev1">&gt;              pcp-j-6 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;              --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;              The failure shown is for a singleton run, but np=2 fails as
</span><br>
<span class="quotelev1">&gt;              well.
</span><br>
<span class="quotelev1">&gt;              System info:
</span><br>
<span class="quotelev1">&gt;              $ uname -a
</span><br>
<span class="quotelev1">&gt;              Linux pcp-j-6 2.6.18-238.1.1.el5PAE #1 SMP Tue Jan 18 19:28:42
</span><br>
<span class="quotelev1">&gt;              EST 2011 i686 athlon i386 GNU/Linux
</span><br>
<span class="quotelev1">&gt;              $ gcc --version
</span><br>
<span class="quotelev1">&gt;              gcc (GCC) 4.0.0
</span><br>
<span class="quotelev1">&gt;              Copyright (C) 2005 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt;              This is free software; see the source for copying conditions.
</span><br>
<span class="quotelev1">&gt;               There is NO
</span><br>
<span class="quotelev1">&gt;              warranty; not even for MERCHANTABILITY or FITNESS FOR A
</span><br>
<span class="quotelev1">&gt;              PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt;              The only configure argument used was --prefix.
</span><br>
<span class="quotelev1">&gt;              I was going to attach output from &quot;ompi_info --all&quot;, but it
</span><br>
<span class="quotelev1">&gt;              SEGV's too!
</span><br>
<span class="quotelev1">&gt;              $ ompi_info --all 
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] Failing at address: 0x6c6c6f63
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] [ 0] [0xd8a440]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] [ 1]
</span><br>
<span class="quotelev1">&gt;              /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_var_enum_create+0x15d)
</span><br>
<span class="quotelev1">&gt;              [0x2db1ed]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] [ 2]
</span><br>
<span class="quotelev1">&gt;              /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_register_params+0x639)
</span><br>
<span class="quotelev1">&gt;              [0x48d909]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] [ 3]
</span><br>
<span class="quotelev1">&gt;              /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_components_register+0x14e)
</span><br>
<span class="quotelev1">&gt;              [0x2dccce]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] [ 4]
</span><br>
<span class="quotelev1">&gt;              /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_register+0x1b5)
</span><br>
<span class="quotelev1">&gt;              [0x2dd2a5]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] [ 5]
</span><br>
<span class="quotelev1">&gt;              /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(opal_info_register_project_frameworks+0x57)
</span><br>
<span class="quotelev1">&gt;              [0x2b83d7]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] [ 6]
</span><br>
<span class="quotelev1">&gt;              /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libmpi.so.1(ompi_info_register_framework_params+0x81)
</span><br>
<span class="quotelev1">&gt;              [0xa69251]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] [ 7] ompi_info(main+0x2ba) [0x8049a2a]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] [ 8] /lib/libc.so.6(__libc_start_main+0xdc)
</span><br>
<span class="quotelev1">&gt;              [0x125ebc]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] [ 9] ompi_info [0x80496e1]
</span><br>
<span class="quotelev1">&gt;              [pcp-j-6:29092] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;              Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt;              I will try again with a newer gcc and report back.
</span><br>
<span class="quotelev1">&gt;              -Paul
</span><br>
<span class="quotelev1">&gt;              --
</span><br>
<span class="quotelev1">&gt;              Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;              Future Technologies Group
</span><br>
<span class="quotelev1">&gt;              Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;              Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;              _______________________________________________
</span><br>
<span class="quotelev1">&gt;              devel mailing list
</span><br>
<span class="quotelev1">&gt;              devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;              <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            _______________________________________________
</span><br>
<span class="quotelev1">&gt;            devel mailing list
</span><br>
<span class="quotelev1">&gt;            devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          _______________________________________________
</span><br>
<span class="quotelev1">&gt;          devel mailing list
</span><br>
<span class="quotelev1">&gt;          devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        devel mailing list
</span><br>
<span class="quotelev1">&gt;        devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      --
</span><br>
<span class="quotelev1">&gt;      Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Future Technologies Group
</span><br>
<span class="quotelev1">&gt;      Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;      Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    Future Technologies Group
</span><br>
<span class="quotelev1">&gt;    Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13624/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13625.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13623.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>In reply to:</strong> <a href="13613.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
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
