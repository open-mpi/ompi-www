<?
$subject_val = "Re: [OMPI devel] OMPI 1.4.5rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 10:10:47 2011" -->
<!-- isoreceived="20111214151047" -->
<!-- sent="Wed, 14 Dec 2011 08:10:39 -0700" -->
<!-- isosent="20111214151039" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.4.5rc1 posted" -->
<!-- id="E33C3BC3-23FC-416B-932C-7C504D6FAC29_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE6EC70.2040603_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.4.5rc1 posted<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 10:10:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10117.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="10115.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<li><strong>In reply to:</strong> <a href="10070.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10119.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="10119.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is amusing - reviewing the code quickly, it appears that the supporting code for orte_no_session_dir was mistakenly removed at some point.
<br>
<p>I'll restore that functionality. Thanks for pointing it out!
<br>
<p>On Dec 12, 2011, at 11:10 PM, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 09/12/11 09:13, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gearing up for a pre-Christmas release -- please test!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Had a quick test here (we're still on 1.4.2 as our default).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It now complains that $TMPDIR points to our Panasas filesystem,
</span><br>
<span class="quotelev1">&gt; and there's a minor typo in its message, saying:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Note, too, that system administrators can set a list of filesystems 
</span><br>
<span class="quotelev1">&gt; # where Open MPI is disallowed from creating temporary files by settings 
</span><br>
<span class="quotelev1">&gt; # the MCA parameter &quot;orte_no_session_dir&quot;. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you want s/settings/setting/ there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also I can not seem to make it accept the orte_no_session_dir settings,
</span><br>
<span class="quotelev1">&gt; neither:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -mca orte_no_session_dir /vlsci ./hello_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nor:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -mca orte_no_session_dir /vlsci/tmp ./hello_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nor:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ export OMPI_MCA_orte_no_session_dir=/vlsci
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nor:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_orte_no_session_dir=/vlsci/tmp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; prevent it whinging about (for example):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Local host: bruce001 
</span><br>
<span class="quotelev1">&gt; File Name:  /vlsci/tmp/979325.bruce-m.vlsci.unimelb.edu.au/openmpi-sessions-samuel_at_bruce001_0/14488/1/shared_mem_pool.bruce001
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to tell it to use /tmp without changing what
</span><br>
<span class="quotelev1">&gt; $TMPDIR is set to ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt;    Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAk7m7HAACgkQO2KABBYQAh/qagCfSZIZsQRSL4WlafAZq4kvx7lk
</span><br>
<span class="quotelev1">&gt; igQAn2j6Vdzwa4vweeEALKIoNAQZqV0D
</span><br>
<span class="quotelev1">&gt; =ju/j
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
<li><strong>Next message:</strong> <a href="10117.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="10115.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<li><strong>In reply to:</strong> <a href="10070.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10119.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="10119.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
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
