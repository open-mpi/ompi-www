<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 23 21:28:46 2006" -->
<!-- isoreceived="20060324022846" -->
<!-- sent="Thu, 23 Mar 2006 21:28:38 -0500" -->
<!-- isosent="20060324022838" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Absoft fortran detected as g77?" -->
<!-- id="6CAA5746-F441-4031-A5A5-505C44F32DA0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AF7DC37C-1520-4F42-8B2D-4FE8C9D4F169_at_ieee.org" -->
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
<strong>Date:</strong> 2006-03-23 21:28:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0899.php">Brian Barrett: "Re: [OMPI users] Error message about libopal.so"</a>
<li><strong>Previous message:</strong> <a href="0897.php">Ralph Castain: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="0896.php">Michael Kluskens: "[OMPI users] Absoft fortran detected as g77?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0910.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Reply:</strong> <a href="0910.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 23, 2006, at 5:32 PM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; I have Absoft version 8.2a installed on my OS X 10.4.5 system and  
</span><br>
<span class="quotelev1">&gt; in order to do some testing I was trying to build OpenMPI  
</span><br>
<span class="quotelev1">&gt; 1.1a1r9364 with it and got the following funny result:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Fortran 77 compiler
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran 77 compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether f95 accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking f95 external symbol convention... upper case
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler supports LOGICAL... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 77 LOGICAL...
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to LOGICAL... not found
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Did not find corresponding C type
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that f95 is/should be my Absoft compiler but the configure  
</span><br>
<span class="quotelev1">&gt; script flags it as the GNU Fortran 77 compiler.
</span><br>
<p>The GNU Fortran thing just means that Absoft sets some flags that g77/ 
<br>
gfortran set.  No worries there.
<br>
<p>I unfortunately can't replicate your issue with our Absoft compilers,  
<br>
but we're at 9.2, so perhaps something has changed.  The test code in  
<br>
configure appears to have run correctly (according to your  
<br>
config.log), but it doesn't look like it can read anything from the  
<br>
file that is supposed to contain the sizeof result for the test.
<br>
<p>Could you try to build and run the attached test code (should just  
<br>
have to untar, run make, and run ./fsize) and let me know what the  
<br>
result is?  If all works properly, you should see something like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[21:23] brbarret_at_frood:ttyp3 ~/f77test% ./fsize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size is 4
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>


</pre>
<p>
<p><p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0898/f77size.tar.gz">f77size.tar.gz</a>
</ul>
<!-- attachment="f77size.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0899.php">Brian Barrett: "Re: [OMPI users] Error message about libopal.so"</a>
<li><strong>Previous message:</strong> <a href="0897.php">Ralph Castain: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="0896.php">Michael Kluskens: "[OMPI users] Absoft fortran detected as g77?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0910.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Reply:</strong> <a href="0910.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
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
