<?
$subject_val = "Re: [OMPI users] How does mpirun handle Ctrl+C?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 19:00:25 2015" -->
<!-- isoreceived="20150507230025" -->
<!-- sent="Thu, 7 May 2015 16:00:20 -0700" -->
<!-- isosent="20150507230020" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does mpirun handle Ctrl+C?" -->
<!-- id="D2054061-27B2-408A-A90C-6E483ACA51E2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CADusZCaYzJVho=ZbCjPj59hbEzh1fqQ1in=1_ztNzxfxOhXvgw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How does mpirun handle Ctrl+C?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-07 19:00:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26850.php">Seth Axen: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>Previous message:</strong> <a href="26848.php">Seth Axen: "[OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>In reply to:</strong> <a href="26848.php">Seth Axen: "[OMPI users] How does mpirun handle Ctrl+C?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26850.php">Seth Axen: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>Reply:</strong> <a href="26850.php">Seth Axen: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When mpirun receives a Ctrl-C, it hits each of its processes with a SIGTERM, followed a little later by SIGKILL if the proc didn&#226;&#128;&#153;t terminate.
<br>
<p><p><span class="quotelev1">&gt; On May 7, 2015, at 2:31 PM, Seth Axen &lt;seth.axen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; How does mpirun or mpiexec handle Ctrl+C? I noticed when I use Ctrl+C on a running python script (without MPI), this generates a KeyboardInterrupt exception which I can catch and do something with, but when I use mpirun to run the python script, so far as I can tell, no exception is generated; the script just dies. I'd like to be able to catch an exception within my script and do some cleaning up before killing the script, but I can't figure out how to do this. I've already posted on the mpi4py message board (<a href="https://groups.google.com/forum/#!topic/mpi4py/x8tloLNGWTk">https://groups.google.com/forum/#!topic/mpi4py/x8tloLNGWTk</a> &lt;<a href="https://groups.google.com/forum/#!topic/mpi4py/x8tloLNGWTk">https://groups.google.com/forum/#!topic/mpi4py/x8tloLNGWTk</a>&gt;) and was referred here.
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Seth
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26848.php">http://www.open-mpi.org/community/lists/users/2015/05/26848.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26849/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26850.php">Seth Axen: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>Previous message:</strong> <a href="26848.php">Seth Axen: "[OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>In reply to:</strong> <a href="26848.php">Seth Axen: "[OMPI users] How does mpirun handle Ctrl+C?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26850.php">Seth Axen: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>Reply:</strong> <a href="26850.php">Seth Axen: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
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
