<?
$subject_val = "Re: [OMPI devel] PGI error invoked when svnversion is unavailable";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 15 17:08:35 2011" -->
<!-- isoreceived="20111115220835" -->
<!-- sent="Tue, 15 Nov 2011 14:08:29 -0800" -->
<!-- isosent="20111115220829" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PGI error invoked when svnversion is unavailable" -->
<!-- id="E6C92FED-E574-4CDE-AE46-5E815AC78B9D_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BD36066269DB4A4BB18E7D99D297C5F4411446BB69_at_WSUS.simctr.usasmdch" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PGI error invoked when svnversion is unavailable<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-15 17:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9973.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>Previous message:</strong> <a href="9971.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "[OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>In reply to:</strong> <a href="9971.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "[OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9973.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>Reply:</strong> <a href="9973.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tom,
<br>
<p>This is because the code in OpenMPI presumes macros will be expanded  
<br>
in pragmas, but that is not required by the C standard.  (See my e- 
<br>
mails below from last year with PGI, TPR 17186.)  I fixed OpenMPI  
<br>
1.4.3 configure in the attached patch.  My patch also disables inline  
<br>
assembly for PGI C++, the same as for PGI C.  (Something similar may  
<br>
also have to be done to solve Eugene's asm statement warnings on  
<br>
Solaris 11.)  It also fixes detection of support for marshaling  
<br>
Fortran REAL16 and COMPLEX32 data types.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 15 Nov 2011, at 12:49 PM, Thomas Rothrock CTR SMDC SimCtr/GaN  
<br>
Corporation wrote:
<br>
<p><span class="quotelev1">&gt; I am building on a separate (unnetworked) system than the one I  
</span><br>
<span class="quotelev1">&gt; check out
</span><br>
<span class="quotelev1">&gt; SVN sources from, thus subversion was never installed on this system  
</span><br>
<span class="quotelev1">&gt; and the
</span><br>
<span class="quotelev1">&gt; &quot;svnversion&quot; command is unavailable.  After configure, this eventually
</span><br>
<span class="quotelev1">&gt; results in OPAL_IDENT_STRING getting set to an empty string (&quot;&quot;).   
</span><br>
<span class="quotelev1">&gt; This
</span><br>
<span class="quotelev1">&gt; seems to invoke an odd error in the Portland Group (PGI) C compiler  
</span><br>
<span class="quotelev1">&gt; (pgcc),
</span><br>
<span class="quotelev1">&gt; such that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	#pragma ident &quot;&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; results in:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	PGC-F-0010-File write error occurred (temporary pragma .s file)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is is a bit misleading and took me a while to track down the  
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt; My testing has shown that the C++ compiler (pgCC) does not fail with  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; same error (or any error at all) and completes, but pgcc fails this  
</span><br>
<span class="quotelev1">&gt; case in
</span><br>
<span class="quotelev1">&gt; at least all versions since 8.0-6 and probably earlier.  I have  
</span><br>
<span class="quotelev1">&gt; filed a
</span><br>
<span class="quotelev1">&gt; support request with PGI to see what they say about it, but of  
</span><br>
<span class="quotelev1">&gt; course this
</span><br>
<span class="quotelev1">&gt; does nothing for current and older versions.  My quick workaround  
</span><br>
<span class="quotelev1">&gt; was to
</span><br>
<span class="quotelev1">&gt; just install subversion so that the empty string never gets set to  
</span><br>
<span class="quotelev1">&gt; begin
</span><br>
<span class="quotelev1">&gt; with.  Ultimately though should OPAL_IDENT_STRING be ending up empty  
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev1">&gt; the &quot;svnversion&quot; command is not available?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;           Tom Rothrock          &lt;Thomas.W.Rothrock.CTR_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;           US Army Space &amp; Missile Defense Command Simulation Center
</span><br>
<span class="quotelev1">&gt;           256-955-3382 (DSN 645)                   FAX 256-955-1231
</span><br>
<span class="quotelev1">&gt;           &lt;<a href="http://www.sc.army.mil">http://www.sc.army.mil</a>&gt; Main SimCtr Phone:  256-955-3750
</span><br>
<span class="quotelev1">&gt;          -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          This email capability is supported by Department of Defense
</span><br>
<span class="quotelev1">&gt;          systems and is subject to monitoring.  Please refrain from
</span><br>
<span class="quotelev1">&gt;          using this address for non-Government purposes.
</span><br>
<span class="quotelev1">&gt;          -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>Larry Baker wrote:
<br>
<span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I too read the C99 standard and found that macro substitution is not  
</span><br>
<span class="quotelev1">&gt; required in pragmas.  I complained to the OpenMPI folks that they  
</span><br>
<span class="quotelev1">&gt; are relying a non-standard feature.  The reason I brought this to  
</span><br>
<span class="quotelev1">&gt; your attention is to point out that pgcc and pgCC behave differently  
</span><br>
<span class="quotelev1">&gt; (puzzling), neither one describes their behavior, and ident is not  
</span><br>
<span class="quotelev1">&gt; documented as a recognized pragma.  Please make sure the  
</span><br>
<span class="quotelev1">&gt; documentation is updated to describe whatever the behavior is for  
</span><br>
<span class="quotelev1">&gt; pgcc and pgCC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<p>Larry,
<br>
<p>Thank you. I have added your remarks to the FTO, and included  
<br>
documentation into its
<br>
resolution.
<br>
<p><p>dave
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 7, 2010, at 10:46 AM, PGI Technical Support wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Larry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An update to TPR 17186.  
</span><br>
<span class="quotelev2">&gt;&gt; =========================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For c99, it is not required to perform macro replacement in pragmas.
</span><br>
<span class="quotelev2">&gt;&gt; However, there are a few exceptions in pgc, such as within 'omp',  
</span><br>
<span class="quotelev2">&gt;&gt; 'pgi' &amp; 'acc' pragmas.
</span><br>
<span class="quotelev2">&gt;&gt; c99 does define a method which effects replacement within pragmas;  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; method uses the _Pragma operator; e.g.,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define FOO &quot;foo&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #define IDENT(x) _Pragma(&quot;ident&quot;) x
</span><br>
<span class="quotelev2">&gt;&gt; IDENT(FOO)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; will generate
</span><br>
<span class="quotelev2">&gt;&gt; #pragma ident &quot;foo&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We will add allowing macro replacement within
</span><br>
<span class="quotelev2">&gt;&gt; '#pragma ident'  in our 11.0 release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==========================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; regards,
</span><br>
<span class="quotelev2">&gt;&gt; dave
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PGI Technical Support wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TPR 17186.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dave
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Larry Baker wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Customer information:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Larry Baker
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Product: 2183-WS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PIN: 507549
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Problem description:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pgcc issues the warning Pragma ignored &#150; string expected after  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #pragma ident when compiling openmpi-1.4.2 from <a href="http://www.open-mpi.org">http://www.open-mpi.org</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The source of this problem is that OpenMPI #defines the string it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wants to use in a #pragma ident instead of using a literal string  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; value.  However, pgcc does not perform macro substitution on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #pragma ident statements.  Curiously, pgCC does!  This is not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; documented anywhere.  Also, #pragma ident is not listed as a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recognized pragma, even though it seems to be properly compiled  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; into the ELF object file.  It would be consistent with gcc and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pgCC if pgcc would perform macro substitution in pragmas.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Larry Baker
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dave Borer    Customer Service Manager, The Portland Group
</span><br>
<span class="quotelev2">&gt;&gt; email        dave.borer_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; phone        (503)-431-7113
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dave Borer	Customer Service Manager, The Portland Group
email		dave.borer_at_[hidden]
phone		(503)-431-7113
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9972/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9972/configure.patch">configure.patch</a>
</ul>
<!-- attachment="configure.patch" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9972/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9973.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>Previous message:</strong> <a href="9971.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "[OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>In reply to:</strong> <a href="9971.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "[OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9973.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>Reply:</strong> <a href="9973.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
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
