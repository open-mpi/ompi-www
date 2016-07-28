<?
$subject_val = "Re: [OMPI users] Broadcast faster than barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 30 20:34:17 2016" -->
<!-- isoreceived="20160531003417" -->
<!-- sent="Tue, 31 May 2016 09:34:12 +0900" -->
<!-- isosent="20160531003412" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Broadcast faster than barrier" -->
<!-- id="556444bc-4933-65a9-85f8-250e56a32f2a_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+ssbKVjYj40ujZJJQ00apZn2ZrEjzGHD6HZvptJgqgyP_-1ag_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Broadcast faster than barrier<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-30 20:34:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29331.php">Jeff Hammond: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Previous message:</strong> <a href="29329.php">Gilles Gouaillardet: "Re: [OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<li><strong>In reply to:</strong> <a href="29327.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29331.php">Jeff Hammond: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Reply:</strong> <a href="29331.php">Jeff Hammond: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/30/2016 11:09 PM, Saliya Ekanayake wrote:
<br>
<span class="quotelev1">&gt; So, you mean that it guarantees the value received after the bcast 
</span><br>
<span class="quotelev1">&gt; call is consistent with value sent from root, but it doesn't have to 
</span><br>
<span class="quotelev1">&gt; wait till all the ranks have received it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
this is what i believe, double checking the standard might not hurt 
<br>
though ...
<br>
<p><span class="quotelev1">&gt; Still, in this benchmark shouldn't the max time for bcast be equal to 
</span><br>
<span class="quotelev1">&gt; that of barrier?
</span><br>
<span class="quotelev1">&gt;
</span><br>
no.
<br>
<p>First, you should find which algo are used for MPI_Barrier() and MPI_Bcast()
<br>
<p>this is based on communicator size and message length (for MPI_Bcast())
<br>
<p>keep in mind the algo choice is likely not optimized for your network, 
<br>
and is not topology aware
<br>
(e.g. it is only based on communicator size, not on tasks per node, and 
<br>
hence inter and intra node communications are considered equal).
<br>
<p><p>here is what osu_bcast is doing :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;timer=0.0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0; i &lt; options.iterations + options.skip ; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t_start = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(buffer, size, MPI_CHAR, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t_stop = MPI_Wtime();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(i&gt;=options.skip){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;timer+=t_stop-t_start;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>MPI_Bcast for short message does not take long, and since all tasks do 
<br>
not exit MPI_Barrier() at the same time, t_start is local, not global (i 
<br>
mean t_stop-t_start is already an approximation ...)
<br>
<p>if MPI_Bcast() and MPI_Barrier() are implemented with a tree-based 
<br>
algorithm, then MPI_Bcast() has to do down the tree, whereas 
<br>
MPI_Barrier() has to go down and then all the way up.
<br>
in this specific case, i would expect (once again, assuming all 
<br>
processes update t_start at the same time, which is not true) 
<br>
max(MPI_Barrier) ~= 2 * max(MPI_Bcast)
<br>
<p>i recommend you evaluate all algo for MPI_Bcast() and MPI_Barrier() and 
<br>
compare only the best ones.
<br>
<p>keep in mind the result also depends on how tasks are mapped to nodes
<br>
(e.g. tasks [0-23] on node 0, vs tasks {0,24,48, ...} on node 0)
<br>
and also how tasks are pinned within a node
<br>
(e.g. tasks [0-11] on socket 0, vs tasks {0,2,4,...} on socket 0)
<br>
also, if you are using a fat tree network, then result will also depend 
<br>
on which nodes are used
<br>
(because of the infiniband routing tables)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<span class="quotelev1">&gt; On Mon, May 30, 2016 at 9:33 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     These are very different algorithms, so performance might differ
</span><br>
<span class="quotelev1">&gt;     (greatly)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for example, MPI_Bcast on root rank can MPI_Send() and return, if
</span><br>
<span class="quotelev1">&gt;     the message is short, this is likely an eager send which is very fast.
</span><br>
<span class="quotelev1">&gt;     that means MPI_Bcast() returns before all ranks received the data,
</span><br>
<span class="quotelev1">&gt;     or even entered MPI_Bcast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On the other hand, MPI_Barrier() cannot return before all ranks
</span><br>
<span class="quotelev1">&gt;     entered the barrier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     also, you might find <a href="https://github.com/open-mpi/ompi/issues/1713">https://github.com/open-mpi/ompi/issues/1713</a>
</span><br>
<span class="quotelev1">&gt;     useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Monday, May 30, 2016, Saliya Ekanayake &lt;esaliya_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:esaliya_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I ran Ohio micro benchmarks for openmpi and noticed broadcast
</span><br>
<span class="quotelev1">&gt;         with smaller number of bytes is faster than a barrier - 2us vs
</span><br>
<span class="quotelev1">&gt;         120us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I'm trying to understand how this could happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thank you
</span><br>
<span class="quotelev1">&gt;         Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/05/29326.php">http://www.open-mpi.org/community/lists/users/2016/05/29326.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29327.php">http://www.open-mpi.org/community/lists/users/2016/05/29327.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29330/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29331.php">Jeff Hammond: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Previous message:</strong> <a href="29329.php">Gilles Gouaillardet: "Re: [OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<li><strong>In reply to:</strong> <a href="29327.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29331.php">Jeff Hammond: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Reply:</strong> <a href="29331.php">Jeff Hammond: "Re: [OMPI users] Broadcast faster than barrier"</a>
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
