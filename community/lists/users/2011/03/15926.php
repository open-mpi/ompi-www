<?
$subject_val = "Re: [OMPI users] bizarre failure with IMB/openib";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 10:04:52 2011" -->
<!-- isoreceived="20110321140452" -->
<!-- sent="Mon, 21 Mar 2011 15:04:39 +0100" -->
<!-- isosent="20110321140439" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bizarre failure with IMB/openib" -->
<!-- id="201103211504.44849.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8762rcu34e.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] bizarre failure with IMB/openib<br>
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 10:04:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15927.php">Terry Dontje: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Previous message:</strong> <a href="15925.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>In reply to:</strong> <a href="15921.php">Dave Love: "[OMPI users] bizarre failure with IMB/openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15928.php">Dave Love: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<li><strong>Reply:</strong> <a href="15928.php">Dave Love: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday, March 21, 2011 12:25:37 pm Dave Love wrote:
<br>
<span class="quotelev1">&gt; I'm trying to test some new nodes with ConnectX adaptors, and failing to
</span><br>
<span class="quotelev1">&gt; get (so far just) IMB to run on them.
</span><br>
...
<br>
<span class="quotelev1">&gt; I'm using gcc-compiled OMPI 1.4.3 and the current RedHat 5 OFED with IMB
</span><br>
<span class="quotelev1">&gt; 3.2.2, specifying `btl openib,sm,self' (or `mtl psm' on the Qlogic
</span><br>
<span class="quotelev1">&gt; nodes).  I'm not sure what else might be relevant.  The output from
</span><br>
<span class="quotelev1">&gt; trying to run IMB follows, for what it's worth.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for MPI
</span><br>
<span class="quotelev1">&gt; communications.  This means that no Open MPI device has indicated that it
</span><br>
<span class="quotelev1">&gt; can be used to communicate between these processes.  This is an error;
</span><br>
<span class="quotelev1">&gt; Open MPI requires that all MPI processes be able to reach each other. 
</span><br>
<span class="quotelev1">&gt; This error can sometimes be the result of forgetting to specify the &quot;self&quot;
</span><br>
<span class="quotelev1">&gt; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Process 1 ([[25307,1],2]) is on host: lvgig116
</span><br>
<span class="quotelev1">&gt;     Process 2 ([[25307,1],12]) is on host: lvgig117
</span><br>
<span class="quotelev1">&gt;     BTLs attempted: self sm
</span><br>
<p>Are you sure you launched it correctly and that you have (re)built OpenMPI 
<br>
against your Redhat-5 ib stack?
<br>
&nbsp;
<br>
<span class="quotelev1">&gt;   Your MPI job is now going to abort; sorry.
</span><br>
...
<br>
<span class="quotelev1">&gt;   [lvgig116:07931] 19 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mca-bml-r2.txt / unreachable proc [lvgig116:07931] Set MCA parameter
</span><br>
<p>Seems to me that OpenMPI gave up because it didn't succeed in initializing any 
<br>
inter-node btl/mtl.
<br>
<p>I'd suggest you try (roughly in order):
<br>
<p>&nbsp;1) ibstat on all nodes to verify that your ib interfaces are up
<br>
&nbsp;2) try a verbs level test (like ib_write_bw) to verify data can flow
<br>
&nbsp;3) make sure your OpenMPI was built with the redhat libibverbs-devel present
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(=&gt; a suitable openib btl is built).
<br>
<p>/Peter
<br>
<p><span class="quotelev1">&gt; &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [lvgig116:07931] 19 more processes have sent help message help-mpi-runtime
</span><br>
<span class="quotelev1">&gt; / mpi_init:startup:internal-failure
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15926/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15927.php">Terry Dontje: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Previous message:</strong> <a href="15925.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>In reply to:</strong> <a href="15921.php">Dave Love: "[OMPI users] bizarre failure with IMB/openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15928.php">Dave Love: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<li><strong>Reply:</strong> <a href="15928.php">Dave Love: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
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
