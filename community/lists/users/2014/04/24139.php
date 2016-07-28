<?
$subject_val = "Re: [OMPI users] Performance issue of mpirun/mpi_init";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 11:29:15 2014" -->
<!-- isoreceived="20140410152915" -->
<!-- sent="Thu, 10 Apr 2014 08:28:22 -0700" -->
<!-- isosent="20140410152822" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance issue of mpirun/mpi_init" -->
<!-- id="97D30ADF-0FB0-4F72-B904-46925F354048_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8D58A4B5E6148C419C6AD6334962375DC21190F6_at_UWMBX04.uw.lu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance issue of mpirun/mpi_init<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-10 11:28:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24140.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Previous message:</strong> <a href="24138.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>In reply to:</strong> <a href="24136.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24141.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 10, 2014, at 7:58 AM, Victor Vysotskiy &lt;Victor.Vysotskiy_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; it appears that 1.8 is much faster than 1.6.5 with the default settings, but slower when you set btl=tcp,self?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Precisely. However, with the default settings  both versions are much slower compared to other MPI distributions such as MPICH, MVAPICH, and proprietary ones.
</span><br>
<p>Hmmm...odd, we aren't seeing that in our timing tests (running about even against MPICH, and against Cray when correct options are selected). Will have to explore that further.
<br>
<p><span class="quotelev1">&gt;  The  'btl=tcp,self' setting substantially boost performance of 1.6.5 on single processor multi-core computers running under Linux, or Mac OS X. But it doesn't work in 1.8 anymore ... 
</span><br>
<p>Doesn't make any sense - that option wouldn't have any impact whatsoever in the situation you describe with that code snippet. Something else must be going on...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is this a copy/paste error? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately,  it is not a copy/paste error. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the next question is: how many nodes were in your allocation? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2 processes on a single machine running under Ubuntu Linux (laptop), or Mac OS X (Mac mini). 
</span><br>
<p>Okay, I'll try to do a little poking around. Meantime, please send along the output from &quot;ompi_info&quot; so we can see how this was configured and what built.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Victor.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24140.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Previous message:</strong> <a href="24138.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>In reply to:</strong> <a href="24136.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24141.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
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
