<?
$subject_val = "[OMPI devel] delivering SIGUSR2 to an ompi process";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 12:23:24 2010" -->
<!-- isoreceived="20100825162324" -->
<!-- sent="Wed, 25 Aug 2010 11:23:15 -0500" -->
<!-- isosent="20100825162315" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="[OMPI devel] delivering SIGUSR2 to an ompi process" -->
<!-- id="4C754373.4010705_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> [OMPI devel] delivering SIGUSR2 to an ompi process<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 12:23:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8349.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Previous message:</strong> <a href="8347.php">Paul H. Hargrove: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8349.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Reply:</strong> <a href="8349.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Open MPI wizards,
<br>
<p>I'm trying to debug something in my library that gets loaded into my mpi 
<br>
processes when they are started via mpirun.  With other MPIs, I've been 
<br>
able to deliver SIGUSR2 to the process and trigger some debug code I 
<br>
have in my library that sets up a handler for SIGUSR2.  However, when I 
<br>
deliver SIGUSR2 to my process running under OMPI, the process just dies 
<br>
and mpirun logs this:
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 13568 on node hpc-cn2 exited 
<br>
on signal 12 (User defined signal 2).
<br>
--------------------------------------------------------------------------
<br>
<p><p>Is there any way to allow SIGUSR2 to reach my library handler?
<br>
<p>Does OMPI use SIGUSR1/2 for other purposes?
<br>
<p>Is there some other clever way I can kick my library at runtime to dump 
<br>
its debug code?  Like maybe interface with the MPI debug code somehow so 
<br>
things like padb could trigger this debug logic?
<br>
<p>Thanks in advance,
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8349.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Previous message:</strong> <a href="8347.php">Paul H. Hargrove: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8349.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Reply:</strong> <a href="8349.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
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
