<?
$subject_val = "Re: [OMPI users] sge tight integration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 20 09:04:39 2012" -->
<!-- isoreceived="20120420130439" -->
<!-- sent="Fri, 20 Apr 2012 15:04:31 +0200" -->
<!-- isosent="20120420130431" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eloi.gaudry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight integration leads to bad allocation" -->
<!-- id="zarafa.4f915edf.7273.454c31620909df83_at_mail.fft" -->
<!-- charset="utf-8" -->
<!-- inreplyto="DC928D30-E1A9-434C-8BB7-C0DB9CEBD3FC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] sge tight integration leads to bad allocation<br>
<strong>From:</strong> Eloi Gaudry (<em>eloi.gaudry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-20 09:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19058.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="19056.php">George Bosilca: "Re: [OMPI users] send/recv implementation details"</a>
<li><strong>In reply to:</strong> <a href="18996.php">Ralph Castain: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19058.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="19058.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, Reuti,

&#194;&#160;
I've just observed the same issue without specifying -np.

Please find attached the ps -elfax output from the computing nodes and some sge related information.

&#194;&#160;
Regards,

Eloi

&#194;&#160;
&#194;&#160;
&#194;&#160;
-----Original message-----
From:Ralph Castain &lt;rhc_at_[hidden]&gt;
Sent:Wed 04-11-2012 02:25 pm
Subject:Re: [OMPI users] sge tight integration leads to bad allocation
To:Open MPI Users &lt;users_at_[hidden]&gt;; 

On Apr 11, 2012, at 6:20 AM, Reuti wrote:

&gt; Am 11.04.2012 um 04:26 schrieb Ralph Castain:
&gt; 
&gt;&gt; Hi Reuti
&gt;&gt; 
&gt;&gt; Can you replicate this problem on your machine? Can you try it with 1.5?
&gt; 
&gt; No. It's also working fine in 1.5.5 in some tests. I even forced an uneven distribution by limiting the slots setting for some machines in the queue configuration.

Thanks - that confirms what I've been able to test. It sounds like it is something in Eloi's setup, but I can't fathom what it would be - the allocations all look acceptable.

I'm stumped. :-(
<br>
<p>
<p>





<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19057/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19057/job1882.log">job1882.log</a>
</ul>
<!-- attachment="job1882.log" -->
<hr>
<ul>
<li>application/x-shellscript attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19057/job1882.sh">job1882.sh</a>
</ul>
<!-- attachment="job1882.sh" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19057/pselfax.carl">pselfax.carl</a>
</ul>
<!-- attachment="pselfax.carl" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19057/pselfax.charlie">pselfax.charlie</a>
</ul>
<!-- attachment="pselfax.charlie" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19057/qstat-gt">qstat-gt</a>
</ul>
<!-- attachment="qstat-gt" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19057/qstat-j1882">qstat-j1882</a>
</ul>
<!-- attachment="qstat-j1882" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19058.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="19056.php">George Bosilca: "Re: [OMPI users] send/recv implementation details"</a>
<li><strong>In reply to:</strong> <a href="18996.php">Ralph Castain: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19058.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="19058.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
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
