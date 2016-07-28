<?
$subject_val = "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 20 13:27:39 2010" -->
<!-- isoreceived="20101120182739" -->
<!-- sent="Sat, 20 Nov 2010 18:27:34 +0000" -->
<!-- isosent="20101120182734" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)" -->
<!-- id="AANLkTim9Yt2d48OgHSYO+XuuJ97JQkcYPeq0LqvwiRUx_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.LRH.2.00.1011201730330.7327_at_lxplus234.cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-20 13:27:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14848.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14846.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>In reply to:</strong> <a href="14843.php">Gilbert Grosdidier: "[OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 20 November 2010 16:31, Gilbert Grosdidier &lt;grodid_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Bonjour,
</span><br>
<p>Bonjour Gilbert.
<br>
<p>I manage ICE clusters also.
<br>
<p>Please could you have look at /etc/init.d/pbs on the compute blades?
<br>
<p><p><p>Do you have something like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if [ &quot;${PBS_START_MOM}&quot; -gt 0 ] ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if check_prog &quot;mom&quot; ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;PBS mom already running.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check_maxsys
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;site_mom_startup
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if [ -f /etc/sgi-release -o -f /etc/sgi-compute-node-release ] ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MEMLOCKLIM=`ulimit -l`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOFILESLIM=`ulimit -n`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STACKLIM=`ulimit -s`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ulimit -l unlimited
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ulimit -n 16384
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ulimit -s unlimited
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14848.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14846.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>In reply to:</strong> <a href="14843.php">Gilbert Grosdidier: "[OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)"</a>
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
