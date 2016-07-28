<?
$subject_val = "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 09:43:20 2014" -->
<!-- isoreceived="20140312134320" -->
<!-- sent="Wed, 12 Mar 2014 06:42:41 -0700" -->
<!-- isosent="20140312134241" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails" -->
<!-- id="1261EDB8-7C8A-43EC-990D-4A2279571B89_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6863C2FF-8325-4DB1-A7AB-DF5781DCC91C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-12 09:42:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14339.php">Adrian Reber: "[OMPI devel] orte-restart and PATH"</a>
<li><strong>Previous message:</strong> <a href="14337.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>In reply to:</strong> <a href="14337.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14346.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's what I had to do to load the library correctly (we were only using ORTE, so substitute &quot;libmpi&quot;) - this was called at the beginning of &quot;init&quot;:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* first, load the required ORTE library */
<br>
#if OPAL_WANT_LIBLTDL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lt_dladvise advise;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (lt_dlinit() != 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;LT_DLINIT FAILED - CANNOT LOAD LIBMRPLUS\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return JNI_FALSE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>#if OPAL_HAVE_LTDL_ADVISE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* open the library into the global namespace */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (lt_dladvise_init(&amp;advise)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;LT_DLADVISE INIT FAILED - CANNOT LOAD LIBMRPLUS\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return JNI_FALSE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (lt_dladvise_ext(&amp;advise)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;LT_DLADVISE EXT FAILED - CANNOT LOAD LIBMRPLUS\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lt_dladvise_destroy(&amp;advise);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return JNI_FALSE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (lt_dladvise_global(&amp;advise)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;LT_DLADVISE GLOBAL FAILED - CANNOT LOAD LIBMRPLUS\n&quot;);
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
&nbsp;&nbsp;&nbsp;&nbsp;lt_dlopenadvise(&quot;libopen-rte&quot;, advise);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lt_dladvise_destroy(&amp;advise);
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;NO LT_DLADVISE - CANNOT LOAD LIBMRPLUS\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* need to balance the ltdl inits */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lt_dlexit();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* if we don't have advise, then we are hosed */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return JNI_FALSE;
<br>
#endif
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* if dlopen was disabled, then all symbols
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* should have been pulled up into the libraries,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* so we don't need to do anything as the symbols
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* are already available.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
<p>On Mar 12, 2014, at 6:32 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Check out how we did this with the embedded java bindings in Open MPI; see the comment describing exactly this issue starting here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/java/c/mpi_MPI.c#L79">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/java/c/mpi_MPI.c#L79</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Feel free to compare MPJ to the OMPI java bindings -- they're shipping in 1.7.4 and have a bunch of improvements in the soon-to-be-released 1.7.5, but you must enable them since they aren't enabled by default:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ./configure --enable-mpi-java ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, we found a few places in the Java bindings where it was necessary for the bindings to have some insight into the internals of the MPI implementation.  Did you find the same thing with MPJ Express?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are your bindings similar in style/signature to ours?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2014, at 6:40 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am writing a new device for MPJ Express that uses a native MPI library for communication. Its based on JNI wrappers like the original mpiJava. The device works fine with MPICH3  (and MVAPICH2.2). Here is the issue with loading Open MPI 1.7.4 from MPJ Express.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have generated the following error message from a simple JNI to MPI application for clarity purposes and also to regenerate the error easily. I have attached the app for your consideration.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [bibrak_at_localhost JNI_to_MPI]$ mpirun -np 2 java -cp . -Djava.library.path=/home/bibrak/work/JNI_to_MPI/ simpleJNI_MPI
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29086] mca: base: component_find: unable to open /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap: /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29085] mca: base: component_find: unable to open /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap: /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29085] mca: base: component_find: unable to open /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix: /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix.so: undefined symbol: opal_shmem_base_framework (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29086] mca: base: component_find: unable to open /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix: /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix.so: undefined symbol: opal_shmem_base_framework (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29086] mca: base: component_find: unable to open /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv: /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  opal_shmem_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29085] mca: base: component_find: unable to open /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv: /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  opal_init failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  ompi_mpi_init: ompi_rte_init failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29086] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  opal_shmem_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev2">&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Process name: [[41236,1],1]
</span><br>
<span class="quotelev2">&gt;&gt;  Exit code:    1
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a thread that I found where the Open MPI developers were having issues while integrating mpiJava into their stack.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mail-archives.apache.org/mod_mbox/hadoop-common-dev/201202.mbox/%3C5EA543BD-A12E-4729-B66A-C746BC789EC3&#64;open-mpi.org%3E">http://mail-archives.apache.org/mod_mbox/hadoop-common-dev/201202.mbox/%3C5EA543BD-A12E-4729-B66A-C746BC789EC3&#64;open-mpi.org%3E</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't have better understanding of the internals of Open MPI, so my question is how to use Open MPI using JNI wrappers? Any guidelines in this regard?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Bibrak
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;JNI_to_MPI.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14335.php">http://www.open-mpi.org/community/lists/devel/2014/03/14335.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14337.php">http://www.open-mpi.org/community/lists/devel/2014/03/14337.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14339.php">Adrian Reber: "[OMPI devel] orte-restart and PATH"</a>
<li><strong>Previous message:</strong> <a href="14337.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>In reply to:</strong> <a href="14337.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14346.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
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
