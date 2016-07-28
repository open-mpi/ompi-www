<?
$subject_val = "[OMPI devel] 1.10.3rc MTT failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 09:13:08 2016" -->
<!-- isoreceived="20160425131308" -->
<!-- sent="Mon, 25 Apr 2016 06:13:05 -0700" -->
<!-- isosent="20160425131305" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.10.3rc MTT failures" -->
<!-- id="C682A88A-EBCB-46F6-B1FF-2496AF3B0685_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] 1.10.3rc MTT failures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-25 09:13:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18810.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Previous message:</strong> <a href="18808.php">Gilles Gouaillardet: "[OMPI devel] psm mtl and no link"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18810.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Reply:</strong> <a href="18810.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m seeing some consistent errors in the 1.10.3rc MTT results and would appreciate it if folks could check them out:
<br>
<p>ONESIDED:
<br>
onesided/cxx_win_attr:
<br>
[**ERROR**]: MPI_COMM_WORLD rank 0, file cxx_win_attr.cc:50:
<br>
Win::Get_attr: Got wrong value for disp unit
<br>
[**ERROR**]: MPI_COMM_WORLD rank 1, file cxx_win_attr.cc:50:
<br>
Win::Get_attr: Got wrong value for disp
<br>
<p><p>DATATYPE:
<br>
datatype/predefined-datatype-name 
<br>
MPI_LONG_LONG                    != MPI_LONG_LONG_INT    
<br>
<p><p>LOOP SPAWN:
<br>
too many retries sending message to &lt;addr&gt;, giving up
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18810.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Previous message:</strong> <a href="18808.php">Gilles Gouaillardet: "[OMPI devel] psm mtl and no link"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18810.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Reply:</strong> <a href="18810.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
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
