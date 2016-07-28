<?
$subject_val = "Re: [OMPI devel] ORTED process group";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 23:30:26 2016" -->
<!-- isoreceived="20160224043026" -->
<!-- sent="Wed, 24 Feb 2016 13:30:23 +0900" -->
<!-- isosent="20160224043023" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTED process group" -->
<!-- id="56CD31DF.4040908_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMD57oc35sTx3jq9vGN0UhY2gzediWF+KeGRsaTg7cD+f=MA+w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ORTED process group<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-23 23:30:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18614.php">Aurélien Bouteiller: "[OMPI devel] use-mpi mpiext?"</a>
<li><strong>Previous message:</strong> <a href="18612.php">Ralph Castain: "[OMPI devel] ORTED process group"</a>
<li><strong>In reply to:</strong> <a href="18612.php">Ralph Castain: "[OMPI devel] ORTED process group"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>my 0.02 US$
<br>
<p>if i understand correctly, we put non-ORTE processes into a different 
<br>
process group because
<br>
ORTE *might* have grand-children and their progeny, and ORTE does not / 
<br>
cannot know about.
<br>
/* note we assume here these processes are all well raised and do not 
<br>
create yet an other
<br>
process group */
<br>
<p>my first impression is that in the case of OpenMPI (i know ORTE is not 
<br>
exclusively used by OMPI),
<br>
that should be quite uncommon. forked used to fail with the openib btl, 
<br>
and i am under the
<br>
impression endusers still believe an MPI task cannot fork.
<br>
<p>i would be fine to have a MCA parameter controls whether we want a new 
<br>
process group or not.
<br>
iirc, we still &quot;wrap&quot; the fork syscall, so we could also issue a warning 
<br>
if an MPI task forks.
<br>
(e.g. grandchildren won't be signaled)
<br>
<p>as you pointed, If ORTE children are in the same process group than 
<br>
orted, then we cannot signal the process
<br>
group leader (e.g. orted SIGSTP itself). then what about individually 
<br>
signaling all the processes in the process group *except* orted ?
<br>
<p>fwiw, on linux, modern RM can use cgroups to terminate *all* processes 
<br>
related to a given job, and regardless process/session group. i think 
<br>
slurm can do that, and PBSPro also does that (but maybe only on SGI 
<br>
machines)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2/24/2016 11:01 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The question was raised at today's developer workshop about our 
</span><br>
<span class="quotelev1">&gt; current practice of putting the application processes in a separate 
</span><br>
<span class="quotelev1">&gt; process group from their parent ORTE daemon. This has the unfortunate 
</span><br>
<span class="quotelev1">&gt; side effect of making the processes &quot;invisible&quot; to any host resource 
</span><br>
<span class="quotelev1">&gt; manager when they are launched via mpirun - i.e., the RM launches the 
</span><br>
<span class="quotelev1">&gt; orted's, but never sees the local application procs that the orted 
</span><br>
<span class="quotelev1">&gt; fork/exec's. Since those processes are then moved into a separate 
</span><br>
<span class="quotelev1">&gt; process group, the host RM has no way of killing them should the orted 
</span><br>
<span class="quotelev1">&gt; fail and the procs not suicide.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The request was made that we modify the orted so it no longer changes 
</span><br>
<span class="quotelev1">&gt; the application proc's process group. This will leave the orted and 
</span><br>
<span class="quotelev1">&gt; the application procs in the same process group, and so any signals 
</span><br>
<span class="quotelev1">&gt; delivered by the host RM to the orted will be received by all processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, in reviewing the code, I (re)discovered why this was 
</span><br>
<span class="quotelev1">&gt; originally done. The issue stems from when Sun joined the OMPI project 
</span><br>
<span class="quotelev1">&gt; - their MPI implementation allowed the user to pause their job by 
</span><br>
<span class="quotelev1">&gt; hitting mpirun with a SIGTSTP, and then start again by hitting mpirun 
</span><br>
<span class="quotelev1">&gt; with a SIGCNT. These signals needed to be seen not just by the initial 
</span><br>
<span class="quotelev1">&gt; child processes started by the orted, but also by any subsequent child 
</span><br>
<span class="quotelev1">&gt; processes those processes might have started.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is this latter point that led to the process group change. Since 
</span><br>
<span class="quotelev1">&gt; the &quot;grandchild&quot; processes were not started by the orted, the orted 
</span><br>
<span class="quotelev1">&gt; itself has no knowledge of their pid. Thus, the orted cannot send the 
</span><br>
<span class="quotelev1">&gt; SIGSTP to the individual target pid's. However, if the orted hits the 
</span><br>
<span class="quotelev1">&gt; &quot;leader of the process group that contains its children&quot;, then that 
</span><br>
<span class="quotelev1">&gt; signal would also hit the orted - thus causing the orted to &quot;pause&quot;. 
</span><br>
<span class="quotelev1">&gt; There would be no way for mpirun to &quot;wake up&quot; the orted after that 
</span><br>
<span class="quotelev1">&gt; point so it could subsequently &quot;unpause&quot; the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence the decision was made to move the application procs into their 
</span><br>
<span class="quotelev1">&gt; own process group. The orted can then signal the process group, thus 
</span><br>
<span class="quotelev1">&gt; ensuring that all procs (grandchildren etc.) receive the signal - 
</span><br>
<span class="quotelev1">&gt; without disabling the orted itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we want to retain this pause/restart behavior, then I see no way to 
</span><br>
<span class="quotelev1">&gt; change the current method of putting the application procs into their 
</span><br>
<span class="quotelev1">&gt; own process group. So I guess this issue becomes a choice:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * either we disable pause/restart by signal
</span><br>
<span class="quotelev1">&gt; * someone comes up with an alternative way of &quot;pausing&quot; the processes, 
</span><br>
<span class="quotelev1">&gt; including any descendants, without disturbing the orted...or devise a 
</span><br>
<span class="quotelev1">&gt; scheme for waking the orted up after it has been &quot;paused&quot;. PMIx didn't 
</span><br>
<span class="quotelev1">&gt; exist back then, but perhaps we might be able to use it to help us 
</span><br>
<span class="quotelev1">&gt; here (e.g., a PMIx API to tell it to hit our orteds with a SIGCNT)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suggestions?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18612.php">http://www.open-mpi.org/community/lists/devel/2016/02/18612.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18613/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18614.php">Aurélien Bouteiller: "[OMPI devel] use-mpi mpiext?"</a>
<li><strong>Previous message:</strong> <a href="18612.php">Ralph Castain: "[OMPI devel] ORTED process group"</a>
<li><strong>In reply to:</strong> <a href="18612.php">Ralph Castain: "[OMPI devel] ORTED process group"</a>
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
