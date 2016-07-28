<?
$subject_val = "[OMPI users] shmalloc error with &gt;=512 mb";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 08:38:18 2014" -->
<!-- isoreceived="20141117133818" -->
<!-- sent="Mon, 17 Nov 2014 16:38:14 +0300" -->
<!-- isosent="20141117133814" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="[OMPI users] shmalloc error with &amp;gt;=512 mb" -->
<!-- id="1416231494.342804851_at_f334.i.mail.ru" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] shmalloc error with &gt;=512 mb<br>
<strong>From:</strong> Timur Ismagilov (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-17 08:38:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25822.php">Mike Dubman: "Re: [OMPI users] shmalloc error with &gt;=512 mb"</a>
<li><strong>Previous message:</strong> <a href="25820.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] error building openmpi-dev-274-g2177f9e withgcc-4.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25822.php">Mike Dubman: "Re: [OMPI users] shmalloc error with &gt;=512 mb"</a>
<li><strong>Reply:</strong> <a href="25822.php">Mike Dubman: "Re: [OMPI users] shmalloc error with &gt;=512 mb"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
Why does shmalloc return NULL when I try to allocate 512MB.
<br>
When i thry to allocate 256mb - all fine.
<br>
I use&#194;&#160;Open MPI/SHMEM v1.8.4 rc1 (v1.8.3-202-gb568b6e).
<br>
<p>programm:
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;shmem.h&gt;
<br>
int main(int argc, char **argv)
<br>
{
<br>
int *src;
<br>
start_pes(0);
<br>
int length = 1024*1024*512;
<br>
src = (int*) shmalloc(length);
<br>
&#194;&#160; if (src == NULL) {
<br>
&#194;&#160; &#194;&#160; printf(&quot;can not allocate src: size = %dMb\n &quot;, length/(1024*1024));
<br>
&#194;&#160; }
<br>
return 0;
<br>
}
<br>
<p>command:
<br>
$oshrun -np 1 ./example_shmem
<br>
can not allocate src: size = 512Mb
<br>
<p>How can i increse shmalloc memory size?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25821/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25822.php">Mike Dubman: "Re: [OMPI users] shmalloc error with &gt;=512 mb"</a>
<li><strong>Previous message:</strong> <a href="25820.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] error building openmpi-dev-274-g2177f9e withgcc-4.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25822.php">Mike Dubman: "Re: [OMPI users] shmalloc error with &gt;=512 mb"</a>
<li><strong>Reply:</strong> <a href="25822.php">Mike Dubman: "Re: [OMPI users] shmalloc error with &gt;=512 mb"</a>
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
