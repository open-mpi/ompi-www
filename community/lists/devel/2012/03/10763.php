<?
$subject_val = "[OMPI devel] Clam AntiVirus";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 20:18:02 2012" -->
<!-- isoreceived="20120323001802" -->
<!-- sent="Thu, 22 Mar 2012 17:17:53 -0700" -->
<!-- isosent="20120323001753" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="[OMPI devel] Clam AntiVirus" -->
<!-- id="195E4C33-9D7B-4692-812D-5D2ACD687A12_at_usgs.gov" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI devel] Clam AntiVirus<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 20:17:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10764.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>Previous message:</strong> <a href="10762.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was reading the FAQs for the ClamAV anti-virus program (included on  
<br>
Mac OS X) at <a href="http://www.clamav.net/lang/en/faq/faq-upgrade/">http://www.clamav.net/lang/en/faq/faq-upgrade/</a>.  At the  
<br>
end is a note that caught my eye about problem compilers.
<br>
<p><span class="quotelev1">&gt; ClamAV supports a wide variety of compilers, hardware and operating  
</span><br>
<span class="quotelev1">&gt; systems. Our core compiler is gcc with Linux on 32 and 64 bit Intel  
</span><br>
<span class="quotelev1">&gt; platforms, though we also test using other compilers, including  
</span><br>
<span class="quotelev1">&gt; Sun&#146;s C compiler, Microsoft&#146;s Visual Studio, Intel&#146;s C compiler,  
</span><br>
<span class="quotelev1">&gt; LLVM-GCC, and others. To date we have only found one compiler that  
</span><br>
<span class="quotelev1">&gt; we do not support, GCC version 4.0.0 to 4.0.1 inclusive. We have  
</span><br>
<span class="quotelev1">&gt; found that version of the compiler produces incorrect code on all of  
</span><br>
<span class="quotelev1">&gt; the platforms and operating systems on which we have tested it.  
</span><br>
<span class="quotelev1">&gt; ClamAV will not work using that compiler and you MUST switch to an  
</span><br>
<span class="quotelev1">&gt; alternative, such as GCC3.4 or GCC4.1. Please contact your vendor  
</span><br>
<span class="quotelev1">&gt; for further information. Please refer to gcc&#146;s bugzilla for further  
</span><br>
<span class="quotelev1">&gt; information. If you want to see a proof of why gcc 4.0.1 generates  
</span><br>
<span class="quotelev1">&gt; wrong code for the kernel read the relevant article on kerneltrap.  
</span><br>
<span class="quotelev1">&gt; More information about this bug is also available in our bugzilla .  
</span><br>
<span class="quotelev1">&gt; Our configure scripts will detect if your compiler is affected by  
</span><br>
<span class="quotelev1">&gt; this bug and refuse to generate a non working binary with the  
</span><br>
<span class="quotelev1">&gt; following error message: your compiler has gcc PR26763-2 bug, use a  
</span><br>
<span class="quotelev1">&gt; different compiler . If you are on MacOS X, you can try an  
</span><br>
<span class="quotelev1">&gt; alternative compiler, LLVM-GCC4.2-2.2, which has official binaries  
</span><br>
<span class="quotelev1">&gt; available
</span><br>
<span class="quotelev1">&gt; Last update: Apr 15, 2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Two things occurred to me that might be appropriate for OpenMPI:
<br>
<p>1) If GCC4.0.1 is as bad as it sounds, that might be worth mentioning  
<br>
in the OpenMPI README.
<br>
2) OpenMPI might borrow ClamAV's configuration logic to recognize GCC  
<br>
4.0.1 (and, maybe the faulty Intel V12.x compiler) and balk.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10763/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10764.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>Previous message:</strong> <a href="10762.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
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
