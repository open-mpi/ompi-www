<?
$subject_val = "Re: [OMPI devel] xensocket btl and migration";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 15 08:38:04 2008" -->
<!-- isoreceived="20080315123804" -->
<!-- sent="Sat, 15 Mar 2008 08:37:55 -0400" -->
<!-- isosent="20080315123755" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] xensocket btl and migration" -->
<!-- id="0488E8EA-8A66-4078-90A5-A40678356329_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="198651.28366.qm_at_web52102.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] xensocket btl and migration<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-15 08:37:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3447.php">Neil Ludban: "Re: [OMPI devel] MATLAB interface"</a>
<li><strong>Previous message:</strong> <a href="3445.php">Jeff Squyres: "Re: [OMPI devel] MATLAB interface"</a>
<li><strong>In reply to:</strong> <a href="3408.php">Muhammad Atif: "[OMPI devel] xensocket btl and migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3454.php">Josh Hursey: "Re: [OMPI devel] xensocket btl and migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2008, at 6:13 AM, Muhammad Atif wrote:
<br>
<p><span class="quotelev1">&gt; Okay guys.. with all your support and help in understanding ompi  
</span><br>
<span class="quotelev1">&gt; architecture, I was able to get Xensocket to work.  Only minor  
</span><br>
<span class="quotelev1">&gt; changes to the xensocket kernel module made it compatible with  
</span><br>
<span class="quotelev1">&gt; libevent. I am getting results which are bad but I am sure, I have  
</span><br>
<span class="quotelev1">&gt; to cleanup the code. At least my results have improved over native  
</span><br>
<span class="quotelev1">&gt; netfront-netback of xen for messages of size larger than 1 MB.
</span><br>
<p>Great!  Be aware that we are in the process of updating the version of  
<br>
libevent that is included in Open MPI.  As part of this process, we  
<br>
are re-enabling the more scalable fd-monitoring mechanisms (such as  
<br>
epoll and friends).  Do you know if xensockets play nicely with epoll?
<br>
<p><span class="quotelev1">&gt; I started with making minor changes in the TCP btl, but it seems it  
</span><br>
<span class="quotelev1">&gt; is not the best way, as changes are quite huge and it is better to  
</span><br>
<span class="quotelev1">&gt; have separate dedicated btl for xensockets. As you guys might be  
</span><br>
<span class="quotelev1">&gt; aware Xen supports live migration, now I have one stupid question.  
</span><br>
<span class="quotelev1">&gt; My knowledge so far suggests that btl component is initialized only  
</span><br>
<span class="quotelev1">&gt; once.
</span><br>
<p>Correct.
<br>
<p><span class="quotelev1">&gt; The scerario here is if my guest os is migrated from one physical  
</span><br>
<span class="quotelev1">&gt; node to another, and realizes that the communicating processes are  
</span><br>
<span class="quotelev1">&gt; now on one physical host and they should abandon use of TCP btl and  
</span><br>
<span class="quotelev1">&gt; make use of Xensocket btl. I am sure it would not happen out of the  
</span><br>
<span class="quotelev1">&gt; box, but is it possible without making heavy changes in the openmpi  
</span><br>
<span class="quotelev1">&gt; architecture?
</span><br>
<span class="quotelev1">&gt; With the current design, i am running a mix of tcp and xensocket  
</span><br>
<span class="quotelev1">&gt; btls, and endpoints check periodically if they are on same physical  
</span><br>
<span class="quotelev1">&gt; host or not. This has quite a big penalty in terms of time.
</span><br>
<p>Josh Hursey has been doing much of the checkpoint/restart and  
<br>
migration work -- I'll let him answer this...
<br>
<p><span class="quotelev1">&gt; Another question is (good thing i am using email otherwise you guys  
</span><br>
<span class="quotelev1">&gt; would beat the hell outta me, its such a basic question). I am not  
</span><br>
<span class="quotelev1">&gt; able to track MPI_Recv(...) api call and its alike calls. Once in  
</span><br>
<span class="quotelev1">&gt; the code of MPI_Recv(..) we give a call to rc =  
</span><br>
<span class="quotelev1">&gt; MCA_PML_CALL(recv(buf, count ... ). This call goes to the macro, and  
</span><br>
<span class="quotelev1">&gt; pml.recv(..) gets invoked (mca_pml_base_module_recv_fn_t          
</span><br>
<span class="quotelev1">&gt; pml_recv;) . Where can I find the actual function? I get totally  
</span><br>
<span class="quotelev1">&gt; lost when trying to pinpoint what exactly is happening. Basically, I  
</span><br>
<span class="quotelev1">&gt; am looking for a place where tcp btl recv is getting called with all  
</span><br>
<span class="quotelev1">&gt; the goodies and  parameters which were passed by the MPI programmer.  
</span><br>
<span class="quotelev1">&gt; I hope I have made my question understandable.
</span><br>
<p>Sorry about all the function pointers -- it's how we have to do this  
<br>
because of all the plugins...
<br>
<p>In the OB1 case, it goes to mca_pml_ob1_recv() (and  
<br>
mca_pml_ob1_irecv() for the non-blocking case).  See ompi/mca/pml/ob1/ 
<br>
pml_ob1.c for a big function table that is passed back out of the OB1  
<br>
module.  This patter is repeated for most/all components in OMPI --  
<br>
when the component is initialized, it passes back a table of function  
<br>
pointers for its module that the upper-level code can call.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3447.php">Neil Ludban: "Re: [OMPI devel] MATLAB interface"</a>
<li><strong>Previous message:</strong> <a href="3445.php">Jeff Squyres: "Re: [OMPI devel] MATLAB interface"</a>
<li><strong>In reply to:</strong> <a href="3408.php">Muhammad Atif: "[OMPI devel] xensocket btl and migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3454.php">Josh Hursey: "Re: [OMPI devel] xensocket btl and migration"</a>
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
