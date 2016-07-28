<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun 17 07:33:02 2007" -->
<!-- isoreceived="20070617113302" -->
<!-- sent="Sun, 17 Jun 2007 13:32:13 +0200" -->
<!-- isosent="20070617113213" -->
<!-- name="Markus Daene" -->
<!-- email="markus.daene_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems" -->
<!-- id="46751BBD.8000906_at_physik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C6FC0482-8930-4281-90BE-12A3B4C2FDB7_at_cisco.com" -->
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
<strong>From:</strong> Markus Daene (<em>markus.daene_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-17 07:32:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1726.php">Don Kerr: "[OMPI devel] udapl v1.2.4  merge"</a>
<li><strong>Previous message:</strong> <a href="1724.php">Markus Daene: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>In reply to:</strong> <a href="1652.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1736.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Reply:</strong> <a href="1736.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>thanks for your comments.
<br>
<p>1.  I will report this to the GE mailing list.
<br>
<p>2. We have a cluster of 18 nodes with 16 cores each (8x dual core
<br>
Opteron). So we plan to run something between 1...128 processes in
<br>
total, 16 per node. Of course, if the sm component allocates 512MB x 16
<br>
on on node, this is 8GB, just for the MPI, it will be too much. I
<br>
reduced the size like Ralph suggests.
<br>
<p>3. I think it will not be possible to use the OpenFabrics kernel/user
<br>
stack. The machine was installed by SUN, it seems that they did not use
<br>
the one from OpenFabrics. I guess it will be a hard discussion to change
<br>
this and we cannot do this by our own, we will eventually loose the support.
<br>
<p>4. I will try if the DMA engine would works better instead of the sm
<br>
component.
<br>
We will run 16 processes per node with different message sizes. We are
<br>
using 2 HCA on each node (bonded).
<br>
<p>Markus
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; In addition to what Ralph said, I have the following random comments:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. You'll have to ask on the GE mailing lists about the GE issues  
</span><br>
<span class="quotelev1">&gt; (2gb vs. 2000mb, etc.); I doubt we'll be of much help here on this list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Do you have a very large SMP machine (i.e., 16 cores or more)?   
</span><br>
<span class="quotelev1">&gt; More specifically, how many MPI processes do you plan to run at once  
</span><br>
<span class="quotelev1">&gt; on a host?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Unrelated to the SMP issue, I see that you are using the  
</span><br>
<span class="quotelev1">&gt; InfiniBand Mellanox VAPI interface (mvapi BTL).  Is there any chance  
</span><br>
<span class="quotelev1">&gt; that you can upgrade to the newer OpenFabrics kernel/user stack?  All  
</span><br>
<span class="quotelev1">&gt; the IB vendors support it for their HPC customers.  FWIW: all Open  
</span><br>
<span class="quotelev1">&gt; MPI InfiniBand work is being done in support of OpenFabrics; the  
</span><br>
<span class="quotelev1">&gt; &quot;mvapi&quot; BTL is only maintained for backward compatibility and has had  
</span><br>
<span class="quotelev1">&gt; no new work done on it in at least a year.  See <a href="http://www.open">http://www.open</a>- 
</span><br>
<span class="quotelev1">&gt; mpi.org/faq/?category=openfabrics#vapi-support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. Note that depending on your application (e.g., if it primarily  
</span><br>
<span class="quotelev1">&gt; sends large messages), it *may* be faster to use the DMA engine in  
</span><br>
<span class="quotelev1">&gt; your IB interface and not use Open MPI's shared memory interface.   
</span><br>
<span class="quotelev1">&gt; But there are a lot of factors involved here, such as the size of  
</span><br>
<span class="quotelev1">&gt; your typical messages, how many processes you run per host (i.e., I'm  
</span><br>
<span class="quotelev1">&gt; assuming you have one HCA that would need to service all the  
</span><br>
<span class="quotelev1">&gt; processes), etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 10, 2007, at 6:04 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi Markus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are two MCA params that can help you, I believe:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. You to set the maximum size of the shared memory file with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca mpool_sm_max_size xxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where xxx is the maximum memory file you want, expressed in bytes. The
</span><br>
<span class="quotelev2">&gt;&gt; default value I see is 512MBytes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. You can set the size/peer of the file, again in bytes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca mpool_sm_per_peer_size xxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This will allocate a file that is xxx * num_procs_on_the_node on  
</span><br>
<span class="quotelev2">&gt;&gt; each node,
</span><br>
<span class="quotelev2">&gt;&gt; up to the maximum file size (either the 512MB default or whatever you
</span><br>
<span class="quotelev2">&gt;&gt; specified using the previous param). This defaults to 32MBytes/proc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see that there is also a minimum (total, not per-proc) file size  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; defaults to 128MBytes. If that is still too large, you can adjust  
</span><br>
<span class="quotelev2">&gt;&gt; it using
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca mpool_sm_min_size yyy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope that helps
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 6/10/07 2:55 PM, &quot;Markus Daene&quot; &lt;markus.daene_at_physik.uni- 
</span><br>
<span class="quotelev2">&gt;&gt; halle.de&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope I am in the correct mailing list with my problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I try to run openmpi with the gridengine(6.0u10, 6.1). Therefore I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled openmpi (1.2.2),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which has the gridengine support included, I have checked it with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In principle, openmpi runs well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The gridengine is configured such that the user has to specify the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory consumption
</span><br>
<span class="quotelev3">&gt;&gt;&gt; via the h_vmem option. Then I noticed that with a larger number of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes the job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is killed by the gridengine because of taking too much memory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To take a closer look on that, I wrote a small and simple  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Fortran) MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program which has just a MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and a (static) array, in my case of 50MB, then the programm goes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (infinite) loop, because it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; takes some time until the gridengine reports the maxvmem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found, that if the processes run all on different nodes, there  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a offset per process, at least
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a linear scaling. But it becomes worse when the jobs run on one node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There it seems to be a quadratic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scaling with the offset, in my case about 30M. I made a list of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; virtual memory reported by the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gridengine, I was running on a 16 processor node:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #N proc    virt. Mem[MB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1          182
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2          468
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3          825
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4          1065
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5          1001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6          1378
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7          1817
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8          2303
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12         4927
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16         8559
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the pure program should need N*50MB, for 16 it is only 800M, but it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; takes 10 times more, &gt;7GB!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course, the gridengine will kills the job is this overtaking is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; taken into accout,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because of too much virtual memory consumption. The momory  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consumtion is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not related to the grid engine,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is the same if I run from the command line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess it might be related to the 'sm' component of the btl.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it possible to avoid the quadratic scaling?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course I could use the vapi/tcp component only like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca btl mvapi  -np 16 ./my_test_program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in this case the virtual memory is fine, but it will not be what one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wants on a smp node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then it becomes ever worse:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi nicely report the (max./act.) used virtual memory to the grid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; engine as sum of all processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This value is the compared with the one the user has specified  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; h_vmem option, but the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gridengine takes this value per process for the allocation of the job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (works) and does not multiply
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this with the number of processes. Maybe one should report this to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gridenging mailing list, but it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could be related as well for the openmpi interface.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The last thing I noticed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that if the v_mem option for gridengine jobs is specified  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '2.0G' my test job was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; immedialtely killed; but when I specify '2000M' (which is obviously
</span><br>
<span class="quotelev3">&gt;&gt;&gt; less) it work. The gridengine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; puts the job allways on the correct node as requested, but I think  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is might be a problem in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the openmpi interface.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It would be nice if someone could give some hints how to avoid the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quadratic scaling or maybe to think
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if this is really neccessary in openmpi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Markus Daene
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my compiling options:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/not_important --enable-static
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-f90-size=medium --with-f90-max-array-dim=7  --with-mpi-para
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m-check=always --enable-cxx-exceptions --with-mvapi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mca-no-build=btl-tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open MPI: 1.2.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI SVN revision: r14613
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open RTE: 1.2.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open RTE SVN revision: r14613
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     OPAL: 1.2.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OPAL SVN revision: r14613
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Prefix: /usrurz/openmpi/1.2.2/pathscale_3.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configured by: root
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configured on: Mon Jun  4 16:04:38 CEST 2007
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Configure host: GE1N01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built by: root
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built on: Mon Jun  4 16:09:37 CEST 2007
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Built host: GE1N01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C compiler: pathcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      C compiler absolute: /usrurz/pathscale/bin/pathcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ compiler: pathCC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    C++ compiler absolute: /usrurz/pathscale/bin/pathCC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 compiler: pathf90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran77 compiler abs: /usrurz/pathscale/bin/pathf90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 compiler: pathf90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran90 compiler abs: /usrurz/pathscale/bin/pathf90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           C++ exceptions: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI parameter check: always
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA backtrace: execinfo (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: mvapi (MCA v1.0, API v1.0.1, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA rmaps: round_robin (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Markus Daene
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Martin Luther University Halle-Wittenberg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Naturwissenschaftliche Fakultaet II
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Institute of Physics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Von Seckendorff-Platz 1 (room 1.28)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 06120 Halle
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Germany
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1726.php">Don Kerr: "[OMPI devel] udapl v1.2.4  merge"</a>
<li><strong>Previous message:</strong> <a href="1724.php">Markus Daene: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>In reply to:</strong> <a href="1652.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1736.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Reply:</strong> <a href="1736.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
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
