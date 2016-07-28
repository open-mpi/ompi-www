<?
$subject_val = "Re: [OMPI users] Fw: Re:  Open MPI timeout problems.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 08:32:08 2008" -->
<!-- isoreceived="20080620123208" -->
<!-- sent="Fri, 20 Jun 2008 08:31:57 -0400" -->
<!-- isosent="20080620123157" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fw: Re:  Open MPI timeout problems." -->
<!-- id="B5B45E46-400A-4AAF-A34B-F1CDF85DC16E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="485AD1E5.6010601_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fw: Re:  Open MPI timeout problems.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-20 08:31:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5950.php">Peter Diamessis: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>Previous message:</strong> <a href="5948.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5944.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5950.php">Peter Diamessis: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>Reply:</strong> <a href="5950.php">Peter Diamessis: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To clarify what Pasha said: AFAIK, all IB vendors have deprecated the  
<br>
use of their mVAPI-based driver stacks in HPC environments (I know  
<br>
that Cisco and Mellanox have; I'm not 100% sure about others).  We all  
<br>
encourage upgrading to the OFED stack (currently at v1.3.1) if  
<br>
possible; it's much newer, more modern, and is where all development  
<br>
work is occurring these days.  Indeed, OMPI is dropping support for  
<br>
the older mVAPI-based driver stacks in our upcoming v1.3 release.
<br>
<p>Upgrading to a whole new driver stack is not something that can be  
<br>
undertaken lightly, though -- it will likely take time for the  
<br>
syadmins to evaluate, learn, etc.
<br>
<p><p>On Jun 19, 2008, at 5:38 PM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I appreciate the feedback. I'm assuming that this upgrade to the  
</span><br>
<span class="quotelev2">&gt;&gt; Open Fabric
</span><br>
<span class="quotelev2">&gt;&gt; driver is something that the System Admin. of the cluster should be  
</span><br>
<span class="quotelev2">&gt;&gt; concerned with and not I ?
</span><br>
<span class="quotelev1">&gt; Driver upgrade will require root permissions.
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Peter
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Peter Diamessis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- On *Thu, 6/19/08, Pavel Shamis (Pasha) /&lt;pasha_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;/* wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    From: Pavel Shamis (Pasha) &lt;pasha_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Subject: Re: [OMPI users] Open MPI timeout problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    To: pjd38_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Date: Thursday, June 19, 2008, 5:20 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Usually the retry exceed point to some network issue on your  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster. I     see from the logs that you still
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    use MVAPI. If i remember correct,  MVAPI include IBADM  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application that     should be able to check and debug the network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    BTW I recommend you to update your MVAPI driver to latest  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenFabric driver.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Peter Diamessis wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; Dear folks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; I would appreciate your help on the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; I'm running a parallel CFD code on the Army Research Lab's MJM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; cluster, which uses Open-MPI. I've run the same code on other  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; clusters that use MPICH2 and had never run into this problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; I'm quite convinced that the bottleneck for my code is this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; transposition routine, although I have not done any rigorous  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; profiling
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; to check on it. This is where 90% of the parallel  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication takes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; place. I'm running a CFD code that uses a 3-D rectangular  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; domain which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; is partitioned across processors in such a way that each  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; stores vertical slabs that are contiguous in the x-direction  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; across processors in the y-dir. . When a 2-D Fast Fourier  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Transform
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; (FFT) needs to be done, data is transposed such that the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vertical slabs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; are now contiguous in the y-dir. in each processor.     &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; The code would normally be run for about 10,000 timesteps. In  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; specific case which blocks, the job crashes after ~200  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timesteps and at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; each timestep a large number of 2-D FFTs are performed. For a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; domain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; with resolution of Nx * Ny * Nz points and P processors,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; during one FFT,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; each processor performs P Sends and P Receives of a message  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of size
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; (Nx*Ny*Nz)/P, i.e. there are a total of 2*P^2 such Sends/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Receives.     &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; I've focused on a case using P=32 procs with Nx=256, Ny=128,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nz=175.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; can see that each FFT involves 2048 communications. I totally  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rewrote my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; data transposition routine to no longer use specific blocking/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; blocking Sends/Receives but to use MPI_ALLTOALL which I would  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hope is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; optimized for the specific MPI Implementation to do data  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; transpositions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; Unfortunately, my code still crashes with time-out problems  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like before.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; This happens for P=4, 8, 16 &amp; 32 processors. The same  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ALLTOALL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; worked fine on a smaller cluster here. Note that in the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; future I would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; like to work with resolutions of (Nx,Ny,Nz)=(512,256,533) and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P=128 or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; 256 procs. which will involve an order of magnitude more  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; Note that I ran the job by submitting it to an LSF queue  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system. I've
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; attached the script file used for that. I basically enter  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bsub -x &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; script_openmpi at the command line.     &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; When I communicated with a consultant at ARL, he recommended  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; 3 specific script files which I've attached. I believe these  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; control over some of the MCA parameters. I've experimented  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with values
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; of  btl_mvapi_ib_timeout = 14, 18, 20, 24 and 30 and I still  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; problem. I am still in contact with this consultant but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thought it would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; be good to contact you folks directly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; Note:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; a) echo $PATH returns:     &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; /opt/mpi/x86_64/pgi/6.2/openmpi-1.2/bin:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; /opt/compiler/pgi/linux86-64/6.2/bin:/usr/lsf/6.2/linux2.6- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; glibc2.3-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; ia32e/bin:/usr/lsf/6.2/linux2.6-glibc2.3-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; ia32e/etc:/usr/cta/modules/3.1.6/bin:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; /usr/local/bin:/usr/bin:/usr/X11R6/bin:/bin:/usr/games:/opt/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gnome/bin:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; .:/usr/lib/java/bin:/opt/gm/bin:/opt/mx/bin:/opt/PST/bin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; b) echo $LD_LIBRARY_PATH returns:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; /opt/mpi/x86_64/pgi/6.2/openmpi-1.2/lib:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; /opt/compiler/pgi/linux86-64/6.2/lib:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; /opt/compiler/pgi/linux86-64/6.2/libso:/usr/lsf/6.2/linux2.6- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; glibc2.3-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; ia32e/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; I've attached the following files:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; 1) Gzipped versions of the .out &amp; .err files of the failed job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; 2) ompi_info.log: The output of ompi_info -all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; 3) mpirun, mpirun.lsf, openmpi_wrapper: the three script  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files provided
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; to me by the ARL consultant. I store these in my home  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; experimented with the MCA parameter btl_mvapi_ib_timeout in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; 4) The script file script_openmpi that I use to submit the job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; I am unable to provide you with the config.log file as I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cannot find it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; in the top level Open MPI directory.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; I am also unable to provide you with details on the specific  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; that I'm running in terms of the network. I know they use  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Infiniband
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; some more detail may be found on:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; <a href="http://www.arl.hpc.mil/Systems/mjm.html">http://www.arl.hpc.mil/Systems/mjm.html</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; Some other info:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; a) uname -a returns:     &gt; Linux l1 2.6.5-7.308-smp.arl-msrc  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2 SMP Thu Jan 10 09:18:41 EST 2008
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; b) ulimit -l returns: unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; I cannot see a pattern as to which nodes are bad and which  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are good ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; Note that I found in the mail archives that someone had a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; similar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; problem in transposing a matrix with 16 million elements. The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; answer I found in the thread was to increase the value of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; btl_mvapi_ib_timeout to 14 or 16, something I've done already.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; I'm hoping that there must be a way out of this problem. I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; get my code running as I'm under pressure to produce results  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; grant that's paying me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; If you have any feedback I would be hugely grateful.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; Sincerely,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; Peter Diamessis
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; Cornell University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;    &gt;       &gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;    &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5950.php">Peter Diamessis: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>Previous message:</strong> <a href="5948.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5944.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5950.php">Peter Diamessis: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>Reply:</strong> <a href="5950.php">Peter Diamessis: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
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
