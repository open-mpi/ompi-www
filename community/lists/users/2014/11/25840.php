<?
$subject_val = "Re: [OMPI users] job running out of memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 10:55:43 2014" -->
<!-- isoreceived="20141118155543" -->
<!-- sent="Tue, 18 Nov 2014 07:55:41 -0800" -->
<!-- isosent="20141118155541" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job running out of memory" -->
<!-- id="CAMD57oe3ubKD07eaxagT6Q==JNPuVQ70whmQN=iwTLErtsoT_w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="321E9E17D18E084488F038FCE6624C3E010D02E772_at_IBWMBX04" -->
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
<strong>Subject:</strong> Re: [OMPI users] job running out of memory<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-18 10:55:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25841.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Previous message:</strong> <a href="25839.php">Jerry Mersel: "[OMPI users] job running out of memory"</a>
<li><strong>In reply to:</strong> <a href="25839.php">Jerry Mersel: "[OMPI users] job running out of memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25841.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Reply:</strong> <a href="25841.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Reply:</strong> <a href="25846.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, there is no way to share memory across nodes. Running out of
<br>
memory as you describe can be due to several factors, including most
<br>
typically:
<br>
<p>* a memory leak in the application, or the application simply growing too
<br>
big for the environment
<br>
<p>* one rank running slow, causing it to build a backlog of messages that
<br>
eventually consumes too much memory
<br>
<p>What you can do:
<br>
<p>* add --display-map to your mpirun cmd line to see what MPI ranks are
<br>
running on each node
<br>
<p>* run &quot;top&quot; on each node to see which process is getting too large.
<br>
Generally, you'll see the pid for the processes run in order from the
<br>
lowest local rank to the highest since that is the order in which they are
<br>
spawned, so you can figure out which rank is causing the problem.
<br>
<p>* run valgrind on that rank. This isn't as hard as it might sound, though
<br>
the cmd line is a tad tricky. If rank M (out of a total job of N ranks) is
<br>
the one with the memory problem, then you would do this:
<br>
<p>mpirun -n (M-1) myapp : mpirun -n 1 valgrind myapp : mpirun -n (N-M) myapp
<br>
<p>Obviously, you can add whatever options you want to the various pieces of
<br>
the cmd line
<br>
<p>This will affect the timing, so a race condition might be hidden - but it
<br>
is a start at tracking it down.
<br>
<p>If you find that this isn't a leak, but rather a legitimate behavior, then
<br>
you can try using the mapping and ranking options to redistribute the
<br>
processes - maybe oversubscribe some of the nodes or increase the size of
<br>
the allocation so the memory hog can run alone.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Tue, Nov 18, 2014 at 7:10 AM, Jerry Mersel &lt;jerry.mersel_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I am running openmpi 1.6.5 and a job which is memory intensive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   The job runs on 7 hosts using 16 core on each. On one of the hosts the
</span><br>
<span class="quotelev1">&gt; memory is exhausted so the kernel starts to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Kill the processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   It could be that there is plenty of free memory on one of the other
</span><br>
<span class="quotelev1">&gt; hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Is there a way for openmpi to use the memory on one of the other hosts
</span><br>
<span class="quotelev1">&gt; when the memory on one host is gone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   If yes please tell me how.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thank you.
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
<span class="quotelev1">&gt; With Blessings, always,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Jerry Mersel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [image: cid:image003.png_at_01CF80E7.62B7D810]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    System Administrator
</span><br>
<span class="quotelev1">&gt;    IT Infrastructure Branch | Division of Information Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Weizmann Institute of Science
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Rehovot 76100, Israel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Tel:  +972-8-9342363
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;allow our heart, the heart of each and every one of us, to  to see the
</span><br>
<span class="quotelev1">&gt; good qualities of our friends and not their shortcomings...&#226;&#128;&#157;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       --Reb Elimelech of Lizhensk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;We learn something by doing it. There is no other way.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#148;John Holt
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25839.php">http://www.open-mpi.org/community/lists/users/2014/11/25839.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25840/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-25840/image001.png" alt="image001.png">
<!-- attachment="image001.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25841.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Previous message:</strong> <a href="25839.php">Jerry Mersel: "[OMPI users] job running out of memory"</a>
<li><strong>In reply to:</strong> <a href="25839.php">Jerry Mersel: "[OMPI users] job running out of memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25841.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Reply:</strong> <a href="25841.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Reply:</strong> <a href="25846.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
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
