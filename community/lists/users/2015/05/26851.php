<?
$subject_val = "Re: [OMPI users] How does mpirun handle Ctrl+C?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 12:37:32 2015" -->
<!-- isoreceived="20150508163732" -->
<!-- sent="Fri, 8 May 2015 09:36:32 -0700" -->
<!-- isosent="20150508163632" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does mpirun handle Ctrl+C?" -->
<!-- id="14584457-7FA0-463A-A367-662DF224D6DC_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CADusZCZq_vDwr0sGUyMN8OW5QzSFGhonwstkS7HWq78U1SY=Bw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-05-08 12:36:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26852.php">Chaitra Kumar: "[OMPI users] libnuma with openmpi"</a>
<li><strong>Previous message:</strong> <a href="26850.php">Seth Axen: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>In reply to:</strong> <a href="26850.php">Seth Axen: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don&#226;&#128;&#153;t know how the signal stack in python works. It could be that you aren&#226;&#128;&#153;t getting the SIGTERM thru python, could be we aren&#226;&#128;&#153;t catching the output message. Try dumping something into a file instead of to stderr and see if you are catching the signal.
<br>
<p><p><span class="quotelev1">&gt; On May 7, 2015, at 10:42 PM, Seth Axen &lt;seth.axen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Ralph! So I tried using the signal module in python to handle the SIGTERM and write an error message, and that seemed to work when using Ctrl+C to kill python, but when using mpirun, python still dies without the error message. I'm assuming that means mpirun wasn't able to SIGTERM python, so it just SIGKILLed it? Is there a good reason SIGTERM might fail that I could fix?
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Seth
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 7, 2015 at 4:00 PM Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; When mpirun receives a Ctrl-C, it hits each of its processes with a SIGTERM, followed a little later by SIGKILL if the proc didn&#226;&#128;&#153;t terminate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 7, 2015, at 2:31 PM, Seth Axen &lt;seth.axen_at_[hidden] &lt;mailto:seth.axen_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; How does mpirun or mpiexec handle Ctrl+C? I noticed when I use Ctrl+C on a running python script (without MPI), this generates a KeyboardInterrupt exception which I can catch and do something with, but when I use mpirun to run the python script, so far as I can tell, no exception is generated; the script just dies. I'd like to be able to catch an exception within my script and do some cleaning up before killing the script, but I can't figure out how to do this. I've already posted on the mpi4py message board (<a href="https://groups.google.com/forum/#!topic/mpi4py/x8tloLNGWTk">https://groups.google.com/forum/#!topic/mpi4py/x8tloLNGWTk</a> &lt;<a href="https://groups.google.com/forum/#!topic/mpi4py/x8tloLNGWTk">https://groups.google.com/forum/#!topic/mpi4py/x8tloLNGWTk</a>&gt;) and was referred here.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Seth
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26848.php">http://www.open-mpi.org/community/lists/users/2015/05/26848.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/05/26848.php">http://www.open-mpi.org/community/lists/users/2015/05/26848.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26849.php">http://www.open-mpi.org/community/lists/users/2015/05/26849.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/05/26849.php">http://www.open-mpi.org/community/lists/users/2015/05/26849.php</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26850.php">http://www.open-mpi.org/community/lists/users/2015/05/26850.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26851/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26852.php">Chaitra Kumar: "[OMPI users] libnuma with openmpi"</a>
<li><strong>Previous message:</strong> <a href="26850.php">Seth Axen: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>In reply to:</strong> <a href="26850.php">Seth Axen: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
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
