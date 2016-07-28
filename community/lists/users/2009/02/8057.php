<?
$subject_val = "Re: [OMPI users] openmpi-mca-params.conf";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 04:46:41 2009" -->
<!-- isoreceived="20090213094641" -->
<!-- sent="Fri, 13 Feb 2009 10:45:04 +0100" -->
<!-- isosent="20090213094504" -->
<!-- name="Nicolas Moulin" -->
<!-- email="nicolas.moulin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-mca-params.conf" -->
<!-- id="49954120.9080803_at_emse.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EAC5C874-9A8B-46EC-901F-BB0CD3776F81_at_cisco.com" -->
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
<strong>From:</strong> Nicolas Moulin (<em>nicolas.moulin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 04:45:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8058.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Previous message:</strong> <a href="8056.php">Ramya Narasimhan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>In reply to:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI users] openmpi-mca-params.conf"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thak you Jeff Squyres,
<br>
I've installed Open MPI v1. and now it's OK.
<br>
Kind regards,
<br>
<p><p>Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; The warning is a side-effect of how we're probing for 
</span><br>
<span class="quotelev1">&gt; OpenFabrics-capable hardware (e.g., IB HCAs).  While annoying, the 
</span><br>
<span class="quotelev1">&gt; warning is harmless -- it's just noisily indicating that you seem to 
</span><br>
<span class="quotelev1">&gt; have no OpenFabrics-capable hardware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We made a probe a bit smarter in Open MPI v1.3.  If you upgrade to 
</span><br>
<span class="quotelev1">&gt; OMPI v1.3, those warnings should go away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2009, at 1:25 AM, Nicolas Moulin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;   I use openmpi. I have installed it in the directory :
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/openmpi/1.2.5-gcc/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I execute a test with openMPI (for exemple helloworld!!!) I have the
</span><br>
<span class="quotelev2">&gt;&gt; next problem:
</span><br>
<span class="quotelev2">&gt;&gt; /*[nmoulin_at_clusterdell ~/mpi-test]$ mpirun -np 4 mpi-test
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1]: OpenIB on host node01 was unable to find any HCAs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1]: uDAPL on host node01 was unable to find any NICs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,2]: OpenIB on host node02 was unable to find any HCAs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,2]: uDAPL on host node02 was unable to find any NICs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0]: OpenIB on host node01 was unable to find any HCAs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0]: uDAPL on host node01 was unable to find any NICs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,3]: OpenIB on host node02 was unable to find any HCAs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,3]: uDAPL on host node02 was unable to find any NICs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello world! from processor 0 out of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello world! from processor 1 out of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello world! from processor 2 out of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello world! from processor 3 out of 4
</span><br>
<span class="quotelev2">&gt;&gt; [nmoulin_at_clusterdell ~/mpi-test]$ */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So the job is executated but there's some errors. Now, if I execute the
</span><br>
<span class="quotelev2">&gt;&gt; same job with
</span><br>
<span class="quotelev2">&gt;&gt; the mca parameters all is OK.....hum I think.
</span><br>
<span class="quotelev2">&gt;&gt; /*[nmoulin_at_clusterdell ~/mpi-test]$ mpirun -mca btl tcp,self -np 4 
</span><br>
<span class="quotelev2">&gt;&gt; mpi-test
</span><br>
<span class="quotelev2">&gt;&gt; Hello world! from processor 0 out of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello world! from processor 1 out of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello world! from processor 3 out of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello world! from processor 2 out of 4
</span><br>
<span class="quotelev2">&gt;&gt; [nmoulin_at_clusterdell ~/mpi-test]$*/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've try to get the mca parameters in the file
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/openmpi/1.2.5-gcc/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt; but it seems not to take into account....
</span><br>
<span class="quotelev2">&gt;&gt; Can you help me do that?
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
_______________________________________________________________
Nicolas MOULIN	(bureau J3-19)
Ing&#233;nieur de recherche
Centre SMS / D&#233;partement MPI
UMR CNRS 5146 - PECM
Ecole Nationale Sup&#233;rieure des Mines de Saint-Etienne
158, cours Fauriel - 42023 Saint-Etienne cedex 02 - France
Bureau: +33 4 77 42 02 41
Fax: 	+33 4 77 42 02 49
e-mail: nicolas.moulin_at_[hidden]
<a href="http://www.emse.fr/~nmoulin">http://www.emse.fr/~nmoulin</a>
_______________________________________________________________ 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8058.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Previous message:</strong> <a href="8056.php">Ramya Narasimhan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>In reply to:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI users] openmpi-mca-params.conf"</a>
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
