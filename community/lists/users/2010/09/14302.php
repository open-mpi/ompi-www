<?
$subject_val = "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 14:22:00 2010" -->
<!-- isoreceived="20100923182200" -->
<!-- sent="Thu, 23 Sep 2010 15:21:52 -0300" -->
<!-- isosent="20100923182152" -->
<!-- name="Matheus Bersot Siqueira Barros" -->
<!-- email="matheusbersotsb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command" -->
<!-- id="AANLkTikKpwaY0oq9sDWgCT4Gr_XQcKQZ-5Em9PyrkjO=_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimqW_7Mg1W-8+CEsZgD_k77shEJ=vOtZ7kwPmEZ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command<br>
<strong>From:</strong> Matheus Bersot Siqueira Barros (<em>matheusbersotsb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 14:21:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14303.php">Lewis, Ambrose J.: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Previous message:</strong> <a href="14301.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>In reply to:</strong> <a href="14281.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14306.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>Reply:</strong> <a href="14306.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and Ralph,
<br>
<p>Thank you for your reply.
<br>
<p>1) I'm not running on machines with OpenFabrics.
<br>
<p>2) In my example, ompi-ps prints a maximum 82 bytes per line. Even so, I
<br>
augment to 300 bytes per line to be sure that it is not the problem.
<br>
<p>char mystring [300];
<br>
...
<br>
fgets (mystring , 300 , pFile);
<br>
<p>2) When I run ps, it shows just two process: ps and bash.
<br>
PID TTY          TIME  CMD
<br>
1961 pts/5    00:00:00 bash
<br>
2154 pts/5    00:00:00 ps
<br>
<p>But when I run ps -a -l, it appears my program(test.run) and other
<br>
processes. I put below just the information related to my program.
<br>
<p>F S   UID   PID  PPID  C PRI  NI ADDR SZ WCHAN  TTY          TIME CMD
<br>
0 S  1000  1841  1840  0  80   0 - 18054 pipe_w pts/0    00:00:00 test.run
<br>
0 S  1000  1842  1840  0  80   0 - 18053 poll_s pts/0    00:00:00 test.run
<br>
0 S  1000  1843  1840  0  80   0 - 18053 poll_s pts/0    00:00:00 test.run
<br>
0 S  1000  1844  1840  0  80   0 - 18053 poll_s pts/0    00:00:00 test.run
<br>
<p>pipe_s  = wait state on read/write against a pipe.
<br>
<p>So, with that command I concluded that one mpi process is waiting for the
<br>
read of a pipe.
<br>
<p>The problem still persists.
<br>
<p>Thanks,
<br>
Matheus.
<br>
<p>On Wed, Sep 22, 2010 at 11:24 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Printouts of less than 100 bytes would be unusual...but possible
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 22, 2010 at 8:15 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you running on machines with OpenFabrics devices (that Open MPI is
</span><br>
<span class="quotelev2">&gt;&gt; using)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is ompi-ps printing 100 bytes or more?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What does ps show when your program is hung?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 17, 2010, at 3:13 PM, Matheus Bersot Siqueira Barros wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Open MPI Version = 1.4.2
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OS = Ubuntu 10.04 LTS and CentOS 5.3
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; When I run the mpi program below in the terminal, the function fgets
</span><br>
<span class="quotelev2">&gt;&gt; hangs.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; How do I know it? I do a printf before and later the call of fgets and
</span><br>
<span class="quotelev2">&gt;&gt; only the message &quot;before fgets()&quot; is showed.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However, when I run the same program at Eclipse 3.6 with CDT
</span><br>
<span class="quotelev2">&gt;&gt; 7.0.0.201006141710 or using gdb it runs normally.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If you change the command in the function popen  to another one(for
</span><br>
<span class="quotelev2">&gt;&gt; instance: &quot;ls -l&quot;), it will run correctly.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I use the following commands to compile and run the program:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compile : mpicc teste.c -o teste.run
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; run : mpirun -np 4 ./teste.run
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Does anyone know why the program behaves like that?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Matheus Bersot.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_PROGRAM:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt;&gt; &gt; {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    int rank, nprocs;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    FILE * pFile = NULL;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    char mystring [100];
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    if(rank == 0)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    pFile = popen (&quot;ompi-ps&quot; , &quot;r&quot;);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    if (pFile == NULL) perror (&quot;Error opening file&quot;);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    else {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      while(!feof(pFile))
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        printf(&quot;before fgets()\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        fgets (mystring , 100 , pFile);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        printf(&quot;after fgets()\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        puts (mystring);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      pclose (pFile);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    return 0;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
-----------------------------------------------------------------
&quot;In moments of crisis, only the inspiration is more important than
knowledge.&quot;
(Albert Einstein)
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14302/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14303.php">Lewis, Ambrose J.: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Previous message:</strong> <a href="14301.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>In reply to:</strong> <a href="14281.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14306.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>Reply:</strong> <a href="14306.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
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
