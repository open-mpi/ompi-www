<?
$subject_val = "Re: [OMPI users] Help with Specific Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 13 02:57:53 2015" -->
<!-- isoreceived="20150913065753" -->
<!-- sent="Sat, 12 Sep 2015 23:57:49 -0700" -->
<!-- isosent="20150913065749" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with Specific Binding" -->
<!-- id="E89AE527-623F-4131-9E82-94157A797B5E_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA+ssbKX1FTcbVpvjfS9RXWT3JoU+D89aEf0SM43MzdWaLqWoAg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help with Specific Binding<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-13 02:57:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27560.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Previous message:</strong> <a href="27558.php">Saliya Ekanayake: "[OMPI users] Help with Specific Binding"</a>
<li><strong>In reply to:</strong> <a href="27558.php">Saliya Ekanayake: "[OMPI users] Help with Specific Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27560.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Reply:</strong> <a href="27560.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try something like this instead:
<br>
<p>&#226;&#128;&#148;map-by ppr:12:node &#226;&#128;&#148;bind-to core &#226;&#128;&#148;slot-list=0,2,4,6,8,&#226;&#128;&#166;
<br>
<p>You&#226;&#128;&#153;ll have to play a bit with the core numbers in the slot-list to get the numbering right as I don&#226;&#128;&#153;t know how your machine numbers them, and I can&#226;&#128;&#153;t guarantee it will work - but it&#226;&#128;&#153;s worth a shot. If it doesn&#226;&#128;&#153;t, then I may have to add an option for such purposes
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; On Sep 12, 2015, at 7:39 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've a machine as in the following picture. I'd like to run 12 MPI procs per node each bound to 1 core, but like shown in blue dots in the pictures. I can use the following command to run 12 procs per node, but PE=1 makes all the 12 processes will run in just 1 socket. PE=2 will make a process bind to 2 cores, which is not what I want. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --map-by ppr:12:node:PE=1,SPAN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;image.png&gt;
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
<span class="quotelev1">&gt; Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a> &lt;<a href="http://saliya.org/">http://saliya.org/</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27558.php">http://www.open-mpi.org/community/lists/users/2015/09/27558.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27559/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27560.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Previous message:</strong> <a href="27558.php">Saliya Ekanayake: "[OMPI users] Help with Specific Binding"</a>
<li><strong>In reply to:</strong> <a href="27558.php">Saliya Ekanayake: "[OMPI users] Help with Specific Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27560.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Reply:</strong> <a href="27560.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
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
