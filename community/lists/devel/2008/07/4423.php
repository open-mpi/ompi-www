<?
$subject_val = "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 08:44:20 2008" -->
<!-- isoreceived="20080724124420" -->
<!-- sent="Thu, 24 Jul 2008 14:44:04 +0200" -->
<!-- isosent="20080724124404" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &amp;quot;-Wl, --as-needed -Wl, --no-undefined&amp;quot;)" -->
<!-- id="720D5274-B5A5-4D3E-A6C6-76A9BCED6C42_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BF6977CC-05E9-4C66-A2B5-F7B5F3BDC792_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-24 08:44:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4424.php">Ralf Wildenhues: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Previous message:</strong> <a href="4422.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>In reply to:</strong> <a href="4422.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4425.php">Ralf Wildenhues: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4425.php">Ralf Wildenhues: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was hoping we can get some hints/help from Ralf, but unfortunately  
<br>
his email address is not CC to the emails and I don't know if he's  
<br>
reading the devel mailing list. I'll resend my email with.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 24, 2008, at 2:28 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; George -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I looked at the same problem in LAM, I couldn't get the  
</span><br>
<span class="quotelev1">&gt; dependencies right between libraries when only one makefile was  
</span><br>
<span class="quotelev1">&gt; used. It worked up until I would do a parallel build, then would die  
</span><br>
<span class="quotelev1">&gt; because the libraries weren't ready at the right time.  There's  
</span><br>
<span class="quotelev1">&gt; probably a way, but I ended up with Jeff's approach.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Brian Barrett
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is an art . . . to flying. The knack lies in learning how to
</span><br>
<span class="quotelev1">&gt; throw yourself at the ground and miss.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2008, at 2:23, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tend to agree with Brian's comments, I would like to see this  
</span><br>
<span class="quotelev2">&gt;&gt; pushed into the 1.3 branch asap. However, I'm concerned with the  
</span><br>
<span class="quotelev2">&gt;&gt; impact on the code base of the required modifications as described  
</span><br>
<span class="quotelev2">&gt;&gt; on the TRAC ticket and on the email thread.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if we cannot use the same technique that we use for  
</span><br>
<span class="quotelev2">&gt;&gt; improving the build time, i.e. getting information from the  
</span><br>
<span class="quotelev2">&gt;&gt; Makefile.am in the subdirs and adding it in the upper level  
</span><br>
<span class="quotelev2">&gt;&gt; Makefile.am. As an example for the F77 build tree:
</span><br>
<span class="quotelev2">&gt;&gt; - if we create the following directories structure:
</span><br>
<span class="quotelev2">&gt;&gt; -&gt; ompi
</span><br>
<span class="quotelev2">&gt;&gt;    -&gt; mpi
</span><br>
<span class="quotelev2">&gt;&gt;       -&gt; f77
</span><br>
<span class="quotelev2">&gt;&gt;          -&gt; global (this is new and will contain the 5 files  
</span><br>
<span class="quotelev2">&gt;&gt; actually in the f77 base)
</span><br>
<span class="quotelev2">&gt;&gt;          -&gt; profiling
</span><br>
<span class="quotelev2">&gt;&gt; - then we include in the ompi/Makefile.am: include mpi/f77/global/ 
</span><br>
<span class="quotelev2">&gt;&gt; Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; - and in the mpi/f77/global/Makefile.am we add the 5 C files in the  
</span><br>
<span class="quotelev2">&gt;&gt; SOURCES.
</span><br>
<span class="quotelev2">&gt;&gt; - the compiling of the f77 bindings and profiling information will  
</span><br>
<span class="quotelev2">&gt;&gt; then depend on the libmpi, as long as we enforce the buildinf of  
</span><br>
<span class="quotelev2">&gt;&gt; the f77 library after the libmpi.so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With this approach, all files related to f77 will stay in the f77  
</span><br>
<span class="quotelev2">&gt;&gt; directory (and the same will apply for cxx and f90), and the  
</span><br>
<span class="quotelev2">&gt;&gt; required modifications to the makefiles are minimal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Auto* gurus would such a solution works ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 23, 2008, at 6:52 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First, sorry about the previous message - I'm incapable of using  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my e-mail apparently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Based on discusions with people when this came up for LAM, it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sounds like this will become common for the next set of major  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; releases from the distros.  The feature is fairly new to GNU ld,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but has some nice features for the OS, which I don't totally  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; understand.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Because this problem will only become more common during the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lifespan of 1.3.x , it makes sense to put this in v1.3, in my  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opinion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is an art . . . to flying. The knack lies in learning how to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; throw yourself at the ground and miss.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 23, 2008, at 9:32, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Release managers: I have created ticket 1409 for this issue.  I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need a ruling: do you want this fixed for v1.3?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1409">https://svn.open-mpi.org/trac/ompi/ticket/1409</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PRO: It's not too heinous to fix, but it does require moving some  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code around.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CON: This is the first time anyone has ever run into this issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ???: I don't know if this is a trend where distros will start  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wanting to compile with -Wl,--no-undefined.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 23, 2008, at 10:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 23, 2008, at 10:08 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is the attached patch what you're talking about?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; If so, I'll commit to trunk, v1.2, and v1.3.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can you verify that it work with a pristine build?  The  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; dependencies as
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; such look sane to me, also the cruft removal, but I fail to see  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; how
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; your directory ordering can work:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You're right; I tested only in an already-built tree.  I also  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; didn't run &quot;make install&quot; to an empty tree, which also shows the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Let me twonk around with this a bit...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4423/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4424.php">Ralf Wildenhues: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Previous message:</strong> <a href="4422.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>In reply to:</strong> <a href="4422.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4425.php">Ralf Wildenhues: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4425.php">Ralf Wildenhues: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
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
