<?
$subject_val = "Re: [OMPI users] Fault tolerant feature in Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 04:25:06 2016" -->
<!-- isoreceived="20160316082506" -->
<!-- sent="Wed, 16 Mar 2016 15:25:04 +0700" -->
<!-- isosent="20160316082504" -->
<!-- name="Husen R" -->
<!-- email="hus3nr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault tolerant feature in Open MPI" -->
<!-- id="CACPfdUsVOJ0m-6usKQCKrz0BZK5BmnajQB=O0V=OggoAyv6EiA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGKz=u+ppd6Ujy7cHuEG+7LH-yfXTcOj+txhqGN=gkmmMxAS5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fault tolerant feature in Open MPI<br>
<strong>From:</strong> Husen R (<em>hus3nr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 04:25:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28709.php">Jeff Hammond: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28707.php">Gilles Gouaillardet: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>In reply to:</strong> <a href="28705.php">Jeff Hammond: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28709.php">Jeff Hammond: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Reply:</strong> <a href="28709.php">Jeff Hammond: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for the reply.
<br>
<p>After consulting the Gromacs docs, as you suggested, Gromacs already
<br>
supports checkpoint/restart. thanks for the suggestion.
<br>
<p>Previously, I asked about checkpoint/restart in Open MPI because I want to
<br>
checkpoint MPI Application and restart/migrate it while it is running.
<br>
For the example, I run MPI application in node A,B and C in a cluster and I
<br>
want to migrate process running in node A to other node, let's say to node
<br>
C.
<br>
is there a way to do this with open MPI ? thanks.
<br>
<p>Regards,
<br>
<p>Husen
<br>
<p><p><p><p>On Wed, Mar 16, 2016 at 12:37 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Why do you need OpenMPI to do this? Molecular dynamics trajectories are
</span><br>
<span class="quotelev1">&gt; trivial to checkpoint and restart at the application level. I'm sure
</span><br>
<span class="quotelev1">&gt; Gromacs already supports this. Please consult the Gromacs docs or user
</span><br>
<span class="quotelev1">&gt; support for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday, March 15, 2016, Husen R &lt;hus3nr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI Users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does the current stable release of Open MPI (v1.10 series) support fault
</span><br>
<span class="quotelev2">&gt;&gt; tolerant feature ?
</span><br>
<span class="quotelev2">&gt;&gt; I got the information from Open MPI FAQ that The checkpoint/restart
</span><br>
<span class="quotelev2">&gt;&gt; support was last released as part of the v1.6 series.
</span><br>
<span class="quotelev2">&gt;&gt; I just want to make sure about this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and by the way, does Open MPI able to checkpoint or restart mpi
</span><br>
<span class="quotelev2">&gt;&gt; application/GROMACS automatically ?
</span><br>
<span class="quotelev2">&gt;&gt; Please, I really need help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Husen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28705.php">http://www.open-mpi.org/community/lists/users/2016/03/28705.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28708/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28709.php">Jeff Hammond: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28707.php">Gilles Gouaillardet: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>In reply to:</strong> <a href="28705.php">Jeff Hammond: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28709.php">Jeff Hammond: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Reply:</strong> <a href="28709.php">Jeff Hammond: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
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
