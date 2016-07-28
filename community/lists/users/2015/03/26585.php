<?
$subject_val = "[OMPI users] 1.8.4 behaves completely different from 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 15:27:49 2015" -->
<!-- isoreceived="20150331192749" -->
<!-- sent="Tue, 31 Mar 2015 21:27:48 +0200" -->
<!-- isosent="20150331192748" -->
<!-- name="Thomas Klimpel" -->
<!-- email="jacques.gentzen_at_[hidden]" -->
<!-- subject="[OMPI users] 1.8.4 behaves completely different from 1.6.5" -->
<!-- id="CAAowFmNGCGQz7gO27bz9a_=+V+v4EBWq64oEMQwatVWN-4gTCQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] 1.8.4 behaves completely different from 1.6.5<br>
<strong>From:</strong> Thomas Klimpel (<em>jacques.gentzen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-31 15:27:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26586.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="26584.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26586.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26586.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a nasty bug in my software and can make it crash by stopping it with
<br>
ctrl-Z, waiting many seconds, and then saying &quot;fg&quot;, for continuing the run.
<br>
At least it crashes when I start it on 3 workers with 24 instances each
<br>
plus a master. On 2 workers with 24 instances each it doesn't crash.
<br>
<p>I decided to upgrade openmpi from 1.6.5 to 1.8.4 for a test, to see if it
<br>
changes anything. But 1.8.4 behaves completely different from 1.6.5, at
<br>
least when I change the number of instances or the number of workers. If I
<br>
start it with 3 workers plus a master, I get the error message
<br>
<p><p>Host key verification failed.
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
<p><p>If I start with 3 workers but no separate master, or 2 workers and a
<br>
separate master, the software seems to run fine, but after some time I get
<br>
the warning (with no further consequences)
<br>
<p><p>[warn] opal_libevent2021_event_base_loop: reentrant invocation.  Only one
<br>
event_base_loop can run on each event_base at once.
<br>
<p><p>If I start completely differenc command line options (of my software) and a
<br>
GUI I always get (even if I only start just a single worker on the master,
<br>
i.e. no separate workers)
<br>
<p><p>ssh: Could not resolve hostname xxx.yyy.zzz: Name or service not known
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
<p><p>This last message certainly contains some truth, because even &quot;dig
<br>
xxx.yyy.zzz&quot; cannot resolve this hostname (not even on the master itself),
<br>
and xxx.yyy.zzz is indeed the hostname of the master.
<br>
<p><p>But the differences don't stop here. If I press ctrl-Z, the mesage
<br>
&quot;^Zorterun: Forwarding signal 20 to job&quot; appears, and the shell freezes
<br>
until I press crtl-C. I work around this now by sending the master a
<br>
SIGSTOP signal via &quot;kill -SIGSTOP 12345&quot;, and after many seconds a &quot;kill
<br>
-SIGCONT 12345&quot;. Still, the behavior of 1.8.4 is completely different from
<br>
1.6.5 here too.
<br>
<p>Another difference is that 1.8.4 often complains that I have requested too
<br>
many workers (or that some libnuma would be missing), which I fix by adding
<br>
--bind-to socket:overload-allowed.
<br>
<p><p>I have at least one question: Is 1.8.4 really so different from 1.6.5, or
<br>
is it more probably that I made some mistake while building 1.8.4, for
<br>
example using wrong configure options, maybe because these changed since
<br>
1.6.5, and I haven't bothered to read the documentation and just continued
<br>
to use my following (old from 1.6.5) configure options:
<br>
<p>--enable-mpi-f77=no --enable-mpi-f90=no --with-threads=posix
<br>
--enable-mpi-thread-multiple --disable-vt
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26585/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26586.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="26584.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26586.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26586.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
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
