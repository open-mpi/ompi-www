<?
$subject_val = "[OMPI devel] iprobe and opal_progress";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 11:43:34 2008" -->
<!-- isoreceived="20080617154334" -->
<!-- sent="Tue, 17 Jun 2008 11:43:06 -0400" -->
<!-- isosent="20080617154306" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] iprobe and opal_progress" -->
<!-- id="4857DB8A.7070508_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] iprobe and opal_progress<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 11:43:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4143.php">Leonardo Fialho: "[OMPI devel] RML Send"</a>
<li><strong>Previous message:</strong> <a href="4141.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4148.php">Jeff Squyres: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4148.php">Jeff Squyres: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've ran into an issue while running hpl where a message has been sent 
<br>
(in shared memory in this case) and the receiver calls iprobe but 
<br>
doesn't see said message the first call to iprobe (even though it is 
<br>
there) but does see it the second call to iprobe.  Looking at 
<br>
mca_pml_ob1_iprobe function and the calls it makes it looks like it 
<br>
checks the unexpected queue for matches and if it doesn't find one it 
<br>
sets the flag to 0 (no matches), then calls opal_progress and return.  
<br>
This seems wrong to me since I would expect that the call to 
<br>
opal_progress probably would pull in the message that the iprobe is 
<br>
waiting for.
<br>
<p>Am I correct in my reading of the code?  It seems that maybe some sort 
<br>
of check needs to be done after the call to opal_progress in 
<br>
mca_pml_ob1_iprobe.
<br>
<p>Attached is a simple program that shows the issue I am running into:
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int main() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank, src[2], dst[2], flag = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int nxfers;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (0 == rank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (nxfers = 0; nxfers &lt; 5; nxfers++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(src, 2, MPI_INT, 1, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else if (1 == rank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (nxfers = 0; nxfers &lt; 5; nxfers++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(5);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flag = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (!flag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;iprobe...&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Iprobe(0, 0, MPI_COMM_WORLD, &amp;flag, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(dst, 2, MPI_INT, 0, 0, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4143.php">Leonardo Fialho: "[OMPI devel] RML Send"</a>
<li><strong>Previous message:</strong> <a href="4141.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4148.php">Jeff Squyres: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4148.php">Jeff Squyres: "Re: [OMPI devel] iprobe and opal_progress"</a>
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
