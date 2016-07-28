<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 16 14:12:16 2006" -->
<!-- isoreceived="20060416181216" -->
<!-- sent="Sun, 16 Apr 2006 11:12:09 -0700" -->
<!-- isosent="20060416181209" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General Installation Question" -->
<!-- id="F1E5F654-F5B5-49D9-B1FC-550424F0FD2F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="33f36270604160818re18b38dtd223a491ef616776_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-04-16 14:12:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1075.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Previous message:</strong> <a href="1073.php">Sang Chul Choi: "[OMPI users] General Installation Question"</a>
<li><strong>In reply to:</strong> <a href="1073.php">Sang Chul Choi: "[OMPI users] General Installation Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1075.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Reply:</strong> <a href="1075.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 16, 2006, at 8:18 AM, Sang Chul Choi wrote:
<br>
<p><span class="quotelev1">&gt; 1. I could not find any document except FAQ and mailing list
</span><br>
<span class="quotelev1">&gt; for Open MPI. Is there any user manual or something like that?
</span><br>
<span class="quotelev1">&gt; Or, the LAM MPI's manual can be used instead?
</span><br>
<p>Unfortunately, at this time, the only documentation available for  
<br>
Open MPI is the FAQ and the mailing list.  There are some fairly  
<br>
significant differences between Open MPI and LAM/MPI, so while the  
<br>
LAM/MPI manuals could be a start, there are some fairly significant  
<br>
differences.
<br>
<p><span class="quotelev1">&gt; 2. Another question is about installation.
</span><br>
<span class="quotelev1">&gt; If I want to use rsh/ssh for Open MPI, do I have to install
</span><br>
<span class="quotelev1">&gt; Open MPI on all master and slave nodes? Or, should I use
</span><br>
<span class="quotelev1">&gt; something like NSF file system so that even though I installed
</span><br>
<span class="quotelev1">&gt; Open MPI on only master node, all the other salve nodes could
</span><br>
<span class="quotelev1">&gt; see Open MPI installation in the master node?
</span><br>
<p>Like LAM/MPI, Open MPI doesn't really care on this point.  This is  
<br>
also somewhat of a religious point -- people seem to have strong  
<br>
opinions either way.  The advantage of the NFS approach is that it  
<br>
makes it trivial to keep the software installs in sync on all the  
<br>
nodes.  The advantage of the installation on local disk approach is  
<br>
that there is significantly less strain on the NFS server during  
<br>
process startup.    For development, I tend to go with the NFS  
<br>
approach, since I'm constantly updating my installation.  For large  
<br>
cluster production installs, I prefer the installation on each node  
<br>
approach.  But unless your cluster is really large (or your NFS  
<br>
server is really slow) either approach should work.
<br>
<p><span class="quotelev1">&gt; The error I have is from I wanted to run a program on two slave
</span><br>
<span class="quotelev1">&gt; nodes but shell complained that there is no orted. It is true
</span><br>
<span class="quotelev1">&gt; that there is no installation of Open MPI on each slave node.
</span><br>
<p>Yes, that is the expected error if you try to run on a node without  
<br>
an Open MPI installation.  If you ensure that a copy of Open MPI is  
<br>
installed (and in your path) on each node, your problem should go away.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
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
<li><strong>Next message:</strong> <a href="1075.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Previous message:</strong> <a href="1073.php">Sang Chul Choi: "[OMPI users] General Installation Question"</a>
<li><strong>In reply to:</strong> <a href="1073.php">Sang Chul Choi: "[OMPI users] General Installation Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1075.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Reply:</strong> <a href="1075.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
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
