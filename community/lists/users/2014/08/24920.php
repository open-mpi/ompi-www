<?
$subject_val = "Re: [OMPI users] openmpi 1.8.1 gfortran not working";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 13:13:18 2014" -->
<!-- isoreceived="20140805171318" -->
<!-- sent="Tue, 5 Aug 2014 13:13:13 -0400" -->
<!-- isosent="20140805171313" -->
<!-- name="Dan Shell" -->
<!-- email="dshellwireless_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.8.1 gfortran not working" -->
<!-- id="FB5ADA41E173495EB9EF2C82CE78155F_at_WDC" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="335C4B56-9250-4046-8CCD-F3FAE0F7BF59_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.8.1 gfortran not working<br>
<strong>From:</strong> Dan Shell (<em>dshellwireless_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 13:13:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24921.php">Fabricio Cannini: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Previous message:</strong> <a href="24919.php">Ralph Castain: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>In reply to:</strong> <a href="24915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24925.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24925.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff
<br>
Need to use mpif.h for my application
<br>
I will get the newest versions of gcc and gfortran
<br>
<p>Dan Shell
<br>
&nbsp;
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
(jsquyres)
<br>
Sent: Tuesday, August 05, 2014 11:13 AM
<br>
To: Open MPI User's List
<br>
Subject: Re: [OMPI users] openmpi 1.8.1 gfortran not working
<br>
<p>On Aug 5, 2014, at 10:57 AM, Dan Shell &lt;dshellwireless_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Should I look for a newer version of gfortran?
</span><br>
<span class="quotelev1">&gt; I saw from the config fortran compile section that mpi_f08 was not 
</span><br>
<span class="quotelev1">&gt; compiled
</span><br>
<p>It depends on what your MPI application needs.  MPI (i.e., the spec, not
<br>
Open MPI) defines three different Fortran bindings:
<br>
<p>- mpif.h
<br>
- the mpi module
<br>
- the mpi_f08 module
<br>
<p>If your application(s) do not use the mpi_f08 module, then you don't need to
<br>
worry about a new gcc/gfortran.
<br>
<p>If your application(s) do use the mpi_f08 module, then you'll need to
<br>
install a new gcc/gfortran suite (which is not trivial -- you need to
<br>
install both gcc and gfortran together).
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post:
<a href="http://www.open-mpi.org/community/lists/users/2014/08/24915.php">http://www.open-mpi.org/community/lists/users/2014/08/24915.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24921.php">Fabricio Cannini: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Previous message:</strong> <a href="24919.php">Ralph Castain: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>In reply to:</strong> <a href="24915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24925.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24925.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
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
