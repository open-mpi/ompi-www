<?
$subject_val = "Re: [OMPI devel] stdout, stderr reporting different values for isatty";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 06:47:48 2015" -->
<!-- isoreceived="20150730104748" -->
<!-- sent="Thu, 30 Jul 2015 12:47:45 +0200 (CEST)" -->
<!-- isosent="20150730104745" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] stdout, stderr reporting different values for isatty" -->
<!-- id="1874281444.121929.1438253265809.JavaMail.zimbra_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5tUra1bAc8yNbux5YAzd=UVAw939SXOK9rUe6oV9eKajw_at_mail.gmail.com" -->
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
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-30 06:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17718.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] C standard compatibility"</a>
<li><strong>Previous message:</strong> <a href="17716.php">Christoph Niethammer: "[OMPI devel] C standard compatibility"</a>
<li><strong>In reply to:</strong> <a href="17714.php">Gilles Gouaillardet: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>No, it is not a problem for my applications.
<br>
<p>I would have assumed, that both are using a pipe to orted+tty or whatever infrastructure is used.
<br>
Different behaviour is for me often a sign that something is going wrong. So better ask. ;)
<br>
<p>Regards
<br>
CHrsitoph
<br>
<p>----- Original Message -----
<br>
From: &quot;Gilles Gouaillardet&quot; &lt;gilles.gouaillardet_at_[hidden]&gt;
<br>
To: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
<br>
Sent: Monday, July 27, 2015 3:28:12 PM
<br>
Subject: Re: [OMPI devel] stdout,	stderr reporting different values for isatty
<br>
<p>Christoph, 
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
if you use slurm and srun instead of mpirun, I am not even sure stdout is a tty. 
<br>
<p>Cheers, 
<br>
<p>Gilles 
<br>
<p>On Monday, July 27, 2015, Christoph Niethammer &lt; niethammer_at_[hidden] &gt; wrote: 
<br>
<p><p>Hello, 
<br>
<p>I know, using stdout and stderr within MPI programs is in no way good. 
<br>
Nevertheless I found that - and now wonder why - isatty inside an MPI program reports different values for stdout and stderr in Open MPI: 
<br>
<p># Running as non MPI program: 
<br>
./isatty-test 
<br>
[0/1] stdout FILENO: 1, TTY: 1 
<br>
[0/1] stderr FILENO: 2, TTY: 1 
<br>
<p># Running with Open MPI 1.8.7: 
<br>
mpirun -np 2 ./isatty-test 
<br>
[1/2] stdout FILENO: 1, TTY: 1 
<br>
[1/2] stderr FILENO: 2, TTY: 0 
<br>
[0/2] stdout FILENO: 1, TTY: 1 
<br>
[0/2] stderr FILENO: 2, TTY: 0 
<br>
<p>... not sure if this is good or bad. Both are forwarded correctly to the tty as far as I see... 
<br>
<p>Redirecting stdout or stderr to files does not change anything in the Open MPI case. 
<br>
<p>Best regards 
<br>
Christoph Niethammer 
<br>
<p>PS: MPICH reports in all cases 0 for isatty() on stdout and stderr. 
<br>
_______________________________________________ 
<br>
devel mailing list 
<br>
devel_at_[hidden] 
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17713.php">http://www.open-mpi.org/community/lists/devel/2015/07/17713.php</a> 
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17714.php">http://www.open-mpi.org/community/lists/devel/2015/07/17714.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17718.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] C standard compatibility"</a>
<li><strong>Previous message:</strong> <a href="17716.php">Christoph Niethammer: "[OMPI devel] C standard compatibility"</a>
<li><strong>In reply to:</strong> <a href="17714.php">Gilles Gouaillardet: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
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
