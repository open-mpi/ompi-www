<?
$subject_val = "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 31 20:11:51 2012" -->
<!-- isoreceived="20120901001151" -->
<!-- sent="Fri, 31 Aug 2012 20:11:41 -0400" -->
<!-- isosent="20120901001141" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] some mpi processes &amp;quot;disappear&amp;quot; on a cluster of servers" -->
<!-- id="504152BD.3000102_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAPUxaiSsVXXWZrSLR0Mja62W_mJzYZtV7ssc7XREnVJf8-Z29w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-31 20:11:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20087.php">John Hearns: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20085.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20085.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20087.php">John Hearns: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20087.php">John Hearns: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Andrea
<br>
<p>I would guess this is a memory problem.
<br>
Do you know how much memory each node has?
<br>
Do you know the memory that
<br>
each MPI process in the CFD code requires?
<br>
If the program starts swapping/paging into disk, because of
<br>
low memory, those interesting things that you described can happen.
<br>
<p>I would login to the compute nodes and monitor the
<br>
amount of memory being used with &quot;top&quot; right after the program
<br>
starts to run.  If there is a pattern of which node tends to fail,
<br>
track login to that fail-prone node and monitor it.
<br>
<p>Alternatively, if you cluster is running Ganglia,
<br>
you can see the memory use graphically,
<br>
in the Ganglia web page in a web browser.
<br>
<p>If your cluster
<br>
doesn't allow direct user logins to compute nodes,
<br>
you can ask the system administrator to do this for you.
<br>
<p>It may well be that the code has a memory leak, or that
<br>
it has a memory request spike, which may not be caught by
<br>
OpenMPI.
<br>
[Jeff and Ralph will probably correct me soon for
<br>
saying this, and I know the OpenMPI safeguards against
<br>
process misbehavior are great, but ...]
<br>
<p>Anyway, we had several codes here that would make a node go south
<br>
because of either type of memory problem, and subsequently the
<br>
program would die, or the other processes in other nodes would
<br>
continue &quot;running&quot; [i.e. mostly waiting for MPI calls to the
<br>
dead node that would never return] as you described.
<br>
<p>If the problem is benign, i.e., if it is just that the
<br>
memory-per-processor is not large enough to run in 10 processors,
<br>
you can get around it by running in, say, 20 processors.
<br>
<p>Yet another issue that you may check is the stacksize in the
<br>
compute nodes.  Many codes require a large stacksize, i.e.,
<br>
they create large arrays in subroutines, etc, and
<br>
the default stacksize in standard Linux distributions
<br>
may not be as large as needed.
<br>
We use ulimited stacksize in our compute nodes.
<br>
<p>You can ask the system administrator to check this for you,
<br>
and perhaps change it in /etc/security/limits.conf to make it
<br>
unlimited or at least larger than the default.
<br>
The Linux shell command &quot;ulimit -a&quot; [bash] or
<br>
&quot;limit&quot; [tcsh] will tell what the limits are.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 08/31/2012 07:15 PM, Andrea Negri wrote:
<br>
<span class="quotelev1">&gt; Hi, I have been in trouble for a year.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run a pure MPI (no openMP) Fortran fluid dynamical code on a cluster
</span><br>
<span class="quotelev1">&gt; of server, and I obtain a strange behaviour by running the code on
</span><br>
<span class="quotelev1">&gt; multiple nodes.
</span><br>
<span class="quotelev1">&gt; The cluster is formed by 16 pc (1 pc is a node) with a dual core processor.
</span><br>
<span class="quotelev1">&gt; Basically, I'm able to run the code from the login node with the command:
</span><br>
<span class="quotelev1">&gt; mpirun  --mca btl_base_verbose 100 --mca backtrace_base_verbose 100
</span><br>
<span class="quotelev1">&gt; --mca memory_base_verbose 100 --mca sysinfo_base_verbose 100  -nolocal
</span><br>
<span class="quotelev1">&gt; -hostfile ./host_file -n 10  ./zeusmp2.x&gt;&gt;  zmp_errors 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; by selecting one process per core (i.e. in this case I use 5 nodes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code starts, and it runs correctely for some time.
</span><br>
<span class="quotelev1">&gt; After that, an entire node (sometimes two) &quot;disappears&quot; and it cannot
</span><br>
<span class="quotelev1">&gt; be reached with the ssh command, which returns: No route to host.
</span><br>
<span class="quotelev1">&gt; Sometimes the node is still reachable, but the two processes that was
</span><br>
<span class="quotelev1">&gt; running on the node are disappears.
</span><br>
<span class="quotelev1">&gt; In addition, on the other nodes, the others processes are still running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I have a look on the output and error file of mpirun, the following
</span><br>
<span class="quotelev1">&gt; error is present: [btl_tcp_frag.c:215:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: I'm not the admin of the cluster, I've installed the gcc and
</span><br>
<span class="quotelev1">&gt; openmpi on my own because the complier aviable on that machine are 8
</span><br>
<span class="quotelev1">&gt; years old.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I post here some information, if you want other info, you have only to
</span><br>
<span class="quotelev1">&gt; tell me which command I have to type on the bash and I will
</span><br>
<span class="quotelev1">&gt; immediately reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; complier: gcc 4.7 (which was also used to compile openmpi)
</span><br>
<span class="quotelev1">&gt; openmpi version: 1.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; output of &quot;ompi_info --all&quot; from the node where I launch mpirun (which
</span><br>
<span class="quotelev1">&gt; is also the login node of the cluster)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Package: Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;                  Open MPI: 1.6
</span><br>
<span class="quotelev1">&gt;     Open MPI SVN revision: r26429
</span><br>
<span class="quotelev1">&gt;     Open MPI release date: May 10, 2012
</span><br>
<span class="quotelev1">&gt;                  Open RTE: 1.6
</span><br>
<span class="quotelev1">&gt;     Open RTE SVN revision: r26429
</span><br>
<span class="quotelev1">&gt;     Open RTE release date: May 10, 2012
</span><br>
<span class="quotelev1">&gt;                      OPAL: 1.6
</span><br>
<span class="quotelev1">&gt;         OPAL SVN revision: r26429
</span><br>
<span class="quotelev1">&gt;         OPAL release date: May 10, 2012
</span><br>
<span class="quotelev1">&gt;                   MPI API: 2.1
</span><br>
<span class="quotelev1">&gt;              Ident string: 1.6
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA memory: linux (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA carto: file (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: linux (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;           MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;           MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;               MCA sysinfo: linux (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: basic (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: inter (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: self (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: sm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: sync (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                    MCA io: romio (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: csum (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: v (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: self (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: sm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: unity (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: orted (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: tool (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA odls: default (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: cm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: oob (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA routed: cm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA routed: direct (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA routed: linear (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA routed: radix (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA routed: slave (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: env (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: slave (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: tool (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;               MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;               MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;               MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;              MCA notifier: command (MCA v2.0, API v1.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;              MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                    Prefix: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7
</span><br>
<span class="quotelev1">&gt;               Exec_prefix: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7
</span><br>
<span class="quotelev1">&gt;                    Bindir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/bin
</span><br>
<span class="quotelev1">&gt;                   Sbindir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/sbin
</span><br>
<span class="quotelev1">&gt;                    Libdir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/lib
</span><br>
<span class="quotelev1">&gt;                    Incdir:
</span><br>
<span class="quotelev1">&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/include
</span><br>
<span class="quotelev1">&gt;                    Mandir:
</span><br>
<span class="quotelev1">&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/share/man
</span><br>
<span class="quotelev1">&gt;                 Pkglibdir:
</span><br>
<span class="quotelev1">&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/lib/openmpi
</span><br>
<span class="quotelev1">&gt;                Libexecdir:
</span><br>
<span class="quotelev1">&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/libexec
</span><br>
<span class="quotelev1">&gt;               Datarootdir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/share
</span><br>
<span class="quotelev1">&gt;                   Datadir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/share
</span><br>
<span class="quotelev1">&gt;                Sysconfdir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/etc
</span><br>
<span class="quotelev1">&gt;            Sharedstatedir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/com
</span><br>
<span class="quotelev1">&gt;             Localstatedir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/var
</span><br>
<span class="quotelev1">&gt;                   Infodir:
</span><br>
<span class="quotelev1">&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/share/info
</span><br>
<span class="quotelev1">&gt;                Pkgdatadir:
</span><br>
<span class="quotelev1">&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/share/openmpi
</span><br>
<span class="quotelev1">&gt;                 Pkglibdir:
</span><br>
<span class="quotelev1">&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/lib/openmpi
</span><br>
<span class="quotelev1">&gt;             Pkgincludedir:
</span><br>
<span class="quotelev1">&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/include/openmpi
</span><br>
<span class="quotelev1">&gt;   Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configure host: cloud.bo.astro.it
</span><br>
<span class="quotelev1">&gt;             Configured by: andrea
</span><br>
<span class="quotelev1">&gt;             Configured on: Tue Jul 31 10:53:46 CEST 2012
</span><br>
<span class="quotelev1">&gt;            Configure host: cloud.bo.astro.it
</span><br>
<span class="quotelev1">&gt;                  Built by: andrea
</span><br>
<span class="quotelev1">&gt;                  Built on: Tue Jul 31 11:08:33 CEST 2012
</span><br>
<span class="quotelev1">&gt;                Built host: cloud.bo.astro.it
</span><br>
<span class="quotelev1">&gt;                C bindings: yes
</span><br>
<span class="quotelev1">&gt;              C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;        Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;   Fortran90 bindings size: medium
</span><br>
<span class="quotelev1">&gt;                C compiler: /home/andrea/library/gcc/gcc-objects/bin/gcc
</span><br>
<span class="quotelev1">&gt;       C compiler absolute:
</span><br>
<span class="quotelev1">&gt;    C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;        C compiler version: 4.7.1
</span><br>
<span class="quotelev1">&gt;               C char size: 1
</span><br>
<span class="quotelev1">&gt;               C bool size: 1
</span><br>
<span class="quotelev1">&gt;              C short size: 2
</span><br>
<span class="quotelev1">&gt;                C int size: 4
</span><br>
<span class="quotelev1">&gt;               C long size: 8
</span><br>
<span class="quotelev1">&gt;              C float size: 4
</span><br>
<span class="quotelev1">&gt;             C double size: 8
</span><br>
<span class="quotelev1">&gt;            C pointer size: 8
</span><br>
<span class="quotelev1">&gt;              C char align: 1
</span><br>
<span class="quotelev1">&gt;              C bool align: 1
</span><br>
<span class="quotelev1">&gt;               C int align: 4
</span><br>
<span class="quotelev1">&gt;             C float align: 4
</span><br>
<span class="quotelev1">&gt;            C double align: 8
</span><br>
<span class="quotelev1">&gt;              C++ compiler: /home/andrea/library/gcc/gcc-objects/bin/g++
</span><br>
<span class="quotelev1">&gt;     C++ compiler absolute: none
</span><br>
<span class="quotelev1">&gt;        Fortran77 compiler: /home/andrea/library/gcc/gcc-objects/bin/gfortran
</span><br>
<span class="quotelev1">&gt;    Fortran77 compiler abs:
</span><br>
<span class="quotelev1">&gt;        Fortran90 compiler: /home/andrea/library/gcc/gcc-objects/bin/gfortran
</span><br>
<span class="quotelev1">&gt;    Fortran90 compiler abs:
</span><br>
<span class="quotelev1">&gt;         Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;         Fort logical size: 4
</span><br>
<span class="quotelev1">&gt;   Fort logical value true: 1
</span><br>
<span class="quotelev1">&gt;        Fort have integer1: yes
</span><br>
<span class="quotelev1">&gt;        Fort have integer2: yes
</span><br>
<span class="quotelev1">&gt;        Fort have integer4: yes
</span><br>
<span class="quotelev1">&gt;        Fort have integer8: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer16: no
</span><br>
<span class="quotelev1">&gt;           Fort have real4: yes
</span><br>
<span class="quotelev1">&gt;           Fort have real8: yes
</span><br>
<span class="quotelev1">&gt;          Fort have real16: no
</span><br>
<span class="quotelev1">&gt;        Fort have complex8: yes
</span><br>
<span class="quotelev1">&gt;       Fort have complex16: yes
</span><br>
<span class="quotelev1">&gt;       Fort have complex32: no
</span><br>
<span class="quotelev1">&gt;        Fort integer1 size: 1
</span><br>
<span class="quotelev1">&gt;        Fort integer2 size: 2
</span><br>
<span class="quotelev1">&gt;        Fort integer4 size: 4
</span><br>
<span class="quotelev1">&gt;        Fort integer8 size: 8
</span><br>
<span class="quotelev1">&gt;       Fort integer16 size: -1
</span><br>
<span class="quotelev1">&gt;            Fort real size: 4
</span><br>
<span class="quotelev1">&gt;           Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;           Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;          Fort real16 size: 16
</span><br>
<span class="quotelev1">&gt;        Fort dbl prec size: 8
</span><br>
<span class="quotelev1">&gt;            Fort cplx size: 8
</span><br>
<span class="quotelev1">&gt;        Fort dbl cplx size: 16
</span><br>
<span class="quotelev1">&gt;           Fort cplx8 size: 8
</span><br>
<span class="quotelev1">&gt;          Fort cplx16 size: 16
</span><br>
<span class="quotelev1">&gt;          Fort cplx32 size: 32
</span><br>
<span class="quotelev1">&gt;        Fort integer align: 4
</span><br>
<span class="quotelev1">&gt;       Fort integer1 align: 1
</span><br>
<span class="quotelev1">&gt;       Fort integer2 align: 2
</span><br>
<span class="quotelev1">&gt;       Fort integer4 align: 4
</span><br>
<span class="quotelev1">&gt;       Fort integer8 align: 8
</span><br>
<span class="quotelev1">&gt;      Fort integer16 align: -1
</span><br>
<span class="quotelev1">&gt;           Fort real align: 4
</span><br>
<span class="quotelev1">&gt;          Fort real4 align: 4
</span><br>
<span class="quotelev1">&gt;          Fort real8 align: 8
</span><br>
<span class="quotelev1">&gt;         Fort real16 align: 16
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec align: 8
</span><br>
<span class="quotelev1">&gt;           Fort cplx align: 4
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx align: 8
</span><br>
<span class="quotelev1">&gt;          Fort cplx8 align: 4
</span><br>
<span class="quotelev1">&gt;         Fort cplx16 align: 8
</span><br>
<span class="quotelev1">&gt;         Fort cplx32 align: 16
</span><br>
<span class="quotelev1">&gt;               C profiling: yes
</span><br>
<span class="quotelev1">&gt;             C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;            Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev1">&gt;             Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;              Build CFLAGS: -DNDEBUG -g -O2 -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt;                            -pthread
</span><br>
<span class="quotelev1">&gt;            Build CXXFLAGS: -O3 -DNDEBUG -finline-functions -pthread
</span><br>
<span class="quotelev1">&gt;              Build FFLAGS:
</span><br>
<span class="quotelev1">&gt;             Build FCFLAGS:
</span><br>
<span class="quotelev1">&gt;             Build LDFLAGS: -Wl,--rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/home/andrea/library/gcc/gcc-objects/lib64
</span><br>
<span class="quotelev1">&gt;                Build LIBS: -lrt -lnsl  -lutil -lm
</span><br>
<span class="quotelev1">&gt;      Wrapper extra CFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;    Wrapper extra CXXFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;      Wrapper extra FFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;     Wrapper extra FCFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;     Wrapper extra LDFLAGS:
</span><br>
<span class="quotelev1">&gt;        Wrapper extra LIBS: -ldl  -lm -lnuma -lrt -lnsl  -lutil -lm
</span><br>
<span class="quotelev1">&gt;    Internal debug support: no
</span><br>
<span class="quotelev1">&gt;    MPI interface warnings: yes
</span><br>
<span class="quotelev1">&gt;       MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;           libltdl support: no
</span><br>
<span class="quotelev1">&gt;     Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;   mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;           MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;         MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;       Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;     Host topology support: yes
</span><br>
<span class="quotelev1">&gt;            MPI extensions: affinity example
</span><br>
<span class="quotelev1">&gt;     FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;       VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;    MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;      MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;          MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;          MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;    MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_param_files&quot; (current value:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/home/andrea/.openmpi/mca-params.conf:/home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/etc/openmpi-mca-params.conf&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Path for MCA configuration files containing
</span><br>
<span class="quotelev1">&gt; default parameter
</span><br>
<span class="quotelev1">&gt;                            values
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_base_param_file_prefix&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Aggregate MCA parameter file sets
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_base_param_file_path&quot; (current value:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/share/openmpi/amca-param-sets:/home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/bin&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Aggregate MCA parameter Search path
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_base_param_file_path_force&quot;
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Forced Aggregate MCA parameter Search path
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_component_path&quot; (current value:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/lib/openmpi:/home/andrea/.openmpi/components&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Path where to look for Open MPI and ORTE components
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_component_show_load_errors&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;1&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to show errors for components that
</span><br>
<span class="quotelev1">&gt; failed to load or
</span><br>
<span class="quotelev1">&gt;                            not
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_component_disable_dlopen&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to attempt to disable opening
</span><br>
<span class="quotelev1">&gt; dynamic components or not
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;stderr&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Specifies where the default error output
</span><br>
<span class="quotelev1">&gt; stream goes (this is
</span><br>
<span class="quotelev1">&gt;                            separate from distinct help messages).  Accepts a
</span><br>
<span class="quotelev1">&gt;                            comma-delimited list of: stderr, stdout, syslog,
</span><br>
<span class="quotelev1">&gt;                            syslogpri:&lt;notice|info|debug&gt;,
</span><br>
<span class="quotelev1">&gt; syslogid:&lt;str&gt;  (where str is the
</span><br>
<span class="quotelev1">&gt;                            prefix string for all syslog notices),
</span><br>
<span class="quotelev1">&gt; file[:filename] (if
</span><br>
<span class="quotelev1">&gt;                            filename is not specified, a default
</span><br>
<span class="quotelev1">&gt; filename is used),
</span><br>
<span class="quotelev1">&gt;                            fileappend (if not specified, the file is opened for
</span><br>
<span class="quotelev1">&gt;                            truncation), level[:N] (if specified,
</span><br>
<span class="quotelev1">&gt; integer verbose level;
</span><br>
<span class="quotelev1">&gt;                            otherwise, 0 is implied)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value, synonym of:
</span><br>
<span class="quotelev1">&gt; opal_paffinity_alone)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, assume that this job is the only (set of)
</span><br>
<span class="quotelev1">&gt;                            process(es) running on each node and bind processes to
</span><br>
<span class="quotelev1">&gt;                            processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_param_check&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Whether you want MPI API parameters checked
</span><br>
<span class="quotelev1">&gt; at run-time or not.
</span><br>
<span class="quotelev1">&gt;                             Possible values are 0 (no checking) and 1
</span><br>
<span class="quotelev1">&gt; (perform checking at
</span><br>
<span class="quotelev1">&gt;                            run-time)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Yield the processor when waiting for MPI
</span><br>
<span class="quotelev1">&gt; communication (for MPI
</span><br>
<span class="quotelev1">&gt;                            processes, will default to 1 when
</span><br>
<span class="quotelev1">&gt; oversubscribing nodes)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            How often to progress TCP communications (0
</span><br>
<span class="quotelev1">&gt; = never, otherwise
</span><br>
<span class="quotelev1">&gt;                            specified in microseconds)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether MPI_FINALIZE shows all MPI handles
</span><br>
<span class="quotelev1">&gt; that were not freed
</span><br>
<span class="quotelev1">&gt;                            or not
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to actually free MPI objects when
</span><br>
<span class="quotelev1">&gt; their handles are
</span><br>
<span class="quotelev1">&gt;                            freed
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_show_mpi_alloc_mem_leaks&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            If&gt;0, MPI_FINALIZE will show up to this
</span><br>
<span class="quotelev1">&gt; many instances of
</span><br>
<span class="quotelev1">&gt;                            memory allocated by MPI_ALLOC_MEM that was
</span><br>
<span class="quotelev1">&gt; not freed by
</span><br>
<span class="quotelev1">&gt;                            MPI_FREE_MEM
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to show all MCA parameter values
</span><br>
<span class="quotelev1">&gt; during MPI_INIT or not
</span><br>
<span class="quotelev1">&gt;                            (good for reproducability of MPI jobs for
</span><br>
<span class="quotelev1">&gt; debug purposes).
</span><br>
<span class="quotelev1">&gt;                            Accepted values are all, default, file, api,
</span><br>
<span class="quotelev1">&gt; and enviro - or a
</span><br>
<span class="quotelev1">&gt;                            comma delimited combination of them
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_show_mca_params_file&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            If mpi_show_mca_params is true, setting this
</span><br>
<span class="quotelev1">&gt; string to a valid
</span><br>
<span class="quotelev1">&gt;                            filename tells Open MPI to dump all the MCA
</span><br>
<span class="quotelev1">&gt; parameter values
</span><br>
<span class="quotelev1">&gt;                            into a file suitable for reading via the
</span><br>
<span class="quotelev1">&gt; mca_param_files
</span><br>
<span class="quotelev1">&gt;                            parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_keep_peer_hostnames&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, save the string hostnames of all
</span><br>
<span class="quotelev1">&gt; MPI peer processes
</span><br>
<span class="quotelev1">&gt;                            (mostly for error / debugging output
</span><br>
<span class="quotelev1">&gt; messages).  This can add
</span><br>
<span class="quotelev1">&gt;                            quite a bit of memory usage to each MPI process.
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_abort_delay&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, print out an identifying message
</span><br>
<span class="quotelev1">&gt; when MPI_ABORT is
</span><br>
<span class="quotelev1">&gt;                            invoked (hostname, PID of the process that
</span><br>
<span class="quotelev1">&gt; called MPI_ABORT)
</span><br>
<span class="quotelev1">&gt;                            and delay for that many seconds before
</span><br>
<span class="quotelev1">&gt; exiting (a negative
</span><br>
<span class="quotelev1">&gt;                            delay value means to never abort).  This
</span><br>
<span class="quotelev1">&gt; allows attaching of a
</span><br>
<span class="quotelev1">&gt;                            debugger before quitting the job.
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_abort_print_stack&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, print out a stack trace when
</span><br>
<span class="quotelev1">&gt; MPI_ABORT is invoked
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_preconnect_mpi&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value, synonyms: mpi_preconnect_all)
</span><br>
<span class="quotelev1">&gt;                            Whether to force MPI processes to fully
</span><br>
<span class="quotelev1">&gt; wire-up the MPI
</span><br>
<span class="quotelev1">&gt;                            connections between MPI processes during
</span><br>
<span class="quotelev1">&gt; MPI_INIT (vs. making
</span><br>
<span class="quotelev1">&gt;                            connections lazily -- upon the first MPI
</span><br>
<span class="quotelev1">&gt; traffic between each
</span><br>
<span class="quotelev1">&gt;                            process peer pair)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value, deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt;                            mpi_preconnect_mpi)
</span><br>
<span class="quotelev1">&gt;                            Whether to force MPI processes to fully
</span><br>
<span class="quotelev1">&gt; wire-up the MPI
</span><br>
<span class="quotelev1">&gt;                            connections between MPI processes during
</span><br>
<span class="quotelev1">&gt; MPI_INIT (vs. making
</span><br>
<span class="quotelev1">&gt;                            connections lazily -- upon the first MPI
</span><br>
<span class="quotelev1">&gt; traffic between each
</span><br>
<span class="quotelev1">&gt;                            process peer pair)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;-1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to use the &quot;leave pinned&quot; protocol
</span><br>
<span class="quotelev1">&gt; or not.  Enabling
</span><br>
<span class="quotelev1">&gt;                            this setting can help bandwidth performance
</span><br>
<span class="quotelev1">&gt; when repeatedly
</span><br>
<span class="quotelev1">&gt;                            sending and receiving large messages with
</span><br>
<span class="quotelev1">&gt; the same buffers over
</span><br>
<span class="quotelev1">&gt;                            RDMA-based networks (0 = do not use &quot;leave
</span><br>
<span class="quotelev1">&gt; pinned&quot; protocol, 1
</span><br>
<span class="quotelev1">&gt;                            = use &quot;leave pinned&quot; protocol, -1 = allow
</span><br>
<span class="quotelev1">&gt; network to choose at
</span><br>
<span class="quotelev1">&gt;                            runtime).
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_leave_pinned_pipeline&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to use the &quot;leave pinned pipeline&quot;
</span><br>
<span class="quotelev1">&gt; protocol or not.
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_warn_on_fork&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, issue a warning if program forks
</span><br>
<span class="quotelev1">&gt; under conditions
</span><br>
<span class="quotelev1">&gt;                            that could cause system errors
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: information &quot;mpi_have_sparse_group_storage&quot;
</span><br>
<span class="quotelev1">&gt; (value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether this Open MPI installation supports
</span><br>
<span class="quotelev1">&gt; storing of data in
</span><br>
<span class="quotelev1">&gt;                            MPI groups in &quot;sparse&quot; formats (good for
</span><br>
<span class="quotelev1">&gt; extremely large
</span><br>
<span class="quotelev1">&gt;                            process count MPI jobs that create many
</span><br>
<span class="quotelev1">&gt; communicators/groups)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_use_sparse_group_storage&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to use &quot;sparse&quot; storage formats for
</span><br>
<span class="quotelev1">&gt; MPI groups (only
</span><br>
<span class="quotelev1">&gt;                            relevant if mpi_have_sparse_group_storage is 1)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_notify_init_finalize&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, send two notifications during
</span><br>
<span class="quotelev1">&gt; MPI_INIT: one near
</span><br>
<span class="quotelev1">&gt;                            when MPI_INIT starts, and another right
</span><br>
<span class="quotelev1">&gt; before MPI_INIT
</span><br>
<span class="quotelev1">&gt;                            finishes, and send 2 notifications during
</span><br>
<span class="quotelev1">&gt; MPI_FINALIZE: one
</span><br>
<span class="quotelev1">&gt;                            right when MPI_FINALIZE starts, and another near when
</span><br>
<span class="quotelev1">&gt;                            MPI_FINALIZE finishes.
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_base_help_aggregate&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            If orte_base_help_aggregate is true,
</span><br>
<span class="quotelev1">&gt; duplicate help messages
</span><br>
<span class="quotelev1">&gt;                            will be aggregated rather than displayed
</span><br>
<span class="quotelev1">&gt; individually.  This
</span><br>
<span class="quotelev1">&gt;                            can be helpful for parallel jobs that
</span><br>
<span class="quotelev1">&gt; experience multiple
</span><br>
<span class="quotelev1">&gt;                            identical failures; rather than print out
</span><br>
<span class="quotelev1">&gt; the same help/failure
</span><br>
<span class="quotelev1">&gt;                            message N times, display it once with a
</span><br>
<span class="quotelev1">&gt; count of how many
</span><br>
<span class="quotelev1">&gt;                            processes sent the same message.
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_tmpdir_base&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Base of the session directory tree
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_no_session_dirs&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Prohibited locations for session directories (multiple
</span><br>
<span class="quotelev1">&gt;                            locations separated by ',', default=NULL)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_send_profile&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Send profile info in launch message
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_debug&quot; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt; data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Top-level ORTE debug switch (default verbosity: 1)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_debug_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for ORTE debug messages (default: 1)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_debug_daemons&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to debug the ORTE daemons or not
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_debug_daemons_file&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether want stdout/stderr of daemons to go
</span><br>
<span class="quotelev1">&gt; to a file or not
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_daemon_bootstrap&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Bootstrap the connection to the HNP
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_leave_session_attached&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether applications and/or daemons should
</span><br>
<span class="quotelev1">&gt; leave their sessions
</span><br>
<span class="quotelev1">&gt;                            attached so that any output can be received
</span><br>
<span class="quotelev1">&gt; - this allows X
</span><br>
<span class="quotelev1">&gt;                            forwarding without all the attendant debugging output
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_output_debugger_proctable&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether or not to output the debugger
</span><br>
<span class="quotelev1">&gt; proctable after launch
</span><br>
<span class="quotelev1">&gt;                            (default: false)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_debugger_test_daemon&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Name of the executable to be used to
</span><br>
<span class="quotelev1">&gt; simulate a debugger
</span><br>
<span class="quotelev1">&gt;                            colaunch (relative or absolute path)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_debugger_test_attach&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Test debugger colaunch after debugger attachment
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_debugger_check_rate&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Set rate (in secs) for auto-detect of
</span><br>
<span class="quotelev1">&gt; debugger attachment (0 =&gt;
</span><br>
<span class="quotelev1">&gt;                            do not check)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_do_not_launch&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Perform all necessary operations to prepare
</span><br>
<span class="quotelev1">&gt; to launch the
</span><br>
<span class="quotelev1">&gt;                            application, but do not actually launch it
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_daemon_spin&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Have any orteds spin until we can connect a
</span><br>
<span class="quotelev1">&gt; debugger to them
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_daemon_fail&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;-1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Have the specified orted fail after init for
</span><br>
<span class="quotelev1">&gt; debugging purposes
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_daemon_fail_delay&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Have the specified orted fail after
</span><br>
<span class="quotelev1">&gt; specified number of seconds
</span><br>
<span class="quotelev1">&gt;                            (default: 0 =&gt;  no delay)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_heartbeat_rate&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Seconds between checks for daemon
</span><br>
<span class="quotelev1">&gt; state-of-health (default: 0
</span><br>
<span class="quotelev1">&gt;                            =&gt;  do not check)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_startup_timeout&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Milliseconds/daemon to wait for startup
</span><br>
<span class="quotelev1">&gt; before declaring
</span><br>
<span class="quotelev1">&gt;                            failed_to_start (default: 0 =&gt;  do not check)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_timing&quot; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt; data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Request that critical timing loops be measured
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_timing_details&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Request that detailed timing data by reported
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_base_user_debugger&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;totalview
</span><br>
<span class="quotelev1">&gt;                            @mpirun@ -a @mpirun_args@ : ddt -n @np@
</span><br>
<span class="quotelev1">&gt; -start @executable@
</span><br>
<span class="quotelev1">&gt;                            @executable_argv@ @single_app@ : fxp @mpirun@ -a
</span><br>
<span class="quotelev1">&gt;                            @mpirun_args@&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Sequence of user-level debuggers to search
</span><br>
<span class="quotelev1">&gt; for in orterun
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_abort_timeout&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Max time to wait [in secs] before aborting
</span><br>
<span class="quotelev1">&gt; an ORTE operation
</span><br>
<span class="quotelev1">&gt;                            (default: 1sec)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_timeout_step&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;1000&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Time to wait [in usecs/proc] before aborting
</span><br>
<span class="quotelev1">&gt; an ORTE operation
</span><br>
<span class="quotelev1">&gt;                            (default: 1000 usec/proc)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_default_hostfile&quot; (current value:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/etc/openmpi-default-hostfile&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Name of the default hostfile (relative or
</span><br>
<span class="quotelev1">&gt; absolute path, &quot;none&quot;
</span><br>
<span class="quotelev1">&gt;                            to ignore environmental or default MCA param setting)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_rankfile&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value, synonyms: rmaps_rank_file_path)
</span><br>
<span class="quotelev1">&gt;                            Name of the rankfile to be used for mapping
</span><br>
<span class="quotelev1">&gt; processes (relative
</span><br>
<span class="quotelev1">&gt;                            or absolute path)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_keep_fqdn_hostnames&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether or not to keep FQDN hostnames [default: no]
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_use_regexp&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Whether or not to use regular expressions
</span><br>
<span class="quotelev1">&gt; for launch [default:
</span><br>
<span class="quotelev1">&gt;                            no]
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_tag_output&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Tag all output with [job,rank] (default: false)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_xml_output&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Display all output in XML format (default: false)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_xml_file&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Provide all output in XML format to the specified file
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_timestamp_output&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Timestamp all application process output
</span><br>
<span class="quotelev1">&gt; (default: false)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_output_filename&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Redirect output from application processes
</span><br>
<span class="quotelev1">&gt; into filename.rank
</span><br>
<span class="quotelev1">&gt;                            [default: NULL]
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_show_resolved_nodenames&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Display any node names that are resolved to
</span><br>
<span class="quotelev1">&gt; a different name
</span><br>
<span class="quotelev1">&gt;                            (default: false)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_hetero_apps&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Indicates that multiple app_contexts are
</span><br>
<span class="quotelev1">&gt; being provided that
</span><br>
<span class="quotelev1">&gt;                            are a mix of 32/64 bit binaries (default: false)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_launch_agent&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;orted&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Command used to start processes on remote
</span><br>
<span class="quotelev1">&gt; nodes (default:
</span><br>
<span class="quotelev1">&gt;                            orted)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_allocation_required&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether or not an allocation by a resource
</span><br>
<span class="quotelev1">&gt; manager is required
</span><br>
<span class="quotelev1">&gt;                            [default: no]
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_xterm&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Create a new xterm window and display output
</span><br>
<span class="quotelev1">&gt; from the specified
</span><br>
<span class="quotelev1">&gt;                            ranks there [default: none]
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_forward_job_control&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Forward SIGTSTP (after converting to
</span><br>
<span class="quotelev1">&gt; SIGSTOP) and SIGCONT
</span><br>
<span class="quotelev1">&gt;                            signals to the application procs [default: no]
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_rsh_agent&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;ssh : rsh&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt; pls_rsh_agent, plm_rsh_agent)
</span><br>
<span class="quotelev1">&gt;                            The command used to launch executables on remote nodes
</span><br>
<span class="quotelev1">&gt;                            (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_assume_same_shell&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt; plm_rsh_assume_same_shell)
</span><br>
<span class="quotelev1">&gt;                            If set to 1, assume that the shell on the
</span><br>
<span class="quotelev1">&gt; remote node is the
</span><br>
<span class="quotelev1">&gt;                            same as the shell on the local node.
</span><br>
<span class="quotelev1">&gt; Otherwise, probe for what
</span><br>
<span class="quotelev1">&gt;                            the remote shell [default: 1]
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_report_launch_progress&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Output a brief periodic report on launch
</span><br>
<span class="quotelev1">&gt; progress [default: no]
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_num_boards&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Number of processor boards/node (1-256) [default: 1]
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_num_sockets&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Number of sockets/board (1-256)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_num_cores&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Number of cores/socket (1-256)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_cpu_set&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Comma-separated list of ranges specifying logical cpus
</span><br>
<span class="quotelev1">&gt;                            allocated to this job [default: none]
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_process_binding&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Policy for binding processes [none | core |
</span><br>
<span class="quotelev1">&gt; socket | board]
</span><br>
<span class="quotelev1">&gt;                            (supported qualifier: if-avail)
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_report_bindings&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Report bindings
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_report_events&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            URI to which events are to be reported
</span><br>
<span class="quotelev1">&gt; (default: NULL)]
</span><br>
<span class="quotelev1">&gt;                  MCA opal: parameter &quot;opal_net_private_ipv4&quot; (current value:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;10.0.0.0/8;172.16.0.0/12;192.168.0.0/16;169.254.0.0/16&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Semicolon-delimited list of CIDR notation
</span><br>
<span class="quotelev1">&gt; entries specifying
</span><br>
<span class="quotelev1">&gt;                            what networks are considered &quot;private&quot;
</span><br>
<span class="quotelev1">&gt; (default value based on
</span><br>
<span class="quotelev1">&gt;                            RFC1918 and RFC3330)
</span><br>
<span class="quotelev1">&gt;                  MCA opal: parameter &quot;opal_signal&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;6,7,8,11&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Comma-delimited list of integer signal
</span><br>
<span class="quotelev1">&gt; numbers to Open MPI to
</span><br>
<span class="quotelev1">&gt;                            attempt to intercept.  Upon receipt of the
</span><br>
<span class="quotelev1">&gt; intercepted signal,
</span><br>
<span class="quotelev1">&gt;                            Open MPI will display a stack trace and
</span><br>
<span class="quotelev1">&gt; abort.  Open MPI will
</span><br>
<span class="quotelev1">&gt;                            *not* replace signals if handlers are
</span><br>
<span class="quotelev1">&gt; already installed by the
</span><br>
<span class="quotelev1">&gt;                            time MPI_INIT is invoked.  Optionally append
</span><br>
<span class="quotelev1">&gt; &quot;:complain&quot; to any
</span><br>
<span class="quotelev1">&gt;                            signal number in the comma-delimited list to
</span><br>
<span class="quotelev1">&gt; make Open MPI
</span><br>
<span class="quotelev1">&gt;                            complain if it detects another signal
</span><br>
<span class="quotelev1">&gt; handler (and therefore
</span><br>
<span class="quotelev1">&gt;                            does not insert its own).
</span><br>
<span class="quotelev1">&gt;                  MCA opal: parameter &quot;opal_profile&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Set to non-zero to profile component selections
</span><br>
<span class="quotelev1">&gt;                  MCA opal: parameter &quot;opal_profile_file&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Name of the file containing the cluster configuration
</span><br>
<span class="quotelev1">&gt;                            information
</span><br>
<span class="quotelev1">&gt;                  MCA opal: parameter &quot;opal_paffinity_alone&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value, synonyms: mpi_paffinity_alone)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, assume that this job is the only (set of)
</span><br>
<span class="quotelev1">&gt;                            process(es) running on each node and bind processes to
</span><br>
<span class="quotelev1">&gt;                            processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;                  MCA opal: parameter &quot;opal_set_max_sys_limits&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Set to non-zero to automatically set any
</span><br>
<span class="quotelev1">&gt; system-imposed limits
</span><br>
<span class="quotelev1">&gt;                            to the maximum allowed
</span><br>
<span class="quotelev1">&gt;                  MCA opal: parameter &quot;opal_event_include&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;poll&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Comma-delimited list of libevent subsystems
</span><br>
<span class="quotelev1">&gt; to use (epoll,
</span><br>
<span class="quotelev1">&gt;                            poll, select -- available on your platform)
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: parameter &quot;backtrace&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; backtrace framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: parameter &quot;backtrace_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the backtrace framework
</span><br>
<span class="quotelev1">&gt; (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: parameter &quot;backtrace_execinfo_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;            MCA memchecker: parameter &quot;memchecker&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the memchecker
</span><br>
<span class="quotelev1">&gt;                            framework (&lt;none&gt;  means use all components
</span><br>
<span class="quotelev1">&gt; that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA memory: parameter &quot;memory&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; memory framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA memory: parameter &quot;memory_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the memory framework (0
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA memory: information
</span><br>
<span class="quotelev1">&gt; &quot;memory_linux_ptmalloc2_available&quot; (value:&lt;1&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether ptmalloc2 support is included in
</span><br>
<span class="quotelev1">&gt; Open MPI or not (1 =
</span><br>
<span class="quotelev1">&gt;                            yes, 0 = no)
</span><br>
<span class="quotelev1">&gt;                MCA memory: information
</span><br>
<span class="quotelev1">&gt; &quot;memory_linux_ummunotify_available&quot; (value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether ummunotify support is included in
</span><br>
<span class="quotelev1">&gt; Open MPI or not (1 =
</span><br>
<span class="quotelev1">&gt;                            yes, 0 = no)
</span><br>
<span class="quotelev1">&gt;                MCA memory: parameter &quot;memory_linux_ptmalloc2_enable&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;-1&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to enable ptmalloc2 support or not
</span><br>
<span class="quotelev1">&gt; (negative = try to
</span><br>
<span class="quotelev1">&gt;                            enable, but continue even if support is not
</span><br>
<span class="quotelev1">&gt; available, 0 = do
</span><br>
<span class="quotelev1">&gt;                            not enable support, positive = try to enable
</span><br>
<span class="quotelev1">&gt; and fail if
</span><br>
<span class="quotelev1">&gt;                            support is not available)
</span><br>
<span class="quotelev1">&gt;                MCA memory: parameter &quot;memory_linux_ummunotify_enable&quot;
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;-1&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to enable ummunotify support or not
</span><br>
<span class="quotelev1">&gt; (negative = try to
</span><br>
<span class="quotelev1">&gt;                            enable, but continue even if support is not
</span><br>
<span class="quotelev1">&gt; available, 0 = do
</span><br>
<span class="quotelev1">&gt;                            not enable support, positive = try to enable
</span><br>
<span class="quotelev1">&gt; and fail if
</span><br>
<span class="quotelev1">&gt;                            support is not available)
</span><br>
<span class="quotelev1">&gt;                MCA memory: parameter &quot;memory_linux_disable&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            If this MCA parameter is set to 1 **VIA
</span><br>
<span class="quotelev1">&gt; ENVIRONMENT VARIABLE
</span><br>
<span class="quotelev1">&gt;                            ONLY*** (this MCA parameter *CANNOT* be set
</span><br>
<span class="quotelev1">&gt; in a file or on the
</span><br>
<span class="quotelev1">&gt;                            mpirun command line!), this component will
</span><br>
<span class="quotelev1">&gt; be disabled and will
</span><br>
<span class="quotelev1">&gt;                            not attempt to use either ummunotify or
</span><br>
<span class="quotelev1">&gt; memory hook support
</span><br>
<span class="quotelev1">&gt;                MCA memory: parameter &quot;memory_linux_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: parameter &quot;paffinity_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level of the paffinity framework
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: parameter &quot;paffinity&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; paffinity framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: parameter &quot;paffinity_hwloc_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;40&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the hwloc paffinity component
</span><br>
<span class="quotelev1">&gt;                 MCA carto: parameter &quot;carto_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level of the carto framework
</span><br>
<span class="quotelev1">&gt;                 MCA carto: parameter &quot;carto&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; carto framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA carto: parameter &quot;carto_auto_detect_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;11&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the auto_detect carto component
</span><br>
<span class="quotelev1">&gt;                 MCA carto: parameter &quot;carto_file_path&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            The path to the cartography file
</span><br>
<span class="quotelev1">&gt;                 MCA carto: parameter &quot;carto_file_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;10&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the file carto component
</span><br>
<span class="quotelev1">&gt;                 MCA shmem: parameter &quot;shmem_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level of the shmem framework
</span><br>
<span class="quotelev1">&gt;                 MCA shmem: parameter &quot;shmem&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; shmem framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA shmem: parameter &quot;shmem_mmap_enable_nfs_warning&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;1&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Enable the warning emitted when Open MPI
</span><br>
<span class="quotelev1">&gt; detects that its
</span><br>
<span class="quotelev1">&gt;                            shared memory backing file is located on a
</span><br>
<span class="quotelev1">&gt; network filesystem
</span><br>
<span class="quotelev1">&gt;                            (1 = enabled, 0 = disabled).
</span><br>
<span class="quotelev1">&gt;                 MCA shmem: parameter &quot;shmem_mmap_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;50&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the mmap shmem component
</span><br>
<span class="quotelev1">&gt;                 MCA shmem: parameter &quot;shmem_mmap_relocate_backing_file&quot;
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to change the default placement of
</span><br>
<span class="quotelev1">&gt; backing files or not
</span><br>
<span class="quotelev1">&gt;                            (Negative = try to relocate backing files to
</span><br>
<span class="quotelev1">&gt; an area rooted at
</span><br>
<span class="quotelev1">&gt;                            the path specified by
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shmem_mmap_opal_shmem_mmap_backing_file_base_dir, but continue
</span><br>
<span class="quotelev1">&gt;                            with the default path if the relocation
</span><br>
<span class="quotelev1">&gt; fails, 0 = do not
</span><br>
<span class="quotelev1">&gt;                            relocate, Positive = same as the negative
</span><br>
<span class="quotelev1">&gt; option, but will fail
</span><br>
<span class="quotelev1">&gt;                            if the relocation fails.
</span><br>
<span class="quotelev1">&gt;                 MCA shmem: parameter &quot;shmem_mmap_backing_file_base_dir&quot;
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;/dev/shm&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Specifies where backing files will be created when
</span><br>
<span class="quotelev1">&gt;                            shmem_mmap_relocate_backing_file is in use.
</span><br>
<span class="quotelev1">&gt;                 MCA shmem: parameter &quot;shmem_posix_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;40&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the posix shmem component
</span><br>
<span class="quotelev1">&gt;                 MCA shmem: parameter &quot;shmem_sysv_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;30&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the sysv shmem component
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: parameter &quot;maffinity_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level of the maffinity framework
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: parameter &quot;maffinity&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; maffinity framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: parameter &quot;maffinity_first_use_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;10&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the first_use maffinity component
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: parameter &quot;maffinity_hwloc_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;40&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the hwloc maffinity component
</span><br>
<span class="quotelev1">&gt;                 MCA timer: parameter &quot;timer&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; timer framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: parameter &quot;timer_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the timer framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: parameter &quot;timer_linux_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;               MCA sysinfo: parameter &quot;sysinfo&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; sysinfo framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA sysinfo: parameter &quot;sysinfo_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the sysinfo framework (0
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA sysinfo: parameter &quot;sysinfo_linux_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA hwloc: parameter &quot;hwloc_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level of the hwloc framework
</span><br>
<span class="quotelev1">&gt;                 MCA hwloc: parameter &quot;hwloc_base_mem_alloc_policy&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Policy that determines how general memory
</span><br>
<span class="quotelev1">&gt; allocations are bound
</span><br>
<span class="quotelev1">&gt;                            after MPI_INIT.  A value of &quot;none&quot; means
</span><br>
<span class="quotelev1">&gt; that no memory policy
</span><br>
<span class="quotelev1">&gt;                            is applied.  A value of &quot;local_only&quot; means
</span><br>
<span class="quotelev1">&gt; that all memory
</span><br>
<span class="quotelev1">&gt;                            allocations will be restricted to the local
</span><br>
<span class="quotelev1">&gt; NUMA node where
</span><br>
<span class="quotelev1">&gt;                            each process is placed.  Note that operating
</span><br>
<span class="quotelev1">&gt; system paging
</span><br>
<span class="quotelev1">&gt;                            policies are unaffected by this setting.
</span><br>
<span class="quotelev1">&gt; For example, if
</span><br>
<span class="quotelev1">&gt;                            &quot;local_only&quot; is used and local NUMA node
</span><br>
<span class="quotelev1">&gt; memory is exhausted, a
</span><br>
<span class="quotelev1">&gt;                            new memory allocation may cause paging.
</span><br>
<span class="quotelev1">&gt;                 MCA hwloc: parameter
</span><br>
<span class="quotelev1">&gt; &quot;hwloc_base_mem_bind_failure_action&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;error&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            What Open MPI will do if it explicitly tries
</span><br>
<span class="quotelev1">&gt; to bind memory to
</span><br>
<span class="quotelev1">&gt;                            a specific NUMA location, and fails.  Note
</span><br>
<span class="quotelev1">&gt; that this is a
</span><br>
<span class="quotelev1">&gt;                            different case than the general allocation
</span><br>
<span class="quotelev1">&gt; policy described by
</span><br>
<span class="quotelev1">&gt;                            hwloc_base_alloc_policy.  A value of &quot;warn&quot;
</span><br>
<span class="quotelev1">&gt; means that Open MPI
</span><br>
<span class="quotelev1">&gt;                            will warn the first time this happens, but
</span><br>
<span class="quotelev1">&gt; allow the job to
</span><br>
<span class="quotelev1">&gt;                            continue (possibly with degraded
</span><br>
<span class="quotelev1">&gt; performance).  A value of
</span><br>
<span class="quotelev1">&gt;                            &quot;error&quot; means that Open MPI will abort the
</span><br>
<span class="quotelev1">&gt; job if this happens.
</span><br>
<span class="quotelev1">&gt;                 MCA hwloc: parameter &quot;hwloc&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; hwloc framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA hwloc: parameter &quot;hwloc_hwloc132_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA dpm: parameter &quot;dpm&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; dpm framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA dpm: parameter &quot;dpm_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the dpm framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA dpm: parameter &quot;dpm_orte_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                MCA pubsub: parameter &quot;pubsub&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; pubsub framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA pubsub: parameter &quot;pubsub_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the pubsub framework (0
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA pubsub: parameter &quot;pubsub_orte_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;50&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the pubsub pmi component
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter &quot;allocator&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; allocator framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter &quot;allocator_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the allocator framework
</span><br>
<span class="quotelev1">&gt; (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter &quot;allocator_basic_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter &quot;allocator_bucket_num_buckets&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;30&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter &quot;allocator_bucket_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; coll framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the coll framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_basic_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;10&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the basic coll component
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_basic_crossover&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Minimum number of processes in a
</span><br>
<span class="quotelev1">&gt; communicator before using the
</span><br>
<span class="quotelev1">&gt;                            logarithmic algorithms
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_hierarch_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the hierarchical coll component
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_hierarch_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Turn verbose message of the hierarchical
</span><br>
<span class="quotelev1">&gt; coll component on/off
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_hierarch_use_rdma&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Switch from the send btl list used to detect
</span><br>
<span class="quotelev1">&gt; hierarchies to the
</span><br>
<span class="quotelev1">&gt;                            rdma btl list
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_hierarch_ignore_sm&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Ignore sm protocol when detecting
</span><br>
<span class="quotelev1">&gt; hierarchies. Required to
</span><br>
<span class="quotelev1">&gt;                            enable the usage of protocol specific
</span><br>
<span class="quotelev1">&gt; collective operations
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_hierarch_detection_alg&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;2&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Used to specify the algorithm for detecting
</span><br>
<span class="quotelev1">&gt; Hierarchy.Choose
</span><br>
<span class="quotelev1">&gt;                            between all or two levels of hierarchy
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_hierarch_bcast_alg&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Used to specify the algorithm used for bcast
</span><br>
<span class="quotelev1">&gt; operations.
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_hierarch_segment_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;32768&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Used to specify the segment size for
</span><br>
<span class="quotelev1">&gt; segmented algorithms.
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_inter_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;40&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the inter coll component
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_inter_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Turn verbose message of the inter coll
</span><br>
<span class="quotelev1">&gt; component on/off
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_self_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;75&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the sm coll component
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_control_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;4096&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Length of the control data -- should usually
</span><br>
<span class="quotelev1">&gt; be either the
</span><br>
<span class="quotelev1">&gt;                            length of a cache line on most SMPs, or the
</span><br>
<span class="quotelev1">&gt; size of a page on
</span><br>
<span class="quotelev1">&gt;                            machines that support direct memory affinity
</span><br>
<span class="quotelev1">&gt; page placement (in
</span><br>
<span class="quotelev1">&gt;                            bytes)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;8192&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Fragment size (in bytes) used for passing
</span><br>
<span class="quotelev1">&gt; data through shared
</span><br>
<span class="quotelev1">&gt;                            memory (will be rounded up to the nearest
</span><br>
<span class="quotelev1">&gt; control_size size)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_comm_in_use_flags&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;2&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Number of &quot;in use&quot; flags, used to mark a
</span><br>
<span class="quotelev1">&gt; message passing area
</span><br>
<span class="quotelev1">&gt;                            segment as currently being used or not (must
</span><br>
<span class="quotelev1">&gt; be&gt;= 2 and&lt;=
</span><br>
<span class="quotelev1">&gt;                            comm_num_segments)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_comm_num_segments&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;8&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Number of segments in each communicator's
</span><br>
<span class="quotelev1">&gt; shared memory message
</span><br>
<span class="quotelev1">&gt;                            passing area (must be&gt;= 2, and must be a multiple of
</span><br>
<span class="quotelev1">&gt;                            comm_in_use_flags)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Degree of the tree for tree-based operations
</span><br>
<span class="quotelev1">&gt; (must be =&gt;  1 and
</span><br>
<span class="quotelev1">&gt;                            &lt;= min(control_size, 255))
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_info_num_procs&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Number of processes to use for the calculation of the
</span><br>
<span class="quotelev1">&gt;                            shared_mem_size MCA information parameter
</span><br>
<span class="quotelev1">&gt; (must be =&gt;  2)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: information &quot;coll_sm_shared_mem_used_data&quot;
</span><br>
<span class="quotelev1">&gt; (value:&lt;548864&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Amount of shared memory used, per
</span><br>
<span class="quotelev1">&gt; communicator, in the shared
</span><br>
<span class="quotelev1">&gt;                            memory data area for info_num_procs
</span><br>
<span class="quotelev1">&gt; processes (in bytes)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sync_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;50&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the sync coll component; only relevant if
</span><br>
<span class="quotelev1">&gt;                            barrier_before or barrier_after is&gt;  0
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sync_barrier_before&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;1000&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Do a synchronization before each Nth collective
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sync_barrier_after&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Do a synchronization after each Nth collective
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_tuned_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;30&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the tuned coll component
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter
</span><br>
<span class="quotelev1">&gt; &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot;
</span><br>
<span class="quotelev1">&gt;                            (current value:&lt;32768&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Size of communicator were we stop
</span><br>
<span class="quotelev1">&gt; pre-allocating memory for the
</span><br>
<span class="quotelev1">&gt;                            fixed internal buffer used for message
</span><br>
<span class="quotelev1">&gt; requests etc that is
</span><br>
<span class="quotelev1">&gt;                            hung off the communicator data segment. I.e.
</span><br>
<span class="quotelev1">&gt; if you have a
</span><br>
<span class="quotelev1">&gt;                            100'000 nodes you might not want to
</span><br>
<span class="quotelev1">&gt; pre-allocate 200'000
</span><br>
<span class="quotelev1">&gt;                            request handle slots per communicator instance!
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_tuned_init_tree_fanout&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Inital fanout used in the tree topologies for each
</span><br>
<span class="quotelev1">&gt;                            communicator. This is only an initial guess,
</span><br>
<span class="quotelev1">&gt; if a tuned
</span><br>
<span class="quotelev1">&gt;                            collective needs a different fanout for an
</span><br>
<span class="quotelev1">&gt; operation, it build
</span><br>
<span class="quotelev1">&gt;                            it dynamically. This parameter is only for
</span><br>
<span class="quotelev1">&gt; the first guess and
</span><br>
<span class="quotelev1">&gt;                            might save a little time
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_tuned_init_chain_fanout&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Inital fanout used in the chain (fanout
</span><br>
<span class="quotelev1">&gt; followed by pipeline)
</span><br>
<span class="quotelev1">&gt;                            topologies for each communicator. This is
</span><br>
<span class="quotelev1">&gt; only an initial
</span><br>
<span class="quotelev1">&gt;                            guess, if a tuned collective needs a
</span><br>
<span class="quotelev1">&gt; different fanout for an
</span><br>
<span class="quotelev1">&gt;                            operation, it build it dynamically. This
</span><br>
<span class="quotelev1">&gt; parameter is only for
</span><br>
<span class="quotelev1">&gt;                            the first guess and might save a little time
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_tuned_use_dynamic_rules&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Switch used to decide if we use static
</span><br>
<span class="quotelev1">&gt; (compiled/if statements)
</span><br>
<span class="quotelev1">&gt;                            or dynamic (built at runtime) decision function rules
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io_base_freelist_initial_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;16&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io_base_freelist_max_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;64&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io_base_freelist_increment&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;16&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Increment size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; io framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the io framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io_romio_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;10&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io_romio_delete_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;10&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Delete priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                    MCA io: information &quot;io_romio_version&quot; (value:&lt;from
</span><br>
<span class="quotelev1">&gt; MPICH2 v1.3.1 with
</span><br>
<span class="quotelev1">&gt;                            an additional patch from
</span><br>
<span class="quotelev1">&gt; romio-maint_at_[hidden] about an
</span><br>
<span class="quotelev1">&gt;                            attribute issue&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Version of ROMIO
</span><br>
<span class="quotelev1">&gt;                    MCA io: information &quot;io_romio_user_configure_params&quot;
</span><br>
<span class="quotelev1">&gt; (value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            User-specified command line parameters
</span><br>
<span class="quotelev1">&gt; passed to ROMIO's
</span><br>
<span class="quotelev1">&gt;                            configure script
</span><br>
<span class="quotelev1">&gt;                    MCA io: information
</span><br>
<span class="quotelev1">&gt; &quot;io_romio_complete_configure_params&quot; (value:&lt;
</span><br>
<span class="quotelev1">&gt;                            CFLAGS='-DNDEBUG -g -O2 -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt;                            -pthread' CPPFLAGS='
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -I/home/andrea/library/openmpi/openmpi-1.6/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev1">&gt;                              -I/usr/include/infiniband -I/usr/include/infiniband'
</span><br>
<span class="quotelev1">&gt;                            FFLAGS='' LDFLAGS='-Wl,--rpath
</span><br>
<span class="quotelev1">&gt;                            -Wl,/home/andrea/library/gcc/gcc-objects/lib64 '
</span><br>
<span class="quotelev1">&gt;                            --enable-shared --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --prefix=/home/andrea/library/openmpi/openmpi-1.6-gnu-4.7
</span><br>
<span class="quotelev1">&gt;                            --with-mpi=open_mpi --disable-aio&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                            Complete set of command line parameters
</span><br>
<span class="quotelev1">&gt; passed to ROMIO's
</span><br>
<span class="quotelev1">&gt;                            configure script
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; mpool framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the mpool framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_fake_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_rdma_rcache_name&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;vma&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            The name of the registration cache the mpool
</span><br>
<span class="quotelev1">&gt; should use
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_rdma_rcache_size_limit&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            the maximum size of registration cache in
</span><br>
<span class="quotelev1">&gt; bytes. 0 is unlimited
</span><br>
<span class="quotelev1">&gt;                            (default 0)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_rdma_print_stats&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            print pool usage statistics at the end of the run
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_rdma_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;bucket&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Name of allocator component to use with sm mpool
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;67108864&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Minimum size of the sm mpool shared memory file
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_sm_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Enable verbose output for mpool sm component
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_sm_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level of the PML framework
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; pml framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_bfo_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_bfo_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_bfo_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_bfo_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;64&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_bfo_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;5&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_bfo_send_pipeline_depth&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;3&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_bfo_recv_pipeline_depth&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_bfo_rdma_put_retries_limit&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;5&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_bfo_max_rdma_per_request&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_bfo_max_send_per_range&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_bfo_unexpected_limit&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;128&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_bfo_allocator&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;bucket&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Name of allocator component for unexpected messages
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Initial size of request free lists
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Maximum size of request free lists
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;64&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Number of elements to add when growing
</span><br>
<span class="quotelev1">&gt; request free lists
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_cm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;10&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            CM PML selection priority
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_csum_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_csum_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_csum_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;64&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_csum_send_pipeline_depth&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;3&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_csum_recv_pipeline_depth&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_csum_rdma_put_retries_limit&quot;
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;5&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_csum_max_rdma_per_request&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_csum_max_send_per_range&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_csum_unexpected_limit&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;128&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_csum_allocator&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;bucket&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Name of allocator component for unexpected messages
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_csum_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;64&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;20&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_send_pipeline_depth&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;3&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_recv_pipeline_depth&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_rdma_put_retries_limit&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;5&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_max_rdma_per_request&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_max_send_per_range&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_unexpected_limit&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;128&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_allocator&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;bucket&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Name of allocator component for unexpected messages
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_v_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;-1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_v_output&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;stderr&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_v_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: parameter &quot;bml&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; bml framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: parameter &quot;bml_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the bml framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: parameter &quot;bml_r2_show_unreach_errors&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;1&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Show error message when procs are unreachable
</span><br>
<span class="quotelev1">&gt;                   MCA bml: parameter &quot;bml_r2_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: parameter &quot;rcache&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; rcache framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: parameter &quot;rcache_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the rcache framework (0
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: parameter &quot;rcache_vma_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level of the BTL framework
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; btl framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Number of fragments by default
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Maximum number of fragments
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;32&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Increment by this number of fragments
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_exclusivity&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;65536&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            BTL exclusivity (must be&gt;= 0)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_flags&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;10&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            BTL bit flags (general flags: SEND=1, PUT=2, GET=4,
</span><br>
<span class="quotelev1">&gt;                            SEND_INPLACE=8, RDMA_MATCHED=64,
</span><br>
<span class="quotelev1">&gt; HETEROGENEOUS_RDMA=256; flags
</span><br>
<span class="quotelev1">&gt;                            only used by the &quot;dr&quot; PML (ignored by others): ACK=16,
</span><br>
<span class="quotelev1">&gt;                            CHECKSUM=32, RDMA_COMPLETION=128; flags only
</span><br>
<span class="quotelev1">&gt; used by the &quot;bfo&quot;
</span><br>
<span class="quotelev1">&gt;                            PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_rndv_eager_limit&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;131072&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Size (in bytes) of &quot;phase 1&quot; fragment sent
</span><br>
<span class="quotelev1">&gt; for all large
</span><br>
<span class="quotelev1">&gt;                            messages (must be&gt;= 0 and&lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;131072&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Maximum size (in bytes) of &quot;short&quot; messages
</span><br>
<span class="quotelev1">&gt; (must be&gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_max_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;262144&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Maximum size (in bytes) of a single &quot;phase
</span><br>
<span class="quotelev1">&gt; 2&quot; fragment of a
</span><br>
<span class="quotelev1">&gt;                            long message when using the pipeline
</span><br>
<span class="quotelev1">&gt; protocol (must be&gt;= 1)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_rdma_pipeline_send_length&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;2147483647&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Length of the &quot;phase 2&quot; portion of a large
</span><br>
<span class="quotelev1">&gt; message (in bytes)
</span><br>
<span class="quotelev1">&gt;                            when using the pipeline protocol.  This part
</span><br>
<span class="quotelev1">&gt; of the message
</span><br>
<span class="quotelev1">&gt;                            will be split into fragments of size
</span><br>
<span class="quotelev1">&gt; max_send_size and sent
</span><br>
<span class="quotelev1">&gt;                            using send/receive semantics (must be&gt;= 0;
</span><br>
<span class="quotelev1">&gt; only relevant when
</span><br>
<span class="quotelev1">&gt;                            the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_rdma_pipeline_frag_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;2147483647&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Maximum size (in bytes) of a single &quot;phase
</span><br>
<span class="quotelev1">&gt; 3&quot; fragment from a
</span><br>
<span class="quotelev1">&gt;                            long message when using the pipeline
</span><br>
<span class="quotelev1">&gt; protocol.  These fragments
</span><br>
<span class="quotelev1">&gt;                            will be sent using RDMA semantics (must be
</span><br>
<span class="quotelev2">&gt;&gt; = 1; only relevant
</span><br>
<span class="quotelev1">&gt;                            when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_min_rdma_pipeline_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Messages smaller than this size (in bytes)
</span><br>
<span class="quotelev1">&gt; will not use the
</span><br>
<span class="quotelev1">&gt;                            RDMA pipeline protocol.  Instead, they will
</span><br>
<span class="quotelev1">&gt; be split into
</span><br>
<span class="quotelev1">&gt;                            fragments of max_send_size and sent using send/receive
</span><br>
<span class="quotelev1">&gt;                            semantics (must be&gt;=0, and is automatically
</span><br>
<span class="quotelev1">&gt; adjusted up to at
</span><br>
<span class="quotelev1">&gt;                            least
</span><br>
<span class="quotelev1">&gt; (eager_limit+btl_rdma_pipeline_send_length); only
</span><br>
<span class="quotelev1">&gt;                            relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_bandwidth&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;100&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Approximate maximum bandwidth of
</span><br>
<span class="quotelev1">&gt; interconnect(0 = auto-detect
</span><br>
<span class="quotelev1">&gt;                            value at run-time [not supported in all BTL
</span><br>
<span class="quotelev1">&gt; modules],&gt;= 1 =
</span><br>
<span class="quotelev1">&gt;                            bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_latency&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Approximate latency of interconnect (must be&gt;= 0)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: information &quot;btl_sm_have_knem_support&quot;
</span><br>
<span class="quotelev1">&gt; (value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether this component supports the knem
</span><br>
<span class="quotelev1">&gt; Linux kernel module or
</span><br>
<span class="quotelev1">&gt;                            not
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_use_knem&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Whether knem support is desired or not
</span><br>
<span class="quotelev1">&gt; (negative = try to
</span><br>
<span class="quotelev1">&gt;                            enable knem support, but continue even if it
</span><br>
<span class="quotelev1">&gt; is not available,
</span><br>
<span class="quotelev1">&gt;                            0 = do not enable knem support, positive =
</span><br>
<span class="quotelev1">&gt; try to enable knem
</span><br>
<span class="quotelev1">&gt;                            support and fail if it is not available)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_knem_dma_min&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Minimum message size (in bytes) to use the
</span><br>
<span class="quotelev1">&gt; knem DMA mode;
</span><br>
<span class="quotelev1">&gt;                            ignored if knem does not support DMA mode (0
</span><br>
<span class="quotelev1">&gt; = do not use the
</span><br>
<span class="quotelev1">&gt;                            knem DMA mode)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_knem_max_simultaneous&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Max number of simultaneous ongoing knem
</span><br>
<span class="quotelev1">&gt; operations to support
</span><br>
<span class="quotelev1">&gt;                            (0 = do everything synchronously, which
</span><br>
<span class="quotelev1">&gt; probably gives the best
</span><br>
<span class="quotelev1">&gt;                            large message latency;&gt;0 means to do all operations
</span><br>
<span class="quotelev1">&gt;                            asynchronously, which supports better
</span><br>
<span class="quotelev1">&gt; overlap for simultaneous
</span><br>
<span class="quotelev1">&gt;                            large message sends)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;8&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;64&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;-1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_mpool&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;sm&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_fifo_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;4096&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_fifo_lazy_free&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;120&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;65535&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            BTL exclusivity (must be&gt;= 0)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_flags&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            BTL bit flags (general flags: SEND=1, PUT=2, GET=4,
</span><br>
<span class="quotelev1">&gt;                            SEND_INPLACE=8, RDMA_MATCHED=64,
</span><br>
<span class="quotelev1">&gt; HETEROGENEOUS_RDMA=256; flags
</span><br>
<span class="quotelev1">&gt;                            only used by the &quot;dr&quot; PML (ignored by others): ACK=16,
</span><br>
<span class="quotelev1">&gt;                            CHECKSUM=32, RDMA_COMPLETION=128; flags only
</span><br>
<span class="quotelev1">&gt; used by the &quot;bfo&quot;
</span><br>
<span class="quotelev1">&gt;                            PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_rndv_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;4096&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Size (in bytes) of &quot;phase 1&quot; fragment sent
</span><br>
<span class="quotelev1">&gt; for all large
</span><br>
<span class="quotelev1">&gt;                            messages (must be&gt;= 0 and&lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;4096&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Maximum size (in bytes) of &quot;short&quot; messages
</span><br>
<span class="quotelev1">&gt; (must be&gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_max_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;32768&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Maximum size (in bytes) of a single &quot;phase
</span><br>
<span class="quotelev1">&gt; 2&quot; fragment of a
</span><br>
<span class="quotelev1">&gt;                            long message when using the pipeline
</span><br>
<span class="quotelev1">&gt; protocol (must be&gt;= 1)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_bandwidth&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;9000&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Approximate maximum bandwidth of
</span><br>
<span class="quotelev1">&gt; interconnect(0 = auto-detect
</span><br>
<span class="quotelev1">&gt;                            value at run-time [not supported in all BTL
</span><br>
<span class="quotelev1">&gt; modules],&gt;= 1 =
</span><br>
<span class="quotelev1">&gt;                            bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_latency&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Approximate latency of interconnect (must be&gt;= 0)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_links&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_if_include&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Comma-delimited list of devices or CIDR
</span><br>
<span class="quotelev1">&gt; notation of networks to
</span><br>
<span class="quotelev1">&gt;                            use for MPI communication (e.g., &quot;eth0,eth1&quot; or
</span><br>
<span class="quotelev1">&gt;                            &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually
</span><br>
<span class="quotelev1">&gt; exclusive with
</span><br>
<span class="quotelev1">&gt;                            btl_tcp_if_exclude.
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;lo,sppp&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Comma-delimited list of devices or CIDR
</span><br>
<span class="quotelev1">&gt; notation of networks to
</span><br>
<span class="quotelev1">&gt;                            NOT use for MPI communication -- all devices
</span><br>
<span class="quotelev1">&gt; not matching these
</span><br>
<span class="quotelev1">&gt;                            specifications will be used (e.g., &quot;eth0,eth1&quot; or
</span><br>
<span class="quotelev1">&gt;                            &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually
</span><br>
<span class="quotelev1">&gt; exclusive with
</span><br>
<span class="quotelev1">&gt;                            btl_tcp_if_include.
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;8&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;32&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;131072&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;131072&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;30720&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            The size of the internal cache for each TCP
</span><br>
<span class="quotelev1">&gt; connection. This
</span><br>
<span class="quotelev1">&gt;                            cache is used to reduce the number of
</span><br>
<span class="quotelev1">&gt; syscalls, by replacing
</span><br>
<span class="quotelev1">&gt;                            them with memcpy. Every read will read the
</span><br>
<span class="quotelev1">&gt; expected data plus
</span><br>
<span class="quotelev1">&gt;                            the amount of the endpoint_cache
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_use_nagle&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to use Nagle's algorithm or not (using Nagle's
</span><br>
<span class="quotelev1">&gt;                            algorithm may increase short message latency)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_port_min_v4&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;1024&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            The minimum port where the TCP BTL will try
</span><br>
<span class="quotelev1">&gt; to bind (default
</span><br>
<span class="quotelev1">&gt;                            1024)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_port_range_v4&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;64511&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            The number of ports where the TCP BTL will
</span><br>
<span class="quotelev1">&gt; try to bind (default
</span><br>
<span class="quotelev1">&gt;                            64511). This parameter together with the
</span><br>
<span class="quotelev1">&gt; port min, define a
</span><br>
<span class="quotelev1">&gt;                            range of ports where Open MPI will open sockets.
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;100&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            BTL exclusivity (must be&gt;= 0)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_flags&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;314&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            BTL bit flags (general flags: SEND=1, PUT=2, GET=4,
</span><br>
<span class="quotelev1">&gt;                            SEND_INPLACE=8, RDMA_MATCHED=64,
</span><br>
<span class="quotelev1">&gt; HETEROGENEOUS_RDMA=256; flags
</span><br>
<span class="quotelev1">&gt;                            only used by the &quot;dr&quot; PML (ignored by others): ACK=16,
</span><br>
<span class="quotelev1">&gt;                            CHECKSUM=32, RDMA_COMPLETION=128; flags only
</span><br>
<span class="quotelev1">&gt; used by the &quot;bfo&quot;
</span><br>
<span class="quotelev1">&gt;                            PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_rndv_eager_limit&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;65536&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Size (in bytes) of &quot;phase 1&quot; fragment sent
</span><br>
<span class="quotelev1">&gt; for all large
</span><br>
<span class="quotelev1">&gt;                            messages (must be&gt;= 0 and&lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;65536&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Maximum size (in bytes) of &quot;short&quot; messages
</span><br>
<span class="quotelev1">&gt; (must be&gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;131072&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Maximum size (in bytes) of a single &quot;phase
</span><br>
<span class="quotelev1">&gt; 2&quot; fragment of a
</span><br>
<span class="quotelev1">&gt;                            long message when using the pipeline
</span><br>
<span class="quotelev1">&gt; protocol (must be&gt;= 1)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_rdma_pipeline_send_length&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;131072&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Length of the &quot;phase 2&quot; portion of a large
</span><br>
<span class="quotelev1">&gt; message (in bytes)
</span><br>
<span class="quotelev1">&gt;                            when using the pipeline protocol.  This part
</span><br>
<span class="quotelev1">&gt; of the message
</span><br>
<span class="quotelev1">&gt;                            will be split into fragments of size
</span><br>
<span class="quotelev1">&gt; max_send_size and sent
</span><br>
<span class="quotelev1">&gt;                            using send/receive semantics (must be&gt;= 0;
</span><br>
<span class="quotelev1">&gt; only relevant when
</span><br>
<span class="quotelev1">&gt;                            the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_rdma_pipeline_frag_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;2147483647&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Maximum size (in bytes) of a single &quot;phase
</span><br>
<span class="quotelev1">&gt; 3&quot; fragment from a
</span><br>
<span class="quotelev1">&gt;                            long message when using the pipeline
</span><br>
<span class="quotelev1">&gt; protocol.  These fragments
</span><br>
<span class="quotelev1">&gt;                            will be sent using RDMA semantics (must be
</span><br>
<span class="quotelev2">&gt;&gt; = 1; only relevant
</span><br>
<span class="quotelev1">&gt;                            when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_min_rdma_pipeline_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Messages smaller than this size (in bytes)
</span><br>
<span class="quotelev1">&gt; will not use the
</span><br>
<span class="quotelev1">&gt;                            RDMA pipeline protocol.  Instead, they will
</span><br>
<span class="quotelev1">&gt; be split into
</span><br>
<span class="quotelev1">&gt;                            fragments of max_send_size and sent using send/receive
</span><br>
<span class="quotelev1">&gt;                            semantics (must be&gt;=0, and is automatically
</span><br>
<span class="quotelev1">&gt; adjusted up to at
</span><br>
<span class="quotelev1">&gt;                            least
</span><br>
<span class="quotelev1">&gt; (eager_limit+btl_rdma_pipeline_send_length); only
</span><br>
<span class="quotelev1">&gt;                            relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;100&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Approximate maximum bandwidth of
</span><br>
<span class="quotelev1">&gt; interconnect(0 = auto-detect
</span><br>
<span class="quotelev1">&gt;                            value at run-time [not supported in all BTL
</span><br>
<span class="quotelev1">&gt; modules],&gt;= 1 =
</span><br>
<span class="quotelev1">&gt;                            bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_latency&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;100&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Approximate latency of interconnect (must be&gt;= 0)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_disable_family&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_if_seq&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            If specified, a comma-delimited list of TCP
</span><br>
<span class="quotelev1">&gt; interfaces.
</span><br>
<span class="quotelev1">&gt;                            Interfaces will be assigned, one to each MPI
</span><br>
<span class="quotelev1">&gt; process, in a
</span><br>
<span class="quotelev1">&gt;                            round-robin fashion on each server.  For
</span><br>
<span class="quotelev1">&gt; example, if the list
</span><br>
<span class="quotelev1">&gt;                            is &quot;eth0,eth1&quot; and four MPI processes are
</span><br>
<span class="quotelev1">&gt; run on a single
</span><br>
<span class="quotelev1">&gt;                            server, then local ranks 0 and 2 will use
</span><br>
<span class="quotelev1">&gt; eth0 and local ranks
</span><br>
<span class="quotelev1">&gt;                            1 and 3 will use eth1.
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_include&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_exclude&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_warn_component_unused&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;1&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            This parameter is used to turn on warning
</span><br>
<span class="quotelev1">&gt; messages when certain
</span><br>
<span class="quotelev1">&gt;                            NICs are not used
</span><br>
<span class="quotelev1">&gt;                   MCA mtl: parameter &quot;mtl&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; mtl framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA mtl: parameter &quot;mtl_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the mtl framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: parameter &quot;topo&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; topo framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: parameter &quot;topo_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the topo framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: parameter &quot;topo_unity_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; osc framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the osc framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Enable optimizations available only if
</span><br>
<span class="quotelev1">&gt; MPI_LOCK is not used.
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_pt2pt_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;16384&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Max size of eagerly sent data
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_rdma_eager_send&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Attempt to start data movement during
</span><br>
<span class="quotelev1">&gt; communication call,
</span><br>
<span class="quotelev1">&gt;                            instead of at synchrnoization time.  Info
</span><br>
<span class="quotelev1">&gt; key of same name
</span><br>
<span class="quotelev1">&gt;                            overrides this value.
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_rdma_use_buffers&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Coalesce messages during an epoch to reduce network
</span><br>
<span class="quotelev1">&gt;                            utilization.  Info key of same name
</span><br>
<span class="quotelev1">&gt; overrides this value.
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_rdma_use_rdma&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Use real RDMA operations to transfer data.
</span><br>
<span class="quotelev1">&gt; Info key of same
</span><br>
<span class="quotelev1">&gt;                            name overrides this value.
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_rdma_rdma_completion_wait&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;1&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Wait for all completion of rdma events before sending
</span><br>
<span class="quotelev1">&gt;                            acknowledgment.  Info key of same name
</span><br>
<span class="quotelev1">&gt; overrides this value.
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_rdma_no_locks&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Enable optimizations available only if
</span><br>
<span class="quotelev1">&gt; MPI_LOCK is not used.
</span><br>
<span class="quotelev1">&gt;                            Info key of same name overrides this value.
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_rdma_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                    MCA op: parameter &quot;op_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level of the op framework
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; iof framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the iof framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_hnp_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_orted_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_tool_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; oob framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the oob framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbose level for the OOB tcp component
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Maximum number of peer connections to
</span><br>
<span class="quotelev1">&gt; simultaneously maintain
</span><br>
<span class="quotelev1">&gt;                            (-1 = infinite)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;60&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Number of times to try shutting down a
</span><br>
<span class="quotelev1">&gt; connection before giving
</span><br>
<span class="quotelev1">&gt;                            up
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_debug&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Enable (1) / disable (0) debugging output
</span><br>
<span class="quotelev1">&gt; for this component
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;131072&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            TCP socket send buffering size (in bytes)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;131072&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            TCP socket receive buffering size (in bytes)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_if_include&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Comma-delimited list of TCP interfaces to use
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Comma-delimited list of TCP interfaces to exclude
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Enable (1) / disable (0) random sleep for
</span><br>
<span class="quotelev1">&gt; connection wireup.
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;event&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Mode for HNP to accept incoming connections: event,
</span><br>
<span class="quotelev1">&gt;                            listen_thread.
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_listen_thread_max_queue&quot;
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;10&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            High water mark for queued accepted socket
</span><br>
<span class="quotelev1">&gt; list size.  Used
</span><br>
<span class="quotelev1">&gt;                            only when listen_mode is listen_thread.
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_listen_thread_wait_time&quot;
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;10&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Time in milliseconds to wait before actively
</span><br>
<span class="quotelev1">&gt; checking for new
</span><br>
<span class="quotelev1">&gt;                            connections when listen_mode is listen_thread.
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_static_ports&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Static ports for daemons and procs (IPv4)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_dynamic_ports&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Range of ports to be dynamically used by
</span><br>
<span class="quotelev1">&gt; daemons and procs
</span><br>
<span class="quotelev1">&gt;                            (IPv4)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_disable_family&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Disable IPv4 (4) or IPv6 (6)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                  MCA odls: parameter &quot;odls_base_sigkill_timeout&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Time to wait for a process to die after
</span><br>
<span class="quotelev1">&gt; issuing a kill signal
</span><br>
<span class="quotelev1">&gt;                            to it
</span><br>
<span class="quotelev1">&gt;                  MCA odls: parameter &quot;odls&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; odls framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA odls: parameter &quot;odls_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the odls framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA odls: parameter &quot;odls_default_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_base_display_alloc&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to display the allocation after it
</span><br>
<span class="quotelev1">&gt; is determined
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_base_display_devel_alloc&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to display a developer-detail
</span><br>
<span class="quotelev1">&gt; allocation after it is
</span><br>
<span class="quotelev1">&gt;                            determined
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; ras framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the ras framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_cm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_loadleveler_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;90&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the loadleveler ras component
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_slurm_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;75&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the slurm ras component
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_rank_file_path&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value, synonym of: orte_rankfile)
</span><br>
<span class="quotelev1">&gt;                            Name of the rankfile to be used for mapping
</span><br>
<span class="quotelev1">&gt; processes (relative
</span><br>
<span class="quotelev1">&gt;                            or absolute path)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;slot&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Scheduling Policy for RMAPS. [slot
</span><br>
<span class="quotelev1">&gt; (alias:core) | socket |
</span><br>
<span class="quotelev1">&gt;                            board | node]
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Launch one ppn as directed
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Launch n procs/node
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_n_perboard&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Launch n procs/board
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_n_persocket&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Launch n procs/socket
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_loadbalance&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Balance total number of procs across all
</span><br>
<span class="quotelev1">&gt; allocated nodes
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_cpus_per_proc&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt; rmaps_base_cpus_per_rank)
</span><br>
<span class="quotelev1">&gt;                            Number of cpus to use for each rank [1-2**15
</span><br>
<span class="quotelev1">&gt; (default=1)]
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_cpus_per_rank&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value, synonym of:
</span><br>
<span class="quotelev1">&gt; rmaps_base_cpus_per_proc)
</span><br>
<span class="quotelev1">&gt;                            Number of cpus to use for each rank [1-2**15
</span><br>
<span class="quotelev1">&gt; (default=1)]
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_stride&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            When binding multiple cores to a rank, the
</span><br>
<span class="quotelev1">&gt; step size to use
</span><br>
<span class="quotelev1">&gt;                            between cores [1-2**15 (default: 1)]
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_slot_list&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            List of processor IDs to bind MPI processes
</span><br>
<span class="quotelev1">&gt; to (e.g., used in
</span><br>
<span class="quotelev1">&gt;                            conjunction with rank files) [default=NULL]
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_no_schedule_local&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            If false, allow scheduling MPI applications
</span><br>
<span class="quotelev1">&gt; on the same node as
</span><br>
<span class="quotelev1">&gt;                            mpirun (default).  If true, do not schedule any MPI
</span><br>
<span class="quotelev1">&gt;                            applications on the same node as mpirun
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_no_oversubscribe&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            If true, then do not allow oversubscription
</span><br>
<span class="quotelev1">&gt; of nodes - mpirun
</span><br>
<span class="quotelev1">&gt;                            will return an error if there aren't enough
</span><br>
<span class="quotelev1">&gt; nodes to launch all
</span><br>
<span class="quotelev1">&gt;                            processes without oversubscribing
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_display_map&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to display the process map after it
</span><br>
<span class="quotelev1">&gt; is computed
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_display_devel_map&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Whether to display a developer-detail
</span><br>
<span class="quotelev1">&gt; process map after it is
</span><br>
<span class="quotelev1">&gt;                            computed
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; rmaps framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the rmaps framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_load_balance_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_rank_file_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_resilient_fault_grp_file&quot;
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Filename that contains a description of
</span><br>
<span class="quotelev1">&gt; fault groups for this
</span><br>
<span class="quotelev1">&gt;                            system
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_resilient_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_round_robin_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_seq_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_topo_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: parameter &quot;rml_wrapper&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Use a Wrapper component around the selected
</span><br>
<span class="quotelev1">&gt; RML component
</span><br>
<span class="quotelev1">&gt;                   MCA rml: parameter &quot;rml&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; rml framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: parameter &quot;rml_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the rml framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: parameter &quot;rml_oob_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                MCA routed: parameter &quot;routed&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; routed framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA routed: parameter &quot;routed_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the routed framework (0
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA routed: parameter &quot;routed_binomial_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA routed: parameter &quot;routed_cm_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA routed: parameter &quot;routed_direct_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA routed: parameter &quot;routed_linear_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA routed: parameter &quot;routed_radix_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA routed: parameter &quot;routed_slave_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm_rsh_agent&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;ssh : rsh&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value, deprecated, synonym
</span><br>
<span class="quotelev1">&gt; of: orte_rsh_agent)
</span><br>
<span class="quotelev1">&gt;                            The command used to launch executables on remote nodes
</span><br>
<span class="quotelev1">&gt;                            (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm_rsh_assume_same_shell&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value, deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt;                            orte_assume_same_shell)
</span><br>
<span class="quotelev1">&gt;                            If set to 1, assume that the shell on the
</span><br>
<span class="quotelev1">&gt; remote node is the
</span><br>
<span class="quotelev1">&gt;                            same as the shell on the local node.
</span><br>
<span class="quotelev1">&gt; Otherwise, probe for what
</span><br>
<span class="quotelev1">&gt;                            the remote shell [default: 1]
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; plm framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the plm framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm_rsh_num_concurrent&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;128&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            How many plm_rsh_agent instances to invoke
</span><br>
<span class="quotelev1">&gt; concurrently (must
</span><br>
<span class="quotelev1">&gt;                            be&gt;  0)
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm_rsh_force_rsh&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Force the launcher to always use rsh
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm_rsh_disable_qrsh&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Disable the launcher to use qrsh when under
</span><br>
<span class="quotelev1">&gt; the SGE parallel
</span><br>
<span class="quotelev1">&gt;                            environment
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm_rsh_daemonize_qrsh&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Daemonize the orted under the SGE parallel environment
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm_rsh_disable_llspawn&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Disable the use of llspawn when under the LoadLeveler
</span><br>
<span class="quotelev1">&gt;                            environment
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm_rsh_daemonize_llspawn&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Daemonize the orted when under the
</span><br>
<span class="quotelev1">&gt; LoadLeveler environment
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm_rsh_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;10&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the rsh plm component
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm_rsh_delay&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Delay (in seconds) between invocations of
</span><br>
<span class="quotelev1">&gt; the remote agent, but
</span><br>
<span class="quotelev1">&gt;                            only used when the &quot;debug&quot; MCA parameter is
</span><br>
<span class="quotelev1">&gt; true, or the
</span><br>
<span class="quotelev1">&gt;                            top-level MCA debugging is enabled
</span><br>
<span class="quotelev1">&gt; (otherwise this value is
</span><br>
<span class="quotelev1">&gt;                            ignored)
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm_rsh_tree_spawn&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            If set to 1, launch via a tree-based topology
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm_slurm_args&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Custom arguments to srun
</span><br>
<span class="quotelev1">&gt;                   MCA plm: parameter &quot;plm_slurm_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA filem: parameter &quot;filem&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Which Filem component to use (empty = auto-select)
</span><br>
<span class="quotelev1">&gt;                 MCA filem: parameter &quot;filem_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the filem framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA filem: parameter &quot;filem_rsh_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;20&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of the FILEM rsh component
</span><br>
<span class="quotelev1">&gt;                 MCA filem: parameter &quot;filem_rsh_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbose level for the FILEM rsh component
</span><br>
<span class="quotelev1">&gt;                 MCA filem: parameter &quot;filem_rsh_rcp&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;scp&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            The rsh cp command for the FILEM rsh component
</span><br>
<span class="quotelev1">&gt;                 MCA filem: parameter &quot;filem_rsh_cp&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;cp&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            The Unix cp command for the FILEM rsh component
</span><br>
<span class="quotelev1">&gt;                 MCA filem: parameter &quot;filem_rsh_rsh&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;ssh&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            The remote shell command for the FILEM rsh component
</span><br>
<span class="quotelev1">&gt;                 MCA filem: parameter &quot;filem_rsh_max_incomming&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;10&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Maximum number of incomming connections (0 = any)
</span><br>
<span class="quotelev1">&gt;                 MCA filem: parameter &quot;filem_rsh_max_outgoing&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;10&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Maximum number of out going connections (0 = any)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; errmgr framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the errmgr framework (0
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr_default_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: parameter &quot;ess&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt;                            value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; ess framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: parameter &quot;ess_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the ess framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: parameter &quot;ess_env_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: parameter &quot;ess_hnp_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: parameter &quot;ess_singleton_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: parameter &quot;ess_slave_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: parameter &quot;ess_slurm_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: parameter &quot;ess_slurmd_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                   MCA ess: parameter &quot;ess_tool_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;               MCA grpcomm: parameter &quot;grpcomm&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; grpcomm framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA grpcomm: parameter &quot;grpcomm_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the grpcomm framework (0
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA grpcomm: parameter &quot;grpcomm_bad_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;               MCA grpcomm: parameter &quot;grpcomm_basic_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;               MCA grpcomm: parameter &quot;grpcomm_hier_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;              MCA notifier: parameter &quot;notifier_threshold_severity&quot;
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &lt;critical&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Report all events at or above this severity
</span><br>
<span class="quotelev1">&gt; [default: critical]
</span><br>
<span class="quotelev1">&gt;              MCA notifier: parameter &quot;notifier&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt; data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; notifier framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt;  means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;              MCA notifier: parameter &quot;notifier_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the notifier framework
</span><br>
<span class="quotelev1">&gt; (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;              MCA notifier: parameter &quot;notifier_command_cmd&quot; (current
</span><br>
<span class="quotelev1">&gt; value:&lt;/sbin/initlog
</span><br>
<span class="quotelev1">&gt;                            -f $s -n &quot;Open MPI&quot; -s &quot;$S: $m (errorcode:
</span><br>
<span class="quotelev1">&gt; $e)&quot;&gt;, data source:
</span><br>
<span class="quotelev1">&gt;                            default value)
</span><br>
<span class="quotelev1">&gt;                            Command to execute, with substitution.  $s =
</span><br>
<span class="quotelev1">&gt; integer severity;
</span><br>
<span class="quotelev1">&gt;                            $S = string severity; $e = integer error
</span><br>
<span class="quotelev1">&gt; code; $m = string
</span><br>
<span class="quotelev1">&gt;                            message
</span><br>
<span class="quotelev1">&gt;              MCA notifier: parameter &quot;notifier_command_timeout&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;30&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;                            Timeout (in seconds) of the command
</span><br>
<span class="quotelev1">&gt;              MCA notifier: parameter &quot;notifier_command_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;10&gt;,
</span><br>
<span class="quotelev1">&gt;                            data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Priority of this component
</span><br>
<span class="quotelev1">&gt;              MCA notifier: parameter &quot;notifier_syslog_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;                            source: default value)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ====================================================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; output of cat /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; processor	: 0
</span><br>
<span class="quotelev1">&gt; vendor_id	: AuthenticAMD
</span><br>
<span class="quotelev1">&gt; cpu family	: 15
</span><br>
<span class="quotelev1">&gt; model		: 75
</span><br>
<span class="quotelev1">&gt; model name	: AMD Athlon(tm) 64 X2 Dual Core Processor 3800+
</span><br>
<span class="quotelev1">&gt; stepping	: 2
</span><br>
<span class="quotelev1">&gt; cpu MHz		: 1002.094
</span><br>
<span class="quotelev1">&gt; cache size	: 512 KB
</span><br>
<span class="quotelev1">&gt; physical id	: 0
</span><br>
<span class="quotelev1">&gt; siblings	: 2
</span><br>
<span class="quotelev1">&gt; core id		: 0
</span><br>
<span class="quotelev1">&gt; cpu cores	: 2
</span><br>
<span class="quotelev1">&gt; fpu		: yes
</span><br>
<span class="quotelev1">&gt; fpu_exception	: yes
</span><br>
<span class="quotelev1">&gt; cpuid level	: 1
</span><br>
<span class="quotelev1">&gt; wp		: yes
</span><br>
<span class="quotelev1">&gt; flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov
</span><br>
<span class="quotelev1">&gt; pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext lm 3dnowext
</span><br>
<span class="quotelev1">&gt; 3dnow pni cx16
</span><br>
<span class="quotelev1">&gt; bogomips	: 2003.90
</span><br>
<span class="quotelev1">&gt; TLB size	: 1088 4K pages
</span><br>
<span class="quotelev1">&gt; clflush size	: 64
</span><br>
<span class="quotelev1">&gt; cache_alignment	: 64
</span><br>
<span class="quotelev1">&gt; address sizes	: 40 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management: ts fid vid ttp [4] [5]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor	: 1
</span><br>
<span class="quotelev1">&gt; vendor_id	: AuthenticAMD
</span><br>
<span class="quotelev1">&gt; cpu family	: 15
</span><br>
<span class="quotelev1">&gt; model		: 75
</span><br>
<span class="quotelev1">&gt; model name	: AMD Athlon(tm) 64 X2 Dual Core Processor 3800+
</span><br>
<span class="quotelev1">&gt; stepping	: 2
</span><br>
<span class="quotelev1">&gt; cpu MHz		: 1002.094
</span><br>
<span class="quotelev1">&gt; cache size	: 512 KB
</span><br>
<span class="quotelev1">&gt; physical id	: 0
</span><br>
<span class="quotelev1">&gt; siblings	: 2
</span><br>
<span class="quotelev1">&gt; core id		: 1
</span><br>
<span class="quotelev1">&gt; cpu cores	: 2
</span><br>
<span class="quotelev1">&gt; fpu		: yes
</span><br>
<span class="quotelev1">&gt; fpu_exception	: yes
</span><br>
<span class="quotelev1">&gt; cpuid level	: 1
</span><br>
<span class="quotelev1">&gt; wp		: yes
</span><br>
<span class="quotelev1">&gt; flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov
</span><br>
<span class="quotelev1">&gt; pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext lm 3dnowext
</span><br>
<span class="quotelev1">&gt; 3dnow pni cx16
</span><br>
<span class="quotelev1">&gt; bogomips	: 2003.90
</span><br>
<span class="quotelev1">&gt; TLB size	: 1088 4K pages
</span><br>
<span class="quotelev1">&gt; clflush size	: 64
</span><br>
<span class="quotelev1">&gt; cache_alignment	: 64
</span><br>
<span class="quotelev1">&gt; address sizes	: 40 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management: ts fid vid ttp [4] [5]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ====================================================================================================
</span><br>
<span class="quotelev1">&gt; output of ifconfig -a from a compute node
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:18:F3:3F:84:A1
</span><br>
<span class="quotelev1">&gt;            inet addr:192.168.0.2  Bcast:192.168.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: fe80::218:f3ff:fe3f:84a1/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;            UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:2006 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:2064 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;            RX bytes:242685 (236.9 KiB)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;            Interrupt:11 Base address:0x8000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;            inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;            UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:60 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:60 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;            RX bytes:4440 (4.3 KiB)  TX bytes:4440 (4.3 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sit0      Link encap:IPv6-in-IPv4
</span><br>
<span class="quotelev1">&gt;            NOARP  MTU:1480  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;            RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ====================================================================================================
</span><br>
<span class="quotelev1">&gt; output of ifconfig -a from the login node, where I run mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:18:F3:51:B3:6E
</span><br>
<span class="quotelev1">&gt;            inet addr:192.168.0.1  Bcast:192.168.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: fe80::218:f3ff:fe51:b36e/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;            UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:7180758 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:4989496 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;            RX bytes:6045614452 (5.6 GiB)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;            Interrupt:201 Base address:0xe000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:01:02:13:AA:3C
</span><br>
<span class="quotelev1">&gt;            inet addr:137.204.66.188  Bcast:137.204.66.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: fe80::201:2ff:fe13:aa3c/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;            UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:4750212 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:405027 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;            RX bytes:629146679 (600.0 MiB)  TX bytes:332118265 (316.7 MiB)
</span><br>
<span class="quotelev1">&gt;            Interrupt:177 Base address:0x9c00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;            inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;            UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:288455 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:288455 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;            RX bytes:35908038 (34.2 MiB)  TX bytes:35908038 (34.2 MiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sit0      Link encap:IPv6-in-IPv4
</span><br>
<span class="quotelev1">&gt;            NOARP  MTU:1480  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;            RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ====================================================================================================
</span><br>
<span class="quotelev1">&gt; output of mpirun --bynode --hostfile my_hostfile.txt --tag-output
</span><br>
<span class="quotelev1">&gt; ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt; [1,6]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; [1,6]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,6]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,6]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,6]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,6]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,6]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,6]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,6]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,6]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,6]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; [1,6]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt; [1,9]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; [1,10]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt; [1,4]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; [1,4]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,4]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,4]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,4]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,4]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,4]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,4]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,9]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,4]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,4]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,4]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; [1,4]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt; [1,9]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,10]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,9]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,10]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,9]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,10]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,9]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,10]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,10]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,9]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,10]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,9]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,10]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,9]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,10]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,9]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,10]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,9]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; [1,9]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt; [1,10]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; [1,10]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt; [1,8]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; [1,8]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,8]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,8]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,8]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,8]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,8]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,8]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,8]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,8]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,8]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; [1,8]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt; [1,11]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; [1,11]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,11]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,11]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,11]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,11]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,11]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,11]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,11]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,11]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,11]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; [1,11]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt; [1,5]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; [1,5]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,5]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,5]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,5]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,5]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,5]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,5]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,5]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,5]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,5]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; [1,5]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; [1,7]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; [1,7]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,7]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,7]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,7]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,7]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,7]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,7]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,7]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,7]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,7]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; [1,7]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20087.php">John Hearns: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20085.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20085.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20087.php">John Hearns: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20087.php">John Hearns: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
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
