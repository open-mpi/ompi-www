<?
$subject_val = "[OMPI users] I encoutered Bus Error while running openMPI on IB.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  9 12:53:58 2009" -->
<!-- isoreceived="20090409165358" -->
<!-- sent="Fri, 10 Apr 2009 00:53:53 +0800" -->
<!-- isosent="20090409165353" -->
<!-- name="Tsung Han Shie" -->
<!-- email="icbm0926_at_[hidden]" -->
<!-- subject="[OMPI users] I encoutered Bus Error while running openMPI on IB." -->
<!-- id="84b2b5e30904090953n5f8ff82aif7a5269f7c751bc3_at_mail.gmail.com" -->
<!-- charset="Big5" -->
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
<strong>Subject:</strong> [OMPI users] I encoutered Bus Error while running openMPI on IB.<br>
<strong>From:</strong> Tsung Han Shie (<em>icbm0926_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-09 12:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8849.php">Ralph Castain: "Re: [OMPI users] I encoutered Bus Error while running openMPI on IB."</a>
<li><strong>Previous message:</strong> <a href="8847.php">Francesco Pietra: "[OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8849.php">Ralph Castain: "Re: [OMPI users] I encoutered Bus Error while running openMPI on IB."</a>
<li><strong>Reply:</strong> <a href="8849.php">Ralph Castain: "Re: [OMPI users] I encoutered Bus Error while running openMPI on IB."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I've build an openmpi-1.3.1 binary on a machine with openSUSE 10.2, gcc
<br>
4.1.2&#161;C
<br>
The cluster I tried to run jobs on uses Silverstorm infiniband system and
<br>
uses ibverbs as its IB driver. The configure parameters listed below:
<br>
<p>./configure --prefix=/d/thshie/vp31/openmpi/
<br>
--with-openib=/usr/local/ibverbs1.1.1/ --with-tm=/usr/local/torque2.1.8/
<br>
CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 --disable-shared
<br>
--enable-static
<br>
<p>The cluster system uses &quot;rsh&quot; as the process lauch system. While I ran a job
<br>
with &quot;&lt;mpirun path&gt; --mca pls_rsh_agent rsh -np 128 -machinefile machines
<br>
-nolocal &lt;job command&gt;&quot;. I shows following messages:
<br>
====================================================
<br>
A deprecated MCA parameter value was specified in the environment or
<br>
on the command line.  Deprecated MCA parameters should be avoided;
<br>
they may disappear in future releases.
<br>
<p>&nbsp;&nbsp;Deprecated parameter: pls_rsh_agent
<br>
--------------------------------------------------------------------------
<br>
Bus error
<br>
====================================================
<br>
I've looked into maling lists. But the contents seemsto be related to the
<br>
developments of openMPI. Can anyone gives me some guides about how this
<br>
would happen and how do I fixed it?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8848/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8849.php">Ralph Castain: "Re: [OMPI users] I encoutered Bus Error while running openMPI on IB."</a>
<li><strong>Previous message:</strong> <a href="8847.php">Francesco Pietra: "[OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8849.php">Ralph Castain: "Re: [OMPI users] I encoutered Bus Error while running openMPI on IB."</a>
<li><strong>Reply:</strong> <a href="8849.php">Ralph Castain: "Re: [OMPI users] I encoutered Bus Error while running openMPI on IB."</a>
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
