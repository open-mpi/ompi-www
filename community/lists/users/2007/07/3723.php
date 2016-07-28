<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 10:15:19 2007" -->
<!-- isoreceived="20070719141519" -->
<!-- sent="Thu, 19 Jul 2007 09:14:43 -0500" -->
<!-- isosent="20070719141443" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_pls_base_select fails" -->
<!-- id="18079.29139.825281.414527_at_basebud.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="18078.44246.909175.945887_at_basebud.nulle.part" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 10:14:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3724.php">Brian Barrett: "Re: [OMPI users] Problems running openmpi under os x"</a>
<li><strong>Previous message:</strong> <a href="3722.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3721.php">Dirk Eddelbuettel: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3727.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 18 July 2007 at 19:14, Dirk Eddelbuettel wrote:
<br>
| 
<br>
| Hi Tim,
<br>
| 
<br>
| Thanks for the follow-up
<br>
| 
<br>
| On 18 July 2007 at 17:22, Tim Prins wrote:
<br>
| | &lt;snip&gt;
<br>
| | &gt; Yes, this helps tremendously.  I installed rsh, and now it pretty much
<br>
| | &gt; works.
<br>
| | Glad this worked out for you.
<br>
| | 
<br>
| | &gt;
<br>
| | &gt; The one missing detail is that I can't seem to get the stdout/stderr
<br>
| | &gt; output.  For example:
<br>
| | &gt;
<br>
| | &gt; $ orterun -np 1 uptime
<br>
| | &gt; $ uptime
<br>
| | &gt; 18:24:27 up 13 days,  3:03,  0 users,  load average: 0.00, 0.03, 0.00
<br>
| | &gt;
<br>
| | &gt; The man page indicates that stdout/stderr is supposed to come back to
<br>
| | &gt; the stdout/stderr of the orterun process.  Any ideas on why this isn't
<br>
| | &gt; working?
<br>
| | It should work. However, we currently have some I/O forwarding problems which 
<br>
| | show up in some environments that will (hopefully) be fixed in the next 
<br>
| | release. As far as I know, the problem seems to happen mostly with non-mpi 
<br>
| | applications.
<br>
| | 
<br>
| | Try running a simple mpi application, such as:
<br>
| | 
<br>
| | #include &lt;stdio.h&gt;
<br>
| | #include &quot;mpi.h&quot;
<br>
| | 
<br>
| | int main(int argc, char* argv[])
<br>
| | {
<br>
| |     int rank, size;
<br>
| | 
<br>
| |     MPI_Init(&amp;argc, &amp;argv);
<br>
| |     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
| |     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
| |     printf(&quot;Hello, world, I am %d of %d\n&quot;, rank, size);
<br>
| |     MPI_Finalize();
<br>
| | 
<br>
| |     return 0;
<br>
| | }
<br>
| | 
<br>
| | If that works fine, then it is probably our problem, and not a problem with 
<br>
| | your setup.
<br>
| | 
<br>
| | Sorry I don't have a better answer :(
<br>
| 
<br>
| That works (and I use the same Debian openmpi 1.2.3-1 set of packages Adam
<br>
| has): 
<br>
| 
<br>
| edd_at_basebud:~&gt; opalcc -o /tmp/openmpitest /tmp/openmpitest.c -lmpi
<br>
| edd_at_basebud:~&gt; orterun -np 4 /tmp/openmpitest
<br>
| Hello, world, I am 2 of 4
<br>
| Hello, world, I am 1 of 4
<br>
| Hello, world, I am 0 of 4
<br>
| Hello, world, I am 3 of 4
<br>
| edd_at_basebud:~&gt;                
<br>
| 
<br>
| I was toying with this at work earlier, and it was hanging there (using
<br>
| hostname or uptime as the token binaries) as soon as I increased the np
<br>
| parameter beyond 1. 
<br>
| 
<br>
| It works here:
<br>
| 
<br>
| edd_at_basebud:~&gt; orterun -np 4 hostname
<br>
| basebud
<br>
| basebud
<br>
| basebud
<br>
| basebud
<br>
| edd_at_basebud:~&gt;
<br>
| 
<br>
| I have slurm-llnl test packages installed at work but not here. Maybe I need
<br>
| to a dig a bit more into slurm.  (Adam: slurm package should be forthcoming.
<br>
| I can point you to the snapshots from the fellow whom I mentor on this.)
<br>
<p>Indeed, at work it hangs once it up the np parameter:
<br>
<p>foo:~&gt; orterun -np 4 ./openmpitest
<br>
Hello, world, I am 0 of 4
<br>
Hello, world, I am 1 of 4
<br>
Hello, world, I am 2 of 4
<br>
Hello, world, I am 3 of 4
<br>
orterun: killing job...
<br>
<p>Killed
<br>
foo:~&gt; orterun -np 4 -H localhost ./openmpitest
<br>
Hello, world, I am 1 of 4
<br>
Hello, world, I am 0 of 4
<br>
Hello, world, I am 2 of 4
<br>
Hello, world, I am 3 of 4
<br>
foo:~&gt;     
<br>
<p>Restricting it to localhost helps.  Any ideas?
<br>
<p>x86 multicore/multicpu, Open MPI 1.2.3, Slurm 1.2.11, Ubuntu 7.04 plus a
<br>
handful of handcompiled packages from Debian unstable. More details available
<br>
just tell what is needed and how best to compile it.
<br>
<p>Dirk
<br>
<p><pre>
-- 
Hell, there are no rules here - we're trying to accomplish something. 
                                                  -- Thomas A. Edison
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3724.php">Brian Barrett: "Re: [OMPI users] Problems running openmpi under os x"</a>
<li><strong>Previous message:</strong> <a href="3722.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3721.php">Dirk Eddelbuettel: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3727.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
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
