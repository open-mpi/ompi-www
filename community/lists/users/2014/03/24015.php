<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 28 09:58:42 2014" -->
<!-- isoreceived="20140328135842" -->
<!-- sent="Fri, 28 Mar 2014 13:58:40 +0000" -->
<!-- isosent="20140328135840" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="A36D5BCB-4584-49E6-9164-FBE0374466A1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F505D9A84D1D74E9397FB427DDF95BC3FE48EA2_at_ALPMBAPA12.e2k.ad.ge.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-28 09:58:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24016.php">Rob Latham: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="24014.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="24014.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24281.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24281.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good information; thanks.
<br>
<p>The short reason for this change in behavior of the affinity options is that when we first created affinity (waaaay back in 1.0 days, no one really cared about it much, and so we just did a first attempt).  Gradually over time, affinity has become much more important.  As such, we have learned much from what our users want and how they want to use affinity.  That has caused a few changes in approaches to how we do affinity -- and because our understanding has grown, sometime it means that the changes we've made have been revolutionary (vs. evolutionary), meaning that CLI options change, behaviors change, etc.
<br>
<p>Sorry about that -- it really reflects how the whole HPC community is evolving its attitude towards affinity over time.
<br>
<p>BTW, you should be aware that Open MPI v1.8 -- i.e., the next stable series -- is scheduled to be released on Monday.  There's additional changes with regards to affinity in 1.8 (compared to the v1.6 series); much of what has been discussed on this thread has been in the context of v1.7.x (which is being renamed to 1.8 on Monday, per our &quot;feature series eventually turns into stable series&quot; versioning philosophy).
<br>
<p><p><p>On Mar 28, 2014, at 9:47 AM, &quot;Sasso, John (GE Power &amp; Water, Non-GE)&quot; &lt;John1.Sasso_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks again!  I tried --display-devel-map and I think it provides a bit too much info for our needs.  However, it is nice to know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, some interesting behavior in using &quot;--report-bindings --bind-to-core&quot; vs &quot;--display-map&quot;.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *  If I use &quot;--report-bindings --bind-to-core&quot; but the MPI tasks on a host fail to start up, then nothing is reported.  For example, I had a problem where a job started across 4 hosts but the hosts could not communicate with one another via TCP/IP.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * If I use &quot;--display-map&quot; then the mapping is shown, even in the failure case I mentioned in the last bullet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * What is nice about &quot;--report-bindings --bind-to-core&quot; over &quot;--display-map&quot; is that it will report the binding of each rank to CPU, whereas the latter will show you what  ranks are running on a given host.  For our needs, this may be sufficient, tho it would be nice to have the CPU bindings shown as well
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * If using &quot;--report-bindings --bind-to-core&quot; with OpenMPI 1.4.1 then the bindings on just the head node are shown.  In 1.6.1, full bindings across all hosts are shown.  (I'd have to read release notes on this...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --john
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, March 27, 2014 7:01 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oooooooh...it's Jeff's fault!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fwiw you can get even more detailed mapping info with --display-devel-map
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 27, 2014, at 2:58 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 27, 2014, at 4:06 PM, &quot;Sasso, John (GE Power &amp; Water, Non-GE)&quot; &lt;John1.Sasso_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I noticed that I could not find --display-map in any of the man pages.  Intentional?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Oops; nope.  I'll ask Ralph to add it...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24016.php">Rob Latham: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="24014.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="24014.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24281.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24281.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
