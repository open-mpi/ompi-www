<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 11 05:36:32 2010" -->
<!-- isoreceived="20100611093632" -->
<!-- sent="Fri, 11 Jun 2010 02:36:16 -0700" -->
<!-- isosent="20100611093616" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing" -->
<!-- id="4C120390.8010902_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D45958078CD65C429557B4C5F492B6A60770E62D_at_IS-EX-BEV3.unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-11 05:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8097.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8095.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8095.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8094.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Chris,
<br>
<p>&nbsp;&nbsp;I think that &quot;reclaiming pages from the page cache&quot; is the PROBLEM, 
<br>
not the solution.  If I understand you correctly a lower value of 
<br>
&quot;swappiness&quot; means that the ANONYMOUS pages of an application's stack 
<br>
and heap are less likely to be subject to swap I/O.  However, the 
<br>
concern here is for the pages of an mmap()ed file (though an unlinked 
<br>
one).  So, my expectation is that the page cache is their &quot;owner&quot; rather 
<br>
than the application.  If that is an incorrect understanding, I would 
<br>
appreciate being corrected.
<br>
<p>-Paul
<br>
<p>Christopher Samuel wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/06/10 18:43, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; When the file is on a real (not tmpfs or other ramdisk) I am 95% certain
</span><br>
<span class="quotelev2">&gt; &gt; that this is an artifact of the Linux swapper/pager behavior which is
</span><br>
<span class="quotelev2">&gt; &gt; thinking it is being smart by &quot;swapping ahead&quot;.  Even when there is no
</span><br>
<span class="quotelev2">&gt; &gt; memory pressure that requires swapping, Linux starts queuing swap I/O
</span><br>
<span class="quotelev2">&gt; &gt; for pages to keep the number of &quot;clean&quot; pages up when possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe you can tweak that behaviour through the VM subsystem
</span><br>
<span class="quotelev1">&gt; using /proc/sys/vm/swappiness, it defaults to 60 but lower values
</span><br>
<span class="quotelev1">&gt; are meant to make the kernel less likely to swap out applications
</span><br>
<span class="quotelev1">&gt; and instead concentrate on reclaiming pages from the page cache.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - --
</span><br>
<span class="quotelev1">&gt;  Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;  VLSCI - Victorian Life Sciences Computational Initiative
</span><br>
<span class="quotelev1">&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.10 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAkwR0fcACgkQO2KABBYQAh8sEACggnFKMQIVummW21teI9yBqqNt
</span><br>
<span class="quotelev1">&gt; T4AAnjMSfOFONLyANjgso7kO0VAH3zi7
</span><br>
<span class="quotelev1">&gt; =X3AE
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8097.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8095.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8095.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8094.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
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
