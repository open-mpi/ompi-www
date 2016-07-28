<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 20:39:35 2007" -->
<!-- isoreceived="20070420003935" -->
<!-- sent="Thu, 19 Apr 2007 20:39:22 -0400" -->
<!-- isosent="20070420003922" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Need help for semaphore in BML" -->
<!-- id="9D2941DC-F6E0-49CA-9316-D27ED9DBE768_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3165.69.180.16.130.1177004707.squirrel_at_webmail.cc.gatech.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-19 20:39:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1454.php">Brian Barrett: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<li><strong>Previous message:</strong> <a href="1452.php">Jeff Squyres: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1446.php">pooja_at_[hidden]: "[OMPI devel] Need help for semaphore in BML"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 19, 2007, at 1:45 PM, pooja_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I want to put semaphore in bml.h--- mca_bml_send before and after  
</span><br>
<span class="quotelev1">&gt; calling
</span><br>
<span class="quotelev1">&gt; btl_send.
</span><br>
<span class="quotelev1">&gt; SO that when a process call btl_send it first lock a global  
</span><br>
<span class="quotelev1">&gt; variable X and
</span><br>
<span class="quotelev1">&gt; then proceeds.Also if an external Tcp function wants to send data it
</span><br>
<span class="quotelev1">&gt; should first lock global variable X and then proceed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone tell me only changing bml.h is enough or are there any  
</span><br>
<span class="quotelev1">&gt; other
</span><br>
<span class="quotelev1">&gt; files where I need to make changes.
</span><br>
<p>This is likely to be a complex issue because there's the put and get  
<br>
functions as well.  ob1 uses a fairly complex algorithm to decide  
<br>
when to call the bml interface functions -- I doubt that the use of a  
<br>
semaphore in a single location is going to do what you want.
<br>
<p>(why a semaphore, anyway -- why not a mutex?)
<br>
<p><span class="quotelev1">&gt; (As I tried doing this and run mpi program it gave me ORTE time out  
</span><br>
<span class="quotelev1">&gt; error
</span><br>
<span class="quotelev1">&gt; also when I changed file back to normal it was not compiling and  
</span><br>
<span class="quotelev1">&gt; giving me
</span><br>
<span class="quotelev1">&gt; error in libmca_bml.la etc...unfortunately I deleted entire folder and
</span><br>
<span class="quotelev1">&gt; downloaded new version.)
</span><br>
<p>Changing bml.h should have zero effect on the ORTE layer.  ORTE is a  
<br>
whole different abstraction and wholly below the OMPI layer.  There  
<br>
are a few places in the OMPI layer that interact with the lower ORTE  
<br>
later, but the bml is not one of them.
<br>
<p>I'm guessing that you had some other problem.
<br>
<p>If you're going to be working continually with Open MPI, you might  
<br>
want to get a subversion checkout.
<br>
<p><span class="quotelev1">&gt; Can any one please help me and tell me how should I go about  
</span><br>
<span class="quotelev1">&gt; implementing
</span><br>
<span class="quotelev1">&gt; locks/semaphore  in bml layer so that all mpi process access lock 
</span><br>
<span class="quotelev1">&gt; (of same
</span><br>
<span class="quotelev1">&gt; priority ) and continue working while Tcp acquire only when network is
</span><br>
<span class="quotelev1">&gt; free(or there is lot of serial operation between 2 mpi sends).
</span><br>
<p>I want to emphasize again that this won't give you what you have  
<br>
described in previous mails: the PML interface is designed to be  
<br>
asynchronous.  So when you call send/put/get, it only (possibly)  
<br>
*starts* the communication transfer.  When you unlock upon return,  
<br>
you're allowing the alternate communication mechanism to come in and  
<br>
start another communication method (via a different BTL, perhaps),  
<br>
but it does not change that there may still be activity occurring  
<br>
down in the kernel and/or hardware.  Also, this scheme does not  
<br>
account for received message contention -- it only [tries to] account  
<br>
for sending contention.
<br>
<p>So even if you get the locking working the way that you want, I don't  
<br>
think that you're going to get the overlap and multiplexing that you  
<br>
expect.
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
<li><strong>Next message:</strong> <a href="1454.php">Brian Barrett: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<li><strong>Previous message:</strong> <a href="1452.php">Jeff Squyres: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1446.php">pooja_at_[hidden]: "[OMPI devel] Need help for semaphore in BML"</a>
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
