<?
$subject_val = "Re: [OMPI users] ompi + bash + GE + modules";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 10:04:35 2012" -->
<!-- isoreceived="20120112150435" -->
<!-- sent="Thu, 12 Jan 2012 10:05:27 -0500" -->
<!-- isosent="20120112150527" -->
<!-- name="Mark Suhovecky" -->
<!-- email="suhovecky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi + bash + GE + modules" -->
<!-- id="8D7ABFEB8540934DB54AECDF259D0D601870FDEE44_at_ICE-MBX-1.ice.nd.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Mark Suhovecky (<em>suhovecky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 10:05:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18148.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Previous message:</strong> <a href="18146.php">Dave Love: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>In reply to:</strong> <a href="18146.php">Dave Love: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18161.php">Prentice Bisbal: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave-
<br>
<p>I'm working with Univa support as well.
<br>
<p>I started out debugging this with pretty poor grasp of where in the software flow the problem
<br>
might be. Like most sysadmins, I belong to many community lists, and find them to be of tremendous
<br>
help in running problems down. They certainly have been in this case- I've posted to the modules-interest
<br>
sourcefourge group as well.
<br>
<p>I choose to use all the resources open to me, including community user forums and paid support, Using
<br>
a commercial product's support should not preclude one from using other tools as well.
<br>
<p>Mark
<br>
<p>Mark Suhovecky
<br>
HPC System Administrator
<br>
Center for Research Computing
<br>
University of Notre Dame
<br>
suhovecky_at_[hidden]
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Dave Love [d.love_at_[hidden]]
<br>
Sent: Thursday, January 12, 2012 8:40 AM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] ompi + bash + GE + modules
<br>
<p>Surely this should be on the gridengine list -- and it's in recent
<br>
archives -- but there's some ob-openmpi below.  Can Notre Dame not get
<br>
the support they've paid Univa for?
<br>
<p>Reuti &lt;reuti_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; SGE 6.2u5 can't handle multi line environment variables or functions,
</span><br>
<span class="quotelev1">&gt; it was fixed in 6.2u6 which isn't free.
</span><br>
<p>[It's not listed for 6.2u6.]  For what it's worth, my fix for Sun's fix
<br>
is <a href="https://arc.liv.ac.uk/trac/SGE/changeset/3556/sge">https://arc.liv.ac.uk/trac/SGE/changeset/3556/sge</a>.
<br>
<p><span class="quotelev1">&gt; Do you use -V while submitting the job? Just ignore the error or look
</span><br>
<span class="quotelev1">&gt; into Son of Gridengine which fixed it too.
</span><br>
<p>Of course
<br>
you can always avoid the issue by not using `export -f', which isn't in
<br>
the modules version we have.  I default -V in sge_request and load
<br>
the open-mpi module in the job submission session.  I don't
<br>
fin whatever problems it causes, and it works for binaries like
<br>
&nbsp;&nbsp;qsub -b y ... mpirun ...
<br>
However, the folkloristic examples here typically load the module stuff
<br>
in the job script.
<br>
<p><span class="quotelev1">&gt; If you can avoid -V, then it could be defined in any of the .profile
</span><br>
<span class="quotelev1">&gt; or alike if you use -l as suggested.  You could even define a
</span><br>
<span class="quotelev1">&gt; started_method in SGE to define it for all users by default and avoid
</span><br>
<span class="quotelev1">&gt; to use -V:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; module() { ...command...here... }
</span><br>
<span class="quotelev1">&gt; export -f module
</span><br>
<span class="quotelev1">&gt; exec &quot;${@}&quot;
</span><br>
<p>That won't work for example if someone is tasteless enough to submit csh.
<br>
<p>_______________________________________________
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
<li><strong>Next message:</strong> <a href="18148.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Previous message:</strong> <a href="18146.php">Dave Love: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>In reply to:</strong> <a href="18146.php">Dave Love: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18161.php">Prentice Bisbal: "Re: [OMPI users] ompi + bash + GE + modules"</a>
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
