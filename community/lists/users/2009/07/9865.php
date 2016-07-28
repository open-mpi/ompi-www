<?
$subject_val = "Re: [OMPI users] MPI and C++ (Boost)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 08:26:39 2009" -->
<!-- isoreceived="20090707122639" -->
<!-- sent="Tue, 7 Jul 2009 08:26:27 -0400" -->
<!-- isosent="20090707122627" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and C++ (Boost)" -->
<!-- id="7DCA71A4-BDFD-4050-B52D-806A930DFBA6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e76aa17f0907070203t7da72200g642bf3b32f3c0747_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI and C++ (Boost)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 08:26:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9866.php">Jeff Squyres: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Previous message:</strong> <a href="9864.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="9858.php">Matthieu Brucher: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9869.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Reply:</strong> <a href="9869.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you face a common trade-off:
<br>
<p>- use a well-established, debugged, abstraction-rich library
<br>
- write all of that stuff yourself
<br>
<p>FWIW, I think the first one is a no-brainer.  There's a reason they  
<br>
wrote Boost.MPI: it's complex, difficult stuff, and is perfect as  
<br>
middleware for others to use.
<br>
<p>If having users perform a 2nd step is undesirable (i.e., install Boost  
<br>
before installing your software), how about embedding Boost in your  
<br>
software?  Your configure/build process can certainly be tailored to  
<br>
include Boost[.MPI].  Hence, users will only perform 1 step, but it  
<br>
actually performs &quot;2&quot; steps under the covers (configures+installs  
<br>
Boost.MPI and then configures+installs your software, which uses Boost).
<br>
<p>FWIW: Open MPI does exactly this.  Open MPI embeds at least 5 software  
<br>
packages: PLPA, VampirTrace, ROMIO, libltdl, and libevent.  But 99.9%  
<br>
of our users don't know/care because it's all hidden in our  
<br>
configure / make process.  If you watch carefully, you can see the  
<br>
output go by from each of those configure sections when running OMPI's  
<br>
configure.  But no one does.  ;-)
<br>
<p>Sidenote: I would echo that the Forum is not considering including  
<br>
Boost.MPI at all.  Indeed, as mentioned in different threads, the  
<br>
Forum has already voted once to deprecate the MPI C++ bindings, partly  
<br>
*because* of Boost.  Boost.MPI has shown that the C++ community is  
<br>
better at making C++ APIs for MPI than the Forum is.  Hence, our role  
<br>
should be to make the base building blocks and let the language  
<br>
experts make their own preferred tools.
<br>
<p><p><p><p>On Jul 7, 2009, at 5:03 AM, Matthieu Brucher wrote:
<br>
<p><span class="quotelev2">&gt; &gt; IF boost is attached to MPI 3 (or whatever), AND it becomes part  
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev2">&gt; &gt; mainstream MPI implementations, THEN you can have the discussion  
</span><br>
<span class="quotelev1">&gt; again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the moment, I think that Boost.MPI only supports MPI1.1, and even
</span><br>
<span class="quotelev1">&gt; then, some additional work may be done, at least regarding the complex
</span><br>
<span class="quotelev1">&gt; datatypes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthieu
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev1">&gt; Website: <a href="http://matthieu-brucher.developpez.com/">http://matthieu-brucher.developpez.com/</a>
</span><br>
<span class="quotelev1">&gt; Blogs: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a> and <a href="http://blog.developpez.com/?blog=92">http://blog.developpez.com/?blog=92</a>
</span><br>
<span class="quotelev1">&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9866.php">Jeff Squyres: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Previous message:</strong> <a href="9864.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="9858.php">Matthieu Brucher: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9869.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Reply:</strong> <a href="9869.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ (Boost)"</a>
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
