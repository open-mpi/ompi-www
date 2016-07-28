<?
$subject_val = "Re: [OMPI users] How does mpirun handle Ctrl+C?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 01:42:42 2015" -->
<!-- isoreceived="20150508054242" -->
<!-- sent="Fri, 08 May 2015 05:42:40 +0000" -->
<!-- isosent="20150508054240" -->
<!-- name="Seth Axen" -->
<!-- email="seth.axen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does mpirun handle Ctrl+C?" -->
<!-- id="CADusZCZq_vDwr0sGUyMN8OW5QzSFGhonwstkS7HWq78U1SY=Bw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D2054061-27B2-408A-A90C-6E483ACA51E2_at_open-mpi.org" -->
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
<strong>From:</strong> Seth Axen (<em>seth.axen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-08 01:42:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26851.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>Previous message:</strong> <a href="26849.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>In reply to:</strong> <a href="26849.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26851.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>Reply:</strong> <a href="26851.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph! So I tried using the signal module in python to handle the
<br>
SIGTERM and write an error message, and that seemed to work when using
<br>
Ctrl+C to kill python, but when using mpirun, python still dies without the
<br>
error message. I'm assuming that means mpirun wasn't able to SIGTERM
<br>
python, so it just SIGKILLed it? Is there a good reason SIGTERM might fail
<br>
that I could fix?
<br>
Thanks!
<br>
Seth
<br>
<p>On Thu, May 7, 2015 at 4:00 PM Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When mpirun receives a Ctrl-C, it hits each of its processes with a
</span><br>
<span class="quotelev1">&gt; SIGTERM, followed a little later by SIGKILL if the proc didn&#226;&#128;&#153;t terminate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2015, at 2:31 PM, Seth Axen &lt;seth.axen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; How does mpirun or mpiexec handle Ctrl+C? I noticed when I use Ctrl+C on a
</span><br>
<span class="quotelev1">&gt; running python script (without MPI), this generates a KeyboardInterrupt
</span><br>
<span class="quotelev1">&gt; exception which I can catch and do something with, but when I use mpirun to
</span><br>
<span class="quotelev1">&gt; run the python script, so far as I can tell, no exception is generated; the
</span><br>
<span class="quotelev1">&gt; script just dies. I'd like to be able to catch an exception within my
</span><br>
<span class="quotelev1">&gt; script and do some cleaning up before killing the script, but I can't
</span><br>
<span class="quotelev1">&gt; figure out how to do this. I've already posted on the mpi4py message board (
</span><br>
<span class="quotelev1">&gt; <a href="https://groups.google.com/forum/#!topic/mpi4py/x8tloLNGWTk">https://groups.google.com/forum/#!topic/mpi4py/x8tloLNGWTk</a>) and was
</span><br>
<span class="quotelev1">&gt; referred here.
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Seth
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26848.php">http://www.open-mpi.org/community/lists/users/2015/05/26848.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26849.php">http://www.open-mpi.org/community/lists/users/2015/05/26849.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26850/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26851.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>Previous message:</strong> <a href="26849.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>In reply to:</strong> <a href="26849.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26851.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>Reply:</strong> <a href="26851.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
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
