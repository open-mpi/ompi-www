<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 11 17:30:18 2007" -->
<!-- isoreceived="20070411213018" -->
<!-- sent="Wed, 11 Apr 2007 17:30:08 -0400" -->
<!-- isosent="20070411213008" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi and Torque" -->
<!-- id="FF1DC84C-CAE7-48A5-9A58-043FFAA7539B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="461CCFBA.9060008_at_sara.nl" -->
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
<strong>Date:</strong> 2007-04-11 17:30:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3061.php">snj78_at_[hidden]: "Re: [OMPI users] Help with HPL and MPI"</a>
<li><strong>Previous message:</strong> <a href="3059.php">Bas van der Vlies: "[OMPI users] Get some errors when try to run hpl"</a>
<li><strong>In reply to:</strong> <a href="3057.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3064.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3064.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 11, 2007, at 8:08 AM, Bas van der Vlies wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The OMPI_CHECK_PACKAGE macro is a rather nasty macro that tries  
</span><br>
<span class="quotelev2">&gt;&gt; to  reduce the replication of checking for a header then a  
</span><br>
<span class="quotelev2">&gt;&gt; library, then  setting CFLAGS, LDFLAGS, LIBS, and all that.  There  
</span><br>
<span class="quotelev2">&gt;&gt; are two  components that use the TM libraries, so we have a  
</span><br>
<span class="quotelev2">&gt;&gt; centralized macro  that sets the configuration data for the two  
</span><br>
<span class="quotelev2">&gt;&gt; components.  The -I, -L,  -ls are set in OMPI_CHECK_PACKAGE.
</span><br>
<span class="quotelev2">&gt;&gt; In the OMPI_CHECK_TM macro, you probably want to check for pbs-  
</span><br>
<span class="quotelev2">&gt;&gt; config, then if that fails, run the OMPI_CHECK_PACKAGE stuff.  Of   
</span><br>
<span class="quotelev2">&gt;&gt; course, you might want to run the OMPI_CHECK_PACKAGE code with  
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS  and LDFLAGS set to what you get from pbs-config, to make  
</span><br>
<span class="quotelev2">&gt;&gt; sure the  libraries actually work.  The way we set flags is a bit  
</span><br>
<span class="quotelev2">&gt;&gt; weird -- you  need to set the environment variables:
</span><br>
<span class="quotelev2">&gt;&gt;    $1_CPPFLAGS
</span><br>
<span class="quotelev2">&gt;&gt;    $1_CFLAGS
</span><br>
<span class="quotelev2">&gt;&gt;    $1_LDFLAGS
</span><br>
<span class="quotelev2">&gt;&gt;    $1_LIBS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have made a crude version that uses 'pbs-config' and check uses  
</span><br>
<span class="quotelev1">&gt; the OMPI_CHECK_PACKAGE macro but in the OMPI_CHECK_PACKAGE_HEADER  
</span><br>
<span class="quotelev1">&gt; macro /include is appended if it not /usr or /usr/include. So there  
</span><br>
<span class="quotelev1">&gt; must option to prevent this (pbs-config give the right value). Then  
</span><br>
<span class="quotelev1">&gt; i do not have to set the CPPFLAGS variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_CHECK_PACKAGE_LIB:
</span><br>
<span class="quotelev1">&gt; For the library name there is also -l prepended so i can not use  
</span><br>
<span class="quotelev1">&gt; the name form 'pbs-config --libs' and it as the same problem as  
</span><br>
<span class="quotelev1">&gt; with checking the header if it is not standard then /lib is appended.
</span><br>
<p>What about assigning $1_&lt;foo&gt; directly and then passing flags that  
<br>
will be ignored to OMPI_CHECK_PACKAGE (e.g., &quot;/usr&quot;)?  I have not  
<br>
tried this at all -- just hacked this in emacs.  So it may not even  
<br>
compile -- you'll need to test it.  See new attachment.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems


</pre>
<p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3060/ompi_check_tm.m4">ompi_check_tm.m4</a>
</ul>
<!-- attachment="ompi_check_tm.m4" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3061.php">snj78_at_[hidden]: "Re: [OMPI users] Help with HPL and MPI"</a>
<li><strong>Previous message:</strong> <a href="3059.php">Bas van der Vlies: "[OMPI users] Get some errors when try to run hpl"</a>
<li><strong>In reply to:</strong> <a href="3057.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3064.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3064.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
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
