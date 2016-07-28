<?
$subject_val = "Re: [OMPI users] OpenMPI bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 12 05:05:09 2008" -->
<!-- isoreceived="20080612090509" -->
<!-- sent="Thu, 12 Jun 2008 11:05:00 +0200" -->
<!-- isosent="20080612090500" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI bug?" -->
<!-- id="3a37617f0806120205n1a1dd16ay34694ed6c6021271_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3a37617f0806120036g58e3544eq5c3f50d20aed446f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI bug?<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-12 05:05:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5865.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started"</a>
<li><strong>Previous message:</strong> <a href="5863.php">Gabriele Fatigati: "[OMPI users] OpenMPI bug?"</a>
<li><strong>In reply to:</strong> <a href="5863.php">Gabriele Fatigati: "[OMPI users] OpenMPI bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5872.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>Reply:</strong> <a href="5872.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found that the error starts in this line code:
<br>
<p>static opal_atomic_lock_t class_lock = { { OPAL_ATOMIC_UNLOCKED } };
<br>
<p>in class/opal_object.c, line 52
<br>
<p>and generates the bound error in this code block:
<br>
<p>static inline int opal_atomic_cmpset_64( volatile int64_t *addr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int64_t oldval, int64_t newval)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;unsigned char ret;
<br>
&nbsp;&nbsp;&nbsp;__asm__ __volatile (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMPLOCK &quot;cmpxchgq %1,%2   \n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;sete     %0      \n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;=qm&quot; (ret)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* : &quot;q&quot;(newval), &quot;m&quot;(*((volatile long*)addr)),
<br>
&quot;a&quot;(oldval)*   //&lt;&lt;&lt;&lt;&lt; HERE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;memory&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;return (int)ret;
<br>
}
<br>
<p>in /opal/include/opal/sys/amd64/atomic.h, at line 89
<br>
<p>The previous enviroment variable is GCC_BOUNDS_OPTS
<br>
<p>Thanks in advance.
<br>
<p><p>2008/6/12 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; i have installed OpenMPI 1.2.6, using gcc with bounds checking. But, when i
</span><br>
<span class="quotelev1">&gt; compile an MPI program, i have many time the same error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Address in memory:    0x8 ..
</span><br>
<span class="quotelev1">&gt; 0xb
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Size:                 4
</span><br>
<span class="quotelev1">&gt; bytes
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Element size:         1
</span><br>
<span class="quotelev1">&gt; bytes
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Number of elements:   4
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Created at:
</span><br>
<span class="quotelev1">&gt; class/opal_object.c, line 52
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Storage class:        static
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:Bounds error: attempt to
</span><br>
<span class="quotelev1">&gt; reference memory overrunning the end of an object.
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:  Pointer value: 0x8, Size: 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Setting the enviroment variable to &quot;-never-fatal&quot;, the compile phase, ends
</span><br>
<span class="quotelev1">&gt; successfull. But, at runtime, i have ever the error above, very much time,
</span><br>
<span class="quotelev1">&gt; and the program fails, with &quot;undefined status&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this an OpenMPI bug?
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it Tel: +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden]
</span><br>
<p><p><p><p><pre>
-- 
Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it Tel: +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5864/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5865.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started"</a>
<li><strong>Previous message:</strong> <a href="5863.php">Gabriele Fatigati: "[OMPI users] OpenMPI bug?"</a>
<li><strong>In reply to:</strong> <a href="5863.php">Gabriele Fatigati: "[OMPI users] OpenMPI bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5872.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>Reply:</strong> <a href="5872.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
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
