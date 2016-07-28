<?
$subject_val = "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 08:19:30 2016" -->
<!-- isoreceived="20160726121930" -->
<!-- sent="Tue, 26 Jul 2016 13:19:26 +0100" -->
<!-- isosent="20160726121926" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM" -->
<!-- id="CADsB1iBOMfynrU25Cz1mSKPt0bMHJetPcEXyrY2Hf9m-KE8ArA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="39a7cb83-39bb-09dc-e5ef-6cfba94dcbd8_at_rist.or.jp" -->
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
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-26 08:19:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29710.php">SayedHadi Hashemi: "[OMPI users] ::: Possible bug in Dynamic Process Management (MPI_Comm_accept) in open-mpi 2.0.0"</a>
<li><strong>Previous message:</strong> <a href="29708.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/06/29466.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 16 June 2016 at 00:46, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the idea on how to get the number of tasks per node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Comm intranode_comm;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int tasks_per_local_node;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_split_type(MPI_COMM_WORLD, MPI_COMM_TYPE_SHARED, 0, MPI_INFO_NULL, &amp;intranode_comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(intranode_comm, &amp;tasks_per_local_node)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_free(&amp;intranode_comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then you can get the available memory per node, for example
</span><br>
<span class="quotelev1">&gt; grep ^MemAvailable: /proc/meminfo
</span><br>
<span class="quotelev1">&gt; and then divide this by the number of tasks on the local node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; now if distribution should be based on cpu speed, you can simply retrieve this value on each task, and then MPI_Gather() it to rank 0, and do the distribution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in any case, if you MPI_Gather() the task parameter you are interested in, you should be able to get rid of a static config file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; non blocking collective are also available
</span><br>
<span class="quotelev1">&gt; MPI_Igather[v] / MPI_Iscatter[v]
</span><br>
<span class="quotelev1">&gt; if your algorithm can exploit this, that might be helpful
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&nbsp;I now programmatically collect this info:
<br>
<p>rank/core:     cpufrequency                      maxmemavailable
<br>
=============================================
<br>
0                           f0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m0
<br>
1                           f1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m1
<br>
2                           f2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m2
<br>
3                           f3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m3
<br>
4                           f4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m4
<br>
<p>Let's say 1 task needs M bytes.
<br>
The maximum number of tasks I can do would be:       sum(mi) / M
<br>
<p>Now let's say I am given N tasks to do.
<br>
<p>1.  A solution that ignores  the memory available is to spread N over
<br>
the 5 cores given the highest frequency cores the highest number of
<br>
tasks in a prorata way, ie  f_i/ sum(f_i)   =&gt; n_i for each core.
<br>
sum(n_i) = N
<br>
2. A 2nd stage could then be to ensure that no:    n_i &gt; m_i/M
<br>
which would then involve    taking any excesses (n_i - m_i/M) and
<br>
spreading it over the cores.
<br>
<p><p>Or
<br>
<p>perhaps both cpufrequencies and maxmem could be considered in 1 go,
<br>
but I don't know how to do that?
<br>
<p>Thanks
<br>
<p>MM
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29710.php">SayedHadi Hashemi: "[OMPI users] ::: Possible bug in Dynamic Process Management (MPI_Comm_accept) in open-mpi 2.0.0"</a>
<li><strong>Previous message:</strong> <a href="29708.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/06/29466.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<!-- nextthread="start" -->
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
