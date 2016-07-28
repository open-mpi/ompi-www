<?
$subject_val = "Re: [OMPI users] timing + /usr/bin/time";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 09:03:48 2008" -->
<!-- isoreceived="20081112140348" -->
<!-- sent="Wed, 12 Nov 2008 15:03:46 +0100" -->
<!-- isosent="20081112140346" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] timing + /usr/bin/time" -->
<!-- id="5637D364-943B-46B2-96B6-E6DB6A6E0E64_at_staff.uni-marburg.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081112144005.11ab912c.fabian.haensel_at_zih.tu-dresden.de" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-12 09:03:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7297.php">Robert Latham: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>Previous message:</strong> <a href="7295.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>In reply to:</strong> <a href="7295.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7310.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7310.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ray,
<br>
<p>with the Tight Integration of Open MPI into SGE (http:// 
<br>
gridengine.sunsource.net/) you will get a correct accouting. Every  
<br>
process created with qrsh (a replacement for ssh) will have an  
<br>
additional group id attached and SGE will accumulate them all.
<br>
<p>Depending on the size of the cluster, you might want to look into a  
<br>
batch queuing system. In fact: we use it even local on some machines  
<br>
to serialize the workflow.
<br>
<p>-- Reuti
<br>
<p><p>Am 12.11.2008 um 14:40 schrieb Fabian H&#228;nsel:
<br>
<p><span class="quotelev2">&gt;&gt; So, to make sure I understand what happens...  This command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 myprog
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; starts the program &quot;mpirun&quot; and two processes of &quot;myprog&quot;.  So, what
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;real time&quot; of /usr/bin/time reports is the wall clock for  
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exactly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does the user time have any meaning here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least no meaning you can be sure of what it measures (could be time
</span><br>
<span class="quotelev1">&gt; of MPI infrastructure setup, could be time of setup + masterthread,
</span><br>
<span class="quotelev1">&gt; could be something completely different - depends on MPI
</span><br>
<span class="quotelev1">&gt; implementation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I'm not very good with the
</span><br>
<span class="quotelev2">&gt;&gt; theory behind multi-processor programming...but Perl (for example)has
</span><br>
<span class="quotelev2">&gt;&gt; a &quot;times&quot; function (<a href="http://perldoc.perl.org/functions/times.html">http://perldoc.perl.org/functions/times.html</a>)
</span><br>
<span class="quotelev2">&gt;&gt; which &quot;Returns a ... list ... for this process and the children of
</span><br>
<span class="quotelev2">&gt;&gt; this process&quot;.  Are the two instances of myprog considered children
</span><br>
<span class="quotelev2">&gt;&gt; of mpirun?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In single system setup: generally yes.
</span><br>
<span class="quotelev1">&gt; In multisystem setup: no. The MPI processes span many computers over
</span><br>
<span class="quotelev1">&gt; e.g. ssh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmmm, I guess user time does not matter since it is real time that
</span><br>
<span class="quotelev2">&gt;&gt; we are interested in reducing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right. Even if we *could* measure user time of every MPI worker  
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev1">&gt; correctly this was not what you are interested in: Depending on the
</span><br>
<span class="quotelev1">&gt; algorithm a significant amount of time could  get spend waiting for  
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; messages to arrive - and that time would not count as user time, but
</span><br>
<span class="quotelev1">&gt; also was not 'wasted' as something important happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt;   Fabian
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7297.php">Robert Latham: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>Previous message:</strong> <a href="7295.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>In reply to:</strong> <a href="7295.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7310.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7310.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
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
