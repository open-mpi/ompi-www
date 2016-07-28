<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  8 10:06:52 2006" -->
<!-- isoreceived="20061108150652" -->
<!-- sent="Wed, 8 Nov 2006 07:06:45 -0800 (PST)" -->
<!-- isosent="20061108150645" -->
<!-- name="shane kennedy" -->
<!-- email="kennedy_shane_at_[hidden]" -->
<!-- subject="[OMPI users] are there any gotchas to running over myrinet" -->
<!-- id="829768.85728.qm_at_web30303.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> shane kennedy (<em>kennedy_shane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-08 10:06:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2157.php">Brian Barrett: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
<li><strong>Previous message:</strong> <a href="2155.php">Hugh Merz: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2157.php">Brian Barrett: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
<li><strong>Reply:</strong> <a href="2157.php">Brian Barrett: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i've run my mm5 weather modeling app over mpich gig-e
<br>
&amp; myrinet, &amp; open-mpi gig-e.  when i tried open-mpi
<br>
over myrinet, i was able to compile &amp; run w/o issue,
<br>
but i get no net traffic over the myrinet switch.  the
<br>
job cranks up the cpu's but never completes.  i'm
<br>
using the myrinet MX driver.  i have the myrinet libs
<br>
set in both LD_LIBRARY_PATH &amp; the ld.so.conf file. 
<br>
any advice/suggestions would be greatly appreciated. 
<br>
i've listed my compile options below:
<br>
<p><p>MCC       = $(LINUX_MPIHOME)/bin/mpicc
<br>
MFC       = $(LINUX_MPIHOME)/bin/mpif90
<br>
MLD       = $(LINUX_MPIHOME)/bin/mpif90
<br>
FCFLAGS   = -xP -O3 -DDEC_ALPHA -convert big_endian
<br>
-I/raid1/pchilds/mm5/include
<br>
-I/raid1/pchilds/mm5/MM5/include
<br>
-I$(LINUX_MPIHOME)/include
<br>
LDOPTIONS =  -tpp7 -axP -pc32 -convert big_endian
<br>
CPPFLAGS  = -DDEC_ALPHA -traditional -DMPI -Dlinux
<br>
CFLAGS    = -DDEC_ALPHA -DMPI
<br>
-I$(LINUX_MPIHOME)/include -DSGI_IA64
<br>
<p><p><p><p>&nbsp;
<br>
____________________________________________________________________________________
<br>
Yahoo! Music Unlimited
<br>
Access over 1 million songs.
<br>
<a href="http://music.yahoo.com/unlimited">http://music.yahoo.com/unlimited</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2157.php">Brian Barrett: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
<li><strong>Previous message:</strong> <a href="2155.php">Hugh Merz: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2157.php">Brian Barrett: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
<li><strong>Reply:</strong> <a href="2157.php">Brian Barrett: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
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
