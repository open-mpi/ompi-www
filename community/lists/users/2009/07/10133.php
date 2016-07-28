<?
$subject_val = "Re: [OMPI users] Test works with 3 computers, but not 4?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 16:16:00 2009" -->
<!-- isoreceived="20090729201600" -->
<!-- sent="Wed, 29 Jul 2009 14:15:45 -0600" -->
<!-- isosent="20090729201545" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test works with 3 computers, but not 4?" -->
<!-- id="DE465342-D75B-4278-AC6E-527C8BF333D7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c19fcadc0907291306y13a7cd7aqa04f3946cb1985b5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Test works with 3 computers, but not 4?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 16:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10134.php">Nifty Tom Mitchell: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10132.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10132.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10135.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10135.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using direct can cause scaling issues as every process will open a  
<br>
socket to every other process in the job. You would at least have to  
<br>
ensure you have enough file descriptors available on every node.
<br>
<p>The most likely cause is either (a) a different OMPI version getting  
<br>
picked up on one of the nodes, or (b) something blocking communication  
<br>
between at least one of your other nodes. I would suspect the latter -  
<br>
perhaps a firewall or something?
<br>
<p>I''m disturbed by your not seeing any error output - that seems  
<br>
strange. Try adding --debug-daemons to the cmd line. That should  
<br>
definitely generate output from every daemon (at the least, they  
<br>
report they are alive).
<br>
<p>Ralph
<br>
<p>On Jul 29, 2009, at 2:06 PM, David Doria wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Jul 29, 2009 at 3:42 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; It sounds like perhaps IOF messages aren't getting relayed along the  
</span><br>
<span class="quotelev1">&gt; daemons. Note that the daemon on each node does have to be able to  
</span><br>
<span class="quotelev1">&gt; send TCP messages to all other nodes, not just mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Couple of things you can do to check:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. -mca routed direct - this will send all messages direct instead  
</span><br>
<span class="quotelev1">&gt; of across the daemons
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. --leave-session-attached - will allow you to see any errors  
</span><br>
<span class="quotelev1">&gt; reported by the daemons, including those from attempting to relay  
</span><br>
<span class="quotelev1">&gt; messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph, thanks for the quick response.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With
</span><br>
<span class="quotelev1">&gt; -mca routed direct
</span><br>
<span class="quotelev1">&gt; it works correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With this:
</span><br>
<span class="quotelev1">&gt; mpirun -H 10.1.2.126,10.1.2.122,10.1.2.123,10.1.2.125 --leave- 
</span><br>
<span class="quotelev1">&gt; session-attached -np 4 /home/doriad/MPITest/hello-mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still get no output nor errors from the daemons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a downside to using 'mca routed direct'? Or should I fix  
</span><br>
<span class="quotelev1">&gt; whatever is causing this daemon issue? You have any other tests for  
</span><br>
<span class="quotelev1">&gt; me to try to see what's wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10134.php">Nifty Tom Mitchell: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10132.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10132.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10135.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10135.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
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
