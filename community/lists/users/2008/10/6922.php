<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  9 11:51:01 2008" -->
<!-- isoreceived="20081009155101" -->
<!-- sent="Thu, 09 Oct 2008 08:53:52 -0700" -->
<!-- isosent="20081009155352" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="48EE2910.6040204_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2b5e0c120810090724s19494344s5d5caf433b24cf35_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-09 11:53:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6923.php">Terry Frankcombe: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6921.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6921.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6923.php">Terry Frankcombe: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6923.php">Terry Frankcombe: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
Brian Dobbins wrote:
<blockquote
 cite="mid2b5e0c120810090724s19494344s5d5caf433b24cf35@mail.gmail.com"
 type="cite">
  <div dir="ltr"><br>
  <div class="gmail_quote">On Thu, Oct 9, 2008 at 10:13 AM, Jeff
Squyres <span dir="ltr">&lt;<a href="mailto:jsquyres@cisco.com">jsquyres@cisco.com</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
    <div class="Ih2E3d">On Oct 9, 2008, at 8:06 AM, Sangamesh B wrote:<br>
    </div>
    <div class="Ih2E3d">
    <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">OpenMPI
: 120m 6s<br>
MPICH2 : &nbsp;67m 44s<br>
    </blockquote>
    <br>
    </div>
That seems to indicate that something else is going on -- with -np 1,
there should be no MPI communication, right?</blockquote>
  </div>
  </div>
</blockquote>
Wow.&nbsp; Yes.&nbsp; Ditto.<br>
<blockquote
 cite="mid2b5e0c120810090724s19494344s5d5caf433b24cf35@mail.gmail.com"
 type="cite">
  <div dir="ltr">
  <div class="gmail_quote">
  <div>I'd be more inclined to double-check how the Gromacs app is
being compiled in the first place</div>
  </div>
  </div>
</blockquote>
E.g.,<br>
<br>
mpicc -show<br>
<blockquote
 cite="mid2b5e0c120810090724s19494344s5d5caf433b24cf35@mail.gmail.com"
 type="cite">
  <div dir="ltr">
  <div class="gmail_quote">
  <div>Someone correct me if I'm wrong, but <i>if</i> MPICH2 embeds
optimization flags in the 'mpicc' command and OpenMPI does not, then if
he's not specifying any optimization flags in the compilation of
Gromacs, MPICH2 will pass its embedded ones on to the Gromacs compile
and be faster.</div>
  </div>
  </div>
</blockquote>
Yes, I have one established example of this.&nbsp; I built MPICH2 with
CFLAGS=-O2.&nbsp; I compiled a non-MPI code with "mpicc" (no flags) and got
optimized performance with MPICH2 but non-optimized performance with
OMPI.&nbsp; About 3x difference in performance for my particular test case.&nbsp;
Not a single bit of MPI in the test code.<br>
<blockquote
 cite="mid2b5e0c120810090724s19494344s5d5caf433b24cf35@mail.gmail.com"
 type="cite">
  <div dir="ltr">
  <div class="gmail_quote">
  <div>I'm rusty on my GCC, too, though - does it default to an O2
level, or does it default to no optimizations?</div>
  </div>
  </div>
</blockquote>
When I tried it, default gcc seemed to be no optimization.&nbsp; In my
MPICH2 "mpicc" (with optimization built in) I had to specify "mpicc
-O0" explicitly to turn optimization back off again.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6923.php">Terry Frankcombe: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6921.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6921.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6923.php">Terry Frankcombe: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6923.php">Terry Frankcombe: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
