<?
$subject_val = "[OMPI devel] Ideas for notifying completion of ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 17:36:47 2011" -->
<!-- isoreceived="20110615213647" -->
<!-- sent="Wed, 15 Jun 2011 17:36:42 -0400" -->
<!-- isosent="20110615213642" -->
<!-- name="Kishor Kharbas" -->
<!-- email="kkharba_at_[hidden]" -->
<!-- subject="[OMPI devel] Ideas for notifying completion of ompi-restart" -->
<!-- id="BANLkTikr=8HzwXid6g=1Cga9ciWEOD_CVA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Ideas for notifying completion of ompi-restart<br>
<strong>From:</strong> Kishor Kharbas (<em>kkharba_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-15 17:36:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9379.php">Peter Kjellström: "Re: [OMPI devel] new btl"</a>
<li><strong>Previous message:</strong> <a href="9377.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9381.php">Josh Hursey: "Re: [OMPI devel] Ideas for notifying completion of ompi-restart"</a>
<li><strong>Reply:</strong> <a href="9381.php">Josh Hursey: "Re: [OMPI devel] Ideas for notifying completion of ompi-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello !
<br>
<p>I am working on some simulations where I have to perform periodic
<br>
kill-restart and checkpointing on a MPI application.
<br>
<p>As a checkpoint can take place immediately after restart I need some way to
<br>
know whether ompi-restart of the application is complete.
<br>
If I do not ensure that restart of all application processes is complete,
<br>
ompi-checkpoint fails after throwing a slew of errors.
<br>
<p>Can someone please suggest an idea for having some kind of notification
<br>
indicating restarts have complete (in the sense that checkpointing .
<br>
<p>Thank you,
<br>
Kishor
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9378/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9379.php">Peter Kjellström: "Re: [OMPI devel] new btl"</a>
<li><strong>Previous message:</strong> <a href="9377.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9381.php">Josh Hursey: "Re: [OMPI devel] Ideas for notifying completion of ompi-restart"</a>
<li><strong>Reply:</strong> <a href="9381.php">Josh Hursey: "Re: [OMPI devel] Ideas for notifying completion of ompi-restart"</a>
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
