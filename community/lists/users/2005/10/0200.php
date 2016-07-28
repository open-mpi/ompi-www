<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 17 09:16:46 2005" -->
<!-- isoreceived="20051017141646" -->
<!-- sent="Mon, 17 Oct 2005 10:16:39 -0400" -->
<!-- isosent="20051017141639" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Hpl Bench mark and Openmpi rc3" -->
<!-- id="8557a377fe1f131e23274e10e5f6e250_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="434DEFB3.4040502_at_sympatico.ca" -->
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
<strong>Date:</strong> 2005-10-17 09:16:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0201.php">Parrott, Chris: "[O-MPI users] OpenMPI hang issue"</a>
<li><strong>Previous message:</strong> <a href="0199.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>In reply to:</strong> <a href="0196.php">Allan Menezes: "[O-MPI users] Hpl Bench mark and Openmpi rc3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 13, 2005, at 1:25 AM, Allan Menezes wrote:
<br>
<p><span class="quotelev1">&gt;    I have a 16 node cluster of x86 machines with FC3 running on the 
</span><br>
<span class="quotelev1">&gt; head
</span><br>
<span class="quotelev1">&gt; node. I used a beta version of OSCAR 4.2 for putting together the
</span><br>
<span class="quotelev1">&gt; cluster. It uses /home/allan as the NFS directory.
</span><br>
<p>Greetings Allan.  Sorry for the delay in replying -- we were all at an 
<br>
Open MPI working meeting last week, and the schedule got a bit hectic.
<br>
<p>Your setup sounds find.
<br>
<p><span class="quotelev1">&gt; I tried Mpich2v1.02p1 and got abench mark of 26GFlops for it approx.
</span><br>
<span class="quotelev1">&gt; WIth open mpi 1.0RC3 having set the LD_LIBRARY_PATH in .bashrc and the
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin path in .bash_profile in the home directory
</span><br>
<p>Two quick notes here:
<br>
<p>- Open MPI's mpirun supports the &quot;--prefix&quot; option which obviates 
<br>
needing to set these variables in your .bashrc (although setting them 
<br>
in permanently makes things easier in the long term -- you don't need 
<br>
to always specify --prefix).  See the FAQ for more details on the 
<br>
--prefix option:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
<br>
<p>- OSCAR makes use of environment modules; it contains setup to 
<br>
differentiate between the multiple different MPI implementations that 
<br>
OSCAR contains.  You can trivially add a modulefile for Open MPI and 
<br>
therefore use the &quot;switcher&quot; command to easily switch between all the 
<br>
MPI implementations on your OSCAR cluster (once we hit 1.0, we 
<br>
anticipate having an OSCAR package).
<br>
<p><span class="quotelev1">&gt; I cannnot seeem to get a performance beyond 9 GFlops approximately. 
</span><br>
<span class="quotelev1">&gt; The block size
</span><br>
<span class="quotelev1">&gt; for mpich2 was 120 for best results. For open mpi for N = 22000 I have 
</span><br>
<span class="quotelev1">&gt; to use block sizes of 10 -11 to get a performance of 9GFlops other 
</span><br>
<span class="quotelev1">&gt; wise for larger block sizes(NB) it's worse. I used the same N=22000 
</span><br>
<span class="quotelev1">&gt; for mpich2 and have a 16 port Gigabit Netgear ethernet switch with 
</span><br>
<span class="quotelev1">&gt; Gigabit realtek8169 ethernet cards. Can any one tell me why the 
</span><br>
<span class="quotelev1">&gt; performance with open mpi is so low compared to mpich2-1.02p1?
</span><br>
<p>There should clearly not be such a wide disparity in performance here; 
<br>
we don't see this kind of difference in our own internal testing.
<br>
<p>Can you send the output of &quot;ompi_info --all&quot;?
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
<li><strong>Next message:</strong> <a href="0201.php">Parrott, Chris: "[O-MPI users] OpenMPI hang issue"</a>
<li><strong>Previous message:</strong> <a href="0199.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>In reply to:</strong> <a href="0196.php">Allan Menezes: "[O-MPI users] Hpl Bench mark and Openmpi rc3"</a>
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
