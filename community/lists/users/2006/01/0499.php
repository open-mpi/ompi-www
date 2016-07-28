<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 12 17:59:56 2006" -->
<!-- isoreceived="20060112225956" -->
<!-- sent="Thu, 12 Jan 2006 17:59:55 -0500 (EST)" -->
<!-- isosent="20060112225955" -->
<!-- name="Chris Gottbrath" -->
<!-- email="chrisg_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Totalview question?" -->
<!-- id="Pine.LNX.4.61.0601121749110.5091_at_papua.etnus.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43C6D54A.8090901_at_reachone.com" -->
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
<strong>From:</strong> Chris Gottbrath (<em>chrisg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-12 17:59:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0500.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="0498.php">Tom Rosmond: "[O-MPI users] Totalview question?"</a>
<li><strong>In reply to:</strong> <a href="0498.php">Tom Rosmond: "[O-MPI users] Totalview question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0513.php">Jeff Squyres: "Re: [O-MPI users] Totalview question?"</a>
<li><strong>Reply:</strong> <a href="0513.php">Jeff Squyres: "Re: [O-MPI users] Totalview question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tom, 
<br>
<p>Just saw your note so I thought I would
<br>
check this out. 
<br>
<p>I did see the behavior you describe with 
<br>
/bin/bash when I did 
<br>
<p>mpirun -tv -np 4 a.out
<br>
<p>TV shouldn't be crashing like that. Please
<br>
feel free to report that as a bug to Etnus. 
<br>
Meanwhile, I do have success with 
<br>
<p>totalview mpirun -a -np 4 a.out
<br>
<p>I don't think I have any OpenMPI 
<br>
specific tcl scripts in my .totalview
<br>
dir. 
<br>
<p>If you continue to have trouble
<br>
give us a shout here at Etnus. 
<br>
<p>We didn't have OpenMPI integrated
<br>
into our testing system so it 
<br>
isn't listed as supported but
<br>
it should be possible to get at 
<br>
least process aquisition working 
<br>
between TV 7.1.0 and OpenMPI.
<br>
<p><p>Cheers,
<br>
Chris
<br>
<p><p><p><pre>
--
Chris Gottbrath
Partner Technologies Engineer    Etnus, LLC
Chris.Gottbrath_at_[hidden]        <a href="http://www.etnus.com/">http://www.etnus.com/</a>
Voice: 508-652-7700 x7735        Fax: 508-652-7787
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0500.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="0498.php">Tom Rosmond: "[O-MPI users] Totalview question?"</a>
<li><strong>In reply to:</strong> <a href="0498.php">Tom Rosmond: "[O-MPI users] Totalview question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0513.php">Jeff Squyres: "Re: [O-MPI users] Totalview question?"</a>
<li><strong>Reply:</strong> <a href="0513.php">Jeff Squyres: "Re: [O-MPI users] Totalview question?"</a>
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
