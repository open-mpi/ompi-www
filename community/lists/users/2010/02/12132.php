<?
$subject_val = "Re: [OMPI users] MPi Abort verbosity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 08:50:13 2010" -->
<!-- isoreceived="20100224135013" -->
<!-- sent="Wed, 24 Feb 2010 06:50:05 -0700" -->
<!-- isosent="20100224135005" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPi Abort verbosity" -->
<!-- id="6643D0F7-8D86-4128-ADDC-09ADA1810AA8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87sk8qu56a.fsf_at_59A2.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPi Abort verbosity<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 08:50:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12133.php">Rainer Keller: "Re: [OMPI users] configure error"</a>
<li><strong>Previous message:</strong> <a href="12131.php">Jed Brown: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>In reply to:</strong> <a href="12131.php">Jed Brown: "Re: [OMPI users] MPi Abort verbosity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12134.php">Gabriele Fatigati: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>Reply:</strong> <a href="12134.php">Gabriele Fatigati: "Re: [OMPI users] MPi Abort verbosity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't believe the error handler will help suppress the messages you are trying to avoid as they don't originate in the MPI layer. They are actually generated in the RTE layer as mpirun is exiting.
<br>
<p>You could try adding the --quiet option to your mpirun cmd line. This will help eliminate some (maybe not all) of the verbage.
<br>
<p><p>On Feb 24, 2010, at 6:36 AM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 24 Feb 2010 14:21:02 +0100, Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yes, of course,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; but i would like to know if there is any way to do that with openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See the error handler docs, e.g. MPI_Comm_set_errhandler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jed
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
<li><strong>Next message:</strong> <a href="12133.php">Rainer Keller: "Re: [OMPI users] configure error"</a>
<li><strong>Previous message:</strong> <a href="12131.php">Jed Brown: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>In reply to:</strong> <a href="12131.php">Jed Brown: "Re: [OMPI users] MPi Abort verbosity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12134.php">Gabriele Fatigati: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>Reply:</strong> <a href="12134.php">Gabriele Fatigati: "Re: [OMPI users] MPi Abort verbosity"</a>
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
