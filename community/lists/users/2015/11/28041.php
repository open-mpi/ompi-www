<?
$subject_val = "[OMPI users] Maximum message size in OpenMPI 1.6.5?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 16 17:01:48 2015" -->
<!-- isoreceived="20151116220148" -->
<!-- sent="Mon, 16 Nov 2015 17:01:44 -0500" -->
<!-- isosent="20151116220144" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="[OMPI users] Maximum message size in OpenMPI 1.6.5?" -->
<!-- id="CADKQjjdkxKen7zMht9jiQPeKUCph_nk5qDVz7uTOgPQ8oreFKA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Maximum message size in OpenMPI 1.6.5?<br>
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-16 17:01:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28042.php">Federico Reghenzani: "[OMPI users] Strange problem with SSH"</a>
<li><strong>Previous message:</strong> <a href="28040.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI State of the Union BOF: this Wednesday!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you know the maximum message size in OpenMPI 1.6.5? I am sending large
<br>
messages, and I find I receive run-time errors such as
<br>
<p>[[23821,1],0][btl_openib_component.c:3496:handle_wc] from shelob001 to:
<br>
shelob0\
<br>
02 error polling LP CQ with status LOCAL LENGTH ERROR status number 1 for
<br>
wr_id\
<br>
&nbsp;c628048 opcode 1  vendor error 105 qp_idx 3
<br>
[(null):15986] Attempt to free memory that is still in use by an ongoing
<br>
MPI co\
<br>
mmunication (buffer 0x2b78b5a2e000, size 1106219008).  MPI job will now
<br>
abort.
<br>
<p>These problems go away when I reduce the message size. I check explicitly
<br>
that the message size is less than INT_MAX doubles, but I may be getting
<br>
close to that limit.
<br>
<p>Can I assume that sending INT_MAX doubles is fine, or will there be integer
<br>
operations using int as a type that occur internally in OpenMPI? If I
<br>
wanted to add a safety check before calling MPI_Isend or MPI_Irecv, what
<br>
limits should I use there? For example, would checking that the message
<br>
size in bytes is less than INT_MAX be more reasonable?
<br>
<p>I realize that this is a bit of a historic question (version 1.6.5).
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28041/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28042.php">Federico Reghenzani: "[OMPI users] Strange problem with SSH"</a>
<li><strong>Previous message:</strong> <a href="28040.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI State of the Union BOF: this Wednesday!"</a>
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
