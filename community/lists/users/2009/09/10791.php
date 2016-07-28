<?
$subject_val = "[OMPI users] Debugging OpenMPI calls";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 05:58:23 2009" -->
<!-- isoreceived="20090928095823" -->
<!-- sent="Mon, 28 Sep 2009 02:57:59 -0700" -->
<!-- isosent="20090928095759" -->
<!-- name="Aniruddha Marathe" -->
<!-- email="marathe.aniruddha_at_[hidden]" -->
<!-- subject="[OMPI users] Debugging OpenMPI calls" -->
<!-- id="f93233e90909280257y22c680bax5f93c02daa8c54e2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Debugging OpenMPI calls<br>
<strong>From:</strong> Aniruddha Marathe (<em>marathe.aniruddha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 05:57:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10792.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="10790.php">Thomas Ropars: "Re: [OMPI users] segfault on finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10794.php">Jeff Squyres: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<li><strong>Reply:</strong> <a href="10794.php">Jeff Squyres: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am new to OpenMPI library and I am trying to step through common MPI
<br>
communication calls using gdb. I attach gdb to one of the processes
<br>
(using the steps mentioned on the OpenMPI Debugging FAQ page) and set
<br>
a breakpoint on 'MPI_Barrier' and expect gdb to jump into the
<br>
definition of MPI_Barrier function.
<br>
<p>I've manually added -g3 compilation flag to the Makefiles in some of
<br>
the directories that I thought relevant ({ROOT}/ompi/mpi/c etc). I
<br>
also specified the source file paths in gdb using the 'dir' command.
<br>
However, gdb is unable to jump into the appropriate source location
<br>
when it hits the breakpoint.
<br>
<p>Could anyone please let me know if I am missing something here?
<br>
<p>Thanks for looking into my post.
<br>
<p>Regards,
<br>
Aniruddha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10792.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="10790.php">Thomas Ropars: "Re: [OMPI users] segfault on finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10794.php">Jeff Squyres: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<li><strong>Reply:</strong> <a href="10794.php">Jeff Squyres: "Re: [OMPI users] Debugging OpenMPI calls"</a>
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
