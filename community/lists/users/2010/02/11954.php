<?
$subject_val = "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  1 05:40:47 2010" -->
<!-- isoreceived="20100201104047" -->
<!-- sent="Mon, 01 Feb 2010 11:41:23 +0100" -->
<!-- isosent="20100201104123" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mg.mailing-list_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3" -->
<!-- id="4B66AFD3.2000307_at_laposte.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F6C607FC-B732-4633-B9B6-AFE3F32AD5ED_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3<br>
<strong>From:</strong> Mathieu Gontier (<em>mg.mailing-list_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-01 05:41:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11955.php">Josh Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11953.php">Kapil Arya: "[OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11893.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
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
Thank you for all these detailled information. <br>
<br>
My configuration options are:<br>
<small><font face="Courier 10 Pitch">./configure --prefix=$PREFIX
--enable-static --enable-shared --enable-cxx-exceptions
--enable-mpi-f77 --disable-mpi-f90 --disable-mpi-cxx
--disable-mpi-cxx-seek --enable-mpi-profile --enable-binaries
--enable-mpi-threads --enable-memchecker --disable-debug --with-pic
--with-threads --with-libnuma --with-openib --with-sge</font></small> <br>
<br>
So, maybe you will have an explaination about my runtime error wehn I
use gcc-3.4...<br>
<br>
I also have a strange behavior using gcc-4.1: using tcp, OpenMPI is
really less fast than MPICH-1.2.4 (71min against 59 on a 4 process
computation). I look for information in the mailling list archive, but
I did not find any aplanation. I wonder if the tcp device is well
optimized, or if more processes must be involved, etc. You maybe have
an idea? <br>
<br>
Thank you again for your help. <br>
Mathieu.<br>
<br>
Jeff Squyres wrote:
<blockquote cite="mid:F6C607FC-B732-4633-B9B6-AFE3F32AD5ED@cisco.com"
 type="cite">
  <pre wrap="">On Jan 26, 2010, at 4:22 AM, Mathieu Gontier wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">1/ I rebuilt without --enable-dist (more secured indeed) and with explicit --without-openib/--with-openib : behaviors are better. Great.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Excellent.  I didn't mention it in my prior email, but our configure behaviors are generally:

--with-&lt;foo&gt;: Build with foo support.  If foo support is not available, fail/abort configure
--without-&lt;foo&gt;: Don't even check for foo support; don't build it at all.
neither: check for foo support.  If foo support is available, build it.  If not available, skip it.

  </pre>
  <blockquote type="cite">
    <pre wrap="">2/ Yes, my PATH and LD_LIBRARY_PATH are correctly set
3/ There certainly were previous installations of OpenMPI on this machine, but not in the same directory; before rebuilt, I correctly uninstall the previous installations (thank you for the tip)
4/ Is there a way to have the list of the plugins in OFED?
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Not really.  The verbs library (the "native" networking API for Openfabrics) has plugins similar to Open MPI, but they don't have an ompi_info-like command that shows what plugins are available.  IIRC, verbs has only 1 type a plugin: to service an underlying device type.  IIRC, the names of the drivers are:

- nes: NetEffect / Intel RNICs
- cxgb3: Chelsio T3 RNICs
- mlx: Mellanox ConnectX HCAs
- mthca: Mellanox earlier HCAs
- ipath: QLogic HCAs

That's off the top of my head and it may not be a comprehensive list.  Check the installed software on your machine to see what you have.

  </pre>
  <blockquote type="cite">
    <pre wrap="">5/ Yes, good messages about the device will be welcome, but with 1/ it is really better now
6/ The message is really more explicit explained like that (thanks)
7/ I built both my small test and OpenMPI-1.4.1 directly on my cluster with gcc-3.4 and I still have this error. Do you have any idea where the problem could come from? 

  opal_memchecker_base_select failed
  --&gt; Returned value -13 instead of OPAL_SUCCESS
    </pre>
  </blockquote>
  <pre wrap=""><!---->
That's an odd one.  Can you send your exact configure line again, and perhaps the output from configure?  (please compress -- see <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>).

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11955.php">Josh Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11953.php">Kapil Arya: "[OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11893.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
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
