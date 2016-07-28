<?
$subject_val = "[OMPI users] using totalview";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  8 12:02:35 2010" -->
<!-- isoreceived="20101208170235" -->
<!-- sent="Wed, 8 Dec 2010 18:02:31 +0100" -->
<!-- isosent="20101208170231" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] using totalview" -->
<!-- id="AANLkTi=xHNHuAOksstxQ+B6S3zC0EZrFtXnzs5wNXbt6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] using totalview<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-08 12:02:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15044.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15042.php">Eugene Loh: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I am currently testing a demo version of totalview.
<br>
I am putting this question here, because the totalview
<br>
manual is very sparse on information about OpenMPI.
<br>
<p>The first question is how to start totalview with mpirun.
<br>
I saw that mpirun has some inbuilt totalview capability.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For debugging:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-debug, --debug
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invoke    the    user-level    debugger    indicated    by   the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_base_user_debugger MCA parameter.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-debugger, --debugger
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sequence of debuggers to search for when --debug is  used  (i.e.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a synonym for orte_base_user_debugger MCA parameter).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-tv, --tv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Launch processes under the TotalView debugger.  Deprecated back-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wards compatibility flag. Synonym for --debug.
<br>
<p>I tried 'mpirun -np 4 -tv HelloMPI' but that seemed to b debugging mpirun,
<br>
and i wasn't able to open the source window for HelloMPI.cpp.
<br>
<p>I don't understand how the '--debug' option must be used;
<br>
in particular, i don't understand &quot;user-level debugger indicated by
<br>
the orte_base_user_debugger MCA parameter.&quot;
<br>
<p>Another question (which might be solved if i can correctly start up
<br>
totalview) concerns
<br>
the hostfile and rankfile parameters of mpirun: how can i start an
<br>
open mpi application with
<br>
totalview so that my application starts the processes on the correct
<br>
processors as
<br>
defined in hostfile and rankfile?
<br>
<p>Thank You
<br>
<p>Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15044.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15042.php">Eugene Loh: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
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
