<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 10:00:30 2006" -->
<!-- isoreceived="20060704140030" -->
<!-- sent="Tue, 4 Jul 2006 08:00:01 -0600" -->
<!-- isosent="20060704140001" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation problem" -->
<!-- id="950E1735-324B-4C51-A5B6-7D05B413CC37_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C0CFCDF2.1467%samuel.wieczorek_at_cea.fr" -->
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
<strong>Date:</strong> 2006-07-04 10:00:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1543.php">Brian Barrett: "Re: [OMPI users] Where can I get mpi api reference"</a>
<li><strong>Previous message:</strong> <a href="1541.php">Dani&#235;l Mantione: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>In reply to:</strong> <a href="1535.php">Samuel Wieczorek: "[OMPI users] Compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1547.php">Samuel Wieczorek: "Re: [OMPI users] Compilation problem"</a>
<li><strong>Reply:</strong> <a href="1547.php">Samuel Wieczorek: "Re: [OMPI users] Compilation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 3, 2006, at 11:49 PM, Samuel Wieczorek wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I tried to install open-mpi on a Mac OS X (10.4), but the  
</span><br>
<span class="quotelev1">&gt; compilation
</span><br>
<span class="quotelev1">&gt; step failed due to undefined symbols.
</span><br>
<span class="quotelev1">&gt; Here is the compressed output files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea to help me ?
</span><br>
<p>This is very odd, but it appears that /usr/bin/find isn't executable  
<br>
on your machine.  This results in the libraries in Open MPI not being  
<br>
built properly.  There were many lines like this in your log file:
<br>
<p>&nbsp;&nbsp;&nbsp;../libtool: line 1: /usr/bin/find: cannot execute binary file
<br>
<p>I'm not sure how this could happen, but fixing your 'find' command  
<br>
should fix the Open MPI build.
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
<li><strong>Next message:</strong> <a href="1543.php">Brian Barrett: "Re: [OMPI users] Where can I get mpi api reference"</a>
<li><strong>Previous message:</strong> <a href="1541.php">Dani&#235;l Mantione: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>In reply to:</strong> <a href="1535.php">Samuel Wieczorek: "[OMPI users] Compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1547.php">Samuel Wieczorek: "Re: [OMPI users] Compilation problem"</a>
<li><strong>Reply:</strong> <a href="1547.php">Samuel Wieczorek: "Re: [OMPI users] Compilation problem"</a>
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
