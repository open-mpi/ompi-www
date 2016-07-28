<?
$subject_val = "[OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 11:14:45 2009" -->
<!-- isoreceived="20090130161445" -->
<!-- sent="Fri, 30 Jan 2009 19:32:39 +0530" -->
<!-- isosent="20090130140239" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE" -->
<!-- id="cb60cbc40901300602r64d3a107hb374e30dd7e85737_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cb60cbc40901300558h48fc9f8bq9c98cc0cc6ead3fb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 09:02:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7896.php">Sean Davis: "Re: [OMPI users] open-mpi.org website down?"</a>
<li><strong>Previous message:</strong> <a href="7894.php">Jeff Squyres: "Re: [OMPI users] open-mpi.org website down?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7898.php">Reuti: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="7898.php">Reuti: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI,
<br>
<p>Do you have a solution for the following problem of Open MPI (1.3)
<br>
when run through Grid Engine.
<br>
<p>I changed global execd params with H_MEMORYLOCKED=infinity and
<br>
restarted the sgeexecd in all nodes.
<br>
<p>But still the problem persists:
<br>
<p>&nbsp;$cat err.77.CPMD-OMPI
<br>
ssh_exchange_identification: Connection closed by remote host
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 31947) died unexpectedly with status 129 while attempting
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
ssh_exchange_identification: Connection closed by remote host
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-0-19.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-0-20.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-0-21.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-0-22.local - daemon did not report back when launched
<br>
<p>The hostnames for infiniband interfaces are ibc0, ibc1, ibc2 .. ibc23.
<br>
May be Open MPI is not able to identify hosts as it is using node-0-..
<br>
. Is this causing open mpi to fail?
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<p><p>On Mon, Jan 26, 2009 at 5:09 PM, mihlon &lt;vaclam1_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello SGE users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The cluster is installed with Rocks-4.3, SGE 6.0 &amp; Open MPI 1.3.
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI is configured with &quot;--with-sge&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info shows only one component:
</span><br>
<span class="quotelev2">&gt;&gt; # /opt/mpi/openmpi/1.3/intel/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev2">&gt;&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this acceptable?
</span><br>
<span class="quotelev1">&gt; maybe yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; see: <a href="http://www.open-mpi.org/faq/?category=building#build-rte-sge">http://www.open-mpi.org/faq/?category=building#build-rte-sge</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shell$ ompi_info | grep gridengine
</span><br>
<span class="quotelev1">&gt; MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev1">&gt; MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Specific frameworks and version numbers may vary, depending on your
</span><br>
<span class="quotelev1">&gt; version of Open MPI.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Open MPI parallel jobs run successfully through command line, but
</span><br>
<span class="quotelev2">&gt;&gt; fail when run thru SGE(with -pe orte &lt;slots&gt;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The error is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ cat err.26.Helloworld-PRL
</span><br>
<span class="quotelev2">&gt;&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 8462) died unexpectedly with status 129 while attempting
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
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But the same job runs well, if it runs on a single node but with an error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ cat err.23.Helloworld-PRL
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Local host: node-0-4.local
</span><br>
<span class="quotelev2">&gt;&gt; Local device: mthca0
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-4.local:07869] 7 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / error in device init
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-4.local:07869] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev2">&gt;&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The following link explains the same problem:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=72398">http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=72398</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With this reference, I put 'ulimit -l unlimited' into
</span><br>
<span class="quotelev2">&gt;&gt; /etc/init.d/sgeexecd in all nodes. Restarted the services.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do not set 'ulimit -l unlimited' in /etc/init.d/sgeexecd
</span><br>
<span class="quotelev1">&gt; but set it in the SGE:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Run   qconf -mconf   and set    execd_params
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; frontend$&gt; qconf -sconf
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; execd_params                 H_MEMORYLOCKED=infinity
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then restart all your sgeexecd hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Milan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But still the problem persists.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What could be the way out for this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Sangamesh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=99133">http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=99133</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To unsubscribe from this discussion, e-mail:
</span><br>
<span class="quotelev2">&gt;&gt; [users-unsubscribe_at_[hidden]].
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=99461">http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=99461</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To unsubscribe from this discussion, e-mail: [users-unsubscribe_at_[hidden]].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7896.php">Sean Davis: "Re: [OMPI users] open-mpi.org website down?"</a>
<li><strong>Previous message:</strong> <a href="7894.php">Jeff Squyres: "Re: [OMPI users] open-mpi.org website down?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7898.php">Reuti: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="7898.php">Reuti: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
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
