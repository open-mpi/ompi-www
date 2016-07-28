<?
$subject_val = "Re: [OMPI users] Unable to include mpich library";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 28 02:11:02 2010" -->
<!-- isoreceived="20100628061102" -->
<!-- sent="Mon, 28 Jun 2010 11:40:53 +0530" -->
<!-- isosent="20100628061053" -->
<!-- name="Srinivas Gopal" -->
<!-- email="srinivas13.2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to include mpich library" -->
<!-- id="AANLkTikSDwhJFlG24M01zwEUKZKH0qvRncaZsFPcbgBy_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B61FC102-699B-41B7-B5D9-6CC76B376EF3_at_cisco.com" -->
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
<strong>From:</strong> Srinivas Gopal (<em>srinivas13.2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-28 02:10:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13421.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Previous message:</strong> <a href="13419.php">Jack Bryan: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>In reply to:</strong> <a href="13408.php">Jeff Squyres: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13421.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Reply:</strong> <a href="13421.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have used the wrapper compilers ($FC=mpif90 and $CC=mpicc), even then i
<br>
was getting these errors. Anyway I used -lmpi in place of -lmpich and the
<br>
build was successful. Thanks a lot for your help :)
<br>
<p>Cheers,
<br>
Srinivas
<br>
<p>On Fri, Jun 25, 2010 at 5:19 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 25, 2010, at 4:11 AM, G&#246;tz Waschk wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; libmpich is not part of open-mpi. Maybe your software build with mpich
</span><br>
<span class="quotelev2">&gt; &gt; only? If your software does not use anything specific to mpich, you
</span><br>
<span class="quotelev2">&gt; &gt; could try to change -lmpich to -lmpi .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Better yet, the Open MPI team strongly discourages listing individual MPI
</span><br>
<span class="quotelev1">&gt; libraries on the link line because we reserve the right to change them over
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead, we *strongly* advise you to just use Open MPI's wrapper compilers,
</span><br>
<span class="quotelev1">&gt; which will insert all the Right compiler and linker flags.  Then you don't
</span><br>
<span class="quotelev1">&gt; have to worry about any of those pesky -I and -L options, especially when
</span><br>
<span class="quotelev1">&gt; transitioning between different MPI implementations and versions of Open
</span><br>
<span class="quotelev1">&gt; MPI.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13420/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13421.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Previous message:</strong> <a href="13419.php">Jack Bryan: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>In reply to:</strong> <a href="13408.php">Jeff Squyres: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13421.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Reply:</strong> <a href="13421.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
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
