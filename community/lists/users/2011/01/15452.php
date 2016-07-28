<?
$subject_val = "Re: [OMPI users] maximising bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 30 14:27:01 2011" -->
<!-- isoreceived="20110130192701" -->
<!-- sent="Sun, 30 Jan 2011 11:26:35 -0800" -->
<!-- isosent="20110130192635" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] maximising bandwidth" -->
<!-- id="AANLkTinmDQD9a+qGurjGhk2wqKifChX4mR+UH0e+s=HP_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D45B780.2060509_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] maximising bandwidth<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-30 14:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15453.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Previous message:</strong> <a href="15451.php">Toon Knapen: "[OMPI users] maximising bandwidth"</a>
<li><strong>In reply to:</strong> <a href="15451.php">Toon Knapen: "[OMPI users] maximising bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15453.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Reply:</strong> <a href="15453.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Reply:</strong> <a href="15455.php">Eugene Loh: "Re: [OMPI users] maximising bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Blocking send/recv, as the name suggest, stop processing your master and
<br>
slave code until the data is received on the slave side.
<br>
<p>Nonblocking send/recv wouldn't stop, instead you must check the status on
<br>
the slave side to see if data has been sent.  Nonblocking is faster on the
<br>
master side because the master doesn't need to wait for the slave to receive
<br>
the data to continue.
<br>
<p>So when you say you want your master to send &quot;as fast as possible&quot;, I
<br>
suppose you meant get back to running your code as soon as possible.  In
<br>
that case you would want nonblocking.  However when you say you want the
<br>
slaves to receive data faster, it seems you're implying the actual data
<br>
transmission across the network.  I believe the data transmission speed is
<br>
not dependent on whether the it is blocking or nonblocking.
<br>
<p>On Sun, Jan 30, 2011 at 11:09 AM, Toon Knapen &lt;toon.knapen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I have a master-process that needs to send a chunk of (different) data
</span><br>
<span class="quotelev1">&gt; to each of my N slave processes as fast as possible, would I receive the
</span><br>
<span class="quotelev1">&gt; chunk in each of the slaves faster if the master would launch N threads each
</span><br>
<span class="quotelev1">&gt; doing a blocking send or would it be better to launch N nonblocking sends in
</span><br>
<span class="quotelev1">&gt; the master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm currently using OpenMPI on ethernet but might the approach be different
</span><br>
<span class="quotelev1">&gt; with different types of networks ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; toon
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
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15452/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15453.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Previous message:</strong> <a href="15451.php">Toon Knapen: "[OMPI users] maximising bandwidth"</a>
<li><strong>In reply to:</strong> <a href="15451.php">Toon Knapen: "[OMPI users] maximising bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15453.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Reply:</strong> <a href="15453.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Reply:</strong> <a href="15455.php">Eugene Loh: "Re: [OMPI users] maximising bandwidth"</a>
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
