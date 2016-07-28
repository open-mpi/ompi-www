<?
$subject_val = "[OMPI users] Segmentation fault (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 17:29:58 2010" -->
<!-- isoreceived="20100326212958" -->
<!-- sent="Fri, 26 Mar 2010 21:29:53 +0000 (GMT)" -->
<!-- isosent="20100326212953" -->
<!-- name="Jean Potsam" -->
<!-- email="jeanpotsam_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault (11)" -->
<!-- id="441553.6583.qm_at_web28313.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault (11)<br>
<strong>From:</strong> Jean Potsam (<em>jeanpotsam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 17:29:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12444.php">jody: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="12442.php">Matthias Jurenz: "Re: [OMPI users] Question - OTF file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12444.php">jody: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="12444.php">jody: "Re: [OMPI users] Segmentation fault (11)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I am having a problem with openmpi . I have installed openmpi 1.4 and blcr 0.8.1
<br>
&#160;
<br>
I have written a small mpi application as follows below:
<br>
&#160;
<br>
#######################
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;fcntl.h&gt;
<br>
#include &lt;limits.h&gt;
<br>
#include &lt;sys/types.h&gt;
<br>
#include &lt;sys/stat.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
#include&lt;signal.h&gt;
<br>
#include &lt;fcntl.h&gt; 
<br>
#include &lt;unistd.h&gt;
<br>
&#160;
<br>
#define BUFFER_SIZE PIPE_BUF
<br>
&#160;
<br>
char * getprocessid() 
<br>
{
<br>
&#160;&#160;&#160; FILE * read_fp;
<br>
&#160;&#160;&#160; char buffer[BUFSIZ + 1];
<br>
&#160;&#160;&#160; int chars_read;
<br>
&#160;&#160;&#160; char * buffer_data=&quot;12345&quot;;
<br>
&#160;&#160;&#160; memset(buffer, '\0', sizeof(buffer));
<br>
&#160;&#160;read_fp = popen(&quot;uname -a&quot;, &quot;r&quot;);
<br>
&#160;&#160;&#160;&#160; /*
<br>
&#160;&#160;&#160;&#160;&#160; ...
<br>
&#160;*/&#160;
<br>
&#160;&#160;&#160;&#160; return buffer_data;
<br>
}
<br>
&#160;
<br>
int main(int argc, char ** argv)
<br>
{
<br>
&#160; MPI_Status status;
<br>
&#160;int rank;
<br>
&#160;&#160; int size;
<br>
char * thedata;
<br>
&#160;&#160;&#160; MPI_Init(&amp;argc, &amp;argv);
<br>
&#160;&#160;&#160; MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
&#160;&#160;&#160; MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&#160;thedata=getprocessid();
<br>
&#160;printf(&quot; the data is %s&quot;, thedata);
<br>
&#160;&#160;&#160; MPI_Finalize();
<br>
}
<br>
############################
<br>
&#160;
<br>
I get the following result:
<br>
&#160;
<br>
#######################
<br>
jean_at_sunn32:~$ mpicc pipetest2.c -o pipetest2
<br>
jean_at_sunn32:~$ mpirun -np 1 -am ft-enable-cr -mca btl ^openib&#160; pipetest2
<br>
[sun32:19211] *** Process received signal ***
<br>
[sun32:19211] Signal: Segmentation fault (11)
<br>
[sun32:19211] Signal code: Address not mapped (1)
<br>
[sun32:19211] Failing at address: 0x4
<br>
[sun32:19211] [ 0] [0xb7f3c40c]
<br>
[sun32:19211] [ 1] /lib/libc.so.6(cfree+0x3b) [0xb796868b]
<br>
[sun32:19211] [ 2] /usr/local/blcr/lib/libcr.so.0(cri_info_free+0x2a) [0xb7a5925a]
<br>
[sun32:19211] [ 3] /usr/local/blcr/lib/libcr.so.0 [0xb7a5ac72]
<br>
[sun32:19211] [ 4] /lib/libc.so.6(__libc_fork+0x186) [0xb7991266]
<br>
[sun32:19211] [ 5] /lib/libc.so.6(_IO_proc_open+0x7e) [0xb7958b6e]
<br>
[sun32:19211] [ 6] /lib/libc.so.6(popen+0x6c) [0xb7958dfc]
<br>
[sun32:19211] [ 7] pipetest2(getprocessid+0x42) [0x8048836]
<br>
[sun32:19211] [ 8] pipetest2(main+0x4d) [0x8048897]
<br>
[sun32:19211] [ 9] /lib/libc.so.6(__libc_start_main+0xe5) [0xb7912455]
<br>
[sun32:19211] [10] pipetest2 [0x8048761]
<br>
[sun32:19211] *** End of error message ***
<br>
#####################################################
<br>
&#160;
<br>
&#160;
<br>
However, If I compile the application using gcc, it works fine. The problem arises with:
<br>
&#160;&#160;read_fp = popen(&quot;uname -a&quot;, &quot;r&quot;);
<br>
&#160;
<br>
Does anyone has an idea how to resolve this problem?
<br>
&#160;
<br>
Many thanks 
<br>
&#160;
<br>
Jean


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12443/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12444.php">jody: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="12442.php">Matthias Jurenz: "Re: [OMPI users] Question - OTF file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12444.php">jody: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="12444.php">jody: "Re: [OMPI users] Segmentation fault (11)"</a>
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
