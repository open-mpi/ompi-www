<?
$subject_val = "Re: [OMPI users] Fw: Re:  Open MPI timeout problems.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 16:31:56 2008" -->
<!-- isoreceived="20080619203156" -->
<!-- sent="Thu, 19 Jun 2008 16:37:21 -0400" -->
<!-- isosent="20080619203721" -->
<!-- name="Peter Diamessis" -->
<!-- email="pjd38_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fw: Re:  Open MPI timeout problems." -->
<!-- id="485AC381.3050104_at_cornell.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="124262.6979.qm_at_web33102.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Peter Diamessis (<em>pjd38_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 16:37:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5944.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>Previous message:</strong> <a href="5942.php">Joshua Bernstein: "[OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5944.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>Reply:</strong> <a href="5944.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pasha,
<br>
<p>I appreciate the feedback. I'm assuming that this upgrade to the Open Fabric
<br>
driver is something that the System Admin. of the cluster should be 
<br>
concerned with and not I ?
<br>
<p>Thanks,
<br>
<p>Peter
<br>
<p>Peter Diamessis wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On *Thu, 6/19/08, Pavel Shamis (Pasha) 
</span><br>
<span class="quotelev1">&gt; /&lt;pasha_at_[hidden]&gt;/* wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     From: Pavel Shamis (Pasha) &lt;pasha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subject: Re: [OMPI users] Open MPI timeout problems.
</span><br>
<span class="quotelev1">&gt;     To: pjd38_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Date: Thursday, June 19, 2008, 5:20 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Usually the retry exceed point to some network issue on your cluster. I 
</span><br>
<span class="quotelev1">&gt;     see from the logs that you still
</span><br>
<span class="quotelev1">&gt;     use MVAPI. If i remember correct,  MVAPI include IBADM application that 
</span><br>
<span class="quotelev1">&gt;     should be able to check and debug the network.
</span><br>
<span class="quotelev1">&gt;     BTW I recommend you to update your MVAPI driver to latest OpenFabric driver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Peter Diamessis wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Dear folks,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I would appreciate your help on the following:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I'm running a parallel CFD code on the Army Research Lab's MJM
</span><br>
<span class="quotelev1">&gt;     Linux
</span><br>
<span class="quotelev2">&gt;     &gt; cluster, which uses Open-MPI. I've run the same code on other Linux
</span><br>
<span class="quotelev2">&gt;     &gt; clusters that use MPICH2 and had never run into this problem.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I'm quite convinced that the bottleneck for my code is this data
</span><br>
<span class="quotelev2">&gt;     &gt; transposition routine, although I have not done any rigorous profiling
</span><br>
<span class="quotelev2">&gt;     &gt; to check on it. This is where 90% of the parallel communication takes
</span><br>
<span class="quotelev2">&gt;     &gt; place. I'm running a CFD code that uses a 3-D rectangular domain which
</span><br>
<span class="quotelev2">&gt;     &gt; is partitioned across processors in such a way that each processor
</span><br>
<span class="quotelev2">&gt;     &gt; stores vertical slabs that are contiguous in the x-direction but shared
</span><br>
<span class="quotelev2">&gt;     &gt; across processors in the y-dir. . When a 2-D Fast Fourier Transform
</span><br>
<span class="quotelev2">&gt;     &gt; (FFT) needs to be done, data is transposed such that the vertical slabs
</span><br>
<span class="quotelev2">&gt;     &gt; are now contiguous in the y-dir. in each processor. 
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; The code would normally be run for about 10,000 timesteps. In the
</span><br>
<span class="quotelev2">&gt;     &gt; specific case which blocks, the job crashes after ~200 timesteps and at
</span><br>
<span class="quotelev2">&gt;     &gt; each timestep a large number of 2-D FFTs are performed. For a domain
</span><br>
<span class="quotelev2">&gt;     &gt; with resolution of Nx * Ny * Nz points and P processors, during one FFT,
</span><br>
<span class="quotelev2">&gt;     &gt; each processor performs P Sends and P Receives of a message of size
</span><br>
<span class="quotelev2">&gt;     &gt; (Nx*Ny*Nz)/P, i.e. there are a total of 2*P^2 such Sends/Receives. 
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I've focused on a case using P=32 procs with Nx=256, Ny=128, Nz=175.
</span><br>
<span class="quotelev1">&gt;     You
</span><br>
<span class="quotelev2">&gt;     &gt; can see that each FFT involves 2048 communications. I totally rewrote my
</span><br>
<span class="quotelev2">&gt;     &gt; data transposition routine to no longer use specific blocking/non-
</span><br>
<span class="quotelev2">&gt;     &gt; blocking Sends/Receives but to use MPI_ALLTOALL which I would hope is
</span><br>
<span class="quotelev2">&gt;     &gt; optimized for the specific MPI Implementation to do data transpositions.
</span><br>
<span class="quotelev2">&gt;     &gt; Unfortunately, my code still crashes with time-out problems like before.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; This happens for P=4, 8, 16 &amp; 32 processors. The same MPI_ALLTOALL
</span><br>
<span class="quotelev1">&gt;     code
</span><br>
<span class="quotelev2">&gt;     &gt; worked fine on a smaller cluster here. Note that in the future I would
</span><br>
<span class="quotelev2">&gt;     &gt; like to work with resolutions of (Nx,Ny,Nz)=(512,256,533) and P=128 or
</span><br>
<span class="quotelev2">&gt;     &gt; 256 procs. which will involve an order of magnitude more communication.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Note that I ran the job by submitting it to an LSF queue system. I've
</span><br>
<span class="quotelev2">&gt;     &gt; attached the script file used for that. I basically enter bsub -x &lt;
</span><br>
<span class="quotelev2">&gt;     &gt; script_openmpi at the command line. 
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; When I communicated with a consultant at ARL, he recommended I use
</span><br>
<span class="quotelev2">&gt;     &gt; 3 specific script files which I've attached. I believe these enable
</span><br>
<span class="quotelev2">&gt;     &gt; control over some of the MCA parameters. I've experimented with values
</span><br>
<span class="quotelev2">&gt;     &gt; of  btl_mvapi_ib_timeout = 14, 18, 20, 24 and 30 and I still have this
</span><br>
<span class="quotelev2">&gt;     &gt; problem. I am still in contact with this consultant but thought it would
</span><br>
<span class="quotelev2">&gt;     &gt; be good to contact you folks directly.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Note:
</span><br>
<span class="quotelev2">&gt;     &gt; a) echo $PATH returns: 
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; /opt/mpi/x86_64/pgi/6.2/openmpi-1.2/bin:
</span><br>
<span class="quotelev2">&gt;     &gt; /opt/compiler/pgi/linux86-64/6.2/bin:/usr/lsf/6.2/linux2.6-glibc2.3-
</span><br>
<span class="quotelev2">&gt;     &gt; ia32e/bin:/usr/lsf/6.2/linux2.6-glibc2.3-
</span><br>
<span class="quotelev2">&gt;     &gt; ia32e/etc:/usr/cta/modules/3.1.6/bin:
</span><br>
<span class="quotelev2">&gt;     &gt; /usr/local/bin:/usr/bin:/usr/X11R6/bin:/bin:/usr/games:/opt/gnome/bin:
</span><br>
<span class="quotelev2">&gt;     &gt; .:/usr/lib/java/bin:/opt/gm/bin:/opt/mx/bin:/opt/PST/bin
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; b) echo $LD_LIBRARY_PATH returns:
</span><br>
<span class="quotelev2">&gt;     &gt; /opt/mpi/x86_64/pgi/6.2/openmpi-1.2/lib:
</span><br>
<span class="quotelev2">&gt;     &gt; /opt/compiler/pgi/linux86-64/6.2/lib:
</span><br>
<span class="quotelev2">&gt;     &gt; /opt/compiler/pgi/linux86-64/6.2/libso:/usr/lsf/6.2/linux2.6-glibc2.3-
</span><br>
<span class="quotelev2">&gt;     &gt; ia32e/lib
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I've attached the following files:
</span><br>
<span class="quotelev2">&gt;     &gt; 1) Gzipped versions of the .out &amp; .err files of the failed job.
</span><br>
<span class="quotelev2">&gt;     &gt; 2) ompi_info.log: The output of ompi_info -all
</span><br>
<span class="quotelev2">&gt;     &gt; 3) mpirun, mpirun.lsf, openmpi_wrapper: the three script files provided
</span><br>
<span class="quotelev2">&gt;     &gt; to me by the ARL consultant. I store these in my home directory and
</span><br>
<span class="quotelev2">&gt;     &gt; experimented with the MCA parameter btl_mvapi_ib_timeout in mpirun.
</span><br>
<span class="quotelev2">&gt;     &gt; 4) The script file script_openmpi that I use to submit the job.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I am unable to provide you with the config.log file as I cannot find it
</span><br>
<span class="quotelev2">&gt;     &gt; in the top level Open MPI directory.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I am also unable to provide you with details on the specific cluster
</span><br>
<span class="quotelev2">&gt;     &gt; that I'm running in terms of the network. I know they use Infiniband
</span><br>
<span class="quotelev1">&gt;     and
</span><br>
<span class="quotelev2">&gt;     &gt; some more detail may be found on:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.arl.hpc.mil/Systems/mjm.html">http://www.arl.hpc.mil/Systems/mjm.html</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Some other info:
</span><br>
<span class="quotelev2">&gt;     &gt; a) uname -a returns: 
</span><br>
<span class="quotelev2">&gt;     &gt; Linux l1 2.6.5-7.308-smp.arl-msrc #2 SMP Thu Jan 10 09:18:41 EST 2008
</span><br>
<span class="quotelev2">&gt;     &gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; b) ulimit -l returns: unlimited
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I cannot see a pattern as to which nodes are bad and which are good ...
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Note that I found in the mail archives that someone had a similar
</span><br>
<span class="quotelev2">&gt;     &gt; problem in transposing a matrix with 16 million elements. The only
</span><br>
<span class="quotelev2">&gt;     &gt; answer I found in the thread was to increase the value of
</span><br>
<span class="quotelev2">&gt;     &gt; btl_mvapi_ib_timeout to 14 or 16, something I've done already.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I'm hoping that there must be a way out of this problem. I need to
</span><br>
<span class="quotelev2">&gt;     &gt; get my code running as I'm under pressure to produce results for a
</span><br>
<span class="quotelev2">&gt;     &gt; grant that's paying me.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; If you have any feedback I would be hugely grateful.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Sincerely,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Peter Diamessis
</span><br>
<span class="quotelev2">&gt;     &gt; Cornell University
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;   
</span><br>
<span class="quotelev2">&gt;     &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
 
-------------------------------------------------------------
Peter Diamessis
Assistant Professor
Environmental Fluid Mechanics &amp; Hydrology
School of Civil and Environmental Engineering
Cornell University
Ithaca, NY 14853
Phone: (607)-255-1719 --- Fax: (607)-255-9004
pjd38_at_[hidden] &lt;mailto:pjd38_at_[hidden]&gt;
<a href="http://www.cee.cornell.edu/faculty/pjd38">http://www.cee.cornell.edu/faculty/pjd38</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5944.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>Previous message:</strong> <a href="5942.php">Joshua Bernstein: "[OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5944.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>Reply:</strong> <a href="5944.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
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
