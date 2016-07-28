<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 22 10:49:58 2006" -->
<!-- isoreceived="20061222154958" -->
<!-- sent="Fri, 22 Dec 2006 08:49:48 -0700" -->
<!-- isosent="20061222154948" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3" -->
<!-- id="C1B14CAC.F86%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF47FF1652.F2B4E99A-ON8525724C.004F123B-8525724C.0050F48E_at_mck.us.ray.com" -->
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
<strong>Date:</strong> 2006-12-22 10:49:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2401.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>Previous message:</strong> <a href="2399.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>In reply to:</strong> <a href="2398.php">Ali Eghlima: "[OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2401.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>Reply:</strong> <a href="2401.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ali
<br>
<p>I have seen this reported twice now &#173; I think from two different sources,
<br>
but I could be incorrect. Unfortunately, we don&#185;t have access to an AIX
<br>
cluster to investigate the problem. We don&#185;t see it on any other platform at
<br>
this time.
<br>
<p>Could you tell me something more about your cluster? In particular, it would
<br>
help to know your launch environment (e.g., rsh/ssh, SLURM, TM, etc.). The
<br>
noted behavior of using &#139;debug-daemons to resolve the problem has me puzzled
<br>
as that flag only causes the daemons to keep their stdio ports open &#173; it has
<br>
nothing to do with the application processes nor the I/O forwarding
<br>
subsystem.
<br>
<p>I can suggest a couple of options in the interim, though I don&#185;t know that
<br>
they will solve the problem:
<br>
<p>1. You could upgrade to the 1.2 beta release. The runtime underwent some
<br>
significant changes that might help here; or
<br>
2. You could try configuring Open MPI with &#179;--disable-pty-support&#178;. The I/O
<br>
forwarding system is currently based upon pty&#185;s. We have seen a problem on
<br>
one other platform where the pty support wasn&#185;t quite what Open MPI expects
<br>
&#173; disabling it solved the problem. You should first check if the 1.1.2
<br>
release supports this configuration option (I honestly can&#185;t remember &#173; it
<br>
has been too long) - you may need to upgrade to 1.2 to do this.
<br>
<p>I hope that provides some help. If/when we get access to an AIX cluster,
<br>
we&#185;ll try to dig deeper into this issue.
<br>
<p>Ralph
<br>
<p><p><p>On 12/22/06 7:44 AM, &quot;Ali Eghlima&quot; &lt;Ali_Eghlima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
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
<p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2400/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2401.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>Previous message:</strong> <a href="2399.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>In reply to:</strong> <a href="2398.php">Ali Eghlima: "[OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2401.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>Reply:</strong> <a href="2401.php">Ali Eghlima: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
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
