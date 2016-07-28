<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 11 21:34:52 2005" -->
<!-- isoreceived="20051112023452" -->
<!-- sent="Fri, 11 Nov 2005 21:34:46 -0500" -->
<!-- isosent="20051112023446" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Tests with current version" -->
<!-- id="C80D2F1C-F3A2-4C76-B687-ECC23C92A551_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051112004230.41547.qmail_at_web31510.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-11 21:34:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0323.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0321.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0318.php">Jonathan Day: "[O-MPI users] Tests with current version"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 11, 2005, at 7:42 PM, Jonathan Day wrote:
<br>
<p><span class="quotelev1">&gt; Still working on the Broadcom MIPS64 port, so no news
</span><br>
<span class="quotelev1">&gt; on that front yet except to say that I'm getting
</span><br>
<span class="quotelev1">&gt; there. (Which seems to be fairly common with people
</span><br>
<span class="quotelev1">&gt; using Broadcom CPUs.)
</span><br>
<p>Cool!  Once 1.0 settles down, I plan on cleaning up the MIPS assembly  
<br>
file to make it more like the other architectures (using some of our  
<br>
custom perl-based macros instead of the IRIX-specific C preprocessor  
<br>
code), which should help on that front.  Not sure what else would  
<br>
have trouble porting, but let us know.
<br>
<p><p><span class="quotelev1">&gt; When enabling threads, remember that the configure
</span><br>
<span class="quotelev1">&gt; help menu lies. --with-threads=posix should be used,
</span><br>
<span class="quotelev1">&gt; not --with-threads=pthreads
</span><br>
<p>Thanks for catching this - I'll fix the configure documentation tonight.
<br>
<p><span class="quotelev1">&gt; I've not determined exactly what triggers it, but the
</span><br>
<span class="quotelev1">&gt; functions in ompi/ompi/mca/pml/pml_teg_ptl.c can clash
</span><br>
<span class="quotelev1">&gt; with functions from ompi/ompi/mca/pml/pml_uniq_ptl.c
</span><br>
<span class="quotelev1">&gt; on compile. I'm guessing that I'm using a combination
</span><br>
<span class="quotelev1">&gt; of compile options that aren't getting tested that
</span><br>
<span class="quotelev1">&gt; often, if I'm the only one noticing this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/openmpi --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; --enable-progress-threads --with-threads=posix
</span><br>
<span class="quotelev1">&gt; --enable-shared --enable-static --enable-mpi-f77
</span><br>
<span class="quotelev1">&gt; --enable-mpi-f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could someone verify that this problem is repeatable
</span><br>
<span class="quotelev1">&gt; and not simply a problem at this end?
</span><br>
<p>It's caused by --enable-static --enable-shared.  TEG and UNIQ are  
<br>
both deprecated at this point, and I think that the solution for 1.0  
<br>
will be to remove the UNIQ PML, which will solve the problem (along  
<br>
with some other problems you're not even aware exist...).  Should be  
<br>
in the next rc.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0323.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0321.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0318.php">Jonathan Day: "[O-MPI users] Tests with current version"</a>
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
