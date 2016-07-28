<?
$subject_val = "Re: [OMPI devel] iprobe and opal_progress";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 09:14:18 2008" -->
<!-- isoreceived="20080618131418" -->
<!-- sent="Wed, 18 Jun 2008 09:10:41 -0400" -->
<!-- isosent="20080618131041" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iprobe and opal_progress" -->
<!-- id="109884A9-485B-4B89-9F30-2A3CA3D283E7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4857DB8A.7070508_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-18 09:10:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4149.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4147.php">Ralph Castain: "Re: [OMPI devel] RML Send"</a>
<li><strong>In reply to:</strong> <a href="4142.php">Terry Dontje: "[OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4149.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4149.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4150.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps we did that as a latency optimization...?
<br>
<p>George / Brian / Galen -- do you guys know/remember why this was done?
<br>
<p>On the surface, it looks like it would be ok to call progress and  
<br>
check again to see if it found the match.  Can anyone think of a  
<br>
deeper reason not to?
<br>
<p><p>On Jun 17, 2008, at 11:43 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; I've ran into an issue while running hpl where a message has been  
</span><br>
<span class="quotelev1">&gt; sent (in shared memory in this case) and the receiver calls iprobe  
</span><br>
<span class="quotelev1">&gt; but doesn't see said message the first call to iprobe (even though  
</span><br>
<span class="quotelev1">&gt; it is there) but does see it the second call to iprobe.  Looking at  
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_iprobe function and the calls it makes it looks like it  
</span><br>
<span class="quotelev1">&gt; checks the unexpected queue for matches and if it doesn't find one  
</span><br>
<span class="quotelev1">&gt; it sets the flag to 0 (no matches), then calls opal_progress and  
</span><br>
<span class="quotelev1">&gt; return.  This seems wrong to me since I would expect that the call  
</span><br>
<span class="quotelev1">&gt; to opal_progress probably would pull in the message that the iprobe  
</span><br>
<span class="quotelev1">&gt; is waiting for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I correct in my reading of the code?  It seems that maybe some  
</span><br>
<span class="quotelev1">&gt; sort of check needs to be done after the call to opal_progress in  
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_iprobe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a simple program that shows the issue I am running into:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main() {
</span><br>
<span class="quotelev1">&gt;   int rank, src[2], dst[2], flag = 0;
</span><br>
<span class="quotelev1">&gt;   int nxfers;
</span><br>
<span class="quotelev1">&gt;   MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if (0 == rank) {
</span><br>
<span class="quotelev1">&gt;       for (nxfers = 0; nxfers &lt; 5; nxfers++)
</span><br>
<span class="quotelev1">&gt;           MPI_Send(src, 2, MPI_INT, 1, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;   } else if (1 == rank) {
</span><br>
<span class="quotelev1">&gt;       for (nxfers = 0; nxfers &lt; 5; nxfers++) {
</span><br>
<span class="quotelev1">&gt;           sleep(5);
</span><br>
<span class="quotelev1">&gt;           flag = 0;
</span><br>
<span class="quotelev1">&gt;           while (!flag) {
</span><br>
<span class="quotelev1">&gt;              printf(&quot;iprobe...&quot;);
</span><br>
<span class="quotelev1">&gt;              MPI_Iprobe(0, 0, MPI_COMM_WORLD, &amp;flag, &amp;status);
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<span class="quotelev1">&gt;           printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;           MPI_Recv(dst, 2, MPI_INT, 0, 0, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4149.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4147.php">Ralph Castain: "Re: [OMPI devel] RML Send"</a>
<li><strong>In reply to:</strong> <a href="4142.php">Terry Dontje: "[OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4149.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4149.php">Brian W. Barrett: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4150.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
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
