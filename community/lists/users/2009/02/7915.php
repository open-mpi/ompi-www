<?
$subject_val = "Re: [OMPI users] Compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 06:37:34 2009" -->
<!-- isoreceived="20090201113734" -->
<!-- sent="Sun, 1 Feb 2009 06:37:28 -0500" -->
<!-- isosent="20090201113728" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilers" -->
<!-- id="0743CB6B-FC84-4EF5-8EE9-D2FFB2EEA628_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="61b264610901290911t5a147279o17867f5b2196dcb7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-01 06:37:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7916.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;"</a>
<li><strong>Previous message:</strong> <a href="7914.php">Jeff Squyres: "Re: [OMPI users] Question about compatibility issues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7875.php">Amos Leffler: "Re: [OMPI users] Compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may be able to use an Intel series 11 Fortran compiler with gcc to  
<br>
compile Open MPI, but it depends on exactly what that series 11  
<br>
Fortran compiler supports.  If they support mixing object files from  
<br>
multiple compilers like this, then hypothetically OMPI can be compiled  
<br>
this way (ifort v11 + gcc).
<br>
<p>Specifically, our discussion in the FAQ suggests that the simplest way  
<br>
is to stick with a single compiler vendor/version.  That is almost  
<br>
always the simplest way to compile and use most any software.   
<br>
However, blended models are possible -- but as I mentioned above, it's  
<br>
really more of a question for what the compiler itself supports.
<br>
<p><p>On Jan 29, 2009, at 12:11 PM, Amos Leffler wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ray,
</span><br>
<span class="quotelev1">&gt;           If you look at the Intel Series 11 compilers there are  
</span><br>
<span class="quotelev1">&gt; warnings about mixing various
</span><br>
<span class="quotelev1">&gt; types of compilers although the Series 11 C++ Release Notes do talk  
</span><br>
<span class="quotelev1">&gt; about Eclipse Integration and C/C++ Development tools.  I think that  
</span><br>
<span class="quotelev1">&gt; I will get in touch with Intel before I do much more.
</span><br>
<span class="quotelev1">&gt; Can you imagine 28 pages of Release Notes!  Thanks for your reply.
</span><br>
<span class="quotelev1">&gt;                                                                              Amos 
</span><br>
<span class="quotelev1">&gt;  Leffler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 28, 2009 at 12:55 AM, Raymond Wan &lt;rwan_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Amos,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Amos Leffler wrote:
</span><br>
<span class="quotelev1">&gt;             I want to compile Open-mpi  using intel compilers.
</span><br>
<span class="quotelev1">&gt; Unfortunately the Series 10 C compiler(icc) license has expired.  I
</span><br>
<span class="quotelev1">&gt; downloaded and looked at the Series 11 C++ compiler (no C compiler  
</span><br>
<span class="quotelev1">&gt; listed)
</span><br>
<span class="quotelev1">&gt; and would like to know if you can use this together with an enclosed  
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; obtained C compiler from Intel.  The release notes are a bit  
</span><br>
<span class="quotelev1">&gt; overwhelming!
</span><br>
<span class="quotelev1">&gt; Is it possible to use the standard Linux gcc instead?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes you can use gcc/g++ as that is what I use.  I do not know about  
</span><br>
<span class="quotelev1">&gt; Intel's compilers though as I don't use them.  However, this answer  
</span><br>
<span class="quotelev1">&gt; in the FAQ seems to address your query:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-compilers">http://www.open-mpi.org/faq/?category=building#build-compilers</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...and the answer seems to be &quot;yes&quot; (in fact, Intel compilers is the  
</span><br>
<span class="quotelev1">&gt; example used).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ray
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7916.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;"</a>
<li><strong>Previous message:</strong> <a href="7914.php">Jeff Squyres: "Re: [OMPI users] Question about compatibility issues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7875.php">Amos Leffler: "Re: [OMPI users] Compilers"</a>
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
