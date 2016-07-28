<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 28 09:48:18 2014" -->
<!-- isoreceived="20140328134818" -->
<!-- sent="Fri, 28 Mar 2014 13:47:06 +0000" -->
<!-- isosent="20140328134706" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC3FE48EA2_at_ALPMBAPA12.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FAD3D035-93D4-4A42-9124-9D257E7BD2FD_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)<br>
<strong>From:</strong> Sasso, John (GE Power &amp; Water, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-28 09:47:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24013.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="24009.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="24015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks again!  I tried --display-devel-map and I think it provides a bit too much info for our needs.  However, it is nice to know.
<br>
<p>BTW, some interesting behavior in using &quot;--report-bindings --bind-to-core&quot; vs &quot;--display-map&quot;.  
<br>
<p>*  If I use &quot;--report-bindings --bind-to-core&quot; but the MPI tasks on a host fail to start up, then nothing is reported.  For example, I had a problem where a job started across 4 hosts but the hosts could not communicate with one another via TCP/IP.
<br>
<p>* If I use &quot;--display-map&quot; then the mapping is shown, even in the failure case I mentioned in the last bullet.
<br>
<p>* What is nice about &quot;--report-bindings --bind-to-core&quot; over &quot;--display-map&quot; is that it will report the binding of each rank to CPU, whereas the latter will show you what  ranks are running on a given host.  For our needs, this may be sufficient, tho it would be nice to have the CPU bindings shown as well
<br>
<p>* If using &quot;--report-bindings --bind-to-core&quot; with OpenMPI 1.4.1 then the bindings on just the head node are shown.  In 1.6.1, full bindings across all hosts are shown.  (I'd have to read release notes on this...)
<br>
<p>--john
<br>
<p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, March 27, 2014 7:01 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)
<br>
<p>Oooooooh...it's Jeff's fault!
<br>
<p>Fwiw you can get even more detailed mapping info with --display-devel-map
<br>
<p>Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Mar 27, 2014, at 2:58 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 27, 2014, at 4:06 PM, &quot;Sasso, John (GE Power &amp; Water, Non-GE)&quot; &lt;John1.Sasso_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I noticed that I could not find --display-map in any of the man pages.  Intentional?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oops; nope.  I'll ask Ralph to add it...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24013.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="24009.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="24015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
