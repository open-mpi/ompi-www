<?
$subject_val = "Re: [OMPI users] Romio and OpenMPI builds";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 19:12:42 2012" -->
<!-- isoreceived="20121204001242" -->
<!-- sent="Mon, 03 Dec 2012 19:12:27 -0500" -->
<!-- isosent="20121204001227" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Romio and OpenMPI builds" -->
<!-- id="50BD3FEB.2060100_at_giref.ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8A9D5FA0-5444-4427-8790-1A5CA03BC3D7_at_umich.edu" -->
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
<strong>Date:</strong> 2012-12-03 19:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20871.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20869.php">Brock Palen: "[OMPI users] Romio and OpenMPI builds"</a>
<li><strong>In reply to:</strong> <a href="20869.php">Brock Palen: "[OMPI users] Romio and OpenMPI builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20899.php">Brock Palen: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Reply:</strong> <a href="20899.php">Brock Palen: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/03/2012 05:37 PM, Brock Palen a &#233;crit :
<br>
<span class="quotelev1">&gt; I was trying to use hints with ROMIO and lustre prompted by another post on this list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a simple MPI-IO code and I cannot using the notes I find set the lustre striping using the config file and setting ROMIO_HINTS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can I check which ADIO drivers ROMIO in OPenMPI was built with when I built it?
</span><br>
<span class="quotelev1">&gt; Can I make ROMIO go into 'verbose' mode and have it print what it is setting all its values to?
</span><br>
Try &quot;ompi_info -a&quot; and check for lustre in the output:
<br>
<p>ompi_info -a | grep -i romio
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: information &quot;io_romio_user_configure_params&quot; 
<br>
(value: &lt;--with-file-system=testfs+ufs+nfs+lustre&gt;, data source: default 
<br>
value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User-specified command line parameters passed 
<br>
to ROMIO's configure script
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: information 
<br>
&quot;io_romio_complete_configure_params&quot; (value: 
<br>
&lt;--with-file-system=testfs+ufs+nfs+lustre  CFLAGS='-DNDEBUG -O3 -xHOST 
<br>
-Wall -finline-functions -fno-strict-aliasing -restrict -pthread' 
<br>
CPPFLAGS='  
<br>
-I/clumeq/src/Open-MPI/1.6.3/intel/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include 
<br>
-I/clumeq/src/Open-MPI/1.6.3/intel/Build/opal/mca/hwloc/hwloc132/hwloc/include   
<br>
-I/usr/include/infiniband -I/usr/include/infiniband' FFLAGS='' LDFLAGS=' 
<br>
' --enable-shared --enable-static 
<br>
--with-file-system=testfs+ufs+nfs+lustre  
<br>
--prefix=/software/MPI/openmpi/1.6.3_intel --with-mpi=open_mpi 
<br>
--disable-aio&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Complete set of command line parameters 
<br>
passed to ROMIO's configure script
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20871.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20869.php">Brock Palen: "[OMPI users] Romio and OpenMPI builds"</a>
<li><strong>In reply to:</strong> <a href="20869.php">Brock Palen: "[OMPI users] Romio and OpenMPI builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20899.php">Brock Palen: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Reply:</strong> <a href="20899.php">Brock Palen: "Re: [OMPI users] Romio and OpenMPI builds"</a>
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
