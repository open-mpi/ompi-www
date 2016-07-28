<?
$subject_val = "Re: [OMPI users] ifort and gfortran module";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 03:58:36 2009" -->
<!-- isoreceived="20090723075836" -->
<!-- sent="Thu, 23 Jul 2009 12:27:04 +0330 (IRST)" -->
<!-- isosent="20090723085704" -->
<!-- name="rahmani" -->
<!-- email="m_rahmani56_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ifort and gfortran module" -->
<!-- id="23999777.163441248339424115.JavaMail.root_at_mta.iut.ac.ir" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20090720174735.GB24042_at_stikine.its.sfu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] ifort and gfortran module<br>
<strong>From:</strong> rahmani (<em>m_rahmani56_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 04:57:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10048.php">Ralph Castain: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10046.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10017.php">Martin Siegert: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Martin
<br>
in your following solution I have a question:
<br>
in step2. move the Fortran module to the directory ...
<br>
what is &quot;Fortran module&quot;
<br>
in step3. we don't need to install openmpi?
<br>
thanks
<br>
<p><p>----- Original Message -----
<br>
From: &quot;Martin Siegert&quot; &lt;siegert_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Monday, July 20, 2009 1:47:35 PM (GMT-0500) America/New_York
<br>
Subject: Re: [OMPI users] ifort and gfortran module
<br>
<p>Hi,
<br>
<p>I want to avoid separate MPI distributions since we compile many
<br>
MPI software packages. Having more than one MPI distribution
<br>
(at least) doubles the amount of work.
<br>
<p>For now I came up with the following solution:
<br>
<p>1. compile openmpi using gfortran as the Fortran compiler
<br>
&nbsp;&nbsp;&nbsp;and install it in /usr/local/openmpi
<br>
2. move the Fortran module to the directory
<br>
&nbsp;&nbsp;&nbsp;/usr/local/openmpi/include/gfortran. In that directory
<br>
&nbsp;&nbsp;&nbsp;create softlinks to the files in /usr/local/openmpi/include.
<br>
3. compile openmpi using ifort and install the Fortran module in
<br>
&nbsp;&nbsp;&nbsp;/usr/local/openmpi/include.
<br>
4. in /usr/local/openmpi/bin create softlinks mpif90.ifort
<br>
&nbsp;&nbsp;&nbsp;and mpif90.gfortran pointing to opal_wrapper. Remove the
<br>
&nbsp;&nbsp;&nbsp;mpif90 softlink.
<br>
5. Move /usr/local/openmpi/share/openmpi/mpif90-wrapper-data.txt
<br>
&nbsp;&nbsp;&nbsp;to /usr/local/openmpi/share/openmpi/mpif90.ifort-wrapper-data.txt.
<br>
&nbsp;&nbsp;&nbsp;Copy the file to
<br>
&nbsp;&nbsp;&nbsp;/usr/local/openmpi/share/openmpi/mpif90.gfortran-wrapper-data.txt
<br>
&nbsp;&nbsp;&nbsp;and change the line includedir=${includedir} to
<br>
&nbsp;&nbsp;&nbsp;includedir=${includedir}/gfortran
<br>
6. Create a wrapper script /usr/local/openmpi/bin/mpif90:
<br>
<p>#!/bin/bash
<br>
OMPI_WRAPPER_FC=`basename $OMPI_FC 2&gt; /dev/null`
<br>
if [ &quot;$OMPI_WRAPPER_FC&quot; = 'gfortran' ]; then
<br>
&nbsp;&nbsp;&nbsp;exec $0.gfortran &quot;$@&quot;
<br>
else
<br>
&nbsp;&nbsp;&nbsp;exec $0.ifort &quot;$@&quot;
<br>
fi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10048.php">Ralph Castain: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10046.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10017.php">Martin Siegert: "Re: [OMPI users] ifort and gfortran module"</a>
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
