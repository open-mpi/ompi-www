<?
$subject_val = "[OMPI users] MPI-2 in MX (was: MPI 2 support in sm btl)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  4 08:04:19 2012" -->
<!-- isoreceived="20120104130419" -->
<!-- sent="Wed, 4 Jan 2012 08:04:14 -0500" -->
<!-- isosent="20120104130414" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI users] MPI-2 in MX (was: MPI 2 support in sm btl)" -->
<!-- id="80B14382-7BA8-4457-BA50-CAB657201F17_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANtw=atnJwvv_BhBQk8G-MMDQwm5i93kRi2xs5dC4iagEw7pEg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-01-04 08:04:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18082.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18080.php">Jeff Squyres: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>In reply to:</strong> <a href="../../2011/12/18056.php">Sabela Ramos Garea: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid I don't know offhand -- but I do have a dim recollection that MX requires all processes to be available at INIT time (i.e., processes that join later, e.g., via MPI-2 dynamics, will not communicate via MX).  That may or may not be true -- don't hold me to that.
<br>
<p>Can someone who knows MX better than me comment about this?
<br>
<p><p><p>On Dec 28, 2011, at 8:58 AM, Sabela Ramos Garea wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your answers.
</span><br>
<span class="quotelev1">&gt; Is there a similar issue with mx BTL? I mean, using the mx BTL, is it possible to reach a parent job from a spawned process?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again! :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; El 16 de diciembre de 2011 15:08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; escribi&#243;:
</span><br>
<span class="quotelev1">&gt; On Dec 14, 2011, at 4:01 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As far as I know, there is no support for some MPI-2 features in the shared memory BTL as dynamic process creation or port connection. Are you planning to include this support?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It depends on what exactly you mean. Dynamically spawned processes do use the shared memory BTL between themselves, but not with the processes in their parent job. We plan to support that as well at some future time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...when enough people ask for it.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've talked about supporting this for a long time, but to be blunt, there hasn't been enough demand for it to justify spending the time to figure out all the issues and implement it properly.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patches would be welcome, though!  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18082.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18080.php">Jeff Squyres: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>In reply to:</strong> <a href="../../2011/12/18056.php">Sabela Ramos Garea: "Re: [OMPI users] MPI 2 support in sm btl"</a>
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
