<?
$subject_val = "Re: [OMPI users] Romio and OpenMPI builds";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 21 14:49:46 2013" -->
<!-- isoreceived="20130121194946" -->
<!-- sent="Mon, 21 Jan 2013 13:49:41 -0600" -->
<!-- isosent="20130121194941" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Romio and OpenMPI builds" -->
<!-- id="20130121194940.GJ24925_at_mcs.anl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50C2C595.8050901_at_giref.ulaval.ca" -->
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
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-21 14:49:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21181.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<li><strong>Previous message:</strong> <a href="21179.php">Rob Latham: "Re: [OMPI users] Invalid filename?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20906.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 07, 2012 at 11:44:05PM -0500, Eric Chamberland wrote:
<br>
<span class="quotelev2">&gt; &gt;--with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre'
</span><br>
<span class="quotelev1">&gt; exactly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;We have Lustre, local filesystems (ufs), and NFSv3 and NFSv4 clients. So that list should be good for our site.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p>If you have any choice at all please do not enable NFS.  It will work,
<br>
barely, but I'd rather see your users treat NFS as the broken
<br>
horrorshow it is (with respect to MPI-IO) than to use it at all.
<br>
<p>==rob
<br>
<p><span class="quotelev2">&gt; &gt;Would this be a good recommendation for us to include in all our MPI builds?
</span><br>
<span class="quotelev1">&gt; I think yes, it is in the right direction, but I am not an
</span><br>
<span class="quotelev1">&gt; &quot;expert&quot;...  some expert advice should be welcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Brock Palen
</span><br>
<span class="quotelev2">&gt; &gt;www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt; &gt;CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt; &gt;brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;(734)936-1985
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Dec 3, 2012, at 7:12 PM, Eric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Le 12/03/2012 05:37 PM, Brock Palen a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;I was trying to use hints with ROMIO and lustre prompted by another post on this list.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;I have a simple MPI-IO code and I cannot using the notes I find set the lustre striping using the config file and setting ROMIO_HINTS.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Question:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;How can I check which ADIO drivers ROMIO in OPenMPI was built with when I built it?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Can I make ROMIO go into 'verbose' mode and have it print what it is setting all its values to?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Try &quot;ompi_info -a&quot; and check for lustre in the output:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;ompi_info -a | grep -i romio
</span><br>
<span class="quotelev3">&gt; &gt;&gt;...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA io: information &quot;io_romio_user_configure_params&quot; (value:&lt;--with-file-system=testfs+ufs+nfs+lustre&gt;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                          User-specified command line parameters passed to ROMIO's configure script
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA io: information &quot;io_romio_complete_configure_params&quot; (value:&lt;--with-file-system=testfs+ufs+nfs+lustre  CFLAGS='-DNDEBUG -O3 -xHOST -Wall -finline-functions -fno-strict-aliasing -restrict -pthread' CPPFLAGS='  -I/clumeq/src/Open-MPI/1.6.3/intel/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include -I/clumeq/src/Open-MPI/1.6.3/intel/Build/opal/mca/hwloc/hwloc132/hwloc/include   -I/usr/include/infiniband -I/usr/include/infiniband' FFLAGS='' LDFLAGS=' ' --enable-shared --enable-static --with-file-system=testfs+ufs+nfs+lustre  --prefix=/software/MPI/openmpi/1.6.3_intel --with-mpi=open_mpi --disable-aio&gt;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                          Complete set of command line parameters passed to ROMIO's configure script
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Eric
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21181.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<li><strong>Previous message:</strong> <a href="21179.php">Rob Latham: "Re: [OMPI users] Invalid filename?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20906.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
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
