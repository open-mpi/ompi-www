<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 11:41:34 2012" -->
<!-- isoreceived="20120315154134" -->
<!-- sent="Thu, 15 Mar 2012 16:41:20 +0100" -->
<!-- isosent="20120315154120" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="CFDFF8FC-6A54-494F-B2F7-F831077599BD_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3C63173F-510D-4F25-8EC7-4102B54307DE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 11:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18784.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18782.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18782.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18785.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18785.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 15.03.2012 um 15:50 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 15, 2012, at 8:46 AM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 15.03.2012 um 15:37 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just to be clear: I take it that the first entry is the host name, and the second is the number of slots allocated on that host?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is correct.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: I see the problem. Our parser was apparently written assuming every line was a unique host, so it doesn't even check to see if there is duplication. Easy fix - can shoot it to you today.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But even with the fix the nice value will be the same for all processes forked there. Either all have the nice value of his low priority queue or the high priority queue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed - nothing I can do about that, though. We only do the one qrsh call, so the daemons are going to fall into a single queue, and so will all their children. In this scenario, it isn't clear to me (from this discussion) that I can control which queue gets used
</span><br>
<p>Correct.
<br>
<p><p><span class="quotelev1">&gt; - can I?
</span><br>
<p>No. As posted I created an issue for it. But if it would work, then you would get already different $TMPDIRs for each queue.
<br>
<p><p><span class="quotelev1">&gt; Should I?
</span><br>
<p>I can't speak for the community. Personally I would say: don't distribute parallel jobs among different queues at all, as some applications will use some internal communication about the environment variables of the master process to distribute them to the slaves (even if SGE's `qrsh -inherit ...` is called without -V, and even if Open MPI is not told to forward and specific environment variable). If you have a custom application it can work of course, but with closed source ones you can only test and get the experience whether it's working or not.
<br>
<p>Not to mention the timing issue of differently niced processes. Adjusting the SGE setup of the OP would be the smarter way IMO.
<br>
<p>If it's fixed in Open MPI to add up all the granted slots on one machine, some users may think it's an Open MPI error to attach all to one queue only, as they expect different queues to be used. So this &quot;workaround&quot; should be noted somewhere: &gt;&gt;As it's not possible the reach a specific queue on a slave machine by SGE's tight integration commands (`qrsh -inherit ...`), as a workaround the number of slots across different queues are added up inside the $PE_HOSTFILE of SGE and started in the queue SGE choses for the first issued `qrsh -inherit ...`. Which one is taken can't be predicted though.&lt;&lt;
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; On Mar 15, 2012, at 6:53 AM, Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 15.03.2012 um 05:22 schrieb Joshua Baker-LePain:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Wed, 14 Mar 2012 at 5:50pm, Ralph Castain wrote
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mar 14, 2012, at 5:44 PM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (I was just typing when Ralph's message came in: I can confirm this. To avoid it, it would mean for Open MPI to collect all lines from the hostfile which are on the same machine. SGE creates entries for each queue/host pair in the machine file).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hmmm&#133;I can take a look at the allocator module and see why we aren't doing it. Would the host names be the same for the two queues?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can't speak authoritatively like Reuti can, but here's what a hostfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; looks like on my cluster (note that all our name resolution is done via /etc/hosts -- there's no DNS involved):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; iq103 8 lab.q_at_iq103 &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; iq103 1 test.q_at_iq103 &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; iq104 8 lab.q_at_iq104 &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; iq104 1 test.q_at_iq104 &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opt221 2 lab.q_at_opt221 &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opt221 1 test.q_at_opt221 &lt;NULL&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, exactly this needs to be parsed and adding up all entries therein for one and the same machine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you need it instantly, it could be put in a wrapper for start_proc_args of the PE (and Open MPI compiled without SGE support), so that a custom build machinefile can be used. In this case the rsh resp. ssh call also needs to be caught.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Often the opposite is desired in an SGE setup: tune it so that all slots are coming from one queue only.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I still wonder whether it is possible to tune your setup in a similar way: allow one slot more in the high priority queue (long,.q) in case it's a parallel job, with an RQS (assuming 8 cores with one core oversubscription):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; limit queues long.q pes * to slots=9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; limit queues long.q to slots=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; while you have an additonal short.q (the low priority queue) there with one slot. The overall limit is still set on an exechost level to 9. The PE is then only attached to long.q.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PS: In your example you also had the case 2 slots in the low priority queue, what is the actual setup in your cluster?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; @Ralph: it could work if SGE would have a facility to request the desired queue in `qrsh -inherit ...`, because then the $TMPDIR would be unique for each orted again (assuming its using different ports for each).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Gotcha! I suspect getting the allocator to handle this cleanly is the better solution, though.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If I can help (testing patches, e.g.), let me know.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Joshua Baker-LePain
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; QB3 Shared Cluster Sysadmin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; UCSF_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18784.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18782.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18782.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18785.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18785.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
