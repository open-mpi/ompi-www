<?
$subject_val = "Re: [OMPI users] MPI and C++ (Boost)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 10:49:42 2009" -->
<!-- isoreceived="20090707144942" -->
<!-- sent="Tue, 7 Jul 2009 10:49:31 -0400" -->
<!-- isosent="20090707144931" -->
<!-- name="Luis Vitorio Cargnini" -->
<!-- email="lvcargnini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and C++ (Boost)" -->
<!-- id="CA99BDCD-3B4D-4026-9EAA-BD8958F82AF3_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7DCA71A4-BDFD-4050-B52D-806A930DFBA6_at_cisco.com" -->
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
<strong>From:</strong> Luis Vitorio Cargnini (<em>lvcargnini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 10:49:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9870.php">Jeff Squyres: "Re: [OMPI users] any way to get serial time on head node?"</a>
<li><strong>Previous message:</strong> <a href="9868.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="9865.php">Jeff Squyres: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9904.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Reply:</strong> <a href="9904.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, after all the considerations, I'll try Boost, today, make some  
<br>
experiments and see if I can use it or if I'll avoid it yet.
<br>
<p>But as said by Raimond I think, the problem is been dependent of a  
<br>
rich-incredible-amazing-toolset .... but still implementing only  
<br>
MPI-1, and do not implement all the MPI functions main drawbacks of  
<br>
boost, but the set of functions implemented do not compromise the  
<br>
functionality, i don't know about the MPI-1, MPI-2 and future MPI-3  
<br>
specifications, how this specifications implementations affect boost  
<br>
and the developer using Boost, with OpenMPI of course.
<br>
<p>Continuing if something change in the boost how can I guarantee it  
<br>
won't affect my code in the future ? It is impossible.
<br>
<p>Anyway I'll test it today and without it and choose my direction,  
<br>
thanks for all the replies, suggestions, solutions, that you all  
<br>
pointed to me I really appreciate all your help and comments about  
<br>
boost or not my code.
<br>
<p>Thanks and Regards.
<br>
Vitorio.
<br>
<p><p>Le 09-07-07 &#224; 08:26, Jeff Squyres a &#233;crit :
<br>
<p><span class="quotelev1">&gt; I think you face a common trade-off:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - use a well-established, debugged, abstraction-rich library
</span><br>
<span class="quotelev1">&gt; - write all of that stuff yourself
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, I think the first one is a no-brainer.  There's a reason they  
</span><br>
<span class="quotelev1">&gt; wrote Boost.MPI: it's complex, difficult stuff, and is perfect as  
</span><br>
<span class="quotelev1">&gt; middleware for others to use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If having users perform a 2nd step is undesirable (i.e., install  
</span><br>
<span class="quotelev1">&gt; Boost before installing your software), how about embedding Boost in  
</span><br>
<span class="quotelev1">&gt; your software?  Your configure/build process can certainly be  
</span><br>
<span class="quotelev1">&gt; tailored to include Boost[.MPI].  Hence, users will only perform 1  
</span><br>
<span class="quotelev1">&gt; step, but it actually performs &quot;2&quot; steps under the covers (configures 
</span><br>
<span class="quotelev1">&gt; +installs Boost.MPI and then configures+installs your software,  
</span><br>
<span class="quotelev1">&gt; which uses Boost).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: Open MPI does exactly this.  Open MPI embeds at least 5  
</span><br>
<span class="quotelev1">&gt; software packages: PLPA, VampirTrace, ROMIO, libltdl, and libevent.   
</span><br>
<span class="quotelev1">&gt; But 99.9% of our users don't know/care because it's all hidden in  
</span><br>
<span class="quotelev1">&gt; our configure / make process.  If you watch carefully, you can see  
</span><br>
<span class="quotelev1">&gt; the output go by from each of those configure sections when running  
</span><br>
<span class="quotelev1">&gt; OMPI's configure.  But no one does.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sidenote: I would echo that the Forum is not considering including  
</span><br>
<span class="quotelev1">&gt; Boost.MPI at all.  Indeed, as mentioned in different threads, the  
</span><br>
<span class="quotelev1">&gt; Forum has already voted once to deprecate the MPI C++ bindings,  
</span><br>
<span class="quotelev1">&gt; partly *because* of Boost.  Boost.MPI has shown that the C++  
</span><br>
<span class="quotelev1">&gt; community is better at making C++ APIs for MPI than the Forum is.   
</span><br>
<span class="quotelev1">&gt; Hence, our role should be to make the base building blocks and let  
</span><br>
<span class="quotelev1">&gt; the language experts make their own preferred tools.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 7, 2009, at 5:03 AM, Matthieu Brucher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; IF boost is attached to MPI 3 (or whatever), AND it becomes part  
</span><br>
<span class="quotelev2">&gt;&gt; of the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mainstream MPI implementations, THEN you can have the discussion  
</span><br>
<span class="quotelev2">&gt;&gt; again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At the moment, I think that Boost.MPI only supports MPI1.1, and even
</span><br>
<span class="quotelev2">&gt;&gt; then, some additional work may be done, at least regarding the  
</span><br>
<span class="quotelev2">&gt;&gt; complex
</span><br>
<span class="quotelev2">&gt;&gt; datatypes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matthieu
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Website: <a href="http://matthieu-brucher.developpez.com/">http://matthieu-brucher.developpez.com/</a>
</span><br>
<span class="quotelev2">&gt;&gt; Blogs: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a> and <a href="http://blog.developpez.com/">http://blog.developpez.com/</a>? 
</span><br>
<span class="quotelev2">&gt;&gt; blog=92
</span><br>
<span class="quotelev2">&gt;&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9869/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9869/PGP.sig">Ceci est une signature &#233;lectronique PGP</a>
</ul>
<!-- attachment="PGP.sig" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9870.php">Jeff Squyres: "Re: [OMPI users] any way to get serial time on head node?"</a>
<li><strong>Previous message:</strong> <a href="9868.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="9865.php">Jeff Squyres: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9904.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Reply:</strong> <a href="9904.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
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
