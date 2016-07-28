<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 26 16:53:42 2006" -->
<!-- isoreceived="20060126215342" -->
<!-- sent="Thu, 26 Jan 2006 13:53:36 -0800 (PST)" -->
<!-- isosent="20060126215336" -->
<!-- name="Jonathan Day" -->
<!-- email="imipak_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] ompi spec file" -->
<!-- id="20060126215336.78305.qmail_at_web31508.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[O-MPI users] ompi spec file" -->
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
<strong>From:</strong> Jonathan Day (<em>imipak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-26 16:53:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0528.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="0526.php">Michael Kluskens: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Maybe in reply to:</strong> <a href="0495.php">Daryl W. Grunau: "[O-MPI users] ompi spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0529.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Reply:</strong> <a href="0529.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not entirely sure what the problem is with the
<br>
--with/--without flags. Within the configure script,
<br>
these flags enable/disable the setting of certain
<br>
environment variables and/or the running of certain
<br>
tests.
<br>
<p>Within the RPM spec file, these need to be given,
<br>
sure, but in many cases there will be one flag
<br>
matching up with one pre-requisite.
<br>
<p>In which case, the solution would seem to have a
<br>
metafile containing the flags, the environment
<br>
variable they set/unset, the default value and what
<br>
software is required, as a simple table.
<br>
<p>You then have two sed scripts - one that inserts the
<br>
flags + variables into the configure.in, and one that
<br>
inserts the flags + requirements into the SPEC file.
<br>
Both would be run when preparing the autoconf stuff.
<br>
<p>You then have only one place to edit, you don't have
<br>
to manually code all of the options, redundancy is
<br>
eliminated and there is no risk whatsoever of the two
<br>
files getting out of step. Oh, and because you've
<br>
cleaned out all of the common material from both
<br>
files, the files should be easier to read and
<br>
maintain.
<br>
<p>By the way, once the SPEC file is complete and
<br>
rpmlint-ed to death, it'd be good to forward the links
<br>
to the SPEC and SRPM files to the Fedora Extras folks.
<br>
<p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0528.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="0526.php">Michael Kluskens: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Maybe in reply to:</strong> <a href="0495.php">Daryl W. Grunau: "[O-MPI users] ompi spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0529.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Reply:</strong> <a href="0529.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
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
