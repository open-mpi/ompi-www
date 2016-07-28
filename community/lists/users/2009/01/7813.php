<?
$subject_val = "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 24 11:12:34 2009" -->
<!-- isoreceived="20090124161234" -->
<!-- sent="Sat, 24 Jan 2009 11:12:30 -0500" -->
<!-- isosent="20090124161230" -->
<!-- name="Jeremy Stout" -->
<!-- email="stout.jeremy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE" -->
<!-- id="a6bc6cc0901240812t177fa7deh5fbb917f80a7fcb6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cb60cbc40901240306k66acab99qc1fedcf24f586ed5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE<br>
<strong>From:</strong> Jeremy Stout (<em>stout.jeremy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-24 11:12:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7814.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7812.php">Sangamesh B: "[OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7812.php">Sangamesh B: "[OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7814.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="7814.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="7816.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The RLIMIT error is very common when using OpenMPI + OFED + Sun Grid
<br>
Engine. You can find more information and several remedies here:
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>I usually resolve this problem by adding &quot;ulimit -l unlimited&quot; near
<br>
the top of the SGE startup script on the computation nodes and
<br>
restarting SGE on every node.
<br>
<p>Jeremy Stout
<br>
<p>On Sat, Jan 24, 2009 at 6:06 AM, Sangamesh B &lt;forum.san_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Open MPI 1.3 is installed on Rocks 4.3 Linux cluster with support of
</span><br>
<span class="quotelev1">&gt; SGE i.e using --with-sge.
</span><br>
<span class="quotelev1">&gt; But the ompi_info shows only one component:
</span><br>
<span class="quotelev1">&gt; # /opt/mpi/openmpi/1.3/intel/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev1">&gt;                 MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this right? Because during ompi installation SGE qmaster daemon was
</span><br>
<span class="quotelev1">&gt; not working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now the problem is, the open mpi parallel jobs submitted thru
</span><br>
<span class="quotelev1">&gt; gridengine are failing (when run on multiple nodes) with the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat err.26.Helloworld-PRL
</span><br>
<span class="quotelev1">&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 8462) died unexpectedly with status 129 while attempting
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
<span class="quotelev1">&gt; When the job runs on single node, it runs well with producing the
</span><br>
<span class="quotelev1">&gt; output but with an error:
</span><br>
<span class="quotelev1">&gt; $ cat err.23.Helloworld-PRL
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Local host:   node-0-4.local
</span><br>
<span class="quotelev1">&gt;  Local device: mthca0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt; [node-0-4.local:07869] 7 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / error in device init
</span><br>
<span class="quotelev1">&gt; [node-0-4.local:07869] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev1">&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What may be the problem for this behavior?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7814.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7812.php">Sangamesh B: "[OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7812.php">Sangamesh B: "[OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7814.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="7814.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="7816.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
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
