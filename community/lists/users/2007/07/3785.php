<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 15:58:20 2007" -->
<!-- isoreceived="20070727195820" -->
<!-- sent="Fri, 27 Jul 2007 15:57:53 -0400" -->
<!-- isosent="20070727195753" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque and openmpi" -->
<!-- id="89F28D44-6D72-4C23-99A4-1825CCE47F59_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A2456D10-6ADE-4855-BCC1-9151BC32A58C_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 15:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3786.php">Jeff Squyres: "Re: [OMPI users] TCP Nagle algorithm and latency"</a>
<li><strong>Previous message:</strong> <a href="3784.php">Galen Shipman: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>In reply to:</strong> <a href="3784.php">Galen Shipman: "Re: [OMPI users] torque and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3794.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3794.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 27, 2007, at 2:48 PM, Galen Shipman wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I set up ompi before I configured Torque.  Do I need to recompile  
</span><br>
<span class="quotelev2">&gt;&gt; ompi
</span><br>
<span class="quotelev2">&gt;&gt; with appropriate torque configure options to get better integration?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If libtorque wasn't present on the machine at configure then yes, you
</span><br>
<span class="quotelev1">&gt; need to run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-tm=&lt;path&gt;
</span><br>
<p>You don't *have* to do this, of course.  If you've got it working  
<br>
with ssh, that's fine.  But the integration with torque can be better:
<br>
<p>- you can disable ssh for non-root accounts (assuming no other  
<br>
services need rsh/ssh)
<br>
- users don't have to setup ssh keys to run MPI jobs (a small thing,  
<br>
but sometimes nice when the users aren't computer scientists)
<br>
- torque knows about all processes on all nodes (not just the mother  
<br>
superior) and can therefore both track and kill them if necessary
<br>
<p>Just my $0.02...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3786.php">Jeff Squyres: "Re: [OMPI users] TCP Nagle algorithm and latency"</a>
<li><strong>Previous message:</strong> <a href="3784.php">Galen Shipman: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>In reply to:</strong> <a href="3784.php">Galen Shipman: "Re: [OMPI users] torque and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3794.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3794.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
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
