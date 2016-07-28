<?
$subject_val = "Re: [OMPI users] shmalloc error with &gt;=512 mb";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 09:38:50 2014" -->
<!-- isoreceived="20141117143850" -->
<!-- sent="Mon, 17 Nov 2014 16:38:47 +0200" -->
<!-- isosent="20141117143847" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shmalloc error with &amp;gt;=512 mb" -->
<!-- id="CAAO1KybYEmNX_+nSq1pmaoEeZ6FsGw2oAv-y_LNKdZTMhcPJWg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1416231494.342804851_at_f334.i.mail.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] shmalloc error with &gt;=512 mb<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-17 09:38:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25823.php">John Bray: "[OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Previous message:</strong> <a href="25821.php">Timur Ismagilov: "[OMPI users] shmalloc error with &gt;=512 mb"</a>
<li><strong>In reply to:</strong> <a href="25821.php">Timur Ismagilov: "[OMPI users] shmalloc error with &gt;=512 mb"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
the default memheap size is 256MB, you can override it with oshrun -x
<br>
SHMEM_SYMMETRIC_HEAP_SIZE=512M ...
<br>
<p>On Mon, Nov 17, 2014 at 3:38 PM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; Why does shmalloc return NULL when I try to allocate 512MB.
</span><br>
<span class="quotelev1">&gt; When i thry to allocate 256mb - all fine.
</span><br>
<span class="quotelev1">&gt; I use Open MPI/SHMEM v1.8.4 rc1 (v1.8.3-202-gb568b6e).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; programm:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;shmem.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int *src;
</span><br>
<span class="quotelev1">&gt; start_pes(0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int length = 1024*1024*512;
</span><br>
<span class="quotelev1">&gt; src = (int*) shmalloc(length);
</span><br>
<span class="quotelev1">&gt;   if (src == NULL) {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;can not allocate src: size = %dMb\n &quot;, length/(1024*1024));
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $oshrun -np 1 ./example_shmem
</span><br>
<span class="quotelev1">&gt; can not allocate src: size = 512Mb
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can i increse shmalloc memory size?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25821.php">http://www.open-mpi.org/community/lists/users/2014/11/25821.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25822/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25823.php">John Bray: "[OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Previous message:</strong> <a href="25821.php">Timur Ismagilov: "[OMPI users] shmalloc error with &gt;=512 mb"</a>
<li><strong>In reply to:</strong> <a href="25821.php">Timur Ismagilov: "[OMPI users] shmalloc error with &gt;=512 mb"</a>
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
