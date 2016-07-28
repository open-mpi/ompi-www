<?
$subject_val = "Re: [OMPI devel] segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 07:15:37 2015" -->
<!-- isoreceived="20150415111537" -->
<!-- sent="Wed, 15 Apr 2015 12:15:36 +0100" -->
<!-- isosent="20150415111536" -->
<!-- name="Cyrille DIBAMOU MBEUYO" -->
<!-- email="cdibamou_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segmentation fault" -->
<!-- id="CAD1qWRR8eiTf8NTETFmMJP_PyDeOiQdLR_zdxgbXxhpLt0tTmg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6D5C3591-B998-4125-898C-048EE4C131C2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] segmentation fault<br>
<strong>From:</strong> Cyrille DIBAMOU MBEUYO (<em>cdibamou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-15 07:15:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17224.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<li><strong>Previous message:</strong> <a href="17222.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>In reply to:</strong> <a href="17221.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK,
<br>
Thank you for your help.
<br>
<p>I'll will do it.
<br>
<p>But, is it still possible to restart a mpi program previously checkpoint,
<br>
on another different nodes ?
<br>
<p>And also, i don't know how to look at the core file from segfault to send
<br>
you the backtrace. If you can guide me.
<br>
<p>Thank you.
<br>
<p>Hope to read you.
<br>
<p>Best regards.
<br>
<p>2015-04-15 4:19 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; I&#226;&#128;&#153;m afraid I don&#226;&#128;&#153;t know much about that code, but I can try to help. Can
</span><br>
<span class="quotelev1">&gt; you look at the core file from the segfault and send the backtrace?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2015, at 8:04 AM, Cyrille DIBAMOU MBEUYO &lt;cdibamou_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error appear on the master node, where i launch the &quot;ompi-restart&quot;
</span><br>
<span class="quotelev1">&gt; command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  It is on the 1.6.5 serie
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-04-14 15:21 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this on the master? Or on the 1.8 series?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 14, 2015, at 2:12 AM, Cyrille DIBAMOU MBEUYO &lt;cdibamou_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Good morning,*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my experiences, i have shared a folder in my cluster of 4 computers.
</span><br>
<span class="quotelev2">&gt;&gt; I then run a mpi programm (which calculate the nomber pi) on 2 computers,
</span><br>
<span class="quotelev2">&gt;&gt; and i checkpoint it with the ompi-checkpoint command.
</span><br>
<span class="quotelev2">&gt;&gt; For the restart, i modify the nodes file for change one computer name so
</span><br>
<span class="quotelev2">&gt;&gt; that the two new computer node are different than the two older for the
</span><br>
<span class="quotelev2">&gt;&gt; computing.
</span><br>
<span class="quotelev2">&gt;&gt; With the ompi-restart command (and the nodes file), when i restart the
</span><br>
<span class="quotelev2">&gt;&gt; checkpointed application, i got this error message : *mpirun noticed
</span><br>
<span class="quotelev2">&gt;&gt; that process rank 1 with PID 1619 on node oartwo exited on signal 11
</span><br>
<span class="quotelev2">&gt;&gt; (segmentation fault).*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I then want to kno the problem and how to solve it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Thank you*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Hope to read you.*
</span><br>
<span class="quotelev2">&gt;&gt; *Best regards.*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; DIBAMOU MBEUYO Cyrille
</span><br>
<span class="quotelev2">&gt;&gt; Computer Engineer, M.Sc.
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Student in Computer Science
</span><br>
<span class="quotelev2">&gt;&gt; *Mobile* : (+237) 696 608 826 / 674 979 502
</span><br>
<span class="quotelev2">&gt;&gt; The University Of Ngaoundere,  CAMEROUN
</span><br>
<span class="quotelev2">&gt;&gt; *Other Email *: cdibamou_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17217.php">http://www.open-mpi.org/community/lists/devel/2015/04/17217.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17218.php">http://www.open-mpi.org/community/lists/devel/2015/04/17218.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; DIBAMOU MBEUYO Cyrille
</span><br>
<span class="quotelev1">&gt; Computer Engineer, M.Sc.
</span><br>
<span class="quotelev1">&gt; Ph.D. Student in Computer Science
</span><br>
<span class="quotelev1">&gt; *Mobile* : (+237) 696 608 826 / 674 979 502
</span><br>
<span class="quotelev1">&gt; The University Of Ngaoundere,  CAMEROUN
</span><br>
<span class="quotelev1">&gt; *Other Email *: cdibamou_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17219.php">http://www.open-mpi.org/community/lists/devel/2015/04/17219.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17221.php">http://www.open-mpi.org/community/lists/devel/2015/04/17221.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
DIBAMOU MBEUYO Cyrille
Computer Engineer, M.Sc.
Ph.D. Student in Computer Science
*Mobile* : (+237) 696 608 826 / 674 979 502
The University Of Ngaoundere,  CAMEROUN
*Other Email *: cdibamou_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17223/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17224.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<li><strong>Previous message:</strong> <a href="17222.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>In reply to:</strong> <a href="17221.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
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
