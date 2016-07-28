<?
$subject_val = "Re: [OMPI users] Help with Specific Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 13 03:41:45 2015" -->
<!-- isoreceived="20150913074145" -->
<!-- sent="Sun, 13 Sep 2015 03:41:43 -0400" -->
<!-- isosent="20150913074143" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with Specific Binding" -->
<!-- id="CA+ssbKV0k3uHd8HVeTi2+fJMk=5pJ3wt_-ubasG+qkv6djHhaA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E89AE527-623F-4131-9E82-94157A797B5E_at_open-mpi.org" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-13 03:41:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27561.php">Tobias Kloeffel: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Previous message:</strong> <a href="27559.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>In reply to:</strong> <a href="27559.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27561.php">Tobias Kloeffel: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Reply:</strong> <a href="27561.php">Tobias Kloeffel: "Re: [OMPI users] Help with Specific Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried,
<br>
<p>&nbsp;--map-by ppr:12:node --slot-list 0,2,4,6,8,10,12,14,16,18,20,22 --bind-to
<br>
core -np 12
<br>
<p>but it complains,
<br>
<p>&quot;Conflicting directives for binding policy are causing the policy
<br>
to be redefined:
<br>
<p>&nbsp;&nbsp;New policy:   socket
<br>
&nbsp;&nbsp;Prior policy:  CORE
<br>
<p>Please check that only one policy is defined.
<br>
&quot;
<br>
<p>On Sun, Sep 13, 2015 at 2:57 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Try something like this instead:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#148;map-by ppr:12:node &#226;&#128;&#148;bind-to core &#226;&#128;&#148;slot-list=0,2,4,6,8,&#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You&#226;&#128;&#153;ll have to play a bit with the core numbers in the slot-list to get
</span><br>
<span class="quotelev1">&gt; the numbering right as I don&#226;&#128;&#153;t know how your machine numbers them, and I
</span><br>
<span class="quotelev1">&gt; can&#226;&#128;&#153;t guarantee it will work - but it&#226;&#128;&#153;s worth a shot. If it doesn&#226;&#128;&#153;t, then I
</span><br>
<span class="quotelev1">&gt; may have to add an option for such purposes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 12, 2015, at 7:39 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've a machine as in the following picture. I'd like to run 12 MPI procs
</span><br>
<span class="quotelev1">&gt; per node each bound to 1 core, but like shown in blue dots in the pictures.
</span><br>
<span class="quotelev1">&gt; I can use the following command to run 12 procs per node, but PE=1 makes
</span><br>
<span class="quotelev1">&gt; all the 12 processes will run in just 1 socket. PE=2 will make a process
</span><br>
<span class="quotelev1">&gt; bind to 2 cores, which is not what I want.
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
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27558.php">http://www.open-mpi.org/community/lists/users/2015/09/27558.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27559.php">http://www.open-mpi.org/community/lists/users/2015/09/27559.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27560/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27561.php">Tobias Kloeffel: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Previous message:</strong> <a href="27559.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>In reply to:</strong> <a href="27559.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27561.php">Tobias Kloeffel: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Reply:</strong> <a href="27561.php">Tobias Kloeffel: "Re: [OMPI users] Help with Specific Binding"</a>
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
