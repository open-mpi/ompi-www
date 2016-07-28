<?
$subject_val = "[OMPI users] fork / exec from an MPI process";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 20:34:06 2010" -->
<!-- isoreceived="20100525003406" -->
<!-- sent="Mon, 24 May 2010 18:33:36 -0600" -->
<!-- isosent="20100525003336" -->
<!-- name="tom fogal" -->
<!-- email="tfogal_at_[hidden]" -->
<!-- subject="[OMPI users] fork / exec from an MPI process" -->
<!-- id="auto-000022769320_at_sci.utah.edu" -->
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
<strong>Subject:</strong> [OMPI users] fork / exec from an MPI process<br>
<strong>From:</strong> tom fogal (<em>tfogal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 20:33:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13152.php">Ralph Castain: "Re: [OMPI users] fork / exec from an MPI process"</a>
<li><strong>Previous message:</strong> <a href="13150.php">Peter Thompson: "[OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13152.php">Ralph Castain: "Re: [OMPI users] fork / exec from an MPI process"</a>
<li><strong>Reply:</strong> <a href="13152.php">Ralph Castain: "Re: [OMPI users] fork / exec from an MPI process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Our project is fork / exec'ing in some cases to provide a service for
<br>
some of the processes within our MPI job.  Open MPI spews big warnings
<br>
to the terminal about this.  It explains how to disable the message,
<br>
but I'd really like it to not pop up regardless.
<br>
<p>The child process does not perform any MPI calls, or even access the
<br>
network.  In many cases, it probably doesn't even use sockets.
<br>
<p>Is there any way I could disable this message?  Perhaps some special
<br>
Open MPI code I could insert:
<br>
<p>&nbsp;&nbsp;#ifdef OPENMPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;disable_fork_exec_warning();
<br>
&nbsp;&nbsp;#endif
<br>
<p>?
<br>
<p>Thanks,
<br>
<p>-tom
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13152.php">Ralph Castain: "Re: [OMPI users] fork / exec from an MPI process"</a>
<li><strong>Previous message:</strong> <a href="13150.php">Peter Thompson: "[OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13152.php">Ralph Castain: "Re: [OMPI users] fork / exec from an MPI process"</a>
<li><strong>Reply:</strong> <a href="13152.php">Ralph Castain: "Re: [OMPI users] fork / exec from an MPI process"</a>
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
