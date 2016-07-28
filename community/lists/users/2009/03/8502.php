<?
$subject_val = "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 10:05:53 2009" -->
<!-- isoreceived="20090318140553" -->
<!-- sent="Wed, 18 Mar 2009 10:05:43 -0400" -->
<!-- isosent="20090318140543" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem" -->
<!-- id="49C0FFB7.5070805_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C3D55C25-275F-4B6A-8966-B1B34509F824_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-18 10:05:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8503.php">Jeff Squyres: "[OMPI users] Fwd: New MPI-2.1 standard in hardcover - the yellow book"</a>
<li><strong>Previous message:</strong> <a href="8501.php">Rene Salmon: "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem"</a>
<li><strong>In reply to:</strong> <a href="8500.php">Reuti: "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8504.php">Rene Salmon: "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem"</a>
<li><strong>Reply:</strong> <a href="8504.php">Rene Salmon: "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/18/09 09:52, Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 18.03.2009 um 14:25 schrieb Rene Salmon:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the help.  I only use the machine file to run outside of SGE
</span><br>
<span class="quotelev2">&gt;&gt; just to test/prove that things work outside of SGE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; aha. Did you compile Open MPI 1.3 with the SGE option?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I run with in SGE here is what the job script looks like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hpcp7781(salmr0)128:cat simple-job.sh
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/csh
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #$ -S /bin/csh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -S will only work if the queue configuration is set to posix_compliant. 
</span><br>
<span class="quotelev1">&gt; If it's set to unix_behavior, the first line of the script is already 
</span><br>
<span class="quotelev1">&gt; sufficient.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; setenv LD_LIBRARY_PATH /bphpc7/vol0/salmr0/ompi/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe you have to set this LD_LIBRARY_PATH in your .cshrc, so it's known 
</span><br>
<span class="quotelev1">&gt; automatically on the nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca plm_base_verbose 20 --prefix /bphpc7/vol0/salmr0/ompi -np
</span><br>
<span class="quotelev2">&gt;&gt; 16 /bphpc7/vol0/salmr0/SGE/a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you use --mca... only for debugging or why is it added here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are using PEs.  Here is what the PE looks like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hpcp7781(salmr0)129:qconf -sp pavtest
</span><br>
<span class="quotelev2">&gt;&gt; pe_name           pavtest
</span><br>
<span class="quotelev2">&gt;&gt; slots             16
</span><br>
<span class="quotelev2">&gt;&gt; user_lists        NONE
</span><br>
<span class="quotelev2">&gt;&gt; xuser_lists       NONE
</span><br>
<span class="quotelev2">&gt;&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; allocation_rule   8
</span><br>
<span class="quotelev2">&gt;&gt; control_slaves    FALSE
</span><br>
<span class="quotelev2">&gt;&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev2">&gt;&gt; urgency_slots     min
</span><br>
<p>At this FAQ, we show an example of a parallel environment setup.
<br>
<a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
<br>
<p>I am wondering if the control_slaves needs to be TRUE.
<br>
And double check the that the PE (pavtest) is on the list for the queue 
<br>
(also mentioned at the FAQ).  And perhaps start trying to run hostname 
<br>
first.
<br>
<p>Rolf
<br>
<p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is he qsub line to submit the job:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; qsub -pe pavtest 16 simple-job.sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The job seems to run fine with no problems with in SGE if I contain the
</span><br>
<span class="quotelev2">&gt;&gt; job with in one node.  As soon as the job has to use more than one one
</span><br>
<span class="quotelev2">&gt;&gt; things stop working with the message I posted about LD_LIBRARY_PATH and
</span><br>
<span class="quotelev2">&gt;&gt; orted seems not to start on the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Rene
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 2009-03-18 at 07:45 +0000, Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it shouldn't be necessary to supply a machinefile, as the one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generated by SGE is taken automatically (i.e. the granted nodes are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; honored). You submitted the job requesting a PE?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 18.03.2009 um 04:51 schrieb Salmon, Rene:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have looked through the list archives and google but could not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; find anything related to what I am seeing. I am simply trying to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run the basic cpi.c code using SGE and tight integration.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If run outside SGE i can run my jobs just fine:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hpcp7781(salmr0)132:mpiexec -np 2 --machinefile x a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 on hpcp7781
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 1 on hpcp7782
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pi is approximately 3.1416009869231241, Error is 0.0000083333333309
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wall clock time = 0.032325
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I submit to SGE I get this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca: base: components_open: Looking for plm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca: base: components_open: component rsh has no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; register function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca: base: components_open: component rsh open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slurm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca: base: components_open: component slurm has no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; register function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca: base: components_open: component slurm open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] [[INVALID],INVALID] plm:rsh: using /hpc/SGE/bin/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lx24-amd64/qrsh for launching
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca:base:select:(  plm) Query of component [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set priority to 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca:base:select:(  plm) Skipping component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [slurm]. Query failed to return a module
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca: base: close: component slurm closed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Starting server daemon at host &quot;hpcp7782&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error: executing task of job 1702026 failed:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A daemon (pid 8528) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca: base: close: component rsh closed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpcp7781:08527] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Seems to me orted is not starting on the remote node.  I have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH set on my shell startup files.  If I do an ldd on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orted i see this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hpcp7781(salmr0)135:ldd /bphpc7/vol0/salmr0/ompi/bin/orted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         libopen-rte.so.0 =&gt; /bphpc7/vol0/salmr0/ompi/lib/libopen-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rte.so.0 (0x00002ac5b14e2000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         libopen-pal.so.0 =&gt; /bphpc7/vol0/salmr0/ompi/lib/libopen-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pal.so.0 (0x00002ac5b1628000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002ac5b17a9000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002ac5b18ad000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002ac5b19c4000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00002ac5b1ac7000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0x00002ac5b1c1c000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00002ac5b1d34000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         /lib64/ld-linux-x86-64.so.2 (0x00002ac5b13c6000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Looks like gridengine is using qrsh to start orted on the remote
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes. qrsh might not be reading my shell startup file and setting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for any help with this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rene
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="8503.php">Jeff Squyres: "[OMPI users] Fwd: New MPI-2.1 standard in hardcover - the yellow book"</a>
<li><strong>Previous message:</strong> <a href="8501.php">Rene Salmon: "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem"</a>
<li><strong>In reply to:</strong> <a href="8500.php">Reuti: "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8504.php">Rene Salmon: "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem"</a>
<li><strong>Reply:</strong> <a href="8504.php">Rene Salmon: "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem"</a>
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
