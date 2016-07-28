<?
$subject_val = "Re: [OMPI users] Heterogeneous OpenFabrics hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 04:28:48 2009" -->
<!-- isoreceived="20090127092848" -->
<!-- sent="Tue, 27 Jan 2009 10:28:43 +0100" -->
<!-- isosent="20090127092843" -->
<!-- name="Samuel Sarholz" -->
<!-- email="sarholz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heterogeneous OpenFabrics hardware" -->
<!-- id="497ED3CB.8060207_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="497E11FA.8090502_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heterogeneous OpenFabrics hardware<br>
<strong>From:</strong> Samuel Sarholz (<em>sarholz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-27 04:28:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7854.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7852.php">Ted Yu: "Re: [OMPI users] Question about compatibility issues"</a>
<li><strong>In reply to:</strong> <a href="7837.php">Don Kerr: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7855.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I can think of a few scenarios where interoperability would be helpful,
<br>
but I guess in most case you can live without.
<br>
<p>1. Some university departments buy tiny clusters (4-8 nodes) and when 
<br>
more projects/funding become available the next one. Thus ending up with 
<br>
2-4 different CPU generations or steppings and probably different HCA 
<br>
version. If your MPI program does load balancing you probably don't case 
<br>
about slightly different CPU speeds and you are glad if you can use all 
<br>
machines.
<br>
<p>2. You operate a medium to large size cluster (300 nodes +) and after 
<br>
e.g. a year few HCAs might break and you have to replace them. I can 
<br>
imagine that it is hard to get an HCA with exactly the same chipset.
<br>
If you end up with a few nodes that can't run MPI programs with the rest 
<br>
&nbsp;&nbsp;that would be unfortunate.
<br>
<p>best regards,
<br>
Samuel
<br>
<p>Don Kerr wrote:
<br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did IWG say anything about there being a chip set issue?    Example what 
</span><br>
<span class="quotelev1">&gt; if a vender, say Sun, wraps Mellanox  chips and on its own HCAs, would 
</span><br>
<span class="quotelev1">&gt; Mellanox HCA and Sun HCA work together?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 01/26/09 14:19, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The Interop Working Group (IWG) of the OpenFabrics Alliance asked me 
</span><br>
<span class="quotelev2">&gt;&gt; to bring a question to the Open MPI user and developer communities: is 
</span><br>
<span class="quotelev2">&gt;&gt; anyone interested in having a single MPI job span HCAs or RNICs from 
</span><br>
<span class="quotelev2">&gt;&gt; multiple vendors?  (pardon the cross-posting, but I did want to ask 
</span><br>
<span class="quotelev2">&gt;&gt; each group separately -- because the answers may be different)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The interop testing lab at the University of New Hampshire 
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://www.iol.unh.edu/services/testing/ofa/">http://www.iol.unh.edu/services/testing/ofa/</a>) discovered that most 
</span><br>
<span class="quotelev2">&gt;&gt; (all?) MPI implementations fail when having a single MPI job span HCAs 
</span><br>
<span class="quotelev2">&gt;&gt; from multiple vendors and/or span RNICs from multiple vendors.  I 
</span><br>
<span class="quotelev2">&gt;&gt; don't remember the exact details (and they may not be public, anyway), 
</span><br>
<span class="quotelev2">&gt;&gt; but I'm pretty sure that OMPI failed when used with QLogic and 
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox HCAs in a single MPI job.  This is fairly unsurprising, given 
</span><br>
<span class="quotelev2">&gt;&gt; how we tune Open MPI's use of OpenFabrics-capable hardware based on 
</span><br>
<span class="quotelev2">&gt;&gt; our .ini file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So my question is: does anyone want/need to support jobs that span 
</span><br>
<span class="quotelev2">&gt;&gt; HCAs from multiple vendors and/or RNICs from multiple vendors?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7853/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7854.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7852.php">Ted Yu: "Re: [OMPI users] Question about compatibility issues"</a>
<li><strong>In reply to:</strong> <a href="7837.php">Don Kerr: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7855.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
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
