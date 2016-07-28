<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 26 16:48:24 2006" -->
<!-- isoreceived="20060626204824" -->
<!-- sent="Mon, 26 Jun 2006 16:48:10 -0400" -->
<!-- isosent="20060626204810" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] keyval parser error after v1.1 upgrade" -->
<!-- id="2F18AC6E-C35D-4DE0-A30D-C4CEC31B0BF5_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BE817836-AF03-4E1A-AEA9-65F5CDDE486B_at_stolaf.edu" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-26 16:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1467.php">Benjamin Landsteiner: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Previous message:</strong> <a href="1465.php">Benjamin Landsteiner: "[OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>In reply to:</strong> <a href="1465.php">Benjamin Landsteiner: "[OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1467.php">Benjamin Landsteiner: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Reply:</strong> <a href="1467.php">Benjamin Landsteiner: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Reply:</strong> <a href="1468.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may have to properly uninstall OpenMPI 1.0.2 before installing  
<br>
OpenMPI 1.1
<br>
<p>This was an issue in the past.
<br>
<p>I would recommend you go into your OpenMPI 1.1 directory and type  
<br>
&quot;make uninstall&quot;, then if you have it go into your OpenMPI 1.0.2  
<br>
directory and do the same.  If you don't have a directory with  
<br>
OpenMPI 1.0.2 configured already then either rebuild OpenMPI 1.0.2 or  
<br>
go into /usr/local and identify all remaining OpenMPI directories and  
<br>
components and remove them.  Basically you should find directories  
<br>
modified when you installed OpenMPI 1.1 (or when you uninstalled it)  
<br>
and you may find components dated from when you installed OpenMPI 1.0.2.
<br>
<p>Michael
<br>
<p>On Jun 26, 2006, at 4:34 PM, Benjamin Landsteiner wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 	I recently upgraded to v1.1 of Open MPI and ran into a problem on my
</span><br>
<span class="quotelev1">&gt; head node that I can't seem to solve.  Upon running mpicc, mpiCC, mpic
</span><br>
<span class="quotelev1">&gt; ++, and so forth, I get an error like this:
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1467.php">Benjamin Landsteiner: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Previous message:</strong> <a href="1465.php">Benjamin Landsteiner: "[OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>In reply to:</strong> <a href="1465.php">Benjamin Landsteiner: "[OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1467.php">Benjamin Landsteiner: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Reply:</strong> <a href="1467.php">Benjamin Landsteiner: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Reply:</strong> <a href="1468.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
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
