<?
$subject_val = "Re: [OMPI users] MPI Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 03:36:28 2012" -->
<!-- isoreceived="20120627073628" -->
<!-- sent="Wed, 27 Jun 2012 00:36:24 -0700 (PDT)" -->
<!-- isosent="20120627073624" -->
<!-- name="Mohamad Ali Rostami" -->
<!-- email="ma.rostami_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Problem" -->
<!-- id="1340782584.69616.YahooMailNeo_at_web125703.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="417B5C9E-F62E-4DEA-88BA-74BEEF84ECE0_at_cisco.com" -->
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
<strong>Date:</strong> 2012-06-27 03:36:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19675.php">Iliev, Hristo: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19673.php">Lloyd Brown: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>In reply to:</strong> <a href="19664.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19675.php">Iliev, Hristo: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19675.php">Iliev, Hristo: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19681.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something strange,


By adding all the libraries which I found from mpif90/mpif77 --showme,

Fortran 77 version worked finally,
but Fortran 90 version still has the problem.

Error: There is no specific subroutine for the generic 'mpi_init' at (1)


any idea??



________________________________
 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt; 
Cc: Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Monday, June 25, 2012 10:22 PM
Subject: Re: [OMPI users] MPI Problem
 
On Jun 25, 2012, at 3:59 PM, Mohamad Ali Rostami wrote:

&gt; &gt;&#160; &#160; mpif90 my_application.f90 -o my_application
&gt; 
&gt; Yes, as I told you out of make file, it works.
&gt; The problem is something strange in the make file.

I'm sorry; I must have mis-parsed your issue, then.&#160; So just to make sure I understand:

shell$ mpif90 my_application.f90 -o my_application

Works fine, but:

shell$ make
...something that eventually invokes &quot;mpif90 my_application.f90 -o my_application&quot;

doesn't work.&#160; Right?

If you're invoking the exact same command in both cases (interactive shell and makefile), the *usual* cause of this kind of problem is that the &quot;mpif90&quot; in your Makefile is picking up a different mpif90 than the one that is picked up by your shell.&#160; Meaning: your PATH has been reset in the sub-process where &quot;make&quot; is executed, and so when make forks off &quot;mpif90&quot;, it finds a different one than the one you execute interactively in the shell.

Check what your path is and/or exactly which mpif90 is getting invoked by your Makefile.

-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19674/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19675.php">Iliev, Hristo: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19673.php">Lloyd Brown: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>In reply to:</strong> <a href="19664.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19675.php">Iliev, Hristo: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19675.php">Iliev, Hristo: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19681.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
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
