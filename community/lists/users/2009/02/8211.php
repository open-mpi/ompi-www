<?
$subject_val = "Re: [OMPI users] Problems in 1.3 loading shared libs when using	VampirServer";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 07:54:39 2009" -->
<!-- isoreceived="20090226125439" -->
<!-- sent="Thu, 26 Feb 2009 13:54:30 +0100" -->
<!-- isosent="20090226125430" -->
<!-- name="Kiril Dichev" -->
<!-- email="dichev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in 1.3 loading shared libs when using	VampirServer" -->
<!-- id="1235652870.11392.51.camel_at_hp-laptop" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AFF0211D-6F0E-4E90-A192-287E1FDF4F9B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in 1.3 loading shared libs when using	VampirServer<br>
<strong>From:</strong> Kiril Dichev (<em>dichev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 07:54:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8212.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>Previous message:</strong> <a href="8210.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>In reply to:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8212.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>Reply:</strong> <a href="8212.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am happy to confirm that Jeff's suggestion worked. 
<br>
<p>The problem was following: in previous versions VampirServer issued 
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ComLib = dlopen( driverName, RTLD_LAZY );
<br>
<p>Changing this to following fixed the problem:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ComLib = dlopen( driverName, RTLD_LAZY | RTLD_GLOBAL );
<br>
<p><p>The VampirServer guys compiled the modified version of VampirServer and
<br>
now, the shared library Open MPI 1.3 launches VampirServer without
<br>
issues.
<br>
<p>It seems that the previous dlopen call did not have a global scope and
<br>
so the VampirServer plugin did not find the Open MPI 1.3 shared objects.
<br>
<p>Thanks for the help!
<br>
<p>Kiril
<br>
<p>On Tue, 2009-02-24 at 11:02 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 23, 2009, at 8:59 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Err... I'm a little confused.  We've been emailing about this exact  
</span><br>
<span class="quotelev2">&gt; &gt; issue for a week or two (off list); you just re-started the  
</span><br>
<span class="quotelev2">&gt; &gt; conversation from the beginning, moved it to the user's list, and  
</span><br>
<span class="quotelev2">&gt; &gt; dropped all the CC's (which include several people who are not on  
</span><br>
<span class="quotelev2">&gt; &gt; this list).  Why did you do that?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GAAH!!  Mea maxima culpa.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My stupid mail program did something strange (exact details  
</span><br>
<span class="quotelev1">&gt; unimportant) that made me think you re-sent your message to the users  
</span><br>
<span class="quotelev1">&gt; list yesterday -- thereby re-starting the whole conversation, etc.   
</span><br>
<span class="quotelev1">&gt; Upon double checking, I see that this is *not* what you did at all --  
</span><br>
<span class="quotelev1">&gt; my mail program was showing me your original post from Feb 4 and  
</span><br>
<span class="quotelev1">&gt; making it look like you re-sent it yesterday.  I just wasn't careful  
</span><br>
<span class="quotelev1">&gt; in my reading.  Sorry about that; the fault and confusion was entirely  
</span><br>
<span class="quotelev1">&gt; mine.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (we're continuing the conversation off-list just because it's gnarly  
</span><br>
<span class="quotelev1">&gt; and full of details about Vampir that most people probably don't care  
</span><br>
<span class="quotelev1">&gt; about; they're working on a small example to send to me that  
</span><br>
<span class="quotelev1">&gt; replicates the problem -- will post back here when we have some kind  
</span><br>
<span class="quotelev1">&gt; of solution...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We now return you to your regularly scheduled programming...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Dipl.-Inf. Kiril Dichev
Tel.: +49 711 685 60492
E-mail: dichev_at_[hidden]
High Performance Computing Center Stuttgart (HLRS)
Universit&#195;&#164;t Stuttgart
70550 Stuttgart
Germany
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8212.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>Previous message:</strong> <a href="8210.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>In reply to:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8212.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>Reply:</strong> <a href="8212.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
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
