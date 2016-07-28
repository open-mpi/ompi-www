<?
$subject_val = "Re: [OMPI users] Undefined ompi_mpi_info_null issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 20:09:47 2015" -->
<!-- isoreceived="20150612000947" -->
<!-- sent="Fri, 12 Jun 2015 09:09:45 +0900" -->
<!-- isosent="20150612000945" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Undefined ompi_mpi_info_null issue" -->
<!-- id="557A2349.9040004_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5579B75A.1030803_at_iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Undefined ompi_mpi_info_null issue<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-11 20:09:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27118.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Previous message:</strong> <a href="27116.php">Steve Wise: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>In reply to:</strong> <a href="27099.php">Ray Sheppard: "[OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27118.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Reply:</strong> <a href="27118.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ray,
<br>
<p>this symbol is defined in libmpi.so.
<br>
<p>can you run
<br>
ldd 
<br>
/N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py/_errors.so
<br>
and make sure this is linked with openmpi 1.8.4 ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 6/12/2015 1:29 AM, Ray Sheppard wrote:
<br>
<span class="quotelev1">&gt; Hi List,
</span><br>
<span class="quotelev1">&gt;   I know I saw this issue years ago but have forgotten the details. I 
</span><br>
<span class="quotelev1">&gt; looked through old posts but only found about half a dozen pertaining 
</span><br>
<span class="quotelev1">&gt; to WinDoze.  I am trying to build a Python (2.7.3) extension (h5py) 
</span><br>
<span class="quotelev1">&gt; that calls HDF5 (1.8.14).  I built both the OpenMPI (1.8.4) and the 
</span><br>
<span class="quotelev1">&gt; HDF5 modules so I know they are consistent.  All goes well until I try 
</span><br>
<span class="quotelev1">&gt; to run the tests. Then I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ImportError: 
</span><br>
<span class="quotelev1">&gt; /N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py/_errors.so: 
</span><br>
<span class="quotelev1">&gt; undefined symbol: ompi_mpi_info_null
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure I completely trust the h5py package but I don't have a 
</span><br>
<span class="quotelev1">&gt; real good reason for believing that way.  I would appreciate it if 
</span><br>
<span class="quotelev1">&gt; someone could explain where ompi_mpi_info_null is defined and possibly 
</span><br>
<span class="quotelev1">&gt; a way to tell Python about it.  Thanks!
</span><br>
<span class="quotelev1">&gt;             Ray
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27117/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27118.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Previous message:</strong> <a href="27116.php">Steve Wise: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>In reply to:</strong> <a href="27099.php">Ray Sheppard: "[OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27118.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Reply:</strong> <a href="27118.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
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
