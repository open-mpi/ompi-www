<?
$subject_val = "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 10:51:07 2009" -->
<!-- isoreceived="20090723145107" -->
<!-- sent="Thu, 23 Jul 2009 10:50:46 -0400" -->
<!-- isosent="20090723145046" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3" -->
<!-- id="4A6878C6.2000105_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A68750C.4070301_at_noaa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 10:50:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10065.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10063.php">Durga Choudhury: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10062.php">Craig Tierney: "[OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10066.php">Craig Tierney: "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10066.php">Craig Tierney: "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think what you are looking for is this:
<br>
<p>--mca plm_rsh_disable_qrsh 1
<br>
<p>This means we will disable the use of qrsh and use rsh or ssh instead.
<br>
<p>The --mca pls ^sge does not work anymore for two reasons.  First, the 
<br>
&quot;pls&quot; framework was renamed &quot;plm&quot;.  Secondly, the gridgengine plm was 
<br>
folded into the rsh/ssh one.
<br>
<p>A few more details at
<br>
<a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
<br>
<p>Rolf
<br>
<p>On 07/23/09 10:34, Craig Tierney wrote:
<br>
<span class="quotelev1">&gt; I have built OpenMPI 1.3.3 without support for SGE.
</span><br>
<span class="quotelev1">&gt; I just want to launch jobs with loose integration right
</span><br>
<span class="quotelev1">&gt; now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is how I configured it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure CC=pgcc CXX=pgCC F77=pgf90 F90=pgf90 FC=pgf90 
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/openmpi/1.3.3-pgi --without-sge
</span><br>
<span class="quotelev1">&gt;  --enable-io-romio --with-openib=/opt/hjet/ofed/1.4.1 
</span><br>
<span class="quotelev1">&gt; --with-io-romio-flags=--with-file-system=lustre 
</span><br>
<span class="quotelev1">&gt; --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can start jobs from the commandline just fine.  When
</span><br>
<span class="quotelev1">&gt; I try to do the same thing inside an SGE job, I get
</span><br>
<span class="quotelev1">&gt; errors like the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; error: executing task of job 5041155 failed:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 13324) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am starting mpirun with the following options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $OMPI/bin/mpirun -mca btl openib,sm,self --mca pls ^sge \
</span><br>
<span class="quotelev1">&gt;     -machinefile $MACHINE_FILE -x LD_LIBRARY_PATH -np 16 ./xhpl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The options are to ensure I am using IB, that SGE is not used, and that
</span><br>
<span class="quotelev1">&gt; the LD_LIBRARY_PATH is sent along to ensure dynamic linking is done 
</span><br>
<span class="quotelev1">&gt; correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This worked with 1.2.7 (except setting the pls option as gridengine 
</span><br>
<span class="quotelev1">&gt; instead of sge), but I can't get it to work with 1.3.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I missing something obvious for getting jobs with loose integration
</span><br>
<span class="quotelev1">&gt; started?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Craig
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
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10065.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10063.php">Durga Choudhury: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10062.php">Craig Tierney: "[OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10066.php">Craig Tierney: "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10066.php">Craig Tierney: "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
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
