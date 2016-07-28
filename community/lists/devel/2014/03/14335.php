<?
$subject_val = "[OMPI devel] Loading Open MPI from MPJ Express (Java) fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 06:40:25 2014" -->
<!-- isoreceived="20140312104025" -->
<!-- sent="Wed, 12 Mar 2014 15:40:03 +0500" -->
<!-- isosent="20140312104003" -->
<!-- name="Bibrak Qamar" -->
<!-- email="bibrakc_at_[hidden]" -->
<!-- subject="[OMPI devel] Loading Open MPI from MPJ Express (Java) fails" -->
<!-- id="CANFHntCjGpjsUjOpAEDunT98vM4RZ3Xb28cPo-qcix3gAApNaA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Loading Open MPI from MPJ Express (Java) fails<br>
<strong>From:</strong> Bibrak Qamar (<em>bibrakc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-12 06:40:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14336.php">Ralph Castain: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Previous message:</strong> <a href="14334.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14336.php">Ralph Castain: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Reply:</strong> <a href="14336.php">Ralph Castain: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Reply:</strong> <a href="14337.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Maybe reply:</strong> <a href="14346.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am writing a new device for MPJ Express that uses a native MPI library
<br>
for communication. Its based on JNI wrappers like the original mpiJava. The
<br>
device works fine with MPICH3  (and MVAPICH2.2). Here is the issue with
<br>
loading Open MPI 1.7.4 from MPJ Express.
<br>
<p>I have generated the following error message from a simple JNI to MPI
<br>
application for clarity purposes and also to regenerate the error easily. I
<br>
have attached the app for your consideration.
<br>
<p><p>[bibrak_at_localhost JNI_to_MPI]$ *mpirun -np 2 java -cp .
<br>
-Djava.library.path=/home/**bibrak/work/JNI_to_MPI/ simpleJNI_MPI*
<br>
[localhost.localdomain:29086] mca: base: component_find: unable to open
<br>
/home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap:
<br>
/home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap.so:
<br>
undefined symbol: opal_show_help (ignored)
<br>
[localhost.localdomain:29085] mca: base: component_find: unable to open
<br>
/home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap:
<br>
/home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap.so:
<br>
undefined symbol: opal_show_help (ignored)
<br>
[localhost.localdomain:29085] mca: base: component_find: unable to open
<br>
/home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix:
<br>
/home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix.so:
<br>
undefined symbol: opal_shmem_base_framework (ignored)
<br>
[localhost.localdomain:29086] mca: base: component_find: unable to open
<br>
/home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix:
<br>
/home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix.so:
<br>
undefined symbol: opal_shmem_base_framework (ignored)
<br>
[localhost.localdomain:29086] mca: base: component_find: unable to open
<br>
/home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv:
<br>
/home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv.so:
<br>
undefined symbol: opal_show_help (ignored)
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_shmem_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[localhost.localdomain:29085] mca: base: component_find: unable to open
<br>
/home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv:
<br>
/home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv.so:
<br>
undefined symbol: opal_show_help (ignored)
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_init failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: ompi_rte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[localhost.localdomain:29086] Local abort before MPI_INIT completed
<br>
successfully; not able to aggregate error messages, and not able to
<br>
guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_shmem_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status,
<br>
thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[41236,1],1]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
<p><p>This is a thread that I found where the Open MPI developers were having
<br>
issues while integrating mpiJava into their stack.
<br>
<p><a href="http://mail-archives.apache.org/mod_mbox/hadoop-common-dev/201202.mbox/%3C5EA543BD-A12E-4729-B66A-C746BC789EC3&#64;open-mpi.org%3E">http://mail-archives.apache.org/mod_mbox/hadoop-common-dev/201202.mbox/%3C5EA543BD-A12E-4729-B66A-C746BC789EC3&#64;open-mpi.org%3E</a>
<br>
<p>I don't have better understanding of the internals of Open MPI, so my
<br>
question is how to use Open MPI using JNI wrappers? Any guidelines in this
<br>
regard?
<br>
<p>Thanks
<br>
Bibrak
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14335/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14335/JNI_to_MPI.tar.gz">JNI_to_MPI.tar.gz</a>
</ul>
<!-- attachment="JNI_to_MPI.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14336.php">Ralph Castain: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Previous message:</strong> <a href="14334.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14336.php">Ralph Castain: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Reply:</strong> <a href="14336.php">Ralph Castain: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Reply:</strong> <a href="14337.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Maybe reply:</strong> <a href="14346.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
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
