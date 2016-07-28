<?
$subject_val = "[OMPI devel] Open MPI Checkpoint-restart bug";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 00:16:19 2011" -->
<!-- isoreceived="20110506041619" -->
<!-- sent="Fri, 6 May 2011 00:16:13 -0400" -->
<!-- isosent="20110506041613" -->
<!-- name="Kishor Kharbas" -->
<!-- email="kkharba_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI Checkpoint-restart bug" -->
<!-- id="BANLkTimxmr2829NZbZc2=DEjVpC0WqnySA_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI Checkpoint-restart bug<br>
<strong>From:</strong> Kishor Kharbas (<em>kkharba_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-06 00:16:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9252.php">Hugo Meyer: "[OMPI devel] Paffinity Error."</a>
<li><strong>Previous message:</strong> <a href="9250.php">Joshua Hursey: "[OMPI devel] OMPI Meeting Schedule Change"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings!
<br>
<p>I ran into errors when using Open MPI's checkpoint restart functionality.
<br>
After debugging the application(ompi-restart) I found
<br>
few variables overflow when running MPI application with more than 128
<br>
processes. I identified the places that cause an
<br>
overflow and changed the definition of the concerned variables.
<br>
<p>I have attached a detailed bug-report with the mail describing the error
<br>
scenario and changes which I feel should be made.
<br>
The patch files corresponding to 2 files which need to be changed are
<br>
attached too.
<br>
<p>I request the community to review the changes and incorporate them in the
<br>
code in an appropriate way.
<br>
Please let me know if more  information is need about this.
<br>
<p>Thank you.
<br>
Kishor Kharbas
<br>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9251/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9251/OpenMPI_CR_bug-report.txt">OpenMPI_CR_bug-report.txt</a>
</ul>
<!-- attachment="OpenMPI_CR_bug-report.txt" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9251/odls_base_default_fns.c.patch">odls_base_default_fns.c.patch</a>
</ul>
<!-- attachment="odls_base_default_fns.c.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9251/orte_globals.h.patch">orte_globals.h.patch</a>
</ul>
<!-- attachment="orte_globals.h.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9252.php">Hugo Meyer: "[OMPI devel] Paffinity Error."</a>
<li><strong>Previous message:</strong> <a href="9250.php">Joshua Hursey: "[OMPI devel] OMPI Meeting Schedule Change"</a>
<!-- nextthread="start" -->
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
