<?
$subject_val = "[OMPI devel] Signals";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 13:00:40 2008" -->
<!-- isoreceived="20080408170040" -->
<!-- sent="Tue, 08 Apr 2008 12:59:53 -0400" -->
<!-- isosent="20080408165953" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="[OMPI devel] Signals" -->
<!-- id="C4211CC9.18E3C%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Signals<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-08 12:59:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3683.php">Pak Lui: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="3681.php">Ralph H Castain: "Re: [OMPI devel] mpirun return code problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3683.php">Pak Lui: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="3683.php">Pak Lui: "Re: [OMPI devel] Signals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running into a situation where I am trying to deliver a signal to the
<br>
mpi procs (sigusr2).  I deliver this to mpirun, which propagates it to the
<br>
mpi procs, but then proceeds to kill the children.  Is there an easy way
<br>
that I can get around this ?  I am using this mechanism in a situation where
<br>
I don't have a debugger, and trying to use this to turn on debugging when I
<br>
hit a hang, so killing the mpi procs is really not what I want to have
<br>
happen.
<br>
<p>Thanks,
<br>
Rich
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3683.php">Pak Lui: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="3681.php">Ralph H Castain: "Re: [OMPI devel] mpirun return code problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3683.php">Pak Lui: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="3683.php">Pak Lui: "Re: [OMPI devel] Signals"</a>
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
