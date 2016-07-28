<?
$subject_val = "Re: [OMPI users] Setting up Open MPI to run on multiple servers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 20:34:15 2008" -->
<!-- isoreceived="20080812003415" -->
<!-- sent="Mon, 11 Aug 2008 17:34:10 -0700" -->
<!-- isosent="20080812003410" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting up Open MPI to run on multiple servers" -->
<!-- id="48A0DA82.6010102_at_penguincomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="926582.35448.qm_at_web76805.mail.sg1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting up Open MPI to run on multiple servers<br>
<strong>From:</strong> Joshua Bernstein (<em>jbernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-11 20:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6308.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6306.php">Rayne: "[OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6306.php">Rayne: "[OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6308.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6308.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rayne wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I am trying to set up Open MPI to run on multiple servers, but as I
</span><br>
<span class="quotelev1">&gt; have very little experience in networking, I'm getting confused by the
</span><br>
<span class="quotelev1">&gt; info on open-mpi.org, with the .rhosts, rsh, ssh etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basically what I have now is a PC with Open MPI installed. I want to
</span><br>
<span class="quotelev1">&gt; connect it to, say, 10 servers, so I can run MPI programs on all 11
</span><br>
<span class="quotelev1">&gt; nodes. From what I've read, I think I need to install Open MPI on the
</span><br>
<span class="quotelev1">&gt; 10 servers too, and there must be a shared directory where I keep all
</span><br>
<span class="quotelev1">&gt; the MPI programs I've written, so all nodes can access them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I need to create a machine file on my local PC (I found a default
</span><br>
<span class="quotelev1">&gt; hostfile &quot;openmpi-default-hostfile&quot; in {prefix}/etc/. Can I use that
</span><br>
<span class="quotelev1">&gt; instead so I need not have &quot;-machinefile machine&quot; with every mpiexec?)
</span><br>
<span class="quotelev1">&gt; with the list of the 10 servers. I'm assuming I need to put down the
</span><br>
<span class="quotelev1">&gt; IP addresses of the 10 servers in this file. I've also read that the
</span><br>
<span class="quotelev1">&gt; 10 servers also need to each have a .rhosts file that tells them the
</span><br>
<span class="quotelev1">&gt; machine (i.e. my local PC) and user from which the programs may be
</span><br>
<span class="quotelev1">&gt; launched from. Is this right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is also the rsh/ssh configuration, which I find the most
</span><br>
<span class="quotelev1">&gt; confusing. How do I know whether I'm using rsh or ssh? Is following
</span><br>
<span class="quotelev1">&gt; the instructions on <a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a> under
</span><br>
<span class="quotelev1">&gt; &quot;3: How can I make ssh not ask me for a password?&quot; sufficient? Does
</span><br>
<span class="quotelev1">&gt; this mean that when I'm using the 10 servers to run the MPI program,
</span><br>
<span class="quotelev1">&gt; I'm login to them via ssh? Is this necessary in every case?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is doing all of the above all it takes to run MPI programs on all 11
</span><br>
<span class="quotelev1">&gt; nodes, or is there something else I missed?
</span><br>
<p>More or less. Though the first step is to setup password-less SSH 
<br>
between all 11 machines. I'd completely skip the use of RSH as its very 
<br>
insecure and shouldn't be used in non-dedicated cluster, and even 
<br>
then... You should basically setup SSH so a user can SSH from one node 
<br>
to another without specify a password or entering in any other information.
<br>
<p>Then, the next is to setup NFS. NFS provides you with a way to share a 
<br>
directory on one computer, to many other computers avoiding the hassel 
<br>
of having to copy all your MPI programs to all of the nodes. This is 
<br>
generally as easy as configuring /etc/exports, and then just mounting 
<br>
the directory on the other computers. Be Sure you mount the directories 
<br>
in the same place on every node though.
<br>
<p>Lastly, give your MPI programs a shot. While you don't need to have a 
<br>
hostlist, because you can specify the hostname (or IPs). on the mpirun 
<br>
command line. But you your case its likely a good idea.
<br>
<p>Hope that gets you started...
<br>
<p>-Joshua Bernstein
<br>
Software Engineer
<br>
Penguin Computing
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6308.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6306.php">Rayne: "[OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6306.php">Rayne: "[OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6308.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6308.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
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
