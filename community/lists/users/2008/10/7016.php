<?
$subject_val = "Re: [OMPI users] Problems with OpenMPI running with Rmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 12:06:23 2008" -->
<!-- isoreceived="20081017160623" -->
<!-- sent="Fri, 17 Oct 2008 11:06:16 -0500" -->
<!-- isosent="20081017160616" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with OpenMPI running with Rmpi" -->
<!-- id="18680.47096.813911.843399_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3c12769c0810170342g4d840b48gc5ba269db40dbd21_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with OpenMPI running with Rmpi<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 12:06:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7017.php">Ashley Pittman: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Previous message:</strong> <a href="7015.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>In reply to:</strong> <a href="7009.php">Simone Giannerini: "[OMPI users] Problems with OpenMPI running with Rmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7051.php">Simone Giannerini: "Re: [OMPI users] Problems with OpenMPI running with Rmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 17 October 2008 at 12:42, Simone Giannerini wrote:
<br>
| Dear all,
<br>
| 
<br>
| I managed to install successfully Rmpi 0.5-5 on a quad opteron machine (8
<br>
| cores overall) running on OpenSUSE 11.0 and Open MPI 1.5.2.
<br>
| 
<br>
| this is what I get
<br>
| 
<br>
| &gt; library(Rmpi)
<br>
| [gauss:24207] mca: base: component_find: unable to open osc pt2pt: file not
<br>
| found (ignored)
<br>
| libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
| --------------------------------------------------------------------------
<br>
| [0,0,0]: OpenIB on host gauss was unable to find any HCAs.
<br>
| Another transport will be used instead, although this may result in
<br>
| lower performance.
<br>
| --------------------------------------------------------------------------
<br>
<p>I am surprised that your googling did lead to you stumbling on dozens of
<br>
posts on this telling you that the config file
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/etc/openmpi/openmpi-mca-params.conf  	    (location for Debian etc)
<br>
<p>can be changed to explicitly setting btl to 'no openib' as in
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Disable the use of InfiniBand
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#   btl = ^openib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl = ^openib
<br>
<p>which will suppress the warning by suppressing the load of IB.  Better still,
<br>
newer Open MPI release do this by default. 
<br>
<p>| I have searched the archives and found that the following suggestion was
<br>
| given for a similar problem:
<br>
| 
<br>
| &gt; Open MPI has Infiniband module compiled but there is no IB device found
<br>
| &gt; on your host. Try to add &quot;--mca btl ^openib&quot; string to your command
<br>
| &gt; line.
<br>
<p>That's one way of suppressing it, but not the only one.
<br>
<p>| Since I am not calling mpi directly but through Rmpi  I do not know where to
<br>
| put that flag, I might contact the Rmpi mantainer, in any case, I would be
<br>
| grateful if you had further suggestions.
<br>
<p>There is nothing Rmpi can do there so contacting Dr Yu, while generally a
<br>
good idea with actual Rmpi issues, is not really advised here.
<br>
<p>Cheers, Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7017.php">Ashley Pittman: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Previous message:</strong> <a href="7015.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>In reply to:</strong> <a href="7009.php">Simone Giannerini: "[OMPI users] Problems with OpenMPI running with Rmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7051.php">Simone Giannerini: "Re: [OMPI users] Problems with OpenMPI running with Rmpi"</a>
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
