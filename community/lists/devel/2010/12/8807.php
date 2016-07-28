<?
$subject_val = "Re: [OMPI devel] Connect/Accept and Disconnect";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 21 09:12:44 2010" -->
<!-- isoreceived="20101221141244" -->
<!-- sent="Tue, 21 Dec 2010 07:12:35 -0700" -->
<!-- isosent="20101221141235" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Connect/Accept and Disconnect" -->
<!-- id="1403C51C-62A8-4DAF-9008-CB4068F9E3FC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D10AE9A.7080202_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Connect/Accept and Disconnect<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-21 09:12:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8808.php">Suraj Prabhakaran: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="8806.php">Suraj Prabhakaran: "[OMPI devel]  Connect/Accept and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="8806.php">Suraj Prabhakaran: "[OMPI devel]  Connect/Accept and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8808.php">Suraj Prabhakaran: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<li><strong>Reply:</strong> <a href="8808.php">Suraj Prabhakaran: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you using ompi-server for pub/sub, or just letting it default to mpirun?
<br>
<p>You might want to output the return value from lookup_name and publish_name to see if they match. If they are different, then you will definitely hang.
<br>
<p><p>On Dec 21, 2010, at 6:41 AM, Suraj Prabhakaran wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is basically a repost of my previous mail regarding problems with connect/accept and disconnect (*this is not related to spawning, parent/child*). 
</span><br>
<span class="quotelev1">&gt; I *sometimes* find processes blocking indefinitely at Connect/Accept calls or at Disconnect calls. I have an example below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process A
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Open_port(...);
</span><br>
<span class="quotelev1">&gt;     MPI_Publish_name(...);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_accept(... &amp;b_comm);  // -----&gt; (1)
</span><br>
<span class="quotelev1">&gt;     // Do something1
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_disconnect(&amp;b_comm);  // ------&gt; (2)
</span><br>
<span class="quotelev1">&gt;     // Do something2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process B
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Lookup_name(...);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_connect(... &amp;a_comm); // -----&gt; (1)
</span><br>
<span class="quotelev1">&gt;     // Do something1
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_disconnect(&amp;a_comm); // ------&gt; (2)
</span><br>
<span class="quotelev1">&gt;     // Do something2
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the above scenario, in a perfect case where A reaches (1) without any problems, *sometimes* B blocks at its (1) indefinitely. All arguments passed to both the functions are perfect.
</span><br>
<span class="quotelev1">&gt; Again, *sometimes* one of them block infinitely at (2) while the other goes on to do the something2. This could only be a problem at the application level only if the one that blocks indefinitely is always the same but it is not so. Sometimes A blocks and B is busy doing something2 or A is busy doing its something2 while B blocks. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a known issue? or am I the only person experiencing this and is clean for others who frequently use connect/accept/disconnect calls?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Suraj
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8807/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8808.php">Suraj Prabhakaran: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="8806.php">Suraj Prabhakaran: "[OMPI devel]  Connect/Accept and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="8806.php">Suraj Prabhakaran: "[OMPI devel]  Connect/Accept and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8808.php">Suraj Prabhakaran: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<li><strong>Reply:</strong> <a href="8808.php">Suraj Prabhakaran: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
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
