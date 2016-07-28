<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 15 13:50:58 2007" -->
<!-- isoreceived="20070815175058" -->
<!-- sent="Wed, 15 Aug 2007 13:50:38 -0400" -->
<!-- isosent="20070815175038" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] OFED 1.2 and uDAPL" -->
<!-- id="591B452B-C57F-42F1-9E7C-4CD0677D159E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-08-15 13:50:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2153.php">Andrew Friedley: "Re: [OMPI devel] [RFC] OFED 1.2 and uDAPL"</a>
<li><strong>Previous message:</strong> <a href="2151.php">Jeff Squyres: "[OMPI devel] Last night's MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2153.php">Andrew Friedley: "Re: [OMPI devel] [RFC] OFED 1.2 and uDAPL"</a>
<li><strong>Reply:</strong> <a href="2153.php">Andrew Friedley: "Re: [OMPI devel] [RFC] OFED 1.2 and uDAPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just upgraded my Cisco MPI development cluster to OFED 1.2 over the  
<br>
weekend.  This morning, I discovered a fun situation with regards to  
<br>
uDAPL...
<br>
<p>WHAT: We propose adding a check into the udapl configury to disable  
<br>
automatically building the udapl BTL when on Linux/OFED.  --with- 
<br>
udapl can be specified to override the check and do the normal udapl  
<br>
configury stuff.
<br>
<p>WHY: The udapl BTL is built by default on OFED 1.2 clusters (because  
<br>
the UDAPL libraries are in /lib), but the /etc/dat.conf file that  
<br>
ships in OFED 1.2 is broken such that the UDAPL BTL will emit  
<br>
warnings upon init.
<br>
<p>WHERE: config/ompi_check_udapl.m4
<br>
<p>WHEN: ASAP -- I want this for v1.2.4 because affects all OFED 1.2 users
<br>
<p>TIMEOUT: Thursday COB (because I think Brian's out today?)
<br>
<p>---------------------------------------------------------------
<br>
<p>Short version:
<br>
--------------
<br>
<p>Terry, George, and Jeff propose to add a check into  
<br>
ompi_check_udapl.m4 that will disable building the udapl BTL by  
<br>
default when on Linux.  You can specify --with-udapl when on Linux to  
<br>
force the normal check-for-headers-and-libraries udapl configure  
<br>
stuff.  When not on Linux (e.g., Solaris), the normal check-for- 
<br>
headers-and-libraries configure stuff will always happen.
<br>
<p>Long version:
<br>
-------------
<br>
<p>Since OFED 1.2 [by default] installs into /usr, Open MPI's configure  
<br>
script finds the header files/libraries for both verbs and uDAPL, and  
<br>
therefore builds both the openib and udapl BTLs.  Keep in mind that  
<br>
on Linux/OFED, uDAPL is implemented as a layer on top of verbs, so it  
<br>
is not the &quot;preferred&quot; transport to use -- we want to use verbs  
<br>
(i.e., the openib BTL).
<br>
<p>After some poking around (and checking with George/Galen), we found  
<br>
that the BTL exclusivity parameter in the openib BTL is set to  
<br>
MCA_BTL_EXCLUSIVITY_DEFAULT; the udapl BTL sets it to  
<br>
(MCA_BTL_EXCLUSIVITY_DEFAULT-10).  So that's good -- if Open MPI  
<br>
loads both BTLs, it's going to effectively ignore the udapl BTL  
<br>
(after initializing it) and use the openib BTL -- which is what we want.
<br>
<p>The problem is that OFED 1.2 ships with an /etc/dat.conf that is  
<br>
effectively broken (dat.conf is the text config file for DAT/DAPL).   
<br>
The udapl BTL attempts to open all DAPL providers, but by the default  
<br>
dat.conf in OFED 1.2, some or all of them will fail (and the UDAPL  
<br>
BTL will print warnings for each failure).
<br>
<p>On Solaris, where UDAPL *is* the high performance network, if there  
<br>
are any problems with dat.conf, users will want to know -- they will  
<br>
want to see the warnings from the UDAPL BTL.  But on Linux, you  
<br>
likely don't care about these warnings because you don't care about  
<br>
UDAPL anyway (because you almost certainly want to be using the  
<br>
openib/verbs BTL).
<br>
<p>Terry, George, and I went through a bunch of different possible  
<br>
scenarios to fix this dichotomy, and concluded that the one that was  
<br>
the least evil was simply to disable building the udapl BTL on Linux  
<br>
by default -- you can override this default by specifying --with- 
<br>
udapl on the configure command line.  This solution has the following  
<br>
properties:
<br>
<p>1. Most importantly, the default configure/build/run on Solaris and  
<br>
Linux/OFED clusters works -- it follows the Law of Least Astonishment.
<br>
<p>2. Avoids schitzophrenia in the UDAPL BTL trying to divine when a  
<br>
user would care about the warning messages or not.
<br>
<p>If anyone *wants* the UDAPL BTL build on Linux, they'll likely  
<br>
disagree that we follow the Law of Least Astonishment, but I suspect  
<br>
that that is a fairly small group of people.  We'll add something to  
<br>
the FAQ about this issue so that at least the solution is a simple  
<br>
Google search away.
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
<li><strong>Next message:</strong> <a href="2153.php">Andrew Friedley: "Re: [OMPI devel] [RFC] OFED 1.2 and uDAPL"</a>
<li><strong>Previous message:</strong> <a href="2151.php">Jeff Squyres: "[OMPI devel] Last night's MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2153.php">Andrew Friedley: "Re: [OMPI devel] [RFC] OFED 1.2 and uDAPL"</a>
<li><strong>Reply:</strong> <a href="2153.php">Andrew Friedley: "Re: [OMPI devel] [RFC] OFED 1.2 and uDAPL"</a>
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
