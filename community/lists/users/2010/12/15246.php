<?
$subject_val = "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 31 08:31:38 2010" -->
<!-- isoreceived="20101231133138" -->
<!-- sent="Fri, 31 Dec 2010 14:31:23 +0100" -->
<!-- isosent="20101231133123" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster" -->
<!-- id="4D1DDB2B.9020507_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CF3CDA8.5060405_at_cern.ch" -->
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
<strong>Date:</strong> 2010-12-31 08:31:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15247.php">„€ •’‹: "[OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<li><strong>Previous message:</strong> <a href="15245.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14898.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15280.php">Jeff Squyres: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15280.php">Jeff Squyres: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour,
<br>
<p>&nbsp;&nbsp;Back to this painful issue, partly because  I found a workaround,
<br>
and partly because I would like to help.
<br>
<p>&nbsp;&nbsp;The initial post was : 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/11/14843.php">http://www.open-mpi.org/community/lists/users/2010/11/14843.php</a>
<br>
where I reported about OMPI 1.4.1, but it was the same for 1.4.3.
<br>
<p>&nbsp;&nbsp;I spotted the culprit to be line *#274* into btl_openib.c where it was 
<br>
required to replace
<br>
*mca_btl_openib_component.qp_infos[qp].u.pp_qp.rd_rsv) * nprocs;*
<br>
with
<br>
*mca_btl_openib_component.qp_infos[qp].u.pp_qp.rd_rsv) * 32;*
<br>
mostly because nprocs = 4096 or 8192 in our case, which was leading to a
<br>
very huge memlock resource requirement.
<br>
<p>&nbsp;&nbsp;Since I don't believe there is a relevant mca parameter to control 
<br>
this value accurately
<br>
(am I wrong ?), I would suggest to invent such switch.
<br>
<p>&nbsp;&nbsp;It occurs to work because the number of peers for a given node (apart 
<br>
for rank 0) is very low,
<br>
but it is definitely useful when all-to-all communication is not 
<br>
required on a big cluster.
<br>
<p>&nbsp;&nbsp;Could someone comment on this ?
<br>
<p>&nbsp;&nbsp;More info on request.
<br>
<p>&nbsp;&nbsp;Thanks,      Happy New Year to you all,       G.
<br>
<p><p><p>Le 29/11/2010 16:58, Gilbert Grosdidier a &#233;crit :
<br>
<span class="quotelev1">&gt; Bonjour John,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks for your feedback, but my investigations so far did not help:
</span><br>
<span class="quotelev1">&gt; the memlock limit on the compute nodes are actually set to unlimited.
</span><br>
<span class="quotelev1">&gt; This most probably means that even if the btl_openib hits some memory 
</span><br>
<span class="quotelev1">&gt; allocation
</span><br>
<span class="quotelev1">&gt; limit, the message I got is inaccurate because the memlock resource is 
</span><br>
<span class="quotelev1">&gt; indeed already unlimited.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Then, the btl allocation mechanism seems to be stopped
</span><br>
<span class="quotelev1">&gt; by the memlock resource being exhausted because the former is
</span><br>
<span class="quotelev1">&gt; attempting to create too many buffers, for example. I tried to explore 
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; kind of assumption by decreasing :
</span><br>
<span class="quotelev1">&gt; - btl_ofud_rd_num down to 32 or even 16
</span><br>
<span class="quotelev1">&gt; - btl_openib_cq_size down to 256 or even 64
</span><br>
<span class="quotelev1">&gt; but to no avail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  So, I am asking for help about which other parameter could lead to 
</span><br>
<span class="quotelev1">&gt; (locked ?) memory exhaustion,
</span><br>
<span class="quotelev1">&gt; knowing that the current memlock wall shows up
</span><br>
<span class="quotelev1">&gt; - when I run with 4096 or 8192 cores (for 2048, that's fine)
</span><br>
<span class="quotelev1">&gt; - there are 4GB of RAM available for each core
</span><br>
<span class="quotelev1">&gt; - each core is communicating with no more than 8 neighbours, and they
</span><br>
<span class="quotelev1">&gt; stay the same along the whole job life.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Does this triggers some idea for anyone ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks in advance,           Best,    Gilbert.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 20 nov. 10 &#224; 19:27, John Hearns a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 20 November 2010 16:31, Gilbert Grosdidier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bonjour,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bonjour Gilbert.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I manage ICE clusters also.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please could you have look at /etc/init.d/pbs on the compute blades?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you have something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if [ &quot;${PBS_START_MOM}&quot; -gt 0 ] ; then
</span><br>
<span class="quotelev2">&gt;&gt;      if check_prog &quot;mom&quot; ; then
</span><br>
<span class="quotelev2">&gt;&gt;        echo &quot;PBS mom already running.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;      else
</span><br>
<span class="quotelev2">&gt;&gt;        check_maxsys
</span><br>
<span class="quotelev2">&gt;&gt;        site_mom_startup
</span><br>
<span class="quotelev2">&gt;&gt;        if [ -f /etc/sgi-release -o -f /etc/sgi-compute-node-release ] 
</span><br>
<span class="quotelev2">&gt;&gt; ; then
</span><br>
<span class="quotelev2">&gt;&gt;            MEMLOCKLIM=`ulimit -l`
</span><br>
<span class="quotelev2">&gt;&gt;            NOFILESLIM=`ulimit -n`
</span><br>
<span class="quotelev2">&gt;&gt;            STACKLIM=`ulimit -s`
</span><br>
<span class="quotelev2">&gt;&gt;            ulimit -l unlimited
</span><br>
<span class="quotelev2">&gt;&gt;            ulimit -n 16384
</span><br>
<span class="quotelev2">&gt;&gt;            ulimit -s unlimited
</span><br>
<span class="quotelev2">&gt;&gt;        fi
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><pre>
-- 
  Cordialement,   Gilbert.
--
*---------------------------------------------------------------------*
   Gilbert Grosdidier             Gilbert.Grosdidier_at_[hidden]
   LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
   Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
   B.P. 34, F-91898 Orsay Cedex (FRANCE)
*---------------------------------------------------------------------*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15246/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15247.php">„€ •’‹: "[OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<li><strong>Previous message:</strong> <a href="15245.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14898.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15280.php">Jeff Squyres: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15280.php">Jeff Squyres: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
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
