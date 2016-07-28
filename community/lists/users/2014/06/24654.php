<?
$subject_val = "[OMPI users] how to get mpirun to scale from 16 to 64 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 18:21:53 2014" -->
<!-- isoreceived="20140616222153" -->
<!-- sent="Mon, 16 Jun 2014 15:19:08 -0700" -->
<!-- isosent="20140616221908" -->
<!-- name="Yuping Sun" -->
<!-- email="yupingpaulasun_at_[hidden]" -->
<!-- subject="[OMPI users] how to get mpirun to scale from 16 to 64 cores" -->
<!-- id="1402957148.27378.YahooMailNeo_at_web184804.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] how to get mpirun to scale from 16 to 64 cores<br>
<strong>From:</strong> Yuping Sun (<em>yupingpaulasun_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-16 18:19:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24655.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Previous message:</strong> <a href="24653.php">Rolf vandeVaart: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24655.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Reply:</strong> <a href="24655.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Reply:</strong> <a href="24658.php">Zehan Cui: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All:

I bought a 64 core workstation and installed NASA fun3d with open mpi 1.6.5. Then I started to test run fun3d using 16, 32, 48 cores. However the performance of the fun3d run is bad. I got data below:

the run command is (it is for 32 core as an example)

mpiexec -np 32 --bysocket --bind-to-socket ~ysun/Codes/NASA/fun3d-12.3-66687/Mpi/FUN3D_90/nodet_mpi --time_timestep_loop --animation_freq -1 &gt; screen.dump_bs30


CPUs &#160;&#160;&#160; times&#160;&#160;&#160; iterations&#160;&#160;&#160; time/it
60&#160;&#160;&#160; 678s&#160;&#160;&#160; 30it &#160;&#160; &#160;&#160;&#160; 22.61s
48&#160;&#160;&#160; 702s&#160;&#160;&#160; 30it &#160;&#160; &#160;&#160;&#160; 23.40s
32&#160;&#160;&#160; 734s&#160;&#160;&#160; 30it &#160;&#160; &#160;&#160;&#160; 24.50s
16&#160;&#160;&#160; 894s&#160;&#160;&#160; 30it &#160;&#160; &#160;&#160;&#160; 29.80s

You can see using 60 cores, to run 30 iteration, FUN3D will complete in 678 seconds, roughly 22.61 second per iteration.

Using 16 cores, to run 30 iteration, FUN3D will complete in 894 seconds, roughly 29.8 seconds per iteration.

the data above shows FUN3D run using mpirun does not scale at all! I used to run fun3d with mpirun on a 8 core WS, and it scales well.
The same job to run on a linux cluster scales well.

Would you all give me some advice to improve the performance loss when I increase the use of more cores, or how to run mpirun with proper options to get a linear scaling when using 16 to 32 to 48 cores?

Thank you.

Yuping
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24654/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24655.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Previous message:</strong> <a href="24653.php">Rolf vandeVaart: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24655.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Reply:</strong> <a href="24655.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Reply:</strong> <a href="24658.php">Zehan Cui: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
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
