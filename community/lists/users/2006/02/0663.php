<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 14 17:50:31 2006" -->
<!-- isoreceived="20060214225031" -->
<!-- sent="Tue, 14 Feb 2006 17:50:20 -0500" -->
<!-- isosent="20060214225020" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4" -->
<!-- id="6D341260-AF31-4BFB-BE17-328A2875F8EE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="093CD7A0-E39B-4725-8F99-A19ED75AF56E_at_pitt.edu" -->
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
<strong>Date:</strong> 2006-02-14 17:50:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0664.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="0662.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0652.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0647.php">George Bosilca: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 13, 2006, at 12:25 PM, James Conway wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Let us know what happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By including --mca btl_tcp_if_include on the command line, the ring
</span><br>
<span class="quotelev1">&gt; program continues past the first round to completion. So even though
</span><br>
<span class="quotelev1">&gt; my non-ethernet interfaces were disabled (airport, firewire), one of
</span><br>
<span class="quotelev1">&gt; them seems to have been sufficiently active to get in the way. (In
</span><br>
<span class="quotelev1">&gt; fact, about a week ago I started to be suspicious of a hardware fault
</span><br>
<span class="quotelev1">&gt; on my PowerBook's airport card, and I have seen it attempting but
</span><br>
<span class="quotelev1">&gt; failing to make connections when it was supposedly disabled). The
</span><br>
<span class="quotelev1">&gt; Open MPI command line then is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun --hostfile mpi_hosts --mca btl_tcp_if_include en0 --np 2
</span><br>
<span class="quotelev1">&gt; mpi_test1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where en0 goes to the ethernet port on my PowerBook G4, and on to the
</span><br>
<span class="quotelev1">&gt; remote PowerMac.
</span><br>
<p>How odd.  That shouldn't happen -- we should be detecting that those  
<br>
IP interfaces aren't active and then not use them.
<br>
<p>Sorry for the hassle this caused you -- I'm glad we got you working,  
<br>
but I'll poke around to see if we can't fix this properly so that you  
<br>
don't need to specify btl_tcp_if_include (check out the FAQ for more  
<br>
convenient mechanisms for specifying MCA parameters, such as in the  
<br>
environment or in a file).
<br>
<p>Thanks for the report!
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0664.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="0662.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0652.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0647.php">George Bosilca: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
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
