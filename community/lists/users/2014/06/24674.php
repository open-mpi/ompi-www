<?
$subject_val = "Re: [OMPI users] Program abortion at a simple MPI_Get Programm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 02:35:52 2014" -->
<!-- isoreceived="20140619063552" -->
<!-- sent="Thu, 19 Jun 2014 08:35:28 +0200 (CEST)" -->
<!-- isosent="20140619063528" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program abortion at a simple MPI_Get Programm" -->
<!-- id="201406190635.s5J6ZShU022445_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Program abortion at a simple MPI_Get Programm" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program abortion at a simple MPI_Get Programm<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-19 02:35:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24675.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24673.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="24668.php">Florian Hahner: "[OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; I wrote a litte MPI program to demonstrate the mpi_get() function
</span><br>
<span class="quotelev1">&gt; (see attachment).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The idea behind the program is that a master process with rank 0
</span><br>
<span class="quotelev1">&gt; fills an integer array with the size of MPI_Comm_size with values.
</span><br>
<span class="quotelev1">&gt; The other processes should MPI_GET the value from this shared int
</span><br>
<span class="quotelev1">&gt; array at the index of their rank.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We could compile the code, but execution will raise an error.
</span><br>
<p>You use the following statements:
<br>
<p>int rank, size, *a, *b, namelen, i, sizereal, flag;
<br>
...
<br>
MPI_Win_get_attr(win, MPI_WIN_SIZE, &amp;sizereal, &amp;flag);
<br>
<p>The MPI 3.0 standard requires on page 416 that MPI_WIN_SIZE should
<br>
have type &quot;MPI_Aint *&quot;.
<br>
<p>tyr test_onesided 138 diff beispiel2_flo.c*
<br>
18c18
<br>
&lt;       int rank, size, *a, *b, namelen, i,  flag;
<br>
<pre>
---
&gt;       int rank, size, *a, *b, namelen, i, sizereal, flag;
21d20
&lt;       MPI_Aint *sizereal;
44c43
&lt;       {
---
&gt;       {+
54c53
&lt;           printf(&quot;Real Size %d\n&quot;, *sizereal); 
---
&gt;           printf(&quot;Real Size %d\n&quot;, sizereal); 
59c58
&lt;         printf (&quot;Process %d after MPI_Win_create()\n&quot;, rank);
---
&gt;         printf (&quot;Process %d after MPI_Win_create()\n&quot;);
77c76
&lt;         printf(&quot;Prozess %d# hat Wert %d von Prozess 0 geholt\n&quot;, rank, *b);
---
&gt;         printf(&quot;Prozess %d# hat Wert %d von Prozess 0 geholt\n&quot;, rank, b);
[2]  - Done                          xemacs beispiel2_flo.c
tyr test_onesided 139 
If you change the type of &quot;sizereal&quot; and fix some more bugs, you
get what you want.
tyr test_onesided 139 mpiexec -np 2 a.out
Guten Tag. Ich bin Prozess 1 von 2. Ich werde auf Host tyr.informatik.hs-fulda.de ausgefuehrt
Guten Tag. Ich bin Prozess 0 von 2. Ich werde auf Host tyr.informatik.hs-fulda.de ausgefuehrt
a[0]=0
a[1]=100
ok1
ok1
Process 1 after MPI_Win_create()
ok3
ok2
Real Size 8
ok3
Prozess 1# hat Wert 100 von Prozess 0 geholt
tyr test_onesided 140 
Kind regards
Siegmar
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24675.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24673.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="24668.php">Florian Hahner: "[OMPI users] Program abortion at a simple MPI_Get Programm"</a>
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
