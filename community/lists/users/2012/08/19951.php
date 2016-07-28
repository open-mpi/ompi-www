<?
$subject_val = "Re: [OMPI users] mpi_group_incl erros";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 16 15:30:58 2012" -->
<!-- isoreceived="20120816193058" -->
<!-- sent="Thu, 16 Aug 2012 12:30:52 -0700 (PDT)" -->
<!-- isosent="20120816193052" -->
<!-- name="maryam moein" -->
<!-- email="maryam_moein2005_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_group_incl erros" -->
<!-- id="1345145452.86884.YahooMailNeo_at_web125803.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="27E18564-3050-40D4-9503-94C239C489D9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_group_incl erros<br>
<strong>From:</strong> maryam moein (<em>maryam_moein2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-16 15:30:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19952.php">matty hbnkjb: "[OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<li><strong>Previous message:</strong> <a href="19950.php">eatdirt: "[OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)"</a>
<li><strong>In reply to:</strong> <a href="19949.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19954.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Reply:</strong> <a href="19954.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm so sorry, Actually my problem is in another mpi program which is 
&quot;sudoku game&quot;. But because of the fact I got inclusion error whenever I 
use MPI_Group_incl. For simplicity, I decided to put a simple program 
with MPI_Group_incl. Please take a look at the following lines of code, 
and please note that in this program I'm supposed to work just with 82 
processes and I tried to divide the processes into 2 groups, namely 
&quot;master&quot; and &quot;workers&quot;, master for &quot;rank 0&quot; process and workers for rest of processes(81 processes). 


Here is the codes:

#include &lt;string.h&gt;
#include &quot;mpi.h&quot;
#include &lt;stdio.h&gt;
#include &lt;unistd.h&gt;
#include
 &lt;time.h&gt;
#include &lt;stdlib.h&gt;

int main(int argc, char *argv[])
{

&#160;&#160;&#160;&#160;&#160;&#160;&#160; //Initializing the MPI world, rank, and size
&#160;&#160;&#160;&#160; &#160; int&#160; size,rank,m,w,i;
&#160; &#160;&#160; &#160; MPI_Group group,master,workers;
&#160; &#160; &#160;&#160; MPI_Comm comm_world, comm_workers, comm_master;
&#160;&#160; &#160;&#160;&#160; MPI_Status status;
&#160;&#160;&#160;&#160;&#160;&#160;&#160; MPI_Request request;
&#160;&#160;&#160;&#160;&#160;&#160;&#160; MPI_Init(&amp;argc, &amp;argv);
&#160; &#160;&#160;&#160; &#160;&#160; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
&#160;&#160;&#160; &#160;&#160;&#160; &#160;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160; if (size != 82 ){
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; printf(&quot;Please run with 82
 processors.\n&quot;);
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; fflush(stdout);
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MPI_Finalize();
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; exit(1);
&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160; &#160;}
&#160;&#160;&#160; comm_world = MPI_COMM_WORLD;
&#160;&#160;&#160; MPI_Comm_group(comm_world, &amp;group);
&#160;&#160;&#160; MPI_Group_incl(group, 1, 0 , &amp;master);
&#160;&#160;&#160; MPI_Group_excl(group, 1, 0, &amp;workers);
&#160;&#160;&#160; MPI_Comm_create(comm_world, master, &amp;comm_master);
&#160;&#160;&#160; MPI_Comm_create(comm_world, workers, &amp;comm_workers);

&#160;&#160;&#160; MPI_Finalize();
}


________________________________
 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt; 
Cc: maryam moein &lt;maryam_moein2005_at_[hidden]&gt; 
Sent: Thursday, August 16, 2012 7:41 PM
Subject: Re: [OMPI users] mpi_group_incl erros
 
Further, if Neven is greater than 3, then you've got uninitialized values in the members array.&#160; That could be causing Open MPI to say &quot;there's a bad rank number in there!&quot;, for example, if members[3] is randomly initialized to 1234.


On Aug 16, 2012, at 10:01 AM, Ralph Castain wrote:

&gt; Well, one thing immediately leaps to the eye. You compute Neven based on the number of procs in the job, which you set when executing mpirun. However, the number of members you put in your group is fixed. Then you pass Neven to the MPI_Group call as the parameter telling it how many entries are in your member array!
&gt; 
&gt; On Aug 16, 2012, at 5:07 AM, maryam moein &lt;maryam_moein2005_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; I'm new memeber in this weblog, and I should deliver my assignment as soon as possible, but I have a big problem that I can't solve it. Please help me. In MPI I should divide my group into two groups. But all the time when I want to run a program I got error about mpi_group_incl. This is my error: 
&gt;&gt; 
&gt;&gt; [ubuntu:3346] *** An error occurred in MPI_Group_incl
&gt;&gt; [ubuntu:3346] *** on communicator MPI_COMM_WORLD
&gt;&gt; [ubuntu:3346] *** MPI_ERR_RANK: invalid rank
&gt;&gt; [ubuntu:3346] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt; mpiexec has exited due to process rank 0 with PID 3345 on
&gt;&gt; node ubuntu exiting without calling &quot;finalize&quot;. This may
&gt;&gt; have caused other processes in the application to be
&gt;&gt; terminated by signals sent by mpiexec (as reported here).
&gt;&gt; 
&gt;&gt; 
&gt;&gt; I should mention that I run this program with diffrent number of process but I got same errors. In below you can find my c program.
&gt;&gt; 
&gt;&gt;&#160; #include &lt;stdio.h&gt;
&gt;&gt; #include &quot;mpi.h&quot;
&gt;&gt; #include &lt;unistd.h&gt;
&gt;&gt; #include &lt;time.h&gt;
&gt;&gt; #include &lt;stdlib.h&gt;
&gt;&gt; #include &lt;string.h&gt;
&gt;&gt; void main(int argc, char *argv[]) 
&gt;&gt; {
&gt;&gt;&#160; &#160; &#160;  int Iam, p;
&gt;&gt;&#160; &#160; &#160;  int Neven, Nodd, members[6], even_rank, odd_rank;
&gt;&gt;&#160; &#160; &#160;  MPI_Group group_world, even_group, odd_group;
&gt;&gt; /* Starts MPI processes ... */
&gt;&gt;&#160; &#160; &#160;  MPI_Init(&amp;argc, &amp;argv);&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; /* starts MPI */
&gt;&gt;&#160; &#160; &#160;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;Iam);&#160; /* get current process id */
&gt;&gt;&#160; &#160; &#160;  MPI_Comm_size(MPI_COMM_WORLD, &amp;p);&#160; &#160; /* get number of processes */
&gt;&gt;&#160; &#160; &#160;  Neven = (p + 1)/2;&#160; &#160;  /* All processes of MPI_COMM_WORLD are divided */
&gt;&gt;&#160; &#160; &#160;  Nodd = p - Neven;&#160; &#160; &#160; /* into 2 groups, odd- and even-numbered groups */
&gt;&gt;&#160; &#160; &#160;  members[0] = 2;
&gt;&gt;&#160; &#160; &#160;  members[1] = 0;
&gt;&gt;&#160; &#160; &#160;  members[2] = 4;
&gt;&gt;&#160; &#160; &#160;  MPI_Comm_group(MPI_COMM_WORLD, &amp;group_world);
&gt;&gt;&#160; &#160; &#160;  MPI_Group_incl(group_world, Neven, members, &amp;even_group);
&gt;&gt;&#160; &#160; &#160;  MPI_Group_excl(group_world, Neven, members,&#160; &amp;odd_group);
&gt;&gt; 
&gt;&gt;&#160; &#160; &#160;  MPI_Barrier(MPI_COMM_WORLD);
&gt;&gt;&#160; &#160; &#160;  if(Iam == 0) {
&gt;&gt;&#160; &#160; &#160; &#160;  printf(&quot;MPI_Group_incl/excl Usage Example\n&quot;);
&gt;&gt;&#160; &#160; &#160; &#160;  printf(&quot;\n&quot;);
&gt;&gt;&#160; &#160; &#160; &#160;  printf(&quot;Number of processes is %d\n&quot;, p);
&gt;&gt;&#160; &#160; &#160; &#160;  printf(&quot;Number of odd processes is %d\n&quot;, Nodd);
&gt;&gt;&#160; &#160; &#160; &#160;  printf(&quot;Number of even processes is %d\n&quot;, Neven);
&gt;&gt;&#160; &#160; &#160; &#160;  printf(&quot;\n&quot;);
&gt;&gt;&#160; &#160; &#160; &#160;  printf(&quot;&#160; &#160;  Iam&#160; &#160;  even&#160; &#160; &#160; odd\n&quot;);
&gt;&gt;&#160; &#160; &#160;  }
&gt;&gt;&#160; &#160; &#160;  MPI_Barrier(MPI_COMM_WORLD);
&gt;&gt; 
&gt;&gt;&#160; &#160; &#160;  MPI_Group_rank(even_group, &amp;even_rank);
&gt;&gt;&#160; &#160; &#160;  MPI_Group_rank( odd_group,&#160; &amp;odd_rank);
&gt;&gt;&#160; &#160; &#160;  printf(&quot;%d %d %d\n&quot;,Iam, even_rank, odd_rank);
&gt;&gt; 
&gt;&gt;&#160; &#160; &#160;  MPI_Finalize();&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; /* let MPI finish up ...&#160; */
&gt;&gt; }&#160; &#160; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19951/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19952.php">matty hbnkjb: "[OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<li><strong>Previous message:</strong> <a href="19950.php">eatdirt: "[OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)"</a>
<li><strong>In reply to:</strong> <a href="19949.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19954.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Reply:</strong> <a href="19954.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
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
