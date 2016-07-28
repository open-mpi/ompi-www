<?
$subject_val = "Re: [OMPI users] Fault tolerant feature in Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 06:16:00 2016" -->
<!-- isoreceived="20160316101600" -->
<!-- sent="Wed, 16 Mar 2016 17:15:57 +0700" -->
<!-- isosent="20160316101557" -->
<!-- name="Husen R" -->
<!-- email="hus3nr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault tolerant feature in Open MPI" -->
<!-- id="CACPfdUsmQdh9Y8g-hv4bo8ffAGeaZ2W3chn0wB+tZ9k6kVcDhQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGKz=uJLSOM69i8WLcRtsqzKA-_3rLYer2-XSNWK5h+6CypDaw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-16 06:15:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28711.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28709.php">Jeff Hammond: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28709.php">Jeff Hammond: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28731.php">Ralph Castain: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Reply:</strong> <a href="28731.php">Ralph Castain: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the case of MPI application (not gromacs), How do I relocate MPI
<br>
application from one node to another node while it is running ?
<br>
I'm sorry, as far as I know the *ompi-restart *command is used to restart
<br>
application, based on checkpoint file, once the application already
<br>
terminated (no longer running).
<br>
<p>Thanks
<br>
<p>regards,
<br>
<p>Husen
<br>
<p>On Wed, Mar 16, 2016 at 4:29 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Just checkpoint-restart the app to relocate. The overhead will be lower
</span><br>
<span class="quotelev1">&gt; than trying to do with MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday, March 16, 2016, Husen R &lt;hus3nr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After consulting the Gromacs docs, as you suggested, Gromacs already
</span><br>
<span class="quotelev2">&gt;&gt; supports checkpoint/restart. thanks for the suggestion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Previously, I asked about checkpoint/restart in Open MPI because I want
</span><br>
<span class="quotelev2">&gt;&gt; to checkpoint MPI Application and restart/migrate it while it is running.
</span><br>
<span class="quotelev2">&gt;&gt; For the example, I run MPI application in node A,B and C in a cluster and
</span><br>
<span class="quotelev2">&gt;&gt; I want to migrate process running in node A to other node, let's say to
</span><br>
<span class="quotelev2">&gt;&gt; node C.
</span><br>
<span class="quotelev2">&gt;&gt; is there a way to do this with open MPI ? thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Husen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Mar 16, 2016 at 12:37 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why do you need OpenMPI to do this? Molecular dynamics trajectories are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trivial to checkpoint and restart at the application level. I'm sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gromacs already supports this. Please consult the Gromacs docs or user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support for details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tuesday, March 15, 2016, Husen R &lt;hus3nr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Open MPI Users,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does the current stable release of Open MPI (v1.10 series) support
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fault tolerant feature ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I got the information from Open MPI FAQ that The checkpoint/restart
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support was last released as part of the v1.6 series.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I just want to make sure about this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and by the way, does Open MPI able to checkpoint or restart mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application/GROMACS automatically ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please, I really need help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Husen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28705.php">http://www.open-mpi.org/community/lists/users/2016/03/28705.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28709.php">http://www.open-mpi.org/community/lists/users/2016/03/28709.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28710/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28711.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28709.php">Jeff Hammond: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28709.php">Jeff Hammond: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28731.php">Ralph Castain: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Reply:</strong> <a href="28731.php">Ralph Castain: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
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
