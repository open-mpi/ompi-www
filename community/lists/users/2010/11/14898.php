<?
$subject_val = "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 10:58:39 2010" -->
<!-- isoreceived="20101129155839" -->
<!-- sent="Mon, 29 Nov 2010 16:58:32 +0100" -->
<!-- isosent="20101129155832" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster" -->
<!-- id="4CF3CDA8.5060405_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="42718902-387C-43E0-B33E-5D2B7D21C1CC_at_cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster<br>
<strong>From:</strong> Gilbert Grosdidier (<em>Gilbert.Grosdidier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 10:58:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14899.php">Jeff Squyres: "Re: [OMPI users] MPI-IO Lustre driver update?"</a>
<li><strong>Previous message:</strong> <a href="14897.php">Gilbert Grosdidier: "Re: [OMPI users] mpool_sm_max_size disappeared ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="14885.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15246.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15246.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour John,
<br>
<p>&nbsp;&nbsp;Thanks for your feedback, but my investigations so far did not help:
<br>
the memlock limit on the compute nodes are actually set to unlimited.
<br>
This most probably means that even if the btl_openib hits some memory 
<br>
allocation
<br>
limit, the message I got is inaccurate because the memlock resource is 
<br>
indeed already unlimited.
<br>
<p>&nbsp;&nbsp;Then, the btl allocation mechanism seems to be stopped
<br>
by the memlock resource being exhausted because the former is
<br>
attempting to create too many buffers, for example. I tried to explore this
<br>
kind of assumption by decreasing :
<br>
- btl_ofud_rd_num down to 32 or even 16
<br>
- btl_openib_cq_size down to 256 or even 64
<br>
but to no avail.
<br>
<p>&nbsp;&nbsp;So, I am asking for help about which other parameter could lead to 
<br>
(locked ?) memory exhaustion,
<br>
knowing that the current memlock wall shows up
<br>
- when I run with 4096 or 8192 cores (for 2048, that's fine)
<br>
- there are 4GB of RAM available for each core
<br>
- each core is communicating with no more than 8 neighbours, and they
<br>
stay the same along the whole job life.
<br>
<p>&nbsp;&nbsp;Does this triggers some idea for anyone ?
<br>
<p><p>&nbsp;&nbsp;Thanks in advance,           Best,    Gilbert.
<br>
<p><p>Le 20 nov. 10 &#224; 19:27, John Hearns a &#233;crit :
<br>
<p><span class="quotelev1">&gt; On 20 November 2010 16:31, Gilbert Grosdidier
</span><br>
<span class="quotelev2">&gt;&gt; Bonjour,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bonjour Gilbert.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I manage ICE clusters also.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please could you have look at /etc/init.d/pbs on the compute blades?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if [ &quot;${PBS_START_MOM}&quot; -gt 0 ] ; then
</span><br>
<span class="quotelev1">&gt;      if check_prog &quot;mom&quot; ; then
</span><br>
<span class="quotelev1">&gt;        echo &quot;PBS mom already running.&quot;
</span><br>
<span class="quotelev1">&gt;      else
</span><br>
<span class="quotelev1">&gt;        check_maxsys
</span><br>
<span class="quotelev1">&gt;        site_mom_startup
</span><br>
<span class="quotelev1">&gt;        if [ -f /etc/sgi-release -o -f /etc/sgi-compute-node-release ] 
</span><br>
<span class="quotelev1">&gt; ; then
</span><br>
<span class="quotelev1">&gt;            MEMLOCKLIM=`ulimit -l`
</span><br>
<span class="quotelev1">&gt;            NOFILESLIM=`ulimit -n`
</span><br>
<span class="quotelev1">&gt;            STACKLIM=`ulimit -s`
</span><br>
<span class="quotelev1">&gt;            ulimit -l unlimited
</span><br>
<span class="quotelev1">&gt;            ulimit -n 16384
</span><br>
<span class="quotelev1">&gt;            ulimit -s unlimited
</span><br>
<span class="quotelev1">&gt;        fi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14898/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14899.php">Jeff Squyres: "Re: [OMPI users] MPI-IO Lustre driver update?"</a>
<li><strong>Previous message:</strong> <a href="14897.php">Gilbert Grosdidier: "Re: [OMPI users] mpool_sm_max_size disappeared ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="14885.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15246.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15246.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
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
