<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  1 14:02:49 2005" -->
<!-- isoreceived="20051201190249" -->
<!-- sent="Thu, 1 Dec 2005 14:02:40 -0500" -->
<!-- isosent="20051201190240" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Compiler problems on SGI Origin" -->
<!-- id="6B06CAB6-9E05-4AB9-BDCB-738E6BB0B128_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1133440307.18297.7.camel_at_hubbard.hlphys.uni-linz.ac.at" -->
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
<strong>Date:</strong> 2005-12-01 14:02:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0412.php">Tim S. Woodall: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Previous message:</strong> <a href="0410.php">Eugen Wintersberger: "[O-MPI users] Compiler problems on SGI Origin"</a>
<li><strong>In reply to:</strong> <a href="0410.php">Eugen Wintersberger: "[O-MPI users] Compiler problems on SGI Origin"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 1, 2005, at 7:31 AM, Eugen Wintersberger wrote:
<br>
<p><span class="quotelev1">&gt; Hi there
</span><br>
<span class="quotelev1">&gt;  I have a problem on compiling openmpi (1.0.1rc4) on an SGI origin.
</span><br>
<span class="quotelev1">&gt; My configure command looks like this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/scratch/hlphysik/k353443 --disable-mpi-f77 -- 
</span><br>
<span class="quotelev1">&gt; disable-mpi-f90 --enable-io-romio --enable-cxx-exceptions
</span><br>
<p>Thanks for the bug report.  I was able to replicate your problem - it  
<br>
looks like a couple of things slipped in since I last tested on IRIX  
<br>
(IRIX isn't officially supported by Open MPI, and gets only light  
<br>
testing - usually when someone complains that it is broken).  I've  
<br>
attached a patch that will solve most of the compile issues.  This  
<br>
patch should apply cleanly to the 1.0 release and will be part of the  
<br>
1.0.1 release.
<br>
<p>There will still be one problem (at least, on our IRIX box) with a  
<br>
undefined symbol dirname.  The solution for now is to configure with:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure &lt;normal options&gt; LIBS=&quot;-lgen&quot; --with-wrapper-libs=&quot;-lgen&quot;
<br>
<p>On all the platforms we officially support, dirname is in libc.  On  
<br>
IRIX, it appears to be in libgen, causing the linking issues.  I'm  
<br>
going to commit a fix to the trunk tonight that will solve the  
<br>
problem in configure, but due to time constraints it will likely not  
<br>
be in the 1.0.1 release.  It should be in the 1.0.2 release, although  
<br>
I can't give you a time table as to when we will have a 1.0.2 release.
<br>
<p><p>Thanks for the report!
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0411/irix_header_fixes.diff">irix_header_fixes.diff</a>
</ul>
<!-- attachment="irix_header_fixes.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0412.php">Tim S. Woodall: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Previous message:</strong> <a href="0410.php">Eugen Wintersberger: "[O-MPI users] Compiler problems on SGI Origin"</a>
<li><strong>In reply to:</strong> <a href="0410.php">Eugen Wintersberger: "[O-MPI users] Compiler problems on SGI Origin"</a>
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
