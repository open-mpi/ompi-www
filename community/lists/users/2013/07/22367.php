<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 14:12:26 2013" -->
<!-- isoreceived="20130723181226" -->
<!-- sent="Tue, 23 Jul 2013 14:12:19 -0400" -->
<!-- isosent="20130723181219" -->
<!-- name="Kevin H. Hobbs" -->
<!-- email="hobbsk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="51EEC783.6070803_at_ohio.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F749EC8_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Kevin H. Hobbs (<em>hobbsk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-23 14:12:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22368.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22366.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22365.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22368.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22368.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22399.php">Dave Love: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/23/2013 09:54 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if Fedora RPMs include -g in their builds, or if Fedora
</span><br>
<span class="quotelev1">&gt; includes a debuginfo RPM that you could install such that you can attach
</span><br>
<span class="quotelev1">&gt; a debugger and be able to dig into OMPI's internals yourself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>There is a debuginfo package.
<br>
<p>Since I removed all of fedora's openmpi packages and installed from
<br>
source into /opt/openmpi-1.6.5 and /opt/openmpi-1.6.5_hwloc-1.4.3 to
<br>
narrow down on this problem, I now have to re-install the rpms with yum.
<br>
<p>sudo yum install openmpi openmpi-devel openmpi-debuginfo
<br>
<p>These don't put anything into my PATH or LD_LIBRARY_PATH so I have to :
<br>
<p>module load mpi/openmpi-x86_64
<br>
<p>I compiled my simple program with :
<br>
<p>mpicc -g -o mpi_simple mpi_simple.c
<br>
<p>The program links to fedora's copies of the libraries of interest :
<br>
<p>mpirun -n 1 ldd mpi_simple | grep hwloc
<br>
&nbsp;&nbsp;libhwloc.so.5 =&gt; /lib64/libhwloc.so.5 (0x0000003c57600000)
<br>
mpirun -n 1 ldd mpi_simple | grep mpi
<br>
&nbsp;&nbsp;libmpi.so.1 =&gt; /usr/lib64/openmpi/lib/libmpi.so.1 (0x00007f7207e29000)
<br>
<p>I started the debugger with :
<br>
<p>mpirun -n 1 gdb mpi_simple
<br>
<p>When run in the debugger I got the error I described.
<br>
<p>I reran and in gdb did :
<br>
<p>set breakpoint pending on
<br>
break util/nidmap.c:146
<br>
run
<br>
step
<br>
<p>took me into 'opal_dss_unpack' Then I did 'next' until I got passed
<br>
'opal_dss_unpack_buffer' which returned the -1 we see outside.
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22367/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22368.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22366.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22365.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22368.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22368.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22399.php">Dave Love: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
