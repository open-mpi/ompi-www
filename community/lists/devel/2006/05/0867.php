<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  9 05:36:42 2006" -->
<!-- isoreceived="20060509093642" -->
<!-- sent="Tue, 9 May 2006 11:36:21 +0200" -->
<!-- isosent="20060509093621" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in Makefile.in" -->
<!-- id="F165681F-0DD4-4F2F-8B4A-FD046B779240_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="445F9219.3000709_at_cs.kuleuven.be" -->
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
<strong>Date:</strong> 2006-05-09 05:36:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0868.php">Brian Barrett: "Re: [OMPI devel] another small ROMIO fix..."</a>
<li><strong>Previous message:</strong> <a href="0866.php">Dries Kimpe: "[OMPI devel] another small ROMIO fix..."</a>
<li><strong>In reply to:</strong> <a href="0864.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0870.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Reply:</strong> <a href="0870.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I have this fixed (using the $file_system_[foo] variables).   
<br>
Thanks for all the bug reports.  I've committed to the trunk and am  
<br>
building a new nightly tarball right now.  Can you try it to make  
<br>
sure I have all your issues fixed?
<br>
<p>Thanks for all the bug reports!
<br>
<p>Brian
<br>
<p>On May 8, 2006, at 8:46 PM, Dries Kimpe wrote:
<br>
<p><span class="quotelev1">&gt; There are a number of errors in my mail below (probably caused by the
</span><br>
<span class="quotelev1">&gt; fact that I was in a hurry to leave for dinner ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) The file is configure.in, in mca/io/romio/romio/configure.in, not
</span><br>
<span class="quotelev1">&gt;    Makefile.in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) The $ in grep 'pvfs$' was added by me as a temporary hack to
</span><br>
<span class="quotelev1">&gt;     prevent it from building pvfs along with pvfs2.
</span><br>
<span class="quotelev1">&gt;   It's not a good solution anyway, because $FILE_SYSTEM contains  
</span><br>
<span class="quotelev1">&gt; things
</span><br>
<span class="quotelev1">&gt;   as &quot;nfs ufs pvfs pvfs2&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Really, the correct fix is just to use $file_system_pvfs,
</span><br>
<span class="quotelev1">&gt; $file_system_pvfs2, ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Greetings,
</span><br>
<span class="quotelev1">&gt;   Dries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dries Kimpe wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Sorry to keep you busy,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but I found another problem with the Open MPI &lt;-&gt; ROMIO integration:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca/io/romio/romio/Makefile.in:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Open MPI: setup the AM_CONDITIONALs to build the different adio  
</span><br>
<span class="quotelev2">&gt;&gt; devices
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(BUILD_GRIDFTP, [test -n &quot;`echo $FILE_SYSTEM | grep  
</span><br>
<span class="quotelev2">&gt;&gt; gridftp`&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(BUILD_HFS, [test -n &quot;`echo $FILE_SYSTEM | grep hfs`&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(BUILD_NFS, [test -n &quot;`echo $FILE_SYSTEM | grep nfs`&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(BUILD_PANFS, [test -n &quot;`echo $FILE_SYSTEM | grep  
</span><br>
<span class="quotelev2">&gt;&gt; panfs`&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(BUILD_PFS, [test -n &quot;`echo $FILE_SYSTEM | grep pfs`&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(BUILD_PIOFS, [test -n &quot;`echo $FILE_SYSTEM | grep  
</span><br>
<span class="quotelev2">&gt;&gt; piofs`&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(BUILD_PVFS, [test -n &quot;`echo $FILE_SYSTEM | grep pvfs 
</span><br>
<span class="quotelev2">&gt;&gt; $`&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(BUILD_PVFS2, [test -n &quot;`echo $FILE_SYSTEM | grep  
</span><br>
<span class="quotelev2">&gt;&gt; pvfs2`&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(BUILD_SFS, [test -n &quot;`echo $FILE_SYSTEM | grep sfs`&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(BUILD_TESTFS, [test -n &quot;`echo $FILE_SYSTEM | grep  
</span><br>
<span class="quotelev2">&gt;&gt; testfs`&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(BUILD_UFS, [test -n &quot;`echo $FILE_SYSTEM | grep ufs`&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(BUILD_XFS, [test -n &quot;`echo $FILE_SYSTEM | grep xfs`&quot;])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When the ROMIO's configure finds support for a filesystem, it sets
</span><br>
<span class="quotelev2">&gt;&gt; file_system_&lt;name&gt; to 1. (This is done by checking support for  
</span><br>
<span class="quotelev2">&gt;&gt; each of the
</span><br>
<span class="quotelev2">&gt;&gt; filesystems listed in $FILE_SYSTEM (passed from --with-filesystems))
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my case, I want PVFS2 so file_system_pvfs2=1 (because configure  
</span><br>
<span class="quotelev2">&gt;&gt; found
</span><br>
<span class="quotelev2">&gt;&gt; all the needed headers)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, two things are wrong with the AM_CONDITIONAL code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) FILE_SYSTEM is tested, meaning that if the user demanded pvfs2  
</span><br>
<span class="quotelev2">&gt;&gt; but didn't have
</span><br>
<span class="quotelev2">&gt;&gt; the headers/tools to build it, ROMIO's configure would have set  
</span><br>
<span class="quotelev2">&gt;&gt; file_system_pvfs2 to 0,
</span><br>
<span class="quotelev2">&gt;&gt; and the code above would still try to build the PVFS2 AD because  
</span><br>
<span class="quotelev2">&gt;&gt; it only tests if the name was
</span><br>
<span class="quotelev2">&gt;&gt; specified.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) If grep pvfs2 matches, grep pvfs also matches... ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Greetings,
</span><br>
<span class="quotelev2">&gt;&gt;    Dries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0868.php">Brian Barrett: "Re: [OMPI devel] another small ROMIO fix..."</a>
<li><strong>Previous message:</strong> <a href="0866.php">Dries Kimpe: "[OMPI devel] another small ROMIO fix..."</a>
<li><strong>In reply to:</strong> <a href="0864.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0870.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Reply:</strong> <a href="0870.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
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
