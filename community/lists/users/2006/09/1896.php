<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 26 17:01:55 2006" -->
<!-- isoreceived="20060926210155" -->
<!-- sent="Tue, 26 Sep 2006 15:01:45 -0600" -->
<!-- isosent="20060926210145" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford.groups_at_[hidden]" -->
<!-- subject="[OMPI users] DAPL setup/config help" -->
<!-- id="op.tgh7c9flzidtg1_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford.groups_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-26 17:01:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1897.php">Jeff Squyres: "Re: [OMPI users] DAPL setup/config help"</a>
<li><strong>Previous message:</strong> <a href="1895.php">Brock Palen: "[OMPI users] C --&gt; LOGICAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1897.php">Jeff Squyres: "Re: [OMPI users] DAPL setup/config help"</a>
<li><strong>Reply:</strong> <a href="1897.php">Jeff Squyres: "Re: [OMPI users] DAPL setup/config help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've never set up dapl before, however I now have a reason to try...
<br>
<p>The problem is, I can't seem to find any documentation on how to set it  
<br>
up.  I've tried the sample /etc/dat.conf (modified for the IPoIB address  
<br>
on the system), but I'm not sure I've been sucessful.
<br>
<p>I've:
<br>
* compiled from OFED 1.0
<br>
* verified the library paths listed in /etc/dat.conf are correct
<br>
* I do know that things like IP over IB, MVAPICH, Open MPI, etc. work  
<br>
fine; but they're not using DAPL
<br>
* tried the 'dapltest' and 'dtest' programs.
<br>
<p>In both cases, I receive an error to the extent of:
<br>
DAT_PROVIDER_NOT_FOUND DAT_NAME_NOT_REGISTERED
<br>
<p>Can anybody point me in the right direction (so I can RTFM and get on with  
<br>
life?)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1897.php">Jeff Squyres: "Re: [OMPI users] DAPL setup/config help"</a>
<li><strong>Previous message:</strong> <a href="1895.php">Brock Palen: "[OMPI users] C --&gt; LOGICAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1897.php">Jeff Squyres: "Re: [OMPI users] DAPL setup/config help"</a>
<li><strong>Reply:</strong> <a href="1897.php">Jeff Squyres: "Re: [OMPI users] DAPL setup/config help"</a>
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
