<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 22 15:29:04 2006" -->
<!-- isoreceived="20061222202904" -->
<!-- sent="Fri, 22 Dec 2006 13:28:55 -0700" -->
<!-- isosent="20061222202855" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3" -->
<!-- id="C1B18E17.FAC%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF2F645378.F30E866B-ON8525724C.0064C94A-8525724C.00659D6C_at_mck.us.ray.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-22 15:28:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2403.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>Previous message:</strong> <a href="2401.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>In reply to:</strong> <a href="2401.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2403.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>Reply:</strong> <a href="2403.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ali. That is indeed helpful.
<br>
<p>I personally launch using rsh (both on OSX and Linux) frequently and have no
<br>
problem with IO forwarding. So it must be something about the AIX
<br>
environment that is causing the issue.
<br>
<p>Debug daemons should have nothing to do with the application process&#185; stdio
<br>
channels. I&#185;ll take another look at that code and see if there is some
<br>
unexpected interaction that might be occurring.
<br>
<p>As I said earlier, though, there is little we can do about AIX at this time
<br>
due to lack of access to that environment. If we can find someone with
<br>
access and willing to help, we will explore it further.
<br>
<p>Ralph
<br>
<p><p><p>On 12/22/06 11:29 AM, &quot;Ali Eghlima&quot; &lt;Ali_Eghlima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the quick reply. The launch environment is rsh. I was also puzzled,
</span><br>
<span class="quotelev1">&gt; when I find out --debug-daemons option
</span><br>
<span class="quotelev1">&gt; makes mpirun to work for a simple case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ali, 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden] 12/22/2006 10:49 AM
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To 
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; Subject 
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ali
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have seen this reported twice now &#173; I think from two different sources, but
</span><br>
<span class="quotelev1">&gt; I could be incorrect. Unfortunately, we don&#185;t have access to an AIX cluster to
</span><br>
<span class="quotelev1">&gt; investigate the problem. We don&#185;t see it on any other platform at this time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you tell me something more about your cluster? In particular, it would
</span><br>
<span class="quotelev1">&gt; help to know your launch environment (e.g., rsh/ssh, SLURM, TM, etc.). The
</span><br>
<span class="quotelev1">&gt; noted behavior of using &#139;debug-daemons to resolve the problem has me puzzled
</span><br>
<span class="quotelev1">&gt; as that flag only causes the daemons to keep their stdio ports open &#173; it has
</span><br>
<span class="quotelev1">&gt; nothing to do with the application processes nor the I/O forwarding subsystem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can suggest a couple of options in the interim, though I don&#185;t know that
</span><br>
<span class="quotelev1">&gt; they will solve the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.        You could upgrade to the 1.2 beta release. The runtime underwent
</span><br>
<span class="quotelev1">&gt; some significant changes that might help here; or
</span><br>
<span class="quotelev1">&gt; 2.        You could try configuring Open MPI with &#179;--disable-pty-support&#178;. The
</span><br>
<span class="quotelev1">&gt; I/O forwarding system is currently based upon pty&#185;s. We have seen a problem on
</span><br>
<span class="quotelev1">&gt; one other platform where the pty support wasn&#185;t quite what Open MPI expects &#173;
</span><br>
<span class="quotelev1">&gt; disabling it solved the problem. You should first check if the 1.1.2 release
</span><br>
<span class="quotelev1">&gt; supports this configuration option (I honestly can&#185;t remember &#173; it has been
</span><br>
<span class="quotelev1">&gt; too long) - you may need to upgrade to 1.2 to do this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope that provides some help. If/when we get access to an AIX cluster, we&#185;ll
</span><br>
<span class="quotelev1">&gt; try to dig deeper into this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/22/06 7:44 AM, &quot;Ali Eghlima&quot; &lt;Ali_Eghlima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have Open MPI 1.1.2 installed on IBM AIX 5.3 cluster. It looks like
</span><br>
<span class="quotelev1">&gt; terminal output is broken. There are a few entry in the archive for this
</span><br>
<span class="quotelev1">&gt; problem, 
</span><br>
<span class="quotelev1">&gt; with no suggested solution or real work around.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am putting this posting with hope to get some advise for a work around or
</span><br>
<span class="quotelev1">&gt; solution. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #mpirun -np 1  hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        No out put, piping the command to &quot;cat&quot; or &quot;more&quot; generate no out put
</span><br>
<span class="quotelev1">&gt; as well. 
</span><br>
<span class="quotelev1">&gt;        The only way to get an output from this command is to add
</span><br>
<span class="quotelev1">&gt; --debug-daemons 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #mpirun -np 1 --debug-daemons  hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even this debug option is not working for a real application which generate
</span><br>
<span class="quotelev1">&gt; several output. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking forward for any comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ali, 
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
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
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
<p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2402/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2403.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>Previous message:</strong> <a href="2401.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>In reply to:</strong> <a href="2401.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2403.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>Reply:</strong> <a href="2403.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
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
