<?
$subject_val = "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 10:15:49 2014" -->
<!-- isoreceived="20141027141549" -->
<!-- sent="Mon, 27 Oct 2014 14:15:45 +0000" -->
<!-- isosent="20141027141545" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code" -->
<!-- id="8337B490252F0944BF1D38541059627E1736260B_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code" -->
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
<strong>Subject:</strong> Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code<br>
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20WG:%20Bug%20in%20OpenMPI-1.8.3:%20storage%20limition%20in%20shared%20memory%20allocation%20(MPI_WIN_ALLOCATE_SHARED)%20in%20Ftn-code"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-10-27 10:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25612.php">Nathan Hjelm: "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Previous message:</strong> <a href="25610.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in	shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Maybe in reply to:</strong> <a href="25607.php">Michael.Rachner_at_[hidden]: "[OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25612.php">Nathan Hjelm: "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Reply:</strong> <a href="25612.php">Nathan Hjelm: "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gilles,
<br>

<br>
This is  the system response on the login node of cluster5:
<br>

<br>
cluster5:~/dat&gt; mpirun -np 1 df -h
<br>
Filesystem      Size  Used Avail Use% Mounted on
<br>
/dev/sda31      228G  5.6G  211G   3% /
<br>
udev             32G  232K   32G   1% /dev
<br>
tmpfs            32G     0   32G   0% /dev/shm
<br>
/dev/sda11      291M   39M  237M  15% /boot
<br>
/dev/gpfs10     495T  280T  216T  57% /gpfs10
<br>
/dev/loop1      3.2G  3.2G     0 100% /media
<br>
cluster5:~/dat&gt; mpirun -np 1 df -hi
<br>
Filesystem     Inodes IUsed IFree IUse% Mounted on
<br>
/dev/sda31        15M  253K   15M    2% /
<br>
udev                0     0     0     - /dev
<br>
tmpfs            7.9M     3  7.9M    1% /dev/shm
<br>
/dev/sda11        76K    41   76K    1% /boot
<br>
/dev/gpfs10      128M   67M   62M   53% /gpfs10
<br>
/dev/loop1          0     0     0     - /media
<br>
cluster5:~/dat&gt;
<br>

<br>

<br>
And this the system response on the compute node of cluster5:
<br>

<br>
rachner_at_r5i5n13:~&gt;  mpirun -np 1 df -h
<br>
Filesystem      Size  Used Avail Use% Mounted on
<br>
tmpfs            63G  1.4G   62G   3% /
<br>
udev             63G   92K   63G   1% /dev
<br>
tmpfs            63G     0   63G   0% /dev/shm
<br>
tmpfs           150M   12M  139M   8% /tmp
<br>
/dev/gpfs10     495T  280T  216T  57% /gpfs10
<br>
rachner_at_r5i5n13:~&gt;  mpirun -np 1 df -hi
<br>
Filesystem     Inodes IUsed IFree IUse% Mounted on
<br>
tmpfs             16M   63K   16M    1% /
<br>
udev                0     0     0     - /dev
<br>
tmpfs             16M     3   16M    1% /dev/shm
<br>
tmpfs             16M   183   16M    1% /tmp
<br>
/dev/gpfs10      128M   67M   62M   53% /gpfs10
<br>
rachner_at_r5i5n13:~&gt;
<br>

<br>
You wrote: 
<br>
&quot;From the logs, the error message makes sense to me : there is not enough space in /tmp Since the compute nodes have a lot of memory, you might want to try using /dev/shm instead of /tmp for the backing files&quot;
<br>

<br>
I do not understand that system output.  Is it required now to switch to   /dev/shm  ?   And how can I do that?  Or must our operators change something (the cluster is very new)? 
<br>

<br>
Greetings
<br>
&nbsp;Michael Rachner
<br>

<br>

<br>
-----Urspr&#195;&#188;ngliche Nachricht-----
<br>
Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Gilles Gouaillardet
<br>
Gesendet: Montag, 27. Oktober 2014 14:49
<br>
An: Open MPI Users
<br>
Betreff: Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code
<br>

<br>
Michael,
<br>

<br>
Could you please run
<br>
mpirun -np 1 df -h
<br>
mpirun -np 1 df -hi
<br>
on both compute and login nodes
<br>

<br>
Thanks
<br>

<br>
Gilles
<br>

