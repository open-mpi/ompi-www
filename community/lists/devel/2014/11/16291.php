<?
$subject_val = "Re: [OMPI devel] 1.8.3 and PSM errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 13:42:24 2014" -->
<!-- isoreceived="20141111184224" -->
<!-- sent="Tue, 11 Nov 2014 19:42:24 +0100" -->
<!-- isosent="20141111184224" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.3 and PSM errors" -->
<!-- id="20141111184224.GC11399_at_lisas.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="16C2FA80-7066-47E0-8735-5E50EE3BE17E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.3 and PSM errors<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 13:42:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16292.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI face-to-face devel meeting"</a>
<li><strong>Previous message:</strong> <a href="16290.php">Ralph Castain: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>In reply to:</strong> <a href="16290.php">Ralph Castain: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16309.php">Adrian Reber: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Reply:</strong> <a href="16309.php">Adrian Reber: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using the intel test suite I can reproduce it for example with:
<br>
<p>$ mpirun --np 2 --map-by ppr:1:node   `pwd`/src/MPI_Allgatherv_c
<br>
MPITEST info  (0): Starting MPI_Allgatherv() test
<br>
MPITEST info  (0): Node spec MPITEST_comm_sizes[6]=2 too large, using 1
<br>
MPITEST info  (0): Node spec MPITEST_comm_sizes[22]=2 too large, using 1
<br>
MPITEST info  (0): Node spec MPITEST_comm_sizes[32]=2 too large, using 1
<br>
<p>MPI_Allgatherv_c:9230 terminated with signal 11 at PC=7fc4ced4b150 SP=7fff45aa2fb0.  Backtrace:
<br>
/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x630)[0x7fc4ced4b150]
<br>
/lib64/libpsm_infinipath.so.1(ips_ptl_connect+0x3a)[0x7fc4ced4219a]
<br>
/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x3e7)[0x7fc4ced3a727]
<br>
/opt/bwhpc/common/mpi/openmpi/1.8.4-gnu-4.8/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1f3)[0x7fc4cf902303]
<br>
/opt/bwhpc/common/mpi/openmpi/1.8.4-gnu-4.8/lib/libmpi.so.1(ompi_comm_get_rprocs+0x49a)[0x7fc4cf7cbc2a]
<br>
/opt/bwhpc/common/mpi/openmpi/1.8.4-gnu-4.8/lib/libmpi.so.1(PMPI_Intercomm_create+0x2f2)[0x7fc4cf7fb602]
<br>
/lustre/lxfs/work/ws/es_test01-open_mpi-0/ompi-tests/intel_tests/src/MPI_Allgatherv_c[0x40f5bf]
<br>
/lustre/lxfs/work/ws/es_test01-open_mpi-0/ompi-tests/intel_tests/src/MPI_Allgatherv_c[0x40edf4]
<br>
/lustre/lxfs/work/ws/es_test01-open_mpi-0/ompi-tests/intel_tests/src/MPI_Allgatherv_c[0x401c80]
<br>
/lib64/libc.so.6(__libc_start_main+0xf5)[0x7fc4cf1a8af5]
<br>
/lustre/lxfs/work/ws/es_test01-open_mpi-0/ompi-tests/intel_tests/src/MPI_Allgatherv_c[0x401a89]
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
<p><p>On Tue, Nov 11, 2014 at 10:26:52AM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I think it would help understand this if you isolated it down to a single test that is failing, rather than just citing an entire test suite. For example, we know that the many-to-one test is never going to pass, regardless of transport. We also know that the dynamic tests will fail with PSM as they are not supported by that transport.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So could you find one test that doesn&#226;&#128;&#153;t pass, and give us some info on that one?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 11, 2014, at 10:04 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Some more information about our PSM troubles.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Using 1.6.5 the test suite still works. It fails with 1.8.3 and
</span><br>
<span class="quotelev2">&gt; &gt; 1.8.4rc1. As long as all processes are running on one node it also
</span><br>
<span class="quotelev2">&gt; &gt; works. As soon as one process is running on a second node it fails with
</span><br>
<span class="quotelev2">&gt; &gt; the previously described errors. I also tried the 1.8 release and it has
</span><br>
<span class="quotelev2">&gt; &gt; the same error. Another way to trigger it with only two processes is:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --np 2 --map-by ppr:1:node   mpi_test_suite -t &quot;environment&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Some change introduced between 1.6.5 and 1.8 broke this test case with
</span><br>
<span class="quotelev2">&gt; &gt; PSM. I have not yet been able to upgrade PSM to 3.3 but it seems more
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI related than PSM.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Intel MPI (4.1.1) has also no troubles running the test cases.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 		Adrian
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Nov 10, 2014 at 09:12:41PM +0000, Friedley, Andrew wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Adrian,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yes, I suggest trying either RH support or Intel's support at  ibsupport_at_intel.com.  They might have seen this problem before.  Since you're running the RHEL versions of PSM and related software, one thing you could try is IFS.  I think I was running IFS 7.3.0, so that's a difference between your setup and mine.  At the least, it may help support nail down the issue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Andrew
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Adrian
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Reber
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sent: Monday, November 10, 2014 12:39 PM
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subject: Re: [OMPI devel] 1.8.3 and PSM errors
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Andrew,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; thanks for looking into this. I was able to reproduce this error on RHEL 7 with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PSM provided by RHEL:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; infinipath-psm-3.2-2_ga8c3e3e_open.2.el7.x86_64
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; infinipath-psm-devel-3.2-2_ga8c3e3e_open.2.el7.x86_64
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ mpirun -np 32 mpi_test_suite -t &quot;environment&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpi_test_suite:4877 terminated with signal 11 at PC=7f5a2f4a2150
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; SP=7fff9e0ce770.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /lib64/libpsm_infinipath.so.1(ips_proto_connect+0x630)[0x7f5a2f4a2150]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /lib64/libpsm_infinipath.so.1(ips_ptl_connect+0x3a)[0x7f5a2f49919a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x3e7)[0x7f5a2f491727]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 4.8/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1f3)[0x7f5a30054cf3]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 4.8/lib/libmpi.so.1(ompi_comm_get_rprocs+0x49a)[0x7f5a2ff221da]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 4.8/lib/libmpi.so.1(PMPI_Intercomm_create+0x2f2)[0x7f5a2ff51832]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpi_test_suite[0x469420]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpi_test_suite[0x441d8e]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f5a2f8ffaf5]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpi_test_suite[0x405349]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Source RPM  : infinipath-psm-3.2-2_ga8c3e3e_open.2.el7.src.rpm
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Build Date  : Tue 04 Mar 2014 02:45:41 AM CET Build Host  : x86-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 025.build.eng.bos.redhat.com Relocations : /usr
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Packager    : Red Hat, Inc. &lt;<a href="http://bugzilla.redhat.com/bugzilla">http://bugzilla.redhat.com/bugzilla</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Vendor      : Red Hat, Inc.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; URL         : <a href="http://www.openfabrics.org/downloads/infinipath-psm/infinipath">http://www.openfabrics.org/downloads/infinipath-psm/infinipath</a>-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; psm-3.2-2_ga8c3e3e_open.tar.gz
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Summary     : QLogic PSM Libraries
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is this supposed to work? Or is this something Red Hat has to fix?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 		Adrian
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Mon, Oct 27, 2014 at 10:22:08PM +0000, Friedley, Andrew wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Adrian,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I'm unable to reproduce here with OMPI v1.8.3 (I assume you're doing this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with one 8-core node):
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; $ mpirun -np 32 -mca pml cm -mca mtl psm ./mpi_test_suite -t
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;environment&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (Rank:0) tst_test_array[0]:Status
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (Rank:0) tst_test_array[1]:Request_Null
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (Rank:0) tst_test_array[2]:Type_dup
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (Rank:0) tst_test_array[3]:Get_version Number of failed tests:0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Works with various np from 8 to 32.  Your original case:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; $ mpirun -np 32 ./mpi_test_suite -t &quot;All,^io,^one-sided&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Runs for a while and eventually hits send cancellation errors.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Any chance you could try updating your infinipath libraries?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Andrew
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Adrian
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Reber
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sent: Monday, October 27, 2014 9:11 AM
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] 1.8.3 and PSM errors
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; This is a simpler test setup:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On 8 core machines this works:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; $ mpirun  -np 8  mpi_test_suite -t &quot;environment&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Number of failed tests:0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Using 9 or more cores it fails:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; $ mpirun  -np 9  mpi_test_suite -t &quot;environment&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpi_test_suite:20293 terminated with signal 11 at PC=2b6d107fa9a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff06431a70.  Backtrace:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b6d107
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; fa9a
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b6d107e
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; b1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 72]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b6d0fa6e384]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b6d0f93376a]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b6d0f963d42]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b6d10047d5d]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Primary job  terminated normally, but 1 process returned a non-zero
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpi_test_suite:11212 terminated with signal 11 at PC=2b2c27d0d9a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7ffff5020430.  Backtrace:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b2c27d
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 0d9a
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b2c27cf
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; e17
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b2c26f81384]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b2c26e4676a]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b2c26e76d42]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b2c2755ad5d]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ------ mpirun detected that one or more processes exited with
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; non-zero status, thus causing the job to be terminated. The first
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; process to do so was:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  Process name: [[47415,1],0]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  Exit code:    1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Mon, Oct 27, 2014 at 08:27:17AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I&#226;&#128;&#153;m afraid I can&#226;&#128;&#153;t quite decipher from all this what actually
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; fails. Of course,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; PSM doesn&#226;&#128;&#153;t support dynamic operations like comm_spawn or
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; connect_accept, so if you are running those tests that just won&#226;&#128;&#153;t
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; work. Is that the heart of the problem here?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 27, 2014, at 1:40 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Running Open MPI 1.8.3 with PSM does not seem to work right now
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; at all.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I am getting the same errors also on trunk from my newly set up MTT.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Before trying to debug this I just wanted to make sure this is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; not a configuration error. I have following PSM packages installed:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; infinipath-devel-3.1.1-363.1140_rhel6_qlc.noarch
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; infinipath-libs-3.1.1-363.1140_rhel6_qlc.x86_64
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; infinipath-3.1.1-363.1140_rhel6_qlc.x86_64
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; with 1.6.5 I do not see PSM errors and the test suite fails much later:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; P2P tests Many-to-one with MPI_Iprobe (MPI_ANY_SOURCE)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (21/48),
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; comm
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Intracomm merged of the Halved Intercomm (13/13), type
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_TYPE_MIX_ARRAY (28/29) P2P tests Many-to-one with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Iprobe
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; (MPI_ANY_SOURCE) (21/48), comm Intracomm merged of the Halved
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Intercomm (13/13), type MPI_TYPE_MIX_LB_UB (29/29)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; n050304:5.0.Cannot cancel send requests (req=0x2ad8ba881f80) P2P
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; tests Many-to-one with Isend and Cancellation (22/48), comm
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_COMM_WORLD (1/13), type MPI_CHAR (1/29)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; n050304:2.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b25143fbd88) n050302:7.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b4d95eb0f80) n050301:4.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2adf03e14f80) n050304:4.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2ad877257ed8) n050301:6.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2ba47634af80) n050304:8.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2ae8ac16cf80) n050302:3.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2ab81dcb4d88) n050303:4.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b9ef4ef8f80) n050303:2.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2ab0f03f9f80) n050302:9.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b214f9ebed8) n050301:2.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b31302d4f80) n050302:4.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b0581bd3f80) n050301:8.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2ae53776bf80) n050303:6.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b13eeb78f80) n050304:7.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b4e99715f80) n050304:9.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b10429c2f80) n050304:3.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b9196f5fe30) n050304:6.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b30d6c69ed8) n050301:9.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b93c9e04f80) n050303:9.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2ab4d6ce0f80) n050301:5.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b6ad851ef80) n050303:3.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b8ef52a0f80) n050301:3.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b277a4aff80) n050303:7.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2ba570fa9f80) n050301:7.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2ba707dfbf80) n050302:2.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b90f2e51e30) n050303:5.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b1250ba8f80) n050302:8.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b22e0129ed8) n050303:8.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b6609792f80) n050302:6.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2b2b6081af80) n050302:5.0.Cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cancel send requests (req=0x2ab24f6f1f80)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ------ mpirun has exited due to process rank 14 with PID 4496 on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node n050303 exiting improperly. There are two reasons this could
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; occur:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; in the job did. This can cause a job to hang indefinitely while
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; it waits for all processes to call &quot;init&quot;. By rule, if one
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; process calls &quot;init&quot;, then ALL processes must call &quot;init&quot; prior to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; termination.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; prior to exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [adrian_at_n050304 mpi_test_suite]$
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; and this are my PSM errors with 1.8.3:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [adrian_at_n050304 mpi_test_suite]$ mpirun  -np 32  mpi_test_suite
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; -t
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;All,^io,^one-sided&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:8904 terminated with signal 11 at PC=2b08466239a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7ffff03c6e30.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:16905 terminated with signal 11 at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; PC=2ae4cad209a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fffceefa730.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:3171 terminated with signal 11 at PC=2b57daafe9a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff5c4b3af0.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:16906 terminated with signal 11 at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; PC=2b4c9fa019a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fffe916c330.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:3172 terminated with signal 11 at PC=2b6dde92e9a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff04cf1730.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:16907 terminated with signal 11 at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; PC=2ad6eb8589a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fffc30d02f0.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:3173 terminated with signal 11 at PC=2b2e4aec89a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fffa054e230.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:16908 terminated with signal 11 at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; PC=2b4e6e5589a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff68c7a1f0.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:3174 terminated with signal 11 at PC=2b7049b279a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff99a49f70.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:16909 terminated with signal 11 at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; PC=2b252219d9a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff72a0c6b0.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:3175 terminated with signal 11 at PC=2ac8d5caf9a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff6d7a63f0.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:16910 terminated with signal 11 at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; PC=2b7f83fc49a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fffb95b89b0.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:3176 terminated with signal 11 at PC=2b11438da9a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fffe626f270.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:16903 terminated with signal 11 at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; PC=2ac5249249a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff8874af30.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:3177 terminated with signal 11 at PC=2ab6154549a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fffbf6ff430.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:16904 terminated with signal 11 at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; PC=2ad0265099a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff89fea470.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:3178 terminated with signal 11 at PC=2b606b1a79a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff20240db0.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:4458 terminated with signal 11 at PC=2b593ef029a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff4f48b470.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:4459 terminated with signal 11 at PC=2b06dde559a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fffd771a4f0.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:4460 terminated with signal 11 at PC=2ba7904cb9a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff9694c8b0.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ab
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 6154
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 549a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2ab61544
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 5172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:4461 terminated with signal 11 at PC=2b26799fd9a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff70f69eb0.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1438
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; da9a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b11438c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; b172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b1142b4e384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:4462 terminated with signal 11 at PC=2b15418e19a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff858425b0.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2ab6146c8384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2ab61458d76a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2ab6145bdd42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ab614ca1d5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:4463 terminated with signal 11 at PC=2b43082919a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff2ea8a530.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:4464 terminated with signal 11 at PC=2adc01fe89a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fff0de9d4b0.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b1142a1376a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b1142a43d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite:4465 terminated with signal 11 at PC=2b477a1819a4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SP=7fffd33831b0.  Backtrace:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b1143127d5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 3082
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 919a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b430828
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 2172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 77a1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 819a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b477a17
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 2172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b47793f5384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 6799
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; fd9a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b26799e
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; e172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b2678c71384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b47792ba76a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b47792ead42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b4307505384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b43073ca76a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b43073fad42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b2678b3676a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b2678b66d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b4307aded5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b47799ced5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b267924ad5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; e4ae
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; c89a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b2e4aeb
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 9172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ac
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 8d5c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; af9a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2ac8d5ca
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b5
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 7daa
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; fe9a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b57daae
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; f172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b57d9d72384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 8466
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 239a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b084661
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 4172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b0845897384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b5
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 93ef
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 029a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b593eef
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 3172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b7
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 049b
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 279a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b7049b1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 8172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; e6e5
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 589a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b4e6e54
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 9172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b084575c76a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b084578cd42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b0845e70d5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 5418
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; e19a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b15418d
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 2172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b2e4a13c384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b2e4a00176a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b2e4a031d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b4e6d7cc384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b593e176384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b593e03b76a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b6
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 06b1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; a79a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b606b19
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 8172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b606a41b384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b4e6d69176a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b1540b55384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b1540a1a76a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b57d9c3776a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 6dde
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 559a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b06dde4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 6172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b06dd0c9384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b06dcf8e76a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b06dcfbed42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2ac8d4f23384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2ac8d4de876a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b4e6d6c1d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b4e6dda5d5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b1540a4ad42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b154112ed5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b6
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; dde9
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 2e9a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b6dde91
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; f172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ad
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 6eb8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 589a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2ad6eb84
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 9172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b593e06bd42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b593e74fd5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b606a2e076a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b606a310d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b606a9f4d5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b06dd6a2d5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b7048d9b384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b7048c6076a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b7048c90d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ac
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 5249
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 249a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2ac52491
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 5172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2ac523b98384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ad
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; c01f
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; e89a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2adc01fd
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 9172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b2e4a715d5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2ad6eaacc384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2ad6ea99176a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ba
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 7904
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cb9a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2ba7904b
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; c172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b6dddba2384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b6ddda6776a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b6ddda97d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2ac523a5d76a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2ac523a8dd42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2adc0125c384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2adc0112176a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2adc01151d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b57d9c67d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b57da34bd5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac524171d5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2ba78f73f384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2ba78f60476a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2ac8d4e18d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac8d54fcd5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2ad6ea9c1d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ad6eb0a5d5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2adc01835d5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b6dde17bd5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2ba78f634d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ba78fd18d5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b7049374d5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 5221
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 9d9a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b252218
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; e172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ae
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 4cad
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 209a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2ae4cad1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ad
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0265
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 099a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2ad0264f
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; a172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2ae4c9f94384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2ae4c9e5976a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b2521411384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b25212d676a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b7
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; f83f
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; c49a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b7f83fb
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 5172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2ae4c9e89d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ae4ca56dd5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; c9fa
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 019a4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b4c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 9f9f
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 2172]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b4c9ec75384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b4c9eb3a76a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2ad02577d384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2ad02564276a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2ad025672d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ad025d56d5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b2521306d42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b25219ead5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_mtl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _psm_add_procs+0x1a4)[0x2b7f83238384]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(ompi_com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; m_get_rprocs+0x2fa)[0x2b7f830fd76a]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b7f8312dd42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4.9/lib/libmpi.so.1(MPI_Inte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rcomm_create+0x332)[0x2b4c9eb6ad42]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b4c9f24ed5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b7f83811d5d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Primary job  terminated normally, but 1 process returned a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ------ mpirun detected that one or more processes exited with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; non-zero status, thus causing the job to be terminated. The
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; first process to do so was:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Process name: [[9290,1],0]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Exit code:    1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ------ _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpi.org/community/lists/devel/2014/10/16093.php
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16099.php">http://www.open-mpi.org/community/lists/devel/2014/10/16099.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpi.org/community/lists/devel/2014/10/16100.php
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16103.php">http://www.open-mpi.org/community/lists/devel/2014/10/16103.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpi.org/community/lists/devel/2014/11/16277.php
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16278.php">http://www.open-mpi.org/community/lists/devel/2014/11/16278.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16289.php">http://www.open-mpi.org/community/lists/devel/2014/11/16289.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16289.php">http://www.open-mpi.org/community/lists/devel/2014/11/16289.php</a>&gt;
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16290.php">http://www.open-mpi.org/community/lists/devel/2014/11/16290.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16292.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI face-to-face devel meeting"</a>
<li><strong>Previous message:</strong> <a href="16290.php">Ralph Castain: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>In reply to:</strong> <a href="16290.php">Ralph Castain: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16309.php">Adrian Reber: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Reply:</strong> <a href="16309.php">Adrian Reber: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
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
