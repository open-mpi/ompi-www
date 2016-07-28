<?
$subject_val = "Re: [OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  7 08:29:29 2016" -->
<!-- isoreceived="20160207132929" -->
<!-- sent="Sun, 7 Feb 2016 13:29:27 +0000" -->
<!-- isosent="20160207132927" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran vs C reductions" -->
<!-- id="C3E3CBE6-D407-47EC-9616-29399739A366_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKRe6eBahoD97kVvfFWReBiYqHLY93Ok3xSQ2vAQkyXTm4yR6Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran vs C reductions<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-07 08:29:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28457.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28455.php">Steve Wise: "Re: [OMPI users] QP creation failure on iWARP adapter"</a>
<li><strong>In reply to:</strong> <a href="28453.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28457.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28457.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 4, 2016, at 9:46 PM, Brian Taylor &lt;spam.brian.taylor_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the explanation, Jeff.  I'm not surprised to hear that using a Fortran type from C in this manner is potentially buggy and not portable.  However, assuming that the C and Fortran types are interoperable, is there any guarantee that the call to MPI_Reduce in the program above will execute successfully?
</span><br>
<p>If the representations of the C and Fortran datatypes are the same, then yes, it should work.
<br>
<p><span class="quotelev1">&gt; If OpenMPI 1.10.2 is built with Fortran support, the program above runs and gives the expected output.  If OpenMPI 1.10.2 is built without Fortran support, the program exits with the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; taylor_at_host $ mpirun -np 1 ./bug
</span><br>
<span class="quotelev1">&gt; [host:49234] *** An error occurred in MPI_Reduce: the reduction operation MPI_MAXLOC is not defined on the MPI_2DBLPREC datatype
</span><br>
<span class="quotelev1">&gt; [host:49234] *** reported by process [3133079553,0]
</span><br>
<span class="quotelev1">&gt; [host:49234] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [host:49234] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev1">&gt; [host:49234] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [host:49234] ***    and potentially your MPI job)
</span><br>
<p>I suppose that error message is a bit misleading -- it's not available because we disabled *all* Fortran support, including support for Fortran data types.  So yes, MPI_MAXLOC is not defined for MPI2DBLPREC, but *because* there's no Fortran support *at all*.
<br>
<p><span class="quotelev1">&gt; It seems that the MPI_MAXLOC operator for MPI_2DOUBLE_PRECISION is not available if OpenMPI is built without Fortran support; thus, the call to MPI_Reduce fails.  Is this the expected behavior?  Is the MPI_MAXLOC operator for MPI_2DOUBLE_PRECISION required to be available from C for compliance with the MPI standard, or is its availability from C in OpenMPI (when built with Fortran support) an implementation-dependent &quot;extension&quot;?
</span><br>
<p>If there's no Fortran compiler, Open MPI can't possibly know what the Fortran representation of the Fortran datatypes.
<br>
<p>BTW: is there a reason you don't want to just use the C datatypes?  The fundamental output of the index is an integer value -- casting it to a float of some flavor doesn't fundamentally change its value.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28457.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28455.php">Steve Wise: "Re: [OMPI users] QP creation failure on iWARP adapter"</a>
<li><strong>In reply to:</strong> <a href="28453.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28457.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28457.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
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
