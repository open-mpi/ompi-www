<?
$subject_val = "Re: [OMPI users] Java bindings failed to load required libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 12:15:10 2012" -->
<!-- isoreceived="20121106171510" -->
<!-- sent="Tue, 6 Nov 2012 18:13:12 +0100 (CET)" -->
<!-- isosent="20121106171312" -->
<!-- name="Georg Ruzicka" -->
<!-- email="82ruge1bif_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java bindings failed to load required libraries" -->
<!-- id="e18384ae-c0d7-4893-9071-d2ae77e11e47_at_hft-stuttgart.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Java bindings failed to load required libraries" -->
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
<strong>Subject:</strong> Re: [OMPI users] Java bindings failed to load required libraries<br>
<strong>From:</strong> Georg Ruzicka (<em>82ruge1bif_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-06 12:13:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20645.php">huydanlin: "[OMPI users] Communication round-trip time"</a>
<li><strong>Previous message:</strong> <a href="20643.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20600.php">Georg Ruzicka: "[OMPI users] Java bindings failed to load required libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I installed everything like it is described in the hacking file.
<br>
So I have libtool installed.
<br>
I installed it in ~/tools/installed, added .../installed/lib to LD_LIBRARY_PATH
<br>
and .../installed/bin to PATH
<br>
<p>and after 'autogen.pl' i added '--with-libltdl=/home/georg/tools/installed' to configure.
<br>
<p>See 
<br>
<p>../configure --prefix=/home/georg/ompi-svn/build-debug --with-platform=optimized --enable-mpi-java --with-libltdl=/home/georg/tools/installed --with-jdk-dir=/opt/jdk1.7.0_09 --enable-debug
<br>
<p><p>Now I tried it many times, but since the first installation i have this fault.
<br>
<p>I think the problem is in mpi_MPI.c.
<br>
<p>#if OPAL_HAVE_LTDL_ADVISE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* open the library into the global namespace */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (lt_dladvise_init(&amp;advise)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;LT_DLADVISE INIT FAILED - CANNOT LOAD LIBOMPI&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return JNI_FALSE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (lt_dladvise_ext(&amp;advise)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;LT_DLADVISE EXT FAILED - CANNOT LOAD LIBOMPI&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lt_dladvise_destroy(&amp;advise);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return JNI_FALSE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (lt_dladvise_global(&amp;advise)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;LT_DLADVISE GLOBAL FAILED - CANNOT LOAD LIBOMPI&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lt_dladvise_destroy(&amp;advise);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return JNI_FALSE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* we don't care about the return value
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* on dlopen - it might return an error
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* because the lib is already loaded,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* depending on the way we were built
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lt_dlopenadvise(&quot;libmpi&quot;, advise);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lt_dladvise_destroy(&amp;advise);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return JNI_TRUE;
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;NO LT_DLADVISE - CANNOT LOAD LIBOMPI&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* need to balance the ltdl inits */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lt_dlexit();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* if we don't have advise, then we are hosed */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return JNI_FALSE;
<br>
<p><p>I looked in the config.log and there stand:
<br>
#define OPAL_HAVE_LTDL_ADVISE 0
<br>
<p>I think this meens no advice?
<br>
<p><p>So how can I activate advise?
<br>
In the configure --help is only the --enable-dlopen option.
<br>
But it should be enabled by default.
<br>
<p><p><p><p><p>----- Urspr&#195;&#188;ngliche Mail -----
<br>
Von: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
<br>
An: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Gesendet: Mittwoch, 31. Oktober 2012 15:26:45 GMT +01:00 Amsterdam/Berlin/Bern/Rom/Stockholm/Wien
<br>
Betreff: Re: [OMPI users] Java bindings failed to load required libraries
<br>
<p>The &quot;libompi&quot; was just a shorthand way of saying it can't load the OMPI libraries - it actually is looking for the libopen-rte in your /lib directory.
<br>
<p>But that isn't the problem. The problem is that we require ltdladvise in order to correctly load those libraries. Given that you are building from an svn checkout, we require that this be installed on your machine. Ubuntu does not install this by default, so you have to do it yourself.
<br>
<p>You can do this in two ways:
<br>
<p>1. you could look for a libtool package and install it. For example, yum shows it has &quot;libtool-ltdl&quot; that you could load
<br>
<p>2. you could go to the gnu site and download libtool yourself, build it, and then ensure it is in your default path
<br>
<p>Either way will work.
<br>
<p>On Oct 31, 2012, at 7:11 AM, Georg Ruzicka &lt;82ruge1bif_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The fault is still there and I can't locate it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seem's the first part of the message came from the file 
</span><br>
<span class="quotelev1">&gt; ompi/mpi/java/c/mpi_MPI.c   :   NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev1">&gt; and the second part from
</span><br>
<span class="quotelev1">&gt; ompi/mpi/java/java/MPI.java
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run a 'make install' in both directories.
</span><br>
<span class="quotelev1">&gt; As the result I get a mpi.jar and the libmpi_java libraries installed in 
</span><br>
<span class="quotelev1">&gt; /buildpath/lib
</span><br>
<span class="quotelev1">&gt; of my open mpi installation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also searched for the libompi but can't find anything.
</span><br>
<span class="quotelev1">&gt; I have a 'libmpi.la' library in my /lib directory but no libompi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Georg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Urspr&#195;&#188;ngliche Mail -----
</span><br>
<span class="quotelev1">&gt; Betreff: Java bindings failed to load required libraries
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed open mpi and try to run the examples.
</span><br>
<span class="quotelev1">&gt; I used the developer trunk.
</span><br>
<span class="quotelev1">&gt; C, C++ and Fortran90 examples compiling and running well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i tried to run the compiled Hello.java class
</span><br>
<span class="quotelev1">&gt; i get this messages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; georg_at_ThinkPad-R61:~/ompi-svn/examples$ mpirun java Hello
</span><br>
<span class="quotelev1">&gt; [ThinkPad-R61:19720] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev1">&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Process name: [[43465,1],0]
</span><br>
<span class="quotelev1">&gt;  Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configure with:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/georg/ompi-install1 --with-platform=optimized --enable-mpi-java --with-jdk-dir=/opt/jdk1.7.0_09
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I work with ubuntu 10.10.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I added to .bashrc:
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH:/home/georg/tools/installed/bin:/home/georg/ompi-install1/bin:/opt/jdk1.7.0_09/bin:/opt/jdk1.7.0_09
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$LB_LIBRARY_PATH:/home/georg/ompi-install1/lib:/home/georg/ompi-install1/lib/openmpi:/home/georg/ompi-install1/lib/pkgconfig 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can compile and run java progs 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did anyone know the fault?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20645.php">huydanlin: "[OMPI users] Communication round-trip time"</a>
<li><strong>Previous message:</strong> <a href="20643.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20600.php">Georg Ruzicka: "[OMPI users] Java bindings failed to load required libraries"</a>
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
