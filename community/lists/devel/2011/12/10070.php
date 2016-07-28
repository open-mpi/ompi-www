<?
$subject_val = "Re: [OMPI devel] OMPI 1.4.5rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 01:11:03 2011" -->
<!-- isoreceived="20111213061103" -->
<!-- sent="Tue, 13 Dec 2011 17:10:56 +1100" -->
<!-- isosent="20111213061056" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.4.5rc1 posted" -->
<!-- id="4EE6EC70.2040603_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FA4CADBB-0548-44CE-87BD-641A7CB97A2C_at_cisco.com" -->
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
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 01:10:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10071.php">George Bosilca: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Previous message:</strong> <a href="10069.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>In reply to:</strong> <a href="10054.php">Jeff Squyres: "[OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10077.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="10077.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="10116.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 09/12/11 09:13, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Gearing up for a pre-Christmas release -- please test!
</span><br>
<p>Had a quick test here (we're still on 1.4.2 as our default).
<br>
<p>It now complains that $TMPDIR points to our Panasas filesystem,
<br>
and there's a minor typo in its message, saying:
<br>
<p># Note, too, that system administrators can set a list of filesystems 
<br>
# where Open MPI is disallowed from creating temporary files by settings 
<br>
# the MCA parameter &quot;orte_no_session_dir&quot;. 
<br>
<p>I think you want s/settings/setting/ there.
<br>
<p>Also I can not seem to make it accept the orte_no_session_dir settings,
<br>
neither:
<br>
<p>mpirun -mca orte_no_session_dir /vlsci ./hello_c
<br>
<p>nor:
<br>
<p>mpirun -mca orte_no_session_dir /vlsci/tmp ./hello_c
<br>
<p>nor:
<br>
<p>$ export OMPI_MCA_orte_no_session_dir=/vlsci
<br>
<p>nor:
<br>
<p>export OMPI_MCA_orte_no_session_dir=/vlsci/tmp
<br>
<p>prevent it whinging about (for example):
<br>
<p>Local host: bruce001 
<br>
File Name:  /vlsci/tmp/979325.bruce-m.vlsci.unimelb.edu.au/openmpi-sessions-samuel_at_bruce001_0/14488/1/shared_mem_pool.bruce001
<br>
<p>Is there a way to tell it to use /tmp without changing what
<br>
$TMPDIR is set to ?
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAk7m7HAACgkQO2KABBYQAh/qagCfSZIZsQRSL4WlafAZq4kvx7lk
<br>
igQAn2j6Vdzwa4vweeEALKIoNAQZqV0D
<br>
=ju/j
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10071.php">George Bosilca: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Previous message:</strong> <a href="10069.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>In reply to:</strong> <a href="10054.php">Jeff Squyres: "[OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10077.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="10077.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="10116.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
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
