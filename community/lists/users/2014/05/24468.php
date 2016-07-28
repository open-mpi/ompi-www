<?
$subject_val = "Re: [OMPI users] MPI_Finalize() maintains load at 100%.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 10:39:39 2014" -->
<!-- isoreceived="20140523143939" -->
<!-- sent="Fri, 23 May 2014 07:39:34 -0700" -->
<!-- isosent="20140523143934" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize() maintains load at 100%." -->
<!-- id="61081636-75C6-4DFB-A532-F26C42250CB6_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1238112006.17674428.1400854876581.JavaMail.zimbra_at_udc.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Finalize() maintains load at 100%.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 10:39:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24469.php">Iván Cores González: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Previous message:</strong> <a href="24467.php">Ralph Castain: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>In reply to:</strong> <a href="24466.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24469.php">Iván Cores González: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24469.php">Iván Cores González: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 23, 2014, at 7:21 AM, Iv&#225;n Cores Gonz&#225;lez &lt;ivan.coresg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; Thanks for your response. 
</span><br>
<span class="quotelev1">&gt; I see your point, I try to change the algorithm but some processes finish while the others are still calling MPI functions. I can't avoid this behaviour. 
</span><br>
<span class="quotelev1">&gt; The ideal behavior is the processes go to sleep (or don't use the 100% of load) when the MPI_Finalize is called.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the time being maybe the fastest solution is instert a &quot;manual&quot; sleep before the MPI_Finalize.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another question, Could be possible kill some MPI processes and avoid that the mpirun fails? Or this behaviuor is impossible?
</span><br>
<p>I assume you mean have them exit without calling MPI_Finalize, so they don't block? Technically, yes, though we wouldn't recommend that behavior. You can add &quot;-mca orte_allowed_exit_without_sync 1&quot; to your cmd line (or set the mca param in your environment, etc.) and mpirun won't terminate you if a proc exits without calling MPI_Finalize. We will still, however, terminate the job if (a) a proc dies by signal (e.g., segfaults), or (b) a proc exits with a non-zero status, so you'll still have some protection from hangs.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ivan Cores
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
<li><strong>Next message:</strong> <a href="24469.php">Iván Cores González: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Previous message:</strong> <a href="24467.php">Ralph Castain: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>In reply to:</strong> <a href="24466.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24469.php">Iván Cores González: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24469.php">Iván Cores González: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
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
