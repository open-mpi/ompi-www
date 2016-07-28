<?
$subject_val = "Re: [OMPI users] &quot;Value out of bounds in file&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 02:15:58 2011" -->
<!-- isoreceived="20110413061558" -->
<!-- sent="Wed, 13 Apr 2011 11:45:52 +0530" -->
<!-- isosent="20110413061552" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Value out of bounds in file&amp;quot; error" -->
<!-- id="BANLkTimOX6p_auAdUBct7pV+wpjdD+rAjA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201104122207.23398.keller_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Value out of bounds in file&quot; error<br>
<strong>From:</strong> hi (<em>hiralsmaillist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 02:15:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16212.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Previous message:</strong> <a href="16210.php">Jack Bryan: "[OMPI users] OMPI monitor each process behavior"</a>
<li><strong>In reply to:</strong> <a href="16207.php">Rainer Keller: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16212.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Reply:</strong> <a href="16212.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rainer,
<br>
<p>Thanks for acknowledgment.
<br>
<p><span class="quotelev1">&gt; You may want to port/compile BLACS from netlib yourselve, see here:
</span><br>
<span class="quotelev1">&gt; <a href="http://icl.cs.utk.edu/lapack-for-windows/VisualStudio_install.html">http://icl.cs.utk.edu/lapack-for-windows/VisualStudio_install.html</a>
</span><br>
<p>With that I am seeing compilation errors as reported in...
<br>
<a href="http://icl.cs.utk.edu/lapack-forum/viewtopic.php?f=12&amp;t=2354">http://icl.cs.utk.edu/lapack-forum/viewtopic.php?f=12&amp;t=2354</a>
<br>
<p>Please comment on this, if you any idea.
<br>
<p>Thank you.
<br>
-Hiral
<br>
On Wed, Apr 13, 2011 at 1:37 AM, Rainer Keller &lt;keller_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hiral,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Monday 11 April 2011 15:04:19 hi wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Is it the case that I am combining mkl_intelmpi with locally built
</span><br>
<span class="quotelev1">&gt; openmpi
</span><br>
<span class="quotelev2">&gt; &gt; and hence this problem???
</span><br>
<span class="quotelev1">&gt; Yes, as You mention yourselve here ,-]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; Files (x86)\Intel\Compiler\11.1\065\mkl/ia32/lib&quot; mkl_blacs_intelmpi.lib
</span><br>
<span class="quotelev2">&gt; &gt; mkl_core.lib mkl_core_dll.lib /LIBPATH:&quot;C:/Program Files
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MKL includes the BLACS interface -- however, MKL is built against
</span><br>
<span class="quotelev1">&gt; Intel-MPI:
</span><br>
<span class="quotelev1">&gt; under Linux-based MKL, there exist the static libraries
</span><br>
<span class="quotelev1">&gt; libmkl_blacs_intelmpi_*lp64.a, libmkl_blacs_sgimpt_*lp64.a and
</span><br>
<span class="quotelev1">&gt; libmkl_blacs_openmpi_*lp64.a.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The corresponding libraries do not exist under your windows installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may want to port/compile BLACS from netlib yourselve, see here:
</span><br>
<span class="quotelev1">&gt; <a href="http://icl.cs.utk.edu/lapack-for-windows/VisualStudio_install.html">http://icl.cs.utk.edu/lapack-for-windows/VisualStudio_install.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  Dr.-Ing. Rainer Keller  <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
</span><br>
<span class="quotelev1">&gt;  HLRS                         Tel: ++49 (0)711-685 6 5858
</span><br>
<span class="quotelev1">&gt;  Nobelstrasse 19                 Fax: ++49 (0)711-685 6 5832
</span><br>
<span class="quotelev1">&gt;  70550 Stuttgart                    email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Germany                             AIM/Skype:rusraink
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16211/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16212.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Previous message:</strong> <a href="16210.php">Jack Bryan: "[OMPI users] OMPI monitor each process behavior"</a>
<li><strong>In reply to:</strong> <a href="16207.php">Rainer Keller: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16212.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Reply:</strong> <a href="16212.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
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
