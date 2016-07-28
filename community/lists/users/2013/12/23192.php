<?
$subject_val = "Re: [OMPI users] environment variables and MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 13 10:18:36 2013" -->
<!-- isoreceived="20131213151836" -->
<!-- sent="Fri, 13 Dec 2013 16:16:28 +0100" -->
<!-- isosent="20131213151628" -->
<!-- name="tom fogal" -->
<!-- email="tfogal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] environment variables and MPI_Comm_spawn" -->
<!-- id="20131213151628.453BD2D2006F_at_takeo" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57ofr9UD9sFgC+=1sxV=Qf1YzwmuOc2rMvhTGDM12Vi5BKQ_at_mail.gmail.com" -->
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
<strong>From:</strong> tom fogal (<em>tfogal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-13 10:16:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="23191.php">Rolf vandeVaart: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="23185.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="23193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, thanks for your help!
<br>
<p>Ralph Castain writes:
<br>
<span class="quotelev1">&gt; It would have to be done via MPI_Info arguments, and we never had a
</span><br>
<span class="quotelev1">&gt; request to do so (and hence, don't define such an argument). It would
</span><br>
<span class="quotelev1">&gt; be easy enough to do so (look in the ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev1">&gt; code).
</span><br>
<p>Well, I wanted to just report success, but I've only got the easy
<br>
side of it: saving the arguments from the MPI_Info arguments into
<br>
the orte_job_t struct.  See attached &quot;0003&quot; patch (against trunk).
<br>
However, I couldn't figure out how to get the other side: reading out
<br>
the environment variables and setting them at fork.  Maybe you could
<br>
help with (or do :-) that?
<br>
<p>Or just guide me as to where again: I threw abort()s in 'spawn'
<br>
functions I found under plm/, but my programs didn't abort and so I'm
<br>
not sure where they went.
<br>
<p><span class="quotelev1">&gt; MPI implementations generally don't forcibly propagate envars because
</span><br>
<span class="quotelev1">&gt; it is so hard to know which ones to handle - it is easy to propagate
</span><br>
<span class="quotelev1">&gt; a system envar that causes bad things to happen on the remote end.
</span><br>
<p>I understand.  Though in this case, I'm /trying/ to make Bad Things
<br>
(tm) happen ;-).
<br>
<p><span class="quotelev1">&gt; One thing you could do, of course, is add that envar to your default
</span><br>
<span class="quotelev1">&gt; shell setup (.bashrc or whatever). This would set the variable by
</span><br>
<span class="quotelev1">&gt; default on your remote locations (assuming you are using rsh/ssh
</span><br>
<span class="quotelev1">&gt; for your launcher), and then any process you start would get
</span><br>
<span class="quotelev1">&gt; it. However, that won't help if this is an envar intended only for
</span><br>
<span class="quotelev1">&gt; the comm_spawned process.
</span><br>
<p>Unfortunately what I want to play with at the moment are LD_*
<br>
variables, and fiddling with these in my .bashrc will mess up a lot
<br>
more than just the simulation I am presently hacking.
<br>
<p><span class="quotelev1">&gt; I can add this capability to the OMPI trunk, and port it to the 1.7
</span><br>
<span class="quotelev1">&gt; release - but we don't go all the way back to the 1.4 series any
</span><br>
<span class="quotelev1">&gt; more.
</span><br>
<p>Yes, having this in a 1.7 release would be great!
<br>
<p><p>BTW, I encountered a couple other small things while grepping through
<br>
source/waiting for trunk to build, so there are two other small patches
<br>
attached.  One gets rid of warnings about unused functions in generated
<br>
lexing code.  I believe the second fixes resource leaks on error paths.
<br>
However, it turned out none of my user-level code hit that function at
<br>
all, so I haven't been able to test it.  Take from it what you will...
<br>
<p>-tom
<br>
<p><span class="quotelev1">&gt; On Wed, Dec 11, 2013 at 2:10 PM, tom fogal &lt;tfogal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm developing on Open MPI 1.4.5-ubuntu2 on Ubuntu 13.10 (so, Ubuntu's
</span><br>
<span class="quotelev2">&gt; &gt; packaged Open MPI) at the moment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'd like to pass environment variables to processes started via
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_spawn.  Unfortunately, the MPI 3.0 standard (at least) does
</span><br>
<span class="quotelev2">&gt; &gt; not seem to specify a way to do this; thus I have been searching for
</span><br>
<span class="quotelev2">&gt; &gt; implementation-specific ways to accomplish my task.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have tried setting the environment variable using the POSIX setenv(3)
</span><br>
<span class="quotelev2">&gt; &gt; call, but it seems that Open MPI comm-spawn'd processes do not inherit
</span><br>
<span class="quotelev2">&gt; &gt; environment variables.  See the attached 2 C99 programs; one prints
</span><br>
<span class="quotelev2">&gt; &gt; out the environment it receives, and one sets the MEANING_OF_LIFE
</span><br>
<span class="quotelev2">&gt; &gt; environment variable, spawns the previous 'env printing' program, and
</span><br>
<span class="quotelev2">&gt; &gt; exits.  I run via:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   $ env -i HOME=/home/tfogal \
</span><br>
<span class="quotelev2">&gt; &gt;   PATH=/bin:/usr/bin:/usr/local/bin:/sbin:/usr/sbin \
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun -x TJFVAR=testing -n 5 ./mpienv ./envpar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and expect (well, hope) to find the MEANING_OF_LIFE in 'envpar's
</span><br>
<span class="quotelev2">&gt; &gt; output.  I do see TJFVAR, but the MEANING_OF_LIFE sadly does not
</span><br>
<span class="quotelev2">&gt; &gt; propagate.  Perhaps I am asking the wrong question...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I found another MPI implementation which allowed passing such
</span><br>
<span class="quotelev2">&gt; &gt; information via the MPI_Info argument, however I could find no
</span><br>
<span class="quotelev2">&gt; &gt; documentation of similar functionality in Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to accomplish what I'm looking for?  I could even be
</span><br>
<span class="quotelev2">&gt; &gt; convinced to hack source, but a starting pointer would be appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -tom
</span><br>
<p><p>


<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23192/01-part">0001-btl-Remove-warnings-about-unused-lexing-functions.patch</a>
</ul>
<!-- attachment="01-part" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23192/02-part">0002-mca-cleanup-buf-ps-when-errors-occur.patch</a>
</ul>
<!-- attachment="02-part" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23192/03-part">0003-info-accept-env-vars-desired-in-child-processes.patch</a>
</ul>
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="23191.php">Rolf vandeVaart: "Re: [OMPI users] Cuda Aware MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="23185.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="23193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
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
