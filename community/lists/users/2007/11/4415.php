<?
$subject_val = "Re: [OMPI users] OpenMPI - can you switch off threads?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 17:10:39 2007" -->
<!-- isoreceived="20071106221039" -->
<!-- sent="Tue, 06 Nov 2007 14:10:34 -0800 (PST)" -->
<!-- isosent="20071106221034" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI - can you switch off threads?" -->
<!-- id="Pine.GSO.4.64.0711061356092.10274_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4730C07F.6010503_at_open-mpi.org" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-06 17:10:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4416.php">Jeff Squyres: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="4414.php">Andrew Friedley: "Re: [OMPI users] OpenMPI - can you switch off threads?"</a>
<li><strong>In reply to:</strong> <a href="4414.php">Andrew Friedley: "Re: [OMPI users] OpenMPI - can you switch off threads?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew,
<br>
<p>Thanks for looking. These machines are SUN X2200 and looking at the OUI of
<br>
the card it's a generic SUN Mellanox HCA.
<br>
This is SuSE SLES10 SP1 and the QuickSilver(SilverStorm) 4.1.0.0.1 software
<br>
release.
<br>
<p>02:00.0 InfiniBand: Mellanox Technologies MT25208 InfiniHost III Ex (Tavor compatibility mode) (rev a0)
<br>
HCA #0: MT25208 Tavor Compat, Lion Cub, revision A0
<br>
&nbsp;&nbsp;&nbsp;Primary image is valid, unknown source
<br>
&nbsp;&nbsp;&nbsp;Secondary image is valid, unknown source
<br>
<p>&nbsp;&nbsp;&nbsp;Vital Product Data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product Name: Lion cub
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P/N: 375-3382-01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E/C: A1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/N: 1388FMH-0728200266
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Freq/Power: N/A
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checksum: Ok
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Code: N/A
<br>
<p>s1471:/proc/iba/mt23108/1/port2 # cat info 
<br>
Port 2 Info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PortState: Active           PhysState: LinkUp    DownDefault: Polling
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LID:    0x0392              LMC: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Subnet: 0xfe80000000000000  GUID: 0x0003ba000100430e
<br>
&nbsp;&nbsp;&nbsp;&nbsp;SMLID:  0x0001   SMSL:  0   RespTimeout :  33 ms  SubnetTimeout:  536 ms
<br>
&nbsp;&nbsp;&nbsp;&nbsp;M_KEY:  0x0000000000000000  Lease:     0 s       Protect: Readonly
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTU:       Active:    2048  Supported:    2048  VL Stall: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LinkWidth: Active:      4x  Supported:    1-4x  Enabled:    1-4x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LinkSpeed: Active:   2.5Gb  Supported:   2.5Gb  Enabled:   2.5Gb
<br>
&nbsp;&nbsp;&nbsp;&nbsp;VLs:       Active:     4+1  Supported:     4+1  HOQLife: 4096 ns
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Capability 0x02010048: CR CM SL Trap
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Violations: M_Key:     0 P_Key:     0 Q_Key:     0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ErrorLimits: Overrun: 15 LocalPhys: 15  DiagCode: 0x0000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P_Key Enforcement: In: Off Out: Off  FilterRaw: In: Off Out: Off
<br>
<p>s1471:/proc/iba/mt23108/1/port2 # cat /etc/dat.conf
<br>
#
<br>
# DAT 1.1 configuration file
<br>
#
<br>
# Each entry should have the following fields:
<br>
#
<br>
# &lt;ia_name&gt; &lt;api_version&gt; &lt;threadsafety&gt; &lt;default&gt; &lt;lib_path&gt; \ 
<br>
#           &lt;provider_version&gt; &lt;ia_params&gt; &lt;platform_params&gt;
<br>
#
<br>
# [ICS VERSION STRING: @(#) ./config/dat.conf.64 4_1_0_0_1G [10/22/07 19:25]
<br>
<p># Following are examples of valid entries:
<br>
#Hca  u1.1 nonthreadsafe default /lib64/libdapl.so ri.1.1 &quot; &quot; &quot; &quot;
<br>
#Hca0 u1.1 nonthreadsafe default /lib64/libdapl.so ri.1.1 &quot;InfiniHost0 &quot; &quot; &quot;
<br>
#Hca1 u1.1 nonthreadsafe default /lib64/libdapl.so ri.1.1 &quot;InfiniHost1 &quot; &quot; &quot;
<br>
#Hca0Port1 u1.1 nonthreadsafe default /lib64/libdapl.so ri.1.1 &quot;InfiniHost0 ib1&quot; &quot; &quot;
<br>
#Hca0Port2 u1.1 nonthreadsafe default /lib64/libdapl.so ri.1.1 &quot;InfiniHost0 ib2&quot; &quot; &quot;
<br>
#=======
<br>
InfiniHost0 u1.1 nonthreadsafe default /lib64/libdapl.so ri.1.1 &quot; &quot; &quot; &quot;
<br>
<p>Qlogic, now say they can reproduce it.
<br>
<p>However, as we use the SilverStorm stuff a lot with many compilers and for
<br>
such as IB transport for the Lustre FileSystem, we try to stick with not
<br>
to many flavors of IB/MPI but also sometimes use OFED and Qlogics' OFED for
<br>
their PathScale cards. We also throw in Scali, MVAPICH amd mpich - so we
<br>
have a real mix to handle.
<br>
<p>Regarding the lack of mvapi support in OpenMPI there's just udapl left for
<br>
such as SilverStorm :-(
<br>
<p>Thanks for looking,
<br>
Mostyn
<br>
<p><p>On Tue, 6 Nov 2007, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mostyn Lewis wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Andrew,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Failure looks like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + mpirun --prefix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tools/openmpi/1.3a1r16632_svn/infinicon/gcc64/4.1.2/udapl/suse_sles_1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + 0/x86_64/opteron -np 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  -machinefile H ./a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 of 8 on s1470
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 1 of 8 on s1470
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 4 of 8 on s1469
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 2 of 8 on s1470
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 7 of 8 on s1469
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 5 of 8 on s1469
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 6 of 8 on s1469
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 3 of 8 on s1470
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 30989:a.out *-&gt;0 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 30988:a.out *-&gt;0 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 30990:a.out *-&gt;0 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 30372:a.out *-&gt;0 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 30991:a.out *-&gt;0 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 30370:a.out *-&gt;0 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 30369:a.out *-&gt;0 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 30371:a.out *-&gt;0 (f=noaffinity,0,1,2,3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  get ASYNC ERROR = 6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought this might be coming from the uDAPL BTL but I don't see where
</span><br>
<span class="quotelev1">&gt; in the could this could possibly be printed from.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s1469:30369] *** Process received signal *** [s1469:30369] Signal:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Segmentation fault (11) [s1469:30369] Signal code: Address not mapped
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (1) [s1469:30369] Failing at address: 0x110 [s1469:30369] [ 0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libpthread.so.0 [0x2b528ceefc10] [s1469:30369] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libdapl.so(dapl_llist_next_entry+0x25) [0x2b528fba5df5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s1469:30369] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and in a /var/log/messages I see:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nov  5 14:46:00 s1469 sshd[30363]: Accepted publickey for mostyn from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 10.173.132.37 port 36211 ssh2 Nov  5 14:46:25 s1469 kernel: TVpd:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; !ERROR! Async Event:TAVOR_EQE_TYPE_CQ_ERR: (CQ Access Error) cqn:641
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nov
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 5 14:46:25 s1469 kernel: a.out[30374]: segfault at 0000000000000110
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rip
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 00002b528fba5df5 rsp 00000000410010b0 error 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This makes me wonder if you're using the right DAT libraries.  Take a
</span><br>
<span class="quotelev1">&gt; look at your dat.conf, it's usually found in /etc and make sure that it
</span><br>
<span class="quotelev1">&gt; is configured properly for the Qlogic stuff, and does NOT contain any
</span><br>
<span class="quotelev1">&gt; lines for any other stuff (like OFED-based interfaces).  Usually each
</span><br>
<span class="quotelev1">&gt; line contains a path to a specific library to use for a particular
</span><br>
<span class="quotelev1">&gt; interface, make sure it's the library you want.  You might have to
</span><br>
<span class="quotelev1">&gt; contact you uDAPL vendor for help on that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is repoducible.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this OpenMPI or your libdapl that's doing this, you think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't be sure -- every uDAPL implementation seems to interpret the
</span><br>
<span class="quotelev1">&gt; spec differently (or completely change or leave out some functionality),
</span><br>
<span class="quotelev1">&gt; making it hell to provide portable uDAPL support.  And currently the
</span><br>
<span class="quotelev1">&gt; uDAPL BTL has seen little/no testing outside of Sun's and OFED's uDAPL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What kind of interface adapters are you using?  Sounds like some kind of
</span><br>
<span class="quotelev1">&gt; IB hardware; if possible I recommend using the OFED (openib BTL) or PSM
</span><br>
<span class="quotelev1">&gt; (PSM MTL) interfaces instead of uDAPL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + ompi_info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Open MPI: 1.3a1svn11022007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Open MPI SVN revision: svn11022007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Open RTE: 1.3a1svn11022007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Open RTE SVN revision: svn11022007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     OPAL: 1.3a1svn11022007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        OPAL SVN revision: svn11022007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   Prefix:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tools/openmpi/1.3a1r16632_svn/infinicon/gcc64/4.1.2/udapl/suse_sles_10/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x86_64/opter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           Configure host: s1471
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Configured by: root
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Configured on: Fri Nov  2 16:20:29 PDT 2007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           Configure host: s1471
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Built by: mostyn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Built on: Fri Nov  2 16:30:07 PDT 2007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Built host: s1471
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               C compiler: gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             C++ compiler: g++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Sparse Groups: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            MCA paffinity: linux (MCA v1.0, API v1.1, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.1, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA coll: inter (MCA v1.0, API v1.1, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA coll: self (MCA v1.0, API v1.1, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.1, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA coll: tuned (MCA v1.0, API v1.1, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA pml: dr (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA btl: udapl (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA osc: rdma (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              MCA grpcomm: basic (MCA v1.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA odls: default (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA routed: tree (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA routed: unity (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA filem: rsh (MCA v1.0, API v1.0, Component v1.3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Mostyn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 6 Nov 2007, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All thread support is disabled by default in Open MPI; the uDAPL BTL is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; neither thread safe nor makes use of a threaded uDAPL implementation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For completeness, the thread support is controlled by the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-threads and --enable-progress-threads options to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure script.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The referense you're seeing to libpthread.so.0 is a side effect of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; way we print backtraces when crashes occur and can be ignored.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How exactly does your MPI program fail?  Make sure you take a look at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> and provide all relevant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andrew
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mostyn Lewis wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to build a udapl OpenMPI from last Friday's SVN and using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Qlogic/QuickSilver/SilverStorm 4.1.0.0.1 software. I can get it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; made and it works in machine. With IB between 2 machines is fails
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; near termination of a job. Qlogic says they don't have a threaded
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; udapl (libpthread is in the traceback).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How do you (can you?) configure pthreads away alltogether?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mostyn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4416.php">Jeff Squyres: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="4414.php">Andrew Friedley: "Re: [OMPI users] OpenMPI - can you switch off threads?"</a>
<li><strong>In reply to:</strong> <a href="4414.php">Andrew Friedley: "Re: [OMPI users] OpenMPI - can you switch off threads?"</a>
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
