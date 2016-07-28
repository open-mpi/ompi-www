<?
$subject_val = "Re: [OMPI users] importing to MPI data already in memory from another process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 11:35:33 2014" -->
<!-- isoreceived="20140627153533" -->
<!-- sent="Fri, 27 Jun 2014 11:35:32 -0400" -->
<!-- isosent="20140627153532" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] importing to MPI data already in memory from another process" -->
<!-- id="CAMJJpkVkjSj0Lpe+Ln1CGvzc8_T3rE0cT9Vj=meWBdfzFCh_Eg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="602198B5-398C-4867-A495-9BEBA8E94E58_at_umich.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-27 11:35:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24720.php">Dave Goodell (dgoodell): "Re: [OMPI users] importing to MPI data already in memory from another	process"</a>
<li><strong>Previous message:</strong> <a href="24718.php">Brock Palen: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>In reply to:</strong> <a href="24718.php">Brock Palen: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24720.php">Dave Goodell (dgoodell): "Re: [OMPI users] importing to MPI data already in memory from another	process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI &quot;universe&quot; yes, but not necessarily MPI &quot;world&quot;. You could have
<br>
the two worlds connect/accept or join
<br>
(<a href="https://www.open-mpi.org/doc/v1.8/man3/MPI_Comm_join.3.php">https://www.open-mpi.org/doc/v1.8/man3/MPI_Comm_join.3.php</a>) and then
<br>
you should be able to take advantage of the RMA. At least, that is
<br>
what is written in the book ...
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Fri, Jun 27, 2014 at 10:30 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; But this is within the same MPI &quot;universe&quot; right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 27, 2014, at 10:19 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The One-Sided Communications from the Chapter 11 of the MPI standard?
</span><br>
<span class="quotelev2">&gt;&gt; For processes on the same node you might want to look at
</span><br>
<span class="quotelev2">&gt;&gt; MPI_WIN_ALLOCATE_SHARED.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jun 27, 2014 at 9:53 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to import/map memory from a process (data acquisition) such that an MPI program could 'take' or see that memory?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have a need to do data acquisition at the rate of .7TB/s and need todo some shuffles/computation on these data,  some of the nodes are directly connected to the device, and some will do processing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the proposed flow:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Data collector nodes runs process collecting data from device
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Those nodes somehow pass the data to an MPI job running on these nodes and a number of other nodes (cpu need for filterting is greater than what the 16 data nodes can provide).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One thought is to have the data collector processes be threads inside the MPI job running across all nodes, but was curious is there is a way to pass data still in memory (to much to hit disk) to the running MPI filter job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24716.php">http://www.open-mpi.org/community/lists/users/2014/06/24716.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24717.php">http://www.open-mpi.org/community/lists/users/2014/06/24717.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24718.php">http://www.open-mpi.org/community/lists/users/2014/06/24718.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24720.php">Dave Goodell (dgoodell): "Re: [OMPI users] importing to MPI data already in memory from another	process"</a>
<li><strong>Previous message:</strong> <a href="24718.php">Brock Palen: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>In reply to:</strong> <a href="24718.php">Brock Palen: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24720.php">Dave Goodell (dgoodell): "Re: [OMPI users] importing to MPI data already in memory from another	process"</a>
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
