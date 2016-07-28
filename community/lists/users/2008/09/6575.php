<?
$subject_val = "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 10:10:07 2008" -->
<!-- isoreceived="20080917141007" -->
<!-- sent="Wed, 17 Sep 2008 10:09:50 -0400" -->
<!-- isosent="20080917140950" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?" -->
<!-- id="48D10FAE.9070606_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48D10B00.1060500_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?<br>
<strong>From:</strong> Rolf vandeVaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 10:09:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6576.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6574.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6574.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6578.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6578.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Hi Jeff again!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (update) it works with &quot;truly&quot; OpenMPI, but it works *not* with SUN 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cluster Tools 8.0 (which is also an OpenMPI). So, it seems be an SUN 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem and not general problem of openMPI. Sorry for false relating 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah, gotcha.  I guess my Sun colleagues on this list will need to 
</span><br>
<span class="quotelev2">&gt;&gt; address that.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope!
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
<span class="quotelev3">&gt;&gt;&gt; The only trouble we have now are the error messages like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    no hca params found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    help-mpi-btl-openib.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (the job still runs without problems! :o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if running openmpi from new location, and the old location being 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; removed. (if the old location being also persistense there is no 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error, so it seems to be an attempt to access to an file on old path).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doh; that's weird.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe we have to explicitly pass the OPAL_PREFIX environment 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variable to all processes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  I don't need to do this in my 1.2.7 installation.  I do 
</span><br>
<span class="quotelev2">&gt;&gt; something like this (I assume you're using rsh/ssh as a launcher?):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use zsh as login shell, ssh as communication protocol and an 
</span><br>
<span class="quotelev1">&gt; wrapper to mpiexec which produces an command somewhat like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/MPI/openmpi-1.2.7/linux64/intel/bin/mpiexec -x LD_LIBRARY_PATH -x 
</span><br>
<span class="quotelev1">&gt; PATH -x MPI_NAME --hostfile 
</span><br>
<span class="quotelev1">&gt; /tmp/pk224850/26654_at_linuxhtc01/hostfile3564 -n 2 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (hostfiles are generated temporarely by our wrapper due of load 
</span><br>
<span class="quotelev1">&gt; balancing, and /opt/MPI/openmpi-1.2.7/linux64/intel/ is the path to 
</span><br>
<span class="quotelev1">&gt; our local installation of OpenMPI... )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You see that we also explicitly order OpenMPI to export environment 
</span><br>
<span class="quotelev1">&gt; variables PATH and LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we add an &quot; -x OPAL_PREFIX &quot; flag, and through forces explicitly 
</span><br>
<span class="quotelev1">&gt; forwarding of this environment variable, the error was not occured. So 
</span><br>
<span class="quotelev1">&gt; we mean that this variable is needed to be exported across *all* 
</span><br>
<span class="quotelev1">&gt; systhems in cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems, the variable OPAL_PREFIX  will *NOT* be automatically 
</span><br>
<span class="quotelev1">&gt; exported to new processes on the local and remote nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe the FAQ in 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a> should be 
</span><br>
<span class="quotelev1">&gt; extended in this mean?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you (or anyone reading this message) have any contact to SUN 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developers to point to this circumstance? *Why* do them use 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hard-coded paths? :o)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know -- this sounds like an issue with the Sun CT 8 build 
</span><br>
<span class="quotelev2">&gt;&gt; process.  It could also be a by-product of using the combined 32/64 
</span><br>
<span class="quotelev2">&gt;&gt; feature...?  I haven't used that in forever and I don't remember the 
</span><br>
<span class="quotelev2">&gt;&gt; restrictions.  Terry/Rolf -- can you comment?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will write an separate eMail to ct-feedback_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
Hi Paul:
<br>
Yes, there are Sun people on this list!  We originally put those 
<br>
hardcoded paths in to make everything work correctly out of the box and 
<br>
our install process ensured that everything would be at 
<br>
/opt/SUNWhpc/HPC8.0.  However, let us take a look at everything that was 
<br>
just discussed here and see what we can do.  We will get back to you 
<br>
shortly.
<br>
<p>Rolf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6576.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6574.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6574.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6578.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6578.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
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
