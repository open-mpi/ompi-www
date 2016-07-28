<?
$subject_val = "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 24 15:51:29 2009" -->
<!-- isoreceived="20090124205129" -->
<!-- sent="Sat, 24 Jan 2009 21:51:13 +0100" -->
<!-- isosent="20090124205113" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE" -->
<!-- id="FB8A7D20-E4CC-496E-B02B-7B10CF70CFB1_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40901241023n104aeae2pbd2662852ab9ee43_at_mail.gmail.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-24 15:51:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7816.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7814.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7814.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7816.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 24.01.2009 um 19:23 schrieb Sangamesh B:
<br>
<p><span class="quotelev1">&gt; Thanks for your suggestion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my case that is also not working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works when the job runs on a single node, without any errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when it runs on multiple nodes, it gives:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<p>Can you also ssh between the nodes? Seems you are using ssh for Open  
<br>
MPI and adjusted SGE to do the same for its qrsh wrapper. Difference  
<br>
between running mpirun standalone and in an SGE job is, that a simple  
<br>
mpirun on the headnode will make the connections directly to the  
<br>
nodes, but inside SGE the mpirun will occur on one of the nodes and  
<br>
makes the connections to other nodes. Is this also possible? Do you  
<br>
need ssh for sure?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
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
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What may be the way out for this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jan 24, 2009 at 9:42 PM, Jeremy Stout  
</span><br>
<span class="quotelev1">&gt; &lt;stout.jeremy_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The RLIMIT error is very common when using OpenMPI + OFED + Sun Grid
</span><br>
<span class="quotelev2">&gt;&gt; Engine. You can find more information and several remedies here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I usually resolve this problem by adding &quot;ulimit -l unlimited&quot; near
</span><br>
<span class="quotelev2">&gt;&gt; the top of the SGE startup script on the computation nodes and
</span><br>
<span class="quotelev2">&gt;&gt; restarting SGE on every node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeremy Stout
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Jan 24, 2009 at 6:06 AM, Sangamesh B &lt;forum.san_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Open MPI 1.3 is installed on Rocks 4.3 Linux cluster with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SGE i.e using --with-sge.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But the ompi_info shows only one component:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # /opt/mpi/openmpi/1.3/intel/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA ras: gridengine (MCA v2.0, API v2.0,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component v1.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this right? Because during ompi installation SGE qmaster  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not working.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now the problem is, the open mpi parallel jobs submitted thru
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gridengine are failing (when run on multiple nodes) with the error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cat err.26.Helloworld-PRL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid 8462) died unexpectedly with status 129 while  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There may be more information reported by the environment (see  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When the job runs on single node, it runs well with producing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output but with an error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cat err.23.Helloworld-PRL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Local host:   node-0-4.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Local device: mthca0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node-0-4.local:07869] 7 more processes have sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help-mpi-btl-openib.txt / error in device init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node-0-4.local:07869] Set MCA parameter  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What may be the problem for this behavior?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sangamesh
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="7816.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7814.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7814.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7816.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
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
