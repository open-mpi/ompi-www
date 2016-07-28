<?
$subject_val = "Re: [OMPI users] OpenMPI less fast than MPICH";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 03:12:06 2010" -->
<!-- isoreceived="20100114081206" -->
<!-- sent="Thu, 14 Jan 2010 09:12:12 +0100" -->
<!-- isosent="20100114081212" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mg.mailing-list_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI less fast than MPICH" -->
<!-- id="4B4ED1DC.4020103_at_laposte.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="85CDA548-A59C-4C6B-A6C7-7A85F4B853D5_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI less fast than MPICH<br>
<strong>From:</strong> Mathieu Gontier (<em>mg.mailing-list_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-14 03:12:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11765.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11763.php">Andreea Costea: "[OMPI users] OpenMPI checkpoint/restart"</a>
<li><strong>In reply to:</strong> <a href="11757.php">Aaron Knister: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Thank you very much to react.<br>
stdout/stderr (or the fortran equivalents) are indeed used to follow
the progression, but during my bench, they are directed in a file <i>(2&gt;$1
| tee log)</i>. But I do not understand how it can influence OpenMPI?<br>
<br>
Aaron Knister wrote:
<blockquote cite="mid:85CDA548-A59C-4C6B-A6C7-7A85F4B853D5@gmail.com"
 type="cite">
  <div>Does your application do a lot of printing to stdout/stderr?</div>
  <br>
  <div>
  <div>On Jan 11, 2010, at 8:00 AM, Mathieu Gontier wrote:</div>
  <br class="Apple-interchange-newline">
  <blockquote type="cite">
    <div bgcolor="#ffffff" text="#000000">Hi all<br>
    <br>
I want to migrate my CFD application from MPICH-1.2.4 (ch_p4 device) to
OpenMPI-1.4. Hence, I compared the two libraries compiled with my
application and I noted OpenMPI is less efficient thant MPICH on
ethernet (170min with MPICH against 200min with OpenMPI). So, I wonder
if someone has more information/explanation.<br>
    <br>
Here the configure options of OpenMPI:<br>
    <br>
    <small><i>export FC=gfortran<br>
export F77=$FC<br>
export CC=gcc<br>
export PREFIX=/usr/local/bin/openmpi-1.4<br>
./configure --prefix=$PREFIX --enable-cxx-exceptions --enable-mpi-f77
--enable-mpi-f90 --enable-mpi-cxx --enable-mpi-cxx-seek --enable-dist
--enable-mpi-profile --enable-binaries --enable-cxx-exceptions
--enable-mpi-threads --enable-memchecker --with-pic --with-threads
--with-valgrind --with-libnuma --with-openib<br>
    </i></small><br>
Despite my OpenMPI compilation supports OpenIB, I did not specified any
mca/btl options because the machine does not have access to a
Infiniband interconnect. So, I guess tcp, sm and self are used (or at
least something close).<br>
    <br>
Thank you for your help.<br>
Mathieu.
    </div>
_______________________________________________<br>
users mailing list<br>
    <a moz-do-not-send="true" href="mailto:users@open-mpi.org">users@open-mpi.org</a><br>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></blockquote>
  </div>
  <br>
  <pre wrap="">
<hr size="4" width="90%">
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11765.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11763.php">Andreea Costea: "[OMPI users] OpenMPI checkpoint/restart"</a>
<li><strong>In reply to:</strong> <a href="11757.php">Aaron Knister: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
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
