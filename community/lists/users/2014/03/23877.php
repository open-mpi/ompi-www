<?
$subject_val = "Re: [OMPI users] OpenMpi-java Examples";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 17:15:06 2014" -->
<!-- isoreceived="20140317211506" -->
<!-- sent="Mon, 17 Mar 2014 22:15:02 +0100" -->
<!-- isosent="20140317211502" -->
<!-- name="Oscar Vega-Gisbert" -->
<!-- email="ovega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMpi-java Examples" -->
<!-- id="20140317221502.17303wr8r7gnkssg_at_webmail.dsic.upv.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFqWg=Q+CL2t1H5=6LO0CG_WiG8MbKThmdfky_RrKn2zvo9XFw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMpi-java Examples<br>
<strong>From:</strong> Oscar Vega-Gisbert (<em>ovega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-17 17:15:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23878.php">Ramesh Vinayagam: "[OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="23876.php">christophe petit: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<li><strong>In reply to:</strong> <a href="23869.php">madhurima madhunapanthula: "[OMPI users] OpenMpi-java Examples"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Madhurima,
<br>
<p>Currently we only have tests which start MPI and check the provided  
<br>
level of thread support:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int provided = MPI.InitThread(args, MPI.THREAD_FUNNELED);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(provided &lt; MPI.THREAD_FUNNELED)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw new MPIException(&quot;MPI_Init_thread returned less &quot;+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;than MPI_THREAD_FUNNELED.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Regards,
<br>
Oscar
<br>
<p>Quoting madhurima madhunapanthula &lt;erankimadhu_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iam new to OpenMPI. I have installed the java bindings of OpenMPI and
</span><br>
<span class="quotelev1">&gt; running some samples in the cluster.
</span><br>
<span class="quotelev1">&gt; iam interested in some samples using THREAD_SERIALIZED and THREAD_FUNNLED
</span><br>
<span class="quotelev1">&gt; fields in OpenMPI. please provide me some samples.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lokah samasta sukhinobhavanthu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Madhurima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>----------------------------------------------------------------
<br>
This message was sent using IMP, the Internet Messaging Program.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23878.php">Ramesh Vinayagam: "[OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="23876.php">christophe petit: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<li><strong>In reply to:</strong> <a href="23869.php">madhurima madhunapanthula: "[OMPI users] OpenMpi-java Examples"</a>
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
