<?
$subject_val = "Re: [OMPI devel] segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 23:20:36 2015" -->
<!-- isoreceived="20150415032036" -->
<!-- sent="Tue, 14 Apr 2015 20:19:48 -0700" -->
<!-- isosent="20150415031948" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segmentation fault" -->
<!-- id="6D5C3591-B998-4125-898C-048EE4C131C2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAD1qWRR8TvdMC_jK_1jM5bQmnAAYYS9yspdmfuLVwe56JN4qdg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-14 23:19:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17222.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Previous message:</strong> <a href="17220.php">Ralph Castain: "[OMPI devel] Common symbols warning"</a>
<li><strong>In reply to:</strong> <a href="17219.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17223.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="17223.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m afraid I don&#226;&#128;&#153;t know much about that code, but I can try to help. Can you look at the core file from the segfault and send the backtrace?
<br>
<p><p><span class="quotelev1">&gt; On Apr 14, 2015, at 8:04 AM, Cyrille DIBAMOU MBEUYO &lt;cdibamou_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error appear on the master node, where i launch the &quot;ompi-restart&quot; command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  It is on the 1.6.5 serie
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-04-14 15:21 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; Is this on the master? Or on the 1.8 series?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 14, 2015, at 2:12 AM, Cyrille DIBAMOU MBEUYO &lt;cdibamou_at_[hidden] &lt;mailto:cdibamou_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Good morning,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In my experiences, i have shared a folder in my cluster of 4 computers.
</span><br>
<span class="quotelev2">&gt;&gt; I then run a mpi programm (which calculate the nomber pi) on 2 computers, and i checkpoint it with the ompi-checkpoint command.
</span><br>
<span class="quotelev2">&gt;&gt; For the restart, i modify the nodes file for change one computer name so that the two new computer node are different than the two older for the computing.
</span><br>
<span class="quotelev2">&gt;&gt; With the ompi-restart command (and the nodes file), when i restart the checkpointed application, i got this error message : mpirun noticed that process rank 1 with PID 1619 on node oartwo exited on signal 11 (segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I then want to kno the problem and how to solve it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope to read you.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards.
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
<span class="quotelev2">&gt;&gt; *Other Email *: cdibamou_at_[hidden] &lt;mailto:cdibamou_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17217.php">http://www.open-mpi.org/community/lists/devel/2015/04/17217.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17217.php">http://www.open-mpi.org/community/lists/devel/2015/04/17217.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17218.php">http://www.open-mpi.org/community/lists/devel/2015/04/17218.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17218.php">http://www.open-mpi.org/community/lists/devel/2015/04/17218.php</a>&gt;
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
<span class="quotelev1">&gt; *Other Email *: cdibamou_at_[hidden] &lt;mailto:cdibamou_at_[hidden]&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17219.php">http://www.open-mpi.org/community/lists/devel/2015/04/17219.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17221/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17222.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Previous message:</strong> <a href="17220.php">Ralph Castain: "[OMPI devel] Common symbols warning"</a>
<li><strong>In reply to:</strong> <a href="17219.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17223.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="17223.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] segmentation fault"</a>
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
