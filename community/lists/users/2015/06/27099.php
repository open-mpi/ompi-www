<?
$subject_val = "[OMPI users] Undefined ompi_mpi_info_null issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 12:26:13 2015" -->
<!-- isoreceived="20150611162613" -->
<!-- sent="Thu, 11 Jun 2015 12:29:14 -0400" -->
<!-- isosent="20150611162914" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="[OMPI users] Undefined ompi_mpi_info_null issue" -->
<!-- id="5579B75A.1030803_at_iu.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EFDCB064-79EF-4980-B409-D34DA7C4D7FE_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] Undefined ompi_mpi_info_null issue<br>
<strong>From:</strong> Ray Sheppard (<em>rsheppar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-11 12:29:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27100.php">Joshua Ladd: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27098.php">Howard Pritchard: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27095.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27117.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Reply:</strong> <a href="27117.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi List,
<br>
&nbsp;&nbsp;&nbsp;I know I saw this issue years ago but have forgotten the details. I 
<br>
looked through old posts but only found about half a dozen pertaining to 
<br>
WinDoze.  I am trying to build a Python (2.7.3) extension (h5py) that 
<br>
calls HDF5 (1.8.14).  I built both the OpenMPI (1.8.4) and the HDF5 
<br>
modules so I know they are consistent.  All goes well until I try to run 
<br>
the tests. Then I get:
<br>
<p>ImportError: 
<br>
/N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py/_errors.so: 
<br>
undefined symbol: ompi_mpi_info_null
<br>
<p>I am not sure I completely trust the h5py package but I don't have a 
<br>
real good reason for believing that way.  I would appreciate it if 
<br>
someone could explain where ompi_mpi_info_null is defined and possibly a 
<br>
way to tell Python about it.  Thanks!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ray
<br>
<p><pre>
-- 
                          Respectfully,
                            Ray Sheppard
                            RSheppar_at_[hidden]
                            <a href="http://rt.uits.iu.edu/systems/SciAPT">http://rt.uits.iu.edu/systems/SciAPT</a>
                            317-274-0016
                    Principal Analyst
                    Senior Technical Lead
                    Scientific Applications and Performance Tuning
                    Research Technologies
                    University Information Technological Services
                    IUPUI campus
                    Indiana University
    My &quot;pithy&quot; saying:  Science is the art of translating the world
        into language. Unfortunately, that language is mathematics.
    Bumper sticker wisdom: Make it idiot-proof and they will make a
        better idiot.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27100.php">Joshua Ladd: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27098.php">Howard Pritchard: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27095.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27117.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Reply:</strong> <a href="27117.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
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
