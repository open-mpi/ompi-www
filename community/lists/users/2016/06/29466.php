<?
$subject_val = "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 19:46:09 2016" -->
<!-- isoreceived="20160615234609" -->
<!-- sent="Thu, 16 Jun 2016 08:46:01 +0900" -->
<!-- isosent="20160615234601" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM" -->
<!-- id="39a7cb83-39bb-09dc-e5ef-6cfba94dcbd8_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CADsB1iD=BcqpPv2MfF8CO7XsXdQO1VM9btZsjspBYcPhc7NGKA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 19:46:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29467.php">Sasso, John (GE Power, Non-GE): "[OMPI users]  &quot;failed to create queue pair&quot; problem,	but settings appear OK"</a>
<li><strong>Previous message:</strong> <a href="29465.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>In reply to:</strong> <a href="29465.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/07/29709.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/07/29709.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is the idea on how to get the number of tasks per node
<br>
<p><p>MPI_Comm intranode_comm;
<br>
<p>int tasks_per_local_node;
<br>
<p>MPI_Comm_split_type(MPI_COMM_WORLD, MPI_COMM_TYPE_SHARED, 0, 
<br>
MPI_INFO_NULL, &amp;intranode_comm);
<br>
<p>MPI_Comm_size(intranode_comm, &amp;tasks_per_local_node)
<br>
<p>MPI_Comm_free(&amp;intranode_comm);
<br>
<p><p><p>then you can get the available memory per node, for example
<br>
grep ^MemAvailable: /proc/meminfo
<br>
and then divide this by the number of tasks on the local node.
<br>
<p><p><p>now if distribution should be based on cpu speed, you can simply 
<br>
retrieve this value on each task, and then MPI_Gather() it to rank 0, 
<br>
and do the distribution.
<br>
<p><p>in any case, if you MPI_Gather() the task parameter you are interested 
<br>
in, you should be able to get rid of a static config file.
<br>
<p>non blocking collective are also available
<br>
MPI_Igather[v] / MPI_Iscatter[v]
<br>
if your algorithm can exploit this, that might be helpful
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<span class="quotelev2">&gt;&gt; You can use MPI_Comm_split_type in order to create inter node communicators.
</span><br>
<span class="quotelev1">&gt; I don't quite understand this function. One starts with the world
</span><br>
<span class="quotelev1">&gt; communicator including all ranks 0...9, and splits that  into multiple
</span><br>
<span class="quotelev1">&gt; subcommunicators? only split type appears to be MPI_COMM_TYPE_SHARED.
</span><br>
<p><p><span class="quotelev2">&gt;&gt; Then you can find how much memory is available per task,
</span><br>
<span class="quotelev1">&gt; How? by reading '/proc/self/statm' on linux?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Gather that on the master task, and MPI_Scatterv/MPI_Gatherv to distribute/consolidate the data
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Apologies for my scattered comments, my question is not actually
</span><br>
<span class="quotelev1">&gt; totally clear in my head :-)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29465.php">http://www.open-mpi.org/community/lists/users/2016/06/29465.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29467.php">Sasso, John (GE Power, Non-GE): "[OMPI users]  &quot;failed to create queue pair&quot; problem,	but settings appear OK"</a>
<li><strong>Previous message:</strong> <a href="29465.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>In reply to:</strong> <a href="29465.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/07/29709.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/07/29709.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
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
