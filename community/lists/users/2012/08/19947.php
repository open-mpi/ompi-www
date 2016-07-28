<?
$subject_val = "[OMPI users] mpi_group_incl erros";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 16 08:07:27 2012" -->
<!-- isoreceived="20120816120727" -->
<!-- sent="Thu, 16 Aug 2012 05:07:22 -0700 (PDT)" -->
<!-- isosent="20120816120722" -->
<!-- name="maryam moein" -->
<!-- email="maryam_moein2005_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_group_incl erros" -->
<!-- id="1345118842.19217.YahooMailNeo_at_web125804.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] mpi_group_incl erros<br>
<strong>From:</strong> maryam moein (<em>maryam_moein2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-16 08:07:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19948.php">Ralph Castain: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Previous message:</strong> <a href="19946.php">Jeff Squyres: "Re: [OMPI users] [MARKETING] Compiling an OpenMPI application with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19948.php">Ralph Castain: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Reply:</strong> <a href="19948.php">Ralph Castain: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm new memeber in this weblog, and I should deliver my assignment as soon as possible, but I have a big problem that I can't solve it. Please help me. In MPI I should divide my group into two groups. But all the time when I want to run a program I got error about mpi_group_incl. This is my error:&#160;

[ubuntu:3346] *** An error occurred in MPI_Group_incl
[ubuntu:3346] *** on communicator MPI_COMM_WORLD
[ubuntu:3346] *** MPI_ERR_RANK: invalid rank
[ubuntu:3346] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
--------------------------------------------------------------------------
mpiexec has exited due to process rank 0 with PID 3345 on
node ubuntu exiting without calling &quot;finalize&quot;. This may
have caused other processes in the application to be
terminated by signals sent by mpiexec (as reported here).


I should mention that I run this program with diffrent number of process but I got same errors. In below you can find my c program.

&#160;#include &lt;stdio.h&gt;
#include &quot;mpi.h&quot;
#include &lt;unistd.h&gt;
#include &lt;time.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
void main(int argc, char *argv[]) 
{
&#160;&#160;&#160;&#160;&#160; int Iam, p;
&#160;&#160;&#160;&#160;&#160; int Neven, Nodd, members[6], even_rank, odd_rank;
&#160;&#160;&#160;&#160;&#160; MPI_Group group_world, even_group, odd_group;
/* Starts MPI processes ... */
&#160;&#160;&#160;&#160;&#160; MPI_Init(&amp;argc, &amp;argv);&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* starts MPI */
&#160;&#160;&#160;&#160;&#160; MPI_Comm_rank(MPI_COMM_WORLD, &amp;Iam);&#160; /* get current process id */
&#160;&#160;&#160;&#160;&#160; MPI_Comm_size(MPI_COMM_WORLD, &amp;p);&#160;&#160;&#160; /* get number of processes */
&#160;&#160;&#160;&#160;&#160; Neven = (p + 1)/2;&#160;&#160;&#160;&#160; /* All processes of MPI_COMM_WORLD are divided */
&#160;&#160;&#160;&#160;&#160; Nodd = p - Neven;&#160;&#160;&#160;&#160;&#160; /* into 2 groups, odd- and even-numbered groups */
&#160;&#160;&#160;&#160;&#160; members[0] = 2;
&#160;&#160;&#160;&#160;&#160; members[1] = 0;
&#160;&#160;&#160;&#160;&#160; members[2] = 4;
&#160;&#160;&#160;&#160;&#160; MPI_Comm_group(MPI_COMM_WORLD, &amp;group_world);
&#160;&#160;&#160;&#160;&#160; MPI_Group_incl(group_world, Neven, members, &amp;even_group);
&#160;&#160;&#160;&#160;&#160; MPI_Group_excl(group_world, Neven, members,&#160; &amp;odd_group);

&#160;&#160;&#160;&#160;&#160; MPI_Barrier(MPI_COMM_WORLD);
&#160;&#160;&#160;&#160;&#160; if(Iam == 0) {
&#160;&#160;&#160;&#160;&#160;&#160;&#160; printf(&quot;MPI_Group_incl/excl Usage Example\n&quot;);
&#160;&#160;&#160;&#160;&#160;&#160;&#160; printf(&quot;\n&quot;);
&#160;&#160;&#160;&#160;&#160;&#160;&#160; printf(&quot;Number of processes is %d\n&quot;, p);
&#160;&#160;&#160;&#160;&#160;&#160;&#160; printf(&quot;Number of odd processes is %d\n&quot;, Nodd);
&#160;&#160;&#160;&#160;&#160;&#160;&#160; printf(&quot;Number of even processes is %d\n&quot;, Neven);
&#160;&#160;&#160;&#160;&#160;&#160;&#160; printf(&quot;\n&quot;);
&#160;&#160;&#160;&#160;&#160;&#160;&#160; printf(&quot;&#160;&#160;&#160;&#160; Iam&#160;&#160;&#160;&#160; even&#160;&#160;&#160;&#160;&#160; odd\n&quot;);
&#160;&#160;&#160;&#160;&#160; }
&#160;&#160;&#160;&#160;&#160; MPI_Barrier(MPI_COMM_WORLD);

&#160;&#160;&#160;&#160;&#160; MPI_Group_rank(even_group, &amp;even_rank);
&#160;&#160;&#160;&#160;&#160; MPI_Group_rank( odd_group,&#160; &amp;odd_rank);
&#160;&#160;&#160;&#160;&#160; printf(&quot;%d %d %d\n&quot;,Iam, even_rank, odd_rank);

&#160;&#160;&#160;&#160;&#160; MPI_Finalize();&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* let MPI finish up ...&#160; */
}&#160;&#160;&#160;&#160; 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19947/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19948.php">Ralph Castain: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Previous message:</strong> <a href="19946.php">Jeff Squyres: "Re: [OMPI users] [MARKETING] Compiling an OpenMPI application with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19948.php">Ralph Castain: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Reply:</strong> <a href="19948.php">Ralph Castain: "Re: [OMPI users] mpi_group_incl erros"</a>
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
