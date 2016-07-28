<?
$subject_val = "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 18:05:26 2010" -->
<!-- isoreceived="20100923220526" -->
<!-- sent="Thu, 23 Sep 2010 16:05:21 -0600" -->
<!-- isosent="20100923220521" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command" -->
<!-- id="AANLkTi=Y=MGF59x1XYgGXvfWjxQj+41U63UuUBEx56qe_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikKpwaY0oq9sDWgCT4Gr_XQcKQZ-5Em9PyrkjO=_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 18:05:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI users] Running on crashing nodes"</a>
<li><strong>Previous message:</strong> <a href="14305.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14302.php">Matheus Bersot Siqueira Barros: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17138.php">Randolph Pullen: "[OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17138.php">Randolph Pullen: "[OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ompi-ps talks to mpirun to get the info, and then pretty-prints it to
<br>
stderr. Best guess is that it is having problems contacting mpirun. Are you
<br>
running it on the same node as mpirun (a requirement, unless you pass it the
<br>
full contact info)?
<br>
<p>Check the ompi-ps man page and also &quot;ompi-ps -h&quot; to ensure you are running
<br>
it correctly. There may be options that would help to figure out what is
<br>
wrong (I forget what they all are).
<br>
<p><p><p>On Thu, Sep 23, 2010 at 12:21 PM, Matheus Bersot Siqueira Barros &lt;
<br>
matheusbersotsb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff and Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I'm not running on machines with OpenFabrics.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) In my example, ompi-ps prints a maximum 82 bytes per line. Even so, I
</span><br>
<span class="quotelev1">&gt; augment to 300 bytes per line to be sure that it is not the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; char mystring [300];
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; fgets (mystring , 300 , pFile);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) When I run ps, it shows just two process: ps and bash.
</span><br>
<span class="quotelev1">&gt; PID TTY          TIME  CMD
</span><br>
<span class="quotelev1">&gt; 1961 pts/5    00:00:00 bash
</span><br>
<span class="quotelev1">&gt; 2154 pts/5    00:00:00 ps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when I run ps -a -l, it appears my program(test.run) and other
</span><br>
<span class="quotelev1">&gt; processes. I put below just the information related to my program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; F S   UID   PID  PPID  C PRI  NI ADDR SZ WCHAN  TTY          TIME CMD
</span><br>
<span class="quotelev1">&gt; 0 S  1000  1841  1840  0  80   0 - 18054 pipe_w pts/0    00:00:00 test.run
</span><br>
<span class="quotelev1">&gt; 0 S  1000  1842  1840  0  80   0 - 18053 poll_s pts/0    00:00:00 test.run
</span><br>
<span class="quotelev1">&gt; 0 S  1000  1843  1840  0  80   0 - 18053 poll_s pts/0    00:00:00 test.run
</span><br>
<span class="quotelev1">&gt; 0 S  1000  1844  1840  0  80   0 - 18053 poll_s pts/0    00:00:00 test.run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pipe_s  = wait state on read/write against a pipe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, with that command I concluded that one mpi process is waiting for the
</span><br>
<span class="quotelev1">&gt; read of a pipe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem still persists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Matheus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 22, 2010 at 11:24 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Printouts of less than 100 bytes would be unusual...but possible
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Sep 22, 2010 at 8:15 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you running on machines with OpenFabrics devices (that Open MPI is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is ompi-ps printing 100 bytes or more?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What does ps show when your program is hung?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 17, 2010, at 3:13 PM, Matheus Bersot Siqueira Barros wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Open MPI Version = 1.4.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; OS = Ubuntu 10.04 LTS and CentOS 5.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; When I run the mpi program below in the terminal, the function fgets
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hangs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; How do I know it? I do a printf before and later the call of fgets and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only the message &quot;before fgets()&quot; is showed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; However, when I run the same program at Eclipse 3.6 with CDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7.0.0.201006141710 or using gdb it runs normally.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; If you change the command in the function popen  to another one(for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instance: &quot;ls -l&quot;), it will run correctly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I use the following commands to compile and run the program:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; compile : mpicc teste.c -o teste.run
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; run : mpirun -np 4 ./teste.run
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Does anyone know why the program behaves like that?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Matheus Bersot.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_PROGRAM:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    int rank, nprocs;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    FILE * pFile = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    char mystring [100];
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    if(rank == 0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    {
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    pFile = popen (&quot;ompi-ps&quot; , &quot;r&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    if (pFile == NULL) perror (&quot;Error opening file&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;      while(!feof(pFile))
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;      {
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        printf(&quot;before fgets()\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        fgets (mystring , 100 , pFile);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        printf(&quot;after fgets()\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        puts (mystring);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;      pclose (pFile);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   }
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &quot;In moments of crisis, only the inspiration is more important than
</span><br>
<span class="quotelev1">&gt; knowledge.&quot;
</span><br>
<span class="quotelev1">&gt; (Albert Einstein)
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14306/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI users] Running on crashing nodes"</a>
<li><strong>Previous message:</strong> <a href="14305.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14302.php">Matheus Bersot Siqueira Barros: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17138.php">Randolph Pullen: "[OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17138.php">Randolph Pullen: "[OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
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
