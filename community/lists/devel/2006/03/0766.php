<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar 18 23:09:15 2006" -->
<!-- isoreceived="20060319040915" -->
<!-- sent="Sat, 18 Mar 2006 23:09:09 -0500" -->
<!-- isosent="20060319040909" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] app contexts broken on trunk?" -->
<!-- id="030AFF7B-239B-4C98-BD44-D117B7549C64_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="441CB476.4020303_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-03-18 23:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0767.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Previous message:</strong> <a href="0765.php">Ralph Castain: "Re: [OMPI devel] app contexts broken on trunk?"</a>
<li><strong>In reply to:</strong> <a href="0765.php">Ralph Castain: "Re: [OMPI devel] app contexts broken on trunk?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 18, 2006, at 8:31 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Was this running on a single machine or on multiple nodes? Reason  
</span><br>
<span class="quotelev1">&gt; I'm asking is to try and see if the problem (a) is in mpirun not  
</span><br>
<span class="quotelev1">&gt; properly parsing the command line, or (b) is in the dss pack/unpack  
</span><br>
<span class="quotelev1">&gt; routines for that data type. If everything works right on a single  
</span><br>
<span class="quotelev1">&gt; machine, then we know it must be in option (b).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think something is wrong with app contexts on the trunk. The  
</span><br>
<span class="quotelev2">&gt;&gt; example below seems to run uptime twice rather than running uptime  
</span><br>
<span class="quotelev2">&gt;&gt; then hostname as I would expect. [18:18] brbarret_at_frood:ttyp1 ~%  
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 uptime : -np 1 hostname 18:18 up 12 days, 9:27, 2  
</span><br>
<span class="quotelev2">&gt;&gt; users, load averages: 0.02 0.10 0.09 18:18 up 12 days, 9:27, 2  
</span><br>
<span class="quotelev2">&gt;&gt; users, load averages: 0.02 0.10 0.09 [18:18] brbarret_at_frood:ttyp1 ~ 
</span><br>
<span class="quotelev2">&gt;&gt; % Brian
</span><br>
<p><p>It happens regardless of where I'm trying to run processes.  In this  
<br>
case, I was on a single desktop machine with no hostfile specified.
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
<li><strong>Next message:</strong> <a href="0767.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Previous message:</strong> <a href="0765.php">Ralph Castain: "Re: [OMPI devel] app contexts broken on trunk?"</a>
<li><strong>In reply to:</strong> <a href="0765.php">Ralph Castain: "Re: [OMPI devel] app contexts broken on trunk?"</a>
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
