<?
$subject_val = "Re: [OMPI users] valgrind slaves in singleton mode";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 16 22:05:42 2012" -->
<!-- isoreceived="20121117030542" -->
<!-- sent="Fri, 16 Nov 2012 19:05:35 -0800" -->
<!-- isosent="20121117030535" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] valgrind slaves in singleton mode" -->
<!-- id="777CBD06-1C83-4041-A3B0-BFDB00D2D012_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANjXV6_oiwLxPgXtCd-18eZ982UPVUYBCz_-YhWSQqhKBxzD=A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] valgrind slaves in singleton mode<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-16 22:05:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20734.php">Abdul Rahman Riza: "[OMPI users] The simplest paralel computation examples"</a>
<li><strong>Previous message:</strong> <a href="20732.php">Lim Jiew Meng: "[OMPI users] MPI_Irecv does not receive all sends?"</a>
<li><strong>In reply to:</strong> <a href="20731.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20736.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>Reply:</strong> <a href="20736.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, silly me. I didn't fully grok your note to see that you wanted to run valgrind on slaves generated via comm_spawn.
<br>
<p>That's a tad trickier, but not too hard to do. There actually is a &quot;fork agent&quot; you can define that will do what you want. If you do this:
<br>
<p>mpirun -mca orte_fork_agent &quot;valgrind &lt;options&gt;&quot; &lt;mpirun-options&gt; ./my_app
<br>
<p>We will execute &quot;valgrind &lt;options&gt; ./my_app&quot; whenever we start one of your processes. This includes process launched via comm_spawn.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Nov 16, 2012, at 4:38 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks very much Ralph.  Silly me I thought it might actually be some effort :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Nov 16, 2012 at 4:04 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Easiest solution: just add valgrind into the cmd line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun &lt;options&gt; valgrind &lt;valgrind-options&gt; ./my_app
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 16, 2012, at 3:37 PM, &quot;Tom Bryan (tombry)&quot; &lt;tombry_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If I want to run valgrind on my processes, what steps should be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; taken?  I'm currently more interested in running valgrind on the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; slave processes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've never done it, but have you looked at the following FAQs?
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=debugging">http://www.open-mpi.org/faq/?category=debugging</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ---Tom
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20733/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20734.php">Abdul Rahman Riza: "[OMPI users] The simplest paralel computation examples"</a>
<li><strong>Previous message:</strong> <a href="20732.php">Lim Jiew Meng: "[OMPI users] MPI_Irecv does not receive all sends?"</a>
<li><strong>In reply to:</strong> <a href="20731.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20736.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>Reply:</strong> <a href="20736.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
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
