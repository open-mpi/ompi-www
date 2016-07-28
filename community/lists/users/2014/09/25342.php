<?
$subject_val = "[OMPI users] About debugging and asynchronous communication";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 02:43:17 2014" -->
<!-- isoreceived="20140918064317" -->
<!-- sent="Thu, 18 Sep 2014 16:43:16 +1000" -->
<!-- isosent="20140918064316" -->
<!-- name="XingFENG" -->
<!-- email="xingfeng_at_[hidden]" -->
<!-- subject="[OMPI users] About debugging and asynchronous communication" -->
<!-- id="CAKY4v9--z+YDqdXcjuuJAnsVArEgOT4Xy=Yiga0fm1VzHxUS1Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] About debugging and asynchronous communication<br>
<strong>From:</strong> XingFENG (<em>xingfeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 02:43:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25343.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25341.php">Ralph Castain: "Re: [OMPI users] --prefix, segfaulting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25343.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25343.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25344.php">Jeff Squyres (jsquyres): "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am new to MPI. Please forgive me if I ask a redundant question.
<br>
<p>I am now programming about graph processing using MPI. I get two problems
<br>
as described below.
<br>
<p>a. How to get more information about errors? I got errors like below. This
<br>
says that program exited abnormally in function *MPI_Test().* But is there
<br>
a way to know more about the error?
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>**** An error occurred in MPI_Test*** on communicator MPI_COMM_WORLD***
<br>
MPI_ERR_TRUNCATE: message truncated*** MPI_ERRORS_ARE_FATAL: your MPI job
<br>
will now
<br>
abort--------------------------------------------------------------------------mpirun
<br>
has exited due to process rank 2 with PID 4341 onnode
<br>
xing-HP-Compaq-Elite-8300-SFF exiting improperly. There are two reasons
<br>
this could occur:1. this process did not call &quot;init&quot; before exiting, but
<br>
others inthe job did. This can cause a job to hang indefinitely while it
<br>
waitsfor all processes to call &quot;init&quot;. By rule, if one process calls
<br>
&quot;init&quot;,then ALL processes must call &quot;init&quot; prior to termination.2. this
<br>
process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.By rule, all
<br>
processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior toexiting or it will
<br>
be considered an &quot;abnormal termination&quot;This may have caused other processes
<br>
in the application to beterminated by signals sent by mpirun (as reported
<br>
here).--------------------------------------------------------------------------***
<br>
An error occurred in MPI_Test*** on communicator MPI_COMM_WORLD***
<br>
MPI_ERR_TRUNCATE: message truncated*** MPI_ERRORS_ARE_FATAL: your MPI job
<br>
will now abort*** An error occurred in MPI_Test*** on communicator
<br>
MPI_COMM_WORLD*** MPI_ERR_TRUNCATE: message truncated***
<br>
MPI_ERRORS_ARE_FATAL: your MPI job will now
<br>
abort--------------------------------------------------------------------------mpirun
<br>
has exited due to process rank 2 with PID 4378 onnode SFF exiting
<br>
improperly. *
<br>
b. Are there anything to note about asynchronous communication? I use
<br>
MPI_Isend, MPI_Irecv, MPI_Test to implement asynchronous communication. My
<br>
program works well on small data sets(10K nodes graphs), but it exits
<br>
abnormally on large data set (1M nodes graphs).
<br>
<p>Any help would be greatly appreciated!
<br>
<p><p><pre>
-- 
Best Regards.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25342/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25343.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25341.php">Ralph Castain: "Re: [OMPI users] --prefix, segfaulting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25343.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25343.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25344.php">Jeff Squyres (jsquyres): "Re: [OMPI users] About debugging and asynchronous communication"</a>
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
