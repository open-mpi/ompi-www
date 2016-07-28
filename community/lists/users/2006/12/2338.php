<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 11 14:41:18 2006" -->
<!-- isoreceived="20061211194118" -->
<!-- sent="Mon, 11 Dec 2006 14:39:56 -0500" -->
<!-- isosent="20061211193956" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpool_gm_module error" -->
<!-- id="8899844F-CA89-4C40-A837-28FF004363F1_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="79516035-0D83-47F4-B823-87A90467998D_at_umich.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-11 14:39:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2339.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2337.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2337.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2339.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 11, 2006, at 2:34 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Yes it is a PPC based system.  The machines are duel G5 with 1 gig of
</span><br>
<span class="quotelev1">&gt; ram. I am only running 1 thread per cpu,  (not over allocating).  It
</span><br>
<span class="quotelev1">&gt; is not a maximized run, when running i see 500MB free on the nodes.
</span><br>
<span class="quotelev1">&gt; Each thread uses ~110MB.
</span><br>
Sorry to edit my own,
<br>
This is a typo each thread uses about ~160MB
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could not answer wether or not OSX and PPC 970FX  have a MMU though
</span><br>
<span class="quotelev1">&gt; im sure it would dont know why not, but thats speculation on my
</span><br>
<span class="quotelev1">&gt; part.  Also I have no idea what the memory window question is, i will
</span><br>
<span class="quotelev1">&gt; look it up on google.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; aon075:~ root# dmesg | grep GM
</span><br>
<span class="quotelev1">&gt; GM: Board at bus 6 slot 3 now attaching
</span><br>
<span class="quotelev1">&gt; GM: driver version 2.0.21_MacOSX_rc20050429075134PDT gallatin_at_g4:/tmp/
</span><br>
<span class="quotelev1">&gt; gm-2.0.21_MacOSX Fri Apr 29 11:03:48 EDT 2005
</span><br>
<span class="quotelev1">&gt; GM: gm_register_memory will be able to lock 96000 pages (375 MBytes)
</span><br>
<span class="quotelev1">&gt; GM: Unit 0 IP interface attach ok
</span><br>
<span class="quotelev1">&gt; GM: Unit 0 Loaded ok
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 11, 2006, at 2:20 PM, Reese Faucette wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have tried moving around machines that the run is done on to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same result in multiple places.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aon049.engin.umich.edu:21866] [mpool_gm_module.c:100] error(8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; registering gm memory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is on a PPC-based OSX system?  How many MPI processes per node
</span><br>
<span class="quotelev2">&gt;&gt; are you
</span><br>
<span class="quotelev2">&gt;&gt; starting?  And I assume this is a pretty maximallly sized HPL run
</span><br>
<span class="quotelev2">&gt;&gt; for the
</span><br>
<span class="quotelev2">&gt;&gt; nodes' memory?  And this system has an IOMMU, yes?  Do you know how
</span><br>
<span class="quotelev2">&gt;&gt; big its
</span><br>
<span class="quotelev2">&gt;&gt; memory window is?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you send me the output of &quot;dmesg | grep GM&quot; after loading
</span><br>
<span class="quotelev2">&gt;&gt; GM?  We're
</span><br>
<span class="quotelev2">&gt;&gt; looking for a line of the form:
</span><br>
<span class="quotelev2">&gt;&gt; GM: gm_register_memory will be able to lock XXX pages (YYY MBytes)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -r
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2339.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2337.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2337.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2339.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
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
