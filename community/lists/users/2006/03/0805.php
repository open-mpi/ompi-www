<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  9 18:42:47 2006" -->
<!-- isoreceived="20060309234247" -->
<!-- sent="Thu, 09 Mar 2006 16:41:52 -0700" -->
<!-- isosent="20060309234152" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI and MultiRail InfiniBand" -->
<!-- id="op.s556r2fuies9li_at_rygel.lnxi.com" -->
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
<strong>Date:</strong> 2006-03-09 18:41:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0806.php">Troy Telford: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0804.php">Jeff Squyres: "Re: [OMPI users] MPI for DSP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0812.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Reply:</strong> <a href="0812.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've got a machine that has the following config:
<br>
<p>Each node has two InfiniBand ports:
<br>
&nbsp;&nbsp;* The first port is on fabric 'a' with switches for 'a'
<br>
&nbsp;&nbsp;* The second port is on fabric 'b' with separate switches for 'b'
<br>
&nbsp;&nbsp;* The two fabrics are not shared ('a' and 'b' can't communicate with one  
<br>
another)
<br>
<p>I believe that Open MPI is perfectly capable of stripeing over both fabric  
<br>
'a' and 'b', and IIRC, this is the default behavior.
<br>
<p>Does Open MPI handle the case where Open MPI puts all of its traffic on  
<br>
the first IB port (ie. fabric 'a'), and leaves the second IB port (ie.  
<br>
fabric 'b') free for other uses (I'll use NFS as a humorous example).
<br>
<p>If so, is there any magic required to configure it thusly?
<br>
<p>Troy
<br>
&nbsp;&nbsp;Telford
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0806.php">Troy Telford: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0804.php">Jeff Squyres: "Re: [OMPI users] MPI for DSP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0812.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Reply:</strong> <a href="0812.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
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
