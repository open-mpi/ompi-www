<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 15 11:55:42 2005" -->
<!-- isoreceived="20051115165542" -->
<!-- sent="Tue, 15 Nov 2005 08:55:40 -0800" -->
<!-- isosent="20051115165540" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] hpl and tcp" -->
<!-- id="e7ad74374595bf3fcf5e440fb546aad2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4379D037.3060307_at_sympatico.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-15 11:55:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0348.php">Konstantin Karganov: "Re: [O-MPI users] Open MPI @SC2005"</a>
<li><strong>Previous message:</strong> <a href="0346.php">Jeff Squyres: "Re: [O-MPI users] HPL and TCP"</a>
<li><strong>In reply to:</strong> <a href="0344.php">Allan Menezes: "[O-MPI users] hpl and tcp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 15, 2005, at 4:10 AM, Allan Menezes wrote:
<br>
<p><span class="quotelev1">&gt;  Here are last night's reults of the following command on my 15 node
</span><br>
<span class="quotelev1">&gt; cluster. One node is down from 16.
</span><br>
<span class="quotelev1">&gt; mpirun --mca pml teg --mca btl_tcp_if_include eth1,eth0 --hostfile aa
</span><br>
<span class="quotelev1">&gt; -np 15 ./xhpl
</span><br>
<p>TEG does not use the BTLs; thats why you got no errors.
<br>
<p>TEG is the prior generation point-to-point PML component; it uses the 
<br>
PTL components.  OB1 is the next generation point-to-point component; 
<br>
it uses BTL components.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0348.php">Konstantin Karganov: "Re: [O-MPI users] Open MPI @SC2005"</a>
<li><strong>Previous message:</strong> <a href="0346.php">Jeff Squyres: "Re: [O-MPI users] HPL and TCP"</a>
<li><strong>In reply to:</strong> <a href="0344.php">Allan Menezes: "[O-MPI users] hpl and tcp"</a>
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
