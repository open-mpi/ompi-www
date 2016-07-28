<?
$subject_val = "Re: [OMPI devel] iprobe and opal_progress";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 09:52:50 2008" -->
<!-- isoreceived="20080618135250" -->
<!-- sent="Wed, 18 Jun 2008 09:52:38 -0400" -->
<!-- isosent="20080618135238" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iprobe and opal_progress" -->
<!-- id="48591326.7020904_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-18 09:52:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4151.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4149.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>In reply to:</strong> <a href="4148.php">Jeff Squyres: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4151.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4151.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Perhaps we did that as a latency optimization...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George / Brian / Galen -- do you guys know/remember why this was done?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the surface, it looks like it would be ok to call progress and 
</span><br>
<span class="quotelev1">&gt; check again to see if it found the match.  Can anyone think of a 
</span><br>
<span class="quotelev1">&gt; deeper reason not to?
</span><br>
<span class="quotelev1">&gt;
</span><br>
If it is ok to check again, my next question is going to be how?  
<br>
Because after looking at the code some more I found iprobe requests are 
<br>
not actually queued.  So can I just do another 
<br>
MCA_PML_OB1_RECV_REQUEST_START on the init'd IPROBE_REQUEST after the  
<br>
call opal_progress to force a search on the unexpected queue or do I 
<br>
need to FINI the request and regenerate it again?
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 17, 2008, at 11:43 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've ran into an issue while running hpl where a message has been 
</span><br>
<span class="quotelev2">&gt;&gt; sent (in shared memory in this case) and the receiver calls iprobe 
</span><br>
<span class="quotelev2">&gt;&gt; but doesn't see said message the first call to iprobe (even though it 
</span><br>
<span class="quotelev2">&gt;&gt; is there) but does see it the second call to iprobe.  Looking at 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_iprobe function and the calls it makes it looks like it 
</span><br>
<span class="quotelev2">&gt;&gt; checks the unexpected queue for matches and if it doesn't find one it 
</span><br>
<span class="quotelev2">&gt;&gt; sets the flag to 0 (no matches), then calls opal_progress and 
</span><br>
<span class="quotelev2">&gt;&gt; return.  This seems wrong to me since I would expect that the call to 
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress probably would pull in the message that the iprobe is 
</span><br>
<span class="quotelev2">&gt;&gt; waiting for.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I correct in my reading of the code?  It seems that maybe some 
</span><br>
<span class="quotelev2">&gt;&gt; sort of check needs to be done after the call to opal_progress in 
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
<span class="quotelev2">&gt;&gt;   int rank, src[2], dst[2], flag = 0;
</span><br>
<span class="quotelev2">&gt;&gt;   int nxfers;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if (0 == rank) {
</span><br>
<span class="quotelev2">&gt;&gt;       for (nxfers = 0; nxfers &lt; 5; nxfers++)
</span><br>
<span class="quotelev2">&gt;&gt;           MPI_Send(src, 2, MPI_INT, 1, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;   } else if (1 == rank) {
</span><br>
<span class="quotelev2">&gt;&gt;       for (nxfers = 0; nxfers &lt; 5; nxfers++) {
</span><br>
<span class="quotelev2">&gt;&gt;           sleep(5);
</span><br>
<span class="quotelev2">&gt;&gt;           flag = 0;
</span><br>
<span class="quotelev2">&gt;&gt;           while (!flag) {
</span><br>
<span class="quotelev2">&gt;&gt;              printf(&quot;iprobe...&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;              MPI_Iprobe(0, 0, MPI_COMM_WORLD, &amp;flag, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;           }
</span><br>
<span class="quotelev2">&gt;&gt;           printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;           MPI_Recv(dst, 2, MPI_INT, 0, 0, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;       }
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4151.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4149.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>In reply to:</strong> <a href="4148.php">Jeff Squyres: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4151.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4151.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
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
