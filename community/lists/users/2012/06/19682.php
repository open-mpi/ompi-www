<?
$subject_val = "Re: [OMPI users] MPI Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 13:09:59 2012" -->
<!-- isoreceived="20120627170959" -->
<!-- sent="Wed, 27 Jun 2012 10:09:55 -0700 (PDT)" -->
<!-- isosent="20120627170955" -->
<!-- name="Mohamad Ali Rostami" -->
<!-- email="ma.rostami_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Problem" -->
<!-- id="1340816995.96724.YahooMailNeo_at_web125704.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7B91D712-BAD3-4C4C-8837-8242266B26FD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Problem<br>
<strong>From:</strong> Mohamad Ali Rostami (<em>ma.rostami_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 13:09:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19683.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Previous message:</strong> <a href="19681.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19681.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19685.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19685.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems that the problem is solved.

Actually, when I replaced &quot;use mpi&quot; by &quot;include &quot;mipf.h&quot;.
And adding -lmpi -lmpi90, everything works.&#160;

I think you need these two &quot;-lmpi -lmpi90&quot; when you have Blas or LAPACK libraries.

Regards,
Ali



________________________________
 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt; 
Cc: Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Wednesday, June 27, 2012 6:45 PM
Subject: Re: [OMPI users] MPI Problem
 
Did you verify that the exact same mpif77 / mpif90 is being invoked from within your Makefile as is invoked when you do it manually at a shell prompt?


On Jun 27, 2012, at 3:36 AM, Mohamad Ali Rostami wrote:

&gt; Something strange,
&gt; 
&gt; By adding all the libraries which I found from mpif90/mpif77 --showme,
&gt; Fortran 77 version worked finally,
&gt; but Fortran 90 version still has the problem.
&gt; 
&gt; Error: There is no specific subroutine for the generic 'mpi_init' at (1)
&gt; 
&gt; any idea??
&gt; 
&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt; 
&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt; 
&gt; Sent: Monday, June 25, 2012 10:22 PM
&gt; Subject: Re: [OMPI users] MPI Problem
&gt; 
&gt; On Jun 25, 2012, at 3:59 PM, Mohamad Ali Rostami wrote:
&gt; 
&gt; &gt; &gt;&#160; &#160; mpif90 my_application.f90 -o my_application
&gt; &gt; 
&gt; &gt; Yes, as I told you out of make file, it works.
&gt; &gt; The problem is something strange in the make file.
&gt; 
&gt; I'm sorry; I must have mis-parsed your issue, then.&#160; So just to make sure I understand:
&gt; 
&gt; shell$ mpif90 my_application.f90 -o my_application
&gt; 
&gt; Works fine, but:
&gt; 
&gt; shell$ make
&gt; ...something that eventually invokes &quot;mpif90 my_application.f90 -o my_application&quot;
&gt; 
&gt; doesn't work.&#160; Right?
&gt; 
&gt; If you're invoking the exact same command in both cases (interactive shell and makefile), the *usual* cause of this kind of problem is that the &quot;mpif90&quot; in your Makefile is picking up a different mpif90 than the one that is picked up by your shell.&#160; Meaning: your PATH has been reset in the sub-process where &quot;make&quot; is executed, and so when make forks off &quot;mpif90&quot;, it finds a different one than the one you execute interactively in the shell.
&gt; 
&gt; Check what your path is and/or exactly which mpif90 is getting invoked by your Makefile.
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; 


-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19682/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19683.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Previous message:</strong> <a href="19681.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19681.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19685.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19685.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
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
