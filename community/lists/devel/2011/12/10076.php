<?
$subject_val = "Re: [OMPI devel] OMPI 1.4.5rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 15:44:22 2011" -->
<!-- isoreceived="20111213204422" -->
<!-- sent="Wed, 14 Dec 2011 07:44:14 +1100" -->
<!-- isosent="20111213204414" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.4.5rc1 posted" -->
<!-- id="4EE7B91E.8080303_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="671_1323756729_4EE6ECB9_671_4060_1_4EE6EC70.2040603_at_unimelb.edu.au" -->
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
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 15:44:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10077.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="10075.php">Jeff Squyres: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Maybe in reply to:</strong> <a href="10054.php">Jeff Squyres: "[OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10079.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="10079.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="10080.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Chris,
<br>
<p>Try setting OMPI_MCA_orte_tmpdir_base.
<br>
<p>Going back to a related earlier OMPI users thread (&quot;How to set up state-less node /tmp for OpenMPI usage&quot;), here are sm pingpong latencies (using 1.4.3) for 
<br>
session dirs on Lustre, an SSD and tmpfs:
<br>
<p>[dbs900_at_v1490 ~/MPI]$ export OMPI_MCA_orte_tmpdir_base=/short/z00/dbs900/tmp
<br>
[dbs900_at_v1490 ~/MPI]$ mpirun -n 2 ./pp143
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|        Best       |      Average      |       Worst       |        Streaming
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n   (test/loop) |      usec    MB/s |      usec    MB/s |      usec    MB/s | (  average,    worst)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1   (  64/1100) |       0.3   30.45 |       0.3   29.63 |       0.3   26.00 | (      0.3,      0.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2   (  64/1100) |       0.3   60.29 |       0.3   59.11 |       0.3   50.86 | (      0.3,      0.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   (  64/1100) |       0.3  117.92 |       0.3  115.01 |       0.3   96.18 | (      0.3,      0.3)
<br>
...
<br>
[dbs900_at_v1490 ~/MPI]$ export OMPI_MCA_orte_tmpdir_base=/jobfs/flash/tmp
<br>
[dbs900_at_v1490 ~/MPI]$ mpirun -n 2 ./pp143
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|        Best       |      Average      |       Worst       |        Streaming
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n   (test/loop) |      usec    MB/s |      usec    MB/s |      usec    MB/s | (  average,    worst)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1   (  64/1100) |       0.3   30.24 |       0.3   29.54 |       0.3   24.86 | (      0.3,      0.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2   (  64/1100) |       0.3   60.09 |       0.3   58.91 |       0.3   50.51 | (      0.3,      0.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   (  64/1100) |       0.3  117.92 |       0.3  115.39 |       0.3   99.55 | (      0.3,      0.3)
<br>
...
<br>
[dbs900_at_v1490 ~/MPI]$ export OMPI_MCA_orte_tmpdir_base=/tmp
<br>
[dbs900_at_v1490 ~/MPI]$ mpirun -n 2 ./pp143
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|        Best       |      Average      |       Worst       |        Streaming
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n   (test/loop) |      usec    MB/s |      usec    MB/s |      usec    MB/s | (  average,    worst)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1   (  64/1100) |       0.3   30.34 |       0.3   29.62 |       0.3   24.96 | (      0.3,      0.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2   (  64/1100) |       0.3   60.58 |       0.3   59.30 |       0.3   51.39 | (      0.3,      0.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   (  64/1100) |       0.3  116.94 |       0.3  114.69 |       0.3   99.32 | (      0.3,      0.3)
<br>
...
<br>
<p><p>This is why I was hoping sites could be given the opportunity to control that warning message.  Some Lustre sites may not want their users getting that message.
<br>
<p>David
<br>
<p>On 12/13/2011 05:10 PM, Christopher Samuel wrote:
<br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10077.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="10075.php">Jeff Squyres: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Maybe in reply to:</strong> <a href="10054.php">Jeff Squyres: "[OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10079.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="10079.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="10080.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
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
