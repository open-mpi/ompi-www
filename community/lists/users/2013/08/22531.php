<?
$subject_val = "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 20 22:41:15 2013" -->
<!-- isoreceived="20130821024115" -->
<!-- sent="Tue, 20 Aug 2013 22:41:05 -0400 (EDT)" -->
<!-- isosent="20130821024105" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make" -->
<!-- id="alpine.LRH.2.03.1308202240420.36131_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.LRH.2.03.1308202224530.36131_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make<br>
<strong>From:</strong> Jeremiah Willcock (<em>jewillco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-20 22:41:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22532.php">Bert Wesarg: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>Previous message:</strong> <a href="22530.php">Javier Garcia Blas: "[OMPI users] Call For Participation: EuroMPI 2013. Madrid, Spain. September	15-18th"</a>
<li><strong>Maybe in reply to:</strong> <a href="22517.php">Richard Haney: "[OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22538.php">Richard Haney: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Reply:</strong> <a href="22538.php">Richard Haney: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The file win_compat.h seems to be very strange (many #defines of function 
<br>
names, #defines of type names rather than typedefs, etc.).  It might make 
<br>
sense to avoid including it entirely for MinGW (it is included from 
<br>
opal/include/opal_config_bottom.h), or edit it to be correct for 64-bit 
<br>
systems.  You might want to try commenting out the entire body of 
<br>
win_compat.h and re-enabling only those parts that are truly necessary 
<br>
(and don't have MinGW headers that should be used instead, such as for 
<br>
ssize_t).
<br>
<p>-- Jeremiah Willcock
<br>
<p>&nbsp;&nbsp;On Tue, 20 Aug 2013, Richard Haney wrote:
<br>
<p><span class="quotelev1">&gt; Ah! &#160;Thanks, Jeff. &#160;Here is a link to the relevant zip file 
</span><br>
<span class="quotelev1">&gt; &quot;openmpi-1.6.5_configure_and_make.zip&quot;. &#160;It contains the
</span><br>
<span class="quotelev1">&gt; modified configure (essentially replacing the compound &quot;if&quot; statement that 
</span><br>
<span class="quotelev1">&gt; assigns ompi_cv_asm_arch=&quot;IA32&quot;
</span><br>
<span class="quotelev1">&gt; because my &quot;long&quot; is size 4); the replacement is the simply the alternative 
</span><br>
<span class="quotelev1">&gt; assignment that configure would chose if
</span><br>
<span class="quotelev1">&gt; my &quot;long&quot; size were not 4:
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_arch=&quot;AMD64&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The zip file contains:
</span><br>
<span class="quotelev1">&gt; configure_modified
</span><br>
<span class="quotelev1">&gt; config.log openmpi-1.6.5_configure.out &#160; (the output of configure executed 
</span><br>
<span class="quotelev1">&gt; from within another script)
</span><br>
<span class="quotelev1">&gt; make_-j_2.out &#160; (the output from the parallel attempt at make), and
</span><br>
<span class="quotelev1">&gt; make.out--(nonparallel make).out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The make command still does not get past the building of of asm.c in 
</span><br>
<span class="quotelev1">&gt; /openmpi-1.6.5/opal/asm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran the nonparallel make to eliminate any confusion over the parallel 
</span><br>
<span class="quotelev1">&gt; creation of object file atomic-asm.o in
</span><br>
<span class="quotelev1">&gt; subdirectory&#160;.libs by command
</span><br>
<span class="quotelev1">&gt; &#160; CPPAS &#160;atomic-asm.lo
</span><br>
<span class="quotelev1">&gt; at the same time that the command
</span><br>
<span class="quotelev1">&gt; &#160; CC &#160; &#160; asm.lo
</span><br>
<span class="quotelev1">&gt; was about to &quot;crash&quot; with lots of warnings and with seemingly uninformative 
</span><br>
<span class="quotelev1">&gt; &quot;Error&quot; messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 20, 2013 at 2:20 PM, Jeff Squyres (jsquyres) 
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;       Google drive?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22532.php">Bert Wesarg: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>Previous message:</strong> <a href="22530.php">Javier Garcia Blas: "[OMPI users] Call For Participation: EuroMPI 2013. Madrid, Spain. September	15-18th"</a>
<li><strong>Maybe in reply to:</strong> <a href="22517.php">Richard Haney: "[OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22538.php">Richard Haney: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Reply:</strong> <a href="22538.php">Richard Haney: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
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
