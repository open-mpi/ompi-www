<?
$subject_val = "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 14:32:28 2009" -->
<!-- isoreceived="20090129193228" -->
<!-- sent="Thu, 29 Jan 2009 11:32:12 -0800" -->
<!-- isosent="20090129193212" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Joe Griffin: &amp;quot;Re: Cannot compile on LinuxItanium	system&amp;quot;" -->
<!-- id="1D367926756E9848BABD800E249AA5E04263E0_at_NASCMEX01.na.mscsoftware.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ED10C43789120F4F9E75FFE0BB9FB3E90F7AD03E34_at_NDJSSCC02.ndc.nasa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;<br>
<strong>From:</strong> Joe Griffin (<em>joe.griffin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-29 14:32:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7881.php">Ralph Castain: "Re: [OMPI users] Issue with PBS Pro"</a>
<li><strong>Previous message:</strong> <a href="7879.php">Ralph Castain: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>In reply to:</strong> <a href="7878.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium	system&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7916.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7916.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tony,
<br>
<p>&nbsp;
<br>
<p>I had tried just the compile line using -O0, but it did not help.  The
<br>
last
<br>
<p>assembly I actually wrote was for a Cray Y-MP I think, so I don't intend
<br>
on
<br>
<p>delving into that.
<br>
<p>&nbsp;
<br>
<p>Sorry I couldn't be more help.
<br>
<p>I do have access to what I call a Frankenstein Cluster of Itaniums (
<br>
different 
<br>
<p>manufactures and different OS's) to support our clients, so I don't mind
<br>
<p><p>testing.
<br>
<p>&nbsp;
<br>
<p>Sorry I could not help,
<br>
<p>Joe
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Iannetti, Anthony C. (GRC-RTB0)
<br>
Sent: Thursday, January 29, 2009 11:22 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on
<br>
LinuxItanium system&quot;
<br>
<p>&nbsp;
<br>
<p>Joe,
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;Intel recommends to set all of the compile flags, like CCFLAGS, to
<br>
-O2.  Other than than, we are doing nothing different than what Intel
<br>
recommends.
<br>
<p>&nbsp;
<br>
<p>When I set CCAS=ias, ./configure does not make it through the Assembler
<br>
stage.
<br>
<p>&nbsp;
<br>
<p>When I set CCAS=ias and CASFLAGS= (I am setting it to nothing), it makes
<br>
it through the Assembler config stage and fails at another point in
<br>
make.  I will send another email with the actual errors.  I thought I
<br>
would relay this information to you,
<br>
<p>&nbsp;
<br>
<p>Tony
<br>
<p>&nbsp;
<br>
<p>Anthony C. Iannetti, P.E.
<br>
<p>NASA Glenn Research Center
<br>
<p>Aeropropulsion Division, Combustion Branch
<br>
<p>21000 Brookpark Road, MS 5-10
<br>
<p>Cleveland, OH 44135
<br>
<p>phone: (216)433-5586
<br>
<p>email: Anthony.C.Iannetti_at_[hidden]
<br>
<p>&nbsp;
<br>
<p>Please note:  All opinions expressed in this message are my own and NOT
<br>
of NASA.  Only the NASA Administrator can speak on behalf of NASA.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7880/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7881.php">Ralph Castain: "Re: [OMPI users] Issue with PBS Pro"</a>
<li><strong>Previous message:</strong> <a href="7879.php">Ralph Castain: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>In reply to:</strong> <a href="7878.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium	system&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7916.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7916.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;"</a>
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
