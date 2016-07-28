<?
$subject_val = "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 15:02:28 2012" -->
<!-- isoreceived="20120309200228" -->
<!-- sent="Fri, 9 Mar 2012 15:02:24 -0500" -->
<!-- isosent="20120309200224" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5" -->
<!-- id="DD78753A-32C5-4148-99A1-547767E725BD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F5A5A56.1020403_at_phys.lsu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 15:02:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18733.php">Jeremiah Willcock: "[OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>Previous message:</strong> <a href="18731.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>In reply to:</strong> <a href="18731.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2012, at 2:30 PM, Robert Collyer wrote:
<br>
<p><span class="quotelev1">&gt; I hadn't meant to send those prior emails out, yet, they weren't finished.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To summarize: it built fine without any errors and the example programs ran fine across multiple processors and machines, so it looks good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is 1.5.5rc3 stable enough for more general use? In other words can I use it instead of 1.4.5 with the understanding that I may occasionally run into issues?
</span><br>
<p>I would say yes.
<br>
<p>There's still a few minor issues left with 1.5.5 -- we'll probably have rc4 next week some time.  But I hope we're getting darn close to done with 1.5.5.
<br>
<p><span class="quotelev1">&gt; Rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/9/12 1:16 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 9, 2012, at 12:05 PM, Robert Collyer wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Downloaded 1.5.5rc3, installed libtool 2.4.2, autoconf 2.68, and automake 1.11.3, and added them to my PATH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Running autogen.sh and I get the following error
</span><br>
<span class="quotelev2">&gt;&gt; There's no need for you to run autogen.sh -- just run configure and make.  autogen.sh is typically only needed for developer checkouts.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Found custom autogen.sh file in:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***   /home/rdc/work/code/ompi-v1.5/ompi/mca/io/romio/romio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: configure.in: not using Gettext
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: running: aclocal -I confdb --force
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure.in:2122: warning: macro `AM_PROG_LIBTOOL' not found in library
</span><br>
<span class="quotelev2">&gt;&gt; This usually indicates a faulty Autotools installation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18733.php">Jeremiah Willcock: "[OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>Previous message:</strong> <a href="18731.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>In reply to:</strong> <a href="18731.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
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
