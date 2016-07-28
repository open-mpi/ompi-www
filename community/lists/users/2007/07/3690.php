<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 13:12:46 2007" -->
<!-- isoreceived="20070717171246" -->
<!-- sent="Tue, 17 Jul 2007 10:12:42 -0700 (PDT)" -->
<!-- isosent="20070717171242" -->
<!-- name="Bill Johnstone" -->
<!-- email="beejstone3_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun hanging followup" -->
<!-- id="745657.69927.qm_at_web57611.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Bill Johnstone (<em>beejstone3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 13:12:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3691.php">George Bosilca: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3689.php">Gleb Natapov: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3691.php">George Bosilca: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3691.php">George Bosilca: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3692.php">G.O.: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3693.php">Michael Edwards: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Maybe reply:</strong> <a href="3697.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all.
<br>
<p>I could really use help trying to figure out why mpirun is hanging as
<br>
detailed in my previous message yesterday, 16 July.  Since there's been
<br>
no response, please allow me to give a short summary.
<br>
<p>-Open MPI 1.2.3 on GNU/Linux, 2.6.21 kernel, gcc 4.1.2, bash 3.2.15 is
<br>
default shell
<br>
-Open MPI installed to /usr/local, which is in non-interactive session
<br>
path
<br>
-Systems are AMD64, using ethernet as interconnect, on private IP
<br>
network
<br>
<p>mpirun hangs whenever I invoke any process running on a remote node. 
<br>
It runs a job fine if I invoke it so that it only runs on the local
<br>
node.  Ctrl+C never successfully cancels an mpirun job -- I have to use
<br>
kill -9.
<br>
<p>I'm asking for help trying to figure what steps have been taken by
<br>
mpirun, and how I can figure out where things are getting stuck /
<br>
crashing.  What could be happening on the remote nodes?  What debugging
<br>
steps can I take?
<br>
<p>Without MPI running, the cluster is of no use, so I would really
<br>
appreciate some help here.
<br>
<p><p><p>&nbsp;
<br>
____________________________________________________________________________________
<br>
Need Mail bonding?
<br>
Go to the Yahoo! Mail Q&amp;A for great tips from Yahoo! Answers users.
<br>
<a href="http://answers.yahoo.com/dir/?link=list&amp;sid=396546091">http://answers.yahoo.com/dir/?link=list&amp;sid=396546091</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3691.php">George Bosilca: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3689.php">Gleb Natapov: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3691.php">George Bosilca: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3691.php">George Bosilca: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3692.php">G.O.: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3693.php">Michael Edwards: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Maybe reply:</strong> <a href="3697.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
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
