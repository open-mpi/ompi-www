<?
$subject_val = "Re: [OMPI users] importing to MPI data already in memory from another process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 10:30:08 2014" -->
<!-- isoreceived="20140627143008" -->
<!-- sent="Fri, 27 Jun 2014 10:30:05 -0400" -->
<!-- isosent="20140627143005" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] importing to MPI data already in memory from another process" -->
<!-- id="602198B5-398C-4867-A495-9BEBA8E94E58_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkU+5y4TQEdh-To6320gy-Pux-n+D6-RO5x17tt=q_6OYg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] importing to MPI data already in memory from another process<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-27 10:30:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24719.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>Previous message:</strong> <a href="24717.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>In reply to:</strong> <a href="24717.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24719.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>Reply:</strong> <a href="24719.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
But this is within the same MPI &quot;universe&quot; right?  
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Jun 27, 2014, at 10:19 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The One-Sided Communications from the Chapter 11 of the MPI standard?
</span><br>
<span class="quotelev1">&gt; For processes on the same node you might want to look at
</span><br>
<span class="quotelev1">&gt; MPI_WIN_ALLOCATE_SHARED.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 27, 2014 at 9:53 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to import/map memory from a process (data acquisition) such that an MPI program could 'take' or see that memory?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have a need to do data acquisition at the rate of .7TB/s and need todo some shuffles/computation on these data,  some of the nodes are directly connected to the device, and some will do processing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is the proposed flow:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * Data collector nodes runs process collecting data from device
</span><br>
<span class="quotelev2">&gt;&gt; * Those nodes somehow pass the data to an MPI job running on these nodes and a number of other nodes (cpu need for filterting is greater than what the 16 data nodes can provide).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One thought is to have the data collector processes be threads inside the MPI job running across all nodes, but was curious is there is a way to pass data still in memory (to much to hit disk) to the running MPI filter job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24716.php">http://www.open-mpi.org/community/lists/users/2014/06/24716.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24717.php">http://www.open-mpi.org/community/lists/users/2014/06/24717.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24718/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24719.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>Previous message:</strong> <a href="24717.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>In reply to:</strong> <a href="24717.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24719.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>Reply:</strong> <a href="24719.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
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
