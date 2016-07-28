<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 12:10:56 2008" -->
<!-- isoreceived="20080909161056" -->
<!-- sent="Tue, 09 Sep 2008 09:10:19 -0700" -->
<!-- isosent="20080909161019" -->
<!-- name="Prasanna Ranganathan" -->
<!-- email="prasanna_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="C4EBEDFB.2F78%prasanna_at_searchme.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.15.1220976042.32255.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2<br>
<strong>From:</strong> Prasanna Ranganathan (<em>prasanna_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-09 12:10:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6484.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="6482.php">Jeremy Stout: "Re: [OMPI users] libimf.so Error"</a>
<li><strong>Maybe in reply to:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6501.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff/Paul,
<br>
<p>&nbsp;Thanks a lot for your replies.
<br>
<p>&nbsp;I am looking into upgrading MPI to a newer version. As I use a few custom
<br>
built libraries as part of my main parallel application that recommend the
<br>
use of 1.1.2, I first need to check compatibility issues with the newer
<br>
version before I can upgrade.
<br>
<p>&nbsp;Paul,
<br>
<p>The following is the output of ulimit -a
<br>
<p>core file size          (blocks, -c) 0
<br>
data seg size           (kbytes, -d) unlimited
<br>
file size               (blocks, -f) unlimited
<br>
pending signals                 (-i) 268288
<br>
max locked memory       (kbytes, -l) 32
<br>
max memory size         (kbytes, -m) unlimited
<br>
open files                      (-n) 8192
<br>
pipe size            (512 bytes, -p) 8
<br>
POSIX message queues     (bytes, -q) 819200
<br>
stack size              (kbytes, -s) 8192
<br>
cpu time               (seconds, -t) unlimited
<br>
max user processes              (-u) 268288
<br>
virtual memory          (kbytes, -v) unlimited
<br>
file locks                      (-x) unlimited
<br>
<p><p>&nbsp;As I mentioned before, I am able to run it successfully with 997 processes
<br>
around 6 out of 10 times with the rest failing. I tried with 500 processes
<br>
and I do get the odd failure in that case too.
<br>
<p>Regards,
<br>
<p>Prasanna.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6484.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="6482.php">Jeremy Stout: "Re: [OMPI users] libimf.so Error"</a>
<li><strong>Maybe in reply to:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6501.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
