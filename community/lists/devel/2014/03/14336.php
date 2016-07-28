<?
$subject_val = "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 09:27:15 2014" -->
<!-- isoreceived="20140312132715" -->
<!-- sent="Wed, 12 Mar 2014 06:26:35 -0700" -->
<!-- isosent="20140312132635" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails" -->
<!-- id="CDB00134-CA84-4B10-A434-8B0D22CA369F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANFHntCjGpjsUjOpAEDunT98vM4RZ3Xb28cPo-qcix3gAApNaA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-03-12 09:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14337.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Previous message:</strong> <a href="14335.php">Bibrak Qamar: "[OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>In reply to:</strong> <a href="14335.php">Bibrak Qamar: "[OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14337.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are going to use OMPI via JNI, then you have to load the OMPI library from within your code. This is a little tricky from Java as OMPI by default builds as a set of dynamic libraries, and each component is a dynamic library as well. The solution is to either build OMPI static, or to use lt_dladvise and friends to ensure the load paths are followed.
<br>
<p><p>On Mar 12, 2014, at 3:40 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am writing a new device for MPJ Express that uses a native MPI library for communication. Its based on JNI wrappers like the original mpiJava. The device works fine with MPICH3  (and MVAPICH2.2). Here is the issue with loading Open MPI 1.7.4 from MPJ Express.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have generated the following error message from a simple JNI to MPI application for clarity purposes and also to regenerate the error easily. I have attached the app for your consideration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [bibrak_at_localhost JNI_to_MPI]$ mpirun -np 2 java -cp . -Djava.library.path=/home/bibrak/work/JNI_to_MPI/ simpleJNI_MPI
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29086] mca: base: component_find: unable to open /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap: /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29085] mca: base: component_find: unable to open /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap: /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29085] mca: base: component_find: unable to open /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix: /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix.so: undefined symbol: opal_shmem_base_framework (ignored)
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29086] mca: base: component_find: unable to open /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix: /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix.so: undefined symbol: opal_shmem_base_framework (ignored)
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29086] mca: base: component_find: unable to open /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv: /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29085] mca: base: component_find: unable to open /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv: /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   opal_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ompi_mpi_init: ompi_rte_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29086] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt;   Process name: [[41236,1],1]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a thread that I found where the Open MPI developers were having issues while integrating mpiJava into their stack.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://mail-archives.apache.org/mod_mbox/hadoop-common-dev/201202.mbox/%3C5EA543BD-A12E-4729-B66A-C746BC789EC3&#64;open-mpi.org%3E">http://mail-archives.apache.org/mod_mbox/hadoop-common-dev/201202.mbox/%3C5EA543BD-A12E-4729-B66A-C746BC789EC3&#64;open-mpi.org%3E</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have better understanding of the internals of Open MPI, so my question is how to use Open MPI using JNI wrappers? Any guidelines in this regard?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Bibrak
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;JNI_to_MPI.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14335.php">http://www.open-mpi.org/community/lists/devel/2014/03/14335.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14336/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14337.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Previous message:</strong> <a href="14335.php">Bibrak Qamar: "[OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>In reply to:</strong> <a href="14335.php">Bibrak Qamar: "[OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14337.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
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
