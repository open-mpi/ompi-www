<?
$subject_val = "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 22:30:36 2009" -->
<!-- isoreceived="20090401023036" -->
<!-- sent="Tue, 31 Mar 2009 21:30:31 -0500" -->
<!-- isosent="20090401023031" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque." -->
<!-- id="c4d69730903311930s330a3c82y81ba60e065fa9a50_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9A32E87F-6E83-44B4-A6C3-646E3B8166CE_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque.<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 22:30:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8699.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Previous message:</strong> <a href="8697.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="8696.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8699.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2009/3/31 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Information would be most helpful - the information we really need is
</span><br>
<span class="quotelev1">&gt; specified here:&#160;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<p>Output of &quot;ompi_info --all&quot;  is attached in a file.
<br>
<p><p>echo $LD_LIBRARY_PATH
<br>
/usr/local/ompi-ifort/lib:/opt/intel/fce/10.1.018/lib:/opt/intel/mkl/10.0.4.023/lib/em64t:/opt/intel/cce/10.1.018/lib
<br>
<p>which mpirun
<br>
/usr/local/ompi-ifort/bin/mpirun
<br>
<p>which mpiexec
<br>
/usr/local/ompi-ifort/bin/mpiexec
<br>
<p>This three things are  invariant with or outside Torque. So unlikely
<br>
to be an issue.
<br>
<p>I am setting no MCA parameters explicitly ( at least none that I
<br>
conciously know of!) Any way of obtaining a dump from the environment
<br>
of a running job?
<br>
<p>Just a plain-old Gigabit ethernet network.
<br>
<p>Maybe this helps a bit? Feel free to instruct me to run any more
<br>
diagnostic commands. I'm essentially the &quot;sys admin&quot; on our tiny
<br>
cluster here so do have root access and try any tweaks or sugesstions
<br>
you guys might have. Thanks again!
<br>
<p><pre>
-- 
Rahul

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8698/ompi_info_node17.txt">ompi_info_node17.txt</a>
</ul>
<!-- attachment="ompi_info_node17.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8699.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Previous message:</strong> <a href="8697.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="8696.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8699.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
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
