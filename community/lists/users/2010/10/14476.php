<?
$subject_val = "[OMPI users] self-messaging questions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 19:50:26 2010" -->
<!-- isoreceived="20101014235026" -->
<!-- sent="Thu, 14 Oct 2010 19:50:16 -0400" -->
<!-- isosent="20101014235016" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] self-messaging questions" -->
<!-- id="4CB79738.4090902_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] self-messaging questions<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 19:50:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14477.php">Gus Correa: "[OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<li><strong>Previous message:</strong> <a href="14475.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14478.php">Jeff Squyres: "Re: [OMPI users] self-messaging questions"</a>
<li><strong>Reply:</strong> <a href="14478.php">Jeff Squyres: "Re: [OMPI users] self-messaging questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI Pros
<br>
<p>These questions may have appeared before.
<br>
Anyway, I am somewhat confused about self-messaging
<br>
in MPI and OpenMPI.
<br>
<p>Questions:
<br>
<p>*1) Can a process send a message to itself?*
<br>
<p>The book &quot;MPI: The complete reference, Vol. 1, 2nd Ed.&quot;, by Snir et al.,
<br>
page 42, section 2.9.9 (Comments on Receive) says:
<br>
<p>&quot;Therefore, it is unsafe and non-portable to send self-messages with the 
<br>
standard mode, blocking send and receive operations described so far,
<br>
since this may lead to deadlock.&quot;
<br>
<p>*2) Would it be safe and portable to send messages to self, if one uses 
<br>
non-blocking send and recv (MPI_Isend, MPI_Irecv), or with persistent
<br>
communication (MPI_Init_[Send/Recv], MPI_Startall, MPI_Waitall) ?*
<br>
<p>On the other hand, the OpenMPI FAQ seems to say something different,
<br>
i.e., that self-messaging is OK, as long as the
<br>
&quot;self&quot; BTL is turned on:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=all#tcp-btl">http://www.open-mpi.org/faq/?category=all#tcp-btl</a>
<br>
<p>*3) Is this a particular feature or extension provided by OpenMPI,
<br>
beyond the MPI standard?*
<br>
<p>In other words:
<br>
<p>*4) If I write a program with self-messaging, will it
<br>
be portable and run safely when compiled with other MPI implementations?*
<br>
<p><p>Of course, I can use an &quot;if&quot; conditional to copy the data to
<br>
the output buffer, instead of sending the message to self,
<br>
although this makes the code somewhat ugly.
<br>
This brings up yet another question:
<br>
<p>*5) Which one is better/faster: sending messages to self,
<br>
or copying the data to the output buffer?*
<br>
<p>(I would guess with the &quot;sm&quot; btl this would make no difference,
<br>
but who knows ...)
<br>
<p>Thank you,
<br>
<p>Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14477.php">Gus Correa: "[OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<li><strong>Previous message:</strong> <a href="14475.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14478.php">Jeff Squyres: "Re: [OMPI users] self-messaging questions"</a>
<li><strong>Reply:</strong> <a href="14478.php">Jeff Squyres: "Re: [OMPI users] self-messaging questions"</a>
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
