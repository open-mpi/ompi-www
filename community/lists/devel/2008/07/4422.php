<?
$subject_val = "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 08:29:01 2008" -->
<!-- isoreceived="20080724122901" -->
<!-- sent="Thu, 24 Jul 2008 05:28:45 -0700" -->
<!-- isosent="20080724122845" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &amp;quot;-Wl, --as-needed -Wl, --no-undefined&amp;quot;)" -->
<!-- id="BF6977CC-05E9-4C66-A2B5-F7B5F3BDC792_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="11C9A6CB-61F6-4F80-AC17-89775F8BE95B_at_eecs.utk.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-24 08:28:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4423.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Previous message:</strong> <a href="4421.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>In reply to:</strong> <a href="4421.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4423.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4423.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4424.php">Ralf Wildenhues: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George -
<br>
<p>When I looked at the same problem in LAM, I couldn't get the  
<br>
dependencies right between libraries when only one makefile was used.  
<br>
It worked up until I would do a parallel build, then would die because  
<br>
the libraries weren't ready at the right time.  There's probably a  
<br>
way, but I ended up with Jeff's approach.
<br>
<p>Brian
<br>
<p><pre>
-- 
Brian Barrett
There is an art . . . to flying. The knack lies in learning how to
throw yourself at the ground and miss.
On Jul 24, 2008, at 2:23, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
&gt; I tend to agree with Brian's comments, I would like to see this  
&gt; pushed into the 1.3 branch asap. However, I'm concerned with the  
&gt; impact on the code base of the required modifications as described  
&gt; on the TRAC ticket and on the email thread.
&gt;
&gt; I wonder if we cannot use the same technique that we use for  
&gt; improving the build time, i.e. getting information from the  
&gt; Makefile.am in the subdirs and adding it in the upper level  
&gt; Makefile.am. As an example for the F77 build tree:
&gt; - if we create the following directories structure:
&gt;  -&gt; ompi
&gt;     -&gt; mpi
&gt;        -&gt; f77
&gt;           -&gt; global (this is new and will contain the 5 files  
&gt; actually in the f77 base)
&gt;           -&gt; profiling
&gt; - then we include in the ompi/Makefile.am: include mpi/f77/global/ 
&gt; Makefile.am
&gt; - and in the mpi/f77/global/Makefile.am we add the 5 C files in the  
&gt; SOURCES.
&gt; - the compiling of the f77 bindings and profiling information will  
&gt; then depend on the libmpi, as long as we enforce the buildinf of the  
&gt; f77 library after the libmpi.so.
&gt;
&gt; With this approach, all files related to f77 will stay in the f77  
&gt; directory (and the same will apply for cxx and f90), and the  
&gt; required modifications to the makefiles are minimal.
&gt;
&gt; Auto* gurus would such a solution works ?
&gt;
&gt;  Thanks,
&gt;    george.
&gt;
&gt; On Jul 23, 2008, at 6:52 PM, Brian Barrett wrote:
&gt;
&gt;&gt; First, sorry about the previous message - I'm incapable of using my  
&gt;&gt; e-mail apparently.
&gt;&gt;
&gt;&gt; Based on discusions with people when this came up for LAM, it  
&gt;&gt; sounds like this will become common for the next set of major  
&gt;&gt; releases from the distros.  The feature is fairly new to GNU ld,  
&gt;&gt; but has some nice features for the OS, which I don't totally  
&gt;&gt; understand.
&gt;&gt;
&gt;&gt; Because this problem will only become more common during the  
&gt;&gt; lifespan of 1.3.x , it makes sense to put this in v1.3, in my  
&gt;&gt; opinion.
&gt;&gt;
&gt;&gt; Brian
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Brian Barrett
&gt;&gt;
&gt;&gt; There is an art . . . to flying. The knack lies in learning how to
&gt;&gt; throw yourself at the ground and miss.
&gt;&gt;
&gt;&gt; On Jul 23, 2008, at 9:32, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt;&gt; Release managers: I have created ticket 1409 for this issue.  I  
&gt;&gt;&gt; need a ruling: do you want this fixed for v1.3?
&gt;&gt;&gt;
&gt;&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/1409">https://svn.open-mpi.org/trac/ompi/ticket/1409</a>
&gt;&gt;&gt;
&gt;&gt;&gt; PRO: It's not too heinous to fix, but it does require moving some  
&gt;&gt;&gt; code around.
&gt;&gt;&gt; CON: This is the first time anyone has ever run into this issue.
&gt;&gt;&gt; ???: I don't know if this is a trend where distros will start  
&gt;&gt;&gt; wanting to compile with -Wl,--no-undefined.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Jul 23, 2008, at 10:15 AM, Jeff Squyres wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Jul 23, 2008, at 10:08 AM, Ralf Wildenhues wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Is the attached patch what you're talking about?
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; If so, I'll commit to trunk, v1.2, and v1.3.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Can you verify that it work with a pristine build?  The  
&gt;&gt;&gt;&gt;&gt; dependencies as
&gt;&gt;&gt;&gt;&gt; such look sane to me, also the cruft removal, but I fail to see  
&gt;&gt;&gt;&gt;&gt; how
&gt;&gt;&gt;&gt;&gt; your directory ordering can work:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; You're right; I tested only in an already-built tree.  I also  
&gt;&gt;&gt;&gt; didn't run &quot;make install&quot; to an empty tree, which also shows the  
&gt;&gt;&gt;&gt; problem.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Let me twonk around with this a bit...
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; -- 
&gt;&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt;&gt; Cisco Systems
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; -- 
&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt; Cisco Systems
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4423.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Previous message:</strong> <a href="4421.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>In reply to:</strong> <a href="4421.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4423.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4423.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4424.php">Ralf Wildenhues: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
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
