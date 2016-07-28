<?
$subject_val = "Re: [OMPI users] Romio and OpenMPI builds";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  7 23:47:05 2012" -->
<!-- isoreceived="20121208044705" -->
<!-- sent="Fri, 7 Dec 2012 23:46:53 -0500" -->
<!-- isosent="20121208044653" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Romio and OpenMPI builds" -->
<!-- id="79E1F755-BD62-4CE5-A8A3-4DA25E0EE88F_at_umich.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-07 23:46:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20908.php">Ilias Miroslav: "[OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20906.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>In reply to:</strong> <a href="20906.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21180.php">Rob Latham: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>So it looks like most OpenMPI builds out there are running with ROMIO's that are obvious to any  optimizations to what they are running on.  
<br>
<p>I have added this to our build notes so we get it in next time.  Thanks!
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
<p><p><p>On Dec 7, 2012, at 11:44 PM, Eric Chamberland wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brock,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 12/06/2012 05:10 PM, Brock Palen a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Eric,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You are correct, our builds do not show lustre support:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  MCA io: information &quot;io_romio_user_configure_params&quot; (value:&lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; surprise! ;-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So to enable this, when I build OpenMPI I should pass:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre'
</span><br>
<span class="quotelev1">&gt; exactly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have Lustre, local filesystems (ufs), and NFSv3 and NFSv4 clients. So that list should be good for our site.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Would this be a good recommendation for us to include in all our MPI builds?
</span><br>
<span class="quotelev1">&gt; I think yes, it is in the right direction, but I am not an &quot;expert&quot;...  some expert advice should be welcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 3, 2012, at 7:12 PM, Eric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 12/03/2012 05:37 PM, Brock Palen a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was trying to use hints with ROMIO and lustre prompted by another post on this list.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a simple MPI-IO code and I cannot using the notes I find set the lustre striping using the config file and setting ROMIO_HINTS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Question:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How can I check which ADIO drivers ROMIO in OPenMPI was built with when I built it?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can I make ROMIO go into 'verbose' mode and have it print what it is setting all its values to?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try &quot;ompi_info -a&quot; and check for lustre in the output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info -a | grep -i romio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA io: information &quot;io_romio_user_configure_params&quot; (value:&lt;--with-file-system=testfs+ufs+nfs+lustre&gt;, data source: default value)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          User-specified command line parameters passed to ROMIO's configure script
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA io: information &quot;io_romio_complete_configure_params&quot; (value:&lt;--with-file-system=testfs+ufs+nfs+lustre  CFLAGS='-DNDEBUG -O3 -xHOST -Wall -finline-functions -fno-strict-aliasing -restrict -pthread' CPPFLAGS='  -I/clumeq/src/Open-MPI/1.6.3/intel/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include -I/clumeq/src/Open-MPI/1.6.3/intel/Build/opal/mca/hwloc/hwloc132/hwloc/include   -I/usr/include/infiniband -I/usr/include/infiniband' FFLAGS='' LDFLAGS=' ' --enable-shared --enable-static --with-file-system=testfs+ufs+nfs+lustre  --prefix=/software/MPI/openmpi/1.6.3_intel --with-mpi=open_mpi --disable-aio&gt;, data source: default value)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          Complete set of command line parameters passed to ROMIO's configure script
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20908.php">Ilias Miroslav: "[OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20906.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>In reply to:</strong> <a href="20906.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21180.php">Rob Latham: "Re: [OMPI users] Romio and OpenMPI builds"</a>
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
