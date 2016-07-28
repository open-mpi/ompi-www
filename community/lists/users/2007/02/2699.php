<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 14 17:49:24 2007" -->
<!-- isoreceived="20070214224924" -->
<!-- sent="Wed, 14 Feb 2007 17:49:11 -0500" -->
<!-- isosent="20070214224911" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] first time user - can run mpi job SMP but not over cluster" -->
<!-- id="12983414-7800-4812-9915-5D5871A2F4C2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8C847DB1-2B03-452D-8FFF-D05647D40B96_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-02-14 17:49:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2700.php">Scott Atchley: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<li><strong>Previous message:</strong> <a href="2698.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2696.php">Brian W. Barrett: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2698.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Brian is referring to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/12852">https://svn.open-mpi.org/trac/ompi/changeset/12852</a>
<br>
<p><p><p>On Feb 14, 2007, at 1:02 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 14, 2007, at 10:50 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 14, 2007, at 12:43 PM, Adrian Knoth wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Blah.  We definitely need to work on our error messages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think we could use gai_strerror(3) for this. If we could agree to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rid of SUSv2 and rely on RFC 3493 ;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would not be too difficult to add gai_strerror() checking into
</span><br>
<span class="quotelev2">&gt;&gt; configure; that makes it portable everywhere (i.e., we can have code
</span><br>
<span class="quotelev2">&gt;&gt; paths for systems that do and do not have gai_strerror()).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Patches would be happily accepted.  :D
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check the trunk...  Already gives an error message saying something
</span><br>
<span class="quotelev1">&gt; reasonable...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI Team, CCS-1
</span><br>
<span class="quotelev1">&gt;    Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2700.php">Scott Atchley: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<li><strong>Previous message:</strong> <a href="2698.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2696.php">Brian W. Barrett: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2698.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
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
