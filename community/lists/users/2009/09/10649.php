<?
$subject_val = "Re: [OMPI users] unable to access or execute";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 20:27:35 2009" -->
<!-- isoreceived="20090915002735" -->
<!-- sent="Mon, 14 Sep 2009 18:27:30 -0600" -->
<!-- isosent="20090915002730" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unable to access or execute" -->
<!-- id="71d2d8cc0909141727r1f97ac27q85516526fc2878d3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1252972672.4280.4.camel_at_eddy" -->
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
<strong>Subject:</strong> Re: [OMPI users] unable to access or execute<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-14 20:27:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10650.php">Dominik Táborský: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Previous message:</strong> <a href="10648.php">Dominik T&#225;borsk&#253;: "[OMPI users] unable to access or execute"</a>
<li><strong>In reply to:</strong> <a href="10648.php">Dominik T&#225;borsk&#253;: "[OMPI users] unable to access or execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10650.php">Dominik Táborský: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Reply:</strong> <a href="10650.php">Dominik Táborský: "Re: [OMPI users] unable to access or execute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume this
</span><br>
<span class="quotelev1">&gt; executable doesn't have to be on the node - that would be silly
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Not silly at all - we don't preposition the binary for you. It has to be
<br>
present on the node where it is to be executed.
<br>
<p>I have added an option to preposition binaries in the OMPI developer's
<br>
trunk, but that feature isn't scheduled for release until the next major
<br>
code release.
<br>
<p>2009/9/14 Dominik T&#225;borsk&#253; &lt;bremby_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since last time I made progress - I compiled openMPI 1.3.3 from sources,
</span><br>
<span class="quotelev1">&gt; now I'm trying to run it on one of my nodes. I am using the same
</span><br>
<span class="quotelev1">&gt; software on the master, but master is Ubuntu 9.04 (NOT using openMPI
</span><br>
<span class="quotelev1">&gt; 1.3.2 from repos) and the node is my own Linux system - it lacks many
</span><br>
<span class="quotelev1">&gt; features so there might be the source of the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I try to run hello world program, it gives me this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /openMPI/bin/mpirun
</span><br>
<span class="quotelev1">&gt; -hostfile /home/eddy/Dreddux/host.machine5 ./projekty/openMPI/hello/hello
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not
</span><br>
<span class="quotelev1">&gt; access
</span><br>
<span class="quotelev1">&gt; or execute an executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executable: ./projekty/openMPI/hello/hello
</span><br>
<span class="quotelev1">&gt; Node: machine5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The executable is hello world program and is executable. I assume this
</span><br>
<span class="quotelev1">&gt; executable doesn't have to be on the node - that would be silly. So, I
</span><br>
<span class="quotelev1">&gt; don't understand what am I missing. Any ideas? Please!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dominik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: thanks for your time!
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10650.php">Dominik Táborský: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Previous message:</strong> <a href="10648.php">Dominik T&#225;borsk&#253;: "[OMPI users] unable to access or execute"</a>
<li><strong>In reply to:</strong> <a href="10648.php">Dominik T&#225;borsk&#253;: "[OMPI users] unable to access or execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10650.php">Dominik Táborský: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Reply:</strong> <a href="10650.php">Dominik Táborský: "Re: [OMPI users] unable to access or execute"</a>
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