<br>
Michael.Rachner_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;Dear developers of OPENMPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We have now installed and tested the bugfixed OPENMPI Nightly Tarball  of 2014-10-24  (openmpi-dev-176-g9334abc.tar.gz) on Cluster5 .
</span><br>
<span class="quotelev1">&gt;As before (with OPENMPI-1.8.3 release version) the small Ftn-testprogram runs correctly on the login-node.
</span><br>
<span class="quotelev1">&gt;As before the program aborts on the compute node, but now with a different error message: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The following message appears when launching the program with 2 processes:     mpiexec -np 2 -bind-to core -tag-output ./a.out
</span><br>
<span class="quotelev1">&gt;************************************************************************************************
</span><br>
<span class="quotelev1">&gt;[1,0]&lt;stdout&gt;: ========on nodemaster: iwin=         685 :
</span><br>
<span class="quotelev1">&gt;[1,0]&lt;stdout&gt;:  total storage [MByte] alloc. in shared windows so far:   137.000000000000
</span><br>
<span class="quotelev1">&gt;[ [1,0]&lt;stdout&gt;: =========== allocation of shared window no. iwin=         686
</span><br>
<span class="quotelev1">&gt;[1,0]&lt;stdout&gt;:  starting now with idim_1=       50000
</span><br>
<span class="quotelev1">&gt;-----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;-- It appears as if there is not enough space for 
</span><br>
<span class="quotelev1">&gt;/tmp/openmpi-sessions-rachner_at_r5i5n13_0/48127/1/shared_window_688.r5i5n
</span><br>
<span class="quotelev1">&gt;13 (the shared-memory backing file). It is likely that your MPI job 
</span><br>
<span class="quotelev1">&gt;will now either abort or experience performance degradation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Local host:  r5i5n13
</span><br>
<span class="quotelev1">&gt;  Space Requested: 204256 B
</span><br>
<span class="quotelev1">&gt;  Space Available: 208896 B
</span><br>
<span class="quotelev1">&gt;-----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;--- [r5i5n13:26917] *** An error occurred in MPI_Win_allocate_shared 
</span><br>
<span class="quotelev1">&gt;[r5i5n13:26917] *** reported by process [3154051073,140733193388032] 
</span><br>
<span class="quotelev1">&gt;[r5i5n13:26917] *** on communicator MPI_COMM_WORLD [r5i5n13:26917] *** 
</span><br>
<span class="quotelev1">&gt;MPI_ERR_INTERN: internal error [r5i5n13:26917] *** MPI_ERRORS_ARE_FATAL 
</span><br>
<span class="quotelev1">&gt;(processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt;[r5i5n13:26917] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;rachner_at_r5i5n13:~/dat&gt;
</span><br>
<span class="quotelev1">&gt;***********************************************************************
</span><br>
<span class="quotelev1">&gt;*************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;When I repeat the run using 24 processes (on same compute node) the same kind of abort message occurs, but earlier:
</span><br>
<span class="quotelev1">&gt;************************************************************************************************
</span><br>
<span class="quotelev1">&gt;[1,0]&lt;stdout&gt;: ========on nodemaster: iwin=         231 :
</span><br>
<span class="quotelev1">&gt;[1,0]&lt;stdout&gt;:  total storage [MByte] alloc. in shared windows so far:   46.2000000000000
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;: =========== allocation of shared window no. iwin=         232
</span><br>
<span class="quotelev1">&gt;[1,0]&lt;stdout&gt;:  starting now with idim_1=       50000
</span><br>
<span class="quotelev1">&gt;-----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;-- It appears as if there is not enough space for 
</span><br>
<span class="quotelev1">&gt;/tmp/openmpi-sessions-rachner_at_r5i5n13_0/48029/1/shared_window_234.r5i5n
</span><br>
<span class="quotelev1">&gt;13 (the shared-memory backing file). It is likely that your MPI job 
</span><br>
<span class="quotelev1">&gt;will now either abort or experience performance degradation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Local host:  r5i5n13
</span><br>
<span class="quotelev1">&gt;  Space Requested: 204784 B
</span><br>
<span class="quotelev1">&gt;  Space Available: 131072 B
</span><br>
<span class="quotelev1">&gt;-----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;--- [r5i5n13:26947] *** An error occurred in MPI_Win_allocate_shared 
</span><br>
<span class="quotelev1">&gt;[r5i5n13:26947] *** reported by process [3147628545,140733193388032] 
</span><br>
<span class="quotelev1">&gt;[r5i5n13:26947] *** on communicator MPI_COMM_WORLD [r5i5n13:26947] *** 
</span><br>
<span class="quotelev1">&gt;MPI_ERR_INTERN: internal error [r5i5n13:26947] *** MPI_ERRORS_ARE_FATAL 
</span><br>
<span class="quotelev1">&gt;(processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt;[r5i5n13:26947] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;rachner_at_r5i5n13:~/dat&gt;
</span><br>
<span class="quotelev1">&gt;***********************************************************************
</span><br>
<span class="quotelev1">&gt;*************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So the problem is not yet resolved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Greetings
</span><br>
<span class="quotelev1">&gt; Michael Rachner
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-----Urspr&#195;&#188;ngliche Nachricht-----
</span><br>
<span class="quotelev1">&gt;Von: Rachner, Michael
</span><br>
<span class="quotelev1">&gt;Gesendet: Montag, 27. Oktober 2014 11:49
</span><br>
<span class="quotelev1">&gt;An: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt;Betreff: AW: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in 
</span><br>
<span class="quotelev1">&gt;shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dear Mr. Squyres.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We will try to install your bug-fixed nigthly tarball of 2014-10-24 on Cluster5 to see whether it works or not.
</span><br>
<span class="quotelev1">&gt;The installation however will take some time. I get back to you, if I know more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Let me add the information that on the Laki each nodes has 16 GB of shared memory (there it worked), the login-node on Cluster 5 has 64 GB (there it worked too), whereas the compute nodes on Cluster5 have 128 GB (there it did not work).
</span><br>
<span class="quotelev1">&gt;So possibly the bug might have something to do with the size of the physical shared memory available on the node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Greetings
</span><br>
<span class="quotelev1">&gt;Michael Rachner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-----Urspr&#195;&#188;ngliche Nachricht-----
</span><br>
<span class="quotelev1">&gt;Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Jeff 
</span><br>
<span class="quotelev1">&gt;Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;Gesendet: Freitag, 24. Oktober 2014 22:45
</span><br>
<span class="quotelev1">&gt;An: Open MPI User's List
</span><br>
<span class="quotelev1">&gt;Betreff: Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in 
</span><br>
<span class="quotelev1">&gt;shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Nathan tells me that this may well be related to a fix that was literally just pulled into the v1.8 branch today:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://github.com/open-mpi/ompi-release/pull/56">https://github.com/open-mpi/ompi-release/pull/56</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Would you mind testing any nightly tarball after tonight?  (i.e., the 
</span><br>
<span class="quotelev1">&gt;v1.8 tarballs generated tonight will be the first ones to contain this 
</span><br>
<span class="quotelev1">&gt;fix)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/nightly/master/">http://www.open-mpi.org/nightly/master/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Oct 24, 2014, at 11:46 AM, &lt;Michael.Rachner_at_[hidden]&gt; &lt;Michael.Rachner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear developers of OPENMPI,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I am running a small downsized Fortran-testprogram for shared memory allocation (using MPI_WIN_ALLOCATE_SHARED and  MPI_WIN_SHARED_QUERY) )
</span><br>
<span class="quotelev2">&gt;&gt; on only 1 node   of 2 different Linux-clusters with OPENMPI-1.8.3 and Intel-14.0.4 /Intel-13.0.1, respectively.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; The program simply allocates a sequence of shared data windows, each consisting of 1 integer*4-array.
</span><br>
<span class="quotelev2">&gt;&gt; None of the windows is freed, so the amount of allocated data  in shared windows raises during the course of the execution.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; That worked well on the 1st cluster (Laki, having 8 procs per node)) 
</span><br>
<span class="quotelev2">&gt;&gt; when allocating even 1000 shared windows each having 50000 integer*4 array elements, i.e. a total of  200 MBytes.
</span><br>
<span class="quotelev2">&gt;&gt; On the 2nd cluster (Cluster5, having 24 procs per node) it also worked on the login node, but it did NOT work on a compute node.
</span><br>
<span class="quotelev2">&gt;&gt; In that error case, there occurs something like an internal storage limit of ~ 140 MB for the total storage allocated in all shared windows.
</span><br>
<span class="quotelev2">&gt;&gt; When that limit is reached, all later shared memory allocations fail (but silently).
</span><br>
<span class="quotelev2">&gt;&gt; So the first attempt to use such a bad shared data window results in a bus error due to the bad storage address encountered.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; That strange behavior could be observed in the small testprogram but also with my large Fortran CFD-code.
</span><br>
<span class="quotelev2">&gt;&gt; If the error occurs, then it occurs with both codes, and both at a storage limit of  ~140 MB.
</span><br>
<span class="quotelev2">&gt;&gt; I found that this storage limit depends only weakly on  the number of 
</span><br>
<span class="quotelev2">&gt;&gt; processes (for np=2,4,8,16,24  it is: 144.4 , 144.0, 141.0, 137.0,
</span><br>
<span class="quotelev2">&gt;&gt; 132.2 MB)
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Note that the shared memory storage available on both clusters was very large (many GB of free memory).
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Here is the error message when running with np=2 and an  array 
</span><br>
<span class="quotelev2">&gt;&gt; dimension of idim_1=50000  for the integer*4 array allocated per shared window on the compute node of Cluster5:
</span><br>
<span class="quotelev2">&gt;&gt; In that case, the error occurred at the 723-th shared window, which is the 1st badly allocated window in that case:
</span><br>
<span class="quotelev2">&gt;&gt; (722 successfully allocated shared windows * 50000 array elements * 4 
</span><br>
<span class="quotelev2">&gt;&gt; Bytes/el. = 144.4 MB)
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;: ========on nodemaster: iwin=         722 :
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:  total storage [MByte] alloc. in shared windows so far:   144.400000000000
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;: =========== allocation of shared window no. iwin=         723
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:  starting now with idim_1=       50000
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;: ========on nodemaster for iwin=         723 : before writing on shared mem
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] *** Process received signal *** 
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] Signal: Bus error (7) 
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] Signal code: Non-existant physical 
</span><br>
<span class="quotelev2">&gt;&gt; address (2) [1,0]&lt;stderr&gt;:[r5i5n13:12597] Failing at address:
</span><br>
<span class="quotelev2">&gt;&gt; 0x7fffe08da000 [1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 0] 
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:/lib64/libpthread.so.0(+0xf800)[0x7ffff6d67800]
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 1] ./a.out[0x408a8b] 
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 2] ./a.out[0x40800c] 
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 3] 
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:/lib64/libc.so.6(__libc_start_main+0xe6)[0x7ffff69fec36
</span><br>
<span class="quotelev2">&gt;&gt; ] [1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 4] [1,0]&lt;stderr&gt;:./a.out[0x407f09] 
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stderr&gt;:forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stderr&gt;:Image              PC                Routine            Line        Source
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stderr&gt;:libopen-pal.so.6   00007FFFF4B74580  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stderr&gt;:libmpi.so.1        00007FFFF7267F3E  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stderr&gt;:libmpi.so.1        00007FFFF733B555  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stderr&gt;:libmpi.so.1        00007FFFF727DFFD  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stderr&gt;:libmpi_mpifh.so.2  00007FFFF779BA03  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stderr&gt;:a.out              0000000000408D15  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stderr&gt;:a.out              000000000040800C  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stderr&gt;:libc.so.6          00007FFFF69FEC36  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stderr&gt;:a.out              0000000000407F09  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ---- mpiexec noticed that process rank 0 with PID 12597 on node
</span><br>
<span class="quotelev2">&gt;&gt; r5i5n13 exited on signal 7 (Bus error).
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; The small Ftn-testprogram was built by   
</span><br>
<span class="quotelev2">&gt;&gt;   mpif90 sharedmemtest.f90
</span><br>
<span class="quotelev2">&gt;&gt;   mpiexec -np 2 -bind-to core -tag-output ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Why does it work on the Laki  (both on login-node and on a compute
</span><br>
<span class="quotelev2">&gt;&gt; node)  as well as on the login-node of Cluster5, but fails on an compute node of Cluster5?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Greetings
</span><br>
<span class="quotelev2">&gt;&gt;    Michael Rachner
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25572.php">http://www.open-mpi.org/community/lists/users/2014/10/25572.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to: 
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: 
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/users/2014/10/25580.php">http://www.open-mpi.org/community/lists/users/2014/10/25580.php</a>
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: 
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/users/2014/10/25607.php">http://www.open-mpi.org/community/lists/users/2014/10/25607.php</a>
</span><br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25608.php">http://www.open-mpi.org/community/lists/users/2014/10/25608.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25612.php">Nathan Hjelm: "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Previous message:</strong> <a href="25610.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in	shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Maybe in reply to:</strong> <a href="25607.php">Michael.Rachner_at_[hidden]: "[OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25612.php">Nathan Hjelm: "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Reply:</strong> <a href="25612.php">Nathan Hjelm: "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
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
