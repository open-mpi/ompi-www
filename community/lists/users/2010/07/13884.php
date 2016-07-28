<?
$subject_val = "Re: [OMPI users] Help on the big picture..";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 30 19:40:20 2010" -->
<!-- isoreceived="20100730234020" -->
<!-- sent="Fri, 30 Jul 2010 16:42:24 -0700" -->
<!-- isosent="20100730234224" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on the big picture.." -->
<!-- id="4C536360.5000905_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikLwRNVJShxgentStVaODFyekqo8LD0shcRRlmb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help on the big picture..<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-30 19:42:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13885.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="13883.php">LB: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<li><strong>In reply to:</strong> <a href="13757.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13767.php">Tim Prince: "Re: [OMPI users] Help on the big picture.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two comments interwoven below...
<br>
<p>Cristobal Navarro wrote:
<br>
<p><span class="quotelev1">&gt;i was not aware that openMPI internally uses shared memory in case two
</span><br>
<span class="quotelev1">&gt;proceses reside on the same node,
</span><br>
<span class="quotelev1">&gt;which is perfect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
The ways OMP uses shared memory and Open MPI (or most other MPI 
<br>
implementations) uses shared memory are very different.  For each 
<br>
&quot;phase&quot; of computation, with OMP you can use a different rule for what 
<br>
thread computes which grid values.  Any thread can read any data values 
<br>
it needs.  In contrast, with MPI, a process needs to have locally all 
<br>
the data it needs to compute.  So, you don't want to change &quot;ownership&quot; 
<br>
of data very often and shared values must be communicated explicitly.  
<br>
The fact that this data sharing is implemented with shared memory is 
<br>
almost irrelevent.  That's a detail that's mostly hidden from the 
<br>
application programmer.
<br>
<p>Again:  how OMP and MPI use &quot;shared memory&quot; are radically different.  
<br>
&nbsp;From an application programmer's point of view, there really is no 
<br>
similarity.
<br>
<p><span class="quotelev1">&gt;On Thu, Jul 22, 2010 at 7:11 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Cristobal Navarro wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;i've alwyas wondered if its a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;good idea to model a solution on the following way, using both openMP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;and openMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;2) Most modern MPI implementations (and OpenMPI is an example) use shared
</span><br>
<span class="quotelev2">&gt;&gt;memory mechanisms to communicate between processes that reside
</span><br>
<span class="quotelev2">&gt;&gt;in a single physical node/computer;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;By contrast, MPI requires more effort to program, but it takes advantage
</span><br>
<span class="quotelev2">&gt;&gt;of shared memory and networked environments
</span><br>
<span class="quotelev2">&gt;&gt;(and perhaps extended grids too).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
Because MPI forces a strict decomposition of the data, it can be more 
<br>
difficult from an application programmer's point of view.  Further, it 
<br>
can force more data copying, even if that copying is made relatively 
<br>
fast by using &quot;shared memory.&quot;  On the other hand, an MPI program can 
<br>
therefore have better data locality and therefore be more efficient... 
<br>
such program reorganization can also benefit OMP codes.
<br>
<p>Mostly, &quot;it depends&quot; on your particular application.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13885.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="13883.php">LB: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<li><strong>In reply to:</strong> <a href="13757.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13767.php">Tim Prince: "Re: [OMPI users] Help on the big picture.."</a>
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
