<?
$subject_val = "Re: [OMPI devel] OMPI 1.4.5rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 16:33:54 2011" -->
<!-- isoreceived="20111214213354" -->
<!-- sent="Wed, 14 Dec 2011 14:33:42 -0700" -->
<!-- isosent="20111214213342" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.4.5rc1 posted" -->
<!-- id="B50F8660-C7F9-4391-BF10-203FD1788A61_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E33C3BC3-23FC-416B-932C-7C504D6FAC29_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-12-14 16:33:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10120.php">Christopher Yeoh: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Previous message:</strong> <a href="10118.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 tested: gm"</a>
<li><strong>In reply to:</strong> <a href="10116.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10122.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="10122.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I actually have to eat my words here. This code is alive and well. However, I don't think it does what you wanted or perhaps expected.
<br>
<p>That param was intended to catch user-level mistakes whereby the user specified a tmpdir location via the tmpdir_base MCA param that the system admin wanted to protect. It was not intended for someone to specify locations to skip.
<br>
<p>So if you give that param and something violates it:
<br>
<p>Ralph:v1.4 rhc$ mpirun -n 2 -mca orte_tmpdir_base /foo/bar -mca orte_no_session_dirs /foo hostname
<br>
--------------------------------------------------------------------------
<br>
The specified location for the temporary directories required by Open MPI
<br>
is on the list of prohibited locations:
<br>
<p>Location given: /foo/bar
<br>
Prohibited locations: /foo
<br>
<p>If you believe this is in error, please contact your system administrator
<br>
to have the list of prohibited locations changed. Otherwise, please identify
<br>
a different location to be used (use -h to see the cmd line option), or
<br>
simply let the system pick a default location.
<br>
--------------------------------------------------------------------------
<br>
<p><p>I guess if you want to point it somewhere, your only option is to specify the orte_tmpdir_base param. There isn't a way to tell it &quot;look everywhere BUT here&quot;.
<br>
<p><p>On Dec 14, 2011, at 8:10 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; This is amusing - reviewing the code quickly, it appears that the supporting code for orte_no_session_dir was mistakenly removed at some point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll restore that functionality. Thanks for pointing it out!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2011, at 11:10 PM, Christopher Samuel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev2">&gt;&gt; Hash: SHA1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 09/12/11 09:13, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gearing up for a pre-Christmas release -- please test!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Had a quick test here (we're still on 1.4.2 as our default).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It now complains that $TMPDIR points to our Panasas filesystem,
</span><br>
<span class="quotelev2">&gt;&gt; and there's a minor typo in its message, saying:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # Note, too, that system administrators can set a list of filesystems 
</span><br>
<span class="quotelev2">&gt;&gt; # where Open MPI is disallowed from creating temporary files by settings 
</span><br>
<span class="quotelev2">&gt;&gt; # the MCA parameter &quot;orte_no_session_dir&quot;. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think you want s/settings/setting/ there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also I can not seem to make it accept the orte_no_session_dir settings,
</span><br>
<span class="quotelev2">&gt;&gt; neither:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -mca orte_no_session_dir /vlsci ./hello_c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; nor:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -mca orte_no_session_dir /vlsci/tmp ./hello_c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; nor:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ export OMPI_MCA_orte_no_session_dir=/vlsci
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; nor:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_orte_no_session_dir=/vlsci/tmp
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; prevent it whinging about (for example):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Local host: bruce001 
</span><br>
<span class="quotelev2">&gt;&gt; File Name:  /vlsci/tmp/979325.bruce-m.vlsci.unimelb.edu.au/openmpi-sessions-samuel_at_bruce001_0/14488/1/shared_mem_pool.bruce001
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to tell it to use /tmp without changing what
</span><br>
<span class="quotelev2">&gt;&gt; $TMPDIR is set to ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Chris
</span><br>
<span class="quotelev2">&gt;&gt; - -- 
</span><br>
<span class="quotelev2">&gt;&gt;   Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev2">&gt;&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev2">&gt;&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev2">&gt;&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; iEYEARECAAYFAk7m7HAACgkQO2KABBYQAh/qagCfSZIZsQRSL4WlafAZq4kvx7lk
</span><br>
<span class="quotelev2">&gt;&gt; igQAn2j6Vdzwa4vweeEALKIoNAQZqV0D
</span><br>
<span class="quotelev2">&gt;&gt; =ju/j
</span><br>
<span class="quotelev2">&gt;&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10120.php">Christopher Yeoh: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Previous message:</strong> <a href="10118.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 tested: gm"</a>
<li><strong>In reply to:</strong> <a href="10116.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10122.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="10122.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
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
