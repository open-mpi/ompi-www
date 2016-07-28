<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 25 10:14:44 2006" -->
<!-- isoreceived="20060825141444" -->
<!-- sent="Fri, 25 Aug 2006 10:14:41 -0400" -->
<!-- isosent="20060825141441" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="[OMPI users] LSF with OpenMPI" -->
<!-- id="8A309DF7-3DFE-4C3A-AF3E-BF550A5285FF_at_ieee.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-25 10:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1779.php">Reinhold Bader: "[OMPI users] Problems with symbols and shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1777.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1795.php">Jeff Squyres: "Re: [OMPI users] LSF with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="1795.php">Jeff Squyres: "Re: [OMPI users] LSF with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there anyone running OpenMPI on a machine with LSF batch queueing  
<br>
system.
<br>
<p>Last time I attempted this I discovered that PATH and LD_LIBRARY_PATH  
<br>
were not making it to the client nodes.  I could force PATH to work  
<br>
using an OpenMPI option but I could not even force LD_LIBRARY_PATH  
<br>
over to the client nodes.  I'd rather fix both and all other  
<br>
environmental variables with one fix so my test case is simply to use  
<br>
openmpi to run hostname.
<br>
<p>Before I started on this again I'd like to know if anyone has made  
<br>
more progress than I have.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1779.php">Reinhold Bader: "[OMPI users] Problems with symbols and shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1777.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1795.php">Jeff Squyres: "Re: [OMPI users] LSF with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="1795.php">Jeff Squyres: "Re: [OMPI users] LSF with OpenMPI"</a>
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
