<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 22 22:51:13 2007" -->
<!-- isoreceived="20071023025113" -->
<!-- sent="Mon, 22 Oct 2007 22:51:08 -0400" -->
<!-- isosent="20071023025108" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI &amp;amp; uDAPL" -->
<!-- id="471D619C.6020901_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200710221521.02305.ttelford.groups_at_gmail.com" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-22 22:51:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4274.php">Daniël Mantione: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4272.php">Lourival Mendes: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="4265.php">Troy Telford: "[OMPI users] OMPI &amp; uDAPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4281.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Reply:</strong> <a href="4281.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Couple of things.
<br>
With linux I believe you need the interface instance in the 7th field of 
<br>
the /etc/dat.conf file.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;example:
<br>
<p>InfiniHost0 u1.1 nonthreadsafe default /usr/lib64/libdapl.so ri.1.1 &quot; &quot; &quot; &quot;
<br>
should be
<br>
InfiniHost0 u1.1 nonthreadsafe default /usr/lib64/libdapl.so ri.1.1 &quot;ib0 0 &quot; &quot; &quot;
<br>
<p><p>Also, I did see a problem when running with less than ofed 1.2 which I 
<br>
did not pursue because v1.2 worked. Last, it appears that you are 
<br>
running udapl 1.1, I have only ever run on 1.2 so I don't know what to 
<br>
expect.
<br>
<p>-DON
<br>
<p>Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt;OK, I've got a system set up so that it can use uDAPL over IB (! OFED, ! 
</span><br>
<span class="quotelev1">&gt;Mellanox, though) on Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Running simple dapl test programs (shamelessly pulled from the OFED tree) 
</span><br>
<span class="quotelev1">&gt;seems to verify that DAPL is in fact operating properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;After searching through the mail archives, I found a small test code by Donald 
</span><br>
<span class="quotelev1">&gt;Kerr (dat_reg.c), and compiled an ran that successfully.  When run, it 
</span><br>
<span class="quotelev1">&gt;returns the name of the DAT name (ib0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I've also been able to run programs using uDAPL with Intel MPI, for example.  
</span><br>
<span class="quotelev1">&gt;I'm fairly sure uDAPL is working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;However, when I attempt to run an MPI program over uDAPL (--mca btl 
</span><br>
<span class="quotelev1">&gt;udapl,sm,self), I receive the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WARNING: Failed to open &quot;ib0&quot; 
</span><br>
<span class="quotelev1">&gt;[DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
</span><br>
<span class="quotelev1">&gt;This may be a real error or it may be an invalid entry in the uDAPL
</span><br>
<span class="quotelev1">&gt;Registry which is contained in the dat.conf file. Contact your local
</span><br>
<span class="quotelev1">&gt;System Administrator to confirm the availability of the interfaces in
</span><br>
<span class="quotelev1">&gt;the dat.conf file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[0,1,0]: uDAPL on host n02 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I've also tried using --mca btl_udapl_if_include ib0, but that doesn't seem to 
</span><br>
<span class="quotelev1">&gt;have any effect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Interestingly enough, when I don't specify a DAT provider, and I play with the 
</span><br>
<span class="quotelev1">&gt;name in /etc/dat.conf, Open MPI seems aware of the name change; it will 
</span><br>
<span class="quotelev1">&gt;list 'failed to open &quot;newname&quot;'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;my /etc/dat.conf looks like this:
</span><br>
<span class="quotelev1">&gt;InfiniHost0 u1.1 nonthreadsafe default /usr/lib64/libdapl.so ri.1.1 &quot; &quot; &quot; &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any ideas on why I'm not able to get Open MPI to use uDAPL?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4274.php">Daniël Mantione: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4272.php">Lourival Mendes: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="4265.php">Troy Telford: "[OMPI users] OMPI &amp; uDAPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4281.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Reply:</strong> <a href="4281.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
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
