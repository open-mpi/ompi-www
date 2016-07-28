<?
$subject_val = "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 13:16:18 2014" -->
<!-- isoreceived="20140324171618" -->
<!-- sent="Mon, 24 Mar 2014 17:16:15 +0000" -->
<!-- isosent="20140324171615" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails" -->
<!-- id="4E77B6D0-030E-4122-91CD-1D4DCE568EC6_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANFHntA3YhPEYxZGGk+rQ3KFdqOErRot3SR_6875CyyH1+HjyA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-24 13:16:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14385.php">Wang,Yanfei(SYS): "[OMPI devel] example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<li><strong>Previous message:</strong> <a href="14383.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14346.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14398.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Reply:</strong> <a href="14398.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 14, 2014, at 9:29 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It works for Open MPI but for MPICH3 I have to comment the dlopen. Is there any way to tell the compiler if its using Open MPI (mpicc) then use dlopen else keep it commented? Or some thing else?
</span><br>
<p>If Open MPI's mpi.h, we have defined OPEN_MPI.  You can therefore use #if defined (OPEN_MPI).
<br>
<p><span class="quotelev1">&gt; Yes, there are some places where we need to be sync with the internals of the native MPI implementation. These are in section 8.1.2 of MPI 2.1 (<a href="http://www.mpi-forum.org/docs/mpi-2.1/mpi21-report.pdf">http://www.mpi-forum.org/docs/mpi-2.1/mpi21-report.pdf</a>). For example the MPI_TAG_UB. For the pure Java devices of MPJ Express we have always used Integer.MAX_VALUE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Datatypes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPJ Express uses an internal buffering layer to buffer the user data into a ByteBuffer. In this way for the native device we end up using the MPI_BYTE datatype most of the time. ByteBuffer simplifies matters since it is directly accessible from the native code.
</span><br>
<p>Does that mean you can't do heterogeneous?  (not really a huge deal, since most people don't run heterogeneously, but something to consider)
<br>
<p><span class="quotelev1">&gt; With our current implementation there is one exception to it i.e. in the Reduce, Allreduce and Reduce_scatter where the native MPI implementation needs to know which Java datatype its going to process. Same goes for MPI.Op
</span><br>
<p>And Accumulate and the other Op-using functions, right?
<br>
<p><span class="quotelev1">&gt; On Are your bindings similar in style/signature to ours?
</span><br>
<p>No, they use the real datatypes.
<br>
<p><span class="quotelev1">&gt; I checked it and there are differences. MPJ Express (and FastMPJ also) implements the mpiJava 1.2 specifications. There is also MPJ API (this is very close to mpiJava 1.2 API). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Example 1: Getting the rank and size of COMM_WORLD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPJ Express (the mpiJava 1.2 API):
</span><br>
<span class="quotelev1">&gt;  public int Size() throws MPIException;
</span><br>
<span class="quotelev1">&gt;  public int Rank() throws MPIException;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPJ API:
</span><br>
<span class="quotelev1">&gt;  public int size() throws MPJException;
</span><br>
<span class="quotelev1">&gt;  public int rank() throws MPJException;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI's Java bindings:
</span><br>
<span class="quotelev1">&gt;  public final int getRank() throws MPIException;
</span><br>
<span class="quotelev1">&gt;  public final int getSize() throws MPIException;
</span><br>
<p>Right -- we *started* with the old ideas, but then made the conscious choice to update the Java bindings in a few ways:
<br>
<p>- make them more like modern Java conventions (e.g., camel case, use verbs, etc.)
<br>
- get rid of MPI.OBJECT
<br>
- use modern, efficient Java practices
<br>
- basically, we didn't want to be bound by any Java decisions that were made long ago that aren't necessarily relevant any more
<br>
- and to be clear: we couldn't find many existing Java MPI codes, so compatibility with existing Java MPI codes was not a big concern
<br>
<p>One thing we didn't do was use bounce buffers for small messages, which shows up in your benchmarks.  We're considering adding that optimization, and others.
<br>
<p><span class="quotelev1">&gt; Example 2: Point-to-Point communication
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPJ Express (the mpiJava 1.2 API):
</span><br>
<span class="quotelev1">&gt;  public void Send(Object buf, int offset, int count, Datatype datatype, int dest, int tag) throws MPIException 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  public Status Recv(Object buf, int offset, int count, Datatype datatype, 
</span><br>
<span class="quotelev1">&gt;       int source, int tag) throws MPIException
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPJ API:
</span><br>
<span class="quotelev1">&gt;  public void send(Object buf, int offset, int count, Datatype datatype, int dest, int tag) throws MPJException;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  public Status recv(Object buf, int offset, int count, Datatype datatype, int source, int tag) throws MPJException
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI's Java bindings:
</span><br>
<span class="quotelev1">&gt;  public final void send(Object buf, int count, Datatype type, int dest, int tag) throws MPIException
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  public final Status recv(Object buf, int count, Datatype type, int source, int tag) throws MPIException
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Example 3: Collective communication
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPJ Express (the mpiJava 1.2 API):
</span><br>
<span class="quotelev1">&gt;  public void Bcast(Object buf, int offset, int count, Datatype type, int root)
</span><br>
<span class="quotelev1">&gt;       throws MPIException;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPJ API:
</span><br>
<span class="quotelev1">&gt;  public void bcast(Object buffer, int offset, int count, Datatype datatype, int root) throws MPJException;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI's Java bindings:
</span><br>
<span class="quotelev1">&gt;  public final void bcast(Object buf, int count, Datatype type, int root) throws MPIException;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I couldn't find which API the Open MPI's Java bindings implement?
</span><br>
<p>Our own.  :-)
<br>
<p><span class="quotelev1">&gt; But while reading your README.JAVA.txt and your code I realised that you are trying to avoid buffering overhead by giving the user the flexibility to directly allocate data onto a ByteBuffer using MPI.new&lt;Type&gt;Buffer, hence not following the mpiJava 1.2 specs (for communication operations)?
</span><br>
<p>Correct.
<br>
<p><span class="quotelev1">&gt; On Performance Comparison
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes this is interesting, I have managed to do two kind of tests: Ping-Pong (Latency and Bandwidth) and Collective Communications (Bcast).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached are graphs and the programs (testcases) that I used. The tests were done using Infiniband, more on the platform here <a href="http://www.nust.edu.pk/INSTITUTIONS/Centers/RCMS/AboutUs/facilities/screc/Pages/Resources.aspx">http://www.nust.edu.pk/INSTITUTIONS/Centers/RCMS/AboutUs/facilities/screc/Pages/Resources.aspx</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One reason for Open MPI's java bindings low performance (in the Bandwidth.png graph) is the way the test case was written (Bandwidth_OpenMPi.java). It allocates a total of 16M of byte array and uses the same array in send/recv for each data point (by varying count). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This could be mainly because of the following code in mpi_Comm.c (let me know if I am mistaken)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void* getArrayPtr(void** bufBase, JNIEnv *env,
</span><br>
<span class="quotelev1">&gt;                          jobject buf, int baseType, int offset)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     switch(baseType)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;            ... 
</span><br>
<span class="quotelev1">&gt;            ...
</span><br>
<span class="quotelev1">&gt;           case 1: {
</span><br>
<span class="quotelev1">&gt;             jbyte* els = (*env)-&gt;GetByteArrayElements(env, buf, NULL);
</span><br>
<span class="quotelev1">&gt;             *bufBase = els;
</span><br>
<span class="quotelev1">&gt;             return els + offset;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;            ... 
</span><br>
<span class="quotelev1">&gt;            ...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Get&lt;PrimitiveType&gt;ArrayElements routine every time gets the entire array even if the user wants to send some elements (the count). This might be one reason for Open MPI' Java bindings to advocate for the MPI.new&lt;Type&gt;Buffer. The other reason is naturally the buffering overhead.
</span><br>
<p>Yes.
<br>
<p>There's *always* going to be a penalty to pay if you don't use native buffers, just due to the nature of Java garbage collection, etc.
<br>
<p><span class="quotelev1">&gt; From the above experience, for the bandwidth of Bcast operation, I modified the test case to only allocate as much array as need for that Bcast and took the results. For a fairer comparison between MPJ Express and Open MPI's Java bindings I didn't use the MPI.new&lt;Type&gt;Buffer.
</span><br>
<p>It would be interesting to see how using the native buffers compares, too -- i.e., are we correct in advocating for the use of native buffers?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14385.php">Wang,Yanfei(SYS): "[OMPI devel] example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<li><strong>Previous message:</strong> <a href="14383.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14346.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14398.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Reply:</strong> <a href="14398.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
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
