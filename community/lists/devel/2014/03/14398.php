<?
$subject_val = "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 14:10:52 2014" -->
<!-- isoreceived="20140326181052" -->
<!-- sent="Wed, 26 Mar 2014 23:10:30 +0500" -->
<!-- isosent="20140326181030" -->
<!-- name="Bibrak Qamar" -->
<!-- email="bibrakc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails" -->
<!-- id="CANFHntDxWp4_FLVr8vfNtuz46wf7EurDPYeoybPmmHZdefhpqQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E77B6D0-030E-4122-91CD-1D4DCE568EC6_at_cisco.com" -->
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
<strong>Date:</strong> 2014-03-26 14:10:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14399.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;: 	&#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<li><strong>Previous message:</strong> <a href="14397.php">Ralph Castain: "Re: [OMPI devel] &#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<li><strong>In reply to:</strong> <a href="14384.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14425.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Reply:</strong> <a href="14425.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1) By heterogeneous do you mean Derived Datatypes?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPJ Express's buffering layer handles this. It flattens the data
<br>
into a ByteBuffer. In this way native device doesn't have to worry about
<br>
Derived Datatypes (those things are handled at top layers). And an
<br>
interesting thing, intuitively Java users would use the MPI.OBJECT if there
<br>
is heterogeneous data to be sent (but yes, MPI.OBJECT is a slow case  ...)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Currently same goes for user defined Op-functions. Those are handled
<br>
at the top layers, i.e using MPJ Express's algorithms not native MPI's (but
<br>
communication is native).
<br>
<p>2) API changes: Do you envision to document the changes to something like a
<br>
mpiJava 1.3 specs or something?
<br>
<p>3) New Benchmark Results:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I did the benchmarking again with various configurations:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i) Open MPI 1.7.4 C
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ii) MVAPICH2.2 C
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iii) MPJ Express (using Open MPI - with arrays)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iv) Open MPI's Java Bindings (with a large user array -- the
<br>
unoptimized case)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v) Open MPI's Java Bindings (with arrays, where size of the user
<br>
array is equal to the data point, to be fair)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vi) MPJ Express (using MVAPICH2.2 - with arrays)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vii) Open MPI's Java Bindings (using MPI.new&lt;Type&gt;Buffer, ByteBuffer)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;viii) MPJ Express (using Open MPI - with ByteBuffer, this is from
<br>
the device layer of MPJ Express, this helps see how MPJ Express could
<br>
perform if in future we add MPI.new&lt;Type&gt;Buffer like functionality)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ix) MPJ Express (using MVAPICH2.2 - with ByteBuffer) --&gt; currently I
<br>
don't know how it performs better than Open MPI?
<br>
<p><p>Bibrak Qamar
<br>
<p><p><p>On Mon, Mar 24, 2014 at 10:16 PM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 14, 2014, at 9:29 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It works for Open MPI but for MPICH3 I have to comment the dlopen. Is
</span><br>
<span class="quotelev1">&gt; there any way to tell the compiler if its using Open MPI (mpicc) then use
</span><br>
<span class="quotelev1">&gt; dlopen else keep it commented? Or some thing else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If Open MPI's mpi.h, we have defined OPEN_MPI.  You can therefore use #if
</span><br>
<span class="quotelev1">&gt; defined (OPEN_MPI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, there are some places where we need to be sync with the internals
</span><br>
<span class="quotelev1">&gt; of the native MPI implementation. These are in section 8.1.2 of MPI 2.1 (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org/docs/mpi-2.1/mpi21-report.pdf">http://www.mpi-forum.org/docs/mpi-2.1/mpi21-report.pdf</a>). For example the
</span><br>
<span class="quotelev1">&gt; MPI_TAG_UB. For the pure Java devices of MPJ Express we have always used
</span><br>
<span class="quotelev1">&gt; Integer.MAX_VALUE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Datatypes?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPJ Express uses an internal buffering layer to buffer the user data
</span><br>
<span class="quotelev1">&gt; into a ByteBuffer. In this way for the native device we end up using the
</span><br>
<span class="quotelev1">&gt; MPI_BYTE datatype most of the time. ByteBuffer simplifies matters since it
</span><br>
<span class="quotelev1">&gt; is directly accessible from the native code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that mean you can't do heterogeneous?  (not really a huge deal, since
</span><br>
<span class="quotelev1">&gt; most people don't run heterogeneously, but something to consider)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; With our current implementation there is one exception to it i.e. in the
</span><br>
<span class="quotelev1">&gt; Reduce, Allreduce and Reduce_scatter where the native MPI implementation
</span><br>
<span class="quotelev1">&gt; needs to know which Java datatype its going to process. Same goes for MPI.Op
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And Accumulate and the other Op-using functions, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Are your bindings similar in style/signature to ours?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, they use the real datatypes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I checked it and there are differences. MPJ Express (and FastMPJ also)
</span><br>
<span class="quotelev1">&gt; implements the mpiJava 1.2 specifications. There is also MPJ API (this is
</span><br>
<span class="quotelev1">&gt; very close to mpiJava 1.2 API).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Example 1: Getting the rank and size of COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPJ Express (the mpiJava 1.2 API):
</span><br>
<span class="quotelev2">&gt; &gt;  public int Size() throws MPIException;
</span><br>
<span class="quotelev2">&gt; &gt;  public int Rank() throws MPIException;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPJ API:
</span><br>
<span class="quotelev2">&gt; &gt;  public int size() throws MPJException;
</span><br>
<span class="quotelev2">&gt; &gt;  public int rank() throws MPJException;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI's Java bindings:
</span><br>
<span class="quotelev2">&gt; &gt;  public final int getRank() throws MPIException;
</span><br>
<span class="quotelev2">&gt; &gt;  public final int getSize() throws MPIException;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right -- we *started* with the old ideas, but then made the conscious
</span><br>
<span class="quotelev1">&gt; choice to update the Java bindings in a few ways:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - make them more like modern Java conventions (e.g., camel case, use
</span><br>
<span class="quotelev1">&gt; verbs, etc.)
</span><br>
<span class="quotelev1">&gt; - get rid of MPI.OBJECT
</span><br>
<span class="quotelev1">&gt; - use modern, efficient Java practices
</span><br>
<span class="quotelev1">&gt; - basically, we didn't want to be bound by any Java decisions that were
</span><br>
<span class="quotelev1">&gt; made long ago that aren't necessarily relevant any more
</span><br>
<span class="quotelev1">&gt; - and to be clear: we couldn't find many existing Java MPI codes, so
</span><br>
<span class="quotelev1">&gt; compatibility with existing Java MPI codes was not a big concern
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One thing we didn't do was use bounce buffers for small messages, which
</span><br>
<span class="quotelev1">&gt; shows up in your benchmarks.  We're considering adding that optimization,
</span><br>
<span class="quotelev1">&gt; and others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Example 2: Point-to-Point communication
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPJ Express (the mpiJava 1.2 API):
</span><br>
<span class="quotelev2">&gt; &gt;  public void Send(Object buf, int offset, int count, Datatype datatype,
</span><br>
<span class="quotelev1">&gt; int dest, int tag) throws MPIException
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  public Status Recv(Object buf, int offset, int count, Datatype datatype,
</span><br>
<span class="quotelev2">&gt; &gt;       int source, int tag) throws MPIException
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPJ API:
</span><br>
<span class="quotelev2">&gt; &gt;  public void send(Object buf, int offset, int count, Datatype datatype,
</span><br>
<span class="quotelev1">&gt; int dest, int tag) throws MPJException;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  public Status recv(Object buf, int offset, int count, Datatype
</span><br>
<span class="quotelev1">&gt; datatype, int source, int tag) throws MPJException
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI's Java bindings:
</span><br>
<span class="quotelev2">&gt; &gt;  public final void send(Object buf, int count, Datatype type, int dest,
</span><br>
<span class="quotelev1">&gt; int tag) throws MPIException
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  public final Status recv(Object buf, int count, Datatype type, int
</span><br>
<span class="quotelev1">&gt; source, int tag) throws MPIException
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Example 3: Collective communication
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPJ Express (the mpiJava 1.2 API):
</span><br>
<span class="quotelev2">&gt; &gt;  public void Bcast(Object buf, int offset, int count, Datatype type, int
</span><br>
<span class="quotelev1">&gt; root)
</span><br>
<span class="quotelev2">&gt; &gt;       throws MPIException;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPJ API:
</span><br>
<span class="quotelev2">&gt; &gt;  public void bcast(Object buffer, int offset, int count, Datatype
</span><br>
<span class="quotelev1">&gt; datatype, int root) throws MPJException;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI's Java bindings:
</span><br>
<span class="quotelev2">&gt; &gt;  public final void bcast(Object buf, int count, Datatype type, int root)
</span><br>
<span class="quotelev1">&gt; throws MPIException;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I couldn't find which API the Open MPI's Java bindings implement?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our own.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; But while reading your README.JAVA.txt and your code I realised that you
</span><br>
<span class="quotelev1">&gt; are trying to avoid buffering overhead by giving the user the flexibility
</span><br>
<span class="quotelev1">&gt; to directly allocate data onto a ByteBuffer using MPI.new&lt;Type&gt;Buffer,
</span><br>
<span class="quotelev1">&gt; hence not following the mpiJava 1.2 specs (for communication operations)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Performance Comparison
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes this is interesting, I have managed to do two kind of tests:
</span><br>
<span class="quotelev1">&gt; Ping-Pong (Latency and Bandwidth) and Collective Communications (Bcast).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Attached are graphs and the programs (testcases) that I used. The tests
</span><br>
<span class="quotelev1">&gt; were done using Infiniband, more on the platform here
</span><br>
<span class="quotelev1">&gt; <a href="http://www.nust.edu.pk/INSTITUTIONS/Centers/RCMS/AboutUs/facilities/screc/Pages/Resources.aspx">http://www.nust.edu.pk/INSTITUTIONS/Centers/RCMS/AboutUs/facilities/screc/Pages/Resources.aspx</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; One reason for Open MPI's java bindings low performance (in the
</span><br>
<span class="quotelev1">&gt; Bandwidth.png graph) is the way the test case was written
</span><br>
<span class="quotelev1">&gt; (Bandwidth_OpenMPi.java). It allocates a total of 16M of byte array and
</span><br>
<span class="quotelev1">&gt; uses the same array in send/recv for each data point (by varying count).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This could be mainly because of the following code in mpi_Comm.c (let me
</span><br>
<span class="quotelev1">&gt; know if I am mistaken)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static void* getArrayPtr(void** bufBase, JNIEnv *env,
</span><br>
<span class="quotelev2">&gt; &gt;                          jobject buf, int baseType, int offset)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     switch(baseType)
</span><br>
<span class="quotelev2">&gt; &gt;     {
</span><br>
<span class="quotelev2">&gt; &gt;            ...
</span><br>
<span class="quotelev2">&gt; &gt;            ...
</span><br>
<span class="quotelev2">&gt; &gt;           case 1: {
</span><br>
<span class="quotelev2">&gt; &gt;             jbyte* els = (*env)-&gt;GetByteArrayElements(env, buf, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;             *bufBase = els;
</span><br>
<span class="quotelev2">&gt; &gt;             return els + offset;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;            ...
</span><br>
<span class="quotelev2">&gt; &gt;            ...
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Get&lt;PrimitiveType&gt;ArrayElements routine every time gets the entire array
</span><br>
<span class="quotelev1">&gt; even if the user wants to send some elements (the count). This might be one
</span><br>
<span class="quotelev1">&gt; reason for Open MPI' Java bindings to advocate for the MPI.new&lt;Type&gt;Buffer.
</span><br>
<span class="quotelev1">&gt; The other reason is naturally the buffering overhead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's *always* going to be a penalty to pay if you don't use native
</span><br>
<span class="quotelev1">&gt; buffers, just due to the nature of Java garbage collection, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; From the above experience, for the bandwidth of Bcast operation, I
</span><br>
<span class="quotelev1">&gt; modified the test case to only allocate as much array as need for that
</span><br>
<span class="quotelev1">&gt; Bcast and took the results. For a fairer comparison between MPJ Express and
</span><br>
<span class="quotelev1">&gt; Open MPI's Java bindings I didn't use the MPI.new&lt;Type&gt;Buffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be interesting to see how using the native buffers compares, too
</span><br>
<span class="quotelev1">&gt; -- i.e., are we correct in advocating for the use of native buffers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14384.php">http://www.open-mpi.org/community/lists/devel/2014/03/14384.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14398/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-14398/Bandwidth.png" alt="Bandwidth.png">
<!-- attachment="Bandwidth.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14399.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;: 	&#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<li><strong>Previous message:</strong> <a href="14397.php">Ralph Castain: "Re: [OMPI devel] &#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<li><strong>In reply to:</strong> <a href="14384.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14425.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Reply:</strong> <a href="14425.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
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
