<?
$subject_val = "Re: [OMPI users] Open MPI data transfer error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 08:54:27 2010" -->
<!-- isoreceived="20101105125427" -->
<!-- sent="Fri, 05 Nov 2010 08:54:22 -0400" -->
<!-- isosent="20101105125422" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI data transfer error" -->
<!-- id="4CD3FE7E.8040905_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w6179AAC79458355591BBD8CB4C0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI data transfer error<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 08:54:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14698.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14696.php">Jack Bryan: "[OMPI users] Open MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14696.php">Jack Bryan: "[OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14698.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14698.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jack Bryan wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my Open MPI program, one master sends data to 3 workers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Two workers can receive their data. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, the third  worker can not get their data. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before sending data, the master sends a head information to each worker
</span><br>
<span class="quotelev1">&gt; receiver 
</span><br>
<span class="quotelev1">&gt; so that each worker knows what the following data package is. (such as
</span><br>
<span class="quotelev1">&gt; length, package tag).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The third worker can get its head information message from master but
</span><br>
<span class="quotelev1">&gt; cannot get its correct 
</span><br>
<span class="quotelev1">&gt; data package. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It got the data that should be received by first worker, which get its
</span><br>
<span class="quotelev1">&gt; correct data. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>Jack,
<br>
<p>Providing the relevant sections of code here would be very helpful.
<br>
<p>&lt;inside joke&gt;
<br>
I would tell you to add some printf statements to your code to see what
<br>
data is stored in your variables on the master before it sends them to
<br>
each node, but Jeff Squyres and I agreed to disagree in a civil manner
<br>
on that debugging technique earlier this week, and I'd hate to re-open
<br>
those old wounds by suggesting that technique here. ;)
<br>
&lt;/inside joke&gt;
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14698.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14696.php">Jack Bryan: "[OMPI users] Open MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14696.php">Jack Bryan: "[OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14698.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14698.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
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
