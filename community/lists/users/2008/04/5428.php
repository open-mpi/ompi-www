<?
$subject_val = "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 18:25:15 2008" -->
<!-- isoreceived="20080421222515" -->
<!-- sent="Mon, 21 Apr 2008 18:25:00 -0400" -->
<!-- isosent="20080421222500" -->
<!-- name="cfdman7_at_[hidden]" -->
<!-- email="cfdman7_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI" -->
<!-- id="8CA7215ABAD78E4-15E8-1B86_at_mblk-d47.sysops.aol.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="480CB466.8040308_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI<br>
<strong>From:</strong> <a href="mailto:cfdman7_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problem%20with%20Sun%20Fortran%20Install%20with%20OpenMPI"><em>cfdman7_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-04-21 18:25:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5429.php">Adrian Knoth: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>Previous message:</strong> <a href="5427.php">Vincent Rotival: "[OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>In reply to:</strong> <a href="5426.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5436.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Thank you. This worked, although I had to use the sun C-compiler rather than the gcc compiler (your email below seemed to imply that the fix was related to using the gcc compiler).
<br>
<p>I appreciate the help,
<br>
<p>Rob
<br>
<p><p>&nbsp;
<br>
<p>-----Original Message-----
<br>
From: Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt;
<br>
To: users_at_[hidden]
<br>
Sent: Mon, 21 Apr 2008 11:36 am
<br>
Subject: Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI
<br>
<p><p><p><p><p><p><p><p><p><p>Looking at the gcc.error attachment that looks to be the one of the 
<br>
problems talked about in the following faq
<br>
entry: <a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a>.
<br>
<p>If you follow the steps outlined in the above FAQ entry you should be 
<br>
able to build OpenMPI.  If not please drop another
<br>
email with the results and I'll see what I can do. 
<br>
<p>hth,
<br>
<p>Terry Dontje
<br>
Sun Microsystems, Inc.
<br>
<p><span class="quotelev1">&gt; Date: Mon, 21 Apr 2008 11:01:50 -0400
</span><br>
<span class="quotelev1">&gt; From: cfdman7_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Problem with Sun Fortran Install with OpenMPI
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;8CA71D7C32C3AB0-C0-118A_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been attempting to install OpenMPI with the Sun Fortran Compiler
</span><br>
<span class="quotelev1">&gt; that is packaged as a part of Sun Studio for x86 architectures for
</span><br>
<span class="quotelev1">&gt; about a year and a half now without success. Every time a new version
</span><br>
<span class="quotelev1">&gt; of Sun Studio and/or OpenMPI comes out, I have attempted the install
</span><br>
<span class="quotelev1">&gt; again with the hopes that whatever has been causing the problem will
</span><br>
<span class="quotelev1">&gt; have magically been fixed. However at this point, it appears that
</span><br>
<span class="quotelev1">&gt; whatever is causing the install problems is something unkown to your
</span><br>
<span class="quotelev1">&gt; development team ... so I figure it is time to report it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently trying to install the Sun F90 compiler with
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.6 on a 64-bit intel machine running Red Hat Linux
</span><br>
<span class="quotelev1">&gt; Enterprise 5. I have also tried this same install on a variety of
</span><br>
<span class="quotelev1">&gt; 32-bit intel architectures with 2 other flavors of linux, and I get the
</span><br>
<span class="quotelev1">&gt; same errors. I have attached the install script that I use to install
</span><br>
<span class="quotelev1">&gt; OpenMPI for each of the FORTRAN packages that I use (OpenMPI installs
</span><br>
<span class="quotelev1">&gt; successfully for the 4 other FORTRAN packages in this install script).
</span><br>
<span class="quotelev1">&gt; I have also attached 2 sets of output streams with different error
</span><br>
<span class="quotelev1">&gt; messages. One of these output streams corresponds to the result that I
</span><br>
<span class="quotelev1">&gt; get when setting the C-compiler to gcc in the install script, and the
</span><br>
<span class="quotelev1">&gt; other corresponds to setting the C-compiler to the C-compiler that is
</span><br>
<span class="quotelev1">&gt; included with Sun Studio.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note also that I have not had any problems with getting the Sun
</span><br>
<span class="quotelev1">&gt; compilers (Fortran and C) installed with MPICH2, so I am confused as to
</span><br>
<span class="quotelev1">&gt; what may be the issue with OpenMPI. I prefer to use OpenMPI, so I would
</span><br>
<span class="quotelev1">&gt; like to figure this issue out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rob
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5428/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5429.php">Adrian Knoth: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>Previous message:</strong> <a href="5427.php">Vincent Rotival: "[OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>In reply to:</strong> <a href="5426.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5436.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
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
