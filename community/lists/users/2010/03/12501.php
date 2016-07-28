<?
$subject_val = "Re: [OMPI users] Segmentation fault (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 11:00:27 2010" -->
<!-- isoreceived="20100331150027" -->
<!-- sent="Wed, 31 Mar 2010 11:00:21 -0400" -->
<!-- isosent="20100331150021" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault (11)" -->
<!-- id="D79B6B38-128D-48BA-AC85-8D5B7A4D0D00_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="703448.33617.qm_at_web28302.mail.ukl.yahoo.com" -->
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
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-31 11:00:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12502.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12500.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12459.php">Jean Potsam: "Re: [OMPI users] Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is interesting. I cannot think of any reason why this might be causing a problem just in Open MPI. popen() is similar to fork()/system() so you have to be careful with interconnects that do not play nice with fork(), like openib. But since it looks like you are excluding openib, this should not be the problem.
<br>
<p>I wonder if this has something to so with the way we use BLCR (maybe we need to pass additional parameters to cr_checkpoint()). When the process fails, are there any messages in the system logs from BLCR indicating an issue that it encountered? It is common for BLCR to post a 'socket open' warning, but that is expected/normal since we leave TCP sockets open in most cases as an optimization. I am wondering if there is a warning about the popen'ed process.
<br>
<p>Personally, I will not have an opportunity to look into this in more detail until probably mid-April. :/
<br>
<p>Let me know what you find, and maybe we can sort out what is happening on the list.
<br>
<p>-- Josh
<br>
<p>On Mar 29, 2010, at 2:28 PM, Jean Potsam wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh/All,
</span><br>
<span class="quotelev1">&gt;                I just tested a simple c application with blcr and it worked fine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ##########################################
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
<span class="quotelev1">&gt; #include&lt;signal.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;fcntl.h&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; char * getprocessid() 
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     FILE * read_fp;
</span><br>
<span class="quotelev1">&gt;     char buffer[BUFSIZ + 1];
</span><br>
<span class="quotelev1">&gt;     int chars_read;
</span><br>
<span class="quotelev1">&gt;     char * buffer_data=&quot;12345&quot;;
</span><br>
<span class="quotelev1">&gt;     memset(buffer, '\0', sizeof(buffer));
</span><br>
<span class="quotelev1">&gt;   read_fp = popen(&quot;uname -a&quot;, &quot;r&quot;);
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;       ...
</span><br>
<span class="quotelev1">&gt;  */ 
</span><br>
<span class="quotelev1">&gt;      return buffer_data;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; int main(int argc, char ** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  int rank;
</span><br>
<span class="quotelev1">&gt;    int size;
</span><br>
<span class="quotelev1">&gt; char * thedata;
</span><br>
<span class="quotelev1">&gt; int n=0;
</span><br>
<span class="quotelev1">&gt;  thedata=getprocessid();
</span><br>
<span class="quotelev1">&gt;  printf(&quot; the data is %s&quot;, thedata);
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;   while( n &lt;10)
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;value is %d\n&quot;, n);
</span><br>
<span class="quotelev1">&gt;     n++;
</span><br>
<span class="quotelev1">&gt;     sleep(1);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  printf(&quot;bye\n&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; jean_at_sun32:/tmp$ cr_run ./pipetest3 &amp;
</span><br>
<span class="quotelev1">&gt; [1] 31807
</span><br>
<span class="quotelev1">&gt; jean_at_sun32:~$  the data is 12345value is 0
</span><br>
<span class="quotelev1">&gt; value is 1
</span><br>
<span class="quotelev1">&gt; value is 2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; value is 9
</span><br>
<span class="quotelev1">&gt; bye
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; jean_at_sun32:/tmp$ cr_checkpoint 31807
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; jean_at_sun32:/tmp$ cr_restart context.31807
</span><br>
<span class="quotelev1">&gt; value is 7
</span><br>
<span class="quotelev1">&gt; value is 8
</span><br>
<span class="quotelev1">&gt; value is 9
</span><br>
<span class="quotelev1">&gt; bye
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ##############################################
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It looks like its more to do with Openmpi.  Any ideas from you side?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Jean.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- On Mon, 29/3/10, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Monday, 29 March, 2010, 16:08
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if this is a bug with BLCR (since the segv stack is in the BLCR thread). Can you try an non-MPI version of this application that uses popen(), and see if BLCR properly checkpoints/restarts it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, we can start to see what Open MPI might be doing to confuse things, but I suspect that this might be a bug with BLCR. Either way let us know what you find out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2010, at 6:17 AM, jody wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure if this is the cause of your problems:
</span><br>
<span class="quotelev2">&gt; &gt; You define the constant BUFFER_SIZE, but in the code you use a constant called BUFSIZ...
</span><br>
<span class="quotelev2">&gt; &gt; Jody
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Mar 26, 2010 at 10:29 PM, Jean Potsam &lt;jeanpotsam_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear All,
</span><br>
<span class="quotelev2">&gt; &gt;               I am having a problem with openmpi . I have installed openmpi 1.4 and blcr 0.8.1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have written a small mpi application as follows below:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #######################
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;fcntl.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;limits.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include&lt;signal.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;fcntl.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #define BUFFER_SIZE PIPE_BUF
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; char * getprocessid()
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     FILE * read_fp;
</span><br>
<span class="quotelev2">&gt; &gt;     char buffer[BUFSIZ + 1];
</span><br>
<span class="quotelev2">&gt; &gt;     int chars_read;
</span><br>
<span class="quotelev2">&gt; &gt;     char * buffer_data=&quot;12345&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;     memset(buffer, '\0', sizeof(buffer));
</span><br>
<span class="quotelev2">&gt; &gt;   read_fp = popen(&quot;uname -a&quot;, &quot;r&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;      /*
</span><br>
<span class="quotelev2">&gt; &gt;       ...
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt;      return buffer_data;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char ** argv)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt;  int rank;
</span><br>
<span class="quotelev2">&gt; &gt;    int size;
</span><br>
<span class="quotelev2">&gt; &gt; char * thedata;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;  thedata=getprocessid();
</span><br>
<span class="quotelev2">&gt; &gt;  printf(&quot; the data is %s&quot;, thedata);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; ############################
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I get the following result:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #######################
</span><br>
<span class="quotelev2">&gt; &gt; jean_at_sunn32:~$ mpicc pipetest2.c -o pipetest2
</span><br>
<span class="quotelev2">&gt; &gt; jean_at_sunn32:~$ mpirun -np 1 -am ft-enable-cr -mca btl ^openib  pipetest2
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] Failing at address: 0x4
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] [ 0] [0xb7f3c40c]
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] [ 1] /lib/libc.so.6(cfree+0x3b) [0xb796868b]
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] [ 2] /usr/local/blcr/lib/libcr.so.0(cri_info_free+0x2a) [0xb7a5925a]
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] [ 3] /usr/local/blcr/lib/libcr.so.0 [0xb7a5ac72]
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] [ 4] /lib/libc.so.6(__libc_fork+0x186) [0xb7991266]
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] [ 5] /lib/libc.so.6(_IO_proc_open+0x7e) [0xb7958b6e]
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] [ 6] /lib/libc.so.6(popen+0x6c) [0xb7958dfc]
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] [ 7] pipetest2(getprocessid+0x42) [0x8048836]
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] [ 8] pipetest2(main+0x4d) [0x8048897]
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] [ 9] /lib/libc.so.6(__libc_start_main+0xe5) [0xb7912455]
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] [10] pipetest2 [0x8048761]
</span><br>
<span class="quotelev2">&gt; &gt; [sun32:19211] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; #####################################################
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; However, If I compile the application using gcc, it works fine. The problem arises with:
</span><br>
<span class="quotelev2">&gt; &gt;   read_fp = popen(&quot;uname -a&quot;, &quot;r&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Does anyone has an idea how to resolve this problem?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Many thanks
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jean
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12502.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12500.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12459.php">Jean Potsam: "Re: [OMPI users] Segmentation fault (11)"</a>
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
