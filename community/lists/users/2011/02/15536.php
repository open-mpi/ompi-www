<?
$subject_val = "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 10:59:59 2011" -->
<!-- isoreceived="20110209155959" -->
<!-- sent="Wed, 9 Feb 2011 08:59:54 -0700" -->
<!-- isosent="20110209155954" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with SLURM and non-local nodes" -->
<!-- id="444F0951-9F22-48ED-87DB-A65463BCA51F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="36A00CD8-D558-499C-BE01-B99B53F6B92D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault with SLURM and non-local nodes<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 10:59:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15537.php">Sindhi, Waris             PW: "[OMPI users] Mpirun --app option not working"</a>
<li><strong>Previous message:</strong> <a href="15535.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>In reply to:</strong> <a href="15533.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 8, 2011, at 8:21 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I would personally suggest not reconfiguring your system simply to  
</span><br>
<span class="quotelev1">&gt; support a particular version of OMPI. The only difference between  
</span><br>
<span class="quotelev1">&gt; the 1.4 and 1.5 series wrt slurm is that we changed a few things to  
</span><br>
<span class="quotelev1">&gt; support a more recent version of slurm. It is relatively easy to  
</span><br>
<span class="quotelev1">&gt; backport that code to the 1.4 series, and it should be (mostly)  
</span><br>
<span class="quotelev1">&gt; backward compatible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI is agnostic wrt resource managers. We try to support all  
</span><br>
<span class="quotelev1">&gt; platforms, with our effort reflective of the needs of our developers  
</span><br>
<span class="quotelev1">&gt; and their organizations, and our perception of the relative size of  
</span><br>
<span class="quotelev1">&gt; the user community for a particular platform. Slurm is a fairly  
</span><br>
<span class="quotelev1">&gt; small community, mostly centered in the three DOE weapons labs, so  
</span><br>
<span class="quotelev1">&gt; our support for that platform tends to focus on their usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, with that understanding...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam: can you confirm that 1.5.1 works on your TLCC machines?
</span><br>
<p>Open MPI 1.5.1 works as expected on our TLCC machines.  Open MPI 1.4.3  
<br>
with your SLURM update also tested.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have created a ticket to upgrade the 1.4.4 release (due out any  
</span><br>
<span class="quotelev1">&gt; time now) with the 1.5.1 slurm support. Any interested parties can  
</span><br>
<span class="quotelev1">&gt; follow it here:
</span><br>
<p>Thanks Ralph!
<br>
<p>Sam
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2717">https://svn.open-mpi.org/trac/ompi/ticket/2717</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 8, 2011, at 6:23 PM, Michael Curtis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 09/02/2011, at 9:16 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See below
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 8, 2011, at 2:44 PM, Michael Curtis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 09/02/2011, at 2:17 AM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Michael,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You may have tried to send some debug information to the list,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but it appears to have been blocked.  Compressed text output of  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the backtrace text is sufficient.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Odd, I thought I sent it to you directly.  In any case, here is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the backtrace and some information from gdb:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ salloc -n16 gdb -args mpirun mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Starting program: /mnt/f1/michael/openmpi/bin/mpirun /mnt/f1/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; michael/home/ServerAdmin/mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x00007ffff7b76869 in process_orted_launch_report (fd=-1,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_event=1, data=0x681170) at base/plm_base_launch_support.c:342
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 342	    pdatorted[mev-&gt;sender.vpid]-&gt;state =  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00007ffff7b76869 in process_orted_launch_report (fd=-1,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_event=1, data=0x681170) at base/plm_base_launch_support.c:342
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x00007ffff78a7338 in event_process_active (base=0x615240) at  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; event.c:651
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00007ffff78a797e in opal_event_base_loop (base=0x615240,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; flags=1) at event.c:823
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x00007ffff78a756f in opal_event_loop (flags=1) at event.c:730
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x00007ffff789b916 in opal_progress () at runtime/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_progress.c:189
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x00007ffff7b76e20 in orte_plm_base_daemon_callback  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (num_daemons=2) at base/plm_base_launch_support.c:459
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x00007ffff7b7bed7 in plm_slurm_launch_job (jdata=0x610560)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at plm_slurm_module.c:360
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #7  0x0000000000403f46 in orterun (argc=2, argv=0x7fffffffe7d8)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at orterun.c:754
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #8  0x0000000000402fb4 in main (argc=2, argv=0x7fffffffe7d8) at  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; main.c:13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) print pdatorted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $1 = (orte_proc_t **) 0x67c610
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) print mev
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $2 = (orte_message_event_t *) 0x681550
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) print mev-&gt;sender.vpid
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $3 = 4294967295
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) print mev-&gt;sender
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $4 = {jobid = 1721696256, vpid = 4294967295}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) print *mev
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $5 = {super = {obj_magic_id = 16046253926196952813, obj_class =  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x7ffff7dd4f40, obj_reference_count = 1, cls_init_file_name =  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x7ffff7bb9a78 &quot;base/plm_base_launch_support.c&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cls_init_lineno = 423}, ev = 0x680850, sender = {jobid =  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1721696256, vpid = 4294967295}, buffer = 0x6811b0, tag = 10, file  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 0x680640 &quot;rml_oob_component.c&quot;, line = 279}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The jobid and vpid look like the defined INVALID values,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indicating that something is quite wrong. This would quite likely  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lead to the segfault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From this, it would indeed appear that you are getting some kind  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of library confusion - the most likely cause of such an error is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a daemon from a different version trying to respond, and so the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; returned message isn't correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure why else it would be happening...you could try setting - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca plm_base_verbose 5 to get more debug output displayed on your  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; screen, assuming you built OMPI with --enable-debug.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Found the problem.... It is a site configuration issue, which I'll  
</span><br>
<span class="quotelev2">&gt;&gt; need to find a workaround for.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bio-ipc.{FQDN}:27523] mca:base:select:(  plm) Query of component  
</span><br>
<span class="quotelev2">&gt;&gt; [slurm] set priority to 75
</span><br>
<span class="quotelev2">&gt;&gt; [bio-ipc.{FQDN}:27523] mca:base:select:(  plm) Selected component  
</span><br>
<span class="quotelev2">&gt;&gt; [slurm]
</span><br>
<span class="quotelev2">&gt;&gt; [bio-ipc.{FQDN}:27523] mca: base: close: component rsh closed
</span><br>
<span class="quotelev2">&gt;&gt; [bio-ipc.{FQDN}:27523] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev2">&gt;&gt; [bio-ipc.{FQDN}:27523] plm:base:set_hnp_name: initial bias 27523  
</span><br>
<span class="quotelev2">&gt;&gt; nodename hash 1936089714
</span><br>
<span class="quotelev2">&gt;&gt; [bio-ipc.{FQDN}:27523] plm:base:set_hnp_name: final jobfam 31383
</span><br>
<span class="quotelev2">&gt;&gt; [bio-ipc.{FQDN}:27523] [[31383,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt; [bio-ipc.{FQDN}:27523] [[31383,0],0] plm:slurm: launching job  
</span><br>
<span class="quotelev2">&gt;&gt; [31383,1]
</span><br>
<span class="quotelev2">&gt;&gt; [bio-ipc.{FQDN}:27523] [[31383,0],0] plm:base:setup_job for job  
</span><br>
<span class="quotelev2">&gt;&gt; [31383,1]
</span><br>
<span class="quotelev2">&gt;&gt; [bio-ipc.{FQDN}:27523] [[31383,0],0] plm:slurm: launching on nodes  
</span><br>
<span class="quotelev2">&gt;&gt; ipc3
</span><br>
<span class="quotelev2">&gt;&gt; [bio-ipc.{FQDN}:27523] [[31383,0],0] plm:slurm: final top-level argv:
</span><br>
<span class="quotelev2">&gt;&gt; 	srun --nodes=1 --ntasks=1 --kill-on-bad-exit --nodelist=ipc3 orted  
</span><br>
<span class="quotelev2">&gt;&gt; -mca ess slurm -mca orte_ess_jobid 2056716288 -mca orte_ess_vpid 1 - 
</span><br>
<span class="quotelev2">&gt;&gt; mca orte_ess_num_procs 2 --hnp-uri &quot;2056716288.0;tcp://lanip: 
</span><br>
<span class="quotelev2">&gt;&gt; 37493;tcp://globalip:37493;tcp://lanip2:37493&quot; -mca  
</span><br>
<span class="quotelev2">&gt;&gt; plm_base_verbose 20
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I then inserted some printf's into the ess_slurm_module (rough and  
</span><br>
<span class="quotelev2">&gt;&gt; ready, I know, but I was in a hurry).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just after initialisation: (at around line 345)
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_slurm: jobid 2056716288 vpid 1
</span><br>
<span class="quotelev2">&gt;&gt; So it gets that...
</span><br>
<span class="quotelev2">&gt;&gt; I narrowed it down to the get_slurm_nodename  function, as the  
</span><br>
<span class="quotelev2">&gt;&gt; method didn't proceed past that point....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; line 401:
</span><br>
<span class="quotelev2">&gt;&gt;    tmp = strdup(orte_process_info.nodename);
</span><br>
<span class="quotelev2">&gt;&gt;    printf( &quot;Our node name == %s\n&quot;, tmp );
</span><br>
<span class="quotelev2">&gt;&gt; line 409:
</span><br>
<span class="quotelev2">&gt;&gt;    for (i=0; NULL !=  names[i]; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;      printf( &quot;Checking %s\n&quot;, names[ i ]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Result:
</span><br>
<span class="quotelev2">&gt;&gt; Our node name == eng-ipc3.{FQDN}
</span><br>
<span class="quotelev2">&gt;&gt; Checking ipc3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So it's down to the mismatch of the slurm name and the hostname.   
</span><br>
<span class="quotelev2">&gt;&gt; slurm really encourages you not to use the fully qualified  
</span><br>
<span class="quotelev2">&gt;&gt; hostname, and I'd prefer not to have to reconfigure the whole  
</span><br>
<span class="quotelev2">&gt;&gt; system to use the shortname as hostnames.  However, I note that  
</span><br>
<span class="quotelev2">&gt;&gt; 1.5.1 worked and backported some of the code -- it uses  
</span><br>
<span class="quotelev2">&gt;&gt; getenv( &quot;SLURM_NODE_ID&quot; ) to get that node number, which doesn't  
</span><br>
<span class="quotelev2">&gt;&gt; rely on an exact string match.  Patching this makes things kind of  
</span><br>
<span class="quotelev2">&gt;&gt; work, but failures still occur during wire-up for more than one node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think the solution will have to be to change the hostnames on the  
</span><br>
<span class="quotelev2">&gt;&gt; system to match what is needed by slurm+openmpi.  (doing this  
</span><br>
<span class="quotelev2">&gt;&gt; temporarily makes everything work with an unpatched 1.4.3 and the  
</span><br>
<span class="quotelev2">&gt;&gt; wireup completes successfully).  Perhaps a note about system  
</span><br>
<span class="quotelev2">&gt;&gt; hostnames needs to be made somewhere in the OpenMPI / SLURM  
</span><br>
<span class="quotelev2">&gt;&gt; documentation?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you Ralph &amp; Sam for your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15536/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15537.php">Sindhi, Waris             PW: "[OMPI users] Mpirun --app option not working"</a>
<li><strong>Previous message:</strong> <a href="15535.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>In reply to:</strong> <a href="15533.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
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
