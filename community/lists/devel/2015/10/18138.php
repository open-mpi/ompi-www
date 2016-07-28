<?
$subject_val = "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 22:15:10 2015" -->
<!-- isoreceived="20151004021510" -->
<!-- sent="Sun, 4 Oct 2015 02:12:22 +0000 (UTC)" -->
<!-- isosent="20151004021222" -->
<!-- name="Dahai Guo" -->
<!-- email="dahaiguo2004_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program" -->
<!-- id="1967424425.108084.1443924742940.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="81EC8B5E-14A9-4E8E-86BD-5C528D4D5484_at_cisco.com" -->
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
<strong>From:</strong> Dahai Guo (<em>dahaiguo2004_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-03 22:12:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18139.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Previous message:</strong> <a href="18137.php">Ralph Castain: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="18126.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18139.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Reply:</strong> <a href="18139.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Reply:</strong> <a href="18141.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Jeff. I am trying to understand in detail how Open MPI works in the run time. What main functions does it call to select and initialize the coll components? Using the &quot;helloworld&quot; as an example, &#194;&#160;how does it select and initialize the MPI_Barrier algorithm? &#194;&#160;which C functions are involved and used in the process?&#194;&#160;
<br>
Dahai 
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Friday, October 2, 2015 7:50 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;On Oct 2, 2015, at 2:21 PM, Dahai Guo &lt;dahaiguo2004_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any way to trace open mpi internal function calls in a MPI user program?
</span><br>
<p>Unfortunately, not easily -- other than using a debugger, for example.
<br>
<p><span class="quotelev1">&gt; If so, can any one explain it with an example? such as helloworld?&#194;&#160; I build open MPI with the VampirTrace options, and compile the following program with picc-vt,. but I didn't get any tracing info. 
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
<span class="quotelev1">&gt;&#194;&#160; int rank, size;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&#194;&#160; MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;&#194;&#160; MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;&#194;&#160; MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;&#194;&#160; printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev1">&gt;&#194;&#160; MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;&#194;&#160; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&#194;&#160; return 0;
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18138/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18139.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Previous message:</strong> <a href="18137.php">Ralph Castain: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="18126.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18139.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Reply:</strong> <a href="18139.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Reply:</strong> <a href="18141.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
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
