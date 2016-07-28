<?
$subject_val = "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 10:20:28 2007" -->
<!-- isoreceived="20071217152028" -->
<!-- sent="Mon, 17 Dec 2007 16:19:20 +0100" -->
<!-- isosent="20071217151920" -->
<!-- name="Elena Zhebel" -->
<!-- email="ezhebel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration" -->
<!-- id="AA57C47ACCD04E46B79317EA2CEEBE880C574A_at_fjldmail.fugro-jason.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] MPI::Intracomm::Spawn and cluster configuration" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration<br>
<strong>From:</strong> Elena Zhebel (<em>ezhebel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 10:19:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4686.php">de Almeida, Valmor F.: "[OMPI users] unable to open osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4684.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Maybe in reply to:</strong> <a href="4647.php">Elena Zhebel: "[OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4689.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Reply:</strong> <a href="4689.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
<p>Thank you for your answer.
<br>
<p>I'm using OpenMPI 1.2.3. , compiler glibc232, Linux Suse 10.0.
<br>
My &quot;master&quot; executable runs only on the one local host, then it spawns
<br>
&quot;slaves&quot; (with MPI::Intracomm::Spawn). 
<br>
My question was: how to determine the hosts where these &quot;slaves&quot; will be
<br>
spawned? 
<br>
You said: &quot;You have to specify all of the hosts that can be used by your job
<br>
in the original hostfile&quot;. How can I specify the host file? I can not find it
<br>
in the documentation.
<br>
<p>Thanks and regards,
<br>
Elena
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ralph H Castain
<br>
Sent: Monday, December 17, 2007 3:31 PM
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Cc: Ralph H Castain
<br>
Subject: Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration
<br>
<p>On 12/12/07 5:46 AM, &quot;Elena Zhebel&quot; &lt;ezhebel_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'm working on a MPI application where I'm using OpenMPI instead of MPICH.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In my &quot;master&quot; program I call the function MPI::Intracomm::Spawn which
</span><br>
spawns
<br>
<span class="quotelev1">&gt; &quot;slave&quot; processes. It is not clear for me how to spawn the &quot;slave&quot;
</span><br>
processes
<br>
<span class="quotelev1">&gt; over the network. Currently &quot;master&quot; creates &quot;slaves&quot; on the same host.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If I use 'mpirun --hostfile openmpi.hosts' then processes are spawn over
</span><br>
the 
<br>
<span class="quotelev1">&gt; network as expected. But now I need to spawn processes over the network
</span><br>
from
<br>
<span class="quotelev1">&gt; my own executable using MPI::Intracomm::Spawn, how can I achieve it?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<p>I'm not sure from your description exactly what you are trying to do, nor in
<br>
what environment this is all operating within or what version of Open MPI
<br>
you are using. Setting aside the environment and version issue, I'm guessing
<br>
that you are running your executable over some specified set of hosts, but
<br>
want to provide a different hostfile that specifies the hosts to be used for
<br>
the &quot;slave&quot; processes. Correct?
<br>
<p>If that is correct, then I'm afraid you can't do that in any version of Open
<br>
MPI today. You have to specify all of the hosts that can be used by your job
<br>
in the original hostfile. You can then specify a subset of those hosts to be
<br>
used by your original &quot;master&quot; program, and then specify a different subset
<br>
to be used by the &quot;slaves&quot; when calling Spawn.
<br>
<p>But the system requires that you tell it -all- of the hosts that are going
<br>
to be used at the beginning of the job.
<br>
<p>At the moment, there is no plan to remove that requirement, though there has
<br>
been occasional discussion about doing so at some point in the future. No
<br>
promises that it will happen, though - managed environments, in particular,
<br>
currently object to the idea of changing the allocation on-the-fly. We may,
<br>
though, make a provision for purely hostfile-based environments (i.e.,
<br>
unmanaged) at some time in the future.
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any help.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Elena
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4686.php">de Almeida, Valmor F.: "[OMPI users] unable to open osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4684.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Maybe in reply to:</strong> <a href="4647.php">Elena Zhebel: "[OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4689.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Reply:</strong> <a href="4689.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
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
