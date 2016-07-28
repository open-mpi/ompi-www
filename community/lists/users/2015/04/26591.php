<?
$subject_val = "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 15:09:43 2015" -->
<!-- isoreceived="20150401190943" -->
<!-- sent="Wed, 1 Apr 2015 20:09:43 +0100" -->
<!-- isosent="20150401190943" -->
<!-- name="Thomas Klimpel" -->
<!-- email="jacques.gentzen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5" -->
<!-- id="CAAowFmOf+vQMEtroXcXuLMe-hJ5Nje9dcuuM62049fAix6UKow_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D7BB9309-19EA-4FAD-81EC-F38F98D18D0D_at_cisco.com" -->
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
<strong>From:</strong> Thomas Klimpel (<em>jacques.gentzen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-01 15:09:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26592.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="26590.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/03/26586.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26592.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26592.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 2. Unable to resolve: can you be more specific on this?
</span><br>
<p>This was my mistake. I used &quot;xxx.yyy.zzz&quot; instead of &quot;localhost&quot; in the
<br>
startup options for orterun. (More precisely the GUI did it, but I knew
<br>
that code.) No idea how 1.6.5 managed to get around the fact that not even
<br>
&quot;dig xxx.yyy.zzz&quot; can resolve this hostname. All the other servers were
<br>
specified by their ip address, so no need to resolve anything there.
<br>
<p><p><span class="quotelev1">&gt; 3. Host key verification failed: this likely means an ssh
</span><br>
misconfiguration somewhere on your machines.
<br>
<p>You are right, only the master could do a password less ssh to the workers,
<br>
but the workers could not do a passwordless ssh to the master (or to any
<br>
other worker). I manually enabled this between 3 selected workers, and
<br>
checked that everything worked fine then. But my method to enable this
<br>
manually is time consuming, so now I use &quot;-mca plm_ssh_no_tree_spawn 1&quot; as
<br>
option to orterun instead.
<br>
<p>Thanks for the help. This enabled me to do the tests I wanted to do.
<br>
<p><p><span class="quotelev1">&gt; 1. Ctrl-Z issues. For the moment &quot;don't do that&quot;.
</span><br>
<p>As said, I use &quot;kill -SIGSTOP 12345&quot; instead now. Even if the shell would
<br>
not freeze, and orterun would stop (after first forwarding the signal to
<br>
all workers, which seems to be the most reasonable behavior to me), I would
<br>
still have to use &quot;kill -SIGSTOP 12345&quot; (because I don't want to pause the
<br>
workers, only the master). I verified that this triggers the crash reliable
<br>
for me with 1.6.5.
<br>
<p>I cannot reproduce my crash with 1.8.4, but I'm not sure what I learn from
<br>
this. Maybe the new &quot;[warn] opal_libevent2021_event_base_loop: reentrant
<br>
invocation. Only one event_base_loop can run on each event_base at once.&quot;
<br>
warning tries to tell me that I'm using MPI_THREAD_MULTIPLE incorrectly.
<br>
But I radically simplified my mpi calls for this test now, such that I only
<br>
call MPI_Send and MPI_Recv, and only on MPI_COMM_WORLD. But I still get the
<br>
warning with 1.8.4, and still can produce my crash with 1.6.5, and still
<br>
cannot reproduce my crash with 1.8.4. Is it really possible that
<br>
MPI_THREAD_MULTIPLE had a bug (the clusters were this bug can be triggered
<br>
have infiniband interconnect) in 1.6.5, which is fixed in 1.8.4?
<br>
<p>I still fear that the bug is somewhere else in my software (because of the
<br>
history of this bug and how hard it often was to trigger it in the past).
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26591/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26592.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="26590.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/03/26586.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26592.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26592.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
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
