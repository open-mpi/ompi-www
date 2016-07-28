<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 17 09:32:07 2010" -->
<!-- isoreceived="20101117143207" -->
<!-- sent="Wed, 17 Nov 2010 07:32:02 -0700" -->
<!-- isosent="20101117143202" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="AANLkTi=-VtayQggJpyYmiNf1XX1mgJD86X46-3F5tgvb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE3DF58.4050107_at_oracle.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-17 09:32:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14808.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14806.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14806.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14808.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14808.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cris' output is coming solely from the HNP, which is correct given the way
<br>
things were executed. My comment was from another email where he did what I
<br>
asked, which was to include the flags:
<br>
<p>--report-bindings --leave-session-attached
<br>
<p>so we could see the output from each orted. In that email, it was clear that
<br>
while mpirun was bound to multiple cores, the orteds are being bound to a
<br>
-single- core.
<br>
<p>Hence the problem.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Wed, Nov 17, 2010 at 6:57 AM, Terry Dontje &lt;terry.dontje_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  On 11/17/2010 07:41 AM, Chris Jewell wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 17 Nov 2010, at 11:56, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  You are absolutely correct, Terry, and the 1.4 release series does include the proper code. The point here, though, is that SGE binds the orted to a single core, even though other cores are also allocated. So the orted detects an external binding of one core, and binds all its children to that same core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I do not think you are right here.  Chris sent the following which looks like OGE (fka SGE) actually did bind the hnp to multiple cores.  However that message I believe is not coming from the processes themselves and actually is only shown by the hnp.  I wonder if Chris adds a &quot;-bind-to-core&quot; option  we'll see more output from the a.out's before they exec unterm?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  As requested using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ qsub -pe mpi 8 -binding linear:2 myScript.com'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 'mpirun -mca ras_gridengine_verbose 100 --report-bindings -by-core -bind-to-core ./unterm'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [exec5:06671] System has detected external process binding to cores 0028
</span><br>
<span class="quotelev1">&gt; [exec5:06671] ras:gridengine: JOB_ID: 59434
</span><br>
<span class="quotelev1">&gt; [exec5:06671] ras:gridengine: PE_HOSTFILE: /usr/sge/default/spool/exec5/active_jobs/59434.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; [exec5:06671] ras:gridengine: exec5.cluster.stats.local: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev1">&gt; [exec5:06671] ras:gridengine: exec1.cluster.stats.local: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev1">&gt; [exec5:06671] ras:gridengine: exec4.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec5:06671] ras:gridengine: exec3.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec5:06671] ras:gridengine: exec2.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec5:06671] ras:gridengine: exec7.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No more info.  I note that the external binding is slightly different to what I had before, but our cluster is busier today :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I would have expected more output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Chris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr Chris Jewell
</span><br>
<span class="quotelev1">&gt; Department of Statistics
</span><br>
<span class="quotelev1">&gt; University of Warwick
</span><br>
<span class="quotelev1">&gt; Coventry
</span><br>
<span class="quotelev1">&gt; CV4 7AL
</span><br>
<span class="quotelev1">&gt; UK
</span><br>
<span class="quotelev1">&gt; Tel: +44 (0)24 7615 0778
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [image: Oracle]
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt;  Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt;  95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14807/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14807/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14808.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14806.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14806.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14808.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14808.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
