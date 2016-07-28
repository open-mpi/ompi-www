<?
$subject_val = "Re: [OMPI users] valgrind slaves in singleton mode";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 17 12:42:43 2012" -->
<!-- isoreceived="20121117174243" -->
<!-- sent="Sat, 17 Nov 2012 09:42:38 -0800" -->
<!-- isosent="20121117174238" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] valgrind slaves in singleton mode" -->
<!-- id="CANjXV68_rS7EW+-KcD0Gb45AOUZoni8ckp+Tc4Bk-0kqpfiqFw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="777CBD06-1C83-4041-A3B0-BFDB00D2D012_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-17 12:42:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20737.php">George Bosilca: "Re: [OMPI users] MPI_Irecv does not receive all sends?"</a>
<li><strong>Previous message:</strong> <a href="20735.php">Ralph Castain: "Re: [OMPI users] The simplest paralel computation examples"</a>
<li><strong>In reply to:</strong> <a href="20733.php">Ralph Castain: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see.  I just made an environment variable check to run valgrind from
<br>
the spawn and it works great.  Your solution below is nice and
<br>
non-intrusive.  I'll keep it in mind for the future.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
<p>On Fri, Nov 16, 2012 at 7:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Actually, silly me. I didn't fully grok your note to see that you wanted
</span><br>
<span class="quotelev1">&gt; to run valgrind on slaves generated via comm_spawn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's a tad trickier, but not too hard to do. There actually is a &quot;fork
</span><br>
<span class="quotelev1">&gt; agent&quot; you can define that will do what you want. If you do this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca orte_fork_agent &quot;valgrind &lt;options&gt;&quot; &lt;mpirun-options&gt; ./my_app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We will execute &quot;valgrind &lt;options&gt; ./my_app&quot; whenever we start one of
</span><br>
<span class="quotelev1">&gt; your processes. This includes process launched via comm_spawn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 16, 2012, at 4:38 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much Ralph.  Silly me I thought it might actually be some
</span><br>
<span class="quotelev1">&gt; effort :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Nov 16, 2012 at 4:04 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Easiest solution: just add valgrind into the cmd line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun &lt;options&gt; valgrind &lt;valgrind-options&gt; ./my_app
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 16, 2012, at 3:37 PM, &quot;Tom Bryan (tombry)&quot; &lt;tombry_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; If I want to run valgrind on my processes, what steps should be
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; taken?  I'm currently more interested in running valgrind on the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; slave processes.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've never done it, but have you looked at the following FAQs?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=debugging">http://www.open-mpi.org/faq/?category=debugging</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ---Tom
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20736/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20737.php">George Bosilca: "Re: [OMPI users] MPI_Irecv does not receive all sends?"</a>
<li><strong>Previous message:</strong> <a href="20735.php">Ralph Castain: "Re: [OMPI users] The simplest paralel computation examples"</a>
<li><strong>In reply to:</strong> <a href="20733.php">Ralph Castain: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
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
