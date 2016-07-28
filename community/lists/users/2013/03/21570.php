<?
$subject_val = "[OMPI users] &quot;Error setting file view&quot; NPB BTIO";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 20 17:07:38 2013" -->
<!-- isoreceived="20130320210738" -->
<!-- sent="Wed, 20 Mar 2013 16:08:16 -0500 (CDT)" -->
<!-- isosent="20130320210816" -->
<!-- name="kmehta_at_[hidden]" -->
<!-- email="kmehta_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;Error setting file view&amp;quot; NPB BTIO" -->
<!-- id="50764.129.7.242.24.1363813696.squirrel_at_mail.cs.uh.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] &quot;Error setting file view&quot; NPB BTIO<br>
<strong>From:</strong> <a href="mailto:kmehta_at_[hidden]?Subject=Re:%20[OMPI%20users]%20&amp;amp;quot;Error%20setting%20file%20view&amp;amp;quot;%20NPB%20BTIO"><em>kmehta_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-03-20 17:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21571.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21569.php">Reuti: "Re: [OMPI users] mpirun error output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21619.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;Error setting file view&quot; NPB BTIO"</a>
<li><strong>Reply:</strong> <a href="21619.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;Error setting file view&quot; NPB BTIO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello ,
<br>
<p>I am running NAS parallel benchmark's BTIO benchmark (NPB v 3.3) for class
<br>
D and 1 process.
<br>
<p>`make bt CLASS=D SUBTYPE=full NPROCS=1`
<br>
<p>I have provided gcc's `mcmodel=medium` flag alongwith -O3 during
<br>
compilation. This is on an x86_64 machine.
<br>
<p>I have tested with openmpi 1.4.3, 1.7, but I get &quot;Error setting file view&quot;
<br>
when I run the benchmark. It works fine for 4,16 processes. Can someone
<br>
point out what is going wrong? Thanks in advance.
<br>
<p>________________________________________________________________________
<br>
NAS Parallel Benchmarks 3.3 -- BT Benchmark
<br>
<p>&nbsp;No input file inputbt.data. Using compiled defaults
<br>
&nbsp;Size:  408x 408x 408
<br>
&nbsp;Iterations:  250    dt:   0.0000200
<br>
&nbsp;Number of active processes:     1
<br>
<p>&nbsp;BTIO -- FULL MPI-IO write interval:   5
<br>
<p>&nbsp;Error setting file view
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 6663 on
<br>
node crill-003 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
________________________________________________________________________
<br>
<p><p><p><p>Regards,
<br>
Kshitij Mehta
<br>
PhD student
<br>
University of Houston
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21571.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21569.php">Reuti: "Re: [OMPI users] mpirun error output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21619.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;Error setting file view&quot; NPB BTIO"</a>
<li><strong>Reply:</strong> <a href="21619.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;Error setting file view&quot; NPB BTIO"</a>
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
