<?
$subject_val = "[OMPI users] Help with OpenMPI and Univa Grid Engine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 13:46:15 2016" -->
<!-- isoreceived="20160208184615" -->
<!-- sent="Mon, 8 Feb 2016 10:45:53 -0800" -->
<!-- isosent="20160208184553" -->
<!-- name="Rahul Pisharody" -->
<!-- email="rpisharody_at_[hidden]" -->
<!-- subject="[OMPI users] Help with OpenMPI and Univa Grid Engine" -->
<!-- id="CAO-5B6RmCrTLSCFcUWEv+Yc1UAhWUBCMBwPusZ23EGaXf2Ba0Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Help with OpenMPI and Univa Grid Engine<br>
<strong>From:</strong> Rahul Pisharody (<em>rpisharody_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-08 13:45:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28468.php">Ralph Castain: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="28466.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28468.php">Ralph Castain: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<li><strong>Reply:</strong> <a href="28468.php">Ralph Castain: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<li><strong>Reply:</strong> <a href="28473.php">Dave Love: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I'm trying to get a simple program (print the hostname of the executing
<br>
machine) compiled with openmpi run across multiple machines on Univa Grid
<br>
Engine.
<br>
<p>This particular configuration has many of the ports blocked. My run command
<br>
has the mca options necessary to limit the ports to the known open ports.
<br>
<p>However, when I launch the program with mpirun, I get the following error
<br>
messages:
<br>
<p>+++++++++++++
<br>
<span class="quotelev1">&gt; error: executing task of job 23 failed: execution daemon on host
</span><br>
<span class="quotelev1">&gt; &quot;&lt;machine&gt;&quot; didn't accept task
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 10126) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; error: executing task of job 23 failed: execution daemon on host &quot;machine&quot;
</span><br>
<span class="quotelev1">&gt; didn't accept task
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><p>I've set the LD_LIBRARY_PATH and I've verified that path points to the
<br>
necessary shared libraries.
<br>
<p>Any idea/suggestion as to what is happening here will be greatly
<br>
appreciated.
<br>
<p>Thanks,
<br>
Rahul
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28467/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28468.php">Ralph Castain: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="28466.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28468.php">Ralph Castain: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<li><strong>Reply:</strong> <a href="28468.php">Ralph Castain: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<li><strong>Reply:</strong> <a href="28473.php">Dave Love: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
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
