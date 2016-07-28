<?
$subject_val = "Re: [OMPI users] New ib locked pages behavior?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 03:37:07 2014" -->
<!-- isoreceived="20141022073707" -->
<!-- sent="Wed, 22 Oct 2014 09:37:04 +0200" -->
<!-- isosent="20141022073704" -->
<!-- name="rf_at_[hidden]" -->
<!-- email="rf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New ib locked pages behavior?" -->
<!-- id="21575.24224.519781.86628_at_gargle.gargle.HOWL" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5446DFD7.2080601_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] New ib locked pages behavior?<br>
<strong>From:</strong> <a href="mailto:rf_at_[hidden]?Subject=Re:%20[OMPI%20users]%20New%20ib%20locked%20pages%20behavior?"><em>rf_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-10-22 03:37:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25553.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25551.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>In reply to:</strong> <a href="25544.php">Bill Broadley: "[OMPI users] New ib locked pages behavior?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25554.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25554.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25569.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;Bill&quot; == Bill Broadley &lt;bill_at_[hidden]&gt; writes:
</span><br>
<p>It seems the half-life period of knowledge on the list has decayed to
<br>
two weeks on the list :)
<br>
<p>I've commented in detail on this (non-)issue on 2014-08-20:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2014/08/25090.php">http://www.open-mpi.org/community/lists/users/2014/08/25090.php</a>
<br>
<p>A change in the FAQ and a fix in the code would really be nice
<br>
at this stage.
<br>
<p>Roland
<br>
<p>-------
<br>
<a href="http://www.q-leap.com">http://www.q-leap.com</a> / <a href="http://qlustar.com">http://qlustar.com</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--- HPC / Storage / Cloud Linux Cluster OS ---
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; I've setup several clusters over the years with OpenMPI.  I
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; often get the below error:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt;    WARNING: It appears that your OpenFabrics subsystem is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt;    configured to only allow registering part of your physical
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt;    memory.  This can cause MPI jobs to run with erratic
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt;    performance, hang, and/or crash.  ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt;    <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt;      Local host: c2-31 Registerable memory: 32768 MiB Total
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt;      memory: 64398 MiB
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; I'm well aware of the normal fixes, and have implemented them
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; in puppet to ensure compute nodes get the changes.  To be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; paranoid I've implemented all the changes, and they all worked
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; under ubuntu 13.10.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; However with ubuntu 14.04 it seems like it's not working, thus
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; the above message.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; As recommended by the faq's I've implemented:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; 1) ulimit -l unlimited in /etc/profile.d/slurm.sh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; 2) PropagateResourceLimitsExcept=MEMLOCK in slurm.conf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; 3) UsePAM=1 in slurm.conf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; 4) in /etc/security/limits.conf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt;    * hard memlock unlimited
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt;    * soft memlock unlimited
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt;    * hard stack unlimited
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt;    * soft stack unlimited
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; My changes seem to be working, of I submit this to slurm:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; #!/bin/bash -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; ulimit -l hostname mpirun bash -c ulimit -l mpirun ./relay 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; 131072
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; I get:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt;    unlimited c2-31 unlimited unlimited unlimited unlimited
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt;    &lt;above error message only 32GB of Registerable memory&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt;    &lt;output of mpirun relay&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; Is there some new kernel parameter, ofed parameter, or similar
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; that controls locked pages now?  The kernel is 3.13.0-36 and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; the libopenmpi-dev package is 1.6.5.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; Since the ulimit -l is getting to both the slurm launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; script and also to the mpirun launched binaries I'm pretty
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; puzzled.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; Any suggestions?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; _______________________________________________ users mailing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; list users_at_[hidden] Subscription:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; this post:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bill&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25544.php">http://www.open-mpi.org/community/lists/users/2014/10/25544.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25553.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25551.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>In reply to:</strong> <a href="25544.php">Bill Broadley: "[OMPI users] New ib locked pages behavior?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25554.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25554.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25569.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New ib locked pages behavior?"</a>
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
