<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 11:30:31 2008" -->
<!-- isoreceived="20081008153031" -->
<!-- sent="Wed, 8 Oct 2008 11:29:30 -0400" -->
<!-- isosent="20081008152930" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="7F23BBB3-740E-4834-9352-C37BE0DD2900_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1223477892.11054.3.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 11:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6904.php">Terry Dontje: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Previous message:</strong> <a href="6902.php">Ashley Pittman: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6902.php">Ashley Pittman: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6905.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You probably already know this but the obvious candidate here is the
</span><br>
<span class="quotelev1">&gt; memcpy() function, icc sticks in it's own which in some cases is much
</span><br>
<span class="quotelev1">&gt; better than the libc one.  It's unusual for compilers to have *huge*
</span><br>
<span class="quotelev1">&gt; differences from code optimisations alone.
</span><br>
<p>I know this is off topic, but I was interested in this performance,   
<br>
I compared dcopy() from blas, memcpy() and just C code with optimizer  
<br>
turned up in PGI/7.2
<br>
<p>Results are here:
<br>
<p><a href="http://www.mlds-networks.com/index.php/component/option,com_mojo/">http://www.mlds-networks.com/index.php/component/option,com_mojo/</a> 
<br>
Itemid,29/p,49/
<br>
<p>&lt;/OT&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6904.php">Terry Dontje: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Previous message:</strong> <a href="6902.php">Ashley Pittman: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6902.php">Ashley Pittman: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6905.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
