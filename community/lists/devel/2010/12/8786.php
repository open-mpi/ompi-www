<?
$subject_val = "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 07:38:09 2010" -->
<!-- isoreceived="20101217123809" -->
<!-- sent="17 Dec 2010 12:38:04 +0000" -->
<!-- isosent="20101217123804" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)" -->
<!-- id="Prayer.1.3.3.1012171238040.6184_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D0B53E2.9040909_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 07:38:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8787.php">Ralph Castain: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8785.php">Suraj Prabhakaran: "[OMPI devel]  Problems with Connect/Accept and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="8784.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8787.php">Ralph Castain: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 17 2010, Suraj Prabhakaran wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am observing a behavior where when the parent spawns a child and when 
</span><br>
<span class="quotelev1">&gt;the child terminates abruptly (for example with exit() before 
</span><br>
<span class="quotelev1">&gt;MPI_Finalize() ), the parent also terminates even after both the child 
</span><br>
<span class="quotelev1">&gt;and parent have explicitly called a MPI_disconnect. This turns out to be 
</span><br>
<span class="quotelev1">&gt;a disadvantage.  ...
</span><br>
<p>Indeed.  But that is what will sometimes happen, and it's not primarily
<br>
an OpenMPI issue - though clearly OpenMPI should try to avoid it when
<br>
possible.  It is what happens under some circumstances under some systems.
<br>
You really don't want to know why, I assure you :-(  The root cause is
<br>
a combination of shoddy interface design and too many programs being too
<br>
clever by half.
<br>
<p>The following is key information to provide:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The name and precise variants of the operating system, compilers
<br>
and any libraries used for both parent AND child.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Whether the MPI was being run under a batch scheduler or similar
<br>
controlling application and, if so, the precise variant of that.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The way in which the child failed (e.g. the signal number AND how
<br>
that signal was generated).  If you are sure that it happens with a
<br>
plain exit(), you have answered this one already.
<br>
<p>&nbsp;&nbsp;&nbsp;And, heaven help us all, sometimes the operating system, compiler,
<br>
library and controller configuration, precise environment that the
<br>
MPI program was running under.  Sometimes even other actions of the child
<br>
can matter.
<br>
<p>Finding the last needs considerable expertise, even for an experienced
<br>
administrator, so start with the first three.  All of them are critical
<br>
to this issue, unfortunately.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8787.php">Ralph Castain: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8785.php">Suraj Prabhakaran: "[OMPI devel]  Problems with Connect/Accept and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="8784.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8787.php">Ralph Castain: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
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
