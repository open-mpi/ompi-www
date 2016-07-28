<?
$subject_val = "[OMPI users] help understand unhelpful ORTE error message";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 12:44:43 2015" -->
<!-- isoreceived="20151119174443" -->
<!-- sent="Thu, 19 Nov 2015 09:44:20 -0800" -->
<!-- isosent="20151119174420" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="[OMPI users] help understand unhelpful ORTE error message" -->
<!-- id="CAGKz=uLiABJ62d-wjAjDNj=uGV=JVv2vDAN_jXM-3qLgYN8kLA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] help understand unhelpful ORTE error message<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-19 12:44:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28063.php">Martin Siegert: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28061.php">Marco Atzeri: "Re: [OMPI users] Slides from the Open MPI SC'15 State of the Union BOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28063.php">Martin Siegert: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28063.php">Martin Siegert: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28082.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have no idea what this is trying to tell me.  Help?
<br>
<p>jhammond_at_nid00024:~/MPI/qoit/collectives&gt; mpirun -n 2 ./driver.x 64
<br>
[nid00024:00482] [[46168,0],0] ORTE_ERROR_LOG: Not found in file
<br>
../../../../../orte/mca/plm/alps/plm_alps_module.c at line 418
<br>
<p>I can run the same job with srun without incident:
<br>
<p>jhammond_at_nid00024:~/MPI/qoit/collectives&gt; srun -n 2 ./driver.x 64
<br>
MPI was initialized.
<br>
<p>This is on the NERSC Cori Cray XC40 system.  I build Open-MPI git head from
<br>
source for OFI libfabric.
<br>
<p>I have many other issues, which I will report later.  As a spoiler, if I
<br>
cannot use your mpirun, I cannot set any of the MCA options there.  Is
<br>
there a method to set MCA options with environment variables?  I could not
<br>
find this documented anywhere.
<br>
<p>In particular, is there a way to cause shm to not use the global
<br>
filesystem?  I see this issue comes up a lot and I read the list archives,
<br>
but the warning message (
<br>
<a href="https://github.com/hpc/cce-mpi-openmpi-1.6.4/blob/master/ompi/mca/common/sm/help-mpi-common-sm.txt">https://github.com/hpc/cce-mpi-openmpi-1.6.4/blob/master/ompi/mca/common/sm/help-mpi-common-sm.txt</a>)
<br>
suggested that I could override it by setting TMP, TEMP or TEMPDIR, which I
<br>
did to no avail.
<br>
<p>Thanks,
<br>
<p>Jeff
<br>
<p><pre>
--
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28062/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28063.php">Martin Siegert: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28061.php">Marco Atzeri: "Re: [OMPI users] Slides from the Open MPI SC'15 State of the Union BOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28063.php">Martin Siegert: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28063.php">Martin Siegert: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28082.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
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
