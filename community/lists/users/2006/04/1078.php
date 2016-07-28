<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 16 14:42:45 2006" -->
<!-- isoreceived="20060416184245" -->
<!-- sent="Sun, 16 Apr 2006 11:42:38 -0700" -->
<!-- isosent="20060416184238" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General Installation Question" -->
<!-- id="ACDF13D2-4C15-4DFE-AA09-8EDFA013A2A8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="33f36270604161132v10c4659cm5c0d93540ac93c9e_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-16 14:42:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1079.php">Shekhar Tyagi: "[OMPI users] Compiling C++ program"</a>
<li><strong>Previous message:</strong> <a href="1077.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<li><strong>In reply to:</strong> <a href="1077.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 16, 2006, at 11:32 AM, Sang Chul Choi wrote:
<br>
<p><span class="quotelev1">&gt; As an another similar question about installation,
</span><br>
<span class="quotelev1">&gt; I think that installation of Open MPI should be done on the
</span><br>
<span class="quotelev1">&gt; master and all slave nodes. A program which use MPI feature
</span><br>
<span class="quotelev1">&gt; also seems to have to be installed on the master and all slave nodes
</span><br>
<span class="quotelev1">&gt; unless I use NFS. My question is that:
</span><br>
<span class="quotelev1">&gt; if I used OpenPBS software rather than rsh/ssh,
</span><br>
<span class="quotelev1">&gt; is this installation problem of Open MPI and/or a MPI featured program
</span><br>
<span class="quotelev1">&gt; solved? Or, even though I used OpenPBS, need I have
</span><br>
<span class="quotelev1">&gt; each copy of my MPI-featured program installed on the master and
</span><br>
<span class="quotelev1">&gt; all the slave nodes?
</span><br>
<span class="quotelev1">&gt; My question can be about the difference between using rsh/ssh
</span><br>
<span class="quotelev1">&gt; and using OpenPBS.
</span><br>
<p>In general (and definitely for either rsh/ssh or PBS), both Open MPI  
<br>
and your application must be available on every node before  
<br>
attempting to use Open MPI.  This isn't an MPI requirement as much as  
<br>
a general systems requirement - you can't execute what doesn't exist,  
<br>
so if you're going to run your MPI application, you have to have it  
<br>
out on the compute node.  There are some systems that can auto- 
<br>
migrate your code, but in general they are for tightly coupled  
<br>
systems and not general clusters (things like the Cray XT-3's  
<br>
operating environment or the BProc system).  In general, just  
<br>
sticking the application in NFS is the easiest approach.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1079.php">Shekhar Tyagi: "[OMPI users] Compiling C++ program"</a>
<li><strong>Previous message:</strong> <a href="1077.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<li><strong>In reply to:</strong> <a href="1077.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
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
