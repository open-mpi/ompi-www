<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 18:11:04 2009" -->
<!-- isoreceived="20090417221104" -->
<!-- sent="Fri, 17 Apr 2009 18:10:53 -0400" -->
<!-- isosent="20090417221053" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="49E8FE6D.4010503_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a599d60e0904171431k44ed9adqe3db1a981480db95_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-17 18:10:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8969.php">Micha Feigin: "[OMPI users] mpiexec seems to be resolving names on server instead of each node"</a>
<li><strong>Previous message:</strong> <a href="8967.php">Grady Laksmono: "[OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>In reply to:</strong> <a href="8966.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8970.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8970.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ankush
<br>
<p>You need to setup passwordless connections with ssh to the node you just
<br>
added.  You (or somebody else) probably did this already on the first 
<br>
compute node, otherwise the MPI programs wouldn't run
<br>
across the network.
<br>
<p>See the very last sentence on this FAQ:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
<br>
<p>And try this recipe (if you use RSA keys instead of DSA, replace all 
<br>
&quot;dsa&quot; by &quot;rsa&quot;):
<br>
<p><a href="http://www.sshkeychain.org/mirrors/SSH-with-Keys-HOWTO/SSH-with-Keys-HOWTO-4.html#ss4.3">http://www.sshkeychain.org/mirrors/SSH-with-Keys-HOWTO/SSH-with-Keys-HOWTO-4.html#ss4.3</a>
<br>
<p>I hope this helps.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Ankush Kaul wrote:
<br>
<span class="quotelev1">&gt; Thank you, i m reading up on de tools u suggested.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am facing another problem, my cluster is working fine with 2 hosts (1 
</span><br>
<span class="quotelev1">&gt; master + 1 compute node) but when i tried 2 add another node (1 master + 
</span><br>
<span class="quotelev1">&gt; 2 compute node) its not working. it works fine when i give de command 
</span><br>
<span class="quotelev1">&gt; mpirun -host &lt;hostname&gt; /work/Pi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but when i try to run
</span><br>
<span class="quotelev1">&gt; mpirun  /work/Pi it gives following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;'s password: 
</span><br>
<span class="quotelev1">&gt; root_at_192.168.67.241 &lt;mailto:root_at_192.168.67.241&gt;'s password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again. &lt;The password i provide is correct&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;'s password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;'s password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Permission denied (publickey,gssapi-with-mic,password).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_192.168.67.241 &lt;mailto:root_at_192.168.67.241&gt;'s password: 
</span><br>
<span class="quotelev1">&gt; [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ccomp1.cluster:03503] ERROR: A daemon on node 192.168.45.65 failed to 
</span><br>
<span class="quotelev1">&gt; start as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ccomp1.cluster:03503] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ccomp1.cluster:03503] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ccomp1.cluster:03503] ERROR: The daemon exited unexpectedly with status 
</span><br>
<span class="quotelev1">&gt; 255.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1198
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the problem here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job. 
</span><br>
<span class="quotelev1">&gt; Returned value Timeout instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 14, 2009 at 7:15 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Ankush Kaul wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Finally, after mentioning the hostfiles the cluster is working
</span><br>
<span class="quotelev1">&gt;         fine. We downloaded few benchmarking softwares but i would like
</span><br>
<span class="quotelev1">&gt;         to know if there is any GUI based benchmarking software so that
</span><br>
<span class="quotelev1">&gt;         its easier to demonstrate the working of our cluster while
</span><br>
<span class="quotelev1">&gt;         displaying our cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I'm confused what you're looking for here, but thought I'd venture a
</span><br>
<span class="quotelev1">&gt;     suggestion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     There are GUI-based performance analysis and tracing tools.  E.g.,
</span><br>
<span class="quotelev1">&gt;     run a program, [[semi-]automatically] collect performance data, run
</span><br>
<span class="quotelev1">&gt;     a GUI-based analysis tool on the data, visualize what happened on
</span><br>
<span class="quotelev1">&gt;     your cluster.  Would this suit your purposes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     If so, there are a variety of tools out there you could try.  Some
</span><br>
<span class="quotelev1">&gt;     are platform-specific or cost money.  Some are widely/freely
</span><br>
<span class="quotelev1">&gt;     available.  Examples of these tools include Intel Trace Analyzer,
</span><br>
<span class="quotelev1">&gt;     Jumpshot, Vampir, TAU, etc.  I do know that Sun Studio (Performance
</span><br>
<span class="quotelev1">&gt;     Analyzer) is available via free download on x86 and SPARC and Linux
</span><br>
<span class="quotelev1">&gt;     and Solaris and works with OMPI.  Possibly the same with Jumpshot.
</span><br>
<span class="quotelev1">&gt;      VampirTrace instrumentation is already in OMPI, but then you need
</span><br>
<span class="quotelev1">&gt;     to figure out the analysis-tool part.  (I think the Vampir GUI tool
</span><br>
<span class="quotelev1">&gt;     requires a license, but I'm not sure.  Maybe you can convert to TAU,
</span><br>
<span class="quotelev1">&gt;     which is probably available for free download.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Anyhow, I don't even know if that sort of thing fits your
</span><br>
<span class="quotelev1">&gt;     requirements.  Just an idea.
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="8969.php">Micha Feigin: "[OMPI users] mpiexec seems to be resolving names on server instead of each node"</a>
<li><strong>Previous message:</strong> <a href="8967.php">Grady Laksmono: "[OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>In reply to:</strong> <a href="8966.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8970.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8970.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
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
