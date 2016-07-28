<?
$subject_val = "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 09:14:28 2012" -->
<!-- isoreceived="20121206141428" -->
<!-- sent="Thu, 6 Dec 2012 15:14:15 +0100" -->
<!-- isosent="20121206141415" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CRIU checkpoint support in Open-MPI?" -->
<!-- id="2CC2F9EC-1D85-4938-A16F-4F9366AB4D5E_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50C00976.30606_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] CRIU checkpoint support in Open-MPI?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-06 09:14:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11837.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv	ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>Previous message:</strong> <a href="11835.php">Ralph Castain: "Re: [OMPI devel] how to compile codes in orte/test/system"</a>
<li><strong>In reply to:</strong> <a href="11833.php">Christopher Samuel: "[OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11847.php">Josh Hursey: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<li><strong>Reply:</strong> <a href="11847.php">Josh Hursey: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel,
<br>
<p>Yes, all contributions are welcomed. It should be almost trivial to write a new backend in Open MPI to support what the kernel developers will agree to add as C/R capabilities. A good starting point to look at are the existing modules in opal/mca/crs.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Dec 6, 2012, at 03:56 , Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if people have seen that the Linux kernel community is
</span><br>
<span class="quotelev1">&gt; following its own different checkpoint/restart path to those currently
</span><br>
<span class="quotelev1">&gt; supported by OMPI, namely that of the OpenVZ developers
</span><br>
<span class="quotelev1">&gt; &quot;checkpoint/restore in user space&quot; project (CRIU).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can read more about its current state here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://lwn.net/Articles/525675/">https://lwn.net/Articles/525675/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The CRIU website is here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://criu.org/">http://criu.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CRIU will also be up for discussion at LCA2013 in Canberra this year
</span><br>
<span class="quotelev1">&gt; (though I won't be there):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://linux.conf.au/schedule/30116/view_talk?day=thursday">http://linux.conf.au/schedule/30116/view_talk?day=thursday</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there interest from OMPI in supporting this, given it looks like
</span><br>
<span class="quotelev1">&gt; it's quite likely to make it into the mainline kernel?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or is better to wait for it to be merged, and then take a look?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with undefined - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlDACXYACgkQO2KABBYQAh8LIQCfagfyZNzK3KVKb+W0etJV4tyL
</span><br>
<span class="quotelev1">&gt; AxwAn0z6q7TVNcOTom0tmvy7brfFf4QV
</span><br>
<span class="quotelev1">&gt; =SLvF
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
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
<li><strong>Next message:</strong> <a href="11837.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv	ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>Previous message:</strong> <a href="11835.php">Ralph Castain: "Re: [OMPI devel] how to compile codes in orte/test/system"</a>
<li><strong>In reply to:</strong> <a href="11833.php">Christopher Samuel: "[OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11847.php">Josh Hursey: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<li><strong>Reply:</strong> <a href="11847.php">Josh Hursey: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
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
