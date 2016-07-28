<?
$subject_val = "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 15:42:29 2010" -->
<!-- isoreceived="20100303204229" -->
<!-- sent="Wed, 3 Mar 2010 17:42:24 -0300" -->
<!-- isosent="20100303204224" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)" -->
<!-- id="9108753b1003031242n2a0922f3qb77e68a60df2f05d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0F78B759-D2AD-4329-8AA4-35512F26A077_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 15:42:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12229.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12227.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>In reply to:</strong> <a href="12227.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12230.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Reply:</strong> <a href="12230.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Mar 3, 2010 at 5:31 PM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
&lt;snip&gt;
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, ompi-restart should be printing a helpful message and exiting normally. Thanks for the bug report. I believe that I have seen and fixed this on a development branch making its way to the trunk. I'll make sure to move the fix to the 1.4 series once it has been applied to the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I filed a ticket on this if you wanted to track the issue.
</span><br>
<span class="quotelev1">&gt; &#160;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2329">https://svn.open-mpi.org/trac/ompi/ticket/2329</a>
</span><br>
<p>Ah, that's great. Just wondering, do you have any idea why blcr-util
<br>
is required? That package only contains the cr_* binaries (cr_restart,
<br>
cr_checkpoint, cr_run) and some docs (manpages, changelog, etc.). I've
<br>
filled a Debian bug (#572229) about making openmpi-checkpoint depend
<br>
on blcr-util, but the package maintainer told me he found it unusual
<br>
that ompi-restart would depend on the cr_* binaries since libcr
<br>
supposedly provides all the functionality ompi-restart needs.
<br>
<p>I'm about to compile OpenMPI in debug mode and take a look at the
<br>
backtrace to see if I can understand what's going on.
<br>
<p>Btw, this is the list of files in the blcr-util package:
<br>
<a href="http://packages.debian.org/sid/amd64/blcr-util/filelist">http://packages.debian.org/sid/amd64/blcr-util/filelist</a> . As you can
<br>
see, only cr_* binaries and docs.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<p>Thank you!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12229.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12227.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>In reply to:</strong> <a href="12227.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12230.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Reply:</strong> <a href="12230.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
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
