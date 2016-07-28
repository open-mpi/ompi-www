<?
$subject_val = "[OMPI devel] MPI_Init() affecting rand()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 14:13:25 2016" -->
<!-- isoreceived="20160714181325" -->
<!-- sent="Thu, 14 Jul 2016 18:12:40 +0000" -->
<!-- isosent="20160714181240" -->
<!-- name="Cabral, Matias A" -->
<!-- email="matias.a.cabral_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Init() affecting rand()" -->
<!-- id="39196F20B4590A4A8337B6A6F7F0FD8D854611FC_at_FMSMSX102.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Init() affecting rand()<br>
<strong>From:</strong> Cabral, Matias A (<em>matias.a.cabral_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-14 14:12:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19213.php">Jeff Squyres (jsquyres): "[OMPI devel] Git / Github branching and repo plans"</a>
<li><strong>Previous message:</strong> <a href="19211.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Doing quick test with rand()/srand() I found that MPI_Init() seems to be calling a function in their family  that is affecting the values in the user application.  Please see below my simple test and the results. Yes, moving the second call to srand() after MPI_init() solves the problem. However, I'm confused since this was supposedly addressed in version 1.7.5. From release notes:
<br>
<p><p>1.7.5 20 Mar 2014:
<br>
<p><p><p>- OMPI now uses its own internal random number generator and will not perturb srand() and friends.
<br>
<p><p>I tested on OMPI 1.10.2 and 1.10.3. The result is deterministic.
<br>
<p><p><p>Any ideas?
<br>
<p><p><p>Thanks,
<br>
Regards,
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rand1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rand2;
<br>
&nbsp;&nbsp;int name_len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;srand(100000);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rand1 = rand();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;srand(100000);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rand2 = rand();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (rand1 != rand2) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d != %d\n&quot;, rand1, rand2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d == %d\n&quot;, rand1, rand2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>host1:/tmp&gt; mpirun -np 1 -host host1 -mca pml ob1 -mca btl tcp,self ./rand1
<br>
<p>964940668 != 865007240
<br>
<p><p>_MAC
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19212/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19213.php">Jeff Squyres (jsquyres): "[OMPI devel] Git / Github branching and repo plans"</a>
<li><strong>Previous message:</strong> <a href="19211.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
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
