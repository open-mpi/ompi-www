<?
$subject_val = "[OMPI users] error when running mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 10 15:04:35 2013" -->
<!-- isoreceived="20130210200435" -->
<!-- sent="Mon, 11 Feb 2013 01:34:10 +0530" -->
<!-- isosent="20130210200410" -->
<!-- name="satya k" -->
<!-- email="satya5509_at_[hidden]" -->
<!-- subject="[OMPI users] error when running mpirun" -->
<!-- id="CAJjHMhN__v0AaqeUbQjUz8N=bKJAwC1J7YW+BwcVFejHtBWigA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] error when running mpirun<br>
<strong>From:</strong> satya k (<em>satya5509_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-10 15:04:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21350.php">Ralph Castain: "Re: [OMPI users] error when running mpirun"</a>
<li><strong>Previous message:</strong> <a href="21348.php">satya k: "[OMPI users] running mpi job.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21350.php">Ralph Castain: "Re: [OMPI users] error when running mpirun"</a>
<li><strong>Reply:</strong> <a href="21350.php">Ralph Castain: "Re: [OMPI users] error when running mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I m getting the below error when executing mpirun with hostfile option
<br>
<p>$mpirun -np 4 -hostfile nodes ./hello
<br>
<p>orted: error while loading shared libraries: libnuma.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 11798) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
<p>Also checked with the echo $LD_LIBRARY_PATH command on the nodes, Its
<br>
giving output as /apps/mpi/lib where lib files exists.
<br>
<p>Any suggestions... I could not find anything as I am a newbie..
<br>
<p><pre>
---
Albatross
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21349/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21350.php">Ralph Castain: "Re: [OMPI users] error when running mpirun"</a>
<li><strong>Previous message:</strong> <a href="21348.php">satya k: "[OMPI users] running mpi job.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21350.php">Ralph Castain: "Re: [OMPI users] error when running mpirun"</a>
<li><strong>Reply:</strong> <a href="21350.php">Ralph Castain: "Re: [OMPI users] error when running mpirun"</a>
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
