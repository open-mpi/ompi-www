<?
$subject_val = "Re: [OMPI devel] stdout, stderr reporting different values for isatty";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 09:28:14 2015" -->
<!-- isoreceived="20150727132814" -->
<!-- sent="Mon, 27 Jul 2015 22:28:12 +0900" -->
<!-- isosent="20150727132812" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] stdout, stderr reporting different values for isatty" -->
<!-- id="CAAkFZ5tUra1bAc8yNbux5YAzd=UVAw939SXOK9rUe6oV9eKajw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1545563637.35536.1437999728958.JavaMail.zimbra_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] stdout, stderr reporting different values for isatty<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-27 09:28:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17715.php">Howard Pritchard: "[OMPI devel] new IU jenkins project"</a>
<li><strong>Previous message:</strong> <a href="17713.php">Christoph Niethammer: "[OMPI devel] stdout, stderr reporting different values for isatty"</a>
<li><strong>In reply to:</strong> <a href="17713.php">Christoph Niethammer: "[OMPI devel] stdout, stderr reporting different values for isatty"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17717.php">Christoph Niethammer: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
<li><strong>Reply:</strong> <a href="17717.php">Christoph Niethammer: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christoph,
<br>
<p>that is correct
<br>
stdout is a tty and stderr is not.
<br>
it is a pipe to orted.
<br>
I do not think that would be hard to change.
<br>
is this a source of problem for your applications ?
<br>
<p>note this kind of behavior can be caused by the batch manager.
<br>
if you use slurm and srun instead of mpirun, I am not even sure stdout is a
<br>
tty.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, July 27, 2015, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know, using stdout and stderr within MPI programs is in no way good.
</span><br>
<span class="quotelev1">&gt; Nevertheless I found that - and now wonder why - isatty inside an MPI
</span><br>
<span class="quotelev1">&gt; program reports different values for stdout and stderr in Open MPI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Running as non MPI program:
</span><br>
<span class="quotelev1">&gt; ./isatty-test
</span><br>
<span class="quotelev1">&gt; [0/1] stdout FILENO: 1, TTY: 1
</span><br>
<span class="quotelev1">&gt; [0/1] stderr FILENO: 2, TTY: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Running with Open MPI 1.8.7:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./isatty-test
</span><br>
<span class="quotelev1">&gt; [1/2] stdout FILENO: 1, TTY: 1
</span><br>
<span class="quotelev1">&gt; [1/2] stderr FILENO: 2, TTY: 0
</span><br>
<span class="quotelev1">&gt; [0/2] stdout FILENO: 1, TTY: 1
</span><br>
<span class="quotelev1">&gt; [0/2] stderr FILENO: 2, TTY: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... not sure if this is good or bad. Both are forwarded correctly to the
</span><br>
<span class="quotelev1">&gt; tty as far as I see...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Redirecting stdout or stderr to files does not change anything in the Open
</span><br>
<span class="quotelev1">&gt; MPI case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: MPICH reports in all cases 0 for isatty() on stdout and stderr.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17713.php">http://www.open-mpi.org/community/lists/devel/2015/07/17713.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17714/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17715.php">Howard Pritchard: "[OMPI devel] new IU jenkins project"</a>
<li><strong>Previous message:</strong> <a href="17713.php">Christoph Niethammer: "[OMPI devel] stdout, stderr reporting different values for isatty"</a>
<li><strong>In reply to:</strong> <a href="17713.php">Christoph Niethammer: "[OMPI devel] stdout, stderr reporting different values for isatty"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17717.php">Christoph Niethammer: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
<li><strong>Reply:</strong> <a href="17717.php">Christoph Niethammer: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
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
