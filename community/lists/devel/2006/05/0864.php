<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  8 14:46:57 2006" -->
<!-- isoreceived="20060508184657" -->
<!-- sent="Mon, 08 May 2006 20:46:49 +0200" -->
<!-- isosent="20060508184649" -->
<!-- name="Dries Kimpe" -->
<!-- email="Dries.Kimpe_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in Makefile.in" -->
<!-- id="445F9219.3000709_at_cs.kuleuven.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="445F7F9B.2050105_at_cs.kuleuven.be" -->
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
<strong>From:</strong> Dries Kimpe (<em>Dries.Kimpe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-08 14:46:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0865.php">Ralf Wildenhues: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Previous message:</strong> <a href="0863.php">Dries Kimpe: "[OMPI devel] bug in Makefile.in"</a>
<li><strong>In reply to:</strong> <a href="0863.php">Dries Kimpe: "[OMPI devel] bug in Makefile.in"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0865.php">Ralf Wildenhues: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Reply:</strong> <a href="0865.php">Ralf Wildenhues: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Reply:</strong> <a href="0867.php">Brian Barrett: "Re: [OMPI devel] bug in Makefile.in"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are a number of errors in my mail below (probably caused by the
<br>
fact that I was in a hurry to leave for dinner ;-)
<br>
<p>1) The file is configure.in, in mca/io/romio/romio/configure.in, not
<br>
&nbsp;&nbsp;&nbsp;Makefile.in
<br>
<p>2) The $ in grep 'pvfs$' was added by me as a temporary hack to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;prevent it from building pvfs along with pvfs2.
<br>
&nbsp;&nbsp;It's not a good solution anyway, because $FILE_SYSTEM contains things
<br>
&nbsp;&nbsp;as &quot;nfs ufs pvfs pvfs2&quot;
<br>
<p>Really, the correct fix is just to use $file_system_pvfs,
<br>
$file_system_pvfs2, ...
<br>
<p>&nbsp;&nbsp;Greetings,
<br>
&nbsp;&nbsp;Dries
<br>
<p><p>Dries Kimpe wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Sorry to keep you busy,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but I found another problem with the Open MPI &lt;-&gt; ROMIO integration:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca/io/romio/romio/Makefile.in:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Open MPI: setup the AM_CONDITIONALs to build the different adio devices
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(BUILD_GRIDFTP, [test -n &quot;`echo $FILE_SYSTEM | grep gridftp`&quot;])
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(BUILD_HFS, [test -n &quot;`echo $FILE_SYSTEM | grep hfs`&quot;])
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(BUILD_NFS, [test -n &quot;`echo $FILE_SYSTEM | grep nfs`&quot;])
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(BUILD_PANFS, [test -n &quot;`echo $FILE_SYSTEM | grep panfs`&quot;])
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(BUILD_PFS, [test -n &quot;`echo $FILE_SYSTEM | grep pfs`&quot;])
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(BUILD_PIOFS, [test -n &quot;`echo $FILE_SYSTEM | grep piofs`&quot;])
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(BUILD_PVFS, [test -n &quot;`echo $FILE_SYSTEM | grep pvfs$`&quot;])
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(BUILD_PVFS2, [test -n &quot;`echo $FILE_SYSTEM | grep pvfs2`&quot;])
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(BUILD_SFS, [test -n &quot;`echo $FILE_SYSTEM | grep sfs`&quot;])
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(BUILD_TESTFS, [test -n &quot;`echo $FILE_SYSTEM | grep testfs`&quot;])
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(BUILD_UFS, [test -n &quot;`echo $FILE_SYSTEM | grep ufs`&quot;])
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(BUILD_XFS, [test -n &quot;`echo $FILE_SYSTEM | grep xfs`&quot;])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the ROMIO's configure finds support for a filesystem, it sets
</span><br>
<span class="quotelev1">&gt; file_system_&lt;name&gt; to 1. (This is done by checking support for each of the
</span><br>
<span class="quotelev1">&gt; filesystems listed in $FILE_SYSTEM (passed from --with-filesystems))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my case, I want PVFS2 so file_system_pvfs2=1 (because configure found
</span><br>
<span class="quotelev1">&gt; all the needed headers)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, two things are wrong with the AM_CONDITIONAL code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) FILE_SYSTEM is tested, meaning that if the user demanded pvfs2 but didn't have
</span><br>
<span class="quotelev1">&gt; the headers/tools to build it, ROMIO's configure would have set file_system_pvfs2 to 0,
</span><br>
<span class="quotelev1">&gt; and the code above would still try to build the PVFS2 AD because it only tests if the name was
</span><br>
<span class="quotelev1">&gt; specified.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) If grep pvfs2 matches, grep pvfs also matches... ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Greetings,
</span><br>
<span class="quotelev1">&gt;    Dries
</span><br>
<p><p><p>Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0865.php">Ralf Wildenhues: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Previous message:</strong> <a href="0863.php">Dries Kimpe: "[OMPI devel] bug in Makefile.in"</a>
<li><strong>In reply to:</strong> <a href="0863.php">Dries Kimpe: "[OMPI devel] bug in Makefile.in"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0865.php">Ralf Wildenhues: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Reply:</strong> <a href="0865.php">Ralf Wildenhues: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Reply:</strong> <a href="0867.php">Brian Barrett: "Re: [OMPI devel] bug in Makefile.in"</a>
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
