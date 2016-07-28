<?
$subject_val = "[OMPI users] open mpi and MLX";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 10:19:27 2014" -->
<!-- isoreceived="20141209151927" -->
<!-- sent="Tue, 9 Dec 2014 15:16:24 +0000" -->
<!-- isosent="20141209151624" -->
<!-- name="Faraj, Daniel A" -->
<!-- email="daniel.a.faraj_at_[hidden]" -->
<!-- subject="[OMPI users] open mpi and MLX" -->
<!-- id="9119B351DC3E914DB262CE51CCDF87CA095F049D_at_CRSMSX102.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] open mpi and MLX<br>
<strong>From:</strong> Faraj, Daniel A (<em>daniel.a.faraj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 10:16:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25935.php">Ralph Castain: "Re: [OMPI users] open mpi and MLX"</a>
<li><strong>Previous message:</strong> <a href="25933.php">Manoj Vaghela: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25935.php">Ralph Castain: "Re: [OMPI users] open mpi and MLX"</a>
<li><strong>Reply:</strong> <a href="25935.php">Ralph Castain: "Re: [OMPI users] open mpi and MLX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having a trouble running simple benchmarks like osu bidirectional bandwidth tests with recent OMPI (&gt; version 1.8.1)over MLX.
<br>
All versions including 1.8.1 seem to work.
<br>
The issue is that FDR will hang frequently and will complain about physical memory available for user run is very low.
<br>
<p>The bug starts in v1.8.2.
<br>
I searched the src code for differences, but no luck.
<br>
<p>I get the message below and hangs...
<br>
--------------------------------------------------------------------------
<br>
WARNING: It appears that your OpenFabrics subsystem is configured to only
<br>
allow registering part of your physical memory.  This can cause MPI jobs to
<br>
run with erratic performance, hang, and/or crash.
<br>
<p>This may be caused by your OpenFabrics vendor limiting the amount of
<br>
physical memory that can be registered.  You should investigate the
<br>
relevant Linux kernel module parameters that control how much physical
<br>
memory can be registered, and increase them to allow registering all
<br>
physical memory on your machine.
<br>
<p>See this Open MPI FAQ item for more information on these Linux kernel module
<br>
parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>&nbsp;&nbsp;Local host:              sb-cn16
<br>
&nbsp;&nbsp;Registerable memory:     24576 MiB
<br>
&nbsp;&nbsp;Total memory:            65457 MiB
<br>
<p>Your MPI job will continue, but may be behave poorly and/or hang.
<br>
<p><p>---------------
<br>
Daniel Faraj
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25934/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25935.php">Ralph Castain: "Re: [OMPI users] open mpi and MLX"</a>
<li><strong>Previous message:</strong> <a href="25933.php">Manoj Vaghela: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25935.php">Ralph Castain: "Re: [OMPI users] open mpi and MLX"</a>
<li><strong>Reply:</strong> <a href="25935.php">Ralph Castain: "Re: [OMPI users] open mpi and MLX"</a>
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
