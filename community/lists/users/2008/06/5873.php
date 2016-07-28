<?
$subject_val = "Re: [OMPI users] OpenMPI bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 13 05:13:50 2008" -->
<!-- isoreceived="20080613091350" -->
<!-- sent="Fri, 13 Jun 2008 11:13:44 +0200" -->
<!-- isosent="20080613091344" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI bug?" -->
<!-- id="3a37617f0806130213v12da07c9k913f490df55d80c1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3a37617f0806130209v7eb9883cyff67eb96ee630878_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-06-13 05:13:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5874.php">Mattijs Janssens: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<li><strong>Previous message:</strong> <a href="5872.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>In reply to:</strong> <a href="5872.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5916.php">Jeff Squyres: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>Reply:</strong> <a href="5916.php">Jeff Squyres: "Re: [OMPI users] OpenMPI bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sorry.
<br>
The previous code block reported, is referred to 32 bit not 64. So, the
<br>
right code block is:
<br>
<p>static inline int opal_atomic_cmpset_32( volatile int32_t *addr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int32_t oldval, int32_t newval)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;unsigned char ret;
<br>
&nbsp;&nbsp;&nbsp;__asm__ __volatile (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMPLOCK &quot;cmpxchgl %1,%2   \n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;sete     %0      \n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;=qm&quot; (ret)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*: &quot;q&quot;(newval), &quot;m&quot;(*(volatile long*)addr),
<br>
&quot;a&quot;(oldval)*   //&lt;&lt;&lt;&lt;&lt; HERE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;memory&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;return (int)ret;
<br>
}
<br>
<p>2008/6/13 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Maybe, i solved this bug, deleting long cast.
</span><br>
<span class="quotelev1">&gt; Now, in compile time, it works well, but at runtime, there are other
</span><br>
<span class="quotelev1">&gt; problems, like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:Bounds error: pointer arithmetic
</span><br>
<span class="quotelev1">&gt; would overrun the end of the object.
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:  Pointer value: 0x8, Size: 8
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:  Object `orte_system_info':
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:    Address in memory:    0x0 .. 0xf
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:    Size:                 64 bytes
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:    Element size:         1 bytes
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:    Number of elements:   64
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:    Created at:
</span><br>
<span class="quotelev1">&gt; util/sys_info.c, line 43
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:    Storage class:        static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are very much error of this type, differenting by line code error in
</span><br>
<span class="quotelev1">&gt; /opal/class/opal_object.h: . All errors are generated by same line code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; util/sys_info.c, line 43
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Final status of MPI Job is ever &quot;Undefined&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/6/12 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found that the error starts in this line code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static opal_atomic_lock_t class_lock = { { OPAL_ATOMIC_UNLOCKED } };
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in class/opal_object.c, line 52
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and generates the bound error in this code block:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static inline int opal_atomic_cmpset_64( volatile int64_t *addr,
</span><br>
<span class="quotelev2">&gt;&gt;                                          int64_t oldval, int64_t newval)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    unsigned char ret;
</span><br>
<span class="quotelev2">&gt;&gt;    __asm__ __volatile (
</span><br>
<span class="quotelev2">&gt;&gt;                        SMPLOCK &quot;cmpxchgq %1,%2   \n\t&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                &quot;sete     %0      \n\t&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                        : &quot;=qm&quot; (ret)
</span><br>
<span class="quotelev2">&gt;&gt;                       * : &quot;q&quot;(newval), &quot;m&quot;(*((volatile long*)addr)),
</span><br>
<span class="quotelev2">&gt;&gt; &quot;a&quot;(oldval)*   //&lt;&lt;&lt;&lt;&lt; HERE
</span><br>
<span class="quotelev2">&gt;&gt;                        : &quot;memory&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    return (int)ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in /opal/include/opal/sys/amd64/atomic.h, at line 89
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The previous enviroment variable is GCC_BOUNDS_OPTS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2008/6/12 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i have installed OpenMPI 1.2.6, using gcc with bounds checking. But, when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i compile an MPI program, i have many time the same error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Address in memory:    0x8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .. 0xb
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Size:                 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Element size:         1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Number of elements:   4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Created at:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; class/opal_object.c, line 52
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Storage class:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../opal/include/opal/sys/amd64/atomic.h:89:Bounds error: attempt to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reference memory overrunning the end of an object.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../opal/include/opal/sys/amd64/atomic.h:89:  Pointer value: 0x8, Size: 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting the enviroment variable to &quot;-never-fatal&quot;, the compile phase,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ends successfull. But, at runtime, i have ever the error above, very much
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time, and the program fails, with &quot;undefined status&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this an OpenMPI bug?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.cineca.it Tel: +39 051 6171722
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it Tel: +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5873/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5874.php">Mattijs Janssens: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<li><strong>Previous message:</strong> <a href="5872.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>In reply to:</strong> <a href="5872.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5916.php">Jeff Squyres: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>Reply:</strong> <a href="5916.php">Jeff Squyres: "Re: [OMPI users] OpenMPI bug?"</a>
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
