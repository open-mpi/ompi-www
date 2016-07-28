<?
$subject_val = "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 05:23:40 2008" -->
<!-- isoreceived="20080724092340" -->
<!-- sent="Thu, 24 Jul 2008 11:23:24 +0200" -->
<!-- isosent="20080724092324" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &amp;quot;-Wl, --as-needed -Wl, --no-undefined&amp;quot;)" -->
<!-- id="11C9A6CB-61F6-4F80-AC17-89775F8BE95B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D391A0D6-F220-4E00-9563-00301E4A5190_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-07-24 05:23:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4422.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Previous message:</strong> <a href="4420.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>In reply to:</strong> <a href="4420.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4422.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4422.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tend to agree with Brian's comments, I would like to see this pushed  
<br>
into the 1.3 branch asap. However, I'm concerned with the impact on  
<br>
the code base of the required modifications as described on the TRAC  
<br>
ticket and on the email thread.
<br>
<p>I wonder if we cannot use the same technique that we use for improving  
<br>
the build time, i.e. getting information from the Makefile.am in the  
<br>
subdirs and adding it in the upper level Makefile.am. As an example  
<br>
for the F77 build tree:
<br>
- if we create the following directories structure:
<br>
&nbsp;&nbsp;&nbsp;-&gt; ompi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; f77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; global (this is new and will contain the 5 files  
<br>
actually in the f77 base)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; profiling
<br>
- then we include in the ompi/Makefile.am: include mpi/f77/global/ 
<br>
Makefile.am
<br>
- and in the mpi/f77/global/Makefile.am we add the 5 C files in the  
<br>
SOURCES.
<br>
- the compiling of the f77 bindings and profiling information will  
<br>
then depend on the libmpi, as long as we enforce the buildinf of the  
<br>
f77 library after the libmpi.so.
<br>
<p>With this approach, all files related to f77 will stay in the f77  
<br>
directory (and the same will apply for cxx and f90), and the required  
<br>
modifications to the makefiles are minimal.
<br>
<p>Auto* gurus would such a solution works ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 23, 2008, at 6:52 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; First, sorry about the previous message - I'm incapable of using my  
</span><br>
<span class="quotelev1">&gt; e-mail apparently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on discusions with people when this came up for LAM, it sounds  
</span><br>
<span class="quotelev1">&gt; like this will become common for the next set of major releases from  
</span><br>
<span class="quotelev1">&gt; the distros.  The feature is fairly new to GNU ld, but has some nice  
</span><br>
<span class="quotelev1">&gt; features for the OS, which I don't totally understand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because this problem will only become more common during the  
</span><br>
<span class="quotelev1">&gt; lifespan of 1.3.x , it makes sense to put this in v1.3, in my opinion.
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
<span class="quotelev1">&gt; On Jul 23, 2008, at 9:32, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Release managers: I have created ticket 1409 for this issue.  I  
</span><br>
<span class="quotelev2">&gt;&gt; need a ruling: do you want this fixed for v1.3?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/1409">https://svn.open-mpi.org/trac/ompi/ticket/1409</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PRO: It's not too heinous to fix, but it does require moving some  
</span><br>
<span class="quotelev2">&gt;&gt; code around.
</span><br>
<span class="quotelev2">&gt;&gt; CON: This is the first time anyone has ever run into this issue.
</span><br>
<span class="quotelev2">&gt;&gt; ???: I don't know if this is a trend where distros will start  
</span><br>
<span class="quotelev2">&gt;&gt; wanting to compile with -Wl,--no-undefined.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 23, 2008, at 10:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 23, 2008, at 10:08 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is the attached patch what you're talking about?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If so, I'll commit to trunk, v1.2, and v1.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you verify that it work with a pristine build?  The  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dependencies as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; such look sane to me, also the cruft removal, but I fail to see how
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your directory ordering can work:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You're right; I tested only in an already-built tree.  I also  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; didn't run &quot;make install&quot; to an empty tree, which also shows the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me twonk around with this a bit...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4421/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4422.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Previous message:</strong> <a href="4420.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>In reply to:</strong> <a href="4420.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4422.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4422.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
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
