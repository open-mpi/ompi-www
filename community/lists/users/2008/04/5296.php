<?
$subject_val = "Re: [OMPI users] multi-rail failover with IB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 15:37:00 2008" -->
<!-- isoreceived="20080402193700" -->
<!-- sent="Wed, 2 Apr 2008 15:36:50 -0400" -->
<!-- isosent="20080402193650" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multi-rail failover with IB" -->
<!-- id="D2DAAE54-1F37-42DF-8DAB-AFCB1D6320E4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080402051352.GA693_at_porcupine.cita.utoronto.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] multi-rail failover with IB<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 15:36:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5297.php">Patrick Heckeler: "[OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<li><strong>Previous message:</strong> <a href="5295.php">Jeff Squyres: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>In reply to:</strong> <a href="5292.php">Robin Humble: "[OMPI users] multi-rail failover with IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5299.php">Pavel Shamis (Pasha): "Re: [OMPI users] multi-rail failover with IB"</a>
<li><strong>Reply:</strong> <a href="5299.php">Pavel Shamis (Pasha): "Re: [OMPI users] multi-rail failover with IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 2, 2008, at 1:13 AM, Robin Humble wrote:
<br>
<p><span class="quotelev1">&gt; from reading the FAQ and this list it seems OpenMPI can use multiple
</span><br>
<span class="quotelev1">&gt; InfiniBand rails by round-robining across the ports out of each node  
</span><br>
<span class="quotelev1">&gt; (as
</span><br>
<span class="quotelev1">&gt; long as they're configured to be on separate subnets (I think)).
</span><br>
<p>They can handle it if they're on the same subnet, too.  The FAQ is  
<br>
trying to say that if you *do* have multiple different air-gapped  
<br>
subnets, they must have different subnet ID's so that OMPI can compute  
<br>
reachability correctly.
<br>
<p><span class="quotelev1">&gt; can OpenMPI also deal with one of the subnets failing?
</span><br>
<span class="quotelev1">&gt; ie. will OpenMPI automatically fall back to using the last remaining
</span><br>
<span class="quotelev1">&gt; working IB port out of a node, or even fallback to GigE if all the IB
</span><br>
<span class="quotelev1">&gt; fails?
</span><br>
<p>Not in the 1.2 series.
<br>
<p>The 1.3 series *may* include &quot;APM&quot; support (automatic path migration  
<br>
-- a feature in IB).  It looks positive that that'll make the 1.3 cut,  
<br>
but I don't have definite information yet.
<br>
<p><span class="quotelev1">&gt; the reason I ask is that we're worried about switches failing in the  
</span><br>
<span class="quotelev1">&gt; IB
</span><br>
<span class="quotelev1">&gt; network and whether OpenMPI can solve all our problems for us if we
</span><br>
<span class="quotelev1">&gt; configure up 2 or more independent IB networks out of each node.
</span><br>
<p>Not for the 1.2 series, sorry.  If APM makes it into the v1.3 series,  
<br>
then yes, that'll work.
<br>
<p><span class="quotelev1">&gt; possibly this sort of failover in the MPI isn't needed with ConnectX  
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt; long as it's adaptive routing works as advertised? If so then I guess
</span><br>
<span class="quotelev1">&gt; it's not that important, and I wouldn't want to make you guys do a lot
</span><br>
<span class="quotelev1">&gt; of unecessary work :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the FAQ entry here:
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/faq/?category=ft#ft-future">http://www.open-mpi.org/faq/?category=ft#ft-future</a>
</span><br>
<span class="quotelev1">&gt; says
</span><br>
<span class="quotelev1">&gt;  - Data Reliability and network fault tolerance. Similar to those
</span><br>
<span class="quotelev1">&gt;    implemented in LA-MPI
</span><br>
<span class="quotelev1">&gt; but I don't actually know what LA-MPI implemented in this area, so  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; doesn't really help me.
</span><br>
<p><p>That stuff was *started* in OMPI, but demand for it fell off, so no  
<br>
one really completed it.
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
<li><strong>Next message:</strong> <a href="5297.php">Patrick Heckeler: "[OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<li><strong>Previous message:</strong> <a href="5295.php">Jeff Squyres: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>In reply to:</strong> <a href="5292.php">Robin Humble: "[OMPI users] multi-rail failover with IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5299.php">Pavel Shamis (Pasha): "Re: [OMPI users] multi-rail failover with IB"</a>
<li><strong>Reply:</strong> <a href="5299.php">Pavel Shamis (Pasha): "Re: [OMPI users] multi-rail failover with IB"</a>
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
