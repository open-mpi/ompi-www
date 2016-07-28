<?
$subject_val = "[OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 14:12:32 2009" -->
<!-- isoreceived="20090430181232" -->
<!-- sent="Thu, 30 Apr 2009 12:12:27 -0600" -->
<!-- isosent="20090430181227" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Inherent limit on #communicators?" -->
<!-- id="71d2d8cc0904301112l36f88d02ga7c2b4ef2f274124_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Inherent limit on #communicators?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 14:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5921.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5919.php">Ralph Castain: "Re: [OMPI devel] Fwd: [ROMIO Req #947] New version of ROMIO?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5921.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5921.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>We seem to have hit a problem here - it looks like we are seeing a built-in
<br>
limit on the number of communicators one can create in a program. The
<br>
program basically does a loop, calling MPI_Comm_split each time through the
<br>
loop to create a sub-communicator, does a reduce operation on the members of
<br>
the sub-communicator, and then calls MPI_Comm_free to release it (this is a
<br>
minimized reproducer for the real code). After 64k times through the loop,
<br>
the program fails.
<br>
<p>This looks remarkably like a 16-bit index that hits a max value and then
<br>
blocks.
<br>
<p>I have looked at the communicator code, but I don't immediately see such a
<br>
field. Is anyone aware of some other place where we would have a limit that
<br>
would cause this problem?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5920/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5921.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5919.php">Ralph Castain: "Re: [OMPI devel] Fwd: [ROMIO Req #947] New version of ROMIO?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5921.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5921.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
