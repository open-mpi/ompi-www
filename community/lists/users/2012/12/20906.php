<?
$subject_val = "Re: [OMPI users] Romio and OpenMPI builds";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  7 23:44:17 2012" -->
<!-- isoreceived="20121208044417" -->
<!-- sent="Fri, 07 Dec 2012 23:44:05 -0500" -->
<!-- isosent="20121208044405" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Romio and OpenMPI builds" -->
<!-- id="50C2C595.8050901_at_giref.ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4CE764B-75EB-4DE6-99C6-1EF65EE038A2_at_umich.edu" -->
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
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-07 23:44:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20907.php">Brock Palen: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Previous message:</strong> <a href="20905.php">Jeffrey A Cummings: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20899.php">Brock Palen: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20907.php">Brock Palen: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Reply:</strong> <a href="20907.php">Brock Palen: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21180.php">Rob Latham: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brock,
<br>
<p>Le 12/06/2012 05:10 PM, Brock Palen a &#233;crit :
<br>
<span class="quotelev1">&gt; Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are correct, our builds do not show lustre support:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MCA io: information &quot;io_romio_user_configure_params&quot; (value:&lt;none&gt;, data source: default value)
</span><br>
surprise! ;-)
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So to enable this, when I build OpenMPI I should pass:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre'
</span><br>
exactly.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have Lustre, local filesystems (ufs), and NFSv3 and NFSv4 clients. So that list should be good for our site.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would this be a good recommendation for us to include in all our MPI builds?
</span><br>
I think yes, it is in the right direction, but I am not an &quot;expert&quot;...  
<br>
some expert advice should be welcome.
<br>
<p>Eric
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 3, 2012, at 7:12 PM, Eric Chamberland wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 12/03/2012 05:37 PM, Brock Palen a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was trying to use hints with ROMIO and lustre prompted by another post on this list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a simple MPI-IO code and I cannot using the notes I find set the lustre striping using the config file and setting ROMIO_HINTS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Question:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How can I check which ADIO drivers ROMIO in OPenMPI was built with when I built it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can I make ROMIO go into 'verbose' mode and have it print what it is setting all its values to?
</span><br>
<span class="quotelev2">&gt;&gt; Try &quot;ompi_info -a&quot; and check for lustre in the output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info -a | grep -i romio
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: information &quot;io_romio_user_configure_params&quot; (value:&lt;--with-file-system=testfs+ufs+nfs+lustre&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           User-specified command line parameters passed to ROMIO's configure script
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: information &quot;io_romio_complete_configure_params&quot; (value:&lt;--with-file-system=testfs+ufs+nfs+lustre  CFLAGS='-DNDEBUG -O3 -xHOST -Wall -finline-functions -fno-strict-aliasing -restrict -pthread' CPPFLAGS='  -I/clumeq/src/Open-MPI/1.6.3/intel/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include -I/clumeq/src/Open-MPI/1.6.3/intel/Build/opal/mca/hwloc/hwloc132/hwloc/include   -I/usr/include/infiniband -I/usr/include/infiniband' FFLAGS='' LDFLAGS=' ' --enable-shared --enable-static --with-file-system=testfs+ufs+nfs+lustre  --prefix=/software/MPI/openmpi/1.6.3_intel --with-mpi=open_mpi --disable-aio&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Complete set of command line parameters passed to ROMIO's configure script
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric
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
<li><strong>Next message:</strong> <a href="20907.php">Brock Palen: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Previous message:</strong> <a href="20905.php">Jeffrey A Cummings: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20899.php">Brock Palen: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20907.php">Brock Palen: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Reply:</strong> <a href="20907.php">Brock Palen: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21180.php">Rob Latham: "Re: [OMPI users] Romio and OpenMPI builds"</a>
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
