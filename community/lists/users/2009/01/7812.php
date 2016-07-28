<?
$subject_val = "[OMPI users] Ompi runs thru cmd line but fails when run thru SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 24 06:06:06 2009" -->
<!-- isoreceived="20090124110606" -->
<!-- sent="Sat, 24 Jan 2009 16:36:01 +0530" -->
<!-- isosent="20090124110601" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] Ompi runs thru cmd line but fails when run thru SGE" -->
<!-- id="cb60cbc40901240306k66acab99qc1fedcf24f586ed5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Ompi runs thru cmd line but fails when run thru SGE<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-24 06:06:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7813.php">Jeremy Stout: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7811.php">Alain Miniussi: "[OMPI users] compile crash with pathscale and openmpi-1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7813.php">Jeremy Stout: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="7813.php">Jeremy Stout: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>&nbsp;&nbsp;Open MPI 1.3 is installed on Rocks 4.3 Linux cluster with support of
<br>
SGE i.e using --with-sge.
<br>
But the ompi_info shows only one component:
<br>
# /opt/mpi/openmpi/1.3/intel/bin/ompi_info | grep gridengine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.3)
<br>
<p>Is this right? Because during ompi installation SGE qmaster daemon was
<br>
not working.
<br>
<p>Now the problem is, the open mpi parallel jobs submitted thru
<br>
gridengine are failing (when run on multiple nodes) with the error:
<br>
<p>$ cat err.26.Helloworld-PRL
<br>
ssh_exchange_identification: Connection closed by remote host
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 8462) died unexpectedly with status 129 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>When the job runs on single node, it runs well with producing the
<br>
output but with an error:
<br>
$ cat err.23.Helloworld-PRL
<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This will severely limit memory registrations.
<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This will severely limit memory registrations.
<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This will severely limit memory registrations.
<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This will severely limit memory registrations.
<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This will severely limit memory registrations.
<br>
--------------------------------------------------------------------------
<br>
WARNING: There was an error initializing an OpenFabrics device.
<br>
<p>&nbsp;&nbsp;Local host:   node-0-4.local
<br>
&nbsp;&nbsp;Local device: mthca0
<br>
--------------------------------------------------------------------------
<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This will severely limit memory registrations.
<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This will severely limit memory registrations.
<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This will severely limit memory registrations.
<br>
[node-0-4.local:07869] 7 more processes have sent help message
<br>
help-mpi-btl-openib.txt / error in device init
<br>
[node-0-4.local:07869] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
<br>
0 to see all help / error messages
<br>
<p>What may be the problem for this behavior?
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7813.php">Jeremy Stout: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7811.php">Alain Miniussi: "[OMPI users] compile crash with pathscale and openmpi-1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7813.php">Jeremy Stout: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="7813.php">Jeremy Stout: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
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
