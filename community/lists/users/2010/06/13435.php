<?
$subject_val = "Re: [OMPI users] about MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 29 04:00:32 2010" -->
<!-- isoreceived="20100629080032" -->
<!-- sent="Tue, 29 Jun 2010 16:00:07 +0800" -->
<!-- isosent="20100629080007" -->
<!-- name="Changsheng Jiang" -->
<!-- email="jiangzuoyan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] about MPI" -->
<!-- id="AANLkTilYcooOYAaKZ5ceHHXvwKAAHdmtac5oMIY4JdeT_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTilq_fqTdFEs_E-t1PePClsn1BrZGxhb9NZsQfHJ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] about MPI<br>
<strong>From:</strong> Changsheng Jiang (<em>jiangzuoyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-29 04:00:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13436.php">Paul Hilscher: "[OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Previous message:</strong> <a href="13434.php">&#205;&#245;&#238;&#163;: "[OMPI users] about MPI"</a>
<li><strong>In reply to:</strong> <a href="13434.php">&#205;&#245;&#238;&#163;: "[OMPI users] about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13442.php">王睿: "Re: [OMPI users] about MPI"</a>
<li><strong>Reply:</strong> <a href="13442.php">王睿: "Re: [OMPI users] about MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am a learner, too, please correct me.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Changsheng Jiang
<br>
<p><p>On Tue, Jun 29, 2010 at 15:44, &#231;&#142;&#139;&#231;&#157;&#191; &lt;wangraying_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm now learning MPI, but I'm not clear with the following questions,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1, suppose a MPI program involves several nodes, if one node dead, will the
</span><br>
<span class="quotelev1">&gt; program terminate?
</span><br>
<span class="quotelev1">&gt;
</span><br>
yes.  If you program killed in one node, all another nodes will note that
<br>
and abort. But if you server halt, or, you killed the parent of your
<br>
program(which luanched by mpi runtime) first, then another nodes will wait a
<br>
very long time before exit.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2, Is there any possibility to extend or shrink the size of MPI
</span><br>
<span class="quotelev1">&gt; communicator size? If so, we can use spare node to replace the dead node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
I think no. the message passing model prevent you doing this. the
<br>
distributed program status depends on the dead nodes.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance and your reply will be highly appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Rui Wang
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13435/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13436.php">Paul Hilscher: "[OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Previous message:</strong> <a href="13434.php">&#205;&#245;&#238;&#163;: "[OMPI users] about MPI"</a>
<li><strong>In reply to:</strong> <a href="13434.php">&#205;&#245;&#238;&#163;: "[OMPI users] about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13442.php">王睿: "Re: [OMPI users] about MPI"</a>
<li><strong>Reply:</strong> <a href="13442.php">王睿: "Re: [OMPI users] about MPI"</a>
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
