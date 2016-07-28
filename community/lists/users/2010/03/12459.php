<?
$subject_val = "Re: [OMPI users] Segmentation fault (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 14:28:51 2010" -->
<!-- isoreceived="20100329182851" -->
<!-- sent="Mon, 29 Mar 2010 18:28:45 +0000 (GMT)" -->
<!-- isosent="20100329182845" -->
<!-- name="Jean Potsam" -->
<!-- email="jeanpotsam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault (11)" -->
<!-- id="703448.33617.qm_at_web28302.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D45D0B1F-69B2-4B25-AFA2-716F0BBEE6D6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault (11)<br>
<strong>From:</strong> Jean Potsam (<em>jeanpotsam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 14:28:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12460.php">Cristobal Navarro: "[OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12458.php">Josh Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="12458.php">Josh Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12501.php">Joshua Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="12501.php">Joshua Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh/All,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I just tested a simple c application with blcr and it worked fine.
<br>
&#160;
<br>
##########################################
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
#include&lt;signal.h&gt;
<br>
#include &lt;fcntl.h&gt; 
<br>
#include &lt;unistd.h&gt;
<br>
<p>char * getprocessid() 
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
<p>&#160;int rank;
<br>
&#160;&#160; int size;
<br>
char * thedata;
<br>
int n=0;
<br>
<p>&#160;thedata=getprocessid();
<br>
&#160;printf(&quot; the data is %s&quot;, thedata);
<br>
&#160;&#160;&#160;&#160; 
<br>
&#160; while( n &lt;10)
<br>
&#160; {
<br>
&#160;&#160;&#160; printf(&quot;value is %d\n&quot;, n);
<br>
&#160;&#160;&#160; n++;
<br>
&#160;&#160;&#160; sleep(1);
<br>
&#160;&#160; }
<br>
&#160;printf(&quot;bye\n&quot;);
<br>
&#160;
<br>
}
<br>
&#160;
<br>
&#160;
<br>
jean_at_sun32:/tmp$&#160;cr_run ./pipetest3 &amp;
<br>
[1] 31807
<br>
jean_at_sun32:~$&#160; the data is 12345value is 0
<br>
value is 1
<br>
value is 2
<br>
...
<br>
value is 9
<br>
bye
<br>
&#160;
<br>
jean_at_sun32:/tmp$ cr_checkpoint 31807
<br>
&#160;
<br>
jean_at_sun32:/tmp$ cr_restart context.31807
<br>
value is 7
<br>
value is 8
<br>
value is 9
<br>
bye
<br>
&#160;
<br>
##############################################
<br>
&#160;
<br>
&#160;
<br>
It looks like its more to do with Openmpi.&#160; Any ideas from you side?
<br>
&#160;
<br>
Thank you.
<br>
&#160;
<br>
Kind regards,
<br>
&#160;
<br>
Jean.
<br>
&#160;
<br>
&#160;
<br>
<p>&#160;
<br>
<p><p>--- On Mon, 29/3/10, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><p>From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Segmentation fault (11)
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Monday, 29 March, 2010, 16:08
<br>
<p><p>I wonder if this is a bug with BLCR (since the segv stack is in the BLCR thread). Can you try an non-MPI version of this application that uses popen(), and see if BLCR properly checkpoints/restarts it?
<br>
<p>If so, we can start to see what Open MPI might be doing to confuse things, but I suspect that this might be a bug with BLCR. Either way let us know what you find out.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Mar 27, 2010, at 6:17 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; I'm not sure if this is the cause of your problems:
</span><br>
<span class="quotelev1">&gt; You define the constant BUFFER_SIZE, but in the code you use a constant called BUFSIZ...
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 26, 2010 at 10:29 PM, Jean Potsam &lt;jeanpotsam_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;I am having a problem with openmpi . I have installed openmpi 1.4 and blcr 0.8.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have written a small mpi application as follows below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #######################
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;fcntl.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;limits.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include&lt;signal.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;fcntl.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define BUFFER_SIZE PIPE_BUF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; char * getprocessid()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;FILE * read_fp;
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;char buffer[BUFSIZ + 1];
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;int chars_read;
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;char * buffer_data=&quot;12345&quot;;
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;memset(buffer, '\0', sizeof(buffer));
</span><br>
<span class="quotelev1">&gt;&#160;&#160;&#160;read_fp = popen(&quot;uname -a&quot;, &quot;r&quot;);
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; /*
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160;&#160;&#160;...
</span><br>
<span class="quotelev1">&gt;&#160; */
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; return buffer_data;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char ** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;&#160;&#160;&#160;MPI_Status status;
</span><br>
<span class="quotelev1">&gt;&#160; int rank;
</span><br>
<span class="quotelev1">&gt;&#160; &#160; int size;
</span><br>
<span class="quotelev1">&gt; char * thedata;
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;&#160; thedata=getprocessid();
</span><br>
<span class="quotelev1">&gt;&#160; printf(&quot; the data is %s&quot;, thedata);
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ############################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following result:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #######################
</span><br>
<span class="quotelev1">&gt; jean_at_sunn32:~$ mpicc pipetest2.c -o pipetest2
</span><br>
<span class="quotelev1">&gt; jean_at_sunn32:~$ mpirun -np 1 -am ft-enable-cr -mca btl ^openib&#160; pipetest2
</span><br>
<span class="quotelev1">&gt; [sun32:19211] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [sun32:19211] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [sun32:19211] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [sun32:19211] Failing at address: 0x4
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 0] [0xb7f3c40c]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 1] /lib/libc.so.6(cfree+0x3b) [0xb796868b]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 2] /usr/local/blcr/lib/libcr.so.0(cri_info_free+0x2a) [0xb7a5925a]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 3] /usr/local/blcr/lib/libcr.so.0 [0xb7a5ac72]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 4] /lib/libc.so.6(__libc_fork+0x186) [0xb7991266]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 5] /lib/libc.so.6(_IO_proc_open+0x7e) [0xb7958b6e]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 6] /lib/libc.so.6(popen+0x6c) [0xb7958dfc]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 7] pipetest2(getprocessid+0x42) [0x8048836]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 8] pipetest2(main+0x4d) [0x8048897]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 9] /lib/libc.so.6(__libc_start_main+0xe5) [0xb7912455]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [10] pipetest2 [0x8048761]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; #####################################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, If I compile the application using gcc, it works fine. The problem arises with:
</span><br>
<span class="quotelev1">&gt;&#160;&#160;&#160;read_fp = popen(&quot;uname -a&quot;, &quot;r&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone has an idea how to resolve this problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jean
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12459/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12460.php">Cristobal Navarro: "[OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12458.php">Josh Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="12458.php">Josh Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12501.php">Joshua Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="12501.php">Joshua Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
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
