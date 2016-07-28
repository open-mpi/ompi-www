<?
$subject_val = "Re: [OMPI users] rankfiles on really big nodes broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 15:25:34 2012" -->
<!-- isoreceived="20120120202534" -->
<!-- sent="Fri, 20 Jan 2012 13:25:25 -0700" -->
<!-- isosent="20120120202525" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rankfiles on really big nodes broken?" -->
<!-- id="E8DFEAB8-1759-435C-8B8A-DF74EB162BBC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F19C3F9.9050606_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] rankfiles on really big nodes broken?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 15:25:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18241.php">Jeff Squyres: "Re: [OMPI users] OpenMPI failed when running across two mac machines"</a>
<li><strong>Previous message:</strong> <a href="18239.php">Paul Kapinos: "[OMPI users] rankfiles on really big nodes broken?"</a>
<li><strong>In reply to:</strong> <a href="18239.php">Paul Kapinos: "[OMPI users] rankfiles on really big nodes broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18244.php">Paul Kapinos: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<li><strong>Reply:</strong> <a href="18244.php">Paul Kapinos: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see anything in the code that limits the number of procs in a rankfile. Are the attached rankfiles the ones you are trying to use? I'm wondering if there is a syntax error that is causing the problem. It would help if you could provide the complete error message output.
<br>
<p>At one time, there was a limit on the number of procs on a node - nothing to do with rankfile. That was fixed, though, and there is no real limit any more. I don't recall the precise release number where it changed in the 1.5 series - you might try updating to 1.5.4 as I'm sure it doesn't exist there.
<br>
<p><p>On Jan 20, 2012, at 12:43 PM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Hello, Open MPI developer!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, we have a really nice toy: 2 Tb RAM, 16 sockets, 128 cores.
</span><br>
<span class="quotelev1">&gt; (4x smaller Bull S6010 coupled by BCS chips to a single image machine)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On a such big box, process pinning is vital.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we tried to use the Open MPI capabilities to pin te processes. But it seem that the rankfile infrastructure does not work properly: we always get &quot;Error: Invalid argument&quot; message on the 128-core node, also if the rankfile was OK.
</span><br>
<span class="quotelev1">&gt; On a smaller node (up to 32 cores/ 64 threads) the very same rankfile (with changed node name of course) works well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe, this computer dimension is a bit too big for the pinning infrasructure now. A bug?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. see the attached .tgz for some logzz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   Rankfiles
</span><br>
<span class="quotelev1">&gt;       Rankfiles provide a means for specifying detailed information about how process ranks should  be  mapped  to nodes and how they should be bound.  Consider the following:
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.5.3
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r24532
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Mar 16, 2011
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.5.3
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r24532
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Mar 16, 2011
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.5.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; &lt;rankfiles128.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18241.php">Jeff Squyres: "Re: [OMPI users] OpenMPI failed when running across two mac machines"</a>
<li><strong>Previous message:</strong> <a href="18239.php">Paul Kapinos: "[OMPI users] rankfiles on really big nodes broken?"</a>
<li><strong>In reply to:</strong> <a href="18239.php">Paul Kapinos: "[OMPI users] rankfiles on really big nodes broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18244.php">Paul Kapinos: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<li><strong>Reply:</strong> <a href="18244.php">Paul Kapinos: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
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
