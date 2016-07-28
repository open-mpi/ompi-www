<?
$subject_val = "[OMPI devel] use of stat() during malloc initialization";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 10:49:35 2013" -->
<!-- isoreceived="20130109154935" -->
<!-- sent="Wed, 09 Jan 2013 10:49:30 -0500" -->
<!-- isosent="20130109154930" -->
<!-- name="Phil Carns" -->
<!-- email="carns_at_[hidden]" -->
<!-- subject="[OMPI devel] use of stat() during malloc initialization" -->
<!-- id="50ED918A.2040203_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] use of stat() during malloc initialization<br>
<strong>From:</strong> Phil Carns (<em>carns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-09 10:49:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11908.php">Gutierrez, Samuel K: "[OMPI devel] New SM BTL Initialization Take 2"</a>
<li><strong>Previous message:</strong> <a href="11906.php">Kenneth A. Lloyd: "Re: [OMPI devel] Compiling OpenMPI 1.7 with LLVM clang or llvm-gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11909.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] use of stat() during malloc initialization"</a>
<li><strong>Reply:</strong> <a href="11909.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] use of stat() during malloc initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am a developer on the Darshan project 
<br>
(<a href="http://www.mcs.anl.gov/darshan">http://www.mcs.anl.gov/darshan</a>), which provides a set of lightweight 
<br>
wrappers to characterize the I/O access patterns of MPI applications.  
<br>
Darshan can operate on static or dynamic executables.  As you might 
<br>
expect, it uses the LD_PRELOAD mechanism to intercept I/O calls like 
<br>
open(), read(), write() and stat() on dynamic executables.
<br>
<p>We recently received an unusual bug report (courtesy of Myriam Botalla) 
<br>
when Darshan is used in LD_PRELOAD mode with Open MPI 1.6.3, however. 
<br>
When Darshan intercepts a function call via LD_PRELOAD, it must use 
<br>
dlsym() to locate the &quot;real&quot; underlying function to invoke.  dlsym() in 
<br>
turn uses the calloc() function internally.  In most cases this is fine, 
<br>
but Open MPI actually makes its first stat() call within the malloc 
<br>
initialization hook (opal_memory_linux_malloc_init_hook()) before the 
<br>
malloc() and its related functions have been configured.  Darshan 
<br>
therefore (indirectly) triggers a segfault because it intercepts those 
<br>
stat() calls but can't find the real stat() function without using malloc.
<br>
<p>There is some more detailed information about this issue, including a 
<br>
stack trace, in this mailing list thread:
<br>
<p><a href="http://lists.mcs.anl.gov/pipermail/darshan-users/2013-January/000131.html">http://lists.mcs.anl.gov/pipermail/darshan-users/2013-January/000131.html</a>
<br>
<p>Looking a little more closely at the 
<br>
opal_memory_linux_malloc_init_hook() function, it looks like the struct 
<br>
stat output argument from stat() is being ignored in all cases.  Open 
<br>
MPI is just checking the stat() return code to determine if the files in 
<br>
question exist or not.  Taking that into account, would it be possible 
<br>
to make a minor change in Open MPI to replace these instances:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stat(&quot;some_filename&quot;, &amp;st)
<br>
<p>with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;access(&quot;some_filename&quot;, F_OK)
<br>
<p>in the opal_memory_linux_malloc_init_hook() function?  There is a slight 
<br>
technical advantage to the change in that access() is lighter weight 
<br>
than stat() on some systems (and it might arguably make the intent  of 
<br>
the calls a little clearer), but of course my main motivation here is to 
<br>
have Open MPI use a function that is less likely to be intercepted by 
<br>
I/O tracing tools before a malloc implementation has been initialized.  
<br>
Technically it is possible to work around this in Darshan itself by 
<br>
checking the arguments passed in to stat() and using a workaround path 
<br>
for this case, but this isn't a very safe solution in the long run.
<br>
<p>Thanks in advance for your time and consideration,
<br>
-Phil
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11908.php">Gutierrez, Samuel K: "[OMPI devel] New SM BTL Initialization Take 2"</a>
<li><strong>Previous message:</strong> <a href="11906.php">Kenneth A. Lloyd: "Re: [OMPI devel] Compiling OpenMPI 1.7 with LLVM clang or llvm-gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11909.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] use of stat() during malloc initialization"</a>
<li><strong>Reply:</strong> <a href="11909.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] use of stat() during malloc initialization"</a>
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
