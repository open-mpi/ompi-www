<?
$subject_val = "Re: [OMPI users] linking with openmpi version 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 24 16:45:25 2014" -->
<!-- isoreceived="20140224214525" -->
<!-- sent="Mon, 24 Feb 2014 21:45:23 +0000" -->
<!-- isosent="20140224214523" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] linking with openmpi version 1.6.1" -->
<!-- id="C1B52893-F61B-4562-AE5D-CCCFE14FAAF3_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="!&amp;amp;!AAAAAAAAAAAYAAAAAAAAAIREkfl+k5FLojq+8en22/jCgAAAEAAAALSH7JxJne1EoQ69YsaFkT8BAAAAAA==_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] linking with openmpi version 1.6.1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-24 16:45:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23635.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV"</a>
<li><strong>Previous message:</strong> <a href="23633.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>In reply to:</strong> <a href="23631.php">ocnoptcs_at_[hidden]: "[OMPI users] linking with openmpi version 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23636.php">Tim Prince: "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>Reply:</strong> <a href="23636.php">Tim Prince: "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is not an issue with Open MPI; it's an issue with how the Fortran compiler works on your Linux system.  It's choosing to put suffix it Fortran symbols with &quot;_&quot; (and possibly in some cases, &quot;__&quot;), whereas the C compiler is not.  FWIW, this is a fairly common Fortran Linux compiler convention.
<br>
<p>If you want to do C/Fortran interop, you'll either need to account for these differences with, perhaps, some clever #define macros in your C code, or do alternate entry points in C, such as:
<br>
<p>-----
<br>
void my_real_func(...) {
<br>
&nbsp;&nbsp;&nbsp;// real work
<br>
}
<br>
<p>void my_real_func_(...) { my_real_func(...); }
<br>
-----
<br>
<p>Or you can use the new Fortran'08 C interop stuff (BIND(C)), in which you can specify the C symbol name in the Fortran code.  Be aware that while this is supported in some Fortran compilers, it is not yet necessarily supported in the version of gfortran that you may be using.
<br>
<p>Also, FWIW, OMPI 1.6.1 is ancient.  Can you upgrade to the latest 1.6.x version of Open MPI: 1.6.5?
<br>
<p><p><p>On Feb 24, 2014, at 12:02 PM, ocnoptcs_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi&#133;..
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have a rather large and complex set of FORTRAN and C++ programs for a simulation project.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am using a Nvidia Cluster system that hosts Linux along with openmpi version 1.6.1 along with
</span><br>
<span class="quotelev1">&gt; FORTRAN 77 and 90 compilers and C++.  The linux system uses Bourne shells.
</span><br>
<span class="quotelev1">&gt; I have a makefile that compiles and links the object codes
</span><br>
<span class="quotelev1">&gt; To produce an executable file.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In the past I have been successful in compiling, linking, and running the modules using IBM MPI,
</span><br>
<span class="quotelev1">&gt; As well as SUN, SGI, and CRAY.  However, I cannot seem to get the FORTRAN object files to link
</span><br>
<span class="quotelev1">&gt; With the C++ object files with this system.  Unfortunately the system I am now using has no manuals
</span><br>
<span class="quotelev1">&gt; On openmpi.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In attempt to link, I am getting the following error messages&#133;.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &#147;undefined reference to ranf_&#148;
</span><br>
<span class="quotelev1">&gt; &#147;undefined reference to ranskip_&#148;
</span><br>
<span class="quotelev1">&gt; &#147;undefined reference to ranget_&#148;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have 3 C++ routines in a module called ranf, ranskip, ranf.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In the fortran programs, I make calls to the C++ like
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; R = RANF
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; And have the C++ routine set up as &#133;.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Real  ranf  (void)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It seems that it is referring to the fact that I need an underscore in the C++ routine name,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Like real ranf_ (void)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; As I said previously, the other systems I used does not require the underscore.  I thought
</span><br>
<span class="quotelev1">&gt; This one might so I tried to use the underscore but getting the same results.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am attaching the makefile (compressed with bzip2) which I hope will be some help.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I would appreciate any help in this matter.  It is best to respond to me via my email
</span><br>
<span class="quotelev1">&gt; As it is quite infrequent that I can access the user list.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Bill
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ocnoptcs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;Makefile.bz2&gt;_______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23635.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV"</a>
<li><strong>Previous message:</strong> <a href="23633.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>In reply to:</strong> <a href="23631.php">ocnoptcs_at_[hidden]: "[OMPI users] linking with openmpi version 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23636.php">Tim Prince: "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>Reply:</strong> <a href="23636.php">Tim Prince: "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
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
