<?
$subject_val = "Re: [OMPI devel] iprobe and opal_progress";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 09:43:34 2008" -->
<!-- isoreceived="20080618134334" -->
<!-- sent="Wed, 18 Jun 2008 09:43:27 -0400 (EDT)" -->
<!-- isosent="20080618134327" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iprobe and opal_progress" -->
<!-- id="Pine.LNX.4.64.0806180942110.21120_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="109884A9-485B-4B89-9F30-2A3CA3D283E7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] iprobe and opal_progress<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-18 09:43:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4150.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4148.php">Jeff Squyres: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>In reply to:</strong> <a href="4148.php">Jeff Squyres: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4150.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sure it was a latency optimization, just like the old test behavior. 
<br>
Personally, I'd call opal_progress blindly, then walk through the queue. 
<br>
Doing the walk the queue, call opal_progress, walk the queue thing seems 
<br>
like too much work for iprobe.  Test, sure.  iProbe...  eh.
<br>
<p>Brian
<br>
<p><p>On Wed, 18 Jun 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Perhaps we did that as a latency optimization...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George / Brian / Galen -- do you guys know/remember why this was done?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the surface, it looks like it would be ok to call progress and check again 
</span><br>
<span class="quotelev1">&gt; to see if it found the match.  Can anyone think of a deeper reason not to?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 17, 2008, at 11:43 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've ran into an issue while running hpl where a message has been sent (in 
</span><br>
<span class="quotelev2">&gt;&gt; shared memory in this case) and the receiver calls iprobe but doesn't see 
</span><br>
<span class="quotelev2">&gt;&gt; said message the first call to iprobe (even though it is there) but does 
</span><br>
<span class="quotelev2">&gt;&gt; see it the second call to iprobe.  Looking at mca_pml_ob1_iprobe function 
</span><br>
<span class="quotelev2">&gt;&gt; and the calls it makes it looks like it checks the unexpected queue for 
</span><br>
<span class="quotelev2">&gt;&gt; matches and if it doesn't find one it sets the flag to 0 (no matches), then 
</span><br>
<span class="quotelev2">&gt;&gt; calls opal_progress and return.  This seems wrong to me since I would 
</span><br>
<span class="quotelev2">&gt;&gt; expect that the call to opal_progress probably would pull in the message 
</span><br>
<span class="quotelev2">&gt;&gt; that the iprobe is waiting for.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am I correct in my reading of the code?  It seems that maybe some sort of 
</span><br>
<span class="quotelev2">&gt;&gt; check needs to be done after the call to opal_progress in 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_iprobe.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Attached is a simple program that shows the issue I am running into:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main() {
</span><br>
<span class="quotelev2">&gt;&gt;  int rank, src[2], dst[2], flag = 0;
</span><br>
<span class="quotelev2">&gt;&gt;  int nxfers;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  if (0 == rank) {
</span><br>
<span class="quotelev2">&gt;&gt;      for (nxfers = 0; nxfers &lt; 5; nxfers++)
</span><br>
<span class="quotelev2">&gt;&gt;          MPI_Send(src, 2, MPI_INT, 1, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;  } else if (1 == rank) {
</span><br>
<span class="quotelev2">&gt;&gt;      for (nxfers = 0; nxfers &lt; 5; nxfers++) {
</span><br>
<span class="quotelev2">&gt;&gt;          sleep(5);
</span><br>
<span class="quotelev2">&gt;&gt;          flag = 0;
</span><br>
<span class="quotelev2">&gt;&gt;          while (!flag) {
</span><br>
<span class="quotelev2">&gt;&gt;             printf(&quot;iprobe...&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;             MPI_Iprobe(0, 0, MPI_COMM_WORLD, &amp;flag, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;          printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;          MPI_Recv(dst, 2, MPI_INT, 0, 0, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4150.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4148.php">Jeff Squyres: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>In reply to:</strong> <a href="4148.php">Jeff Squyres: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4150.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
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
