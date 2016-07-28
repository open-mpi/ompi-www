<?
$subject_val = "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 16:34:13 2010" -->
<!-- isoreceived="20100303213413" -->
<!-- sent="Wed, 3 Mar 2010 16:34:07 -0500" -->
<!-- isosent="20100303213407" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)" -->
<!-- id="65990150-7D2B-4C20-A4D7-3070596F744B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9108753b1003031242n2a0922f3qb77e68a60df2f05d_at_mail.gmail.com" -->
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
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 16:34:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12231.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12229.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12228.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2010, at 3:42 PM, Fernando Lemos wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Mar 3, 2010 at 5:31 PM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, ompi-restart should be printing a helpful message and exiting normally. Thanks for the bug report. I believe that I have seen and fixed this on a development branch making its way to the trunk. I'll make sure to move the fix to the 1.4 series once it has been applied to the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I filed a ticket on this if you wanted to track the issue.
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/2329">https://svn.open-mpi.org/trac/ompi/ticket/2329</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, that's great. Just wondering, do you have any idea why blcr-util
</span><br>
<span class="quotelev1">&gt; is required? That package only contains the cr_* binaries (cr_restart,
</span><br>
<span class="quotelev1">&gt; cr_checkpoint, cr_run) and some docs (manpages, changelog, etc.). I've
</span><br>
<span class="quotelev1">&gt; filled a Debian bug (#572229) about making openmpi-checkpoint depend
</span><br>
<span class="quotelev1">&gt; on blcr-util, but the package maintainer told me he found it unusual
</span><br>
<span class="quotelev1">&gt; that ompi-restart would depend on the cr_* binaries since libcr
</span><br>
<span class="quotelev1">&gt; supposedly provides all the functionality ompi-restart needs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm about to compile OpenMPI in debug mode and take a look at the
</span><br>
<span class="quotelev1">&gt; backtrace to see if I can understand what's going on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Btw, this is the list of files in the blcr-util package:
</span><br>
<span class="quotelev1">&gt; <a href="http://packages.debian.org/sid/amd64/blcr-util/filelist">http://packages.debian.org/sid/amd64/blcr-util/filelist</a> . As you can
</span><br>
<span class="quotelev1">&gt; see, only cr_* binaries and docs.
</span><br>
<p>Open MPI currently calls 'cr_restart' for each process it restarts, exec'ed from the 'opal-restart' binary (LAM/MPI also used cr_restart directly, in case anyone is interested). We use the internal library interface for checkpoint, but not restarting at this time.
<br>
<p>If I recall correctly, it wasn't until relatively recently that BLCR added the ability to restart a process from a library call. We have not put in the code to use this functionality (though all of the framework interfaces are in place to do so). On my development branch I will add the ability to use the BLCR library interface if available. That functionality will not likely make it to the v1.4 release series since it is not really a bug fix, but I will plan on including it in the v1.5 and later releases. And just so I don't lose track of it, I created an enhancement ticket for this:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2330">https://svn.open-mpi.org/trac/ompi/ticket/2330</a>
<br>
<p>Cheers,
<br>
Josh
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you!
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12231.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12229.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12228.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- nextthread="start" -->
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
