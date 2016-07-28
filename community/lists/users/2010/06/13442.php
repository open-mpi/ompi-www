<?
$subject_val = "Re: [OMPI users] about MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 29 21:18:10 2010" -->
<!-- isoreceived="20100630011810" -->
<!-- sent="Wed, 30 Jun 2010 09:18:05 +0800" -->
<!-- isosent="20100630011805" -->
<!-- name="&#205;&#245;&#238;&#163;" -->
<!-- email="wangraying_at_[hidden]" -->
<!-- subject="Re: [OMPI users] about MPI" -->
<!-- id="AANLkTinbBlM9ws4lrzVfs_TqDHqXXRwb626dqRRRpWDs_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="AANLkTilYcooOYAaKZ5ceHHXvwKAAHdmtac5oMIY4JdeT_at_mail.gmail.com" -->
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
<strong>From:</strong> &#205;&#245;&#238;&#163; (<em>wangraying_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-29 21:18:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13443.php">Íõî£: "Re: [OMPI users] about MPI"</a>
<li><strong>Previous message:</strong> <a href="13441.php">Price, Brian M (N-KCI): "[OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13435.php">Changsheng Jiang: "Re: [OMPI users] about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13439.php">Jeff Squyres: "Re: [OMPI users] about MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks  for the feedback.
<br>
<p>Rui
<br>
<p>2010/6/29 Changsheng Jiang &lt;jiangzuoyan_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I am a learner, too, please correct me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                      Changsheng Jiang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 29, 2010 at 15:44, &#205;&#245;&#238;&#163; &lt;wangraying_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm now learning MPI, but I'm not clear with the following questions,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1, suppose a MPI program involves several nodes, if one node dead, will
</span><br>
<span class="quotelev2">&gt;&gt; the program terminate?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; yes.  If you program killed in one node, all another nodes will note that
</span><br>
<span class="quotelev1">&gt; and abort. But if you server halt, or, you killed the parent of your
</span><br>
<span class="quotelev1">&gt; program(which luanched by mpi runtime) first, then another nodes will wait a
</span><br>
<span class="quotelev1">&gt; very long time before exit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2, Is there any possibility to extend or shrink the size of MPI
</span><br>
<span class="quotelev2">&gt;&gt; communicator size? If so, we can use spare node to replace the dead node?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I think no. the message passing model prevent you doing this. the
</span><br>
<span class="quotelev1">&gt; distributed program status depends on the dead nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance and your reply will be highly appreciated!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Rui Wang
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Rui Wang
Institute of Computing Technology, CAS,  Beijing, P.R.China
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13442/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13443.php">Íõî£: "Re: [OMPI users] about MPI"</a>
<li><strong>Previous message:</strong> <a href="13441.php">Price, Brian M (N-KCI): "[OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13435.php">Changsheng Jiang: "Re: [OMPI users] about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13439.php">Jeff Squyres: "Re: [OMPI users] about MPI"</a>
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
