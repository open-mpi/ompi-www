<?
$subject_val = "Re: [OMPI users] openmpi 1.8.1 gfortran not working";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 15:20:36 2014" -->
<!-- isoreceived="20140805192036" -->
<!-- sent="Tue, 5 Aug 2014 15:20:32 -0400" -->
<!-- isosent="20140805192032" -->
<!-- name="Dan Shell" -->
<!-- email="dshellwireless_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.8.1 gfortran not working" -->
<!-- id="6DACBDF991BF4B0B90C1D58B0A26488F_at_WDC" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="511902E6-EBD4-4D26-852B-2F7CDD4DB48A_at_cisco.com" -->
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
<strong>Date:</strong> 2014-08-05 15:20:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24927.php">Ralph Castain: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Previous message:</strong> <a href="24925.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>In reply to:</strong> <a href="24925.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff
<br>
Thanks
<br>
I am reinstalling now with a newer version of openmpi dated August 1 2014
<br>
Check my gfortran version is 4.4.3 as you said should be ok.
<br>
<p>Thank you for your help
<br>
Dan Shell
<br>
&nbsp;
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
(jsquyres)
<br>
Sent: Tuesday, August 05, 2014 3:18 PM
<br>
To: Open MPI User's List
<br>
Subject: Re: [OMPI users] openmpi 1.8.1 gfortran not working
<br>
<p>On Aug 5, 2014, at 1:13 PM, Dan Shell &lt;dshellwireless_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Need to use mpif.h for my application
</span><br>
<span class="quotelev1">&gt; I will get the newest versions of gcc and gfortran
</span><br>
<p>You should be fine without the newest versions of gcc/gfortran.  The older
<br>
gcc/gfortran will support mpif.h and a limited form of the mpi module.  It
<br>
just won't support the new MPI-3 mpi_f08 module.
<br>
<p>It certainly doesn't hurt to upgrade your gcc/gfortran to the newest, but be
<br>
aware that it's a bit difficult to compile these suites properly...
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
<a href="http://www.open-mpi.org/community/lists/users/2014/08/24925.php">http://www.open-mpi.org/community/lists/users/2014/08/24925.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24927.php">Ralph Castain: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Previous message:</strong> <a href="24925.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>In reply to:</strong> <a href="24925.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
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
