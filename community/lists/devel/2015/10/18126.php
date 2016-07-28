<?
$subject_val = "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 20:50:26 2015" -->
<!-- isoreceived="20151003005026" -->
<!-- sent="Sat, 3 Oct 2015 00:49:57 +0000" -->
<!-- isosent="20151003004957" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program" -->
<!-- id="81EC8B5E-14A9-4E8E-86BD-5C528D4D5484_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1766148516.423889.1443810113529.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Date:</strong> 2015-10-02 20:49:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18127.php">Gilles Gouaillardet: "Re: [OMPI devel] Access to old users@ and devel@ Open MPI mails"</a>
<li><strong>Previous message:</strong> <a href="18125.php">Dahai Guo: "[OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>In reply to:</strong> <a href="18125.php">Dahai Guo: "[OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18138.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<li><strong>Reply:</strong> <a href="18138.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 2, 2015, at 2:21 PM, Dahai Guo &lt;dahaiguo2004_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any way to trace open mpi internal function calls in a MPI user program?
</span><br>
<p>Unfortunately, not easily -- other than using a debugger, for example.
<br>
<p><span class="quotelev1">&gt; If so, can any one explain it with an example? such as helloworld?  I build open MPI with the VampirTrace options, and compile the following program with picc-vt,. but I didn't get any tracing info. 
</span><br>
<p>Open MPI is a giant state machine -- MPI_INIT, for example, invokes slightly fewer than a bazillion functions (e.g., it initializes every framework and many components/plugins).
<br>
<p>Is there something in particular that you're looking for / want to know about?
<br>
<p><span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; D. G.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int rank, size;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;   printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev1">&gt;   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18125.php">http://www.open-mpi.org/community/lists/devel/2015/10/18125.php</a>
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
<li><strong>Next message:</strong> <a href="18127.php">Gilles Gouaillardet: "Re: [OMPI devel] Access to old users@ and devel@ Open MPI mails"</a>
<li><strong>Previous message:</strong> <a href="18125.php">Dahai Guo: "[OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>In reply to:</strong> <a href="18125.php">Dahai Guo: "[OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18138.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<li><strong>Reply:</strong> <a href="18138.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
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
