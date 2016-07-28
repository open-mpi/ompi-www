<?
$subject_val = "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 25 05:15:23 2010" -->
<!-- isoreceived="20101125101523" -->
<!-- sent="Thu, 25 Nov 2010 11:15:08 +0100" -->
<!-- isosent="20101125101508" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="grodid_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster" -->
<!-- id="alpine.LRH.2.00.1011251114200.19106_at_lxplus417.cern.ch" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster" -->
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
<strong>From:</strong> Gilbert Grosdidier (<em>grodid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-25 05:15:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Previous message:</strong> <a href="14884.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14898.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<li><strong>Maybe reply:</strong> <a href="14898.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour John,
<br>
&#194;&#160;Thanks for your feedback, but my investigations so far did not help:
<br>
the memlock limit on the compute nodes are actually set to unlimited.
<br>
This most probably means that even if the btl_openib hits some memory allocation
<br>
limit, the message I got is inaccurate because the memlock resource is indeed already unlimited.
<br>
<p>&#194;&#160;Then, the btl allocation mechanism is most probably stopped&#194;&#160;
<br>
by the memlock resource being exhausted because the former is
<br>
attempting to create too many buffers, for example. I tried to explore this
<br>
kind of assumption by decreasing :
<br>
-&#194;&#160;btl_ofud_rd_num down to 32 or even 16
<br>
-&#194;&#160;btl_openib_cq_size down to 256 or even 64
<br>
but to no avail.
<br>
<p>&#194;&#160;So, I am asking for help about which other parameter could lead to (locked ?) memory exhaustion,
<br>
knowing that the current memlock wall shows up&#194;&#160;
<br>
- when I run with 4096 or 8192 cores (for 2048, that's fine)
<br>
- there are 4GB of RAM available for each core
<br>
- each core is communicating with no more than 8 neighbours, and they
<br>
stay the same along the whole job life.
<br>
<p>&#194;&#160;Does this triggers some idea for anyone ?
<br>
<p><p>&#194;&#160;Thanks in advance, &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Best, &#194;&#160; &#194;&#160;Gilbert.
<br>
<p><p>Le 20 nov. 10 &#195;&#160; 19:27, John Hearns a &#195;&#169;crit :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On 20 November 2010 16:31, Gilbert Grosdidier &lt;grodid_at_[hidden]&gt; wrote:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bonjour,
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bonjour Gilbert.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I manage ICE clusters also.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please could you have look at /etc/init.d/pbs on the compute blades?
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do you have something like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#194;&#160;&#194;&#160;&#194;&#160;if [ &quot;${PBS_START_MOM}&quot; -gt 0 ] ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;if check_prog &quot;mom&quot; ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;echo &quot;PBS mom already running.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;check_maxsys
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;site_mom_startup
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;if [ -f /etc/sgi-release -o -f /etc/sgi-compute-node-release ] ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;MEMLOCKLIM=`ulimit -l`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;NOFILESLIM=`ulimit -n`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;STACKLIM=`ulimit -s`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;ulimit -l unlimited
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;ulimit -n 16384
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;ulimit -s unlimited
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><pre>
--
*---------------------------------------------------------------------*
&#194;&#160;&#194;&#160;Gilbert Grosdidier &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Gilbert.Grosdidier_at_[hidden]
&#194;&#160;&#194;&#160;LAL / IN2P3 / CNRS &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Phone : +33 1 6446 8909
&#194;&#160;&#194;&#160;Facult&#195;&#169; des Sciences, Bat. 200 &#194;&#160; &#194;&#160; Fax &#194;&#160; : +33 1 6446 8546
&#194;&#160;&#194;&#160;B.P. 34, F-91898 Orsay Cedex (FRANCE)
*---------------------------------------------------------------------*
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Previous message:</strong> <a href="14884.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14898.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<li><strong>Maybe reply:</strong> <a href="14898.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
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
