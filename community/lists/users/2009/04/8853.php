<?
$subject_val = "[OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  9 18:16:52 2009" -->
<!-- isoreceived="20090409221652" -->
<!-- sent="Thu, 09 Apr 2009 18:16:43 -0400" -->
<!-- isosent="20090409221643" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib" -->
<!-- id="49DE73CB.6090703_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-09 18:16:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8854.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8852.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8866.php">Jeff Squyres: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<li><strong>Reply:</strong> <a href="8866.php">Jeff Squyres: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI experts
<br>
<p>I had some trouble to build OpenMPI 1.3.1 on a CentOS 5.2 Linux x86_64
<br>
computer.
<br>
<p>The configure scripts seem to have changed, and work different
<br>
than before, particularly w.r.t. additional libraries like numa,
<br>
torque, and openib.
<br>
The new behavior can be a bit unexpected and puzzled me,
<br>
although eventually I could build 1.3.1.
<br>
<p>Here are my observations.
<br>
<p>1) I used to configure OpenMPI 1.2.8 and 1.3.0 with:
<br>
<p>--with-libnuma=/usr/lib64 \
<br>
--with-tm=/usr/lib64 \
<br>
--with-openib=/usr/lib64 \
<br>
<p>This worked fine for me on the same computer I am using for 1.3.1.
<br>
However, with 1.3.1 the same options fail.
<br>
Configure now tries to find the corresponding include
<br>
files on /usr/lib64/include, a directory that doesn't even exist.
<br>
The include files are actually in /usr/include
<br>
(as the old configure knew well).
<br>
<p>2) Therefore, I tried to configure with:
<br>
<p>--with-libnuma \
<br>
--with-tm \
<br>
--with-openib \
<br>
<p>Note that no directory is being pointed to.
<br>
My hope was that configure would find the libraries and includes  in
<br>
standard places (and hopefully the correct libs, 64-bit, not 32-bit).
<br>
<p>This way configure completes with no apparent error.
<br>
However, I get this funny error on the make phase:
<br>
<p>/bin/sh ../../../../libtool --tag=CC   --mode=link gcc  -DNDEBUG 
<br>
-march=amdfam10 -O3 -finline-functions -funroll-loops -mfpmath=sse 
<br>
-fno-strict-aliasing -pthread -fvisibility=hidden -module -avoid-version 
<br>
-Lyes/lib -export-dynamic   -o libmca_maffinity_libnuma.la 
<br>
maffinity_libnuma_component.lo maffinity_libnuma_module.lo -lnuma  -lnsl 
<br>
-lutil  -lm
<br>
../../../../libtool: line 4998: cd: yes/lib: No such file or directory
<br>
libtool: link: cannot determine absolute directory name of `yes/lib'
<br>
make[2]: *** [libmca_maffinity_libnuma.la] Error 1
<br>
<p><p>Note the &quot;yes/lib&quot; path.
<br>
<p>A little grep on config.log showed why the error:
<br>
<p>%grep yes config.log
<br>
<p>...
<br>
<p>OMPI_WRAPPER_EXTRA_LDFLAGS='  -Lyes/lib  '
<br>
OPAL_WRAPPER_EXTRA_LDFLAGS='-Lyes/lib  '
<br>
ORTE_WRAPPER_EXTRA_LDFLAGS=' -Lyes/lib  '
<br>
WRAPPER_EXTRA_LDFLAGS='  -Lyes/lib  '
<br>
maffinity_libnuma_CPPFLAGS=' -Iyes/include'
<br>
maffinity_libnuma_LDFLAGS=' -Lyes/lib'
<br>
#define WRAPPER_EXTRA_LDFLAGS &quot;  -Lyes/lib  &quot;
<br>
<p><p>Is this an internal &quot;yes&quot; answer to configure that
<br>
is being inadvertently caught/interpreted as a directory name?
<br>
<p>Since configure seems to have found the libraries and include files,
<br>
and completed without error,
<br>
shouldn't it also have reported the correct paths to config.log
<br>
and written them correctly to the Makefiles?
<br>
<p>3) Finally I tried this:
<br>
<p>--with-libnuma=/usr \
<br>
--with-tm=/usr \
<br>
--with-openib=/usr \
<br>
<p>This approach was suggested by Prentice Bisbal a few days ago,
<br>
when Francesco Pietra reported on this list
<br>
having a similar problem with libnuma.
<br>
<p>This seems to work fine, and OpenMPI 1.3.1 builds.
<br>
However, I have more questions:
<br>
<p>A)Is the directory name mandatory or optional in the options above?
<br>
I.e. is &quot;--with-libnuma&quot; only OK, or do I have to use
<br>
&quot;--with-libnuma=/some/directory&quot;?
<br>
<p>The results in 2) above suggest that configure finds the libraries and
<br>
includes correctly, but that it writes wrong Makefiles,
<br>
and doesn't report any error either.
<br>
<p>B) Is the syntax in 3) above the only correct possibility?
<br>
<p>C) If it is, can I rest assured that configure and make
<br>
will find the right 64-bit libraries, not 32-bit libraries
<br>
of similar name?
<br>
<p>I ask because I have /usr/lib/libnuma.so.1 (32-bit ELF),
<br>
and /usr/lib64/libnuma.so.1 (64-bit ELF), and both are in the
<br>
same /usr directory that I gave to configure (--with-libnuma=/usr).
<br>
(Well, maybe this is deferred to the compiler to decide,
<br>
whether it is a 64- or 32-bit compiler, as somehow it seemed to work.)
<br>
<p>Thank you,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8854.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8852.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8866.php">Jeff Squyres: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<li><strong>Reply:</strong> <a href="8866.php">Jeff Squyres: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
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
