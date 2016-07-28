<?
$subject_val = "Re: [OMPI users] MPI Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 08:59:09 2012" -->
<!-- isoreceived="20120627125909" -->
<!-- sent="Wed, 27 Jun 2012 12:59:03 +0000" -->
<!-- isosent="20120627125903" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Problem" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC9030BDDD2_at_rz-mbx2.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1340782584.69616.YahooMailNeo_at_web125703.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 08:59:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19676.php">Xuan Wang: "[OMPI users] Reconstructed concept about a semi-automatic optimized parallel I/O with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19674.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19674.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19691.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19691.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>Could you please compare the output from &quot;mpif77/mpif90 -showme&quot; when
<br>
executed from the command line and from inside the Makefile? Could you also
<br>
check that the argument to MPI_INIT is a normal INTEGER and is not getting
<br>
some funny KIND or preprocessor treatment?
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Mohamad Ali Rostami
Sent: Wednesday, June 27, 2012 9:36 AM
To: Jeff Squyres
Cc: Open MPI Users
Subject: Re: [OMPI users] MPI Problem
 
Something strange,
 
By adding all the libraries which I found from mpif90/mpif77 --showme,
Fortran 77 version worked finally,
but Fortran 90 version still has the problem.
 
Error: There is no specific subroutine for the generic 'mpi_init' at (1)
 
any idea??
 
  _____  
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt; 
Cc: Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Monday, June 25, 2012 10:22 PM
Subject: Re: [OMPI users] MPI Problem
On Jun 25, 2012, at 3:59 PM, Mohamad Ali Rostami wrote:
&gt; &gt;    mpif90 my_application.f90 -o my_application
&gt; 
&gt; Yes, as I told you out of make file, it works.
&gt; The problem is something strange in the make file.
I'm sorry; I must have mis-parsed your issue, then.  So just to make sure I
understand:
shell$ mpif90 my_application.f90 -o my_application
Works fine, but:
shell$ make
...something that eventually invokes &quot;mpif90 my_application.f90 -o
my_application&quot;
doesn't work.  Right?
If you're invoking the exact same command in both cases (interactive shell
and makefile), the *usual* cause of this kind of problem is that the
&quot;mpif90&quot; in your Makefile is picking up a different mpif90 than the one that
is picked up by your shell.  Meaning: your PATH has been reset in the
sub-process where &quot;make&quot; is executed, and so when make forks off &quot;mpif90&quot;,
it finds a different one than the one you execute interactively in the
shell.
Check what your path is and/or exactly which mpif90 is getting invoked by
your Makefile.
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19675/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19675/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19676.php">Xuan Wang: "[OMPI users] Reconstructed concept about a semi-automatic optimized parallel I/O with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19674.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19674.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19691.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19691.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
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
