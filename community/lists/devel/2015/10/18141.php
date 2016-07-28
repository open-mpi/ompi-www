<?
$subject_val = "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 13:17:55 2015" -->
<!-- isoreceived="20151006171755" -->
<!-- sent="Tue, 6 Oct 2015 17:17:50 +0000" -->
<!-- isosent="20151006171750" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program" -->
<!-- id="343AF7DF-BD12-4903-B0FC-CD032DD0DFAA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1967424425.108084.1443924742940.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 13:17:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Previous message:</strong> <a href="18140.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>In reply to:</strong> <a href="18138.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 3, 2015, at 10:12 PM, Dahai Guo &lt;dahaiguo2004_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Jeff. I am trying to understand in detail how Open MPI works in the run time. What main functions does it call to select and initialize the coll components?
</span><br>
<p>In general, each framework (e.g., coll, pml, ...etc.) is polled during MPI_INIT.  The framework base will open its components and (generally) query each one.  Some frameworks are many-of-many (i.e., every component that wants to be used will be kept open and considered), other frameworks are one-of-many (i.e., somehow one component will be selected as &quot;best&quot; and that will be the only one that will be kept open / potentially used).
<br>
<p>The coll framework selection functionality, for example, is in ompi/mca/coll/base/.
<br>
<p>The coll framework is initialized during MPI_INIT via an MCA base generic framework initialization function.  coll is a many-of-many framework; all components that say that they might be able to be run are kept.
<br>
<p>After that, whenever a communicator is created/constructed, the code in ompi/mca/coll/base/mca_base_comm_select.c is fired.  I.e., we select the union of coll modules that will be used for each communicator.  You can mix and match modules on a single communicator.  For example, you can have a bcast from one module and an alltoall from another module.
<br>
<p>Each component is polled for the new communicator and asked if it wants to run.  IIRC, it returns a module if it wants to run on that communicator, or NULL if it doesn't.  I forget offhand whether we stack-rank *all* available modules (in a sigaction kind of way), or just take the highest-prioritized module for each collective operation (check the code).  Regardless, the function pointers for each collective operation are set on the communicator itself.
<br>
<p>Then when MPI_BCAST is invoked, for example, we just invoke function pointer that's hanging off the communicator for the bcast operation.
<br>
<p>Make sense?
<br>
<p>You'll need to look into the code for the details, but this is a 50,000 description that should get you started.
<br>
<p><span class="quotelev1">&gt; Using the &quot;helloworld&quot; as an example,  how does it select and initialize the MPI_Barrier algorithm?  which C functions are involved and used in the process? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dahai
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Friday, October 2, 2015 7:50 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 2, 2015, at 2:21 PM, Dahai Guo &lt;dahaiguo2004_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there any way to trace open mpi internal function calls in a MPI user program?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, not easily -- other than using a debugger, for example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If so, can any one explain it with an example? such as helloworld?  I build open MPI with the VampirTrace options, and compile the following program with picc-vt,. but I didn't get any tracing info. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI is a giant state machine -- MPI_INIT, for example, invokes slightly fewer than a bazillion functions (e.g., it initializes every framework and many components/plugins).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there something in particular that you're looking for / want to know about?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; D. G.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; int main (int argc, char **argv)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;  int rank, size;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt; &gt;  printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;  return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18125.php">http://www.open-mpi.org/community/lists/devel/2015/10/18125.php</a>
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Previous message:</strong> <a href="18140.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>In reply to:</strong> <a href="18138.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
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
