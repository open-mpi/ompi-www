<?
$subject_val = "[OMPI users] Setting up Open MPI to run on multiple servers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 20:25:56 2008" -->
<!-- isoreceived="20080812002556" -->
<!-- sent="Tue, 12 Aug 2008 08:25:51 +0800 (SGT)" -->
<!-- isosent="20080812002551" -->
<!-- name="Rayne" -->
<!-- email="lancer6238_at_[hidden]" -->
<!-- subject="[OMPI users] Setting up Open MPI to run on multiple servers" -->
<!-- id="926582.35448.qm_at_web76805.mail.sg1.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Setting up Open MPI to run on multiple servers<br>
<strong>From:</strong> Rayne (<em>lancer6238_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-11 20:25:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6307.php">Joshua Bernstein: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6305.php">Ralph Castain: "Re: [OMPI users] OMPI without-rte-support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6307.php">Joshua Bernstein: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6307.php">Joshua Bernstein: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I am trying to set up Open MPI to run on multiple servers, but as I
<br>
have very little experience in networking, I'm getting confused by the
<br>
info on open-mpi.org, with the .rhosts, rsh, ssh etc.
<br>
<p>Basically what I have now is a PC with Open MPI installed. I want to
<br>
connect it to, say, 10 servers, so I can run MPI programs on all 11
<br>
nodes. From what I've read, I think I need to install Open MPI on the
<br>
10 servers too, and there must be a shared directory where I keep all
<br>
the MPI programs I've written, so all nodes can access them.
<br>
<p>Then I need to create a machine file on my local PC (I found a default
<br>
hostfile &quot;openmpi-default-hostfile&quot; in {prefix}/etc/. Can I use that
<br>
instead so I need not have &quot;-machinefile machine&quot; with every mpiexec?)
<br>
with the list of the 10 servers. I'm assuming I need to put down the
<br>
IP addresses of the 10 servers in this file. I've also read that the
<br>
10 servers also need to each have a .rhosts file that tells them the
<br>
machine (i.e. my local PC) and user from which the programs may be
<br>
launched from. Is this right?
<br>
<p>There is also the rsh/ssh configuration, which I find the most
<br>
confusing. How do I know whether I'm using rsh or ssh? Is following
<br>
the instructions on <a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a> under
<br>
&quot;3: How can I make ssh not ask me for a password?&quot; sufficient? Does
<br>
this mean that when I'm using the 10 servers to run the MPI program,
<br>
I'm login to them via ssh? Is this necessary in every case?
<br>
<p>Is doing all of the above all it takes to run MPI programs on all 11
<br>
nodes, or is there something else I missed?
<br>
<p>Thank you.
<br>
<p>Regards,
<br>
Rayne 
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Find great new restaurants - Yahoo! Singapore Search.
<br>
<a href="http://sg.search.yahoo.com/search?p=restaurant+reviews&amp;cs=bz&amp;fr=fp-top">http://sg.search.yahoo.com/search?p=restaurant+reviews&amp;cs=bz&amp;fr=fp-top</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6307.php">Joshua Bernstein: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6305.php">Ralph Castain: "Re: [OMPI users] OMPI without-rte-support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6307.php">Joshua Bernstein: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6307.php">Joshua Bernstein: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
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
