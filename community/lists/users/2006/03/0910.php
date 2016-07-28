<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 27 08:26:41 2006" -->
<!-- isoreceived="20060327132641" -->
<!-- sent="Mon, 27 Mar 2006 08:26:23 -0500" -->
<!-- isosent="20060327132623" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Absoft fortran detected as g77?" -->
<!-- id="BA0EE015-1416-4B1A-9C07-F91CF36379D0_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6CAA5746-F441-4031-A5A5-505C44F32DA0_at_open-mpi.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-27 08:26:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0911.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<li><strong>Previous message:</strong> <a href="0909.php">Tony Power: "[OMPI users] Best MPI implementation"</a>
<li><strong>In reply to:</strong> <a href="0898.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0924.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Reply:</strong> <a href="0924.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 23, 2006, at 9:28 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 23, 2006, at 5:32 PM, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have Absoft version 8.2a installed on my OS X 10.4.5 system and  
</span><br>
<span class="quotelev2">&gt;&gt; in order to do some testing I was trying to build OpenMPI  
</span><br>
<span class="quotelev2">&gt;&gt; 1.1a1r9364 with it and got the following funny result:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Fortran 77 compiler
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we are using the GNU Fortran 77 compiler... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking whether f95 accepts -g... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran 77 compiler works... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking f95 external symbol convention... upper case
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran 77 compiler supports LOGICAL... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking size of Fortran 77 LOGICAL...
</span><br>
<span class="quotelev2">&gt;&gt; checking for C type corresponding to LOGICAL... not found
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** Did not find corresponding C type
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that f95 is/should be my Absoft compiler but the configure  
</span><br>
<span class="quotelev2">&gt;&gt; script flags it as the GNU Fortran 77 compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The GNU Fortran thing just means that Absoft sets some flags that  
</span><br>
<span class="quotelev1">&gt; g77/gfortran set.  No worries there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I unfortunately can't replicate your issue with our Absoft  
</span><br>
<span class="quotelev1">&gt; compilers, but we're at 9.2, so perhaps something has changed.  The  
</span><br>
<span class="quotelev1">&gt; test code in configure appears to have run correctly (according to  
</span><br>
<span class="quotelev1">&gt; your config.log), but it doesn't look like it can read anything  
</span><br>
<span class="quotelev1">&gt; from the file that is supposed to contain the sizeof result for the  
</span><br>
<span class="quotelev1">&gt; test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you try to build and run the attached test code (should just  
</span><br>
<span class="quotelev1">&gt; have to untar, run make, and run ./fsize) and let me know what the  
</span><br>
<span class="quotelev1">&gt; result is?  If all works properly, you should see something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [21:23] brbarret_at_frood:ttyp3 ~/f77test% ./fsize
</span><br>
<span class="quotelev1">&gt;     size is 4
</span><br>
<p>Yes, that is the result I got.
<br>
<p>I'm using Absoft 8.2a because that is that last version I have on my  
<br>
desktop and I'm trying to do some debugging so I'm using all the  
<br>
different compilers we have on all the different platforms we have.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0911.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<li><strong>Previous message:</strong> <a href="0909.php">Tony Power: "[OMPI users] Best MPI implementation"</a>
<li><strong>In reply to:</strong> <a href="0898.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0924.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Reply:</strong> <a href="0924.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
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
