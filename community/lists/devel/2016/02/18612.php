<?
$subject_val = "[OMPI devel] ORTED process group";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 21:01:55 2016" -->
<!-- isoreceived="20160224020155" -->
<!-- sent="Tue, 23 Feb 2016 20:01:52 -0600" -->
<!-- isosent="20160224020152" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] ORTED process group" -->
<!-- id="CAMD57oc35sTx3jq9vGN0UhY2gzediWF+KeGRsaTg7cD+f=MA+w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] ORTED process group<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-23 21:01:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18613.php">Gilles Gouaillardet: "Re: [OMPI devel] ORTED process group"</a>
<li><strong>Previous message:</strong> <a href="18611.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trying to view ciso-community master results and	mtt	has issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18613.php">Gilles Gouaillardet: "Re: [OMPI devel] ORTED process group"</a>
<li><strong>Reply:</strong> <a href="18613.php">Gilles Gouaillardet: "Re: [OMPI devel] ORTED process group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>The question was raised at today's developer workshop about our current
<br>
practice of putting the application processes in a separate process group
<br>
from their parent ORTE daemon. This has the unfortunate side effect of
<br>
making the processes &quot;invisible&quot; to any host resource manager when they are
<br>
launched via mpirun - i.e., the RM launches the orted's, but never sees the
<br>
local application procs that the orted fork/exec's. Since those processes
<br>
are then moved into a separate process group, the host RM has no way of
<br>
killing them should the orted fail and the procs not suicide.
<br>
<p>The request was made that we modify the orted so it no longer changes the
<br>
application proc's process group. This will leave the orted and the
<br>
application procs in the same process group, and so any signals delivered
<br>
by the host RM to the orted will be received by all processes.
<br>
<p>However, in reviewing the code, I (re)discovered why this was originally
<br>
done. The issue stems from when Sun joined the OMPI project - their MPI
<br>
implementation allowed the user to pause their job by hitting mpirun with a
<br>
SIGTSTP, and then start again by hitting mpirun with a SIGCNT. These
<br>
signals needed to be seen not just by the initial child processes started
<br>
by the orted, but also by any subsequent child processes those processes
<br>
might have started.
<br>
<p>It is this latter point that led to the process group change. Since the
<br>
&quot;grandchild&quot; processes were not started by the orted, the orted itself has
<br>
no knowledge of their pid. Thus, the orted cannot send the SIGSTP to the
<br>
individual target pid's. However, if the orted hits the &quot;leader of the
<br>
process group that contains its children&quot;, then that signal would also hit
<br>
the orted - thus causing the orted to &quot;pause&quot;. There would be no way for
<br>
mpirun to &quot;wake up&quot; the orted after that point so it could subsequently
<br>
&quot;unpause&quot; the application.
<br>
<p>Hence the decision was made to move the application procs into their own
<br>
process group. The orted can then signal the process group, thus ensuring
<br>
that all procs (grandchildren etc.) receive the signal - without disabling
<br>
the orted itself.
<br>
<p>If we want to retain this pause/restart behavior, then I see no way to
<br>
change the current method of putting the application procs into their own
<br>
process group. So I guess this issue becomes a choice:
<br>
<p>* either we disable pause/restart by signal
<br>
* someone comes up with an alternative way of &quot;pausing&quot; the processes,
<br>
including any descendants, without disturbing the orted...or devise a
<br>
scheme for waking the orted up after it has been &quot;paused&quot;. PMIx didn't
<br>
exist back then, but perhaps we might be able to use it to help us here
<br>
(e.g., a PMIx API to tell it to hit our orteds with a SIGCNT)?
<br>
<p>Suggestions?
<br>
Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18612/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18613.php">Gilles Gouaillardet: "Re: [OMPI devel] ORTED process group"</a>
<li><strong>Previous message:</strong> <a href="18611.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trying to view ciso-community master results and	mtt	has issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18613.php">Gilles Gouaillardet: "Re: [OMPI devel] ORTED process group"</a>
<li><strong>Reply:</strong> <a href="18613.php">Gilles Gouaillardet: "Re: [OMPI devel] ORTED process group"</a>
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
