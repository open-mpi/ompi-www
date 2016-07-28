<?
$subject_val = "Re: [OMPI users] Using mtrace with openmpi segfaults";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  7 08:03:18 2007" -->
<!-- isoreceived="20071207130318" -->
<!-- sent="Fri, 7 Dec 2007 08:03:08 -0500" -->
<!-- isosent="20071207130308" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using mtrace with openmpi segfaults" -->
<!-- id="9B45F595-82C2-443C-AB1B-5073CE68F77D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFA20E2BF5.F4017897-ON862573A9.00538ED1-862573A9.0053E58C_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using mtrace with openmpi segfaults<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-07 08:03:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4621.php">Chris Slaughter: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Previous message:</strong> <a href="4619.php">Jeff Squyres: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>In reply to:</strong> <a href="4614.php">Jeffrey M Ceason: "Re: [OMPI users] Using mtrace with openmpi segfaults"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure what using mallopt would do when combined with Open MPI's  
<br>
ptmalloc, but I can't imagine that it would be anything good.
<br>
<p>If you want users to be able to use mallopt, you should probably  
<br>
disable Open MPI's ptmalloc.
<br>
<p><p>On Dec 6, 2007, at 10:16 AM, Jeffrey M Ceason wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to disable this at runtime?  Also can an user app use  
</span><br>
<span class="quotelev1">&gt; mallopt options without interfering with the memory managers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have these options set but are getting memory corruption that  
</span><br>
<span class="quotelev1">&gt; moves around realloc in the program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mallopt(M_MMAP_MAX, 0);
</span><br>
<span class="quotelev1">&gt;  mallopt(M_TRIM_THRESHOLD, -1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 12/06/2007 07:44 AM
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Using mtrace with openmpi segfaults
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not tried to use mtrace myself.  But I can see how it would be
</span><br>
<span class="quotelev1">&gt; problematic with OMPI's internal use of ptmalloc2.  If you are not
</span><br>
<span class="quotelev1">&gt; using InfiniBand or Myrinet over GM, you don't need OMPI to have an
</span><br>
<span class="quotelev1">&gt; internal copy of ptmalloc2.  You can disable OMPI's ptmalloc2 by
</span><br>
<span class="quotelev1">&gt; configuring with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ./configure --without-memory-manager
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 3, 2007, at 6:23 PM, Jeffrey M Ceason wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Having trouble using mtrace with openmpi.  Whenever I use the mtrace
</span><br>
<span class="quotelev2">&gt; &gt; call before or after MPI_Init the application terminates.  This only
</span><br>
<span class="quotelev2">&gt; &gt; seems to happen using mpi.  Is there a way to disable the open-mpi
</span><br>
<span class="quotelev2">&gt; &gt; memory wrappers?  Is there known issues with users applications
</span><br>
<span class="quotelev2">&gt; &gt; using mallopts and the mallopts used by open-mpi?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Machine is AMD64 Fedora Core 7
</span><br>
<span class="quotelev2">&gt; &gt; [ceason_at_n01-044-0 minib]$ uname -a
</span><br>
<span class="quotelev2">&gt; &gt; Linux n01-044-0 2.6.22-rr #1 SMP Fri Nov 16 15:28:53 CST 2007 x86_64
</span><br>
<span class="quotelev2">&gt; &gt; x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt; [ceason_at_n01-044-0 minib]$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Test source.
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;malloc.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mcheck.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; using namespace std;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main (int argc,char * argv[]) {
</span><br>
<span class="quotelev2">&gt; &gt;     mtrace();
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Init(NULL,NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [ceason_at_n01-044-0 minib]$ mpiCC dacs_test.cc -o trace_test
</span><br>
<span class="quotelev2">&gt; &gt; [ceason_at_n01-044-0 minib]$ mpirun -np 1 trace_test
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that job rank 0 with PID 7078 on node n01-044-0
</span><br>
<span class="quotelev2">&gt; &gt; exited on signal 8 (Floating point exception).
</span><br>
<span class="quotelev2">&gt; &gt; [ceason_at_n01-044-0 minib]$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; backtrace of core
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Core was generated by `trace_test'.
</span><br>
<span class="quotelev2">&gt; &gt; Program terminated with signal 8, Arithmetic exception.
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00002b33169d4abc in sYSTRIm () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00002b33169d4abc in sYSTRIm () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002b33169d71c2 in _int_free () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00002b33169dab1c in free () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00002b33169dcee8 in tr_freehook () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00002b33157674f3 in free () from /usr/local/openmpi/lib64/
</span><br>
<span class="quotelev2">&gt; &gt; libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00002b33169ceaf1 in vasprintf () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x00002b33169b3088 in asprintf () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x00002b3315760c7d in opal_output_init () from /usr/local/
</span><br>
<span class="quotelev2">&gt; &gt; openmpi/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x00002b3315760a2a in do_open () from /usr/local/openmpi/lib64/
</span><br>
<span class="quotelev2">&gt; &gt; libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #9  0x00002b331575f958 in opal_malloc_init () from /usr/local/
</span><br>
<span class="quotelev2">&gt; &gt; openmpi/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #10 0x00002b331574ac27 in opal_init_util () from /usr/local/openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; lib64/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #11 0x00002b331574ad06 in opal_init () from /usr/local/openmpi/ 
</span><br>
<span class="quotelev1">&gt; lib64/
</span><br>
<span class="quotelev2">&gt; &gt; libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #12 0x00002b3315283edf in ompi_mpi_init () from /usr/local/openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; lib64/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #13 0x00002b33152a54f0 in PMPI_Init () from /usr/local/openmpi/ 
</span><br>
<span class="quotelev1">&gt; lib64/
</span><br>
<span class="quotelev2">&gt; &gt; libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #14 0x0000000000408397 in main ()
</span><br>
<span class="quotelev2">&gt; &gt; (gdb)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Shouldn't involve communications between machines but here is the IB
</span><br>
<span class="quotelev2">&gt; &gt; Info.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [ceason_at_n01-044-0 minib]$ ibv_devinfo
</span><br>
<span class="quotelev2">&gt; &gt; hca_id: mlx4_0
</span><br>
<span class="quotelev2">&gt; &gt;         fw_ver:                         2.2.000
</span><br>
<span class="quotelev2">&gt; &gt;         node_guid:                      0002:c903:0000:17d0
</span><br>
<span class="quotelev2">&gt; &gt;         sys_image_guid:                 0002:c903:0000:17d3
</span><br>
<span class="quotelev2">&gt; &gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev2">&gt; &gt;         vendor_part_id:                 25418
</span><br>
<span class="quotelev2">&gt; &gt;         hw_ver:                         0xA0
</span><br>
<span class="quotelev2">&gt; &gt;         board_id:                       MT_04A0110002
</span><br>
<span class="quotelev2">&gt; &gt;         phys_port_cnt:                  2
</span><br>
<span class="quotelev2">&gt; &gt;                 port:   1
</span><br>
<span class="quotelev2">&gt; &gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev2">&gt; &gt;                         max_mtu:                2048 (4)
</span><br>
<span class="quotelev2">&gt; &gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev2">&gt; &gt;                         sm_lid:                 1
</span><br>
<span class="quotelev2">&gt; &gt;                         port_lid:               8
</span><br>
<span class="quotelev2">&gt; &gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 port:   2
</span><br>
<span class="quotelev2">&gt; &gt;                         state:                  PORT_DOWN (1)
</span><br>
<span class="quotelev2">&gt; &gt;                         max_mtu:                2048 (4)
</span><br>
<span class="quotelev2">&gt; &gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev2">&gt; &gt;                         sm_lid:                 0
</span><br>
<span class="quotelev2">&gt; &gt;                         port_lid:               0
</span><br>
<span class="quotelev2">&gt; &gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [ceason_at_n01-044-0 minib]$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [ceason_at_n01-044-0 minib]$ ulimit -l
</span><br>
<span class="quotelev2">&gt; &gt; unlimited
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info -all output
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 Open MPI: 1.2.4
</span><br>
<span class="quotelev2">&gt; &gt;    Open MPI SVN revision: r16187
</span><br>
<span class="quotelev2">&gt; &gt;                 Open RTE: 1.2.4
</span><br>
<span class="quotelev2">&gt; &gt;    Open RTE SVN revision: r16187
</span><br>
<span class="quotelev2">&gt; &gt;                     OPAL: 1.2.4
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL SVN revision: r16187
</span><br>
<span class="quotelev2">&gt; &gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA timer: linux (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: self (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA io: romio (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: openib (MCA v1.0, API v1.0.1, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev2">&gt; &gt;                   Prefix: /usr/local/openmpi
</span><br>
<span class="quotelev2">&gt; &gt;                   Bindir: /usr/local/openmpi/bin
</span><br>
<span class="quotelev2">&gt; &gt;                   Libdir: /usr/local/openmpi/lib64
</span><br>
<span class="quotelev2">&gt; &gt;                   Incdir: /usr/local/openmpi/include
</span><br>
<span class="quotelev2">&gt; &gt;                Pkglibdir: /usr/local/openmpi/lib64/openmpi
</span><br>
<span class="quotelev2">&gt; &gt;               Sysconfdir: /usr/local/openmpi/etc
</span><br>
<span class="quotelev2">&gt; &gt;  Configured architecture: x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev2">&gt; &gt;            Configured by: root
</span><br>
<span class="quotelev2">&gt; &gt;            Configured on: Sun Nov 18 14:44:52 CST 2007
</span><br>
<span class="quotelev2">&gt; &gt;           Configure host: wwim0-0
</span><br>
<span class="quotelev2">&gt; &gt;                 Built by: root
</span><br>
<span class="quotelev2">&gt; &gt;                 Built on: Sun Nov 18 14:51:43 CST 2007
</span><br>
<span class="quotelev2">&gt; &gt;               Built host: wwim0-0
</span><br>
<span class="quotelev2">&gt; &gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev2">&gt; &gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev2">&gt; &gt;               C compiler: gcc
</span><br>
<span class="quotelev2">&gt; &gt;      C compiler absolute: /usr/lib64/ccache/gcc
</span><br>
<span class="quotelev2">&gt; &gt;              C char size: 1
</span><br>
<span class="quotelev2">&gt; &gt;              C bool size: 1
</span><br>
<span class="quotelev2">&gt; &gt;             C short size: 2
</span><br>
<span class="quotelev2">&gt; &gt;               C int size: 4
</span><br>
<span class="quotelev2">&gt; &gt;              C long size: 8
</span><br>
<span class="quotelev2">&gt; &gt;             C float size: 4
</span><br>
<span class="quotelev2">&gt; &gt;            C double size: 8
</span><br>
<span class="quotelev2">&gt; &gt;           C pointer size: 8
</span><br>
<span class="quotelev2">&gt; &gt;             C char align: 1
</span><br>
<span class="quotelev2">&gt; &gt;             C bool align: 1
</span><br>
<span class="quotelev2">&gt; &gt;              C int align: 4
</span><br>
<span class="quotelev2">&gt; &gt;            C float align: 4
</span><br>
<span class="quotelev2">&gt; &gt;           C double align: 8
</span><br>
<span class="quotelev2">&gt; &gt;             C++ compiler: g++
</span><br>
<span class="quotelev2">&gt; &gt;    C++ compiler absolute: /usr/lib64/ccache/g++
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt; &gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev2">&gt; &gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev2">&gt; &gt;        Fort integer size: 4
</span><br>
<span class="quotelev2">&gt; &gt;        Fort logical size: 4
</span><br>
<span class="quotelev2">&gt; &gt;  Fort logical value true: 1
</span><br>
<span class="quotelev2">&gt; &gt;       Fort have integer1: yes
</span><br>
<span class="quotelev2">&gt; &gt;       Fort have integer2: yes
</span><br>
<span class="quotelev2">&gt; &gt;       Fort have integer4: yes
</span><br>
<span class="quotelev2">&gt; &gt;       Fort have integer8: yes
</span><br>
<span class="quotelev2">&gt; &gt;      Fort have integer16: no
</span><br>
<span class="quotelev2">&gt; &gt;          Fort have real4: yes
</span><br>
<span class="quotelev2">&gt; &gt;          Fort have real8: yes
</span><br>
<span class="quotelev2">&gt; &gt;         Fort have real16: no
</span><br>
<span class="quotelev2">&gt; &gt;       Fort have complex8: yes
</span><br>
<span class="quotelev2">&gt; &gt;      Fort have complex16: yes
</span><br>
<span class="quotelev2">&gt; &gt;      Fort have complex32: no
</span><br>
<span class="quotelev2">&gt; &gt;       Fort integer1 size: 1
</span><br>
<span class="quotelev2">&gt; &gt;       Fort integer2 size: 2
</span><br>
<span class="quotelev2">&gt; &gt;       Fort integer4 size: 4
</span><br>
<span class="quotelev2">&gt; &gt;       Fort integer8 size: 8
</span><br>
<span class="quotelev2">&gt; &gt;      Fort integer16 size: -1
</span><br>
<span class="quotelev2">&gt; &gt;           Fort real size: 4
</span><br>
<span class="quotelev2">&gt; &gt;          Fort real4 size: 4
</span><br>
<span class="quotelev2">&gt; &gt;          Fort real8 size: 8
</span><br>
<span class="quotelev2">&gt; &gt;         Fort real16 size: -1
</span><br>
<span class="quotelev2">&gt; &gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev2">&gt; &gt;           Fort cplx size: 4
</span><br>
<span class="quotelev2">&gt; &gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev2">&gt; &gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev2">&gt; &gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev2">&gt; &gt;         Fort cplx32 size: -1
</span><br>
<span class="quotelev2">&gt; &gt;       Fort integer align: 4
</span><br>
<span class="quotelev2">&gt; &gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev2">&gt; &gt;      Fort integer2 align: 2
</span><br>
<span class="quotelev2">&gt; &gt;      Fort integer4 align: 4
</span><br>
<span class="quotelev2">&gt; &gt;      Fort integer8 align: 8
</span><br>
<span class="quotelev2">&gt; &gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev2">&gt; &gt;          Fort real align: 4
</span><br>
<span class="quotelev2">&gt; &gt;         Fort real4 align: 4
</span><br>
<span class="quotelev2">&gt; &gt;         Fort real8 align: 8
</span><br>
<span class="quotelev2">&gt; &gt;        Fort real16 align: -1
</span><br>
<span class="quotelev2">&gt; &gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev2">&gt; &gt;          Fort cplx align: 4
</span><br>
<span class="quotelev2">&gt; &gt;      Fort dbl cplx align: 4
</span><br>
<span class="quotelev2">&gt; &gt;         Fort cplx8 align: 4
</span><br>
<span class="quotelev2">&gt; &gt;        Fort cplx16 align: 8
</span><br>
<span class="quotelev2">&gt; &gt;        Fort cplx32 align: -1
</span><br>
<span class="quotelev2">&gt; &gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev2">&gt; &gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt; &gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt; &gt;             Build CFLAGS: -O3 -DNDEBUG -m64 -I/usr/local/OFED/
</span><br>
<span class="quotelev2">&gt; &gt; include -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt; &gt;           Build CXXFLAGS: -O3 -DNDEBUG -m64 -I/usr/local/OFED/
</span><br>
<span class="quotelev2">&gt; &gt; include -finline-functions -pthread
</span><br>
<span class="quotelev2">&gt; &gt;             Build FFLAGS: -m64
</span><br>
<span class="quotelev2">&gt; &gt;            Build FCFLAGS: -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev2">&gt; &gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64 -
</span><br>
<span class="quotelev2">&gt; &gt; mtune=generic
</span><br>
<span class="quotelev2">&gt; &gt;            Build LDFLAGS: -export-dynamic -m64 -L/lib64 -L/usr/lib64
</span><br>
<span class="quotelev2">&gt; &gt; -L/usr/local/OFED/lib64
</span><br>
<span class="quotelev2">&gt; &gt;               Build LIBS: -lnsl -lutil  -lm
</span><br>
<span class="quotelev2">&gt; &gt;     Wrapper extra CFLAGS: -pthread
</span><br>
<span class="quotelev2">&gt; &gt;   Wrapper extra CXXFLAGS: -pthread
</span><br>
<span class="quotelev2">&gt; &gt;     Wrapper extra FFLAGS: -pthread
</span><br>
<span class="quotelev2">&gt; &gt;    Wrapper extra FCFLAGS: -pthread
</span><br>
<span class="quotelev2">&gt; &gt;    Wrapper extra LDFLAGS:
</span><br>
<span class="quotelev2">&gt; &gt;       Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev2">&gt; &gt; -lm -ldl
</span><br>
<span class="quotelev2">&gt; &gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt; &gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt; &gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt; &gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt; &gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt; &gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev2">&gt; &gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;/home/usr1/ceason/.openmpi/mca-params.conf:/usr/local/
</span><br>
<span class="quotelev2">&gt; &gt; openmpi/etc/openmpi-mca-params.conf&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Path for MCA configuration files
</span><br>
<span class="quotelev2">&gt; &gt; containing default parameter values
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;/usr/local/openmpi/lib64/openmpi:/home/usr1/ceason/.openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; components&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Path where to look for Open MPI and ORTE
</span><br>
<span class="quotelev2">&gt; &gt; components
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Top-level verbosity parameter
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mca: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether to show errors for components that
</span><br>
<span class="quotelev2">&gt; &gt; failed to load or not
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mca: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether to attempt to disable opening
</span><br>
<span class="quotelev2">&gt; &gt; dynamic components or not
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether you want MPI API parameters
</span><br>
<span class="quotelev2">&gt; &gt; checked at run-time or not.  Possible values are 0 (no checking) and
</span><br>
<span class="quotelev2">&gt; &gt; 1 (perform checking at run-time)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Yield the processor when waiting for MPI
</span><br>
<span class="quotelev2">&gt; &gt; communication (for MPI processes, will default to 1 when
</span><br>
<span class="quotelev2">&gt; &gt; oversubscribing nodes)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           How often to progress TCP communications
</span><br>
<span class="quotelev2">&gt; &gt; (0 = never, otherwise specified in microseconds)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether MPI_FINALIZE shows all MPI handles
</span><br>
<span class="quotelev2">&gt; &gt; that were not freed or not
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether to actually free MPI objects when
</span><br>
<span class="quotelev2">&gt; &gt; their handles are freed
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether to show all MCA parameter value
</span><br>
<span class="quotelev2">&gt; &gt; during MPI_INIT or not (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           If mpi_show_mca_params is true, setting
</span><br>
<span class="quotelev2">&gt; &gt; this string to a valid filename tells Open MPI to dump all the MCA
</span><br>
<span class="quotelev2">&gt; &gt; parameter values into a file suitable for reading via the
</span><br>
<span class="quotelev2">&gt; &gt; mca_param_files parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           If nonzero, assume that this job is the
</span><br>
<span class="quotelev2">&gt; &gt; only (set of) process(es) running on each node and bind processes to
</span><br>
<span class="quotelev2">&gt; &gt; processors, starting with processor ID 0
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpi_keep_peer_hostnames&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           If nonzero, save the string hostnames of
</span><br>
<span class="quotelev2">&gt; &gt; all MPI peer processes (mostly for error / debugging output
</span><br>
<span class="quotelev2">&gt; &gt; messages).  This can add quite a bit of memory usage to each MPI
</span><br>
<span class="quotelev2">&gt; &gt; process.
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           If nonzero, print out an identifying
</span><br>
<span class="quotelev2">&gt; &gt; message when MPI_ABORT is invoked (hostname, PID of the process that
</span><br>
<span class="quotelev2">&gt; &gt; called MPI_ABORT) and delay for that many seconds before exiting (a
</span><br>
<span class="quotelev2">&gt; &gt; negative delay value means to never abort).  This allows attaching
</span><br>
<span class="quotelev2">&gt; &gt; of a debugger before quitting the job.
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter &quot;mpi_abort_print_stack&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           If nonzero, print out a stack trace when
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ABORT is invoked
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether to force MPI processes to create
</span><br>
<span class="quotelev2">&gt; &gt; connections / warmup with *all* peers during MPI_INIT (vs. making
</span><br>
<span class="quotelev2">&gt; &gt; connections lazily -- upon the first MPI traffic between each
</span><br>
<span class="quotelev2">&gt; &gt; process peer pair)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter &quot;mpi_preconnect_oob&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether to force MPI processes to fully
</span><br>
<span class="quotelev2">&gt; &gt; wire-up the OOB system between MPI processes.
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether to use the &quot;leave pinned&quot; protocol
</span><br>
<span class="quotelev2">&gt; &gt; or not.  Enabling this setting can help bandwidth performance when
</span><br>
<span class="quotelev2">&gt; &gt; repeatedly sending and receiving large messages with the same
</span><br>
<span class="quotelev2">&gt; &gt; buffers over RDMA-based networks.
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mpi: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpi_leave_pinned_pipeline&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether to use the &quot;leave pinned pipeline&quot;
</span><br>
<span class="quotelev2">&gt; &gt; protocol or not.
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Top-level ORTE debug switch
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA orte: parameter &quot;orte_no_daemonize&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether to properly daemonize the ORTE
</span><br>
<span class="quotelev2">&gt; &gt; daemons or not
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA orte: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;orte_base_user_debugger&quot; (current value: &quot;totalview @mpirun@ -a
</span><br>
<span class="quotelev2">&gt; &gt; @mpirun_args@ : ddt -n @np@ -start @executable@ @executable_argv@
</span><br>
<span class="quotelev2">&gt; &gt; @single_app@ : fxp @mpirun@ -a @mpirun_args@&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Sequence of user-level debuggers to search
</span><br>
<span class="quotelev2">&gt; &gt; for in orterun
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA orte: parameter &quot;orte_abort_timeout&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Time to wait [in seconds] before giving up
</span><br>
<span class="quotelev2">&gt; &gt; on aborting an ORTE operation
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA orte: parameter &quot;orte_timing&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Request that critical timing loops be
</span><br>
<span class="quotelev2">&gt; &gt; measured
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA opal: parameter &quot;opal_signal&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;6,7,8,11&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           If a signal is received, display the stack
</span><br>
<span class="quotelev2">&gt; &gt; trace frame
</span><br>
<span class="quotelev2">&gt; &gt;            MCA backtrace: parameter &quot;backtrace&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the backtrace framework (&lt;none&gt; means &quot;use all components that can
</span><br>
<span class="quotelev2">&gt; &gt; be found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA backtrace: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;backtrace_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the backtrace
</span><br>
<span class="quotelev2">&gt; &gt; framework (0 = no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA backtrace: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;backtrace_execinfo_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the memory framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA memory: parameter &quot;memory_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the memory framework
</span><br>
<span class="quotelev2">&gt; &gt; (0 = no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA memory: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;memory_ptmalloc2_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA paffinity: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;paffinity_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level of the paffinity framework
</span><br>
<span class="quotelev2">&gt; &gt;            MCA paffinity: parameter &quot;paffinity&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the paffinity framework (&lt;none&gt; means &quot;use all components that can
</span><br>
<span class="quotelev2">&gt; &gt; be found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA paffinity: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;paffinity_linux_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Priority of the linux paffinity component
</span><br>
<span class="quotelev2">&gt; &gt;            MCA paffinity: information
</span><br>
<span class="quotelev2">&gt; &gt; &quot;paffinity_linux_have_cpu_set_t&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether this component was compiled on a
</span><br>
<span class="quotelev2">&gt; &gt; system with the type cpu_set_t or not (1 = yes, 0 = no)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA paffinity: information
</span><br>
<span class="quotelev2">&gt; &gt; &quot;paffinity_linux_CPU_ZERO_ok&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether this component was compiled on a
</span><br>
<span class="quotelev2">&gt; &gt; system where CPU_ZERO() is functional or broken (1 = functional, 0 =
</span><br>
<span class="quotelev2">&gt; &gt; broken/not available)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA paffinity: information
</span><br>
<span class="quotelev2">&gt; &gt; &quot;paffinity_linux_sched_setaffinity_num_params&quot; (value: &quot;3&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           The number of parameters that
</span><br>
<span class="quotelev2">&gt; &gt; sched_set_affinity() takes on the machine where this component was
</span><br>
<span class="quotelev2">&gt; &gt; compiled
</span><br>
<span class="quotelev2">&gt; &gt;            MCA maffinity: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;maffinity_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level of the maffinity framework
</span><br>
<span class="quotelev2">&gt; &gt;            MCA maffinity: parameter &quot;maffinity&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the maffinity framework (&lt;none&gt; means &quot;use all components that can
</span><br>
<span class="quotelev2">&gt; &gt; be found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA maffinity: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;maffinity_first_use_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Priority of the first_use maffinity
</span><br>
<span class="quotelev2">&gt; &gt; component
</span><br>
<span class="quotelev2">&gt; &gt;            MCA maffinity: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;maffinity_libnuma_priority&quot; (current value: &quot;25&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Priority of the libnuma maffinity  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev2">&gt; &gt;                MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the timer framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA timer: parameter &quot;timer_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the timer framework (0
</span><br>
<span class="quotelev2">&gt; &gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA timer: parameter &quot;timer_linux_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA allocator: parameter &quot;allocator&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the allocator framework (&lt;none&gt; means &quot;use all components that can
</span><br>
<span class="quotelev2">&gt; &gt; be found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA allocator: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;allocator_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the allocator
</span><br>
<span class="quotelev2">&gt; &gt; framework (0 = no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA allocator: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;allocator_basic_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA allocator: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;allocator_bucket_num_buckets&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA allocator: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;allocator_bucket_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the coll framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter &quot;coll_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the coll framework (0
</span><br>
<span class="quotelev2">&gt; &gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter &quot;coll_basic_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Priority of the basic coll component
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter &quot;coll_basic_crossover&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Minimum number of processes in a
</span><br>
<span class="quotelev2">&gt; &gt; communicator before using the logarithmic algorithms
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter &quot;coll_self_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter &quot;coll_sm_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Priority of the sm coll component
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter &quot;coll_sm_control_size&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Length of the control data -- should
</span><br>
<span class="quotelev2">&gt; &gt; usually be either the length of a cache line on most SMPs, or the
</span><br>
<span class="quotelev2">&gt; &gt; size of a page on machines that support direct memory affinity page
</span><br>
<span class="quotelev2">&gt; &gt; placement (in bytes)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;coll_sm_bootstrap_filename&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;shared_mem_sm_bootstrap&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Filename (in the Open MPI session
</span><br>
<span class="quotelev2">&gt; &gt; directory) of the coll sm component bootstrap rendezvous mmap file
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;coll_sm_bootstrap_num_segments&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Number of segments in the bootstrap file
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;8192&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Fragment size (in bytes) used for passing
</span><br>
<span class="quotelev2">&gt; &gt; data through shared memory (will be rounded up to the nearest
</span><br>
<span class="quotelev2">&gt; &gt; control_size size)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter &quot;coll_sm_mpool&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;sm&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Name of the mpool component to use
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;coll_sm_comm_in_use_flags&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Number of &quot;in use&quot; flags, used to mark a
</span><br>
<span class="quotelev2">&gt; &gt; message passing area segment as currently being used or not (must be
</span><br>
<span class="quotelev3">&gt; &gt; &gt;= 2 and &lt;= comm_num_segments)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;coll_sm_comm_num_segments&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Number of segments in each communicator's
</span><br>
<span class="quotelev2">&gt; &gt; shared memory message passing area (must be &gt;= 2, and must be a
</span><br>
<span class="quotelev2">&gt; &gt; multiple of comm_in_use_flags)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Degree of the tree for tree-based
</span><br>
<span class="quotelev2">&gt; &gt; operations (must be =&gt; 1 and &lt;= min(control_size, 255))
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: information
</span><br>
<span class="quotelev2">&gt; &gt; &quot;coll_sm_shared_mem_used_bootstrap&quot; (value: &quot;216&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Amount of shared memory used in the shared
</span><br>
<span class="quotelev2">&gt; &gt; memory bootstrap area (in bytes)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;coll_sm_info_num_procs&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Number of processes to use for the
</span><br>
<span class="quotelev2">&gt; &gt; calculation of the shared_mem_size MCA information parameter (must
</span><br>
<span class="quotelev2">&gt; &gt; be =&gt; 2)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: information
</span><br>
<span class="quotelev2">&gt; &gt; &quot;coll_sm_shared_mem_used_data&quot; (value: &quot;548864&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Amount of shared memory used in the shared
</span><br>
<span class="quotelev2">&gt; &gt; memory data area for info_num_procs processes (in bytes)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter &quot;coll_tuned_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;30&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Priority of the tuned coll component
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;32768&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Size of communicator were we stop pre-
</span><br>
<span class="quotelev2">&gt; &gt; allocating memory for the fixed internal buffer used for message
</span><br>
<span class="quotelev2">&gt; &gt; requests etc that is hung off the communicator data segment. I.e. if
</span><br>
<span class="quotelev2">&gt; &gt; you have a 100'000 nodes you might not want to pre-allocate 200'000
</span><br>
<span class="quotelev2">&gt; &gt; request handle slots per communicator instance!
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;coll_tuned_init_tree_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Inital fanout used in the tree topologies
</span><br>
<span class="quotelev2">&gt; &gt; for each communicator. This is only an initial guess, if a tuned
</span><br>
<span class="quotelev2">&gt; &gt; collective needs a different fanout for an operation, it build it
</span><br>
<span class="quotelev2">&gt; &gt; dynamically. This parameter is only for the first guess and might
</span><br>
<span class="quotelev2">&gt; &gt; save a little time
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;coll_tuned_init_chain_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Inital fanout used in the chain (fanout
</span><br>
<span class="quotelev2">&gt; &gt; followed by pipeline) topologies for each communicator. This is only
</span><br>
<span class="quotelev2">&gt; &gt; an initial guess, if a tuned collective needs a different fanout for
</span><br>
<span class="quotelev2">&gt; &gt; an operation, it build it dynamically. This parameter is only for
</span><br>
<span class="quotelev2">&gt; &gt; the first guess and might save a little time
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;coll_tuned_use_dynamic_rules&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Switch used to decide if we use static
</span><br>
<span class="quotelev2">&gt; &gt; (compiled/if statements) or dynamic (built at runtime) decision
</span><br>
<span class="quotelev2">&gt; &gt; function rules
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA io: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;io_base_freelist_initial_size&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA io: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;io_base_freelist_max_size&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA io: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;io_base_freelist_increment&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Increment size of the MPI-2 IO request
</span><br>
<span class="quotelev2">&gt; &gt; freelist
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the io framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA io: parameter &quot;io_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the io framework (0 =
</span><br>
<span class="quotelev2">&gt; &gt; no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA io: parameter &quot;io_romio_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Priority of the io romio component
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA io: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;io_romio_delete_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Delete priority of the io romio component
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA io: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;io_romio_enable_parallel_optimizations&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Enable set of Open MPI-added options to
</span><br>
<span class="quotelev2">&gt; &gt; improve collective file i/o performance
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the mpool framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter &quot;mpool_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the mpool framework (0
</span><br>
<span class="quotelev2">&gt; &gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpool_rdma_rcache_name&quot; (current value: &quot;vma&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           The name of the registration cache the
</span><br>
<span class="quotelev2">&gt; &gt; mpool should use
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpool_rdma_rcache_size_limit&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           the maximum size of registration cache in
</span><br>
<span class="quotelev2">&gt; &gt; bytes. 0 is unlimited (default 0)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpool_rdma_print_stats&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           print pool usage statistics at the end of
</span><br>
<span class="quotelev2">&gt; &gt; the run
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter &quot;mpool_rdma_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;bucket&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Name of allocator component to use with sm
</span><br>
<span class="quotelev2">&gt; &gt; mpool
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter &quot;mpool_sm_max_size&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;536870912&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maximum size of the sm mpool shared memory
</span><br>
<span class="quotelev2">&gt; &gt; file
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;134217728&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Minimum size of the sm mpool shared memory
</span><br>
<span class="quotelev2">&gt; &gt; file
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpool_sm_per_peer_size&quot; (current value: &quot;33554432&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Size (in bytes) to allocate per local peer
</span><br>
<span class="quotelev2">&gt; &gt; in the sm mpool shared memory file, bounded by min_size and max_size
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter &quot;mpool_sm_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Enable verbose output for mpool sm  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter &quot;mpool_sm_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpool_base_use_mem_hooks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           use memory hooks for deregistering freed
</span><br>
<span class="quotelev2">&gt; &gt; memory
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter &quot;mpool_use_mem_hooks&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           (deprecated, use mpool_base_use_mem_hooks)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpool_base_disable_sbrk&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           use mallopt to override calling sbrk
</span><br>
<span class="quotelev2">&gt; &gt; (doesn't return memory to OS!)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: parameter &quot;mpool_disable_sbrk&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           (deprecated, use
</span><br>
<span class="quotelev2">&gt; &gt; mca_mpool_base_disable_sbrk)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the pml framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: parameter &quot;pml_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the pml framework (0 =
</span><br>
<span class="quotelev2">&gt; &gt; no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Initial size of request free lists
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maximum size of request free lists
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Number of elements to add when growing
</span><br>
<span class="quotelev2">&gt; &gt; request free lists
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: parameter &quot;pml_cm_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;30&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           CM PML selection priority
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: parameter &quot;pml_ob1_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;20&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;pml_ob1_send_pipeline_depth&quot; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;pml_ob1_recv_pipeline_depth&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the bml framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA bml: parameter &quot;bml_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the bml framework (0 =
</span><br>
<span class="quotelev2">&gt; &gt; no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA bml: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;bml_r2_show_unreach_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Show error message when procs are
</span><br>
<span class="quotelev2">&gt; &gt; unreachable
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA bml: parameter &quot;bml_r2_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the rcache framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA rcache: parameter &quot;rcache_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the rcache framework
</span><br>
<span class="quotelev2">&gt; &gt; (0 = no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA rcache: parameter &quot;rcache_vma_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_base_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           If btl_base_debug is 1 standard debug is
</span><br>
<span class="quotelev2">&gt; &gt; output, if &gt; 1 verbose debug is output
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the btl framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the btl framework (0 =
</span><br>
<span class="quotelev2">&gt; &gt; no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Output some verbose OpenIB BTL information
</span><br>
<span class="quotelev2">&gt; &gt; (0 = no output, nonzero = output)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_warn_no_hca_params_found&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Warn when no HCA-specific parameters are
</span><br>
<span class="quotelev2">&gt; &gt; found in the INI file specified by the btl_openib_hca_param_files
</span><br>
<span class="quotelev2">&gt; &gt; MCA parameter (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_warn_default_gid_prefix&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Warn when there is more than one active
</span><br>
<span class="quotelev2">&gt; &gt; ports and at least one of them connected to the network with only
</span><br>
<span class="quotelev2">&gt; &gt; default GID prefix configured (0 = do not warn; any other value =
</span><br>
<span class="quotelev2">&gt; &gt; warn)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_want_fork_support&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether fork support is desired or not
</span><br>
<span class="quotelev2">&gt; &gt; (negative = try to enable fork support, but continue even if it is
</span><br>
<span class="quotelev2">&gt; &gt; not available, 0 = do not enable fork support, positive = try to
</span><br>
<span class="quotelev2">&gt; &gt; enable fork support and fail if it is not available)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_hca_param_files&quot; (current value: &quot;/usr/local/openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; share/openmpi/mca-btl-openib-hca-params.ini&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Colon-delimited list of INI-style files
</span><br>
<span class="quotelev2">&gt; &gt; that contain HCA vendor/part-specific parameters
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_max_btls&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maximum number of HCA ports to use (-1 =
</span><br>
<span class="quotelev2">&gt; &gt; use all available, otherwise must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_free_list_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Intial size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maximum size of free lists (-1 = infinite,
</span><br>
<span class="quotelev2">&gt; &gt; otherwise must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Increment size of free lists (must be &gt;=  
</span><br>
<span class="quotelev1">&gt; 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_mpool&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;rdma&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Name of the memory pool to be used (it is
</span><br>
<span class="quotelev2">&gt; &gt; unlikely that you will ever want to change this
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_reg_mru_len&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Length of the registration cache most
</span><br>
<span class="quotelev2">&gt; &gt; recently used list (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_ib_cq_size&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;1000&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Size of the IB completion queue (will
</span><br>
<span class="quotelev2">&gt; &gt; automatically be set to a minimum of (2 * number_of_peers *
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_rd_num))
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_ib_sg_list_size&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Size of IB segment list (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_ib_pkey_ix&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           InfiniBand pkey index (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_ib_pkey_val&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           InfiniBand pkey value(must be &gt; 0 and &lt;
</span><br>
<span class="quotelev2">&gt; &gt; 0xffff)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_ib_psn&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           InfiniBand packet sequence starting number
</span><br>
<span class="quotelev2">&gt; &gt; (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_ib_qp_ous_rd_atom&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           InfiniBand outstanding atomic reads (must
</span><br>
<span class="quotelev2">&gt; &gt; be &gt;= 0)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_ib_mtu&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;3&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           IB MTU, in bytes (if not specified in INI
</span><br>
<span class="quotelev2">&gt; &gt; files).  Valid values are: 1=256 bytes, 2=512 bytes, 3=1024 bytes,
</span><br>
<span class="quotelev2">&gt; &gt; 4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_ib_min_rnr_timer&quot; (current value: &quot;5&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           InfiniBand minimum &quot;receiver not ready&quot;
</span><br>
<span class="quotelev2">&gt; &gt; timer, in seconds (must be &gt;= 0 and &lt;= 31)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           InfiniBand transmit timeout, plugged into
</span><br>
<span class="quotelev2">&gt; &gt; formula: 4.096 microseconds * (2^btl_openib_ib_timeout)(must be &gt;= 0
</span><br>
<span class="quotelev2">&gt; &gt; and &lt;= 31)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_ib_retry_count&quot; (current value: &quot;7&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           InfiniBand transmit retry count (must be
</span><br>
<span class="quotelev3">&gt; &gt; &gt;= 0 and &lt;= 7)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_ib_rnr_retry&quot; (current value: &quot;7&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           InfiniBand &quot;receiver not ready&quot; retry
</span><br>
<span class="quotelev2">&gt; &gt; count (must be &gt;= 0 and &lt;= 7)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_ib_max_rdma_dst_ops&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           InfiniBand maximum pending RDMA
</span><br>
<span class="quotelev2">&gt; &gt; destination operations (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_ib_service_level&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           InfiniBand service level (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_ib_static_rate&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           InfiniBand static rate (must be &gt;= 0;
</span><br>
<span class="quotelev2">&gt; &gt; defulat: %d)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_exclusivity&quot; (current value: &quot;1024&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           OpenIB BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_rd_num&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Number of receive descriptors to post to a
</span><br>
<span class="quotelev2">&gt; &gt; queue pair (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_rd_low&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;6&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Low water mark before reposting occurs
</span><br>
<span class="quotelev2">&gt; &gt; (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_rd_win&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Window size at which generate explicit
</span><br>
<span class="quotelev2">&gt; &gt; credit message (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_use_srq&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           If nonzero, use the InfiniBand shared
</span><br>
<span class="quotelev2">&gt; &gt; receive queue (&quot;SRQ&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_srq_rd_max&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;1000&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maxium number of receive descriptors
</span><br>
<span class="quotelev2">&gt; &gt; posted per SRQ (only relevant if btl_openib_use_srq is true; must be
</span><br>
<span class="quotelev3">&gt; &gt; &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_srq_rd_per_peer&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Number of receive descriptors posted per
</span><br>
<span class="quotelev2">&gt; &gt; peer in the SRQ (only relevant if btl_openib_use_srq is true; must
</span><br>
<span class="quotelev2">&gt; &gt; be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_srq_sd_max&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maximum number of send descriptors posted
</span><br>
<span class="quotelev2">&gt; &gt; (only relevant if btl_openib_use_srq is true; must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_use_eager_rdma&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Use RDMA for eager messages
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_eager_rdma_threshold&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Use RDMA for short messages after this
</span><br>
<span class="quotelev2">&gt; &gt; number of messages are received from a given peer (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_max_eager_rdma&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maximum number of peers allowed to use
</span><br>
<span class="quotelev2">&gt; &gt; RDMA for short messages (RDMA is used for all long messages, except
</span><br>
<span class="quotelev2">&gt; &gt; if explicitly disabled, such as with the &quot;dr&quot; pml) (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_eager_rdma_num&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Number of RDMA buffers to allocate for
</span><br>
<span class="quotelev2">&gt; &gt; small messages(must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_btls_per_lid&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Number of BTLs to create for each
</span><br>
<span class="quotelev2">&gt; &gt; InfiniBand LID (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_max_lmc&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maximum number of LIDs to use for each HCA
</span><br>
<span class="quotelev2">&gt; &gt; port (must be &gt;= 0, where 0 = use all available)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_buffer_alignment&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Prefered communication buffer alignment,
</span><br>
<span class="quotelev2">&gt; &gt; in bytes (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_eager_limit&quot; (current value: &quot;12288&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Eager send limit, in bytes (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_min_send_size&quot; (current value: &quot;32768&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Minimum send size, in bytes (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_max_send_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maximum send size, in bytes (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_min_rdma_size&quot; (current value: &quot;1048576&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Minimum RDMA size, in bytes (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_max_rdma_size&quot; (current value: &quot;1048576&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maximium RDMA size, in bytes (must be &gt;=  
</span><br>
<span class="quotelev1">&gt; 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_flags&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;54&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           BTL flags, added together: SEND=1, PUT=2,
</span><br>
<span class="quotelev2">&gt; &gt; GET=4 (cannot be 0)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Approximate maximum bandwidth of each
</span><br>
<span class="quotelev2">&gt; &gt; network interface in megabits per second (if 0, filled in at run-
</span><br>
<span class="quotelev2">&gt; &gt; time by querying the HCA, otherwise must be &gt; 0)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: information
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_have_fork_support&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether the OpenFabrics stack supports
</span><br>
<span class="quotelev2">&gt; &gt; applications that invoke the &quot;fork()&quot; system call or not (0 = no, 1
</span><br>
<span class="quotelev2">&gt; &gt; = yes).  Note that this value does NOT indicate whether the system
</span><br>
<span class="quotelev2">&gt; &gt; being run on supports &quot;fork()&quot; with OpenFabrics applications or not.
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_openib_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_self_free_list_num&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Number of fragments by default
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_self_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maximum number of fragments
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_self_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Increment by this number of fragments
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_self_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Eager size fragmeng (before the rendez-
</span><br>
<span class="quotelev2">&gt; &gt; vous ptotocol)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_self_min_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Minimum fragment size after the rendez- 
</span><br>
<span class="quotelev1">&gt; vous
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_self_max_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maximum fragment size after the rendez- 
</span><br>
<span class="quotelev1">&gt; vous
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_self_min_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maximum fragment size for the RDMA  
</span><br>
<span class="quotelev1">&gt; transfer
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_self_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maximum fragment size for the RDMA  
</span><br>
<span class="quotelev1">&gt; transfer
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_self_exclusivity&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Device exclusivity
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_self_flags&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Active behavior flags
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_self_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;65535&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_latency&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;100&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_max_procs&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;2&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_mpool&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;sm&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;32768&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_sm_size_of_cb_queue&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_sm_cb_lazy_free_freq&quot; (current value: &quot;120&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;apnet0,apnet1,apnet2,apnet3&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;32&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_tcp_endpoint_cache&quot; (current value: &quot;30720&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_flags&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;122&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_tcp_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_base_include&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_base_exclude&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           This parameter is used to turn on warning
</span><br>
<span class="quotelev2">&gt; &gt; messages when certain NICs are not used
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the mtl framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA mtl: parameter &quot;mtl_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the mtl framework (0 =
</span><br>
<span class="quotelev2">&gt; &gt; no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the topo framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA topo: parameter &quot;topo_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the topo framework (0
</span><br>
<span class="quotelev2">&gt; &gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the osc framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA osc: parameter &quot;osc_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the osc framework (0 =
</span><br>
<span class="quotelev2">&gt; &gt; no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Enable optimizations available only if
</span><br>
<span class="quotelev2">&gt; &gt; MPI_LOCK is not used.
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA osc: parameter &quot;osc_pt2pt_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;16384&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Max size of eagerly sent data
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: parameter &quot;errmgr_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the errmgr framework
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the errmgr framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: parameter &quot;errmgr_hnp_debug&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: parameter &quot;errmgr_hnp_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: parameter &quot;errmgr_orted_debug&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: parameter &quot;errmgr_orted_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: parameter &quot;errmgr_proxy_debug&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: parameter &quot;errmgr_proxy_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: parameter &quot;gpr_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the gpr framework
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the gpr framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: parameter &quot;gpr_null_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: parameter &quot;gpr_replica_debug&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: parameter &quot;gpr_replica_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA iof: parameter &quot;iof_base_window_size&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA iof: parameter &quot;iof_base_service&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0.0.0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA iof: parameter &quot;iof_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the iof framework
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the iof framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA iof: parameter &quot;iof_proxy_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA iof: parameter &quot;iof_svc_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: parameter &quot;ns_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the ns framework
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the ns framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: parameter &quot;ns_proxy_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: parameter &quot;ns_proxy_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: parameter &quot;ns_replica_debug&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: parameter &quot;ns_replica_isolate&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: parameter &quot;ns_replica_maxsize&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: parameter &quot;ns_replica_blocksize&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: parameter &quot;ns_replica_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the oob framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter &quot;oob_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the oob framework (0 =
</span><br>
<span class="quotelev2">&gt; &gt; no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;60&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter &quot;oob_tcp_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter &quot;oob_tcp_if_include&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Comma-delimited list of TCP interfaces to
</span><br>
<span class="quotelev2">&gt; &gt; use
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;apnet0,apnet1,apnet2,apnet3&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Comma-delimited list of TCP interfaces to
</span><br>
<span class="quotelev2">&gt; &gt; exclude
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Enable (1) / disable (0) random sleep for
</span><br>
<span class="quotelev2">&gt; &gt; connection wireup
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;event&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Mode for HNP to accept incoming
</span><br>
<span class="quotelev2">&gt; &gt; connections: event, listen_thread
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;oob_tcp_listen_thread_max_queue&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           High water mark for queued accepted socket
</span><br>
<span class="quotelev2">&gt; &gt; list size
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;oob_tcp_listen_thread_max_time&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Maximum amount of time (in milliseconds)
</span><br>
<span class="quotelev2">&gt; &gt; to wait between processing accepted socket list
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;oob_tcp_accept_spin_count&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Number of times to let accept return
</span><br>
<span class="quotelev2">&gt; &gt; EWOULDBLOCK before updating accepted socket list
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter &quot;oob_tcp_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter &quot;oob_base_include&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Components to include for oob framework
</span><br>
<span class="quotelev2">&gt; &gt; selection
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: parameter &quot;oob_base_exclude&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Components to exclude for oob framework
</span><br>
<span class="quotelev2">&gt; &gt; selection
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: parameter &quot;ras_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Enable debugging for the RAS framework
</span><br>
<span class="quotelev2">&gt; &gt; (nonzero = enabled)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;ras_dash_host_priority&quot; (current value: &quot;5&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Selection priority for the dash_host RAS
</span><br>
<span class="quotelev2">&gt; &gt; component
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: parameter &quot;ras_gridengine_debug&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Enable debugging output for the gridengine
</span><br>
<span class="quotelev2">&gt; &gt; ras component
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;ras_gridengine_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Priority of the gridengine ras component
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;ras_gridengine_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Enable verbose output for the gridengine
</span><br>
<span class="quotelev2">&gt; &gt; ras component
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;ras_gridengine_show_jobid&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Show the JOB_ID of the Grid Engine job
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;ras_localhost_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Selection priority for the localhost RAS
</span><br>
<span class="quotelev2">&gt; &gt; component
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: parameter &quot;ras_slurm_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Priority of the slurm ras component
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: parameter &quot;ras_tm_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;100&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Priority of the tm ras component
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: parameter &quot;ras_tm_nodefile_dir&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;/var/torque/aux&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           The directory where the PBS nodefile can
</span><br>
<span class="quotelev2">&gt; &gt; be found
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: parameter &quot;rds_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the rds framework
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: parameter &quot;rds_hostfile_debug&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Toggle debug output for hostfile RDS
</span><br>
<span class="quotelev2">&gt; &gt; component
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: parameter &quot;rds_hostfile_path&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;/usr/local/openmpi/etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           ORTE Host filename
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: parameter &quot;rds_hostfile_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: parameter &quot;rds_proxy_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: parameter &quot;rds_resfile_debug&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Toggle debug output for resfile RDS
</span><br>
<span class="quotelev2">&gt; &gt; component
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: parameter &quot;rds_resfile_name&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           ORTE Resource filename
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: parameter &quot;rds_resfile_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the rmaps framework
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;rmaps_base_schedule_policy&quot; (current value: &quot;unspec&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Scheduling Policy for RMAPS. [slot | node]
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Launch one ppn as directed
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Launch n procs/node
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;rmaps_base_no_schedule_local&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           If false, allow scheduling MPI
</span><br>
<span class="quotelev2">&gt; &gt; applications on the same node as mpirun (default).  If true, do not
</span><br>
<span class="quotelev2">&gt; &gt; schedule any MPI applications on the same node as mpirun
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;rmaps_base_no_oversubscribe&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           If true, then do not allow
</span><br>
<span class="quotelev2">&gt; &gt; oversubscription of nodes - mpirun will return an error if there
</span><br>
<span class="quotelev2">&gt; &gt; aren't enough nodes to launch all processes without oversubscribing
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;rmaps_base_display_map&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether to display the process map after
</span><br>
<span class="quotelev2">&gt; &gt; it is computed
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the rmaps framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;rmaps_round_robin_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Toggle debug output for Round Robin RMAPS
</span><br>
<span class="quotelev2">&gt; &gt; component
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;rmaps_round_robin_priority&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Selection priority for Round Robin RMAPS
</span><br>
<span class="quotelev2">&gt; &gt; component
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA rmgr: parameter &quot;rmgr_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the rmgr framework
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the rmgr framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rml: parameter &quot;rml_base_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the rml famework
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the rml framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rml: parameter &quot;rml_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the rml framework (0 =
</span><br>
<span class="quotelev2">&gt; &gt; no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rml: parameter &quot;rml_oob_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;pls_base_reuse_daemons&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           If nonzero, reuse daemons to launch
</span><br>
<span class="quotelev2">&gt; &gt; dynamically spawned processes.  If zero, do not reuse daemons
</span><br>
<span class="quotelev2">&gt; &gt; (default)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the pls framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the pls framework (0 =
</span><br>
<span class="quotelev2">&gt; &gt; no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_gridengine_debug&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Enable debugging of gridengine pls  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;pls_gridengine_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Enable verbose output of the gridengine
</span><br>
<span class="quotelev2">&gt; &gt; qrsh -inherit command
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;pls_gridengine_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Priority of the gridengine pls component
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_gridengine_orted&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;orted&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           The command name that the gridengine pls
</span><br>
<span class="quotelev2">&gt; &gt; component will invoke for the ORTE daemon
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_proxy_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_rsh_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether or not to enable debugging output
</span><br>
<span class="quotelev2">&gt; &gt; for the rsh pls component (0 or 1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;pls_rsh_num_concurrent&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           How many pls_rsh_agent instances to invoke
</span><br>
<span class="quotelev2">&gt; &gt; concurrently (must be &gt; 0)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_rsh_force_rsh&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Force the launcher to always use rsh, even
</span><br>
<span class="quotelev2">&gt; &gt; for local daemons
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_rsh_orted&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;orted&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           The command name that the rsh pls
</span><br>
<span class="quotelev2">&gt; &gt; component will invoke for the ORTE daemon
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_rsh_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Priority of the rsh pls component
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_rsh_delay&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Delay (in seconds) between invocations of
</span><br>
<span class="quotelev2">&gt; &gt; the remote agent, but only used when the &quot;debug&quot; MCA parameter is
</span><br>
<span class="quotelev2">&gt; &gt; true, or the top-level MCA debugging is enabled (otherwise this
</span><br>
<span class="quotelev2">&gt; &gt; value is ignored)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_rsh_reap&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           If set to 1, wait for all the processes to
</span><br>
<span class="quotelev2">&gt; &gt; complete before exiting.  Otherwise, quit immediately -- without
</span><br>
<span class="quotelev2">&gt; &gt; waiting for confirmation that all other processes in the job have
</span><br>
<span class="quotelev2">&gt; &gt; completed.
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;pls_rsh_assume_same_shell&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           If set to 1, assume that the shell on the
</span><br>
<span class="quotelev2">&gt; &gt; remote node is the same as the shell on the local node.  Otherwise,
</span><br>
<span class="quotelev2">&gt; &gt; probe for what the remote shell.
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_rsh_agent&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;ssh : rsh&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           The command used to launch executables on
</span><br>
<span class="quotelev2">&gt; &gt; remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_slurm_debug&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Enable debugging of slurm pls
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_slurm_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection priority
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_slurm_orted&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;orted&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Command to use to start proxy orted
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_slurm_args&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Custom arguments to srun
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_tm_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Enable debugging of the TM pls
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_tm_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Enable verbose output of the TM pls
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_tm_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection priority
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter &quot;pls_tm_orted&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;orted&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Command to use to start proxy orted
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;pls_tm_want_path_check&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Whether the launching process should check
</span><br>
<span class="quotelev2">&gt; &gt; for the pls_tm_orted executable in the PATH before launching (the TM
</span><br>
<span class="quotelev2">&gt; &gt; API does not give an idication of failure; this is a somewhat-lame
</span><br>
<span class="quotelev2">&gt; &gt; workaround; non-zero values enable this check)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for
</span><br>
<span class="quotelev2">&gt; &gt; the sds framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt; &gt; found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: parameter &quot;sds_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the sds framework (0 =
</span><br>
<span class="quotelev2">&gt; &gt; no verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: parameter &quot;sds_env_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: parameter &quot;sds_pipe_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: parameter &quot;sds_seed_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;sds_singleton_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: parameter &quot;sds_slurm_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt; Jeff  Ceason
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4621.php">Chris Slaughter: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Previous message:</strong> <a href="4619.php">Jeff Squyres: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>In reply to:</strong> <a href="4614.php">Jeffrey M Ceason: "Re: [OMPI users] Using mtrace with openmpi segfaults"</a>
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
