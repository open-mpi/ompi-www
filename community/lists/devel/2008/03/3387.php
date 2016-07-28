<?
$subject_val = "Re: [OMPI devel] orte can't launch process";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 07:49:15 2008" -->
<!-- isoreceived="20080306124915" -->
<!-- sent="Thu, 06 Mar 2008 07:49:13 -0500" -->
<!-- isosent="20080306124913" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte can't launch process" -->
<!-- id="47CFE849.8050903_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080306112819.GD32580_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte can't launch process<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 07:49:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3388.php">Gleb Natapov: "Re: [OMPI devel] orte can't launch process"</a>
<li><strong>Previous message:</strong> <a href="3386.php">Gleb Natapov: "[OMPI devel] orte can't launch process"</a>
<li><strong>In reply to:</strong> <a href="3386.php">Gleb Natapov: "[OMPI devel] orte can't launch process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3388.php">Gleb Natapov: "Re: [OMPI devel] orte can't launch process"</a>
<li><strong>Reply:</strong> <a href="3388.php">Gleb Natapov: "Re: [OMPI devel] orte can't launch process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry about that. I removed a field in a structure, then 'svn up' seems 
<br>
to have added it back, so we were using a field that should not even 
<br>
exist in a couple places.
<br>
<p>Should be fixed in r17757
<br>
<p>Tim
<br>
<p>Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; Something is broken in the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # mpirun -np 2 -H host1,host2  ./osu_latency
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Some of the requested hosts are not included in the current allocation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The requested hosts were specified with --host as:
</span><br>
<span class="quotelev1">&gt; host1,host2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please check your allocation or your request.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to start the specified application as it encountered
</span><br>
<span class="quotelev1">&gt; an error.
</span><br>
<span class="quotelev1">&gt; More information may be available above.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I create hostfile with host1 and host2 and use it instead of -H
</span><br>
<span class="quotelev1">&gt; mpirun works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3388.php">Gleb Natapov: "Re: [OMPI devel] orte can't launch process"</a>
<li><strong>Previous message:</strong> <a href="3386.php">Gleb Natapov: "[OMPI devel] orte can't launch process"</a>
<li><strong>In reply to:</strong> <a href="3386.php">Gleb Natapov: "[OMPI devel] orte can't launch process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3388.php">Gleb Natapov: "Re: [OMPI devel] orte can't launch process"</a>
<li><strong>Reply:</strong> <a href="3388.php">Gleb Natapov: "Re: [OMPI devel] orte can't launch process"</a>
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
