<?
$subject_val = "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 12:29:36 2012" -->
<!-- isoreceived="20120425162936" -->
<!-- sent="Wed, 25 Apr 2012 12:29:32 -0400" -->
<!-- isosent="20120425162932" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines" -->
<!-- id="7950164B-85C3-46AC-989C-3CDEFABDEBEB_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+vDB+OODHxMhEaqj1=332b-EoR5hgjA1OfEQ3vLS=UGfu6ckg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 12:29:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19136.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Previous message:</strong> <a href="19134.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19134.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19136.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just re-read the thread.
<br>
<p>I think there's a little confusion between the terms &quot;processor&quot; and &quot;MPI process&quot; here.  
<br>
<p>You said &quot;As a pre-processing step, each processor must figure out which other processors it must communicate with by virtue of sharing neighboring grid points.&quot;
<br>
<p>Did you mean &quot;MPI process&quot; instead of &quot;processor&quot;?
<br>
<p>Secondly, if you're just running on a single machine with no scheduler and no hostile, you should be able to:
<br>
<p>&nbsp;&nbsp;mpirun -np &lt;whatever_you_want&gt; your_program_name
<br>
<p>When you get the &quot;There are not enough slots available in the system...&quot; message, that usually means that *something* is telling Open MPI a maximum number of processes that can be run, and your -np value is greater than that.  This is *usually* a scheduler, but can also be a hostile and/or an environment variable or file-based MCA parameter.
<br>
<p><p>On Apr 25, 2012, at 12:24 PM, Kyle Boe wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Any chance you could upgrade to Open MPI 1.5.5? It has a better version of the processor affinity stuff than the 1.4 series. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did this and recompiled everything that depended on OMPI. No difference whatsoever. It still tells me, if I specify -np 2 for example, that &quot;There are not enough slots available in the system to satisfy the 2 slots 
</span><br>
<span class="quotelev1">&gt; that were requested by the application.&quot; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;My bad. I did not read the bottom part of the email. Not sure If this would help, but can u try, --mca btl sm,self ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This also does not change anything...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Really confused what is going on here!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kyle
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19136.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Previous message:</strong> <a href="19134.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19134.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19136.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
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
