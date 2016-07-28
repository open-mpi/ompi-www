<?
$subject_val = "[OMPI devel] Fwd: Network change of the CREST SVN/trac server (tiger)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 10:26:06 2014" -->
<!-- isoreceived="20140408142606" -->
<!-- sent="Tue, 8 Apr 2014 14:26:04 +0000" -->
<!-- isosent="20140408142604" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: Network change of the CREST SVN/trac server (tiger)" -->
<!-- id="12773DF9-A135-47B8-82A2-941A92BD103F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE5E3315-DA52-409A-9698-4E1529AC9FC3_at_indiana.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: Network change of the CREST SVN/trac server (tiger)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 10:26:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14476.php">Nathan Hjelm: "[OMPI devel] RFC: more ob1 optimizations"</a>
<li><strong>Previous message:</strong> <a href="14474.php">Roman Kotelnikov: "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI.  The SVN server will be rebooted Thursday; a short outage is expected.  See below for details.
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Kim, DongInn
</span><br>
<span class="quotelev1">&gt; Subject: Network change of the CREST SVN/trac server (tiger)
</span><br>
<span class="quotelev1">&gt; Date: April 8, 2014 10:01:46 AM EDT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The CREST SVN/trac server machine (tiger.crest.iu.edu) is requested to change its subnet and I am planning to switch its IP address for the change of the subnet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to setup the schedule to update the DNS information of the following hostnames in tiger.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - svn.crest.iu.edu
</span><br>
<span class="quotelev1">&gt; - svn.mpi-forum.org
</span><br>
<span class="quotelev1">&gt; - svn.open-mpi.org
</span><br>
<span class="quotelev1">&gt; - svn.osl.iu.edu
</span><br>
<span class="quotelev1">&gt; - svn.oscar.openclustergroup.org
</span><br>
<span class="quotelev1">&gt; - svn.scalabletools.org
</span><br>
<span class="quotelev1">&gt; - git.open-mpi.org
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The IP transition date and time:
</span><br>
<span class="quotelev1">&gt; April 10, 2014
</span><br>
<span class="quotelev1">&gt; 6:00am-7:00am Pacific US time
</span><br>
<span class="quotelev1">&gt; 7:00am-8:00am Mountain US time
</span><br>
<span class="quotelev1">&gt; 8:00am-9:00am Central US time
</span><br>
<span class="quotelev1">&gt; 9:00am-10:00am Eastern US time
</span><br>
<span class="quotelev1">&gt; 1:00pm-2:00pm GMT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The list of services that may not be available:
</span><br>
<span class="quotelev1">&gt; - Web/SVN services:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.crest.iu.edu/svn/">https://svn.crest.iu.edu/svn/</a>*
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/svn/ompi">https://svn.open-mpi.org/svn/ompi</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.mpi-forum.org/svn/mpi-forum-web/">https://svn.mpi-forum.org/svn/mpi-forum-web/</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi">https://svn.open-mpi.org/trac/ompi</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://git.open-mpi.org/trac/hwloc">https://git.open-mpi.org/trac/hwloc</a>
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tiger.crest.iu.edu (129.79.13.91 --&gt; 129.79.39.209)
</span><br>
<span class="quotelev1">&gt;    * svn.crest.iu.edu                          IU CS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tiger-virt1.crest.iu.edu (129.79.13.23 --&gt; 129.79.39.200)
</span><br>
<span class="quotelev1">&gt;    * svn.mpi-forum.org                         University of Illionis
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tiger-virt2.crest.iu.edu (129.79.13.24 --&gt; 129.79.39.201)
</span><br>
<span class="quotelev1">&gt;    * svn.open-mpi.org                          IU CS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tiger-virt3.crest.iu.edu (129.79.13.7 --&gt; 129.79.39.205)
</span><br>
<span class="quotelev1">&gt;    * svn.osl.iu.edu                            IU CS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tiger-virt4.crest.iu.edu (129.79.13.9 --&gt; 129.79.39.207)
</span><br>
<span class="quotelev1">&gt;    * svn.oscar.openclustergroup.org            IU CS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tiger-virt5.crest.iu.edu (129.79.13.13 --&gt; 129.79.39.199)
</span><br>
<span class="quotelev1">&gt;    * svn.scalabletools.org                     IU CS (?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tiger-virt6.crest.iu.edu (129.79.13.10 --&gt; 129.79.39.198)
</span><br>
<span class="quotelev1">&gt;    * git.open-mpi.org                          IU CS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have already prepared the IP transition on tiger to make the new IP addresses provide the same services on tiger so that I hope that there is no actual outage of the services other than the rebooting time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you happened to use the IP address on your cronjob or programs, please make sure that you switch it with the new one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMPORTANT
</span><br>
<span class="quotelev1">&gt; =========================================
</span><br>
<span class="quotelev1">&gt; tiger will need to reboot to kick in a new kernel and mount the NFS space with the new IP addresses at the same time.
</span><br>
<span class="quotelev1">&gt; ========================================== 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know if you have any questions or concerns about this IP transition.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; - DongInn
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="14476.php">Nathan Hjelm: "[OMPI devel] RFC: more ob1 optimizations"</a>
<li><strong>Previous message:</strong> <a href="14474.php">Roman Kotelnikov: "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<!-- nextthread="start" -->
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
