<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 15 13:55:51 2007" -->
<!-- isoreceived="20070815175551" -->
<!-- sent="Wed, 15 Aug 2007 10:55:46 -0700" -->
<!-- isosent="20070815175546" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] OFED 1.2 and uDAPL" -->
<!-- id="46C33E22.4040205_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="591B452B-C57F-42F1-9E7C-4CD0677D159E_at_cisco.com" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-15 13:55:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2154.php">Tim Prins: "[OMPI devel] RML tags"</a>
<li><strong>Previous message:</strong> <a href="2152.php">Jeff Squyres: "[OMPI devel] [RFC] OFED 1.2 and uDAPL"</a>
<li><strong>In reply to:</strong> <a href="2152.php">Jeff Squyres: "[OMPI devel] [RFC] OFED 1.2 and uDAPL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I second this; it's been an annoyance here at LLNL, even for OFED v1.1, 
<br>
which they prefix into /usr.
<br>
<p>Andrew
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I just upgraded my Cisco MPI development cluster to OFED 1.2 over the  
</span><br>
<span class="quotelev1">&gt; weekend.  This morning, I discovered a fun situation with regards to  
</span><br>
<span class="quotelev1">&gt; uDAPL...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHAT: We propose adding a check into the udapl configury to disable  
</span><br>
<span class="quotelev1">&gt; automatically building the udapl BTL when on Linux/OFED.  --with- 
</span><br>
<span class="quotelev1">&gt; udapl can be specified to override the check and do the normal udapl  
</span><br>
<span class="quotelev1">&gt; configury stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: The udapl BTL is built by default on OFED 1.2 clusters (because  
</span><br>
<span class="quotelev1">&gt; the UDAPL libraries are in /lib), but the /etc/dat.conf file that  
</span><br>
<span class="quotelev1">&gt; ships in OFED 1.2 is broken such that the UDAPL BTL will emit  
</span><br>
<span class="quotelev1">&gt; warnings upon init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: config/ompi_check_udapl.m4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: ASAP -- I want this for v1.2.4 because affects all OFED 1.2 users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Thursday COB (because I think Brian's out today?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short version:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Terry, George, and Jeff propose to add a check into  
</span><br>
<span class="quotelev1">&gt; ompi_check_udapl.m4 that will disable building the udapl BTL by  
</span><br>
<span class="quotelev1">&gt; default when on Linux.  You can specify --with-udapl when on Linux to  
</span><br>
<span class="quotelev1">&gt; force the normal check-for-headers-and-libraries udapl configure  
</span><br>
<span class="quotelev1">&gt; stuff.  When not on Linux (e.g., Solaris), the normal check-for- 
</span><br>
<span class="quotelev1">&gt; headers-and-libraries configure stuff will always happen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Long version:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since OFED 1.2 [by default] installs into /usr, Open MPI's configure  
</span><br>
<span class="quotelev1">&gt; script finds the header files/libraries for both verbs and uDAPL, and  
</span><br>
<span class="quotelev1">&gt; therefore builds both the openib and udapl BTLs.  Keep in mind that  
</span><br>
<span class="quotelev1">&gt; on Linux/OFED, uDAPL is implemented as a layer on top of verbs, so it  
</span><br>
<span class="quotelev1">&gt; is not the &quot;preferred&quot; transport to use -- we want to use verbs  
</span><br>
<span class="quotelev1">&gt; (i.e., the openib BTL).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After some poking around (and checking with George/Galen), we found  
</span><br>
<span class="quotelev1">&gt; that the BTL exclusivity parameter in the openib BTL is set to  
</span><br>
<span class="quotelev1">&gt; MCA_BTL_EXCLUSIVITY_DEFAULT; the udapl BTL sets it to  
</span><br>
<span class="quotelev1">&gt; (MCA_BTL_EXCLUSIVITY_DEFAULT-10).  So that's good -- if Open MPI  
</span><br>
<span class="quotelev1">&gt; loads both BTLs, it's going to effectively ignore the udapl BTL  
</span><br>
<span class="quotelev1">&gt; (after initializing it) and use the openib BTL -- which is what we want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that OFED 1.2 ships with an /etc/dat.conf that is  
</span><br>
<span class="quotelev1">&gt; effectively broken (dat.conf is the text config file for DAT/DAPL).   
</span><br>
<span class="quotelev1">&gt; The udapl BTL attempts to open all DAPL providers, but by the default  
</span><br>
<span class="quotelev1">&gt; dat.conf in OFED 1.2, some or all of them will fail (and the UDAPL  
</span><br>
<span class="quotelev1">&gt; BTL will print warnings for each failure).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Solaris, where UDAPL *is* the high performance network, if there  
</span><br>
<span class="quotelev1">&gt; are any problems with dat.conf, users will want to know -- they will  
</span><br>
<span class="quotelev1">&gt; want to see the warnings from the UDAPL BTL.  But on Linux, you  
</span><br>
<span class="quotelev1">&gt; likely don't care about these warnings because you don't care about  
</span><br>
<span class="quotelev1">&gt; UDAPL anyway (because you almost certainly want to be using the  
</span><br>
<span class="quotelev1">&gt; openib/verbs BTL).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Terry, George, and I went through a bunch of different possible  
</span><br>
<span class="quotelev1">&gt; scenarios to fix this dichotomy, and concluded that the one that was  
</span><br>
<span class="quotelev1">&gt; the least evil was simply to disable building the udapl BTL on Linux  
</span><br>
<span class="quotelev1">&gt; by default -- you can override this default by specifying --with- 
</span><br>
<span class="quotelev1">&gt; udapl on the configure command line.  This solution has the following  
</span><br>
<span class="quotelev1">&gt; properties:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Most importantly, the default configure/build/run on Solaris and  
</span><br>
<span class="quotelev1">&gt; Linux/OFED clusters works -- it follows the Law of Least Astonishment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Avoids schitzophrenia in the UDAPL BTL trying to divine when a  
</span><br>
<span class="quotelev1">&gt; user would care about the warning messages or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If anyone *wants* the UDAPL BTL build on Linux, they'll likely  
</span><br>
<span class="quotelev1">&gt; disagree that we follow the Law of Least Astonishment, but I suspect  
</span><br>
<span class="quotelev1">&gt; that that is a fairly small group of people.  We'll add something to  
</span><br>
<span class="quotelev1">&gt; the FAQ about this issue so that at least the solution is a simple  
</span><br>
<span class="quotelev1">&gt; Google search away.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2154.php">Tim Prins: "[OMPI devel] RML tags"</a>
<li><strong>Previous message:</strong> <a href="2152.php">Jeff Squyres: "[OMPI devel] [RFC] OFED 1.2 and uDAPL"</a>
<li><strong>In reply to:</strong> <a href="2152.php">Jeff Squyres: "[OMPI devel] [RFC] OFED 1.2 and uDAPL"</a>
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
