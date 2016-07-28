<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  1 19:50:02 2006" -->
<!-- isoreceived="20060601235002" -->
<!-- sent="Thu, 01 Jun 2006 17:49:53 -0600" -->
<!-- isosent="20060601234953" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="[OMPI users] openib /compiler issue?" -->
<!-- id="op.tahq5fx3ies9li_at_rygel.local" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-01 19:49:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1355.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Previous message:</strong> <a href="1353.php">Troy Telford: "[OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1366.php">Troy Telford: "Re: [OMPI users] openib /compiler issue?"</a>
<li><strong>Reply:</strong> <a href="1366.php">Troy Telford: "Re: [OMPI users] openib /compiler issue?"</a>
<li><strong>Maybe reply:</strong> <a href="1369.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openib /compiler issue?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I generally build Open MPI from a source rpm (and I'm the author of that  
<br>
srpm's spec file).  That way, Open MPI is built consistently between linux  
<br>
distros...
<br>
<p>I'm running into an issue that works on one distro; breaks on another.   
<br>
I'd like to track down where the bug is (the distro, or Open MPI)  Since  
<br>
one distro is still a prerelease version, I'm quite willing to believe  
<br>
that it's a problem with the distro, but just in case...
<br>
<p>I'm using InfiniBand (openib.org RC4), and presta's 'allred' and 'com'  
<br>
tests.  Open MPI, the IB libraries, and the test are compiled from the  
<br>
same set of source RPMS on each distro.
<br>
<p>I've got one machine, using Fedora Core 4 (gcc 4.0.0), vanilla linux  
<br>
kernel 2.6.16, and Open MPI 1.0.2.
<br>
<p>With FC4, things work fine (for a sufficiently small number of nodes --  
<br>
see ticket #40)
<br>
'mpirun -np 4 -machinefile foo allred 10 10 10'
<br>
'mpirun -np 4 -machinefile foo com -o 100'
<br>
<p>distro X (pre-release version, and I don't want to violate any NDA's I  
<br>
don't know about...), is using GCC 4.1.0, distro kernel 2.6.16, and Open  
<br>
MPI 1.0.2
<br>
<p>This time, when I try to run presta's 'allred', I receive the following:
<br>
[n1:04214] *** An error occurred in MPI_Gather
<br>
[n1:04214] *** on communicator MPI_COMM_WORLD
<br>
[n1:04214] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[n1:04214] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[n1:04215] *** An error occurred in MPI_Gather
<br>
[n1:04215] *** on communicator MPI_COMM_WORLD
<br>
[n1:04215] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[n1:04215] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>Another note:  On FC4, openib works, TCP doesn't (see ticket #41).
<br>
<p>the 'com' test ends with:
<br>
[n1:04941] *** An error occurred in MPI_Gather
<br>
[n1:04941] *** on communicator MPI_COMM_WORLD
<br>
[n1:04941] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[n1:04941] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>note:  The error is identical for TCP and openib
<br>
note:  On FC4, openib works, TCP doesn't (see ticket #41).
<br>
<p>And yes, I'm going to try out the dev snapshots of 1.0.3 and 1.1... I'm  
<br>
just not there yet...
<br>
<p>(For those tracking tickets #40 and #41 -- I know it would be nice to see  
<br>
if distro X has same the behavior I see with FC4, but I don't have the  
<br>
hardware to do any sort of scale testing with distro X.)
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1355.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Previous message:</strong> <a href="1353.php">Troy Telford: "[OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1366.php">Troy Telford: "Re: [OMPI users] openib /compiler issue?"</a>
<li><strong>Reply:</strong> <a href="1366.php">Troy Telford: "Re: [OMPI users] openib /compiler issue?"</a>
<li><strong>Maybe reply:</strong> <a href="1369.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openib /compiler issue?"</a>
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
