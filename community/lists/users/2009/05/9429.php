<?
$subject_val = "Re: [OMPI users] MPI_COMM_WORLD Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 19:54:03 2009" -->
<!-- isoreceived="20090526235403" -->
<!-- sent="Tue, 26 May 2009 16:54:02 -0700" -->
<!-- isosent="20090526235402" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_WORLD Error" -->
<!-- id="4A1C811A.7040709_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="COL117-W164EA384CBC32A6EBBA870E9520_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_COMM_WORLD Error<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 19:54:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9430.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9428.php">Doug Reeder: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9427.php">mtcreekmore_at_[hidden]: "[OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9431.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Reply:</strong> <a href="9431.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Reply:</strong> <a href="9434.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
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
<a class="moz-txt-link-abbreviated" href="mailto:mtcreekmore@broncs.utpa.edu">mtcreekmore@broncs.utpa.edu</a> wrote:
<blockquote cite="midCOL117-W164EA384CBC32A6EBBA870E9520@phx.gbl"
 type="cite">
  <style>
.hmmessage P
{
margin:0px;
padding:0px
}
body.hmmessage
{
font-size: 10pt;
font-family:Verdana
}
  </style>
  <div><br>
  </div>
  <div>I and new to OpenMPI and &nbsp;have looked for this, but not getting
anywhere.</div>
  <div><br>
  </div>
  <div>I got an example program off this site:</div>
  <div><br>
  </div>
  <div>The compute PI in Fortran example.&nbsp;<br>
  </div>
  <div><a class="moz-txt-link-freetext" href="http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm">http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm</a><br>
  </div>
  <div><br>
  </div>
  <div>Compiled it with "<span class="Apple-style-span"
 style="font-family: -webkit-monospace;">mpif90" and no errors.</span></div>
  <div><font class="Apple-style-span" face="-webkit-monospace">Then
used the qsub -I and tried both executing directly and "mpirun" and
still&nbsp;receive&nbsp;these errors:</font></div>
  <div><br>
  </div>
  <div>[MGT-2-1:02994] *** An error occurred in MPI_Comm_rank</div>
  <div>[MGT-2-1:02994] *** on communicator MPI_COMM_WORLD</div>
  <div>[MGT-2-1:02994] *** MPI_ERR_COMM: invalid communicator</div>
  <div>[MGT-2-1:02994] *** MPI_ERRORS_ARE_FATAL (goodbye)</div>
  <div><br>
  </div>
  <div>Any guidance in the right direction would be&nbsp;appreciated.</div>
</blockquote>
First, the example works fine for me.<br>
<br>
You seem to be bombing in MPI_Comm_rank and before it asks you for any
input.&nbsp; I guess it's having problems with the MPI_COMM_WORLD
communicator being passed to MPI_Comm_rank?&nbsp; Maybe it's having problems
finding the mpif.h include file?&nbsp; It's finding *some* mpif.h include
file, but presumably not the right one.&nbsp; Make sure the mpif90 and
mpirun commands are the ones you think you should be getting and, if
they are, try adding -showme to the mpif90 line to see where it's
looking for the mpif.h include file.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9430.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9428.php">Doug Reeder: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9427.php">mtcreekmore_at_[hidden]: "[OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9431.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Reply:</strong> <a href="9431.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Reply:</strong> <a href="9434.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
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
