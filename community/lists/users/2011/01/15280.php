<?
$subject_val = "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 11:34:39 2011" -->
<!-- isoreceived="20110106163439" -->
<!-- sent="Thu, 6 Jan 2011 11:34:34 -0500" -->
<!-- isosent="20110106163434" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster" -->
<!-- id="E87439CF-0EFB-4ACD-84EB-674E049FA28D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D1DDB2B.9020507_at_cern.ch" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 11:34:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15281.php">Andrew Ball: "Re: [OMPI users] IRC channel"</a>
<li><strong>Previous message:</strong> <a href="15279.php">Jeff Squyres: "Re: [OMPI users] IRC channel"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15246.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That might well be a good idea (create an MCA param for the number of send / receive CQEs).  
<br>
<p>It certainly seems that OMPI shouldn't be scaling *any* IB resource based on the number of peer processes without at least some kind of upper bound.
<br>
<p>Perhaps an IB vendor should reply here...
<br>
<p><p><p>On Dec 31, 2010, at 8:31 AM, Gilbert Grosdidier wrote:
<br>
<p><span class="quotelev1">&gt; Bonjour,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Back to this painful issue, partly because  I found a workaround,
</span><br>
<span class="quotelev1">&gt; and partly because I would like to help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  The initial post was : <a href="http://www.open-mpi.org/community/lists/users/2010/11/14843.php">http://www.open-mpi.org/community/lists/users/2010/11/14843.php</a>
</span><br>
<span class="quotelev1">&gt; where I reported about OMPI 1.4.1, but it was the same for 1.4.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I spotted the culprit to be line #274 into btl_openib.c where it was required to replace
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.qp_infos[qp].u.pp_qp.rd_rsv) * nprocs;
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.qp_infos[qp].u.pp_qp.rd_rsv) * 32;
</span><br>
<span class="quotelev1">&gt; mostly because nprocs = 4096 or 8192 in our case, which was leading to a
</span><br>
<span class="quotelev1">&gt; very huge memlock resource requirement.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Since I don't believe there is a relevant mca parameter to control this value accurately
</span><br>
<span class="quotelev1">&gt; (am I wrong ?), I would suggest to invent such switch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  It occurs to work because the number of peers for a given node (apart for rank 0) is very low,
</span><br>
<span class="quotelev1">&gt; but it is definitely useful when all-to-all communication is not required on a big cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Could someone comment on this ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  More info on request.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Thanks,      Happy New Year to you all,       G.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 29/11/2010 16:58, Gilbert Grosdidier a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Bonjour John,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks for your feedback, but my investigations so far did not help:
</span><br>
<span class="quotelev2">&gt;&gt; the memlock limit on the compute nodes are actually set to unlimited.
</span><br>
<span class="quotelev2">&gt;&gt; This most probably means that even if the btl_openib hits some memory allocation
</span><br>
<span class="quotelev2">&gt;&gt; limit, the message I got is inaccurate because the memlock resource is indeed already unlimited.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Then, the btl allocation mechanism seems to be stopped 
</span><br>
<span class="quotelev2">&gt;&gt; by the memlock resource being exhausted because the former is
</span><br>
<span class="quotelev2">&gt;&gt; attempting to create too many buffers, for example. I tried to explore this
</span><br>
<span class="quotelev2">&gt;&gt; kind of assumption by decreasing :
</span><br>
<span class="quotelev2">&gt;&gt; - btl_ofud_rd_num down to 32 or even 16
</span><br>
<span class="quotelev2">&gt;&gt; - btl_openib_cq_size down to 256 or even 64
</span><br>
<span class="quotelev2">&gt;&gt; but to no avail.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  So, I am asking for help about which other parameter could lead to (locked ?) memory exhaustion,
</span><br>
<span class="quotelev2">&gt;&gt; knowing that the current memlock wall shows up 
</span><br>
<span class="quotelev2">&gt;&gt; - when I run with 4096 or 8192 cores (for 2048, that's fine)
</span><br>
<span class="quotelev2">&gt;&gt; - there are 4GB of RAM available for each core
</span><br>
<span class="quotelev2">&gt;&gt; - each core is communicating with no more than 8 neighbours, and they
</span><br>
<span class="quotelev2">&gt;&gt; stay the same along the whole job life.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Does this triggers some idea for anyone ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks in advance,           Best,    Gilbert.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 20 nov. 10 &#224; 19:27, John Hearns a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 20 November 2010 16:31, Gilbert Grosdidier 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bonjour,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bonjour Gilbert.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I manage ICE clusters also.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please could you have look at /etc/init.d/pbs on the compute blades?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if [ &quot;${PBS_START_MOM}&quot; -gt 0 ] ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if check_prog &quot;mom&quot; ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        echo &quot;PBS mom already running.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        check_maxsys
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        site_mom_startup
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        if [ -f /etc/sgi-release -o -f /etc/sgi-compute-node-release ] ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MEMLOCKLIM=`ulimit -l`
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            NOFILESLIM=`ulimit -n`
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            STACKLIM=`ulimit -s`
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            ulimit -l unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            ulimit -n 16384
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            ulimit -s unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Cordialement,   Gilbert.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; *---------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;   Gilbert Grosdidier             
</span><br>
<span class="quotelev1">&gt; Gilbert.Grosdidier_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
</span><br>
<span class="quotelev1">&gt;   Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
</span><br>
<span class="quotelev1">&gt;   B.P. 34, F-91898 Orsay Cedex (FRANCE)
</span><br>
<span class="quotelev1">&gt; *---------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15281.php">Andrew Ball: "Re: [OMPI users] IRC channel"</a>
<li><strong>Previous message:</strong> <a href="15279.php">Jeff Squyres: "Re: [OMPI users] IRC channel"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15246.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
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
