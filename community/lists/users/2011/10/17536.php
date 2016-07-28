<?
$subject_val = "[OMPI users] How to run open MPI without ipoib";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 13 21:12:22 2011" -->
<!-- isoreceived="20111014011222" -->
<!-- sent="Fri, 14 Oct 2011 06:42:17 +0530" -->
<!-- isosent="20111014011217" -->
<!-- name="bhimesh akula" -->
<!-- email="bhimesh.akula_at_[hidden]" -->
<!-- subject="[OMPI users] How to run open MPI without ipoib" -->
<!-- id="CAPOYHva_EavRwe5iCE_fTpe4ytfaX2OuBaYjif_DSSd9j5z+Cg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] How to run open MPI without ipoib<br>
<strong>From:</strong> bhimesh akula (<em>bhimesh.akula_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-13 21:12:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17537.php">Ralph Castain: "Re: [OMPI users] How to run open MPI without ipoib"</a>
<li><strong>Previous message:</strong> <a href="17535.php">ramu: "[OMPI users] Running MPI apps (example apps in OpenMPI) on OFED stack without IPoIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17537.php">Ralph Castain: "Re: [OMPI users] How to run open MPI without ipoib"</a>
<li><strong>Reply:</strong> <a href="17537.php">Ralph Castain: "Re: [OMPI users] How to run open MPI without ipoib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI,
<br>
<p>We have multi node set up and they are back to back connected.we are trying
<br>
to run open MPI without using ipoib means not using normal ethernet
<br>
interface instead it has to go through our uverbs interface.
<br>
<p>This is the command i tried ...
<br>
&quot;mpirun --prefix /usr/local/ -np 2 --mca btl openib,self --mca
<br>
btl_openib_cpc_include rdmacm --mca btl_openib_if_include &quot;mthca_0:1&quot; -H
<br>
remotehostip osu_bw .
<br>
<p>Here in above command i have given again IP only as no idea on what
<br>
parameters has to be given to mention remote host(like IP any other
<br>
parameter to identify remote host while running MPI without ipoib).
<br>
<p>And also please give me a way to run the open MPI without ipoib and using
<br>
our ibverbs interface on multi node set up.please help me on this ASAP ...
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17536/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17537.php">Ralph Castain: "Re: [OMPI users] How to run open MPI without ipoib"</a>
<li><strong>Previous message:</strong> <a href="17535.php">ramu: "[OMPI users] Running MPI apps (example apps in OpenMPI) on OFED stack without IPoIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17537.php">Ralph Castain: "Re: [OMPI users] How to run open MPI without ipoib"</a>
<li><strong>Reply:</strong> <a href="17537.php">Ralph Castain: "Re: [OMPI users] How to run open MPI without ipoib"</a>
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
