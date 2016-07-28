<?
$subject_val = "Re: [OMPI users] open mpi on blue waters";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 00:37:58 2015" -->
<!-- isoreceived="20150326043758" -->
<!-- sent="Thu, 26 Mar 2015 13:38:19 +0900" -->
<!-- isosent="20150326043819" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on blue waters" -->
<!-- id="55138D3B.4000801_at_iferc.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D4D8A1D6-28A9-478C-ACB1-A0DEA22CED72_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi on blue waters<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-26 00:38:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26540.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26538.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26538.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26540.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26540.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26545.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2015/03/26 13:00, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Well, I did some digging around, and this PR looks like the right solution.
</span><br>
ok then :-)
<br>
<p>following stuff is not directly related to ompi, but you might want to
<br>
comment on that anyway ...
<br>
<span class="quotelev1">&gt; Second, the running of munge on the IO nodes is not only okay but required by Luster.
</span><br>
this is the first time i hear that.
<br>
i googled &quot;lustre munge&quot; and could not find any relevant info about that.
<br>
is this a future feature of Lustre ?
<br>
as far as i am concerned, only Lustre MDS need a &quot;unix&quot; authentication
<br>
system
<br>
(ldap, nis, /etc/passwd, ...) and munge does not provide this service.
<br>
<span class="quotelev1">&gt;  Future systems are increasingly going to run the user&#226;&#128;&#153;s job script (including mpirun) on the IO nodes as this (a) frees up the login node for interactive editing, and (b) avoids the jitter introduced by running the job script on the same node as application procs, or wasting a compute node to just run the job script.
</span><br>
that does make sense not to run the script on a compute node.
<br>
but once again i am surprised ... as far as i am concerned, lustre IO
<br>
nodes (MDS and/or OSS) do not mount the filesystem
<br>
(i mean you cannot access the filesystem as if you were on a lustre client).
<br>
of course, you can write your script so it does not require any access
<br>
to the lustre filesystem, but that sounds like a lot of pain
<br>
for a small benefit.
<br>
/* that is specific to Lustre. GPFS for example can access the
<br>
filesystem from an IO node */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26540.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26538.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26538.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26540.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26540.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26545.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
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
