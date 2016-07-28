<?
$subject_val = "[OMPI users] Buffer allocation at startup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 14:11:02 2015" -->
<!-- isoreceived="20151118191102" -->
<!-- sent="Wed, 18 Nov 2015 13:10:57 -0600" -->
<!-- isosent="20151118191057" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="[OMPI users] Buffer allocation at startup" -->
<!-- id="CADKQjjfFQJYv__0wtjsiRjA+CE8wWhLSWskaDyB7cMg+C8GU_A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Buffer allocation at startup<br>
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-18 14:10:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28049.php">Howard Pritchard: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<li><strong>Previous message:</strong> <a href="28047.php">Ibrahim Ikhlawi: "[OMPI users] mpijavac doesn't compile any thing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I want to set process affinity at startup. Currently, I do this after
<br>
calling MPI_Init. I have the suspicion that MPI_Init already allocates
<br>
communication buffers, which may thus be allocated on the wrong socket. Is
<br>
this indeed a problem? Is there a way to avoid this?
<br>
<p>-erik
<br>
<p><pre>
-- 
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28048/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28049.php">Howard Pritchard: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<li><strong>Previous message:</strong> <a href="28047.php">Ibrahim Ikhlawi: "[OMPI users] mpijavac doesn't compile any thing"</a>
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
