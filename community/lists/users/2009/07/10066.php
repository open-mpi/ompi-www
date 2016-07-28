<?
$subject_val = "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 12:07:34 2009" -->
<!-- isoreceived="20090723160734" -->
<!-- sent="Thu, 23 Jul 2009 10:07:30 -0600" -->
<!-- isosent="20090723160730" -->
<!-- name="Craig Tierney" -->
<!-- email="Craig.Tierney_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3" -->
<!-- id="4A688AC2.9040206_at_noaa.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A6878C6.2000105_at_Sun.COM" -->
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
<strong>From:</strong> Craig Tierney (<em>Craig.Tierney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 12:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10067.php">Eugene Loh: "Re: [OMPI users] Profiling performance by forcing transport choice."</a>
<li><strong>Previous message:</strong> <a href="10065.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10064.php">Rolf Vandevaart: "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10063.php">Durga Choudhury: "Re: [OMPI users] Network connection check"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf Vandevaart wrote:
<br>
<span class="quotelev1">&gt; I think what you are looking for is this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca plm_rsh_disable_qrsh 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This means we will disable the use of qrsh and use rsh or ssh instead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The --mca pls ^sge does not work anymore for two reasons.  First, the
</span><br>
<span class="quotelev1">&gt; &quot;pls&quot; framework was renamed &quot;plm&quot;.  Secondly, the gridgengine plm was
</span><br>
<span class="quotelev1">&gt; folded into the rsh/ssh one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Rolf,
<br>
<p>Thanks for the quick reply.  That solved the problem.
<br>
<p>Craig
<br>
<p><p><span class="quotelev1">&gt; A few more details at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/23/09 10:34, Craig Tierney wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have built OpenMPI 1.3.3 without support for SGE.
</span><br>
<span class="quotelev2">&gt;&gt; I just want to launch jobs with loose integration right
</span><br>
<span class="quotelev2">&gt;&gt; now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is how I configured it:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC=pgcc CXX=pgCC F77=pgf90 F90=pgf90 FC=pgf90
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/opt/openmpi/1.3.3-pgi --without-sge
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-io-romio --with-openib=/opt/hjet/ofed/1.4.1
</span><br>
<span class="quotelev2">&gt;&gt; --with-io-romio-flags=--with-file-system=lustre
</span><br>
<span class="quotelev2">&gt;&gt; --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can start jobs from the commandline just fine.  When
</span><br>
<span class="quotelev2">&gt;&gt; I try to do the same thing inside an SGE job, I get
</span><br>
<span class="quotelev2">&gt;&gt; errors like the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; error: executing task of job 5041155 failed:
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 13324) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am starting mpirun with the following options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $OMPI/bin/mpirun -mca btl openib,sm,self --mca pls ^sge \
</span><br>
<span class="quotelev2">&gt;&gt;     -machinefile $MACHINE_FILE -x LD_LIBRARY_PATH -np 16 ./xhpl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The options are to ensure I am using IB, that SGE is not used, and that
</span><br>
<span class="quotelev2">&gt;&gt; the LD_LIBRARY_PATH is sent along to ensure dynamic linking is done
</span><br>
<span class="quotelev2">&gt;&gt; correctly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This worked with 1.2.7 (except setting the pls option as gridengine
</span><br>
<span class="quotelev2">&gt;&gt; instead of sge), but I can't get it to work with 1.3.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I missing something obvious for getting jobs with loose integration
</span><br>
<span class="quotelev2">&gt;&gt; started?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Craig
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Craig Tierney (craig.tierney_at_[hidden])
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10067.php">Eugene Loh: "Re: [OMPI users] Profiling performance by forcing transport choice."</a>
<li><strong>Previous message:</strong> <a href="10065.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10064.php">Rolf Vandevaart: "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10063.php">Durga Choudhury: "Re: [OMPI users] Network connection check"</a>
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
