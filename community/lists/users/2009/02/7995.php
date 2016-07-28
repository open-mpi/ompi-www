<?
$subject_val = "Re: [OMPI users] Global Communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  8 21:29:55 2009" -->
<!-- isoreceived="20090209022955" -->
<!-- sent="Sun, 8 Feb 2009 18:29:51 -0800 (PST)" -->
<!-- isosent="20090209022951" -->
<!-- name="Ted Yu" -->
<!-- email="tedhyu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Global Communicator" -->
<!-- id="74884.36196.qm_at_web82704.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A56A39E1-401A-4916-925D-F33B534011E9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Global Communicator<br>
<strong>From:</strong> Ted Yu (<em>tedhyu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-08 21:29:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7996.php">Bernhard Knapp: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
<li><strong>Previous message:</strong> <a href="7994.php">Brian Blank: "[OMPI users] MPI_Reduce hangs in multi-node configuration"</a>
<li><strong>In reply to:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI users] Global Communicator"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, I think I got things sorted out.&#160; Thanx for your inputs.
<br>
<p>Ted
<br>
<p>--- On Fri, 2/6/09, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Global Communicator
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Cc: tedhyu_at_[hidden]
<br>
Date: Friday, February 6, 2009, 2:46 PM
<br>
<p>On Feb 6, 2009, at 11:59 AM, McCalla, Mac wrote:
<br>
<p><span class="quotelev1">&gt; Does the &quot;default mpirun command&quot; implementation match the build
</span><br>
environment for quest_ompi.x ?
<br>
<span class="quotelev1">&gt; ie., what mpi implementation (mpich, LAM/MPI, OPENMPI, or other) was
</span><br>
quest_ompi.x  compiled/linked with? and does that match the result of
<br>
&quot;which mpirun&quot;?  You might try running a job using your PBS system
<br>
that simply executes the which mpirun command and see what you get.
<br>
<p>Mac is dead-on in his analysis.
<br>
<p>You must compile your MPI application with exactly the same MPI implementation
<br>
that you run it -- there is currently no binary compatibility between MPI
<br>
implementations.  So if you compile your MPI application with Open MPI, then you
<br>
must run it with Open MPI's mpirun/mpiexec (which, as the man page notes,
<br>
are exact synonyms of each other in Open MPI -- this is not necessarily true in
<br>
other MPI implementations).
<br>
<p>If you compile your application with MPICH, then you must use MPICH's
<br>
mpirun/mpiexec -- and you'll need to ask them for help if things don't
<br>
work (i.e., it's an entirely different project and we're not qualified
<br>
to give you help with their software).
<br>
<p>Finally, note that Open MPI &quot;understands&quot; PBS/Torque.  If your system
<br>
administrator build Open MPI with PBS/Torque support, you don't need to list
<br>
the hostfile on Open MPI's mpirun/mpiexec command line -- Open MPI will
<br>
&quot;just figure it out&quot; and know a) what hosts to use and b) how many
<br>
processes to launch.  Specifically, you can use this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpiexec ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
<br>
<p>(or, as Mac suggests, you might want to provide a full path name to mpiexec to
<br>
ensure that you're getting the &quot;Right&quot; mpiexec)
<br>
<p>You can check your Open MPI installation to see if it has PBS/Torque support
<br>
with the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ompi_info | grep tm
<br>
<p>If you see anything in the output like this (although the exact version numbers
<br>
may be different):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: tm (MCA v2.0, API v2.0, Component v1.4)
<br>
<p>then your Open MPI has this native PBS/Torque support built-in and you can
<br>
avoid specifying a hostfile and -np arguments.
<br>
<p>--Jeff Squyres
<br>
Cisco Systems
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7995/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7996.php">Bernhard Knapp: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
<li><strong>Previous message:</strong> <a href="7994.php">Brian Blank: "[OMPI users] MPI_Reduce hangs in multi-node configuration"</a>
<li><strong>In reply to:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI users] Global Communicator"</a>
<!-- nextthread="start" -->
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
