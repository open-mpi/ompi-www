<?
$subject_val = "Re: [OMPI users] openmpi-mca-params.conf";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 10:06:48 2009" -->
<!-- isoreceived="20090212150648" -->
<!-- sent="Thu, 12 Feb 2009 07:06:39 -0800" -->
<!-- isosent="20090212150639" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-mca-params.conf" -->
<!-- id="EAC5C874-9A8B-46EC-901F-BB0CD3776F81_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4993EB0C.9030600_at_emse.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-mca-params.conf<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 10:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8039.php">George Bosilca: "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<li><strong>Previous message:</strong> <a href="8037.php">Ralph Castain: "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<li><strong>In reply to:</strong> <a href="8031.php">Nicolas Moulin: "[OMPI users] openmpi-mca-params.conf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8057.php">Nicolas Moulin: "Re: [OMPI users] openmpi-mca-params.conf"</a>
<li><strong>Reply:</strong> <a href="8057.php">Nicolas Moulin: "Re: [OMPI users] openmpi-mca-params.conf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The warning is a side-effect of how we're probing for OpenFabrics- 
<br>
capable hardware (e.g., IB HCAs).  While annoying, the warning is  
<br>
harmless -- it's just noisily indicating that you seem to have no  
<br>
OpenFabrics-capable hardware.
<br>
<p>We made a probe a bit smarter in Open MPI v1.3.  If you upgrade to  
<br>
OMPI v1.3, those warnings should go away.
<br>
<p><p>On Feb 12, 2009, at 1:25 AM, Nicolas Moulin wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;   I use openmpi. I have installed it in the directory :
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.2.5-gcc/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I execute a test with openMPI (for exemple helloworld!!!) I have  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; next problem:
</span><br>
<span class="quotelev1">&gt; /*[nmoulin_at_clusterdell ~/mpi-test]$ mpirun -np 4 mpi-test
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,1]: OpenIB on host node01 was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,1]: uDAPL on host node01 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,2]: OpenIB on host node02 was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,2]: uDAPL on host node02 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,0]: OpenIB on host node01 was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,0]: uDAPL on host node01 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,3]: OpenIB on host node02 was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,3]: uDAPL on host node02 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Hello world! from processor 0 out of 4
</span><br>
<span class="quotelev1">&gt; Hello world! from processor 1 out of 4
</span><br>
<span class="quotelev1">&gt; Hello world! from processor 2 out of 4
</span><br>
<span class="quotelev1">&gt; Hello world! from processor 3 out of 4
</span><br>
<span class="quotelev1">&gt; [nmoulin_at_clusterdell ~/mpi-test]$ */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the job is executated but there's some errors. Now, if I execute  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; same job with
</span><br>
<span class="quotelev1">&gt; the mca parameters all is OK.....hum I think.
</span><br>
<span class="quotelev1">&gt; /*[nmoulin_at_clusterdell ~/mpi-test]$ mpirun -mca btl tcp,self -np 4  
</span><br>
<span class="quotelev1">&gt; mpi-test
</span><br>
<span class="quotelev1">&gt; Hello world! from processor 0 out of 4
</span><br>
<span class="quotelev1">&gt; Hello world! from processor 1 out of 4
</span><br>
<span class="quotelev1">&gt; Hello world! from processor 3 out of 4
</span><br>
<span class="quotelev1">&gt; Hello world! from processor 2 out of 4
</span><br>
<span class="quotelev1">&gt; [nmoulin_at_clusterdell ~/mpi-test]$*/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've try to get the mca parameters in the file
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.2.5-gcc/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; but it seems not to take into account....
</span><br>
<span class="quotelev1">&gt; Can you help me do that?
</span><br>
<span class="quotelev1">&gt; Kind regards,
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8039.php">George Bosilca: "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<li><strong>Previous message:</strong> <a href="8037.php">Ralph Castain: "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<li><strong>In reply to:</strong> <a href="8031.php">Nicolas Moulin: "[OMPI users] openmpi-mca-params.conf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8057.php">Nicolas Moulin: "Re: [OMPI users] openmpi-mca-params.conf"</a>
<li><strong>Reply:</strong> <a href="8057.php">Nicolas Moulin: "Re: [OMPI users] openmpi-mca-params.conf"</a>
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
