<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 20:57:43 2007" -->
<!-- isoreceived="20070608005743" -->
<!-- sent="Thu, 7 Jun 2007 19:57:38 -0500" -->
<!-- isosent="20070608005738" -->
<!-- name="Michael Edwards" -->
<!-- email="miedward_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with DL POLY" -->
<!-- id="8d71b5680706071757h261e48a8o9933c3e4227ba3dd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C359F781-2CEC-45CD-A888-2BC360C3AAF1_at_vanderbilt.edu" -->
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
<strong>From:</strong> Michael Edwards (<em>miedward_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 20:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3406.php">Ben Allan: "Re: [OMPI users] Issues with DL POLY"</a>
<li><strong>Previous message:</strong> <a href="3404.php">Brock Palen: "Re: [OMPI users] Issues with DL POLY"</a>
<li><strong>In reply to:</strong> <a href="3403.php">Aaron Thompson: "[OMPI users] Issues with DL POLY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3406.php">Ben Allan: "Re: [OMPI users] Issues with DL POLY"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If your problem size is not large enough than any MPI program will
<br>
perform worse on a &quot;large number&quot; of nodes because of the overhead
<br>
involved in setting up the problem and network latency.  Sometimes
<br>
that &quot;large number&quot; is as small as two :)
<br>
<p>I am not at all familiar with DL POLY, but if you make the size of the
<br>
problem larger you should see more performance benefit because the
<br>
overhead will be small compared to the execution time.
<br>
<p>Just in general I would say to start with a problem that takes at
<br>
least a minute on one node, run it a few times to see how much the run
<br>
time varies and then try it on two nodes.  Especially if you are going
<br>
to try and scale it much past that initial two node version...
<br>
<p>On 6/7/07, Aaron Thompson &lt;aaron.p.thompson_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;         Does anyone have experience using DL POLY with OpenMPI?  I've gotten
</span><br>
<span class="quotelev1">&gt; it to compile, but when I run a simulation using mpirun with two dual-
</span><br>
<span class="quotelev1">&gt; processor machines, it runs a little *slower* than on one CPU on one
</span><br>
<span class="quotelev1">&gt; machine!  Yet the program is running two instances on each node.  Any
</span><br>
<span class="quotelev1">&gt; ideas?  The test programs included with OpenMPI show that it is
</span><br>
<span class="quotelev1">&gt; running correctly across multiple nodes.
</span><br>
<span class="quotelev1">&gt;         Sorry if this is a little off-topic, I wasn't able to find help on
</span><br>
<span class="quotelev1">&gt; the official DL POLY mailing list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aaron Thompson
</span><br>
<span class="quotelev1">&gt; Vanderbilt University
</span><br>
<span class="quotelev1">&gt; aaron.p.thompson_at_[hidden]
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3406.php">Ben Allan: "Re: [OMPI users] Issues with DL POLY"</a>
<li><strong>Previous message:</strong> <a href="3404.php">Brock Palen: "Re: [OMPI users] Issues with DL POLY"</a>
<li><strong>In reply to:</strong> <a href="3403.php">Aaron Thompson: "[OMPI users] Issues with DL POLY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3406.php">Ben Allan: "Re: [OMPI users] Issues with DL POLY"</a>
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
