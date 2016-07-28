<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 19:41:20 2006" -->
<!-- isoreceived="20060524234120" -->
<!-- sent="Wed, 24 May 2006 16:43:18 -0700" -->
<!-- isosent="20060524234318" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] Wont run with 1.0.2" -->
<!-- id="4474EF96.8040007_at_reachone.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 19:43:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1285.php">Andrew Friedley: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Previous message:</strong> <a href="1283.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1289.php">Michael Kluskens: "Re: [OMPI users] Wont run with 1.0.2"</a>
<li><strong>Reply:</strong> <a href="1289.php">Michael Kluskens: "Re: [OMPI users] Wont run with 1.0.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After using OPENMPI Ver 1.0.1 for several months without trouble, last week
<br>
I decided to upgrade to Ver 1.0.2.  My primary motivation was curiosity, 
<br>
to see if
<br>
there was any performance benefit.  To my surprise, several of my F90 
<br>
applications
<br>
refused to run with the newer version.  I also tried Ver 1.0.3a1r10036 
<br>
with the same
<br>
result.  In all 3 cases I configured the build identically.  Even that 
<br>
old chestnut 'hello.f'
<br>
will not run with the newer versions.  I ran it in the totalview 
<br>
debugger and can see
<br>
that it is hanging in the MPI initialization code before it gets to the 
<br>
F90 application.
<br>
&nbsp;I am using the Ver 6.1 PGF90 64bit compiler on a Linux Opteron 
<br>
workstation with 2
<br>
dual core 2.4 GHZ processors.  If you think it it is worthwhile to 
<br>
pursue this problem
<br>
further, what could I send you to help troubleshoot the problem?  
<br>
Meanwhile I have
<br>
gone back to 1.0.1, which works fine on everything.
<br>
<p>Tom
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1285.php">Andrew Friedley: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Previous message:</strong> <a href="1283.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1289.php">Michael Kluskens: "Re: [OMPI users] Wont run with 1.0.2"</a>
<li><strong>Reply:</strong> <a href="1289.php">Michael Kluskens: "Re: [OMPI users] Wont run with 1.0.2"</a>
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
