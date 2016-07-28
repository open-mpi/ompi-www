<?
$subject_val = "[OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 14 09:14:11 2012" -->
<!-- isoreceived="20120514131411" -->
<!-- sent="Mon, 14 May 2012 15:14:07 +0200" -->
<!-- isosent="20120514131407" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="[OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory" -->
<!-- id="CACd6u-rv5Qo4tB57YqrXeNB0sU+qnGzbW+ZquQ-8s4fAPN686A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory<br>
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-14 09:14:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19269.php">Bert Wesarg: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Previous message:</strong> <a href="19267.php">Jeff Squyres: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19278.php">Jeff Squyres: "Re: [OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory"</a>
<li><strong>Reply:</strong> <a href="19278.php">Jeff Squyres: "Re: [OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open-MPI developers,
<br>
<p>I have built my own package of openmpi 1.6 based on the RHEL6 package
<br>
on my SL6 test machine. My tests fail like this:
<br>
<p>Open RTE was unable to open the hostfile:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/openmpi-intel/etc/openmpi-default-hostfile
<br>
Check to make sure the path and filename are correct.
<br>
<p>This is because I have configured openmpi with ./configure
<br>
--prefix=/usr/lib64/openmpi-intel/
<br>
--sysconfdir=/etc/openmpi-x86_64-intel/.
<br>
<p>The default hostfile was placed by 'make install' to
<br>
/etc/openmpi-x86_64-intel/openmpi-default-hostfile, but
<br>
orte/runtime/orte_mca_params.c wants a file in etc under the
<br>
configured prefix.
<br>
<p>Regards, G&#246;tz Waschk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19269.php">Bert Wesarg: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Previous message:</strong> <a href="19267.php">Jeff Squyres: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19278.php">Jeff Squyres: "Re: [OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory"</a>
<li><strong>Reply:</strong> <a href="19278.php">Jeff Squyres: "Re: [OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory"</a>
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
