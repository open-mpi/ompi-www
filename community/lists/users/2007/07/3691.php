<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 13:22:13 2007" -->
<!-- isoreceived="20070717172213" -->
<!-- sent="Tue, 17 Jul 2007 13:21:52 -0400" -->
<!-- isosent="20070717172152" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hanging followup" -->
<!-- id="0E1E6FE7-4102-4525-988B-E581FEA8A96B_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="745657.69927.qm_at_web57611.mail.re1.yahoo.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 13:21:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3692.php">G.O.: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3690.php">Bill Johnstone: "[OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3690.php">Bill Johnstone: "[OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3692.php">G.O.: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can start by adding --debug-daemons and --debug to your mpirun  
<br>
command line. This will generate a lot of output related to the  
<br>
operations done internally by the launcher. If you send this output  
<br>
to the list we might be able to help you a little bit more.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 17, 2007, at 1:12 PM, Bill Johnstone wrote:
<br>
<p><span class="quotelev1">&gt; Hello all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could really use help trying to figure out why mpirun is hanging as
</span><br>
<span class="quotelev1">&gt; detailed in my previous message yesterday, 16 July.  Since there's  
</span><br>
<span class="quotelev1">&gt; been
</span><br>
<span class="quotelev1">&gt; no response, please allow me to give a short summary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Open MPI 1.2.3 on GNU/Linux, 2.6.21 kernel, gcc 4.1.2, bash 3.2.15 is
</span><br>
<span class="quotelev1">&gt; default shell
</span><br>
<span class="quotelev1">&gt; -Open MPI installed to /usr/local, which is in non-interactive session
</span><br>
<span class="quotelev1">&gt; path
</span><br>
<span class="quotelev1">&gt; -Systems are AMD64, using ethernet as interconnect, on private IP
</span><br>
<span class="quotelev1">&gt; network
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun hangs whenever I invoke any process running on a remote node.
</span><br>
<span class="quotelev1">&gt; It runs a job fine if I invoke it so that it only runs on the local
</span><br>
<span class="quotelev1">&gt; node.  Ctrl+C never successfully cancels an mpirun job -- I have to  
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev1">&gt; kill -9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm asking for help trying to figure what steps have been taken by
</span><br>
<span class="quotelev1">&gt; mpirun, and how I can figure out where things are getting stuck /
</span><br>
<span class="quotelev1">&gt; crashing.  What could be happening on the remote nodes?  What  
</span><br>
<span class="quotelev1">&gt; debugging
</span><br>
<span class="quotelev1">&gt; steps can I take?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without MPI running, the cluster is of no use, so I would really
</span><br>
<span class="quotelev1">&gt; appreciate some help here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________ 
</span><br>
<span class="quotelev1">&gt; ______________
</span><br>
<span class="quotelev1">&gt; Need Mail bonding?
</span><br>
<span class="quotelev1">&gt; Go to the Yahoo! Mail Q&amp;A for great tips from Yahoo! Answers users.
</span><br>
<span class="quotelev1">&gt; <a href="http://answers.yahoo.com/dir/?link=list&amp;sid=396546091">http://answers.yahoo.com/dir/?link=list&amp;sid=396546091</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3692.php">G.O.: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3690.php">Bill Johnstone: "[OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3690.php">Bill Johnstone: "[OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3692.php">G.O.: "Re: [OMPI users] mpirun hanging followup"</a>
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
