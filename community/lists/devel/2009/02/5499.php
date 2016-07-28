<?
$subject_val = "Re: [OMPI devel] 1.3 runtime message ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 09:20:10 2009" -->
<!-- isoreceived="20090220142010" -->
<!-- sent="Fri, 20 Feb 2009 09:18:14 -0500" -->
<!-- isosent="20090220141814" -->
<!-- name="Jim Langston" -->
<!-- email="Jim.Langston_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 runtime message ?" -->
<!-- id="499EBBA6.1010000_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AD1B5F35-D7D9-4901-B950-5E9466A6CDD1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3 runtime message ?<br>
<strong>From:</strong> Jim Langston (<em>Jim.Langston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 09:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5500.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Previous message:</strong> <a href="5498.php">Jeff Squyres: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>In reply to:</strong> <a href="5498.php">Jeff Squyres: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5500.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Reply:</strong> <a href="5500.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 19, 2009, at 4:30 PM, Jim Langston wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm just wondering if I compiled incorrectly, or if the message is 
</span><br>
<span class="quotelev2">&gt;&gt; generated because uDAPL is the default
</span><br>
<span class="quotelev2">&gt;&gt; interface (I'm on OpenSolaris), which I'm wondering if I can stop 
</span><br>
<span class="quotelev2">&gt;&gt; from being looked at, either by
</span><br>
<span class="quotelev2">&gt;&gt; compiling differently, or from the command line.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This doesn't stop the message either, but stops the noisy stuff:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orterun --mca orte_base_help_aggregate 0 --mca blt tcp -np 2 hello_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't quite parse your statement &quot;doesn't stop the message&quot; vs. &quot;but 
</span><br>
<span class="quotelev1">&gt; stops the noisy stuff&quot;.  Can you clarify what each of those means?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running with &quot;--mca btl tcp,sm,self&quot; should prevent OMPI v1.3 from 
</span><br>
<span class="quotelev1">&gt; opening the udapl BTL, and therefore that error message shouldn't appear.
</span><br>
I'm not considering this an error, the job runs without any problems. 
<br>
The orte_base_help_aggregate set to 0 stops some of the other messages 
<br>
that occur, which is great, I appreciate that option. But, the option 
<br>
does not stop the point-to-point message,
<br>
which I'm assuming, means that something is happening underneath the 
<br>
sheets and I'm being told it is getting done. With your
<br>
option:
<br>
<p>langston_at_alpha:~/OPENMPI/openmpi-1.3/examples$ orterun --mca 
<br>
orte_base_help_aggregate 0 --mca blt tcp,sm,self -np 2 hello_c
<br>
--------------------------------------------------------------------------
<br>
[[56072,1],0]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: uDAPL
<br>
&nbsp;&nbsp;Host: alpha
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
[[56072,1],1]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: uDAPL
<br>
&nbsp;&nbsp;Host: alpha
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
Hello, world, I am 0 of 2
<br>
Hello, world, I am 1 of 2
<br>
<p>////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<br>
<p>Without orte_base_help_aggregate 0:
<br>
<p>langston_at_alpha:~/OPENMPI/openmpi-1.3/examples$ orterun --mca blt 
<br>
tcp,sm,self -np 2 hello_c
<br>
--------------------------------------------------------------------------
<br>
[[56119,1],0]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: uDAPL
<br>
&nbsp;&nbsp;Host: alpha
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
Hello, world, I am 0 of 2
<br>
Hello, world, I am 1 of 2
<br>
[alpha:10021] 1 more process has sent help message help-mpi-btl-base.txt 
<br>
/ btl:no-nics
<br>
[alpha:10021] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see 
<br>
all help / error messages
<br>
<p><p>Thanks,
<br>
<p>Jim
<br>
<p><pre>
-- 
/////////////////////////////////////////////
Jim Langston
Sun Microsystems, Inc.
(877) 854-5583 (AccessLine)
(513) 702-4741 (Cell)
AIM: jl9594
jim.langston_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5500.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Previous message:</strong> <a href="5498.php">Jeff Squyres: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>In reply to:</strong> <a href="5498.php">Jeff Squyres: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5500.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Reply:</strong> <a href="5500.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
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
