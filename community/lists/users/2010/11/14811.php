<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 17 10:13:28 2010" -->
<!-- isoreceived="20101117151328" -->
<!-- sent="Wed, 17 Nov 2010 10:13:29 -0500" -->
<!-- isosent="20101117151329" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="4CE3F119.1050008_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimJgNfbGMKYB8Sr+Br5aexj+c6r5QUg6J3pSAUw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-17 10:13:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14812.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Previous message:</strong> <a href="14810.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14810.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14813.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14813.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/17/2010 10:00 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; --leave-session-attached is always required if you want to see output 
</span><br>
<span class="quotelev1">&gt; from the daemons. Otherwise, the launcher closes the ssh session (or 
</span><br>
<span class="quotelev1">&gt; qrsh session, in this case) as part of its normal operating procedure, 
</span><br>
<span class="quotelev1">&gt; thus terminating the stdout/err channel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
I believe you but isn't it weird that without the --binding option to 
<br>
qsub we saw -report-bindings output from the orteds?
<br>
<p>Do you have the date of the email that has the info you talked about 
<br>
below.  I really am not trying to be an a-hole about this but there have 
<br>
been so much data and email flying around it would be nice to actually 
<br>
see the output you mention.
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; On Wed, Nov 17, 2010 at 7:51 AM, Terry Dontje &lt;terry.dontje_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:terry.dontje_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 11/17/2010 09:32 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Cris' output is coming solely from the HNP, which is correct
</span><br>
<span class="quotelev2">&gt;&gt;     given the way things were executed. My comment was from another
</span><br>
<span class="quotelev2">&gt;&gt;     email where he did what I asked, which was to include the flags:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --report-bindings --leave-session-attached
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     so we could see the output from each orted. In that email, it was
</span><br>
<span class="quotelev2">&gt;&gt;     clear that while mpirun was bound to multiple cores, the orteds
</span><br>
<span class="quotelev2">&gt;&gt;     are being bound to a -single- core.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hence the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     Hmm, I see Ralph's comment on 11/15 but I don't see any output
</span><br>
<span class="quotelev1">&gt;     that shows what Ralph say's above.  The only report-bindings
</span><br>
<span class="quotelev1">&gt;     output I see is when he runs without OGE binding.   Can someone
</span><br>
<span class="quotelev1">&gt;     give me the date and time of Chris' email with the
</span><br>
<span class="quotelev1">&gt;     --report-bindings and --leave-session-attached.  Or a rerun of the
</span><br>
<span class="quotelev1">&gt;     below with the --leave-session-attached option would also help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I find it confusing that --leave-session-attached is not required
</span><br>
<span class="quotelev1">&gt;     when the OGE binding argument is not given.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     HTH
</span><br>
<span class="quotelev2">&gt;&gt;     Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Wed, Nov 17, 2010 at 6:57 AM, Terry Dontje
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 11/17/2010 07:41 AM, Chris Jewell wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On 17 Nov 2010, at 11:56, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         You are absolutely correct, Terry, and the 1.4 release series does include the proper code. The point here, though, is that SGE binds the orted to a single core, even though other cores are also allocated. So the orted detects an external binding of one core, and binds all its children to that same core.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         I do not think you are right here.  Chris sent the following which looks like OGE (fka SGE) actually did bind the hnp to multiple cores.  However that message I believe is not coming from the processes themselves and actually is only shown by the hnp.  I wonder if Chris adds a &quot;-bind-to-core&quot; option  we'll see more output from the a.out's before they exec unterm?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         As requested using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         $ qsub -pe mpi 8 -binding linear:2 myScript.com'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         'mpirun -mca ras_gridengine_verbose 100 --report-bindings -by-core -bind-to-core ./unterm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [exec5:06671] System has detected external process binding to cores 0028
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [exec5:06671] ras:gridengine: JOB_ID: 59434
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [exec5:06671] ras:gridengine: PE_HOSTFILE: /usr/sge/default/spool/exec5/active_jobs/59434.1/pe_hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [exec5:06671] ras:gridengine: exec5.cluster.stats.local: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [exec5:06671] ras:gridengine: exec1.cluster.stats.local: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [exec5:06671] ras:gridengine: exec4.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [exec5:06671] ras:gridengine: exec3.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [exec5:06671] ras:gridengine: exec2.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [exec5:06671] ras:gridengine: exec7.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         No more info.  I note that the external binding is slightly different to what I had before, but our cluster is busier today :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I would have expected more output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Chris
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Dr Chris Jewell
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Department of Statistics
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         University of Warwick
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Coventry
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         CV4 7AL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UK
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Tel: +44 (0)24 7615 0778
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -- 
</span><br>
<span class="quotelev2">&gt;&gt;         Oracle
</span><br>
<span class="quotelev2">&gt;&gt;         Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt;         Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt;         Oracle *- Performance Technologies*
</span><br>
<span class="quotelev2">&gt;&gt;         95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt;         Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Oracle
</span><br>
<span class="quotelev1">&gt;     Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt;     Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt;     Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt;     95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt;     Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14811/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14811/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14811/03-part" alt="picture">
<!-- attachment="03-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14811/04-part" alt="picture">
<!-- attachment="04-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14812.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Previous message:</strong> <a href="14810.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14810.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14813.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14813.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
