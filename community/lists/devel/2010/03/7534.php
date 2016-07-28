<?
$subject_val = "Re: [OMPI devel] Missing Symbol";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 13:01:42 2010" -->
<!-- isoreceived="20100305180142" -->
<!-- sent="Fri, 05 Mar 2010 13:00:49 -0500" -->
<!-- isosent="20100305180049" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing Symbol" -->
<!-- id="4B9146D1.800_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B9144A6.8080303_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Missing Symbol<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 13:00:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7535.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7533.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7533.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7535.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Reply:</strong> <a href="7535.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry meant to add this, but you might be able to try and find the 
<br>
symbol causing the issue by twiddling with LD_DEBUG
<br>
<p>--td
<br>
Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Possibly there is an external symbol in the .so that is being loaded 
</span><br>
<span class="quotelev1">&gt; that cannot be resolved.
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know that libtool does not help us to find the source of this 
</span><br>
<span class="quotelev2">&gt;&gt; error, but, what can generate the following error?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [aoclsb-clus.uab.es:11724] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev2">&gt;&gt; /home/lfialho/lib/openmpi/mca_vprotocol_receiver: perhaps a missing 
</span><br>
<span class="quotelev2">&gt;&gt; symbol, or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) yes, the file exists
</span><br>
<span class="quotelev2">&gt;&gt; 2) yes, it has been compiled among all other components
</span><br>
<span class="quotelev2">&gt;&gt; 3) yes, it is the same Open MPI version
</span><br>
<span class="quotelev2">&gt;&gt; 4) this component is a copy of the pessimist component implemented by 
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt; 5) Aurelien's component presents the same error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The question is: what mistake should generate an error during module 
</span><br>
<span class="quotelev2">&gt;&gt; loading?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7535.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7533.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7533.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7535.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Reply:</strong> <a href="7535.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
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
