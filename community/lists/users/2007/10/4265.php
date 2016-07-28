<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 22 17:21:14 2007" -->
<!-- isoreceived="20071022212114" -->
<!-- sent="Mon, 22 Oct 2007 15:21:00 -0600" -->
<!-- isosent="20071022212100" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford.groups_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI &amp;amp; uDAPL" -->
<!-- id="200710221521.02305.ttelford.groups_at_gmail.com" -->
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
<strong>Date:</strong> 2007-10-22 17:21:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4266.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Previous message:</strong> <a href="4264.php">Peter Kjellstrom: "Re: [OMPI users] SLURM vs. Torque? [OT]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4266.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Reply:</strong> <a href="4266.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Reply:</strong> <a href="4273.php">Don Kerr: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, I've got a system set up so that it can use uDAPL over IB (! OFED, ! 
<br>
Mellanox, though) on Linux.
<br>
<p>Running simple dapl test programs (shamelessly pulled from the OFED tree) 
<br>
seems to verify that DAPL is in fact operating properly.
<br>
<p>After searching through the mail archives, I found a small test code by Donald 
<br>
Kerr (dat_reg.c), and compiled an ran that successfully.  When run, it 
<br>
returns the name of the DAT name (ib0)
<br>
<p>I've also been able to run programs using uDAPL with Intel MPI, for example.  
<br>
I'm fairly sure uDAPL is working.
<br>
<p>However, when I attempt to run an MPI program over uDAPL (--mca btl 
<br>
udapl,sm,self), I receive the following error:
<br>
<p>WARNING: Failed to open &quot;ib0&quot; 
<br>
[DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
<br>
This may be a real error or it may be an invalid entry in the uDAPL
<br>
Registry which is contained in the dat.conf file. Contact your local
<br>
System Administrator to confirm the availability of the interfaces in
<br>
the dat.conf file.
<br>
<p>[0,1,0]: uDAPL on host n02 was unable to find any NICs.
<br>
<p><p>I've also tried using --mca btl_udapl_if_include ib0, but that doesn't seem to 
<br>
have any effect.
<br>
<p>Interestingly enough, when I don't specify a DAT provider, and I play with the 
<br>
name in /etc/dat.conf, Open MPI seems aware of the name change; it will 
<br>
list 'failed to open &quot;newname&quot;'
<br>
<p><p>my /etc/dat.conf looks like this:
<br>
InfiniHost0 u1.1 nonthreadsafe default /usr/lib64/libdapl.so ri.1.1 &quot; &quot; &quot; &quot;
<br>
<p><p>Any ideas on why I'm not able to get Open MPI to use uDAPL?
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4266.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Previous message:</strong> <a href="4264.php">Peter Kjellstrom: "Re: [OMPI users] SLURM vs. Torque? [OT]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4266.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Reply:</strong> <a href="4266.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Reply:</strong> <a href="4273.php">Don Kerr: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
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
