<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 26 13:07:29 2013" -->
<!-- isoreceived="20130726170729" -->
<!-- sent="Fri, 26 Jul 2013 18:07:13 +0100" -->
<!-- isosent="20130726170713" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="87mwp96yim.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51EEC783.6070803_at_ohio.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] After OS Update MPI_Init fails on one host<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-26 13:07:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22400.php">meng: "[OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Previous message:</strong> <a href="22398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Bcast hanging after some amount of data	transferred on Infiniband network"</a>
<li><strong>In reply to:</strong> <a href="22367.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22366.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Kevin H. Hobbs&quot; &lt;hobbsk_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; The program links to fedora's copies of the libraries of interest :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 ldd mpi_simple | grep hwloc
</span><br>
<span class="quotelev1">&gt;   libhwloc.so.5 =&gt; /lib64/libhwloc.so.5 (0x0000003c57600000)
</span><br>
<p>[I'm surprised it's in /lib64.]
<br>
<p><span class="quotelev1">&gt; mpirun -n 1 ldd mpi_simple | grep mpi
</span><br>
<span class="quotelev1">&gt;   libmpi.so.1 =&gt; /usr/lib64/openmpi/lib/libmpi.so.1 (0x00007f7207e29000)
</span><br>
<p>I'm on RH6, not Fedora, but I'm successfully using a 1.6.5 package built
<br>
with a modified (for extra config options) Fedora spec file.  It
<br>
dynamically links against an hwloc 1.7 package (not the original system
<br>
hwloc version), but I don't know if that makes a difference.
<br>
<p>I agree about the value of OS packages and libraries -- money where
<br>
mouth is, maintaining packaging for SGE against hwloc etc.
<br>
<p><pre>
-- 
Community Grid Engine:  <a href="http://arc.liv.ac.uk/SGE/">http://arc.liv.ac.uk/SGE/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22400.php">meng: "[OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Previous message:</strong> <a href="22398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Bcast hanging after some amount of data	transferred on Infiniband network"</a>
<li><strong>In reply to:</strong> <a href="22367.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22366.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
