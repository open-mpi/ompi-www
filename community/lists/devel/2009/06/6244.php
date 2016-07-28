<?
$subject_val = "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 16:15:41 2009" -->
<!-- isoreceived="20090615201541" -->
<!-- sent="Mon, 15 Jun 2009 13:15:44 -0700" -->
<!-- isosent="20090615201544" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option" -->
<!-- id="4A36ABF0.30702_at_sun.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="633137.81642.qm_at_web8707.mail.in.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-15 16:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6245.php">Nifty Tom Mitchell: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6243.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6243.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6245.php">Nifty Tom Mitchell: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Leo P. wrote:
<blockquote cite="mid633137.81642.qm@web8707.mail.in.yahoo.com"
 type="cite">
  <style type="text/css"><!-- DIV {margin:0px;} --></style>
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">
  <div>Thanks for the information.  And i had already clicked on the
"Show All" button in the profiler before i send an email to the group. 
But it did not work :( <br>
  </div>
  </div>
</blockquote>
Okay.  Hmm.  For me, when I try Analyzer, I don't see any of the
internals of MPI.  Then, when I "Show All", all the internal OMPI
layers are exposed:  PML, opal_progress, BTL, etc.<br>
<blockquote cite="mid633137.81642.qm@web8707.mail.in.yahoo.com"
 type="cite">
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">Also
Eugene, can you please help me understand what does turning on -g
option mean. Currently i am building the system with the following
option <br>
  <br>
./configure --with-devel-headers --enable-trace --enable-mpi-profile
--enable-mem-debug --enable-debug<br>
  <br>
Do i need to add something additional here ?<br>
  </div>
  </div>
</blockquote>
I don't know.  To turn on -g, I add it via environment variables. 
E.g., to build OMPI with Sun Studio compilers, I use:<br>
<br>
      setenv CC          cc<br>
      setenv CXX         CC<br>
      setenv F77         f77<br>
      setenv FC          f90<br>
      setenv CFLAGS      "-fast -xarch=native -g -m64"<br>
      setenv CXXFLAGS    "-fast -xarch=native -g -m64"<br>
      setenv FFLAGS      "-fast -xarch=native -g -m64"<br>
      setenv FCFLAGS     "-fast -xarch=native -g -m64"<br>
<br>
With GCC compilers, I use:<br>
<br>
      setenv CFLAGS      "-O -g -m64"<br>
      setenv CXXFLAGS    "-O -g -m64"<br>
      setenv FFLAGS      "-O -g -m64"<br>
      setenv FCFLAGS     "-O -g -m64"<br>
<br>
I don't know if that's politically correct or whatever, but that's what
I did.  Then:<br>
<br>
    ./configure                         \<br>
      --with-mpi-param_check=never      \<br>
      --disable-mpi-cxx                 \<br>
      --disable-mpi-cxx-seek            \<br>
      --enable-mpirun-prefix-by-default \<br>
      --prefix=blahblahblah<br>
<br>
  make all<br>
  make install<br>
<br>
That seems to work for me.  Doesn't matter if I build OMPI and my MPI
code with GCC or with Sun Studio compilers.  I just use Sun Studio
Performance Analyzer, turn on "Show All", and see where time is spent
in the internal OMPI layers.<br>
<blockquote cite="mid633137.81642.qm@web8707.mail.in.yahoo.com"
 type="cite">
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">Also
i don't understand what you mean by tool ecosystem.  [I am a complete
newbie ]<br>
  </div>
  </div>
</blockquote>
That's a little unrelated.  It means the opinion that OMPI is just MPI,
without a bunch of tools (debuggers, performance analysis, etc.), that
go along with it.  It's not really fair since you can use TotalView
debugging, VampirTrace, PERUSE, etc. with OMPI.  There's a subjective
judgment about whether all those things are well integrated together or
just add-ons.  E.g., with MPICH, they have MPE extensions, the Jumpshot
tool, etc.  It's all understood to be one set of software.  (Yipes, I
hope I don't start too controversial an e-mail storm here.  Again, it's
not an entirely fair assessment of OMPI.  I guess I just mean there is
no such thing as *THE* OMPI performance analysis tool.  OMPI is MPI,
and you have to get a tool to work with it.)<br>
<blockquote cite="mid633137.81642.qm@web8707.mail.in.yahoo.com"
 type="cite">
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">BTW
if you are sending Nik's phone number, i like to get yours also. Just
in case Nik is not picking up his phone. :) <br>
  </div>
  </div>
</blockquote>
For now, you can just send Nik or me e-mail offline.  Indeed, maybe
you, Nik, and I just take this offline.<br>
<blockquote cite="mid633137.81642.qm@web8707.mail.in.yahoo.com"
 type="cite">
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">Anyways
if there is anything i can do to contribute please do let me know? I
would love to a part of this great community.</div>
  </div>
</blockquote>
Maybe some FAQ entries to help other users/developers benefit from your
experience once you've learned something you'd like to report.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6245.php">Nifty Tom Mitchell: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6243.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6243.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6245.php">Nifty Tom Mitchell: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
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
