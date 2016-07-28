<?
$subject_val = "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 20:37:54 2009" -->
<!-- isoreceived="20090403003754" -->
<!-- sent="Thu, 2 Apr 2009 20:37:48 -0400" -->
<!-- isosent="20090403003748" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)" -->
<!-- id="EFA0D230-22BA-46C5-8A79-EAFB53A0E2B3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D53DCF.9040901_at_mailsnare.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-02 20:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8753.php">Iain Bason: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8751.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8751.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8754.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 2, 2009, at 6:35 PM, Jerome BENOIT wrote:
<br>
<p><span class="quotelev1">&gt; It appeared that the file /etc/openmpi/openmpi-mca-params.conf on  
</span><br>
<span class="quotelev1">&gt; node green was the only one
</span><br>
<span class="quotelev1">&gt; into the cluster to contain the line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_min_v4 = 49152
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Great -- glad you found the issue!
<br>
<p><span class="quotelev1">&gt; Once the this line commented, the tests suggest below, and the  
</span><br>
<span class="quotelev1">&gt; sbatch script previously emailed,
</span><br>
<span class="quotelev1">&gt; work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, if I put the above line, namely,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_min_v4 = 49152
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I believe that you have chosen a port number that is too high -- I,  
<br>
too, can confirm that this breaks for me when I try it.  But if I  
<br>
choose a much lower port number (like 10000), it seems to work.  Try  
<br>
that in your setup on the command line:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_tcp_port_min_v4 10000 ...etc.
<br>
<p>Looks like we need to do better range checking / print a better error  
<br>
message here; our poor output did little/nothing to help diagnose this  
<br>
problem.  Sorry about that!  I've opened up ticket #1869 for this  
<br>
issue (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1869">https://svn.open-mpi.org/trac/ompi/ticket/1869</a>).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8753.php">Iain Bason: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8751.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8751.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8754.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
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
