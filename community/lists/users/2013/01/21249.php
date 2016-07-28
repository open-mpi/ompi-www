<?
$subject_val = "Re: [OMPI users] very low performance over infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 13:43:56 2013" -->
<!-- isoreceived="20130128184356" -->
<!-- sent="Mon, 28 Jan 2013 13:43:51 -0500" -->
<!-- isosent="20130128184351" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] very low performance over infiniband" -->
<!-- id="017CD0AF-E39C-45B9-A943-BAC70A7A84EF_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPqNE2VBkT5wcpMB1RYBd4kFtQrXTouW9V9p+EknAp_SiBA25w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] very low performance over infiniband<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 13:43:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21250.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Previous message:</strong> <a href="21248.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>In reply to:</strong> <a href="21240.php">John Hearns: "Re: [OMPI users] very low performance over infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21252.php">John Hearns: "Re: [OMPI users] very low performance over infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also make sure that processes were not swapped out to a hard drive.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jan 27, 2013, at 6:39 AM, John Hearns &lt;hearnsj_at_[hidden]&lt;mailto:hearnsj_at_[hidden]&gt;&gt; wrote:
2 percent?
Have you logged into a compute node and run a simple top when the job is running?
Are all the processes distributed across the CPU cores?
Are the processes being pinned properly to a core? Or are they hopping from core to core?
Also make SURE all nodes havenooted with all cores online and all report the same amount of RAM
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21250.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Previous message:</strong> <a href="21248.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>In reply to:</strong> <a href="21240.php">John Hearns: "Re: [OMPI users] very low performance over infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21252.php">John Hearns: "Re: [OMPI users] very low performance over infiniband"</a>
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
