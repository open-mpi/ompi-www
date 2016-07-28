<?
$subject_val = "Re: [OMPI users] knem/openmpi performance?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 11:15:59 2013" -->
<!-- isoreceived="20130718151559" -->
<!-- sent="Thu, 18 Jul 2013 15:15:47 +0000" -->
<!-- isosent="20130718151547" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem/openmpi performance?" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB73282BA9F_at_FMSMSX104.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87ppugf6z7.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] knem/openmpi performance?<br>
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 11:15:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22338.php">Hodgess, Erin: "[OMPI users] configure/library question"</a>
<li><strong>Previous message:</strong> <a href="22336.php">Iliev, Hristo: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>In reply to:</strong> <a href="22332.php">Dave Love: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22320.php">Paul Kapinos: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; &quot;Elken, Tom&quot; &lt;tom.elken_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt; &gt; there is a kcopy module
</span><br>
<span class="quotelev2">&gt; &gt; that assists shared memory MPI bandwidth in a way similar to knem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Somewhat OT, but is it documented?  I went looking some time ago, and
</span><br>
<span class="quotelev1">&gt; couldn't find anything more useful than the source.
</span><br>
[Tom] 
<br>
Strangely no.  Though there were some marketing/sales foils some time ago that played it up.
<br>
<p>I have on my To-Do list to get more environment variables documented, including these two relevant to kcopy:
<br>
<p>PSM_SHM_KCOPY=none =put, =get :   'put' is the default.
<br>
<p>PSM_KASSIST_MODE =none =kcopy-put, =kcopy-get :   'kcopy-put' is the default.
<br>
<p>So either of these could be used to turn off kcopy (using =none)  so you could measure performance with and without kcopy.
<br>
The second of these is general enough to handle knem too.  But we need testing before we can say that knem is supported.
<br>
<p>-Tom
<br>
<p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22338.php">Hodgess, Erin: "[OMPI users] configure/library question"</a>
<li><strong>Previous message:</strong> <a href="22336.php">Iliev, Hristo: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>In reply to:</strong> <a href="22332.php">Dave Love: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22320.php">Paul Kapinos: "Re: [OMPI users] knem/openmpi performance?"</a>
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
