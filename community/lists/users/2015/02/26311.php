<?
$subject_val = "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  9 21:32:05 2015" -->
<!-- isoreceived="20150210023205" -->
<!-- sent="Tue, 10 Feb 2015 11:32:03 +0900" -->
<!-- isosent="20150210023203" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking" -->
<!-- id="54D96DA3.3030308_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAC-_n50+tUFR2DnDoZVPgv23P=sti8OqSVXAQXdae8Q7574EtA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-09 21:32:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26312.php">Riccardo Zese: "[OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="26310.php">Saliya Ekanayake: "Re: [OMPI users] Max Registerable Memory Warning"</a>
<li><strong>In reply to:</strong> <a href="26305.php">simona bellavista: "[OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simona,
<br>
<p>On 2015/02/08 20:45, simona bellavista wrote:
<br>
<span class="quotelev1">&gt; I have two systems A (aka Host) and B (aka Target). On A a compiler suite
</span><br>
<span class="quotelev1">&gt; is installed (intel 14.0.2), on B there is no compiler. I want to compile
</span><br>
<span class="quotelev1">&gt; openmpi on A for running it on system B (in particular, I want to use
</span><br>
<span class="quotelev1">&gt; mpirun and mpif90), so I want to have static linking to the intel
</span><br>
<span class="quotelev1">&gt; libraries. First of all, I would like to know if it is possible to do this.
</span><br>
as Ralph already wrote, there is no need to cross compile.
<br>
<p>you are building on a fedora box, and plan running on an ubuntu box,
<br>
all i can think is you might get some issues with system libraries versions.
<br>
also, since both systems have different paths, that might be a mess to build
<br>
(the simplest option is to run configure and make on system A and run
<br>
make install on system B)
<br>
<p>do you really want to use mpif90 on system B ?
<br>
since system B has no compilers, that will not work.
<br>
-static-intel means the intel runtime is linked statically.
<br>
this is necessary only if system B do not have the intel runtime installed,
<br>
and you might want to configure with
<br>
--with-wrapper-{c,cxx,fc}flags=-static-intel
<br>
<p>if you want to build ompi with static libs only, then you can configure with
<br>
--enable-static --disable-shared
<br>
<p>about the missing libraries (liblsf and libbat), i can only assume
<br>
system A has LSF installed
<br>
but not system B. in this case, you can add the --without-lsf parameter
<br>
to your configure
<br>
line.
<br>
<p>since system B is an ubuntu box, i think things would be much easier for
<br>
you if you built
<br>
an ubuntu virtual machine with the same os version, set accounts and
<br>
path the way they
<br>
are set on system B (you are root on your vm) , and build ompi on this VM.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26312.php">Riccardo Zese: "[OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="26310.php">Saliya Ekanayake: "Re: [OMPI users] Max Registerable Memory Warning"</a>
<li><strong>In reply to:</strong> <a href="26305.php">simona bellavista: "[OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
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
