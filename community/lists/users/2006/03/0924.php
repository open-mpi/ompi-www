<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 28 13:22:23 2006" -->
<!-- isoreceived="20060328182223" -->
<!-- sent="Tue, 28 Mar 2006 13:22:22 -0500" -->
<!-- isosent="20060328182222" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Absoft fortran detected as g77?" -->
<!-- id="A3F11A8B-3795-4DEA-BD6B-052B69F46358_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BA0EE015-1416-4B1A-9C07-F91CF36379D0_at_ieee.org" -->
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
<strong>Date:</strong> 2006-03-28 13:22:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0925.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Previous message:</strong> <a href="0923.php">Ralph Castain: "[OMPI users] Connecting multiple applications"</a>
<li><strong>In reply to:</strong> <a href="0910.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0925.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Reply:</strong> <a href="0925.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 27, 2006, at 8:26 AM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 23, 2006, at 9:28 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 23, 2006, at 5:32 PM, Michael Kluskens wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have Absoft version 8.2a installed on my OS X 10.4.5 system and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in order to do some testing I was trying to build OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.1a1r9364 with it and got the following funny result:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Fortran 77 compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether we are using the GNU Fortran 77 compiler... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether f95 accepts -g... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if Fortran 77 compiler works... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking f95 external symbol convention... upper case
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if Fortran 77 compiler supports LOGICAL... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking size of Fortran 77 LOGICAL...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for C type corresponding to LOGICAL... not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: *** Did not find corresponding C type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that f95 is/should be my Absoft compiler but the configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; script flags it as the GNU Fortran 77 compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The GNU Fortran thing just means that Absoft sets some flags that
</span><br>
<span class="quotelev2">&gt;&gt; g77/gfortran set.  No worries there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I unfortunately can't replicate your issue with our Absoft
</span><br>
<span class="quotelev2">&gt;&gt; compilers, but we're at 9.2, so perhaps something has changed.  The
</span><br>
<span class="quotelev2">&gt;&gt; test code in configure appears to have run correctly (according to
</span><br>
<span class="quotelev2">&gt;&gt; your config.log), but it doesn't look like it can read anything
</span><br>
<span class="quotelev2">&gt;&gt; from the file that is supposed to contain the sizeof result for the
</span><br>
<span class="quotelev2">&gt;&gt; test.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you try to build and run the attached test code (should just
</span><br>
<span class="quotelev2">&gt;&gt; have to untar, run make, and run ./fsize) and let me know what the
</span><br>
<span class="quotelev2">&gt;&gt; result is?  If all works properly, you should see something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     [21:23] brbarret_at_frood:ttyp3 ~/f77test% ./fsize
</span><br>
<span class="quotelev2">&gt;&gt;     size is 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that is the result I got.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using Absoft 8.2a because that is that last version I have on my
</span><br>
<span class="quotelev1">&gt; desktop and I'm trying to do some debugging so I'm using all the
</span><br>
<span class="quotelev1">&gt; different compilers we have on all the different platforms we have.
</span><br>
<p>Darn - I was hoping it would be something uber-simple.  I have a  
<br>
couple other theories as to what is going on.  Could you try the  
<br>
latest snapshot of the trunk (r9440) and see what happens when you  
<br>
run configure with that?  As always, it can be downloaded from:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p>If nothing else, it will spew a bit more debugging information into  
<br>
the config.log that might help figure out what is going on.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0925.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Previous message:</strong> <a href="0923.php">Ralph Castain: "[OMPI users] Connecting multiple applications"</a>
<li><strong>In reply to:</strong> <a href="0910.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0925.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Reply:</strong> <a href="0925.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
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
