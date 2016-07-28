<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 18:31:46 2007" -->
<!-- isoreceived="20070129233146" -->
<!-- sent="Mon, 29 Jan 2007 18:31:38 -0500" -->
<!-- isosent="20070129233138" -->
<!-- name="Heywood, Todd" -->
<!-- email="heywood_at_[hidden]" -->
<!-- subject="[OMPI users] SGE and OpenMPI integration" -->
<!-- id="44233CA5B57295409DA4423AECEFFEE701E64DB5_at_mailbox01.cshl.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Heywood, Todd (<em>heywood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-29 18:31:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2556.php">Jeff Squyres: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>Previous message:</strong> <a href="2554.php">Avishay Traeger: "[OMPI users] ompi_info segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2561.php">Pak Lui: "Re: [OMPI users] SGE and OpenMPI integration"</a>
<li><strong>Reply:</strong> <a href="2561.php">Pak Lui: "Re: [OMPI users] SGE and OpenMPI integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have sent the following experiences to the SGE mailing list, but I
<br>
thought I would also try here...
<br>
<p>&nbsp;
<br>
<p>I have been trying out version 1.2b2 for its integration with SGE. The
<br>
simple &quot;hello world&quot; test program works fin by itself, but there are
<br>
issues when submitting it to SGE.
<br>
<p>&nbsp;
<br>
<p>For small numbers of tasks, for SOME runs, I get errors for each of the
<br>
non-master tasks, and they are all one of the following:
<br>
<p>&nbsp;
<br>
<p>error: commlib error: got read error (closing
<br>
&quot;blade27.bluehelix.cshl.edu/execd/1&quot;)
<br>
<p>&nbsp;
<br>
<p>error: commlib error: can't read general message size header (GMSH)
<br>
(closing &quot;blade221
<br>
<p>.bluehelix.cshl.edu/execd/1&quot;)
<br>
<p>&nbsp;
<br>
<p>When I repeat runs, these errors tend to go away, like the first time a
<br>
node runs a job it coughs on it, but then it is OK for subsequent jobs.
<br>
I do get the correct output.
<br>
<p>&nbsp;
<br>
<p>Things change when I try a large job, say 400 tasks. I get loads of GMSH
<br>
errors, but NO output, and SGE's qstat command aborts:
<br>
<p>&nbsp;
<br>
<p>[heywood_at_blade1 ompi]$ qsub -pe mpi 400 hello.sh
<br>
<p>Your job 8239 (&quot;hello.sh&quot;) has been submitted
<br>
<p>[heywood_at_blade1 ompi]$ qstat -t
<br>
<p>critical error: unrecoverable error - contact systems manager
<br>
<p>Aborted
<br>
<p>[heywood_at_blade1 ompi]$
<br>
<p>&nbsp;
<br>
<p>I then have to qdel the job from another window.
<br>
<p>&nbsp;
<br>
<p>If anyone has seen anything like this, I'd be interested in hearing.
<br>
Since the errors are coming from SGE's communication library, I did
<br>
increase the file descriptor limit (ulimit -n 65536), but it made no
<br>
difference.
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>&nbsp;
<br>
<p>Todd Heywood
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2555/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2556.php">Jeff Squyres: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>Previous message:</strong> <a href="2554.php">Avishay Traeger: "[OMPI users] ompi_info segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2561.php">Pak Lui: "Re: [OMPI users] SGE and OpenMPI integration"</a>
<li><strong>Reply:</strong> <a href="2561.php">Pak Lui: "Re: [OMPI users] SGE and OpenMPI integration"</a>
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
