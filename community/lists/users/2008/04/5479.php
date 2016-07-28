<?
$subject_val = "Re: [OMPI users] Problem compiling open MPI on cygwin on windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 21:57:11 2008" -->
<!-- isoreceived="20080424015711" -->
<!-- sent="Wed, 23 Apr 2008 21:56:57 -0400" -->
<!-- isosent="20080424015657" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling open MPI on cygwin on windows" -->
<!-- id="6B579DF0-D40F-41F0-8801-D3AE34BBE104_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="480FCB87.7070304_at_sunwave.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem compiling open MPI on cygwin on windows<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-23 21:56:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5480.php">Andy Georgi: "[OMPI users] coll_tuned_decision_fixed.c"</a>
<li><strong>Previous message:</strong> <a href="5478.php">Jeff Squyres: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>In reply to:</strong> <a href="5477.php">Michael: "[OMPI users] Problem compiling open MPI on cygwin on windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This component is not supposed to get included in a cygwin build. The  
<br>
name containing windows indicate it is for native windows compilation,  
<br>
and not for cygwin nor SUA. Last time I checked I manage to compile  
<br>
everything statically. Unfortunately, I never tried to do a dynamic  
<br>
build ... I'll give it a try tomorrow.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Apr 23, 2008, at 7:51 PM, Michael wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; New to open MPI, but have used MPI before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to compile open MPI on cygwin on widows XP.  From what I
</span><br>
<span class="quotelev1">&gt; have read this should work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Initially I hit  a problem with the 1.2.6  standard download in that
</span><br>
<span class="quotelev1">&gt; time related header file was incorrect and the mailing list pointed me
</span><br>
<span class="quotelev1">&gt; to  the trunk  build to solve that problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now when I try to compile I am  getting the following error at the
</span><br>
<span class="quotelev1">&gt; bottom of this mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is am I wasting my time trying to use cygwin, or are there
</span><br>
<span class="quotelev1">&gt; people out there using it on cygwin.  If so, is there a solution to  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; problem below?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in Advance,
</span><br>
<span class="quotelev1">&gt; Michael.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include -I../../../../ompi/include -I../../../../op
</span><br>
<span class="quotelev1">&gt; al/mca/paffinity/linux/plpa/src/libplpa -I../../../.. -D_REENTRANT -O3
</span><br>
<span class="quotelev1">&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -MT paffinity_window
</span><br>
<span class="quotelev1">&gt; s_module.lo -MD -MP -MF .deps/paffinity_windows_module.Tpo -c
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c  -DDLL_EXPORT -DPIC -o
</span><br>
<span class="quotelev1">&gt; .libs/paffinity_windows_modu
</span><br>
<span class="quotelev1">&gt; le.o
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:41: error: parse error before &quot;sys_info&quot;
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:41: warning: data definition has no type or
</span><br>
<span class="quotelev1">&gt; storage class
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c: In function  
</span><br>
<span class="quotelev1">&gt; `windows_module_get_num_procs':
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:90: error: request for member
</span><br>
<span class="quotelev1">&gt; `dwNumberOfProcessors' in something not a structure or union
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c: In function `windows_module_set':
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:96: error: `HANDLE' undeclared (first use  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:96: error: (Each undeclared identifier is
</span><br>
<span class="quotelev1">&gt; reported only once
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:96: error: for each function it appears  
</span><br>
<span class="quotelev1">&gt; in.)
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:96: error: parse error before &quot;threadid&quot;
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:97: error: `DWORD_PTR' undeclared (first  
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:99: error: `threadid' undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:99: error: `process_mask' undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:99: error: `system_mask' undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c: In function `windows_module_get':
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:116: error: `HANDLE' undeclared (first  
</span><br>
<span class="quotelev1">&gt; use in
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:116: error: parse error before &quot;threadid&quot;
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:117: error: `DWORD_PTR' undeclared (first  
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:119: error: `threadid' undeclared (first  
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:119: error: `process_mask' undeclared  
</span><br>
<span class="quotelev1">&gt; (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c:119: error: `system_mask' undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [paffinity_windows_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/Michael/mpi/openmpi-1.3a1r18208/opal/mca/paffinity/windows'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/Michael/mpi/openmpi-1.3a1r18208/ 
</span><br>
<span class="quotelev1">&gt; opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5479/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5480.php">Andy Georgi: "[OMPI users] coll_tuned_decision_fixed.c"</a>
<li><strong>Previous message:</strong> <a href="5478.php">Jeff Squyres: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>In reply to:</strong> <a href="5477.php">Michael: "[OMPI users] Problem compiling open MPI on cygwin on windows"</a>
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
