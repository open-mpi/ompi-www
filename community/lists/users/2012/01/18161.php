<?
$subject_val = "Re: [OMPI users] ompi + bash + GE + modules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 13 10:10:22 2012" -->
<!-- isoreceived="20120113151022" -->
<!-- sent="Fri, 13 Jan 2012 10:10:17 -0500" -->
<!-- isosent="20120113151017" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi + bash + GE + modules" -->
<!-- id="4F104959.7010804_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="87vcohujhu.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi + bash + GE + modules<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-13 10:10:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18162.php">Bogdan Costescu: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Previous message:</strong> <a href="18160.php">TERRY DONTJE: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>In reply to:</strong> <a href="18146.php">Dave Love: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18141.php">Gustavo Correa: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/12/2012 08:40 AM, Dave Love wrote:
<br>
<span class="quotelev1">&gt; Surely this should be on the gridengine list -- and it's in recent
</span><br>
<span class="quotelev1">&gt; archives -- but there's some ob-openmpi below.  Can Notre Dame not get
</span><br>
<span class="quotelev1">&gt; the support they've paid Univa for?
</span><br>
<p>This is, in fact, in the recent gridengine archives. I brought up this
<br>
problem myself within the past couple of months ago.
<br>
<p><span class="quotelev1">&gt; Reuti &lt;reuti_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SGE 6.2u5 can't handle multi line environment variables or functions,
</span><br>
<span class="quotelev2">&gt;&gt; it was fixed in 6.2u6 which isn't free.
</span><br>
<span class="quotelev1">&gt; [It's not listed for 6.2u6.]  For what it's worth, my fix for Sun's fix
</span><br>
<span class="quotelev1">&gt; is <a href="https://arc.liv.ac.uk/trac/SGE/changeset/3556/sge">https://arc.liv.ac.uk/trac/SGE/changeset/3556/sge</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you use -V while submitting the job? Just ignore the error or look
</span><br>
<span class="quotelev2">&gt;&gt; into Son of Gridengine which fixed it too.
</span><br>
<span class="quotelev1">&gt; Of course
</span><br>
<span class="quotelev1">&gt; you can always avoid the issue by not using `export -f', which isn't in
</span><br>
<span class="quotelev1">&gt; the modules version we have.  I default -V in sge_request and load
</span><br>
<span class="quotelev1">&gt; the open-mpi module in the job submission session.  I don't
</span><br>
<span class="quotelev1">&gt; fin whatever problems it causes, and it works for binaries like
</span><br>
<span class="quotelev1">&gt;   qsub -b y ... mpirun ...
</span><br>
<span class="quotelev1">&gt; However, the folkloristic examples here typically load the module stuff
</span><br>
<span class="quotelev1">&gt; in the job script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you can avoid -V, then it could be defined in any of the .profile
</span><br>
<span class="quotelev2">&gt;&gt; or alike if you use -l as suggested.  You could even define a
</span><br>
<span class="quotelev2">&gt;&gt; started_method in SGE to define it for all users by default and avoid
</span><br>
<span class="quotelev2">&gt;&gt; to use -V:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; module() { ...command...here... }
</span><br>
<span class="quotelev2">&gt;&gt; export -f module
</span><br>
<span class="quotelev2">&gt;&gt; exec &quot;${@}&quot;
</span><br>
<span class="quotelev1">&gt; That won't work for example if someone is tasteless enough to submit csh.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18162.php">Bogdan Costescu: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Previous message:</strong> <a href="18160.php">TERRY DONTJE: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>In reply to:</strong> <a href="18146.php">Dave Love: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18141.php">Gustavo Correa: "Re: [OMPI users] ompi + bash + GE + modules"</a>
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
