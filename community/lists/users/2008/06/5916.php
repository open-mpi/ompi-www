<?
$subject_val = "Re: [OMPI users] OpenMPI bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 12:34:26 2008" -->
<!-- isoreceived="20080617163426" -->
<!-- sent="Tue, 17 Jun 2008 12:34:15 -0400" -->
<!-- isosent="20080617163415" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI bug?" -->
<!-- id="077DC66B-E817-4225-9B36-A734FF98FCB2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0806130213v12da07c9k913f490df55d80c1_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 12:34:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5917.php">Ralph H Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5915.php">Jeff Squyres: "Re: [OMPI users] Question about RDMA"</a>
<li><strong>In reply to:</strong> <a href="5873.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for digging into this!
<br>
<p>The assembly portion of OMPI is quite squirrelly and dangerous to mess  
<br>
with.  We'll need to check into this carefully to make sure that it  
<br>
works properly on all supported architectures...
<br>
<p>As for other bounds checking, would you mind checking the OMPI  
<br>
development SVN trunk instead of the v1.2 series?  We're working on  
<br>
releasing the new version (v1.3 series) and there have been many, many  
<br>
changes since the v1.2 series.  There's a little instability on the  
<br>
trunk right now with some recent PML changes that went in, but  
<br>
hopefully we'll have those solved soon.
<br>
<p><p>On Jun 13, 2008, at 5:13 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; I'm sorry.
</span><br>
<span class="quotelev1">&gt; The previous code block reported, is referred to 32 bit not 64. So,  
</span><br>
<span class="quotelev1">&gt; the right code block is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static inline int opal_atomic_cmpset_32( volatile int32_t *addr,
</span><br>
<span class="quotelev1">&gt;                                         int32_t oldval, int32_t  
</span><br>
<span class="quotelev1">&gt; newval)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    unsigned char ret;
</span><br>
<span class="quotelev1">&gt;    __asm__ __volatile (
</span><br>
<span class="quotelev1">&gt;                        SMPLOCK &quot;cmpxchgl %1,%2   \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                                &quot;sete     %0      \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                        : &quot;=qm&quot; (ret)
</span><br>
<span class="quotelev1">&gt;                        : &quot;q&quot;(newval), &quot;m&quot;(*(volatile long*)addr),  
</span><br>
<span class="quotelev1">&gt; &quot;a&quot;(oldval)   //&lt;&lt;&lt;&lt;&lt; HERE
</span><br>
<span class="quotelev1">&gt;                        : &quot;memory&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    return (int)ret;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/6/13 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Maybe, i solved this bug, deleting long cast.
</span><br>
<span class="quotelev1">&gt; Now, in compile time, it works well, but at runtime, there are other  
</span><br>
<span class="quotelev1">&gt; problems, like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:Bounds error: pointer  
</span><br>
<span class="quotelev1">&gt; arithmetic would overrun the end of the object.
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:  Pointer value: 0x8, Size: 8
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:  Object `orte_system_info':
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:    Address in memory:     
</span><br>
<span class="quotelev1">&gt; 0x0 .. 0xf
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:    Size:                 64  
</span><br>
<span class="quotelev1">&gt; bytes
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:    Element size:         1  
</span><br>
<span class="quotelev1">&gt; bytes
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:    Number of elements:   64
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:    Created at:           util/ 
</span><br>
<span class="quotelev1">&gt; sys_info.c, line 43
</span><br>
<span class="quotelev1">&gt; ../../../opal/class/opal_object.h:428:    Storage class:        static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are very much error of this type, differenting by line code  
</span><br>
<span class="quotelev1">&gt; error in /opal/class/opal_object.h: . All errors are generated by  
</span><br>
<span class="quotelev1">&gt; same line code:
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
<span class="quotelev1">&gt; I found that the error starts in this line code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static opal_atomic_lock_t class_lock = { { OPAL_ATOMIC_UNLOCKED } };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in class/opal_object.c, line 52
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and generates the bound error in this code block:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static inline int opal_atomic_cmpset_64( volatile int64_t *addr,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            int64_t oldval, int64_t newval)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    unsigned char ret;
</span><br>
<span class="quotelev1">&gt;    __asm__ __volatile (
</span><br>
<span class="quotelev1">&gt;                        SMPLOCK &quot;cmpxchgq %1,%2   \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                                &quot;sete     %0      \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                        : &quot;=qm&quot; (ret)
</span><br>
<span class="quotelev1">&gt;                        : &quot;q&quot;(newval), &quot;m&quot;(*((volatile long*)addr)),  
</span><br>
<span class="quotelev1">&gt; &quot;a&quot;(oldval)   //&lt;&lt;&lt;&lt;&lt; HERE
</span><br>
<span class="quotelev1">&gt;                        : &quot;memory&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    return (int)ret;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in /opal/include/opal/sys/amd64/atomic.h, at line 89
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The previous enviroment variable is GCC_BOUNDS_OPTS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/6/12 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i have installed OpenMPI 1.2.6, using gcc with bounds checking. But,  
</span><br>
<span class="quotelev1">&gt; when i compile an MPI program, i have many time the same error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Address in memory:     
</span><br>
<span class="quotelev1">&gt; 0x8 .. 0xb
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Size:                  
</span><br>
<span class="quotelev1">&gt; 4 bytes
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Element size:          
</span><br>
<span class="quotelev1">&gt; 1 bytes
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Number of elements:   4
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Created at:            
</span><br>
<span class="quotelev1">&gt; class/opal_object.c, line 52
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:    Storage class:         
</span><br>
<span class="quotelev1">&gt; static
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:Bounds error: attempt to  
</span><br>
<span class="quotelev1">&gt; reference memory overrunning the end of an object.
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/amd64/atomic.h:89:  Pointer value: 0x8,  
</span><br>
<span class="quotelev1">&gt; Size: 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Setting the enviroment variable to &quot;-never-fatal&quot;, the compile  
</span><br>
<span class="quotelev1">&gt; phase, ends successfull. But, at runtime, i have ever the error  
</span><br>
<span class="quotelev1">&gt; above, very much time, and the program fails, with &quot;undefined status&quot;.
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
<span class="quotelev1">&gt; g.fatigati_at_[hidden] _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5917.php">Ralph H Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5915.php">Jeff Squyres: "Re: [OMPI users] Question about RDMA"</a>
<li><strong>In reply to:</strong> <a href="5873.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
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
