<?
$subject_val = "Re: [OMPI users] Detecting Node Failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 20 17:05:33 2013" -->
<!-- isoreceived="20130620210533" -->
<!-- sent="Thu, 20 Jun 2013 14:05:29 -0700 (PDT)" -->
<!-- isosent="20130620210529" -->
<!-- name="Claire Williams" -->
<!-- email="clairewilliams1994_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Detecting Node Failure" -->
<!-- id="1371762329.81495.YahooMailNeo_at_web161603.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="81E2CCEE-849C-436E-B376-C08C7DAE958F_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Detecting Node Failure<br>
<strong>From:</strong> Claire Williams (<em>clairewilliams1994_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-20 17:05:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22166.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Previous message:</strong> <a href="22164.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>In reply to:</strong> <a href="22164.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22166.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Reply:</strong> <a href="22166.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,

I'm using 1.4.3. Thanks

- Claire


________________________________
 From: Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
To: Claire Williams &lt;clairewilliams1994_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Thursday, June 20, 2013 1:59 PM
Subject: Re: [OMPI users] Detecting Node Failure
 


It should detect and abort - what version are you using?

Sent from my iPhone

On Jun 20, 2013, at 2:02 PM, Claire Williams &lt;clairewilliams1994_at_[hidden]&gt; wrote:


Hi all,
&gt;
&gt;
&gt;I was wondering if Open-MPI had any way to detect that a node has crashed, rebooted, etc. I am currently trying to integrate my MPI application with Amazon EC2 spot instances, and since spot instances can be terminated at any time, I would like to try to make it so that my application can detect this node failure, maybe remove the node from the machine file, and restart the application automatically. Right now, when one of the worker nodes is rebooted or terminated, the master that is waiting on the results of that node will just hang, waiting for results that will never come.&#160;
&gt;
&gt;
&gt;Thanks,
&gt;
&gt;
&gt;Claire &#160;
_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22165/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22166.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Previous message:</strong> <a href="22164.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>In reply to:</strong> <a href="22164.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22166.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Reply:</strong> <a href="22166.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
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
