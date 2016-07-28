<?
$subject_val = "Re: [OMPI devel] RFC: Bring the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 07:20:55 2010" -->
<!-- isoreceived="20101216122055" -->
<!-- sent="Thu, 16 Dec 2010 13:20:48 +0100" -->
<!-- isosent="20101216122048" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Bring the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk" -->
<!-- id="4D0A0420.9070909_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A4EED636-412F-4088-84B1-D421926A7767_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Bring the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk<br>
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 07:20:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8782.php">Manuel Prinz: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Previous message:</strong> <a href="8780.php">Jeff Squyres: "Re: [OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8867.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8867.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Dec 16, 2010, at 3:31 AM, Pascal Deveze wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I got the assert every time with the following &quot;trivial&quot; code:
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good; let's add this trivial test to ompi-tests.  Do you guys have a set of ROMIO / IO test cases that you run?  I don't think we have many in ompi-tests.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I use the tests under romio/test. Does anyone know other tests ?
<br>
<p><span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_File fh;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Info info, info_used;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_File_open(MPI_COMM_WORLD, &quot;/tmp/A&quot;, MPI_MODE_CREATE | MPI_MODE_RDWR, MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_File_open(MPI_COMM_WORLD, &quot;/tmp/A&quot;, MPI_MODE_CREATE | MPI_MODE_RDWR, MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I run this programon one process : salloc -p debug  -n1 mpirun -np 1 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; And I get teh assertion error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a.out: attribute/attribute.c:763: ompi_attr_delete: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (keyval))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev2">&gt;&gt; [cuzco10:24785] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [cuzco10:24785] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I saw that there is a problem with an MPI_COMM_SELF communicator.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem disappears (and all ROMIO tests are OK) when I comment line 89 in the file ompi/mca/io/romio/romio/adio/common/ad_close.c :
</span><br>
<span class="quotelev2">&gt;&gt;      // MPI_Comm_free(&amp;(fd-&gt;comm));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem disappears (and all ROMIO tests are OK) when I comment line 425 in the file ompi/mca/io/romio/romio/adio/common/cb_config_list.c :
</span><br>
<span class="quotelev2">&gt;&gt;    //  MPI_Keyval_free(&amp;keyval);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem also disappears (but only 50% of the ROMIO tests are OK) when I comment line 133 in the file ompi/runtime/ompi_mpi_finalize.c:
</span><br>
<span class="quotelev2">&gt;&gt;       // ompi_attr_delete_all(COMM_ATTR, &amp;ompi_mpi_comm_self,
</span><br>
<span class="quotelev2">&gt;&gt;      //                             ompi_mpi_comm_self.comm.c_keyhash);
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It sounds like there's a problem with the ordering of shutdown of things in MPI_FINALIZE w.r.t. ROMIO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: ROMIO violates some of our abstractions, but it's the price we pay for using a 3rd party package.  One very, very important abstraction that we have is that no top-level MPI API functions are not allowed to call any other MPI API functions.  E.g., MPI_Send (i.e., ompi/mpi/c/send.c) cannot call MPI_Isend (i.e., ompi/mpi/c/isend.c).  MPI_Send *can* call the same back-end implementation functions that isend does -- it's just not allowed to call MPI_&lt;foo&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason is that the top-level MPI API functions do things like check for whether MPI_INIT / MPI_FINALIZE have been called, etc.  The back-end functions do not do this.  Additionally, top-level MPI API functions may be overridden via PMPI kinds of things.  We wouldn't want our internal library calls to get intercepted by user code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I am not very familiar with the OBJ_RELEASE/OBJ_RETAIN mechanism and till now I do not understand what is the real origin of that problem.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RETAIN/RELEASE is part of OMPI's &quot;poor man's C++&quot; design.  Waaaay back in the beginning of the project, we debated whether to use C or C++ for developing the code.  There was a desire to use some of the basic object functionality of C++ (e.g., derived classes, constructors, destructors, etc.), but we wanted to stay as portable as possible.  So we ended up going with C, but with a few macros that emulate some C++-like functionality.  This led to OMPI's OBJ system that is used all over the place.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OBJ system does several things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - allows you to have &quot;constructor&quot;- and &quot;destructor&quot;-like behavior for structs
</span><br>
<span class="quotelev1">&gt; - works for both stack and heap memory
</span><br>
<span class="quotelev1">&gt; - reference counting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reference counting is perhaps the most-used function of OBJ.  Here's a sample scenario:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* allocate some memory, call the some_object_type &quot;constructor&quot;,
</span><br>
<span class="quotelev1">&gt;    and set the reference count of &quot;foo&quot; to 1 */
</span><br>
<span class="quotelev1">&gt; foo = OBJ_NEW(some_object_type);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* increment the reference count of foo (to 2) */
</span><br>
<span class="quotelev1">&gt; OBJ_RETAIN(foo);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* increment the reference count of foo (to 3) */
</span><br>
<span class="quotelev1">&gt; OBJ_RETAIN(foo);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* decrement the reference count of foo (to 1) */
</span><br>
<span class="quotelev1">&gt; OBJ_RELEASE(foo);
</span><br>
<span class="quotelev1">&gt; OBJ_RELEASE(foo);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* decrement the reference count of foo to 0 -- which will
</span><br>
<span class="quotelev1">&gt;    call foo's &quot;destructor&quot; and then free the memory */
</span><br>
<span class="quotelev1">&gt; OBJ_RELEASE(foo);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same principle works for structs on the stack -- we do the same constructor / destructor behavior, but just don't free the memory.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Instantiate the memory and call its &quot;constructor&quot; and set the
</span><br>
<span class="quotelev1">&gt;    ref count to 1 */
</span><br>
<span class="quotelev1">&gt; some_object_type foo;
</span><br>
<span class="quotelev1">&gt; OBJ_CONSTRUCT(&amp;foo, some_object_type);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Increment and decrement the ref count */
</span><br>
<span class="quotelev1">&gt; OBJ_RETAIN(&amp;foo);
</span><br>
<span class="quotelev1">&gt; OBJ_RETAIN(&amp;foo);
</span><br>
<span class="quotelev1">&gt; OBJ_RELEASE(&amp;foo);
</span><br>
<span class="quotelev1">&gt; OBJ_RELEASE(&amp;foo);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* The last RELEASE will call the destructor, but won't actually
</span><br>
<span class="quotelev1">&gt;    free the memory, because the memory was not allocated with 
</span><br>
<span class="quotelev1">&gt;    OBJ_NEW */
</span><br>
<span class="quotelev1">&gt; OBJ_RELEASE(&amp;foo);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When the destructor is called, the OBJ system sets the magic number in the obj's memory to a sentinel value so that we know that the destructor has been called on this particular struct.  Hence, if we call OBJ_RELEASE *again* on a struct that has already had its ref count go to 0 (and therefore already had its destructor called), we get the assert error that you're seeing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So to be totally clear: the assert error you're seeing is because some OBJ is (effectively) getting its ref count decremented below zero.  Which means it's trying to get destroyed twice.  Which means the ordering sequence of stuff in the ROMIO shutdown / MPI_FINALIZE is likely not right.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Thanks for these explanations. That is what I suspected: I have to dive 
<br>
more in that code ...
<br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; That problem appears only with the debug mode activated (that is activated if you have the .hg directory).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It most likely also happens when debug is not activated, but you don't get an assert failure.  That is, the same problem still occurs (i.e., you're writing to bad memory, or an object is getting RELEASE'ed that no longer exists), but you're just getting lucky that it doesn't trigger a segv or some other fatal process error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8781/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8782.php">Manuel Prinz: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Previous message:</strong> <a href="8780.php">Jeff Squyres: "Re: [OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8867.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8867.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
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
