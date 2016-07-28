<?
$subject_val = "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 16:50:30 2010" -->
<!-- isoreceived="20101129215030" -->
<!-- sent="Mon, 29 Nov 2010 15:50:25 -0600" -->
<!-- isosent="20101129215025" -->
<!-- name="Nehemiah Dacres" -->
<!-- email="dacresni_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express" -->
<!-- id="AANLkTi=LSJGBUgs7G-f_ZkTPw2A1c8eX-m-7rM+N_cgo_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CF41B57.5030206_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express<br>
<strong>From:</strong> Nehemiah Dacres (<em>dacresni_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 16:50:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14931.php">Maurício Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Previous message:</strong> <a href="14929.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14927.php">Gus Correa: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the user specifically wishes to use the special debugging tools in
<br>
Solaris Studio. The flag in question seems to be -rpath according to the
<br>
logs,  It would be suspicious if this was a flag for the Solaris linker. I
<br>
don't have access to any solaris machines but I may try make a virtual
<br>
install to investigate.
<br>
<p>&lt;in reply to&gt;
<br>
<p>Hi Nehemiah
<br>
<p>Hard to tell, I never tried Sun/Oracle Studio compilers.
<br>
However, the Intel compilers, for instance, require you to setup
<br>
environment variables that include PATH and LD_LIBRARY_PATH at least.
<br>
Would this be the case with Sun Studio?
<br>
Do you have its full environment set?
<br>
<p>As for the error message,
<br>
indeed, &quot;man ld&quot; doesn't show &quot;-path&quot; as a possible option.
<br>
Would this be a &quot;Solaris thing&quot;, perhaps an option
<br>
to the Solaris linker?
<br>
<p>For what it is worth, OpenMPI compiles with gcc,g++ and gfortran,
<br>
which may be a workaround for you, if you want to stick to free compilers.
<br>
Likewise, it also compiles with Open64 compilers, although later
<br>
on I had trouble with the Open64 Fortran compiler (not to compile OpenMPI,
<br>
but MPI applications).
<br>
Do you have any specific requirement for Sun/Oracle software?
<br>
<p>OpenMPI also compiles with Intel and PGI compilers,
<br>
but those aren't free.
<br>
<p>Finally, make sure you are passing the Sun compilers to the OpenMPI
<br>
configure script correctly.
<br>
Somehow your warning messages are labeled &quot;f90&quot;, not &quot;sunf90&quot; as I
<br>
would expect, but this may be just the way Sun decided to spell their
<br>
own error messages.
<br>
<p>If you are in Rocks, better install the compilers in /share/apps,
<br>
not in /opt as it is now.
<br>
That will make the Sun compilers and their possible shared libraries
<br>
available to all nodes.
<br>
/share/apps is the right place to install mostly anything that doesn't
<br>
come in the Rocks/CentOS distribution.
<br>
<p>Good luck,
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14930/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14931.php">Maurício Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Previous message:</strong> <a href="14929.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14927.php">Gus Correa: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
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
