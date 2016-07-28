<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 14:22:47 2013" -->
<!-- isoreceived="20130723182247" -->
<!-- sent="Tue, 23 Jul 2013 11:22:40 -0700" -->
<!-- isosent="20130723182240" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="0E2A3C02-2064-4256-9921-2B1F30C0D35A_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-23 14:22:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22369.php">Ralph Castain: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>Previous message:</strong> <a href="22367.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22367.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22371.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22371.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22375.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, it's failing when trying to unpack the topology obtained from hwloc. My guess is that one of the following calls changed in hwloc-1.4.3:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 != hwloc_topology_set_xmlbuffer(t, xmlbuffer, strlen(xmlbuffer))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = OPAL_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(xmlbuffer);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_destroy(t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* since we are loading this from an external source, we have to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* explicitly set a flag so hwloc sets things up correctly
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 != hwloc_topology_set_flags(t, HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(xmlbuffer);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = OPAL_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Only other things in that routing are hwloc_topology_init and hwloc_topology_load, and those haven't changed in awhile.
<br>
<p><p>On Jul 23, 2013, at 11:12 AM, Kevin H. Hobbs &lt;hobbsk_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 07/23/2013 09:54 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if Fedora RPMs include -g in their builds, or if Fedora
</span><br>
<span class="quotelev2">&gt;&gt; includes a debuginfo RPM that you could install such that you can attach
</span><br>
<span class="quotelev2">&gt;&gt; a debugger and be able to dig into OMPI's internals yourself.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a debuginfo package.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since I removed all of fedora's openmpi packages and installed from
</span><br>
<span class="quotelev1">&gt; source into /opt/openmpi-1.6.5 and /opt/openmpi-1.6.5_hwloc-1.4.3 to
</span><br>
<span class="quotelev1">&gt; narrow down on this problem, I now have to re-install the rpms with yum.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sudo yum install openmpi openmpi-devel openmpi-debuginfo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These don't put anything into my PATH or LD_LIBRARY_PATH so I have to :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module load mpi/openmpi-x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compiled my simple program with :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc -g -o mpi_simple mpi_simple.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program links to fedora's copies of the libraries of interest :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 ldd mpi_simple | grep hwloc
</span><br>
<span class="quotelev1">&gt;  libhwloc.so.5 =&gt; /lib64/libhwloc.so.5 (0x0000003c57600000)
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 ldd mpi_simple | grep mpi
</span><br>
<span class="quotelev1">&gt;  libmpi.so.1 =&gt; /usr/lib64/openmpi/lib/libmpi.so.1 (0x00007f7207e29000)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I started the debugger with :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 gdb mpi_simple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When run in the debugger I got the error I described.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I reran and in gdb did :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; set breakpoint pending on
</span><br>
<span class="quotelev1">&gt; break util/nidmap.c:146
</span><br>
<span class="quotelev1">&gt; run
</span><br>
<span class="quotelev1">&gt; step
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; took me into 'opal_dss_unpack' Then I did 'next' until I got passed
</span><br>
<span class="quotelev1">&gt; 'opal_dss_unpack_buffer' which returned the -1 we see outside.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22369.php">Ralph Castain: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>Previous message:</strong> <a href="22367.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22367.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22371.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22371.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22375.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
