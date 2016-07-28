<?
$subject_val = "Re: [OMPI users] Romio and OpenMPI builds";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 17:10:34 2012" -->
<!-- isoreceived="20121206221034" -->
<!-- sent="Thu, 6 Dec 2012 17:10:23 -0500" -->
<!-- isosent="20121206221023" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Romio and OpenMPI builds" -->
<!-- id="C4CE764B-75EB-4DE6-99C6-1EF65EE038A2_at_umich.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50BD3FEB.2060100_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Romio and OpenMPI builds<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-06 17:10:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20900.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20898.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20870.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20906.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Reply:</strong> <a href="20906.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>You are correct, our builds do not show lustre support:
<br>
<p>&nbsp;MCA io: information &quot;io_romio_user_configure_params&quot; (value: &lt;none&gt;, data source: default value)
<br>
<p>So to enable this, when I build OpenMPI I should pass:
<br>
<p>--with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre'
<br>
<p>We have Lustre, local filesystems (ufs), and NFSv3 and NFSv4 clients. So that list should be good for our site.
<br>
<p>Would this be a good recommendation for us to include in all our MPI builds?
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Dec 3, 2012, at 7:12 PM, Eric Chamberland wrote:
<br>
<p><span class="quotelev1">&gt; Le 12/03/2012 05:37 PM, Brock Palen a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I was trying to use hints with ROMIO and lustre prompted by another post on this list.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a simple MPI-IO code and I cannot using the notes I find set the lustre striping using the config file and setting ROMIO_HINTS.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Question:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How can I check which ADIO drivers ROMIO in OPenMPI was built with when I built it?
</span><br>
<span class="quotelev2">&gt;&gt; Can I make ROMIO go into 'verbose' mode and have it print what it is setting all its values to?
</span><br>
<span class="quotelev1">&gt; Try &quot;ompi_info -a&quot; and check for lustre in the output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info -a | grep -i romio
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;                  MCA io: information &quot;io_romio_user_configure_params&quot; (value: &lt;--with-file-system=testfs+ufs+nfs+lustre&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                          User-specified command line parameters passed to ROMIO's configure script
</span><br>
<span class="quotelev1">&gt;                  MCA io: information &quot;io_romio_complete_configure_params&quot; (value: &lt;--with-file-system=testfs+ufs+nfs+lustre  CFLAGS='-DNDEBUG -O3 -xHOST -Wall -finline-functions -fno-strict-aliasing -restrict -pthread' CPPFLAGS='  -I/clumeq/src/Open-MPI/1.6.3/intel/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include -I/clumeq/src/Open-MPI/1.6.3/intel/Build/opal/mca/hwloc/hwloc132/hwloc/include   -I/usr/include/infiniband -I/usr/include/infiniband' FFLAGS='' LDFLAGS=' ' --enable-shared --enable-static --with-file-system=testfs+ufs+nfs+lustre  --prefix=/software/MPI/openmpi/1.6.3_intel --with-mpi=open_mpi --disable-aio&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                          Complete set of command line parameters passed to ROMIO's configure script
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
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
<li><strong>Next message:</strong> <a href="20900.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20898.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20870.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20906.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Reply:</strong> <a href="20906.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
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
