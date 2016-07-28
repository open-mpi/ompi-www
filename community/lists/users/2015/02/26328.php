<?
$subject_val = "[OMPI users] Is there a way to define a dynamic installation path for OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 16 13:38:48 2015" -->
<!-- isoreceived="20150216183848" -->
<!-- sent="Mon, 16 Feb 2015 13:38:40 -0500" -->
<!-- isosent="20150216183840" -->
<!-- name="Mehmet Belgin" -->
<!-- email="mehmet.belgin_at_[hidden]" -->
<!-- subject="[OMPI users] Is there a way to define a dynamic installation path for OpenMPI?" -->
<!-- id="A3E7D2B0-8C5B-4AF3-8758-FC4FD9C7E9DB_at_oit.gatech.edu" -->
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
<strong>Subject:</strong> [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?<br>
<strong>From:</strong> Mehmet Belgin (<em>mehmet.belgin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-16 13:38:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26329.php">Ralph Castain: "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="26327.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26329.php">Ralph Castain: "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="26329.php">Ralph Castain: "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am sure the subject line is confusing, so let me try to clarify. We installed openMPI in  &#226;&#128;&#156;usr/local/packages&#226;&#128;&#157; on a node that we use for compilations, but this is actually a network-attached share, which is mounted under a different name on compute nodes. 
<br>
<p>I believe the installation path is hardcoded in some of the text/binary files, which is causing warning messages such as:
<br>
<p>--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;knem fail open
<br>
But I couldn't open the help file:
<br>
&nbsp;&nbsp;&nbsp;/usr/local/packages/openmpi/1.8/intel-15.0/share/openmpi/help-mpi-btl-sm.txt: No such file or directory.  Sorry!
<br>
&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;
<br>
<p>Is there a way to install openMPI in a way that it will run from any location as long as the $PATH and $LD_LIBRARY_PATH include required bits?
<br>
<p>Thanks a lot in advance!
<br>
-Mehmet<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26329.php">Ralph Castain: "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="26327.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26329.php">Ralph Castain: "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="26329.php">Ralph Castain: "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
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
