<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 25 18:32:15 2006" -->
<!-- isoreceived="20060125233215" -->
<!-- sent="Wed, 25 Jan 2006 16:32:13 -0700" -->
<!-- isosent="20060125233213" -->
<!-- name="Daryl W. Grunau" -->
<!-- email="dwg_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] ompi spec file" -->
<!-- id="20060125233213.GC2839_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.889.1137731364.3512.users_at_open-mpi.org" -->
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
<strong>From:</strong> Daryl W. Grunau (<em>dwg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-25 18:32:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0521.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="0519.php">Michael Kluskens: "[O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Maybe in reply to:</strong> <a href="0495.php">Daryl W. Grunau: "[O-MPI users] ompi spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0523.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Reply:</strong> <a href="0523.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Date: Thu, 19 Jan 2006 13:19:42 -0500
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI users] ompi spec file
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;23849E6B-B0FF-4EEB-84DC-4A01D72F8541_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks for this; I learned some new RPM tricks in here.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I love the &quot;--with ...&quot; interface.  The only thing that concerns me  
</span><br>
<span class="quotelev1">&gt; is the scalability -- we have to add two things for each --with/-- 
</span><br>
<span class="quotelev1">&gt; enable option that we have for configure.  Granted, we probably won't  
</span><br>
<p>Yep (sigh)
<br>
<p><span class="quotelev1">&gt; be adding too many more, but some change over time is going to be  
</span><br>
<span class="quotelev1">&gt; inevitable.  It would be great if we didn't have to also remember to  
</span><br>
<span class="quotelev1">&gt; edit the specfile when we add a feature to configure.
</span><br>
<p>That's why I was trying to give it to you as you'd know right off if/when
<br>
other options appeared or changed syntax ;)
<br>
<p><span class="quotelev1">&gt; Is there a more scalable way to do this, perchance?
</span><br>
<p>I was trying to make the option-generator into a function which could be
<br>
called in the %description section or in the %configure line so you'd
<br>
only need to maintain one area.  I haven't figured that out yet (or
<br>
determined if it were possible) ... if not possible, I'd be willing to hack
<br>
out the %description flags if you'd accept the other area.
<br>
<p>Daryl
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0521.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="0519.php">Michael Kluskens: "[O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Maybe in reply to:</strong> <a href="0495.php">Daryl W. Grunau: "[O-MPI users] ompi spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0523.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Reply:</strong> <a href="0523.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
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
