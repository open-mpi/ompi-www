<?
$subject_val = "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 15:16:11 2015" -->
<!-- isoreceived="20150401191611" -->
<!-- sent="Wed, 1 Apr 2015 12:16:09 -0700" -->
<!-- isosent="20150401191609" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5" -->
<!-- id="CAMD57oeiYR7B=GcpTwdTgvRdVge21PQqObnXOcjAun-9jRbwbA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAowFmOf+vQMEtroXcXuLMe-hJ5Nje9dcuuM62049fAix6UKow_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-01 15:16:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26593.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="26591.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="26591.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26593.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26593.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know 1.8.4 is better than 1.6.5 in some regards, but I obviously can't
<br>
say if we fixed the specific bug you're referring to in your software. As
<br>
you know, thread bugs are really hard to nail down.
<br>
<p>That event_base_loop warning could be flagging a known problem in the
<br>
openib module during inter-process connection formation. It's been on our
<br>
radar for awhile, but lacked cycles to resolve it. You might double-check
<br>
by running with &quot;--mca btl ^openib&quot; to see if that is the source of the
<br>
warning - I know it will run a lot slower, but you *might* get an
<br>
indication as to whether this is or isn't the issue.
<br>
<p>Does it only crash when you pause it? Or does it crash while normally
<br>
running?
<br>
<p><p>On Wed, Apr 1, 2015 at 12:09 PM, Thomas Klimpel &lt;jacques.gentzen_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev2">&gt; &gt; 2. Unable to resolve: can you be more specific on this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was my mistake. I used &quot;xxx.yyy.zzz&quot; instead of &quot;localhost&quot; in the
</span><br>
<span class="quotelev1">&gt; startup options for orterun. (More precisely the GUI did it, but I knew
</span><br>
<span class="quotelev1">&gt; that code.) No idea how 1.6.5 managed to get around the fact that not even
</span><br>
<span class="quotelev1">&gt; &quot;dig xxx.yyy.zzz&quot; can resolve this hostname. All the other servers were
</span><br>
<span class="quotelev1">&gt; specified by their ip address, so no need to resolve anything there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. Host key verification failed: this likely means an ssh
</span><br>
<span class="quotelev1">&gt; misconfiguration somewhere on your machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are right, only the master could do a password less ssh to the
</span><br>
<span class="quotelev1">&gt; workers, but the workers could not do a passwordless ssh to the master (or
</span><br>
<span class="quotelev1">&gt; to any other worker). I manually enabled this between 3 selected workers,
</span><br>
<span class="quotelev1">&gt; and checked that everything worked fine then. But my method to enable this
</span><br>
<span class="quotelev1">&gt; manually is time consuming, so now I use &quot;-mca plm_ssh_no_tree_spawn 1&quot;
</span><br>
<span class="quotelev1">&gt; as option to orterun instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help. This enabled me to do the tests I wanted to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Ctrl-Z issues. For the moment &quot;don't do that&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As said, I use &quot;kill -SIGSTOP 12345&quot; instead now. Even if the shell would
</span><br>
<span class="quotelev1">&gt; not freeze, and orterun would stop (after first forwarding the signal to
</span><br>
<span class="quotelev1">&gt; all workers, which seems to be the most reasonable behavior to me), I would
</span><br>
<span class="quotelev1">&gt; still have to use &quot;kill -SIGSTOP 12345&quot; (because I don't want to pause the
</span><br>
<span class="quotelev1">&gt; workers, only the master). I verified that this triggers the crash reliable
</span><br>
<span class="quotelev1">&gt; for me with 1.6.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot reproduce my crash with 1.8.4, but I'm not sure what I learn from
</span><br>
<span class="quotelev1">&gt; this. Maybe the new &quot;[warn] opal_libevent2021_event_base_loop: reentrant
</span><br>
<span class="quotelev1">&gt; invocation. Only one event_base_loop can run on each event_base at once.&quot;
</span><br>
<span class="quotelev1">&gt; warning tries to tell me that I'm using MPI_THREAD_MULTIPLE incorrectly.
</span><br>
<span class="quotelev1">&gt; But I radically simplified my mpi calls for this test now, such that I only
</span><br>
<span class="quotelev1">&gt; call MPI_Send and MPI_Recv, and only on MPI_COMM_WORLD. But I still get the
</span><br>
<span class="quotelev1">&gt; warning with 1.8.4, and still can produce my crash with 1.6.5, and still
</span><br>
<span class="quotelev1">&gt; cannot reproduce my crash with 1.8.4. Is it really possible that
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE had a bug (the clusters were this bug can be triggered
</span><br>
<span class="quotelev1">&gt; have infiniband interconnect) in 1.6.5, which is fixed in 1.8.4?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still fear that the bug is somewhere else in my software (because of the
</span><br>
<span class="quotelev1">&gt; history of this bug and how hard it often was to trigger it in the past).
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26591.php">http://www.open-mpi.org/community/lists/users/2015/04/26591.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26592/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26593.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="26591.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="26591.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26593.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26593.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
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
