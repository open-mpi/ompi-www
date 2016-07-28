<?
$subject_val = "Re: [OMPI users] ORTE daemon error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 21 20:01:20 2016" -->
<!-- isoreceived="20160722000120" -->
<!-- sent="Fri, 22 Jul 2016 09:01:17 +0900" -->
<!-- isosent="20160722000117" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE daemon error" -->
<!-- id="b4277ebd-1a02-f37e-1ae7-5efad5a34a62_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="57915BEA.4010600_at_cacr.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE daemon error<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-21 20:01:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29702.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29700.php">Steven Lo: "[OMPI users] ORTE daemon error"</a>
<li><strong>In reply to:</strong> <a href="29700.php">Steven Lo: "[OMPI users] ORTE daemon error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>common errors are
<br>
<p>- you are mix different openmpi versions (e.g. mpirun 1.10.2 and orted 
<br>
2.0.0)
<br>
<p>&nbsp;&nbsp;&nbsp;=&gt; check your PATH and LD_LIBRARY_PATH do not contain openmpi 2.0.0 
<br>
directories
<br>
<p>&nbsp;&nbsp;&nbsp;=&gt; if not already done, configure openmpi with 
<br>
--enable-mpirun-prefix-by-default
<br>
<p>&nbsp;&nbsp;&nbsp;=&gt; try to run `which mpirun` instead of mpirun
<br>
<p>&nbsp;&nbsp;&nbsp;=&gt; check your .bashrc or equivalent does not set anything related to 
<br>
openmpi 2.0.0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(either directly or via 'module' if you are using them on your 
<br>
system)
<br>
<p><p>- some libraries required by openmpi 1.10.2 are missing
<br>
<p>&nbsp;&nbsp;&nbsp;that typically can happen when openmpi is built with intel compilers 
<br>
and the runtime cannot be found on the compute nodes
<br>
<p>&nbsp;&nbsp;&nbsp;=&gt; if not already done, configure openmpi with 
<br>
--enable-mpirun-prefix-by-default
<br>
<p>&nbsp;&nbsp;&nbsp;=&gt; check your LD_LIBRARY_PATH points to the intel runtime on compute 
<br>
nodes
<br>
<p><p>generally speaking, you might want to run an openmpi 1.10.2 app without 
<br>
slurm
<br>
<p>(so you can tell whether slurm is to be blamed or not)
<br>
<p><p>you can also run a simple debug job with
<br>
<p>srun -N $SLURM_NNODES -n $SLURM_NNODES ldd /.../orted
<br>
<p>there should be *no* 'not found' libraries
<br>
<p><p>you should run the previous two tests with at least 2 nodes, since ssh 
<br>
or srun might have different behavior
<br>
<p><p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 7/22/2016 8:34 AM, Steven Lo wrote:
<br>
<span class="quotelev1">&gt; I'm a newbie to openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have openmpi 1.10.2 running on RHEL 7 server.  When we submit job 
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt; &quot;mpirun --mca oob_tcp_if_include ib0 -np 48 ./testjob&quot; via slurm version
</span><br>
<span class="quotelev1">&gt; 16.05.2, we get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev1">&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev1">&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev1">&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev1">&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev1">&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting thing is that when we run version 2.0.0 &quot;mpirun&quot;
</span><br>
<span class="quotelev1">&gt; (without --mca oob_tcp_if_include ib0) via slurm, the error
</span><br>
<span class="quotelev1">&gt; is gone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know if this problem is from openmpi or the combination
</span><br>
<span class="quotelev1">&gt; of slurm and openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steven.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29700.php">http://www.open-mpi.org/community/lists/users/2016/07/29700.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29702.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29700.php">Steven Lo: "[OMPI users] ORTE daemon error"</a>
<li><strong>In reply to:</strong> <a href="29700.php">Steven Lo: "[OMPI users] ORTE daemon error"</a>
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
