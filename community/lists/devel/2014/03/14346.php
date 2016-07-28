<?
$subject_val = "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 09:30:13 2014" -->
<!-- isoreceived="20140314133013" -->
<!-- sent="Fri, 14 Mar 2014 18:29:49 +0500" -->
<!-- isosent="20140314132949" -->
<!-- name="Bibrak Qamar" -->
<!-- email="bibrakc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails" -->
<!-- id="CANFHntA3YhPEYxZGGk+rQ3KFdqOErRot3SR_6875CyyH1+HjyA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] Loading Open MPI from MPJ Express (Java) fails" -->
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
<strong>From:</strong> Bibrak Qamar (<em>bibrakc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-14 09:29:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14347.php">Adrian Reber: "[OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Previous message:</strong> <a href="14345.php">Josh Hursey: "Re: [OMPI devel] orte-restart and PATH"</a>
<li><strong>Maybe in reply to:</strong> <a href="14335.php">Bibrak Qamar: "[OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14384.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Reply:</strong> <a href="14384.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And I managed to run Open MPI with MPJ Express. I added the following code
<br>
and it worked like a charm.
<br>
<p>*In Java*
<br>
&nbsp;&nbsp;/*
<br>
&nbsp;&nbsp;&nbsp;* Static Block for loading the libnativempjdev.so
<br>
&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;static {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;System.loadLibrary(&quot;nativempjdev&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if(!loadGlobalLibraries()) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(&quot;MPJ Express failed to load required libraries&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>*In C*
<br>
<p>JNIEXPORT jboolean JNICALL Java_mpjdev_natmpjdev_Comm_loadGlobalLibraries
<br>
&nbsp;(JNIEnv *env, jclass thisObject) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//This will make sure the library is loaded
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// in the case of Open MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == (mpilibhandle = dlopen(&quot;libmpi.so&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RTLD_NOW | RTLD_GLOBAL))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return JNI_FALSE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return JNI_TRUE;
<br>
}
<br>
<p>It works for Open MPI but for MPICH3 I have to comment the dlopen. Is there
<br>
any way to tell the compiler if its using Open MPI (mpicc) then use dlopen
<br>
else keep it commented? Or some thing else?
<br>
<p>*On Java bindings to have some insight into the internals of the MPI
<br>
implementation*
<br>
<p>Yes, there are some places where we need to be sync with the internals of
<br>
the native MPI implementation. These are in section 8.1.2 of MPI 2.1 (
<br>
<a href="http://www.mpi-forum.org/docs/mpi-2.1/mpi21-report.pdf">http://www.mpi-forum.org/docs/mpi-2.1/mpi21-report.pdf</a>). For example the
<br>
MPI_TAG_UB. For the pure Java devices of MPJ Express we have always used
<br>
Integer.MAX_VALUE.
<br>
<p>*Datatypes?*
<br>
<p>MPJ Express uses an internal buffering layer to buffer the user data into a
<br>
ByteBuffer. In this way for the native device we end up using the
<br>
MPI_BYTEdatatype most of the time. ByteBuffer
<br>
simplifies matters since it is directly accessible from the native code.
<br>
<p>With our current implementation there is one exception to it i.e. in the
<br>
Reduce, Allreduce and Reduce_scatter where the native MPI implementation
<br>
needs to know which Java datatype its going to process. Same goes for MPI.Op
<br>
<p>*On Are your bindings similar in style/signature to ours?*
<br>
<p>I checked it and there are differences. MPJ Express (and FastMPJ also)
<br>
implements the mpiJava 1.2 specifications. There is also MPJ API (this is
<br>
very close to mpiJava 1.2 API).
<br>
<p>*Example 1: Getting the rank and size of COMM_WORLD*
<br>
<p>*MPJ Express (the mpiJava 1.2 API):*
<br>
&nbsp;public int Size() throws MPIException;
<br>
&nbsp;public int Rank() throws MPIException;
<br>
<p>*MPJ API:*
<br>
&nbsp;public int size() throws MPJException;
<br>
&nbsp;public int rank() throws MPJException;
<br>
<p>*Open MPI's Java bindings:*
<br>
&nbsp;public final int getRank() throws MPIException;
<br>
&nbsp;public final int getSize() throws MPIException;
<br>
<p>*Example 2: Point-to-Point communication*
<br>
<p>*MPJ Express (the mpiJava 1.2 API):*
<br>
&nbsp;public void Send(Object buf, int offset, int count, Datatype datatype, int
<br>
dest, int tag) throws MPIException
<br>
<p>&nbsp;public Status Recv(Object buf, int offset, int count, Datatype datatype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int source, int tag) throws MPIException
<br>
<p>*MPJ API:*
<br>
&nbsp;public void send(Object buf, int offset, int count, Datatype datatype, int
<br>
dest, int tag) throws MPJException;
<br>
<p>&nbsp;public Status recv(Object buf, int offset, int count, Datatype datatype,
<br>
int source, int tag) throws MPJException
<br>
<p>*Open MPI's Java bindings:*
<br>
&nbsp;public final void send(Object buf, int count, Datatype type, int dest, int
<br>
tag) throws MPIException
<br>
<p>&nbsp;public final Status recv(Object buf, int count, Datatype type, int source,
<br>
int tag) throws MPIException
<br>
<p>*Example 3: Collective communication*
<br>
<p>*MPJ Express (the mpiJava 1.2 API):*
<br>
&nbsp;public void Bcast(Object buf, int offset, int count, Datatype type, int
<br>
root)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throws MPIException;
<br>
<p>*MPJ API:*
<br>
&nbsp;public void bcast(Object buffer, int offset, int count, Datatype datatype,
<br>
int root) throws MPJException;
<br>
<p><p>*Open MPI's Java bindings:* public final void bcast(Object buf, int count,
<br>
Datatype type, int root) throws MPIException;
<br>
<p><p>I couldn't find which API the Open MPI's Java bindings implement? But while
<br>
reading your README.JAVA.txt and your code I realised that you are trying
<br>
to avoid buffering overhead by giving the user the flexibility to directly
<br>
allocate data onto a ByteBuffer using MPI.new&lt;Type&gt;Buffer, hence not
<br>
following the mpiJava 1.2 specs (for communication operations)?
<br>
<p><p>*On Performance Comparison*
<br>
<p>Yes this is interesting, I have managed to do two kind of tests: Ping-Pong
<br>
(Latency and Bandwidth) and Collective Communications (Bcast).
<br>
<p>Attached are graphs and the programs (testcases) that I used. The tests
<br>
were done using Infiniband, more on the platform here
<br>
<a href="http://www.nust.edu.pk/INSTITUTIONS/Centers/RCMS/AboutUs/facilities/screc/Pages/Resources.aspx">http://www.nust.edu.pk/INSTITUTIONS/Centers/RCMS/AboutUs/facilities/screc/Pages/Resources.aspx</a>
<br>
<p>One reason for Open MPI's java bindings low performance (in the
<br>
Bandwidth.png graph) is the way the test case was written
<br>
(Bandwidth_OpenMPi.java). It allocates a total of 16M of byte array and
<br>
uses the same array in send/recv for each data point (by varying count).
<br>
<p>This could be mainly because of the following code in mpi_Comm.c (let me
<br>
know if I am mistaken)
<br>
<p>static void* getArrayPtr(void** bufBase, JNIEnv *env,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jobject buf, int baseType, int offset)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;switch(baseType)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 1: {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jbyte* els = (*env)-&gt;GetByteArrayElements(env, buf, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*bufBase = els;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return els + offset;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
}
<br>
<p>Get&lt;PrimitiveType&gt;ArrayElements routine every time gets the entire array
<br>
even if the user wants to send some elements (the count). This might be one
<br>
reason for Open MPI' Java bindings to advocate for the MPI.new&lt;Type&gt;Buffer.
<br>
The other reason is naturally the buffering overhead.
<br>
<p><span class="quotelev1">&gt;From the above experience, for the bandwidth of Bcast operation, I modified
</span><br>
the test case to only allocate as much array as need for that Bcast and
<br>
took the results. For a fairer comparison between MPJ Express and Open
<br>
MPI's Java bindings I didn't use the MPI.new&lt;Type&gt;Buffer.
<br>
<p>regards
<br>
Bibrak Qamar
<br>
<p><p><p>On Wed, Mar 12, 2014 at 6:42 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Here's what I had to do to load the library correctly (we were only using
</span><br>
<span class="quotelev1">&gt; ORTE, so substitute &quot;libmpi&quot;) - this was called at the beginning of &quot;init&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* first, load the required ORTE library */
</span><br>
<span class="quotelev1">&gt; #if OPAL_WANT_LIBLTDL
</span><br>
<span class="quotelev1">&gt;     lt_dladvise advise;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (lt_dlinit() != 0) {
</span><br>
<span class="quotelev1">&gt;         fprintf(stderr, &quot;LT_DLINIT FAILED - CANNOT LOAD LIBMRPLUS\n&quot;);
</span><br>
<span class="quotelev1">&gt;         return JNI_FALSE;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if OPAL_HAVE_LTDL_ADVISE
</span><br>
<span class="quotelev1">&gt;     /* open the library into the global namespace */
</span><br>
<span class="quotelev1">&gt;     if (lt_dladvise_init(&amp;advise)) {
</span><br>
<span class="quotelev1">&gt;         fprintf(stderr, &quot;LT_DLADVISE INIT FAILED - CANNOT LOAD
</span><br>
<span class="quotelev1">&gt; LIBMRPLUS\n&quot;);
</span><br>
<span class="quotelev1">&gt;         return JNI_FALSE;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (lt_dladvise_ext(&amp;advise)) {
</span><br>
<span class="quotelev1">&gt;         fprintf(stderr, &quot;LT_DLADVISE EXT FAILED - CANNOT LOAD
</span><br>
<span class="quotelev1">&gt; LIBMRPLUS\n&quot;);
</span><br>
<span class="quotelev1">&gt;         lt_dladvise_destroy(&amp;advise);
</span><br>
<span class="quotelev1">&gt;         return JNI_FALSE;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (lt_dladvise_global(&amp;advise)) {
</span><br>
<span class="quotelev1">&gt;         fprintf(stderr, &quot;LT_DLADVISE GLOBAL FAILED - CANNOT LOAD
</span><br>
<span class="quotelev1">&gt; LIBMRPLUS\n&quot;);
</span><br>
<span class="quotelev1">&gt;         lt_dladvise_destroy(&amp;advise);
</span><br>
<span class="quotelev1">&gt;         return JNI_FALSE;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* we don't care about the return value
</span><br>
<span class="quotelev1">&gt;      * on dlopen - it might return an error
</span><br>
<span class="quotelev1">&gt;      * because the lib is already loaded,
</span><br>
<span class="quotelev1">&gt;      * depending on the way we were built
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     lt_dlopenadvise(&quot;libopen-rte&quot;, advise);
</span><br>
<span class="quotelev1">&gt;     lt_dladvise_destroy(&amp;advise);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;     fprintf(stderr, &quot;NO LT_DLADVISE - CANNOT LOAD LIBMRPLUS\n&quot;);
</span><br>
<span class="quotelev1">&gt;     /* need to balance the ltdl inits */
</span><br>
<span class="quotelev1">&gt;     lt_dlexit();
</span><br>
<span class="quotelev1">&gt;     /* if we don't have advise, then we are hosed */
</span><br>
<span class="quotelev1">&gt;     return JNI_FALSE;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;     /* if dlopen was disabled, then all symbols
</span><br>
<span class="quotelev1">&gt;      * should have been pulled up into the libraries,
</span><br>
<span class="quotelev1">&gt;      * so we don't need to do anything as the symbols
</span><br>
<span class="quotelev1">&gt;      * are already available.
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2014, at 6:32 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Check out how we did this with the embedded java bindings in Open MPI;
</span><br>
<span class="quotelev1">&gt; see the comment describing exactly this issue starting here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/java/c/mpi_MPI.c#L79">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/java/c/mpi_MPI.c#L79</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Feel free to compare MPJ to the OMPI java bindings -- they're shipping
</span><br>
<span class="quotelev1">&gt; in 1.7.4 and have a bunch of improvements in the soon-to-be-released 1.7.5,
</span><br>
<span class="quotelev1">&gt; but you must enable them since they aren't enabled by default:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    ./configure --enable-mpi-java ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, we found a few places in the Java bindings where it was necessary
</span><br>
<span class="quotelev1">&gt; for the bindings to have some insight into the internals of the MPI
</span><br>
<span class="quotelev1">&gt; implementation.  Did you find the same thing with MPJ Express?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are your bindings similar in style/signature to ours?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 12, 2014, at 6:40 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am writing a new device for MPJ Express that uses a native MPI
</span><br>
<span class="quotelev1">&gt; library for communication. Its based on JNI wrappers like the original
</span><br>
<span class="quotelev1">&gt; mpiJava. The device works fine with MPICH3  (and MVAPICH2.2). Here is the
</span><br>
<span class="quotelev1">&gt; issue with loading Open MPI 1.7.4 from MPJ Express.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have generated the following error message from a simple JNI to MPI
</span><br>
<span class="quotelev1">&gt; application for clarity purposes and also to regenerate the error easily. I
</span><br>
<span class="quotelev1">&gt; have attached the app for your consideration.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [bibrak_at_localhost JNI_to_MPI]$ mpirun -np 2 java -cp .
</span><br>
<span class="quotelev1">&gt; -Djava.library.path=/home/bibrak/work/JNI_to_MPI/ simpleJNI_MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [localhost.localdomain:29086] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap:
</span><br>
<span class="quotelev1">&gt; /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [localhost.localdomain:29085] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap:
</span><br>
<span class="quotelev1">&gt; /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_mmap.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [localhost.localdomain:29085] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix:
</span><br>
<span class="quotelev1">&gt; /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: opal_shmem_base_framework (ignored)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [localhost.localdomain:29086] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix:
</span><br>
<span class="quotelev1">&gt; /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_posix.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: opal_shmem_base_framework (ignored)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [localhost.localdomain:29086] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv:
</span><br>
<span class="quotelev1">&gt; /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  opal_shmem_base_select failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [localhost.localdomain:29085] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv:
</span><br>
<span class="quotelev1">&gt; /home/bibrak/work/installs/OpenMPI_installed/lib/openmpi/mca_shmem_sysv.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  opal_init failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  ompi_mpi_init: ompi_rte_init failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [localhost.localdomain:29086] Local abort before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt; successfully; not able to aggregate error messages, and not able to
</span><br>
<span class="quotelev1">&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  opal_shmem_base_select failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Process name: [[41236,1],1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Exit code:    1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is a thread that I found where the Open MPI developers were having
</span><br>
<span class="quotelev1">&gt; issues while integrating mpiJava into their stack.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://mail-archives.apache.org/mod_mbox/hadoop-common-dev/201202.mbox/%3C5EA543BD-A12E-4729-B66A-C746BC789EC3&#64;open-mpi.org%3E">http://mail-archives.apache.org/mod_mbox/hadoop-common-dev/201202.mbox/%3C5EA543BD-A12E-4729-B66A-C746BC789EC3&#64;open-mpi.org%3E</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't have better understanding of the internals of Open MPI, so my
</span><br>
<span class="quotelev1">&gt; question is how to use Open MPI using JNI wrappers? Any guidelines in this
</span><br>
<span class="quotelev1">&gt; regard?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Bibrak
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;JNI_to_MPI.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14335.php">http://www.open-mpi.org/community/lists/devel/2014/03/14335.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14337.php">http://www.open-mpi.org/community/lists/devel/2014/03/14337.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14338.php">http://www.open-mpi.org/community/lists/devel/2014/03/14338.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>



<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14346/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14346/testcases.tar.gz">testcases.tar.gz</a>
</ul>
<!-- attachment="testcases.tar.gz" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-14346/Bandwidth.png" alt="Bandwidth.png">
<!-- attachment="Bandwidth.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-14346/bcast_bandwidth.png" alt="bcast_bandwidth.png">
<!-- attachment="bcast_bandwidth.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-14346/Latency.png" alt="Latency.png">
<!-- attachment="Latency.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14347.php">Adrian Reber: "[OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Previous message:</strong> <a href="14345.php">Josh Hursey: "Re: [OMPI devel] orte-restart and PATH"</a>
<li><strong>Maybe in reply to:</strong> <a href="14335.php">Bibrak Qamar: "[OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14384.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Reply:</strong> <a href="14384.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
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
