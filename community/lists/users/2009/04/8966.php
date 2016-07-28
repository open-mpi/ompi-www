<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 17:31:21 2009" -->
<!-- isoreceived="20090417213121" -->
<!-- sent="Sat, 18 Apr 2009 03:01:16 +0530" -->
<!-- isosent="20090417213116" -->
<!-- name="Ankush Kaul" -->
<!-- email="ankush.rkaul_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="a599d60e0904171431k44ed9adqe3db1a981480db95_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49E4935F.3010101_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Ankush Kaul (<em>ankush.rkaul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-17 17:31:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8967.php">Grady Laksmono: "[OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>Previous message:</strong> <a href="8965.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>In reply to:</strong> <a href="8895.php">Eugene Loh: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8968.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8968.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, i m reading up on de tools u suggested.
<br>
I am facing another problem, my cluster is working fine with 2 hosts (1
<br>
master + 1 compute node) but when i tried 2 add another node (1 master + 2
<br>
compute node) its not working. it works fine when i give de command
<br>
mpirun -host &lt;hostname&gt; /work/Pi
<br>
<p>but when i try to run
<br>
mpirun  /work/Pi it gives following error:
<br>
<p>root_at_192.168.45.65's password: root_at_192.168.67.241's password:
<br>
<p>Permission denied, please try again. &lt;The password i provide is correct&gt;
<br>
<p>root_at_192.168.45.65's password:
<br>
<p>Permission denied, please try again.
<br>
<p>root_at_192.168.45.65's password:
<br>
<p>Permission denied (publickey,gssapi-with-mic,password).
<br>
<p><p><p>Permission denied, please try again.
<br>
<p>root_at_192.168.67.241's password: [ccomp1.cluster:03503] [0,0,0]
<br>
ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 275
<br>
<p>[ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1166
<br>
<p>[ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c
<br>
at line 90
<br>
<p>[ccomp1.cluster:03503] ERROR: A daemon on node 192.168.45.65 failed to start
<br>
as expected.
<br>
<p>[ccomp1.cluster:03503] ERROR: There may be more information available from
<br>
<p>[ccomp1.cluster:03503] ERROR: the remote shell (see above).
<br>
<p>[ccomp1.cluster:03503] ERROR: The daemon exited unexpectedly with status
<br>
255.
<br>
<p>[ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 188
<br>
<p>[ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1198
<br>
<p><p>What is the problem here?
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpirun was unable to cleanly terminate the daemons for this job. Returned
<br>
value Timeout instead of ORTE_SUCCESS
<br>
<p>On Tue, Apr 14, 2009 at 7:15 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ankush Kaul wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Finally, after mentioning the hostfiles the cluster is working fine. We
</span><br>
<span class="quotelev2">&gt;&gt; downloaded few benchmarking softwares but i would like to know if there is
</span><br>
<span class="quotelev2">&gt;&gt; any GUI based benchmarking software so that its easier to demonstrate the
</span><br>
<span class="quotelev2">&gt;&gt; working of our cluster while displaying our cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm confused what you're looking for here, but thought I'd venture a
</span><br>
<span class="quotelev1">&gt; suggestion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are GUI-based performance analysis and tracing tools.  E.g., run a
</span><br>
<span class="quotelev1">&gt; program, [[semi-]automatically] collect performance data, run a GUI-based
</span><br>
<span class="quotelev1">&gt; analysis tool on the data, visualize what happened on your cluster.  Would
</span><br>
<span class="quotelev1">&gt; this suit your purposes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, there are a variety of tools out there you could try.  Some are
</span><br>
<span class="quotelev1">&gt; platform-specific or cost money.  Some are widely/freely available.
</span><br>
<span class="quotelev1">&gt;  Examples of these tools include Intel Trace Analyzer, Jumpshot, Vampir,
</span><br>
<span class="quotelev1">&gt; TAU, etc.  I do know that Sun Studio (Performance Analyzer) is available via
</span><br>
<span class="quotelev1">&gt; free download on x86 and SPARC and Linux and Solaris and works with OMPI.
</span><br>
<span class="quotelev1">&gt;  Possibly the same with Jumpshot.  VampirTrace instrumentation is already in
</span><br>
<span class="quotelev1">&gt; OMPI, but then you need to figure out the analysis-tool part.  (I think the
</span><br>
<span class="quotelev1">&gt; Vampir GUI tool requires a license, but I'm not sure.  Maybe you can convert
</span><br>
<span class="quotelev1">&gt; to TAU, which is probably available for free download.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyhow, I don't even know if that sort of thing fits your requirements.
</span><br>
<span class="quotelev1">&gt;  Just an idea.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8966/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8967.php">Grady Laksmono: "[OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>Previous message:</strong> <a href="8965.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>In reply to:</strong> <a href="8895.php">Eugene Loh: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8968.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8968.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
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
