<?
$subject_val = "[OMPI users] man-files not installed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 07:46:34 2009" -->
<!-- isoreceived="20091221124634" -->
<!-- sent="Mon, 21 Dec 2009 13:46:28 +0100" -->
<!-- isosent="20091221124628" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] man-files not installed" -->
<!-- id="9b0da5ce0912210446x58383617r9d3b5cb54f85c95f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] man-files not installed<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-21 07:46:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11621.php">Ralph Castain: "Re: [OMPI users] man-files not installed"</a>
<li><strong>Previous message:</strong> <a href="11619.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11621.php">Ralph Castain: "Re: [OMPI users] man-files not installed"</a>
<li><strong>Reply:</strong> <a href="11621.php">Ralph Castain: "Re: [OMPI users] man-files not installed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I just installed open-mpi version 1.4,
<br>
and now i noticed that the man-files are not properly installed.
<br>
<p>When i do
<br>
&nbsp;&nbsp;man mpirun
<br>
i get a different output than what is in
<br>
&nbsp;&nbsp;openmpi/share/man/man1/mpirun.1
<br>
<p>I installed with this configuration:
<br>
&nbsp;&nbsp;./configure --prefix=/opt/openmpi-1.4 --disable-mpi-f77
<br>
--disable-mpi-f90 --with-threads
<br>
and afterwards made a soft link
<br>
<p>ln -s /opt/openmpi-1.4 /opt/openmpi
<br>
<p>This is on fedora fc8, but i have the same problem on my gentoo
<br>
machines (2.6.29-gentoo-r5)
<br>
Does anybody know how to get replace the old man files with the new ones?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11621.php">Ralph Castain: "Re: [OMPI users] man-files not installed"</a>
<li><strong>Previous message:</strong> <a href="11619.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11621.php">Ralph Castain: "Re: [OMPI users] man-files not installed"</a>
<li><strong>Reply:</strong> <a href="11621.php">Ralph Castain: "Re: [OMPI users] man-files not installed"</a>
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
