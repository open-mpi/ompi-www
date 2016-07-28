<?
$subject_val = "Re: [OMPI users] About debugging and asynchronous communication";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 02:52:13 2014" -->
<!-- isoreceived="20140918065213" -->
<!-- sent="Thu, 18 Sep 2014 16:52:13 +1000" -->
<!-- isosent="20140918065213" -->
<!-- name="XingFENG" -->
<!-- email="xingfeng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About debugging and asynchronous communication" -->
<!-- id="CAKY4v98kyYO9vdp6Gqdp=U7g3i1d17Qf8G+x=7KkLMEp3jRJ7g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAKY4v9--z+YDqdXcjuuJAnsVArEgOT4Xy=Yiga0fm1VzHxUS1Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] About debugging and asynchronous communication<br>
<strong>From:</strong> XingFENG (<em>xingfeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 02:52:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25344.php">Jeff Squyres (jsquyres): "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25342.php">XingFENG: "[OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25342.php">XingFENG: "[OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25344.php">Jeff Squyres (jsquyres): "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
By the way, I am using Open MPI 1.6.5 and programming with C++.
<br>
<p>On Thu, Sep 18, 2014 at 4:43 PM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to MPI. Please forgive me if I ask a redundant question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am now programming about graph processing using MPI. I get two problems
</span><br>
<span class="quotelev1">&gt; as described below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a. How to get more information about errors? I got errors like below. This
</span><br>
<span class="quotelev1">&gt; says that program exited abnormally in function *MPI_Test().* But is
</span><br>
<span class="quotelev1">&gt; there a way to know more about the error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **** An error occurred in MPI_Test*** on communicator MPI_COMM_WORLD***
</span><br>
<span class="quotelev1">&gt; MPI_ERR_TRUNCATE: message truncated*** MPI_ERRORS_ARE_FATAL: your MPI job
</span><br>
<span class="quotelev1">&gt; will now
</span><br>
<span class="quotelev1">&gt; abort--------------------------------------------------------------------------mpirun
</span><br>
<span class="quotelev1">&gt; has exited due to process rank 2 with PID 4341 onnode
</span><br>
<span class="quotelev1">&gt; xing-HP-Compaq-Elite-8300-SFF exiting improperly. There are two reasons
</span><br>
<span class="quotelev1">&gt; this could occur:1. this process did not call &quot;init&quot; before exiting, but
</span><br>
<span class="quotelev1">&gt; others inthe job did. This can cause a job to hang indefinitely while it
</span><br>
<span class="quotelev1">&gt; waitsfor all processes to call &quot;init&quot;. By rule, if one process calls
</span><br>
<span class="quotelev1">&gt; &quot;init&quot;,then ALL processes must call &quot;init&quot; prior to termination.2. this
</span><br>
<span class="quotelev1">&gt; process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.By rule, all
</span><br>
<span class="quotelev1">&gt; processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior toexiting or it will
</span><br>
<span class="quotelev1">&gt; be considered an &quot;abnormal termination&quot;This may have caused other processes
</span><br>
<span class="quotelev1">&gt; in the application to beterminated by signals sent by mpirun (as reported
</span><br>
<span class="quotelev1">&gt; here).--------------------------------------------------------------------------***
</span><br>
<span class="quotelev1">&gt; An error occurred in MPI_Test*** on communicator MPI_COMM_WORLD***
</span><br>
<span class="quotelev1">&gt; MPI_ERR_TRUNCATE: message truncated*** MPI_ERRORS_ARE_FATAL: your MPI job
</span><br>
<span class="quotelev1">&gt; will now abort*** An error occurred in MPI_Test*** on communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD*** MPI_ERR_TRUNCATE: message truncated***
</span><br>
<span class="quotelev1">&gt; MPI_ERRORS_ARE_FATAL: your MPI job will now
</span><br>
<span class="quotelev1">&gt; abort--------------------------------------------------------------------------mpirun
</span><br>
<span class="quotelev1">&gt; has exited due to process rank 2 with PID 4378 onnode SFF exiting
</span><br>
<span class="quotelev1">&gt; improperly. *
</span><br>
<span class="quotelev1">&gt; b. Are there anything to note about asynchronous communication? I use
</span><br>
<span class="quotelev1">&gt; MPI_Isend, MPI_Irecv, MPI_Test to implement asynchronous communication. My
</span><br>
<span class="quotelev1">&gt; program works well on small data sets(10K nodes graphs), but it exits
</span><br>
<span class="quotelev1">&gt; abnormally on large data set (1M nodes graphs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Best Regards.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25343/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25344.php">Jeff Squyres (jsquyres): "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25342.php">XingFENG: "[OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25342.php">XingFENG: "[OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25344.php">Jeff Squyres (jsquyres): "Re: [OMPI users] About debugging and asynchronous communication"</a>
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
