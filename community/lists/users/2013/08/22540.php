<?
$subject_val = "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 22 08:48:16 2013" -->
<!-- isoreceived="20130822124816" -->
<!-- sent="Thu, 22 Aug 2013 14:48:14 +0200" -->
<!-- isosent="20130822124814" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make" -->
<!-- id="E31B2E6B-9C7A-4722-A8E0-1EC0E915F25D_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CACpvy6AatPE8SnBtA5bxeGjfSB3eeYj60mmMr3qqDBg5x78NGg_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-22 08:48:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22541.php">Hazelrig, Chris CTR (US): "Re: [OMPI users] Finalize() does not return (UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="22539.php">mahesh: "[OMPI users] Detailed documentation on OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="22538.php">Richard Haney: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The win_compat.h file is not only for 32 bits targets. However, it should be needed only for building Open MPI with VC, which is not your case. The file is automatically included (from opal_config_bottom.h) if a Windows target is detected (the define __WINDOWS__). So my guess is that your compiler must define _WIN32 or WIN32 or WIN64 triggering the inclusion of the win_compat.h header.
<br>
<p>The asm.c is only necessary for some 32 SPARC architectures lacking support for atomic operations (except CAS).  This should be of no use in your specific environment. Regarding the comment, the define for this architecture changed from OMPI_SPARC32 to OMPI_SPARC but we missed the comment. This can be safe to ignore.
<br>
<p>Based on your configure file the target architecture was detected as AMD64, which explains why we use the 64bits atomic header. So far so good, this is correct. The problem seems to be with the assembler, it tries to generate by default 32bits code out of a 64bits assembly file. Obviously &#133; not good.
<br>
<p>I would suggest you play with AM_CCASFLAGS to force a 64bits output.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Aug 22, 2013, at 04:53 , Richard Haney &lt;rfhaney_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Jeremiah, for the suggestion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; File win_compat.h is in directory opal/win32 , a directory which by its name is supposedly concerned only with producing a 32-bit target, and so, because we are doing a build for a 64-bit target, it seems make should not be having anything to do with files in that directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What seems a more likely approach is to consider what happens in asm.c , which appears to be where make has problems.  I gather that either some command is executed to create asm.lo earlier in the make processing (although make output does not show any earlier command to do that) or else, which seems more likely, gcc (in command &quot;   CC     asm.lo &quot; ) knows how to interpret the file name asm.lo so as to look at asm.c for build purposes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So what does asm.c do???  After a bunch of initial #include statements in asm.c there is next the statement
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if OPAL_ASSEMBLY_ARCH == OMPI_SPARC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But note that directory opal/asm/base has a bunch of files whose names suggest that SPARC is an alternative architecture to AMD64 .  So it seems the preprocessor #if condition should evaluate to false.  The other end of this #if statement is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #endif /* OPAL_ASSEMBLY_ARCH == OMPI_SPARC32 */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; at the very end of the file.  So it seems the result is that there is no code in asm.c to compile (or assemble); the resulting preprocessed file consists only of included headers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I'm thinking that the thing to do is to gut asm.c and replace it with a dummy routine so that at least an object file will be produced so that make will not get confused for lack of an object file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But this assumes that asm.c is not supposed to produce any entry points or other loader variables to link to other modules in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is a big question.  One possibility is to find some equivalent 32-bit file alternative to the supposed 64-bit asm.c and to try to manually re-interpret and modify that code so as to become an equivalent 64-bit code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So maybe I should do a 32-bit build and somehow adjust the relevant Makefile so that a file of 32-bit preprocessed C or assembly code is produced from asm.c  But I suppose this would require knowing what the command &quot;CC     asm.lo&quot; is actually supposed to do even in the 32-bit case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am wondering whether such a 32-bit &quot;build&quot; for preprocessed output from asm.c can be done as a quick, stand-alone run without having to rerun configure and make for context.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note also the OMPI_SPARC32 in the comment for #endif .  That suggests the author may have been vacillating as to whether SPARC is a 32-bit architecture.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is likely lots of guessing in this approach; so unless someone can suggest a more direct and definitive solution to resolve this issue fairly soon, I think I may take a little vacation and perhaps come back to this question later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Richard Haney
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 20, 2013 at 7:41 PM, Jeremiah Willcock &lt;jewillco_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; The file win_compat.h seems to be very strange (many #defines of function names, #defines of type names rather than typedefs, etc.).  It might make sense to avoid including it entirely for MinGW (it is included from opal/include/opal_config_bottom.h), or edit it to be correct for 64-bit systems.  You might want to try commenting out the entire body of win_compat.h and re-enabling only those parts that are truly necessary (and don't have MinGW headers that should be used instead, such as for ssize_t).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Jeremiah Willcock
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22540/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22541.php">Hazelrig, Chris CTR (US): "Re: [OMPI users] Finalize() does not return (UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="22539.php">mahesh: "[OMPI users] Detailed documentation on OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="22538.php">Richard Haney: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
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
