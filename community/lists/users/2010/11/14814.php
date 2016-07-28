<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 17 11:09:47 2010" -->
<!-- isoreceived="20101117160947" -->
<!-- sent="Wed, 17 Nov 2010 11:09:44 -0500" -->
<!-- isosent="20101117160944" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="4CE3FE48.4020407_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikHWjOFbQPdzrS5xcQDYLPOn=BbWQkwvFG3KHAh_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-11-17 11:09:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14815.php">Grzegorz Maj: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Previous message:</strong> <a href="14813.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14813.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14817.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14817.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/17/2010 10:48 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; No problem at all. I confess that I am lost in all the sometimes 
</span><br>
<span class="quotelev1">&gt; disjointed emails in this thread. Frankly, now that I search, I can't 
</span><br>
<span class="quotelev1">&gt; find it either! :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see one email that clearly shows the external binding report from 
</span><br>
<span class="quotelev1">&gt; mpirun, but not from any daemons. I see another email (after you asked 
</span><br>
<span class="quotelev1">&gt; if there was all the output) that states &quot;yep&quot;, indicating that was 
</span><br>
<span class="quotelev1">&gt; all the output, and then proceeds to offer additional output that 
</span><br>
<span class="quotelev1">&gt; wasn't in the original email you asked about!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I am now as thoroughly confused as you are...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That said, I am confident in the code in ORTE as it has worked 
</span><br>
<span class="quotelev1">&gt; correctly when I tested it against external bindings in other 
</span><br>
<span class="quotelev1">&gt; environments. So I really do believe this is an OGE issue where the 
</span><br>
<span class="quotelev1">&gt; orted isn't getting correctly bound against all allocated cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I am confused by your statement above because we don't even know what is 
<br>
being bound or not.  We know that in it looks like the hnp is bound to 2 
<br>
cores which is what we asked for but we don't know what any of the 
<br>
processes themselves are bound to.   So I personally cannot point to 
<br>
ORTE or OGE as the culprit because I don't think we know whether there 
<br>
is an issue.
<br>
<p>So, until we are able to get the -report-bindings output from the a.out 
<br>
code (note I did not say orted) it is kind of hard to claim there is 
<br>
even an issue.  Which brings me back to the output question.  After some 
<br>
thinking the --report-bindings output I am expecting is not from the 
<br>
orted itself but from the a.out before it executes the user code.   
<br>
Which now makes me wonder if there is some odd OGE/OMPI integration 
<br>
issue which the -bind-to-code -report-bindings options are not being 
<br>
propagated/recognized/honored when qsub is given the -binding option.
<br>
<p><span class="quotelev1">&gt; Perhaps if someone could run this test again with --report-bindings 
</span><br>
<span class="quotelev1">&gt; --leave-session-attached and provide -all- output we could verify that 
</span><br>
<span class="quotelev1">&gt; analysis and clear up the confusion?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yeah, however I bet you we still won't see output.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 17, 2010 at 8:13 AM, Terry Dontje &lt;terry.dontje_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:terry.dontje_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 11/17/2010 10:00 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     --leave-session-attached is always required if you want to see
</span><br>
<span class="quotelev2">&gt;&gt;     output from the daemons. Otherwise, the launcher closes the ssh
</span><br>
<span class="quotelev2">&gt;&gt;     session (or qrsh session, in this case) as part of its normal
</span><br>
<span class="quotelev2">&gt;&gt;     operating procedure, thus terminating the stdout/err channel.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     I believe you but isn't it weird that without the --binding option
</span><br>
<span class="quotelev1">&gt;     to qsub we saw -report-bindings output from the orteds?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Do you have the date of the email that has the info you talked
</span><br>
<span class="quotelev1">&gt;     about below.  I really am not trying to be an a-hole about this
</span><br>
<span class="quotelev1">&gt;     but there have been so much data and email flying around it would
</span><br>
<span class="quotelev1">&gt;     be nice to actually see the output you mention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Wed, Nov 17, 2010 at 7:51 AM, Terry Dontje
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 11/17/2010 09:32 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Cris' output is coming solely from the HNP, which is correct
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         given the way things were executed. My comment was from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         another email where he did what I asked, which was to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         include the flags:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --report-bindings --leave-session-attached
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         so we could see the output from each orted. In that email,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         it was clear that while mpirun was bound to multiple cores,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         the orteds are being bound to a -single- core.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hence the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hmm, I see Ralph's comment on 11/15 but I don't see any
</span><br>
<span class="quotelev2">&gt;&gt;         output that shows what Ralph say's above.  The only
</span><br>
<span class="quotelev2">&gt;&gt;         report-bindings output I see is when he runs without OGE
</span><br>
<span class="quotelev2">&gt;&gt;         binding.   Can someone give me the date and time of Chris'
</span><br>
<span class="quotelev2">&gt;&gt;         email with the --report-bindings and
</span><br>
<span class="quotelev2">&gt;&gt;         --leave-session-attached.  Or a rerun of the below with the
</span><br>
<span class="quotelev2">&gt;&gt;         --leave-session-attached option would also help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I find it confusing that --leave-session-attached is not
</span><br>
<span class="quotelev2">&gt;&gt;         required when the OGE binding argument is not given.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On Wed, Nov 17, 2010 at 6:57 AM, Terry Dontje
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             On 11/17/2010 07:41 AM, Chris Jewell wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             On 17 Nov 2010, at 11:56, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             You are absolutely correct, Terry, and the 1.4 release series does include the proper code. The point here, though, is that SGE binds the orted to a single core, even though other cores are also allocated. So the orted detects an external binding of one core, and binds all its children to that same core.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             I do not think you are right here.  Chris sent the following which looks like OGE (fka SGE) actually did bind the hnp to multiple cores.  However that message I believe is not coming from the processes themselves and actually is only shown by the hnp.  I wonder if Chris adds a &quot;-bind-to-core&quot; option  we'll see more output from the a.out's before they exec unterm?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             As requested using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             $ qsub -pe mpi 8 -binding linear:2 myScript.com'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             'mpirun -mca ras_gridengine_verbose 100 --report-bindings -by-core -bind-to-core ./unterm'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [exec5:06671] System has detected external process binding to cores 0028
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [exec5:06671] ras:gridengine: JOB_ID: 59434
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [exec5:06671] ras:gridengine: PE_HOSTFILE: /usr/sge/default/spool/exec5/active_jobs/59434.1/pe_hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [exec5:06671] ras:gridengine: exec5.cluster.stats.local: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [exec5:06671] ras:gridengine: exec1.cluster.stats.local: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [exec5:06671] ras:gridengine: exec4.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [exec5:06671] ras:gridengine: exec3.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [exec5:06671] ras:gridengine: exec2.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [exec5:06671] ras:gridengine: exec7.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             No more info.  I note that the external binding is slightly different to what I had before, but our cluster is busier today :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             I would have expected more output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Chris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Dr Chris Jewell
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Department of Statistics
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             University of Warwick
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Coventry
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             CV4 7AL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             UK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Tel: +44 (0)24 7615 0778
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Oracle
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Oracle *- Performance Technologies*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14814/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14814/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14814/03-part" alt="picture">
<!-- attachment="03-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14814/04-part" alt="picture">
<!-- attachment="04-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14814/05-part" alt="picture">
<!-- attachment="05-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14815.php">Grzegorz Maj: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Previous message:</strong> <a href="14813.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14813.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14817.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14817.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
