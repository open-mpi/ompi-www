<?
$subject_val = "Re: [OMPI users] Unable to include mpich library";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 28 03:26:19 2010" -->
<!-- isoreceived="20100628072619" -->
<!-- sent="Mon, 28 Jun 2010 09:26:00 +0200" -->
<!-- isosent="20100628072600" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to include mpich library" -->
<!-- id="677F4910-A56F-4B7C-B23D-2C141FA07877_at_staff.uni-marburg.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikSDwhJFlG24M01zwEUKZKH0qvRncaZsFPcbgBy_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to include mpich library<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-28 03:26:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13422.php">amjad ali: "[OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Previous message:</strong> <a href="13420.php">Srinivas Gopal: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>In reply to:</strong> <a href="13420.php">Srinivas Gopal: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13467.php">Lisandro Dalcin: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13467.php">Lisandro Dalcin: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 28.06.2010 um 08:10 schrieb Srinivas Gopal:
<br>
<p><span class="quotelev1">&gt; I have used the wrapper compilers ($FC=mpif90 and $CC=mpicc), even  
</span><br>
<span class="quotelev1">&gt; then i was getting these errors. Anyway I used -lmpi in place of - 
</span><br>
<span class="quotelev1">&gt; lmpich and the build was successful. Thanks a lot for your help :)
</span><br>
<p>I saw makefiles, where the compilers (i.e. MPI wrappers) were only  
<br>
used for compiling the source to object files. Later on these were  
<br>
still linked with `gcc` or `ld`. Hence the MPI library must be  
<br>
accessed also for the linker step by `mpicc` instead of `gcc` when  
<br>
setting $LD is supported, or set in e.g. $LDFLAGS for the latter.
<br>
<p>Why is there no `mpild` to do this automatically then?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Srinivas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 25, 2010 at 5:19 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Jun 25, 2010, at 4:11 AM, G&#246;tz Waschk wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; libmpich is not part of open-mpi. Maybe your software build with  
</span><br>
<span class="quotelev1">&gt; mpich
</span><br>
<span class="quotelev2">&gt; &gt; only? If your software does not use anything specific to mpich, you
</span><br>
<span class="quotelev2">&gt; &gt; could try to change -lmpich to -lmpi .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Better yet, the Open MPI team strongly discourages listing  
</span><br>
<span class="quotelev1">&gt; individual MPI libraries on the link line because we reserve the  
</span><br>
<span class="quotelev1">&gt; right to change them over time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead, we *strongly* advise you to just use Open MPI's wrapper  
</span><br>
<span class="quotelev1">&gt; compilers, which will insert all the Right compiler and linker  
</span><br>
<span class="quotelev1">&gt; flags.  Then you don't have to worry about any of those pesky -I and  
</span><br>
<span class="quotelev1">&gt; -L options, especially when transitioning between different MPI  
</span><br>
<span class="quotelev1">&gt; implementations and versions of Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#general-build">http://www.open-mpi.org/faq/?category=mpi-apps#general-build</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers">http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13422.php">amjad ali: "[OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Previous message:</strong> <a href="13420.php">Srinivas Gopal: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>In reply to:</strong> <a href="13420.php">Srinivas Gopal: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13467.php">Lisandro Dalcin: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13467.php">Lisandro Dalcin: "Re: [OMPI users] Unable to include mpich library"</a>
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
