<?
$subject_val = "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 15:44:13 2010" -->
<!-- isoreceived="20100622194413" -->
<!-- sent="Tue, 22 Jun 2010 21:44:07 +0200" -->
<!-- isosent="20100622194407" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)" -->
<!-- id="AANLkTin9d1MwXaMjG84jnB9AAJyihqXcEiu58RRDwDEl_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)<br>
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 15:44:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13379.php">Riccardo Murri: "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)"</a>
<li><strong>Previous message:</strong> <a href="13377.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13379.php">Riccardo Murri: "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)"</a>
<li><strong>Reply:</strong> <a href="13379.php">Riccardo Murri: "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On Tue, Jun 22, 2010 at 8:05 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Sorry for the problem - the issue is a bug in the handling of the
</span><br>
<span class="quotelev1">&gt;pernode option in 1.4.2. This has been fixed and awaits release in
</span><br>
<span class="quotelev1">&gt;1.4.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thank you for pointing this out.  Unfortunately, I still am not able
<br>
to start remote processes::
<br>
<p>&nbsp;&nbsp;$ mpirun --host compute-0-11 -np 1 ./hello_mpi
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;mpirun noticed that the job aborted, but has no info as to the process
<br>
&nbsp;&nbsp;that caused that situation.
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
<p>The same program runs fine if I use &quot;--host localhost&quot;.
<br>
<p>Doing a &quot;strace -v&quot; on the &quot;mpirun&quot; invocation shows a strange
<br>
invocation of &quot;orted&quot;::
<br>
<p>&nbsp;execve(&quot;//usr/bin/ssh&quot;, [&quot;/usr/bin/ssh&quot;, &quot;-x&quot;, &quot;compute-0-11&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot; orted&quot;, &quot;--daemonize&quot;, &quot;-mca&quot;, &quot;ess&quot;, &quot;env&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;-mca&quot;, &quot;orte_ess_jobid&quot;, &quot;2322006016&quot;, &quot;-mca&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;orte_ess_vpid&quot;, &quot;1&quot;, &quot;-mca&quot;, &quot;orte_ess_num_procs&quot;, &quot;2&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--hnp-uri&quot;, &quot;\&quot;2322006016.0;tcp://192.168.122.1&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&quot;MKLROOT=/opt/intel/mkl/10.0.3.02&quot;, ...])
<br>
<p>Indeed, the 192.168.122.1 address is connected to an internal Xen
<br>
bridge &quot;virbr0&quot;, so it should not appear as a &quot;call-back&quot; address.
<br>
Is there a command-line option to force mpirun to use a certain IP address?
<br>
I have tried starting &quot;mpirun&quot; with &quot;--mca btl_tcp_if_exclude lo,virbr0&quot;
<br>
to no avail.
<br>
<p>Also, the &quot; orted&quot; argument to ssh starts with a space; is this OK?
<br>
<p>I'm using OMPI 1.4.2,  self-compiled on a Rocks 5.2 (i.e., CentOS 5.2) cluster
<br>
<p>Regards,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13379.php">Riccardo Murri: "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)"</a>
<li><strong>Previous message:</strong> <a href="13377.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13379.php">Riccardo Murri: "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)"</a>
<li><strong>Reply:</strong> <a href="13379.php">Riccardo Murri: "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)"</a>
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
