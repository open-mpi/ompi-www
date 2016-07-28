<?
$subject_val = "Re: [OMPI users] timing + /usr/bin/time";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 08:40:10 2008" -->
<!-- isoreceived="20081112134010" -->
<!-- sent="Wed, 12 Nov 2008 14:40:05 +0100" -->
<!-- isosent="20081112134005" -->
<!-- name="Fabian H&#195;&#164;nsel" -->
<!-- email="fabian.haensel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] timing + /usr/bin/time" -->
<!-- id="20081112144005.11ab912c.fabian.haensel_at_zih.tu-dresden.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="491A6323.5070509_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] timing + /usr/bin/time<br>
<strong>From:</strong> Fabian H&#195;&#164;nsel (<em>fabian.haensel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-12 08:40:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7296.php">Reuti: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Previous message:</strong> <a href="7294.php">Neville Clark: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7293.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7296.php">Reuti: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7296.php">Reuti: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7309.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ray,
<br>
<p><span class="quotelev1">&gt; So, to make sure I understand what happens...  This command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 myprog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; starts the program &quot;mpirun&quot; and two processes of &quot;myprog&quot;.  So, what
</span><br>
<span class="quotelev1">&gt; the &quot;real time&quot; of /usr/bin/time reports is the wall clock for mpirun.
</span><br>
<p>Exactly.
<br>
<p><span class="quotelev1">&gt; Does the user time have any meaning here?
</span><br>
<p>At least no meaning you can be sure of what it measures (could be time
<br>
of MPI infrastructure setup, could be time of setup + masterthread,
<br>
could be something completely different - depends on MPI
<br>
implementation).
<br>
<p><span class="quotelev1">&gt;  I'm not very good with the 
</span><br>
<span class="quotelev1">&gt; theory behind multi-processor programming...but Perl (for example)has
</span><br>
<span class="quotelev1">&gt; a &quot;times&quot; function (<a href="http://perldoc.perl.org/functions/times.html">http://perldoc.perl.org/functions/times.html</a>)
</span><br>
<span class="quotelev1">&gt; which &quot;Returns a ... list ... for this process and the children of
</span><br>
<span class="quotelev1">&gt; this process&quot;.  Are the two instances of myprog considered children
</span><br>
<span class="quotelev1">&gt; of mpirun?
</span><br>
<p>In single system setup: generally yes.
<br>
In multisystem setup: no. The MPI processes span many computers over
<br>
e.g. ssh.
<br>
<p><span class="quotelev1">&gt; Hmmmm, I guess user time does not matter since it is real time that
</span><br>
<span class="quotelev1">&gt; we are interested in reducing.
</span><br>
<p>Right. Even if we *could* measure user time of every MPI worker process
<br>
correctly this was not what you are interested in: Depending on the
<br>
algorithm a significant amount of time could  get spend waiting for MPI
<br>
messages to arrive - and that time would not count as user time, but
<br>
also was not 'wasted' as something important happens.
<br>
<p>Best regards
<br>
&nbsp;&nbsp;Fabian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7296.php">Reuti: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Previous message:</strong> <a href="7294.php">Neville Clark: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7293.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7296.php">Reuti: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7296.php">Reuti: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7309.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
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
