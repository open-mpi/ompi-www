<?
$subject_val = "Re: [OMPI users] Connection problem on Linux cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 29 06:56:51 2015" -->
<!-- isoreceived="20150329105651" -->
<!-- sent="Sun, 29 Mar 2015 10:56:47 +0000" -->
<!-- isosent="20150329105647" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection problem on Linux cluster" -->
<!-- id="E6375782-075E-44FD-B5C8-ED8901FD0788_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="F28A112937E208429BD09C805E9A1945090E9EFC_at_CISAMRMBS02.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Connection problem on Linux cluster<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-29 06:56:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26571.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="26569.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>In reply to:</strong> <a href="26569.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26571.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Reply:</strong> <a href="26571.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My $0.02:
<br>
<p>- building under your $HOME is recommended in cases like this, but it's not going to change the functionality of how OMPI works.  I.e., rebuilding under your $HOME will likely not change the result.
<br>
<p>- you have 3 MPI implementations telling you that TCP connections between your VMs doesn't work (OMPI 1.8.x, OMPI 1.6.x, MPICH).  It's therefore likely that there's some kind of TCP blocking going on between your VMs.
<br>
<p>- +1 on what Ralph says: you likely need to talk to your sysadmin to get this problem resolved.  iptables and other firewalls may be disabled on your VMs, but OpenStack (or other sysadmin/network admin-controlled entities) *between* your two VMs may be effecting fireballing policies.  This is quite common in cloud environments.
<br>
<p>- You can use any TCP ping-pong test to verify TCP connectivity between VMs -- i.e., programs that use random TCP ports to communicate; not the &quot;usual&quot; suspects of ports that OpenStack may leave open by default (22, 80, 443, ...etc.).
<br>
<p><p><p><span class="quotelev1">&gt; On Mar 28, 2015, at 7:22 PM, LOTFIFAR F. &lt;foad.lotfifar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I 'll recompile it on the home directory to see how it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: 28 March 2015 23:13
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Connection problem on Linux cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doug is correct, and we usually suggest you build it under your own home directory to make it easier to cleanup at a later time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only thing I can suggest is talking to the sys admin some more about TCP connections between VMs on OpenStack and getting their help. Something is obviously blocking communications, but it is likely something only they can identify. Clouds tend to be finicky in that regard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could also try the standard network diagnostics to see if TCP is capable of getting thru.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 28, 2015, at 4:00 PM, Douglas L Reeder &lt;dlr1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Building as root is a bad idea. Try building it as a regular user, using sudo make install if necessary.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 28, 2015, at 4:53 PM, LOTFIFAR F. &lt;foad.lotfifar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when you said --debug-enable is not activated, I installed it again to make sure. I have only one mpi installed on all VMs. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FYI: I have just tried mpich to see how does it works. it freezes for few minutes then comes back with the error complaining about the firewall!!!! By the way,  I have already have firewall disabled and iptable is set to allow all connections. I checked with system admin and there is no other firewall between the nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here is the output of what you are asked:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ubuntu_at_fehg-node-0:~$ which mpirun 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi/bin/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ubuntu_at_fehg-node-0:~$ ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Package: Open MPI ubuntu_at_fehg-node-0 Distribution
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open MPI: 1.6.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI SVN revision: r28673
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI release date: Jun 26, 2013
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open RTE: 1.6.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open RTE SVN revision: r28673
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open RTE release date: Jun 26, 2013
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     OPAL: 1.6.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OPAL SVN revision: r28673
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OPAL release date: Jun 26, 2013
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MPI API: 2.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Ident string: 1.6.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Prefix: /usr/local/openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Configure host: fehg-node-0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configured by: ubuntu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configured on: Sat Mar 28 20:19:28 UTC 2015
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Configure host: fehg-node-0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built by: root
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built on: Sat Mar 28 20:30:18 UTC 2015
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Built host: fehg-node-0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 bindings: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C compiler: gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   C compiler family name: GNU
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       C compiler version: 4.6.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ compiler: g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 compiler: none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran77 compiler abs: none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fortran77 profiling: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Sparse Groups: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Internal debug support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI interface warnings: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Host topology support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MPI extensions: affinity example
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      VampirTrace support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA memory: linux (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA sysinfo: linux (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: cm (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: cm (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: radix (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: slave (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: slave (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA notifier: command (MCA v2.0, API v1.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Karos
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: 28 March 2015 22:04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Connection problem on Linux cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Something is clearly wrong. Most likely, you are not pointing at the OMPI install that you think you are - or you didn&#146;t really configure it properly. Check the path by running &#147;which mpirun&#148; and ensure you are executing the one you expected. If so, then run &#147;ompi_info&#148; to see how it was configured and sent it to us.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 28, 2015, at 1:36 PM, LOTFIFAR F. &lt;foad.lotfifar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; surprisingly,  it is all that I get!! nothing else come after.  This is the same for openmpi-1.6.5.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: 28 March 2015 20:12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Connection problem on Linux cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did you configure &#151;enable-debug? We aren&#146;t seeing any of the debug output, so I suspect not.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 28, 2015, at 12:56 PM, LOTFIFAR F. &lt;foad.lotfifar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have done it and it is the results:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ubuntu_at_fehg-node-0:~$ mpirun -host fehg-node-7 -mca oob_base_verbose 100 -mca state_base_verbose 10 hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fehg-node-0:30034] mca: base: components_open: Looking for oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fehg-node-0:30034] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fehg-node-0:30034] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fehg-node-0:30034] mca: base: components_open: component tcp register function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fehg-node-0:30034] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fehg-node-7:31138] mca: base: components_open: Looking for oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fehg-node-7:31138] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fehg-node-7:31138] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fehg-node-7:31138] mca: base: components_open: component tcp register function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [fehg-node-7:31138] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; freeze ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of LOTFIFAR F. [foad.lotfifar_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: 28 March 2015 18:49
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Connection problem on Linux cluster
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fehg_node_1 and fehg-node-7 are the same. it is just a typo. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Correction: VM names are fehg-node-0 and fehg-node-7.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: 28 March 2015 18:23
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Connection problem on Linux cluster
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Just to be clear: do you have two physical nodes? Or just one physical node and you are running two VMs on it?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mar 28, 2015, at 10:51 AM, LOTFIFAR F. &lt;foad.lotfifar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have a floating IP for accessing nodes from outside of the cluster and internal ip addresses. I tried to run the jobs with both of them (both ip addresses) but it makes no difference. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have just installed openmpi 1.6.5 to see how does this version works. In this case I get nothing and I have to press Crtl+c. not output or error is shown.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent: 28 March 2015 17:03
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Connection problem on Linux cluster
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You mentioned running this in a VM - is that IP address correct for getting across the VMs?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mar 28, 2015, at 8:38 AM, LOTFIFAR F. &lt;foad.lotfifar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi , 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am wondering how can I solve this problem. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; System Spec:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1- Linux cluster with two nodes (master and slave) with Ubuntu 12.04 LTS 32bit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2- openmpi 1.8.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I do a simple test running on fehg_node_0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; mpirun -host fehg_node_0,fehg_node_1 hello_world -mca oob_base_verbose 20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and I get the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to another process:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Local host:    fehg-node-0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Remote host:   10.104.5.40
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This usually is caused by:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   and network routing requirements).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Verbose:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1- I have full access to the VMs on the cluster and setup everything myself
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2- Firewall and iptables are all disabled on the nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3- nodes can ssh to each other with  no problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 4- non-interactive bash calls works fine i.e. when I run ssh othernode env | grep PATH from both nodes, both PATH and LD_LIBRARY_PATH are set correctly
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 5- I have checked the posts, a similar problem reported for Solaris but I could not find a clue about mine. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 6- run with --enable-orterun-prefix-by-default does not make any changes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 7-  I see orte is running on the other node when I check processes, but nothing happens after that and the error happens.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Karos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26555.php">http://www.open-mpi.org/community/lists/users/2015/03/26555.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26557.php">http://www.open-mpi.org/community/lists/users/2015/03/26557.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26562.php">http://www.open-mpi.org/community/lists/users/2015/03/26562.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26564.php">http://www.open-mpi.org/community/lists/users/2015/03/26564.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26566.php">http://www.open-mpi.org/community/lists/users/2015/03/26566.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26567.php">http://www.open-mpi.org/community/lists/users/2015/03/26567.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26569.php">http://www.open-mpi.org/community/lists/users/2015/03/26569.php</a>
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
<li><strong>Next message:</strong> <a href="26571.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="26569.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>In reply to:</strong> <a href="26569.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26571.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Reply:</strong> <a href="26571.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
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
