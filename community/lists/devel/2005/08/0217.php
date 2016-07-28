<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 19 11:53:40 2005" -->
<!-- isoreceived="20050819165340" -->
<!-- sent="Fri, 19 Aug 2005 11:53:38 -0500" -->
<!-- isosent="20050819165338" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="PBS/tm ras/pls" -->
<!-- id="B3A363D2-EFE3-47CA-A77A-9FC735E7E7DF_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2005-08-19 11:53:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0218.php">Jeff Squyres: "Re:  Open MPI: === BUILD FAILURE (0.9b1r6944) ==="</a>
<li><strong>Previous message:</strong> <a href="0216.php">Jeff Squyres: "opening the code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey all -
<br>
<p>A lightly tested, but apparently working, version of the tm pls is in  
<br>
svn.  You'll need to re-autogen and configure to build it (you do not  
<br>
have to re-autogen/configure if you don't want to build it).  specify  
<br>
--with-tm=PATH where path is where the tm stuff is installed.  Note  
<br>
that for some reason I don't understand and need to ask Jeff about,  
<br>
rmaps won't let you oversubscribe the nodes beyond your reservation  
<br>
(so if you have 1 cpu on each of 2 nodes, a single job can be at most  
<br>
2 processes).
<br>
<p>Have not done any scalability testing yet, as we don't have any  
<br>
decent sized PBS clusters with queue wait times under 3 days.
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
<li><strong>Next message:</strong> <a href="0218.php">Jeff Squyres: "Re:  Open MPI: === BUILD FAILURE (0.9b1r6944) ==="</a>
<li><strong>Previous message:</strong> <a href="0216.php">Jeff Squyres: "opening the code"</a>
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
