<?
$subject_val = "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 23:52:41 2014" -->
<!-- isoreceived="20140314035241" -->
<!-- sent="Fri, 14 Mar 2014 12:51:55 +0900" -->
<!-- isosent="20140314035155" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2" -->
<!-- id="OFB0A212AA.6AF967F0-ON49257C9B.0014F42F-49257C9B.00154B16_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BEA5F573-8277-4038-8035-4E1BDFBB5421_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20ctrl%2Bc%20to%20abort%20a%20job%20with%20openmpi-1.7.5rc2"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-13 23:51:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23842.php">Jianyu Liu: "[OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23840.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (diagnosed)"</a>
<li><strong>In reply to:</strong> <a href="23839.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23845.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Reply:</strong> <a href="23845.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I happened to misspell a hostname, then it hanged.
<br>
<p>[mishima_at_manage ~]$ mpirun -np 6 -host node05,nod06
<br>
~/mis/openmpi/demos/myprog
<br>
nod06: Unknown host
<br>
mpirun: abort is already in progress...hit ctrl-c again to forcibly
<br>
terminate
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; No problem - we appreciate you taking the time to confirm. Jeff
</span><br>
encountered something late today, so we may indeed still have a lingering
<br>
problem. :-(
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will keep you posted
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2014, at 5:08 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph, I'm late to your release again due to TD.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At that time, I manually applied #4386 and #4383 to 1.7 branch
</span><br>
<span class="quotelev2">&gt; &gt; - namely openmpi-1.7.5rc2, and did the check. I might have
</span><br>
<span class="quotelev2">&gt; &gt; made some mistake.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now, I found openmpi-1.7.5rc3 had just released and confirmed
</span><br>
<span class="quotelev2">&gt; &gt; it worked fine, thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It's okay - we thought we had it fixed, but not for that scenario.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 12, 2014, at 9:02 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sorry for disturbing, please keep going ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tetsuya
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Yes, I know - I am just finishing the fix now.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Mar 12, 2014, at 8:48 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi Ralph, this problem is not fixed completely by today's latest
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ticket #4383, I guess ...
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4383">https://svn.open-mpi.org/trac/ompi/ticket/4383</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; For example, in case of returing with ORTE_ERR_SILENT from the line
</span><br>
<span class="quotelev2">&gt; &gt; 514
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; in rmaps_rr_mapper.c file, the problem still occurs. I executed the
</span><br>
<span class="quotelev2">&gt; &gt; job
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; under the unmanaged condition - rsh without torque:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [mishima_at_manage openmpi-1.7.5rc2]$ mpirun -np 6 -host node05,node06
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -nooversubscribe ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; There are not enough slots available in the system to satisfy the 6
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; slots
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /home/mishima/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Either request fewer slots for your application, or make more slots
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; available
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; for use.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Abort is in progress...hit ctrl-c again within 5 seconds to
</span><br>
forcibly
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; terminate
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Abort is in progress...hit ctrl-c again within 5 seconds to
</span><br>
forcibly
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; terminate
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; .....
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; rmaps_rr_mapper.c:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 509      /* quick check to see if we can map all the procs */
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 510      if (num_slots &lt; (app-&gt;num_procs *
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orte_rmaps_base.cpus_per_rank)) {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 511          if (ORTE_MAPPING_NO_OVERSUBSCRIBE &amp;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ORTE_GET_MAPPING_DIRECTIVE(jdata-&gt;map-&gt;mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 512              orte_show_help(&quot;help-orte-rmaps-base.txt&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;orte-rmaps-base:alloc-error&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 513                             true, app-&gt;num_procs, app-&gt;app);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 514              return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 515          }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tetsuya
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23842.php">Jianyu Liu: "[OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23840.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (diagnosed)"</a>
<li><strong>In reply to:</strong> <a href="23839.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23845.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Reply:</strong> <a href="23845.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
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
