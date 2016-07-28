<?
$subject_val = "Re: [OMPI devel] 1.3 runtime message ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 09:53:07 2009" -->
<!-- isoreceived="20090220145307" -->
<!-- sent="Fri, 20 Feb 2009 09:51:11 -0500" -->
<!-- isosent="20090220145111" -->
<!-- name="Jim Langston" -->
<!-- email="Jim.Langston_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 runtime message ?" -->
<!-- id="499EC35F.7000706_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="499EBD7D.7050604_at_sun.com" -->
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
<strong>Date:</strong> 2009-02-20 09:51:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5502.php">Eugene Loh: "[OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5500.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>In reply to:</strong> <a href="5500.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don Kerr wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 02/20/09 09:18, Jim Langston wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 19, 2009, at 4:30 PM, Jim Langston wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm just wondering if I compiled incorrectly, or if the message is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; generated because uDAPL is the default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interface (I'm on OpenSolaris), which I'm wondering if I can stop 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from being looked at, either by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiling differently, or from the command line.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This doesn't stop the message either, but stops the noisy stuff:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orterun --mca orte_base_help_aggregate 0 --mca blt tcp -np 2 hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't quite parse your statement &quot;doesn't stop the message&quot; vs. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;but stops the noisy stuff&quot;.  Can you clarify what each of those means?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Running with &quot;--mca btl tcp,sm,self&quot; should prevent OMPI v1.3 from 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opening the udapl BTL, and therefore that error message shouldn't 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appear.
</span><br>
<span class="quotelev2">&gt;&gt; I'm not considering this an error, the job runs without any problems. 
</span><br>
<span class="quotelev2">&gt;&gt; The orte_base_help_aggregate set to 0 stops some of the other 
</span><br>
<span class="quotelev2">&gt;&gt; messages that occur, which is great, I appreciate that option. But, 
</span><br>
<span class="quotelev2">&gt;&gt; the option does not stop the point-to-point message,
</span><br>
<span class="quotelev2">&gt;&gt; which I'm assuming, means that something is happening underneath the 
</span><br>
<span class="quotelev2">&gt;&gt; sheets and I'm being told it is getting done. With your
</span><br>
<span class="quotelev2">&gt;&gt; option:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; langston_at_alpha:~/OPENMPI/openmpi-1.3/examples$ orterun --mca 
</span><br>
<span class="quotelev2">&gt;&gt; orte_base_help_aggregate 0 --mca blt tcp,sm,self -np 2 hello_c
</span><br>
<span class="quotelev1">&gt; If this is the actual run command line I believe there is a typo:  
</span><br>
<span class="quotelev1">&gt; &quot;--mca blt tcp,sm,self&quot;  should be &quot;btl&quot;
</span><br>
<span class="quotelev1">&gt; which should eliminate the point-to-point message.
</span><br>
<p>yes, definitely a typo - geeezzzz !! message gone, both --mca btl 
<br>
tcp,self and --mca btl tcp,sm,self do just fine.
<br>
<p>langston_at_alpha:~/OPENMPI/openmpi-1.3/examples$ orterun --mca btl 
<br>
tcp,self -np 2 hello_c
<br>
Hello, world, I am 1 of 2
<br>
Hello, world, I am 0 of 2
<br>
<p>and
<br>
<p>langston_at_alpha:~/OPENMPI/openmpi-1.3/examples$ orterun --mca btl 
<br>
tcp,sm,self -np 2 hello_c
<br>
Hello, world, I am 0 of 2
<br>
Hello, world, I am 1 of 2
<br>
<p><p><span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[56072,1],0]: A high-performance Open MPI point-to-point messaging 
</span><br>
<span class="quotelev2">&gt;&gt; module
</span><br>
<span class="quotelev2">&gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Module: uDAPL
</span><br>
<span class="quotelev2">&gt;&gt;  Host: alpha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[56072,1],1]: A high-performance Open MPI point-to-point messaging 
</span><br>
<span class="quotelev2">&gt;&gt; module
</span><br>
<span class="quotelev2">&gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Module: uDAPL
</span><br>
<span class="quotelev2">&gt;&gt;  Host: alpha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Without orte_base_help_aggregate 0:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; langston_at_alpha:~/OPENMPI/openmpi-1.3/examples$ orterun --mca blt 
</span><br>
<span class="quotelev2">&gt;&gt; tcp,sm,self -np 2 hello_c
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[56119,1],0]: A high-performance Open MPI point-to-point messaging 
</span><br>
<span class="quotelev2">&gt;&gt; module
</span><br>
<span class="quotelev2">&gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Module: uDAPL
</span><br>
<span class="quotelev2">&gt;&gt;  Host: alpha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev2">&gt;&gt; [alpha:10021] 1 more process has sent help message 
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev2">&gt;&gt; [alpha:10021] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
</span><br>
<span class="quotelev2">&gt;&gt; see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="5502.php">Eugene Loh: "[OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5500.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>In reply to:</strong> <a href="5500.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
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
