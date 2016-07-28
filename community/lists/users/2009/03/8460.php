<?
$subject_val = "Re: [OMPI users] Can't start program across network";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 10:23:03 2009" -->
<!-- isoreceived="20090316142303" -->
<!-- sent="Mon, 16 Mar 2009 10:22:59 -0400" -->
<!-- isosent="20090316142259" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't start program across network" -->
<!-- id="49BE60C3.9090108_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49BDB8D2.8050308_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't start program across network<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-16 10:22:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8461.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>Previous message:</strong> <a href="8459.php">Prentice Bisbal: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>In reply to:</strong> <a href="8456.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8476.php">Raymond Wan: "Re: [OMPI users] Can't start program across network -- solved!"</a>
<li><strong>Reply:</strong> <a href="8476.php">Raymond Wan: "Re: [OMPI users] Can't start program across network -- solved!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Raymond Wan wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some &quot;good&quot; news (but still some bad news).  Y and Z are part of a set
</span><br>
<span class="quotelev1">&gt; of 8 machines and I found out that mpirun works for one of them.  I
</span><br>
<span class="quotelev1">&gt; didn't checked a couple of them before -- sorry!  However, I'm no closer
</span><br>
<span class="quotelev1">&gt; to the solution since all 8 should be &quot;identical&quot;, according to our
</span><br>
<span class="quotelev1">&gt; sysadmin.  He said the only difference (that he can think of) between
</span><br>
<span class="quotelev1">&gt; the working one and all the others is that the working one has an NIS
</span><br>
<span class="quotelev1">&gt; server installed.  It is the NIS server for the cluster (presumably, the
</span><br>
<span class="quotelev1">&gt; others run a client version).  Could that be the reason?  He can't think
</span><br>
<span class="quotelev1">&gt; of anything else that distinguishes between them but he says it is
</span><br>
<span class="quotelev1">&gt; possible that the NIS server is correctly configured for what we use it
</span><br>
<span class="quotelev1">&gt; for, but not for what I'm doing with Open MPI -- he doesn't know what
</span><br>
<span class="quotelev1">&gt; should be done, though.
</span><br>
<p>In an earlier e-mail in this thread, I theorized that this might be a
<br>
problem with your name service. This latest information seems to support
<br>
that theory.
<br>
<p>To test, on all 3 systems, use the 'host' command to see if you can
<br>
resolve the hostnames of all the 3 systems.
<br>
<p>On host X, do this:
<br>
<p>host X
<br>
host Y
<br>
host Z
<br>
<p>Then do the same on hosts Y and Z.
<br>
<p>If the 'host' command can resolve properly, you should see something
<br>
like this:
<br>
<p>$ host foo
<br>
foo.example.com has address 192.168.1.1
<br>
<p>If 'host' can't resolve  a hostname properly, you should see something
<br>
like this:
<br>
<p>$ host bar
<br>
Host bar not found: 3(NXDOMAIN)
<br>
<p>OpenMPI should be using the same nameservice libraries all the other
<br>
programs use, so I find it hard to believe everything *but* OpenMPI is
<br>
working propery, but I suppose it could be possible. I've seen weirder.
<br>
<p><p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8461.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>Previous message:</strong> <a href="8459.php">Prentice Bisbal: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>In reply to:</strong> <a href="8456.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8476.php">Raymond Wan: "Re: [OMPI users] Can't start program across network -- solved!"</a>
<li><strong>Reply:</strong> <a href="8476.php">Raymond Wan: "Re: [OMPI users] Can't start program across network -- solved!"</a>
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
