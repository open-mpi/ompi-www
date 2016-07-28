<?
$subject_val = "Re: [OMPI users] problem with .bashrc stetting of openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 10:26:27 2010" -->
<!-- isoreceived="20100816142627" -->
<!-- sent="Mon, 16 Aug 2010 07:25:31 -0700" -->
<!-- isosent="20100816142531" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with .bashrc stetting of openmpi" -->
<!-- id="4C694A5B.3060801_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55878.10.209.4.1.1281939295.squirrel_at_www.chem.iitb.ac.in" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with .bashrc stetting of openmpi<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-16 10:25:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14037.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14035.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>In reply to:</strong> <a href="14032.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14013.php">Jeff Squyres: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
<a class="moz-txt-link-abbreviated" href="mailto:sunita@chem.iitb.ac.in">sunita@chem.iitb.ac.in</a> wrote:
<blockquote
 cite="mid55878.10.209.4.1.1281939295.squirrel@www.chem.iitb.ac.in"
 type="cite">
  <blockquote type="cite">
    <pre wrap=""><a class="moz-txt-link-abbreviated" href="mailto:sunita@chem.iitb.ac.in">sunita@chem.iitb.ac.in</a> wrote:
    </pre>
    <blockquote type="cite">
      <pre wrap="">Dear Open-mpi users,

I installed openmpi-1.4.1 in my user area and then set the path for
openmpi in the .bashrc file as follow. However, am still getting
following
error message whenever am starting the parallel molecular dynamics
simulation using GROMACS. So every time am starting the MD job, I need
to
source the .bashrc file again.
      </pre>
    </blockquote>
    <pre wrap="">Have you set OPAL_PREFIX to /home/sunitap/soft/openmpi?
    </pre>
  </blockquote>
  <pre wrap=""><!---->How to set OPAL_PREFIX?
During the installation of openmpi, I ran configure with
--prefix=/home/sunitap/soft/openmpi
Did you mean this?
  </pre>
</blockquote>
No.&nbsp; The "OPAL_PREFIX" steps occurs after you configure, build, and
install OMPI.&nbsp; At the time that you run MPI programs, set the
"OPAL_PREFIX" environment variable to /home/sunitap/soft/openmpi.&nbsp; The
syntax depends on your shell.&nbsp; E.g., for csh:<br>
<br>
setenv OPAL_PREFIX /home/sunitap/soft/openmpi<br>
<br>
The sequence might be something like this:<br>
<br>
./configure --prefix=/home/sunitap/soft/openmpi<br>
make<br>
make install<br>
cd /home/sunitap/soft/openmpi/examples<br>
mpicc connectivity_c.c<br>
setenv OPAL_PREFIX /home/sunitap/soft/openmpi<br>
mpirun -n 2 ./connectivity_c<br>
<br>
though I didn't check all those commands out.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14037.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14035.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>In reply to:</strong> <a href="14032.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14013.php">Jeff Squyres: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
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
