<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 13 22:12:42 2006" -->
<!-- isoreceived="20060414021242" -->
<!-- sent="Thu, 13 Apr 2006 20:12:33 -0600" -->
<!-- isosent="20060414021233" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how can I tell for sure that I'm using mvapi" -->
<!-- id="FD0E4932-6937-40D4-A6DC-FAB2157C86C5_at_cs.unm.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="52B7AD4481DAB448AA2A477E44A609F202C92617_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-13 22:12:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1061.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
<li><strong>Previous message:</strong> <a href="1059.php">Borenstein, Bernard S: "[OMPI users] how can I tell for sure that I'm using mvapi"</a>
<li><strong>In reply to:</strong> <a href="1059.php">Borenstein, Bernard S: "[OMPI users] how can I tell for sure that I'm using mvapi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bernie,
<br>
<p>You may specify which BTLs to use at runtime using an mca parameter:
<br>
<p>mpirun -np 2 -mca btl self,mvapi ./my_app
<br>
<p>This specifies to only use self (loopback) and mvapi.
<br>
You may want to also use sm (shared memory) if you have multi-core or  
<br>
multi-proc.. such as:
<br>
<p>mpirun -np 2 -mca btl self,sm,mvapi ./my_app
<br>
<p>This is also in the FAQ:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning#selecting-components">http://www.open-mpi.org/faq/?category=tuning#selecting-components</a>
<br>
<p><p>And for mvapi/openib performance considerations:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=infiniband#ib-leave-pinned">http://www.open-mpi.org/faq/?category=infiniband#ib-leave-pinned</a>
<br>
<p><p>Thanks,
<br>
<p>Galen
<br>
<p><p>On Apr 13, 2006, at 7:56 PM, Borenstein, Bernard S wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;m running on a cluster with mvapi.  I built with mvapi and it  
</span><br>
<span class="quotelev1">&gt; runs, but I want to make absolutely sure that I&#146;m using the IB  
</span><br>
<span class="quotelev1">&gt; interconnect
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and nothing else.  How can I tell specifically what interconnect  
</span><br>
<span class="quotelev1">&gt; I&#146;m using when I run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bernie Borenstein
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Boeing Company
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1060/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1061.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
<li><strong>Previous message:</strong> <a href="1059.php">Borenstein, Bernard S: "[OMPI users] how can I tell for sure that I'm using mvapi"</a>
<li><strong>In reply to:</strong> <a href="1059.php">Borenstein, Bernard S: "[OMPI users] how can I tell for sure that I'm using mvapi"</a>
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
