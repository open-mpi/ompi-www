<?
$subject_val = "[OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 06:59:28 2015" -->
<!-- isoreceived="20150316105928" -->
<!-- sent="Mon, 16 Mar 2015 11:59:06 +0100" -->
<!-- isosent="20150316105906" -->
<!-- name="Pablo Escobar Lopez" -->
<!-- email="pablo.escobarlopez_at_[hidden]" -->
<!-- subject="[OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?" -->
<!-- id="CANKY03VK=22XA-ya5MJXHwsVn1t8byC=taK=3fKQj_bZ+URQTg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?<br>
<strong>From:</strong> Pablo Escobar Lopez (<em>pablo.escobarlopez_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-16 06:59:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26477.php">Ralph Castain: "Re: [OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?"</a>
<li><strong>Previous message:</strong> <a href="26475.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26477.php">Ralph Castain: "Re: [OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?"</a>
<li><strong>Reply:</strong> <a href="26477.php">Ralph Castain: "Re: [OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am planning to upgrade my software stack and now I will have machines
<br>
without infiniband and machines with infiniband, I would like to share the
<br>
same software stack across all those machines if possible.
<br>
<p>I am thinking about trying to compile openmpi with infiniband support (I
<br>
would compile openmpi in one of the machine connected to the infiniband
<br>
network) and then use this openmpi version also in the non infiniband
<br>
machines. I am expecting that when using this version of openmpi with
<br>
infiniband support enabled in a non-infiniband machine openmpi will detect
<br>
this and will fallback to use ethernet.
<br>
<p>Am I expecting correctly or this won't work? Does anyone has experience
<br>
with this scenario?  In case this is possible, is there any
<br>
configuration/compilation tweaks required when building openmpi for this to
<br>
work?
<br>
<p>thanks in advance for any help.
<br>
regards,
<br>
Pablo.
<br>
<p><pre>
-- 
Pablo Escobar L&#195;&#179;pez
HPC systems engineer
Biozentrum, University of Basel
Swiss Institute of Bioinformatics SIB
Email: pablo.escobarlopez_at_[hidden]
Phone: +41 61 267 21 80
<a href="http://www.biozentrum.unibas.ch">http://www.biozentrum.unibas.ch</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26476/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26477.php">Ralph Castain: "Re: [OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?"</a>
<li><strong>Previous message:</strong> <a href="26475.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26477.php">Ralph Castain: "Re: [OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?"</a>
<li><strong>Reply:</strong> <a href="26477.php">Ralph Castain: "Re: [OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?"</a>
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
