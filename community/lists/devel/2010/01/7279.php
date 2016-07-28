<?
$subject_val = "[OMPI devel] How can I achieve node fail over";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 09:05:00 2010" -->
<!-- isoreceived="20100106140500" -->
<!-- sent="Wed, 6 Jan 2010 19:34:56 +0530" -->
<!-- isosent="20100106140456" -->
<!-- name="Sai Sudheesh" -->
<!-- email="saisudheesh_at_[hidden]" -->
<!-- subject="[OMPI devel] How can I achieve node fail over" -->
<!-- id="72522da71001060604k450a9432u48eef643ae5f996e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] How can I achieve node fail over<br>
<strong>From:</strong> Sai Sudheesh (<em>saisudheesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-06 09:04:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7280.php">Ralph Castain: "[OMPI devel] OMPI 1.4.1rc1"</a>
<li><strong>Previous message:</strong> <a href="7278.php">Eugene Loh: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7303.php">Josh Hursey: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Reply:</strong> <a href="7303.php">Josh Hursey: "Re: [OMPI devel] How can I achieve node fail over"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Just about two months ago I started experimenting with OpenMPI.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I found this piece of software very interesting.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;How can I make this software fault tolerant?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As of now I am running this software on two machines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;having quad core processors and fedora 10.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am using openmpi1.3.2.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If a remote machine fails while a parallel task running on both
<br>
the machines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is it possible to reassign that task assigned to it  to some
<br>
other node available and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue the computation instead of aborting the entire computation?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Can anybody tell me where I have to look for more information
<br>
regarding this.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have tried with FT MPI but tired of it.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have also heard of CIFTS-FTB, can I use for solving this?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is it necessary to make a source code change?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Have anybody a solution already with you?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If an application is killed by OS at the remote node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun is aborting and reports an error.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What kind of signal the remote orted is to mpirun?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;How can I handle it?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I know that I have asked a lot of questions..
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I will be thankful to you If anybody could respond with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at least some suggestions.
<br>
<p>with love
<br>
sudheesh.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7280.php">Ralph Castain: "[OMPI devel] OMPI 1.4.1rc1"</a>
<li><strong>Previous message:</strong> <a href="7278.php">Eugene Loh: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7303.php">Josh Hursey: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Reply:</strong> <a href="7303.php">Josh Hursey: "Re: [OMPI devel] How can I achieve node fail over"</a>
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
