<?
$subject_val = "Re: [OMPI users] environment variables and MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 12 10:47:38 2013" -->
<!-- isoreceived="20131212154738" -->
<!-- sent="Thu, 12 Dec 2013 09:47:35 -0600" -->
<!-- isosent="20131212154735" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] environment variables and MPI_Comm_spawn" -->
<!-- id="CAMD57ofr9UD9sFgC+=1sxV=Qf1YzwmuOc2rMvhTGDM12Vi5BKQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20131211201036.B47912D2006F_at_takeo" -->
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
<strong>Subject:</strong> Re: [OMPI users] environment variables and MPI_Comm_spawn<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-12 10:47:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23186.php">Dave Love: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="23184.php">tom fogal: "[OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="23184.php">tom fogal: "[OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23187.php">Jeff Squyres (jsquyres): "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="23187.php">Jeff Squyres (jsquyres): "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="23192.php">tom fogal: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It would have to be done via MPI_Info arguments, and we never had a request
<br>
to do so (and hence, don't define such an argument). It would be easy
<br>
enough to do so (look in the ompi/mca/dpm/orte/dpm_orte.c code).
<br>
<p>MPI implementations generally don't forcibly propagate envars because it is
<br>
so hard to know which ones to handle - it is easy to propagate a system
<br>
envar that causes bad things to happen on the remote end.
<br>
<p>One thing you could do, of course, is add that envar to your default shell
<br>
setup (.bashrc or whatever). This would set the variable by default on your
<br>
remote locations (assuming you are using rsh/ssh for your launcher), and
<br>
then any process you start would get it. However, that won't help if this
<br>
is an envar intended only for the comm_spawned process.
<br>
<p>I can add this capability to the OMPI trunk, and port it to the 1.7 release
<br>
- but we don't go all the way back to the 1.4 series any more.
<br>
<p><p><p>On Wed, Dec 11, 2013 at 2:10 PM, tom fogal &lt;tfogal_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm developing on Open MPI 1.4.5-ubuntu2 on Ubuntu 13.10 (so, Ubuntu's
</span><br>
<span class="quotelev1">&gt; packaged Open MPI) at the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to pass environment variables to processes started via
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn.  Unfortunately, the MPI 3.0 standard (at least) does
</span><br>
<span class="quotelev1">&gt; not seem to specify a way to do this; thus I have been searching for
</span><br>
<span class="quotelev1">&gt; implementation-specific ways to accomplish my task.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried setting the environment variable using the POSIX setenv(3)
</span><br>
<span class="quotelev1">&gt; call, but it seems that Open MPI comm-spawn'd processes do not inherit
</span><br>
<span class="quotelev1">&gt; environment variables.  See the attached 2 C99 programs; one prints
</span><br>
<span class="quotelev1">&gt; out the environment it receives, and one sets the MEANING_OF_LIFE
</span><br>
<span class="quotelev1">&gt; environment variable, spawns the previous 'env printing' program, and
</span><br>
<span class="quotelev1">&gt; exits.  I run via:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ env -i HOME=/home/tfogal \
</span><br>
<span class="quotelev1">&gt;   PATH=/bin:/usr/bin:/usr/local/bin:/sbin:/usr/sbin \
</span><br>
<span class="quotelev1">&gt;   mpirun -x TJFVAR=testing -n 5 ./mpienv ./envpar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and expect (well, hope) to find the MEANING_OF_LIFE in 'envpar's
</span><br>
<span class="quotelev1">&gt; output.  I do see TJFVAR, but the MEANING_OF_LIFE sadly does not
</span><br>
<span class="quotelev1">&gt; propagate.  Perhaps I am asking the wrong question...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found another MPI implementation which allowed passing such
</span><br>
<span class="quotelev1">&gt; information via the MPI_Info argument, however I could find no
</span><br>
<span class="quotelev1">&gt; documentation of similar functionality in Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to accomplish what I'm looking for?  I could even be
</span><br>
<span class="quotelev1">&gt; convinced to hack source, but a starting pointer would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -tom
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23185/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23186.php">Dave Love: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="23184.php">tom fogal: "[OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="23184.php">tom fogal: "[OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23187.php">Jeff Squyres (jsquyres): "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="23187.php">Jeff Squyres (jsquyres): "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="23192.php">tom fogal: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
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
