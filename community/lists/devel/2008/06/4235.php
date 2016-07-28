<?
$subject_val = "Re: [OMPI devel] Trunk problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 26 15:08:21 2008" -->
<!-- isoreceived="20080626190821" -->
<!-- sent="Thu, 26 Jun 2008 15:08:13 -0400" -->
<!-- isosent="20080626190813" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk problems" -->
<!-- id="3F541042-23A8-4FA1-AF38-23FB5BED0DF0_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990806250106j11a48ffbh9e62670b0bce0fd9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk problems<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-26 15:08:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Previous message:</strong> <a href="4234.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18748"</a>
<li><strong>In reply to:</strong> <a href="4226.php">Lenny Verkhovsky: "[OMPI devel] Trunk problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Reply:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess too much optimization always bites back :) In few words here  
<br>
is the description of the problem. The PML is event based, each action  
<br>
is triggered either by a function call from the upper level or a  
<br>
callback from the lower one. The last set of optimizations on the PML/ 
<br>
BTL remove the this callback in some cases, and therefore let the PML  
<br>
in a state where it is unable to do any progress. In this particular  
<br>
test (and the problem is not necessarily related to SM, it's just that  
<br>
we didn't find the right number of pending to trigger it over others  
<br>
BTL), the test execute a set of isend, followed by a blocking send.  
<br>
The isend are sent over SM, and as do not have progress in the isend,  
<br>
we fill up the SM queue. When the blocking send get posted, it will be  
<br>
delayed (as there is no more place in the SM file), and will be added  
<br>
by the PML to the pending send queue. So far, so good. Except, that at  
<br>
this point we return from the PML function, and go in the condition.  
<br>
The condition will call the BML progress functions, but as there is no  
<br>
callbacks to the PML, the PML is unable to reschedule the send.
<br>
<p>This didn't happens until recently, but it was pure luck. Before there  
<br>
was a pending queue in the SM BTL, and eventually the message got sent  
<br>
at one point, without involving the PML. Anyway, as I said before the  
<br>
problem could happens with any other BTL, if we post the right number  
<br>
of non-blocking sends.
<br>
<p>Here is the solution I propose. If you think there is any problem with  
<br>
it, please let me know asap.
<br>
<p>Move the progress function from the BML layer back into the PML. Then  
<br>
the PML will have a way to check on it's pending requests, and  
<br>
progress them accordingly. This solution offer the same number of  
<br>
function calls as what we have today, and should only minimally affect  
<br>
the performances (one more if in the progress function).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 25, 2008, at 4:06 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I downloaded new version from trunk and got the fallowing
</span><br>
<span class="quotelev1">&gt; 1. opal_output for no reason ( probaly something was forgotten )
</span><br>
<span class="quotelev1">&gt; 2. it got stacked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun -np 2 -hostfile  
</span><br>
<span class="quotelev1">&gt; hostfile_w4_8 ./osu_bw
</span><br>
<span class="quotelev1">&gt; [witch4:20920] Using eager rdma: 1
</span><br>
<span class="quotelev1">&gt; [witch4:20921] Using eager rdma: 1
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test (Version 2.1)
</span><br>
<span class="quotelev1">&gt; # Size          Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ( got stacked )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4235/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Previous message:</strong> <a href="4234.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18748"</a>
<li><strong>In reply to:</strong> <a href="4226.php">Lenny Verkhovsky: "[OMPI devel] Trunk problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Reply:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
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
