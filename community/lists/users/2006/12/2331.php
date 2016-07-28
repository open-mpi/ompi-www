<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  8 13:37:00 2006" -->
<!-- isoreceived="20061208183700" -->
<!-- sent="Fri, 08 Dec 2006 13:36:52 -0500" -->
<!-- isosent="20061208183652" -->
<!-- name="Allen Barnett" -->
<!-- email="allen_at_[hidden]" -->
<!-- subject="[OMPI users] Hang with Mixed Machines" -->
<!-- id="1165603012.21487.288.camel_at_capybara.lan" -->
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
<strong>From:</strong> Allen Barnett (<em>allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-08 13:36:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2332.php">Adrian Knoth: "Re: [OMPI users] Hang with Mixed Machines"</a>
<li><strong>Previous message:</strong> <a href="2330.php">Jeff Squyres: "Re: [OMPI users] configure problem using g77 on OSX 10.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2332.php">Adrian Knoth: "Re: [OMPI users] Hang with Mixed Machines"</a>
<li><strong>Reply:</strong> <a href="2332.php">Adrian Knoth: "Re: [OMPI users] Hang with Mixed Machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
I have a &quot;cluster&quot; consisting of a dual Opteron system (called a.lan)
<br>
and a dual AthlonMP system (b.lan). Both systems are running Red Hat
<br>
Enterprise Linux 4. The opteron system runs in 64-bit mode; the AthlonMP
<br>
in 32-bit. I can't seem to make OpenMPI work between these two machines.
<br>
I've tried 1.1.2, 1.1.3b1, and 1.2b1 and they all exhibit the same
<br>
behavior, namely that Bcasts won't complete. Here's my simple.cpp test
<br>
program:
<br>
<p>#include &lt;iostream&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main ( int argc, char* argv[] )
<br>
{
<br>
&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;char hostname[256];
<br>
&nbsp;&nbsp;int hostname_size = sizeof(hostname);
<br>
&nbsp;&nbsp;MPI_Get_processor_name( hostname, &amp;hostname_size );
<br>
&nbsp;&nbsp;std::cout &lt;&lt; &quot;Running on &quot; &lt;&lt; hostname &lt;&lt; std::endl;
<br>
<p>&nbsp;&nbsp;std::cout &lt;&lt; hostname &lt;&lt;  &quot; in to Bcast&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;double a = 3.14159;
<br>
&nbsp;&nbsp;MPI_Bcast( &amp;a, 1, MPI_DOUBLE, 0, MPI_COMM_WORLD );
<br>
&nbsp;&nbsp;std::cout &lt;&lt; hostname &lt;&lt; &quot; out of Bcast&quot; &lt;&lt; std::endl;
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>I compile this and run it with &quot;mpirun --host a.lan --host b.lan
<br>
simple&quot;. Generally, if I'm on a.lan, I see:
<br>
<p>Running on a.lan
<br>
a.lan in to Bcast
<br>
Running on b.lan
<br>
a.lan out of Bcast
<br>
b.lan in to Bcast
<br>
&lt;then both processes hang, with the one on b.lan at 100% cpu&gt;
<br>
<p>If I launch from b.lan, then the reverse happens (i.e., it exits the
<br>
Bcast on b.lan, but never exits Bcast on a.lan and a.lan uses 100% cpu).
<br>
<p>On the other hand, I have another 32-bit system (just a plain Athlon
<br>
running RHEL 4, called c.lan). My test program runs fine between b.lan
<br>
and c.lan.
<br>
<p>I feel like I must be making an incredibly obvious mistake.
<br>
<p>Thanks,
<br>
Allen
<br>
<p><pre>
-- 
Allen Barnett
Transpire, Inc.
E-Mail: allen_at_[hidden]
Ph: 518-887-2930
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2332.php">Adrian Knoth: "Re: [OMPI users] Hang with Mixed Machines"</a>
<li><strong>Previous message:</strong> <a href="2330.php">Jeff Squyres: "Re: [OMPI users] configure problem using g77 on OSX 10.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2332.php">Adrian Knoth: "Re: [OMPI users] Hang with Mixed Machines"</a>
<li><strong>Reply:</strong> <a href="2332.php">Adrian Knoth: "Re: [OMPI users] Hang with Mixed Machines"</a>
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
