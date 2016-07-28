<?
$subject_val = "Re: [OMPI users] A daemon on node cl231 failed to start as expected";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 12:14:40 2014" -->
<!-- isoreceived="20140826161440" -->
<!-- sent="Tue, 26 Aug 2014 13:14:39 -0300" -->
<!-- isosent="20140826161439" -->
<!-- name="Pengcheng Wang" -->
<!-- email="wpc302_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A daemon on node cl231 failed to start as expected" -->
<!-- id="CAPdTcQjGN4q0RiOwzDm_znqnbMvHB1JkWqYruT92SmAH3fEtjQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAPdTcQiOGnV1Pb3-eLKbjSHBtVetFsg3ZeuMVywsPipy2EXmvA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] A daemon on node cl231 failed to start as expected<br>
<strong>From:</strong> Pengcheng Wang (<em>wpc302_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 12:14:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25156.php">Syed Ahsan Ali: "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<li><strong>Previous message:</strong> <a href="25154.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<li><strong>In reply to:</strong> <a href="25141.php">Pengcheng Wang: "[OMPI users] A daemon on node cl231 failed to start as expected"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti,
<br>
<p>Thanks a lot for your help.
<br>
<p>The 'Openmp' PE in our clusters has the allocation rule 'pe_slots'. But I
<br>
guess I can only use limited slots for my job under this PE...
<br>
<p>The command 'qacct -j jobID' gives the information below. It turns out the
<br>
job might exceed its memory allocation. After setting a larger h_vmem (5G),
<br>
it works now.
<br>
<p>*$ qacct -j jobID*
<br>
*...*
<br>
*failed       100 : assumedly after job*
<br>
*exit_status  137*
<br>
*...*
<br>
*maxvmem      4.003G*
<br>
<p>However, in this case, the number of slots my job can use is still limited.
<br>
For example, in one cluster, the job can run for a few seconds with 10
<br>
slots. Then the job state (qstat) becomes 'dr' and it is deleted by the
<br>
shell without any error messages. In another cluster, an error message
<br>
below will appear if I require more than 8 slots.
<br>
<p><p><p><p><p>*[cl093:30366] mca_btl_mx_init: mx_open_endpoint() failed with
<br>
status=20--------------------------------------------------------------------------[0,3,0]:
<br>
Myrinet/MX on host cl093 was unable to find any endpoints. Another
<br>
transport will be used instead, although this may result inlower
<br>
performance.*
<br>
<p>Anyway, it can temporarily work with 8 slots now, especially when these 8
<br>
slots are on the same machine coincidentally, which allows a large virtual
<br>
memory limit. It would be better if it can be run with more slots to save
<br>
computational time.
<br>
<p>Best regards,
<br>
Pengcheng
<br>
<p><p>On Mon, Aug 25, 2014 at 1:00 PM, &lt;users-request_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Re: Running a hybrid MPI+openMP program (Reuti)
</span><br>
<span class="quotelev1">&gt;    2. Re: A daemon on node cl231 failed to start as expected
</span><br>
<span class="quotelev1">&gt;       (Pengcheng) (Pengcheng Wang)
</span><br>
<span class="quotelev1">&gt;    3. Re: A daemon on node cl231 failed to start as expected
</span><br>
<span class="quotelev1">&gt;       (Pengcheng) (Reuti)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 25 Aug 2014 11:51:35 +0200
</span><br>
<span class="quotelev1">&gt; From: Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Running a hybrid MPI+openMP program
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;9EAE85F0-5479-45AF-A8F1-14519216B48C_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 21.08.2014 um 16:50 schrieb Reuti:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am 21.08.2014 um 16:00 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Aug 21, 2014, at 6:54 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Am 21.08.2014 um 15:45 schrieb Ralph Castain:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Aug 21, 2014, at 2:51 AM, Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Am 20.08.2014 um 23:16 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Aug 20, 2014, at 11:16 AM, Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Am 20.08.2014 um 19:05 schrieb Ralph Castain:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Aha, this is quite interesting - how do you do this: scanning
</span><br>
<span class="quotelev1">&gt; the /proc/&lt;pid&gt;/status or alike? What happens if you don't find enough free
</span><br>
<span class="quotelev1">&gt; cores as they are used up by other applications already?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Remember, when you use mpirun to launch, we launch our own
</span><br>
<span class="quotelev1">&gt; daemons using the native launcher (e.g., qsub). So the external RM will
</span><br>
<span class="quotelev1">&gt; bind our daemons to the specified cores on each node. We use hwloc to
</span><br>
<span class="quotelev1">&gt; determine what cores our daemons are bound to, and then bind our own child
</span><br>
<span class="quotelev1">&gt; processes to cores within that range.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thx for reminding me of this. Indeed, I mixed up two different
</span><br>
<span class="quotelev1">&gt; aspects in this discussion.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; a) What will happen in case no binding was done by the RM (hence
</span><br>
<span class="quotelev1">&gt; Open MPI could use all cores) and two Open MPI jobs (or something
</span><br>
<span class="quotelev1">&gt; completely different besides one Open MPI job) are running on the same node
</span><br>
<span class="quotelev1">&gt; (due to the Tight Integration with two different Open MPI directories in
</span><br>
<span class="quotelev1">&gt; /tmp and two `orted`, unique for each job)? Will the second Open MPI job
</span><br>
<span class="quotelev1">&gt; know what the first Open MPI job used up already? Or will both use the same
</span><br>
<span class="quotelev1">&gt; set of cores as &quot;-bind-to none&quot; can't be set in the given `mpiexec` command
</span><br>
<span class="quotelev1">&gt; because of &quot;-map-by slot:pe=$OMP_NUM_THREADS&quot; was used - which triggers
</span><br>
<span class="quotelev1">&gt; &quot;-bind-to core&quot; indispensable and can't be switched off? I see the same
</span><br>
<span class="quotelev1">&gt; cores being used for both jobs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Yeah, each mpirun executes completely independently of the other,
</span><br>
<span class="quotelev1">&gt; so they have no idea what the other is doing. So the cores will be
</span><br>
<span class="quotelev1">&gt; overloaded. Multi-pe's requires bind-to-core otherwise there is no way to
</span><br>
<span class="quotelev1">&gt; implement the request
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Yep, and so it's no option in a mixed cluster. Why would it hurt to
</span><br>
<span class="quotelev1">&gt; allow &quot;-bind-to none&quot; here?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Guess I'm confused here - what does pe=N mean if we bind-to none?? If
</span><br>
<span class="quotelev1">&gt; you are running on a mixed cluster and don't want binding, then just say
</span><br>
<span class="quotelev1">&gt; bind-to none and leave the pe argument out entirely as it wouldn't mean
</span><br>
<span class="quotelev1">&gt; anything unless you are bound
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I would mean: divide the overall number of slots/cores in the
</span><br>
<span class="quotelev1">&gt; machinefile by N (i.e. $OMP_NUM_THREADS).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - Request made to the queuing system: I need 80 cores in total.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - The machinefile will contain 80 cores
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - Open MPI will divide it by N, i.e. 8 here
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - Open MPI will start only 10 processes, one on each node
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - The application will use 8 threads per started MPI process
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I see - so you were talking about the case where the user doesn't
</span><br>
<span class="quotelev1">&gt; provide the -np N option
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes. Even if -np is specified: AFAICS Open MPI fills up the given slots
</span><br>
<span class="quotelev1">&gt; in the machinefile from the beginning (first nodes get all the processes,
</span><br>
<span class="quotelev1">&gt; remaining nodes are free). Making it in a round-robin way would work better
</span><br>
<span class="quotelev1">&gt; for this case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could this be an option which include all cases:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and we need to compute the number of procs to start. Okay, the change
</span><br>
<span class="quotelev1">&gt; you requested below will fix that one too. I can make that easily enough.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Therefore I wanted to start a discussion about it (at that time I wasn't
</span><br>
<span class="quotelev1">&gt; aware of the &quot;-map-by slot:pe=N&quot; option), as I have no final syntax which
</span><br>
<span class="quotelev1">&gt; would cover all cases. Someone may want the binding by the &quot;-map-by
</span><br>
<span class="quotelev1">&gt; slot:pe=N&quot;. How can this be specified, while keeping an easy
</span><br>
<span class="quotelev1">&gt; tight-integration for users who don't want any binding at all.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The boundary conditions are:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - the job is running inside a queuingsystem
</span><br>
<span class="quotelev2">&gt; &gt; - the user requests the overall amount of slots to the queuingsystem
</span><br>
<span class="quotelev2">&gt; &gt; - hence the machinefile has entries for all slots
</span><br>
<span class="quotelev2">&gt; &gt; - the user sets OMP_NUM_THREADS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - $OMP_NUM_THREADS set
</span><br>
<span class="quotelev1">&gt; - -np set on the command line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =&gt; change from fill-up to one per OMP_NUM_THREADS on each machine
</span><br>
<span class="quotelev1">&gt; (including more than one)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using both as a trigger, it wouldn't touch case 2), which I don't want to
</span><br>
<span class="quotelev1">&gt; be removed of course (as dividing all the time if $OMP_NUM_THREADS is used
</span><br>
<span class="quotelev1">&gt; would do)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; case 1) no interest in any binding, other jobs may exist on the nodes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; case 2) user wants binding: i.e. $OMP_NUM_THREADS cores assigned to each
</span><br>
<span class="quotelev1">&gt; MPI process, maybe with &quot;-map-by slot:pe=N&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In both cases only (overall amount of slots) / ($OMP_NUM_THREADS) MPI
</span><br>
<span class="quotelev1">&gt; processes should be started, not (overall amount of slots) processes AFAICS.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Altering the machinefile instead: the processes are not bound to
</span><br>
<span class="quotelev1">&gt; any core, and the OS takes care of a proper assignment.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Here the ordinary user has to mangle the hostfile, this is not good
</span><br>
<span class="quotelev1">&gt; (but allows several jobs per node as the OS shift the processes around).
</span><br>
<span class="quotelev1">&gt; Could/should it be put into the &quot;gridengine&quot; module in OpenMPI, to divide
</span><br>
<span class="quotelev1">&gt; the slot count per node automatically when $OMP_NUM_THREADS is found, or
</span><br>
<span class="quotelev1">&gt; generate an error if it's not divisible?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Sure, that could be done - but it will only have if OMP_NUM_THREADS
</span><br>
<span class="quotelev1">&gt; is set when someone spins off threads. So far as I know, that's only used
</span><br>
<span class="quotelev1">&gt; for OpenMP - so we'd get a little help, but it wouldn't be full coverage.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ===
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If the cores we are bound to are the same on each node, then we
</span><br>
<span class="quotelev1">&gt; will do this with no further instruction. However, if the cores are
</span><br>
<span class="quotelev1">&gt; different on the individual nodes, then you need to add --hetero-nodes to
</span><br>
<span class="quotelev1">&gt; your command line (as the nodes appear to be heterogeneous to us).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; b) Aha, it's not about different type CPU types, but also same CPU
</span><br>
<span class="quotelev1">&gt; type but different allocations between the nodes? It's not in the `mpiexec`
</span><br>
<span class="quotelev1">&gt; man-page of 1.8.1 though. I'll have a look at it.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I tried:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; $ qsub -binding linear:2:0 -pe smp2 8 -masterq parallel_at_node01 -q
</span><br>
<span class="quotelev1">&gt; parallel_at_node0[1-4] test_openmpi.sh
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Your job 247109 (&quot;test_openmpi.sh&quot;) has been submitted
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; $ qsub -binding linear:2:1 -pe smp2 8 -masterq parallel_at_node01 -q
</span><br>
<span class="quotelev1">&gt; parallel_at_node0[1-4] test_openmpi.sh
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Your job 247110 (&quot;test_openmpi.sh&quot;) has been submitted
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Getting on node03:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 6733 ?        Sl     0:00  \_ sge_shepherd-247109 -bg
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 6734 ?        SNs    0:00  |   \_
</span><br>
<span class="quotelev1">&gt; /usr/sge/utilbin/lx24-amd64/qrsh_starter
</span><br>
<span class="quotelev1">&gt; /var/spool/sge/node03/active_jobs/247109.1/1.node03
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 6741 ?        SN     0:00  |       \_ orted -mca orte_hetero_nodes 1
</span><br>
<span class="quotelev1">&gt; -mca ess env -mca orte_ess_jobid 1493303296 -mca orte_ess_vpid
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 6742 ?        RNl    0:31  |           \_ ./mpihello
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 6745 ?        Sl     0:00  \_ sge_shepherd-247110 -bg
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 6746 ?        SNs    0:00      \_
</span><br>
<span class="quotelev1">&gt; /usr/sge/utilbin/lx24-amd64/qrsh_starter
</span><br>
<span class="quotelev1">&gt; /var/spool/sge/node03/active_jobs/247110.1/1.node03
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 6753 ?        SN     0:00          \_ orted -mca orte_hetero_nodes 1
</span><br>
<span class="quotelev1">&gt; -mca ess env -mca orte_ess_jobid 1506607104 -mca orte_ess_vpid
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 6754 ?        RNl    0:25              \_ ./mpihello
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; reuti_at_node03:~&gt; cat /proc/6741/status | grep Cpus_
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Cpus_allowed:
</span><br>
<span class="quotelev1">&gt;  00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000003
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Cpus_allowed_list:        0-1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; reuti_at_node03:~&gt; cat /proc/6753/status | grep Cpus_
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Cpus_allowed:
</span><br>
<span class="quotelev1">&gt;  00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000030
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Cpus_allowed_list:        4-5
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hence, &quot;orted&quot; got two cores assigned for each of them. But:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; reuti_at_node03:~&gt; cat /proc/6742/status | grep Cpus_
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Cpus_allowed:
</span><br>
<span class="quotelev1">&gt;  00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000003
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Cpus_allowed_list:        0-1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; reuti_at_node03:~&gt; cat /proc/6754/status | grep Cpus_
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Cpus_allowed:
</span><br>
<span class="quotelev1">&gt;  00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000003
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Cpus_allowed_list:        0-1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; What I see here (and in `top` + pressing &quot;1&quot;) that only two cores
</span><br>
<span class="quotelev1">&gt; are used, and Open MPI assigns 0-1 to both jobs. The information in
</span><br>
<span class="quotelev1">&gt; &quot;status&quot; is not the one OpenMPI gets from hwloc?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; The man page is probably a little out-of-date in this area - but
</span><br>
<span class="quotelev1">&gt; yes, --hetero-nodes is required for *any* difference in the way the nodes
</span><br>
<span class="quotelev1">&gt; appear to us (cpus, slot assignments, etc.). The 1.9 series may remove that
</span><br>
<span class="quotelev1">&gt; requirement - still looking at it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So it is up to the RM to set the constraint - we just live within
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Fine.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25097.php">http://www.open-mpi.org/community/lists/users/2014/08/25097.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25098.php">http://www.open-mpi.org/community/lists/users/2014/08/25098.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25106.php">http://www.open-mpi.org/community/lists/users/2014/08/25106.php</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25111.php">http://www.open-mpi.org/community/lists/users/2014/08/25111.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25112.php">http://www.open-mpi.org/community/lists/users/2014/08/25112.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25113.php">http://www.open-mpi.org/community/lists/users/2014/08/25113.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25114.php">http://www.open-mpi.org/community/lists/users/2014/08/25114.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Mon, 25 Aug 2014 08:23:47 -0300
</span><br>
<span class="quotelev1">&gt; From: Pengcheng Wang &lt;wpc302_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] A daemon on node cl231 failed to start as
</span><br>
<span class="quotelev1">&gt;         expected        (Pengcheng)
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;CAPdTcQhcsLhRoeowmC9RwhYGB2--JL0Zo2Ccj=
</span><br>
<span class="quotelev1">&gt; haD1S8L9LFGw_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Reuti,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A simple hello_world program works without the h_vmem limit. Honestly, I am
</span><br>
<span class="quotelev1">&gt; not familiar with Open MPI. The command qconf -spl and qconf -sp ompi give
</span><br>
<span class="quotelev1">&gt; the information below. But strangely, it begins to work after I insert
</span><br>
<span class="quotelev1">&gt; *unset
</span><br>
<span class="quotelev1">&gt; SGE_ROOT* in my job script. I don't know why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it still cannot work smoothly through 60hrs I setup. After running
</span><br>
<span class="quotelev1">&gt; for about two hours, it stops without any error messages. Is this related
</span><br>
<span class="quotelev1">&gt; to the h_vemem limit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *$ qconf -spl*
</span><br>
<span class="quotelev1">&gt; 16per
</span><br>
<span class="quotelev1">&gt; 1per
</span><br>
<span class="quotelev1">&gt; 2per
</span><br>
<span class="quotelev1">&gt; 4per
</span><br>
<span class="quotelev1">&gt; hadoop
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; ompi
</span><br>
<span class="quotelev1">&gt; openmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *$ qconf -sp ompi*
</span><br>
<span class="quotelev1">&gt; pe_name           ompi
</span><br>
<span class="quotelev1">&gt; slots             9999
</span><br>
<span class="quotelev1">&gt; user_lists        NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists       NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule   $fill_up
</span><br>
<span class="quotelev1">&gt; control_slaves    TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots     min
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SGE version: 6.1u6
</span><br>
<span class="quotelev1">&gt; Open MPI version: 1.2.9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Job script updated:*
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -N couple
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -j y
</span><br>
<span class="quotelev1">&gt; #$ -R y
</span><br>
<span class="quotelev1">&gt; #$ -l h_rt=62:00:00
</span><br>
<span class="quotelev1">&gt; #$ -l h_vmem=2G
</span><br>
<span class="quotelev1">&gt; #$ -o couple.out
</span><br>
<span class="quotelev1">&gt; #$ -e couple.err
</span><br>
<span class="quotelev1">&gt; #$ -pe ompi* 8
</span><br>
<span class="quotelev1">&gt; *unset SGE_ROOT*
</span><br>
<span class="quotelev1">&gt;    ./app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Pengcheng
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 24, 2014 at 1:00 PM, &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt; &gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt; &gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt; &gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt; &gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt; &gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    1. Re: A daemon on node cl231 failed to start as expected (Reuti)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 1
</span><br>
<span class="quotelev2">&gt; &gt; Date: Sat, 23 Aug 2014 18:49:38 +0200
</span><br>
<span class="quotelev2">&gt; &gt; From: Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] A daemon on node cl231 failed to start as
</span><br>
<span class="quotelev2">&gt; &gt;         expected
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID:
</span><br>
<span class="quotelev2">&gt; &gt;         &lt;8F21A4D9-9E8D-4E20-9AE6-04A495A33DC9_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=windows-1252
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am 23.08.2014 um 16:09 schrieb Pengcheng Wang:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I need to run a single driver program that only require one proc with
</span><br>
<span class="quotelev2">&gt; &gt; the command mpirun -np 1 ./app or ./app. But it will schedule the launch
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev2">&gt; &gt; other executable files including parallel and sequential computing. So I
</span><br>
<span class="quotelev2">&gt; &gt; require more than one proc to run it. It can be run smoothly as an
</span><br>
<span class="quotelev2">&gt; &gt; interactive job with the command below.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; qrsh -cwd -pe &quot;ompi*&quot; 6 -l h_rt=00:30:00,test=true ./app
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But after I submitted the job, a strange error occurred and it
</span><br>
<span class="quotelev2">&gt; &gt; stopped... Please find the job script and error message below:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ? job submission script:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -S /bin/bash
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -N couple
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -j y
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -l h_rt=05:00:00
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -l h_vmem=2G
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is a simple hello_world program listing the threads working? Does it work
</span><br>
<span class="quotelev2">&gt; &gt; without the h_vmem limit?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -o couple.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -pe ompi*  6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Which PEs can be addressed here? What are their allocation rules (looks
</span><br>
<span class="quotelev2">&gt; &gt; like you need &quot;$pe_slots&quot;).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What version of SGE?
</span><br>
<span class="quotelev2">&gt; &gt; What version of Open MPI?
</span><br>
<span class="quotelev2">&gt; &gt; Compiled with --with-sge?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For me it's working in either way.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     ./app
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error message:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error: executing task of job 6777095 failed:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [cl231:23777] ERROR: A daemon on node cl231 failed to start as
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [cl231:23777] ERROR: There may be more information available from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [cl231:23777] ERROR: the 'qstat -t' command on the Grid Engine tasks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [cl231:23777] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [cl231:23777] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [cl231:23777] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks for any help!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Pengcheng
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25141.php">http://www.open-mpi.org/community/lists/users/2014/08/25141.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Digest Footer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; End of users Digest, Vol 2966, Issue 1
</span><br>
<span class="quotelev2">&gt; &gt; **************************************
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Mon, 25 Aug 2014 14:16:35 +0200
</span><br>
<span class="quotelev1">&gt; From: Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] A daemon on node cl231 failed to start as
</span><br>
<span class="quotelev1">&gt;         expected        (Pengcheng)
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;E4E52447-76DB-4564-B20A-CB42EEB349E7_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 25.08.2014 um 13:23 schrieb Pengcheng Wang:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Reuti,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A simple hello_world program works without the h_vmem limit. Honestly, I
</span><br>
<span class="quotelev1">&gt; am not familiar with Open MPI. The command qconf -spl and qconf -sp ompi
</span><br>
<span class="quotelev1">&gt; give the information below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thx.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; But strangely, it begins to work after I insert unset SGE_ROOT in my job
</span><br>
<span class="quotelev1">&gt; script. I don't know why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unsetting this variable will make Open MPI unaware that it runs under SGE.
</span><br>
<span class="quotelev1">&gt; Hence it will use `ssh` to reach other machines. These `ssh` calls will
</span><br>
<span class="quotelev1">&gt; have no memory or time limit set then.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you run a singleton this shouldn't matter though. But: when you want to
</span><br>
<span class="quotelev1">&gt; start additional threads (according to your &quot;#$ -pe ompi*  6&quot;) you should
</span><br>
<span class="quotelev1">&gt; use a PE with allocation rule &quot;$pe_slots&quot; so that all slots which SGE
</span><br>
<span class="quotelev1">&gt; grants to your task are on one and the same machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SGE will multiply the limit with the number of slots, but only with the
</span><br>
<span class="quotelev1">&gt; count granted on the master node of the parallel job (resp. for each
</span><br>
<span class="quotelev1">&gt; slave). How the other treads or tasks started is something you might look
</span><br>
<span class="quotelev1">&gt; at.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, it still cannot work smoothly through 60hrs I setup. After
</span><br>
<span class="quotelev1">&gt; running for about two hours, it stops without any error messages. Is this
</span><br>
<span class="quotelev1">&gt; related to the h_vemem limit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can have a look in $SGE_ROOT/spool/&lt;exechost&gt;/messages (resp. your
</span><br>
<span class="quotelev1">&gt; actual location of the spool directories) whether any limit was passed and
</span><br>
<span class="quotelev1">&gt; triggered an abortion of the job (for all granted machines for this job).
</span><br>
<span class="quotelev1">&gt; Also `qacct -j &lt;job_id&gt;` might give some hint whether the was an exitcode
</span><br>
<span class="quotelev1">&gt; of 137 due to a kill -9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ qconf -spl
</span><br>
<span class="quotelev2">&gt; &gt; 16per
</span><br>
<span class="quotelev2">&gt; &gt; 1per
</span><br>
<span class="quotelev2">&gt; &gt; 2per
</span><br>
<span class="quotelev2">&gt; &gt; 4per
</span><br>
<span class="quotelev2">&gt; &gt; hadoop
</span><br>
<span class="quotelev2">&gt; &gt; make
</span><br>
<span class="quotelev2">&gt; &gt; ompi
</span><br>
<span class="quotelev2">&gt; &gt; openmp
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ qconf -sp ompi
</span><br>
<span class="quotelev2">&gt; &gt; pe_name           ompi
</span><br>
<span class="quotelev2">&gt; &gt; slots             9999
</span><br>
<span class="quotelev2">&gt; &gt; user_lists        NONE
</span><br>
<span class="quotelev2">&gt; &gt; xuser_lists       NONE
</span><br>
<span class="quotelev2">&gt; &gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev2">&gt; &gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt; &gt; allocation_rule   $fill_up
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will allow to collect the slots from several machines, not
</span><br>
<span class="quotelev1">&gt; necessarily all will be on one and the same machine where the jobscript
</span><br>
<span class="quotelev1">&gt; runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; control_slaves    TRUE
</span><br>
<span class="quotelev2">&gt; &gt; job_is_first_task FALSE
</span><br>
<span class="quotelev2">&gt; &gt; urgency_slots     min
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SGE version: 6.1u6
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI version: 1.2.9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both are really old versions. I fear I can't help much here as many things
</span><br>
<span class="quotelev1">&gt; changed compared to the actual version 1.8.1 of Open MPI, while also SGE's
</span><br>
<span class="quotelev1">&gt; latest version is 6.2u5 with SoGE being now at 8.1.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Job script updated:
</span><br>
<span class="quotelev2">&gt; &gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt; &gt; #$ -N couple
</span><br>
<span class="quotelev2">&gt; &gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt; &gt; #$ -j y
</span><br>
<span class="quotelev2">&gt; &gt; #$ -R y
</span><br>
<span class="quotelev2">&gt; &gt; #$ -l h_rt=62:00:00
</span><br>
<span class="quotelev2">&gt; &gt; #$ -l h_vmem=2G
</span><br>
<span class="quotelev2">&gt; &gt; #$ -o couple.out
</span><br>
<span class="quotelev2">&gt; &gt; #$ -e couple.err
</span><br>
<span class="quotelev2">&gt; &gt; #$ -pe ompi* 8
</span><br>
<span class="quotelev2">&gt; &gt; unset SGE_ROOT
</span><br>
<span class="quotelev2">&gt; &gt;    ./app
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Pengcheng
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sun, Aug 24, 2014 at 1:00 PM, &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt; &gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt; &gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt; &gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt; &gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt; &gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    1. Re: A daemon on node cl231 failed to start as expected (Reuti)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 1
</span><br>
<span class="quotelev2">&gt; &gt; Date: Sat, 23 Aug 2014 18:49:38 +0200
</span><br>
<span class="quotelev2">&gt; &gt; From: Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] A daemon on node cl231 failed to start as
</span><br>
<span class="quotelev2">&gt; &gt;         expected
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID:
</span><br>
<span class="quotelev2">&gt; &gt;         &lt;8F21A4D9-9E8D-4E20-9AE6-04A495A33DC9_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=windows-1252
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am 23.08.2014 um 16:09 schrieb Pengcheng Wang:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I need to run a single driver program that only require one proc with
</span><br>
<span class="quotelev1">&gt; the command mpirun -np 1 ./app or ./app. But it will schedule the launch of
</span><br>
<span class="quotelev1">&gt; other executable files including parallel and sequential computing. So I
</span><br>
<span class="quotelev1">&gt; require more than one proc to run it. It can be run smoothly as an
</span><br>
<span class="quotelev1">&gt; interactive job with the command below.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; qrsh -cwd -pe &quot;ompi*&quot; 6 -l h_rt=00:30:00,test=true ./app
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But after I submitted the job, a strange error occurred and it
</span><br>
<span class="quotelev1">&gt; stopped... Please find the job script and error message below:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ? job submission script:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -S /bin/bash
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -N couple
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -j y
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -l h_rt=05:00:00
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -l h_vmem=2G
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is a simple hello_world program listing the threads working? Does it
</span><br>
<span class="quotelev1">&gt; work without the h_vmem limit?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -o couple.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #$ -pe ompi*  6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Which PEs can be addressed here? What are their allocation rules (looks
</span><br>
<span class="quotelev1">&gt; like you need &quot;$pe_slots&quot;).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What version of SGE?
</span><br>
<span class="quotelev2">&gt; &gt; What version of Open MPI?
</span><br>
<span class="quotelev2">&gt; &gt; Compiled with --with-sge?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For me it's working in either way.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     ./app
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error message:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error: executing task of job 6777095 failed:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [cl231:23777] ERROR: A daemon on node cl231 failed to start as
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [cl231:23777] ERROR: There may be more information available from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [cl231:23777] ERROR: the 'qstat -t' command on the Grid Engine tasks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [cl231:23777] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [cl231:23777] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [cl231:23777] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks for any help!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Pengcheng
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25141.php">http://www.open-mpi.org/community/lists/users/2014/08/25141.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Digest Footer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; End of users Digest, Vol 2966, Issue 1
</span><br>
<span class="quotelev2">&gt; &gt; **************************************
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25144.php">http://www.open-mpi.org/community/lists/users/2014/08/25144.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Digest Footer
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 2967, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25156.php">Syed Ahsan Ali: "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<li><strong>Previous message:</strong> <a href="25154.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<li><strong>In reply to:</strong> <a href="25141.php">Pengcheng Wang: "[OMPI users] A daemon on node cl231 failed to start as expected"</a>
<!-- nextthread="start" -->
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
