<?
$subject_val = "Re: [OMPI devel] 1.3 runtime message ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 09:26:19 2009" -->
<!-- isoreceived="20090220142619" -->
<!-- sent="Fri, 20 Feb 2009 09:26:05 -0500" -->
<!-- isosent="20090220142605" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 runtime message ?" -->
<!-- id="499EBD7D.7050604_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="499EBBA6.1010000_at_sun.com" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 09:26:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5501.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Previous message:</strong> <a href="5499.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>In reply to:</strong> <a href="5499.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5501.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Reply:</strong> <a href="5501.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/20/09 09:18, Jim Langston wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 19, 2009, at 4:30 PM, Jim Langston wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm just wondering if I compiled incorrectly, or if the message is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generated because uDAPL is the default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface (I'm on OpenSolaris), which I'm wondering if I can stop 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from being looked at, either by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiling differently, or from the command line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This doesn't stop the message either, but stops the noisy stuff:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun --mca orte_base_help_aggregate 0 --mca blt tcp -np 2 hello_c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't quite parse your statement &quot;doesn't stop the message&quot; vs. 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;but stops the noisy stuff&quot;.  Can you clarify what each of those means?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running with &quot;--mca btl tcp,sm,self&quot; should prevent OMPI v1.3 from 
</span><br>
<span class="quotelev2">&gt;&gt; opening the udapl BTL, and therefore that error message shouldn't 
</span><br>
<span class="quotelev2">&gt;&gt; appear.
</span><br>
<span class="quotelev1">&gt; I'm not considering this an error, the job runs without any problems. 
</span><br>
<span class="quotelev1">&gt; The orte_base_help_aggregate set to 0 stops some of the other messages 
</span><br>
<span class="quotelev1">&gt; that occur, which is great, I appreciate that option. But, the option 
</span><br>
<span class="quotelev1">&gt; does not stop the point-to-point message,
</span><br>
<span class="quotelev1">&gt; which I'm assuming, means that something is happening underneath the 
</span><br>
<span class="quotelev1">&gt; sheets and I'm being told it is getting done. With your
</span><br>
<span class="quotelev1">&gt; option:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; langston_at_alpha:~/OPENMPI/openmpi-1.3/examples$ orterun --mca 
</span><br>
<span class="quotelev1">&gt; orte_base_help_aggregate 0 --mca blt tcp,sm,self -np 2 hello_c
</span><br>
If this is the actual run command line I believe there is a typo:  
<br>
&quot;--mca blt tcp,sm,self&quot;  should be &quot;btl&quot;
<br>
which should eliminate the point-to-point message.
<br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [[56072,1],0]: A high-performance Open MPI point-to-point messaging 
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Module: uDAPL
</span><br>
<span class="quotelev1">&gt;  Host: alpha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [[56072,1],1]: A high-performance Open MPI point-to-point messaging 
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Module: uDAPL
</span><br>
<span class="quotelev1">&gt;  Host: alpha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without orte_base_help_aggregate 0:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; langston_at_alpha:~/OPENMPI/openmpi-1.3/examples$ orterun --mca blt 
</span><br>
<span class="quotelev1">&gt; tcp,sm,self -np 2 hello_c
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [[56119,1],0]: A high-performance Open MPI point-to-point messaging 
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Module: uDAPL
</span><br>
<span class="quotelev1">&gt;  Host: alpha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt; [alpha:10021] 1 more process has sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev1">&gt; [alpha:10021] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see 
</span><br>
<span class="quotelev1">&gt; all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5501.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Previous message:</strong> <a href="5499.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>In reply to:</strong> <a href="5499.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5501.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Reply:</strong> <a href="5501.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
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
